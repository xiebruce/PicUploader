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

use Google\ApiCore\Testing\GeneratedTest;
use Google\Photos\Types\Album;
use Google\Photos\Library\V1\AlbumPosition;
use Google\Photos\Library\V1\AlbumPosition\PositionType;
use Google\Photos\Library\V1\Location;
use Google\Photos\Library\V1\LocationEnrichment;
use Google\Photos\Library\V1\MapEnrichment;
use Google\Photos\Library\V1\NewEnrichmentItem;
use Google\Photos\Library\V1\NewMediaItem;
use Google\Photos\Library\V1\PhotosLibraryResourceFactory;
use Google\Photos\Library\V1\SimpleMediaItem;
use Google\Photos\Library\V1\TextEnrichment;
use Google\Type\LatLng;

class PhotosLibraryResourceFactoryTest extends GeneratedTest
{
    public function testAlbum()
    {
        $expectedAlbum = new Album();
        $expectedAlbum->setTitle("a title");

        $actualAlbum = PhotosLibraryResourceFactory::album("a title");

        $this->assertProtobufEquals(
            $expectedAlbum,
            $actualAlbum
        );
    }

    public function testNewMediaItem()
    {
        $expectedSimpleMediaItem = new SimpleMediaItem();
        $expectedSimpleMediaItem->setUploadToken("upload token");

        $expectedNewMediaItem = new NewMediaItem();
        $expectedNewMediaItem->setSimpleMediaItem($expectedSimpleMediaItem);

        $actualNewMediaItem = PhotosLibraryResourceFactory::newMediaItem("upload token");
        $this->assertProtobufEquals(
            $expectedNewMediaItem,
            $actualNewMediaItem
        );
    }

    public function testNewMediaItemWithDescription()
    {
        $expectedSimpleMediaItem = new SimpleMediaItem();
        $expectedSimpleMediaItem->setUploadToken("upload token");

        $expectedNewMediaItem = new NewMediaItem();
        $expectedNewMediaItem->setSimpleMediaItem($expectedSimpleMediaItem);
        $expectedNewMediaItem->setDescription("this is a photo of a thing");

        $actualNewMediaItem = PhotosLibraryResourceFactory::newMediaItemWithDescription(
            "upload token",
            "this is a photo of a thing"
        );

        $this->assertProtobufEquals(
            $expectedNewMediaItem,
            $actualNewMediaItem
        );
    }

    public function testAlbumPositionAfterMediaItem()
    {
        $expectedAlbumPosition = new AlbumPosition();
        $expectedAlbumPosition->setPosition(PositionType::AFTER_MEDIA_ITEM);
        $expectedAlbumPosition->setRelativeMediaItemId("a media item");

        $actualAlbumPosition = PhotosLibraryResourceFactory::albumPositionAfterMediaItem("a media item");

        $this->assertProtobufEquals($expectedAlbumPosition, $actualAlbumPosition);
    }

    public function testAlbumPositionAfterEnrichmentItem()
    {
        $expectedAlbumPosition = new AlbumPosition();
        $expectedAlbumPosition->setPosition(PositionType::AFTER_ENRICHMENT_ITEM);
        $expectedAlbumPosition->setRelativeEnrichmentItemId("an enrichment item");

        $actualAlbumPosition = PhotosLibraryResourceFactory::albumPositionAfterEnrichmentItem(
            "an enrichment item"
        );

        $this->assertProtobufEquals(
            $expectedAlbumPosition,
            $actualAlbumPosition
        );
    }

    public function testNewEnrichmentItemWithText()
    {
        $expectedTextEnrichment = new TextEnrichment();
        $expectedTextEnrichment->setText("a text enrichment");
        $expectedNewEnrichmentItem = new NewEnrichmentItem();
        $expectedNewEnrichmentItem->setTextEnrichment($expectedTextEnrichment);

        $actualNewEnrichmentItem = PhotosLibraryResourceFactory::newEnrichmentItemWithText("a text enrichment");

        $this->assertProtobufEquals(
            $expectedNewEnrichmentItem,
            $actualNewEnrichmentItem
        );
    }

    public function testNewEnrichmentItemWithLocation()
    {
        $latlng = new LatLng();
        $latlng->setLatitude(123);
        $latlng->setLatitude(30);
        $location = new Location();
        $location->setLocationName("a place");
        $location->setLatlng($latlng);

        $expectedLocationEnrichment = new LocationEnrichment();
        $expectedLocationEnrichment->setLocation($location);
        $expectedNewEnrichmentItem = new NewEnrichmentItem();
        $expectedNewEnrichmentItem->setLocationEnrichment($expectedLocationEnrichment);

        $actualNewEnrichmentItem = PhotosLibraryResourceFactory::newEnrichmentItemWithLocation($location);

        $this->assertProtobufEquals(
            $expectedNewEnrichmentItem,
            $actualNewEnrichmentItem
        );
    }

    public function testNewEnrichmentWithMap()
    {
        $originLatlng = new LatLng();
        $originLatlng->setLatitude(123);
        $originLatlng->setLatitude(30);
        $origin = new Location();
        $origin->setLocationName("a place");
        $origin->setLatlng($originLatlng);

        $destinationLatlng = new LatLng();
        $destinationLatlng->setLatitude(123);
        $destinationLatlng->setLatitude(30);
        $destination = new Location();
        $destination->setLocationName("a place");
        $destination->setLatlng($destinationLatlng);

        $expectedMapEnrichment = new MapEnrichment();
        $expectedMapEnrichment->setOrigin($origin);
        $expectedMapEnrichment->setDestination($destination);
        $expectedNewEnrichmentItem = new NewEnrichmentItem();
        $expectedNewEnrichmentItem->setMapEnrichment($expectedMapEnrichment);

        $actualNewEnrichmentItem = PhotosLibraryResourceFactory::newEnrichmentItemWithMap($origin, $destination);

        $this->assertProtobufEquals(
            $expectedNewEnrichmentItem,
            $actualNewEnrichmentItem
        );
    }
}
