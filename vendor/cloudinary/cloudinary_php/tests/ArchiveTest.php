<?php

namespace Cloudinary {

    require_once('TestHelper.php');

    use PHPUnit\Framework\TestCase;

    class ArchiveTest extends TestCase
    {
        private $tag;
        private $tags;

        public static function setUpBeforeClass()
        {
            Curl::$instance = new Curl();
        }

        protected function setUp()
        {
            $this->tag = "archive_test_" . SUFFIX;
            $this->tags = array($this->tag, TEST_TAG, UNIQUE_TEST_TAG);
            \Cloudinary::reset_config();
            if (!\Cloudinary::config_get("api_secret")) {
                $this->markTestSkipped('Please setup environment for Upload test to run');
            }

            Uploader::upload("tests/logo.png", array("tags" => $this->tags));
            Uploader::upload("tests/logo.png", array("tags" => $this->tags, "width" => 10, "crop" => "scale"));
        }

        protected function tearDown()
        {
            Curl::$instance = new Curl();
            $api = new \Cloudinary\Api();
            $api->delete_resources_by_tag($this->tag);
        }

        public function test_create_zip()
        {
            $result = Uploader::create_zip(array("tags" => $this->tag));
            $this->assertEquals(2, $result["file_count"]);
        }

        public function test_expires_at()
        {
            Uploader::create_zip(array("tags" => $this->tag, "expires_at" => time() + 3600));
            assertUrl($this, '/image/generate_archive');
            assertParam($this, "target_format", "zip");
            assertParam($this, "tags[0]", $this->tag);
            assertParam($this, "expires_at", null, "should support the 'expires_at' parameter");
        }

        public function test_skip_transformation_name()
        {
            Curl::mockUpload($this);
            Uploader::create_zip(array("tags" => $this->tag, "skip_transformation_name" => true));
            assertUrl($this, '/image/generate_archive');
            assertParam($this, "tags[0]", $this->tag);
            assertParam(
                $this,
                "skip_transformation_name",
                1,
                "should support the 'skip_transformation_name' parameter"
            );
        }

        public function test_allow_missing()
        {
            Curl::mockUpload($this);
            Uploader::create_zip(array("tags" => $this->tag, "allow_missing" => true));
            assertUrl($this, '/image/generate_archive');
            assertParam($this, "tags[0]", $this->tag);
            assertParam($this, "allow_missing", 1, "should support the 'allow_missing' parameter");
        }

        public function test_download_zip_url()
        {
            $result = \Cloudinary::download_zip_url(array("tags" => $this->tag));
            $file = tempnam(".", "zip");
            file_put_contents($file, file_get_contents($result));
            $zip = new \ZipArchive();
            $zip->open($file);
            $this->assertEquals(2, $zip->numFiles);
            unlink($file);
        }

        /**
         * Checks URLs for downloading a folder as an archive file.
         */
        public function test_download_folder()
        {
            // should return url with resource_type image.
            $download_folder_url = \Cloudinary::download_folder('samples/', ['resource_type' => 'image']);
            $this->assertContains('image', $download_folder_url);

            // should return valid url.
            $download_folder_url = \Cloudinary::download_folder('folder/');
            $this->assertContains('generate_archive', $download_folder_url);

            // should flatten folder.
            $download_folder_url = \Cloudinary::download_folder('folder/', ['flatten_folders' => true]);
            $this->assertContains('flatten_folders', $download_folder_url);

            // should expire_at folder.
            $download_folder_url = \Cloudinary::download_folder('folder/', ['expires_at' => time() + 60]);
            $this->assertContains('expires_at', $download_folder_url);

            // should use original file_name of folder.
            $download_folder_url = \Cloudinary::download_folder('folder/', ['use_original_filename' => true]);
            $this->assertContains('use_original_filename', $download_folder_url);
        }

        /**
         * Generate a url with asset and version id
         */
        public function test_download_backedup_asset()
        {
            $url = \Cloudinary::download_backedup_asset(
                'b71b23d9c89a81a254b88a91a9dad8cd',
                '0e493356d8a40b856c4863c026891a4e'
            );

            self::assertContains('asset_id', $url);
            self::assertContains('version_id', $url);
        }

        public function test_create_archive_multiple_resource_types()
        {
            Curl::mockUpload($this);

            $testIds = [
                "image/upload/" . UNIQUE_TEST_ID,
                "video/upload/" . UNIQUE_TEST_ID,
                "raw/upload/" . UNIQUE_TEST_ID,
            ];

            Uploader::create_zip(
                array(
                    "resource_type"              => "auto",
                    "fully_qualified_public_ids" => $testIds
                )
            );

            assertUrl($this, '/auto/generate_archive');

            assertParam($this, "fully_qualified_public_ids[0]", $testIds[0]);
            assertParam($this, "fully_qualified_public_ids[1]", $testIds[1]);
            assertParam($this, "fully_qualified_public_ids[2]", $testIds[2]);
        }
    }
}
