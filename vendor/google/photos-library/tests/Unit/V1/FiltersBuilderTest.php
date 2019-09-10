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

use DateTime;
use Google\ApiCore\Testing\GeneratedTest;
use Google\Photos\Library\V1\ContentCategory;
use Google\Photos\Library\V1\FeatureFilter\Feature;
use Google\Photos\Library\V1\FiltersBuilder;
use Google\Photos\Library\V1\MediaTypeFilter\MediaType;
use Google\Type\Date;

class FiltersBuilderTest extends GeneratedTest
{
    public function testBuildWithAllFields()
    {
        $date = (new Date())->setYear(2018)->setDay(21)->setMonth(2);
        $startDate = (new Date())->setYear(2013);
        $endDate = (new Date())->setYear(2016);

        $filters = FiltersBuilder::construct()
            ->setMediaType(MediaType::VIDEO)
            ->addIncludedCategory(ContentCategory::CITYSCAPES)
            ->addIncludedCategory(ContentCategory::LANDSCAPES)
            ->addExcludedCategory(ContentCategory::SELFIES)
            ->addExcludedCategory(ContentCategory::LANDMARKS)
            ->addDate($date)
            ->addDateRange($startDate, $endDate)
            ->setIncludeArchivedMedia(true)
            ->build();

        $this->assertEquals(
            MediaType::VIDEO,
            $filters->getMediaTypeFilter()->getMediaTypes()->offsetGet(0)
        );
        $this->assertContains(
            ContentCategory::CITYSCAPES,
            $filters->getContentFilter()->getIncludedContentCategories()->getIterator()
        );
        $this->assertContains(
            ContentCategory::LANDSCAPES,
            $filters->getContentFilter()->getIncludedContentCategories()->getIterator()
        );
        $this->assertContains(
            ContentCategory::SELFIES,
            $filters->getContentFilter()->getExcludedContentCategories()->getIterator()
        );
        $this->assertContains(
            ContentCategory::LANDMARKS,
            $filters->getContentFilter()->getExcludedContentCategories()->getIterator()
        );
        $this->assertContains($date, $filters->getDateFilter()->getDates()->getIterator());
        $this->assertEquals(
            $startDate,
            $filters->getDateFilter()->getRanges()->offsetGet(0)->getStartDate()
        );
        $this->assertEquals(
            $endDate,
            $filters->getDateFilter()->getRanges()->offsetGet(0)->getEndDate()
        );
        $this->assertTrue($filters->getIncludeArchivedMedia());
    }

    public function testAddInvalidIncludedCategory()
    {
        $this->expectException(\UnexpectedValueException::class);
        FiltersBuilder::construct()
            ->addIncludedCategoryFromString("not a category");
    }

    public function testAddIncludedCategoryFromString()
    {
        $filters = FiltersBuilder::construct()
            ->addIncludedCategoryFromString("LANDSCAPES")->build();

        $this->assertContains(
            ContentCategory::LANDSCAPES,
            $filters->getContentFilter()->getIncludedContentCategories()->getIterator()
        );
    }

    public function testAddInvalidIncludedFeature()
    {
        $this->expectException(\UnexpectedValueException::class);
        FiltersBuilder::construct()
            ->addIncludedFeatureFromString("not a feature");
    }

    public function testAddIncludedFeatureFromString()
    {
        $filters = FiltersBuilder::construct()
            ->addIncludedFeatureFromString("FAVORITES")->build();

        $this->assertContains(
            Feature::FAVORITES,
            $filters->getFeatureFilter()->getIncludedFeatures()->getIterator()
        );
    }

    public function testAddInvalidExcludedCategory()
    {
        $this->expectException(\UnexpectedValueException::class);
        FiltersBuilder::construct()
            ->addExcludedCategoryFromString("not a category");
    }

    public function testAddExcludedCategoryFromString()
    {
        $filters = FiltersBuilder::construct()
            ->addExcludedCategoryFromString("LANDSCAPES")->build();

        $this->assertContains(
            ContentCategory::LANDSCAPES,
            $filters->getContentFilter()->getExcludedContentCategories()->getIterator()
        );
    }

    public function testAddDateFromDateTime()
    {
        $dateTime = new DateTime("2005-12-03");
        $expectedDate = (new Date())->setYear(2005)->setMonth(12)->setDay(3);

        $filters = FiltersBuilder::construct()->addDateFromDateTime($dateTime)->build();
        $actualDate = $filters->getDateFilter()->getDates()->offsetGet(0);

        $this->assertProtobufEquals($expectedDate, $actualDate);
    }

    public function testAddDateRangeFromDateTimes()
    {
        $startDateTime = new DateTime("2005-12-03");
        $expectedStartDate = (new Date())->setYear(2005)->setMonth(12)->setDay(3);
        $endDateTime = new DateTime("2008-03-05");
        $expectedEndDate = (new Date())->setYear(2008)->setMonth(3)->setDay(5);

        $filters = FiltersBuilder::construct()
            ->addDateRangeFromDateTime($startDateTime, $endDateTime)->build();
        $actualStartDate =
            $filters->getDateFilter()->getRanges()->offsetGet(0)->getStartDate();
        $actualEndDate = $filters->getDateFilter()->getRanges()->offsetGet(0)->getEndDate();

        $this->assertProtobufEquals($expectedStartDate, $actualStartDate);
        $this->assertProtobufEquals($expectedEndDate, $actualEndDate);
    }

    public function testAddInvalidMediaType()
    {
        $this->expectException(\UnexpectedValueException::class);
        FiltersBuilder::construct()->setMediaTypeFromString("not a media type");
    }

    public function testAddMediaTypeFromString()
    {
        $filters = FiltersBuilder::construct()->setMediaTypeFromString("PHOTO")->build();

        $this->assertEquals(
            MediaType::PHOTO,
            $filters->getMediaTypeFilter()->getMediaTypes()->offsetGet(0)
        );
    }
}
