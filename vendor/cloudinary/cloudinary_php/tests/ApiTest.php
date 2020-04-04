<?php

namespace Cloudinary {

    $base = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;
    require_once($base . 'Cloudinary.php');
    require_once($base . 'Uploader.php');
    require_once($base . 'Api.php');
    require_once('TestHelper.php');

    use Cloudinary;
    use Exception;

    /**
     * Class ApiTest
     * @package Cloudinary
     */
    class ApiTest extends \PHPUnit\Framework\TestCase
    {
        protected static $api_test_tag = TEST_TAG;
        protected static $initialized = false;
        protected static $api_test;
        protected static $api_test_2;
        protected static $api_test_3;
        protected static $api_test_4;
        protected static $api_test_5;

        protected static $api_test_transformation = "api_test_transformation";
        protected static $api_test_transformation_2 = "api_test_transformation2";
        protected static $api_test_transformation_3 = "api_test_transformation3";

        protected static $crop_transformation = array('crop' => 'crop', 'width' => 100);
        protected static $crop_transformation_str = 'c_crop,w_100';
        protected static $encoded_crop_transformation_str = 'c_crop%2Cw_100';
        protected static $scale_transformation = array('crop' => 'scale', 'width' => 100);
        protected static $scale_transformation_str = 'c_scale,w_100';
        protected static $encoded_scale_transformation_str = 'c_scale%2Cw_100';
        protected static $transformations;
        protected static $arr_of_transformation_str;
        protected static $transformations_str;
        protected static $encoded_transformations_str;

        protected static $streaming_profile_1;
        protected static $streaming_profile_2;



        const URL_QUERY_REGEX = "\??(\w+=\w*&?)*";

        /** @var  \Cloudinary\Api $api */
        private $api;

        public static function setUpBeforeClass()
        {
            if (!Cloudinary::config_get("api_secret")) {
                self::markTestSkipped('Please setup environment for Api test to run');
            }

            Curl::$instance = new Curl();

            self::$api_test_tag = UNIQUE_TEST_TAG;

            self::$api_test = "api_test" . SUFFIX;
            self::$api_test_2 = "api_test2" . SUFFIX;
            self::$api_test_3 = "api_test,3" . SUFFIX;
            self::$api_test_4 = "api_test4" . SUFFIX;
            self::$api_test_5 = "api_test5" . SUFFIX;

            self::$api_test_transformation = "api_test_transformation" . SUFFIX;
            self::$api_test_transformation_2 = "api_test_transformation2" . SUFFIX;
            self::$api_test_transformation_3 = "api_test_transformation3" . SUFFIX;

            self::upload_sample_resources();

            self::$transformations = array(self::$crop_transformation, self::$scale_transformation);
            self::$arr_of_transformation_str = array(self::$crop_transformation_str, self::$scale_transformation_str);
            self::$transformations_str = implode("|", self::$arr_of_transformation_str);
            $arr_of_encoded_transformation_str = array(
                self::$encoded_crop_transformation_str,
                self::$encoded_scale_transformation_str
            );
            self::$encoded_transformations_str = implode("|", $arr_of_encoded_transformation_str);

            self::$streaming_profile_1 = self::$api_test . "_streaming_profile_1";
            self::$streaming_profile_2 = self::$api_test . "_streaming_profile_2";
        }

        public function tearDown()
        {
            Curl::$instance = new Curl();
        }

        public static function tearDownAfterClass()
        {
            if (!Cloudinary::config_get("api_secret")) {
                self::fail("You need to configure the cloudinary api for the tests to work.");
            }

            $api = new Cloudinary\Api();

            self::delete_resources($api);
            self::delete_transformations($api);
            self::delete_streaming_profiles($api);
        }


        /**
         * Delete all test related resources
         *
         * @param \Cloudinary\Api $api an initialized api object
         */
        protected static function delete_resources($api)
        {
            try {
                $api->delete_resources(array(self::$api_test, self::$api_test_2, self::$api_test_3, self::$api_test_5));
                $api->delete_resources_by_tag(UNIQUE_TEST_TAG);
            } catch (Exception $e) {
            }
        }

        /**
         * Delete all test related transformations
         *
         * @param \Cloudinary\Api $api an initialized api object
         */
        protected static function delete_transformations($api)
        {
            $transformations = array(
                self::$api_test_transformation,
                self::$api_test_transformation_2,
                self::$api_test_transformation_3,
            );

            foreach ($transformations as $t) {
                try {
                    $api->delete_transformation($t);
                } catch (Exception $e) {
                }

            }
        }

        /**
         * Delete all test related streaming profiles
         *
         * @param \Cloudinary\Api $api
         */
        protected static function delete_streaming_profiles($api)
        {
            $profiles = array(
                self::$streaming_profile_1,
                self::$streaming_profile_2
            );
            foreach ($profiles as $p) {
                try {
                    $api->delete_streaming_profile($p);
                } catch (Exception $e) {
                }
            }
        }
        /**
         * Upload sample resources. These resources need to be present for some of the tests to work.
         */
        protected static function upload_sample_resources()
        {
            Uploader::upload(
                TEST_IMG,
                array(
                    "public_id" => self::$api_test,
                    "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),
                    "context" => "key=value",
                    "eager" => array("transformation" => self::$crop_transformation),
                )
            );
            Uploader::upload(
                TEST_IMG,
                array(
                    "public_id" => self::$api_test_2,
                    "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),
                    "context" => "key=value",
                    "eager" => array("transformation" => self::$scale_transformation),
                )
            );
        }


