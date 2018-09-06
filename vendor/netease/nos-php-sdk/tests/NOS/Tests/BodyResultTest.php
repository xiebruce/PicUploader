<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\BodyResult;

class BodyResultTest extends \PHPUnit_Framework_TestCase
{

    public function testParseValid200()
    {
        $response = new ResponseCore(array(), "hi", 200);
        $result = new BodyResult($response);
        $this->assertTrue($result->isOK());
        $this->assertEquals($result->getData(), "hi");
    }

    /**
     * @expectedException NOS\Core\NosException
     */
    public function testParseInvalid404()
    {
        $response = new ResponseCore(array(), null, 404);
        $result = new BodyResult($response);
        $result->getData();
    }

}

