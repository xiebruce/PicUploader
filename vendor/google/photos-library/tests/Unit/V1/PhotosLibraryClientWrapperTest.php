<?php
/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Photos\Library\Tests\Unit\V1;

use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Photos\Library\V1\BatchCreateMediaItemsRequest;
use Google\Photos\Library\V1\BatchCreateMediaItemsResponse;
use Google\Photos\Library\V1\NewMediaItem;
use Google\Photos\Library\V1\NewMediaItemResult;
use Google\Photos\Library\V1\PhotosLibraryClient;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for {@link PhotosLibraryClient}, in addition to those in
 * {@link PhotosLibraryClientTest}, which only tests {@link PhotosLibraryGapicClient}. This set of
 * tests exercises the behavior of PhotosLibraryClient that is not inherited from
 * PhotosLibraryGapicClient.
 *
 * Extends GeneratedTest for access to assertProtobufEquals.
 */
class PhotosLibraryClientWrapperTest extends GeneratedTest
{
    private $photosLibraryClient;
    private $mockHttpHandler;
    private $mockCredentialsHandler;
    private $mockTransport;

    protected function setUp()
    {
        $this->mockCredentialsHandler = $this->getMockBuilder(CredentialsWrapper::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->mockTransport = new MockTransport();
        $this->mockHttpHandler = new MockHandler();

        $options = [
            'credentials' => $this->mockCredentialsHandler,
            'transport' => $this->mockTransport,
            'httpClient' => new Client(['handler' => HandlerStack::create($this->mockHttpHandler)])
        ];

        $this->photosLibraryClient = new PhotosLibraryClient($options);
    }

    public function testUpload()
    {
        $this->mockHttpHandler->append(new Response(200, [], "upload token"));
        $this->mockCredentialsHandler->method('getBearerString')->willReturn('bearer string');

        $response = $this->photosLibraryClient->upload("some bytes", "my_file.png");
        $this->assertSame($response, "upload token");

        $request = $this->mockHttpHandler->getLastRequest();
        $this->assertSame("application/octet-stream", $request->getHeaderLine('Content-type'));
        $this->assertSame("my_file.png", $request->getHeaderLine('X-Goog-Upload-File-Name'));
        $this->assertSame("bearer string", $request->getHeaderLine('Authorization'));
        $this->assertSame("some bytes", (string) $request->getBody());
    }
}
