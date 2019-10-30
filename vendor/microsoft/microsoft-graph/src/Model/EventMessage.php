<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventMessage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* EventMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EventMessage extends Message
{
    /**
    * Gets the meetingMessageType
    * The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined.
    *
    * @return MeetingMessageType The meetingMessageType
    */
    public function getMeetingMessageType()
    {
        if (array_key_exists("meetingMessageType", $this->_propDict)) {
            if (is_a($this->_propDict["meetingMessageType"], "Microsoft\Graph\Model\MeetingMessageType")) {
                return $this->_propDict["meetingMessageType"];
            } else {
                $this->_propDict["meetingMessageType"] = new MeetingMessageType($this->_propDict["meetingMessageType"]);
                return $this->_propDict["meetingMessageType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingMessageType
    * The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined.
    *
    * @param MeetingMessageType $val The meetingMessageType
    *
    * @return EventMessage
    */
    public function setMeetingMessageType($val)
    {
        $this->_propDict["meetingMessageType"] = $val;
        return $this;
    }
    
    /**
    * Gets the event
    * The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property.  Read-only.
    *
    * @return Event The event
    */
    public function getEvent()
    {
        if (array_key_exists("event", $this->_propDict)) {
            if (is_a($this->_propDict["event"], "Microsoft\Graph\Model\Event")) {
                return $this->_propDict["event"];
            } else {
                $this->_propDict["event"] = new Event($this->_propDict["event"]);
                return $this->_propDict["event"];
            }
        }
        return null;
    }
    
    /**
    * Sets the event
    * The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property.  Read-only.
    *
    * @param Event $val The event
    *
    * @return EventMessage
    */
    public function setEvent($val)
    {
        $this->_propDict["event"] = $val;
        return $this;
    }
    
}