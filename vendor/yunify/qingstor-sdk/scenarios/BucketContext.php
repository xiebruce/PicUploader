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
use Behat\Gherkin\Node\PyStringNode;
use QingStor\SDK\Service\QingStor;
use QingStor\SDK\Config;
use PHPUnit_Framework_Assert as PHPUnit;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behat\Testwork\Hook\Scope\AfterSuiteScope;

/**
 * Defines application features from the specific context.
 */
class BucketContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->test_config = spyc_load_file('test_config.yaml');
        $this->config = new Config();
        $this->config->loadUserConfig();
        $this->test_service = new QingStor(
            $this->config
        );
        $this->test_bucket = $this->test_service->Bucket($this->test_config['bucket_name'], $this->test_config['zone']);
    }

    // ----------------------------------------------------------------------------

    /** @BeforeScenario */
    public function before(BeforeScenarioScope $scope)
    {
        $config = new Config();
        $test_config = spyc_load_file('test_config.yaml');
        $test_service = new QingStor(
            $config
        );
        $test_bucket = $test_service->Bucket($test_config['bucket_name'], $test_config['zone']);
        $test_bucket->put();
    }

    /** @AfterSuite */
    public static function teardown(AfterSuiteScope $scope)
    {
    }

    // ----------------------------------------------------------------------------

    /**
     * @When initialize the bucket
     */
    public function initializeTheBucket()
    {
    }

    /**
     * @Then the bucket is initialized
     */
    public function theBucketIsInitialized()
    {
        PHPUnit::assertNotNull($this->test_bucket);
    }

    /**
     * @When put bucket
     */
    public function putBucket()
    {
    }

    /**
     * @Then put bucket status code is :arg1
     */
    public function putBucketStatusCodeIs($arg1)
    {
    }

    /**
     * @When put same bucket again
     */
    public function putSameBucketAgain()
    {
        $this->res = $this->test_bucket->put();
    }

    /**
     * @Then put same bucket again status code is :arg1
     */
    public function putSameBucketAgainStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When list objects
     */
    public function listObjects()
    {
        $this->res = $this->test_bucket->listObjects();
    }

    /**
     * @Then list objects status code is :arg1
     */
    public function listObjectsStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @Then list objects keys count is :arg1
     */
    public function listObjectsKeysCountIs($arg1)
    {
        PHPUnit::assertGreaterThanOrEqual(intval($arg1), count($this->res->keys));
    }

    /**
     * @When head bucket
     */
    public function headBucket()
    {
        $this->res = $this->test_bucket->head();
    }

    /**
     * @Then head bucket status code is :arg1
     */
    public function headBucketStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When delete bucket
     */
    public function deleteBucket()
    {
    }

    /**
     * @Then delete bucket status code is :arg1
     */
    public function deleteBucketStatusCodeIs($arg1)
    {
    }

    /**
     * @When delete multiple objects:
     */
    public function deleteMultipleObjects(PyStringNode $string)
    {
        $bucket_name = $this->test_config['bucket_name'];
        $zone = $this->test_config['zone'];
        $res0 = $this->test_bucket->putObject('object_0', array());
        PHPUnit::assertEquals(201, $res0->statusCode);
        $res1 = $this->test_bucket->putObject('object_1', array());
        PHPUnit::assertEquals(201, $res1->statusCode);
        $res2 = $this->test_bucket->putObject('object_2', array());
        PHPUnit::assertEquals(201, $res2->statusCode);

        $test_data = json_decode($string, true);
        $this->res = $this->test_bucket->deleteMultipleObjects(
            array(
                'objects' => $test_data['objects'],
                'quiet' => $test_data['quiet'],
            )
        );
    }

    /**
     * @Then delete multiple objects code is :arg1
     */
    public function deleteMultipleObjectsCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When get bucket statistics
     */
    public function getBucketStatistics()
    {
        $this->res = $this->test_bucket->getStatistics();
    }

    /**
     * @Then get bucket statistics status code is :arg1
     */
    public function getBucketStatisticsStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @Then get bucket statistics status is :arg1
     */
    public function getBucketStatisticsStatusIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->status);
    }

    // ----------------------------------------------------------------------------

    /**
     * @When put bucket ACL:
     */
    public function putBucketAcl(PyStringNode $string)
    {
        $this->res = $this->test_bucket->putACL(
            array(
                'acl' => json_decode($string, true)['acl'],
            )
        );
    }

    /**
     * @Then put bucket ACL status code is :arg1
     */
    public function putBucketAclStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When get bucket ACL
     */
    public function getBucketAcl()
    {
        $this->res = $this->test_bucket->getACL();
    }

    /**
     * @Then get bucket ACL status code is :arg1
     */
    public function getBucketAclStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @Then get bucket ACL should have grantee name :arg1
     */
    public function getBucketAclShouldHaveGranteeName($arg1)
    {
        $ok = false;
        foreach ($this->res->acl as $key => $value) {
            if ($value['grantee']['name'] === $arg1) {
                $ok = true;
            }
        }
        PHPUnit::assertEquals(true, $ok);
    }

    // ----------------------------------------------------------------------------

    /**
     * @When put bucket CORS:
     */
    public function putBucketCors(PyStringNode $string)
    {
        $test_data = json_decode($string, true);
        $this->res = $this->test_bucket->putCORS(
            array(
                'cors_rules' => $test_data['cors_rules'],
            )
        );
    }

    /**
     * @Then put bucket CORS status code is :arg1
     */
    public function putBucketCorsStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When get bucket CORS
     */
    public function getBucketCors()
    {
        $this->res = $this->test_bucket->getCORS();
    }

    /**
     * @Then get bucket CORS status code is :arg1
     */
    public function getBucketCorsStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @Then get bucket CORS should have allowed origin :arg1
     */
    public function getBucketCorsShouldHaveAllowedOrigin($arg1)
    {
        $ok = false;
        foreach ($this->res->cors_rules as $key => $value) {
            if ($value['allowed_origin'] === $arg1) {
                $ok = true;
            }
        }
        PHPUnit::assertEquals(true, $ok);
    }

    /**
     * @When delete bucket CORS
     */
    public function deleteBucketCors()
    {
        $this->res = $this->test_bucket->deleteCORS();
    }

    /**
     * @Then delete bucket CORS status code is :arg1
     */
    public function deleteBucketCorsStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    // ----------------------------------------------------------------------------

    /**
     * @When put bucket external mirror:
     */
    public function putBucketExternalMirror(PyStringNode $string)
    {
        $test_data = json_decode($string, true);
        $this->res = $this->test_bucket->putExternalMirror(
            array(
                'source_site' => $test_data['source_site'],
            )
        );
    }

    /**
     * @Then put bucket external mirror status code is :arg1
     */
    public function putBucketExternalMirrorStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When get bucket external mirror
     */
    public function getBucketExternalMirror()
    {
        $this->res = $this->test_bucket->getExternalMirror();
    }

    /**
     * @Then get bucket external mirror status code is :arg1
     */
    public function getBucketExternalMirrorStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @Then get bucket external mirror should have source_site :arg1
     */
    public function getBucketExternalMirrorShouldHaveSourceSite($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->source_site);
    }

    /**
     * @When delete bucket external mirror
     */
    public function deleteBucketExternalMirror()
    {
        $this->res = $this->test_bucket->deleteExternalMirror();
    }

    /**
     * @Then delete bucket external mirror status code is :arg1
     */
    public function deleteBucketExternalMirrorStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    // ----------------------------------------------------------------------------

    /**
     * @When put bucket policy:
     */
    public function putBucketPolicy(PyStringNode $string)
    {
        $test_data = json_decode($string, true);
        if (count($test_data['statement']) > 0) {
            $test_data['statement'][0]['resource'] = [$this->test_config['bucket_name'].'/*'];
        }
        $this->res = $this->test_bucket->putPolicy(
            array(
                'statement' => $test_data['statement'],
            )
        );
    }

    /**
     * @Then put bucket policy status code is :arg1
     */
    public function putBucketPolicyStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @When get bucket policy
     */
    public function getBucketPolicy()
    {
        $this->res = $this->test_bucket->getPolicy();
    }

    /**
     * @Then get bucket policy status code is :arg1
     */
    public function getBucketPolicyStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @Then get bucket policy should have Referer :arg1
     */
    public function getBucketPolicyShouldHaveReferer($arg1)
    {
        $ok = false;
        foreach ($this->res->statement as $key => $statement) {
            foreach ($statement['condition']['string_like']['Referer'] as $key => $referer) {
                if ($referer === $arg1) {
                    $ok = true;
                }
            }
        }
        PHPUnit::assertEquals(true, $ok);
    }

    /**
     * @When delete bucket policy
     */
    public function deleteBucketPolicy()
    {
        $this->res = $this->test_bucket->deletePolicy();
    }

    /**
     * @Then delete bucket policy status code is :arg1
     */
    public function deleteBucketPolicyStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }

    /**
     * @Given an object created by Initiate Multipart Upload
     */
    public function anObjectCreatedByInitiateMultipartUpload()
    {
        $this->test_bucket->initiateMultipartUpload('list_multipart_uploads');
    }

    /**
     * @When list multipart uploads
     */
    public function listMultipartUploads()
    {
        $this->res = $this->test_bucket->listMultipartUploads();
    }

    /**
     * @Then list multipart uploads count is :arg1
     */
    public function listMultipartUploadsCountIs($arg1)
    {
        PHPUnit::assertEquals($arg1, count($this->res->uploads));
    }
}
