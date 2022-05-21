<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallTranscriptEventMessageDetail File
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
* CallTranscriptEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallTranscriptEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.callTranscriptEventMessageDetail");
    }

    /**
    * Gets the callId
    * Unique identifier of the call.
    *
    * @return string|null The callId
    */
    public function getCallId()
    {
        if (array_key_exists("callId", $this->_propDict)) {
            return $this->_propDict["callId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callId
    * Unique identifier of the call.
    *
    * @param string $val The value of the callId
    *
    * @return CallTranscriptEventMessageDetail
    */
    public function setCallId($val)
    {
        $this->_propDict["callId"] = $val;
        return $this;
    }
    /**
    * Gets the callTranscriptICalUid
    * Unique identifier for a call transcript.
    *
    * @return string|null The callTranscriptICalUid
    */
    public function getCallTranscriptICalUid()
    {
        if (array_key_exists("callTranscriptICalUid", $this->_propDict)) {
            return $this->_propDict["callTranscriptICalUid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callTranscriptICalUid
    * Unique identifier for a call transcript.
    *
    * @param string $val The value of the callTranscriptICalUid
    *
    * @return CallTranscriptEventMessageDetail
    */
    public function setCallTranscriptICalUid($val)
    {
        $this->_propDict["callTranscriptICalUid"] = $val;
        return $this;
    }

    /**
    * Gets the meetingOrganizer
    * The organizer of the meeting.
    *
    * @return IdentitySet|null The meetingOrganizer
    */
    public function getMeetingOrganizer()
    {
        if (array_key_exists("meetingOrganizer", $this->_propDict)) {
            if (is_a($this->_propDict["meetingOrganizer"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["meetingOrganizer"])) {
                return $this->_propDict["meetingOrganizer"];
            } else {
                $this->_propDict["meetingOrganizer"] = new IdentitySet($this->_propDict["meetingOrganizer"]);
                return $this->_propDict["meetingOrganizer"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingOrganizer
    * The organizer of the meeting.
    *
    * @param IdentitySet $val The value to assign to the meetingOrganizer
    *
    * @return CallTranscriptEventMessageDetail The CallTranscriptEventMessageDetail
    */
    public function setMeetingOrganizer($val)
    {
        $this->_propDict["meetingOrganizer"] = $val;
         return $this;
    }
}
