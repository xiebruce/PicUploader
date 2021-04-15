<?php

use PHPUnit\Framework\TestCase;

class CloudinaryTest extends TestCase
{

    const DEFAULT_ROOT_PATH = 'http://res.cloudinary.com/test123/';
    const DEFAULT_UPLOAD_PATH = 'http://res.cloudinary.com/test123/image/upload/';
    const DEFAULT_FETCH_PATH = 'http://res.cloudinary.com/test123/image/fetch/';
    const VIDEO_UPLOAD_PATH = 'http://res.cloudinary.com/test123/video/upload/';
    const TEST_ID = 'test';

    const FETCH_URL = "http://cloudinary.com/images/logo.png";

    const IMAGE_VERSION = '1234';
    const IMAGE_VERSION_STR = 'v1234';
    const DEFAULT_VERSION_STR = 'v1';
    const TEST_FOLDER = 'folder/test';

    protected static $test_id = "test";
    protected static $crop_transformation = ['crop' => 'crop', 'width' => 100];
    protected static $crop_transformation_str = 'c_crop,w_100';
    protected static $raw_transformation = "c_fill,e_grayscale,q_auto";
    protected static $sepia_transformation = ['crop' => 'lfill', 'width' => 400, 'effect' => 'sepia'];
    protected static $sepia_transformation_str = 'c_lfill,e_sepia,w_400';

    private static $custom_function_wasm = ['function_type' => 'wasm', 'source' => 'blur.wasm'];
    private static $custom_function_wasm_str = 'wasm:blur.wasm';

    private static $custom_function_remote = [
        'function_type' => 'remote',
        'source' => 'https://df34ra4a.execute-api.us-west-2.amazonaws.com/default/cloudinaryFn',
    ];
    private static $custom_function_remote_str =
        'remote:aHR0cHM6Ly9kZjM0cmE0YS5leGVjdXRlLWFwaS51cy13ZXN0LTIuYW1hem9uYXdzLmNvbS9kZWZhdWx0L2Nsb3VkaW5hcnlGbg==';

    private $range_test_pairs = [
        // integer values
        ["200", "200"], [200, "200"], [0, "0"],
        // float values
        ["200.0", "200.0"], [200.0, "200.0"], [200.123, "200.123"], [200.123000, "200.123"], [0.0, "0.0"],
        //percent values
        ["20p", "20p"], ["20P", "20p"], ["20%", "20p"], ["20.5%", "20.5p"],
        // invalid values
        ["p", null], ["", null], [null, null], ["non_auto", null],
    ];

    private $original_user_platform;

    protected function setUp()
    {
        Cloudinary::reset_config();
        Cloudinary::config(
            array(
                "cloud_name" => "test123",
                "api_key" => "a",
                "api_secret" => "b",
                "secure_distribution" => null,
                "private_cdn" => false,
                "cname" => null
            )
        );

        $this->original_user_platform = \Cloudinary::$USER_PLATFORM;
    }

    protected function tearDown()
    {
        parent::TearDown();
        \Cloudinary::$USER_PLATFORM = $this->original_user_platform;
    }

    public function test_cloud_name()
    {
        // should use cloud_name from config
        $result = Cloudinary::cloudinary_url("test");
        $this->assertEquals(CloudinaryTest::DEFAULT_UPLOAD_PATH . "test", $result);
    }

    public function test_cloud_name_options()
    {
        // should allow overriding cloud_name in $options
        $options = array("cloud_name" => "test321");
        $this->cloudinary_url_assertion("test", $options, "http://res.cloudinary.com/test321/image/upload/test");
    }

    public function test_user_agent()
    {
        $user_agent = \Cloudinary::userAgent();

        $this->assertRegExp("/^CloudinaryPHP\/\d+\.\d+\.\d+ \(PHP \d+\.\d+\.\d+\)$/", $user_agent);

        $platform_information = 'TestPlatformInformation (From \"CloudinaryTest.php\")';
        \Cloudinary::$USER_PLATFORM = $platform_information;
        $full_user_agent = \Cloudinary::userAgent();

        $this->assertEquals(
            $platform_information . ' ' . $user_agent,
            $full_user_agent,
            "USER_AGENT should include platform information if set"
        );
    }

    public function test_secure_distribution()
    {
        // should use default secure distribution if secure=TRUE
        $options = array("secure" => true);
        $this->cloudinary_url_assertion("test", $options, "https://res.cloudinary.com/test123/image/upload/test");
    }

    public function test_secure_distribution_from_config()
    {
        // should use default secure distribution if secure=true set in config
        Cloudinary::config(array("secure" => true));
        $this->cloudinary_url_assertion("test", array(), "https://res.cloudinary.com/test123/image/upload/test");
    }

    public function test_secure_distribution_overwrite()
    {
        // should allow overwriting secure distribution if secure=TRUE
        $options = array("secure" => true, "secure_distribution" => "something.else.com");
        $this->cloudinary_url_assertion("test", $options, "https://something.else.com/test123/image/upload/test");
    }

    public function test_secure_distibution()
    {
        // should take secure distribution from config if secure=TRUE
        Cloudinary::config(array("secure_distribution" => "config.secure.distribution.com"));
        $options = array("secure" => true);
        $this->cloudinary_url_assertion(
            "test",
            $options,
            "https://config.secure.distribution.com/test123/image/upload/test"
        );
    }

    public function test_secure_akamai()
    {
        // should default to akamai if secure is given with private_cdn and no secure_distribution
        $options = array("secure" => true, "private_cdn" => true);
        $this->cloudinary_url_assertion("test", $options, "https://test123-res.cloudinary.com/image/upload/test");
    }

    public function test_secure_non_akamai()
    {
        // should not add cloud_name if private_cdn and secure non akamai secure_distribution
        $options = array("secure" => true, "private_cdn" => true, "secure_distribution" => "something.cloudfront.net");
        $this->cloudinary_url_assertion("test", $options, "https://something.cloudfront.net/image/upload/test");
    }

    public function test_http_private_cdn()
    {
        // should not add cloud_name if private_cdn and not secure
        $options = array("private_cdn" => true);
        $this->cloudinary_url_assertion("test", $options, "http://test123-res.cloudinary.com/image/upload/test");
    }

    public function test_secure_shared_subdomain()
    {
        // should support cdn_subdomain with secure on if using shared_domain
        $options = array("cdn_subdomain" => true, "secure" => true);
        $this->cloudinary_url_assertion("test", $options, "https://res-2.cloudinary.com/test123/image/upload/test");
    }

    public function test_secure_shared_subdomain_false()
    {
        // should support secure_cdn_subdomain false override with secure
        $options = array("cdn_subdomain" => true, "secure" => true, "secure_cdn_subdomain" => false);
        $this->cloudinary_url_assertion("test", $options, "https://res.cloudinary.com/test123/image/upload/test");
    }

    public function test_secure_subdomain_true()
    {
        // should support secure_cdn_subdomain true override with secure
        $options = array(
            "cdn_subdomain" => true,
            "secure" => true,
            "secure_cdn_subdomain" => true,
            "private_cdn" => true,
        );
        $this->cloudinary_url_assertion("test", $options, "https://test123-res-2.cloudinary.com/image/upload/test");
    }

