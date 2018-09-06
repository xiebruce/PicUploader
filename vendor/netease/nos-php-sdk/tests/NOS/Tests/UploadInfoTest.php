<?php
namespace NOS\Tests;

use NOS\Model\UploadInfo;

class UploadInfoTest extends \PHPUnit_Framework_TestCase
{
    public function testUploadInfo()
    {
        $uploadInfo = new UploadInfo('test-bucket', '12345', 'full');
        $this->assertNotNull($uploadInfo);
        $this->assertEquals('test-bucket', $uploadInfo->getKey());
        $this->assertEquals('12345', $uploadInfo->getUploadId());
        $this->assertEquals('full', $uploadInfo->getStorageClass());
    }
}

