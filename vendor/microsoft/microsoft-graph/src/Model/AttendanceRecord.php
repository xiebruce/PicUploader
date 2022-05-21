<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttendanceRecord File
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
* AttendanceRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttendanceRecord extends Entity
{

     /**
     * Gets the attendanceIntervals
    * List of time periods between joining and leaving a meeting.
     *
     * @return array|null The attendanceIntervals
     */
    public function getAttendanceIntervals()
    {
        if (array_key_exists("attendanceIntervals", $this->_propDict)) {
           return $this->_propDict["attendanceIntervals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attendanceIntervals
    * List of time periods between joining and leaving a meeting.
    *
    * @param AttendanceInterval[] $val The attendanceIntervals
    *
    * @return AttendanceRecord
    */
    public function setAttendanceIntervals($val)
    {
        $this->_propDict["attendanceIntervals"] = $val;
        return $this;
    }

    /**
    * Gets the emailAddress
    * Email address of the user associated with this atttendance record.
    *
    * @return string|null The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailAddress
    * Email address of the user associated with this atttendance record.
    *
    * @param string $val The emailAddress
    *
    * @return AttendanceRecord
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the identity
    * Identity of the user associated with this atttendance record.
    *
    * @return Identity|null The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["identity"])) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new Identity($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    * Identity of the user associated with this atttendance record.
    *
    * @param Identity $val The identity
    *
    * @return AttendanceRecord
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
        return $this;
    }

    /**
    * Gets the role
    * Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer.
    *
    * @return string|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            return $this->_propDict["role"];
        } else {
            return null;
        }
    }

    /**
    * Sets the role
    * Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer.
    *
    * @param string $val The role
    *
    * @return AttendanceRecord
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }

    /**
    * Gets the totalAttendanceInSeconds
    * Total duration of the attendances in seconds.
    *
    * @return int|null The totalAttendanceInSeconds
    */
    public function getTotalAttendanceInSeconds()
    {
        if (array_key_exists("totalAttendanceInSeconds", $this->_propDict)) {
            return $this->_propDict["totalAttendanceInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalAttendanceInSeconds
    * Total duration of the attendances in seconds.
    *
    * @param int $val The totalAttendanceInSeconds
    *
    * @return AttendanceRecord
    */
    public function setTotalAttendanceInSeconds($val)
    {
        $this->_propDict["totalAttendanceInSeconds"] = intval($val);
        return $this;
    }

}
