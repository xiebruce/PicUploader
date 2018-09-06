<?php
namespace NOS\Tests;

use NOS\Model\PartInfo;

class PartInfoTest extends \PHPUnit_Framework_TestCase
{

    public function testPartInfo()
    {
       $partInfo = new PartInfo(1, '2016-07-28 11:00:00', 'dsrasdvdfra231221', 10922);
       $this->assertNotNull($partInfo);
       $this->assertEquals(1, $partInfo->getPartNumber());
       $this->assertEquals('2016-07-28 11:00:00', $partInfo->getLastModified());
       $this->assertEquals('dsrasdvdfra231221', $partInfo->getETag());
       $this->assertEquals(10922, $partInfo->getSize());
    }
}

