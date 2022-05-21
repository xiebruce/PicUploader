<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AggregatedPolicyCompliance File
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
* AggregatedPolicyCompliance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AggregatedPolicyCompliance extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the compliancePolicyId
    * Identifier for the device compliance policy. Optional. Read-only.
    *
    * @return string|null The compliancePolicyId
    */
    public function getCompliancePolicyId()
    {
        if (array_key_exists("compliancePolicyId", $this->_propDict)) {
            return $this->_propDict["compliancePolicyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicyId
    * Identifier for the device compliance policy. Optional. Read-only.
    *
    * @param string $val The compliancePolicyId
    *
    * @return AggregatedPolicyCompliance
    */
    public function setCompliancePolicyId($val)
    {
        $this->_propDict["compliancePolicyId"] = $val;
        return $this;
    }

    /**
    * Gets the compliancePolicyName
    * Name of the device compliance policy. Optional. Read-only.
    *
    * @return string|null The compliancePolicyName
    */
    public function getCompliancePolicyName()
    {
        if (array_key_exists("compliancePolicyName", $this->_propDict)) {
            return $this->_propDict["compliancePolicyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicyName
    * Name of the device compliance policy. Optional. Read-only.
    *
    * @param string $val The compliancePolicyName
    *
    * @return AggregatedPolicyCompliance
    */
    public function setCompliancePolicyName($val)
    {
        $this->_propDict["compliancePolicyName"] = $val;
        return $this;
    }

    /**
    * Gets the compliancePolicyPlatform
    * Platform for the device compliance policy. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, androidAOSP, all. Optional. Read-only.
    *
    * @return string|null The compliancePolicyPlatform
    */
    public function getCompliancePolicyPlatform()
    {
        if (array_key_exists("compliancePolicyPlatform", $this->_propDict)) {
            return $this->_propDict["compliancePolicyPlatform"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicyPlatform
    * Platform for the device compliance policy. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, androidAOSP, all. Optional. Read-only.
    *
    * @param string $val The compliancePolicyPlatform
    *
    * @return AggregatedPolicyCompliance
    */
    public function setCompliancePolicyPlatform($val)
    {
        $this->_propDict["compliancePolicyPlatform"] = $val;
        return $this;
    }

    /**
    * Gets the compliancePolicyType
    * The type of compliance policy. Optional. Read-only.
    *
    * @return string|null The compliancePolicyType
    */
    public function getCompliancePolicyType()
    {
        if (array_key_exists("compliancePolicyType", $this->_propDict)) {
            return $this->_propDict["compliancePolicyType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicyType
    * The type of compliance policy. Optional. Read-only.
    *
    * @param string $val The compliancePolicyType
    *
    * @return AggregatedPolicyCompliance
    */
    public function setCompliancePolicyType($val)
    {
        $this->_propDict["compliancePolicyType"] = $val;
        return $this;
    }

    /**
    * Gets the lastRefreshedDateTime
    * Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
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
    * Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return AggregatedPolicyCompliance
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the numberOfCompliantDevices
    * The number of devices that are in a compliant status. Optional. Read-only.
    *
    * @return int|null The numberOfCompliantDevices
    */
    public function getNumberOfCompliantDevices()
    {
        if (array_key_exists("numberOfCompliantDevices", $this->_propDict)) {
            return $this->_propDict["numberOfCompliantDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCompliantDevices
    * The number of devices that are in a compliant status. Optional. Read-only.
    *
    * @param int $val The numberOfCompliantDevices
    *
    * @return AggregatedPolicyCompliance
    */
    public function setNumberOfCompliantDevices($val)
    {
        $this->_propDict["numberOfCompliantDevices"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfErrorDevices
    * The number of devices that are in an error status. Optional. Read-only.
    *
    * @return int|null The numberOfErrorDevices
    */
    public function getNumberOfErrorDevices()
    {
        if (array_key_exists("numberOfErrorDevices", $this->_propDict)) {
            return $this->_propDict["numberOfErrorDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfErrorDevices
    * The number of devices that are in an error status. Optional. Read-only.
    *
    * @param int $val The numberOfErrorDevices
    *
    * @return AggregatedPolicyCompliance
    */
    public function setNumberOfErrorDevices($val)
    {
        $this->_propDict["numberOfErrorDevices"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfNonCompliantDevices
    * The number of device that are in a non-compliant status. Optional. Read-only.
    *
    * @return int|null The numberOfNonCompliantDevices
    */
    public function getNumberOfNonCompliantDevices()
    {
        if (array_key_exists("numberOfNonCompliantDevices", $this->_propDict)) {
            return $this->_propDict["numberOfNonCompliantDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfNonCompliantDevices
    * The number of device that are in a non-compliant status. Optional. Read-only.
    *
    * @param int $val The numberOfNonCompliantDevices
    *
    * @return AggregatedPolicyCompliance
    */
    public function setNumberOfNonCompliantDevices($val)
    {
        $this->_propDict["numberOfNonCompliantDevices"] = intval($val);
        return $this;
    }

    /**
    * Gets the policyModifiedDateTime
    * The date and time the device policy was last modified. Optional. Read-only.
    *
    * @return \DateTime|null The policyModifiedDateTime
    */
    public function getPolicyModifiedDateTime()
    {
        if (array_key_exists("policyModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["policyModifiedDateTime"], "\DateTime") || is_null($this->_propDict["policyModifiedDateTime"])) {
                return $this->_propDict["policyModifiedDateTime"];
            } else {
                $this->_propDict["policyModifiedDateTime"] = new \DateTime($this->_propDict["policyModifiedDateTime"]);
                return $this->_propDict["policyModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the policyModifiedDateTime
    * The date and time the device policy was last modified. Optional. Read-only.
    *
    * @param \DateTime $val The policyModifiedDateTime
    *
    * @return AggregatedPolicyCompliance
    */
    public function setPolicyModifiedDateTime($val)
    {
        $this->_propDict["policyModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the tenantDisplayName
    * The display name for the managed tenant. Optional. Read-only.
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
    * The display name for the managed tenant. Optional. Read-only.
    *
    * @param string $val The tenantDisplayName
    *
    * @return AggregatedPolicyCompliance
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
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
    * @return AggregatedPolicyCompliance
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

}
