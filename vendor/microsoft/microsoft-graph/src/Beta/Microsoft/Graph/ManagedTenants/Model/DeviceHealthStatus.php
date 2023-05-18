<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthStatus File
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
* DeviceHealthStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthStatus extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the blueScreenCount
    *
    * @return int|null The blueScreenCount
    */
    public function getBlueScreenCount()
    {
        if (array_key_exists("blueScreenCount", $this->_propDict)) {
            return $this->_propDict["blueScreenCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blueScreenCount
    *
    * @param int $val The blueScreenCount
    *
    * @return DeviceHealthStatus
    */
    public function setBlueScreenCount($val)
    {
        $this->_propDict["blueScreenCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the bootTotalDurationInSeconds
    *
    * @return float|null The bootTotalDurationInSeconds
    */
    public function getBootTotalDurationInSeconds()
    {
        if (array_key_exists("bootTotalDurationInSeconds", $this->_propDict)) {
            return $this->_propDict["bootTotalDurationInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bootTotalDurationInSeconds
    *
    * @param float $val The bootTotalDurationInSeconds
    *
    * @return DeviceHealthStatus
    */
    public function setBootTotalDurationInSeconds($val)
    {
        $this->_propDict["bootTotalDurationInSeconds"] = floatval($val);
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
    * @return DeviceHealthStatus
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceMake
    *
    * @return string|null The deviceMake
    */
    public function getDeviceMake()
    {
        if (array_key_exists("deviceMake", $this->_propDict)) {
            return $this->_propDict["deviceMake"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceMake
    *
    * @param string $val The deviceMake
    *
    * @return DeviceHealthStatus
    */
    public function setDeviceMake($val)
    {
        $this->_propDict["deviceMake"] = $val;
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
    * @return DeviceHealthStatus
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
    * @return DeviceHealthStatus
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
    * @return DeviceHealthStatus
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
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
    * @return DeviceHealthStatus
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
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
    *
    * @param string $val The osVersion
    *
    * @return DeviceHealthStatus
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the primaryDiskType
    *
    * @return string|null The primaryDiskType
    */
    public function getPrimaryDiskType()
    {
        if (array_key_exists("primaryDiskType", $this->_propDict)) {
            return $this->_propDict["primaryDiskType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryDiskType
    *
    * @param string $val The primaryDiskType
    *
    * @return DeviceHealthStatus
    */
    public function setPrimaryDiskType($val)
    {
        $this->_propDict["primaryDiskType"] = $val;
        return $this;
    }

    /**
    * Gets the restartCount
    *
    * @return int|null The restartCount
    */
    public function getRestartCount()
    {
        if (array_key_exists("restartCount", $this->_propDict)) {
            return $this->_propDict["restartCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the restartCount
    *
    * @param int $val The restartCount
    *
    * @return DeviceHealthStatus
    */
    public function setRestartCount($val)
    {
        $this->_propDict["restartCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the startupPerformanceScore
    *
    * @return float|null The startupPerformanceScore
    */
    public function getStartupPerformanceScore()
    {
        if (array_key_exists("startupPerformanceScore", $this->_propDict)) {
            return $this->_propDict["startupPerformanceScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startupPerformanceScore
    *
    * @param float $val The startupPerformanceScore
    *
    * @return DeviceHealthStatus
    */
    public function setStartupPerformanceScore($val)
    {
        $this->_propDict["startupPerformanceScore"] = floatval($val);
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
    * @return DeviceHealthStatus
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
    * @return DeviceHealthStatus
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the topProcesses
    *
    * @return string|null The topProcesses
    */
    public function getTopProcesses()
    {
        if (array_key_exists("topProcesses", $this->_propDict)) {
            return $this->_propDict["topProcesses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the topProcesses
    *
    * @param string $val The topProcesses
    *
    * @return DeviceHealthStatus
    */
    public function setTopProcesses($val)
    {
        $this->_propDict["topProcesses"] = $val;
        return $this;
    }

}
