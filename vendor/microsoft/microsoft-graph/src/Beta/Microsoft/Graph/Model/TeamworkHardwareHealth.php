<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkHardwareHealth File
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
* TeamworkHardwareHealth class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkHardwareHealth extends Entity
{

    /**
    * Gets the computeHealth
    * The system health details for a teamworkDevice.
    *
    * @return TeamworkPeripheralHealth|null The computeHealth
    */
    public function getComputeHealth()
    {
        if (array_key_exists("computeHealth", $this->_propDict)) {
            if (is_a($this->_propDict["computeHealth"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralHealth") || is_null($this->_propDict["computeHealth"])) {
                return $this->_propDict["computeHealth"];
            } else {
                $this->_propDict["computeHealth"] = new TeamworkPeripheralHealth($this->_propDict["computeHealth"]);
                return $this->_propDict["computeHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the computeHealth
    * The system health details for a teamworkDevice.
    *
    * @param TeamworkPeripheralHealth $val The value to assign to the computeHealth
    *
    * @return TeamworkHardwareHealth The TeamworkHardwareHealth
    */
    public function setComputeHealth($val)
    {
        $this->_propDict["computeHealth"] = $val;
         return $this;
    }

    /**
    * Gets the hdmiIngestHealth
    * The health details about the HDMI ingest of a device.
    *
    * @return TeamworkPeripheralHealth|null The hdmiIngestHealth
    */
    public function getHdmiIngestHealth()
    {
        if (array_key_exists("hdmiIngestHealth", $this->_propDict)) {
            if (is_a($this->_propDict["hdmiIngestHealth"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralHealth") || is_null($this->_propDict["hdmiIngestHealth"])) {
                return $this->_propDict["hdmiIngestHealth"];
            } else {
                $this->_propDict["hdmiIngestHealth"] = new TeamworkPeripheralHealth($this->_propDict["hdmiIngestHealth"]);
                return $this->_propDict["hdmiIngestHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the hdmiIngestHealth
    * The health details about the HDMI ingest of a device.
    *
    * @param TeamworkPeripheralHealth $val The value to assign to the hdmiIngestHealth
    *
    * @return TeamworkHardwareHealth The TeamworkHardwareHealth
    */
    public function setHdmiIngestHealth($val)
    {
        $this->_propDict["hdmiIngestHealth"] = $val;
         return $this;
    }
}
