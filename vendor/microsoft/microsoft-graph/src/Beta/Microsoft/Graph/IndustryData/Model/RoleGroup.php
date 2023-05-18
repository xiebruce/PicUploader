<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* RoleGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleGroup extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The name of the role group.
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
    * The name of the role group.
    *
    * @param string $val The displayName
    *
    * @return RoleGroup
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the roles
    * The set of roles included in the role group.
     *
     * @return array|null The roles
     */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
           return $this->_propDict["roles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roles
    * The set of roles included in the role group.
    *
    * @param RoleReferenceValue[] $val The roles
    *
    * @return RoleGroup
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
        return $this;
    }

}
