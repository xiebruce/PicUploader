<?php

namespace Cloudinary {

    require_once('TestHelper.php');

    use Cloudinary;
    use Cloudinary\Api\GeneralError;
    use Cloudinary\Api\NotFound;
    use Cloudinary\Cache\Adapter\KeyValueCacheAdapter;
    use Cloudinary\Cache\ResponsiveBreakpointsCache;
    use Cloudinary\Test\Cache\Storage\DummyCacheStorage;
    use Exception;
    use PHPUnit\Framework\TestCase;
    use PHPUnit_Framework_Constraint_IsType as IsType;

    /**
     * Class UploaderTest
     * @package Cloudinary
     */
    class UploaderTest extends TestCase
    {

        public $url_prefix;

        protected static $rbp_trans = ["angle" => 45, "crop" => "scale"];
        protected static $rbp_format = "png";
        protected static $rbp_values = [206, 50];
        protected static $rbp_params;

        private static $metadata_field_unique_external_id;
        private static $metadata_field_value;
        private static $metadata_fields;

        public static function setUpBeforeClass()
        {
            Cloudinary::reset_config();

            self::$metadata_field_unique_external_id = 'metadata_field_external_id_' . UNIQUE_TEST_ID;
            self::$metadata_field_value = 'metadata_field_value_' . UNIQUE_TEST_ID;
            self::$metadata_fields = [
                self::$metadata_field_unique_external_id => self::$metadata_field_value
            ];

            try {
                (new Cloudinary\Api())->add_metadata_field([
                    'external_id' => self::$metadata_field_unique_external_id,
                    'label' => self::$metadata_field_unique_external_id,
                    'type' => 'string'
                ]);
            } catch (GeneralError $e) {
                self::fail(
                    'Exception thrown while adding metadata field in UploaderTest::setUpBeforeClass() - ' .
                    $e->getMessage()
                );
            }

            Curl::$instance = new Curl();

            self::$rbp_params = [
                "use_cache" => true,
                "responsive_breakpoints" => [
                    [
                        "create_derived" => false,
                        "transformation" => [
                            "angle" => 90
                        ],
                        "format" => 'gif'
                    ],
                    [
                        "create_derived" => false,
                        "transformation" => self::$rbp_trans,
                        "format" => self::$rbp_format
                    ],
                    [
                        "create_derived" => false
                    ]
                ],
                "type" => "upload",
                "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),
            ];
        }

        protected function setUp()
        {
            \Cloudinary::reset_config();
            if (!Cloudinary::config_get("api_secret")) {
                $this->markTestSkipped('Please setup environment for Upload test to run');
            }
            $this->url_prefix = Cloudinary::config_get("upload_prefix", Cloudinary::DEFAULT_UPLOAD_PREFIX);
        }

        protected function tearDown()
        {
            Curl::$instance = new Curl();
        }

        /**
         * @throws GeneralError
         */
        public static function tearDownAfterClass()
        {
            if (!Cloudinary::config_get("api_secret")) {
                self::fail("You need to configure the cloudinary api for the tests to work.");
            }

            $api = new Cloudinary\Api();

            try {
                $api->delete_metadata_field(self::$metadata_field_unique_external_id);
            } catch (NotFound $e) {
                printf("The metadata field '%s' could not be deleted.\n", self::$metadata_field_unique_external_id);
            }

            self::delete_resources($api);
        }

        /**
         * Delete all test related resources
         *
         * @param \Cloudinary\Api $api an initialized api object
         */
        protected static function delete_resources($api)
        {
            try {
                $api->delete_resources_by_tag(UNIQUE_TEST_TAG);
                $api->delete_resources_by_tag(UNIQUE_TEST_SPRITE_TAG);
            } catch (Exception $e) {
            }
        }

