<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicy File
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
* UnifiedRoleManagementPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicy extends Entity
{
    /**
    * Gets the description
    * Description for the policy.
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
    * Description for the policy.
    *
    * @param string $val The description
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name for the policy.
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
    * Display name for the policy.
    *
    * @param string $val The displayName
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isOrganizationDefault
    * This can only be set to true for a single tenant-wide policy which will apply to all scopes and roles. Set the scopeId to / and scopeType to Directory. Supports $filter (eq, ne).
    *
    * @return bool|null The isOrganizationDefault
    */
    public function getIsOrganizationDefault()
    {
        if (array_key_exists("isOrganizationDefault", $this->_propDict)) {
            return $this->_propDict["isOrganizationDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOrganizationDefault
    * This can only be set to true for a single tenant-wide policy which will apply to all scopes and roles. Set the scopeId to / and scopeType to Directory. Supports $filter (eq, ne).
    *
    * @param bool $val The isOrganizationDefault
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setIsOrganizationDefault($val)
    {
        $this->_propDict["isOrganizationDefault"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The identity who last modified the role setting.
    *
    * @return Identity|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new Identity($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * The identity who last modified the role setting.
    *
    * @param Identity $val The lastModifiedBy
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The time when the role setting was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The time when the role setting was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the scopeId
    * The identifier of the scope where the policy is created. Can be / for the tenant or a group ID. Required.
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
    * The identifier of the scope where the policy is created. Can be / for the tenant or a group ID. Required.
    *
    * @param string $val The scopeId
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setScopeId($val)
    {
        $this->_propDict["scopeId"] = $val;
        return $this;
    }

    /**
    * Gets the scopeType
    * The type of the scope where the policy is created. One of Directory, DirectoryRole. Required.
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
    * The type of the scope where the policy is created. One of Directory, DirectoryRole. Required.
    *
    * @param string $val The scopeType
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }


     /**
     * Gets the effectiveRules
    * The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval. Supports $expand.
     *
     * @return array|null The effectiveRules
     */
    public function getEffectiveRules()
    {
        if (array_key_exists("effectiveRules", $this->_propDict)) {
           return $this->_propDict["effectiveRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the effectiveRules
    * The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval. Supports $expand.
    *
    * @param UnifiedRoleManagementPolicyRule[] $val The effectiveRules
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setEffectiveRules($val)
    {
        $this->_propDict["effectiveRules"] = $val;
        return $this;
    }


     /**
     * Gets the rules
    * The collection of rules like approval rules and expiration rules. Supports $expand.
     *
     * @return array|null The rules
     */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
           return $this->_propDict["rules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rules
    * The collection of rules like approval rules and expiration rules. Supports $expand.
    *
    * @param UnifiedRoleManagementPolicyRule[] $val The rules
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
        return $this;
    }

}
