<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodConfiguration File
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
* AuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodConfiguration extends Entity
{

     /**
     * Gets the excludeTargets
    * Groups of users that are excluded from a policy.
     *
     * @return array|null The excludeTargets
     */
    public function getExcludeTargets()
    {
        if (array_key_exists("excludeTargets", $this->_propDict)) {
           return $this->_propDict["excludeTargets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeTargets
    * Groups of users that are excluded from a policy.
    *
    * @param ExcludeTarget[] $val The excludeTargets
    *
    * @return AuthenticationMethodConfiguration
    */
    public function setExcludeTargets($val)
    {
        $this->_propDict["excludeTargets"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The state of the policy. Possible values are: enabled, disabled.
    *
    * @return AuthenticationMethodState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AuthenticationMethodState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The state of the policy. Possible values are: enabled, disabled.
    *
    * @param AuthenticationMethodState $val The state
    *
    * @return AuthenticationMethodConfiguration
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

}
