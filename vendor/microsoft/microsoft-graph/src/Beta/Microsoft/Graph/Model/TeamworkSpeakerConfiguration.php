<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkSpeakerConfiguration File
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
* TeamworkSpeakerConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkSpeakerConfiguration extends Entity
{
    /**
    * Gets the isCommunicationSpeakerOptional
    * True if the communication speaker is optional. Used to compute the health state if the communication speaker is not optional.
    *
    * @return bool|null The isCommunicationSpeakerOptional
    */
    public function getIsCommunicationSpeakerOptional()
    {
        if (array_key_exists("isCommunicationSpeakerOptional", $this->_propDict)) {
            return $this->_propDict["isCommunicationSpeakerOptional"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCommunicationSpeakerOptional
    * True if the communication speaker is optional. Used to compute the health state if the communication speaker is not optional.
    *
    * @param bool $val The value of the isCommunicationSpeakerOptional
    *
    * @return TeamworkSpeakerConfiguration
    */
    public function setIsCommunicationSpeakerOptional($val)
    {
        $this->_propDict["isCommunicationSpeakerOptional"] = $val;
        return $this;
    }
    /**
    * Gets the isSpeakerOptional
    * True if the configured speaker is optional. Used to compute the health state if the speaker is not optional.
    *
    * @return bool|null The isSpeakerOptional
    */
    public function getIsSpeakerOptional()
    {
        if (array_key_exists("isSpeakerOptional", $this->_propDict)) {
            return $this->_propDict["isSpeakerOptional"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSpeakerOptional
    * True if the configured speaker is optional. Used to compute the health state if the speaker is not optional.
    *
    * @param bool $val The value of the isSpeakerOptional
    *
    * @return TeamworkSpeakerConfiguration
    */
    public function setIsSpeakerOptional($val)
    {
        $this->_propDict["isSpeakerOptional"] = $val;
        return $this;
    }

    /**
    * Gets the defaultCommunicationSpeaker
    *
    * @return TeamworkPeripheral|null The defaultCommunicationSpeaker
    */
    public function getDefaultCommunicationSpeaker()
    {
        if (array_key_exists("defaultCommunicationSpeaker", $this->_propDict)) {
            if (is_a($this->_propDict["defaultCommunicationSpeaker"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["defaultCommunicationSpeaker"])) {
                return $this->_propDict["defaultCommunicationSpeaker"];
            } else {
                $this->_propDict["defaultCommunicationSpeaker"] = new TeamworkPeripheral($this->_propDict["defaultCommunicationSpeaker"]);
                return $this->_propDict["defaultCommunicationSpeaker"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultCommunicationSpeaker
    *
    * @param TeamworkPeripheral $val The value to assign to the defaultCommunicationSpeaker
    *
    * @return TeamworkSpeakerConfiguration The TeamworkSpeakerConfiguration
    */
    public function setDefaultCommunicationSpeaker($val)
    {
        $this->_propDict["defaultCommunicationSpeaker"] = $val;
         return $this;
    }

    /**
    * Gets the defaultSpeaker
    *
    * @return TeamworkPeripheral|null The defaultSpeaker
    */
    public function getDefaultSpeaker()
    {
        if (array_key_exists("defaultSpeaker", $this->_propDict)) {
            if (is_a($this->_propDict["defaultSpeaker"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["defaultSpeaker"])) {
                return $this->_propDict["defaultSpeaker"];
            } else {
                $this->_propDict["defaultSpeaker"] = new TeamworkPeripheral($this->_propDict["defaultSpeaker"]);
                return $this->_propDict["defaultSpeaker"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultSpeaker
    *
    * @param TeamworkPeripheral $val The value to assign to the defaultSpeaker
    *
    * @return TeamworkSpeakerConfiguration The TeamworkSpeakerConfiguration
    */
    public function setDefaultSpeaker($val)
    {
        $this->_propDict["defaultSpeaker"] = $val;
         return $this;
    }

    /**
    * Gets the speakers
    *
    * @return TeamworkPeripheral|null The speakers
    */
    public function getSpeakers()
    {
        if (array_key_exists("speakers", $this->_propDict)) {
            if (is_a($this->_propDict["speakers"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["speakers"])) {
                return $this->_propDict["speakers"];
            } else {
                $this->_propDict["speakers"] = new TeamworkPeripheral($this->_propDict["speakers"]);
                return $this->_propDict["speakers"];
            }
        }
        return null;
    }

    /**
    * Sets the speakers
    *
    * @param TeamworkPeripheral $val The value to assign to the speakers
    *
    * @return TeamworkSpeakerConfiguration The TeamworkSpeakerConfiguration
    */
    public function setSpeakers($val)
    {
        $this->_propDict["speakers"] = $val;
         return $this;
    }
}
