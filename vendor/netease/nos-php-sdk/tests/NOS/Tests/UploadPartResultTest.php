<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\UploadPartResult;

class UploadPartResultTest extends \PHPUnit_Framework_TestCase
{

    public function testParseValid200()
    {
        $response = new ResponseCore(array('etag'=>'sdad221c3214444vcf21'), "", 200);
        $result = new UploadPartResult($response);
        $this->assertNotNull($result);
        $this->assertEquals('sdad221c3214444vcf21', $result->getData());
    }

     /**
     *@expectedException NOS\Core\NosException
     *@expectedExceptionMessage cannot get ETag
     */
    public function testParseInvalid()
    {
        $response = new ResponseCore(array(), "", 200);
        $result = new UploadPartResult($response);
        $result->getData();
    }

}

