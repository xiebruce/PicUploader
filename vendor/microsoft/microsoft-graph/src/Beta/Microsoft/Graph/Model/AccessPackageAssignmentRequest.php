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
namespace Beta\Microsoft\Graph\Model;

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
    * Gets the completedDate
    * The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The completedDate
    */
    public function getCompletedDate()
    {
        if (array_key_exists("completedDate", $this->_propDict)) {
            if (is_a($this->_propDict["completedDate"], "\DateTime") || is_null($this->_propDict["completedDate"])) {
                return $this->_propDict["completedDate"];
            } else {
                $this->_propDict["completedDate"] = new \DateTime($this->_propDict["completedDate"]);
                return $this->_propDict["completedDate"];
            }
        }
        return null;
    }

    /**
    * Sets the completedDate
    * The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The completedDate
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setCompletedDate($val)
    {
        $this->_propDict["completedDate"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
     * Gets the customExtensionCalloutInstances
    * Information about all the custom extension calls that were made during the access package assignment request workflow.
     *
     * @return array|null The customExtensionCalloutInstances
     */
    public function getCustomExtensionCalloutInstances()
    {
        if (array_key_exists("customExtensionCalloutInstances", $this->_propDict)) {
           return $this->_propDict["customExtensionCalloutInstances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionCalloutInstances
    * Information about all the custom extension calls that were made during the access package assignment request workflow.
    *
    * @param CustomExtensionCalloutInstance[] $val The customExtensionCalloutInstances
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setCustomExtensionCalloutInstances($val)
    {
        $this->_propDict["customExtensionCalloutInstances"] = $val;
        return $this;
    }


     /**
     * Gets the customExtensionHandlerInstances
    * A collection of custom workflow extension instances being run on an assignment request. Read-only.
     *
     * @return array|null The customExtensionHandlerInstances
     */
    public function getCustomExtensionHandlerInstances()
    {
        if (array_key_exists("customExtensionHandlerInstances", $this->_propDict)) {
           return $this->_propDict["customExtensionHandlerInstances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionHandlerInstances
    * A collection of custom workflow extension instances being run on an assignment request. Read-only.
    *
    * @param CustomExtensionHandlerInstance[] $val The customExtensionHandlerInstances
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setCustomExtensionHandlerInstances($val)
    {
        $this->_propDict["customExtensionHandlerInstances"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the isValidationOnly
    * True if the request is not to be processed for assignment.
    *
    * @return bool|null The isValidationOnly
    */
    public function getIsValidationOnly()
    {
        if (array_key_exists("isValidationOnly", $this->_propDict)) {
            return $this->_propDict["isValidationOnly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isValidationOnly
    * True if the request is not to be processed for assignment.
    *
    * @param bool $val The isValidationOnly
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setIsValidationOnly($val)
    {
        $this->_propDict["isValidationOnly"] = boolval($val);
        return $this;
    }

    /**
    * Gets the justification
    * The requestor's supplied justification.
    *
    * @return string|null The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justification
    * The requestor's supplied justification.
    *
    * @param string $val The justification
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }

    /**
    * Gets the requestState
    * One of PendingApproval, Canceled,  Denied, Delivering, Delivered, PartiallyDelivered, DeliveryFailed, Submitted or Scheduled. Read-only.
    *
    * @return string|null The requestState
    */
    public function getRequestState()
    {
        if (array_key_exists("requestState", $this->_propDict)) {
            return $this->_propDict["requestState"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestState
    * One of PendingApproval, Canceled,  Denied, Delivering, Delivered, PartiallyDelivered, DeliveryFailed, Submitted or Scheduled. Read-only.
    *
    * @param string $val The requestState
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setRequestState($val)
    {
        $this->_propDict["requestState"] = $val;
        return $this;
    }

    /**
    * Gets the requestStatus
    * More information on the request processing status. Read-only.
    *
    * @return string|null The requestStatus
    */
    public function getRequestStatus()
    {
        if (array_key_exists("requestStatus", $this->_propDict)) {
            return $this->_propDict["requestStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestStatus
    * More information on the request processing status. Read-only.
    *
    * @param string $val The requestStatus
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setRequestStatus($val)
    {
        $this->_propDict["requestStatus"] = $val;
        return $this;
    }

    /**
    * Gets the requestType
    * One of UserAdd, UserExtend, UserUpdate, UserRemove, AdminAdd, AdminRemove or SystemRemove. A request from the user themselves would have requestType of UserAdd, UserUpdate or UserRemove. Read-only.
    *
    * @return string|null The requestType
    */
    public function getRequestType()
    {
        if (array_key_exists("requestType", $this->_propDict)) {
            return $this->_propDict["requestType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestType
    * One of UserAdd, UserExtend, UserUpdate, UserRemove, AdminAdd, AdminRemove or SystemRemove. A request from the user themselves would have requestType of UserAdd, UserUpdate or UserRemove. Read-only.
    *
    * @param string $val The requestType
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
    * The range of dates that access is to be assigned to the requestor. Read-only.
    *
    * @return RequestSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\Model\RequestSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new RequestSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    * The range of dates that access is to be assigned to the requestor. Read-only.
    *
    * @param RequestSchedule $val The schedule
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }


     /**
     * Gets the verifiedCredentialsData
    * The details of the verifiable credential that was presented by the requestor, such as the issuer and claims. Read-only.
     *
     * @return array|null The verifiedCredentialsData
     */
    public function getVerifiedCredentialsData()
    {
        if (array_key_exists("verifiedCredentialsData", $this->_propDict)) {
           return $this->_propDict["verifiedCredentialsData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the verifiedCredentialsData
    * The details of the verifiable credential that was presented by the requestor, such as the issuer and claims. Read-only.
    *
    * @param VerifiedCredentialData[] $val The verifiedCredentialsData
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setVerifiedCredentialsData($val)
    {
        $this->_propDict["verifiedCredentialsData"] = $val;
        return $this;
    }

    /**
    * Gets the accessPackage
    * The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable. Supports $expand.
    *
    * @return AccessPackage|null The accessPackage
    */
    public function getAccessPackage()
    {
        if (array_key_exists("accessPackage", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackage"], "\Beta\Microsoft\Graph\Model\AccessPackage") || is_null($this->_propDict["accessPackage"])) {
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
    * The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable. Supports $expand.
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
    * Gets the accessPackageAssignment
    * For a requestType of UserAdd or AdminAdd, this is an access package assignment requested to be created.  For a requestType of UserRemove, AdminRemove or SystemRemove, this has the id property of an existing assignment to be removed.  Supports $expand.
    *
    * @return AccessPackageAssignment|null The accessPackageAssignment
    */
    public function getAccessPackageAssignment()
    {
        if (array_key_exists("accessPackageAssignment", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageAssignment"], "\Beta\Microsoft\Graph\Model\AccessPackageAssignment") || is_null($this->_propDict["accessPackageAssignment"])) {
                return $this->_propDict["accessPackageAssignment"];
            } else {
                $this->_propDict["accessPackageAssignment"] = new AccessPackageAssignment($this->_propDict["accessPackageAssignment"]);
                return $this->_propDict["accessPackageAssignment"];
            }
        }
        return null;
    }

    /**
    * Sets the accessPackageAssignment
    * For a requestType of UserAdd or AdminAdd, this is an access package assignment requested to be created.  For a requestType of UserRemove, AdminRemove or SystemRemove, this has the id property of an existing assignment to be removed.  Supports $expand.
    *
    * @param AccessPackageAssignment $val The accessPackageAssignment
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setAccessPackageAssignment($val)
    {
        $this->_propDict["accessPackageAssignment"] = $val;
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
            if (is_a($this->_propDict["requestor"], "\Beta\Microsoft\Graph\Model\AccessPackageSubject") || is_null($this->_propDict["requestor"])) {
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
