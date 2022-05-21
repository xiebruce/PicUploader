<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsRemoteConnection File
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
* UserExperienceAnalyticsRemoteConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsRemoteConnection extends Entity
{
    /**
    * Gets the cloudPcFailurePercentage
    * The sign in failure percentage of Cloud PC Device. Valid values 0 to 100
    *
    * @return float|null The cloudPcFailurePercentage
    */
    public function getCloudPcFailurePercentage()
    {
        if (array_key_exists("cloudPcFailurePercentage", $this->_propDict)) {
            return $this->_propDict["cloudPcFailurePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcFailurePercentage
    * The sign in failure percentage of Cloud PC Device. Valid values 0 to 100
    *
    * @param float $val The cloudPcFailurePercentage
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setCloudPcFailurePercentage($val)
    {
        $this->_propDict["cloudPcFailurePercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the cloudPcRoundTripTime
    * The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @return float|null The cloudPcRoundTripTime
    */
    public function getCloudPcRoundTripTime()
    {
        if (array_key_exists("cloudPcRoundTripTime", $this->_propDict)) {
            return $this->_propDict["cloudPcRoundTripTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcRoundTripTime
    * The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @param float $val The cloudPcRoundTripTime
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setCloudPcRoundTripTime($val)
    {
        $this->_propDict["cloudPcRoundTripTime"] = floatval($val);
        return $this;
    }

    /**
    * Gets the cloudPcSignInTime
    * The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @return float|null The cloudPcSignInTime
    */
    public function getCloudPcSignInTime()
    {
        if (array_key_exists("cloudPcSignInTime", $this->_propDict)) {
            return $this->_propDict["cloudPcSignInTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcSignInTime
    * The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @param float $val The cloudPcSignInTime
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setCloudPcSignInTime($val)
    {
        $this->_propDict["cloudPcSignInTime"] = floatval($val);
        return $this;
    }

    /**
    * Gets the coreBootTime
    * The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @return float|null The coreBootTime
    */
    public function getCoreBootTime()
    {
        if (array_key_exists("coreBootTime", $this->_propDict)) {
            return $this->_propDict["coreBootTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coreBootTime
    * The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @param float $val The coreBootTime
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setCoreBootTime($val)
    {
        $this->_propDict["coreBootTime"] = floatval($val);
        return $this;
    }

    /**
    * Gets the coreSignInTime
    * The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @return float|null The coreSignInTime
    */
    public function getCoreSignInTime()
    {
        if (array_key_exists("coreSignInTime", $this->_propDict)) {
            return $this->_propDict["coreSignInTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coreSignInTime
    * The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @param float $val The coreSignInTime
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setCoreSignInTime($val)
    {
        $this->_propDict["coreSignInTime"] = floatval($val);
        return $this;
    }

    /**
    * Gets the deviceCount
    * The count of remote connection. Valid values 0 to 2147483647
    *
    * @return int|null The deviceCount
    */
    public function getDeviceCount()
    {
        if (array_key_exists("deviceCount", $this->_propDict)) {
            return $this->_propDict["deviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCount
    * The count of remote connection. Valid values 0 to 2147483647
    *
    * @param int $val The deviceCount
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = intval($val);
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
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * The name of the device.
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
    * The name of the device.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The user experience analytics manufacturer.
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
    * The user experience analytics manufacturer.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * The user experience analytics device model.
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
    * The user experience analytics device model.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the remoteSignInTime
    * The remote sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @return float|null The remoteSignInTime
    */
    public function getRemoteSignInTime()
    {
        if (array_key_exists("remoteSignInTime", $this->_propDict)) {
            return $this->_propDict["remoteSignInTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remoteSignInTime
    * The remote sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    *
    * @param float $val The remoteSignInTime
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setRemoteSignInTime($val)
    {
        $this->_propDict["remoteSignInTime"] = floatval($val);
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * The user experience analytics userPrincipalName.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * The user experience analytics userPrincipalName.
    *
    * @param string $val The userPrincipalName
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the virtualNetwork
    * The user experience analytics virtual network.
    *
    * @return string|null The virtualNetwork
    */
    public function getVirtualNetwork()
    {
        if (array_key_exists("virtualNetwork", $this->_propDict)) {
            return $this->_propDict["virtualNetwork"];
        } else {
            return null;
        }
    }

    /**
    * Sets the virtualNetwork
    * The user experience analytics virtual network.
    *
    * @param string $val The virtualNetwork
    *
    * @return UserExperienceAnalyticsRemoteConnection
    */
    public function setVirtualNetwork($val)
    {
        $this->_propDict["virtualNetwork"] = $val;
        return $this;
    }

}
