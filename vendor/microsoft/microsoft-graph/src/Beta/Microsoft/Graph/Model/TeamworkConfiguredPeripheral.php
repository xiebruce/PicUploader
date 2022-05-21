<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkConfiguredPeripheral File
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
* TeamworkConfiguredPeripheral class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkConfiguredPeripheral extends Entity
{
    /**
    * Gets the isOptional
    * True if the current peripheral is optional. If set to false, this property is also used as part of the calculation of the health state for the device.
    *
    * @return bool|null The isOptional
    */
    public function getIsOptional()
    {
        if (array_key_exists("isOptional", $this->_propDict)) {
            return $this->_propDict["isOptional"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOptional
    * True if the current peripheral is optional. If set to false, this property is also used as part of the calculation of the health state for the device.
    *
    * @param bool $val The value of the isOptional
    *
    * @return TeamworkConfiguredPeripheral
    */
    public function setIsOptional($val)
    {
        $this->_propDict["isOptional"] = $val;
        return $this;
    }

    /**
    * Gets the peripheral
    *
    * @return TeamworkPeripheral|null The peripheral
    */
    public function getPeripheral()
    {
        if (array_key_exists("peripheral", $this->_propDict)) {
            if (is_a($this->_propDict["peripheral"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["peripheral"])) {
                return $this->_propDict["peripheral"];
            } else {
                $this->_propDict["peripheral"] = new TeamworkPeripheral($this->_propDict["peripheral"]);
                return $this->_propDict["peripheral"];
            }
        }
        return null;
    }

    /**
    * Sets the peripheral
    *
    * @param TeamworkPeripheral $val The value to assign to the peripheral
    *
    * @return TeamworkConfiguredPeripheral The TeamworkConfiguredPeripheral
    */
    public function setPeripheral($val)
    {
        $this->_propDict["peripheral"] = $val;
         return $this;
    }
}
