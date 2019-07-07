<?php
$base = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..');

use PHPUnit\Framework\TestCase;

require_once(join(DIRECTORY_SEPARATOR, array($base, 'src', 'Cloudinary.php')));

class ConfigTest extends TestCase
{
    public function test_config_nested_values()
    {
        \Cloudinary::config_from_url('cloudinary://key:secret@test123?foo[bar]=value');
        $this->assertArrayHasKey('foo', \Cloudinary::config());
        $this->assertArrayHasKey('bar', \Cloudinary::config()['foo']);
        $this->assertEquals('value', \Cloudinary::config()['foo']['bar']);
    }
}
