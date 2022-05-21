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
namespace Beta\Microsoft\Graph\Model;

/**
* BookingCustomer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingCustomer extends BookingPerson
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
