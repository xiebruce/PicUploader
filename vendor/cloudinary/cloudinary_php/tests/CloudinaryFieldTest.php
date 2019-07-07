<?php

namespace CloudinaryTests;

use \Cloudinary;

use CloudinaryField;
use PHPUnit\Framework\TestCase;

/**
 * Class CloudinaryFieldTest
 * @package CloudinaryTests
 */
class CloudinaryFieldTest extends TestCase
{
    public function setUp()
    {
        Cloudinary::config(array(
            "cloud_name" => "test123",
            "secure_distribution" => null,
            "private_cdn" => false,
            "cname" => null));
    }

    public function testCloudinaryUrlFromCloudinaryField()
    {
        // [<resource_type>/][<image_type>/][v<version>/]<public_id>[.<format>][#<signature>]

        // should use cloud_name from config
        $result = Cloudinary::cloudinary_url(new CloudinaryField('test'));
        $this->assertEquals('http://res.cloudinary.com/test123/image/upload/test', $result);

        // should ignore signature
        $result = Cloudinary::cloudinary_url(new CloudinaryField('test#signature'));
        $this->assertEquals('http://res.cloudinary.com/test123/image/upload/test', $result);

        $result = Cloudinary::cloudinary_url(new CloudinaryField('rss/imgt/v123/test.jpg'));
        $this->assertEquals('http://res.cloudinary.com/test123/rss/imgt/v123/test.jpg', $result);
    }
}
