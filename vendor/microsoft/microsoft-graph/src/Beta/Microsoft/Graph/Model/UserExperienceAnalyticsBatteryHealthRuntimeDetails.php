<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBatteryHealthRuntimeDetails File
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
* UserExperienceAnalyticsBatteryHealthRuntimeDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBatteryHealthRuntimeDetails extends Entity
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
    * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails
    */
    public function setActiveDevices($val)
    {
        $this->_propDict["activeDevices"] = intval($val);
        return $this;
    }

    /**
    * Gets the batteryRuntimeFair
    * Number of devices whose active runtime is greater than 3 hours but lesser than 5 hours. Valid values -2147483648 to 2147483647
    *
    * @return int|null The batteryRuntimeFair
    */
    public function getBatteryRuntimeFair()
    {
        if (array_key_exists("batteryRuntimeFair", $this->_propDict)) {
            return $this->_propDict["batteryRuntimeFair"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryRuntimeFair
    * Number of devices whose active runtime is greater than 3 hours but lesser than 5 hours. Valid values -2147483648 to 2147483647
    *
    * @param int $val The batteryRuntimeFair
    *
    * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails
    */
    public function setBatteryRuntimeFair($val)
    {
        $this->_propDict["batteryRuntimeFair"] = intval($val);
        return $this;
    }

    /**
    * Gets the batteryRuntimeGood
    * Number of devices  whose active runtime is greater than 5 hours. Valid values -2147483648 to 2147483647
    *
    * @return int|null The batteryRuntimeGood
    */
    public function getBatteryRuntimeGood()
    {
        if (array_key_exists("batteryRuntimeGood", $this->_propDict)) {
            return $this->_propDict["batteryRuntimeGood"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryRuntimeGood
    * Number of devices  whose active runtime is greater than 5 hours. Valid values -2147483648 to 2147483647
    *
    * @param int $val The batteryRuntimeGood
    *
    * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails
    */
    public function setBatteryRuntimeGood($val)
    {
        $this->_propDict["batteryRuntimeGood"] = intval($val);
        return $this;
    }

    /**
    * Gets the batteryRuntimePoor
    * Number of devices whose active runtime is lesser than 3 hours. Valid values -2147483648 to 2147483647
    *
    * @return int|null The batteryRuntimePoor
    */
    public function getBatteryRuntimePoor()
    {
        if (array_key_exists("batteryRuntimePoor", $this->_propDict)) {
            return $this->_propDict["batteryRuntimePoor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryRuntimePoor
    * Number of devices whose active runtime is lesser than 3 hours. Valid values -2147483648 to 2147483647
    *
    * @param int $val The batteryRuntimePoor
    *
    * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails
    */
    public function setBatteryRuntimePoor($val)
    {
        $this->_propDict["batteryRuntimePoor"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastRefreshedDateTime
    * Recorded date time of this runtime details instance.
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
    * Recorded date time of this runtime details instance.
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

}
