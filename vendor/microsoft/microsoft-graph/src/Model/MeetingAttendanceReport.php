<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingAttendanceReport File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* MeetingAttendanceReport class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingAttendanceReport extends Entity
{
    /**
    * Gets the meetingEndDateTime
    * UTC time when the meeting ended. Read-only.
    *
    * @return \DateTime|null The meetingEndDateTime
    */
    public function getMeetingEndDateTime()
    {
        if (array_key_exists("meetingEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["meetingEndDateTime"], "\DateTime") || is_null($this->_propDict["meetingEndDateTime"])) {
                return $this->_propDict["meetingEndDateTime"];
            } else {
                $this->_propDict["meetingEndDateTime"] = new \DateTime($this->_propDict["meetingEndDateTime"]);
                return $this->_propDict["meetingEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingEndDateTime
    * UTC time when the meeting ended. Read-only.
    *
    * @param \DateTime $val The meetingEndDateTime
    *
    * @return MeetingAttendanceReport
    */
    public function setMeetingEndDateTime($val)
    {
        $this->_propDict["meetingEndDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the meetingStartDateTime
    * UTC time when the meeting started. Read-only.
    *
    * @return \DateTime|null The meetingStartDateTime
    */
    public function getMeetingStartDateTime()
    {
        if (array_key_exists("meetingStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["meetingStartDateTime"], "\DateTime") || is_null($this->_propDict["meetingStartDateTime"])) {
                return $this->_propDict["meetingStartDateTime"];
            } else {
                $this->_propDict["meetingStartDateTime"] = new \DateTime($this->_propDict["meetingStartDateTime"]);
                return $this->_propDict["meetingStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingStartDateTime
    * UTC time when the meeting started. Read-only.
    *
    * @param \DateTime $val The meetingStartDateTime
    *
    * @return MeetingAttendanceReport
    */
    public function setMeetingStartDateTime($val)
    {
        $this->_propDict["meetingStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the totalParticipantCount
    * Total number of participants. Read-only.
    *
    * @return int|null The totalParticipantCount
    */
    public function getTotalParticipantCount()
    {
        if (array_key_exists("totalParticipantCount", $this->_propDict)) {
            return $this->_propDict["totalParticipantCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalParticipantCount
    * Total number of participants. Read-only.
    *
    * @param int $val The totalParticipantCount
    *
    * @return MeetingAttendanceReport
    */
    public function setTotalParticipantCount($val)
    {
        $this->_propDict["totalParticipantCount"] = intval($val);
        return $this;
    }


     /**
     * Gets the attendanceRecords
    * List of attendance records of an attendance report. Read-only.
     *
     * @return array|null The attendanceRecords
     */
    public function getAttendanceRecords()
    {
        if (array_key_exists("attendanceRecords", $this->_propDict)) {
           return $this->_propDict["attendanceRecords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attendanceRecords
    * List of attendance records of an attendance report. Read-only.
    *
    * @param AttendanceRecord[] $val The attendanceRecords
    *
    * @return MeetingAttendanceReport
    */
    public function setAttendanceRecords($val)
    {
        $this->_propDict["attendanceRecords"] = $val;
        return $this;
    }

}
