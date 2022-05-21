<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordValidationInformation File
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
* PasswordValidationInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordValidationInformation extends Entity
{
    /**
    * Gets the isValid
    * Specifies whether the password is valid based on the calculation of the results in the validationResults property. Not nullable. Read-only.
    *
    * @return bool|null The isValid
    */
    public function getIsValid()
    {
        if (array_key_exists("isValid", $this->_propDict)) {
            return $this->_propDict["isValid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isValid
    * Specifies whether the password is valid based on the calculation of the results in the validationResults property. Not nullable. Read-only.
    *
    * @param bool $val The value of the isValid
    *
    * @return PasswordValidationInformation
    */
    public function setIsValid($val)
    {
        $this->_propDict["isValid"] = $val;
        return $this;
    }

    /**
    * Gets the validationResults
    * The list of password validation rules and whether the password passed those rules. Not nullable. Read-only.
    *
    * @return ValidationResult|null The validationResults
    */
    public function getValidationResults()
    {
        if (array_key_exists("validationResults", $this->_propDict)) {
            if (is_a($this->_propDict["validationResults"], "\Beta\Microsoft\Graph\Model\ValidationResult") || is_null($this->_propDict["validationResults"])) {
                return $this->_propDict["validationResults"];
            } else {
                $this->_propDict["validationResults"] = new ValidationResult($this->_propDict["validationResults"]);
                return $this->_propDict["validationResults"];
            }
        }
        return null;
    }

    /**
    * Sets the validationResults
    * The list of password validation rules and whether the password passed those rules. Not nullable. Read-only.
    *
    * @param ValidationResult $val The value to assign to the validationResults
    *
    * @return PasswordValidationInformation The PasswordValidationInformation
    */
    public function setValidationResults($val)
    {
        $this->_propDict["validationResults"] = $val;
         return $this;
    }
}
