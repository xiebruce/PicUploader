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

use DateTime;
use Google\Photos\Library\V1\MediaTypeFilter\MediaType;
use Google\Type\Date;

/**
 * Provides an easier interface for constructing {@link Filters} objects.
 *
 * Usage:
 * $filters = FiltersBuilder::new()
 *     ->addIncludedContentCategory(ContentCategory::LANDSCAPES)
 *     ->setIncludeArchivedMedia(true)
 *     ->build();
 * $searchMediaItemsRequest->setFilters($filters);
 */
class FiltersBuilder
{
    private $mediaType = 0;
    private $includedCategories = [];
    private $excludedCategories = [];
    private $ranges = [];
    private $dates = [];
    private $includeArchivedMedia;

    public static function construct()
    {
        return new self();
    }

    /**
     * Builds a Filters object.
     *
     * @return Filters The built Filters object.
     */
    public function build()
    {
        $mediaTypeFilter = new MediaTypeFilter();
        $mediaTypeFilter->setMediaTypes([$this->mediaType]);

        $contentFilter = new ContentFilter();
        $contentFilter->setIncludedContentCategories($this->includedCategories);
        $contentFilter->setExcludedContentCategories($this->excludedCategories);

        $dateFilter = new DateFilter();
        $dateFilter->setDates($this->dates);
        $dateFilter->setRanges($this->ranges);

        $filters = new Filters();
        $filters->setMediaTypeFilter($mediaTypeFilter);
        $filters->setContentFilter($contentFilter);
        $filters->setDateFilter($dateFilter);
        $filters->setIncludeArchivedMedia($this->includeArchivedMedia);
        return $filters;
    }

    /**
     * Sets the media type, from a string. Overwrites the existing media type.
     *
     * @param string $mediaType The media type to set. Must be an element of
     *     {@link PhotosLibraryClient::mediaTypes()}
     * @return $this
     */
    public function setMediaTypeFromString($mediaType)
    {
        switch ($mediaType) {
            case "ALL_MEDIA":
                $this->mediaType = MediaType::ALL_MEDIA;
                break;
            case "PHOTO":
                $this->mediaType = MediaType::PHOTO;
                break;
            case "VIDEO":
                $this->mediaType = MediaType::VIDEO;
                break;
            default:
                throw new \InvalidArgumentException($mediaType . " is not a valid MediaType");
        }

        return $this;
    }

    /**
     * Sets the media type. Overwrites the existing media type.
     *
     * @param int $mediaType The media type to set, a constant from MediaType.
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * Converts a string into a {@link ContentCategory}.
     *
     * @param string $category A stringified version of a ContentCategory, e.g. "NONE".
     * @throws \InvalidArgumentException if $category is not an element of
     *     {@link PhotosLibraryClient::contentCategories()}.
     * @return int A constant from ContentCategory.
     */
    private function convertToCategory($category)
    {
        switch ($category) {
            case "NONE":
                return ContentCategory::NONE;
                break;
            case "LANDSCAPES":
                return ContentCategory::LANDSCAPES;
                break;
            case "RECEIPTS":
                return ContentCategory::RECEIPTS;
                break;
            case "CITYSCAPES":
                return ContentCategory::CITYSCAPES;
                break;
            case "LANDMARKS":
                return ContentCategory::LANDMARKS;
                break;
            case "SELFIES":
                return ContentCategory::SELFIES;
                break;
            case "PEOPLE":
                return ContentCategory::PEOPLE;
                break;
            case "PETS":
                return ContentCategory::PETS;
                break;
            case "WEDDINGS":
                return ContentCategory::WEDDINGS;
                break;
            case "BIRTHDAYS":
                return ContentCategory::BIRTHDAYS;
                break;
            case "DOCUMENTS":
                return ContentCategory::DOCUMENTS;
                break;
            case "TRAVEL":
                return ContentCategory::TRAVEL;
                break;
            case "ANIMALS":
                return ContentCategory::ANIMALS;
                break;
            case "FOOD":
                return ContentCategory::FOOD;
                break;
            case "SPORT":
                return ContentCategory::SPORT;
                break;
            case "NIGHT":
                return ContentCategory::NIGHT;
                break;
            case "PERFORMANCES":
                return ContentCategory::PERFORMANCES;
                break;
            case "WHITEBOARDS":
                return ContentCategory::WHITEBOARDS;
                break;
            case "SCREENSHOTS":
                return ContentCategory::SCREENSHOTS;
                break;
            case "UTILITY":
                return ContentCategory::UTILITY;
                break;
            default:
                throw new \InvalidArgumentException($category . " is not a valid category.");
        }
    }

