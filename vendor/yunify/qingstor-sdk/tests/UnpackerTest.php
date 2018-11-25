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

use PHPUnit\Framework\TestCase;
use QingStor\SDK\Service\QingStor;
use QingStor\SDK\Config;

class UnpackerTest extends TestCase
{
    public function setUp()
    {
        $this->config = new Config('test_access_key', 'test_secret_key');
        $this->service = new QingStor(
            $this->config
        );
        $this->bucket = $this->service->Bucket('test_bucket', 'pek3a');
        $this->res = $this->bucket->put();
    }

    public function test_unpackResponseHeaders()
    {
        $this->res->unpackResponseHeaders();
        $this->assertEquals('application/json', $this->res->{'Content-Type'});
        $this->assertEquals('200', $this->res->{'Content-Length'});
        $this->assertEquals('QingStor', $this->res->Server);
        $this->assertObjectHasAttribute('x-qs-request-id', $this->res);
        $this->assertObjectHasAttribute('Date', $this->res);
    }

    public function test_unpackResponseBody()
    {
        $this->res->unpackResponseBody();
        $this->assertEquals('The access key id you provided does not exist.', $this->res->message);
        $this->assertEquals('invalid_access_key_id', $this->res->code);
        $this->assertEquals('https://docs.qingcloud.com/qingstor/api/common/signature.html', $this->res->url);
        $this->assertObjectHasAttribute('request_id', $this->res);
    }
}
