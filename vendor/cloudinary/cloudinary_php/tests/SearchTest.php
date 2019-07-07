<?php

namespace Cloudinary {

    $base = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "..");
    require_once(join(DIRECTORY_SEPARATOR, array($base, "src", "Cloudinary.php")));
    require_once(join(DIRECTORY_SEPARATOR, array($base, "src", "Uploader.php")));
    require_once(join(DIRECTORY_SEPARATOR, array($base, "src", "Api.php")));
    require_once(join(DIRECTORY_SEPARATOR, array($base, "src", "Search.php")));
    require_once("TestHelper.php");

    use PHPUnit\Framework\TestCase;

    class SearchTest extends TestCase
    {
        public $search;

        public static function setUpBeforeClass()
        {
            Curl::$instance = new Curl();
            \Cloudinary::reset_config();
            foreach (range(1, 3) as $i) {
                Uploader::upload(
                    TEST_IMG,
                    array(
                        "public_id" => UNIQUE_TEST_TAG . "_" . $i,
                        "tags" => array(TEST_TAG, UNIQUE_TEST_TAG),
                        "context" => "stage=value",
                        "eager" => array(
                            "transformation" => array(
                                "width" => 100,
                                "crop" => "scale",
                            ),
                        ),
                    )
                );
            }
            sleep(3);
        }

        public function setUp()
        {
            \Cloudinary::reset_config();
            if (!\Cloudinary::config_get("api_secret")) {
                $this->markTestSkipped("Please setup environment for Search test to run");
            }
            $this->search = new Search();
        }

        public function tearDown()
        {
            Curl::$instance = new Curl();
        }

        public static function tearDownAfterClass()
        {
            Curl::$instance = new Curl();
            (new Api())->delete_resources_by_tag(UNIQUE_TEST_TAG);
        }

        public function test_empty_query()
        {
            $result = $this->search->as_array();
            $this->assertEquals(count($result), 0, "Should generate an empty query JSON");
        }

        public function test_should_add_expression_as_array()
        {

            $query = $this->search->expression('format:jpg')->as_array();
            $this->assertEquals($query, array("expression" => 'format:jpg'));
        }

        public function test_should_add_sort_by_as_array()
        {
            $query = $this->search->sort_by('created_at', 'asc')->sort_by('updated_at', 'desc')->as_array();
            $this->assertEquals(
                $query,
                array(
                    "sort_by" => array(
                        array('created_at' => 'asc'),
                        array('updated_at' => 'desc'),
                    ),
                )
            );
        }

        public function test_should_add_max_results_as_array()
        {
            $query = $this->search->max_results('10')->as_array();
            $this->assertEquals($query, array("max_results" => '10'));
        }

        public function test_should_add_next_cursor_as_array()
        {

            $query = $this
                ->search
                ->next_cursor('ec471a97ba510904ab57460b3ba3150ec29b6f8563eb1c10f6925ed0c6813f33cfa62ec6cf5ad96be6d6fa3ac3a76ccb')
                ->as_array();

            $this->assertEquals(
                $query,
                array("next_cursor" => 'ec471a97ba510904ab57460b3ba3150ec29b6f8563eb1c10f6925ed0c6813f33cfa62ec6cf5ad96be6d6fa3ac3a76ccb')
            );
        }

        public function test_should_add_aggregations_arguments_as_array_as_array()
        {
            $query = $this->search->aggregate('format')->aggregate('size_category')->as_array();
            $this->assertEquals($query, array("aggregate" => ["format", "size_category"]));
        }

        public function test_should_add_with_field_as_array()
        {
            $query = $this->search->with_field('context')->with_field('tags')->as_array();
            $this->assertEquals($query, array("with_field" => ["context", "tags"]));
        }

        public function test_should_return_all_images_tagged()
        {

            $results = $this->search->expression("tags:" . UNIQUE_TEST_TAG)->execute();
            $this->assertEquals(count($results['resources']), 3);
        }

        public function test_should_return_resource()
        {
            $results = $this->search->expression("public_id:" . UNIQUE_TEST_TAG . "_1")->execute();
            $this->assertEquals(count($results['resources']), 1);
        }

        public function test_execute_with_params()
        {
            Curl::mockApi($this);
            $result = $this
                ->search
                ->expression("format:jpg")
                ->max_results(10)
                ->next_cursor("abcd")
                ->sort_by("created_at", "asc")
                ->sort_by("updated_at")
                ->aggregate("format")
                ->aggregate("resource_type")
                ->with_field("tags")
                ->with_field("image_metadata")
                ->execute();

            assertJson(
                $this,
                json_encode(
                    array(
                        "sort_by" => array(
                            array("created_at" => "asc"),
                            array("updated_at" => "desc"),
                        ),
                    "aggregate" => array("format", "resource_type"),
                    "with_field" => array("tags", "image_metadata"),
                    "expression" => "format:jpg",
                    "max_results" => 10,
                    "next_cursor" => "abcd",
                    )
                ),
                Curl::$instance->fields(), "Should correctly encode JSON into the HTTP request"
            );

            assertJson(
                $this,
                json_encode(array("Content-type: application/json", "Accept: application/json")),
                json_encode(Curl::$instance->getopt(CURLOPT_HTTPHEADER)),
                "Should use right headers for execution of advanced search api"
            );
        }
    }
}
