<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PayloadCoachmark File
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
* PayloadCoachmark class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PayloadCoachmark extends Entity
{

    /**
    * Gets the coachmarkLocation
    * The coachmark location.
    *
    * @return CoachmarkLocation|null The coachmarkLocation
    */
    public function getCoachmarkLocation()
    {
        if (array_key_exists("coachmarkLocation", $this->_propDict)) {
            if (is_a($this->_propDict["coachmarkLocation"], "\Beta\Microsoft\Graph\Model\CoachmarkLocation") || is_null($this->_propDict["coachmarkLocation"])) {
                return $this->_propDict["coachmarkLocation"];
            } else {
                $this->_propDict["coachmarkLocation"] = new CoachmarkLocation($this->_propDict["coachmarkLocation"]);
                return $this->_propDict["coachmarkLocation"];
            }
        }
        return null;
    }

    /**
    * Sets the coachmarkLocation
    * The coachmark location.
    *
    * @param CoachmarkLocation $val The value to assign to the coachmarkLocation
    *
    * @return PayloadCoachmark The PayloadCoachmark
    */
    public function setCoachmarkLocation($val)
    {
        $this->_propDict["coachmarkLocation"] = $val;
         return $this;
    }
    /**
    * Gets the description
    * The description about the coachmark.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description about the coachmark.
    *
    * @param string $val The value of the description
    *
    * @return PayloadCoachmark
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the indicator
    * The coachmark indicator.
    *
    * @return string|null The indicator
    */
    public function getIndicator()
    {
        if (array_key_exists("indicator", $this->_propDict)) {
            return $this->_propDict["indicator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the indicator
    * The coachmark indicator.
    *
    * @param string $val The value of the indicator
    *
    * @return PayloadCoachmark
    */
    public function setIndicator($val)
    {
        $this->_propDict["indicator"] = $val;
        return $this;
    }
    /**
    * Gets the isValid
    * Indicates whether the coachmark is valid or not.
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
    * Indicates whether the coachmark is valid or not.
    *
    * @param bool $val The value of the isValid
    *
    * @return PayloadCoachmark
    */
    public function setIsValid($val)
    {
        $this->_propDict["isValid"] = $val;
        return $this;
    }
    /**
    * Gets the language
    * The coachmark language.
    *
    * @return string|null The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    * The coachmark language.
    *
    * @param string $val The value of the language
    *
    * @return PayloadCoachmark
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    /**
    * Gets the order
    * The coachmark order.
    *
    * @return string|null The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            return $this->_propDict["order"];
        } else {
            return null;
        }
    }

    /**
    * Sets the order
    * The coachmark order.
    *
    * @param string $val The value of the order
    *
    * @return PayloadCoachmark
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = $val;
        return $this;
    }
}
