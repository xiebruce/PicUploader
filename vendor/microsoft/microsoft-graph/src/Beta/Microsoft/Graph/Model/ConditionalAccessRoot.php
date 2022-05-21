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
namespace Beta\Microsoft\Graph\Model;

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
    * Read-only. Nullable. Returns a collection of the specified Conditional Access policies.
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
    * Read-only. Nullable. Returns a collection of the specified Conditional Access policies.
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

}
