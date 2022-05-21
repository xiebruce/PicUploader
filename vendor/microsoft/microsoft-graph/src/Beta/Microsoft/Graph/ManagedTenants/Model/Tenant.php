<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Tenant File
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
* Tenant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Tenant extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the contract
    * The relationship details for the tenant with the managing entity.
    *
    * @return TenantContract|null The contract
    */
    public function getContract()
    {
        if (array_key_exists("contract", $this->_propDict)) {
            if (is_a($this->_propDict["contract"], "\Beta\Microsoft\Graph\ManagedTenants\Model\TenantContract") || is_null($this->_propDict["contract"])) {
                return $this->_propDict["contract"];
            } else {
                $this->_propDict["contract"] = new TenantContract($this->_propDict["contract"]);
                return $this->_propDict["contract"];
            }
        }
        return null;
    }

    /**
    * Sets the contract
    * The relationship details for the tenant with the managing entity.
    *
    * @param TenantContract $val The contract
    *
    * @return Tenant
    */
    public function setContract($val)
    {
        $this->_propDict["contract"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time the tenant was created in the multi-tenant management platform. Optional. Read-only.
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
    * The date and time the tenant was created in the multi-tenant management platform. Optional. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Tenant
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the tenant. Required. Read-only.
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
    * The display name for the tenant. Required. Read-only.
    *
    * @param string $val The displayName
    *
    * @return Tenant
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * The date and time the tenant was last updated within the multi-tenant management platform. Optional. Read-only.
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    * The date and time the tenant was last updated within the multi-tenant management platform. Optional. Read-only.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return Tenant
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
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
    * The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return Tenant
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the tenantStatusInformation
    * The onboarding status information for the tenant. Optional. Read-only.
    *
    * @return TenantStatusInformation|null The tenantStatusInformation
    */
    public function getTenantStatusInformation()
    {
        if (array_key_exists("tenantStatusInformation", $this->_propDict)) {
            if (is_a($this->_propDict["tenantStatusInformation"], "\Beta\Microsoft\Graph\ManagedTenants\Model\TenantStatusInformation") || is_null($this->_propDict["tenantStatusInformation"])) {
                return $this->_propDict["tenantStatusInformation"];
            } else {
                $this->_propDict["tenantStatusInformation"] = new TenantStatusInformation($this->_propDict["tenantStatusInformation"]);
                return $this->_propDict["tenantStatusInformation"];
            }
        }
        return null;
    }

    /**
    * Sets the tenantStatusInformation
    * The onboarding status information for the tenant. Optional. Read-only.
    *
    * @param TenantStatusInformation $val The tenantStatusInformation
    *
    * @return Tenant
    */
    public function setTenantStatusInformation($val)
    {
        $this->_propDict["tenantStatusInformation"] = $val;
        return $this;
    }

}