        protected function setUp()
        {
            if (!Cloudinary::config_get("api_secret")) {
                $this->markTestSkipped('Please setup environment for API test to run');
            }
            if (!isset($this->api)) {
                $this->api = new Api();
            }
        }

        /**
         * Finds element by name and value in an array of arrays
         *
         * @param array     $elements   Array to search in
         * @param string    $attr       Attribute name
         * @param mixed     $value      Attribute value
         *
         * @return null if not found, otherwise found element
         */
        protected function find_by_attr($elements, $attr, $value)
        {
            foreach ($elements as $element) {
                if ($element[$attr] == $value) {
                    return $element;
                }
            }
            return null;
        }

        /**
         * Should allow listing resource_types
         *
         * @throws Api\GeneralError
         */
        public function test01_resource_types()
        {
            $result = $this->api->resource_types();
            $this->assertContains("image", $result["resource_types"]);
        }

        /**
         * Should allow listing resources
         *
         * @throws Api\GeneralError
         */
        public function test02_resources()
        {
            Curl::mockApi($this);
            $this->api->resources();
            Curl::$instance->fields();
            assertUrl($this, "/resources/image");
        }

        /**
         * Should allow listing resources with cursor
         *
         * @throws Api\GeneralError
         */
        public function test03_resources_cursor()
        {
            $result = $this->api->resources(array("max_results" => 1));
            $this->assertNotEquals($result["resources"], null);
            $this->assertEquals(count($result["resources"]), 1);
            $this->assertNotEquals($result["next_cursor"], null);

            $result2 = $this->api->resources(array("max_results" => 1, "next_cursor" => $result["next_cursor"]));
            $this->assertNotEquals($result2["resources"], null);
            $this->assertEquals(count($result2["resources"]), 1);
            $this->assertNotEquals($result2["resources"][0]["public_id"], $result["resources"][0]["public_id"]);
        }

        /**
         * Should allow listing resources by type
         *
         * @throws Api\GeneralError
         */
        public function test04_resources_by_type()
        {
            Curl::mockApi($this);
            $this->api->resources(array("type" => "upload", "context" => true, "tags" => true));
            assertUrl($this, "/resources/image/upload");
            assertParam($this, "context", 1);
            assertParam($this, "tags", 1);
        }

        /**
         * Should allow listing resources by prefi
         *
         * @throws Api\GeneralError
         */
        public function test05_resources_by_prefix()
        {
            Curl::mockApi($this);
            $this->api->resources(array("type" => "upload", "prefix" => "api_test", "context" => true, "tags" => true));
            assertUrl($this, "/resources/image/upload");
            assertParam($this, "prefix", "api_test");
            assertParam($this, "context", 1);
            assertParam($this, "tags", 1);
        }

        /**
         * Should allow listing resources by public ids
         *
         * @throws Api\GeneralError
         */
        public function test_resources_by_public_ids()
        {
            Curl::mockApi($this);
            $public_ids = array(self::$api_test, self::$api_test_2, self::$api_test_3);
            $this->api->resources_by_ids($public_ids, array("context" => true, "tags" => true));
            assertParam($this, "public_ids", $public_ids);
            assertParam($this, "context", 1);
            assertParam($this, "tags", 1);
        }

        /**
         * Should allow listing resources and specify direction
         *
         * @throws Api\GeneralError
         */
        public function test_resources_direction()
        {
            Curl::mockApi($this);
            $this->api->resources_by_tag(
                "foobar",
                array("type" => "upload", "direction" => "asc")
            );
            assertGet($this);
            assertUrl($this, "/resources/image/tags/foobar");
            assertParam($this, "direction", "asc");
            $this->api->resources_by_tag(
                "foobar",
                array("type" => "upload", "direction" => "desc")
            );
            assertGet($this);
            assertUrl($this, "/resources/image/tags/foobar");
            assertParam($this, "direction", "desc");
        }

        /**
         * Should allow listing resources by tag
         *
         * @throws Api\GeneralError
         */
        public function test06_resources_tag()
        {
            Curl::mockApi($this);
            $this->api->resources_by_tag("foobar");
            assertUrl($this, "/resources/image/tags/foobar");
            assertGet($this);
        }

        /**
         * Should allow listing resources by context
         *
         * @throws Api\GeneralError
         */
        public function test_resources_by_context()
        {
            Curl::mockApi($this);
            $this->api->resources_by_context("k");
            assertGet($this);
            assertUrl($this, "/resources/image/context");
            assertParam($this, "key", "k");
            assertNoParam($this, "value");

            $this->api->resources_by_context("k", "");
            assertGet($this);
            assertUrl($this, "/resources/image/context");
            assertParam($this, "key", "k");
            assertNoParam($this, "value");

            $this->api->resources_by_context("k", "v");
            assertGet($this);
            assertUrl($this, "/resources/image/context");
            assertParam($this, "key", "k");
            assertParam($this, "value", "v");
        }

        /**
         * Should allow getting resource metadata
         *
         * @throws Api\GeneralError
         */
        public function test07_resource_metadata()
        {
            $resource = $this->api->resource(self::$api_test);
            $this->assertNotEquals($resource, null);
            $this->assertEquals($resource["public_id"], self::$api_test);
            $this->assertEquals($resource["bytes"], LOGO_SIZE);
            $this->assertEquals(count($resource["derived"]), 1);
        }

