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

namespace QingStor\SDK\Test;

use QingStor\SDK\Builder;
use QingStor\SDK\Config;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    private $testBuilder;
    private $testOperation;
    private $testConfig;

    public function setUp()
    {
        $this->testConfig = new Config();
        $this->testConfig->loadConfigFromData(
            array(
                'access_key_id' => 'ACCESS_KEY_ID',
                'secret_access_key' => 'SECRET_ACCESS_KEY',
                'host' => 'qingstor.com',
                'port' => 443,
                'protocol' => 'https',
                'connection_retries' => 3,
                'log_level' => 'warn',
            )
        );
        $this->testOperation = array(
            'API' => 'Test',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => 'pek3a.qingstor.com',
                'Date' => 'Wed, 10 Dec 2014 17:20:31 GMT',
                'test_empty_header' => '',
            ),
            'Params' => array(
                'test_params_1' => 'test_val',
                'test_params_2' => '中文测试',
                'test_params_empty' => '',
            ),
            'Elements' => array(
                'test_elements_1' => 'test_val',
                'test_elements_2' => '中文测试',
                'test_elements_empty' => '',
            ),
            'Properties' => array(
                'zone' => 'pek3a',
                'bucket-name' => 'test_bucket',
                'object-key' => '中文 测试.json',
            ),
            'Body' => null,
        );
        $this->testBuilder = new Builder($this->testConfig, $this->testOperation);
    }

    public function test_parseRequestParams()
    {
        $parsedParams = $this->testBuilder->parseRequestParams();

        $this->assertEquals(
            array(
                'test_params_1' => 'test_val',
                'test_params_2' => '中文测试',
            ),
            $parsedParams
        );
    }

    public function test_parseRequestHeaders()
    {
        $parsedHeaders = $this->testBuilder->parseRequestHeaders();
        $this->assertEquals(
            array(
                'Host' => 'pek3a.qingstor.com',
                'Date' => 'Wed, 10 Dec 2014 17:20:31 GMT',
                'User-Agent' => 'qingstor-sdk-php/'.$GLOBALS['version'].'  (PHP v'.phpversion().'; '.php_uname('s').')',
                'Content-Type' => 'application/json',
            ),
            $parsedHeaders
        );
    }

    public function test_parseRequestBody()
    {
        $parsedBody = $this->testBuilder->parseRequestBody();

        $this->assertEquals(
            '{"test_elements_1":"test_val","test_elements_2":"\u4e2d\u6587\u6d4b\u8bd5","test_elements_empty":""}',
            $parsedBody
        );
    }

    public function test_parseRequestProperties()
    {
        $parsedProperties = $this->testBuilder->parseRequestProperties();

        $this->assertEquals(
            array(
                'zone' => 'pek3a',
                'bucket-name' => 'test_bucket',
                'object-key' => '中文 测试.json',
            ),
            $parsedProperties
        );
    }

    public function test_parseRequestURL()
    {
        $parsedURL = $this->testBuilder->parseRequestURL();

        $this->assertEquals(
            'https://pek3a.qingstor.com:443/test_bucket/%E4%B8%AD%E6%96%87%20%E6%B5%8B%E8%AF%95.json?test_params_1=test_val&test_params_2=%E4%B8%AD%E6%96%87%E6%B5%8B%E8%AF%95',
            $parsedURL
        );
    }
}
