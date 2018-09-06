<?php

namespace OSS\Tests;

use NOS\Core\NosException;

class NosExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testNOS_exception()
    {
        try {
            throw new NosException("ERR");
            $this->assertTrue(false);
        } catch (NosException $e) {
            $this->assertNotNull($e);
            $this->assertEquals($e->getMessage(), "ERR");
        }
    }
}
