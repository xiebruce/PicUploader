<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttendanceInterval File
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
* AttendanceInterval class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttendanceInterval extends Entity
{
    /**
    * Gets the durationInSeconds
    * Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime.
    *
    * @return int|null The durationInSeconds
    */
    public function getDurationInSeconds()
    {
        if (array_key_exists("durationInSeconds", $this->_propDict)) {
            return $this->_propDict["durationInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInSeconds
    * Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime.
    *
    * @param int $val The value of the durationInSeconds
    *
    * @return AttendanceInterval
    */
    public function setDurationInSeconds($val)
    {
        $this->_propDict["durationInSeconds"] = $val;
        return $this;
    }

    /**
    * Gets the joinDateTime
    * The time the attendee joined in UTC.
    *
    * @return \DateTime|null The joinDateTime
    */
    public function getJoinDateTime()
    {
        if (array_key_exists("joinDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["joinDateTime"], "\DateTime") || is_null($this->_propDict["joinDateTime"])) {
                return $this->_propDict["joinDateTime"];
            } else {
                $this->_propDict["joinDateTime"] = new \DateTime($this->_propDict["joinDateTime"]);
                return $this->_propDict["joinDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the joinDateTime
    * The time the attendee joined in UTC.
    *
    * @param \DateTime $val The value to assign to the joinDateTime
    *
    * @return AttendanceInterval The AttendanceInterval
    */
    public function setJoinDateTime($val)
    {
        $this->_propDict["joinDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the leaveDateTime
    * The time the attendee left in UTC.
    *
    * @return \DateTime|null The leaveDateTime
    */
    public function getLeaveDateTime()
    {
        if (array_key_exists("leaveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["leaveDateTime"], "\DateTime") || is_null($this->_propDict["leaveDateTime"])) {
                return $this->_propDict["leaveDateTime"];
            } else {
                $this->_propDict["leaveDateTime"] = new \DateTime($this->_propDict["leaveDateTime"]);
                return $this->_propDict["leaveDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the leaveDateTime
    * The time the attendee left in UTC.
    *
    * @param \DateTime $val The value to assign to the leaveDateTime
    *
    * @return AttendanceInterval The AttendanceInterval
    */
    public function setLeaveDateTime($val)
    {
        $this->_propDict["leaveDateTime"] = $val;
         return $this;
    }
}
