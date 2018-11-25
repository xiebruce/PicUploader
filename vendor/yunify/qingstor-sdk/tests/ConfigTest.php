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

use QingStor\SDK\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function test_initConfigWithoutKey()
    {
        $testConfig = new Config();

        $this->assertEquals('', $testConfig->access_key_id);
        $this->assertEquals('', $testConfig->secret_access_key);
        $this->assertEquals('qingstor.com', $testConfig->host);
        $this->assertEquals(443, $testConfig->port);
        $this->assertEquals('https', $testConfig->protocol);
        $this->assertEquals(3, $testConfig->connection_retries);
        $this->assertEquals('warn', $testConfig->log_level);
    }

    public function test_initConfigWithKey()
    {
        $testConfig = new Config('ACCESS_KEY_ID_EXAMPLE', 'SECRET_ACCESS_KEY_EXAMPLE');

        $this->assertEquals('ACCESS_KEY_ID_EXAMPLE', $testConfig->access_key_id);
        $this->assertEquals('SECRET_ACCESS_KEY_EXAMPLE', $testConfig->secret_access_key);
        $this->assertEquals('qingstor.com', $testConfig->host);
        $this->assertEquals(443, $testConfig->port);
        $this->assertEquals('https', $testConfig->protocol);
        $this->assertEquals(3, $testConfig->connection_retries);
        $this->assertEquals('warn', $testConfig->log_level);
    }

    public function test_loadConfigFromData()
    {
        $testConfig = new Config();
        $configData = array(
            'access_key_id' => 'ACCESS_KEY_ID_1',
            'secret_access_key' => 'SECRET_ACCESS_KEY_1',
            'host' => 'private.com',
            'port' => 80,
            'protocol' => 'http',
            'connection_retries' => 1,
            'log_level' => 'info',
        );

        $testConfig->loadConfigFromData($configData);

        $this->assertEquals('ACCESS_KEY_ID_1', $testConfig->access_key_id);
        $this->assertEquals('SECRET_ACCESS_KEY_1', $testConfig->secret_access_key);
        $this->assertEquals('private.com', $testConfig->host);
        $this->assertEquals(80, $testConfig->port);
        $this->assertEquals('http', $testConfig->protocol);
        $this->assertEquals(1, $testConfig->connection_retries);
        $this->assertEquals('info', $testConfig->log_level);
    }
}
