<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessRoot File
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
* ConditionalAccessRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessRoot extends Entity
{
    /**
    * Gets the authenticationStrength
    *
    * @return AuthenticationStrengthRoot|null The authenticationStrength
    */
    public function getAuthenticationStrength()
    {
        if (array_key_exists("authenticationStrength", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationStrength"], "\Microsoft\Graph\Model\AuthenticationStrengthRoot") || is_null($this->_propDict["authenticationStrength"])) {
                return $this->_propDict["authenticationStrength"];
            } else {
                $this->_propDict["authenticationStrength"] = new AuthenticationStrengthRoot($this->_propDict["authenticationStrength"]);
                return $this->_propDict["authenticationStrength"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationStrength
    *
    * @param AuthenticationStrengthRoot $val The authenticationStrength
    *
    * @return ConditionalAccessRoot
    */
    public function setAuthenticationStrength($val)
    {
        $this->_propDict["authenticationStrength"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationContextClassReferences
    * Read-only. Nullable. Returns a collection of the specified authentication context class references.
     *
     * @return array|null The authenticationContextClassReferences
     */
    public function getAuthenticationContextClassReferences()
    {
        if (array_key_exists("authenticationContextClassReferences", $this->_propDict)) {
           return $this->_propDict["authenticationContextClassReferences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationContextClassReferences
    * Read-only. Nullable. Returns a collection of the specified authentication context class references.
    *
    * @param AuthenticationContextClassReference[] $val The authenticationContextClassReferences
    *
    * @return ConditionalAccessRoot
    */
    public function setAuthenticationContextClassReferences($val)
    {
        $this->_propDict["authenticationContextClassReferences"] = $val;
        return $this;
    }


     /**
     * Gets the namedLocations
    * Read-only. Nullable. Returns a collection of the specified named locations.
     *
     * @return array|null The namedLocations
     */
    public function getNamedLocations()
    {
        if (array_key_exists("namedLocations", $this->_propDict)) {
           return $this->_propDict["namedLocations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the namedLocations
    * Read-only. Nullable. Returns a collection of the specified named locations.
    *
    * @param NamedLocation[] $val The namedLocations
    *
    * @return ConditionalAccessRoot
    */
    public function setNamedLocations($val)
    {
        $this->_propDict["namedLocations"] = $val;
        return $this;
    }


     /**
     * Gets the policies
    * Read-only. Nullable. Returns a collection of the specified Conditional Access (CA) policies.
     *
     * @return array|null The policies
     */
    public function getPolicies()
    {
        if (array_key_exists("policies", $this->_propDict)) {
           return $this->_propDict["policies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policies
    * Read-only. Nullable. Returns a collection of the specified Conditional Access (CA) policies.
    *
    * @param ConditionalAccessPolicy[] $val The policies
    *
    * @return ConditionalAccessRoot
    */
    public function setPolicies($val)
    {
        $this->_propDict["policies"] = $val;
        return $this;
    }


     /**
     * Gets the templates
    * Read-only. Nullable. Returns a collection of the specified Conditional Access templates.
     *
     * @return array|null The templates
     */
    public function getTemplates()
    {
        if (array_key_exists("templates", $this->_propDict)) {
           return $this->_propDict["templates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the templates
    * Read-only. Nullable. Returns a collection of the specified Conditional Access templates.
    *
    * @param ConditionalAccessTemplate[] $val The templates
    *
    * @return ConditionalAccessRoot
    */
    public function setTemplates($val)
    {
        $this->_propDict["templates"] = $val;
        return $this;
    }

}
