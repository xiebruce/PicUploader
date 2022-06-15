<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleAssignmentSchedule File
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
* UnifiedRoleAssignmentSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleAssignmentSchedule extends UnifiedRoleScheduleBase
{
    /**
    * Gets the assignmentType
    * Type of the assignment which can either be Assigned or Activated. Supports $filter (eq, ne).
    *
    * @return string|null The assignmentType
    */
    public function getAssignmentType()
    {
        if (array_key_exists("assignmentType", $this->_propDict)) {
            return $this->_propDict["assignmentType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentType
    * Type of the assignment which can either be Assigned or Activated. Supports $filter (eq, ne).
    *
    * @param string $val The assignmentType
    *
    * @return UnifiedRoleAssignmentSchedule
    */
    public function setAssignmentType($val)
    {
        $this->_propDict["assignmentType"] = $val;
        return $this;
    }

    /**
    * Gets the memberType
    * How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
    *
    * @return string|null The memberType
    */
    public function getMemberType()
    {
        if (array_key_exists("memberType", $this->_propDict)) {
            return $this->_propDict["memberType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the memberType
    * How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
    *
    * @param string $val The memberType
    *
    * @return UnifiedRoleAssignmentSchedule
    */
    public function setMemberType($val)
    {
        $this->_propDict["memberType"] = $val;
        return $this;
    }

    /**
    * Gets the scheduleInfo
    * The period of the role assignment. It can represent a single occurrence or multiple recurrences.
    *
    * @return RequestSchedule|null The scheduleInfo
    */
    public function getScheduleInfo()
    {
        if (array_key_exists("scheduleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleInfo"], "\Beta\Microsoft\Graph\Model\RequestSchedule") || is_null($this->_propDict["scheduleInfo"])) {
                return $this->_propDict["scheduleInfo"];
            } else {
                $this->_propDict["scheduleInfo"] = new RequestSchedule($this->_propDict["scheduleInfo"]);
                return $this->_propDict["scheduleInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduleInfo
    * The period of the role assignment. It can represent a single occurrence or multiple recurrences.
    *
    * @param RequestSchedule $val The scheduleInfo
    *
    * @return UnifiedRoleAssignmentSchedule
    */
    public function setScheduleInfo($val)
    {
        $this->_propDict["scheduleInfo"] = $val;
        return $this;
    }

    /**
    * Gets the activatedUsing
    * If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
    *
    * @return UnifiedRoleEligibilitySchedule|null The activatedUsing
    */
    public function getActivatedUsing()
    {
        if (array_key_exists("activatedUsing", $this->_propDict)) {
            if (is_a($this->_propDict["activatedUsing"], "\Beta\Microsoft\Graph\Model\UnifiedRoleEligibilitySchedule") || is_null($this->_propDict["activatedUsing"])) {
                return $this->_propDict["activatedUsing"];
            } else {
                $this->_propDict["activatedUsing"] = new UnifiedRoleEligibilitySchedule($this->_propDict["activatedUsing"]);
                return $this->_propDict["activatedUsing"];
            }
        }
        return null;
    }

    /**
    * Sets the activatedUsing
    * If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
    *
    * @param UnifiedRoleEligibilitySchedule $val The activatedUsing
    *
    * @return UnifiedRoleAssignmentSchedule
    */
    public function setActivatedUsing($val)
    {
        $this->_propDict["activatedUsing"] = $val;
        return $this;
    }

}
