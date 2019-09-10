<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2019 Google LLC.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
//
namespace Google\Photos\Library\V1;

/**
 * Service which allows developers to perform the following actions on behalf of
 * the user:
 * - upload media items directly to their Google Photos library
 * - create albums
 * - add media items (including album enrichments) to albums
 * - list and download content from their Google Photos library
 * - filter results by media type, date range or content category
 * - create, join, and access shared albums
 */
class PhotosLibraryGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates an album in a user's Google Photos library.
     * @param \Google\Photos\Library\V1\CreateAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateAlbum(\Google\Photos\Library\V1\CreateAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/CreateAlbum',
        $argument,
        ['\Google\Photos\Types\Album', 'decode'],
        $metadata, $options);
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
     * @param \Google\Photos\Library\V1\BatchCreateMediaItemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchCreateMediaItems(\Google\Photos\Library\V1\BatchCreateMediaItemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/BatchCreateMediaItems',
        $argument,
        ['\Google\Photos\Library\V1\BatchCreateMediaItemsResponse', 'decode'],
        $metadata, $options);
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
     * @param \Google\Photos\Library\V1\BatchAddMediaItemsToAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchAddMediaItemsToAlbum(\Google\Photos\Library\V1\BatchAddMediaItemsToAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/BatchAddMediaItemsToAlbum',
        $argument,
        ['\Google\Photos\Library\V1\BatchAddMediaItemsToAlbumResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Searches for media items in a user's Google Photos library.
     * If no filters are set, then all media items in the user's library are
     * returned.
     * If an album is set, all media items in the specified album are returned.
     * If filters are specified, media items that match the filters from the
     * user's library are listed. If you set both the album and the filters, the
     * request results in an error.
     * @param \Google\Photos\Library\V1\SearchMediaItemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchMediaItems(\Google\Photos\Library\V1\SearchMediaItemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/SearchMediaItems',
        $argument,
        ['\Google\Photos\Library\V1\SearchMediaItemsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all media items from a user's Google Photos library.
     * @param \Google\Photos\Library\V1\ListMediaItemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListMediaItems(\Google\Photos\Library\V1\ListMediaItemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/ListMediaItems',
        $argument,
        ['\Google\Photos\Library\V1\ListMediaItemsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the media item for the specified media item identifier.
     * @param \Google\Photos\Library\V1\GetMediaItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMediaItem(\Google\Photos\Library\V1\GetMediaItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/GetMediaItem',
        $argument,
        ['\Google\Photos\Types\MediaItem', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the list of media items for the specified media item identifiers.
     * Items are returned in the same order as the supplied identifiers.
     * @param \Google\Photos\Library\V1\BatchGetMediaItemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchGetMediaItems(\Google\Photos\Library\V1\BatchGetMediaItemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/BatchGetMediaItems',
        $argument,
        ['\Google\Photos\Library\V1\BatchGetMediaItemsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all albums shown to a user in the Albums tab of the Google
     * Photos app.
     * @param \Google\Photos\Library\V1\ListAlbumsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAlbums(\Google\Photos\Library\V1\ListAlbumsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/ListAlbums',
        $argument,
        ['\Google\Photos\Library\V1\ListAlbumsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the album based on the specified `albumId`.
     * The `albumId` must be the ID of an album owned by the user or a shared
     * album that the user has joined.
     * @param \Google\Photos\Library\V1\GetAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAlbum(\Google\Photos\Library\V1\GetAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/GetAlbum',
        $argument,
        ['\Google\Photos\Types\Album', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the album based on the specified `shareToken`.
     * @param \Google\Photos\Library\V1\GetSharedAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSharedAlbum(\Google\Photos\Library\V1\GetSharedAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/GetSharedAlbum',
        $argument,
        ['\Google\Photos\Types\Album', 'decode'],
        $metadata, $options);
    }

    /**
     * Adds an enrichment at a specified position in a defined album.
     * @param \Google\Photos\Library\V1\AddEnrichmentToAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddEnrichmentToAlbum(\Google\Photos\Library\V1\AddEnrichmentToAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/AddEnrichmentToAlbum',
        $argument,
        ['\Google\Photos\Library\V1\AddEnrichmentToAlbumResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Joins a shared album on behalf of the Google Photos user.
     * @param \Google\Photos\Library\V1\JoinSharedAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function JoinSharedAlbum(\Google\Photos\Library\V1\JoinSharedAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/JoinSharedAlbum',
        $argument,
        ['\Google\Photos\Library\V1\JoinSharedAlbumResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Leaves a previously-joined shared album on behalf of the Google Photos
     * user. The user must not own this album.
     * @param \Google\Photos\Library\V1\LeaveSharedAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LeaveSharedAlbum(\Google\Photos\Library\V1\LeaveSharedAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/LeaveSharedAlbum',
        $argument,
        ['\Google\Photos\Library\V1\LeaveSharedAlbumResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Marks an album as shared and accessible to other users. This action can
     * only be performed on albums which were created by the developer via the
     * API.
     * @param \Google\Photos\Library\V1\ShareAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ShareAlbum(\Google\Photos\Library\V1\ShareAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/ShareAlbum',
        $argument,
        ['\Google\Photos\Library\V1\ShareAlbumResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all shared albums available in the Sharing tab of the
     * user's Google Photos app.
     * @param \Google\Photos\Library\V1\ListSharedAlbumsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListSharedAlbums(\Google\Photos\Library\V1\ListSharedAlbumsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/ListSharedAlbums',
        $argument,
        ['\Google\Photos\Library\V1\ListSharedAlbumsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Marks a previously shared album as private. This means that the album is
     * no longer shared and all the non-owners will lose access to the album. All
     * non-owner content will be removed from the album. If a non-owner has
     * previously added the album to their library, they will retain all photos in
     * their library. This action can only be performed on albums which were
     * created by the developer via the API.
     * @param \Google\Photos\Library\V1\UnshareAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UnshareAlbum(\Google\Photos\Library\V1\UnshareAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/UnshareAlbum',
        $argument,
        ['\Google\Photos\Library\V1\UnshareAlbumResponse', 'decode'],
        $metadata, $options);
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
     * @param \Google\Photos\Library\V1\BatchRemoveMediaItemsFromAlbumRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchRemoveMediaItemsFromAlbum(\Google\Photos\Library\V1\BatchRemoveMediaItemsFromAlbumRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.photos.library.v1.PhotosLibrary/BatchRemoveMediaItemsFromAlbum',
        $argument,
        ['\Google\Photos\Library\V1\BatchRemoveMediaItemsFromAlbumResponse', 'decode'],
        $metadata, $options);
    }

}
