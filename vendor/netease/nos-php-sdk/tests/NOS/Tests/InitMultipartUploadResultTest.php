<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\InitiateMultipartUploadResult;

class InitMultipartUploadResultTest extends \PHPUnit_Framework_TestCase
{
    private $validXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
    <InitiateMultipartUploadResult>
    <Bucket>filestation</Bucket>
    <Key>movie.avi</Key>
    <UploadId>VXBsb2FkIElEIGZvciA2aWWpbmcncyBteS1tb3S5tMnRzIHVwbG9hZA</UploadId>
</InitiateMultipartUploadResult>
BBBB;

    private $invalidXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
    <InitiateMultipartUploadResult>
    <Bucket>filestation</Bucket>
    <Key>movie.avi</Key>
</InitiateMultipartUploadResult>
BBBB;

	public function testParseValid200()
	{
		$response = new ResponseCore(array(), $this->validXml, 200);
        $result = new InitiateMultipartUploadResult($response);
        $this->assertNotNull($result);
        $this->assertEquals('VXBsb2FkIElEIGZvciA2aWWpbmcncyBteS1tb3S5tMnRzIHVwbG9hZA', $result->getData());
	}

	/**
	 *@expectedException NOS\Core\NosException
	 */
	public function testParseInValid404()
	{
	    $response = new ResponseCore(array(), "", 404);
	    $result = new InitiateMultipartUploadResult($response);
	    $result->getData();
	}

	/**
	 *@expectedException NOS\Core\NosException
	 *@expectedExceptionMessage invalid response,empty response body
	 */
	public function testParseEmptyXml()
	{
	    $response = new ResponseCore(array(), "", 200);
	    $result = new InitiateMultipartUploadResult($response);
	    $result->getData();
	}

	/**
	 *@expectedException NOS\Core\NosException
	 *@expectedExceptionMessage invalid response,no UploadId found,xml format exception
	 */
	public function testParseInValidXml()
	{
	    $response = new ResponseCore(array(), $this->invalidXml, 200);
	    $result = new InitiateMultipartUploadResult($response);
	    $result->getData();
	}

}

