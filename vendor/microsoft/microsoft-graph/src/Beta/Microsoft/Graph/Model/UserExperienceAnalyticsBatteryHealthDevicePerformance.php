<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBatteryHealthDevicePerformance File
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
* UserExperienceAnalyticsBatteryHealthDevicePerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBatteryHealthDevicePerformance extends Entity
{
    /**
    * Gets the batteryAgeInDays
    * Estimated battery age. Unit in days. Valid values -2147483648 to 2147483647
    *
    * @return int|null The batteryAgeInDays
    */
    public function getBatteryAgeInDays()
    {
        if (array_key_exists("batteryAgeInDays", $this->_propDict)) {
            return $this->_propDict["batteryAgeInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryAgeInDays
    * Estimated battery age. Unit in days. Valid values -2147483648 to 2147483647
    *
    * @param int $val The batteryAgeInDays
    *
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setBatteryAgeInDays($val)
    {
        $this->_propDict["batteryAgeInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the deviceBatteryHealthScore
    * A weighted average of a device’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
    *
    * @return int|null The deviceBatteryHealthScore
    */
    public function getDeviceBatteryHealthScore()
    {
        if (array_key_exists("deviceBatteryHealthScore", $this->_propDict)) {
            return $this->_propDict["deviceBatteryHealthScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceBatteryHealthScore
    * A weighted average of a device’s maximum capacity score and runtime estimate score. Values range from 0-100. Valid values -2147483648 to 2147483647
    *
    * @param int $val The deviceBatteryHealthScore
    *
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setDeviceBatteryHealthScore($val)
    {
        $this->_propDict["deviceBatteryHealthScore"] = intval($val);
        return $this;
    }

    /**
    * Gets the deviceId
    * The unique identifier of the device, Intune DeviceID.
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * The unique identifier of the device, Intune DeviceID.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * Device friendly name.
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * Device friendly name.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the estimatedRuntimeInMinutes
    * The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
    *
    * @return int|null The estimatedRuntimeInMinutes
    */
    public function getEstimatedRuntimeInMinutes()
    {
        if (array_key_exists("estimatedRuntimeInMinutes", $this->_propDict)) {
            return $this->_propDict["estimatedRuntimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the estimatedRuntimeInMinutes
    * The estimated runtime of the device when the battery is fully charged. Unit in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The estimatedRuntimeInMinutes
    *
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setEstimatedRuntimeInMinutes($val)
    {
        $this->_propDict["estimatedRuntimeInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the healthStatus
    * The overall battery health status of the device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
    *
    * @return UserExperienceAnalyticsHealthState|null The healthStatus
    */
    public function getHealthStatus()
    {
        if (array_key_exists("healthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthStatus"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsHealthState") || is_null($this->_propDict["healthStatus"])) {
                return $this->_propDict["healthStatus"];
            } else {
                $this->_propDict["healthStatus"] = new UserExperienceAnalyticsHealthState($this->_propDict["healthStatus"]);
                return $this->_propDict["healthStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the healthStatus
    * The overall battery health status of the device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
    *
    * @param UserExperienceAnalyticsHealthState $val The healthStatus
    *
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The manufacturer name of the device.
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
    * The manufacturer name of the device.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the maxCapacityPercentage
    * Ratio of current capacity and design capacity of the battery with the lowest capacity. Unit in percentage and values range from 0-100. Valid values -2147483648 to 2147483647
    *
    * @return int|null The maxCapacityPercentage
    */
    public function getMaxCapacityPercentage()
    {
        if (array_key_exists("maxCapacityPercentage", $this->_propDict)) {
            return $this->_propDict["maxCapacityPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxCapacityPercentage
    * Ratio of current capacity and design capacity of the battery with the lowest capacity. Unit in percentage and values range from 0-100. Valid values -2147483648 to 2147483647
    *
    * @param int $val The maxCapacityPercentage
    *
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setMaxCapacityPercentage($val)
    {
        $this->_propDict["maxCapacityPercentage"] = intval($val);
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
    * @return UserExperienceAnalyticsBatteryHealthDevicePerformance
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

}
