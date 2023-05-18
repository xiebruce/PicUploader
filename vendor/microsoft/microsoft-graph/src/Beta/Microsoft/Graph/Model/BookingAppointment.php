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
namespace Beta\Microsoft\Graph\Model;

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
    * Gets the anonymousJoinWebUrl
    * The URL of the meeting to join anonymously.
    *
    * @return string|null The anonymousJoinWebUrl
    */
    public function getAnonymousJoinWebUrl()
    {
        if (array_key_exists("anonymousJoinWebUrl", $this->_propDict)) {
            return $this->_propDict["anonymousJoinWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anonymousJoinWebUrl
    * The URL of the meeting to join anonymously.
    *
    * @param string $val The anonymousJoinWebUrl
    *
    * @return BookingAppointment
    */
    public function setAnonymousJoinWebUrl($val)
    {
        $this->_propDict["anonymousJoinWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the customerEmailAddress
    * The SMTP address of the bookingCustomer who is booking the appointment.
    *
    * @return string|null The customerEmailAddress
    */
    public function getCustomerEmailAddress()
    {
        if (array_key_exists("customerEmailAddress", $this->_propDict)) {
            return $this->_propDict["customerEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customerEmailAddress
    * The SMTP address of the bookingCustomer who is booking the appointment.
    *
    * @param string $val The customerEmailAddress
    *
    * @return BookingAppointment
    */
    public function setCustomerEmailAddress($val)
    {
        $this->_propDict["customerEmailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the customerId
    * If CustomerId is not specified when an appointment is created then a new customer is created based on the appointment customer information. Once set, the customerId should be considered immutable.
    *
    * @return string|null The customerId
    */
    public function getCustomerId()
    {
        if (array_key_exists("customerId", $this->_propDict)) {
            return $this->_propDict["customerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customerId
    * If CustomerId is not specified when an appointment is created then a new customer is created based on the appointment customer information. Once set, the customerId should be considered immutable.
    *
    * @param string $val The customerId
    *
    * @return BookingAppointment
    */
    public function setCustomerId($val)
    {
        $this->_propDict["customerId"] = $val;
        return $this;
    }

    /**
    * Gets the customerLocation
    * Represents location information for the bookingCustomer who is booking the appointment.
    *
    * @return Location|null The customerLocation
    */
    public function getCustomerLocation()
    {
        if (array_key_exists("customerLocation", $this->_propDict)) {
            if (is_a($this->_propDict["customerLocation"], "\Beta\Microsoft\Graph\Model\Location") || is_null($this->_propDict["customerLocation"])) {
                return $this->_propDict["customerLocation"];
            } else {
                $this->_propDict["customerLocation"] = new Location($this->_propDict["customerLocation"]);
                return $this->_propDict["customerLocation"];
            }
        }
        return null;
    }

    /**
    * Sets the customerLocation
    * Represents location information for the bookingCustomer who is booking the appointment.
    *
    * @param Location $val The customerLocation
    *
    * @return BookingAppointment
    */
    public function setCustomerLocation($val)
    {
        $this->_propDict["customerLocation"] = $val;
        return $this;
    }

    /**
    * Gets the customerName
    * The customer's name.
    *
    * @return string|null The customerName
    */
    public function getCustomerName()
    {
        if (array_key_exists("customerName", $this->_propDict)) {
            return $this->_propDict["customerName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customerName
    * The customer's name.
    *
    * @param string $val The customerName
    *
    * @return BookingAppointment
    */
    public function setCustomerName($val)
    {
        $this->_propDict["customerName"] = $val;
        return $this;
    }

    /**
    * Gets the customerNotes
    * The value of this property is only available when reading an individual booking appointment by id. Its value can only be set when creating a new appointment with a new customer, ie, without specifying a CustomerId. After that, the property is computed from the customer represented by CustomerId.
    *
    * @return string|null The customerNotes
    */
    public function getCustomerNotes()
    {
        if (array_key_exists("customerNotes", $this->_propDict)) {
            return $this->_propDict["customerNotes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customerNotes
    * The value of this property is only available when reading an individual booking appointment by id. Its value can only be set when creating a new appointment with a new customer, ie, without specifying a CustomerId. After that, the property is computed from the customer represented by CustomerId.
    *
    * @param string $val The customerNotes
    *
    * @return BookingAppointment
    */
    public function setCustomerNotes($val)
    {
        $this->_propDict["customerNotes"] = $val;
        return $this;
    }

    /**
    * Gets the customerPhone
    * The customer's phone number.
    *
    * @return string|null The customerPhone
    */
    public function getCustomerPhone()
    {
        if (array_key_exists("customerPhone", $this->_propDict)) {
            return $this->_propDict["customerPhone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customerPhone
    * The customer's phone number.
    *
    * @param string $val The customerPhone
    *
    * @return BookingAppointment
    */
    public function setCustomerPhone($val)
    {
        $this->_propDict["customerPhone"] = $val;
        return $this;
    }


     /**
     * Gets the customers
    * A collection of the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
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
    * A collection of the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
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
    * Gets the end
    * The date, time, and time zone that the appointment ends.
    *
    * @return DateTimeTimeZone|null The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["end"])) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new DateTimeTimeZone($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }

    /**
    * Sets the end
    * The date, time, and time zone that the appointment ends.
    *
    * @param DateTimeTimeZone $val The end
    *
    * @return BookingAppointment
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
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
    * Gets the invoiceAmount
    * The billed amount on the invoice.
    *
    * @return float|null The invoiceAmount
    */
    public function getInvoiceAmount()
    {
        if (array_key_exists("invoiceAmount", $this->_propDict)) {
            return $this->_propDict["invoiceAmount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the invoiceAmount
    * The billed amount on the invoice.
    *
    * @param float $val The invoiceAmount
    *
    * @return BookingAppointment
    */
    public function setInvoiceAmount($val)
    {
        $this->_propDict["invoiceAmount"] = floatval($val);
        return $this;
    }

    /**
    * Gets the invoiceDate
    * The date, time, and time zone of the invoice for this appointment.
    *
    * @return DateTimeTimeZone|null The invoiceDate
    */
    public function getInvoiceDate()
    {
        if (array_key_exists("invoiceDate", $this->_propDict)) {
            if (is_a($this->_propDict["invoiceDate"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["invoiceDate"])) {
                return $this->_propDict["invoiceDate"];
            } else {
                $this->_propDict["invoiceDate"] = new DateTimeTimeZone($this->_propDict["invoiceDate"]);
                return $this->_propDict["invoiceDate"];
            }
        }
        return null;
    }

    /**
    * Sets the invoiceDate
    * The date, time, and time zone of the invoice for this appointment.
    *
    * @param DateTimeTimeZone $val The invoiceDate
    *
    * @return BookingAppointment
    */
    public function setInvoiceDate($val)
    {
        $this->_propDict["invoiceDate"] = $val;
        return $this;
    }

    /**
    * Gets the invoiceId
    * The ID of the invoice.
    *
    * @return string|null The invoiceId
    */
    public function getInvoiceId()
    {
        if (array_key_exists("invoiceId", $this->_propDict)) {
            return $this->_propDict["invoiceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the invoiceId
    * The ID of the invoice.
    *
    * @param string $val The invoiceId
    *
    * @return BookingAppointment
    */
    public function setInvoiceId($val)
    {
        $this->_propDict["invoiceId"] = $val;
        return $this;
    }

    /**
    * Gets the invoiceStatus
    * The status of the invoice. Possible values are: draft, reviewing, open, canceled, paid, corrective.
    *
    * @return BookingInvoiceStatus|null The invoiceStatus
    */
    public function getInvoiceStatus()
    {
        if (array_key_exists("invoiceStatus", $this->_propDict)) {
            if (is_a($this->_propDict["invoiceStatus"], "\Beta\Microsoft\Graph\Model\BookingInvoiceStatus") || is_null($this->_propDict["invoiceStatus"])) {
                return $this->_propDict["invoiceStatus"];
            } else {
                $this->_propDict["invoiceStatus"] = new BookingInvoiceStatus($this->_propDict["invoiceStatus"]);
                return $this->_propDict["invoiceStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the invoiceStatus
    * The status of the invoice. Possible values are: draft, reviewing, open, canceled, paid, corrective.
    *
    * @param BookingInvoiceStatus $val The invoiceStatus
    *
    * @return BookingAppointment
    */
    public function setInvoiceStatus($val)
    {
        $this->_propDict["invoiceStatus"] = $val;
        return $this;
    }

    /**
    * Gets the invoiceUrl
    * The URL of the invoice in Microsoft Bookings.
    *
    * @return string|null The invoiceUrl
    */
    public function getInvoiceUrl()
    {
        if (array_key_exists("invoiceUrl", $this->_propDict)) {
            return $this->_propDict["invoiceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the invoiceUrl
    * The URL of the invoice in Microsoft Bookings.
    *
    * @param string $val The invoiceUrl
    *
    * @return BookingAppointment
    */
    public function setInvoiceUrl($val)
    {
        $this->_propDict["invoiceUrl"] = $val;
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
    * Gets the onlineMeetingUrl
    *
    * @return string|null The onlineMeetingUrl
    */
    public function getOnlineMeetingUrl()
    {
        if (array_key_exists("onlineMeetingUrl", $this->_propDict)) {
            return $this->_propDict["onlineMeetingUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onlineMeetingUrl
    *
    * @param string $val The onlineMeetingUrl
    *
    * @return BookingAppointment
    */
    public function setOnlineMeetingUrl($val)
    {
        $this->_propDict["onlineMeetingUrl"] = $val;
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
            if (is_a($this->_propDict["priceType"], "\Beta\Microsoft\Graph\Model\BookingPriceType") || is_null($this->_propDict["priceType"])) {
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
            if (is_a($this->_propDict["serviceLocation"], "\Beta\Microsoft\Graph\Model\Location") || is_null($this->_propDict["serviceLocation"])) {
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
    * @return array|null The staffMemberIds
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
    * @param string[] $val The staffMemberIds
    *
    * @return BookingAppointment
    */
    public function setStaffMemberIds($val)
    {
        $this->_propDict["staffMemberIds"] = $val;
        return $this;
    }

    /**
    * Gets the start
    * The date, time, and time zone that the appointment begins.
    *
    * @return DateTimeTimeZone|null The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["start"])) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new DateTimeTimeZone($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }

    /**
    * Sets the start
    * The date, time, and time zone that the appointment begins.
    *
    * @param DateTimeTimeZone $val The start
    *
    * @return BookingAppointment
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
        return $this;
    }

}
