<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftAuthenticatorAuthenticationMethodTarget File
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
* MicrosoftAuthenticatorAuthenticationMethodTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftAuthenticatorAuthenticationMethodTarget extends AuthenticationMethodTarget
{
    /**
    * Gets the authenticationMode
    * Determines which types of notifications can be used for sign-in. Possible values are: any, deviceBasedPush (passwordless only), push.
    *
    * @return MicrosoftAuthenticatorAuthenticationMode|null The authenticationMode
    */
    public function getAuthenticationMode()
    {
        if (array_key_exists("authenticationMode", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMode"], "\Microsoft\Graph\Model\MicrosoftAuthenticatorAuthenticationMode") || is_null($this->_propDict["authenticationMode"])) {
                return $this->_propDict["authenticationMode"];
            } else {
                $this->_propDict["authenticationMode"] = new MicrosoftAuthenticatorAuthenticationMode($this->_propDict["authenticationMode"]);
                return $this->_propDict["authenticationMode"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMode
    * Determines which types of notifications can be used for sign-in. Possible values are: any, deviceBasedPush (passwordless only), push.
    *
    * @param MicrosoftAuthenticatorAuthenticationMode $val The authenticationMode
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public function setAuthenticationMode($val)
    {
        $this->_propDict["authenticationMode"] = $val;
        return $this;
    }

}
