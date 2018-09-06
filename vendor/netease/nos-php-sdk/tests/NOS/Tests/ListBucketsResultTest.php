<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\ListBucketsResult;

class ListBucketsResultTest extends \PHPUnit_Framework_TestCase
{
    private $validXml = <<<BBBB
<?xml version="1.0" ?>
<ListAllMyBucketsResult>
    <Owner>
    <ID>61c5a0fbb4164aea82d58b2e3ed1cca2</ID>
    <DisplayName>nos1</DisplayName>
    </Owner>
    <Buckets>
        <Bucket>
      <Name>bucket</Name>
      <CreationDate>2015-08-12T17:57:25 +0800</CreationDate>
    </Bucket>
        </Buckets>
</ListAllMyBucketsResult>
BBBB;

    private $invalidXml = <<<BBBB
<?xml version="1.0" ?>
<ListAllMyBucketsResult>
    <Owner>
    <ID>61c5a0fbb4164aea82d58b2e3ed1cca2</ID>
    <DisplayName>nos1</DisplayName>
    <Owner>
    <Buckets>
        <Bucket>
      <Name>bucket</Name>
      <CreationDate>2015-08-12T17:57:25 +0800</CreationDate>
    </Bucket>
        </Buckets>
</ListAllMyBucketsResult>
BBBB;
    public function testParseValid200()
    {
        $response = new ResponseCore(array(), $this->validXml, 200);
        $result = new ListBucketsResult($response);
        $this->assertNotNull($result);
        $data = $result->getData()->getBucketList();
        $this->assertEquals('bucket', $data[0]->getName());
        $this->assertEquals('2015-08-12T17:57:25 +0800', $data[0]->getCreateDate());
    }

    /**
     *@expectedException NOS\Core\NosException
     */
    public function testParseInValid404()
    {
        $response = new ResponseCore(array(), "", 404);
        $result = new ListBucketsResult($response);
        $result->getData();
    }

    /**
     *@expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,empty response body
     */
    public function testParseEmptyXml()
    {
        $response = new ResponseCore(array(), "", 200);
        $result = new ListBucketsResult($response);
        $result->getData();
    }

    /**
     *@expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,response body is invalid xml
     */
    public function testParseInValidXml()
    {
        $response = new ResponseCore(array(), $this->invalidXml, 200);
        $result = new ListBucketsResult($response);
        $result->getData();
    }
 }

