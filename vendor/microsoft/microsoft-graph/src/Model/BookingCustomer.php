<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingCustomer File
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
* BookingCustomer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingCustomer extends BookingCustomerBase
{

     /**
     * Gets the addresses
    * Addresses associated with the customer, including home, business and other addresses.
     *
     * @return array|null The addresses
     */
    public function getAddresses()
    {
        if (array_key_exists("addresses", $this->_propDict)) {
           return $this->_propDict["addresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addresses
    * Addresses associated with the customer, including home, business and other addresses.
    *
    * @param PhysicalAddress[] $val The addresses
    *
    * @return BookingCustomer
    */
    public function setAddresses($val)
    {
        $this->_propDict["addresses"] = $val;
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
    * @return BookingCustomer
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the emailAddress
    * The SMTP address of the customer.
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
    * The SMTP address of the customer.
    *
    * @param string $val The emailAddress
    *
    * @return BookingCustomer
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }


     /**
     * Gets the phones
    * Phone numbers associated with the customer, including home, business and mobile numbers.
     *
     * @return array|null The phones
     */
    public function getPhones()
    {
        if (array_key_exists("phones", $this->_propDict)) {
           return $this->_propDict["phones"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phones
    * Phone numbers associated with the customer, including home, business and mobile numbers.
    *
    * @param Phone[] $val The phones
    *
    * @return BookingCustomer
    */
    public function setPhones($val)
    {
        $this->_propDict["phones"] = $val;
        return $this;
    }

}
