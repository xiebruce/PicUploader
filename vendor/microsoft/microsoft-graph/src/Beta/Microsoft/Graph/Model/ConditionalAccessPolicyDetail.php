<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessPolicyDetail File
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
* ConditionalAccessPolicyDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessPolicyDetail extends Entity
{

    /**
    * Gets the conditions
    * Represents the type of conditions that govern when the policy applies.
    *
    * @return ConditionalAccessConditionSet|null The conditions
    */
    public function getConditions()
    {
        if (array_key_exists("conditions", $this->_propDict)) {
            if (is_a($this->_propDict["conditions"], "\Beta\Microsoft\Graph\Model\ConditionalAccessConditionSet") || is_null($this->_propDict["conditions"])) {
                return $this->_propDict["conditions"];
            } else {
                $this->_propDict["conditions"] = new ConditionalAccessConditionSet($this->_propDict["conditions"]);
                return $this->_propDict["conditions"];
            }
        }
        return null;
    }

    /**
    * Sets the conditions
    * Represents the type of conditions that govern when the policy applies.
    *
    * @param ConditionalAccessConditionSet $val The value to assign to the conditions
    *
    * @return ConditionalAccessPolicyDetail The ConditionalAccessPolicyDetail
    */
    public function setConditions($val)
    {
        $this->_propDict["conditions"] = $val;
         return $this;
    }

    /**
    * Gets the grantControls
    * Represents grant controls that must be fulfilled for the policy.
    *
    * @return ConditionalAccessGrantControls|null The grantControls
    */
    public function getGrantControls()
    {
        if (array_key_exists("grantControls", $this->_propDict)) {
            if (is_a($this->_propDict["grantControls"], "\Beta\Microsoft\Graph\Model\ConditionalAccessGrantControls") || is_null($this->_propDict["grantControls"])) {
                return $this->_propDict["grantControls"];
            } else {
                $this->_propDict["grantControls"] = new ConditionalAccessGrantControls($this->_propDict["grantControls"]);
                return $this->_propDict["grantControls"];
            }
        }
        return null;
    }

    /**
    * Sets the grantControls
    * Represents grant controls that must be fulfilled for the policy.
    *
    * @param ConditionalAccessGrantControls $val The value to assign to the grantControls
    *
    * @return ConditionalAccessPolicyDetail The ConditionalAccessPolicyDetail
    */
    public function setGrantControls($val)
    {
        $this->_propDict["grantControls"] = $val;
         return $this;
    }

    /**
    * Gets the sessionControls
    * Represents a complex type of session controls that is enforced after sign-in.
    *
    * @return ConditionalAccessSessionControls|null The sessionControls
    */
    public function getSessionControls()
    {
        if (array_key_exists("sessionControls", $this->_propDict)) {
            if (is_a($this->_propDict["sessionControls"], "\Beta\Microsoft\Graph\Model\ConditionalAccessSessionControls") || is_null($this->_propDict["sessionControls"])) {
                return $this->_propDict["sessionControls"];
            } else {
                $this->_propDict["sessionControls"] = new ConditionalAccessSessionControls($this->_propDict["sessionControls"]);
                return $this->_propDict["sessionControls"];
            }
        }
        return null;
    }

    /**
    * Sets the sessionControls
    * Represents a complex type of session controls that is enforced after sign-in.
    *
    * @param ConditionalAccessSessionControls $val The value to assign to the sessionControls
    *
    * @return ConditionalAccessPolicyDetail The ConditionalAccessPolicyDetail
    */
    public function setSessionControls($val)
    {
        $this->_propDict["sessionControls"] = $val;
         return $this;
    }
}
