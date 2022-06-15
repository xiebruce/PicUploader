<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleScheduleInstanceBase File
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
* UnifiedRoleScheduleInstanceBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleScheduleInstanceBase extends Entity
{
    /**
    * Gets the appScopeId
    * Identifier of the app-specific scope when the assignment or role eligibility is scoped to an app. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
    *
    * @return string|null The appScopeId
    */
    public function getAppScopeId()
    {
        if (array_key_exists("appScopeId", $this->_propDict)) {
            return $this->_propDict["appScopeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appScopeId
    * Identifier of the app-specific scope when the assignment or role eligibility is scoped to an app. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
    *
    * @param string $val The appScopeId
    *
    * @return UnifiedRoleScheduleInstanceBase
    */
    public function setAppScopeId($val)
    {
        $this->_propDict["appScopeId"] = $val;
        return $this;
    }

    /**
    * Gets the directoryScopeId
    * Identifier of the directory object representing the scope of the assignment or role eligibility. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
    *
    * @return string|null The directoryScopeId
    */
    public function getDirectoryScopeId()
    {
        if (array_key_exists("directoryScopeId", $this->_propDict)) {
            return $this->_propDict["directoryScopeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the directoryScopeId
    * Identifier of the directory object representing the scope of the assignment or role eligibility. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
    *
    * @param string $val The directoryScopeId
    *
    * @return UnifiedRoleScheduleInstanceBase
    */
    public function setDirectoryScopeId($val)
    {
        $this->_propDict["directoryScopeId"] = $val;
        return $this;
    }

    /**
    * Gets the principalId
    * Identifier of the principal that has been granted the role assignment or that's eligible for a role.
    *
    * @return string|null The principalId
    */
    public function getPrincipalId()
    {
        if (array_key_exists("principalId", $this->_propDict)) {
            return $this->_propDict["principalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the principalId
    * Identifier of the principal that has been granted the role assignment or that's eligible for a role.
    *
    * @param string $val The principalId
    *
    * @return UnifiedRoleScheduleInstanceBase
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }

    /**
    * Gets the roleDefinitionId
    * Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that the principal is eligible for.
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
    * Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that the principal is eligible for.
    *
    * @param string $val The roleDefinitionId
    *
    * @return UnifiedRoleScheduleInstanceBase
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the appScope
    * Read-only property with details of the app-specific scope when the assignment or role eligibility is scoped to an app. Nullable.
    *
    * @return AppScope|null The appScope
    */
    public function getAppScope()
    {
        if (array_key_exists("appScope", $this->_propDict)) {
            if (is_a($this->_propDict["appScope"], "\Beta\Microsoft\Graph\Model\AppScope") || is_null($this->_propDict["appScope"])) {
                return $this->_propDict["appScope"];
            } else {
                $this->_propDict["appScope"] = new AppScope($this->_propDict["appScope"]);
                return $this->_propDict["appScope"];
            }
        }
        return null;
    }

    /**
    * Sets the appScope
    * Read-only property with details of the app-specific scope when the assignment or role eligibility is scoped to an app. Nullable.
    *
    * @param AppScope $val The appScope
    *
    * @return UnifiedRoleScheduleInstanceBase
    */
    public function setAppScope($val)
    {
        $this->_propDict["appScope"] = $val;
        return $this;
    }

    /**
    * Gets the directoryScope
    * The directory object that is the scope of the assignment or role eligibility. Read-only.
    *
    * @return DirectoryObject|null The directoryScope
    */
    public function getDirectoryScope()
    {
        if (array_key_exists("directoryScope", $this->_propDict)) {
            if (is_a($this->_propDict["directoryScope"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["directoryScope"])) {
                return $this->_propDict["directoryScope"];
            } else {
                $this->_propDict["directoryScope"] = new DirectoryObject($this->_propDict["directoryScope"]);
                return $this->_propDict["directoryScope"];
            }
        }
        return null;
    }

    /**
    * Sets the directoryScope
    * The directory object that is the scope of the assignment or role eligibility. Read-only.
    *
    * @param DirectoryObject $val The directoryScope
    *
    * @return UnifiedRoleScheduleInstanceBase
    */
    public function setDirectoryScope($val)
    {
        $this->_propDict["directoryScope"] = $val;
        return $this;
    }

    /**
    * Gets the principal
    * The principal that's getting a role assignment or role eligibility through the request.
    *
    * @return DirectoryObject|null The principal
    */
    public function getPrincipal()
    {
        if (array_key_exists("principal", $this->_propDict)) {
            if (is_a($this->_propDict["principal"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["principal"])) {
                return $this->_propDict["principal"];
            } else {
                $this->_propDict["principal"] = new DirectoryObject($this->_propDict["principal"]);
                return $this->_propDict["principal"];
            }
        }
        return null;
    }

    /**
    * Sets the principal
    * The principal that's getting a role assignment or role eligibility through the request.
    *
    * @param DirectoryObject $val The principal
    *
    * @return UnifiedRoleScheduleInstanceBase
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }

    /**
    * Gets the roleDefinition
    * Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.
    *
    * @return UnifiedRoleDefinition|null The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "\Beta\Microsoft\Graph\Model\UnifiedRoleDefinition") || is_null($this->_propDict["roleDefinition"])) {
                return $this->_propDict["roleDefinition"];
            } else {
                $this->_propDict["roleDefinition"] = new UnifiedRoleDefinition($this->_propDict["roleDefinition"]);
                return $this->_propDict["roleDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the roleDefinition
    * Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.
    *
    * @param UnifiedRoleDefinition $val The roleDefinition
    *
    * @return UnifiedRoleScheduleInstanceBase
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }

}
