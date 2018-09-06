<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\ListObjectsResult;

class ListObjectsResultTest extends \PHPUnit_Framework_TestCase
{
    private $validXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
<ListBucketResult>
  <Name>sdk-test</Name>
  <Prefix>test</Prefix>
  <Marker></Marker>
  <MaxKeys>1000</MaxKeys>
  <IsTruncated>false</IsTruncated>
  <Contents>
    <Key>test-key</Key>
    <LastModified>2016-07-23T11:45:42 +0800</LastModified>
    <ETag>b1335fbca4c89d12719cf99fdcab707e</ETag>
    <Size>6</Size>
    <StorageClass>archive-standard</StorageClass>
  </Contents>
 </ListBucketResult>
BBBB;

    private $invalidXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
<ListBucketResult>
  <Name>sdk-test</Name>
  <Prefix>test</Prefix>
  <Marker></Marker>
  <MaxKeys>1000</MaxKeys>
  <IsTruncated>false<IsTruncated>
  <Contents>
    <Key>test-key</Key>
    <LastModified>2016-07-23T11:45:42 +0800</LastModified>
    <ETag>b1335fbca4c89d12719cf99fdcab707e</ETag>
    <Size>6</Size>
    <StorageClass>archive-standard</StorageClass>
  </Contents>
 </ListBucketResult>
BBBB;

    public function testParseValid200()
    {
        $response = new ResponseCore(array(), $this->validXml, 200);
        $result = new ListObjectsResult($response);
        $this->assertNotNull($result);
        $data = $result->getData();
        $this->assertEquals('sdk-test', $data->getBucketName());
        $this->assertEquals('', $data->getMarker());
        $this->assertEquals(false, $data->getIsTruncated());
        $this->assertEquals(1000, $data->getMaxKeys());
        $this->assertEquals('test', $data->getPrefix());
        $contents = $data->getObjectList();
        $content = $contents[0];
        $this->assertEquals('test-key', $content->getKey());
        $this->assertEquals('2016-07-23T11:45:42 +0800', $content->getLastModified());
        $this->assertEquals('b1335fbca4c89d12719cf99fdcab707e', $content->getETag());
        $this->assertEquals(6, $content->getSize());
        $this->assertEquals('archive-standard', $content->getStorageClass());
    }

    /**
     * @expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,response body invalid xml
     */
    public function testParseErrXml()
    {
        $response = new ResponseCore(array(), $this->invalidXml, 200);
        $result = new ListObjectsResult($response);
        $result->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     * @expectedExceptionMessage invalid response,empty response body
     */
    public function testParseEmptyXml()
    {
        $response = new ResponseCore(array(), '', 200);
        $result = new ListObjectsResult($response);
        $result->getData();
    }

}