    /**
     * Adds a category to the list of included categories.
     *
     * @param int $category The category to include; a constant from {@link ContentCategory}.
     * @return $this
     */
    public function addIncludedCategory($category)
    {
        $this->includedCategories[] = $category;
        return $this;
    }

    /**
     * Adds a category to the list of included categories.
     *
     * @param string $category The category to include. Must be an element of
     *     {@link PhotosLibraryClient::contentCategories()}
     * @return $this
     */
    public function addIncludedCategoryFromString($category)
    {
        return $this->addIncludedCategory($this->convertToCategory($category));
    }

    /**
     * Adds a category to the list of of excluded categories.
     *
     * @param int $category The category to exclude.
     * @return $this
     */
    public function addExcludedCategory($category)
    {
        $this->excludedCategories[] = $category;
        return $this;
    }

    /**
     * Adds a category to the list of excluded categories.
     *
     * @param string $category The category to exclude. Must be an element of
     *     {@link PhotosLibraryClient::contentCategories()}
     * @return $this
     */
    public function addExcludedCategoryFromString($category)
    {
        return $this->addExcludedCategory($this->convertToCategory($category));
    }

    /**
     * Converts a DateTime object into a Google Date object.
     *
     * @param \DateTime $date
     * @return Date
     */
    private function convertToGoogleDate(DateTime $date)
    {
        $googleDate = new Date();
        $googleDate->setDay($date->format('j'));
        $googleDate->setMonth($date->format('n'));
        $googleDate->setYear($date->format('Y'));
        return $googleDate;
    }

    /**
     * Adds a date range to the list of included date ranges.
     *
     * @param Date $start
     * @param Date $end
     * @return $this
     */
    public function addDateRange(Date $start, Date $end)
    {
        $range = new DateRange();
        $range->setStartDate($start);
        $range->setEndDate($end);
        $this->ranges[] = $range;
        return $this;
    }

    /**
     * Adds a date range to the list of included date ranges, from two DateTimes.
     *
     * If you require dates with wildcards (e.g., a year-only date), you must use
     * {@link addDateRange}.
     *
     * @param DateTime $start
     * @param DateTime $end
     * @return $this
     */
    public function addDateRangeFromDateTime(DateTime $start, DateTime $end)
    {
        return $this->addDateRange(
            $this->convertToGoogleDate($start),
            $this->convertToGoogleDate($end)
        );
    }

    /**
     * Adds a date to the list of included dates.
     *
     * @param Date $date
     * @return $this
     */
    public function addDate(Date $date)
    {
        $this->dates[] = $date;
        return $this;
    }

    /**
     * Adds a date to the list of included dates, from a DateTime.
     *
     * If you require a date with wildcards (e.g., a year-only date), you must use {@link addDate}.
     *
     * @param DateTime $date
     * @return $this
     */
    public function addDateFromDateTime(DateTime $date)
    {
        return $this->addDate($this->convertToGoogleDate($date));
    }

    /**
     * Sets the flag to include archived media. If false, archived media will not be returned.
     *
     * @param boolean $includeArchivedMedia
     * @return $this
     */
    public function setIncludeArchivedMedia($includeArchivedMedia)
    {
        $this->includeArchivedMedia = $includeArchivedMedia;
        return $this;
    }
}
