<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkHardwareDetail File
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
* TeamworkHardwareDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkHardwareDetail extends Entity
{
    /**
    * Gets the macAddresses
    * MAC address.
    *
    * @return string|null The macAddresses
    */
    public function getMacAddresses()
    {
        if (array_key_exists("macAddresses", $this->_propDict)) {
            return $this->_propDict["macAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the macAddresses
    * MAC address.
    *
    * @param string $val The value of the macAddresses
    *
    * @return TeamworkHardwareDetail
    */
    public function setMacAddresses($val)
    {
        $this->_propDict["macAddresses"] = $val;
        return $this;
    }
    /**
    * Gets the manufacturer
    * Device manufacturer.
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
    * Device manufacturer.
    *
    * @param string $val The value of the manufacturer
    *
    * @return TeamworkHardwareDetail
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    /**
    * Gets the model
    * Devie model.
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
    * Devie model.
    *
    * @param string $val The value of the model
    *
    * @return TeamworkHardwareDetail
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    /**
    * Gets the serialNumber
    * Device serial number.
    *
    * @return string|null The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serialNumber
    * Device serial number.
    *
    * @param string $val The value of the serialNumber
    *
    * @return TeamworkHardwareDetail
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    /**
    * Gets the uniqueId
    * The unique identifier for the device.
    *
    * @return string|null The uniqueId
    */
    public function getUniqueId()
    {
        if (array_key_exists("uniqueId", $this->_propDict)) {
            return $this->_propDict["uniqueId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uniqueId
    * The unique identifier for the device.
    *
    * @param string $val The value of the uniqueId
    *
    * @return TeamworkHardwareDetail
    */
    public function setUniqueId($val)
    {
        $this->_propDict["uniqueId"] = $val;
        return $this;
    }
}