        /**
         * Should allow getting resource quality analysis
         *
         * @throws Api\GeneralError
         */
        public function test_resource_quality_analysis()
        {
            $resource = $this->api->resource(self::$api_test, ["quality_analysis" => true]);
            $this->assertArrayHasKey("quality_analysis", $resource);
            $this->assertInternalType("double", $resource["quality_analysis"]["focus"]);
        }

        /**
         * Should allow cinemagraph_analysis parameter
         *
         * @throws Api\GeneralError
         */
        public function test_resource_cinemagraph_analysis()
        {
            Curl::mockApi($this);

            $this->api->resource(self::$api_test, ["type" => "upload", "cinemagraph_analysis" => true]);
            assertParam($this, "cinemagraph_analysis", 1);
        }

        /**
         * Should allow derived_next_cursor parameter
         *
         * @throws Api\GeneralError
         */
        public function test_resource_derived_next_cursor()
        {
            Curl::mockApi($this);

            $this->api->resource(self::$api_test, ["derived_next_cursor" => "foo"]);
            assertGet($this);
            assertParam($this, "derived_next_cursor", "foo");
        }
        /**
         * Should allow deleting derived resource
         *
         * @throws Api\GeneralError
         */
        public function test08_delete_derived()
        {
            $derived_resource_id = "foobar";
            Curl::mockApi($this);
            $this->api->delete_derived_resources(array($derived_resource_id));
            assertDelete($this);
            assertUrl($this, "/derived_resources");
            assertParam($this, "derived_resource_ids[0]", $derived_resource_id);
        }

        /**
         * Should allow deleting derived resources by transformation
         *
         * @throws Api\GeneralError
         */
        public function test08a_delete_derived_by_transformation()
        {
            $public_id = "public_id";
            Curl::mockApi($this);
            $this->api->delete_derived_by_transformation($public_id, self::$crop_transformation);
            assertUrl($this, "/resources/image/upload");
            assertDelete($this);
            assertParam($this, "keep_original", true);
            assertParam($this, "public_ids[0]", $public_id);
            assertParam($this, "transformations", self::$crop_transformation_str);

            $options = ["resource_type" => "raw", "type" => "fetch", "invalidate" => true];
            $this->api->delete_derived_by_transformation(array($public_id), self::$crop_transformation, $options);
            assertDelete($this);
            assertUrl($this, "/resources/raw/fetch");
            assertParam($this, "public_ids[0]", $public_id);
            assertParam($this, "invalidate", true);
            assertParam($this, "transformations", self::$crop_transformation_str);

            $this->api->delete_derived_by_transformation(array($public_id), self::$transformations);
            assertDelete($this);
            assertParam($this, "public_ids[0]", $public_id);
            assertParam($this, "transformations", self::$transformations_str);
        }

        /**
         * Should allow deleting resources
         *
         * @throws Api\GeneralError
         */
        public function test09_delete_resources()
        {
            Curl::mockApi($this);
            $this->api->delete_resources(
                array("apit_test", self::$api_test_2, self::$api_test_3)
            );
            assertUrl($this, "/resources/image/upload");
            $this->assertEquals("DELETE", Curl::$instance->http_method(), "http method should be DELETE");
            assertParam($this, "public_ids[0]", "apit_test");
        }

        /**
         * Should allow deleting resources by public id prefix
         *
         * @throws Api\GeneralError
         */
        public function test09a_delete_resources_by_prefix()
        {
            Curl::mockApi($this);
            $this->api->delete_resources_by_prefix("fooba");
            assertUrl($this, "/resources/image/upload");
            assertDelete($this);
            assertParam($this, "prefix", "fooba");
        }

        /**
         * Should allow deleting resources by tag
         *
         * @throws Api\GeneralError
         */
        public function test09b_delete_resources_by_tag()
        {
            Curl::mockApi($this);
            $this->api->delete_resources_by_tag("api_test_tag_for_delete");
            assertUrl($this, "/resources/image/tags/api_test_tag_for_delete");
            assertDelete($this);
        }

        /**
         * Should allow deleting resources by transformations
         *
         * @throws Api\GeneralError
         */
        public function test09c_delete_resources_by_transformations()
        {
            Curl::mockApi($this);
            $this->api->delete_resources(["api_test", "api_test2"], ["transformations" => self::$crop_transformation]);
            $this->assertEquals("DELETE", Curl::$instance->http_method(), "http method should be DELETE");
            assertParam($this, "transformations", self::$crop_transformation_str);

            $this->api->delete_all_resources(["transformations" => self::$transformations]);

            $this->assertEquals("DELETE", Curl::$instance->http_method(), "http method should be DELETE");
            assertParam($this, "transformations", self::$transformations_str);

            $this->api->delete_resources_by_prefix("api_test_by", ["transformations" => self::$crop_transformation]);
            $this->assertEquals("DELETE", Curl::$instance->http_method(), "http method should be DELETE");
            assertParam($this, "transformations", self::$crop_transformation_str);

            $this->api->delete_resources_by_tag("api_test_tag", ["transformations" => self::$crop_transformation]);
            $this->assertEquals("DELETE", Curl::$instance->http_method(), "http method should be DELETE");
            assertParam($this, "transformations", self::$crop_transformation_str);
        }

