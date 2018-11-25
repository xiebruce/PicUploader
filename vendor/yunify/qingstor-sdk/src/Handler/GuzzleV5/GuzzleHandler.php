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

namespace QingStor\SDK\Handler\GuzzleV5;

use GuzzleHttp\Psr7\Request as Psr7Request;
use GuzzleHttp\Psr7\Response as Psr7Response;
use GuzzleHttp\Message\ResponseInterface as GuzzleResponse;

function createGuzzleRequest($client, Psr7Request $req)
{
    $request = $client->createRequest(
        $req->getMethod(),
        $req->getUri(),
        ['exceptions' => false]
    );
    $body = $req->getBody();
    if ($body->getSize() === 0) {
        $request->setBody(null);
    } else {
        $request->setBody(new GuzzleStream($body));
    }
    $request->setHeaders($req->getHeaders());

    return $request;
}

function createPsr7Response(GuzzleResponse $response)
{
    if ($body = $response->getBody()) {
        $body = new PsrStream($body);
    }

    return new Psr7Response(
        $response->getStatusCode(),
        $response->getHeaders(),
        $body,
        $response->getReasonPhrase()
    );
}
