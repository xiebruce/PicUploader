<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\StatusResult;

class StatusResultTest extends \PHPUnit_Framework_TestCase
{
    private $validXml = <<<BBBB
<?xml version="1.0" ?>
<Deduplicate>
    <Status>enabled</Status>
</Deduplicate>
BBBB;

    private $invalidXml = <<<BBBB
<?xml version="1.0" ?>
<Deduplicate>
</Deduplicate>
BBBB;

    private $errXml = <<<BBBB
<?xml version="1.0" ?>
<Deduplicate>
    <Statuss>disable<Statuss>
</Deduplicate>
BBBB;

    public function testParseValid200()
    {
        $response = new ResponseCore(array(), $this->validXml, 200);
        $result = new StatusResult($response);
        $this->assertNotNull($result);
        $this->assertEquals('enabled', $result->getData());
    }

    /**
     * @expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,no Status found,xml format exception
     */
    public function testParseInvalidXml()
    {
        $response = new ResponseCore(array(), $this->invalidXml, 200);
        $result = new StatusResult($response);
        $result->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     * @expectedExceptionMessage invalid response,,empty response body
     */
    public function testParseEmptyXml()
    {
        $response = new ResponseCore(array(), '', 200);
        $result = new StatusResult($response);
        $result->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     *@expectedExceptionMessage invalid response,,response body is invalid xml
     */
    public function testParseErrXml(){
        $response = new ResponseCore(array(), $this->errXml, 200);
        $result = new StatusResult($response);
        $result->getData();
    }

}

