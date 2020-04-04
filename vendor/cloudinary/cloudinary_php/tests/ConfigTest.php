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

    public function test_cloudinary_url_valid_scheme()
    {
        $cloudinary_url = 'cloudinary://123456789012345:ALKJdjklLJAjhkKJ45hBK92baj3@test';

        \Cloudinary::config_from_url($cloudinary_url);
    }

    public function test_cloudinary_url_invalid_scheme()
    {
        $cloudinary_urls = [
            'CLOUDINARY_URL=cloudinary://123456789012345:ALKJdjklLJAjhkKJ45hBK92baj3@test',
            'https://123456789012345:ALKJdjklLJAjhkKJ45hBK92baj3@test',
            '://123456789012345:ALKJdjklLJAjhkKJ45hBK92baj3@test',
            ' '
            ];

        foreach ($cloudinary_urls as $cloudinary_url) {
            try {
                \Cloudinary::config_from_url($cloudinary_url);
                $this->fail('InvalidArgumentException was not thrown');
            } catch (\InvalidArgumentException $e) {
            }
        }
    }
}
