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

/**
 * Defines application features from the specific context.
 */
class ServiceContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public static $test_config;

    public function __construct()
    {
        $this->config = new Config();
        $this->config->loadUserConfig();
        $this->test = new QingStor(
            $this->config
        );
    }

    /**
     * @When initialize QingStor service
     */
    public function initializeQingStor()
    {
        $this->test = new QingStor(
            $this->config
        );
    }

    /**
     * @Then the QingStor service is initialized
     */
    public function theQingStorIsInitialized()
    {
        PHPUnit::assertNotNull($this->test);
    }

    /**
     * @When list buckets
     */
    public function listBuckets()
    {
        $this->res = $this->test->listBuckets();
    }

    /**
     * @Then list buckets status code is :arg1
     */
    public function listBucketsStatusCodeIs($arg1)
    {
        PHPUnit::assertEquals($arg1, $this->res->statusCode);
    }
}
