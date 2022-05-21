<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingAppointment File
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
* BookingAppointment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingAppointment extends Entity
{
    /**
    * Gets the additionalInformation
    * Additional information that is sent to the customer when an appointment is confirmed.
    *
    * @return string|null The additionalInformation
    */
    public function getAdditionalInformation()
    {
        if (array_key_exists("additionalInformation", $this->_propDict)) {
            return $this->_propDict["additionalInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalInformation
    * Additional information that is sent to the customer when an appointment is confirmed.
    *
    * @param string $val The additionalInformation
    *
    * @return BookingAppointment
    */
    public function setAdditionalInformation($val)
    {
        $this->_propDict["additionalInformation"] = $val;
        return $this;
    }


     /**
     * Gets the customers
    * It lists down the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     *
     * @return array|null The customers
     */
    public function getCustomers()
    {
        if (array_key_exists("customers", $this->_propDict)) {
           return $this->_propDict["customers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customers
    * It lists down the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
    *
    * @param BookingCustomerInformationBase[] $val The customers
    *
    * @return BookingAppointment
    */
    public function setCustomers($val)
    {
        $this->_propDict["customers"] = $val;
        return $this;
    }

    /**
    * Gets the customerTimeZone
    * The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
    *
    * @return string|null The customerTimeZone
    */
    public function getCustomerTimeZone()
    {
        if (array_key_exists("customerTimeZone", $this->_propDict)) {
            return $this->_propDict["customerTimeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customerTimeZone
    * The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
    *
    * @param string $val The customerTimeZone
    *
    * @return BookingAppointment
    */
    public function setCustomerTimeZone($val)
    {
        $this->_propDict["customerTimeZone"] = $val;
        return $this;
    }

    /**
    * Gets the duration
    * The length of the appointment, denoted in ISO8601 format.
    *
    * @return \DateInterval|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "\DateInterval") || is_null($this->_propDict["duration"])) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new \DateInterval($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }

    /**
    * Sets the duration
    * The length of the appointment, denoted in ISO8601 format.
    *
    * @param \DateInterval $val The duration
    *
    * @return BookingAppointment
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * The date, time, and time zone that the appointment ends.
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
    * The date, time, and time zone that the appointment ends.
    *
    * @param DateTimeTimeZone $val The endDateTime
    *
    * @return BookingAppointment
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the filledAttendeesCount
    * The current number of customers in the appointment.
    *
    * @return int|null The filledAttendeesCount
    */
    public function getFilledAttendeesCount()
    {
        if (array_key_exists("filledAttendeesCount", $this->_propDict)) {
            return $this->_propDict["filledAttendeesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filledAttendeesCount
    * The current number of customers in the appointment.
    *
    * @param int $val The filledAttendeesCount
    *
    * @return BookingAppointment
    */
    public function setFilledAttendeesCount($val)
    {
        $this->_propDict["filledAttendeesCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the isLocationOnline
    * True indicates that the appointment will be held online. Default value is false.
    *
    * @return bool|null The isLocationOnline
    */
    public function getIsLocationOnline()
    {
        if (array_key_exists("isLocationOnline", $this->_propDict)) {
            return $this->_propDict["isLocationOnline"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLocationOnline
    * True indicates that the appointment will be held online. Default value is false.
    *
    * @param bool $val The isLocationOnline
    *
    * @return BookingAppointment
    */
    public function setIsLocationOnline($val)
    {
        $this->_propDict["isLocationOnline"] = boolval($val);
        return $this;
    }

    /**
    * Gets the joinWebUrl
    * The URL of the online meeting for the appointment.
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
    * The URL of the online meeting for the appointment.
    *
    * @param string $val The joinWebUrl
    *
    * @return BookingAppointment
    */
    public function setJoinWebUrl($val)
    {
        $this->_propDict["joinWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the maximumAttendeesCount
    * The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
    *
    * @return int|null The maximumAttendeesCount
    */
    public function getMaximumAttendeesCount()
    {
        if (array_key_exists("maximumAttendeesCount", $this->_propDict)) {
            return $this->_propDict["maximumAttendeesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumAttendeesCount
    * The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
    *
    * @param int $val The maximumAttendeesCount
    *
    * @return BookingAppointment
    */
    public function setMaximumAttendeesCount($val)
    {
        $this->_propDict["maximumAttendeesCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the optOutOfCustomerEmail
    * True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
    *
    * @return bool|null The optOutOfCustomerEmail
    */
    public function getOptOutOfCustomerEmail()
    {
        if (array_key_exists("optOutOfCustomerEmail", $this->_propDict)) {
            return $this->_propDict["optOutOfCustomerEmail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the optOutOfCustomerEmail
    * True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
    *
    * @param bool $val The optOutOfCustomerEmail
    *
    * @return BookingAppointment
    */
    public function setOptOutOfCustomerEmail($val)
    {
        $this->_propDict["optOutOfCustomerEmail"] = boolval($val);
        return $this;
    }

    /**
    * Gets the postBuffer
    * The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
    *
    * @return \DateInterval|null The postBuffer
    */
    public function getPostBuffer()
    {
        if (array_key_exists("postBuffer", $this->_propDict)) {
            if (is_a($this->_propDict["postBuffer"], "\DateInterval") || is_null($this->_propDict["postBuffer"])) {
                return $this->_propDict["postBuffer"];
            } else {
                $this->_propDict["postBuffer"] = new \DateInterval($this->_propDict["postBuffer"]);
                return $this->_propDict["postBuffer"];
            }
        }
        return null;
    }

    /**
    * Sets the postBuffer
    * The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
    *
    * @param \DateInterval $val The postBuffer
    *
    * @return BookingAppointment
    */
    public function setPostBuffer($val)
    {
        $this->_propDict["postBuffer"] = $val;
        return $this;
    }

    /**
    * Gets the preBuffer
    * The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
    *
    * @return \DateInterval|null The preBuffer
    */
    public function getPreBuffer()
    {
        if (array_key_exists("preBuffer", $this->_propDict)) {
            if (is_a($this->_propDict["preBuffer"], "\DateInterval") || is_null($this->_propDict["preBuffer"])) {
                return $this->_propDict["preBuffer"];
            } else {
                $this->_propDict["preBuffer"] = new \DateInterval($this->_propDict["preBuffer"]);
                return $this->_propDict["preBuffer"];
            }
        }
        return null;
    }

    /**
    * Sets the preBuffer
    * The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
    *
    * @param \DateInterval $val The preBuffer
    *
    * @return BookingAppointment
    */
    public function setPreBuffer($val)
    {
        $this->_propDict["preBuffer"] = $val;
        return $this;
    }

    /**
    * Gets the price
    * The regular price for an appointment for the specified bookingService.
    *
    * @return float|null The price
    */
    public function getPrice()
    {
        if (array_key_exists("price", $this->_propDict)) {
            return $this->_propDict["price"];
        } else {
            return null;
        }
    }

    /**
    * Sets the price
    * The regular price for an appointment for the specified bookingService.
    *
    * @param float $val The price
    *
    * @return BookingAppointment
    */
    public function setPrice($val)
    {
        $this->_propDict["price"] = floatval($val);
        return $this;
    }

    /**
    * Gets the priceType
    * A setting to provide flexibility for the pricing structure of services. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
    *
    * @return BookingPriceType|null The priceType
    */
    public function getPriceType()
    {
        if (array_key_exists("priceType", $this->_propDict)) {
            if (is_a($this->_propDict["priceType"], "\Microsoft\Graph\Model\BookingPriceType") || is_null($this->_propDict["priceType"])) {
                return $this->_propDict["priceType"];
            } else {
                $this->_propDict["priceType"] = new BookingPriceType($this->_propDict["priceType"]);
                return $this->_propDict["priceType"];
            }
        }
        return null;
    }

    /**
    * Sets the priceType
    * A setting to provide flexibility for the pricing structure of services. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
    *
    * @param BookingPriceType $val The priceType
    *
    * @return BookingAppointment
    */
    public function setPriceType($val)
    {
        $this->_propDict["priceType"] = $val;
        return $this;
    }


     /**
     * Gets the reminders
    * The value of this property is only available when reading an individual booking appointment by id.
     *
     * @return array|null The reminders
     */
    public function getReminders()
    {
        if (array_key_exists("reminders", $this->_propDict)) {
           return $this->_propDict["reminders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reminders
    * The value of this property is only available when reading an individual booking appointment by id.
    *
    * @param BookingReminder[] $val The reminders
    *
    * @return BookingAppointment
    */
    public function setReminders($val)
    {
        $this->_propDict["reminders"] = $val;
        return $this;
    }

    /**
    * Gets the selfServiceAppointmentId
    * An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
    *
    * @return string|null The selfServiceAppointmentId
    */
    public function getSelfServiceAppointmentId()
    {
        if (array_key_exists("selfServiceAppointmentId", $this->_propDict)) {
            return $this->_propDict["selfServiceAppointmentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the selfServiceAppointmentId
    * An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
    *
    * @param string $val The selfServiceAppointmentId
    *
    * @return BookingAppointment
    */
    public function setSelfServiceAppointmentId($val)
    {
        $this->_propDict["selfServiceAppointmentId"] = $val;
        return $this;
    }

    /**
    * Gets the serviceId
    * The ID of the bookingService associated with this appointment.
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
    * The ID of the bookingService associated with this appointment.
    *
    * @param string $val The serviceId
    *
    * @return BookingAppointment
    */
    public function setServiceId($val)
    {
        $this->_propDict["serviceId"] = $val;
        return $this;
    }

    /**
    * Gets the serviceLocation
    * The location where the service is delivered.
    *
    * @return Location|null The serviceLocation
    */
    public function getServiceLocation()
    {
        if (array_key_exists("serviceLocation", $this->_propDict)) {
            if (is_a($this->_propDict["serviceLocation"], "\Microsoft\Graph\Model\Location") || is_null($this->_propDict["serviceLocation"])) {
                return $this->_propDict["serviceLocation"];
            } else {
                $this->_propDict["serviceLocation"] = new Location($this->_propDict["serviceLocation"]);
                return $this->_propDict["serviceLocation"];
            }
        }
        return null;
    }

    /**
    * Sets the serviceLocation
    * The location where the service is delivered.
    *
    * @param Location $val The serviceLocation
    *
    * @return BookingAppointment
    */
    public function setServiceLocation($val)
    {
        $this->_propDict["serviceLocation"] = $val;
        return $this;
    }

    /**
    * Gets the serviceName
    * This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the service id.
    *
    * @return string|null The serviceName
    */
    public function getServiceName()
    {
        if (array_key_exists("serviceName", $this->_propDict)) {
            return $this->_propDict["serviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceName
    * This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the service id.
    *
    * @param string $val The serviceName
    *
    * @return BookingAppointment
    */
    public function setServiceName($val)
    {
        $this->_propDict["serviceName"] = $val;
        return $this;
    }

    /**
    * Gets the serviceNotes
    * The value of this property is only available when reading an individual booking appointment by id.
    *
    * @return string|null The serviceNotes
    */
    public function getServiceNotes()
    {
        if (array_key_exists("serviceNotes", $this->_propDict)) {
            return $this->_propDict["serviceNotes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceNotes
    * The value of this property is only available when reading an individual booking appointment by id.
    *
    * @param string $val The serviceNotes
    *
    * @return BookingAppointment
    */
    public function setServiceNotes($val)
    {
        $this->_propDict["serviceNotes"] = $val;
        return $this;
    }

    /**
    * Gets the smsNotificationsEnabled
    * True indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
    *
    * @return bool|null The smsNotificationsEnabled
    */
    public function getSmsNotificationsEnabled()
    {
        if (array_key_exists("smsNotificationsEnabled", $this->_propDict)) {
            return $this->_propDict["smsNotificationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smsNotificationsEnabled
    * True indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
    *
    * @param bool $val The smsNotificationsEnabled
    *
    * @return BookingAppointment
    */
    public function setSmsNotificationsEnabled($val)
    {
        $this->_propDict["smsNotificationsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the staffMemberIds
    * The ID of each bookingStaffMember who is scheduled in this appointment.
    *
    * @return string|null The staffMemberIds
    */
    public function getStaffMemberIds()
    {
        if (array_key_exists("staffMemberIds", $this->_propDict)) {
            return $this->_propDict["staffMemberIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the staffMemberIds
    * The ID of each bookingStaffMember who is scheduled in this appointment.
    *
    * @param string $val The staffMemberIds
    *
    * @return BookingAppointment
    */
    public function setStaffMemberIds($val)
    {
        $this->_propDict["staffMemberIds"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The date, time, and time zone that the appointment begins.
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
    * The date, time, and time zone that the appointment begins.
    *
    * @param DateTimeTimeZone $val The startDateTime
    *
    * @return BookingAppointment
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

}
