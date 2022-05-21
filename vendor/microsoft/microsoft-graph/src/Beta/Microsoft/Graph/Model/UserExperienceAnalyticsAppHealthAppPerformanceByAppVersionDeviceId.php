<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId File
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
* UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId extends Entity
{
    /**
    * Gets the appCrashCount
    * The number of crashes for the app. Valid values -2147483648 to 2147483647
    *
    * @return int|null The appCrashCount
    */
    public function getAppCrashCount()
    {
        if (array_key_exists("appCrashCount", $this->_propDict)) {
            return $this->_propDict["appCrashCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appCrashCount
    * The number of crashes for the app. Valid values -2147483648 to 2147483647
    *
    * @param int $val The appCrashCount
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public function setAppCrashCount($val)
    {
        $this->_propDict["appCrashCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the appDisplayName
    * The friendly name of the application.
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
    * The friendly name of the application.
    *
    * @param string $val The appDisplayName
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the appName
    * The name of the application.
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
    * The name of the application.
    *
    * @param string $val The appName
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public function setAppName($val)
    {
        $this->_propDict["appName"] = $val;
        return $this;
    }

    /**
    * Gets the appPublisher
    * The publisher of the application.
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
    * The publisher of the application.
    *
    * @param string $val The appPublisher
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public function setAppPublisher($val)
    {
        $this->_propDict["appPublisher"] = $val;
        return $this;
    }

    /**
    * Gets the appVersion
    * The version of the application.
    *
    * @return string|null The appVersion
    */
    public function getAppVersion()
    {
        if (array_key_exists("appVersion", $this->_propDict)) {
            return $this->_propDict["appVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appVersion
    * The version of the application.
    *
    * @param string $val The appVersion
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public function setAppVersion($val)
    {
        $this->_propDict["appVersion"] = $val;
        return $this;
    }

    /**
    * Gets the deviceDisplayName
    * The name of the device.
    *
    * @return string|null The deviceDisplayName
    */
    public function getDeviceDisplayName()
    {
        if (array_key_exists("deviceDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceDisplayName
    * The name of the device.
    *
    * @param string $val The deviceDisplayName
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    * The id of the device.
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
    * The id of the device.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the processedDateTime
    * The date and time when the statistics were last computed.
    *
    * @return \DateTime|null The processedDateTime
    */
    public function getProcessedDateTime()
    {
        if (array_key_exists("processedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["processedDateTime"], "\DateTime") || is_null($this->_propDict["processedDateTime"])) {
                return $this->_propDict["processedDateTime"];
            } else {
                $this->_propDict["processedDateTime"] = new \DateTime($this->_propDict["processedDateTime"]);
                return $this->_propDict["processedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the processedDateTime
    * The date and time when the statistics were last computed.
    *
    * @param \DateTime $val The processedDateTime
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public function setProcessedDateTime($val)
    {
        $this->_propDict["processedDateTime"] = $val;
        return $this;
    }

}
