<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingCustomerInformation File
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
* BookingCustomerInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingCustomerInformation extends BookingCustomerInformationBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.bookingCustomerInformation");
    }

    /**
    * Gets the customerId
    * The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
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
    * The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
    *
    * @param string $val The value of the customerId
    *
    * @return BookingCustomerInformation
    */
    public function setCustomerId($val)
    {
        $this->_propDict["customerId"] = $val;
        return $this;
    }

    /**
    * Gets the customQuestionAnswers
    * It consists of the list of custom questions and answers given by the customer as part of the appointment.
    *
    * @return BookingQuestionAnswer|null The customQuestionAnswers
    */
    public function getCustomQuestionAnswers()
    {
        if (array_key_exists("customQuestionAnswers", $this->_propDict)) {
            if (is_a($this->_propDict["customQuestionAnswers"], "\Beta\Microsoft\Graph\Model\BookingQuestionAnswer") || is_null($this->_propDict["customQuestionAnswers"])) {
                return $this->_propDict["customQuestionAnswers"];
            } else {
                $this->_propDict["customQuestionAnswers"] = new BookingQuestionAnswer($this->_propDict["customQuestionAnswers"]);
                return $this->_propDict["customQuestionAnswers"];
            }
        }
        return null;
    }

    /**
    * Sets the customQuestionAnswers
    * It consists of the list of custom questions and answers given by the customer as part of the appointment.
    *
    * @param BookingQuestionAnswer $val The value to assign to the customQuestionAnswers
    *
    * @return BookingCustomerInformation The BookingCustomerInformation
    */
    public function setCustomQuestionAnswers($val)
    {
        $this->_propDict["customQuestionAnswers"] = $val;
         return $this;
    }
    /**
    * Gets the emailAddress
    * The SMTP address of the bookingCustomer who is booking the appointment.
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
    * The SMTP address of the bookingCustomer who is booking the appointment.
    *
    * @param string $val The value of the emailAddress
    *
    * @return BookingCustomerInformation
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the location
    * Represents location information for the bookingCustomer who is booking the appointment.
    *
    * @return Location|null The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\Location") || is_null($this->_propDict["location"])) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new Location($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }

    /**
    * Sets the location
    * Represents location information for the bookingCustomer who is booking the appointment.
    *
    * @param Location $val The value to assign to the location
    *
    * @return BookingCustomerInformation The BookingCustomerInformation
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * The customer's name.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The customer's name.
    *
    * @param string $val The value of the name
    *
    * @return BookingCustomerInformation
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the notes
    * Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID. You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by the customerId.
    *
    * @return string|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    * Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID. You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by the customerId.
    *
    * @param string $val The value of the notes
    *
    * @return BookingCustomerInformation
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    /**
    * Gets the phone
    * The customer's phone number.
    *
    * @return string|null The phone
    */
    public function getPhone()
    {
        if (array_key_exists("phone", $this->_propDict)) {
            return $this->_propDict["phone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phone
    * The customer's phone number.
    *
    * @param string $val The value of the phone
    *
    * @return BookingCustomerInformation
    */
    public function setPhone($val)
    {
        $this->_propDict["phone"] = $val;
        return $this;
    }
    /**
    * Gets the smsNotificationsEnabled
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
    *
    * @param bool $val The value of the smsNotificationsEnabled
    *
    * @return BookingCustomerInformation
    */
    public function setSmsNotificationsEnabled($val)
    {
        $this->_propDict["smsNotificationsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the timeZone
    * The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
    *
    * @return string|null The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    * The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
    *
    * @param string $val The value of the timeZone
    *
    * @return BookingCustomerInformation
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }
}
