<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBatteryHealthOsPerformance File
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
* UserExperienceAnalyticsBatteryHealthOsPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBatteryHealthOsPerformance extends Entity
{
    /**
    * Gets the activeDevices
    * Number of active devices for that os version. Valid values -2147483648 to 2147483647
    *
    * @return int|null The activeDevices
    */
    public function getActiveDevices()
    {
        if (array_key_exists("activeDevices", $this->_propDict)) {
            return $this->_propDict["activeDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeDevices
    * Number of active devices for that os version. Valid values -2147483648 to 2147483647
    *
    * @param int $val The activeDevices
    *
    * @return UserExperienceAnalyticsBatteryHealthOsPerformance
    */
    public function setActiveDevices($val)
    {
        $this->_propDict["activeDevices"] = intval($val);
        return $this;
    }

    /**
    * Gets the averageBatteryAgeInDays
    * The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values -2147483648 to 2147483647
    *
    * @return int|null The averageBatteryAgeInDays
    */
    public function getAverageBatteryAgeInDays()
    {
        if (array_key_exists("averageBatteryAgeInDays", $this->_propDict)) {
            return $this->_propDict["averageBatteryAgeInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageBatteryAgeInDays
    * The mean of the battery age for all devices running a particular operating system version in a tenant. Unit in days. Valid values -2147483648 to 2147483647
    *
    * @param int $val The averageBatteryAgeInDays
    *
    * @return UserExperienceAnalyticsBatteryHealthOsPerformance
    */
    public function setAverageBatteryAgeInDays($val)
    {
        $this->_propDict["averageBatteryAgeInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the averageEstimatedRuntimeInMinutes
    * The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values -2147483648 to 2147483647
    *
    * @return int|null The averageEstimatedRuntimeInMinutes
    */
    public function getAverageEstimatedRuntimeInMinutes()
    {
        if (array_key_exists("averageEstimatedRuntimeInMinutes", $this->_propDict)) {
            return $this->_propDict["averageEstimatedRuntimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageEstimatedRuntimeInMinutes
    * The mean of the estimated runtimes on full charge for all devices running a particular operating system version. Unit in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The averageEstimatedRuntimeInMinutes
    *
    * @return UserExperienceAnalyticsBatteryHealthOsPerformance
    */
    public function setAverageEstimatedRuntimeInMinutes($val)
    {
        $this->_propDict["averageEstimatedRuntimeInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the averageMaxCapacityPercentage
    * The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
    *
    * @return int|null The averageMaxCapacityPercentage
    */
    public function getAverageMaxCapacityPercentage()
    {
        if (array_key_exists("averageMaxCapacityPercentage", $this->_propDict)) {
            return $this->_propDict["averageMaxCapacityPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageMaxCapacityPercentage
    * The mean of the maximum capacity for all devices running a particular operating system version. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
    *
    * @param int $val The averageMaxCapacityPercentage
    *
    * @return UserExperienceAnalyticsBatteryHealthOsPerformance
    */
    public function setAverageMaxCapacityPercentage($val)
    {
        $this->_propDict["averageMaxCapacityPercentage"] = intval($val);
        return $this;
    }

    /**
    * Gets the osBuildNumber
    * Build number of the operating system.
    *
    * @return string|null The osBuildNumber
    */
    public function getOsBuildNumber()
    {
        if (array_key_exists("osBuildNumber", $this->_propDict)) {
            return $this->_propDict["osBuildNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osBuildNumber
    * Build number of the operating system.
    *
    * @param string $val The osBuildNumber
    *
    * @return UserExperienceAnalyticsBatteryHealthOsPerformance
    */
    public function setOsBuildNumber($val)
    {
        $this->_propDict["osBuildNumber"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * Version of the operating system.
    *
    * @return string|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osVersion
    * Version of the operating system.
    *
    * @param string $val The osVersion
    *
    * @return UserExperienceAnalyticsBatteryHealthOsPerformance
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

}
