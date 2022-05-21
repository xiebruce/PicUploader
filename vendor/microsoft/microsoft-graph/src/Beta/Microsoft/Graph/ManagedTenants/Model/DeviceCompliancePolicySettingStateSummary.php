<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicySettingStateSummary File
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
* DeviceCompliancePolicySettingStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceCompliancePolicySettingStateSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the conflictDeviceCount
    * The number of devices in a conflict state. Optional. Read-only.
    *
    * @return int|null The conflictDeviceCount
    */
    public function getConflictDeviceCount()
    {
        if (array_key_exists("conflictDeviceCount", $this->_propDict)) {
            return $this->_propDict["conflictDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conflictDeviceCount
    * The number of devices in a conflict state. Optional. Read-only.
    *
    * @param int $val The conflictDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setConflictDeviceCount($val)
    {
        $this->_propDict["conflictDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the errorDeviceCount
    * The number of devices in an error state. Optional. Read-only.
    *
    * @return int|null The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorDeviceCount
    * The number of devices in an error state. Optional. Read-only.
    *
    * @param int $val The errorDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the failedDeviceCount
    * The number of devices in a failed state. Optional. Read-only.
    *
    * @return int|null The failedDeviceCount
    */
    public function getFailedDeviceCount()
    {
        if (array_key_exists("failedDeviceCount", $this->_propDict)) {
            return $this->_propDict["failedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedDeviceCount
    * The number of devices in a failed state. Optional. Read-only.
    *
    * @param int $val The failedDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the intuneAccountId
    * The identifer for the Microsoft Intune account. Required. Read-only.
    *
    * @return string|null The intuneAccountId
    */
    public function getIntuneAccountId()
    {
        if (array_key_exists("intuneAccountId", $this->_propDict)) {
            return $this->_propDict["intuneAccountId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the intuneAccountId
    * The identifer for the Microsoft Intune account. Required. Read-only.
    *
    * @param string $val The intuneAccountId
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setIntuneAccountId($val)
    {
        $this->_propDict["intuneAccountId"] = $val;
        return $this;
    }

    /**
    * Gets the intuneSettingId
    * The identifier for the Intune setting. Optional. Read-only.
    *
    * @return string|null The intuneSettingId
    */
    public function getIntuneSettingId()
    {
        if (array_key_exists("intuneSettingId", $this->_propDict)) {
            return $this->_propDict["intuneSettingId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the intuneSettingId
    * The identifier for the Intune setting. Optional. Read-only.
    *
    * @param string $val The intuneSettingId
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setIntuneSettingId($val)
    {
        $this->_propDict["intuneSettingId"] = $val;
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
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the notApplicableDeviceCount
    * The number of devices in a not applicable state. Optional. Read-only.
    *
    * @return int|null The notApplicableDeviceCount
    */
    public function getNotApplicableDeviceCount()
    {
        if (array_key_exists("notApplicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["notApplicableDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notApplicableDeviceCount
    * The number of devices in a not applicable state. Optional. Read-only.
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the pendingDeviceCount
    * The number of devices in a pending state. Optional. Read-only.
    *
    * @return int|null The pendingDeviceCount
    */
    public function getPendingDeviceCount()
    {
        if (array_key_exists("pendingDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingDeviceCount
    * The number of devices in a pending state. Optional. Read-only.
    *
    * @param int $val The pendingDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setPendingDeviceCount($val)
    {
        $this->_propDict["pendingDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the policyType
    * The type for the device compliance policy. Optional. Read-only.
    *
    * @return string|null The policyType
    */
    public function getPolicyType()
    {
        if (array_key_exists("policyType", $this->_propDict)) {
            return $this->_propDict["policyType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyType
    * The type for the device compliance policy. Optional. Read-only.
    *
    * @param string $val The policyType
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setPolicyType($val)
    {
        $this->_propDict["policyType"] = $val;
        return $this;
    }

    /**
    * Gets the settingName
    * The name for the setting within the device compliance policy. Optional. Read-only.
    *
    * @return string|null The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingName
    * The name for the setting within the device compliance policy. Optional. Read-only.
    *
    * @param string $val The settingName
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }

    /**
    * Gets the succeededDeviceCount
    * The number of devices in a succeeded state. Optional. Read-only.
    *
    * @return int|null The succeededDeviceCount
    */
    public function getSucceededDeviceCount()
    {
        if (array_key_exists("succeededDeviceCount", $this->_propDict)) {
            return $this->_propDict["succeededDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the succeededDeviceCount
    * The number of devices in a succeeded state. Optional. Read-only.
    *
    * @param int $val The succeededDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setSucceededDeviceCount($val)
    {
        $this->_propDict["succeededDeviceCount"] = intval($val);
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
    * @return DeviceCompliancePolicySettingStateSummary
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
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

}
