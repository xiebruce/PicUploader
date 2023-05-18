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
namespace Microsoft\Graph\Model;
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
    * Information about why the updateAllowedCombinations action was successful or failed.
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
    * Information about why the updateAllowedCombinations action was successful or failed.
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
    * References to existing Conditional Access policies that use this authentication strength.
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
    * References to existing Conditional Access policies that use this authentication strength.
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
    * The list of current authentication method combinations allowed by the authentication strength.
    *
    * @return AuthenticationMethodModes|null The currentCombinations
    */
    public function getCurrentCombinations()
    {
        if (array_key_exists("currentCombinations", $this->_propDict)) {
            if (is_a($this->_propDict["currentCombinations"], "\Microsoft\Graph\Model\AuthenticationMethodModes") || is_null($this->_propDict["currentCombinations"])) {
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
    * The list of current authentication method combinations allowed by the authentication strength.
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
    * The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
    *
    * @return AuthenticationMethodModes|null The previousCombinations
    */
    public function getPreviousCombinations()
    {
        if (array_key_exists("previousCombinations", $this->_propDict)) {
            if (is_a($this->_propDict["previousCombinations"], "\Microsoft\Graph\Model\AuthenticationMethodModes") || is_null($this->_propDict["previousCombinations"])) {
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
    * The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
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
