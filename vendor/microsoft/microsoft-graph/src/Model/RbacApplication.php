<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RbacApplication File
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
* RbacApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RbacApplication extends Entity
{

     /**
     * Gets the resourceNamespaces
     *
     * @return array|null The resourceNamespaces
     */
    public function getResourceNamespaces()
    {
        if (array_key_exists("resourceNamespaces", $this->_propDict)) {
           return $this->_propDict["resourceNamespaces"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceNamespaces
    *
    * @param UnifiedRbacResourceNamespace[] $val The resourceNamespaces
    *
    * @return RbacApplication
    */
    public function setResourceNamespaces($val)
    {
        $this->_propDict["resourceNamespaces"] = $val;
        return $this;
    }


     /**
     * Gets the roleAssignments
    * Resource to grant access to users or groups.
     *
     * @return array|null The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists("roleAssignments", $this->_propDict)) {
           return $this->_propDict["roleAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleAssignments
    * Resource to grant access to users or groups.
    *
    * @param UnifiedRoleAssignment[] $val The roleAssignments
    *
    * @return RbacApplication
    */
    public function setRoleAssignments($val)
    {
        $this->_propDict["roleAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the roleDefinitions
    * Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     *
     * @return array|null The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDefinitions
    * Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
    *
    * @param UnifiedRoleDefinition[] $val The roleDefinitions
    *
    * @return RbacApplication
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the roleAssignmentScheduleInstances
    * Instances for active role assignments.
     *
     * @return array|null The roleAssignmentScheduleInstances
     */
    public function getRoleAssignmentScheduleInstances()
    {
        if (array_key_exists("roleAssignmentScheduleInstances", $this->_propDict)) {
           return $this->_propDict["roleAssignmentScheduleInstances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleAssignmentScheduleInstances
    * Instances for active role assignments.
    *
    * @param UnifiedRoleAssignmentScheduleInstance[] $val The roleAssignmentScheduleInstances
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentScheduleInstances($val)
    {
        $this->_propDict["roleAssignmentScheduleInstances"] = $val;
        return $this;
    }


     /**
     * Gets the roleAssignmentScheduleRequests
    * Requests for active role assignments to principals through PIM.
     *
     * @return array|null The roleAssignmentScheduleRequests
     */
    public function getRoleAssignmentScheduleRequests()
    {
        if (array_key_exists("roleAssignmentScheduleRequests", $this->_propDict)) {
           return $this->_propDict["roleAssignmentScheduleRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleAssignmentScheduleRequests
    * Requests for active role assignments to principals through PIM.
    *
    * @param UnifiedRoleAssignmentScheduleRequest[] $val The roleAssignmentScheduleRequests
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentScheduleRequests($val)
    {
        $this->_propDict["roleAssignmentScheduleRequests"] = $val;
        return $this;
    }


     /**
     * Gets the roleAssignmentSchedules
    * Schedules for active role assignment operations.
     *
     * @return array|null The roleAssignmentSchedules
     */
    public function getRoleAssignmentSchedules()
    {
        if (array_key_exists("roleAssignmentSchedules", $this->_propDict)) {
           return $this->_propDict["roleAssignmentSchedules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleAssignmentSchedules
    * Schedules for active role assignment operations.
    *
    * @param UnifiedRoleAssignmentSchedule[] $val The roleAssignmentSchedules
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentSchedules($val)
    {
        $this->_propDict["roleAssignmentSchedules"] = $val;
        return $this;
    }


     /**
     * Gets the roleEligibilityScheduleInstances
    * Instances for role eligibility requests.
     *
     * @return array|null The roleEligibilityScheduleInstances
     */
    public function getRoleEligibilityScheduleInstances()
    {
        if (array_key_exists("roleEligibilityScheduleInstances", $this->_propDict)) {
           return $this->_propDict["roleEligibilityScheduleInstances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleEligibilityScheduleInstances
    * Instances for role eligibility requests.
    *
    * @param UnifiedRoleEligibilityScheduleInstance[] $val The roleEligibilityScheduleInstances
    *
    * @return RbacApplication
    */
    public function setRoleEligibilityScheduleInstances($val)
    {
        $this->_propDict["roleEligibilityScheduleInstances"] = $val;
        return $this;
    }


     /**
     * Gets the roleEligibilityScheduleRequests
    * Requests for role eligibilities for principals through PIM.
     *
     * @return array|null The roleEligibilityScheduleRequests
     */
    public function getRoleEligibilityScheduleRequests()
    {
        if (array_key_exists("roleEligibilityScheduleRequests", $this->_propDict)) {
           return $this->_propDict["roleEligibilityScheduleRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleEligibilityScheduleRequests
    * Requests for role eligibilities for principals through PIM.
    *
    * @param UnifiedRoleEligibilityScheduleRequest[] $val The roleEligibilityScheduleRequests
    *
    * @return RbacApplication
    */
    public function setRoleEligibilityScheduleRequests($val)
    {
        $this->_propDict["roleEligibilityScheduleRequests"] = $val;
        return $this;
    }


     /**
     * Gets the roleEligibilitySchedules
    * Schedules for role eligibility operations.
     *
     * @return array|null The roleEligibilitySchedules
     */
    public function getRoleEligibilitySchedules()
    {
        if (array_key_exists("roleEligibilitySchedules", $this->_propDict)) {
           return $this->_propDict["roleEligibilitySchedules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleEligibilitySchedules
    * Schedules for role eligibility operations.
    *
    * @param UnifiedRoleEligibilitySchedule[] $val The roleEligibilitySchedules
    *
    * @return RbacApplication
    */
    public function setRoleEligibilitySchedules($val)
    {
        $this->_propDict["roleEligibilitySchedules"] = $val;
        return $this;
    }

}
