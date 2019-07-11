<?php

return [
    'interfaces' => [
        'google.photos.library.v1.PhotosLibrary' => [
            'CreateAlbum' => [
                'method' => 'post',
                'uriTemplate' => '/v1/albums',
                'body' => '*',
            ],
            'BatchCreateMediaItems' => [
                'method' => 'post',
                'uriTemplate' => '/v1/mediaItems:batchCreate',
                'body' => '*',
            ],
            'BatchAddMediaItemsToAlbum' => [
                'method' => 'post',
                'uriTemplate' => '/v1/albums/{album_id=*}:batchAddMediaItems',
                'body' => '*',
                'placeholders' => [
                    'album_id' => [
                        'getters' => [
                            'getAlbumId',
                        ],
                    ],
                ],
            ],
            'SearchMediaItems' => [
                'method' => 'post',
                'uriTemplate' => '/v1/mediaItems:search',
                'body' => '*',
            ],
            'ListMediaItems' => [
                'method' => 'get',
                'uriTemplate' => '/v1/mediaItems',
            ],
            'GetMediaItem' => [
                'method' => 'get',
                'uriTemplate' => '/v1/mediaItems/{media_item_id=*}',
                'placeholders' => [
                    'media_item_id' => [
                        'getters' => [
                            'getMediaItemId',
                        ],
                    ],
                ],
            ],
            'BatchGetMediaItems' => [
                'method' => 'get',
                'uriTemplate' => '/v1/mediaItems:batchGet',
            ],
            'ListAlbums' => [
                'method' => 'get',
                'uriTemplate' => '/v1/albums',
            ],
            'GetAlbum' => [
                'method' => 'get',
                'uriTemplate' => '/v1/albums/{album_id=*}',
                'placeholders' => [
                    'album_id' => [
                        'getters' => [
                            'getAlbumId',
                        ],
                    ],
                ],
            ],
            'GetSharedAlbum' => [
                'method' => 'get',
                'uriTemplate' => '/v1/sharedAlbums/{share_token=*}',
                'placeholders' => [
                    'share_token' => [
                        'getters' => [
                            'getShareToken',
                        ],
                    ],
                ],
            ],
            'AddEnrichmentToAlbum' => [
                'method' => 'post',
                'uriTemplate' => '/v1/albums/{album_id=*}:addEnrichment',
                'body' => '*',
                'placeholders' => [
                    'album_id' => [
                        'getters' => [
                            'getAlbumId',
                        ],
                    ],
                ],
            ],
            'JoinSharedAlbum' => [
                'method' => 'post',
                'uriTemplate' => '/v1/sharedAlbums:join',
                'body' => '*',
            ],
            'LeaveSharedAlbum' => [
                'method' => 'post',
                'uriTemplate' => '/v1/sharedAlbums:leave',
                'body' => '*',
            ],
            'ShareAlbum' => [
                'method' => 'post',
                'uriTemplate' => '/v1/albums/{album_id=*}:share',
                'body' => '*',
                'placeholders' => [
                    'album_id' => [
                        'getters' => [
                            'getAlbumId',
                        ],
                    ],
                ],
            ],
            'ListSharedAlbums' => [
                'method' => 'get',
                'uriTemplate' => '/v1/sharedAlbums',
            ],
            'UnshareAlbum' => [
                'method' => 'post',
                'uriTemplate' => '/v1/albums/{album_id=*}:unshare',
                'body' => '*',
                'placeholders' => [
                    'album_id' => [
                        'getters' => [
                            'getAlbumId',
                        ],
                    ],
                ],
            ],
            'BatchRemoveMediaItemsFromAlbum' => [
                'method' => 'post',
                'uriTemplate' => '/v1/albums/{album_id=*}:batchRemoveMediaItems',
                'body' => '*',
                'placeholders' => [
                    'album_id' => [
                        'getters' => [
                            'getAlbumId',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
