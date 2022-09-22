<?php

namespace Qiniu\Tests {
    use Qiniu\Config;

    class ConfigTest extends \PHPUnit_Framework_TestCase
    {
        protected $accessKey;
        protected $bucketName;

        protected function setUp()
        {
            global $accessKey;
            $this->accessKey = $accessKey;
            global $bucketName;
            $this->bucketName = $bucketName;
        }

        public function testGetApiHost()
        {
            $conf = new Config();
            $hasException = false;
            $apiHost = '';
            try {
                $apiHost = $conf->getApiHost($this->accessKey, $this->bucketName);
            } catch (\Exception $e) {
                $hasException = true;
            }
            $this->assertFalse($hasException);
            $this->assertEquals('http://api.qiniu.com', $apiHost);
        }

        public function testGetApiHostErrored()
        {
            $conf = new Config();
            $hasException = false;
            try {
                $conf->getApiHost($this->accessKey, "fakebucket");
            } catch (\Exception $e) {
                $hasException = true;
            }
            $this->assertTrue($hasException);
        }

        public function testGetApiHostV2()
        {
            $conf = new Config();
            list($apiHost, $err) = $conf->getApiHostV2($this->accessKey, $this->bucketName);
            $this->assertNull($err);
            $this->assertEquals('http://api.qiniu.com', $apiHost);
        }

        public function testGetApiHostV2Errored()
        {
            $conf = new Config();
            list($apiHost, $err) = $conf->getApiHostV2($this->accessKey, "fakebucket");
            $this->assertNotNull($err->code());
            $this->assertEquals(631, $err->code());
            $this->assertNull($apiHost);
        }
    }
}
