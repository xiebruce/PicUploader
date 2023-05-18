<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceProvisioningLinkedResourceErrorDetail File
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
* ServiceProvisioningLinkedResourceErrorDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceProvisioningLinkedResourceErrorDetail extends ServiceProvisioningResourceErrorDetail
{
    /**
    * Gets the propertyName
    *
    * @return string|null The propertyName
    */
    public function getPropertyName()
    {
        if (array_key_exists("propertyName", $this->_propDict)) {
            return $this->_propDict["propertyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyName
    *
    * @param string $val The value of the propertyName
    *
    * @return ServiceProvisioningLinkedResourceErrorDetail
    */
    public function setPropertyName($val)
    {
        $this->_propDict["propertyName"] = $val;
        return $this;
    }
    /**
    * Gets the target
    *
    * @return string|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    *
    * @param string $val The value of the target
    *
    * @return ServiceProvisioningLinkedResourceErrorDetail
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
}
