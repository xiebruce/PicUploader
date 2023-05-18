<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceProvisioningXmlError File
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
* ServiceProvisioningXmlError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceProvisioningXmlError extends ServiceProvisioningError
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.serviceProvisioningXmlError");
    }

    /**
    * Gets the errorDetail
    * Error Information published by the Federated Service as an xml string .
    *
    * @return string|null The errorDetail
    */
    public function getErrorDetail()
    {
        if (array_key_exists("errorDetail", $this->_propDict)) {
            return $this->_propDict["errorDetail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorDetail
    * Error Information published by the Federated Service as an xml string .
    *
    * @param string $val The value of the errorDetail
    *
    * @return ServiceProvisioningXmlError
    */
    public function setErrorDetail($val)
    {
        $this->_propDict["errorDetail"] = $val;
        return $this;
    }
}
