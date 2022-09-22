<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignment File
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
* AccessPackageAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignment extends Entity
{
    /**
    * Gets the expiredDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The expiredDateTime
    */
    public function getExpiredDateTime()
    {
        if (array_key_exists("expiredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiredDateTime"], "\DateTime") || is_null($this->_propDict["expiredDateTime"])) {
                return $this->_propDict["expiredDateTime"];
            } else {
                $this->_propDict["expiredDateTime"] = new \DateTime($this->_propDict["expiredDateTime"]);
                return $this->_propDict["expiredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expiredDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The expiredDateTime
    *
    * @return AccessPackageAssignment
    */
    public function setExpiredDateTime($val)
    {
        $this->_propDict["expiredDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the schedule
    * When the access assignment is to be in place. Read-only.
    *
    * @return EntitlementManagementSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Microsoft\Graph\Model\EntitlementManagementSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new EntitlementManagementSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    * When the access assignment is to be in place. Read-only.
    *
    * @param EntitlementManagementSchedule $val The schedule
    *
    * @return AccessPackageAssignment
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
    *
    * @return AccessPackageAssignmentState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\AccessPackageAssignmentState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AccessPackageAssignmentState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
    *
    * @param AccessPackageAssignmentState $val The state
    *
    * @return AccessPackageAssignment
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
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
    * More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
    *
    * @param string $val The status
    *
    * @return AccessPackageAssignment
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the accessPackage
    * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
    *
    * @return AccessPackage|null The accessPackage
    */
    public function getAccessPackage()
    {
        if (array_key_exists("accessPackage", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackage"], "\Microsoft\Graph\Model\AccessPackage") || is_null($this->_propDict["accessPackage"])) {
                return $this->_propDict["accessPackage"];
            } else {
                $this->_propDict["accessPackage"] = new AccessPackage($this->_propDict["accessPackage"]);
                return $this->_propDict["accessPackage"];
            }
        }
        return null;
    }

    /**
    * Sets the accessPackage
    * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
    *
    * @param AccessPackage $val The accessPackage
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackage($val)
    {
        $this->_propDict["accessPackage"] = $val;
        return $this;
    }

    /**
    * Gets the assignmentPolicy
    * Read-only. Supports $filter (eq) on the id property and $expand query parameters.
    *
    * @return AccessPackageAssignmentPolicy|null The assignmentPolicy
    */
    public function getAssignmentPolicy()
    {
        if (array_key_exists("assignmentPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentPolicy"], "\Microsoft\Graph\Model\AccessPackageAssignmentPolicy") || is_null($this->_propDict["assignmentPolicy"])) {
                return $this->_propDict["assignmentPolicy"];
            } else {
                $this->_propDict["assignmentPolicy"] = new AccessPackageAssignmentPolicy($this->_propDict["assignmentPolicy"]);
                return $this->_propDict["assignmentPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentPolicy
    * Read-only. Supports $filter (eq) on the id property and $expand query parameters.
    *
    * @param AccessPackageAssignmentPolicy $val The assignmentPolicy
    *
    * @return AccessPackageAssignment
    */
    public function setAssignmentPolicy($val)
    {
        $this->_propDict["assignmentPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the target
    * The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
    *
    * @return AccessPackageSubject|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Microsoft\Graph\Model\AccessPackageSubject") || is_null($this->_propDict["target"])) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new AccessPackageSubject($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }

    /**
    * Sets the target
    * The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
    *
    * @param AccessPackageSubject $val The target
    *
    * @return AccessPackageAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

}
