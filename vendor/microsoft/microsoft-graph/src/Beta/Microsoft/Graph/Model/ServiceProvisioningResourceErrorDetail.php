<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceProvisioningResourceErrorDetail File
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
* ServiceProvisioningResourceErrorDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceProvisioningResourceErrorDetail extends Entity
{
    /**
    * Gets the code
    *
    * @return string|null The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    *
    * @param string $val The value of the code
    *
    * @return ServiceProvisioningResourceErrorDetail
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    /**
    * Gets the details
    *
    * @return string|null The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            return $this->_propDict["details"];
        } else {
            return null;
        }
    }

    /**
    * Sets the details
    *
    * @param string $val The value of the details
    *
    * @return ServiceProvisioningResourceErrorDetail
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
        return $this;
    }
    /**
    * Gets the message
    *
    * @return string|null The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    *
    * @param string $val The value of the message
    *
    * @return ServiceProvisioningResourceErrorDetail
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
}
