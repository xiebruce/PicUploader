<?php
namespace NOS\Tests;

use NOS\Model\ObjectInfo;

class ObjectInfoTest extends \PHPUnit_Framework_TestCase
{

    public function testObjectInfo()
    {
       $object = new ObjectInfo('test-key', '2016-07-28 21:08:00', 'dsa32123213121', 12312, 'full');
       $this->assertNotNull($object);
       $this->assertEquals('test-key', $object->getKey());
       $this->assertEquals('2016-07-28 21:08:00', $object->getLastModified());
       $this->assertEquals('dsa32123213121', $object->getETag());
       $this->assertEquals(12312, $object->getSize());
       $this->assertEquals('full', $object->getStorageClass());
    }
}

