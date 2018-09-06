<?php
namespace NOS\Tests;

use NOS\Model\ObjectListInfo;
use NOS\Model\ObjectInfo;

class ObjectListInfoTest extends \PHPUnit_Framework_TestCase
{

    public function testObjectListInfo()
    {
        $objects = array();
        for($i=0;$i<10;$i++)
        {
            $object = new ObjectInfo('test-key'.$i, '2016-07-28 21:21:00', '32hnkli12jnlo1m32', 12311, 'full');
            $objects[] = $object;
        }
        $objectList = new ObjectListInfo('test-bucket', 'nos-test-','', 'test1', 'test2', 123, 'true', $objects);
        $this->assertNotNull($objectList);
        $this->assertEquals('test-bucket', $objectList->getBucketName());
        $this->assertEquals('nos-test-', $objectList->getPrefix());
        $this->assertEquals('test1', $objectList->getMarker());
        $this->assertEquals('test2', $objectList->getNextMarker());
        $this->assertEquals(123, $objectList->getMaxKeys());
        $this->assertEquals('true', $objectList->getIsTruncated());
        foreach ($objectList->getObjectList() as $key=>$value)
        {
            $this->assertEquals('test-key'.$key, $value->getKey());
            $this->assertEquals('2016-07-28 21:21:00', $value->getLastModified());
            $this->assertEquals('32hnkli12jnlo1m32', $value->getETag());
            $this->assertEquals(12311, $value->getSize());
            $this->assertEquals('full', $value->getStorageClass());
        }
    }
}

