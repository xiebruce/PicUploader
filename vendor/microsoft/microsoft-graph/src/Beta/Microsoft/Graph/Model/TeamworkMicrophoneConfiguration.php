<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkMicrophoneConfiguration File
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
* TeamworkMicrophoneConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkMicrophoneConfiguration extends Entity
{
    /**
    * Gets the isMicrophoneOptional
    * True if the configured microphone is optional. False if the microphone is not optional and the health state of the device should be computed.
    *
    * @return bool|null The isMicrophoneOptional
    */
    public function getIsMicrophoneOptional()
    {
        if (array_key_exists("isMicrophoneOptional", $this->_propDict)) {
            return $this->_propDict["isMicrophoneOptional"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMicrophoneOptional
    * True if the configured microphone is optional. False if the microphone is not optional and the health state of the device should be computed.
    *
    * @param bool $val The value of the isMicrophoneOptional
    *
    * @return TeamworkMicrophoneConfiguration
    */
    public function setIsMicrophoneOptional($val)
    {
        $this->_propDict["isMicrophoneOptional"] = $val;
        return $this;
    }

    /**
    * Gets the defaultMicrophone
    *
    * @return TeamworkPeripheral|null The defaultMicrophone
    */
    public function getDefaultMicrophone()
    {
        if (array_key_exists("defaultMicrophone", $this->_propDict)) {
            if (is_a($this->_propDict["defaultMicrophone"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["defaultMicrophone"])) {
                return $this->_propDict["defaultMicrophone"];
            } else {
                $this->_propDict["defaultMicrophone"] = new TeamworkPeripheral($this->_propDict["defaultMicrophone"]);
                return $this->_propDict["defaultMicrophone"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultMicrophone
    *
    * @param TeamworkPeripheral $val The value to assign to the defaultMicrophone
    *
    * @return TeamworkMicrophoneConfiguration The TeamworkMicrophoneConfiguration
    */
    public function setDefaultMicrophone($val)
    {
        $this->_propDict["defaultMicrophone"] = $val;
         return $this;
    }

    /**
    * Gets the microphones
    *
    * @return TeamworkPeripheral|null The microphones
    */
    public function getMicrophones()
    {
        if (array_key_exists("microphones", $this->_propDict)) {
            if (is_a($this->_propDict["microphones"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["microphones"])) {
                return $this->_propDict["microphones"];
            } else {
                $this->_propDict["microphones"] = new TeamworkPeripheral($this->_propDict["microphones"]);
                return $this->_propDict["microphones"];
            }
        }
        return null;
    }

    /**
    * Sets the microphones
    *
    * @param TeamworkPeripheral $val The value to assign to the microphones
    *
    * @return TeamworkMicrophoneConfiguration The TeamworkMicrophoneConfiguration
    */
    public function setMicrophones($val)
    {
        $this->_propDict["microphones"] = $val;
         return $this;
    }
}
