<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkPeripheralHealth File
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
* TeamworkPeripheralHealth class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkPeripheralHealth extends Entity
{

    /**
    * Gets the connection
    * The connected state and time since the peripheral device was connected.
    *
    * @return TeamworkConnection|null The connection
    */
    public function getConnection()
    {
        if (array_key_exists("connection", $this->_propDict)) {
            if (is_a($this->_propDict["connection"], "\Beta\Microsoft\Graph\Model\TeamworkConnection") || is_null($this->_propDict["connection"])) {
                return $this->_propDict["connection"];
            } else {
                $this->_propDict["connection"] = new TeamworkConnection($this->_propDict["connection"]);
                return $this->_propDict["connection"];
            }
        }
        return null;
    }

    /**
    * Sets the connection
    * The connected state and time since the peripheral device was connected.
    *
    * @param TeamworkConnection $val The value to assign to the connection
    *
    * @return TeamworkPeripheralHealth The TeamworkPeripheralHealth
    */
    public function setConnection($val)
    {
        $this->_propDict["connection"] = $val;
         return $this;
    }
    /**
    * Gets the isOptional
    * True if the peripheral is optional. Used for health computation.
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
    * True if the peripheral is optional. Used for health computation.
    *
    * @param bool $val The value of the isOptional
    *
    * @return TeamworkPeripheralHealth
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
    * @return TeamworkPeripheralHealth The TeamworkPeripheralHealth
    */
    public function setPeripheral($val)
    {
        $this->_propDict["peripheral"] = $val;
         return $this;
    }
}