        /**
         * Should allow listing tags
         *
         * @throws Api\GeneralError
         */
        public function test10_tags()
        {
            Curl::mockApi($this);
            $this->api->tags();
            assertUrl($this, "/tags/image");
            assertGet($this);
        }

        /**
         * Should allow listing tag by prefix
         *
         * @throws Api\GeneralError
         */
        public function test11_tags_prefix()
        {
            Curl::mockApi($this);
            $this->api->tags(array("prefix" => "fooba"));
            assertUrl($this, "/tags/image");
            assertGet($this);
            assertParam($this, "prefix", "fooba");
        }

        /**
         * Should allow listing transformations
         *
         * @throws Api\GeneralError
         */
        public function test12_transformations()
        {
            $result = $this->api->transformations();
            $this->assertArrayHasKey('transformations', $result);
            $this->assertGreaterThan(0, count($result["transformations"]));
            $transformation = $result["transformations"][0];

            $this->assertNotNull($transformation);
            $this->assertArrayHasKey('used', $transformation);
        }

        /**
         * Should allow listing of named transformations
         *
         * @throws Api\GeneralError
         */
        public function test_transformations_named()
        {
            Curl::mockApi($this);
            $this->api->transformations(array("named" => true));
            assertParam(
                $this,
                "named",
                true,
                "api->transformations should pass the named paramter"
            );
        }

        /**
         * Should allow listing transformations with cursor
         *
         * @throws Api\GeneralError
         */
        public function test_transformation_cursor()
        {
            Curl::mockApi($this);
            $this->api->transformation(self::$scale_transformation_str, array("next_cursor" => "234123132345"));
            assertUrl($this, "/transformations");
            assertParam(
                $this,
                "next_cursor",
                "234123132345",
                "api->transformation should pass the next_cursor paramter"
            );
            assertParam(
                $this,
                "transformation",
                self::$scale_transformation_str
            );
        }

        /**
         * Should allow getting transformation cursor result
         *
         * @throws Api\GeneralError
         */
        public function test_transformation_cursor_results()
        {
            Uploader::upload(
                TEST_IMG,
                array(
                    "public_id" => self::$api_test_4,
                    "eager" => array("transformation" => self::$scale_transformation)
                )
            );

            $result = $this->api->transformation(self::$scale_transformation_str, array("max_results" => 1));
            $this->assertEquals(count($result["derived"]), 1);
            $this->assertNotEmpty($result["next_cursor"]);

            $result2 = $this->api->transformation(
                self::$scale_transformation_str,
                array("max_results" => 1, "next_cursor" => $result["next_cursor"])
            );
            $this->assertEquals(count($result2["derived"]), 1);
            $this->assertNotEquals($result["derived"][0]["id"], $result2["derived"][0]["id"]);
        }

        /**
         * Should allow getting transformation metadata
         *
         * @throws Api\GeneralError
         */
        public function test13_transformation_metadata()
        {
            $transformation = $this->api->transformation(self::$scale_transformation_str);
            $this->assertNotEquals($transformation, null);
            $this->assertEquals($transformation["info"], array(self::$scale_transformation));
            $transformation = $this->api->transformation(self::$scale_transformation);
            $this->assertNotEquals($transformation, null);
            $this->assertEquals($transformation["info"], array(self::$scale_transformation));
        }

        /**
         * Should allow updating transformation allowed_for_strict
         *
         * @throws Api\GeneralError
         */
        public function test14_transformation_update()
        {
            Curl::mockApi($this);
            $this->api->update_transformation(self::$scale_transformation_str, array("allowed_for_strict" => true));
            assertUrl($this, "/transformations");
            assertPut($this);
            assertParam($this, "allowed_for_strict", 1);
            assertParam($this, "transformation", self::$scale_transformation_str);
        }

        /**
         * Should allow creating named transformation
         *
         * @throws Api\GeneralError
         */
        public function test15_transformation_create()
        {
            Curl::mockApi($this);
            $this->api->create_transformation(self::$api_test_transformation, self::$scale_transformation);
            assertUrl($this, "/transformations");
            assertPost($this);
            assertParam($this, "name", self::$api_test_transformation);
            assertParam($this, "transformation", self::$scale_transformation_str);
        }

        /**
         * Should allow unsafe update of named transformation
         *
         * @throws Api\GeneralError
         */
        public function test15a_transformation_unsafe_update()
        {
            $updated_transformation = array("crop" => "scale", "width" => 103);

            $this->api->create_transformation(
                self::$api_test_transformation_3,
                self::$scale_transformation
            );
            $this->api->update_transformation(
                self::$api_test_transformation_3,
                array("unsafe_update" => $updated_transformation)
            );
            $transformation = $this->api->transformation(self::$api_test_transformation_3);
            $this->assertNotEquals($transformation, null);
            $this->assertEquals($transformation["info"], array($updated_transformation));
            $this->assertEquals($transformation["used"], false);
        }

        /**
         * Should allow creating unnamed transformation with specified format
         *
         * @throws Api\GeneralError
         */
        public function test15b_transformation_create_unnamed_with_format()
        {
            Curl::mockApi($this);

            $with_extension = self::$scale_transformation;
            $with_extension["format"] = "jpg";
            $with_extension_str = self::$scale_transformation_str . "/jpg";
            $this->api->create_transformation($with_extension_str, $with_extension);
            assertUrl($this, "/transformations");
            assertPost($this);
            assertParam($this, "name", $with_extension_str);
            assertParam($this, "transformation", $with_extension_str);
        }

