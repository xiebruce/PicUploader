<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessGroupEligibilityScheduleInstance File
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
* PrivilegedAccessGroupEligibilityScheduleInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessGroupEligibilityScheduleInstance extends PrivilegedAccessScheduleInstance
{
    /**
    * Gets the accessId
    * The identifier of the membership or ownership eligibility relationship to the group. Required. The possible values are: owner, member.
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
    * The identifier of the membership or ownership eligibility relationship to the group. Required. The possible values are: owner, member.
    *
    * @param PrivilegedAccessGroupRelationships $val The accessId
    *
    * @return PrivilegedAccessGroupEligibilityScheduleInstance
    */
    public function setAccessId($val)
    {
        $this->_propDict["accessId"] = $val;
        return $this;
    }

    /**
    * Gets the eligibilityScheduleId
    * The identifier of the privilegedAccessGroupEligibilitySchedule from which this instance was created. Required.
    *
    * @return string|null The eligibilityScheduleId
    */
    public function getEligibilityScheduleId()
    {
        if (array_key_exists("eligibilityScheduleId", $this->_propDict)) {
            return $this->_propDict["eligibilityScheduleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eligibilityScheduleId
    * The identifier of the privilegedAccessGroupEligibilitySchedule from which this instance was created. Required.
    *
    * @param string $val The eligibilityScheduleId
    *
    * @return PrivilegedAccessGroupEligibilityScheduleInstance
    */
    public function setEligibilityScheduleId($val)
    {
        $this->_propDict["eligibilityScheduleId"] = $val;
        return $this;
    }

    /**
    * Gets the groupId
    * The identifier of the group representing the scope of the membership or ownership eligibility through PIM for groups. Required.
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
    * The identifier of the group representing the scope of the membership or ownership eligibility through PIM for groups. Required.
    *
    * @param string $val The groupId
    *
    * @return PrivilegedAccessGroupEligibilityScheduleInstance
    */
    public function setGroupId($val)
    {
        $this->_propDict["groupId"] = $val;
        return $this;
    }

    /**
    * Gets the memberType
    * Indicates whether the assignment is derived from a group assignment. It can further imply whether the calling principal can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue.
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
    * Indicates whether the assignment is derived from a group assignment. It can further imply whether the calling principal can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue.
    *
    * @param PrivilegedAccessGroupMemberType $val The memberType
    *
    * @return PrivilegedAccessGroupEligibilityScheduleInstance
    */
    public function setMemberType($val)
    {
        $this->_propDict["memberType"] = $val;
        return $this;
    }

    /**
    * Gets the principalId
    * The identifier of the principal whose membership or ownership eligibility to the group is managed through PIM for groups. Required.
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
    * The identifier of the principal whose membership or ownership eligibility to the group is managed through PIM for groups. Required.
    *
    * @param string $val The principalId
    *
    * @return PrivilegedAccessGroupEligibilityScheduleInstance
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }

    /**
    * Gets the group
    * References the group that is the scope of the membership or ownership eligibility through PIM for groups. Supports $expand.
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
    * References the group that is the scope of the membership or ownership eligibility through PIM for groups. Supports $expand.
    *
    * @param Group $val The group
    *
    * @return PrivilegedAccessGroupEligibilityScheduleInstance
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }

    /**
    * Gets the principal
    * References the principal that's in the scope of the membership or ownership eligibility request through the group that's governed by PIM. Supports $expand.
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
    * References the principal that's in the scope of the membership or ownership eligibility request through the group that's governed by PIM. Supports $expand.
    *
    * @param DirectoryObject $val The principal
    *
    * @return PrivilegedAccessGroupEligibilityScheduleInstance
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }

}
