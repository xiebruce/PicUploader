<?php
namespace NOS\Tests;

use NOS\Result\ListMultipartUploadResult;
use NOS\Http\ResponseCore;

class ListMultipartUploadResultTest extends \PHPUnit_Framework_TestCase
{
    private $validXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
        <ListMultipartUploadsResult>
          <Bucket>jasonqiu-sdk-test</Bucket>
          <NextKeyMarker>4693258869132955586</NextKeyMarker>
          <IsTruncated>false</IsTruncated>
          <Upload>
            <Key>lichaolin1</Key>
            <UploadId>4693258653932952328</UploadId>
            <StorageClass>archive-standard</StorageClass>
            <Owner>
              <ID>61c5a0fbb4164aea82d58b2e3ed1cca2</ID>
              <DisplayName>nos1</DisplayName>
            </Owner>
            <Initiated>2016-07-24T10:04:25 +0800</Initiated>
          </Upload>
         </ListMultipartUploadsResult>
BBBB;

    private $invalidXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
        <ListMultipartUploadsResult>
          <Bucket>jasonqiu-sdk-test</Bucket>
          <NextKeyMarker>4693258869132955586</NextKeyMarker>
          <IsTruncated>false<IsTruncated>
          <Upload>
            <Key>lichaolin1</Key>
            <UploadId>4693258653932952328</UploadId>
            <StorageClass>archive-standard</StorageClass>
            <Owner>
              <ID>61c5a0fbb4164aea82d58b2e3ed1cca2</ID>
              <DisplayName>nos1<DisplayName>
            </Owner>
            <Initiated>2016-07-24T10:04:25 +0800</Initiated>
          </Upload>
         </ListMultipartUploadsResult>
BBBB;

    public function testParseValid200()
    {
    	$response = new ResponseCore(array(), $this->validXml, 200);
    	$result = new ListMultipartUploadResult($response);
    	$this->assertNotNull($result);
    	$data = $result->getData();
    	$this->assertEquals('jasonqiu-sdk-test', $data->getBucket());
    	$this->assertEquals('4693258869132955586', $data->getNextKeyMarker());
    	$this->assertEquals('false', $data->getIsTruncated());
    	$uploads= $data->getUploads();
    	$upload = $uploads[0];
    	$this->assertEquals('lichaolin1', $upload->getKey());
    	$this->assertEquals('4693258653932952328', $upload->getUploadId());
    	$this->assertEquals('archive-standard', $upload->getStorageClass());
    }

    /**
     *@expectedException NOS\Core\NosException
     */
    public function testParseInValid404()
    {
        $response = new ResponseCore(array(), "", 404);
        $result = new ListMultipartUploadResult($response);
        $result->getData();
    }

    /**
     *@expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,empty response body
     */
    public function testParseEmptyXml()
    {
        $response = new ResponseCore(array(), "", 200);
        $result = new ListMultipartUploadResult($response);
        $result->getData();
    }

    /**
     *@expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,response body is invalid xml
     */
    public function testParseInValidXml()
    {
        $response = new ResponseCore(array(), $this->invalidXml, 200);
        $result = new ListMultipartUploadResult($response);
        $result->getData();
    }

}

