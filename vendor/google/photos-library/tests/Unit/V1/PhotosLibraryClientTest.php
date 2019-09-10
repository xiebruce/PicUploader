<?php
/*
 * Copyright 2019 Google LLC
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

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

namespace Google\Photos\Library\Tests\Unit\V1;

use Google\Photos\Library\V1\PhotosLibraryClient;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Photos\Library\V1\AddEnrichmentToAlbumResponse;
use Google\Photos\Library\V1\AlbumPosition;
use Google\Photos\Library\V1\BatchAddMediaItemsToAlbumResponse;
use Google\Photos\Library\V1\BatchCreateMediaItemsResponse;
use Google\Photos\Library\V1\BatchGetMediaItemsResponse;
use Google\Photos\Library\V1\BatchRemoveMediaItemsFromAlbumResponse;
use Google\Photos\Library\V1\JoinSharedAlbumResponse;
use Google\Photos\Library\V1\LeaveSharedAlbumResponse;
use Google\Photos\Library\V1\ListAlbumsResponse;
use Google\Photos\Library\V1\ListMediaItemsResponse;
use Google\Photos\Library\V1\ListSharedAlbumsResponse;
use Google\Photos\Library\V1\NewEnrichmentItem;
use Google\Photos\Library\V1\SearchMediaItemsResponse;
use Google\Photos\Library\V1\ShareAlbumResponse;
use Google\Photos\Library\V1\UnshareAlbumResponse;
use Google\Photos\Types\Album;
use Google\Photos\Types\MediaItem;
use Google\Protobuf\Any;
use Google\Rpc\Code;
use stdClass;

/**
 * @group library
 * @group gapic
 */
