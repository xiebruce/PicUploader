<?php
// +-------------------------------------------------------------------------
// | Copyright (C) 2016 Yunify, Inc.
// +-------------------------------------------------------------------------
// | Licensed under the Apache License, Version 2.0 (the "License");
// | you may not use this work except in compliance with the License.
// | You may obtain a copy of the License in the LICENSE file, or at:
// |
// | http://www.apache.org/licenses/LICENSE-2.0
// |
// | Unless required by applicable law or agreed to in writing, software
// | distributed under the License is distributed on an "AS IS" BASIS,
// | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// | See the License for the specific language governing permissions and
// | limitations under the License.
// +-------------------------------------------------------------------------

use Behat\Behat\Context\Context;
use QingStor\SDK\Service\QingStor;
use QingStor\SDK\Config;
use PHPUnit_Framework_Assert as PHPUnit;
use Behat\Behat\Hook\Scope\BeforeFeatureScope;
use Behat\Behat\Hook\Scope\AfterFeatureScope;

/**
 * Defines application features from the specific context.
 */
class ObjectContext implements Context
{
    public static $test_bucket;

    public function __construct()
    {
        $this->test_config = spyc_load_file('test_config.yaml');
        $this->config = new Config();
        $this->config->loadUserConfig();
        $this->test_service = new QingStor(
            $this->config
        );
        self::$test_bucket = $this->test_service->Bucket($this->test_config['bucket_name'], $this->test_config['zone']);
    }

    // ----------------------------------------------------------------------------

    /** @BeforeFeature */
    public static function setupFeature(BeforeFeatureScope $scope)
    {
        $config = new Config();
        $test_config = spyc_load_file('test_config.yaml');
        $test_service = new QingStor(
            $config
        );
        $test_bucket = $test_service->Bucket($test_config['bucket_name'], $test_config['zone']);
        $test_bucket->put();
        exec('dd if=/dev/zero of=/tmp/sdk_bin bs=1048576 count=1');
        exec('dd if=/dev/zero of=/tmp/sdk_bin_part bs=1048576 count=5');
    }

    /** @AfterFeature */
    public static function teardownFeature(AfterFeatureScope $scope)
    {
        exec('rm -f /tmp/sdk_bin');
        exec('rm -f /tmp/sdk_bin_part');
    }

    // ----------------------------------------------------------------------------

    /**
     * @When put object with key :arg1
     */
    public function putObjectWithKey($arg1)
    {
        $this->res = self::$test_bucket->putObject(
            $arg1,
            array(
                'body' => fopen('/tmp/sdk_bin', 'r'),
            )
        );
    }

    /**
     * @Then put object status code is :arg1
     */
    public function putObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When copy object with key :arg1
     */
    public function copyObjectWithKey($arg1)
    {
        $this->res = self::$test_bucket->putObject(
            $arg1.'copy',
            array(
                'x_qs_copy_source' => '/'.$this->test_config['bucket_name'].'/'.$arg1,
            )
        );
    }

    /**
     * @Then copy object status code is :arg1
     */
    public function copyObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When move object with key :arg1
     */
    public function moveObjectWithKey($arg1)
    {
        $this->res = self::$test_bucket->putObject(
            $arg1.'move',
            array(
                'x_qs_move_source' => '/'.$this->test_config['bucket_name'].'/'.$arg1.'copy',
            )
        );
    }

    /**
     * @Then move object status code is :arg1
     */
    public function moveObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When get object with key :arg1
     */
    public function getObject($arg1)
    {
        $this->res = self::$test_bucket->getObject(
            $arg1
        );
    }

    /**
     * @Then get object status code is :arg1
     */
    public function getObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @Then get object content length is :arg1
     */
    public function getObjectContentLengthIs($arg1)
    {
        PHPUnit::assertEquals($arg1, strlen($this->res->body));
    }

    /**
     * @When get object :arg1 with query signature
     */
    public function getObjectWithQuerySignature($arg1)
    {
        $client = new \GuzzleHttp\Client();
        $req = self::$test_bucket->getObjectQuery(
            $arg1,
            time() + 10
        );
        $this->res = new \QingStor\SDK\Unpacker($client->send($req));
    }

    /**
     * @Then get object with query signature content length is :arg1
     */
    public function getObjectWithQuerySignatureContentLengthIs($arg1)
    {
        PHPUnit::assertEquals($arg1, strlen($this->res->body));
    }

    /**
     * @When get object :arg1 with content type :arg2
     */
    public function getObjectWithContentType($arg1, $arg2)
    {
        $this->res = self::$test_bucket->getObject(
            $arg1,
            array(
                'response-content-type' => $arg2,
            )
        );
    }

