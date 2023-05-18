<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Participant File
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
* Participant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Participant extends Entity
{
    /**
    * Gets the info
    * Information about the participant.
    *
    * @return ParticipantInfo|null The info
    */
    public function getInfo()
    {
        if (array_key_exists("info", $this->_propDict)) {
            if (is_a($this->_propDict["info"], "\Beta\Microsoft\Graph\Model\ParticipantInfo") || is_null($this->_propDict["info"])) {
                return $this->_propDict["info"];
            } else {
                $this->_propDict["info"] = new ParticipantInfo($this->_propDict["info"]);
                return $this->_propDict["info"];
            }
        }
        return null;
    }

    /**
    * Sets the info
    * Information about the participant.
    *
    * @param ParticipantInfo $val The info
    *
    * @return Participant
    */
    public function setInfo($val)
    {
        $this->_propDict["info"] = $val;
        return $this;
    }

    /**
    * Gets the isIdentityAnonymized
    *
    * @return bool|null The isIdentityAnonymized
    */
    public function getIsIdentityAnonymized()
    {
        if (array_key_exists("isIdentityAnonymized", $this->_propDict)) {
            return $this->_propDict["isIdentityAnonymized"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isIdentityAnonymized
    *
    * @param bool $val The isIdentityAnonymized
    *
    * @return Participant
    */
    public function setIsIdentityAnonymized($val)
    {
        $this->_propDict["isIdentityAnonymized"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isInLobby
    * true if the participant is in lobby.
    *
    * @return bool|null The isInLobby
    */
    public function getIsInLobby()
    {
        if (array_key_exists("isInLobby", $this->_propDict)) {
            return $this->_propDict["isInLobby"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInLobby
    * true if the participant is in lobby.
    *
    * @param bool $val The isInLobby
    *
    * @return Participant
    */
    public function setIsInLobby($val)
    {
        $this->_propDict["isInLobby"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMuted
    * true if the participant is muted (client or server muted).
    *
    * @return bool|null The isMuted
    */
    public function getIsMuted()
    {
        if (array_key_exists("isMuted", $this->_propDict)) {
            return $this->_propDict["isMuted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMuted
    * true if the participant is muted (client or server muted).
    *
    * @param bool $val The isMuted
    *
    * @return Participant
    */
    public function setIsMuted($val)
    {
        $this->_propDict["isMuted"] = boolval($val);
        return $this;
    }


     /**
     * Gets the mediaStreams
    * The list of media streams.
     *
     * @return array|null The mediaStreams
     */
    public function getMediaStreams()
    {
        if (array_key_exists("mediaStreams", $this->_propDict)) {
           return $this->_propDict["mediaStreams"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaStreams
    * The list of media streams.
    *
    * @param MediaStream[] $val The mediaStreams
    *
    * @return Participant
    */
    public function setMediaStreams($val)
    {
        $this->_propDict["mediaStreams"] = $val;
        return $this;
    }

    /**
    * Gets the metadata
    * A blob of data provided by the participant in the roster.
    *
    * @return string|null The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
            return $this->_propDict["metadata"];
        } else {
            return null;
        }
    }

    /**
    * Sets the metadata
    * A blob of data provided by the participant in the roster.
    *
    * @param string $val The metadata
    *
    * @return Participant
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
        return $this;
    }

    /**
    * Gets the recordingInfo
    * Information on whether the participant has recording capability.
    *
    * @return RecordingInfo|null The recordingInfo
    */
    public function getRecordingInfo()
    {
        if (array_key_exists("recordingInfo", $this->_propDict)) {
            if (is_a($this->_propDict["recordingInfo"], "\Beta\Microsoft\Graph\Model\RecordingInfo") || is_null($this->_propDict["recordingInfo"])) {
                return $this->_propDict["recordingInfo"];
            } else {
                $this->_propDict["recordingInfo"] = new RecordingInfo($this->_propDict["recordingInfo"]);
                return $this->_propDict["recordingInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the recordingInfo
    * Information on whether the participant has recording capability.
    *
    * @param RecordingInfo $val The recordingInfo
    *
    * @return Participant
    */
    public function setRecordingInfo($val)
    {
        $this->_propDict["recordingInfo"] = $val;
        return $this;
    }

    /**
    * Gets the removedState
    * Indicates the reason why the participant was removed from the roster.
    *
    * @return RemovedState|null The removedState
    */
    public function getRemovedState()
    {
        if (array_key_exists("removedState", $this->_propDict)) {
            if (is_a($this->_propDict["removedState"], "\Beta\Microsoft\Graph\Model\RemovedState") || is_null($this->_propDict["removedState"])) {
                return $this->_propDict["removedState"];
            } else {
                $this->_propDict["removedState"] = new RemovedState($this->_propDict["removedState"]);
                return $this->_propDict["removedState"];
            }
        }
        return null;
    }

    /**
    * Sets the removedState
    * Indicates the reason why the participant was removed from the roster.
    *
    * @param RemovedState $val The removedState
    *
    * @return Participant
    */
    public function setRemovedState($val)
    {
        $this->_propDict["removedState"] = $val;
        return $this;
    }

    /**
    * Gets the restrictedExperience
    * Indicates the reason or reasons why media content from this participant is restricted.
    *
    * @return OnlineMeetingRestricted|null The restrictedExperience
    */
    public function getRestrictedExperience()
    {
        if (array_key_exists("restrictedExperience", $this->_propDict)) {
            if (is_a($this->_propDict["restrictedExperience"], "\Beta\Microsoft\Graph\Model\OnlineMeetingRestricted") || is_null($this->_propDict["restrictedExperience"])) {
                return $this->_propDict["restrictedExperience"];
            } else {
                $this->_propDict["restrictedExperience"] = new OnlineMeetingRestricted($this->_propDict["restrictedExperience"]);
                return $this->_propDict["restrictedExperience"];
            }
        }
        return null;
    }

    /**
    * Sets the restrictedExperience
    * Indicates the reason or reasons why media content from this participant is restricted.
    *
    * @param OnlineMeetingRestricted $val The restrictedExperience
    *
    * @return Participant
    */
    public function setRestrictedExperience($val)
    {
        $this->_propDict["restrictedExperience"] = $val;
        return $this;
    }

    /**
    * Gets the rosterSequenceNumber
    * Indicates the roster sequence number the participant was last updated in.
    *
    * @return int|null The rosterSequenceNumber
    */
    public function getRosterSequenceNumber()
    {
        if (array_key_exists("rosterSequenceNumber", $this->_propDict)) {
            return $this->_propDict["rosterSequenceNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rosterSequenceNumber
    * Indicates the roster sequence number the participant was last updated in.
    *
    * @param int $val The rosterSequenceNumber
    *
    * @return Participant
    */
    public function setRosterSequenceNumber($val)
    {
        $this->_propDict["rosterSequenceNumber"] = intval($val);
        return $this;
    }

}
