<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident File
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
* RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident extends UnifiedRoleManagementAlertIncident
{
    /**
    * Gets the assigneeDisplayName
    *
    * @return string|null The assigneeDisplayName
    */
    public function getAssigneeDisplayName()
    {
        if (array_key_exists("assigneeDisplayName", $this->_propDict)) {
            return $this->_propDict["assigneeDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeDisplayName
    *
    * @param string $val The assigneeDisplayName
    *
    * @return RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident
    */
    public function setAssigneeDisplayName($val)
    {
        $this->_propDict["assigneeDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the assigneeId
    *
    * @return string|null The assigneeId
    */
    public function getAssigneeId()
    {
        if (array_key_exists("assigneeId", $this->_propDict)) {
            return $this->_propDict["assigneeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeId
    *
    * @param string $val The assigneeId
    *
    * @return RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident
    */
    public function setAssigneeId($val)
    {
        $this->_propDict["assigneeId"] = $val;
        return $this;
    }

    /**
    * Gets the assigneeUserPrincipalName
    *
    * @return string|null The assigneeUserPrincipalName
    */
    public function getAssigneeUserPrincipalName()
    {
        if (array_key_exists("assigneeUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["assigneeUserPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeUserPrincipalName
    *
    * @param string $val The assigneeUserPrincipalName
    *
    * @return RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident
    */
    public function setAssigneeUserPrincipalName($val)
    {
        $this->_propDict["assigneeUserPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the assignmentCreatedDateTime
    *
    * @return \DateTime|null The assignmentCreatedDateTime
    */
    public function getAssignmentCreatedDateTime()
    {
        if (array_key_exists("assignmentCreatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentCreatedDateTime"], "\DateTime") || is_null($this->_propDict["assignmentCreatedDateTime"])) {
                return $this->_propDict["assignmentCreatedDateTime"];
            } else {
                $this->_propDict["assignmentCreatedDateTime"] = new \DateTime($this->_propDict["assignmentCreatedDateTime"]);
                return $this->_propDict["assignmentCreatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentCreatedDateTime
    *
    * @param \DateTime $val The assignmentCreatedDateTime
    *
    * @return RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident
    */
    public function setAssignmentCreatedDateTime($val)
    {
        $this->_propDict["assignmentCreatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the roleDefinitionId
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
    *
    * @param string $val The roleDefinitionId
    *
    * @return RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the roleDisplayName
    *
    * @return string|null The roleDisplayName
    */
    public function getRoleDisplayName()
    {
        if (array_key_exists("roleDisplayName", $this->_propDict)) {
            return $this->_propDict["roleDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDisplayName
    *
    * @param string $val The roleDisplayName
    *
    * @return RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident
    */
    public function setRoleDisplayName($val)
    {
        $this->_propDict["roleDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the roleTemplateId
    *
    * @return string|null The roleTemplateId
    */
    public function getRoleTemplateId()
    {
        if (array_key_exists("roleTemplateId", $this->_propDict)) {
            return $this->_propDict["roleTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleTemplateId
    *
    * @param string $val The roleTemplateId
    *
    * @return RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident
    */
    public function setRoleTemplateId($val)
    {
        $this->_propDict["roleTemplateId"] = $val;
        return $this;
    }

}
