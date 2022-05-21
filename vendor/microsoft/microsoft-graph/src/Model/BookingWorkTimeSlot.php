<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingWorkTimeSlot File
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
* BookingWorkTimeSlot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingWorkTimeSlot extends Entity
{

    /**
    * Gets the endTime
    * The time of the day when work stops. For example, 17:00:00.0000000.
    *
    * @return TimeOfDay|null The endTime
    */
    public function getEndTime()
    {
        if (array_key_exists("endTime", $this->_propDict)) {
            if (is_a($this->_propDict["endTime"], "\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["endTime"])) {
                return $this->_propDict["endTime"];
            } else {
                $this->_propDict["endTime"] = new TimeOfDay($this->_propDict["endTime"]);
                return $this->_propDict["endTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endTime
    * The time of the day when work stops. For example, 17:00:00.0000000.
    *
    * @param TimeOfDay $val The value to assign to the endTime
    *
    * @return BookingWorkTimeSlot The BookingWorkTimeSlot
    */
    public function setEndTime($val)
    {
        $this->_propDict["endTime"] = $val;
         return $this;
    }

    /**
    * Gets the startTime
    * The time of the day when work starts. For example, 08:00:00.0000000.
    *
    * @return TimeOfDay|null The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["startTime"])) {
                return $this->_propDict["startTime"];
            } else {
                $this->_propDict["startTime"] = new TimeOfDay($this->_propDict["startTime"]);
                return $this->_propDict["startTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startTime
    * The time of the day when work starts. For example, 08:00:00.0000000.
    *
    * @param TimeOfDay $val The value to assign to the startTime
    *
    * @return BookingWorkTimeSlot The BookingWorkTimeSlot
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
         return $this;
    }
}
