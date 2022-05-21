<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationStrength File
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
* AuthenticationStrength class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationStrength extends Entity
{
    /**
    * Gets the authenticationStrengthId
    * Identifier of the authentication strength.
    *
    * @return string|null The authenticationStrengthId
    */
    public function getAuthenticationStrengthId()
    {
        if (array_key_exists("authenticationStrengthId", $this->_propDict)) {
            return $this->_propDict["authenticationStrengthId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationStrengthId
    * Identifier of the authentication strength.
    *
    * @param string $val The value of the authenticationStrengthId
    *
    * @return AuthenticationStrength
    */
    public function setAuthenticationStrengthId($val)
    {
        $this->_propDict["authenticationStrengthId"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The name of the authentication strength.
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
    * The name of the authentication strength.
    *
    * @param string $val The value of the displayName
    *
    * @return AuthenticationStrength
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
