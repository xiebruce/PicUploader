<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingSchedulingPolicy File
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
* BookingSchedulingPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingSchedulingPolicy extends Entity
{
    /**
    * Gets the allowStaffSelection
    * True if to allow customers to choose a specific person for the booking.
    *
    * @return bool|null The allowStaffSelection
    */
    public function getAllowStaffSelection()
    {
        if (array_key_exists("allowStaffSelection", $this->_propDict)) {
            return $this->_propDict["allowStaffSelection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowStaffSelection
    * True if to allow customers to choose a specific person for the booking.
    *
    * @param bool $val The value of the allowStaffSelection
    *
    * @return BookingSchedulingPolicy
    */
    public function setAllowStaffSelection($val)
    {
        $this->_propDict["allowStaffSelection"] = $val;
        return $this;
    }

    /**
    * Gets the maximumAdvance
    * Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format.
    *
    * @return \DateInterval|null The maximumAdvance
    */
    public function getMaximumAdvance()
    {
        if (array_key_exists("maximumAdvance", $this->_propDict)) {
            if (is_a($this->_propDict["maximumAdvance"], "\DateInterval") || is_null($this->_propDict["maximumAdvance"])) {
                return $this->_propDict["maximumAdvance"];
            } else {
                $this->_propDict["maximumAdvance"] = new \DateInterval($this->_propDict["maximumAdvance"]);
                return $this->_propDict["maximumAdvance"];
            }
        }
        return null;
    }

    /**
    * Sets the maximumAdvance
    * Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format.
    *
    * @param \DateInterval $val The value to assign to the maximumAdvance
    *
    * @return BookingSchedulingPolicy The BookingSchedulingPolicy
    */
    public function setMaximumAdvance($val)
    {
        $this->_propDict["maximumAdvance"] = $val;
         return $this;
    }

    /**
    * Gets the minimumLeadTime
    * The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
    *
    * @return \DateInterval|null The minimumLeadTime
    */
    public function getMinimumLeadTime()
    {
        if (array_key_exists("minimumLeadTime", $this->_propDict)) {
            if (is_a($this->_propDict["minimumLeadTime"], "\DateInterval") || is_null($this->_propDict["minimumLeadTime"])) {
                return $this->_propDict["minimumLeadTime"];
            } else {
                $this->_propDict["minimumLeadTime"] = new \DateInterval($this->_propDict["minimumLeadTime"]);
                return $this->_propDict["minimumLeadTime"];
            }
        }
        return null;
    }

    /**
    * Sets the minimumLeadTime
    * The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
    *
    * @param \DateInterval $val The value to assign to the minimumLeadTime
    *
    * @return BookingSchedulingPolicy The BookingSchedulingPolicy
    */
    public function setMinimumLeadTime($val)
    {
        $this->_propDict["minimumLeadTime"] = $val;
         return $this;
    }
    /**
    * Gets the sendConfirmationsToOwner
    * True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
    *
    * @return bool|null The sendConfirmationsToOwner
    */
    public function getSendConfirmationsToOwner()
    {
        if (array_key_exists("sendConfirmationsToOwner", $this->_propDict)) {
            return $this->_propDict["sendConfirmationsToOwner"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sendConfirmationsToOwner
    * True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
    *
    * @param bool $val The value of the sendConfirmationsToOwner
    *
    * @return BookingSchedulingPolicy
    */
    public function setSendConfirmationsToOwner($val)
    {
        $this->_propDict["sendConfirmationsToOwner"] = $val;
        return $this;
    }

    /**
    * Gets the timeSlotInterval
    * Duration of each time slot, denoted in ISO 8601 format.
    *
    * @return \DateInterval|null The timeSlotInterval
    */
    public function getTimeSlotInterval()
    {
        if (array_key_exists("timeSlotInterval", $this->_propDict)) {
            if (is_a($this->_propDict["timeSlotInterval"], "\DateInterval") || is_null($this->_propDict["timeSlotInterval"])) {
                return $this->_propDict["timeSlotInterval"];
            } else {
                $this->_propDict["timeSlotInterval"] = new \DateInterval($this->_propDict["timeSlotInterval"]);
                return $this->_propDict["timeSlotInterval"];
            }
        }
        return null;
    }

    /**
    * Sets the timeSlotInterval
    * Duration of each time slot, denoted in ISO 8601 format.
    *
    * @param \DateInterval $val The value to assign to the timeSlotInterval
    *
    * @return BookingSchedulingPolicy The BookingSchedulingPolicy
    */
    public function setTimeSlotInterval($val)
    {
        $this->_propDict["timeSlotInterval"] = $val;
         return $this;
    }
}
