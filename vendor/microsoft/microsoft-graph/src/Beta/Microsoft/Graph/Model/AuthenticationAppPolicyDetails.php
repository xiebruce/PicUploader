<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationAppPolicyDetails File
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
* AuthenticationAppPolicyDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationAppPolicyDetails extends Entity
{

    /**
    * Gets the adminConfiguration
    * The admin configuration of the policy on the user's authentication app. For a policy that does not impact the success/failure of the authentication, the evaluation defaults to notApplicable. The possible values are: notApplicable, enabled, disabled, unknownFutureValue.
    *
    * @return AuthenticationAppAdminConfiguration|null The adminConfiguration
    */
    public function getAdminConfiguration()
    {
        if (array_key_exists("adminConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["adminConfiguration"], "\Beta\Microsoft\Graph\Model\AuthenticationAppAdminConfiguration") || is_null($this->_propDict["adminConfiguration"])) {
                return $this->_propDict["adminConfiguration"];
            } else {
                $this->_propDict["adminConfiguration"] = new AuthenticationAppAdminConfiguration($this->_propDict["adminConfiguration"]);
                return $this->_propDict["adminConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the adminConfiguration
    * The admin configuration of the policy on the user's authentication app. For a policy that does not impact the success/failure of the authentication, the evaluation defaults to notApplicable. The possible values are: notApplicable, enabled, disabled, unknownFutureValue.
    *
    * @param AuthenticationAppAdminConfiguration $val The value to assign to the adminConfiguration
    *
    * @return AuthenticationAppPolicyDetails The AuthenticationAppPolicyDetails
    */
    public function setAdminConfiguration($val)
    {
        $this->_propDict["adminConfiguration"] = $val;
         return $this;
    }

    /**
    * Gets the authenticationEvaluation
    * Evaluates the success/failure of the authentication based on the admin configuration of the policy on the user's client authentication app. The possible values are: success, failure, unknownFutureValue.
    *
    * @return AuthenticationAppEvaluation|null The authenticationEvaluation
    */
    public function getAuthenticationEvaluation()
    {
        if (array_key_exists("authenticationEvaluation", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationEvaluation"], "\Beta\Microsoft\Graph\Model\AuthenticationAppEvaluation") || is_null($this->_propDict["authenticationEvaluation"])) {
                return $this->_propDict["authenticationEvaluation"];
            } else {
                $this->_propDict["authenticationEvaluation"] = new AuthenticationAppEvaluation($this->_propDict["authenticationEvaluation"]);
                return $this->_propDict["authenticationEvaluation"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationEvaluation
    * Evaluates the success/failure of the authentication based on the admin configuration of the policy on the user's client authentication app. The possible values are: success, failure, unknownFutureValue.
    *
    * @param AuthenticationAppEvaluation $val The value to assign to the authenticationEvaluation
    *
    * @return AuthenticationAppPolicyDetails The AuthenticationAppPolicyDetails
    */
    public function setAuthenticationEvaluation($val)
    {
        $this->_propDict["authenticationEvaluation"] = $val;
         return $this;
    }
    /**
    * Gets the policyName
    * The name of the policy enforced on the user's authentication app.
    *
    * @return string|null The policyName
    */
    public function getPolicyName()
    {
        if (array_key_exists("policyName", $this->_propDict)) {
            return $this->_propDict["policyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyName
    * The name of the policy enforced on the user's authentication app.
    *
    * @param string $val The value of the policyName
    *
    * @return AuthenticationAppPolicyDetails
    */
    public function setPolicyName($val)
    {
        $this->_propDict["policyName"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Refers to whether the policy executed as expected on the user's client authentication app. The possible values are: unknown, appLockOutOfDate, appLockEnabled, appLockDisabled, appContextOutOfDate, appContextShown, appContextNotShown, locationContextOutOfDate, locationContextShown, locationContextNotShown, numberMatchOutOfDate, numberMatchCorrectNumberEntered, numberMatchIncorrectNumberEntered, numberMatchDeny, tamperResistantHardwareOutOfDate, tamperResistantHardwareUsed, tamperResistantHardwareNotUsed, unknownFutureValue.
    *
    * @return AuthenticationAppPolicyStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AuthenticationAppPolicyStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AuthenticationAppPolicyStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Refers to whether the policy executed as expected on the user's client authentication app. The possible values are: unknown, appLockOutOfDate, appLockEnabled, appLockDisabled, appContextOutOfDate, appContextShown, appContextNotShown, locationContextOutOfDate, locationContextShown, locationContextNotShown, numberMatchOutOfDate, numberMatchCorrectNumberEntered, numberMatchIncorrectNumberEntered, numberMatchDeny, tamperResistantHardwareOutOfDate, tamperResistantHardwareUsed, tamperResistantHardwareNotUsed, unknownFutureValue.
    *
    * @param AuthenticationAppPolicyStatus $val The value to assign to the status
    *
    * @return AuthenticationAppPolicyDetails The AuthenticationAppPolicyDetails
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
