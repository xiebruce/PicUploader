<?php

namespace NOS\Tests;

use NOS\Model\BucketInfo;

/**
 * Class BucketInfoTest
 * @package OSS\Tests
 */
class BucketInfoTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $bucketInfo = new BucketInfo('name', 'today');
        $this->assertNotNull($bucketInfo);
        $this->assertEquals('name', $bucketInfo->getName());
        $this->assertEquals('today', $bucketInfo->getCreateDate());
    }
}