<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyAssignment File
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
* UnifiedRoleManagementPolicyAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyAssignment extends Entity
{
    /**
    * Gets the policyId
    * The id of the policy.
    *
    * @return string|null The policyId
    */
    public function getPolicyId()
    {
        if (array_key_exists("policyId", $this->_propDict)) {
            return $this->_propDict["policyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyId
    * The id of the policy.
    *
    * @param string $val The policyId
    *
    * @return UnifiedRoleManagementPolicyAssignment
    */
    public function setPolicyId($val)
    {
        $this->_propDict["policyId"] = $val;
        return $this;
    }

    /**
    * Gets the roleDefinitionId
    * The id of the role definition where the policy applies. If not specified, the policy applies to all roles.
    *
    * @return string|null The roleDefinitionId
    */
    public function getRoleDefinitionId()
    {
        if (array_key_exists("roleDefinitionId", $this->_propDict)) {
            return $this->_propDict["roleDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDefinitionId
    * The id of the role definition where the policy applies. If not specified, the policy applies to all roles.
    *
    * @param string $val The roleDefinitionId
    *
    * @return UnifiedRoleManagementPolicyAssignment
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the scopeId
    * The id of the scope where the policy is assigned. E.g. '/', groupId, etc.
    *
    * @return string|null The scopeId
    */
    public function getScopeId()
    {
        if (array_key_exists("scopeId", $this->_propDict)) {
            return $this->_propDict["scopeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeId
    * The id of the scope where the policy is assigned. E.g. '/', groupId, etc.
    *
    * @param string $val The scopeId
    *
    * @return UnifiedRoleManagementPolicyAssignment
    */
    public function setScopeId($val)
    {
        $this->_propDict["scopeId"] = $val;
        return $this;
    }

    /**
    * Gets the scopeType
    * The type of the scope where the policy is assigned. One of Directory, DirectoryRole, Group.
    *
    * @return string|null The scopeType
    */
    public function getScopeType()
    {
        if (array_key_exists("scopeType", $this->_propDict)) {
            return $this->_propDict["scopeType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeType
    * The type of the scope where the policy is assigned. One of Directory, DirectoryRole, Group.
    *
    * @param string $val The scopeType
    *
    * @return UnifiedRoleManagementPolicyAssignment
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }

    /**
    * Gets the policy
    * The policy for the assignment.
    *
    * @return UnifiedRoleManagementPolicy|null The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Model\UnifiedRoleManagementPolicy") || is_null($this->_propDict["policy"])) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new UnifiedRoleManagementPolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }

    /**
    * Sets the policy
    * The policy for the assignment.
    *
    * @param UnifiedRoleManagementPolicy $val The policy
    *
    * @return UnifiedRoleManagementPolicyAssignment
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }

}