        /**
         * Should allow creating unnamed extensionless transformation
         *
         * @throws Api\GeneralError
         */
        public function test15c_transformation_create_unnamed_with_empty_format()
        {
            Curl::mockApi($this);

            $with_extension = self::$scale_transformation;
            $with_extension["format"] = "";
            $with_extension_str = self::$scale_transformation_str . "/";
            $this->api->create_transformation($with_extension_str, $with_extension);
            assertUrl($this, "/transformations");
            assertPost($this);
            assertParam($this, "name", $with_extension_str);
            assertParam($this, "transformation", $with_extension_str);
        }

        /**
         * Should allow deleting named transformation
         *
         * @throws Api\GeneralError
         */
        public function test16a_transformation_delete()
        {

            $this->api->create_transformation(
                self::$api_test_transformation_2,
                self::$scale_transformation
            );
            $this->api->transformation(self::$api_test_transformation_2);
            $this->api->delete_transformation(self::$api_test_transformation_2);
            assertDelete($this);
        }

        /**
         * Should allow deleting implicit transformation
         *
         * @throws Api\GeneralError
         */
        public function test17a_transformation_delete_implicit()
        {
            Curl::mockApi($this);
            $this->api->delete_transformation(self::$scale_transformation_str);
            assertUrl($this, "/transformations");
            assertParam($this, "transformation", self::$scale_transformation_str);
            assertDelete($this);
        }

        /**
         * Should allow deleting and invalidating transformation
         *
         * @throws Api\GeneralError
         */
        public function test_transformation_delete_with_invalidate()
        {
            Curl::mockApi($this);

            $transformation = self::$scale_transformation_str . ",a_90";
            $expected_url = '/transformations';

            // should pass 'invalidate' param when 'invalidate' is set to true
            $this->api->delete_transformation($transformation, array("invalidate" => true));
            assertUrl($this, $expected_url);
            assertDelete($this);
            assertParam($this, "invalidate", "1");
            assertParam($this, "transformation", self::$scale_transformation_str . ',a_90');

            // should pass 'invalidate' param when 'invalidate' is set to false
            $this->api->delete_transformation($transformation, array("invalidate" => false));
            assertUrl($this, $expected_url);
            assertDelete($this);
            assertParam($this, "invalidate", "");
            assertParam($this, "transformation", self::$scale_transformation_str . ',a_90');

            // should not pass 'invalidate' param if not set
            $this->api->delete_transformation($transformation);
            assertUrl($this, $expected_url);
            assertDelete($this);
            assertNoParam($this, "invalidate");
            assertParam($this, "transformation", self::$scale_transformation_str . ',a_90');
        }

        /**
         * Should allow listing resource_types
         *
         * @throws Api\GeneralError
         */
        public function test18_usage()
        {
            $result = $this->api->usage();
            $this->assertNotEquals($result["last_updated"], null);
        }

        /**
         * Should allow deleting all resources
         *
         * @throws Api\GeneralError
         */
        public function test19_delete_derived()
        {
            $this->markTestSkipped("Not enabled by default - remove this line to test");
            $options = array(
                "public_id" => self::$api_test_5,
                "eager" => array("transformation" => array("width" => 101, "crop" => "scale")),
            );
            Uploader::upload(TEST_IMG, $options);
            $resource = $this->api->resource(self::$api_test_5);
            $this->assertNotEquals($resource, null);
            $this->assertEquals(count($resource["derived"]), 1);
            $this->api->delete_all_resources(array("keep_original" => true));
            $resource = $this->api->resource(self::$api_test_5);
            $this->assertNotEquals($resource, null);
            $this->assertEquals(count($resource["derived"]), 0);
        }


        /**
         * Should support setting manual moderation status
         *
         * @throws Api\GeneralError
         */
        public function test20_manual_moderation()
        {
            $resource = Uploader::upload(TEST_IMG, array("moderation" => "manual"));
            $this->assertEquals($resource["moderation"][0]["status"], "pending");
            $this->assertEquals($resource["moderation"][0]["kind"], "manual");

            $api_result = $this->api->update($resource["public_id"], array("moderation_status" => "approved"));
            $this->assertEquals($api_result["moderation"][0]["status"], "approved");
            $this->assertEquals($api_result["moderation"][0]["kind"], "manual");
        }

        public function test21_notification_url()
        {
            Curl::mockApi($this);
            $this->api->update("foobar", array("notification_url" => "http://example.com"));
            assertParam($this, "notification_url", "http://example.com");
        }

        /**
         * Should support requesting raw_convert
         *
         * @expectedException \Cloudinary\Api\BadRequest
         * @expectedExceptionMessage Illegal value
         *
         * @throws Api\GeneralError
         */
        public function test22_raw_conversion()
        {
            $resource = Uploader::upload(RAW_FILE, array("resource_type" => "raw"));
            $this->api->update($resource["public_id"], array("raw_convert" => "illegal", "resource_type" => "raw"));
        }

        /**
         * Should support requesting categorization
         *
         * @expectedException \Cloudinary\Api\BadRequest
         * @expectedExceptionMessage Illegal value
         *
         * @throws Api\GeneralError
         */
        public function test23_categorization()
        {
            $this->api->update(self::$api_test, array("categorization" => "illegal"));
        }

