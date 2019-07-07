<?php

namespace Cloudinary {

    const RAW_FILE = "tests/docx.docx";
    const TEST_IMG = "tests/logo.png";
    const TEST_ICO = "tests/favicon.ico";
    const TEST_PRESET_NAME = 'test_preset';
    const LOGO_SIZE = 3381;
    define("SUFFIX", getenv("TRAVIS_JOB_ID") ?: rand(11111, 99999));
    define('TEST_TAG', 'cloudinary_php');
    define('UNIQUE_TEST_TAG', TEST_TAG . "_" . SUFFIX);
    define('UNIQUE_TEST_ID', UNIQUE_TEST_TAG);
    define('UNIQUE_TEST_SPRITE_TAG', UNIQUE_TEST_TAG . "_sprite");
    define('UNIQUE_TEST_FOLDER', UNIQUE_TEST_TAG . "_folder");

    /**
     * Class Curl
     * Allows mocking Curl operations in the tests
     *
     * @package Cloudinary
     */
    class Curl
    {
        /** @var  Curl the instance used in the tests. Either the original Curl object or a stubbed version */
        public static $instance;
        /** @var array|null collects all the parameters of the curl request */
        public $parameters = null;
        /** @var array|null keeps the result of `curl_exec` */
        public $result = null;
        public $apiResponse;
        public $url;

        public function __construct()
        {
            $this->parameters = array();
            $this->apiResponse = <<<END
HTTP/1.1 100 Continue

HTTP/1.1 200 OK
Cache-Control: max-age=0, private, must-revalidate
Content-Type: application/json; charset=utf-8
Date: Wed, 01 Jun 2016 19:44:32 GMT
ETag: "ed198f38b655b997725facd2ad4a8341"
Server: cloudinary
Status: 200 OK
X-FeatureRateLimit-Limit: 5000
X-FeatureRateLimit-Remaining: 4931
X-FeatureRateLimit-Reset: Wed, 01 Jun 2016 20:00:00 GMT
X-Request-Id: ed5691d50f137e37
X-UA-Compatible: IE=Edge,chrome=1
Content-Length: 482
Connection: keep-alive

{"public_id":"oej8n7ezhwmk1fp1xqfd"}
END;
            $this->apiResponse = str_replace("\n", "\r\n", $this->apiResponse);

            $this->uploadResponse = '{"public_id":"oej8n7ezhwmk1fp1xqfd"}';
        }

        public static function mockApi($test)
        {
            self::mockRequest($test, Curl::$instance->apiResponse);
        }

        public static function mockUpload($test)
        {
            self::mockRequest($test, Curl::$instance->uploadResponse);
        }

        /**
         * @param \PHPUnit\Framework\TestCase $test Test case to mock
         * @param $mocked_response
         */
        public static function mockRequest($test, $mocked_response)
        {
            Curl::$instance = $test
                ->getMockBuilder("\\Cloudinary\\Curl")
                ->setMethods(array("exec", "getinfo"))
                ->getMock();

            Curl::$instance
                ->method("exec")
                ->will($test->returnValue($mocked_response));

            Curl::$instance
                ->method("getinfo")
                ->will($test->returnValue(200));
        }

        public function exec($ch)
        {
            $this->result = \curl_exec($ch);
            return $this->result;
        }

        public function setopt($ch, $option, $value)
        {
            $this->parameters[$option] = $value;
            return $this->globalSetopt($ch, $option, $value);
        }

        public function globalSetopt($ch, $option, $value)
        {
            return \curl_setopt($ch, $option, $value);
        }

        /**
         * When stubbing exec() this function must be stubbed too to return code
         *
         * @inheritdoc
         */
        public function getinfo($ch, $opt)
        {
            return \curl_getinfo($ch, $opt);
        }

        public function init($url = null)
        {
            $this->url = $url;
            return \curl_init($url);
        }

