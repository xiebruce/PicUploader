<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceProvisioningError File
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
* ServiceProvisioningError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceProvisioningError extends Entity
{

    /**
    * Gets the createdDateTime
    * The date and time at which the error occurred.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time at which the error occurred.
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return ServiceProvisioningError The ServiceProvisioningError
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the isResolved
    * Indicates whether the Error has been attended to.
    *
    * @return bool|null The isResolved
    */
    public function getIsResolved()
    {
        if (array_key_exists("isResolved", $this->_propDict)) {
            return $this->_propDict["isResolved"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isResolved
    * Indicates whether the Error has been attended to.
    *
    * @param bool $val The value of the isResolved
    *
    * @return ServiceProvisioningError
    */
    public function setIsResolved($val)
    {
        $this->_propDict["isResolved"] = $val;
        return $this;
    }
    /**
    * Gets the serviceInstance
    * Qualified service instance (e.g., 'SharePoint/Dublin') that published the service error information.
    *
    * @return string|null The serviceInstance
    */
    public function getServiceInstance()
    {
        if (array_key_exists("serviceInstance", $this->_propDict)) {
            return $this->_propDict["serviceInstance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceInstance
    * Qualified service instance (e.g., 'SharePoint/Dublin') that published the service error information.
    *
    * @param string $val The value of the serviceInstance
    *
    * @return ServiceProvisioningError
    */
    public function setServiceInstance($val)
    {
        $this->_propDict["serviceInstance"] = $val;
        return $this;
    }
}
