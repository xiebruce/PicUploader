<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppPerformance File
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
* AppPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppPerformance extends \Beta\Microsoft\Graph\Model\Entity
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
    * @return AppPerformance
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
    * @return AppPerformance
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
    * @return AppPerformance
    */
    public function setAppPublisher($val)
    {
        $this->_propDict["appPublisher"] = $val;
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
    * @return AppPerformance
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the meanTimeToFailureInMinutes
    *
    * @return int|null The meanTimeToFailureInMinutes
    */
    public function getMeanTimeToFailureInMinutes()
    {
        if (array_key_exists("meanTimeToFailureInMinutes", $this->_propDict)) {
            return $this->_propDict["meanTimeToFailureInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the meanTimeToFailureInMinutes
    *
    * @param int $val The meanTimeToFailureInMinutes
    *
    * @return AppPerformance
    */
    public function setMeanTimeToFailureInMinutes($val)
    {
        $this->_propDict["meanTimeToFailureInMinutes"] = intval($val);
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
    * @return AppPerformance
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
    * @return AppPerformance
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the totalActiveDeviceCount
    *
    * @return int|null The totalActiveDeviceCount
    */
    public function getTotalActiveDeviceCount()
    {
        if (array_key_exists("totalActiveDeviceCount", $this->_propDict)) {
            return $this->_propDict["totalActiveDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalActiveDeviceCount
    *
    * @param int $val The totalActiveDeviceCount
    *
    * @return AppPerformance
    */
    public function setTotalActiveDeviceCount($val)
    {
        $this->_propDict["totalActiveDeviceCount"] = intval($val);
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
    * @return AppPerformance
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
    * @return AppPerformance
    */
    public function setTotalAppFreezeCount($val)
    {
        $this->_propDict["totalAppFreezeCount"] = intval($val);
        return $this;
    }

}
