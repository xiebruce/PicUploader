<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory File
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
* UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory extends Entity
{
    /**
    * Gets the deviceId
    * The unique identifier of the device, Intune DeviceID or SCCM device id.
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
    * The unique identifier of the device, Intune DeviceID or SCCM device id.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
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
    * @return UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
    */
    public function setEstimatedRuntimeInMinutes($val)
    {
        $this->_propDict["estimatedRuntimeInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the runtimeDateTime
    * The datetime for the instance of runtime history.
    *
    * @return string|null The runtimeDateTime
    */
    public function getRuntimeDateTime()
    {
        if (array_key_exists("runtimeDateTime", $this->_propDict)) {
            return $this->_propDict["runtimeDateTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the runtimeDateTime
    * The datetime for the instance of runtime history.
    *
    * @param string $val The runtimeDateTime
    *
    * @return UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
    */
    public function setRuntimeDateTime($val)
    {
        $this->_propDict["runtimeDateTime"] = $val;
        return $this;
    }

}
