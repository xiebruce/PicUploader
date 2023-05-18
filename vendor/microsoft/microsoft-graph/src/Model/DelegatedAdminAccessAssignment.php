<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminAccessAssignment File
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
* DelegatedAdminAccessAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminAccessAssignment extends Entity
{
    /**
    * Gets the accessContainer
    * The access container through which members are assigned access. For example, a security group.
    *
    * @return DelegatedAdminAccessContainer|null The accessContainer
    */
    public function getAccessContainer()
    {
        if (array_key_exists("accessContainer", $this->_propDict)) {
            if (is_a($this->_propDict["accessContainer"], "\Microsoft\Graph\Model\DelegatedAdminAccessContainer") || is_null($this->_propDict["accessContainer"])) {
                return $this->_propDict["accessContainer"];
            } else {
                $this->_propDict["accessContainer"] = new DelegatedAdminAccessContainer($this->_propDict["accessContainer"]);
                return $this->_propDict["accessContainer"];
            }
        }
        return null;
    }

    /**
    * Sets the accessContainer
    * The access container through which members are assigned access. For example, a security group.
    *
    * @param DelegatedAdminAccessContainer $val The accessContainer
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setAccessContainer($val)
    {
        $this->_propDict["accessContainer"] = $val;
        return $this;
    }

    /**
    * Gets the accessDetails
    * The access details containing the identifiers of the administrative roles that the partner is assigned in the customer tenant.
    *
    * @return DelegatedAdminAccessDetails|null The accessDetails
    */
    public function getAccessDetails()
    {
        if (array_key_exists("accessDetails", $this->_propDict)) {
            if (is_a($this->_propDict["accessDetails"], "\Microsoft\Graph\Model\DelegatedAdminAccessDetails") || is_null($this->_propDict["accessDetails"])) {
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
    * The access details containing the identifiers of the administrative roles that the partner is assigned in the customer tenant.
    *
    * @param DelegatedAdminAccessDetails $val The accessDetails
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setAccessDetails($val)
    {
        $this->_propDict["accessDetails"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only.
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
    * The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only.
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
    * The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
    *
    * @return DelegatedAdminAccessAssignmentStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\DelegatedAdminAccessAssignmentStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DelegatedAdminAccessAssignmentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
    *
    * @param DelegatedAdminAccessAssignmentStatus $val The status
    *
    * @return DelegatedAdminAccessAssignment
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
