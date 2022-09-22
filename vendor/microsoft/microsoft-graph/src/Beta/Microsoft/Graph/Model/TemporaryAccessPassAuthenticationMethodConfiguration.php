<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TemporaryAccessPassAuthenticationMethodConfiguration File
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
* TemporaryAccessPassAuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TemporaryAccessPassAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration
{
    /**
    * Gets the defaultLength
    * Default length in characters of a Temporary Access Pass object. Must be between 8 and 48 characters.
    *
    * @return int|null The defaultLength
    */
    public function getDefaultLength()
    {
        if (array_key_exists("defaultLength", $this->_propDict)) {
            return $this->_propDict["defaultLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLength
    * Default length in characters of a Temporary Access Pass object. Must be between 8 and 48 characters.
    *
    * @param int $val The defaultLength
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setDefaultLength($val)
    {
        $this->_propDict["defaultLength"] = intval($val);
        return $this;
    }

    /**
    * Gets the defaultLifetimeInMinutes
    * Default lifetime in minutes for a Temporary Access Pass. Value can be any integer between the minimumLifetimeInMinutes and maximumLifetimeInMinutes.
    *
    * @return int|null The defaultLifetimeInMinutes
    */
    public function getDefaultLifetimeInMinutes()
    {
        if (array_key_exists("defaultLifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["defaultLifetimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLifetimeInMinutes
    * Default lifetime in minutes for a Temporary Access Pass. Value can be any integer between the minimumLifetimeInMinutes and maximumLifetimeInMinutes.
    *
    * @param int $val The defaultLifetimeInMinutes
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setDefaultLifetimeInMinutes($val)
    {
        $this->_propDict["defaultLifetimeInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the isUsableOnce
    * If true, all the passes in the tenant will be restricted to one-time use. If false, passes in the tenant can be created to be either one-time use or reusable.
    *
    * @return bool|null The isUsableOnce
    */
    public function getIsUsableOnce()
    {
        if (array_key_exists("isUsableOnce", $this->_propDict)) {
            return $this->_propDict["isUsableOnce"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isUsableOnce
    * If true, all the passes in the tenant will be restricted to one-time use. If false, passes in the tenant can be created to be either one-time use or reusable.
    *
    * @param bool $val The isUsableOnce
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setIsUsableOnce($val)
    {
        $this->_propDict["isUsableOnce"] = boolval($val);
        return $this;
    }

    /**
    * Gets the maximumLifetimeInMinutes
    * Maximum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
    *
    * @return int|null The maximumLifetimeInMinutes
    */
    public function getMaximumLifetimeInMinutes()
    {
        if (array_key_exists("maximumLifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["maximumLifetimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumLifetimeInMinutes
    * Maximum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
    *
    * @param int $val The maximumLifetimeInMinutes
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setMaximumLifetimeInMinutes($val)
    {
        $this->_propDict["maximumLifetimeInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the minimumLifetimeInMinutes
    * Minimum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
    *
    * @return int|null The minimumLifetimeInMinutes
    */
    public function getMinimumLifetimeInMinutes()
    {
        if (array_key_exists("minimumLifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["minimumLifetimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumLifetimeInMinutes
    * Minimum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
    *
    * @param int $val The minimumLifetimeInMinutes
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setMinimumLifetimeInMinutes($val)
    {
        $this->_propDict["minimumLifetimeInMinutes"] = intval($val);
        return $this;
    }


     /**
     * Gets the includeTargets
    * A collection of users or groups who are enabled to use the authentication method.
     *
     * @return array|null The includeTargets
     */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict)) {
           return $this->_propDict["includeTargets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeTargets
    * A collection of users or groups who are enabled to use the authentication method.
    *
    * @param AuthenticationMethodTarget[] $val The includeTargets
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setIncludeTargets($val)
    {
        $this->_propDict["includeTargets"] = $val;
        return $this;
    }

}
