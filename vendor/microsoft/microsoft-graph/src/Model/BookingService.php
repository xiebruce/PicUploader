<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingService File
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
* BookingService class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingService extends Entity
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
    * @return BookingService
    */
    public function setAdditionalInformation($val)
    {
        $this->_propDict["additionalInformation"] = $val;
        return $this;
    }


     /**
     * Gets the customQuestions
    * Contains the set of custom questions associated with a particular service.
     *
     * @return array|null The customQuestions
     */
    public function getCustomQuestions()
    {
        if (array_key_exists("customQuestions", $this->_propDict)) {
           return $this->_propDict["customQuestions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customQuestions
    * Contains the set of custom questions associated with a particular service.
    *
    * @param BookingQuestionAssignment[] $val The customQuestions
    *
    * @return BookingService
    */
    public function setCustomQuestions($val)
    {
        $this->_propDict["customQuestions"] = $val;
        return $this;
    }

    /**
    * Gets the defaultDuration
    * The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
    *
    * @return \DateInterval|null The defaultDuration
    */
    public function getDefaultDuration()
    {
        if (array_key_exists("defaultDuration", $this->_propDict)) {
            if (is_a($this->_propDict["defaultDuration"], "\DateInterval") || is_null($this->_propDict["defaultDuration"])) {
                return $this->_propDict["defaultDuration"];
            } else {
                $this->_propDict["defaultDuration"] = new \DateInterval($this->_propDict["defaultDuration"]);
                return $this->_propDict["defaultDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultDuration
    * The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
    *
    * @param \DateInterval $val The defaultDuration
    *
    * @return BookingService
    */
    public function setDefaultDuration($val)
    {
        $this->_propDict["defaultDuration"] = $val;
        return $this;
    }

    /**
    * Gets the defaultLocation
    * The default physical location for the service.
    *
    * @return Location|null The defaultLocation
    */
    public function getDefaultLocation()
    {
        if (array_key_exists("defaultLocation", $this->_propDict)) {
            if (is_a($this->_propDict["defaultLocation"], "\Microsoft\Graph\Model\Location") || is_null($this->_propDict["defaultLocation"])) {
                return $this->_propDict["defaultLocation"];
            } else {
                $this->_propDict["defaultLocation"] = new Location($this->_propDict["defaultLocation"]);
                return $this->_propDict["defaultLocation"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultLocation
    * The default physical location for the service.
    *
    * @param Location $val The defaultLocation
    *
    * @return BookingService
    */
    public function setDefaultLocation($val)
    {
        $this->_propDict["defaultLocation"] = $val;
        return $this;
    }

    /**
    * Gets the defaultPrice
    * The default monetary price for the service.
    *
    * @return float|null The defaultPrice
    */
    public function getDefaultPrice()
    {
        if (array_key_exists("defaultPrice", $this->_propDict)) {
            return $this->_propDict["defaultPrice"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultPrice
    * The default monetary price for the service.
    *
    * @param float $val The defaultPrice
    *
    * @return BookingService
    */
    public function setDefaultPrice($val)
    {
        $this->_propDict["defaultPrice"] = floatval($val);
        return $this;
    }

    /**
    * Gets the defaultPriceType
    * The default way the service is charged. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
    *
    * @return BookingPriceType|null The defaultPriceType
    */
    public function getDefaultPriceType()
    {
        if (array_key_exists("defaultPriceType", $this->_propDict)) {
            if (is_a($this->_propDict["defaultPriceType"], "\Microsoft\Graph\Model\BookingPriceType") || is_null($this->_propDict["defaultPriceType"])) {
                return $this->_propDict["defaultPriceType"];
            } else {
                $this->_propDict["defaultPriceType"] = new BookingPriceType($this->_propDict["defaultPriceType"]);
                return $this->_propDict["defaultPriceType"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultPriceType
    * The default way the service is charged. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
    *
    * @param BookingPriceType $val The defaultPriceType
    *
    * @return BookingService
    */
    public function setDefaultPriceType($val)
    {
        $this->_propDict["defaultPriceType"] = $val;
        return $this;
    }


     /**
     * Gets the defaultReminders
    * The value of this property is only available when reading an individual booking service by id.
     *
     * @return array|null The defaultReminders
     */
    public function getDefaultReminders()
    {
        if (array_key_exists("defaultReminders", $this->_propDict)) {
           return $this->_propDict["defaultReminders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultReminders
    * The value of this property is only available when reading an individual booking service by id.
    *
    * @param BookingReminder[] $val The defaultReminders
    *
    * @return BookingService
    */
    public function setDefaultReminders($val)
    {
        $this->_propDict["defaultReminders"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * A text description for the service.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * A text description for the service.
    *
    * @param string $val The description
    *
    * @return BookingService
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name is suitable for human-readable interfaces.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name is suitable for human-readable interfaces.
    *
    * @param string $val The displayName
    *
    * @return BookingService
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isHiddenFromCustomers
    * True means this service is not available to customers for booking.
    *
    * @return bool|null The isHiddenFromCustomers
    */
    public function getIsHiddenFromCustomers()
    {
        if (array_key_exists("isHiddenFromCustomers", $this->_propDict)) {
            return $this->_propDict["isHiddenFromCustomers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHiddenFromCustomers
    * True means this service is not available to customers for booking.
    *
    * @param bool $val The isHiddenFromCustomers
    *
    * @return BookingService
    */
    public function setIsHiddenFromCustomers($val)
    {
        $this->_propDict["isHiddenFromCustomers"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isLocationOnline
    * True indicates that the appointments for the service will be held online. Default value is false.
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
    * True indicates that the appointments for the service will be held online. Default value is false.
    *
    * @param bool $val The isLocationOnline
    *
    * @return BookingService
    */
    public function setIsLocationOnline($val)
    {
        $this->_propDict["isLocationOnline"] = boolval($val);
        return $this;
    }

    /**
    * Gets the maximumAttendeesCount
    * The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment.  To create a customer, use the Create bookingCustomer operation.
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
    * The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment.  To create a customer, use the Create bookingCustomer operation.
    *
    * @param int $val The maximumAttendeesCount
    *
    * @return BookingService
    */
    public function setMaximumAttendeesCount($val)
    {
        $this->_propDict["maximumAttendeesCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the notes
    * Additional information about this service.
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
    * Additional information about this service.
    *
    * @param string $val The notes
    *
    * @return BookingService
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the postBuffer
    * The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
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
    * The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
    *
    * @param \DateInterval $val The postBuffer
    *
    * @return BookingService
    */
    public function setPostBuffer($val)
    {
        $this->_propDict["postBuffer"] = $val;
        return $this;
    }

    /**
    * Gets the preBuffer
    * The time to buffer before an appointment for this service can start.
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
    * The time to buffer before an appointment for this service can start.
    *
    * @param \DateInterval $val The preBuffer
    *
    * @return BookingService
    */
    public function setPreBuffer($val)
    {
        $this->_propDict["preBuffer"] = $val;
        return $this;
    }

    /**
    * Gets the schedulingPolicy
    * The set of policies that determine how appointments for this type of service should be created and managed.
    *
    * @return BookingSchedulingPolicy|null The schedulingPolicy
    */
    public function getSchedulingPolicy()
    {
        if (array_key_exists("schedulingPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["schedulingPolicy"], "\Microsoft\Graph\Model\BookingSchedulingPolicy") || is_null($this->_propDict["schedulingPolicy"])) {
                return $this->_propDict["schedulingPolicy"];
            } else {
                $this->_propDict["schedulingPolicy"] = new BookingSchedulingPolicy($this->_propDict["schedulingPolicy"]);
                return $this->_propDict["schedulingPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the schedulingPolicy
    * The set of policies that determine how appointments for this type of service should be created and managed.
    *
    * @param BookingSchedulingPolicy $val The schedulingPolicy
    *
    * @return BookingService
    */
    public function setSchedulingPolicy($val)
    {
        $this->_propDict["schedulingPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the smsNotificationsEnabled
    * True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false.
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
    * True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false.
    *
    * @param bool $val The smsNotificationsEnabled
    *
    * @return BookingService
    */
    public function setSmsNotificationsEnabled($val)
    {
        $this->_propDict["smsNotificationsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the staffMemberIds
    * Represents those staff members who provide this service.
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
    * Represents those staff members who provide this service.
    *
    * @param string $val The staffMemberIds
    *
    * @return BookingService
    */
    public function setStaffMemberIds($val)
    {
        $this->_propDict["staffMemberIds"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * The URL a customer uses to access the service.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * The URL a customer uses to access the service.
    *
    * @param string $val The webUrl
    *
    * @return BookingService
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }

}
