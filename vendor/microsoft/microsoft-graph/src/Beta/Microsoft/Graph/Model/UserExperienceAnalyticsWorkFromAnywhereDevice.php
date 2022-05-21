<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWorkFromAnywhereDevice File
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
* UserExperienceAnalyticsWorkFromAnywhereDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWorkFromAnywhereDevice extends Entity
{
    /**
    * Gets the autoPilotProfileAssigned
    * The user experience analytics work from anywhere intune device's autopilotProfileAssigned.
    *
    * @return bool|null The autoPilotProfileAssigned
    */
    public function getAutoPilotProfileAssigned()
    {
        if (array_key_exists("autoPilotProfileAssigned", $this->_propDict)) {
            return $this->_propDict["autoPilotProfileAssigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoPilotProfileAssigned
    * The user experience analytics work from anywhere intune device's autopilotProfileAssigned.
    *
    * @param bool $val The autoPilotProfileAssigned
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAutoPilotProfileAssigned($val)
    {
        $this->_propDict["autoPilotProfileAssigned"] = boolval($val);
        return $this;
    }

    /**
    * Gets the autoPilotRegistered
    * The user experience work from anywhere intune device's autopilotRegistered.
    *
    * @return bool|null The autoPilotRegistered
    */
    public function getAutoPilotRegistered()
    {
        if (array_key_exists("autoPilotRegistered", $this->_propDict)) {
            return $this->_propDict["autoPilotRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoPilotRegistered
    * The user experience work from anywhere intune device's autopilotRegistered.
    *
    * @param bool $val The autoPilotRegistered
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAutoPilotRegistered($val)
    {
        $this->_propDict["autoPilotRegistered"] = boolval($val);
        return $this;
    }

    /**
    * Gets the azureAdDeviceId
    * The user experience work from anywhere azure Ad device Id.
    *
    * @return string|null The azureAdDeviceId
    */
    public function getAzureAdDeviceId()
    {
        if (array_key_exists("azureAdDeviceId", $this->_propDict)) {
            return $this->_propDict["azureAdDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureAdDeviceId
    * The user experience work from anywhere azure Ad device Id.
    *
    * @param string $val The azureAdDeviceId
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAzureAdDeviceId($val)
    {
        $this->_propDict["azureAdDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the azureAdJoinType
    * The user experience work from anywhere device's azure Ad joinType.
    *
    * @return string|null The azureAdJoinType
    */
    public function getAzureAdJoinType()
    {
        if (array_key_exists("azureAdJoinType", $this->_propDict)) {
            return $this->_propDict["azureAdJoinType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureAdJoinType
    * The user experience work from anywhere device's azure Ad joinType.
    *
    * @param string $val The azureAdJoinType
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAzureAdJoinType($val)
    {
        $this->_propDict["azureAdJoinType"] = $val;
        return $this;
    }

    /**
    * Gets the azureAdRegistered
    * The user experience work from anywhere device's azureAdRegistered.
    *
    * @return bool|null The azureAdRegistered
    */
    public function getAzureAdRegistered()
    {
        if (array_key_exists("azureAdRegistered", $this->_propDict)) {
            return $this->_propDict["azureAdRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureAdRegistered
    * The user experience work from anywhere device's azureAdRegistered.
    *
    * @param bool $val The azureAdRegistered
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setAzureAdRegistered($val)
    {
        $this->_propDict["azureAdRegistered"] = boolval($val);
        return $this;
    }

    /**
    * Gets the cloudIdentityScore
    * The user experience work from anywhere per device cloud identity score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The cloudIdentityScore
    */
    public function getCloudIdentityScore()
    {
        if (array_key_exists("cloudIdentityScore", $this->_propDict)) {
            return $this->_propDict["cloudIdentityScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudIdentityScore
    * The user experience work from anywhere per device cloud identity score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The cloudIdentityScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setCloudIdentityScore($val)
    {
        $this->_propDict["cloudIdentityScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the cloudManagementScore
    * The user experience work from anywhere per device cloud management score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The cloudManagementScore
    */
    public function getCloudManagementScore()
    {
        if (array_key_exists("cloudManagementScore", $this->_propDict)) {
            return $this->_propDict["cloudManagementScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudManagementScore
    * The user experience work from anywhere per device cloud management score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The cloudManagementScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setCloudManagementScore($val)
    {
        $this->_propDict["cloudManagementScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the cloudProvisioningScore
    * The user experience work from anywhere per device cloud provisioning score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The cloudProvisioningScore
    */
    public function getCloudProvisioningScore()
    {
        if (array_key_exists("cloudProvisioningScore", $this->_propDict)) {
            return $this->_propDict["cloudProvisioningScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudProvisioningScore
    * The user experience work from anywhere per device cloud provisioning score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The cloudProvisioningScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setCloudProvisioningScore($val)
    {
        $this->_propDict["cloudProvisioningScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the compliancePolicySetToIntune
    * The user experience work from anywhere device's compliancePolicySetToIntune.
    *
    * @return bool|null The compliancePolicySetToIntune
    */
    public function getCompliancePolicySetToIntune()
    {
        if (array_key_exists("compliancePolicySetToIntune", $this->_propDict)) {
            return $this->_propDict["compliancePolicySetToIntune"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicySetToIntune
    * The user experience work from anywhere device's compliancePolicySetToIntune.
    *
    * @param bool $val The compliancePolicySetToIntune
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setCompliancePolicySetToIntune($val)
    {
        $this->_propDict["compliancePolicySetToIntune"] = boolval($val);
        return $this;
    }

    /**
    * Gets the deviceId
    * The user experience work from anywhere device Id.
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * The user experience work from anywhere device Id.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * The work from anywhere device's name.
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * The work from anywhere device's name.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the healthStatus
    * The user experience work from anywhere per device health status. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
    *
    * @return UserExperienceAnalyticsHealthState|null The healthStatus
    */
    public function getHealthStatus()
    {
        if (array_key_exists("healthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthStatus"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsHealthState") || is_null($this->_propDict["healthStatus"])) {
                return $this->_propDict["healthStatus"];
            } else {
                $this->_propDict["healthStatus"] = new UserExperienceAnalyticsHealthState($this->_propDict["healthStatus"]);
                return $this->_propDict["healthStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the healthStatus
    * The user experience work from anywhere per device health status. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
    *
    * @param UserExperienceAnalyticsHealthState $val The healthStatus
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }

    /**
    * Gets the isCloudManagedGatewayEnabled
    * The user experience work from anywhere device's Cloud Management Gateway for Configuration Manager is enabled.
    *
    * @return bool|null The isCloudManagedGatewayEnabled
    */
    public function getIsCloudManagedGatewayEnabled()
    {
        if (array_key_exists("isCloudManagedGatewayEnabled", $this->_propDict)) {
            return $this->_propDict["isCloudManagedGatewayEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCloudManagedGatewayEnabled
    * The user experience work from anywhere device's Cloud Management Gateway for Configuration Manager is enabled.
    *
    * @param bool $val The isCloudManagedGatewayEnabled
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setIsCloudManagedGatewayEnabled($val)
    {
        $this->_propDict["isCloudManagedGatewayEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the managedBy
    * The user experience work from anywhere management agent of the device.
    *
    * @return string|null The managedBy
    */
    public function getManagedBy()
    {
        if (array_key_exists("managedBy", $this->_propDict)) {
            return $this->_propDict["managedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedBy
    * The user experience work from anywhere management agent of the device.
    *
    * @param string $val The managedBy
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setManagedBy($val)
    {
        $this->_propDict["managedBy"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The user experience work from anywhere device's manufacturer.
    *
    * @return string|null The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * The user experience work from anywhere device's manufacturer.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * The user experience work from anywhere device's model.
    *
    * @return string|null The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }

    /**
    * Sets the model
    * The user experience work from anywhere device's model.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the osCheckFailed
    * The user experience work from anywhere device, Is OS check failed for device to upgrade to the latest version of windows.
    *
    * @return bool|null The osCheckFailed
    */
    public function getOsCheckFailed()
    {
        if (array_key_exists("osCheckFailed", $this->_propDict)) {
            return $this->_propDict["osCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osCheckFailed
    * The user experience work from anywhere device, Is OS check failed for device to upgrade to the latest version of windows.
    *
    * @param bool $val The osCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setOsCheckFailed($val)
    {
        $this->_propDict["osCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the osDescription
    * The user experience work from anywhere device's OS Description.
    *
    * @return string|null The osDescription
    */
    public function getOsDescription()
    {
        if (array_key_exists("osDescription", $this->_propDict)) {
            return $this->_propDict["osDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osDescription
    * The user experience work from anywhere device's OS Description.
    *
    * @param string $val The osDescription
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setOsDescription($val)
    {
        $this->_propDict["osDescription"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * The user experience work from anywhere device's OS Version.
    *
    * @return string|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osVersion
    * The user experience work from anywhere device's OS Version.
    *
    * @param string $val The osVersion
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the otherWorkloadsSetToIntune
    * The user experience work from anywhere device's otherWorkloadsSetToIntune.
    *
    * @return bool|null The otherWorkloadsSetToIntune
    */
    public function getOtherWorkloadsSetToIntune()
    {
        if (array_key_exists("otherWorkloadsSetToIntune", $this->_propDict)) {
            return $this->_propDict["otherWorkloadsSetToIntune"];
        } else {
            return null;
        }
    }

    /**
    * Sets the otherWorkloadsSetToIntune
    * The user experience work from anywhere device's otherWorkloadsSetToIntune.
    *
    * @param bool $val The otherWorkloadsSetToIntune
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setOtherWorkloadsSetToIntune($val)
    {
        $this->_propDict["otherWorkloadsSetToIntune"] = boolval($val);
        return $this;
    }

    /**
    * Gets the ownership
    * The user experience work from anywhere device's ownership.
    *
    * @return string|null The ownership
    */
    public function getOwnership()
    {
        if (array_key_exists("ownership", $this->_propDict)) {
            return $this->_propDict["ownership"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownership
    * The user experience work from anywhere device's ownership.
    *
    * @param string $val The ownership
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setOwnership($val)
    {
        $this->_propDict["ownership"] = $val;
        return $this;
    }

    /**
    * Gets the processor64BitCheckFailed
    * The user experience work from anywhere device, Is processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows.
    *
    * @return bool|null The processor64BitCheckFailed
    */
    public function getProcessor64BitCheckFailed()
    {
        if (array_key_exists("processor64BitCheckFailed", $this->_propDict)) {
            return $this->_propDict["processor64BitCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processor64BitCheckFailed
    * The user experience work from anywhere device, Is processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows.
    *
    * @param bool $val The processor64BitCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setProcessor64BitCheckFailed($val)
    {
        $this->_propDict["processor64BitCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the processorCoreCountCheckFailed
    * The user experience work from anywhere device, Is processor hardware core count check failed for device to upgrade to the latest version of windows.
    *
    * @return bool|null The processorCoreCountCheckFailed
    */
    public function getProcessorCoreCountCheckFailed()
    {
        if (array_key_exists("processorCoreCountCheckFailed", $this->_propDict)) {
            return $this->_propDict["processorCoreCountCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processorCoreCountCheckFailed
    * The user experience work from anywhere device, Is processor hardware core count check failed for device to upgrade to the latest version of windows.
    *
    * @param bool $val The processorCoreCountCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setProcessorCoreCountCheckFailed($val)
    {
        $this->_propDict["processorCoreCountCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the processorFamilyCheckFailed
    * The user experience work from anywhere device, Is processor hardware family check failed for device to upgrade to the latest version of windows.
    *
    * @return bool|null The processorFamilyCheckFailed
    */
    public function getProcessorFamilyCheckFailed()
    {
        if (array_key_exists("processorFamilyCheckFailed", $this->_propDict)) {
            return $this->_propDict["processorFamilyCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processorFamilyCheckFailed
    * The user experience work from anywhere device, Is processor hardware family check failed for device to upgrade to the latest version of windows.
    *
    * @param bool $val The processorFamilyCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setProcessorFamilyCheckFailed($val)
    {
        $this->_propDict["processorFamilyCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the processorSpeedCheckFailed
    * The user experience work from anywhere device, Is processor hardware speed check failed for device to upgrade to the latest version of windows.
    *
    * @return bool|null The processorSpeedCheckFailed
    */
    public function getProcessorSpeedCheckFailed()
    {
        if (array_key_exists("processorSpeedCheckFailed", $this->_propDict)) {
            return $this->_propDict["processorSpeedCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processorSpeedCheckFailed
    * The user experience work from anywhere device, Is processor hardware speed check failed for device to upgrade to the latest version of windows.
    *
    * @param bool $val The processorSpeedCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setProcessorSpeedCheckFailed($val)
    {
        $this->_propDict["processorSpeedCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the ramCheckFailed
    * Is the user experience analytics work from anywhere device RAM hardware check failed for device to upgrade to the latest version of windows
    *
    * @return bool|null The ramCheckFailed
    */
    public function getRamCheckFailed()
    {
        if (array_key_exists("ramCheckFailed", $this->_propDict)) {
            return $this->_propDict["ramCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ramCheckFailed
    * Is the user experience analytics work from anywhere device RAM hardware check failed for device to upgrade to the latest version of windows
    *
    * @param bool $val The ramCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setRamCheckFailed($val)
    {
        $this->_propDict["ramCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the secureBootCheckFailed
    * The user experience work from anywhere device, Is secure boot hardware check failed for device to upgrade to the latest version of windows.
    *
    * @return bool|null The secureBootCheckFailed
    */
    public function getSecureBootCheckFailed()
    {
        if (array_key_exists("secureBootCheckFailed", $this->_propDict)) {
            return $this->_propDict["secureBootCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureBootCheckFailed
    * The user experience work from anywhere device, Is secure boot hardware check failed for device to upgrade to the latest version of windows.
    *
    * @param bool $val The secureBootCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setSecureBootCheckFailed($val)
    {
        $this->_propDict["secureBootCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the serialNumber
    * The user experience work from anywhere device's serial number.
    *
    * @return string|null The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serialNumber
    * The user experience work from anywhere device's serial number.
    *
    * @param string $val The serialNumber
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }

    /**
    * Gets the storageCheckFailed
    * The user experience work from anywhere device, Is storage hardware check failed for device to upgrade to the latest version of windows.
    *
    * @return bool|null The storageCheckFailed
    */
    public function getStorageCheckFailed()
    {
        if (array_key_exists("storageCheckFailed", $this->_propDict)) {
            return $this->_propDict["storageCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageCheckFailed
    * The user experience work from anywhere device, Is storage hardware check failed for device to upgrade to the latest version of windows.
    *
    * @param bool $val The storageCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setStorageCheckFailed($val)
    {
        $this->_propDict["storageCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the tenantAttached
    * The user experience work from anywhere device's tenantAttached.
    *
    * @return bool|null The tenantAttached
    */
    public function getTenantAttached()
    {
        if (array_key_exists("tenantAttached", $this->_propDict)) {
            return $this->_propDict["tenantAttached"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantAttached
    * The user experience work from anywhere device's tenantAttached.
    *
    * @param bool $val The tenantAttached
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setTenantAttached($val)
    {
        $this->_propDict["tenantAttached"] = boolval($val);
        return $this;
    }

    /**
    * Gets the tpmCheckFailed
    * The user experience work from anywhere device, Is Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows.
    *
    * @return bool|null The tpmCheckFailed
    */
    public function getTpmCheckFailed()
    {
        if (array_key_exists("tpmCheckFailed", $this->_propDict)) {
            return $this->_propDict["tpmCheckFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tpmCheckFailed
    * The user experience work from anywhere device, Is Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows.
    *
    * @param bool $val The tpmCheckFailed
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setTpmCheckFailed($val)
    {
        $this->_propDict["tpmCheckFailed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the upgradeEligibility
    * The user experience work from anywhere windows upgrade eligibility status of device. Possible values are: upgraded, unknown, notCapable, capable.
    *
    * @return OperatingSystemUpgradeEligibility|null The upgradeEligibility
    */
    public function getUpgradeEligibility()
    {
        if (array_key_exists("upgradeEligibility", $this->_propDict)) {
            if (is_a($this->_propDict["upgradeEligibility"], "\Beta\Microsoft\Graph\Model\OperatingSystemUpgradeEligibility") || is_null($this->_propDict["upgradeEligibility"])) {
                return $this->_propDict["upgradeEligibility"];
            } else {
                $this->_propDict["upgradeEligibility"] = new OperatingSystemUpgradeEligibility($this->_propDict["upgradeEligibility"]);
                return $this->_propDict["upgradeEligibility"];
            }
        }
        return null;
    }

    /**
    * Sets the upgradeEligibility
    * The user experience work from anywhere windows upgrade eligibility status of device. Possible values are: upgraded, unknown, notCapable, capable.
    *
    * @param OperatingSystemUpgradeEligibility $val The upgradeEligibility
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setUpgradeEligibility($val)
    {
        $this->_propDict["upgradeEligibility"] = $val;
        return $this;
    }

    /**
    * Gets the windowsScore
    * The user experience work from anywhere per device windows score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The windowsScore
    */
    public function getWindowsScore()
    {
        if (array_key_exists("windowsScore", $this->_propDict)) {
            return $this->_propDict["windowsScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsScore
    * The user experience work from anywhere per device windows score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The windowsScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setWindowsScore($val)
    {
        $this->_propDict["windowsScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the workFromAnywhereScore
    * The user experience work from anywhere per device overall score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The workFromAnywhereScore
    */
    public function getWorkFromAnywhereScore()
    {
        if (array_key_exists("workFromAnywhereScore", $this->_propDict)) {
            return $this->_propDict["workFromAnywhereScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workFromAnywhereScore
    * The user experience work from anywhere per device overall score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The workFromAnywhereScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public function setWorkFromAnywhereScore($val)
    {
        $this->_propDict["workFromAnywhereScore"] = floatval($val);
        return $this;
    }

}