        public function test_upload()
        {
            $result = Uploader::upload(TEST_IMG, ["tags" => array(TEST_TAG, UNIQUE_TEST_TAG)]);
            $this->assertEquals($result["width"], 241);
            $this->assertEquals($result["height"], 51);
            $expected_signature = Cloudinary::api_sign_request(
                array(
                    "public_id" => $result["public_id"],
                    "version" => $result["version"],
                ),
                Cloudinary::config_get("api_secret")
            );
            $this->assertEquals($result["signature"], $expected_signature);
            Curl::mockUpload($this);

            Uploader::upload(TEST_IMG, array("ocr" => "adv_ocr", "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            $fields = Curl::$instance->fields();
            $this->assertArraySubset(array("ocr" => "adv_ocr"), $fields);

            // Test upload with metadata
            Uploader::upload(
                TEST_IMG,
                array("metadata" => array("metadata_color" => "red", "metadata_shape" => "dodecahedron"))
            );
            $fields = Curl::$instance->fields();
            $this->assertArraySubset(array("metadata" => "metadata_color=red|metadata_shape=dodecahedron"), $fields);
        }

        public function test_upload_responsive_breakpoints_cache()
        {
            $cache = ResponsiveBreakpointsCache::instance();
            $cache->setCacheAdapter(new KeyValueCacheAdapter(new DummyCacheStorage()));

            $result = Uploader::upload(\Cloudinary\TEST_IMG, self::$rbp_params);

            $res = $cache->get(
                $result["public_id"],
                ["transformation" => self::$rbp_trans, "format" => self::$rbp_format]
            );

            $this::assertEquals(self::$rbp_values, $res);
        }

        /*
         * Should use filename passed in options as original_filename and not the actual filesystem file name
         */
        public function test_upload_custom_filename()
        {
            $custom_filename = UNIQUE_TEST_ID . '_' . basename(TEST_IMG);
            $result = Uploader::upload(
                TEST_IMG,
                [
                    'filename' => $custom_filename,
                    'tags' => array(TEST_TAG, UNIQUE_TEST_TAG)
                ]
            );

            // Note that original_filename strips extension
            $this->assertEquals(pathinfo($custom_filename, PATHINFO_FILENAME), $result["original_filename"]);
        }

        public function test_rename()
        {
            Curl::mockUpload($this);
            Uploader::rename("foobar", "foobar2", array("overwrite" => true));
            assertUrl($this, "/image/rename");
            assertParam($this, "overwrite", 1);
            assertParam($this, "from_public_id", "foobar");
            assertParam($this, "to_public_id", "foobar2");
        }

        public function test_rename_to_type()
        {
            Curl::mockUpload($this);
            Uploader::rename("foobar", "foobar", array("to_type" => "private"));
            assertUrl($this, "/image/rename");
            assertParam($this, "to_type", "private");
            assertParam($this, "from_public_id", "foobar");
            assertParam($this, "to_public_id", "foobar");
        }

        public function test_explicit()
        {
            Curl::mockUpload($this);

            Uploader::explicit(
                "cloudinary",
                array("type" => "twitter_name", "eager" => array("crop" => "scale", "width" => "2.0"))
            );
            $fields = Curl::$instance->fields();
            $this->assertArraySubset(array("type" => "twitter_name", "eager" => "c_scale,w_2.0"), $fields);
            Uploader::explicit("cloudinary", array("ocr" => "adv_ocr"));
            $fields = Curl::$instance->fields();
            $this->assertArraySubset(array("ocr" => "adv_ocr"), $fields);

            // Test explicit with metadata
            Uploader::explicit(
                "cloudinary",
                array("metadata" => array("metadata_color" => "red", "metadata_shape" => "dodecahedron"))
            );
            $fields = Curl::$instance->fields();
            $this->assertArraySubset(array("metadata" => "metadata_color=red|metadata_shape=dodecahedron"), $fields);
        }

        public function test_explicit_responsive_breakpoints_cache()
        {
            $cache = ResponsiveBreakpointsCache::instance();
            $cache->setCacheAdapter(new KeyValueCacheAdapter(new DummyCacheStorage()));

            $upload_result = Uploader::upload(\Cloudinary\TEST_IMG, ["tags" => array(TEST_TAG, UNIQUE_TEST_TAG),]);

            $result = Uploader::explicit($upload_result["public_id"], self::$rbp_params);

            $res = $cache->get(
                $result["public_id"],
                ["transformation" => self::$rbp_trans, "format" => self::$rbp_format]
            );

            $this::assertEquals(self::$rbp_values, $res);
        }

        public function test_update_metadata()
        {
            Curl::mockUpload($this);

            Uploader::update_metadata(
                array("metadata_color" => "red", "metadata_shape" => ""),
                array("test_id_1", "test_id_2")
            );
            $fields = Curl::$instance->fields();
            $this->assertArraySubset(
                array("metadata"      => "metadata_color=red|metadata_shape=",
                      "public_ids[0]" => "test_id_1",
                      "public_ids[1]" => "test_id_2",
                ),
                $fields
            );
        }

        public function test_build_eager()
        {
            $eager = array(
                "0" => array(
                    "0" => array("width" => 3204, "crop" => "scale"),
                ),
                "1" => array(
                    "angle" => array("0" => 127),
                    "format" => "jpg",
                ),
            );
            $this->assertEquals("c_scale,w_3204|a_127/jpg", Cloudinary::build_eager($eager));
        }

        public function test_eager()
        {
            Curl::mockUpload($this);
            Uploader::upload(TEST_IMG, array("eager" => array("crop" => "scale", "width" => "2.0"), "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            $fields = Curl::$instance->fields();
            $this->assertArraySubset(array("eager" => "c_scale,w_2.0"), $fields);
        }

        public function test_upload_async()
        {
            Curl::mockUpload($this);
            Uploader::upload(
                TEST_IMG,
                array(
                    "transformation" => array("crop" => "scale", "width" => "2.0"),
                    "async" => true,
                    "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),)
            );
            $fields = Curl::$instance->fields();
            $this->assertArraySubset(array("async" => true), $fields);
        }

        public function test_quality_override()
        {
            Curl::mockUpload($this);
            $values = ['auto:advanced', 'auto:best', '80:420', 'none'];
            foreach ($values as $value) {
                Uploader::upload(TEST_IMG, [
                    "quality_override" => $value,
                    "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),
                    ]);
                assertParam($this, "quality_override", $value);
                Uploader::explicit(
                    "api_test",
                    array("quality_override" => $value, "type" => "upload")
                );
                assertParam($this, "quality_override", $value);
            }
        }

        public function test_headers()
        {
            Curl::mockUpload($this);
            Uploader::upload(TEST_IMG, array("headers" => array("Link: 1"), "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            assertParam($this, "headers", "Link: 1");
            Uploader::upload(TEST_IMG, array("headers" => array("Link" => "1"), "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            assertParam($this, "headers", "Link: 1");
        }

        public function test_text()
        {
            $result = Uploader::text("hello world");
            $this->assertGreaterThan(1, $result["width"]);
            $this->assertGreaterThan(1, $result["height"]);
        }

        public function test_tags()
        {
            $api = new \Cloudinary\Api();
            $result = Uploader::upload(TEST_IMG, ["tags" => array(TEST_TAG, UNIQUE_TEST_TAG),]);
            Curl::mockUpload($this);
            Uploader::add_tag("tag1", "foobar");
            assertUrl($this, "/image/tags");
            assertPost($this);
            assertParam($this, "public_ids[0]", "foobar");
            assertParam($this, "command", "add");
            assertParam($this, "tag", "tag1");

            Uploader::remove_tag("tag1", "foobar");
            assertUrl($this, "/image/tags");
            assertPost($this);
            assertParam($this, "public_ids[0]", "foobar");
            assertParam($this, "command", "remove");
            assertParam($this, "tag", "tag1");

            Uploader::replace_tag("tag3", "foobar");
            assertUrl($this, "/image/tags");
            assertPost($this);
            assertParam($this, "public_ids[0]", "foobar");
            assertParam($this, "command", "replace");
            assertParam($this, "tag", "tag3");
        }

        /**
         * Should successfully remove all tags for specified public IDs
         */
        public function test_remove_all_tags()
        {
            Curl::mockUpload($this);
            $public_id = UNIQUE_TEST_ID;
            Uploader::remove_all_tags($public_id);
            assertPost($this);
            assertUrl($this, '/image/tags');
            assertParam($this, "command", "remove_all");
        }


        /**
         * Test issue #33 - HTTP 502 when providing a large public ID list
         */
        public function test_huge_public_id_list()
        {
            $ids = array();
            for ($i = 1; $i < 200; $i++) {
                $ids[] = "foobarfoobarfoobarfoobarfoobar";
            }
            Uploader::add_tag("huge_list", $ids);
            assertParam($this, "public_ids[0]", $ids[0]);
        }

        public function test_use_filename()
        {
            $result = Uploader::upload(TEST_IMG, array("use_filename" => true, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            $this->assertRegExp('/logo_[a-zA-Z0-9]{6}/', $result["public_id"]);
            $result = Uploader::upload(TEST_IMG, array("use_filename" => true, "unique_filename" => false, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            $this->assertEquals("logo", $result["public_id"]);
        }

        public function test_allowed_formats()
        {
            //should allow whitelisted formats if allowed_formats
            $formats = array("png");
            $result = Uploader::upload(TEST_IMG, array("allowed_formats" => $formats, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            $this->assertEquals($result["format"], "png");
        }

        public function test_allowed_formats_with_illegal_format()
        {
            //should prevent non whitelisted formats from being uploaded if allowed_formats is specified
            $error_found = false;
            $formats = array("jpg");
            try {
                Uploader::upload(TEST_IMG, array("allowed_formats" => $formats, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            } catch (Exception $e) {
                $error_found = true;
            }
            $this->assertTrue($error_found);
        }

        public function test_allowed_formats_with_format()
        {
            //should allow non whitelisted formats if type is specified and convert to that type
            $formats = array("jpg");
            $result = Uploader::upload(TEST_IMG, array("allowed_formats" => $formats, "format" => "jpg", "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            $this->assertEquals("jpg", $result["format"]);
        }

        public function test_face_coordinates()
        {
            //should allow sending face and custom coordinates
            $face_coordinates = array(array(120, 30, 109, 51), array(121, 31, 110, 51));
            $result = Uploader::upload(TEST_IMG, array("face_coordinates" => $face_coordinates, "faces" => true, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            $this->assertEquals($face_coordinates, $result["faces"]);

            $different_face_coordinates = array(array(122, 32, 111, 152));
            $custom_coordinates = array(1, 2, 3, 4);
            Uploader::explicit(
                $result["public_id"],
                array(
                    "face_coordinates" => $different_face_coordinates,
                    "custom_coordinates" => $custom_coordinates,
                    "faces" => true,
                    "type" => "upload",
                )
            );
            $api = new \Cloudinary\Api();
            $info = $api->resource($result["public_id"], array("faces" => true, "coordinates" => true));
            $this->assertEquals($info["faces"], $different_face_coordinates);
            $this->assertEquals(
                $info["coordinates"],
                array("faces" => $different_face_coordinates, "custom" => array($custom_coordinates))
            );
        }

        public function test_quality_analysis()
        {
            //should return quality analysis information
            $result = Uploader::upload(TEST_IMG, ["quality_analysis" => true, "tags" => [TEST_TAG, UNIQUE_TEST_TAG]]);

            $this->assertArrayHasKey("quality_analysis", $result);
            $this->assertInternalType("double", $result["quality_analysis"]["focus"]);

            $explicitRes = Uploader::explicit($result["public_id"], ["quality_analysis" => true, "type" => "upload"]);

            $this->assertArrayHasKey("quality_analysis", $explicitRes);
            $this->assertInternalType("double", $explicitRes["quality_analysis"]["focus"]);
        }

        public function test_cinemagraph_analysis()
        {
            //Should allow cinemagraph_analysis parameter

            Curl::mockUpload($this);

            Uploader::upload(TEST_IMG, ["cinemagraph_analysis" => true]);

            assertParam($this, "cinemagraph_analysis", "1");

            Uploader::explicit("Cloudinary", ["cinemagraph_analysis" => true, "type" => "upload"]);

            assertParam($this, "cinemagraph_analysis", "1");
        }

        public function test_context()
        {
            //should allow sending context
            $context = array("caption" => "cap=caps", "alt" => "alternative|alt=a");
            $result = Uploader::upload(TEST_IMG, array("context" => $context, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));

            $api = new \Cloudinary\Api();
            $info = $api->resource($result["public_id"]);
            $this->assertEquals($context, $info["context"]["custom"]);

            $fields = Curl::$instance->parameters[CURLOPT_POSTFIELDS];
            $this->assertEquals('caption=cap\=caps|alt=alternative\|alt\=a', $fields['context']);
        }

        public function test_context_api()
        {
            $api = new \Cloudinary\Api();
            $result = Uploader::upload(TEST_IMG, ["tags" => array(TEST_TAG, UNIQUE_TEST_TAG),]);
            Uploader::add_context('alt=testAlt|custom=testCustom', $result['public_id']);
            assertUrl($this, "/image/context");
            assertPost($this);
            assertParam($this, "public_ids[0]", $result['public_id']);
            assertParam($this, "command", "add");
            assertParam($this, "context", "alt=testAlt|custom=testCustom");

            $info = $api->resource($result["public_id"]);
            $this->assertEquals(
                array("custom" => array("alt" => "testAlt", "custom" => "testCustom")),
                $info["context"]
            );

            Uploader::remove_all_context($result['public_id']);
            assertUrl($this, "/image/context");
            assertGet($this);

            $info = $api->resource($result["public_id"]);
            $this->assertEquals(false, isset($info["context"]));
        }

        public function test_cl_form_tag()
        {
            Cloudinary::config(
                array(
                    "cloud_name" => "test123",
                    "secure_distribution" => null,
                    "private_cdn" => false,
                    "api_key" => "1234",
                )
            );

            $form = cl_form_tag(
                "http://callback.com",
                array("public_id" => "hello", "form" => array("class" => "uploader"))
            );
            $this->assertRegExp(
                <<<TAG
#<form enctype='multipart\/form-data' action='{$this->url_prefix}\/v1_1\/test123\/image\/upload' method='POST' class='uploader'>
<input name='timestamp' type='hidden' value='\d+'\/>
<input name='public_id' type='hidden' value='hello'\/>
<input name='signature' type='hidden' value='[0-9a-f]+'\/>
<input name='api_key' type='hidden' value='1234'\/>
<\/form>#
TAG
                ,
                $form
            );
        }

        public function test_cl_image_upload_tag()
        {
            Cloudinary::config(
                array(
                    "cloud_name" => "test123",
                    "secure_distribution" => null,
                    "private_cdn" => false,
                    "api_key" => "1234",
                )
            );

            $tag = cl_image_upload_tag("image", array("public_id" => "hello", "html" => array("class" => "uploader")));

            $pattern = "#<input class='uploader cloudinary-fileupload'" .
                " data-cloudinary-field='image'" .
                " data-form-data='{\&quot;timestamp\&quot;:\d+,\&quot;public_id\&quot;:\&quot;hello\&quot;," .
                "\&quot;signature\&quot;:\&quot;[0-9a-f]+\&quot;,\&quot;api_key\&quot;:\&quot;1234\&quot;}'" .
                " data-url='{$this->url_prefix}\/v1_1\/test123\/auto\/upload' name='file' type='file'\/>#";

            $this->assertRegExp($pattern, $tag);
        }

        public function test_manual_moderation()
        {
            // should support setting manual moderation status
            $resource = Uploader::upload(TEST_IMG, array("moderation" => "manual", "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
            $this->assertEquals($resource["moderation"][0]["status"], "pending");
            $this->assertEquals($resource["moderation"][0]["kind"], "manual");
        }

        /**
         * @expectedException \Cloudinary\Error
         * @expectedExceptionMessage Raw convert is invalid
         */
        public function test_raw_conversion()
        {
            // should support requesting raw_convert
            Uploader::upload("tests/docx.docx", array("resource_type" => "raw", "raw_convert" => "illegal", "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
        }

        /**
         * @expectedException \Cloudinary\Error
         * @expectedExceptionMessage is not valid
         */
        public function test_categorization()
        {
            // should support requesting categorization
            Uploader::upload(TEST_IMG, array("categorization" => "illegal", "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
        }

        /**
         * @expectedException \Cloudinary\Error
         * @expectedExceptionMessage Detection invalid model 'illegal'
         */
        public function test_detection()
        {
            // should support requesting detection
            Uploader::upload(TEST_IMG, array("detection" => "illegal", "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
        }

        /**
         * @expectedException \Cloudinary\Error
         * @expectedExceptionMessage Background removal is invalid
         */
        public function test_background_removal()
        {
            // should support requesting background_removal
            Uploader::upload(TEST_IMG, array("background_removal" => "illegal", "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));
        }

        public function test_large_upload()
        {
            $filename = UNIQUE_TEST_ID . '_cld_upload_large';
            $temp_file_name = tempnam(sys_get_temp_dir(), $filename . ".") . ".bmp";
            $temp_file = fopen($temp_file_name, 'w');
            fwrite(
                $temp_file,
                "BMJ\xB9Y\x00\x00\x00\x00\x00\x8A\x00\x00\x00|\x00\x00\x00x\x05\x00\x00x\x05\x00\x00\x01\x00\x18\x00" .
                "\x00\x00\x00\x00\xC0\xB8Y\x00a\x0F\x00\x00a\x0F\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\xFF" .
                "\x00\x00\xFF\x00\x00\xFF\x00\x00\x00\x00\x00\x00\xFFBGRs\x00\x00\x00\x00\x00\x00\x00\x00T\xB8\x1E" .
                "\xFC\x00\x00\x00\x00\x00\x00\x00\x00fff\xFC\x00\x00\x00\x00\x00\x00\x00\x00\xC4\xF5(\xFF\x00\x00\x00" .
                "\x00\x00\x00\x00\x00\x00\x00\x00\x00\x04\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00"
            );
            for ($i = 1; $i <= 588000; $i++) {
                fwrite($temp_file, "\xFF\xFF\xFF\xFF\xFF\xFF\xFF\xFF\xFF\xFF");
            }
            fclose($temp_file);
            $this->assertEquals(5880138, filesize($temp_file_name));

            $resource = Uploader::upload_large(
                $temp_file_name,
                array(
                    "chunk_size" => 5243000,
                    "tags" => array("upload_large_tag", TEST_TAG, UNIQUE_TEST_TAG),
                    "allowed_formats" => ["bmp"]
                )
            );
            $this->assertEquals($resource["tags"], array("upload_large_tag", TEST_TAG, UNIQUE_TEST_TAG));
            $this->assertEquals($resource["resource_type"], "raw");
            $this->assertEquals($resource["original_filename"], pathinfo($temp_file_name, PATHINFO_FILENAME));

            assertHasHeader($this, 'X-Unique-Upload-Id');

            $resource = Uploader::upload_large(
                $temp_file_name,
                array("chunk_size" => 5243000,
                      "tags" => array("upload_large_tag", TEST_TAG, UNIQUE_TEST_TAG),
                      "resource_type" => "image",
                      "use_filename" => true,
                      "unique_filename" => false,
                      "filename" => $filename
                )
            );

            $this->assertEquals($resource["tags"], array("upload_large_tag", TEST_TAG, UNIQUE_TEST_TAG));
            $this->assertEquals($resource["resource_type"], "image");
            $this->assertEquals($filename, $resource["original_filename"]);
            $this->assertEquals($resource["original_filename"], $resource["public_id"]);
            $this->assertEquals($resource["width"], 1400);
            $this->assertEquals($resource["height"], 1400);

            assertHasHeader($this, 'X-Unique-Upload-Id');

            #where chunk size equals file size
            $resource = Uploader::upload_large(
                $temp_file_name,
                array("chunk_size" => 5880138,
                      "tags" => array("upload_large_tag", TEST_TAG, UNIQUE_TEST_TAG), "resource_type" => "image")
            );

            $this->assertEquals($resource["tags"], array("upload_large_tag", TEST_TAG, UNIQUE_TEST_TAG));
            $this->assertEquals($resource["resource_type"], "image");
            $this->assertEquals($resource["width"], 1400);
            $this->assertEquals($resource["height"], 1400);

            assertHasHeader($this, 'X-Unique-Upload-Id');
        }

        public function test_upload_large_url()
        {
            $file = "http://cloudinary.com/images/old_logo.png";
            Curl::mockUpload($this);
            Uploader::upload_large($file, ["tags" => array(TEST_TAG, UNIQUE_TEST_TAG),]);
            // we can't mock "upload" method due to static modifier,
            // so we check that file is passed as url
            assertParam($this, "file", $file);
        }

        public function test_upload_non_local_file()
        {
            $files = [
                "ftp://ftp.cloudinary.com/images/old_logo.png",
                "http://cloudinary.com/images/old_logo.png",
                "https://cloudinary.com/images/old_logo.png",
                "s3://s3-us-west-2.amazonaws.com/cloudinary/images/old_logo.png",
                "gs://cloudinary/images/old_logo.png",
                "data:image/gif;charset=utf-8;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",
                "data:image/gif;param1=value1;param2=value2;".
                "base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",
                "data:image/svg+xml;charset=utf-8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPg",
                Cloudinary::BLANK
            ];

            Curl::mockUpload($this);

            foreach ($files as $file) {
                Uploader::upload($file);

                assertParam($this, "file", $file);
            }
        }

        /**
         * @expectedException Cloudinary\Error
         * @expectedExceptionMessage does not exist
         */
        public function test_upload_non_existing_file()
        {
            Uploader::upload(TEST_IMG . '_non_existing');
        }

        public function test_upload_preset()
        {
            // should support unsigned uploading using presets
            Curl::mockUpload($this);
            Uploader::unsigned_upload(TEST_IMG, TEST_PRESET_NAME);
            assertUrl($this, "/image/upload");
            assertPost($this);
            assertParam($this, "file");
            assertNoParam($this, "signature");
            assertParam($this, "upload_preset", TEST_PRESET_NAME);
        }

        /**
         * @expectedException Cloudinary\Error
         * @expectedExceptionMessage timed out
         */
        public function test_upload_timeout()
        {
            $timeout = Cloudinary::config_get("timeout");
            Cloudinary::config(array("timeout" => 1));
            $this->assertEquals(Cloudinary::config_get("timeout"), 1);
            try {
                // Use a lengthy PNG transformation
                $transformation = array("crop" => "scale", "width" => "2.0", "angle" => 33);
                Uploader::upload(
                    TEST_IMG,
                    array("eager" => array("transformation" => array($transformation, $transformation)),
                        "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),)
                );
            } catch (Exception $e) {
                // Finally not supported in PHP 5.3
                Cloudinary::config(array("timeout", $timeout));
                throw $e;
            }
        }

        public function test_upload_responsive_breakpoints()
        {
            $response = Uploader::upload(
                TEST_IMG,
                array("responsive_breakpoints" => array(array("create_derived" => false)),
                    "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),)
            );
            $this->assertArrayHasKey(
                "responsive_breakpoints",
                $response,
                "Should return responsive_breakpoints information"
            );
            $this->assertEquals(2, count($response["responsive_breakpoints"][0]["breakpoints"]));
        }

        /**
         * Should allow the user to define ACL in the upload parameters
         */
        public function test_access_control()
        {
            Curl::mockUpload($this);

            # Should accept an array of strings
            $acl = array("access_type" => "anonymous",
                         "start" => "2018-02-22 16:20:57 +0200",
                         "end"=> "2018-03-22 00:00 +0200"
            );
            $exp_acl = '[{"access_type":"anonymous",' .
                       '"start":"2018-02-22 16:20:57 +0200",' .
                       '"end":"2018-03-22 00:00 +0200"}]';

            Uploader::upload(TEST_IMG, array("access_control" => $acl, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG)));

            assertParam($this, "access_control", $exp_acl);

            # Should accept an array of datetime objects
            $acl_2 = array("access_type" => "anonymous",
                         "start" => new \DateTime("2019-02-22 16:20:57Z"),
                         "end"=> new \DateTime("2019-03-22T00:00:00+02:00")
            );
            $exp_acl_2 = '[{"access_type":"anonymous",' .
                         '"start":"2019-02-22T16:20:57+0000",' .
                         '"end":"2019-03-22T00:00:00+0200"}]';

            Uploader::upload(TEST_IMG, array("access_control" => $acl_2, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));

            assertParam($this, "access_control", $exp_acl_2);

            # Should accept a JSON string
            $acl_str = '{"access_type":"anonymous",' .
                       '"start":"2019-02-22 16:20:57 +0200",' .
                       '"end":"2019-03-22 00:00 +0200"}';

            $exp_acl_str = '[{"access_type":"anonymous",' .
                           '"start":"2019-02-22 16:20:57 +0200",' .
                           '"end":"2019-03-22 00:00 +0200"}]';

            Uploader::upload(TEST_IMG, array("access_control" => $acl_str, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),));

            assertParam($this, "access_control", $exp_acl_str);

            # Should accept an array of all the above values
            $array_of_acl = array($acl, $acl_2);
            $exp_array_of_acl = '[' . implode(
                ",",
                array_map(
                    function ($v) {
                        return substr($v, 1, -1);
                    },
                    array($exp_acl, $exp_acl_2)
                )
            ) . ']';

            Uploader::upload(TEST_IMG, array("access_control" => $array_of_acl, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG)));

            assertParam($this, "access_control", $exp_array_of_acl);

            # Should throw InvalidArgumentException on invalid values
            $invalid_values = array(array(array()), array("not_an_array"), array(7357));
            foreach ($invalid_values as $value) {
                try {
                    Uploader::upload(TEST_IMG, array("access_control" => $value, "tags" => array(TEST_TAG, UNIQUE_TEST_TAG)));
                    $this->fail('InvalidArgumentException was not thrown');
                } catch (\InvalidArgumentException $e) {
                }
            }
        }

        /**
         * Should support `format` parameter in responsive breakpoints settings
         */
        public function test_responsive_breakpoints_format()
        {
            $result = Uploader::upload(TEST_IMG, array(
                "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),
                "responsive_breakpoints" => array(
                    "create_derived" => true,
                    "transformation" => array(
                        "angle" => 90
                    ),
                    "format" => 'gif'
                )
            ));
            $this->assertNotNull($result["responsive_breakpoints"]);
            $this->assertEquals($result["responsive_breakpoints"][0]["transformation"], "a_90");
            $this->assertRegExp('/\.gif$/', $result["responsive_breakpoints"][0]["breakpoints"][0]["url"]);
        }

        /**
         * Should generate a sprite from all images associated with a tag
         */
        public function test_sprite_generation()
        {
            for ($i=0; $i<2; $i++) {
                Uploader::upload(TEST_IMG, array("tags" => array(UNIQUE_TEST_SPRITE_TAG)));
            }
            $response = Uploader::generate_sprite(UNIQUE_TEST_SPRITE_TAG);
            try {
                Uploader::destroy($response['public_id'], array('type' => 'sprite'));
            } catch (Exception $e) {
                error_log("Failed to delete generated sprite: $e");
            }

            $this->assertEquals(2, count($response["image_infos"]));
        }

        /**
         * Upload should supported `metadata` parameter
         */
        public function test_upload_with_metadata()
        {
            $result = Uploader::upload(
                TEST_IMG,
                [
                    'tags' => array(TEST_TAG, UNIQUE_TEST_TAG),
                    'metadata' => self::$metadata_fields
                ]
            );
            $this->assertEquals(self::$metadata_field_value, $result['metadata'][self::$metadata_field_unique_external_id]);
        }

        /**
         * Explicit should supported `metadata` parameter
         */
        public function test_explicit_with_metadata()
        {
            $resource = Uploader::upload(TEST_IMG, [
                "tags" => [TEST_TAG, UNIQUE_TEST_TAG],
            ]);
            $result = Uploader::explicit(
                $resource['public_id'],
                [
                    'type' => 'upload',
                    'metadata' => self::$metadata_fields
                ]
            );
            $this->assertEquals(self::$metadata_field_value, $result['metadata'][self::$metadata_field_unique_external_id]);
        }

        /**
         * Editing metadata of an existing resource
         *
         * @throws Error
         */
        public function test_uploader_update_metadata()
        {
            $resource = Uploader::upload(TEST_IMG, [
                'tags' => [TEST_TAG, UNIQUE_TEST_TAG]
            ]);
            $result = Uploader::update_metadata(self::$metadata_fields, $resource['public_id']);
            $this->assertCount(1, $result['public_ids']);
            $this->assertContains($resource['public_id'], $result['public_ids']);
        }

        /**
         * Editing metadata of multiple existing resources
         *
         * @throws Error
         */
        public function test_uploader_update_metadata_on_multiple_resources()
        {
            $resource1 = Uploader::upload(TEST_IMG, [
                'tags' => [TEST_TAG, UNIQUE_TEST_TAG]
            ]);
            $resource2 = Uploader::upload(TEST_IMG, [
                'tags' => [TEST_TAG, UNIQUE_TEST_TAG]
            ]);
            $result = Uploader::update_metadata(
                self::$metadata_fields,
                [
                    $resource1['public_id'],
                    $resource2['public_id']
                ]
            );
            $this->assertCount(2, $result['public_ids']);
            $this->assertContains($resource1['public_id'], $result['public_ids']);
            $this->assertContains($resource2['public_id'], $result['public_ids']);
        }

        /**
         * Get the accessibility analysis of an uploaded image
         */
        public function test_accessibility_analysis()
        {
            $result = Uploader::upload(TEST_IMG, ["accessibility_analysis" => true, "tags" => [TEST_TAG, UNIQUE_TEST_TAG]]);

            $this->assertArrayHasKey('accessibility_analysis', $result);

            $explicitRes = Uploader::explicit($result["public_id"], ["accessibility_analysis" => true, "type" => "upload"]);

            $this->assertArrayHasKey("accessibility_analysis", $explicitRes);
        }

        /**
         * Add eval parameter to an uploaded asset
         */
        public function test_eval_upload_parameter()
        {
            $result = Uploader::upload(TEST_IMG, ['eval' => TEST_EVAL_STR, 'tags' => [TEST_TAG, UNIQUE_TEST_TAG]]);

            $this->assertEquals(TEST_IMG_WIDTH, $result['context']['custom']['width']);
            $this->assertInternalType(IsType::TYPE_ARRAY, $result['quality_analysis']);
            $this->assertInternalType(IsType::TYPE_NUMERIC, $result['quality_analysis']['focus']);
        }

        /**
         * Should support accessibility analysis in upload.
         */
        public function test_accessibility_analysis_upload()
        {
            Curl::mockUpload($this);

            Uploader::upload(TEST_IMG, ['accessibility_analysis' => true]);

            assertParam($this, 'accessibility_analysis', 1);
        }

        /**
         * Should support accessibility analysis in explicit.
         */
        public function test_accessibility_analysis_explicit()
        {
            Curl::mockUpload($this);

            Uploader::explicit('cloudinary', ['accessibility_analysis' => true]);

            assertParam($this, 'accessibility_analysis', 1);
        }
    }
}
