<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessGroupAssignmentScheduleInstance File
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
* PrivilegedAccessGroupAssignmentScheduleInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessGroupAssignmentScheduleInstance extends PrivilegedAccessScheduleInstance
{
    /**
    * Gets the accessId
    * The identifier of the membership or ownership assignment relationship to the group. Required. The possible values are: owner, member,  unknownFutureValue.
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
    * The identifier of the membership or ownership assignment relationship to the group. Required. The possible values are: owner, member,  unknownFutureValue.
    *
    * @param PrivilegedAccessGroupRelationships $val The accessId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setAccessId($val)
    {
        $this->_propDict["accessId"] = $val;
        return $this;
    }

    /**
    * Gets the assignmentScheduleId
    * The identifier of the privilegedAccessGroupAssignmentSchedule from which this instance was created. Required.
    *
    * @return string|null The assignmentScheduleId
    */
    public function getAssignmentScheduleId()
    {
        if (array_key_exists("assignmentScheduleId", $this->_propDict)) {
            return $this->_propDict["assignmentScheduleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentScheduleId
    * The identifier of the privilegedAccessGroupAssignmentSchedule from which this instance was created. Required.
    *
    * @param string $val The assignmentScheduleId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setAssignmentScheduleId($val)
    {
        $this->_propDict["assignmentScheduleId"] = $val;
        return $this;
    }

    /**
    * Gets the assignmentType
    * Indicates whether the membership or ownership assignment is granted through activation of an eligibility or through direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue.
    *
    * @return PrivilegedAccessGroupAssignmentType|null The assignmentType
    */
    public function getAssignmentType()
    {
        if (array_key_exists("assignmentType", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentType"], "\Beta\Microsoft\Graph\Model\PrivilegedAccessGroupAssignmentType") || is_null($this->_propDict["assignmentType"])) {
                return $this->_propDict["assignmentType"];
            } else {
                $this->_propDict["assignmentType"] = new PrivilegedAccessGroupAssignmentType($this->_propDict["assignmentType"]);
                return $this->_propDict["assignmentType"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentType
    * Indicates whether the membership or ownership assignment is granted through activation of an eligibility or through direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue.
    *
    * @param PrivilegedAccessGroupAssignmentType $val The assignmentType
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setAssignmentType($val)
    {
        $this->_propDict["assignmentType"] = $val;
        return $this;
    }

    /**
    * Gets the groupId
    * The identifier of the group representing the scope of the membership or ownership assignment through PIM for groups. Optional.
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
    * The identifier of the group representing the scope of the membership or ownership assignment through PIM for groups. Optional.
    *
    * @param string $val The groupId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setGroupId($val)
    {
        $this->_propDict["groupId"] = $val;
        return $this;
    }

    /**
    * Gets the memberType
    * Indicates whether the assignment is derived from a group assignment. It can further imply whether the caller can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue.
    *
    * @return PrivilegedAccessGroupMemberType|null The memberType
    */
    public function getMemberType()
    {
        if (array_key_exists("memberType", $this->_propDict)) {
            if (is_a($this->_propDict["memberType"], "\Beta\Microsoft\Graph\Model\PrivilegedAccessGroupMemberType") || is_null($this->_propDict["memberType"])) {
                return $this->_propDict["memberType"];
            } else {
                $this->_propDict["memberType"] = new PrivilegedAccessGroupMemberType($this->_propDict["memberType"]);
                return $this->_propDict["memberType"];
            }
        }
        return null;
    }

    /**
    * Sets the memberType
    * Indicates whether the assignment is derived from a group assignment. It can further imply whether the caller can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue.
    *
    * @param PrivilegedAccessGroupMemberType $val The memberType
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setMemberType($val)
    {
        $this->_propDict["memberType"] = $val;
        return $this;
    }

    /**
    * Gets the principalId
    * The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for groups. Required.
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
    * The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for groups. Required.
    *
    * @param string $val The principalId
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }

    /**
    * Gets the activatedUsing
    * When the request activates a membership or ownership in PIM for groups, this object represents the eligibility request for the group. Otherwise, it is null.
    *
    * @return PrivilegedAccessGroupEligibilityScheduleInstance|null The activatedUsing
    */
    public function getActivatedUsing()
    {
        if (array_key_exists("activatedUsing", $this->_propDict)) {
            if (is_a($this->_propDict["activatedUsing"], "\Beta\Microsoft\Graph\Model\PrivilegedAccessGroupEligibilityScheduleInstance") || is_null($this->_propDict["activatedUsing"])) {
                return $this->_propDict["activatedUsing"];
            } else {
                $this->_propDict["activatedUsing"] = new PrivilegedAccessGroupEligibilityScheduleInstance($this->_propDict["activatedUsing"]);
                return $this->_propDict["activatedUsing"];
            }
        }
        return null;
    }

    /**
    * Sets the activatedUsing
    * When the request activates a membership or ownership in PIM for groups, this object represents the eligibility request for the group. Otherwise, it is null.
    *
    * @param PrivilegedAccessGroupEligibilityScheduleInstance $val The activatedUsing
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setActivatedUsing($val)
    {
        $this->_propDict["activatedUsing"] = $val;
        return $this;
    }

    /**
    * Gets the group
    * References the group that is the scope of the membership or ownership assignment through PIM for groups. Supports $expand.
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
    * References the group that is the scope of the membership or ownership assignment through PIM for groups. Supports $expand.
    *
    * @param Group $val The group
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }

    /**
    * Gets the principal
    * References the principal that's in the scope of the membership or ownership assignment request through the group that's governed by PIM. Supports $expand.
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
    * References the principal that's in the scope of the membership or ownership assignment request through the group that's governed by PIM. Supports $expand.
    *
    * @param DirectoryObject $val The principal
    *
    * @return PrivilegedAccessGroupAssignmentScheduleInstance
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }

}