        /**
         * Returns the option that was set in the curl object
         * @param string $option the name of the option
         * @return mixed the value of the option
         */
        public function getopt($option)
        {
            return $this->parameters[$option];
        }

        public function http_method()
        {
            if (array_key_exists(CURLOPT_CUSTOMREQUEST, $this->parameters)) {
                return Curl::$instance->getopt(CURLOPT_CUSTOMREQUEST);
            } else {
                $method_array = array_keys(
                    array_intersect_key(
                        $this->parameters,
                        array("CURLOPT_POST" => 0, "CURLOPT_PUT" => 0, "CURLOPT_HTTPGET" => 0)
                    )
                );
                if (count($method_array) > 0) {
                    return preg_replace("/CURLOPT_(HTTP)?/", "", $method_array[0]);
                } else {
                    return "POST";
                }
            }
        }

        public function url_path()
        {
            return parse_url($this->url, PHP_URL_PATH);
        }

        /**
         * Returns the POST fields that were meant to be sent to the server
         * @return array an array of field name => value
         */
        public function fields()
        {
            if ($this->http_method() == "GET") {
                parse_str(parse_url($this->url, PHP_URL_QUERY), $params);
                return $params;
            } else {
                return $this->parameters[CURLOPT_POSTFIELDS];
            }
        }
    }

    Curl::$instance = new Curl();

    // Override global curl functions

    function curl_init($url = null)
    {
        return Curl::$instance->init($url);
    }

    function curl_exec($ch)
    {
        $result = Curl::$instance->exec($ch);
        return $result;
    }

    function curl_setopt($ch, $option, $value)
    {
        return Curl::$instance->setopt($ch, $option, $value);
    }

    function curl_getinfo($ch, $opt)
    {
        return Curl::$instance->getinfo($ch, $opt);
    }


    /**
     * @param $test
     * @param $name
     * @param $expectedValue
     * @param string $message
     */
    function assertParam($test, $name, $expectedValue = null, $message = '')
    {
        $fields = Curl::$instance->fields();
        if (strlen($message) == 0) {
            $message = "should support the '$name' parameter";
        }
        $test->assertArrayHasKey($name, $fields, $message);
        if ($expectedValue != null) {
            $test->assertEquals($expectedValue, $fields[$name]);
        }
    }

    function assertJson($test, $actualValue, $expectedValue = null, $message = '')
    {
        if (strlen($message) == 0) {
            $message = "should coorectly encode JSON parameters";
        }
        $test->assertJsonStringEqualsJsonString($actualValue, $expectedValue, $message);
    }

    function assertNoParam($test, $name, $message = '')
    {
        $fields = Curl::$instance->fields();
        $test->assertArrayNotHasKey($name, $fields, $message);
    }

    function assertPost($test, $message = "http method should be POST")
    {
        $test->assertEquals("POST", Curl::$instance->http_method(), $message);
    }

    function assertPut($test, $message = "http method should be PUT")
    {
        $test->assertEquals("PUT", Curl::$instance->http_method(), $message);
    }

    function assertGet($test, $message = "http method should be GET")
    {
        $test->assertEquals("GET", Curl::$instance->http_method(), $message);
    }

    function assertDelete($test, $message = "http method should be DELETE")
    {
        $test->assertEquals("DELETE", Curl::$instance->http_method(), $message);
    }

    function assertUrl($test, $path, $message = '')
    {
        $cloud_name = \Cloudinary::config_get("cloud_name");
        $test->assertEquals("/v1_1/" . $cloud_name . $path, Curl::$instance->url_path(), $message);
    }

    function assertHasHeader($test, $header, $message = '')
    {
        $headers = Curl::$instance->getopt(CURLOPT_HTTPHEADER);
        $test->assertTrue(is_array($headers), $message);
        $names = array();
        foreach ($headers as $h) {
            $chunks = explode(":", $h);
            // header names are case-insensitive according to rfc7230
            $names[] = strtolower(trim($chunks[0]));
        }
        $test->assertContains(strtolower($header), $names, $message);
    }
}