    public function test_format()
    {
        // should use format from $options
        $options = array("format" => "jpg");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "test.jpg");
    }

    public function test_crop()
    {
        // should use width and height from $options even if crop is not given
        $options = array("width" => 100, "height" => 100);
        $result = Cloudinary::cloudinary_url("test", $options);
        $this->assertEquals(CloudinaryTest::DEFAULT_UPLOAD_PATH . "h_100,w_100/test", $result);
        $this->assertEquals(array("width" => 100, "height" => 100), $options);
        $options = array("width" => 100, "height" => 100, "crop" => "crop");
        $result = Cloudinary::cloudinary_url("test", $options);
        $this->assertEquals(array("width" => 100, "height" => 100), $options);
        $this->assertEquals(CloudinaryTest::DEFAULT_UPLOAD_PATH . "c_crop,h_100,w_100/test", $result);
    }

    public function test_various_options()
    {
        // should use x, y, radius, prefix, gravity and quality from $options
        $options = array(
            "x" => 1,
            "y" => 2,
            "radius" => 3,
            "gravity" => "center",
            "quality" => 0.4,
            "prefix" => "a",
            "opacity" => 20,
        );
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "g_center,o_20,p_a,q_0.4,r_3,x_1,y_2/test"
        );
        $options = array("gravity" => "auto", "crop" => "crop", "width" => 0.5);
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "c_crop,g_auto,w_0.5/test"
        );
        $options = array("gravity" => "auto:ocr_text", "crop" => "crop", "width" => 0.5);
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "c_crop,g_auto:ocr_text,w_0.5/test"
        );
        $options = array("gravity" => "ocr_text", "crop" => "crop", "width" => 0.5);
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "c_crop,g_ocr_text,w_0.5/test"
        );
    }

    public function test_quality()
    {
        $this->cloudinary_url_assertion(
            "test",
            array("x" => 1, "y" => 2, "radius" => 3, "gravity" => "center", "quality" => 80, "prefix" => "a"),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "g_center,p_a,q_80,r_3,x_1,y_2/test"
        );
        $this->cloudinary_url_assertion(
            "test",
            array("x" => 1, "y" => 2, "radius" => 3, "gravity" => "center", "quality" => "80:444", "prefix" => "a"),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "g_center,p_a,q_80:444,r_3,x_1,y_2/test"
        );
        $this->cloudinary_url_assertion(
            "test",
            array("x" => 1, "y" => 2, "radius" => 3, "gravity" => "center", "quality" => "auto", "prefix" => "a"),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "g_center,p_a,q_auto,r_3,x_1,y_2/test"
        );
        $this->cloudinary_url_assertion(
            "test",
            array("x" => 1, "y" => 2, "radius" => 3, "gravity" => "center", "quality" => "auto:good", "prefix" => "a"),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "g_center,p_a,q_auto:good,r_3,x_1,y_2/test"
        );
    }

    /**
     * should support a string, integer and array of mixed types
     */

    public function test_radius()
    {
        $radius_test_values = [
          [10, "r_10"],
          ['10', 'r_10'],
          ['$v', 'r_$v'],
          [[10, 20, 30], 'r_10:20:30'],
          [[10, 20, '$v'], 'r_10:20:$v'],
          [[10, 20, '$v', 40], 'r_10:20:$v:40'],
          [['10:20'], 'r_10:20'],
          [['10:20:$v:40'], 'r_10:20:$v:40']
        ];

        foreach ($radius_test_values as $value) {
            $this->cloudinary_url_assertion(
                CloudinaryTest::TEST_ID,
                array("radius" => $value[0]),
                CloudinaryTest::DEFAULT_UPLOAD_PATH . $value[1] . '/' . CloudinaryTest::TEST_ID
            );
        }
    }


    public function test_no_empty_options()
    {
        // should use x, y, width, height, crop, prefix and opacity from $options
        $options = array(
            "x" => 0,
            "y" => '0',
            "width" => '',
            "height" => "",
            "crop" => ' ',
            "prefix" => false,
            "opacity" => null,
        );
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "x_0,y_0/test");
    }

    public function test_transformation_simple()
    {
        // should support named transformation
        $options = array("transformation" => "blip");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "t_blip/test");
    }

    public function test_transformation_array()
    {
        // should support array of named transformations
        $options = array("transformation" => array("blip", "blop"));
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "t_blip.blop/test");
    }

    public function test_base_transformations()
    {
        // should support base transformation
        $options = array(
            "transformation" => array("x" => 100, "y" => 100, "crop" => "fill"),
            "crop" => "crop",
            "width" => 100,
        );
        $result = Cloudinary::cloudinary_url("test", $options);
        $this->assertEquals(array("width" => 100), $options);
        $this->assertEquals(CloudinaryTest::DEFAULT_UPLOAD_PATH . "c_fill,x_100,y_100/c_crop,w_100/test", $result);
    }

    public function test_base_transformation_array()
    {
        // should support array of base transformations
        $options = array(
            "transformation" => array(
                array("x" => 100, "y" => 100, "width" => 200, "crop" => "fill"),
                array("radius" => 10),
            ),
            "crop" => "crop",
            "width" => 100,
        );
        $result = Cloudinary::cloudinary_url("test", $options);
        $this->assertEquals(array("width" => 100), $options);
        $this->assertEquals(
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "c_fill,w_200,x_100,y_100/r_10/c_crop,w_100/test",
            $result
        );
    }

    public function test_no_empty_transformation()
    {
        // should not include empty transformations
        $options = array("transformation" => array(array(), array("x" => 100, "y" => 100, "crop" => "fill"), array()));
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "c_fill,x_100,y_100/test"
        );
    }

    /**
     * Should support chaining transformations at the end
     */
    public function test_chain_transformations()
    {
        $options = ["effect" => "art:incognito", "format" => "png"];

        $chained_transformations = [
            ["x" => 100, "y" => 100, "width" => 200, "crop" => "fill"],
            ["radius" => 10],
            ["raw_transformation" => self::$raw_transformation]
        ];

        $actual_options = Cloudinary::chain_transformations($options, $chained_transformations);
        $actual_transformation_str = Cloudinary::generate_transformation_string($actual_options);

        $this->assertEquals(
            "e_art:incognito/c_fill,w_200,x_100,y_100/r_10/" . self::$raw_transformation,
            $actual_transformation_str,
            "it should chain an array of transformations"
        );

        $message = "Should support chaining transformations, when default options have no transformations";
        $actual_options = Cloudinary::chain_transformations([], $chained_transformations);
        $actual_transformation_str = Cloudinary::generate_transformation_string($actual_options);

        $this->assertEquals(
            "c_fill,w_200,x_100,y_100/r_10/" . self::$raw_transformation,
            $actual_transformation_str,
            $message
        );

        $message = "Should handle empty list of chained transformations";
        $actual_options = Cloudinary::chain_transformations($options, []);
        $actual_transformation_str = Cloudinary::generate_transformation_string($actual_options);

        $this->assertEquals("e_art:incognito", $actual_transformation_str, $message);

        $message = "Should handle empty options and empty list of chained transformations";
        $actual_options = Cloudinary::chain_transformations([], []);
        $actual_transformation_str = Cloudinary::generate_transformation_string($actual_options);

        $this->assertEquals("", $actual_transformation_str, $message);

        $message = "Should remove transformation options from resulting options";
        $actual_options = Cloudinary::chain_transformations(
            ["width" => 200, "height" => 100],
            $chained_transformations
        );

        $this->assertArrayNotHasKey("width", $actual_options, $message);
        $this->assertArrayNotHasKey("height", $actual_options, $message);

        $actual_transformation_str = Cloudinary::generate_transformation_string($actual_options);

        $this->assertEquals(
            "h_100,w_200/c_fill,w_200,x_100,y_100/r_10/c_fill,e_grayscale,q_auto",
            $actual_transformation_str,
            $message
        );

        $message = "Should chain transformations with a fetch option";
        $options["type"] = "fetch";

        Cloudinary::patch_fetch_format($options);
        $actual_options = Cloudinary::chain_transformations($options, $chained_transformations);

        // format should be removed when we use fetch
        $this->assertArrayNotHasKey("format", $actual_options, $message);

        $actual_transformation_str = Cloudinary::generate_transformation_string($actual_options);

        $message = "should use url format as a fetch_format";
        $this->assertEquals(
            "e_art:incognito,f_png/c_fill,w_200,x_100,y_100/r_10/" . self::$raw_transformation,
            $actual_transformation_str,
            $message
        );

        $message = "should use fetch_format";
        $options["fetch_format"] = "gif";

        $actual_options = Cloudinary::chain_transformations($options, $chained_transformations);
        $actual_transformation_str = Cloudinary::generate_transformation_string($actual_options);

        // should use fetch_format
        $this->assertEquals(
            "e_art:incognito,f_gif/c_fill,w_200,x_100,y_100/r_10/" . self::$raw_transformation,
            $actual_transformation_str,
            $message
        );
    }

    public function test_size()
    {
        // should support size
        $options = array("size" => "10x10", "crop" => "crop");
        $result = Cloudinary::cloudinary_url("test", $options);
        $this->assertEquals(array("width" => "10", "height" => "10"), $options);
        $this->assertEquals(CloudinaryTest::DEFAULT_UPLOAD_PATH . "c_crop,h_10,w_10/test", $result);
    }

    public function test_type()
    {
        // should use type from $options
        $options = array("type" => "facebook");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_ROOT_PATH . "image/facebook/test");
    }

    public function test_resource_type()
    {
        // should use resource_type from $options
        $options = array("resource_type" => "raw");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_ROOT_PATH . "raw/upload/test");
    }

    public function test_ignore_http()
    {
        // should ignore http links only if type is not given
        $options = array();
        $this->cloudinary_url_assertion("http://test", $options, "http://test");
        $options = array("type" => "fetch");
        $this->cloudinary_url_assertion(
            "http://test",
            $options,
            CloudinaryTest::DEFAULT_ROOT_PATH . "image/fetch/http://test"
        );
    }

    public function test_fetch()
    {
        // should escape fetch urls
        $options = array("type" => "fetch");
        $this->cloudinary_url_assertion(
            "http://blah.com/hello?a=b",
            $options,
            CloudinaryTest::DEFAULT_ROOT_PATH . "image/fetch/http://blah.com/hello%3Fa%3Db"
        );
    }

    public function test_cname()
    {
        // should support extenal cname
        $options = array("cname" => "hello.com");
        $this->cloudinary_url_assertion("test", $options, "http://hello.com/test123/image/upload/test");
    }

    public function test_cname_subdomain()
    {
        // should support extenal cname with cdn_subdomain on
        $options = array("cname" => "hello.com", "cdn_subdomain" => true);
        $this->cloudinary_url_assertion("test", $options, "http://a2.hello.com/test123/image/upload/test");
    }

    public function test_http_escape()
    {
        // should escape http urls
        $options = array("type" => "youtube");
        $this->cloudinary_url_assertion(
            "http://www.youtube.com/watch?v=d9NF2edxy-M",
            $options,
            CloudinaryTest::DEFAULT_ROOT_PATH . "image/youtube/http://www.youtube.com/watch%3Fv%3Dd9NF2edxy-M"
        );
    }

    public function test_background()
    {
        // should support background
        $options = array("background" => "red");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "b_red/test");
        $options = array("background" => "#112233");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "b_rgb:112233/test");
    }

    public function test_default_image()
    {
        // should support default_image
        $options = array("default_image" => "default");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "d_default/test");
    }

    public function test_angle()
    {
        // should support angle
        $options = array("angle" => 12);
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "a_12/test");
        $options = array("angle" => array("auto", 12));
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "a_auto.12/test");
    }

    public function test_overlay()
    {
        // should support overlay
        $options = array("overlay" => "text:hello");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "l_text:hello/test");
        // should not pass width/height to html if overlay
        $options = array("overlay" => "text:hello", "width" => 100, "height" => 100);
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "h_100,l_text:hello,w_100/test"
        );
    }

    public function test_underlay()
    {
        // should support underlay
        $options = array("underlay" => "text:hello");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "u_text:hello/test");
        // should not pass width/height to html if underlay
        $options = array("underlay" => "text:hello", "width" => 100, "height" => 100);
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "h_100,u_text:hello,w_100/test"
        );
    }

    public function test_overlay_fetch()
    {
        // should support overlay from a fetch url
        $options = array("overlay" => "fetch:http://cloudinary.com/images/old_logo.png");
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "l_fetch:aHR0cDovL2Nsb3VkaW5hcnkuY29tL2ltYWdlcy9vbGRfbG9nby5wbmc=/test"
        );
    }

    public function test_underlay_fetch()
    {
        // should support underlay from a fetch url
        $options = array("underlay" => "fetch:http://cloudinary.com/images/old_logo.png");
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "u_fetch:aHR0cDovL2Nsb3VkaW5hcnkuY29tL2ltYWdlcy9vbGRfbG9nby5wbmc=/test"
        );
    }

    public function test_fetch_format()
    {
        // should support format for fetch urls
        $options = array("format" => "jpg", "type" => "fetch");
        $this->cloudinary_url_assertion(
            "http://cloudinary.com/images/logo.png",
            $options,
            CloudinaryTest::DEFAULT_ROOT_PATH . "image/fetch/f_jpg/http://cloudinary.com/images/logo.png"
        );
    }

    public function test_streaming_profile()
    {
        // should support streaming profile
        $options = array("streaming_profile" => "some-profile");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "sp_some-profile/test");
    }

    public function test_effect()
    {
        // should support effect
        $options = array("effect" => "sepia");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "e_sepia/test");
    }

    public function test_effect_with_array()
    {
        // should support effect with array
        $options = array("effect" => array("sepia", -10));
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "e_sepia:-10/test");
    }

    public function test_density()
    {
        // should support density
        $options = array("density" => 150);
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "dn_150/test");
    }

    public function test_custom_function()
    {
        $test_id = self::TEST_ID;
        $wasm_str = self::$custom_function_wasm_str;

        // should support custom function from string
        $options = array('custom_function' => self::$custom_function_wasm_str);
        $this->cloudinary_url_assertion(
            $test_id,
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "fn_$wasm_str/$test_id"
        );

        // should support custom function from array
        $options = array('custom_function' => self::$custom_function_wasm);
        $this->cloudinary_url_assertion(
            $test_id,
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "fn_$wasm_str/$test_id"
        );

        $remote_str = self::$custom_function_remote_str;
        // should encode custom function source for remote function
        $options = array('custom_function' => self::$custom_function_remote);
        $this->cloudinary_url_assertion(
            $test_id,
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "fn_$remote_str/$test_id"
        );
    }

    public function test_custom_pre_function_string()
    {
        $test_id = self::TEST_ID;
        $wasm_str = self::$custom_function_wasm_str;

        // should support custom pre function from string
        $options = array('custom_pre_function' => self::$custom_function_wasm_str);
        $this->cloudinary_url_assertion(
            $test_id,
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "fn_pre:$wasm_str/$test_id"
        );
    }

    public function test_custom_pre_function_wasm_array()
    {
        $test_id = self::TEST_ID;
        $wasm_str = self::$custom_function_wasm_str;

        // should support custom pre function from array
        $options = array('custom_pre_function' => self::$custom_function_wasm);
        $this->cloudinary_url_assertion(
            $test_id,
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "fn_pre:$wasm_str/$test_id"
        );
    }

    public function test_custom_pre_function_remote()
    {
        $test_id = self::TEST_ID;
        $remote_str = self::$custom_function_remote_str;

        // should encode custom pre function source for remote pre function
        $options = array('custom_pre_function' => self::$custom_function_remote);
        $this->cloudinary_url_assertion(
            $test_id,
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "fn_pre:$remote_str/$test_id"
        );
    }

    public function test_page()
    {
        // should support page
        $options = array("page" => 5);
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "pg_5/test");
    }

    public function test_border()
    {
        // should support border
        $options = array("border" => array("width" => 5));
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "bo_5px_solid_black/test"
        );
        $options = array("border" => array("width" => 5, "color" => "#ffaabbdd"));
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "bo_5px_solid_rgb:ffaabbdd/test"
        );
        $options = array("border" => "1px_solid_blue");
        $this->cloudinary_url_assertion(
            "test",
            $options,
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "bo_1px_solid_blue/test"
        );
    }

    public function test_flags()
    {
        // should support flags
        $options = array("flags" => "abc");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "fl_abc/test");
        $options = array("flags" => array("abc", "def"));
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "fl_abc.def/test");
    }

    public function test_aspect_ratio()
    {
        // should support background
        $options = array("aspect_ratio" => "1.0");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "ar_1.0/test");
        $options = array("aspect_ratio" => "3:2");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_UPLOAD_PATH . "ar_3:2/test");
    }

    public function test_e_art_incognito()
    {
        $options = array("effect" => "art:incognito", "format" => "png");
        $tag = Cloudinary::generate_transformation_string($options);
        $this->assertEquals(
            "e_art:incognito",
            $tag
        );
    }

    public function test_folder_version()
    {
        // should add version if public_id contains /
        $this->cloudinary_url_assertion(
            self::TEST_FOLDER,
            array(),
            CloudinaryTest::DEFAULT_UPLOAD_PATH .  self::DEFAULT_VERSION_STR . '/' . self::TEST_FOLDER
        );
        $this->cloudinary_url_assertion(
            self::TEST_FOLDER,
            array('version' => self::IMAGE_VERSION),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . self::IMAGE_VERSION_STR . '/' . self::TEST_FOLDER
        );
        $this->cloudinary_url_assertion(
            self::IMAGE_VERSION_STR . '/' . self::TEST_ID,
            array(),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . self::IMAGE_VERSION_STR . '/' . self::TEST_ID
        );
    }

    /**
     * Should not set default version v1 to resources stored in folders if force_version is set to false
     */
    public function test_force_version()
    {
        $this->cloudinary_url_assertion(
            self::TEST_FOLDER,
            array(),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . self::DEFAULT_VERSION_STR . '/' . self::TEST_FOLDER
        );

        $this->cloudinary_url_assertion(
            self::TEST_FOLDER,
            array('force_version' => false),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . self::TEST_FOLDER
        );

        // Explicitly set version is always passed
        $this->cloudinary_url_assertion(
            self::TEST_ID,
            array(
                'version' => self::IMAGE_VERSION,
                'force_version' => false
            ),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . self::IMAGE_VERSION_STR . '/' . self::TEST_ID
        );

        $this->cloudinary_url_assertion(
            self::TEST_FOLDER,
            array(
                'version' => self::IMAGE_VERSION,
                'force_version' => false
            ),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . self::IMAGE_VERSION_STR . '/' . self::TEST_FOLDER
        );

        // Should use force_version from config
        Cloudinary::config(array('force_version' => false));

        $this->cloudinary_url_assertion(
            self::TEST_FOLDER,
            array(),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . self::TEST_FOLDER
        );

        // Should override config with options
        $this->cloudinary_url_assertion(
            self::TEST_FOLDER,
            array('force_version' => true),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . self::DEFAULT_VERSION_STR . '/' . self::TEST_FOLDER
        );
    }

    public function test_shorten()
    {
        $options = array("shorten" => true);
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_ROOT_PATH . "iu/test");

        $options = array("shorten" => true, "type" => "private");
        $this->cloudinary_url_assertion("test", $options, CloudinaryTest::DEFAULT_ROOT_PATH . "image/private/test");
    }

    public function test_signed_url()
    {
        // should correctly sign a url
        $this->cloudinary_url_assertion(
            "image.jpg",
            array(
                "version" => 1234,
                "transformation" => array("crop" => "crop", "width" => 10, "height" => 20),
                "sign_url" => true,
            ),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "s--Ai4Znfl3--/c_crop,h_20,w_10/v1234/image.jpg"
        );
        $this->cloudinary_url_assertion(
            "image.jpg",
            array("version" => 1234, "sign_url" => true),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "s----SjmNDA--/v1234/image.jpg"
        );
        $this->cloudinary_url_assertion(
            "image.jpg",
            array("transformation" => array("crop" => "crop", "width" => 10, "height" => 20), "sign_url" => true),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . "s--Ai4Znfl3--/c_crop,h_20,w_10/image.jpg"
        );
        $this->cloudinary_url_assertion(
            "image.jpg",
            array(
                "transformation" => array("crop" => "crop", "width" => 10, "height" => 20),
                "type" => "authenticated",
                "sign_url" => true,
            ),
            CloudinaryTest::DEFAULT_ROOT_PATH . "image/authenticated/s--Ai4Znfl3--/c_crop,h_20,w_10/image.jpg"
        );
        $this->cloudinary_url_assertion(
            "http://google.com/path/to/image.png",
            array("type" => "fetch", "version" => 1234, "sign_url" => true),
            CloudinaryTest::DEFAULT_ROOT_PATH . "image/fetch/s--hH_YcbiS--/v1234/http://google.com/path/to/image.png"
        );
        // Should sign an URL with a short signature by default
        $this->cloudinary_url_assertion(
            "sample.jpg",
            array("sign_url" => true),
            self::DEFAULT_UPLOAD_PATH . "s--v2fTPYTu--/sample.jpg"
        );
        // Should sign a URL with a short signature by default and use SHA256 when configured
        $this->cloudinary_url_assertion(
            "sample.jpg",
            array("sign_url" => true, "signature_algorithm" => Cloudinary::ALGO_SHA256),
            self::DEFAULT_UPLOAD_PATH . "s--2hbrSMPO--/sample.jpg"
        );
        // Should sign an URL with a long signature if long_url_signature is true
        $this->cloudinary_url_assertion(
            "sample.jpg",
            array("sign_url" => true, "long_url_signature" => true),
            self::DEFAULT_UPLOAD_PATH . "s--2hbrSMPOjj5BJ4xV7SgFbRDevFaQNUFf--/sample.jpg"
        );
    }

    public function test_escape_public_id()
    {
        //should escape public_ids
        $tests = array(
            "a b" => "a%20b",
            "a+b" => "a%2Bb",
            "a%20b" => "a%20b",
            "a-b" => "a-b",
            "a??b" => "a%3F%3Fb",
            "parentheses(interject)" => "parentheses%28interject%29",
        );
        foreach ($tests as $source => $target) {
            $url = Cloudinary::cloudinary_url($source);
            $this->assertEquals(CloudinaryTest::DEFAULT_UPLOAD_PATH . "$target", $url);
        }
    }

    /**
     * Should support url_suffix in shared distribution
     */
    public function test_allow_url_suffix_in_shared()
    {
        $options = array("url_suffix" => "hello");
        $url = Cloudinary::cloudinary_url("test", $options);
        $this->assertEquals(CloudinaryTest::DEFAULT_ROOT_PATH . "images/test/hello", $url);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function test_disallow_url_suffix_with_non_upload_types()
    {
        //should disallow url_suffix in non upload types
        $options = array("url_suffix" => "hello", "private_cdn" => true, "type" => "facebook");
        Cloudinary::cloudinary_url("test", $options);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function test_disallow_suffix_with_dot()
    {
        //should disallow url_suffix with .
        $options = array("url_suffix" => "hello/world", "private_cdn" => true);
        Cloudinary::cloudinary_url("test", $options);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function test_disallow_suffix_with_slash()
    {
        //should disallow url_suffix with /
        $options = array("url_suffix" => "hello/world", "private_cdn" => true);
        Cloudinary::cloudinary_url("test", $options);
    }


    public function test_url_suffix_for_private_cdn()
    {
        //should support url_suffix for private_cdn
        $this->cloudinary_url_assertion(
            "test",
            array("url_suffix" => "hello", "private_cdn" => true),
            "http://test123-res.cloudinary.com/images/test/hello"
        );
        $this->cloudinary_url_assertion(
            "test",
            array("url_suffix" => "hello", "transformation" => array("angle" => 0), "private_cdn" => true),
            "http://test123-res.cloudinary.com/images/a_0/test/hello"
        );
    }

    public function test_format_after_url_suffix()
    {
        //should put format after url_suffix
        $this->cloudinary_url_assertion(
            "test",
            array("url_suffix" => "hello", "private_cdn" => true, "format" => "jpg"),
            "http://test123-res.cloudinary.com/images/test/hello.jpg"
        );
    }

    public function test_dont_sign_the_url_suffix()
    {
        //should not sign the url_suffix
        $options = array("format" => "jpg", "sign_url" => true);
        preg_match('/s--[0-9A-Za-z_-]{8}--/', Cloudinary::cloudinary_url("test", $options), $matches);
        $this->cloudinary_url_assertion(
            "test",
            array("url_suffix" => "hello", "private_cdn" => true, "format" => "jpg", "sign_url" => true),
            "http://test123-res.cloudinary.com/images/" . $matches[0] . "/test/hello.jpg"
        );

        $options = array("format" => "jpg", "angle" => 0, "sign_url" => true);
        preg_match('/s--[0-9A-Za-z_-]{8}--/', Cloudinary::cloudinary_url("test", $options), $matches);
        $this->cloudinary_url_assertion(
            "test",
            array(
                "url_suffix" => "hello",
                "private_cdn" => true,
                "format" => "jpg",
                "transformation" => array("angle" => 0),
                "sign_url" => true,
            ),
            "http://test123-res.cloudinary.com/images/" . $matches[0] . "/a_0/test/hello.jpg"
        );
    }

    public function test_url_suffix_for_raw()
    {
        //should support url_suffix for raw uploads
        $this->cloudinary_url_assertion(
            "test",
            array("url_suffix" => "hello", "private_cdn" => true, "resource_type" => "raw"),
            "http://test123-res.cloudinary.com/files/test/hello"
        );
    }

    /**
     * Should support url_suffix for video uploads
     */
    public function test_url_suffix_for_videos()
    {
        $this->cloudinary_url_assertion(
            "test",
            array("url_suffix" => "hello", "private_cdn" => true, "resource_type" => "video"),
            "http://test123-res.cloudinary.com/videos/test/hello"
        );
    }

    /**
     * Should support url_suffix for private images
     */
    public function test_url_suffix_for_private()
    {
        $this->cloudinary_url_assertion(
            "test",
            array("url_suffix" => "hello", "private_cdn" => true, "resource_type" => "image", "type" => "private"),
            "http://test123-res.cloudinary.com/private_images/test/hello"
        );

        $this->cloudinary_url_assertion(
            "test",
            array(
                "url_suffix" => "hello",
                "private_cdn" => true,
                "format" => "jpg",
                "resource_type" => "image",
                "type" => "private",
            ),
            "http://test123-res.cloudinary.com/private_images/test/hello.jpg"
        );
    }

    /**
     * Should support url_suffix for authenticated images
     */
    public function test_url_suffix_for_authenticated()
    {
        $this->cloudinary_url_assertion(
            "test",
            array(
                "url_suffix" => "hello",
                "private_cdn" => true,
                "resource_type" => "image",
                "type" => "authenticated"
            ),
            "http://test123-res.cloudinary.com/authenticated_images/test/hello"
        );
    }

    public function test_allow_use_root_path_in_shared()
    {

        $this->cloudinary_url_assertion(
            "test",
            array("use_root_path" => true, "private_cdn" => false),
            CloudinaryTest::DEFAULT_ROOT_PATH . "test"
        );
        $this->cloudinary_url_assertion(
            "test",
            array("use_root_path" => true, "private_cdn" => false, "transformation" => array("angle" => 0)),
            CloudinaryTest::DEFAULT_ROOT_PATH . "a_0/test"
        );
    }

    public function test_use_root_path_for_private_cdn()
    {
        //should support use_root_path for private_cdn
        $this->cloudinary_url_assertion(
            "test",
            array("use_root_path" => true, "private_cdn" => true),
            "http://test123-res.cloudinary.com/test"
        );
        $this->cloudinary_url_assertion(
            "test",
            array("use_root_path" => true, "private_cdn" => true, "transformation" => array("angle" => 0)),
            "http://test123-res.cloudinary.com/a_0/test"
        );
    }

    public function test_use_root_path_with_url_suffix_for_private_cdn()
    {
        //should support use_root_path together with url_suffix for private_cdn
        $this->cloudinary_url_assertion(
            "test",
            array("use_root_path" => true, "url_suffix" => "hello", "private_cdn" => true),
            "http://test123-res.cloudinary.com/test/hello"
        );
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function test_disallow_use_root_path_if_not_image_upload_1()
    {
        //should disallow use_root_path if not image/upload
        $options = array("use_root_path" => true, "private_cdn" => true, "type" => "facebook");
        Cloudinary::cloudinary_url("test", $options);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function test_disallow_use_root_path_if_not_image_upload_2()
    {
        //should disallow use_root_path if not image/upload
        $options = array("use_root_path" => true, "private_cdn" => true, "resource_type" => "raw");
        Cloudinary::cloudinary_url("test", $options);
    }

    public function test_norm_range_value()
    {
        $method = new ReflectionMethod('Cloudinary', 'norm_range_value');
        $method->setAccessible(true);
        foreach ($this->range_test_pairs as $pair) {
            $this->assertEquals($method->invoke(null, $pair[0]), $pair[1]);
        }
        $this->assertNull($method->invoke(null, "auto"), "Shouldn't support 'auto' value");
    }

    public function test_norm_auto_range_value()
    {
        $method = new ReflectionMethod('Cloudinary', 'norm_auto_range_value');
        $method->setAccessible(true);
        foreach ($this->range_test_pairs as $pair) {
            $this->assertEquals($method->invoke(null, $pair[0]), $pair[1]);
        }
        $this->assertEquals($method->invoke(null, "auto"), "auto", "Should support 'auto' value");
    }

    public function test_video_codec()
    {
        // should support a string value
        $this->cloudinary_url_assertion("video_id", array('resource_type' => 'video', 'video_codec' => 'auto'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "vc_auto/video_id");
        // should support a hash value
        $this->cloudinary_url_assertion(
            "video_id",
            array(
                'resource_type' => 'video',
                'video_codec' => array('codec' => 'h264', 'profile' => 'basic', 'level' => '3.1'),
            ),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "vc_h264:basic:3.1/video_id");
    }

    /**
     * Should support a single number, an array of mixed type and a string, including open-ended and closed range values
     */
    public function test_fps()
    {
        $fps_test_values = [
            ['24-29.97', 'fps_24-29.97'],
            [24, 'fps_24'],
            [24.973, 'fps_24.973'],
            ['24', 'fps_24'],
            ['-24', 'fps_-24'],
            ['$v', 'fps_$v'],
            [[24, 29.97], 'fps_24-29.97'],
            [['24', '$v'], 'fps_24-$v']
        ];

        foreach ($fps_test_values as $value) {
            $this->cloudinary_url_assertion(
                "video_id",
                array('resource_type' => 'video', 'fps' => $value[0]),
                CloudinaryTest::VIDEO_UPLOAD_PATH . $value[1] . "/video_id"
            );
        }
    }

    /**
     * Should support a positive number or a string
     */
    public function test_keyframe_interval()
    {
        $test_values = [
            [10, 'ki_10.0'],
            [0.05, 'ki_0.05'],
            [3.45, 'ki_3.45'],
            [300, 'ki_300.0'],
            ['10', 'ki_10'],
        ];

        foreach ($test_values as $value) {
            $this->cloudinary_url_assertion(
                'video_id',
                array('resource_type' => 'video', 'keyframe_interval' => $value[0]),
                CloudinaryTest::VIDEO_UPLOAD_PATH . $value[1] . "/video_id"
            );
        }
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function test_keyframe_interval_positive() {
        $options = array('resource_type' => 'video', 'keyframe_interval' => -1);
        Cloudinary::cloudinary_url('video_id', $options);
    }

    public function test_audio_codec()
    {
        // should support a string value
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'audio_codec' => 'acc'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "ac_acc/video_id"
        );
    }

    public function test_bit_rate()
    {
        // should support an integer value
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'bit_rate' => 2048),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "br_2048/video_id"
        );
        // should support "<integer>k"
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'bit_rate' => '44k'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "br_44k/video_id"
        );
        // should support "<integer>m"
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'bit_rate' => '1m'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "br_1m/video_id"
        );
    }

    public function test_audio_frequency()
    {
        // should support an integer value
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'audio_frequency' => 44100),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "af_44100/video_id"
        );
    }

    public function test_video_sampling()
    {
        // should support an integer value
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'video_sampling' => 20),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "vs_20/video_id"
        );
        // should support an string value in the a form of '<float>s'
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'video_sampling' => "2.3s"),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "vs_2.3s/video_id"
        );
    }

    public function test_start_offset()
    {
        // should support decimal seconds
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'start_offset' => 2.63),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "so_2.63/video_id"
        );
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'start_offset' => '2.63'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "so_2.63/video_id"
        );
        // should support percents of the video length as "<number>p"
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'start_offset' => '35p'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "so_35p/video_id"
        );
        // should support percents of the video length as "<number>%"
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'start_offset' => '35%'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "so_35p/video_id"
        );
        // should support auto select of a suitable frame from the first few seconds of a video
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'start_offset' => 'auto'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "so_auto/video_id"
        );
    }

    public function test_end_offset()
    {
        // should support decimal seconds
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'end_offset' => 2.63),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "eo_2.63/video_id"
        );
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'end_offset' => '2.63'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "eo_2.63/video_id"
        );
        // should support percents of the video length as "<number>p"
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'end_offset' => '35p'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "eo_35p/video_id"
        );
        // should support percents of the video length as "<number>%"
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'end_offset' => '35%'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "eo_35p/video_id"
        );
    }

    public function test_duration_parameter()
    {
        // should support decimal seconds
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'duration' => 2.63),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "du_2.63/video_id"
        );
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'duration' => '2.63'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "du_2.63/video_id"
        );
        // should support percents of the video length as "<number>p"
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'duration' => '35p'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "du_35p/video_id"
        );
        // should support percents of the video length as "<number>%"
        $this->cloudinary_url_assertion(
            "video_id",
            array('resource_type' => 'video', 'duration' => '35%'),
            CloudinaryTest::VIDEO_UPLOAD_PATH . "du_35p/video_id"
        );
    }

    public function test_offset()
    {
        foreach (array(
                'eo_3.21,so_2.66' => '2.66..3.21',
                'eo_3.22,so_2.67' => array(2.67, 3.22),
                'eo_70p,so_35p' => array('35%', '70%'),
                'eo_71p,so_36p' => array('36p', '71p'),
                'eo_70.5p,so_35.5p' => array('35.5p', '70.5p'),
            ) as $transformation => $offset
        ) {
            $this->cloudinary_url_assertion(
                "video_id",
                array('resource_type' => 'video', 'offset' => $offset),
                CloudinaryTest::VIDEO_UPLOAD_PATH . $transformation . "/video_id"
            );
        }
    }

    public function layers_options()
    {
        return array(
            "public_id" => array(array("public_id" => "logo"), "logo"),
            "public_id with folder" => array(array("public_id" => "folder/logo"), "folder:logo"),
            "private" => array(array("public_id" => "logo", "type" => "private"), "private:logo"),
            "format" => array(array("public_id" => "logo", "format" => "png"), "logo.png"),
            "video" => array(array("resource_type" => "video", "public_id" => "cat"), "video:cat"),
            "text" => array(
                array("public_id" => "logo", "text" => "Hello World, Nice to meet you?"),
                "text:logo:Hello%20World%252C%20Nice%20to%20meet%20you%3F",
            ),
            "text with slash" => array(
                array(
                    "text" => "Hello World, Nice/ to meet you?",
                    "font_family" => "Arial",
                    "font_size" => "18",
                ),
                "text:Arial_18:Hello%20World%252C%20Nice%252F%20to%20meet%20you%3F",
            ),
            "text with font family and size" => array(
                array(
                    "text" => "Hello World, Nice to meet you?",
                    "font_family" => "Arial",
                    "font_size" => "18",
                ),
                "text:Arial_18:Hello%20World%252C%20Nice%20to%20meet%20you%3F",
            ),
            "text with style" => array(
                array(
                    "text" => "Hello World, Nice to meet you?",
                    "font_family" => "Arial",
                    "font_size" => "18",
                    "font_weight" => "bold",
                    "font_style" => "italic",
                    "letter_spacing" => 4,
                ),
                "text:Arial_18_bold_italic_letter_spacing_4:Hello%20World%252C%20Nice%20to%20meet%20you%3F",
            ),
            "text with antialiasing and hinting" => array(
                array(
                    "text" => "Hello World, Nice to meet you?",
                    "font_family" => "Arial",
                    "font_size" => "18",
                    "font_antialiasing" => "best",
                    "font_hinting" => "medium"
                ),
                "text:Arial_18_antialias_best_hinting_medium:Hello%20World%252C%20Nice%20to%20meet%20you%3F",
            ),
            "subtitles" => array(
                array("resource_type" => "subtitles", "public_id" => "sample_sub_en.srt"),
                "subtitles:sample_sub_en.srt",
            ),
            "subtitles with font family and size" => array(
                array(
                    "resource_type" => "subtitles",
                    "public_id" => "sample_sub_he.srt",
                    "font_family" => "Arial",
                    "font_size" => "40",
                ),
                "subtitles:Arial_40:sample_sub_he.srt",
            ),
            "fetch" => array(
                array("public_id" => "logo", 'fetch' => 'https://cloudinary.com/images/old_logo.png'),
                'fetch:aHR0cHM6Ly9jbG91ZGluYXJ5LmNvbS9pbWFnZXMvb2xkX2xvZ28ucG5n',
            ),

        );
    }

    /**
     * @dataProvider layers_options
     */
    public function test_overlay_options($options, $expected)
    {
        $reflector = new ReflectionClass('Cloudinary');
        $process_layer = $reflector->getMethod('process_layer');
        $process_layer->setAccessible(true);
        $result = $process_layer->invoke(null, $options, "overlay");
        $this->assertEquals($expected, $result);
    }

    public function test_ignore_default_values_in_overlay_options()
    {
        $options = array("public_id" => "logo", "type" => "upload", "resource_type" => "image");
        $expected = "logo";
        $reflector = new ReflectionClass('Cloudinary');
        $process_layer = $reflector->getMethod('process_layer');
        $process_layer->setAccessible(true);
        $result = $process_layer->invoke(null, $options, "overlay");
        $this->assertEquals($expected, $result);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Must supply either style parameters or a public_id
     * when providing text parameter in a text overlay
     */
    public function test_text_require_public_id_or_style()
    {
        $options = array("overlay" => array("text" => "text"));
        Cloudinary::cloudinary_url("test", $options);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Must supply font_family for text in overlay
     */
    public function test_overlay_style_requires_font_family()
    {
        $options = array("overlay" => array("text" => "text", "font_style" => "italic"));
        Cloudinary::cloudinary_url("test", $options);
    }

    public function resource_types()
    {
        return array(
            "image" => array("image"),
            "video" => array("video"),
            "raw" => array("raw"),
            "subtitles" => array("subtitles"),
        );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessageRegExp #Must supply public_id for .* underlay#
     * @dataProvider resource_types
     */
    public function test_underlay_require_public_id_for_non_text($resource_type)
    {
        $options = array("underlay" => array("resource_type" => $resource_type));
        Cloudinary::cloudinary_url("test", $options);
    }

    /**
     * should support and translate operators: '=', '!=', '<', '>', '<=', '>=', '&&', '||'
     * and variables: width, height, pages, faces, aspect_ratio
     */
    public function test_translate_if()
    {
        $allOperators =
            'if_' .
            'w_eq_0_and' .
            '_h_ne_0_or' .
            '_ar_lt_0_and' .
            '_pc_gt_0_and' .
            '_fc_lte_0_and' .
            '_w_gte_0' .
            ',e_grayscale';
        $condition = "width = 0 && height != 0 || aspect_ratio < 0 && page_count > 0 and face_count <= 0 and width >= 0";
        $options = array("if" => $condition, "effect" => "grayscale");
        $transformation = Cloudinary::generate_transformation_string($options);
        $this->assertEquals($allOperators, $transformation);
        $this->assertEquals(array(), $options);
        $options = array("if" => "aspect_ratio > 0.3 && aspect_ratio < 0.5", "effect" => "grayscale");
        $transformation = Cloudinary::generate_transformation_string($options);
        $this->assertEquals("if_ar_gt_0.3_and_ar_lt_0.5,e_grayscale", $transformation);
        $this->assertEquals(array(), $options);
    }

    public function test_normalize_expression_should_not_convert_user_variables()
    {
        $options = array(
            'transformation' => array(
                array('$width' => 10),
                array('width' => '$width + 10 + width'),
            ),
        );

        $t = Cloudinary::generate_transformation_string($options);

        $this->assertEquals('$width_10/w_$width_add_10_add_w', $t);
    }

    public function test_array_should_define_set_of_variables()
    {
        $options = array(
            'if' => "face_count > 2",
            'crop' => "scale",
            'width' => '$foo * 200',
            'variables' => array(
                '$z' => 5,
                '$foo' => '$z * 2',
            ),
        );

        $t = Cloudinary::generate_transformation_string($options);
        $this->assertEquals('if_fc_gt_2,$z_5,$foo_$z_mul_2,c_scale,w_$foo_mul_200', $t);
    }

    public function test_duration_variable()
    {
        $options = array('if' => "duration > 30", 'width' => '100', 'crop' => "scale");
        $t = Cloudinary::generate_transformation_string($options);

        $this->assertEquals('if_du_gt_30,c_scale,w_100', $t);

        $options = array('if' => "initial_duration > 30", 'width' => '100', 'crop' => "scale");
        $t = Cloudinary::generate_transformation_string($options);

        $this->assertEquals('if_idu_gt_30,c_scale,w_100', $t);
    }

    public function test_key_should_define_variable()
    {
        $options = array(
            'transformation' => array(
                array('$foo' => 10),
                array('if' => "face_count > 2"),
                array('crop' => "scale", 'width' => '$foo * 200 / face_count'),
                array('if' => "end"),
            ),
        );

        $t = Cloudinary::generate_transformation_string($options);
        $this->assertEquals('$foo_10/if_fc_gt_2/c_scale,w_$foo_mul_200_div_fc/if_end', $t);
    }

    public function test_url_should_convert_operators()
    {
        $options = array(
            'transformation' => array(
                array('width' => 'initial_width ^ 2','height' => 'initial_height * 2', 'crop' => 'scale'),
            ),
        );

        $result = Cloudinary::cloudinary_url("test", $options);

        $this->assertEquals(CloudinaryTest::DEFAULT_UPLOAD_PATH . 'c_scale,h_ih_mul_2,w_iw_pow_2/test', $result);
    }

    public function test_should_support_streaming_profile()
    {
        $options = array(
            'streaming_profile' => 'some_profile',
        );

        $t = Cloudinary::generate_transformation_string($options);
        $this->assertEquals('sp_some_profile', $t);
    }

    public function test_should_sort_defined_variable()
    {
        $options = array(
            '$second' => 1,
            '$first' => 2,
        );

        $t = Cloudinary::generate_transformation_string($options);
        $this->assertEquals('$first_2,$second_1', $t);
    }

    public function test_should_place_defined_variables_before_ordered()
    {
        $options = array(
            'variables' => array(
                '$z' => 5,
                '$foo' => '$z * 2',
            ),
            '$second' => 1,
            '$first' => 2,
        );

        $t = Cloudinary::generate_transformation_string($options);
        $this->assertEquals('$first_2,$second_1,$z_5,$foo_$z_mul_2', $t);
    }

    public function test_should_support_text_values()
    {
        $e = array(
            'effect' => '$efname:100',
            '$efname' => '!blur!',
        );
        $t = Cloudinary::generate_transformation_string($e);

        $this->assertEquals('$efname_!blur!,e_$efname:100', $t);
    }

    public function test_should_support_string_interpolation()
    {
        $this->cloudinary_url_assertion(
            "sample",
            array(
                'crop' => 'scale',
                'overlay' => array(
                    'text' => '$(start)Hello $(name)$(ext), $(no ) $( no)$(end)',
                    'font_family' => "Arial",
                    'font_size' => "18",
                ),
            ),
            CloudinaryTest::DEFAULT_UPLOAD_PATH . 'c_scale,l_text:Arial_18:$(start)Hello%20$(name)$(ext)%252C%20%24%28no%20%29%20%24%28%20no%29$(end)/sample'
        );
    }

    /**
     * Test build_array_of_assoc_arrays function
     */
    public function test_build_array_of_assoc_arrays()
    {
        $assoc_array_data = array("one" => 1, "two" => 2, "three" => 3);
        $array_of_assoc_array = array($assoc_array_data);
        $method = new ReflectionMethod('Cloudinary', 'build_array_of_assoc_arrays');
        $method->setAccessible(true);
        # should convert an assoc array to an array of assoc arrays
        $this->assertEquals(array($assoc_array_data), $method->invoke(null, $assoc_array_data));

        # should leave as is
        $this->assertEquals($array_of_assoc_array, $method->invoke(null, $array_of_assoc_array));

        # should convert a JSON string representing an assoc array to an array of assoc arrays
        $string_data = '{"one": 1, "two": 2, "three": 3}';
        $this->assertEquals($array_of_assoc_array, $method->invoke(null, $string_data));

        # should convert a JSON string representing an array of assoc arrays to an array of assoc arrays
        $string_array_data = '[{"one": 1, "two": 2, "three": 3}]';
        $this->assertEquals($array_of_assoc_array, $method->invoke(null, $string_array_data));

        # should return an empty array on null
        $this->assertEquals(array(), $method->invoke(null, null));

        # should return an empty array on array()
        $this->assertEquals(array(), $method->invoke(null, array()));

        # should throw InvalidArgumentException on invalid value
        $invalid_values = array("", array(array()), array("not_an_array"), array(7357));
        foreach ($invalid_values as $value) {
            try {
                $method->invoke(null, $value);
                $this->fail('InvalidArgumentException was not thrown');
            } catch (\InvalidArgumentException $e) {
            }
        }
    }

    /**
     * Test json_encode_array_of_assoc_arrays function
     */
    public function test_json_encode_array_of_assoc_arrays()
    {
        $method = new ReflectionMethod('Cloudinary', 'json_encode_array_of_assoc_arrays');
        $method->setAccessible(true);
        # should encode simple values
        $this->assertEquals('[]', $method->invoke(null, (array())));
        $this->assertEquals('[{"k":"v"}]', $method->invoke(null, array(array("k" =>"v"))));

        # should encode DateTime to ISO format
        $this->assertEquals(
            '[{"k":"2019-02-22T00:00:00+0000"}]',
            $method->invoke(null, array(array("k" =>new \DateTime("2019-02-22"))))
        );
        $this->assertEquals(
            '[{"k":"2019-02-22T16:20:57+0000"}]',
            $method->invoke(null, array(array("k" =>new \DateTime("2019-02-22 16:20:57Z"))))
        );

        # should throw InvalidArgumentException on invalid value
        try {
            $method->invoke(null, "not_valid");
            $this->fail('InvalidArgumentException was not thrown');
        } catch (\InvalidArgumentException $e) {
        }
    }

    /**
     * Test encode_array_to_json function
     *
     * @see test_json_encode_array_of_assoc_arrays
     * @see test_build_array_of_assoc_arrays
     */
    public function test_encode_array_to_json()
    {
        $method = new ReflectionMethod('Cloudinary', 'json_encode_array_of_assoc_arrays');
        $method->setAccessible(true);
        # should handle null value
        $this->assertEquals(null, Cloudinary::encode_array_to_json(null));

        # should handle regular case
        $this->assertEquals('[{"k":"v"}]', Cloudinary::encode_array_to_json('[{"k":"v"}]'));
        $this->assertEquals('[{"k":"v"}]', $method->invoke(null, array(array("k" =>"v"))));
    }

    /**
     * Should safely encode string to base64url format (with _ instead of / and - instead of +)
     *
     * @throws ReflectionException
     */
    public function test_base64url_encode()
    {
        $base64url_encode = new ReflectionMethod('Cloudinary', 'base64url_encode');
        $base64url_encode->setAccessible(true);

        $this->assertEquals("YWQ_Lix4MDl-IUAh",  $base64url_encode->invoke(null, "ad?.,x09~!@!"));
    }

    /**
     * Test array_copy function
     */
    public function test_array_copy()
    {
        // Should return non array values as is
        $this->assertEquals(null, Cloudinary::array_copy(null));
        $this->assertEquals('null', Cloudinary::array_copy('null'));

        // Should copy simple array
        $orig_array = array('a', array('b' =>'c'), 'd');
        $same_orig_array = array('a', array('b' =>'c'), 'd');
        $copied_array = Cloudinary::array_copy($orig_array);
        $orig_array[1]['b'] =  'e';

        $this->assertNotEquals($same_orig_array, $orig_array);
        $this->assertEquals($same_orig_array, $copied_array);

        // Should copy objects in an array
        $o = new stdClass();
        $o->key = 'original_value';

        $orig_array = array('o' =>$o);

        $shallow_copied_array = $orig_array;
        $copied_array = Cloudinary::array_copy($orig_array);

        $o->key = 'new_value';

        $this->assertEquals('new_value', $orig_array['o']->key);
        $this->assertEquals('new_value', $shallow_copied_array['o']->key);
        $this->assertEquals('original_value', $copied_array['o']->key);
    }

    /**
     * Should correctly handle format and fetch_format with and without custom transformation
     */
    public function test_cloudinary_scaled_url()
    {
        $image_format = "jpg";
        $fetch_format = "gif";
        $resp_w = 99;
        $resp_trans = "c_scale,w_$resp_w";
        $effect = "sepia";

        $options = array("format" => $image_format, "type" => "fetch", "fetch_format" => $fetch_format);

        // Without custom transformation
        $actual_url = Cloudinary::cloudinary_scaled_url(self::FETCH_URL, $resp_w, [], $options);

        $this->assertEquals(
            self::DEFAULT_FETCH_PATH . "f_$fetch_format/$resp_trans/" . self::FETCH_URL,
            $actual_url
        );

        // With custom transformation
        $actual_url = Cloudinary::cloudinary_scaled_url(self::FETCH_URL, $resp_w, self::$crop_transformation, $options);

        $this->assertEquals(
            self::DEFAULT_FETCH_PATH . "c_crop,f_$image_format,w_100/$resp_trans/" . self::FETCH_URL,
            $actual_url
        );

        // Add base transformation
        $options["effect"] = $effect;
        $actual_url = Cloudinary::cloudinary_scaled_url(self::FETCH_URL, $resp_w, [], $options);

        $this->assertEquals(
            self::DEFAULT_FETCH_PATH . "e_$effect,f_$fetch_format/$resp_trans/" . self::FETCH_URL,
            $actual_url
        );

        // Should ignore base transformation
        $actual_url = Cloudinary::cloudinary_scaled_url(self::FETCH_URL, $resp_w, self::$crop_transformation, $options);

        $this->assertEquals(
            self::DEFAULT_FETCH_PATH . "c_crop,f_$image_format,w_100/$resp_trans/" . self::FETCH_URL,
            $actual_url
        );

        $options["raw_transformation"] = self::$raw_transformation;

        // Should include raw transformation from base options
        $actual_url = Cloudinary::cloudinary_scaled_url(self::FETCH_URL, $resp_w, [], $options);

        $this->assertEquals(
            self::DEFAULT_FETCH_PATH . "e_$effect,f_$fetch_format," . self::$raw_transformation. "/$resp_trans/".
            self::FETCH_URL,
            $actual_url
        );
    }

    public function test_build_eager()
    {
        $test_data = [
            ['should support strings',
                [self::$sepia_transformation_str, self::$sepia_transformation_str . '/jpg'],
                self::$sepia_transformation_str . '|' . self::$sepia_transformation_str . '/jpg'],
            ['should concatenate transformations using pipe',
                [self::$crop_transformation, self::$sepia_transformation],
                self::$crop_transformation_str . '|' . self::$sepia_transformation_str],
            ['should support transformations with multiple components',
                [['transformation' => [self::$crop_transformation, self::$sepia_transformation]],
                    self::$sepia_transformation],
                self::$crop_transformation_str . '/' . self::$sepia_transformation_str . '|' .
                    self::$sepia_transformation_str],
            ['should concatenate format at the end of the transformation',
                [array_merge(self::$crop_transformation, ['format' => 'gif']), self::$sepia_transformation],
                self::$crop_transformation_str . '/gif|' . self::$sepia_transformation_str],
            ['should support an empty format',
                [array_merge(self::$crop_transformation, ['format' => '']), self::$sepia_transformation],
                self::$crop_transformation_str . '/|' . self::$sepia_transformation_str],
            ['should treat a null format as none',
                [array_merge(self::$crop_transformation, ['format' => null]), self::$sepia_transformation],
                self::$crop_transformation_str . '|' . self::$sepia_transformation_str],
            ['should concatenate format at the end of the transformation',
                [array_merge(self::$crop_transformation, ['format' => 'gif']),
                    array_merge(self::$sepia_transformation, ['format' => 'jpg'])],
                self::$crop_transformation_str . '/gif|' . self::$sepia_transformation_str . '/jpg'],
            ['should support transformations with multiple components and format',
                [['transformation' => [self::$crop_transformation, self::$sepia_transformation], 'format' => 'gif'],
                    self::$sepia_transformation],
                self::$crop_transformation_str . '/' . self::$sepia_transformation_str . '/gif|' .
                    self::$sepia_transformation_str]
        ];

        foreach ($test_data as $single_test) {
            $this->assertEquals($single_test[2], Cloudinary::build_eager($single_test[1]), $single_test[0]);
        }
    }

    /**
     * Make sure this method is returning a correct sha256 and sha1 hashes.
     */
    public function test_api_sign_request()
    {
        $params = [
            'cloud_name' => 'dn6ot3ged',
            'timestamp' => 1568810420,
            'username' => 'user@cloudinary.com'
        ];
        $signature = Cloudinary::api_sign_request($params, 'hdcixPpR2iKERPwqvH6sHdK9cyac', Cloudinary::ALGO_SHA256);
        $expected = '45ddaa4fa01f0c2826f32f669d2e4514faf275fe6df053f1a150e7beae58a3bd';
        $this->assertEquals($expected, $signature);

        $signature = Cloudinary::api_sign_request($params, 'hdcixPpR2iKERPwqvH6sHdK9cyac');
        $expected_sha1 = '14c00ba6d0dfdedbc86b316847d95b9e6cd46d94';
        $this->assertEquals($expected_sha1, $signature);
    }


    private function cloudinary_url_assertion($source, $options, $expected, $expected_options = array())
    {
        $url = Cloudinary::cloudinary_url($source, $options);
        $this->assertEquals($expected_options, $options);
        $this->assertEquals($expected, $url);
    }
}
