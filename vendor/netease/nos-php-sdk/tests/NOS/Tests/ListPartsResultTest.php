<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\ListPartsResult;

class ListPartsResultTest extends \PHPUnit_Framework_TestCase
{

    private $validXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
    <ListPartsResult>
      <Bucket>sdk-test</Bucket>
      <Key>test-key</Key>
      <UploadId>4693258653932952328</UploadId>
      <Owner>
        <ID>61c5a0fbb4164aea82d58b2e3ed1cca2</ID>
        <DisplayName>nos1</DisplayName>
      </Owner>
      <StorageClass>archive-standard</StorageClass>
      <PartNumberMarker>0</PartNumberMarker>
      <NextPartNumberMarker>1</NextPartNumberMarker>
      <MaxParts>1000</MaxParts>
      <IsTruncated>false</IsTruncated>
      <Part>
        <PartNumber>1</PartNumber>
        <LastModified>2016-07-29T17:11:42 +0800</LastModified>
        <ETag>be67cff48b4ffb6d1271cbfbaf6191db</ETag>
        <Size>368434</Size>
      </Part>
    </ListPartsResult>
BBBB;

    private $invalidXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
    <ListPartsResult>
      <Bucket>jasonqiu-sdk-test</Bucket>
      <Key>test-key</Key>
      <UploadId>4693258653932952328</UploadId>
      <Owner>
        <ID>61c5a0fbb4164aea82d58b2e3ed1cca2</ID>
        <DisplayName>nos1</DisplayName>
      </Owner>
      <StorageClass>archive-standard<StorageClass>
      <PartNumberMarker>0</PartNumberMarker>
      <NextPartNumberMarker>1</NextPartNumberMarker>
      <MaxParts>1000</MaxParts>
      <IsTruncated>false</IsTruncated>
      <Part>
        <PartNumber>1</PartNumber>
        <LastModified>2016-07-29T17:11:42 +0800</LastModified>
        <ETag>be67cff48b4ffb6d1271cbfbaf6191db</ETag>
        <Size>368434</Size>
      </Part>
    </ListPartsResult>
BBBB;

    public function testParseValid200()
    {
        $response = new ResponseCore(array(), $this->validXml, 200);
        $result = new ListPartsResult($response);
        $this->assertNotNull($result);
        $data = $result->getData();
        $this->assertEquals('sdk-test', $data->getBucket());
        $this->assertEquals('false', $data->getIsTruncated());
        $this->assertEquals('test-key', $data->getKey());
        $this->assertEquals(1000, $data->getMaxParts());
        $this->assertEquals(1, $data->getNextPartNumberMarker());
        $this->assertEquals('archive-standard', $data->getStorageClass());
        $this->assertEquals('4693258653932952328', $data->getUploadId());
        $parts = $data->getListPart();
        $part = $parts[0];
        $this->assertEquals(1, $part->getPartNumber());
        $this->assertEquals('2016-07-29T17:11:42 +0800', $part->getLastModified());
        $this->assertEquals('be67cff48b4ffb6d1271cbfbaf6191db', $part->getETag());
        $this->assertEquals(368434, $part->getSize());
    }

    /**
     * @expectedException NOS\Core\NosException
     * @expectedExceptionMessage invalid response,response body invalid xml
     */
    public function testParseInvalidXml()
    {
        $response = new ResponseCore(array(), $this->invalidXml, 200);
        $result = new ListPartsResult($response);
        $result->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     * @expectedExceptionMessage invalid response,empty response body
     */
    public function testParseEmptyXml()
    {
        $response = new ResponseCore(array(), '', 200);
        $result = new ListPartsResult($response);
        $result->getData();
    }
}


