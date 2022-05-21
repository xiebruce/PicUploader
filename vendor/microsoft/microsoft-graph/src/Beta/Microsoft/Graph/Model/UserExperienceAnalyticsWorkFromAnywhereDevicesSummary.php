<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWorkFromAnywhereDevicesSummary File
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
* UserExperienceAnalyticsWorkFromAnywhereDevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWorkFromAnywhereDevicesSummary extends Entity
{

    /**
    * Gets the autopilotDevicesSummary
    * The value of work from anywhere autopilot devices summary.
    *
    * @return UserExperienceAnalyticsAutopilotDevicesSummary|null The autopilotDevicesSummary
    */
    public function getAutopilotDevicesSummary()
    {
        if (array_key_exists("autopilotDevicesSummary", $this->_propDict)) {
            if (is_a($this->_propDict["autopilotDevicesSummary"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsAutopilotDevicesSummary") || is_null($this->_propDict["autopilotDevicesSummary"])) {
                return $this->_propDict["autopilotDevicesSummary"];
            } else {
                $this->_propDict["autopilotDevicesSummary"] = new UserExperienceAnalyticsAutopilotDevicesSummary($this->_propDict["autopilotDevicesSummary"]);
                return $this->_propDict["autopilotDevicesSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the autopilotDevicesSummary
    * The value of work from anywhere autopilot devices summary.
    *
    * @param UserExperienceAnalyticsAutopilotDevicesSummary $val The value to assign to the autopilotDevicesSummary
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary The UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setAutopilotDevicesSummary($val)
    {
        $this->_propDict["autopilotDevicesSummary"] = $val;
         return $this;
    }

    /**
    * Gets the cloudIdentityDevicesSummary
    * The user experience analytics work from anywhere Cloud Identity devices summary.
    *
    * @return UserExperienceAnalyticsCloudIdentityDevicesSummary|null The cloudIdentityDevicesSummary
    */
    public function getCloudIdentityDevicesSummary()
    {
        if (array_key_exists("cloudIdentityDevicesSummary", $this->_propDict)) {
            if (is_a($this->_propDict["cloudIdentityDevicesSummary"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCloudIdentityDevicesSummary") || is_null($this->_propDict["cloudIdentityDevicesSummary"])) {
                return $this->_propDict["cloudIdentityDevicesSummary"];
            } else {
                $this->_propDict["cloudIdentityDevicesSummary"] = new UserExperienceAnalyticsCloudIdentityDevicesSummary($this->_propDict["cloudIdentityDevicesSummary"]);
                return $this->_propDict["cloudIdentityDevicesSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudIdentityDevicesSummary
    * The user experience analytics work from anywhere Cloud Identity devices summary.
    *
    * @param UserExperienceAnalyticsCloudIdentityDevicesSummary $val The value to assign to the cloudIdentityDevicesSummary
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary The UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setCloudIdentityDevicesSummary($val)
    {
        $this->_propDict["cloudIdentityDevicesSummary"] = $val;
         return $this;
    }

    /**
    * Gets the cloudManagementDevicesSummary
    * The user experience work from anywhere Cloud management devices summary.
    *
    * @return UserExperienceAnalyticsCloudManagementDevicesSummary|null The cloudManagementDevicesSummary
    */
    public function getCloudManagementDevicesSummary()
    {
        if (array_key_exists("cloudManagementDevicesSummary", $this->_propDict)) {
            if (is_a($this->_propDict["cloudManagementDevicesSummary"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCloudManagementDevicesSummary") || is_null($this->_propDict["cloudManagementDevicesSummary"])) {
                return $this->_propDict["cloudManagementDevicesSummary"];
            } else {
                $this->_propDict["cloudManagementDevicesSummary"] = new UserExperienceAnalyticsCloudManagementDevicesSummary($this->_propDict["cloudManagementDevicesSummary"]);
                return $this->_propDict["cloudManagementDevicesSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudManagementDevicesSummary
    * The user experience work from anywhere Cloud management devices summary.
    *
    * @param UserExperienceAnalyticsCloudManagementDevicesSummary $val The value to assign to the cloudManagementDevicesSummary
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary The UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setCloudManagementDevicesSummary($val)
    {
        $this->_propDict["cloudManagementDevicesSummary"] = $val;
         return $this;
    }
    /**
    * Gets the coManagedDevices
    * Total number of co-managed devices. Valid values -2147483648 to 2147483647
    *
    * @return int|null The coManagedDevices
    */
    public function getCoManagedDevices()
    {
        if (array_key_exists("coManagedDevices", $this->_propDict)) {
            return $this->_propDict["coManagedDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coManagedDevices
    * Total number of co-managed devices. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the coManagedDevices
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setCoManagedDevices($val)
    {
        $this->_propDict["coManagedDevices"] = $val;
        return $this;
    }
    /**
    * Gets the devicesNotAutopilotRegistered
    * The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
    *
    * @return int|null The devicesNotAutopilotRegistered
    */
    public function getDevicesNotAutopilotRegistered()
    {
        if (array_key_exists("devicesNotAutopilotRegistered", $this->_propDict)) {
            return $this->_propDict["devicesNotAutopilotRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicesNotAutopilotRegistered
    * The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the devicesNotAutopilotRegistered
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setDevicesNotAutopilotRegistered($val)
    {
        $this->_propDict["devicesNotAutopilotRegistered"] = $val;
        return $this;
    }
    /**
    * Gets the devicesWithoutAutopilotProfileAssigned
    * The count of intune devices not autopilot profile assigned. Valid values -2147483648 to 2147483647
    *
    * @return int|null The devicesWithoutAutopilotProfileAssigned
    */
    public function getDevicesWithoutAutopilotProfileAssigned()
    {
        if (array_key_exists("devicesWithoutAutopilotProfileAssigned", $this->_propDict)) {
            return $this->_propDict["devicesWithoutAutopilotProfileAssigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicesWithoutAutopilotProfileAssigned
    * The count of intune devices not autopilot profile assigned. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the devicesWithoutAutopilotProfileAssigned
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setDevicesWithoutAutopilotProfileAssigned($val)
    {
        $this->_propDict["devicesWithoutAutopilotProfileAssigned"] = $val;
        return $this;
    }
    /**
    * Gets the devicesWithoutCloudIdentity
    * The count of devices that are not cloud identity. Valid values -2147483648 to 2147483647
    *
    * @return int|null The devicesWithoutCloudIdentity
    */
    public function getDevicesWithoutCloudIdentity()
    {
        if (array_key_exists("devicesWithoutCloudIdentity", $this->_propDict)) {
            return $this->_propDict["devicesWithoutCloudIdentity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicesWithoutCloudIdentity
    * The count of devices that are not cloud identity. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the devicesWithoutCloudIdentity
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setDevicesWithoutCloudIdentity($val)
    {
        $this->_propDict["devicesWithoutCloudIdentity"] = $val;
        return $this;
    }
    /**
    * Gets the intuneDevices
    * The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
    *
    * @return int|null The intuneDevices
    */
    public function getIntuneDevices()
    {
        if (array_key_exists("intuneDevices", $this->_propDict)) {
            return $this->_propDict["intuneDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the intuneDevices
    * The count of intune devices that are not autopilot registerd. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the intuneDevices
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setIntuneDevices($val)
    {
        $this->_propDict["intuneDevices"] = $val;
        return $this;
    }
    /**
    * Gets the tenantAttachDevices
    * Total count of tenant attach devices. Valid values -2147483648 to 2147483647
    *
    * @return int|null The tenantAttachDevices
    */
    public function getTenantAttachDevices()
    {
        if (array_key_exists("tenantAttachDevices", $this->_propDict)) {
            return $this->_propDict["tenantAttachDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantAttachDevices
    * Total count of tenant attach devices. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the tenantAttachDevices
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setTenantAttachDevices($val)
    {
        $this->_propDict["tenantAttachDevices"] = $val;
        return $this;
    }
    /**
    * Gets the totalDevices
    * The total count of devices. Valid values -2147483648 to 2147483647
    *
    * @return int|null The totalDevices
    */
    public function getTotalDevices()
    {
        if (array_key_exists("totalDevices", $this->_propDict)) {
            return $this->_propDict["totalDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalDevices
    * The total count of devices. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the totalDevices
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setTotalDevices($val)
    {
        $this->_propDict["totalDevices"] = $val;
        return $this;
    }
    /**
    * Gets the unsupportedOSversionDevices
    * The count of Windows 10 devices that have unsupported OS versions. Valid values -2147483648 to 2147483647
    *
    * @return int|null The unsupportedOSversionDevices
    */
    public function getUnsupportedOSversionDevices()
    {
        if (array_key_exists("unsupportedOSversionDevices", $this->_propDict)) {
            return $this->_propDict["unsupportedOSversionDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unsupportedOSversionDevices
    * The count of Windows 10 devices that have unsupported OS versions. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the unsupportedOSversionDevices
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setUnsupportedOSversionDevices($val)
    {
        $this->_propDict["unsupportedOSversionDevices"] = $val;
        return $this;
    }
    /**
    * Gets the windows10Devices
    * The count of windows 10 devices. Valid values -2147483648 to 2147483647
    *
    * @return int|null The windows10Devices
    */
    public function getWindows10Devices()
    {
        if (array_key_exists("windows10Devices", $this->_propDict)) {
            return $this->_propDict["windows10Devices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows10Devices
    * The count of windows 10 devices. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the windows10Devices
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setWindows10Devices($val)
    {
        $this->_propDict["windows10Devices"] = $val;
        return $this;
    }

    /**
    * Gets the windows10DevicesSummary
    * The user experience analytics work from anywhere Windows 10 devices summary.
    *
    * @return UserExperienceAnalyticsWindows10DevicesSummary|null The windows10DevicesSummary
    */
    public function getWindows10DevicesSummary()
    {
        if (array_key_exists("windows10DevicesSummary", $this->_propDict)) {
            if (is_a($this->_propDict["windows10DevicesSummary"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsWindows10DevicesSummary") || is_null($this->_propDict["windows10DevicesSummary"])) {
                return $this->_propDict["windows10DevicesSummary"];
            } else {
                $this->_propDict["windows10DevicesSummary"] = new UserExperienceAnalyticsWindows10DevicesSummary($this->_propDict["windows10DevicesSummary"]);
                return $this->_propDict["windows10DevicesSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the windows10DevicesSummary
    * The user experience analytics work from anywhere Windows 10 devices summary.
    *
    * @param UserExperienceAnalyticsWindows10DevicesSummary $val The value to assign to the windows10DevicesSummary
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary The UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setWindows10DevicesSummary($val)
    {
        $this->_propDict["windows10DevicesSummary"] = $val;
         return $this;
    }
    /**
    * Gets the windows10DevicesWithoutTenantAttach
    * The count of windows 10 devices that are Intune and Comanaged. Valid values -2147483648 to 2147483647
    *
    * @return int|null The windows10DevicesWithoutTenantAttach
    */
    public function getWindows10DevicesWithoutTenantAttach()
    {
        if (array_key_exists("windows10DevicesWithoutTenantAttach", $this->_propDict)) {
            return $this->_propDict["windows10DevicesWithoutTenantAttach"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows10DevicesWithoutTenantAttach
    * The count of windows 10 devices that are Intune and Comanaged. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the windows10DevicesWithoutTenantAttach
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setWindows10DevicesWithoutTenantAttach($val)
    {
        $this->_propDict["windows10DevicesWithoutTenantAttach"] = $val;
        return $this;
    }
}
