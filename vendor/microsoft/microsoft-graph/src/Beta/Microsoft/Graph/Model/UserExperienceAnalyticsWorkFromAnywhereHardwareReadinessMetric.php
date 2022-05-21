<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric File
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
* UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric extends Entity
{
    /**
    * Gets the osCheckFailedPercentage
    * The percentage of devices for which OS check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The osCheckFailedPercentage
    */
    public function getOsCheckFailedPercentage()
    {
        if (array_key_exists("osCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["osCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osCheckFailedPercentage
    * The percentage of devices for which OS check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The osCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setOsCheckFailedPercentage($val)
    {
        $this->_propDict["osCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the processor64BitCheckFailedPercentage
    * The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The processor64BitCheckFailedPercentage
    */
    public function getProcessor64BitCheckFailedPercentage()
    {
        if (array_key_exists("processor64BitCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["processor64BitCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processor64BitCheckFailedPercentage
    * The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The processor64BitCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setProcessor64BitCheckFailedPercentage($val)
    {
        $this->_propDict["processor64BitCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the processorCoreCountCheckFailedPercentage
    * The percentage of devices for which processor hardware core count check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The processorCoreCountCheckFailedPercentage
    */
    public function getProcessorCoreCountCheckFailedPercentage()
    {
        if (array_key_exists("processorCoreCountCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["processorCoreCountCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processorCoreCountCheckFailedPercentage
    * The percentage of devices for which processor hardware core count check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The processorCoreCountCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setProcessorCoreCountCheckFailedPercentage($val)
    {
        $this->_propDict["processorCoreCountCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the processorFamilyCheckFailedPercentage
    * The percentage of devices for which processor hardware family check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The processorFamilyCheckFailedPercentage
    */
    public function getProcessorFamilyCheckFailedPercentage()
    {
        if (array_key_exists("processorFamilyCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["processorFamilyCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processorFamilyCheckFailedPercentage
    * The percentage of devices for which processor hardware family check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The processorFamilyCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setProcessorFamilyCheckFailedPercentage($val)
    {
        $this->_propDict["processorFamilyCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the processorSpeedCheckFailedPercentage
    * The percentage of devices for which processor hardware speed check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The processorSpeedCheckFailedPercentage
    */
    public function getProcessorSpeedCheckFailedPercentage()
    {
        if (array_key_exists("processorSpeedCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["processorSpeedCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processorSpeedCheckFailedPercentage
    * The percentage of devices for which processor hardware speed check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The processorSpeedCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setProcessorSpeedCheckFailedPercentage($val)
    {
        $this->_propDict["processorSpeedCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the ramCheckFailedPercentage
    * The percentage of devices for which RAM hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The ramCheckFailedPercentage
    */
    public function getRamCheckFailedPercentage()
    {
        if (array_key_exists("ramCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["ramCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ramCheckFailedPercentage
    * The percentage of devices for which RAM hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The ramCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setRamCheckFailedPercentage($val)
    {
        $this->_propDict["ramCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the secureBootCheckFailedPercentage
    * The percentage of devices for which secure boot hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The secureBootCheckFailedPercentage
    */
    public function getSecureBootCheckFailedPercentage()
    {
        if (array_key_exists("secureBootCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["secureBootCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureBootCheckFailedPercentage
    * The percentage of devices for which secure boot hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The secureBootCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setSecureBootCheckFailedPercentage($val)
    {
        $this->_propDict["secureBootCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the storageCheckFailedPercentage
    * The percentage of devices for which storage hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The storageCheckFailedPercentage
    */
    public function getStorageCheckFailedPercentage()
    {
        if (array_key_exists("storageCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["storageCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageCheckFailedPercentage
    * The percentage of devices for which storage hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The storageCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setStorageCheckFailedPercentage($val)
    {
        $this->_propDict["storageCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the totalDeviceCount
    * The count of total devices in an organization. Valid values -2147483648 to 2147483647
    *
    * @return int|null The totalDeviceCount
    */
    public function getTotalDeviceCount()
    {
        if (array_key_exists("totalDeviceCount", $this->_propDict)) {
            return $this->_propDict["totalDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalDeviceCount
    * The count of total devices in an organization. Valid values -2147483648 to 2147483647
    *
    * @param int $val The totalDeviceCount
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setTotalDeviceCount($val)
    {
        $this->_propDict["totalDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the tpmCheckFailedPercentage
    * The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The tpmCheckFailedPercentage
    */
    public function getTpmCheckFailedPercentage()
    {
        if (array_key_exists("tpmCheckFailedPercentage", $this->_propDict)) {
            return $this->_propDict["tpmCheckFailedPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tpmCheckFailedPercentage
    * The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The tpmCheckFailedPercentage
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setTpmCheckFailedPercentage($val)
    {
        $this->_propDict["tpmCheckFailedPercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the upgradeEligibleDeviceCount
    * The count of devices in an organization eligible for windows upgrade. Valid values -2147483648 to 2147483647
    *
    * @return int|null The upgradeEligibleDeviceCount
    */
    public function getUpgradeEligibleDeviceCount()
    {
        if (array_key_exists("upgradeEligibleDeviceCount", $this->_propDict)) {
            return $this->_propDict["upgradeEligibleDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upgradeEligibleDeviceCount
    * The count of devices in an organization eligible for windows upgrade. Valid values -2147483648 to 2147483647
    *
    * @param int $val The upgradeEligibleDeviceCount
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function setUpgradeEligibleDeviceCount($val)
    {
        $this->_propDict["upgradeEligibleDeviceCount"] = intval($val);
        return $this;
    }

}
