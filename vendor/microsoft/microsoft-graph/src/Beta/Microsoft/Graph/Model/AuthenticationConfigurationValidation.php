<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationConfigurationValidation File
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
* AuthenticationConfigurationValidation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationConfigurationValidation extends Entity
{

    /**
    * Gets the errors
    * Errors in the validation result of a customAuthenticationExtension.
    *
    * @return GenericError|null The errors
    */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
            if (is_a($this->_propDict["errors"], "\Beta\Microsoft\Graph\Model\GenericError") || is_null($this->_propDict["errors"])) {
                return $this->_propDict["errors"];
            } else {
                $this->_propDict["errors"] = new GenericError($this->_propDict["errors"]);
                return $this->_propDict["errors"];
            }
        }
        return null;
    }

    /**
    * Sets the errors
    * Errors in the validation result of a customAuthenticationExtension.
    *
    * @param GenericError $val The value to assign to the errors
    *
    * @return AuthenticationConfigurationValidation The AuthenticationConfigurationValidation
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
         return $this;
    }

    /**
    * Gets the warnings
    * Warnings in the validation result of a customAuthenticationExtension.
    *
    * @return GenericError|null The warnings
    */
    public function getWarnings()
    {
        if (array_key_exists("warnings", $this->_propDict)) {
            if (is_a($this->_propDict["warnings"], "\Beta\Microsoft\Graph\Model\GenericError") || is_null($this->_propDict["warnings"])) {
                return $this->_propDict["warnings"];
            } else {
                $this->_propDict["warnings"] = new GenericError($this->_propDict["warnings"]);
                return $this->_propDict["warnings"];
            }
        }
        return null;
    }

    /**
    * Sets the warnings
    * Warnings in the validation result of a customAuthenticationExtension.
    *
    * @param GenericError $val The value to assign to the warnings
    *
    * @return AuthenticationConfigurationValidation The AuthenticationConfigurationValidation
    */
    public function setWarnings($val)
    {
        $this->_propDict["warnings"] = $val;
         return $this;
    }
}