        /**
         * Should support requesting detection
         *
         * @expectedException \Cloudinary\Api\BadRequest
         * @expectedExceptionMessage Illegal value
         *
         * @throws Api\GeneralError
         */
        public function test24_detection()
        {
            $this->api->update(self::$api_test, array("detection" => "illegal"));
        }

        /**
         * Should support requesting background_removal
         *
         * @expectedException \Cloudinary\Api\BadRequest
         * @expectedExceptionMessage Illegal value
         *
         * @throws Api\GeneralError
         */
        public function test25_background_removal()
        {
            $this->api->update(self::$api_test, array("background_removal" => "illegal"));
        }

        /**
         * Should support requesting auto_tagging
         *
         * @throws Api\GeneralError
         */
        public function test26_auto_tagging()
        {
            Curl::mockApi($this);
            $this->api->update("foobar", array("auto_tagging" => 0.5));
            assertUrl($this, "/resources/image/upload/foobar");
            assertPost($this);
            assertParam($this, "auto_tagging", 0.5);
        }

        /**
         * Should support updating ocr
         *
         * @throws Api\GeneralError
         */
        public function test26_1_ocr()
        {
            Curl::mockApi($this);
            $this->api->update("foobar", array("ocr" => "adv_ocr"));
            assertParam($this, "ocr", "adv_ocr");
        }

        /**
         * Should support updating quality override
         *
         * @throws Api\GeneralError
         */
        public function test26_2_quality_override()
        {
            Curl::mockApi($this);
            $values = ['auto:advanced', 'auto:best', '80:420', 'none'];
            foreach ($values as $value) {
                $this->api->update("api_test", array("quality_override" => $value));
                assertParam($this, "quality_override", $value);
            }
        }

        /**
         * Should allow listing resources by start date
         *
         * @throws Api\GeneralError
         */
        public function test27_start_at()
        {
            Curl::mockApi($this);
            $dateTime = new \DateTime();
            $start_at = $dateTime->format(\DateTime::ISO8601);
            $this->api->resources(array("type" => "upload", "start_at" => $start_at, "direction" => "asc"));
            assertUrl($this, "/resources/image/upload");
            assertParam($this, "start_at", $start_at);
            assertParam($this, "direction", "asc");
        }

        /**
         * Should allow creating upload_presets
         *
         * @throws Api\GeneralError
         */
        public function test28_create_upload_presets()
        {
            Curl::mockApi($this);
            $this->api->create_upload_preset(array("name" => TEST_PRESET_NAME, "folder" => "folder", "live" => true));
            assertUrl($this, "/upload_presets");
            assertPost($this);
            assertParam($this, "name", TEST_PRESET_NAME);
            assertParam($this, "folder", "folder");
            assertParam($this, "live", 1);
        }

        /**
         * Should allow listing upload_presets
         *
         * @throws Api\GeneralError
         */
        public function test28a_list_upload_presets()
        {
            Curl::mockApi($this);
            $this->api->upload_presets();
            assertUrl($this, "/upload_presets");
            assertGet($this);
        }

        /**
         * Should allow getting a single upload_preset
         *
         * @throws Api\GeneralError
         */
        public function test29_get_upload_presets()
        {
            Curl::mockApi($this);
            $this->api->upload_preset(TEST_PRESET_NAME);
            assertUrl($this, "/upload_presets/" . TEST_PRESET_NAME);
            assertGet($this);
        }

        /**
         * Should allow deleting upload_presets
         *
         * @throws Api\GeneralError
         */
        public function test30_delete_upload_presets()
        {
            Curl::mockApi($this);
            $this->api->delete_upload_preset(TEST_PRESET_NAME);
            assertUrl($this, "/upload_presets/" . TEST_PRESET_NAME);
            assertDelete($this);
        }

        /**
         * Should allow updating upload_presets
         *
         * @throws Api\GeneralError
         */
        public function test31_update_upload_presets()
        {
            Curl::mockApi($this);
            $this->api->update_upload_preset(
                TEST_PRESET_NAME,
                array("colors" => true, "unsigned" => true, "disallow_public_id" => true, "live" => true)
            );
            assertPut($this);
            assertUrl($this, "/upload_presets/" . TEST_PRESET_NAME);
            assertParam($this, "colors", 1);
            assertParam($this, "unsigned", 1);
            assertParam($this, "disallow_public_id", 1);
            assertParam($this, "live", 1);
        }

        /**
         * Should allow listing folder
         *
         * @throws Api\GeneralError
         */
        public function test32_folder_listing()
        {
            $this->markTestSkipped("For this test to work, 'Auto-create folders' should be enabled" .
                                   "in the Upload Settings, and the account should be empty of folders. " .
                                   "Comment out this line if you really want to test it.");

            Uploader::upload(TEST_IMG, array("public_id" => "test_folder1/item"));
            Uploader::upload(TEST_IMG, array("public_id" => "test_folder2/item"));
            Uploader::upload(TEST_IMG, array("public_id" => "test_folder1/test_subfolder1/item"));
            Uploader::upload(TEST_IMG, array("public_id" => "test_folder1/test_subfolder2/item"));
            $result = $this->api->root_folders();
            $this->assertContains(array("name" => "test_folder1", "path" => "test_folder1"), $result["folders"]);
            $this->assertContains(array("name" => "test_folder2", "path" => "test_folder2"), $result["folders"]);
            $result = $this->api->subfolders("test_folder1");
            $this->assertContains(
                array("name" => "test_subfolder1", "path" => "test_folder1/test_subfolder1"),
                $result["folders"]
            );
            $this->assertContains(
                array("name" => "test_subfolder2", "path" => "test_folder1/test_subfolder2"),
                $result["folders"]
            );
        }

