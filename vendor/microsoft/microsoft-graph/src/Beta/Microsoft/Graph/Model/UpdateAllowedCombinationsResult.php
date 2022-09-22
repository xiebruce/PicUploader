<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UpdateAllowedCombinationsResult File
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
* UpdateAllowedCombinationsResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UpdateAllowedCombinationsResult extends Entity
{
    /**
    * Gets the additionalInformation
    *
    * @return string|null The additionalInformation
    */
    public function getAdditionalInformation()
    {
        if (array_key_exists("additionalInformation", $this->_propDict)) {
            return $this->_propDict["additionalInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalInformation
    *
    * @param string $val The value of the additionalInformation
    *
    * @return UpdateAllowedCombinationsResult
    */
    public function setAdditionalInformation($val)
    {
        $this->_propDict["additionalInformation"] = $val;
        return $this;
    }
    /**
    * Gets the conditionalAccessReferences
    *
    * @return string|null The conditionalAccessReferences
    */
    public function getConditionalAccessReferences()
    {
        if (array_key_exists("conditionalAccessReferences", $this->_propDict)) {
            return $this->_propDict["conditionalAccessReferences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conditionalAccessReferences
    *
    * @param string $val The value of the conditionalAccessReferences
    *
    * @return UpdateAllowedCombinationsResult
    */
    public function setConditionalAccessReferences($val)
    {
        $this->_propDict["conditionalAccessReferences"] = $val;
        return $this;
    }

    /**
    * Gets the currentCombinations
    *
    * @return AuthenticationMethodModes|null The currentCombinations
    */
    public function getCurrentCombinations()
    {
        if (array_key_exists("currentCombinations", $this->_propDict)) {
            if (is_a($this->_propDict["currentCombinations"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodModes") || is_null($this->_propDict["currentCombinations"])) {
                return $this->_propDict["currentCombinations"];
            } else {
                $this->_propDict["currentCombinations"] = new AuthenticationMethodModes($this->_propDict["currentCombinations"]);
                return $this->_propDict["currentCombinations"];
            }
        }
        return null;
    }

    /**
    * Sets the currentCombinations
    *
    * @param AuthenticationMethodModes $val The value to assign to the currentCombinations
    *
    * @return UpdateAllowedCombinationsResult The UpdateAllowedCombinationsResult
    */
    public function setCurrentCombinations($val)
    {
        $this->_propDict["currentCombinations"] = $val;
         return $this;
    }

    /**
    * Gets the previousCombinations
    *
    * @return AuthenticationMethodModes|null The previousCombinations
    */
    public function getPreviousCombinations()
    {
        if (array_key_exists("previousCombinations", $this->_propDict)) {
            if (is_a($this->_propDict["previousCombinations"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodModes") || is_null($this->_propDict["previousCombinations"])) {
                return $this->_propDict["previousCombinations"];
            } else {
                $this->_propDict["previousCombinations"] = new AuthenticationMethodModes($this->_propDict["previousCombinations"]);
                return $this->_propDict["previousCombinations"];
            }
        }
        return null;
    }

    /**
    * Sets the previousCombinations
    *
    * @param AuthenticationMethodModes $val The value to assign to the previousCombinations
    *
    * @return UpdateAllowedCombinationsResult The UpdateAllowedCombinationsResult
    */
    public function setPreviousCombinations($val)
    {
        $this->_propDict["previousCombinations"] = $val;
         return $this;
    }
}
