<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AvailabilityItem File
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
* AvailabilityItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AvailabilityItem extends Entity
{

    /**
    * Gets the endDateTime
    * The end time of the time slot.
    *
    * @return DateTimeTimeZone|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new DateTimeTimeZone($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * The end time of the time slot.
    *
    * @param DateTimeTimeZone $val The value to assign to the endDateTime
    *
    * @return AvailabilityItem The AvailabilityItem
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the serviceId
    * Indicates the service ID in case of 1:n appointments. If the appointment is of type 1:n, this field will be present, otherwise, null.
    *
    * @return string|null The serviceId
    */
    public function getServiceId()
    {
        if (array_key_exists("serviceId", $this->_propDict)) {
            return $this->_propDict["serviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceId
    * Indicates the service ID in case of 1:n appointments. If the appointment is of type 1:n, this field will be present, otherwise, null.
    *
    * @param string $val The value of the serviceId
    *
    * @return AvailabilityItem
    */
    public function setServiceId($val)
    {
        $this->_propDict["serviceId"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The start time of the time slot.
    *
    * @return DateTimeTimeZone|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new DateTimeTimeZone($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The start time of the time slot.
    *
    * @param DateTimeTimeZone $val The value to assign to the startDateTime
    *
    * @return AvailabilityItem The AvailabilityItem
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
    *
    * @return BookingsAvailabilityStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\BookingsAvailabilityStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new BookingsAvailabilityStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
    *
    * @param BookingsAvailabilityStatus $val The value to assign to the status
    *
    * @return AvailabilityItem The AvailabilityItem
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
