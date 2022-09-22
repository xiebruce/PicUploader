<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualAppointmentUser File
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
* VirtualAppointmentUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualAppointmentUser extends Entity
{
    /**
    * Gets the displayName
    * The display name of the user who participates in a virtual appointment. Optional.
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
    * The display name of the user who participates in a virtual appointment. Optional.
    *
    * @param string $val The value of the displayName
    *
    * @return VirtualAppointmentUser
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the emailAddress
    * The email address of the user who participates in a virtual appointment. Optional.
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
    * The email address of the user who participates in a virtual appointment. Optional.
    *
    * @param string $val The value of the emailAddress
    *
    * @return VirtualAppointmentUser
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
    /**
    * Gets the smsCapablePhoneNumber
    * The phone number for sending SMS texts for the user who participates in a virtual appointment. Optional.
    *
    * @return string|null The smsCapablePhoneNumber
    */
    public function getSmsCapablePhoneNumber()
    {
        if (array_key_exists("smsCapablePhoneNumber", $this->_propDict)) {
            return $this->_propDict["smsCapablePhoneNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smsCapablePhoneNumber
    * The phone number for sending SMS texts for the user who participates in a virtual appointment. Optional.
    *
    * @param string $val The value of the smsCapablePhoneNumber
    *
    * @return VirtualAppointmentUser
    */
    public function setSmsCapablePhoneNumber($val)
    {
        $this->_propDict["smsCapablePhoneNumber"] = $val;
        return $this;
    }
}
