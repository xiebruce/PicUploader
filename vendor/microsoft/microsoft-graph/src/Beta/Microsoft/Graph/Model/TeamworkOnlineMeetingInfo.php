<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkOnlineMeetingInfo File
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
* TeamworkOnlineMeetingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkOnlineMeetingInfo extends Entity
{
    /**
    * Gets the calendarEventId
    * The identifier of the calendar event associated with the meeting.
    *
    * @return string|null The calendarEventId
    */
    public function getCalendarEventId()
    {
        if (array_key_exists("calendarEventId", $this->_propDict)) {
            return $this->_propDict["calendarEventId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calendarEventId
    * The identifier of the calendar event associated with the meeting.
    *
    * @param string $val The value of the calendarEventId
    *
    * @return TeamworkOnlineMeetingInfo
    */
    public function setCalendarEventId($val)
    {
        $this->_propDict["calendarEventId"] = $val;
        return $this;
    }
    /**
    * Gets the joinWebUrl
    * The URL which can be clicked on to join or uniquely identify the meeting.
    *
    * @return string|null The joinWebUrl
    */
    public function getJoinWebUrl()
    {
        if (array_key_exists("joinWebUrl", $this->_propDict)) {
            return $this->_propDict["joinWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the joinWebUrl
    * The URL which can be clicked on to join or uniquely identify the meeting.
    *
    * @param string $val The value of the joinWebUrl
    *
    * @return TeamworkOnlineMeetingInfo
    */
    public function setJoinWebUrl($val)
    {
        $this->_propDict["joinWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the organizer
    * The organizer of the meeting.
    *
    * @return TeamworkUserIdentity|null The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict)) {
            if (is_a($this->_propDict["organizer"], "\Beta\Microsoft\Graph\Model\TeamworkUserIdentity") || is_null($this->_propDict["organizer"])) {
                return $this->_propDict["organizer"];
            } else {
                $this->_propDict["organizer"] = new TeamworkUserIdentity($this->_propDict["organizer"]);
                return $this->_propDict["organizer"];
            }
        }
        return null;
    }

    /**
    * Sets the organizer
    * The organizer of the meeting.
    *
    * @param TeamworkUserIdentity $val The value to assign to the organizer
    *
    * @return TeamworkOnlineMeetingInfo The TeamworkOnlineMeetingInfo
    */
    public function setOrganizer($val)
    {
        $this->_propDict["organizer"] = $val;
         return $this;
    }
}
