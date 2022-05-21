<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBatteryHealthAppImpact File
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
* UserExperienceAnalyticsBatteryHealthAppImpact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBatteryHealthAppImpact extends Entity
{
    /**
    * Gets the activeDevices
    * Number of active devices for using that app over a 14-day period. Valid values -2147483648 to 2147483647
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
    * Number of active devices for using that app over a 14-day period. Valid values -2147483648 to 2147483647
    *
    * @param int $val The activeDevices
    *
    * @return UserExperienceAnalyticsBatteryHealthAppImpact
    */
    public function setActiveDevices($val)
    {
        $this->_propDict["activeDevices"] = intval($val);
        return $this;
    }

    /**
    * Gets the appDisplayName
    * User friendly display name for the app. Eg: Outlook
    *
    * @return string|null The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appDisplayName
    * User friendly display name for the app. Eg: Outlook
    *
    * @param string $val The appDisplayName
    *
    * @return UserExperienceAnalyticsBatteryHealthAppImpact
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the appName
    * App name. Eg: oltk.exe
    *
    * @return string|null The appName
    */
    public function getAppName()
    {
        if (array_key_exists("appName", $this->_propDict)) {
            return $this->_propDict["appName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appName
    * App name. Eg: oltk.exe
    *
    * @param string $val The appName
    *
    * @return UserExperienceAnalyticsBatteryHealthAppImpact
    */
    public function setAppName($val)
    {
        $this->_propDict["appName"] = $val;
        return $this;
    }

    /**
    * Gets the appPublisher
    * App publisher. Eg: Microsoft Corporation
    *
    * @return string|null The appPublisher
    */
    public function getAppPublisher()
    {
        if (array_key_exists("appPublisher", $this->_propDict)) {
            return $this->_propDict["appPublisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appPublisher
    * App publisher. Eg: Microsoft Corporation
    *
    * @param string $val The appPublisher
    *
    * @return UserExperienceAnalyticsBatteryHealthAppImpact
    */
    public function setAppPublisher($val)
    {
        $this->_propDict["appPublisher"] = $val;
        return $this;
    }

    /**
    * Gets the batteryUsagePercentage
    * The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days computed across all devices in the tenant. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The batteryUsagePercentage
    */
    public function getBatteryUsagePercentage()
    {
        if (array_key_exists("batteryUsagePercentage", $this->_propDict)) {
            return $this->_propDict["batteryUsagePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryUsagePercentage
    * The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days computed across all devices in the tenant. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The batteryUsagePercentage
    *
    * @return UserExperienceAnalyticsBatteryHealthAppImpact
    */
    public function setBatteryUsagePercentage($val)
    {
        $this->_propDict["batteryUsagePercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the isForegroundApp
    * true if the user had active interaction with the app.
    *
    * @return bool|null The isForegroundApp
    */
    public function getIsForegroundApp()
    {
        if (array_key_exists("isForegroundApp", $this->_propDict)) {
            return $this->_propDict["isForegroundApp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isForegroundApp
    * true if the user had active interaction with the app.
    *
    * @param bool $val The isForegroundApp
    *
    * @return UserExperienceAnalyticsBatteryHealthAppImpact
    */
    public function setIsForegroundApp($val)
    {
        $this->_propDict["isForegroundApp"] = boolval($val);
        return $this;
    }

}
