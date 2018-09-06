<?php
namespace NOS\Tests;

use NOS\Model\ListPartsInfo;
use NOS\Model\PartInfo;

class ListPartsInfoTest extends \PHPUnit_Framework_TestCase
{

    public function testListPartsInfoTest()
    {
        $part_array = array();
        for($i=0;$i<10;$i++)
        {
            $part = new PartInfo($i, '2016-07-28 20:40:00', 'ds24fdsf53234df', 10267);
            $part_array[] = $part;
        }
        $parts = new ListPartsInfo('test-bucket', 'test-key', '31423231', 'full', 10, 100, 20, 'true', $part_array);
        $this->assertNotNull($parts);
        $this->assertEquals('test-bucket' ,  $parts->getBucket());
        $this->assertEquals('test-key' , $parts->getKey());
        $this->assertEquals('31423231',$parts->getUploadId());
        $this->assertEquals('full',$parts->getStorageClass());
        $this->assertEquals(10,$parts->getPartNumberMarker());
        $this->assertEquals(100,$parts->getNextPartNumberMarker());
        $this->assertEquals(20,$parts->getMaxParts());
        $this->assertEquals('true',$parts->getIsTruncated());

        foreach ($parts->getListPart() as $key=>$value)
        {
            $this->assertEquals($key,$value->getPartNumber());
            $this->assertEquals('2016-07-28 20:40:00',$value->getLastModified());
            $this->assertEquals('ds24fdsf53234df',$value->getETag());
            $this->assertEquals(10267,$value->getSize());
        }
    }
}

