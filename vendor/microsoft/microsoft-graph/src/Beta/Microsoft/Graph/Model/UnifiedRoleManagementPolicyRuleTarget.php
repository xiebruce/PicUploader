<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyRuleTarget File
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
* UnifiedRoleManagementPolicyRuleTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyRuleTarget extends Entity
{
    /**
    * Gets the caller
    * The caller for the policy rule target. Allowed values are: None, Admin, EndUser.
    *
    * @return string|null The caller
    */
    public function getCaller()
    {
        if (array_key_exists("caller", $this->_propDict)) {
            return $this->_propDict["caller"];
        } else {
            return null;
        }
    }

    /**
    * Sets the caller
    * The caller for the policy rule target. Allowed values are: None, Admin, EndUser.
    *
    * @param string $val The value of the caller
    *
    * @return UnifiedRoleManagementPolicyRuleTarget
    */
    public function setCaller($val)
    {
        $this->_propDict["caller"] = $val;
        return $this;
    }
    /**
    * Gets the enforcedSettings
    * The list of settings which are enforced and cannot be overridden by child scopes. Use All for all settings.
    *
    * @return string|null The enforcedSettings
    */
    public function getEnforcedSettings()
    {
        if (array_key_exists("enforcedSettings", $this->_propDict)) {
            return $this->_propDict["enforcedSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enforcedSettings
    * The list of settings which are enforced and cannot be overridden by child scopes. Use All for all settings.
    *
    * @param string $val The value of the enforcedSettings
    *
    * @return UnifiedRoleManagementPolicyRuleTarget
    */
    public function setEnforcedSettings($val)
    {
        $this->_propDict["enforcedSettings"] = $val;
        return $this;
    }
    /**
    * Gets the inheritableSettings
    * The list of settings which can be inherited by child scopes. Use All for all settings.
    *
    * @return string|null The inheritableSettings
    */
    public function getInheritableSettings()
    {
        if (array_key_exists("inheritableSettings", $this->_propDict)) {
            return $this->_propDict["inheritableSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inheritableSettings
    * The list of settings which can be inherited by child scopes. Use All for all settings.
    *
    * @param string $val The value of the inheritableSettings
    *
    * @return UnifiedRoleManagementPolicyRuleTarget
    */
    public function setInheritableSettings($val)
    {
        $this->_propDict["inheritableSettings"] = $val;
        return $this;
    }
    /**
    * Gets the level
    * The level for the policy rule target. Allowed values are: Eligibility, Assignment.
    *
    * @return string|null The level
    */
    public function getLevel()
    {
        if (array_key_exists("level", $this->_propDict)) {
            return $this->_propDict["level"];
        } else {
            return null;
        }
    }

    /**
    * Sets the level
    * The level for the policy rule target. Allowed values are: Eligibility, Assignment.
    *
    * @param string $val The value of the level
    *
    * @return UnifiedRoleManagementPolicyRuleTarget
    */
    public function setLevel($val)
    {
        $this->_propDict["level"] = $val;
        return $this;
    }
    /**
    * Gets the operations
    * The operations for policy rule target. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew.
    *
    * @return string|null The operations
    */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
            return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    * The operations for policy rule target. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew.
    *
    * @param string $val The value of the operations
    *
    * @return UnifiedRoleManagementPolicyRuleTarget
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }

    /**
    * Gets the targetObjects
    *
    * @return DirectoryObject|null The targetObjects
    */
    public function getTargetObjects()
    {
        if (array_key_exists("targetObjects", $this->_propDict)) {
            if (is_a($this->_propDict["targetObjects"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["targetObjects"])) {
                return $this->_propDict["targetObjects"];
            } else {
                $this->_propDict["targetObjects"] = new DirectoryObject($this->_propDict["targetObjects"]);
                return $this->_propDict["targetObjects"];
            }
        }
        return null;
    }

    /**
    * Sets the targetObjects
    *
    * @param DirectoryObject $val The value to assign to the targetObjects
    *
    * @return UnifiedRoleManagementPolicyRuleTarget The UnifiedRoleManagementPolicyRuleTarget
    */
    public function setTargetObjects($val)
    {
        $this->_propDict["targetObjects"] = $val;
         return $this;
    }
}
