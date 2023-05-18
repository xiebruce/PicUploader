<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAppPerformance File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* DeviceAppPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAppPerformance extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the appFriendlyName
    *
    * @return string|null The appFriendlyName
    */
    public function getAppFriendlyName()
    {
        if (array_key_exists("appFriendlyName", $this->_propDict)) {
            return $this->_propDict["appFriendlyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appFriendlyName
    *
    * @param string $val The appFriendlyName
    *
    * @return DeviceAppPerformance
    */
    public function setAppFriendlyName($val)
    {
        $this->_propDict["appFriendlyName"] = $val;
        return $this;
    }

    /**
    * Gets the appName
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
    *
    * @param string $val The appName
    *
    * @return DeviceAppPerformance
    */
    public function setAppName($val)
    {
        $this->_propDict["appName"] = $val;
        return $this;
    }

    /**
    * Gets the appPublisher
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
    *
    * @param string $val The appPublisher
    *
    * @return DeviceAppPerformance
    */
    public function setAppPublisher($val)
    {
        $this->_propDict["appPublisher"] = $val;
        return $this;
    }

    /**
    * Gets the appVersion
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
    *
    * @param string $val The appVersion
    *
    * @return DeviceAppPerformance
    */
    public function setAppVersion($val)
    {
        $this->_propDict["appVersion"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
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
    *
    * @param string $val The deviceId
    *
    * @return DeviceAppPerformance
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceManufacturer
    *
    * @return string|null The deviceManufacturer
    */
    public function getDeviceManufacturer()
    {
        if (array_key_exists("deviceManufacturer", $this->_propDict)) {
            return $this->_propDict["deviceManufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceManufacturer
    *
    * @param string $val The deviceManufacturer
    *
    * @return DeviceAppPerformance
    */
    public function setDeviceManufacturer($val)
    {
        $this->_propDict["deviceManufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the deviceModel
    *
    * @return string|null The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceModel
    *
    * @param string $val The deviceModel
    *
    * @return DeviceAppPerformance
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
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
    *
    * @param string $val The deviceName
    *
    * @return DeviceAppPerformance
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the healthStatus
    *
    * @return string|null The healthStatus
    */
    public function getHealthStatus()
    {
        if (array_key_exists("healthStatus", $this->_propDict)) {
            return $this->_propDict["healthStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the healthStatus
    *
    * @param string $val The healthStatus
    *
    * @return DeviceAppPerformance
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }

    /**
    * Gets the isLatestUsedVersion
    *
    * @return int|null The isLatestUsedVersion
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
    *
    * @param int $val The isLatestUsedVersion
    *
    * @return DeviceAppPerformance
    */
    public function setIsLatestUsedVersion($val)
    {
        $this->_propDict["isLatestUsedVersion"] = intval($val);
        return $this;
    }

    /**
    * Gets the isMostUsedVersion
    *
    * @return int|null The isMostUsedVersion
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
    *
    * @param int $val The isMostUsedVersion
    *
    * @return DeviceAppPerformance
    */
    public function setIsMostUsedVersion($val)
    {
        $this->_propDict["isMostUsedVersion"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return DeviceAppPerformance
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the tenantDisplayName
    *
    * @return string|null The tenantDisplayName
    */
    public function getTenantDisplayName()
    {
        if (array_key_exists("tenantDisplayName", $this->_propDict)) {
            return $this->_propDict["tenantDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantDisplayName
    *
    * @param string $val The tenantDisplayName
    *
    * @return DeviceAppPerformance
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return DeviceAppPerformance
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the totalAppCrashCount
    *
    * @return int|null The totalAppCrashCount
    */
    public function getTotalAppCrashCount()
    {
        if (array_key_exists("totalAppCrashCount", $this->_propDict)) {
            return $this->_propDict["totalAppCrashCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalAppCrashCount
    *
    * @param int $val The totalAppCrashCount
    *
    * @return DeviceAppPerformance
    */
    public function setTotalAppCrashCount($val)
    {
        $this->_propDict["totalAppCrashCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalAppFreezeCount
    *
    * @return int|null The totalAppFreezeCount
    */
    public function getTotalAppFreezeCount()
    {
        if (array_key_exists("totalAppFreezeCount", $this->_propDict)) {
            return $this->_propDict["totalAppFreezeCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalAppFreezeCount
    *
    * @param int $val The totalAppFreezeCount
    *
    * @return DeviceAppPerformance
    */
    public function setTotalAppFreezeCount($val)
    {
        $this->_propDict["totalAppFreezeCount"] = intval($val);
        return $this;
    }

}
