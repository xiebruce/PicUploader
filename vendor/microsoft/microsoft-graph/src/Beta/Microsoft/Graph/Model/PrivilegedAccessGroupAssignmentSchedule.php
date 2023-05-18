<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessGroupAssignmentSchedule File
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
* PrivilegedAccessGroupAssignmentSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessGroupAssignmentSchedule extends PrivilegedAccessSchedule
{
    /**
    * Gets the accessId
    * The identifier of the membership or ownership assignment to the group that is governed by PIM. Required. The possible values are: owner, member, unknownFutureValue.
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
    * The identifier of the membership or ownership assignment to the group that is governed by PIM. Required. The possible values are: owner, member, unknownFutureValue.
    *
    * @param PrivilegedAccessGroupRelationships $val The accessId
    *
    * @return PrivilegedAccessGroupAssignmentSchedule
    */
    public function setAccessId($val)
    {
        $this->_propDict["accessId"] = $val;
        return $this;
    }

    /**
    * Gets the assignmentType
    * Indicates whether the membership or ownership assignment for the principal is granted through activation or direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue.
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
    * Indicates whether the membership or ownership assignment for the principal is granted through activation or direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue.
    *
    * @param PrivilegedAccessGroupAssignmentType $val The assignmentType
    *
    * @return PrivilegedAccessGroupAssignmentSchedule
    */
    public function setAssignmentType($val)
    {
        $this->_propDict["assignmentType"] = $val;
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
    * @return PrivilegedAccessGroupAssignmentSchedule
    */
    public function setGroupId($val)
    {
        $this->_propDict["groupId"] = $val;
        return $this;
    }

    /**
    * Gets the memberType
    * Indicates whether the assignment is derived from a direct group assignment or through a transitive assignment. The possible values are: direct, group, unknownFutureValue.
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
    * Indicates whether the assignment is derived from a direct group assignment or through a transitive assignment. The possible values are: direct, group, unknownFutureValue.
    *
    * @param PrivilegedAccessGroupMemberType $val The memberType
    *
    * @return PrivilegedAccessGroupAssignmentSchedule
    */
    public function setMemberType($val)
    {
        $this->_propDict["memberType"] = $val;
        return $this;
    }

    /**
    * Gets the principalId
    * The identifier of the principal whose membership or ownership assignment is granted through PIM for groups. Required.
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
    * The identifier of the principal whose membership or ownership assignment is granted through PIM for groups. Required.
    *
    * @param string $val The principalId
    *
    * @return PrivilegedAccessGroupAssignmentSchedule
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }

    /**
    * Gets the activatedUsing
    * When the request activates an ownership or membership assignment in PIM for groups, this object represents the eligibility relationship. Otherwise, it is null. Supports $expand.
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
    * When the request activates an ownership or membership assignment in PIM for groups, this object represents the eligibility relationship. Otherwise, it is null. Supports $expand.
    *
    * @param PrivilegedAccessGroupEligibilitySchedule $val The activatedUsing
    *
    * @return PrivilegedAccessGroupAssignmentSchedule
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
    * @return PrivilegedAccessGroupAssignmentSchedule
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }

    /**
    * Gets the principal
    * References the principal that's in the scope of this membership or ownership assignment request to the group that's governed by PIM. Supports $expand.
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
    * References the principal that's in the scope of this membership or ownership assignment request to the group that's governed by PIM. Supports $expand.
    *
    * @param DirectoryObject $val The principal
    *
    * @return PrivilegedAccessGroupAssignmentSchedule
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }

}
