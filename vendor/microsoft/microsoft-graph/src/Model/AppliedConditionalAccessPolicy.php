<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppliedConditionalAccessPolicy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* AppliedConditionalAccessPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AppliedConditionalAccessPolicy extends Entity
{
    /**
    * Gets the id
    * Unique GUID of the conditional access polic.y
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique GUID of the conditional access polic.y
    *
    * @param string $val The value of the id
    *
    * @return AppliedConditionalAccessPolicy
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Refers to the Name of the conditional access policy (example: 'Require MFA for Salesforce').
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Refers to the Name of the conditional access policy (example: 'Require MFA for Salesforce').
    *
    * @param string $val The value of the displayName
    *
    * @return AppliedConditionalAccessPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the enforcedGrantControls
    * Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
    *
    * @return string The enforcedGrantControls
    */
    public function getEnforcedGrantControls()
    {
        if (array_key_exists("enforcedGrantControls", $this->_propDict)) {
            return $this->_propDict["enforcedGrantControls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enforcedGrantControls
    * Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
    *
    * @param string $val The value of the enforcedGrantControls
    *
    * @return AppliedConditionalAccessPolicy
    */
    public function setEnforcedGrantControls($val)
    {
        $this->_propDict["enforcedGrantControls"] = $val;
        return $this;
    }
    /**
    * Gets the enforcedSessionControls
    * Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
    *
    * @return string The enforcedSessionControls
    */
    public function getEnforcedSessionControls()
    {
        if (array_key_exists("enforcedSessionControls", $this->_propDict)) {
            return $this->_propDict["enforcedSessionControls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enforcedSessionControls
    * Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
    *
    * @param string $val The value of the enforcedSessionControls
    *
    * @return AppliedConditionalAccessPolicy
    */
    public function setEnforcedSessionControls($val)
    {
        $this->_propDict["enforcedSessionControls"] = $val;
        return $this;
    }

    /**
    * Gets the result
    * Indicates the result of the CA policy that was triggered. Possible values are:successfailurenotApplied - Policy isn't applied because policy conditions were not met.notEnabled - This is due to the policy in disabled state.
    *
    * @return AppliedConditionalAccessPolicyResult The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "Microsoft\Graph\Model\AppliedConditionalAccessPolicyResult")) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new AppliedConditionalAccessPolicyResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }

    /**
    * Sets the result
    * Indicates the result of the CA policy that was triggered. Possible values are:successfailurenotApplied - Policy isn't applied because policy conditions were not met.notEnabled - This is due to the policy in disabled state.
    *
    * @param AppliedConditionalAccessPolicyResult $val The value to assign to the result
    *
    * @return AppliedConditionalAccessPolicy The AppliedConditionalAccessPolicy
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
         return $this;
    }
}
