<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleAssignment File
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
* UnifiedRoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleAssignment extends Entity
{
    /**
    * Gets the appScopeId
    * Identifier of the app-specific scope when the assignment scope is app-specific.  Either this property or directoryScopeId is required. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, in).
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
    * Identifier of the app-specific scope when the assignment scope is app-specific.  Either this property or directoryScopeId is required. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, in).
    *
    * @param string $val The appScopeId
    *
    * @return UnifiedRoleAssignment
    */
    public function setAppScopeId($val)
    {
        $this->_propDict["appScopeId"] = $val;
        return $this;
    }

    /**
    * Gets the condition
    *
    * @return string|null The condition
    */
    public function getCondition()
    {
        if (array_key_exists("condition", $this->_propDict)) {
            return $this->_propDict["condition"];
        } else {
            return null;
        }
    }

    /**
    * Sets the condition
    *
    * @param string $val The condition
    *
    * @return UnifiedRoleAssignment
    */
    public function setCondition($val)
    {
        $this->_propDict["condition"] = $val;
        return $this;
    }

    /**
    * Gets the directoryScopeId
    * Identifier of the directory object representing the scope of the assignment.  Either this property or appScopeId is required. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, in).
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
    * Identifier of the directory object representing the scope of the assignment.  Either this property or appScopeId is required. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, in).
    *
    * @param string $val The directoryScopeId
    *
    * @return UnifiedRoleAssignment
    */
    public function setDirectoryScopeId($val)
    {
        $this->_propDict["directoryScopeId"] = $val;
        return $this;
    }

    /**
    * Gets the principalId
    * Identifier of the principal to which the assignment is granted. Supports $filter (eq, in).
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
    * Identifier of the principal to which the assignment is granted. Supports $filter (eq, in).
    *
    * @param string $val The principalId
    *
    * @return UnifiedRoleAssignment
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }

    /**
    * Gets the roleDefinitionId
    * Identifier of the role definition the assignment is for. Read only. Supports $filter (eq, in).
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
    * Identifier of the role definition the assignment is for. Read only. Supports $filter (eq, in).
    *
    * @param string $val The roleDefinitionId
    *
    * @return UnifiedRoleAssignment
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the appScope
    * Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. Supports $expand.
    *
    * @return AppScope|null The appScope
    */
    public function getAppScope()
    {
        if (array_key_exists("appScope", $this->_propDict)) {
            if (is_a($this->_propDict["appScope"], "\Microsoft\Graph\Model\AppScope") || is_null($this->_propDict["appScope"])) {
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
    * Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. Supports $expand.
    *
    * @param AppScope $val The appScope
    *
    * @return UnifiedRoleAssignment
    */
    public function setAppScope($val)
    {
        $this->_propDict["appScope"] = $val;
        return $this;
    }

    /**
    * Gets the directoryScope
    * The directory object that is the scope of the assignment. Read-only. Supports $expand.
    *
    * @return DirectoryObject|null The directoryScope
    */
    public function getDirectoryScope()
    {
        if (array_key_exists("directoryScope", $this->_propDict)) {
            if (is_a($this->_propDict["directoryScope"], "\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["directoryScope"])) {
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
    * The directory object that is the scope of the assignment. Read-only. Supports $expand.
    *
    * @param DirectoryObject $val The directoryScope
    *
    * @return UnifiedRoleAssignment
    */
    public function setDirectoryScope($val)
    {
        $this->_propDict["directoryScope"] = $val;
        return $this;
    }

    /**
    * Gets the principal
    * Referencing the assigned principal. Read-only. Supports $expand.
    *
    * @return DirectoryObject|null The principal
    */
    public function getPrincipal()
    {
        if (array_key_exists("principal", $this->_propDict)) {
            if (is_a($this->_propDict["principal"], "\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["principal"])) {
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
    * Referencing the assigned principal. Read-only. Supports $expand.
    *
    * @param DirectoryObject $val The principal
    *
    * @return UnifiedRoleAssignment
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }

    /**
    * Gets the roleDefinition
    * The roleDefinition the assignment is for.  Supports $expand. roleDefinition.Id will be auto expanded.
    *
    * @return UnifiedRoleDefinition|null The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "\Microsoft\Graph\Model\UnifiedRoleDefinition") || is_null($this->_propDict["roleDefinition"])) {
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
    * The roleDefinition the assignment is for.  Supports $expand. roleDefinition.Id will be auto expanded.
    *
    * @param UnifiedRoleDefinition $val The roleDefinition
    *
    * @return UnifiedRoleAssignment
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }

}
