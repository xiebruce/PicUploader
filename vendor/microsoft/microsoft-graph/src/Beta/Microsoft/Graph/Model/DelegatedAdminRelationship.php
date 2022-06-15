<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminRelationship File
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
* DelegatedAdminRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminRelationship extends Entity
{
    /**
    * Gets the accessDetails
    * The access details containing the identifiers of the administrative roles that the partner admin is requesting in the customer tenant.
    *
    * @return DelegatedAdminAccessDetails|null The accessDetails
    */
    public function getAccessDetails()
    {
        if (array_key_exists("accessDetails", $this->_propDict)) {
            if (is_a($this->_propDict["accessDetails"], "\Beta\Microsoft\Graph\Model\DelegatedAdminAccessDetails") || is_null($this->_propDict["accessDetails"])) {
                return $this->_propDict["accessDetails"];
            } else {
                $this->_propDict["accessDetails"] = new DelegatedAdminAccessDetails($this->_propDict["accessDetails"]);
                return $this->_propDict["accessDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the accessDetails
    * The access details containing the identifiers of the administrative roles that the partner admin is requesting in the customer tenant.
    *
    * @param DelegatedAdminAccessDetails $val The accessDetails
    *
    * @return DelegatedAdminRelationship
    */
    public function setAccessDetails($val)
    {
        $this->_propDict["accessDetails"] = $val;
        return $this;
    }

    /**
    * Gets the activatedDateTime
    * The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only.
    *
    * @return \DateTime|null The activatedDateTime
    */
    public function getActivatedDateTime()
    {
        if (array_key_exists("activatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activatedDateTime"], "\DateTime") || is_null($this->_propDict["activatedDateTime"])) {
                return $this->_propDict["activatedDateTime"];
            } else {
                $this->_propDict["activatedDateTime"] = new \DateTime($this->_propDict["activatedDateTime"]);
                return $this->_propDict["activatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the activatedDateTime
    * The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only.
    *
    * @param \DateTime $val The activatedDateTime
    *
    * @return DelegatedAdminRelationship
    */
    public function setActivatedDateTime($val)
    {
        $this->_propDict["activatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only.
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
    * The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DelegatedAdminRelationship
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the customer
    * The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Cannot be changed by the customer.
    *
    * @return DelegatedAdminRelationshipCustomerParticipant|null The customer
    */
    public function getCustomer()
    {
        if (array_key_exists("customer", $this->_propDict)) {
            if (is_a($this->_propDict["customer"], "\Beta\Microsoft\Graph\Model\DelegatedAdminRelationshipCustomerParticipant") || is_null($this->_propDict["customer"])) {
                return $this->_propDict["customer"];
            } else {
                $this->_propDict["customer"] = new DelegatedAdminRelationshipCustomerParticipant($this->_propDict["customer"]);
                return $this->_propDict["customer"];
            }
        }
        return null;
    }

    /**
    * Sets the customer
    * The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Cannot be changed by the customer.
    *
    * @param DelegatedAdminRelationshipCustomerParticipant $val The customer
    *
    * @return DelegatedAdminRelationship
    */
    public function setCustomer($val)
    {
        $this->_propDict["customer"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
    *
    * @param string $val The displayName
    *
    * @return DelegatedAdminRelationship
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the duration
    * The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
    *
    * @return \DateInterval|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "\DateInterval") || is_null($this->_propDict["duration"])) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new \DateInterval($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }

    /**
    * Sets the duration
    * The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
    *
    * @param \DateInterval $val The duration
    *
    * @return DelegatedAdminRelationship
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only.
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
    * The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return DelegatedAdminRelationship
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DelegatedAdminRelationship
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderBy.
    *
    * @return DelegatedAdminRelationshipStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\DelegatedAdminRelationshipStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DelegatedAdminRelationshipStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderBy.
    *
    * @param DelegatedAdminRelationshipStatus $val The status
    *
    * @return DelegatedAdminRelationship
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the accessAssignments
    * The access assignments associated with the delegated admin relationship.
     *
     * @return array|null The accessAssignments
     */
    public function getAccessAssignments()
    {
        if (array_key_exists("accessAssignments", $this->_propDict)) {
           return $this->_propDict["accessAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessAssignments
    * The access assignments associated with the delegated admin relationship.
    *
    * @param DelegatedAdminAccessAssignment[] $val The accessAssignments
    *
    * @return DelegatedAdminRelationship
    */
    public function setAccessAssignments($val)
    {
        $this->_propDict["accessAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * The long running operations associated with the delegated admin relationship.
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    * The long running operations associated with the delegated admin relationship.
    *
    * @param DelegatedAdminRelationshipOperation[] $val The operations
    *
    * @return DelegatedAdminRelationship
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the requests
    * The requests associated with the delegated admin relationship.
     *
     * @return array|null The requests
     */
    public function getRequests()
    {
        if (array_key_exists("requests", $this->_propDict)) {
           return $this->_propDict["requests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requests
    * The requests associated with the delegated admin relationship.
    *
    * @param DelegatedAdminRelationshipRequest[] $val The requests
    *
    * @return DelegatedAdminRelationship
    */
    public function setRequests($val)
    {
        $this->_propDict["requests"] = $val;
        return $this;
    }

}
