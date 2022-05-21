<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcDevice File
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
* CloudPcDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcDevice extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the cloudPcStatus
    * The status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed. Required. Read-only.
    *
    * @return string|null The cloudPcStatus
    */
    public function getCloudPcStatus()
    {
        if (array_key_exists("cloudPcStatus", $this->_propDict)) {
            return $this->_propDict["cloudPcStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcStatus
    * The status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed. Required. Read-only.
    *
    * @param string $val The cloudPcStatus
    *
    * @return CloudPcDevice
    */
    public function setCloudPcStatus($val)
    {
        $this->_propDict["cloudPcStatus"] = $val;
        return $this;
    }

    /**
    * Gets the deviceSpecification
    *
    * @return string|null The deviceSpecification
    */
    public function getDeviceSpecification()
    {
        if (array_key_exists("deviceSpecification", $this->_propDict)) {
            return $this->_propDict["deviceSpecification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceSpecification
    *
    * @param string $val The deviceSpecification
    *
    * @return CloudPcDevice
    */
    public function setDeviceSpecification($val)
    {
        $this->_propDict["deviceSpecification"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the cloud PC. Required. Read-only.
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
    * The display name for the cloud PC. Required. Read-only.
    *
    * @param string $val The displayName
    *
    * @return CloudPcDevice
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return CloudPcDevice
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceId
    * The managed device identifier for the cloud PC. Optional. Read-only.
    *
    * @return string|null The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceId
    * The managed device identifier for the cloud PC. Optional. Read-only.
    *
    * @param string $val The managedDeviceId
    *
    * @return CloudPcDevice
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceName
    * The managed device display name for the cloud PC. Optional. Read-only.
    *
    * @return string|null The managedDeviceName
    */
    public function getManagedDeviceName()
    {
        if (array_key_exists("managedDeviceName", $this->_propDict)) {
            return $this->_propDict["managedDeviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceName
    * The managed device display name for the cloud PC. Optional. Read-only.
    *
    * @param string $val The managedDeviceName
    *
    * @return CloudPcDevice
    */
    public function setManagedDeviceName($val)
    {
        $this->_propDict["managedDeviceName"] = $val;
        return $this;
    }

    /**
    * Gets the provisioningPolicyId
    * The provisioning policy identifier for the cloud PC. Required. Read-only.
    *
    * @return string|null The provisioningPolicyId
    */
    public function getProvisioningPolicyId()
    {
        if (array_key_exists("provisioningPolicyId", $this->_propDict)) {
            return $this->_propDict["provisioningPolicyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provisioningPolicyId
    * The provisioning policy identifier for the cloud PC. Required. Read-only.
    *
    * @param string $val The provisioningPolicyId
    *
    * @return CloudPcDevice
    */
    public function setProvisioningPolicyId($val)
    {
        $this->_propDict["provisioningPolicyId"] = $val;
        return $this;
    }

    /**
    * Gets the servicePlanName
    * The service plan name for the cloud PC. Required. Read-only.
    *
    * @return string|null The servicePlanName
    */
    public function getServicePlanName()
    {
        if (array_key_exists("servicePlanName", $this->_propDict)) {
            return $this->_propDict["servicePlanName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePlanName
    * The service plan name for the cloud PC. Required. Read-only.
    *
    * @param string $val The servicePlanName
    *
    * @return CloudPcDevice
    */
    public function setServicePlanName($val)
    {
        $this->_propDict["servicePlanName"] = $val;
        return $this;
    }

    /**
    * Gets the servicePlanType
    *
    * @return string|null The servicePlanType
    */
    public function getServicePlanType()
    {
        if (array_key_exists("servicePlanType", $this->_propDict)) {
            return $this->_propDict["servicePlanType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePlanType
    *
    * @param string $val The servicePlanType
    *
    * @return CloudPcDevice
    */
    public function setServicePlanType($val)
    {
        $this->_propDict["servicePlanType"] = $val;
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
    * @return CloudPcDevice
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
    * @return CloudPcDevice
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) of the user assigned to the cloud PC. Required. Read-only.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * The user principal name (UPN) of the user assigned to the cloud PC. Required. Read-only.
    *
    * @param string $val The userPrincipalName
    *
    * @return CloudPcDevice
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

}
