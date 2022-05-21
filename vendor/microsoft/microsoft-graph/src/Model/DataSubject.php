<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataSubject File
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
* DataSubject class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataSubject extends Entity
{
    /**
    * Gets the email
    * Email of the data subject.
    *
    * @return string|null The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    * Email of the data subject.
    *
    * @param string $val The value of the email
    *
    * @return DataSubject
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    /**
    * Gets the firstName
    * First name of the data subject.
    *
    * @return string|null The firstName
    */
    public function getFirstName()
    {
        if (array_key_exists("firstName", $this->_propDict)) {
            return $this->_propDict["firstName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firstName
    * First name of the data subject.
    *
    * @param string $val The value of the firstName
    *
    * @return DataSubject
    */
    public function setFirstName($val)
    {
        $this->_propDict["firstName"] = $val;
        return $this;
    }
    /**
    * Gets the lastName
    * Last Name of the data subject.
    *
    * @return string|null The lastName
    */
    public function getLastName()
    {
        if (array_key_exists("lastName", $this->_propDict)) {
            return $this->_propDict["lastName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastName
    * Last Name of the data subject.
    *
    * @param string $val The value of the lastName
    *
    * @return DataSubject
    */
    public function setLastName($val)
    {
        $this->_propDict["lastName"] = $val;
        return $this;
    }
    /**
    * Gets the residency
    * The country/region of residency. The residency information is uesed only for internal reporting but not for the content search.
    *
    * @return string|null The residency
    */
    public function getResidency()
    {
        if (array_key_exists("residency", $this->_propDict)) {
            return $this->_propDict["residency"];
        } else {
            return null;
        }
    }

    /**
    * Sets the residency
    * The country/region of residency. The residency information is uesed only for internal reporting but not for the content search.
    *
    * @param string $val The value of the residency
    *
    * @return DataSubject
    */
    public function setResidency($val)
    {
        $this->_propDict["residency"] = $val;
        return $this;
    }
}