    /**
     * @Then get object content type is :arg1
     */
    public function getObjectContentTypeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->{'Content-Type'});
    }

    /**
     * @When head object with key :arg1
     */
    public function headObject($arg1)
    {
        $this->res = self::$test_bucket->headObject($arg1);
    }

    /**
     * @Then head object status code is :arg1
     */
    public function headObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When options object :arg1 with method :arg2 and origin :arg3
     */
    public function optionsObjectWithMethodAndOrigin($arg1, $arg2, $arg3)
    {
        $this->res = self::$test_bucket->optionsObject(
            $arg1,
            array(
                'Access-Control-Request-Method' => $arg2,
                'Origin' => $arg3,
            )
        );
    }

    /**
     * @Then options object status code is :arg1
     */
    public function optionsObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When delete object with key :arg1
     */
    public function deleteObject($arg1)
    {
        $this->res = self::$test_bucket->deleteObject($arg1);
    }

    /**
     * @Then delete object status code is :arg1
     */
    public function deleteObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When delete the move object with key :arg1
     */
    public function deleteTheMoveObject($arg1)
    {
        $this->res = self::$test_bucket->deleteObject($arg1.'move');
    }

    /**
     * @Then delete the move object status code is :arg1
     */
    public function deleteTheMoveObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    // ----------------------------------------------------------------------------

    public static $initiate_multipart_upload_output;

    /**
     * @When initiate multipart upload with key :arg1
     */
    public function initiateMultipartUploadWithKey($arg1)
    {
        self::$initiate_multipart_upload_output = self::$test_bucket->initiateMultipartUpload(
            $arg1,
            array(
                'Content-Type' => 'text/plain',
            )
        );
    }

    /**
     * @Then initiate multipart upload status code is :arg1
     */
    public function initiateMultipartUploadStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, self::$initiate_multipart_upload_output->statusCode);
    }

    /**
     * @When upload the first part with key :arg1
     */
    public function uploadTheFirstPart($arg1)
    {
        $this->res = self::$test_bucket->uploadMultipart(
            $arg1,
            array(
                'upload_id' => self::$initiate_multipart_upload_output->upload_id,
                'part_number' => 0,
                'body' => fopen('/tmp/sdk_bin_part', 'r'),
            )
        );
    }

    /**
     * @Then upload the first part status code is :arg1
     */
    public function uploadTheFirstPartStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When upload the second part with key :arg1
     */
    public function uploadTheSecondPart($arg1)
    {
        $this->res = self::$test_bucket->uploadMultipart(
            $arg1,
            array(
                'upload_id' => self::$initiate_multipart_upload_output->upload_id,
                'part_number' => 1,
                'body' => fopen('/tmp/sdk_bin_part', 'r'),
            )
        );
    }

    /**
     * @Then upload the second part status code is :arg1
     */
    public function uploadTheSecondPartStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When upload the third part with key :arg1
     */
    public function uploadTheThirdPart($arg1)
    {
        $this->res = self::$test_bucket->uploadMultipart(
            $arg1,
            array(
                'upload_id' => self::$initiate_multipart_upload_output->upload_id,
                'part_number' => 2,
                'body' => fopen('/tmp/sdk_bin_part', 'r'),
            )
        );
    }

    /**
     * @Then upload the third part status code is :arg1
     */
    public function uploadTheThirdPartStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    public static $complete_multipart_upload_output;

    /**
     * @When list multipart with key :arg1
     */
    public function listMultipart($arg1)
    {
        self::$complete_multipart_upload_output = self::$test_bucket->listMultipart(
            $arg1,
            array(
                'upload_id' => self::$initiate_multipart_upload_output->upload_id,
            )
        );
    }

    /**
     * @Then list multipart status code is :arg1
     */
    public function listMultipartStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, self::$complete_multipart_upload_output->statusCode);
    }

    /**
     * @Then list multipart object parts count is :arg1
     */
    public function listMultipartObjectPartsCountIs($arg1)
    {
        PHPUnit::assertEquals($arg1, count(self::$complete_multipart_upload_output->object_parts));
    }

    /**
     * @When complete multipart upload with key :arg1
     */
    public function completeMultipartUpload($arg1)
    {
        $this->res = self::$test_bucket->completeMultipartUpload(
            $arg1,
            array(
                'upload_id' => self::$initiate_multipart_upload_output->upload_id,
                'etag' => '"4072783b8efb99a9e5817067d68f61c6"',
                'object_parts' => self::$complete_multipart_upload_output->object_parts,
            )
        );
    }

    /**
     * @Then complete multipart upload status code is :arg1
     */
    public function completeMultipartUploadStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When abort multipart upload with key :arg1
     */
    public function abortMultipartUpload($arg1)
    {
        $this->res = self::$test_bucket->abortMultipartUpload(
            $arg1,
            array(
                'upload_id' => self::$initiate_multipart_upload_output->upload_id,
            )
        );
    }

    /**
     * @Then abort multipart upload status code is :arg1
     */
    public function abortMultipartUploadStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When delete the multipart object with key :arg1
     */
    public function deleteTheMultipartObject($arg1)
    {
        $this->res = self::$test_bucket->deleteObject($arg1);
    }

    /**
     * @Then delete the multipart object status code is :arg1
     */
    public function deleteTheMultipartObjectStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }
}
