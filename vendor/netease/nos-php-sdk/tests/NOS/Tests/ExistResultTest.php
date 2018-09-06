<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\ExistResult;

class ExistResultTest extends \PHPUnit_Framework_TestCase
{
    public function testBucketExist()
    {
        $response = new ResponseCore(array(), "", 200);
        $result = new ExistResult($response);
        $this->assertTrue($result->isOK());
        $this->assertEquals($result->getData(), true);
    }

    public function testBucketNotExist()
    {
        $response = new ResponseCore(array(), "", 404);
        $result = new ExistResult($response);
        $this->assertTrue($result->isOK());
        $this->assertEquals($result->getData(), false);
    }
}

