<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\aclResult;
use NOS\Core\NosException;

class aclResultTest extends \PHPUnit_Framework_TestCase
{
    public function testValidHeader200()
    {
        $response = new ResponseCore(array('x-nos-acl'=>'public_read'), "", 200);
        $res = new aclResult($response);
        $this->assertTrue($res->isOK());
        $this->assertEquals($res->getData(), "public_read");
    }

    /**
     * @expectedException NOS\Core\NosException
     */
    public function testInvalidResponse404()
    {
        $response = new ResponseCore(array(), "", 404);
        $res = new aclResult($response);
        $res->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     * @expectedExceptionMessage invalid response,no require head found
     */
    public function testInvalidHeader200()
    {
        $response = new ResponseCore(array(), "", 200);
        $res = new aclResult($response);
        $res->getData();
    }

}

