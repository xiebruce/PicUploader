<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkActivePeripherals File
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
* TeamworkActivePeripherals class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkActivePeripherals extends Entity
{

    /**
    * Gets the communicationSpeaker
    *
    * @return TeamworkPeripheral|null The communicationSpeaker
    */
    public function getCommunicationSpeaker()
    {
        if (array_key_exists("communicationSpeaker", $this->_propDict)) {
            if (is_a($this->_propDict["communicationSpeaker"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["communicationSpeaker"])) {
                return $this->_propDict["communicationSpeaker"];
            } else {
                $this->_propDict["communicationSpeaker"] = new TeamworkPeripheral($this->_propDict["communicationSpeaker"]);
                return $this->_propDict["communicationSpeaker"];
            }
        }
        return null;
    }

    /**
    * Sets the communicationSpeaker
    *
    * @param TeamworkPeripheral $val The value to assign to the communicationSpeaker
    *
    * @return TeamworkActivePeripherals The TeamworkActivePeripherals
    */
    public function setCommunicationSpeaker($val)
    {
        $this->_propDict["communicationSpeaker"] = $val;
         return $this;
    }

    /**
    * Gets the contentCamera
    *
    * @return TeamworkPeripheral|null The contentCamera
    */
    public function getContentCamera()
    {
        if (array_key_exists("contentCamera", $this->_propDict)) {
            if (is_a($this->_propDict["contentCamera"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["contentCamera"])) {
                return $this->_propDict["contentCamera"];
            } else {
                $this->_propDict["contentCamera"] = new TeamworkPeripheral($this->_propDict["contentCamera"]);
                return $this->_propDict["contentCamera"];
            }
        }
        return null;
    }

    /**
    * Sets the contentCamera
    *
    * @param TeamworkPeripheral $val The value to assign to the contentCamera
    *
    * @return TeamworkActivePeripherals The TeamworkActivePeripherals
    */
    public function setContentCamera($val)
    {
        $this->_propDict["contentCamera"] = $val;
         return $this;
    }

    /**
    * Gets the microphone
    *
    * @return TeamworkPeripheral|null The microphone
    */
    public function getMicrophone()
    {
        if (array_key_exists("microphone", $this->_propDict)) {
            if (is_a($this->_propDict["microphone"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["microphone"])) {
                return $this->_propDict["microphone"];
            } else {
                $this->_propDict["microphone"] = new TeamworkPeripheral($this->_propDict["microphone"]);
                return $this->_propDict["microphone"];
            }
        }
        return null;
    }

    /**
    * Sets the microphone
    *
    * @param TeamworkPeripheral $val The value to assign to the microphone
    *
    * @return TeamworkActivePeripherals The TeamworkActivePeripherals
    */
    public function setMicrophone($val)
    {
        $this->_propDict["microphone"] = $val;
         return $this;
    }

    /**
    * Gets the roomCamera
    *
    * @return TeamworkPeripheral|null The roomCamera
    */
    public function getRoomCamera()
    {
        if (array_key_exists("roomCamera", $this->_propDict)) {
            if (is_a($this->_propDict["roomCamera"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["roomCamera"])) {
                return $this->_propDict["roomCamera"];
            } else {
                $this->_propDict["roomCamera"] = new TeamworkPeripheral($this->_propDict["roomCamera"]);
                return $this->_propDict["roomCamera"];
            }
        }
        return null;
    }

    /**
    * Sets the roomCamera
    *
    * @param TeamworkPeripheral $val The value to assign to the roomCamera
    *
    * @return TeamworkActivePeripherals The TeamworkActivePeripherals
    */
    public function setRoomCamera($val)
    {
        $this->_propDict["roomCamera"] = $val;
         return $this;
    }

    /**
    * Gets the speaker
    *
    * @return TeamworkPeripheral|null The speaker
    */
    public function getSpeaker()
    {
        if (array_key_exists("speaker", $this->_propDict)) {
            if (is_a($this->_propDict["speaker"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["speaker"])) {
                return $this->_propDict["speaker"];
            } else {
                $this->_propDict["speaker"] = new TeamworkPeripheral($this->_propDict["speaker"]);
                return $this->_propDict["speaker"];
            }
        }
        return null;
    }

    /**
    * Sets the speaker
    *
    * @param TeamworkPeripheral $val The value to assign to the speaker
    *
    * @return TeamworkActivePeripherals The TeamworkActivePeripherals
    */
    public function setSpeaker($val)
    {
        $this->_propDict["speaker"] = $val;
         return $this;
    }
}
