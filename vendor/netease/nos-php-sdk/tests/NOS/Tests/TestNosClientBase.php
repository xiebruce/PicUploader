<?php
namespace NOS\Tests;

use NOS\NosClient;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Common.php';

class TestNosClientBase extends \PHPUnit_Framework_TestCase
{

    protected $nosClient;

    protected $bucket;

    public function setUp()
    {
        $this->bucket = Common::getBucketName() . rand(100000, 999999);
        $this->nosClient = Common::getNosClient();
        $this->nosClient->createBucket($this->bucket);
    }

    public function tearDown()
    {
        if (! $this->nosClient->doesBucketExist($this->bucket)) {
            return;
        }

        $objects = $this->nosClient->listObjects($this->bucket, array(
            'max-keys' => 1000,
            'delimiter' => ''
        ))->getObjectList();
        $keys = array();
        foreach ($objects as $obj) {
            $keys[] = $obj->getKey();
        }
        if (count($keys) > 0) {
            $this->nosClient->deleteObjects($this->bucket, $keys);
        }
        $uploads = $this->nosClient->listMultipartUploads($this->bucket)->getUploads();
        foreach ($uploads as $up) {
            $this->nosClient->abortMultipartUpload($this->bucket, $up->getKey(), $up->getUploadId());
        }
        $this->nosClient->deleteBucket($this->bucket);
    }
}