        /**
         * Should allow max_results and next_cursor in root_folders and subfolders
         *
         * @throws Api\GeneralError
         */
        public function test_root_folder_and_subfolders_allow_max_results_and_next_cursor()
        {
            Curl::mockApi($this);
            $next_cursor = '72410bbc4bfa1a135d9df56d91c072ba3356570d333450b286'.
                'aec30af27dbe3b6b51054047a65b007c8363900c3fe6ae';

            $this->api->root_folders([
                'max_results'   => 3,
                'next_cursor'   => $next_cursor,
            ]);

            assertGet($this);
            assertParam($this, "max_results", 3);
            assertParam($this, "next_cursor", $next_cursor);

            $this->api->subfolders('folder1', [
                'max_results'   => 3,
                'next_cursor'   => $next_cursor,
            ]);

            assertGet($this);
            assertParam($this, "max_results", 3);
            assertParam($this, "next_cursor", $next_cursor);
        }

        /**
         * Should throw exception on non-existing folder
         *
         * @expectedException \Cloudinary\Api\NotFound
         *
         * @throws Api\GeneralError
         */
        public function test33_folder_listing_error()
        {
            $this->api->subfolders("I-do-not-exist");
        }

        /**
         * Should create folder
         *
         * @throws Api\GeneralError
         * @throws Exception
         */
        public function test_create_folder()
        {
            $folderPath = 'folder7';

            Curl::mockApi($this);

            $this->api->create_folder($folderPath);

            assertPost($this);
            assertUrl($this, "/folders/$folderPath");
        }

        /**
         * Should delete folder
         *
         * @throws Api\GeneralError
         * @throws Exception
         */
        public function test_delete_folder()
        {
            $folderPath = UNIQUE_TEST_FOLDER;

            Curl::mockApi($this);

            $this->api->delete_folder($folderPath);

            assertDelete($this);
            assertUrl($this, "/folders/$folderPath");
        }

        /**
         * Should allow restoring resources
         *
         * @throws Api\GeneralError
         */
        public function test34_restore()
        {
            Curl::mockApi($this);
            $this->api->restore(array("api_test_restore"));
            assertPost($this);
            assertUrl($this, "/resources/image/upload/restore");
            assertParam($this, "public_ids[0]", "api_test_restore");
        }

        /**
         * Should allow upload mapping
         * @throws Api\GeneralError
         */
        public function test35_upload_mapping()
        {
            Curl::mockApi($this);

            $this->api->create_upload_mapping("api_test_upload_mapping", array("template" => "http://cloudinary.com"));
            assertUrl($this, "/upload_mappings");
            assertPost($this);
            assertParam($this, "folder", "api_test_upload_mapping");
            assertParam($this, "template", "http://cloudinary.com");

            $this->api->upload_mapping("api_test_upload_mapping");
            assertUrl($this, "/upload_mappings");
            assertGet($this);
            assertParam($this, "folder", "api_test_upload_mapping");

            $this->api->update_upload_mapping(
                "api_test_upload_mapping",
                array("template" => "http://res.cloudinary.com")
            );
            assertUrl($this, "/upload_mappings");
            assertPut($this);
            assertParam($this, "folder", "api_test_upload_mapping");
            assertParam($this, "template", "http://res.cloudinary.com");

            $this->api->delete_upload_mapping("api_test_upload_mapping");
            assertUrl($this, "/upload_mappings");
            assertDelete($this);
            assertParam($this, "folder", "api_test_upload_mapping");
        }

        private static $predefined_profiles = array(
            "4k",
            "full_hd",
            "hd",
            "sd",
            "full_hd_wifi",
            "full_hd_lean",
            "hd_lean",
        );

        /**
         * Should allow creating streaming profile
         *
         * @throws Api\GeneralError
         */
        public function test_create_streaming_profile()
        {
            $options = array(
                "representations" => array(
                    array(
                        "transformation" => array(
                            "bit_rate" => "5m",
                            "height" => 1200,
                            "width" => 1200,
                            "crop" => "limit",
                        ),
                    ),
                ),
            );
            $result = $this->api->create_streaming_profile(self::$streaming_profile_1, $options);
            $this->assertArrayHasKey("representations", $result["data"]);
            $reps = $result["data"]["representations"];
            $this->assertTrue(is_array($reps));
            // transformation is returned as an array
            $this->assertTrue(is_array($reps[0]["transformation"]));

            $tr = $reps[0]["transformation"][0];
            $expected = array("bit_rate" => "5m", "height" => 1200, "width" => 1200, "crop" => "limit");
            $this->assertEquals($expected, $tr);
        }

