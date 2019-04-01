<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

class VersionTest extends TestCase
{
    public function testString()
    {
        $v = Version::VERSION;
        $this->assertEquals(-1, version_compare('2.0.0', $v));
    }
}
