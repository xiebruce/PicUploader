<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceProvisioningResourceError File
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
* ServiceProvisioningResourceError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceProvisioningResourceError extends ServiceProvisioningError
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.serviceProvisioningResourceError");
    }


    /**
    * Gets the errors
    *
    * @return ServiceProvisioningResourceErrorDetail|null The errors
    */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
            if (is_a($this->_propDict["errors"], "\Beta\Microsoft\Graph\Model\ServiceProvisioningResourceErrorDetail") || is_null($this->_propDict["errors"])) {
                return $this->_propDict["errors"];
            } else {
                $this->_propDict["errors"] = new ServiceProvisioningResourceErrorDetail($this->_propDict["errors"]);
                return $this->_propDict["errors"];
            }
        }
        return null;
    }

    /**
    * Sets the errors
    *
    * @param ServiceProvisioningResourceErrorDetail $val The value to assign to the errors
    *
    * @return ServiceProvisioningResourceError The ServiceProvisioningResourceError
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
         return $this;
    }
}
