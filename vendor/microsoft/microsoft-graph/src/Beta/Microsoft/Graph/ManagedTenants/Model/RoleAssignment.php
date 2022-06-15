<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleAssignment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* RoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleAssignment extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the assignmentType
    * The type of the admin relationship(s) associated with the role assignment. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue, granularDelegatedAdminPrivileges, delegatedAndGranularDelegetedAdminPrivileges. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: granularDelegatedAdminPrivileges , delegatedAndGranularDelegetedAdminPrivileges.
    *
    * @return DelegatedPrivilegeStatus|null The assignmentType
    */
    public function getAssignmentType()
    {
        if (array_key_exists("assignmentType", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentType"], "\Beta\Microsoft\Graph\ManagedTenants\Model\DelegatedPrivilegeStatus") || is_null($this->_propDict["assignmentType"])) {
                return $this->_propDict["assignmentType"];
            } else {
                $this->_propDict["assignmentType"] = new DelegatedPrivilegeStatus($this->_propDict["assignmentType"]);
                return $this->_propDict["assignmentType"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentType
    * The type of the admin relationship(s) associated with the role assignment. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue, granularDelegatedAdminPrivileges, delegatedAndGranularDelegetedAdminPrivileges. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: granularDelegatedAdminPrivileges , delegatedAndGranularDelegetedAdminPrivileges.
    *
    * @param DelegatedPrivilegeStatus $val The value to assign to the assignmentType
    *
    * @return RoleAssignment The RoleAssignment
    */
    public function setAssignmentType($val)
    {
        $this->_propDict["assignmentType"] = $val;
         return $this;
    }

    /**
    * Gets the roles
    * The collection of roles assigned.
    *
    * @return RoleDefinition|null The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            if (is_a($this->_propDict["roles"], "\Beta\Microsoft\Graph\ManagedTenants\Model\RoleDefinition") || is_null($this->_propDict["roles"])) {
                return $this->_propDict["roles"];
            } else {
                $this->_propDict["roles"] = new RoleDefinition($this->_propDict["roles"]);
                return $this->_propDict["roles"];
            }
        }
        return null;
    }

    /**
    * Sets the roles
    * The collection of roles assigned.
    *
    * @param RoleDefinition $val The value to assign to the roles
    *
    * @return RoleAssignment The RoleAssignment
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
         return $this;
    }
}
