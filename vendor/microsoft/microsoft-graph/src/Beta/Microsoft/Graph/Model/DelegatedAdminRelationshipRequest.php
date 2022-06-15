<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminRelationshipRequest File
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
* DelegatedAdminRelationshipRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminRelationshipRequest extends Entity
{
    /**
    * Gets the action
    * The action to be performed on the delegated admin relationship.
    *
    * @return DelegatedAdminRelationshipRequestAction|null The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\DelegatedAdminRelationshipRequestAction") || is_null($this->_propDict["action"])) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new DelegatedAdminRelationshipRequestAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * The action to be performed on the delegated admin relationship.
    *
    * @param DelegatedAdminRelationshipRequestAction $val The action
    *
    * @return DelegatedAdminRelationshipRequest
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only.
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
    * The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DelegatedAdminRelationshipRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only.
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
    * The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DelegatedAdminRelationshipRequest
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
    *
    * @return DelegatedAdminRelationshipRequestStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\DelegatedAdminRelationshipRequestStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DelegatedAdminRelationshipRequestStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
    *
    * @param DelegatedAdminRelationshipRequestStatus $val The status
    *
    * @return DelegatedAdminRelationshipRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
