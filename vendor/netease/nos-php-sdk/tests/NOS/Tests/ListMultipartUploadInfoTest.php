<?php
namespace NOS\Tests;

use NOS\Model\ListMultipartUploadInfo;
use NOS\Model\UploadInfo;

class ListMultipartUploadInfoTest extends \PHPUnit_Framework_TestCase
{

    public function testListMultipartUploadInfo()
    {
        $uploads = array();
        for ($x=0; $x<=10; $x++) {
            $uploadInfo = new UploadInfo('test'.$x, '12345'.$x, 'full');
            $uploads[] = $uploadInfo;
        }
        $listMultipartUploadInfo = new ListMultipartUploadInfo('test-bucket', 'test','false',$uploads);
        $this->assertNotNull($listMultipartUploadInfo);
        $this->assertEquals('test-bucket', $listMultipartUploadInfo->getBucket());
        $this->assertEquals('test', $listMultipartUploadInfo->getNextKeyMarker());
        $test_uploads = $listMultipartUploadInfo->getUploads();
        foreach ($test_uploads as $key => $value)
        {
            $this->assertEquals('test'.$key, $value->getKey());
            $this->assertEquals('12345'.$key, $value->getUploadId());
            $this->assertEquals('full', $value->getStorageClass());
        }
    }
}

