<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceRequest File
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
* AccessPackageResourceRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceRequest extends Entity
{
    /**
    * Gets the catalogId
    * The unique ID of the access package catalog.
    *
    * @return string|null The catalogId
    */
    public function getCatalogId()
    {
        if (array_key_exists("catalogId", $this->_propDict)) {
            return $this->_propDict["catalogId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the catalogId
    * The unique ID of the access package catalog.
    *
    * @param string $val The catalogId
    *
    * @return AccessPackageResourceRequest
    */
    public function setCatalogId($val)
    {
        $this->_propDict["catalogId"] = $val;
        return $this;
    }

    /**
    * Gets the executeImmediately
    *
    * @return bool|null The executeImmediately
    */
    public function getExecuteImmediately()
    {
        if (array_key_exists("executeImmediately", $this->_propDict)) {
            return $this->_propDict["executeImmediately"];
        } else {
            return null;
        }
    }

    /**
    * Sets the executeImmediately
    *
    * @param bool $val The executeImmediately
    *
    * @return AccessPackageResourceRequest
    */
    public function setExecuteImmediately($val)
    {
        $this->_propDict["executeImmediately"] = boolval($val);
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return AccessPackageResourceRequest
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the isValidationOnly
    * If set, does not add the resource.
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
    * If set, does not add the resource.
    *
    * @param bool $val The isValidationOnly
    *
    * @return AccessPackageResourceRequest
    */
    public function setIsValidationOnly($val)
    {
        $this->_propDict["isValidationOnly"] = boolval($val);
        return $this;
    }

    /**
    * Gets the justification
    * The requestor's justification for adding or removing the resource.
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
    * The requestor's justification for adding or removing the resource.
    *
    * @param string $val The justification
    *
    * @return AccessPackageResourceRequest
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }

    /**
    * Gets the requestState
    * The outcome of whether the service was able to add the resource to the catalog.  The value is Delivered if the resource was added or removed. Read-Only.
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
    * The outcome of whether the service was able to add the resource to the catalog.  The value is Delivered if the resource was added or removed. Read-Only.
    *
    * @param string $val The requestState
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestState($val)
    {
        $this->_propDict["requestState"] = $val;
        return $this;
    }

    /**
    * Gets the requestStatus
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
    *
    * @param string $val The requestStatus
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestStatus($val)
    {
        $this->_propDict["requestStatus"] = $val;
        return $this;
    }

    /**
    * Gets the requestType
    * Use AdminAdd to add a resource, if the caller is an administrator or resource owner, AdminUpdate to update a resource, or AdminRemove to remove a resource.
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
    * Use AdminAdd to add a resource, if the caller is an administrator or resource owner, AdminUpdate to update a resource, or AdminRemove to remove a resource.
    *
    * @param string $val The requestType
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestType($val)
    {
        $this->_propDict["requestType"] = $val;
        return $this;
    }

    /**
    * Gets the accessPackageResource
    *
    * @return AccessPackageResource|null The accessPackageResource
    */
    public function getAccessPackageResource()
    {
        if (array_key_exists("accessPackageResource", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageResource"], "\Beta\Microsoft\Graph\Model\AccessPackageResource") || is_null($this->_propDict["accessPackageResource"])) {
                return $this->_propDict["accessPackageResource"];
            } else {
                $this->_propDict["accessPackageResource"] = new AccessPackageResource($this->_propDict["accessPackageResource"]);
                return $this->_propDict["accessPackageResource"];
            }
        }
        return null;
    }

    /**
    * Sets the accessPackageResource
    *
    * @param AccessPackageResource $val The accessPackageResource
    *
    * @return AccessPackageResourceRequest
    */
    public function setAccessPackageResource($val)
    {
        $this->_propDict["accessPackageResource"] = $val;
        return $this;
    }

    /**
    * Gets the requestor
    * Read-only. Nullable. Supports $expand.
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
    * Read-only. Nullable. Supports $expand.
    *
    * @param AccessPackageSubject $val The requestor
    *
    * @return AccessPackageResourceRequest
    */
    public function setRequestor($val)
    {
        $this->_propDict["requestor"] = $val;
        return $this;
    }

}
