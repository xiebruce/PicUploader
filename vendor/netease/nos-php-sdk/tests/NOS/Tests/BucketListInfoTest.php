<?php
namespace NOS\Tests;

use NOS\Model\BucketListInfo;
use NOS\Model\BucketInfo;

class BucketListInfoTest extends \PHPUnit_Framework_TestCase
{
    public function testBucketListInfo()
    {
        $buckets = array();
        for ($x=0; $x<=10; $x++) {
            $bucket = new BucketInfo('test-bucket'.$x, '2016-07-28');
            $buckets[] = $bucket;
        }
        $bucketsInfo = new BucketListInfo($buckets);
        $this->assertNotNull($bucketsInfo);
        $list = $bucketsInfo->getBucketList();
        foreach ($list as $key=>$value)
        {
            $this->assertEquals('test-bucket'.$key, $value->getName());
            $this->assertEquals('2016-07-28', $value->getCreateDate());
        }
    }
}