class PhotosLibraryClientTest extends GeneratedTest
{
    /**
     * @return TransportInterface
     */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /**
     * @return CredentialsWrapper
     */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return PhotosLibraryClient
     */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];

        return new PhotosLibraryClient($options);
    }

    /**
     * @test
     */
    public function createAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $id = 'id3355';
        $title = 'title110371416';
        $productUrl = 'productUrl-1491291617';
        $isWriteable = true;
        $mediaItemsCount = 927196149;
        $coverPhotoBaseUrl = 'coverPhotoBaseUrl145443830';
        $coverPhotoMediaItemId = 'coverPhotoMediaItemId840621207';
        $expectedResponse = new Album();
        $expectedResponse->setId($id);
        $expectedResponse->setTitle($title);
        $expectedResponse->setProductUrl($productUrl);
        $expectedResponse->setIsWriteable($isWriteable);
        $expectedResponse->setMediaItemsCount($mediaItemsCount);
        $expectedResponse->setCoverPhotoBaseUrl($coverPhotoBaseUrl);
        $expectedResponse->setCoverPhotoMediaItemId($coverPhotoMediaItemId);
        $transport->addResponse($expectedResponse);

        // Mock request
        $album = new Album();

        $response = $client->createAlbum($album);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/CreateAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getAlbum();

        $this->assertProtobufEquals($album, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function createAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $album = new Album();

        try {
            $client->createAlbum($album);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function batchCreateMediaItemsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new BatchCreateMediaItemsResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $newMediaItems = [];

        $response = $client->batchCreateMediaItems($newMediaItems);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/BatchCreateMediaItems', $actualFuncCall);

        $actualValue = $actualRequestObject->getNewMediaItems();

        $this->assertProtobufEquals($newMediaItems, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function batchCreateMediaItemsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $newMediaItems = [];

        try {
            $client->batchCreateMediaItems($newMediaItems);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function batchAddMediaItemsToAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new BatchAddMediaItemsToAlbumResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $albumId = 'albumId1532078315';
        $mediaItemIds = [];

        $response = $client->batchAddMediaItemsToAlbum($albumId, $mediaItemIds);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/BatchAddMediaItemsToAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getAlbumId();

        $this->assertProtobufEquals($albumId, $actualValue);
        $actualValue = $actualRequestObject->getMediaItemIds();

        $this->assertProtobufEquals($mediaItemIds, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function batchAddMediaItemsToAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $albumId = 'albumId1532078315';
        $mediaItemIds = [];

        try {
            $client->batchAddMediaItemsToAlbum($albumId, $mediaItemIds);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function searchMediaItemsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $nextPageToken = '';
        $mediaItemsElement = new MediaItem();
        $mediaItems = [$mediaItemsElement];
        $expectedResponse = new SearchMediaItemsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setMediaItems($mediaItems);
        $transport->addResponse($expectedResponse);

        $response = $client->searchMediaItems();
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getMediaItems()[0], $resources[0]);

        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/SearchMediaItems', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function searchMediaItemsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->searchMediaItems();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listMediaItemsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $nextPageToken = '';
        $mediaItemsElement = new MediaItem();
        $mediaItems = [$mediaItemsElement];
        $expectedResponse = new ListMediaItemsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setMediaItems($mediaItems);
        $transport->addResponse($expectedResponse);

        $response = $client->listMediaItems();
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getMediaItems()[0], $resources[0]);

        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/ListMediaItems', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listMediaItemsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->listMediaItems();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getMediaItemTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $id = 'id3355';
        $description = 'description-1724546052';
        $productUrl = 'productUrl-1491291617';
        $baseUrl = 'baseUrl-1721160959';
        $mimeType = 'mimeType-196041627';
        $filename = 'filename-734768633';
        $expectedResponse = new MediaItem();
        $expectedResponse->setId($id);
        $expectedResponse->setDescription($description);
        $expectedResponse->setProductUrl($productUrl);
        $expectedResponse->setBaseUrl($baseUrl);
        $expectedResponse->setMimeType($mimeType);
        $expectedResponse->setFilename($filename);
        $transport->addResponse($expectedResponse);

        // Mock request
        $mediaItemId = 'mediaItemId720743532';

        $response = $client->getMediaItem($mediaItemId);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/GetMediaItem', $actualFuncCall);

        $actualValue = $actualRequestObject->getMediaItemId();

        $this->assertProtobufEquals($mediaItemId, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getMediaItemExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $mediaItemId = 'mediaItemId720743532';

        try {
            $client->getMediaItem($mediaItemId);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function batchGetMediaItemsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new BatchGetMediaItemsResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $mediaItemIds = [];

        $response = $client->batchGetMediaItems($mediaItemIds);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/BatchGetMediaItems', $actualFuncCall);

        $actualValue = $actualRequestObject->getMediaItemIds();

        $this->assertProtobufEquals($mediaItemIds, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function batchGetMediaItemsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $mediaItemIds = [];

        try {
            $client->batchGetMediaItems($mediaItemIds);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listAlbumsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $nextPageToken = '';
        $albumsElement = new Album();
        $albums = [$albumsElement];
        $expectedResponse = new ListAlbumsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setAlbums($albums);
        $transport->addResponse($expectedResponse);

        $response = $client->listAlbums();
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getAlbums()[0], $resources[0]);

        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/ListAlbums', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listAlbumsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->listAlbums();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $id = 'id3355';
        $title = 'title110371416';
        $productUrl = 'productUrl-1491291617';
        $isWriteable = true;
        $mediaItemsCount = 927196149;
        $coverPhotoBaseUrl = 'coverPhotoBaseUrl145443830';
        $coverPhotoMediaItemId = 'coverPhotoMediaItemId840621207';
        $expectedResponse = new Album();
        $expectedResponse->setId($id);
        $expectedResponse->setTitle($title);
        $expectedResponse->setProductUrl($productUrl);
        $expectedResponse->setIsWriteable($isWriteable);
        $expectedResponse->setMediaItemsCount($mediaItemsCount);
        $expectedResponse->setCoverPhotoBaseUrl($coverPhotoBaseUrl);
        $expectedResponse->setCoverPhotoMediaItemId($coverPhotoMediaItemId);
        $transport->addResponse($expectedResponse);

        // Mock request
        $albumId = 'albumId1532078315';

        $response = $client->getAlbum($albumId);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/GetAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getAlbumId();

        $this->assertProtobufEquals($albumId, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $albumId = 'albumId1532078315';

        try {
            $client->getAlbum($albumId);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getSharedAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $id = 'id3355';
        $title = 'title110371416';
        $productUrl = 'productUrl-1491291617';
        $isWriteable = true;
        $mediaItemsCount = 927196149;
        $coverPhotoBaseUrl = 'coverPhotoBaseUrl145443830';
        $coverPhotoMediaItemId = 'coverPhotoMediaItemId840621207';
        $expectedResponse = new Album();
        $expectedResponse->setId($id);
        $expectedResponse->setTitle($title);
        $expectedResponse->setProductUrl($productUrl);
        $expectedResponse->setIsWriteable($isWriteable);
        $expectedResponse->setMediaItemsCount($mediaItemsCount);
        $expectedResponse->setCoverPhotoBaseUrl($coverPhotoBaseUrl);
        $expectedResponse->setCoverPhotoMediaItemId($coverPhotoMediaItemId);
        $transport->addResponse($expectedResponse);

        // Mock request
        $shareToken = 'shareToken407816601';

        $response = $client->getSharedAlbum($shareToken);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/GetSharedAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getShareToken();

        $this->assertProtobufEquals($shareToken, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getSharedAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $shareToken = 'shareToken407816601';

        try {
            $client->getSharedAlbum($shareToken);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function addEnrichmentToAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new AddEnrichmentToAlbumResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $albumId = 'albumId1532078315';
        $newEnrichmentItem = new NewEnrichmentItem();
        $albumPosition = new AlbumPosition();

        $response = $client->addEnrichmentToAlbum($albumId, $newEnrichmentItem, $albumPosition);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/AddEnrichmentToAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getAlbumId();

        $this->assertProtobufEquals($albumId, $actualValue);
        $actualValue = $actualRequestObject->getNewEnrichmentItem();

        $this->assertProtobufEquals($newEnrichmentItem, $actualValue);
        $actualValue = $actualRequestObject->getAlbumPosition();

        $this->assertProtobufEquals($albumPosition, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function addEnrichmentToAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $albumId = 'albumId1532078315';
        $newEnrichmentItem = new NewEnrichmentItem();
        $albumPosition = new AlbumPosition();

        try {
            $client->addEnrichmentToAlbum($albumId, $newEnrichmentItem, $albumPosition);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function joinSharedAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new JoinSharedAlbumResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $shareToken = 'shareToken407816601';

        $response = $client->joinSharedAlbum($shareToken);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/JoinSharedAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getShareToken();

        $this->assertProtobufEquals($shareToken, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function joinSharedAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $shareToken = 'shareToken407816601';

        try {
            $client->joinSharedAlbum($shareToken);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function leaveSharedAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new LeaveSharedAlbumResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $shareToken = 'shareToken407816601';

        $response = $client->leaveSharedAlbum($shareToken);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/LeaveSharedAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getShareToken();

        $this->assertProtobufEquals($shareToken, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function leaveSharedAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $shareToken = 'shareToken407816601';

        try {
            $client->leaveSharedAlbum($shareToken);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function shareAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new ShareAlbumResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $albumId = 'albumId1532078315';

        $response = $client->shareAlbum($albumId);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/ShareAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getAlbumId();

        $this->assertProtobufEquals($albumId, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function shareAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $albumId = 'albumId1532078315';

        try {
            $client->shareAlbum($albumId);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listSharedAlbumsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $nextPageToken = '';
        $sharedAlbumsElement = new Album();
        $sharedAlbums = [$sharedAlbumsElement];
        $expectedResponse = new ListSharedAlbumsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSharedAlbums($sharedAlbums);
        $transport->addResponse($expectedResponse);

        $response = $client->listSharedAlbums();
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getSharedAlbums()[0], $resources[0]);

        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/ListSharedAlbums', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listSharedAlbumsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->listSharedAlbums();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function unshareAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new UnshareAlbumResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $albumId = 'albumId1532078315';

        $response = $client->unshareAlbum($albumId);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/UnshareAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getAlbumId();

        $this->assertProtobufEquals($albumId, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function unshareAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $albumId = 'albumId1532078315';

        try {
            $client->unshareAlbum($albumId);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function batchRemoveMediaItemsFromAlbumTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new BatchRemoveMediaItemsFromAlbumResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $albumId = 'albumId1532078315';
        $mediaItemIds = [];

        $response = $client->batchRemoveMediaItemsFromAlbum($albumId, $mediaItemIds);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.photos.library.v1.PhotosLibrary/BatchRemoveMediaItemsFromAlbum', $actualFuncCall);

        $actualValue = $actualRequestObject->getAlbumId();

        $this->assertProtobufEquals($albumId, $actualValue);
        $actualValue = $actualRequestObject->getMediaItemIds();

        $this->assertProtobufEquals($mediaItemIds, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function batchRemoveMediaItemsFromAlbumExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $albumId = 'albumId1532078315';
        $mediaItemIds = [];

        try {
            $client->batchRemoveMediaItemsFromAlbum($albumId, $mediaItemIds);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }
}
