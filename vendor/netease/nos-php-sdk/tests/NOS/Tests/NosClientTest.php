<?php
namespace NOS\Tests;

use NOS\NosClient;
use NOS\Core\NosException;

class NosClientTest extends \PHPUnit_Framework_TestCase
{
    public function testConstrunct()
    {
        try {
            $nosClient = new NosClient('id', 'key', 'http://nos-eastchina1.126.net');
            $this->assertFalse($nosClient->isUseSSL());
            $nosClient->setUseSSL(true);
            $this->assertTrue($nosClient->isUseSSL());
            $this->assertTrue(true);
            $this->assertEquals(3, $nosClient->getMaxRetries());
            $nosClient->setMaxTries(4);
            $this->assertEquals(4, $nosClient->getMaxRetries());
            $nosClient->setTimeout(10);
            $nosClient->setConnectTimeout(20);
        } catch (NosException $e) {
            assertFalse(true);
        }
    }

    public function testConstrunct2()
    {
        try {
            $nosClient = new NosClient('id', "", 'http://nos-eastchina1.126.net');
            $this->assertNull($nosClient);
            $this->assertFalse(true);
        } catch (NosException $e) {
            $this->assertEquals("access key secret is empty", $e->getMessage());
        }
    }

    public function testConstrunct3()
    {
        try {
            $nosClient = new NosClient("", 'key', 'http://nos-eastchina1.126.net');
            $this->assertNull($nosClient);
            $this->assertFalse(true);
        } catch (NosException $e) {
            $this->assertEquals("access key id is empty", $e->getMessage());
        }
    }

    public function testConstrunct4()
    {
        try {
            $nosClient = new NosClient('id', 'key', "");
            $this->assertNull($nosClient);
            $this->assertFalse(true);
        } catch (NosException $e) {
            $this->assertEquals('endpoint is empty', $e->getMessage());
        }
    }

    public function testConstrunct5()
    {
        try {
            $nosClient = new NosClient('id', 'key', "123.123.123.1");
            $this->assertNotNull($nosClient);
        } catch (NosException $e) {
            $this->assertTrue(false);
        }
    }

    public function testConstrunct6()
    {
        try {
            $nosClient = new NosClient('id', 'key', "https://123.123.123.1");
            $this->assertTrue($nosClient->isUseSSL());
        } catch (NosException $e) {
            $this->assertTrue(false);
        }
    }

    public function testConstrunct7()
    {
        try {
            $nosClient = new NosClient('id', 'key', "http://123.123.123.1");
            $this->assertFalse($nosClient->isUseSSL());
        } catch (NosException $e) {
            $this->assertTrue(false);
        }
    }

    public function testConstrunct8()
    {
        try {
            $nosClient = new NosClient('id', 'key', "http://123.123.123.1", true);
            $nosClient->listBuckets();
            $this->assertFalse(true);
        } catch (NosException $e) {

        }
    }

    public function testConstrunct9()
    {
        try {
            $accessKeyId = getenv('NOS_ACCESS_KEY_ID');
            $accessKeySecret = getenv('NOS_ACCESS_KEY_SECRET');
            $endpoint =  getenv('NOS_ENDPOINT');
            var_dump($accessKeyId);
            var_dump($accessKeySecret);
            var_dump($endpoint);
            $nosClient = new NosClient($accessKeyId, $accessKeySecret , $endpoint, false);
            $nosClient->listBuckets();
        } catch (NosException $e) {
           echo $e->getMessage();
            $this->assertFalse(true);
        }
    }
}

