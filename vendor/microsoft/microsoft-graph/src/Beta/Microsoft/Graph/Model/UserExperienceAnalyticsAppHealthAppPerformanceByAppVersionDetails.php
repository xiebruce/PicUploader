<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails File
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
* UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails extends Entity
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
    */
    public function setAppVersion($val)
    {
        $this->_propDict["appVersion"] = $val;
        return $this;
    }

    /**
    * Gets the deviceCountWithCrashes
    * The total number of devices that have reported one or more application crashes for this application and version. Valid values -2147483648 to 2147483647
    *
    * @return int|null The deviceCountWithCrashes
    */
    public function getDeviceCountWithCrashes()
    {
        if (array_key_exists("deviceCountWithCrashes", $this->_propDict)) {
            return $this->_propDict["deviceCountWithCrashes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCountWithCrashes
    * The total number of devices that have reported one or more application crashes for this application and version. Valid values -2147483648 to 2147483647
    *
    * @param int $val The deviceCountWithCrashes
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
    */
    public function setDeviceCountWithCrashes($val)
    {
        $this->_propDict["deviceCountWithCrashes"] = intval($val);
        return $this;
    }

    /**
    * Gets the isLatestUsedVersion
    * Is the version of application the latest version for that app that is in use.
    *
    * @return bool|null The isLatestUsedVersion
    */
    public function getIsLatestUsedVersion()
    {
        if (array_key_exists("isLatestUsedVersion", $this->_propDict)) {
            return $this->_propDict["isLatestUsedVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLatestUsedVersion
    * Is the version of application the latest version for that app that is in use.
    *
    * @param bool $val The isLatestUsedVersion
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
    */
    public function setIsLatestUsedVersion($val)
    {
        $this->_propDict["isLatestUsedVersion"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMostUsedVersion
    * Is the version of application the most used version for that app.
    *
    * @return bool|null The isMostUsedVersion
    */
    public function getIsMostUsedVersion()
    {
        if (array_key_exists("isMostUsedVersion", $this->_propDict)) {
            return $this->_propDict["isMostUsedVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMostUsedVersion
    * Is the version of application the most used version for that app.
    *
    * @param bool $val The isMostUsedVersion
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
    */
    public function setIsMostUsedVersion($val)
    {
        $this->_propDict["isMostUsedVersion"] = boolval($val);
        return $this;
    }

}
