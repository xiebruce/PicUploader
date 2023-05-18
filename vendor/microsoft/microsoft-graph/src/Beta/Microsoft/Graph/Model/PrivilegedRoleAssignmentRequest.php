<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRoleAssignmentRequest File
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
* PrivilegedRoleAssignmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedRoleAssignmentRequest extends Entity
{
    /**
    * Gets the assignmentState
    *
    * @return string|null The assignmentState
    */
    public function getAssignmentState()
    {
        if (array_key_exists("assignmentState", $this->_propDict)) {
            return $this->_propDict["assignmentState"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentState
    *
    * @param string $val The assignmentState
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setAssignmentState($val)
    {
        $this->_propDict["assignmentState"] = $val;
        return $this;
    }

    /**
    * Gets the duration
    *
    * @return string|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            return $this->_propDict["duration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duration
    *
    * @param string $val The duration
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the reason
    *
    * @return string|null The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            return $this->_propDict["reason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reason
    *
    * @param string $val The reason
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
        return $this;
    }

    /**
    * Gets the requestedDateTime
    *
    * @return \DateTime|null The requestedDateTime
    */
    public function getRequestedDateTime()
    {
        if (array_key_exists("requestedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestedDateTime"], "\DateTime") || is_null($this->_propDict["requestedDateTime"])) {
                return $this->_propDict["requestedDateTime"];
            } else {
                $this->_propDict["requestedDateTime"] = new \DateTime($this->_propDict["requestedDateTime"]);
                return $this->_propDict["requestedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the requestedDateTime
    *
    * @param \DateTime $val The requestedDateTime
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setRequestedDateTime($val)
    {
        $this->_propDict["requestedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the roleId
    *
    * @return string|null The roleId
    */
    public function getRoleId()
    {
        if (array_key_exists("roleId", $this->_propDict)) {
            return $this->_propDict["roleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleId
    *
    * @param string $val The roleId
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
        return $this;
    }

    /**
    * Gets the schedule
    *
    * @return GovernanceSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\Model\GovernanceSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new GovernanceSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    *
    * @param GovernanceSchedule $val The schedule
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return string|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the ticketNumber
    *
    * @return string|null The ticketNumber
    */
    public function getTicketNumber()
    {
        if (array_key_exists("ticketNumber", $this->_propDict)) {
            return $this->_propDict["ticketNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ticketNumber
    *
    * @param string $val The ticketNumber
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setTicketNumber($val)
    {
        $this->_propDict["ticketNumber"] = $val;
        return $this;
    }

    /**
    * Gets the ticketSystem
    *
    * @return string|null The ticketSystem
    */
    public function getTicketSystem()
    {
        if (array_key_exists("ticketSystem", $this->_propDict)) {
            return $this->_propDict["ticketSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ticketSystem
    *
    * @param string $val The ticketSystem
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setTicketSystem($val)
    {
        $this->_propDict["ticketSystem"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The type
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

    /**
    * Gets the roleInfo
    *
    * @return PrivilegedRole|null The roleInfo
    */
    public function getRoleInfo()
    {
        if (array_key_exists("roleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["roleInfo"], "\Beta\Microsoft\Graph\Model\PrivilegedRole") || is_null($this->_propDict["roleInfo"])) {
                return $this->_propDict["roleInfo"];
            } else {
                $this->_propDict["roleInfo"] = new PrivilegedRole($this->_propDict["roleInfo"]);
                return $this->_propDict["roleInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the roleInfo
    *
    * @param PrivilegedRole $val The roleInfo
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setRoleInfo($val)
    {
        $this->_propDict["roleInfo"] = $val;
        return $this;
    }

}
