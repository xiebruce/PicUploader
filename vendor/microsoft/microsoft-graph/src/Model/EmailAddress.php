<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailAddress File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* EmailAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EmailAddress extends Entity
{
    /**
    * Gets the name
    * The display name of the person or entity.
    *
    * @return string The name
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
    * The display name of the person or entity.
    *
    * @param string $val The value of the name
    *
    * @return EmailAddress
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the address
    * The email address of the person or entity.
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    * The email address of the person or entity.
    *
    * @param string $val The value of the address
    *
    * @return EmailAddress
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
}
