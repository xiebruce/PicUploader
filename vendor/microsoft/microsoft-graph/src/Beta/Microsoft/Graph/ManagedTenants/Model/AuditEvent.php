<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditEvent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* AuditEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditEvent extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the activity
    * A string which uniquely represents the operation that occurred. Required. Read-only.
    *
    * @return string|null The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            return $this->_propDict["activity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activity
    * A string which uniquely represents the operation that occurred. Required. Read-only.
    *
    * @param string $val The activity
    *
    * @return AuditEvent
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }

    /**
    * Gets the activityDateTime
    * The time when the activity ocurred. Required. Read-only.
    *
    * @return \DateTime|null The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime") || is_null($this->_propDict["activityDateTime"])) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the activityDateTime
    * The time when the activity ocurred. Required. Read-only.
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return AuditEvent
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the activityId
    * The identifier of the activity request that made the audit event. Required. Read-only.
    *
    * @return string|null The activityId
    */
    public function getActivityId()
    {
        if (array_key_exists("activityId", $this->_propDict)) {
            return $this->_propDict["activityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityId
    * The identifier of the activity request that made the audit event. Required. Read-only.
    *
    * @param string $val The activityId
    *
    * @return AuditEvent
    */
    public function setActivityId($val)
    {
        $this->_propDict["activityId"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * A category which represents a logical grouping of activities. Required. Read-only.
    *
    * @return string|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category
    * A category which represents a logical grouping of activities. Required. Read-only.
    *
    * @param string $val The category
    *
    * @return AuditEvent
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the httpVerb
    * The HTTP verb that was used when making the API request. Required. Read-only.
    *
    * @return string|null The httpVerb
    */
    public function getHttpVerb()
    {
        if (array_key_exists("httpVerb", $this->_propDict)) {
            return $this->_propDict["httpVerb"];
        } else {
            return null;
        }
    }

    /**
    * Sets the httpVerb
    * The HTTP verb that was used when making the API request. Required. Read-only.
    *
    * @param string $val The httpVerb
    *
    * @return AuditEvent
    */
    public function setHttpVerb($val)
    {
        $this->_propDict["httpVerb"] = $val;
        return $this;
    }

    /**
    * Gets the initiatedByAppId
    * The identifier of the app that was used to make the request. Required. Read-only.
    *
    * @return string|null The initiatedByAppId
    */
    public function getInitiatedByAppId()
    {
        if (array_key_exists("initiatedByAppId", $this->_propDict)) {
            return $this->_propDict["initiatedByAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the initiatedByAppId
    * The identifier of the app that was used to make the request. Required. Read-only.
    *
    * @param string $val The initiatedByAppId
    *
    * @return AuditEvent
    */
    public function setInitiatedByAppId($val)
    {
        $this->_propDict["initiatedByAppId"] = $val;
        return $this;
    }

    /**
    * Gets the initiatedByUpn
    * The UPN of the user who initiated the activity. Required. Read-only.
    *
    * @return string|null The initiatedByUpn
    */
    public function getInitiatedByUpn()
    {
        if (array_key_exists("initiatedByUpn", $this->_propDict)) {
            return $this->_propDict["initiatedByUpn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the initiatedByUpn
    * The UPN of the user who initiated the activity. Required. Read-only.
    *
    * @param string $val The initiatedByUpn
    *
    * @return AuditEvent
    */
    public function setInitiatedByUpn($val)
    {
        $this->_propDict["initiatedByUpn"] = $val;
        return $this;
    }

    /**
    * Gets the initiatedByUserId
    * The identifier of the user who initiated the activity. Required. Read-only.
    *
    * @return string|null The initiatedByUserId
    */
    public function getInitiatedByUserId()
    {
        if (array_key_exists("initiatedByUserId", $this->_propDict)) {
            return $this->_propDict["initiatedByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the initiatedByUserId
    * The identifier of the user who initiated the activity. Required. Read-only.
    *
    * @param string $val The initiatedByUserId
    *
    * @return AuditEvent
    */
    public function setInitiatedByUserId($val)
    {
        $this->_propDict["initiatedByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the ipAddress
    * The IP address of where the activity was initiated. This may be an IPv4 or IPv6 address. Required. Read-only.
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * The IP address of where the activity was initiated. This may be an IPv4 or IPv6 address. Required. Read-only.
    *
    * @param string $val The ipAddress
    *
    * @return AuditEvent
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }

    /**
    * Gets the requestBody
    * The raw HTTP request body. Some sensitive information may be removed.
    *
    * @return string|null The requestBody
    */
    public function getRequestBody()
    {
        if (array_key_exists("requestBody", $this->_propDict)) {
            return $this->_propDict["requestBody"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestBody
    * The raw HTTP request body. Some sensitive information may be removed.
    *
    * @param string $val The requestBody
    *
    * @return AuditEvent
    */
    public function setRequestBody($val)
    {
        $this->_propDict["requestBody"] = $val;
        return $this;
    }

    /**
    * Gets the requestUrl
    * The raw HTTP request URL. Required. Read-only.
    *
    * @return string|null The requestUrl
    */
    public function getRequestUrl()
    {
        if (array_key_exists("requestUrl", $this->_propDict)) {
            return $this->_propDict["requestUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestUrl
    * The raw HTTP request URL. Required. Read-only.
    *
    * @param string $val The requestUrl
    *
    * @return AuditEvent
    */
    public function setRequestUrl($val)
    {
        $this->_propDict["requestUrl"] = $val;
        return $this;
    }

    /**
    * Gets the tenantIds
    * The collection of Azure Active Directory tenant identifiers for the managed tenants that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
    *
    * @return string|null The tenantIds
    */
    public function getTenantIds()
    {
        if (array_key_exists("tenantIds", $this->_propDict)) {
            return $this->_propDict["tenantIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantIds
    * The collection of Azure Active Directory tenant identifiers for the managed tenants that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
    *
    * @param string $val The tenantIds
    *
    * @return AuditEvent
    */
    public function setTenantIds($val)
    {
        $this->_propDict["tenantIds"] = $val;
        return $this;
    }

    /**
    * Gets the tenantNames
    * The collection of tenant names that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
    *
    * @return string|null The tenantNames
    */
    public function getTenantNames()
    {
        if (array_key_exists("tenantNames", $this->_propDict)) {
            return $this->_propDict["tenantNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantNames
    * The collection of tenant names that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
    *
    * @param string $val The tenantNames
    *
    * @return AuditEvent
    */
    public function setTenantNames($val)
    {
        $this->_propDict["tenantNames"] = $val;
        return $this;
    }

}
