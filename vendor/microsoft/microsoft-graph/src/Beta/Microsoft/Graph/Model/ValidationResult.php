<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ValidationResult File
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
* ValidationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ValidationResult extends Entity
{
    /**
    * Gets the message
    * The string containing the reason for why the rule passed or not. Read-only. Not nullable.
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
    * The string containing the reason for why the rule passed or not. Read-only. Not nullable.
    *
    * @param string $val The value of the message
    *
    * @return ValidationResult
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the ruleName
    * The string containing the name of the password validation rule that the action was validated against. Read-only. Not nullable.
    *
    * @return string|null The ruleName
    */
    public function getRuleName()
    {
        if (array_key_exists("ruleName", $this->_propDict)) {
            return $this->_propDict["ruleName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ruleName
    * The string containing the name of the password validation rule that the action was validated against. Read-only. Not nullable.
    *
    * @param string $val The value of the ruleName
    *
    * @return ValidationResult
    */
    public function setRuleName($val)
    {
        $this->_propDict["ruleName"] = $val;
        return $this;
    }
    /**
    * Gets the validationPassed
    * Whether the password passed or failed the validation rule. Read-only. Not nullable.
    *
    * @return bool|null The validationPassed
    */
    public function getValidationPassed()
    {
        if (array_key_exists("validationPassed", $this->_propDict)) {
            return $this->_propDict["validationPassed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the validationPassed
    * Whether the password passed or failed the validation rule. Read-only. Not nullable.
    *
    * @param bool $val The value of the validationPassed
    *
    * @return ValidationResult
    */
    public function setValidationPassed($val)
    {
        $this->_propDict["validationPassed"] = $val;
        return $this;
    }
}
