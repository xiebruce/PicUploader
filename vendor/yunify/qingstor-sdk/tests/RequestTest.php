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
use QingStor\SDK\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    private $testRequest;
    private $testSigner;
    private $testKeyid;
    private $testKeysecret;

    public function setUp()
    {
        $this->testConfig = new Config('QYACCESSKEYIDEXAMPLE', 'SECRETACCESSKEY');
        $this->testOperation = array(
            'API' => 'Test',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => 'pek3a.qingstor.com',
                'Date' => 'Wed, 10 Dec 2014 17:20:31 GMT',
                'test_empty_header' => '',
                'Content-MD5' => '4gJE4saaMU4BqNR0kLY+lw==',
                'x-qs-copy-source' => '/mybucket/music.mp3',
                'x-qs-date' => 'Wed, 10 Dec 2014 17:20:31 GMT',
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
                'object-key' => '中文测试.jpg',
            ),
            'Body' => null,
        );
        $this->testSigner = new Request(
            $this->testConfig,
            $this->testOperation
        );
    }

    public function test_getContentMD5()
    {
        $this->assertEquals(
            '4gJE4saaMU4BqNR0kLY+lw==',
            $this->testSigner->getContentMD5()
        );
    }

    public function test_getContentType()
    {
        $this->assertEquals(
            'image/jpeg',
            $this->testSigner->getContentType()
        );
    }

    public function test_getDate()
    {
        $this->assertEquals(
            'Wed, 10 Dec 2014 17:20:31 GMT',
            $this->testSigner->getDate()
        );
    }

    public function test_getCanonicalizedHeaders()
    {
        $this->assertEquals(
            "x-qs-copy-source:/mybucket/music.mp3\nx-qs-date:Wed, 10 Dec 2014 17:20:31 GMT\n",
            $this->testSigner->getCanonicalizedHeaders()
        );
    }

    public function test_getCanonicalizedResource()
    {
        $this->assertEquals(
            '/test_bucket/%E4%B8%AD%E6%96%87%E6%B5%8B%E8%AF%95.jpg',
            $this->testSigner->getCanonicalizedResource()
        );
    }

    public function test_getAuthorization()
    {
        $this->assertEquals(
            'Wc+HQc/7WIL7aeK+II1FRW/3cTNiJFlWWnipXjfmeUQ=',
            $this->testSigner->getAuthorization()
        );
    }
}
