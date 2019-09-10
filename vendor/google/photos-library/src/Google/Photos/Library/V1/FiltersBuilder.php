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
use Google\Photos\Library\V1\FeatureFilter\Feature;
use Google\Photos\Library\V1\MediaTypeFilter\MediaType;
use Google\Photos\Types\DateRange;
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
    private $includedFeatures = [];
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
        $filters = new Filters();

        if ($this->mediaType) {
            $mediaTypeFilter = new MediaTypeFilter();
            $mediaTypeFilter->setMediaTypes([$this->mediaType]);
            $filters->setMediaTypeFilter($mediaTypeFilter);
        }

        if (!empty($this->includedCategories) || !empty($this->excludedCategories)) {
            $contentFilter = new ContentFilter();
            $contentFilter->setIncludedContentCategories($this->includedCategories);
            $contentFilter->setExcludedContentCategories($this->excludedCategories);
            $filters->setContentFilter($contentFilter);

        }

        if (!empty($this->dates) || !empty($this->ranges)) {
            $dateFilter = new DateFilter();
            $dateFilter->setDates($this->dates);
            $dateFilter->setRanges($this->ranges);
            $filters->setDateFilter($dateFilter);
        }

        if (!empty($this->includedFeatures)) {
            $featureFilter = new FeatureFilter();
            $featureFilter->setIncludedFeatures($this->includedFeatures);
            $filters->setFeatureFilter($featureFilter);
        }

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
        $this->mediaType = MediaType::value($mediaType);
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
        return $this->addIncludedCategory(ContentCategory::value($category));
    }

    /**
     * Adds a feature to the list of included features.
     *
     * @param int $feature The feature to include; a constant from {@link Feature}.
     * @return $this
     */
    public function addIncludedFeature($feature)
    {
        $this->includedFeatures[] = $feature;
        return $this;
    }

    /**
     * Adds a category to the list of included features.
     *
     * @param string $feature The feature to include. Must be an element of
     *     {@link PhotosLibraryClient::features()}
     * @return $this
     */
    public function addIncludedFeatureFromString($feature)
    {
        return $this->addIncludedFeature(Feature::value($feature));
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
        return $this->addExcludedCategory(ContentCategory::value($category));
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
