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
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/photos/library/v1/photos_library.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Photos\Library\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Photos\Library\V1\AddEnrichmentToAlbumRequest;
use Google\Photos\Library\V1\AddEnrichmentToAlbumResponse;
use Google\Photos\Library\V1\AlbumPosition;
use Google\Photos\Library\V1\BatchAddMediaItemsToAlbumRequest;
use Google\Photos\Library\V1\BatchAddMediaItemsToAlbumResponse;
use Google\Photos\Library\V1\BatchCreateMediaItemsRequest;
use Google\Photos\Library\V1\BatchCreateMediaItemsResponse;
use Google\Photos\Library\V1\BatchGetMediaItemsRequest;
use Google\Photos\Library\V1\BatchGetMediaItemsResponse;
use Google\Photos\Library\V1\BatchRemoveMediaItemsFromAlbumRequest;
use Google\Photos\Library\V1\BatchRemoveMediaItemsFromAlbumResponse;
use Google\Photos\Library\V1\CreateAlbumRequest;
use Google\Photos\Library\V1\Filters;
use Google\Photos\Library\V1\GetAlbumRequest;
use Google\Photos\Library\V1\GetMediaItemRequest;
use Google\Photos\Library\V1\GetSharedAlbumRequest;
use Google\Photos\Library\V1\JoinSharedAlbumRequest;
use Google\Photos\Library\V1\JoinSharedAlbumResponse;
use Google\Photos\Library\V1\LeaveSharedAlbumRequest;
use Google\Photos\Library\V1\LeaveSharedAlbumResponse;
use Google\Photos\Library\V1\ListAlbumsRequest;
use Google\Photos\Library\V1\ListAlbumsResponse;
use Google\Photos\Library\V1\ListMediaItemsRequest;
use Google\Photos\Library\V1\ListMediaItemsResponse;
use Google\Photos\Library\V1\ListSharedAlbumsRequest;
use Google\Photos\Library\V1\ListSharedAlbumsResponse;
use Google\Photos\Library\V1\NewEnrichmentItem;
use Google\Photos\Library\V1\NewMediaItem;
use Google\Photos\Library\V1\SearchMediaItemsRequest;
use Google\Photos\Library\V1\SearchMediaItemsResponse;
use Google\Photos\Library\V1\ShareAlbumRequest;
use Google\Photos\Library\V1\ShareAlbumResponse;
use Google\Photos\Library\V1\UnshareAlbumRequest;
use Google\Photos\Library\V1\UnshareAlbumResponse;
use Google\Photos\Types\Album;
use Google\Photos\Types\MediaItem;
use Google\Photos\Types\SharedAlbumOptions;

/**
 * Service Description: Service which allows developers to perform the following actions on behalf of
 * the user:
 * - upload media items directly to their Google Photos library
 * - create albums
 * - add media items (including album enrichments) to albums
 * - list and download content from their Google Photos library
 * - filter results by media type, date range or content category
 * - create, join, and access shared albums.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $photosLibraryClient = new PhotosLibraryClient();
 * try {
 *     $album = new Album();
 *     $response = $photosLibraryClient->createAlbum($album);
 * } finally {
 *     $photosLibraryClient->close();
 * }
 * ```
 *
 * @experimental
 */
class PhotosLibraryGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.photos.library.v1.PhotosLibrary';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'photoslibrary.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/photoslibrary',
        'https://www.googleapis.com/auth/photoslibrary.appendonly',
        'https://www.googleapis.com/auth/photoslibrary.readonly',
        'https://www.googleapis.com/auth/photoslibrary.readonly.appcreateddata',
        'https://www.googleapis.com/auth/photoslibrary.sharing',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/photos_library_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/photos_library_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/photos_library_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/photos_library_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'photoslibrary.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any $serviceAddress
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates an album in a user's Google Photos library.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $album = new Album();
     *     $response = $photosLibraryClient->createAlbum($album);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param Album $album        The album to be created.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Types\Album
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createAlbum($album, array $optionalArgs = [])
    {
        $request = new CreateAlbumRequest();
        $request->setAlbum($album);

        return $this->startCall(
            'CreateAlbum',
            Album::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates one or more media items in a user's Google Photos library.
     *
     * This is the second step for creating a media item. For details regarding
     * Step 1, uploading the raw bytes to a Google Server, see
     * <a href="/photos/library/guides/upload-media">Uploading media</a>.
     *
     * This call adds the media item to the library. If an album `id` is
     * specified, the call adds the media item to the album too. Each album can
     * contain up to 20,000 media items. By default, the media item will be added
     * to the end of the library or album.
     *
     * If an album `id` and position are both defined, the media item is
     * added to the album at the specified position.
     *
     * If the call contains multiple media items, they're added at the specified
     * position.
     * If you are creating a media item in a shared album where you are not the
     * owner, you are not allowed to position the media item. Doing so will result
     * in a `BAD REQUEST` error.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $newMediaItems = [];
     *     $response = $photosLibraryClient->batchCreateMediaItems($newMediaItems);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param NewMediaItem[] $newMediaItems List of media items to be created.
     * @param array          $optionalArgs  {
     *                                      Optional.
     *
     *     @type string $albumId
     *          Identifier of the album where the media items are added. The media items
     *          are also added to the user's library. This is an optional field.
     *     @type AlbumPosition $albumPosition
     *          Position in the album where the media items are added. If not
     *          specified, the media items are added to the end of the album (as per
     *          the default value, that is, `LAST_IN_ALBUM`). The request fails if this
     *          field is set and the `albumId` is not specified. The request will also fail
     *          if you set the field and are not the owner of the shared album.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\BatchCreateMediaItemsResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchCreateMediaItems($newMediaItems, array $optionalArgs = [])
    {
        $request = new BatchCreateMediaItemsRequest();
        $request->setNewMediaItems($newMediaItems);
        if (isset($optionalArgs['albumId'])) {
            $request->setAlbumId($optionalArgs['albumId']);
        }
        if (isset($optionalArgs['albumPosition'])) {
            $request->setAlbumPosition($optionalArgs['albumPosition']);
        }

        return $this->startCall(
            'BatchCreateMediaItems',
            BatchCreateMediaItemsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Adds one or more media items in a user's Google Photos library to
     * an album. The media items and albums must have been created by the
     * developer via the API.
     *
     * Media items are added to the end of the album. If multiple media items are
     * given, they are added in the order specified in this call.
     *
     * Each album can contain up to 20,000 media items.
     *
     * Only media items that are in the user's library can be added to an
     * album. For albums that are shared, the album must either be owned by the
     * user or the user must have joined the album as a collaborator.
     *
     * Partial success is not supported. The entire request will fail if an
     * invalid media item or album is specified.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $albumId = '';
     *     $mediaItemIds = [];
     *     $response = $photosLibraryClient->batchAddMediaItemsToAlbum($albumId, $mediaItemIds);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string   $albumId      Identifier of the [Album][google.photos.types.Album] that the
     *                               media items are added to.
     * @param string[] $mediaItemIds Identifiers of the [MediaItem][google.photos.types.MediaItem]s to be
     *                               added.
     *                               The maximum number of media items that can be added in one call is 50.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\BatchAddMediaItemsToAlbumResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchAddMediaItemsToAlbum($albumId, $mediaItemIds, array $optionalArgs = [])
    {
        $request = new BatchAddMediaItemsToAlbumRequest();
        $request->setAlbumId($albumId);
        $request->setMediaItemIds($mediaItemIds);

        $requestParams = new RequestParamsHeaderDescriptor([
          'album_id' => $request->getAlbumId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'BatchAddMediaItemsToAlbum',
            BatchAddMediaItemsToAlbumResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Searches for media items in a user's Google Photos library.
     * If no filters are set, then all media items in the user's library are
     * returned.
     * If an album is set, all media items in the specified album are returned.
     * If filters are specified, media items that match the filters from the
     * user's library are listed. If you set both the album and the filters, the
     * request results in an error.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $photosLibraryClient->searchMediaItems();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $photosLibraryClient->searchMediaItems();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $albumId
     *          Identifier of an album. If populated, lists all media items in
     *          specified album. Can't set in conjunction with any filters.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type Filters $filters
     *          Filters to apply to the request. Can't be set in conjunction with an
     *          `albumId`.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function searchMediaItems(array $optionalArgs = [])
    {
        $request = new SearchMediaItemsRequest();
        if (isset($optionalArgs['albumId'])) {
            $request->setAlbumId($optionalArgs['albumId']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['filters'])) {
            $request->setFilters($optionalArgs['filters']);
        }

        return $this->getPagedListResponse(
            'SearchMediaItems',
            $optionalArgs,
            SearchMediaItemsResponse::class,
            $request
        );
    }

    /**
     * List all media items from a user's Google Photos library.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $photosLibraryClient->listMediaItems();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $photosLibraryClient->listMediaItems();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listMediaItems(array $optionalArgs = [])
    {
        $request = new ListMediaItemsRequest();
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        return $this->getPagedListResponse(
            'ListMediaItems',
            $optionalArgs,
            ListMediaItemsResponse::class,
            $request
        );
    }

    /**
     * Returns the media item for the specified media item identifier.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $mediaItemId = '';
     *     $response = $photosLibraryClient->getMediaItem($mediaItemId);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string $mediaItemId  Identifier of the media item to be requested.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Types\MediaItem
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getMediaItem($mediaItemId, array $optionalArgs = [])
    {
        $request = new GetMediaItemRequest();
        $request->setMediaItemId($mediaItemId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'media_item_id' => $request->getMediaItemId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetMediaItem',
            MediaItem::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns the list of media items for the specified media item identifiers.
     * Items are returned in the same order as the supplied identifiers.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $mediaItemIds = [];
     *     $response = $photosLibraryClient->batchGetMediaItems($mediaItemIds);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string[] $mediaItemIds Identifiers of the media items to be requested.
     *                               Must not contain repeated identifiers and cannot be empty. The maximum
     *                               number of media items that can be retrieved in one call is 50.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\BatchGetMediaItemsResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchGetMediaItems($mediaItemIds, array $optionalArgs = [])
    {
        $request = new BatchGetMediaItemsRequest();
        $request->setMediaItemIds($mediaItemIds);

        return $this->startCall(
            'BatchGetMediaItems',
            BatchGetMediaItemsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all albums shown to a user in the Albums tab of the Google
     * Photos app.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $photosLibraryClient->listAlbums();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $photosLibraryClient->listAlbums();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type bool $excludeNonAppCreatedData
     *          If set, the results exclude media items that were not created by this app.
     *          Defaults to false (all albums are returned). This field is ignored if the
     *          photoslibrary.readonly.appcreateddata scope is used.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listAlbums(array $optionalArgs = [])
    {
        $request = new ListAlbumsRequest();
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['excludeNonAppCreatedData'])) {
            $request->setExcludeNonAppCreatedData($optionalArgs['excludeNonAppCreatedData']);
        }

        return $this->getPagedListResponse(
            'ListAlbums',
            $optionalArgs,
            ListAlbumsResponse::class,
            $request
        );
    }

    /**
     * Returns the album based on the specified `albumId`.
     * The `albumId` must be the ID of an album owned by the user or a shared
     * album that the user has joined.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $albumId = '';
     *     $response = $photosLibraryClient->getAlbum($albumId);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string $albumId      Identifier of the album to be requested.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Types\Album
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getAlbum($albumId, array $optionalArgs = [])
    {
        $request = new GetAlbumRequest();
        $request->setAlbumId($albumId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'album_id' => $request->getAlbumId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetAlbum',
            Album::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns the album based on the specified `shareToken`.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $shareToken = '';
     *     $response = $photosLibraryClient->getSharedAlbum($shareToken);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string $shareToken   Share token of the album to be requested.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Types\Album
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getSharedAlbum($shareToken, array $optionalArgs = [])
    {
        $request = new GetSharedAlbumRequest();
        $request->setShareToken($shareToken);

        $requestParams = new RequestParamsHeaderDescriptor([
          'share_token' => $request->getShareToken(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetSharedAlbum',
            Album::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Adds an enrichment at a specified position in a defined album.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $albumId = '';
     *     $newEnrichmentItem = new NewEnrichmentItem();
     *     $albumPosition = new AlbumPosition();
     *     $response = $photosLibraryClient->addEnrichmentToAlbum($albumId, $newEnrichmentItem, $albumPosition);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string            $albumId           Identifier of the album where the enrichment is to be added.
     * @param NewEnrichmentItem $newEnrichmentItem The enrichment to be added.
     * @param AlbumPosition     $albumPosition     The position in the album where the enrichment is to be inserted.
     * @param array             $optionalArgs      {
     *                                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\AddEnrichmentToAlbumResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function addEnrichmentToAlbum($albumId, $newEnrichmentItem, $albumPosition, array $optionalArgs = [])
    {
        $request = new AddEnrichmentToAlbumRequest();
        $request->setAlbumId($albumId);
        $request->setNewEnrichmentItem($newEnrichmentItem);
        $request->setAlbumPosition($albumPosition);

        $requestParams = new RequestParamsHeaderDescriptor([
          'album_id' => $request->getAlbumId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'AddEnrichmentToAlbum',
            AddEnrichmentToAlbumResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Joins a shared album on behalf of the Google Photos user.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $shareToken = '';
     *     $response = $photosLibraryClient->joinSharedAlbum($shareToken);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string $shareToken   Token to join the shared album on behalf of the user.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\JoinSharedAlbumResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function joinSharedAlbum($shareToken, array $optionalArgs = [])
    {
        $request = new JoinSharedAlbumRequest();
        $request->setShareToken($shareToken);

        return $this->startCall(
            'JoinSharedAlbum',
            JoinSharedAlbumResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Leaves a previously-joined shared album on behalf of the Google Photos
     * user. The user must not own this album.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $shareToken = '';
     *     $response = $photosLibraryClient->leaveSharedAlbum($shareToken);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string $shareToken   Token to leave the shared album on behalf of the user.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\LeaveSharedAlbumResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function leaveSharedAlbum($shareToken, array $optionalArgs = [])
    {
        $request = new LeaveSharedAlbumRequest();
        $request->setShareToken($shareToken);

        return $this->startCall(
            'LeaveSharedAlbum',
            LeaveSharedAlbumResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Marks an album as shared and accessible to other users. This action can
     * only be performed on albums which were created by the developer via the
     * API.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $albumId = '';
     *     $response = $photosLibraryClient->shareAlbum($albumId);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string $albumId      Identifier of the album to be shared. This `albumId` must belong to an
     *                             album created by the developer.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type SharedAlbumOptions $sharedAlbumOptions
     *          Options to be set when converting the album to a shared album.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\ShareAlbumResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function shareAlbum($albumId, array $optionalArgs = [])
    {
        $request = new ShareAlbumRequest();
        $request->setAlbumId($albumId);
        if (isset($optionalArgs['sharedAlbumOptions'])) {
            $request->setSharedAlbumOptions($optionalArgs['sharedAlbumOptions']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'album_id' => $request->getAlbumId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ShareAlbum',
            ShareAlbumResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all shared albums available in the Sharing tab of the
     * user's Google Photos app.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $photosLibraryClient->listSharedAlbums();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $photosLibraryClient->listSharedAlbums();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type bool $excludeNonAppCreatedData
     *          If set, the results exclude media items that were not created by this app.
     *          Defaults to false (all albums are returned). This field is ignored if the
     *          photoslibrary.readonly.appcreateddata scope is used.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listSharedAlbums(array $optionalArgs = [])
    {
        $request = new ListSharedAlbumsRequest();
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['excludeNonAppCreatedData'])) {
            $request->setExcludeNonAppCreatedData($optionalArgs['excludeNonAppCreatedData']);
        }

        return $this->getPagedListResponse(
            'ListSharedAlbums',
            $optionalArgs,
            ListSharedAlbumsResponse::class,
            $request
        );
    }

    /**
     * Marks a previously shared album as private. This means that the album is
     * no longer shared and all the non-owners will lose access to the album. All
     * non-owner content will be removed from the album. If a non-owner has
     * previously added the album to their library, they will retain all photos in
     * their library. This action can only be performed on albums which were
     * created by the developer via the API.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $albumId = '';
     *     $response = $photosLibraryClient->unshareAlbum($albumId);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string $albumId      Identifier of the album to be unshared. This album id must belong to an
     *                             album created by the developer.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\UnshareAlbumResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function unshareAlbum($albumId, array $optionalArgs = [])
    {
        $request = new UnshareAlbumRequest();
        $request->setAlbumId($albumId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'album_id' => $request->getAlbumId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UnshareAlbum',
            UnshareAlbumResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Removes one or more media items from a specified album. The media items and
     * the album must have been created by the developer via the API.
     *
     * For albums that are shared, this action is only supported for media items
     * that were added to the album by this user, or for all media items if the
     * album was created by this user.
     *
     * Partial success is not supported. The entire request will fail and no
     * action will be performed on the album if an invalid media item or album is
     * specified.
     *
     * Sample code:
     * ```
     * $photosLibraryClient = new PhotosLibraryClient();
     * try {
     *     $albumId = '';
     *     $mediaItemIds = [];
     *     $response = $photosLibraryClient->batchRemoveMediaItemsFromAlbum($albumId, $mediaItemIds);
     * } finally {
     *     $photosLibraryClient->close();
     * }
     * ```
     *
     * @param string   $albumId      Identifier of the [Album][google.photos.types.Album] that the media
     *                               items are to be removed from.
     * @param string[] $mediaItemIds Identifiers of the [MediaItem][google.photos.types.MediaItem]s to be
     *                               removed.
     *
     * Must not contain repeated identifiers and cannot be empty. The maximum
     * number of media items that can be removed in one call is 50.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Photos\Library\V1\BatchRemoveMediaItemsFromAlbumResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchRemoveMediaItemsFromAlbum($albumId, $mediaItemIds, array $optionalArgs = [])
    {
        $request = new BatchRemoveMediaItemsFromAlbumRequest();
        $request->setAlbumId($albumId);
        $request->setMediaItemIds($mediaItemIds);

        $requestParams = new RequestParamsHeaderDescriptor([
          'album_id' => $request->getAlbumId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'BatchRemoveMediaItemsFromAlbum',
            BatchRemoveMediaItemsFromAlbumResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
