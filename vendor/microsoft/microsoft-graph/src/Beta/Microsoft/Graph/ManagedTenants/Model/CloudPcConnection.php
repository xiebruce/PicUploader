<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcConnection File
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
* CloudPcConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcConnection extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The display name of the cloud PC connection. Required. Read-only.
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
    * The display name of the cloud PC connection. Required. Read-only.
    *
    * @param string $val The displayName
    *
    * @return CloudPcConnection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the healthCheckStatus
    * The health status of the cloud PC connection. Possible values are: pending, running, passed, failed, unknownFutureValue.  Required. Read-only.
    *
    * @return string|null The healthCheckStatus
    */
    public function getHealthCheckStatus()
    {
        if (array_key_exists("healthCheckStatus", $this->_propDict)) {
            return $this->_propDict["healthCheckStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the healthCheckStatus
    * The health status of the cloud PC connection. Possible values are: pending, running, passed, failed, unknownFutureValue.  Required. Read-only.
    *
    * @param string $val The healthCheckStatus
    *
    * @return CloudPcConnection
    */
    public function setHealthCheckStatus($val)
    {
        $this->_propDict["healthCheckStatus"] = $val;
        return $this;
    }

    /**
    * Gets the lastRefreshedDateTime
    * Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
    *
    * @return \DateTime|null The lastRefreshedDateTime
    */
    public function getLastRefreshedDateTime()
    {
        if (array_key_exists("lastRefreshedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRefreshedDateTime"], "\DateTime") || is_null($this->_propDict["lastRefreshedDateTime"])) {
                return $this->_propDict["lastRefreshedDateTime"];
            } else {
                $this->_propDict["lastRefreshedDateTime"] = new \DateTime($this->_propDict["lastRefreshedDateTime"]);
                return $this->_propDict["lastRefreshedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRefreshedDateTime
    * Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return CloudPcConnection
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the tenantDisplayName
    * The display name for the managed tenant. Required. Read-only.
    *
    * @return string|null The tenantDisplayName
    */
    public function getTenantDisplayName()
    {
        if (array_key_exists("tenantDisplayName", $this->_propDict)) {
            return $this->_propDict["tenantDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantDisplayName
    * The display name for the managed tenant. Required. Read-only.
    *
    * @param string $val The tenantDisplayName
    *
    * @return CloudPcConnection
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return CloudPcConnection
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

}
