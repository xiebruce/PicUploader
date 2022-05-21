<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SessionLifetimePolicy File
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
* SessionLifetimePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SessionLifetimePolicy extends Entity
{
    /**
    * Gets the detail
    * The human-readable details of the conditional access session management policy applied to the sign-in.
    *
    * @return string|null The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            return $this->_propDict["detail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detail
    * The human-readable details of the conditional access session management policy applied to the sign-in.
    *
    * @param string $val The value of the detail
    *
    * @return SessionLifetimePolicy
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }

    /**
    * Gets the expirationRequirement
    * If a conditional access session management policy required the user to authenticate in this sign-in event, this field describes the policy type that required authentication. The possible values are: rememberMultifactorAuthenticationOnTrustedDevices, tenantTokenLifetimePolicy, audienceTokenLifetimePolicy, signInFrequencyPeriodicReauthentication, ngcMfa, signInFrequencyEveryTime, unknownFutureValue.
    *
    * @return ExpirationRequirement|null The expirationRequirement
    */
    public function getExpirationRequirement()
    {
        if (array_key_exists("expirationRequirement", $this->_propDict)) {
            if (is_a($this->_propDict["expirationRequirement"], "\Beta\Microsoft\Graph\Model\ExpirationRequirement") || is_null($this->_propDict["expirationRequirement"])) {
                return $this->_propDict["expirationRequirement"];
            } else {
                $this->_propDict["expirationRequirement"] = new ExpirationRequirement($this->_propDict["expirationRequirement"]);
                return $this->_propDict["expirationRequirement"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationRequirement
    * If a conditional access session management policy required the user to authenticate in this sign-in event, this field describes the policy type that required authentication. The possible values are: rememberMultifactorAuthenticationOnTrustedDevices, tenantTokenLifetimePolicy, audienceTokenLifetimePolicy, signInFrequencyPeriodicReauthentication, ngcMfa, signInFrequencyEveryTime, unknownFutureValue.
    *
    * @param ExpirationRequirement $val The value to assign to the expirationRequirement
    *
    * @return SessionLifetimePolicy The SessionLifetimePolicy
    */
    public function setExpirationRequirement($val)
    {
        $this->_propDict["expirationRequirement"] = $val;
         return $this;
    }
}
