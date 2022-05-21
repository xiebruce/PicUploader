<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkPeripheralsHealth File
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
* TeamworkPeripheralsHealth class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkPeripheralsHealth extends Entity
{

    /**
    * Gets the communicationSpeakerHealth
    * The health details about the communication speaker.
    *
    * @return TeamworkPeripheralHealth|null The communicationSpeakerHealth
    */
    public function getCommunicationSpeakerHealth()
    {
        if (array_key_exists("communicationSpeakerHealth", $this->_propDict)) {
            if (is_a($this->_propDict["communicationSpeakerHealth"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralHealth") || is_null($this->_propDict["communicationSpeakerHealth"])) {
                return $this->_propDict["communicationSpeakerHealth"];
            } else {
                $this->_propDict["communicationSpeakerHealth"] = new TeamworkPeripheralHealth($this->_propDict["communicationSpeakerHealth"]);
                return $this->_propDict["communicationSpeakerHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the communicationSpeakerHealth
    * The health details about the communication speaker.
    *
    * @param TeamworkPeripheralHealth $val The value to assign to the communicationSpeakerHealth
    *
    * @return TeamworkPeripheralsHealth The TeamworkPeripheralsHealth
    */
    public function setCommunicationSpeakerHealth($val)
    {
        $this->_propDict["communicationSpeakerHealth"] = $val;
         return $this;
    }

    /**
    * Gets the contentCameraHealth
    * The health details about the content camera.
    *
    * @return TeamworkPeripheralHealth|null The contentCameraHealth
    */
    public function getContentCameraHealth()
    {
        if (array_key_exists("contentCameraHealth", $this->_propDict)) {
            if (is_a($this->_propDict["contentCameraHealth"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralHealth") || is_null($this->_propDict["contentCameraHealth"])) {
                return $this->_propDict["contentCameraHealth"];
            } else {
                $this->_propDict["contentCameraHealth"] = new TeamworkPeripheralHealth($this->_propDict["contentCameraHealth"]);
                return $this->_propDict["contentCameraHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the contentCameraHealth
    * The health details about the content camera.
    *
    * @param TeamworkPeripheralHealth $val The value to assign to the contentCameraHealth
    *
    * @return TeamworkPeripheralsHealth The TeamworkPeripheralsHealth
    */
    public function setContentCameraHealth($val)
    {
        $this->_propDict["contentCameraHealth"] = $val;
         return $this;
    }

    /**
    * Gets the displayHealthCollection
    * The health details about displays.
    *
    * @return TeamworkPeripheralHealth|null The displayHealthCollection
    */
    public function getDisplayHealthCollection()
    {
        if (array_key_exists("displayHealthCollection", $this->_propDict)) {
            if (is_a($this->_propDict["displayHealthCollection"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralHealth") || is_null($this->_propDict["displayHealthCollection"])) {
                return $this->_propDict["displayHealthCollection"];
            } else {
                $this->_propDict["displayHealthCollection"] = new TeamworkPeripheralHealth($this->_propDict["displayHealthCollection"]);
                return $this->_propDict["displayHealthCollection"];
            }
        }
        return null;
    }

    /**
    * Sets the displayHealthCollection
    * The health details about displays.
    *
    * @param TeamworkPeripheralHealth $val The value to assign to the displayHealthCollection
    *
    * @return TeamworkPeripheralsHealth The TeamworkPeripheralsHealth
    */
    public function setDisplayHealthCollection($val)
    {
        $this->_propDict["displayHealthCollection"] = $val;
         return $this;
    }

    /**
    * Gets the microphoneHealth
    * The health details about the microphone.
    *
    * @return TeamworkPeripheralHealth|null The microphoneHealth
    */
    public function getMicrophoneHealth()
    {
        if (array_key_exists("microphoneHealth", $this->_propDict)) {
            if (is_a($this->_propDict["microphoneHealth"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralHealth") || is_null($this->_propDict["microphoneHealth"])) {
                return $this->_propDict["microphoneHealth"];
            } else {
                $this->_propDict["microphoneHealth"] = new TeamworkPeripheralHealth($this->_propDict["microphoneHealth"]);
                return $this->_propDict["microphoneHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the microphoneHealth
    * The health details about the microphone.
    *
    * @param TeamworkPeripheralHealth $val The value to assign to the microphoneHealth
    *
    * @return TeamworkPeripheralsHealth The TeamworkPeripheralsHealth
    */
    public function setMicrophoneHealth($val)
    {
        $this->_propDict["microphoneHealth"] = $val;
         return $this;
    }

    /**
    * Gets the roomCameraHealth
    * The health details about the room camera.
    *
    * @return TeamworkPeripheralHealth|null The roomCameraHealth
    */
    public function getRoomCameraHealth()
    {
        if (array_key_exists("roomCameraHealth", $this->_propDict)) {
            if (is_a($this->_propDict["roomCameraHealth"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralHealth") || is_null($this->_propDict["roomCameraHealth"])) {
                return $this->_propDict["roomCameraHealth"];
            } else {
                $this->_propDict["roomCameraHealth"] = new TeamworkPeripheralHealth($this->_propDict["roomCameraHealth"]);
                return $this->_propDict["roomCameraHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the roomCameraHealth
    * The health details about the room camera.
    *
    * @param TeamworkPeripheralHealth $val The value to assign to the roomCameraHealth
    *
    * @return TeamworkPeripheralsHealth The TeamworkPeripheralsHealth
    */
    public function setRoomCameraHealth($val)
    {
        $this->_propDict["roomCameraHealth"] = $val;
         return $this;
    }

    /**
    * Gets the speakerHealth
    * The health details about the speaker.
    *
    * @return TeamworkPeripheralHealth|null The speakerHealth
    */
    public function getSpeakerHealth()
    {
        if (array_key_exists("speakerHealth", $this->_propDict)) {
            if (is_a($this->_propDict["speakerHealth"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralHealth") || is_null($this->_propDict["speakerHealth"])) {
                return $this->_propDict["speakerHealth"];
            } else {
                $this->_propDict["speakerHealth"] = new TeamworkPeripheralHealth($this->_propDict["speakerHealth"]);
                return $this->_propDict["speakerHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the speakerHealth
    * The health details about the speaker.
    *
    * @param TeamworkPeripheralHealth $val The value to assign to the speakerHealth
    *
    * @return TeamworkPeripheralsHealth The TeamworkPeripheralsHealth
    */
    public function setSpeakerHealth($val)
    {
        $this->_propDict["speakerHealth"] = $val;
         return $this;
    }
}
