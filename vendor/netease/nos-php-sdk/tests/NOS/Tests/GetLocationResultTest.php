<?php
namespace NOS\Tests;

use NOS\Http\ResponseCore;
use NOS\Result\GetLocationResult;

class GetLocationResultTest extends \PHPUnit_Framework_TestCase
{
    private $validXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
<LocationConstraint>HZ</LocationConstraint>
BBBB;

    private $errXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
<LocationConstraint>HZ<LocationConstraint>
BBBB;

    private $invalidXml = <<<BBBB
<?xml version="1.0" encoding="UTF-8"?>
<LocationConstraint>
<LocationConstraint><Key>HZ</Key></LocationConstraint>
</LocationConstraint>
BBBB;

    public function testParseValid200()
    {
        $response = new ResponseCore(array(), $this->validXml, 200);
        $result = new GetLocationResult($response);
        $this->assertTrue($result->isOK());
        $this->assertEquals($result->getData(), "HZ");
    }

    /**
     * @expectedException NOS\Core\NosException
     */
    public function testParseInvalid404()
    {
        $response = new ResponseCore(array(), "", 404);
        $result = new GetLocationResult($response);
        $result->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     * @expectedExceptionMessage invalid response,empty response body
     */
    public function testParseEmptyXml()
    {
        $response = new ResponseCore(array(), "", 200);
        $result = new GetLocationResult($response);
        $result->getData();
    }

    /**
     * @expectedException NOS\Core\NosException
     * @expectedExceptionMessage invalid response,response body is invalid xml
     */
    public function testParseErrXml()
    {
        $response = new ResponseCore(array(), $this->errXml, 200);
        $result = new GetLocationResult($response);
        $result->getData();
    }
}

