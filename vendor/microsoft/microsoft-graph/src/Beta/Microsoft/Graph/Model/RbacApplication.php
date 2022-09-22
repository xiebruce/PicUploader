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
namespace Beta\Microsoft\Graph\Model;

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
     * Gets the transitiveRoleAssignments
     *
     * @return array|null The transitiveRoleAssignments
     */
    public function getTransitiveRoleAssignments()
    {
        if (array_key_exists("transitiveRoleAssignments", $this->_propDict)) {
           return $this->_propDict["transitiveRoleAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transitiveRoleAssignments
    *
    * @param UnifiedRoleAssignment[] $val The transitiveRoleAssignments
    *
    * @return RbacApplication
    */
    public function setTransitiveRoleAssignments($val)
    {
        $this->_propDict["transitiveRoleAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the roleAssignmentApprovals
     *
     * @return array|null The roleAssignmentApprovals
     */
    public function getRoleAssignmentApprovals()
    {
        if (array_key_exists("roleAssignmentApprovals", $this->_propDict)) {
           return $this->_propDict["roleAssignmentApprovals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleAssignmentApprovals
    *
    * @param Approval[] $val The roleAssignmentApprovals
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentApprovals($val)
    {
        $this->_propDict["roleAssignmentApprovals"] = $val;
        return $this;
    }


     /**
     * Gets the roleAssignmentScheduleInstances
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
