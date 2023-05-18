<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentRequest File
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
* AccessPackageAssignmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentRequest extends Entity
{

     /**
     * Gets the answers
    * Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     *
     * @return array|null The answers
     */
    public function getAnswers()
    {
        if (array_key_exists("answers", $this->_propDict)) {
           return $this->_propDict["answers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the answers
    * Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
    *
    * @param AccessPackageAnswer[] $val The answers
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setAnswers($val)
    {
        $this->_propDict["answers"] = $val;
        return $this;
    }

    /**
    * Gets the completedDateTime
    * The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime") || is_null($this->_propDict["completedDateTime"])) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completedDateTime
    * The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the requestType
    * The type of the request. The possible values are: notSpecified, userAdd, UserExtend, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd (not supported), unknownFutureValue. A request from the user themselves would have requestType of userAdd, userUpdate or userRemove. This property cannot be changed once set.
    *
    * @return AccessPackageRequestType|null The requestType
    */
    public function getRequestType()
    {
        if (array_key_exists("requestType", $this->_propDict)) {
            if (is_a($this->_propDict["requestType"], "\Microsoft\Graph\Model\AccessPackageRequestType") || is_null($this->_propDict["requestType"])) {
                return $this->_propDict["requestType"];
            } else {
                $this->_propDict["requestType"] = new AccessPackageRequestType($this->_propDict["requestType"]);
                return $this->_propDict["requestType"];
            }
        }
        return null;
    }

    /**
    * Sets the requestType
    * The type of the request. The possible values are: notSpecified, userAdd, UserExtend, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd (not supported), unknownFutureValue. A request from the user themselves would have requestType of userAdd, userUpdate or userRemove. This property cannot be changed once set.
    *
    * @param AccessPackageRequestType $val The requestType
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setRequestType($val)
    {
        $this->_propDict["requestType"] = $val;
        return $this;
    }

    /**
    * Gets the schedule
    * The range of dates that access is to be assigned to the requestor. This property cannot be changed once set.
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
    * The range of dates that access is to be assigned to the requestor. This property cannot be changed once set.
    *
    * @param EntitlementManagementSchedule $val The schedule
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only. Supports $filter (eq).
    *
    * @return AccessPackageRequestState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\AccessPackageRequestState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AccessPackageRequestState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only. Supports $filter (eq).
    *
    * @param AccessPackageRequestState $val The state
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * More information on the request processing status. Read-only.
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
    * More information on the request processing status. Read-only.
    *
    * @param string $val The status
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the accessPackage
    * The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand.
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
    * The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand.
    *
    * @param AccessPackage $val The accessPackage
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setAccessPackage($val)
    {
        $this->_propDict["accessPackage"] = $val;
        return $this;
    }

    /**
    * Gets the assignment
    * For a requestType of userAdd or adminAdd, this is an access package assignment requested to be created.  For a requestType of userRemove, adminRemove or systemRemove, this has the id property of an existing assignment to be removed.   Supports $expand.
    *
    * @return AccessPackageAssignment|null The assignment
    */
    public function getAssignment()
    {
        if (array_key_exists("assignment", $this->_propDict)) {
            if (is_a($this->_propDict["assignment"], "\Microsoft\Graph\Model\AccessPackageAssignment") || is_null($this->_propDict["assignment"])) {
                return $this->_propDict["assignment"];
            } else {
                $this->_propDict["assignment"] = new AccessPackageAssignment($this->_propDict["assignment"]);
                return $this->_propDict["assignment"];
            }
        }
        return null;
    }

    /**
    * Sets the assignment
    * For a requestType of userAdd or adminAdd, this is an access package assignment requested to be created.  For a requestType of userRemove, adminRemove or systemRemove, this has the id property of an existing assignment to be removed.   Supports $expand.
    *
    * @param AccessPackageAssignment $val The assignment
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setAssignment($val)
    {
        $this->_propDict["assignment"] = $val;
        return $this;
    }

    /**
    * Gets the requestor
    * The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
    *
    * @return AccessPackageSubject|null The requestor
    */
    public function getRequestor()
    {
        if (array_key_exists("requestor", $this->_propDict)) {
            if (is_a($this->_propDict["requestor"], "\Microsoft\Graph\Model\AccessPackageSubject") || is_null($this->_propDict["requestor"])) {
                return $this->_propDict["requestor"];
            } else {
                $this->_propDict["requestor"] = new AccessPackageSubject($this->_propDict["requestor"]);
                return $this->_propDict["requestor"];
            }
        }
        return null;
    }

    /**
    * Sets the requestor
    * The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
    *
    * @param AccessPackageSubject $val The requestor
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setRequestor($val)
    {
        $this->_propDict["requestor"] = $val;
        return $this;
    }

}
