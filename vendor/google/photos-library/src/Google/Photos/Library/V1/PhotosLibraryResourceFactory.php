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

namespace Google\Photos\Library\V1;

use Google\Photos\Library\V1\AlbumPosition\PositionType;
use Google\Photos\Types\Album;

class PhotosLibraryResourceFactory
{
    /**
     * Returns an {@link Album} with the title set to the given string.
     *
     * @param string $title
     * @return Album
     */
    public static function album($title)
    {
        $album = new Album();
        $album->setTitle($title);
        return $album;
    }

    /**
     * Returns a {@link NewMediaItem} containing a {@link SimpleMediaItem} with the given upload
     * token.
     *
     * @param string $uploadToken
     * @return NewMediaItem
     */
    public static function newMediaItem($uploadToken)
    {
        $simpleMediaItem = new SimpleMediaItem();
        $simpleMediaItem->setUploadToken($uploadToken);

        $newMediaItem = new NewMediaItem();
        $newMediaItem->setSimpleMediaItem($simpleMediaItem);

        return $newMediaItem;
    }

    /**
     * Returns a {@link NewMediaItem} with the given description and a {@link SimpleMediaItem} with
     * the given upload token.
     *
     * @param string $uploadToken
     * @param string $description
     * @return NewMediaItem
     */
    public static function newMediaItemWithDescription($uploadToken, $description)
    {
        $newMediaItem = self::newMediaItem($uploadToken);
        $newMediaItem->setDescription($description);
        return $newMediaItem;
    }

    /**
     * Returns an {@link AlbumPosition} describing the position after the given media item.
     *
     * @param string $mediaItemId
     * @return AlbumPosition
     */
    public static function albumPositionAfterMediaItem($mediaItemId)
    {
        $albumPosition = new AlbumPosition();
        $albumPosition->setPosition(PositionType::AFTER_MEDIA_ITEM);
        $albumPosition->setRelativeMediaItemId($mediaItemId);

        return $albumPosition;
    }

    /**
     * Returns an {@link AlbumPosition} describing the position after the given enrichment item.
     *
     * @param string $enrichmentItemId
     * @return AlbumPosition
     */
    public static function albumPositionAfterEnrichmentItem($enrichmentItemId)
    {
        $albumPosition = new AlbumPosition();
        $albumPosition->setPosition(PositionType::AFTER_ENRICHMENT_ITEM);
        $albumPosition->setRelativeEnrichmentItemId($enrichmentItemId);

        return $albumPosition;
    }

    /**
     * Returns a {@link NewEnrichmentItem} containing a {@link TextEnrichment} with the provided
     * text.
     *
     * @param string $text
     * @return NewEnrichmentItem
     */
    public static function newEnrichmentItemWithText($text)
    {
        $textEnrichment = new TextEnrichment();
        $textEnrichment->setText($text);

        $newEnrichmentItem = new NewEnrichmentItem();
        $newEnrichmentItem->setTextEnrichment($textEnrichment);

        return $newEnrichmentItem;
    }

    /**
     * Returns a {@link NewEnrichmentItem} containing a {@link LocationEnrichment} with the given
     * location.
     *
     * @param Location $location
     * @return NewEnrichmentItem
     */
    public static function newEnrichmentItemWithLocation(Location $location)
    {
        $locationEnrichment = new LocationEnrichment();
        $locationEnrichment->setLocation($location);

        $newEnrichmentItem = new NewEnrichmentItem();
        $newEnrichmentItem->setLocationEnrichment($locationEnrichment);

        return $newEnrichmentItem;
    }

    /**
     * Returns {@link NewEnrichmentItem} containing a {@link MapEnrichment} with the given origin
     * and destination.
     *
     * @param Location $origin
     * @param Location $destination
     * @return NewEnrichmentItem
     */
    public static function newEnrichmentItemWithMap(Location $origin, Location $destination)
    {
        $mapEnrichment = new MapEnrichment();
        $mapEnrichment->setOrigin($origin);
        $mapEnrichment->setDestination($destination);

        $newEnrichmentItem = new NewEnrichmentItem();
        $newEnrichmentItem->setMapEnrichment($mapEnrichment);

        return $newEnrichmentItem;
    }
}