        /**
         * Should allow updating and deleting streaming profile
         *
         * @throws Api\GeneralError
         */
        public function test_update_delete_streaming_profile()
        {
            $options = array(
                "representations" => array(
                    array(
                        "transformation" => array(
                            "bit_rate" => "5m",
                            "height" => 1200,
                            "width" => 1200,
                            "crop" => "limit",
                        ),
                    ),
                ),
            );
            try {
                $this->api->create_streaming_profile(self::$streaming_profile_2, $options);
            } catch (Cloudinary\Api\AlreadyExists $e) {
            }

            $options = array(
                "representations" => array(
                    array(
                        "transformation" => array(
                            "bit_rate" => "5m",
                            "height" => 1000,
                            "width" => 1000,
                            "crop" => "scale",
                        ),
                    ),
                ),
            );
            $result = $this->api->update_streaming_profile(self::$streaming_profile_2, $options);

            $this->assertArrayHasKey("representations", $result["data"]);
            $reps = $result["data"]["representations"];
            $this->assertTrue(is_array($reps));
            // transformation is returned as an array
            $this->assertTrue(is_array($reps[0]["transformation"]));

            $tr = $reps[0]["transformation"][0];
            $expected = array("bit_rate" => "5m", "height" => 1000, "width" => 1000, "crop" => "scale");
            $this->assertEquals($expected, $tr);

            $this->api->delete_streaming_profile(self::$streaming_profile_2);
            $result = $this->api->list_streaming_profiles();
            $this->assertArrayNotHasKey(self::$streaming_profile_2, array_map(function ($profile) {
                return $profile["name"];
            }, $result["data"]));
        }

        /**
         * Should allow getting streaming profile
         *
         * @throws Api\GeneralError
         */
        public function test_get_streaming_profile()
        {

            $result = $this->api->get_streaming_profile(self::$predefined_profiles[0]);
            $this->assertArrayHasKey("representations", $result["data"]);
            $reps = $result["data"]["representations"];
            $this->assertTrue(is_array($reps));
            // transformation is returned as an array
            $this->assertTrue(is_array($reps[0]["transformation"]));

            $tr = $reps[0]["transformation"][0];
            $this->assertArrayHasKey("bit_rate", $tr);
            $this->assertArrayHasKey("height", $tr);
            $this->assertArrayHasKey("width", $tr);
            $this->assertArrayHasKey("crop", $tr);
        }

        /**
         * Should allow listing streaming profiles
         *
         * @throws Api\GeneralError
         */
        public function test_list_streaming_profile()
        {
            $result = $this->api->list_streaming_profiles();
            $names = array_map(function ($profile) {
                return $profile["name"];
            }, $result["data"]);
            $this->assertEmpty(array_diff(self::$predefined_profiles, $names));
        }

        /**
         * Should allow updating resources
         *
         * @throws Api\GeneralError
         */
        public function test_update_parameters()
        {
            Curl::mockApi($this);

            $this->api->update(self::$api_test, array("auto_tagging" => 0.5));
            assertUrl($this, '/resources/image/upload/' . self::$api_test);
            assertParam($this, "auto_tagging", 0.5);
            $fields = Curl::$instance->fields();
            $this->assertArrayNotHasKey("face_coordinates", $fields, "update() should not send empty parameters");
            $this->assertArrayNotHasKey("tags", $fields, "update() should not send empty parameters");
            $this->assertArrayNotHasKey("context", $fields, "update() should not send empty parameters");
            $this->assertArrayNotHasKey("face_coordinates", $fields, "update() should not send empty parameters");
            $this->assertArrayNotHasKey("custom_coordinates", $fields, "update() should not send empty parameters");
            $this->assertArrayNotHasKey("access_control", $fields, "update() should not send empty parameters");
        }

        /**
         * Should allow the user to define ACL in the update parameters
         *
         * @throws Api\GeneralError
         */
        public function test_update_access_control()
        {
            Curl::mockApi($this);

            $acl = array("access_type" => "anonymous",
                         "start" => "2018-02-22 16:20:57 +0200",
                         "end"=> "2018-03-22 00:00 +0200"
            );
            $exp_acl = '[{"access_type":"anonymous",' .
                       '"start":"2018-02-22 16:20:57 +0200",' .
                       '"end":"2018-03-22 00:00 +0200"}]';

            $this->api->update(self::$api_test, array("access_control" => $acl));

            assertParam($this, "access_control", $exp_acl);
        }

        /**
         * Should correctly encode url
         *
         * @throws Api\GeneralError
         */
        public function test_url_encoding()
        {
            Curl::mockApi($this);

            $public_ids = array("with space", "special!@#$%^&*(){}|?characters");
            $expected_public_ids = array("with%20space", "special%21%40%23%24%25%5E%26%2A%28%29%7B%7D%7C%3Fcharacters");

            foreach ($public_ids as $index => $public_id) {
                $this->api->update($public_id);
                assertUrl($this, "/resources/image/upload/" . $expected_public_ids[$index]);
            }

            $tags = array("tag1,tag2", 'with space,another space', 'spec!@l_t@g$%^&*_)(*>?<>||}{');
            $expected_tags = array(
                "tag1%2Ctag2",
                'with%20space%2Canother%20space',
                'spec%21%40l_t%40g%24%25%5E%26%2A_%29%28%2A%3E%3F%3C%3E%7C%7C%7D%7B');

            foreach ($tags as $index => $tag) {
                $this->api->resources_by_tag($tag);
                assertUrl($this, "/resources/image/tags/" . $expected_tags[$index]);
            }
        }
    }
}
