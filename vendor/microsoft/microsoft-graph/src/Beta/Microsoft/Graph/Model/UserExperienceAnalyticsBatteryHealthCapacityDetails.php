<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBatteryHealthCapacityDetails File
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
* UserExperienceAnalyticsBatteryHealthCapacityDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBatteryHealthCapacityDetails extends Entity
{
    /**
    * Gets the activeDevices
    * Number of active devices within the tenant. Valid values -2147483648 to 2147483647
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
    * Number of active devices within the tenant. Valid values -2147483648 to 2147483647
    *
    * @param int $val The activeDevices
    *
    * @return UserExperienceAnalyticsBatteryHealthCapacityDetails
    */
    public function setActiveDevices($val)
    {
        $this->_propDict["activeDevices"] = intval($val);
        return $this;
    }

    /**
    * Gets the batteryCapacityFair
    * Number of devices whose battery maximum capacity is greater than 50% but lesser than 80%. Valid values -2147483648 to 2147483647
    *
    * @return int|null The batteryCapacityFair
    */
    public function getBatteryCapacityFair()
    {
        if (array_key_exists("batteryCapacityFair", $this->_propDict)) {
            return $this->_propDict["batteryCapacityFair"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryCapacityFair
    * Number of devices whose battery maximum capacity is greater than 50% but lesser than 80%. Valid values -2147483648 to 2147483647
    *
    * @param int $val The batteryCapacityFair
    *
    * @return UserExperienceAnalyticsBatteryHealthCapacityDetails
    */
    public function setBatteryCapacityFair($val)
    {
        $this->_propDict["batteryCapacityFair"] = intval($val);
        return $this;
    }

    /**
    * Gets the batteryCapacityGood
    * Number of devices whose battery maximum capacity is greater than 80%. Valid values -2147483648 to 2147483647
    *
    * @return int|null The batteryCapacityGood
    */
    public function getBatteryCapacityGood()
    {
        if (array_key_exists("batteryCapacityGood", $this->_propDict)) {
            return $this->_propDict["batteryCapacityGood"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryCapacityGood
    * Number of devices whose battery maximum capacity is greater than 80%. Valid values -2147483648 to 2147483647
    *
    * @param int $val The batteryCapacityGood
    *
    * @return UserExperienceAnalyticsBatteryHealthCapacityDetails
    */
    public function setBatteryCapacityGood($val)
    {
        $this->_propDict["batteryCapacityGood"] = intval($val);
        return $this;
    }

    /**
    * Gets the batteryCapacityPoor
    * Number of devices whose battery maximum capacity is lesser than 50%. Valid values -2147483648 to 2147483647
    *
    * @return int|null The batteryCapacityPoor
    */
    public function getBatteryCapacityPoor()
    {
        if (array_key_exists("batteryCapacityPoor", $this->_propDict)) {
            return $this->_propDict["batteryCapacityPoor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryCapacityPoor
    * Number of devices whose battery maximum capacity is lesser than 50%. Valid values -2147483648 to 2147483647
    *
    * @param int $val The batteryCapacityPoor
    *
    * @return UserExperienceAnalyticsBatteryHealthCapacityDetails
    */
    public function setBatteryCapacityPoor($val)
    {
        $this->_propDict["batteryCapacityPoor"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastRefreshedDateTime
    * Recorded date time of this capacity details instance.
    *
    * @return \DateTime|null The lastRefreshedDateTime
    */
    public function getLastRefreshedDateTime()
    {
        if (array_key_exists("lastRefreshedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRefreshedDateTime"], "\DateTime") || is_null($this->_propDict["lastRefreshedDateTime"])) {
                return $this->_propDict["lastRefreshedDateTime"];
            } else {
                $this->_propDict["lastRefreshedDateTime"] = new \DateTime($this->_propDict["lastRefreshedDateTime"]);
                return $this->_propDict["lastRefreshedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRefreshedDateTime
    * Recorded date time of this capacity details instance.
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return UserExperienceAnalyticsBatteryHealthCapacityDetails
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

}
