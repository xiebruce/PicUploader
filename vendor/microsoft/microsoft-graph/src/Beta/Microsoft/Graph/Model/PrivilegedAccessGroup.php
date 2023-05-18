<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessGroup File
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
* PrivilegedAccessGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessGroup extends Entity
{

     /**
     * Gets the assignmentApprovals
     *
     * @return array|null The assignmentApprovals
     */
    public function getAssignmentApprovals()
    {
        if (array_key_exists("assignmentApprovals", $this->_propDict)) {
           return $this->_propDict["assignmentApprovals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentApprovals
    *
    * @param Approval[] $val The assignmentApprovals
    *
    * @return PrivilegedAccessGroup
    */
    public function setAssignmentApprovals($val)
    {
        $this->_propDict["assignmentApprovals"] = $val;
        return $this;
    }


     /**
     * Gets the assignmentScheduleInstances
    * The instances of assignment schedules to activate a just-in-time access.
     *
     * @return array|null The assignmentScheduleInstances
     */
    public function getAssignmentScheduleInstances()
    {
        if (array_key_exists("assignmentScheduleInstances", $this->_propDict)) {
           return $this->_propDict["assignmentScheduleInstances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentScheduleInstances
    * The instances of assignment schedules to activate a just-in-time access.
    *
    * @param PrivilegedAccessGroupAssignmentScheduleInstance[] $val The assignmentScheduleInstances
    *
    * @return PrivilegedAccessGroup
    */
    public function setAssignmentScheduleInstances($val)
    {
        $this->_propDict["assignmentScheduleInstances"] = $val;
        return $this;
    }


     /**
     * Gets the assignmentScheduleRequests
    * The schedule requests for operations to create, update, delete, extend, and renew an assignment.
     *
     * @return array|null The assignmentScheduleRequests
     */
    public function getAssignmentScheduleRequests()
    {
        if (array_key_exists("assignmentScheduleRequests", $this->_propDict)) {
           return $this->_propDict["assignmentScheduleRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentScheduleRequests
    * The schedule requests for operations to create, update, delete, extend, and renew an assignment.
    *
    * @param PrivilegedAccessGroupAssignmentScheduleRequest[] $val The assignmentScheduleRequests
    *
    * @return PrivilegedAccessGroup
    */
    public function setAssignmentScheduleRequests($val)
    {
        $this->_propDict["assignmentScheduleRequests"] = $val;
        return $this;
    }


     /**
     * Gets the assignmentSchedules
    * The assignment schedules to activate a just-in-time access.
     *
     * @return array|null The assignmentSchedules
     */
    public function getAssignmentSchedules()
    {
        if (array_key_exists("assignmentSchedules", $this->_propDict)) {
           return $this->_propDict["assignmentSchedules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentSchedules
    * The assignment schedules to activate a just-in-time access.
    *
    * @param PrivilegedAccessGroupAssignmentSchedule[] $val The assignmentSchedules
    *
    * @return PrivilegedAccessGroup
    */
    public function setAssignmentSchedules($val)
    {
        $this->_propDict["assignmentSchedules"] = $val;
        return $this;
    }


     /**
     * Gets the eligibilityScheduleInstances
    * The instances of eligibility schedules to activate a just-in-time access.
     *
     * @return array|null The eligibilityScheduleInstances
     */
    public function getEligibilityScheduleInstances()
    {
        if (array_key_exists("eligibilityScheduleInstances", $this->_propDict)) {
           return $this->_propDict["eligibilityScheduleInstances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eligibilityScheduleInstances
    * The instances of eligibility schedules to activate a just-in-time access.
    *
    * @param PrivilegedAccessGroupEligibilityScheduleInstance[] $val The eligibilityScheduleInstances
    *
    * @return PrivilegedAccessGroup
    */
    public function setEligibilityScheduleInstances($val)
    {
        $this->_propDict["eligibilityScheduleInstances"] = $val;
        return $this;
    }


     /**
     * Gets the eligibilityScheduleRequests
    * The schedule requests for operations to create, update, delete, extend, and renew an eligibility.
     *
     * @return array|null The eligibilityScheduleRequests
     */
    public function getEligibilityScheduleRequests()
    {
        if (array_key_exists("eligibilityScheduleRequests", $this->_propDict)) {
           return $this->_propDict["eligibilityScheduleRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eligibilityScheduleRequests
    * The schedule requests for operations to create, update, delete, extend, and renew an eligibility.
    *
    * @param PrivilegedAccessGroupEligibilityScheduleRequest[] $val The eligibilityScheduleRequests
    *
    * @return PrivilegedAccessGroup
    */
    public function setEligibilityScheduleRequests($val)
    {
        $this->_propDict["eligibilityScheduleRequests"] = $val;
        return $this;
    }


     /**
     * Gets the eligibilitySchedules
    * The eligibility schedules to activate a just-in-time access.
     *
     * @return array|null The eligibilitySchedules
     */
    public function getEligibilitySchedules()
    {
        if (array_key_exists("eligibilitySchedules", $this->_propDict)) {
           return $this->_propDict["eligibilitySchedules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eligibilitySchedules
    * The eligibility schedules to activate a just-in-time access.
    *
    * @param PrivilegedAccessGroupEligibilitySchedule[] $val The eligibilitySchedules
    *
    * @return PrivilegedAccessGroup
    */
    public function setEligibilitySchedules($val)
    {
        $this->_propDict["eligibilitySchedules"] = $val;
        return $this;
    }

}
