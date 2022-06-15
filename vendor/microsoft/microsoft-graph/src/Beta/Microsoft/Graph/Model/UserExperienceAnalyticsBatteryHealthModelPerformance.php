<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBatteryHealthModelPerformance File
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
* UserExperienceAnalyticsBatteryHealthModelPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBatteryHealthModelPerformance extends Entity
{
    /**
    * Gets the activeDevices
    * Number of active devices for that model. Valid values -2147483648 to 2147483647
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
    * Number of active devices for that model. Valid values -2147483648 to 2147483647
    *
    * @param int $val The activeDevices
    *
    * @return UserExperienceAnalyticsBatteryHealthModelPerformance
    */
    public function setActiveDevices($val)
    {
        $this->_propDict["activeDevices"] = intval($val);
        return $this;
    }

    /**
    * Gets the averageBatteryAgeInDays
    * The mean of the battery age for all devices of a given model in a tenant. Unit in days. Valid values -2147483648 to 2147483647
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
    * The mean of the battery age for all devices of a given model in a tenant. Unit in days. Valid values -2147483648 to 2147483647
    *
    * @param int $val The averageBatteryAgeInDays
    *
    * @return UserExperienceAnalyticsBatteryHealthModelPerformance
    */
    public function setAverageBatteryAgeInDays($val)
    {
        $this->_propDict["averageBatteryAgeInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the averageEstimatedRuntimeInMinutes
    * The mean of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values -2147483648 to 2147483647
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
    * The mean of the estimated runtimes on full charge for all devices of a given model. Unit in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The averageEstimatedRuntimeInMinutes
    *
    * @return UserExperienceAnalyticsBatteryHealthModelPerformance
    */
    public function setAverageEstimatedRuntimeInMinutes($val)
    {
        $this->_propDict["averageEstimatedRuntimeInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the averageMaxCapacityPercentage
    * The mean of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
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
    * The mean of the maximum capacity for all devices of a given model. Maximum capacity measures the full charge vs. design capacity for a device’s batteries.. Valid values -2147483648 to 2147483647
    *
    * @param int $val The averageMaxCapacityPercentage
    *
    * @return UserExperienceAnalyticsBatteryHealthModelPerformance
    */
    public function setAverageMaxCapacityPercentage($val)
    {
        $this->_propDict["averageMaxCapacityPercentage"] = intval($val);
        return $this;
    }

    /**
    * Gets the manufacturer
    * Name of the device manufacturer.
    *
    * @return string|null The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * Name of the device manufacturer.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsBatteryHealthModelPerformance
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * The model name of the device.
    *
    * @return string|null The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }

    /**
    * Sets the model
    * The model name of the device.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsBatteryHealthModelPerformance
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the modelBatteryHealthScore
    * A weighted average of a model’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
    *
    * @return int|null The modelBatteryHealthScore
    */
    public function getModelBatteryHealthScore()
    {
        if (array_key_exists("modelBatteryHealthScore", $this->_propDict)) {
            return $this->_propDict["modelBatteryHealthScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modelBatteryHealthScore
    * A weighted average of a model’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
    *
    * @param int $val The modelBatteryHealthScore
    *
    * @return UserExperienceAnalyticsBatteryHealthModelPerformance
    */
    public function setModelBatteryHealthScore($val)
    {
        $this->_propDict["modelBatteryHealthScore"] = intval($val);
        return $this;
    }

}
