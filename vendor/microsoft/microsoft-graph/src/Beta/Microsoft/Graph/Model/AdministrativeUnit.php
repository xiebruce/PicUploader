<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdministrativeUnit File
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
* AdministrativeUnit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdministrativeUnit extends DirectoryObject
{
    /**
    * Gets the description
    * An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search.
    *
    * @param string $val The description
    *
    * @return AdministrativeUnit
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
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
    * Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    *
    * @param string $val The displayName
    *
    * @return AdministrativeUnit
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isMemberManagementRestricted
    *
    * @return bool|null The isMemberManagementRestricted
    */
    public function getIsMemberManagementRestricted()
    {
        if (array_key_exists("isMemberManagementRestricted", $this->_propDict)) {
            return $this->_propDict["isMemberManagementRestricted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMemberManagementRestricted
    *
    * @param bool $val The isMemberManagementRestricted
    *
    * @return AdministrativeUnit
    */
    public function setIsMemberManagementRestricted($val)
    {
        $this->_propDict["isMemberManagementRestricted"] = boolval($val);
        return $this;
    }

    /**
    * Gets the visibility
    * Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership or Public. If not set, the default behavior is Public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
    *
    * @return string|null The visibility
    */
    public function getVisibility()
    {
        if (array_key_exists("visibility", $this->_propDict)) {
            return $this->_propDict["visibility"];
        } else {
            return null;
        }
    }

    /**
    * Sets the visibility
    * Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership or Public. If not set, the default behavior is Public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
    *
    * @param string $val The visibility
    *
    * @return AdministrativeUnit
    */
    public function setVisibility($val)
    {
        $this->_propDict["visibility"] = $val;
        return $this;
    }


     /**
     * Gets the members
    * Users and groups that are members of this administrative unit. Supports $expand.
     *
     * @return array|null The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }

    /**
    * Sets the members
    * Users and groups that are members of this administrative unit. Supports $expand.
    *
    * @param DirectoryObject[] $val The members
    *
    * @return AdministrativeUnit
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }


     /**
     * Gets the scopedRoleMembers
    * Scoped-role members of this administrative unit.
     *
     * @return array|null The scopedRoleMembers
     */
    public function getScopedRoleMembers()
    {
        if (array_key_exists("scopedRoleMembers", $this->_propDict)) {
           return $this->_propDict["scopedRoleMembers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopedRoleMembers
    * Scoped-role members of this administrative unit.
    *
    * @param ScopedRoleMembership[] $val The scopedRoleMembers
    *
    * @return AdministrativeUnit
    */
    public function setScopedRoleMembers($val)
    {
        $this->_propDict["scopedRoleMembers"] = $val;
        return $this;
    }


     /**
     * Gets the extensions
    * The collection of open extensions defined for this administrative unit. Nullable.
     *
     * @return array|null The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extensions
    * The collection of open extensions defined for this administrative unit. Nullable.
    *
    * @param Extension[] $val The extensions
    *
    * @return AdministrativeUnit
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }

}
