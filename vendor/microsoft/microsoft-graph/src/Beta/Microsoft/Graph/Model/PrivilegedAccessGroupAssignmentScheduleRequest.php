<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessGroupAssignmentScheduleRequest File
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
* PrivilegedAccessGroupAssignmentScheduleRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessGroupAssignmentScheduleRequest extends PrivilegedAccessScheduleRequest
{
    /**
    * Gets the accessId
    * The identifier of a membership or ownership assignment relationship to the group. Required. The possible values are: owner, member, unknownFutureValue.
    *
    * @return PrivilegedAccessGroupRelationships|null The accessId
    */
    public function getAccessId()
    {
        if (array_key_exists("accessId", $this->_propDict)) {
            if (is_a($this->_propDict["accessId"], "\Beta\Microsoft\Graph\Model\PrivilegedAccessGroupRelationships") || is_null($this->_propDict["accessId"])) {
                return $this->_propDict["accessId"];
            } else {
                $this->_propDict["accessId"] = new PrivilegedAccessGroupRelationships($this->_propDict["accessId"]);
                return $this->_propDict["accessId"];
            }
        }
        return null;
    }

    /**
    * Sets the accessId
    * The identifier of a membership or ownership assignment relationship to the group. Required. The possible values are: owner, member, unknownFutureValue.
    *
    * @param PrivilegedAccessGroupRelationships $val The accessId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setAccessId($val)
    {
        $this->_propDict["accessId"] = $val;
        return $this;
    }

    /**
    * Gets the groupId
    * The identifier of the group representing the scope of the membership or ownership assignment through PIM for groups. Required.
    *
    * @return string|null The groupId
    */
    public function getGroupId()
    {
        if (array_key_exists("groupId", $this->_propDict)) {
            return $this->_propDict["groupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupId
    * The identifier of the group representing the scope of the membership or ownership assignment through PIM for groups. Required.
    *
    * @param string $val The groupId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setGroupId($val)
    {
        $this->_propDict["groupId"] = $val;
        return $this;
    }

    /**
    * Gets the principalId
    * The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for groups. Supports $filter (eq, ne).
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
    * The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for groups. Supports $filter (eq, ne).
    *
    * @param string $val The principalId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }

    /**
    * Gets the targetScheduleId
    * The identifier of the schedule that's created from the membership or ownership assignment request. Supports $filter (eq, ne).
    *
    * @return string|null The targetScheduleId
    */
    public function getTargetScheduleId()
    {
        if (array_key_exists("targetScheduleId", $this->_propDict)) {
            return $this->_propDict["targetScheduleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetScheduleId
    * The identifier of the schedule that's created from the membership or ownership assignment request. Supports $filter (eq, ne).
    *
    * @param string $val The targetScheduleId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setTargetScheduleId($val)
    {
        $this->_propDict["targetScheduleId"] = $val;
        return $this;
    }

    /**
    * Gets the activatedUsing
    * When the request activates a membership or ownership assignment in PIM for groups, this object represents the eligibility policy for the group. Otherwise, it is null. Supports $expand.
    *
    * @return PrivilegedAccessGroupEligibilitySchedule|null The activatedUsing
    */
    public function getActivatedUsing()
    {
        if (array_key_exists("activatedUsing", $this->_propDict)) {
            if (is_a($this->_propDict["activatedUsing"], "\Beta\Microsoft\Graph\Model\PrivilegedAccessGroupEligibilitySchedule") || is_null($this->_propDict["activatedUsing"])) {
                return $this->_propDict["activatedUsing"];
            } else {
                $this->_propDict["activatedUsing"] = new PrivilegedAccessGroupEligibilitySchedule($this->_propDict["activatedUsing"]);
                return $this->_propDict["activatedUsing"];
            }
        }
        return null;
    }

    /**
    * Sets the activatedUsing
    * When the request activates a membership or ownership assignment in PIM for groups, this object represents the eligibility policy for the group. Otherwise, it is null. Supports $expand.
    *
    * @param PrivilegedAccessGroupEligibilitySchedule $val The activatedUsing
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setActivatedUsing($val)
    {
        $this->_propDict["activatedUsing"] = $val;
        return $this;
    }

    /**
    * Gets the group
    * References the group that is the scope of the membership or ownership assignment request through PIM for groups. Supports $expand.
    *
    * @return Group|null The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "\Beta\Microsoft\Graph\Model\Group") || is_null($this->_propDict["group"])) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new Group($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    * References the group that is the scope of the membership or ownership assignment request through PIM for groups. Supports $expand.
    *
    * @param Group $val The group
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }

    /**
    * Gets the principal
    * References the principal that's in the scope of this membership or ownership assignment request through the group that's governed by PIM. Supports $expand.
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
    * References the principal that's in the scope of this membership or ownership assignment request through the group that's governed by PIM. Supports $expand.
    *
    * @param DirectoryObject $val The principal
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }

    /**
    * Gets the targetSchedule
    * Schedule created by this request. Supports $expand.
    *
    * @return PrivilegedAccessGroupEligibilitySchedule|null The targetSchedule
    */
    public function getTargetSchedule()
    {
        if (array_key_exists("targetSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["targetSchedule"], "\Beta\Microsoft\Graph\Model\PrivilegedAccessGroupEligibilitySchedule") || is_null($this->_propDict["targetSchedule"])) {
                return $this->_propDict["targetSchedule"];
            } else {
                $this->_propDict["targetSchedule"] = new PrivilegedAccessGroupEligibilitySchedule($this->_propDict["targetSchedule"]);
                return $this->_propDict["targetSchedule"];
            }
        }
        return null;
    }

    /**
    * Sets the targetSchedule
    * Schedule created by this request. Supports $expand.
    *
    * @param PrivilegedAccessGroupEligibilitySchedule $val The targetSchedule
    *
    * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public function setTargetSchedule($val)
    {
        $this->_propDict["targetSchedule"] = $val;
        return $this;
    }

}
