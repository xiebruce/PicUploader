<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateRolloutSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* WindowsUpdateRolloutSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUpdateRolloutSettings extends Entity
{

    /**
    * Gets the offerEndDateTimeInUTC
    * The feature update's ending  of release date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z.
    *
    * @return \DateTime|null The offerEndDateTimeInUTC
    */
    public function getOfferEndDateTimeInUTC()
    {
        if (array_key_exists("offerEndDateTimeInUTC", $this->_propDict)) {
            if (is_a($this->_propDict["offerEndDateTimeInUTC"], "\DateTime") || is_null($this->_propDict["offerEndDateTimeInUTC"])) {
                return $this->_propDict["offerEndDateTimeInUTC"];
            } else {
                $this->_propDict["offerEndDateTimeInUTC"] = new \DateTime($this->_propDict["offerEndDateTimeInUTC"]);
                return $this->_propDict["offerEndDateTimeInUTC"];
            }
        }
        return null;
    }

    /**
    * Sets the offerEndDateTimeInUTC
    * The feature update's ending  of release date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z.
    *
    * @param \DateTime $val The value to assign to the offerEndDateTimeInUTC
    *
    * @return WindowsUpdateRolloutSettings The WindowsUpdateRolloutSettings
    */
    public function setOfferEndDateTimeInUTC($val)
    {
        $this->_propDict["offerEndDateTimeInUTC"] = $val;
         return $this;
    }
    /**
    * Gets the offerIntervalInDays
    * The number of day(s) between each set of offers to be set, updated, and displayed for a feature update profile, for example: if OfferStartDateTimeInUTC is 2020-06-09T10:00:00Z, and OfferIntervalInDays is 1, then the next two sets of offers will be made consecutively on 2020-06-10T10:00:00Z (next day at the same specified time) and 2020-06-11T10:00:00Z (next next day at the same specified time) with 1 day in between each set of offers.
    *
    * @return int|null The offerIntervalInDays
    */
    public function getOfferIntervalInDays()
    {
        if (array_key_exists("offerIntervalInDays", $this->_propDict)) {
            return $this->_propDict["offerIntervalInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offerIntervalInDays
    * The number of day(s) between each set of offers to be set, updated, and displayed for a feature update profile, for example: if OfferStartDateTimeInUTC is 2020-06-09T10:00:00Z, and OfferIntervalInDays is 1, then the next two sets of offers will be made consecutively on 2020-06-10T10:00:00Z (next day at the same specified time) and 2020-06-11T10:00:00Z (next next day at the same specified time) with 1 day in between each set of offers.
    *
    * @param int $val The value of the offerIntervalInDays
    *
    * @return WindowsUpdateRolloutSettings
    */
    public function setOfferIntervalInDays($val)
    {
        $this->_propDict["offerIntervalInDays"] = $val;
        return $this;
    }

    /**
    * Gets the offerStartDateTimeInUTC
    * The feature update's starting date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z.
    *
    * @return \DateTime|null The offerStartDateTimeInUTC
    */
    public function getOfferStartDateTimeInUTC()
    {
        if (array_key_exists("offerStartDateTimeInUTC", $this->_propDict)) {
            if (is_a($this->_propDict["offerStartDateTimeInUTC"], "\DateTime") || is_null($this->_propDict["offerStartDateTimeInUTC"])) {
                return $this->_propDict["offerStartDateTimeInUTC"];
            } else {
                $this->_propDict["offerStartDateTimeInUTC"] = new \DateTime($this->_propDict["offerStartDateTimeInUTC"]);
                return $this->_propDict["offerStartDateTimeInUTC"];
            }
        }
        return null;
    }

    /**
    * Sets the offerStartDateTimeInUTC
    * The feature update's starting date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z.
    *
    * @param \DateTime $val The value to assign to the offerStartDateTimeInUTC
    *
    * @return WindowsUpdateRolloutSettings The WindowsUpdateRolloutSettings
    */
    public function setOfferStartDateTimeInUTC($val)
    {
        $this->_propDict["offerStartDateTimeInUTC"] = $val;
         return $this;
    }
}
