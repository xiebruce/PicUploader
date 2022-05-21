<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkHardwareConfiguration File
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
* TeamworkHardwareConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkHardwareConfiguration extends Entity
{
    /**
    * Gets the processorModel
    * The CPU model on the device.
    *
    * @return string|null The processorModel
    */
    public function getProcessorModel()
    {
        if (array_key_exists("processorModel", $this->_propDict)) {
            return $this->_propDict["processorModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processorModel
    * The CPU model on the device.
    *
    * @param string $val The value of the processorModel
    *
    * @return TeamworkHardwareConfiguration
    */
    public function setProcessorModel($val)
    {
        $this->_propDict["processorModel"] = $val;
        return $this;
    }

    /**
    * Gets the compute
    *
    * @return TeamworkPeripheral|null The compute
    */
    public function getCompute()
    {
        if (array_key_exists("compute", $this->_propDict)) {
            if (is_a($this->_propDict["compute"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["compute"])) {
                return $this->_propDict["compute"];
            } else {
                $this->_propDict["compute"] = new TeamworkPeripheral($this->_propDict["compute"]);
                return $this->_propDict["compute"];
            }
        }
        return null;
    }

    /**
    * Sets the compute
    *
    * @param TeamworkPeripheral $val The value to assign to the compute
    *
    * @return TeamworkHardwareConfiguration The TeamworkHardwareConfiguration
    */
    public function setCompute($val)
    {
        $this->_propDict["compute"] = $val;
         return $this;
    }

    /**
    * Gets the hdmiIngest
    *
    * @return TeamworkPeripheral|null The hdmiIngest
    */
    public function getHdmiIngest()
    {
        if (array_key_exists("hdmiIngest", $this->_propDict)) {
            if (is_a($this->_propDict["hdmiIngest"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["hdmiIngest"])) {
                return $this->_propDict["hdmiIngest"];
            } else {
                $this->_propDict["hdmiIngest"] = new TeamworkPeripheral($this->_propDict["hdmiIngest"]);
                return $this->_propDict["hdmiIngest"];
            }
        }
        return null;
    }

    /**
    * Sets the hdmiIngest
    *
    * @param TeamworkPeripheral $val The value to assign to the hdmiIngest
    *
    * @return TeamworkHardwareConfiguration The TeamworkHardwareConfiguration
    */
    public function setHdmiIngest($val)
    {
        $this->_propDict["hdmiIngest"] = $val;
         return $this;
    }
}
