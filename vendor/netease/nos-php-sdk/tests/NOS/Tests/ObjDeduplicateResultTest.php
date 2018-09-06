<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\ObjDeduplicateResult;

class ObjDeduplicateResultTest extends \PHPUnit_Framework_TestCase
{
    private $validXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
<DeduplicateResult>
    <Bucket>filestation</Bucket>
    <Key>movie.avi</Key>
    <ObjectContentAlreadyExist>true</ObjectContentAlreadyExist>
</DeduplicateResult>
BBBB;

    private $errXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
<DeduplicateResult>
    <Bucket>filestation</Bucket>
    <Key>movie.avi<Key>
    <ObjectContentAlreadyExist>true<ObjectContentAlreadyExist>
</DeduplicateResult>
BBBB;

    private $invalidXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
<DeduplicateResult>
    <Bucket>filestation</Bucket>
    <Key>movie.avi</Key>
</DeduplicateResult>
BBBB;

    public function testParseValid200()
    {
        $response = new ResponseCore(array(), $this->validXml, 200);
        $result = new ObjDeduplicateResult($response);
        $this->assertNotNull($result);
        $this->assertEquals('true', $result->getData());
    }

    /**
     * @expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,no ObjectContentAlreadyExist found,xml format exception
     */
    public function testParseInvalidXml()
    {
        $response = new ResponseCore(array(), $this->invalidXml, 200);
        $result = new ObjDeduplicateResult($response);
        $result->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     * @expectedExceptionMessage invalid response,empty rsoponse body
     */
    public function testParseEmptyXml()
    {
        $response = new ResponseCore(array(), '', 200);
        $result = new ObjDeduplicateResult($response);
        $result->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,rsoponse body is invalid xml
     */
    public function testParseErrXml(){
        $response = new ResponseCore(array(), $this->errXml, 200);
        $result = new ObjDeduplicateResult($response);
        $result->getData();
    }
}

