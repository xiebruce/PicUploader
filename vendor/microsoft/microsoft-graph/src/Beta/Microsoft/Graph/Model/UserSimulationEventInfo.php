<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSimulationEventInfo File
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
* UserSimulationEventInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSimulationEventInfo extends Entity
{
    /**
    * Gets the browser
    * Browser information from where the simulation event was initiated by a user in an attack simulation and training campaign.
    *
    * @return string|null The browser
    */
    public function getBrowser()
    {
        if (array_key_exists("browser", $this->_propDict)) {
            return $this->_propDict["browser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the browser
    * Browser information from where the simulation event was initiated by a user in an attack simulation and training campaign.
    *
    * @param string $val The value of the browser
    *
    * @return UserSimulationEventInfo
    */
    public function setBrowser($val)
    {
        $this->_propDict["browser"] = $val;
        return $this;
    }

    /**
    * Gets the eventDateTime
    * Date and time of the simulation event by a user in an attack simulation and training campaign.
    *
    * @return \DateTime|null The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime") || is_null($this->_propDict["eventDateTime"])) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventDateTime
    * Date and time of the simulation event by a user in an attack simulation and training campaign.
    *
    * @param \DateTime $val The value to assign to the eventDateTime
    *
    * @return UserSimulationEventInfo The UserSimulationEventInfo
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the eventName
    * Name of the simulation event by a user in an attack simulation and training campaign.
    *
    * @return string|null The eventName
    */
    public function getEventName()
    {
        if (array_key_exists("eventName", $this->_propDict)) {
            return $this->_propDict["eventName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventName
    * Name of the simulation event by a user in an attack simulation and training campaign.
    *
    * @param string $val The value of the eventName
    *
    * @return UserSimulationEventInfo
    */
    public function setEventName($val)
    {
        $this->_propDict["eventName"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    * IP address from where the simulation event was initiated by a user in an attack simulation and training campaign.
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * IP address from where the simulation event was initiated by a user in an attack simulation and training campaign.
    *
    * @param string $val The value of the ipAddress
    *
    * @return UserSimulationEventInfo
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the osPlatformDeviceDetails
    * The operating system, platform, and device details from where the simulation event was initiated by a user in an attack simulation and training campaign.
    *
    * @return string|null The osPlatformDeviceDetails
    */
    public function getOsPlatformDeviceDetails()
    {
        if (array_key_exists("osPlatformDeviceDetails", $this->_propDict)) {
            return $this->_propDict["osPlatformDeviceDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osPlatformDeviceDetails
    * The operating system, platform, and device details from where the simulation event was initiated by a user in an attack simulation and training campaign.
    *
    * @param string $val The value of the osPlatformDeviceDetails
    *
    * @return UserSimulationEventInfo
    */
    public function setOsPlatformDeviceDetails($val)
    {
        $this->_propDict["osPlatformDeviceDetails"] = $val;
        return $this;
    }
}
