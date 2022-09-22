<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleEligibilityScheduleInstance File
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
* UnifiedRoleEligibilityScheduleInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleEligibilityScheduleInstance extends UnifiedRoleScheduleInstanceBase
{
    /**
    * Gets the endDateTime
    * The end date of the schedule instance.
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * The end date of the schedule instance.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return UnifiedRoleEligibilityScheduleInstance
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the memberType
    * How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne).
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
    * How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne).
    *
    * @param string $val The memberType
    *
    * @return UnifiedRoleEligibilityScheduleInstance
    */
    public function setMemberType($val)
    {
        $this->_propDict["memberType"] = $val;
        return $this;
    }

    /**
    * Gets the roleEligibilityScheduleId
    * The identifier of the unifiedRoleEligibilitySchedule object from which this instance was created. Supports $filter (eq, ne).
    *
    * @return string|null The roleEligibilityScheduleId
    */
    public function getRoleEligibilityScheduleId()
    {
        if (array_key_exists("roleEligibilityScheduleId", $this->_propDict)) {
            return $this->_propDict["roleEligibilityScheduleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleEligibilityScheduleId
    * The identifier of the unifiedRoleEligibilitySchedule object from which this instance was created. Supports $filter (eq, ne).
    *
    * @param string $val The roleEligibilityScheduleId
    *
    * @return UnifiedRoleEligibilityScheduleInstance
    */
    public function setRoleEligibilityScheduleId($val)
    {
        $this->_propDict["roleEligibilityScheduleId"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * When this instance starts.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * When this instance starts.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return UnifiedRoleEligibilityScheduleInstance
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

}
