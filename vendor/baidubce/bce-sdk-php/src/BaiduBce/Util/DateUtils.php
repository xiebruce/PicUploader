<?php
/*
* Copyright 2014 Baidu, Inc.
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* Http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/

namespace BaiduBce\Util;

/**
 * Utilities for parsing and formatting dates.
 *
 * <p>
 * Note that this class doesn't use static methods because of the
 * synchronization issues with SimpleDateFormat. This lets synchronization be
 * done on a per-object level, instead of on a per-class level.
 */
class DateUtils
{
    /**
     * Alternate ISO 8601 format without fractional seconds
     */
    const ALTERNATE_ISO8601_DATE_FORMAT = "Y-m-d\TH:i:s\Z";

    /**
     * @var \DateTimeZone The UTC timezone object.
     */
    public static $UTC_TIMEZONE;

    /**
     * Initialize $UTC_TIMEZONE
     */
    public static function  __init()
    {
        DateUtils::$UTC_TIMEZONE = new \DateTimeZone("UTC");
    }

    /**
     * Parses the specified date string as an ISO 8601 date and returns the Date
     * object.
     *
     * @param $dateString string The date string to parse.
     * @return \DateTime The parsed Date object.
     * @throws \Exception If the date string could not be parsed.
     */
    public static function parseAlternateIso8601Date($dateString)
    {
        return \DateTime::createFromFormat(
            DateUtils::ALTERNATE_ISO8601_DATE_FORMAT,
            $dateString,
            DateUtils::$UTC_TIMEZONE
        );
    }

    /**
     * Formats the specified date as an ISO 8601 string.
     *
     * @param $datetime \DateTime The date to format.
     * @return string The ISO 8601 string representing the specified date.
     */
    public static function formatAlternateIso8601Date($datetime)
    {
        return $datetime->format(DateUtils::ALTERNATE_ISO8601_DATE_FORMAT);
    }

    /**
     * Parses the specified date string as an RFC 822 date and returns the Date object.
     *
     * @param $dateString string The date string to parse.
     * @return \DateTime The parsed Date object.
     * @throws \Exception If the date string could not be parsed.
     */
    public static function parseRfc822Date($dateString)
    {
        return \DateTime::createFromFormat(
            \DateTime::RFC822,
            $dateString,
            DateUtils::$UTC_TIMEZONE
        );
    }

    /**
     * Formats the specified date as an RFC 822 string.
     *
     * @param $datetime \DateTime The date to format.
     * @return string The RFC 822 string representing the specified date.
     */
    public static function formatRfc822Date($datetime)
    {
        return $datetime->format(\DateTime::RFC822);
    }
}

DateUtils::__init();