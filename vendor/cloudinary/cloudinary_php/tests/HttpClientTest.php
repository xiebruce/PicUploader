<?php

namespace Cloudinary;

use Cloudinary;
use PHPUnit\Framework\TestCase;

/**
 * Class HelpersTest
 * @package Cloudinary
 */
class HttpClientTest extends TestCase
{
    protected static $http_client_test_id;

    /**
     * @var HttpClient
     */
    protected $httpClient;

    public static function setUpBeforeClass()
    {
        \Cloudinary::reset_config();

        if (!Cloudinary::config_get("api_secret")) {
            self::markTestSkipped('Please setup environment for Helpers test to run');
        }

        self::$http_client_test_id = "httpclient_test_" . UNIQUE_TEST_ID;

        Uploader::upload(TEST_IMG, ["public_id" => self::$http_client_test_id]);
    }

    public static function tearDownAfterClass()
    {
        if (!Cloudinary::config_get("api_secret")) {
            self::fail("You need to configure the cloudinary api for the tests to work.");
        }

        $api = new Cloudinary\Api();

        try {
            $api->delete_resources([self::$http_client_test_id]);
        } catch (\Exception $e) {
        }
    }

    protected function setUp()
    {
        $this->httpClient = new HttpClient();
    }


    /**
     * @throws Error
     */
    public function testHttpClientGetJSON()
    {
        $json_options = ['width'=> 'auto:breakpoints:json'];
        $json_url = Cloudinary::cloudinary_url(self::$http_client_test_id, $json_options);
        $json = $this->httpClient->getJSON($json_url);

        $this->assertArrayHasKey('breakpoints', $json);
        $this->assertTrue(is_array($json['breakpoints']));
    }

    /**
     * Should throw Cloudinary\Error on invalid or non JSON reponse
     */
    public function testHttpClientGetJSONNonJSON()
    {
        $url = Cloudinary::cloudinary_url(self::$http_client_test_id);

        $message = "";

        try {
            $this->httpClient->getJSON($url);
            $this->fail("Cloudinary\Error expected");
        } catch (Cloudinary\Error $e) {
            $message = $e->getMessage();
        }

        self::assertStringStartsWith("Error parsing server response", $message);
    }

    /**
     * Should throw Cloudinary\Error on invalid or non existing URL
     */
    public function testHttpClientGetJSONInvalidURL()
    {
        $url = Cloudinary::cloudinary_url(self::$http_client_test_id . '_non_existing');

        $message = "";

        try {
            $this->httpClient->getJSON($url);
            $this->fail("Cloudinary\Error expected");
        } catch (Cloudinary\Error $e) {
            $message = $e->getMessage();
        }

        self::assertStringStartsWith("Server returned unexpected status code", $message);
    }
}
