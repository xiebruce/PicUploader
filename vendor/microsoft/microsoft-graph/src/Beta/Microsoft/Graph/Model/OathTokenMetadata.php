<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OathTokenMetadata File
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
* OathTokenMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OathTokenMetadata extends Entity
{
    /**
    * Gets the enabled
    *
    * @return bool|null The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    *
    * @param bool $val The value of the enabled
    *
    * @return OathTokenMetadata
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = $val;
        return $this;
    }
    /**
    * Gets the manufacturer
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
    *
    * @param string $val The value of the manufacturer
    *
    * @return OathTokenMetadata
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturerProperties
    *
    * @return KeyValue|null The manufacturerProperties
    */
    public function getManufacturerProperties()
    {
        if (array_key_exists("manufacturerProperties", $this->_propDict)) {
            if (is_a($this->_propDict["manufacturerProperties"], "\Beta\Microsoft\Graph\Model\KeyValue") || is_null($this->_propDict["manufacturerProperties"])) {
                return $this->_propDict["manufacturerProperties"];
            } else {
                $this->_propDict["manufacturerProperties"] = new KeyValue($this->_propDict["manufacturerProperties"]);
                return $this->_propDict["manufacturerProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the manufacturerProperties
    *
    * @param KeyValue $val The value to assign to the manufacturerProperties
    *
    * @return OathTokenMetadata The OathTokenMetadata
    */
    public function setManufacturerProperties($val)
    {
        $this->_propDict["manufacturerProperties"] = $val;
         return $this;
    }
    /**
    * Gets the serialNumber
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
    *
    * @param string $val The value of the serialNumber
    *
    * @return OathTokenMetadata
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    /**
    * Gets the tokenType
    *
    * @return string|null The tokenType
    */
    public function getTokenType()
    {
        if (array_key_exists("tokenType", $this->_propDict)) {
            return $this->_propDict["tokenType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenType
    *
    * @param string $val The value of the tokenType
    *
    * @return OathTokenMetadata
    */
    public function setTokenType($val)
    {
        $this->_propDict["tokenType"] = $val;
        return $this;
    }
}
