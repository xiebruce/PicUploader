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

namespace QingStor\SDK;

use GuzzleHttp\ClientInterface;
use QingStor\SDK\Handler as QingStorHandler;

class Unpacker
{
    public function __construct($res)
    {
        $this->res = $this->handler($res);
        $this->statusCode = $res->getStatusCode();
        $this->unpackResponseHeaders();
        $this->unpackResponseBody();
    }

    public function handler($res)
    {
        $version = (string)ClientInterface::VERSION;
        if ($version[0] === '5') {
            return QingStorHandler\GuzzleV5\createPsr7Response($res);
        } elseif ($version[0] === '6') {
            return QingStorHandler\GuzzleV6\createPsr7Response($res);
        } else {
            throw new \RuntimeException('Unknown Guzzle version: ' . $version);
        }
    }

    public function unpackResponseHeaders()
    {
        if ($this->res == null) {
            return;
        }

        foreach ($this->res->getHeaders() as $key => $value) {
            if (count($value) > 1) {
                $this->$key = $value;
            } else {
                $this->$key = $value[0];
            }
        }
    }

    public function unpackResponseBody()
    {
        if ($this->res == null) {
            $this->body = null;

            return;
        }

        $body = $this->res->getBody();
        if ($this->{'Content-Type'} === 'application/json') {
            if ($body !== '') {
                $data = json_decode($body, true);
                if (is_array($data)) {
                    foreach ($data as $key => $value) {
                        $this->$key = $value;
                    }
                }
            }
        } else {
            $this->body = $body;
        }
    }
}
