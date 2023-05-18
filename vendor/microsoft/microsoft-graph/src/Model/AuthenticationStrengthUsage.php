<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationStrengthUsage File
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
* AuthenticationStrengthUsage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationStrengthUsage extends Entity
{

    /**
    * Gets the mfa
    *
    * @return ConditionalAccessPolicy|null The mfa
    */
    public function getMfa()
    {
        if (array_key_exists("mfa", $this->_propDict)) {
            if (is_a($this->_propDict["mfa"], "\Microsoft\Graph\Model\ConditionalAccessPolicy") || is_null($this->_propDict["mfa"])) {
                return $this->_propDict["mfa"];
            } else {
                $this->_propDict["mfa"] = new ConditionalAccessPolicy($this->_propDict["mfa"]);
                return $this->_propDict["mfa"];
            }
        }
        return null;
    }

    /**
    * Sets the mfa
    *
    * @param ConditionalAccessPolicy $val The value to assign to the mfa
    *
    * @return AuthenticationStrengthUsage The AuthenticationStrengthUsage
    */
    public function setMfa($val)
    {
        $this->_propDict["mfa"] = $val;
         return $this;
    }

    /**
    * Gets the none
    *
    * @return ConditionalAccessPolicy|null The none
    */
    public function getNone()
    {
        if (array_key_exists("none", $this->_propDict)) {
            if (is_a($this->_propDict["none"], "\Microsoft\Graph\Model\ConditionalAccessPolicy") || is_null($this->_propDict["none"])) {
                return $this->_propDict["none"];
            } else {
                $this->_propDict["none"] = new ConditionalAccessPolicy($this->_propDict["none"]);
                return $this->_propDict["none"];
            }
        }
        return null;
    }

    /**
    * Sets the none
    *
    * @param ConditionalAccessPolicy $val The value to assign to the none
    *
    * @return AuthenticationStrengthUsage The AuthenticationStrengthUsage
    */
    public function setNone($val)
    {
        $this->_propDict["none"] = $val;
         return $this;
    }
}
