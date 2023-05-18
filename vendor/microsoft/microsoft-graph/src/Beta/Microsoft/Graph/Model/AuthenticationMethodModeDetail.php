<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodModeDetail File
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
* AuthenticationMethodModeDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodModeDetail extends Entity
{
    /**
    * Gets the authenticationMethod
    * The authentication method that this mode modifies. The possible values are: password, voice, hardwareOath, softwareOath, sms, fido2, windowsHelloForBusiness, microsoftAuthenticator, temporaryAccessPass, email, x509Certificate, federation, unknownFutureValue.
    *
    * @return BaseAuthenticationMethod|null The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\BaseAuthenticationMethod") || is_null($this->_propDict["authenticationMethod"])) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new BaseAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethod
    * The authentication method that this mode modifies. The possible values are: password, voice, hardwareOath, softwareOath, sms, fido2, windowsHelloForBusiness, microsoftAuthenticator, temporaryAccessPass, email, x509Certificate, federation, unknownFutureValue.
    *
    * @param BaseAuthenticationMethod $val The authenticationMethod
    *
    * @return AuthenticationMethodModeDetail
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of this mode
    *
    * @return string|null The displayName
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
    * The display name of this mode
    *
    * @param string $val The displayName
    *
    * @return AuthenticationMethodModeDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

}
