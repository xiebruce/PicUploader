<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAutopilotDevicesSummary File
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
* UserExperienceAnalyticsAutopilotDevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAutopilotDevicesSummary extends Entity
{
    /**
    * Gets the devicesNotAutopilotRegistered
    * The count of intune devices that are not autopilot registerd.
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
    * The count of intune devices that are not autopilot registerd.
    *
    * @param int $val The value of the devicesNotAutopilotRegistered
    *
    * @return UserExperienceAnalyticsAutopilotDevicesSummary
    */
    public function setDevicesNotAutopilotRegistered($val)
    {
        $this->_propDict["devicesNotAutopilotRegistered"] = $val;
        return $this;
    }
    /**
    * Gets the devicesWithoutAutopilotProfileAssigned
    * The count of intune devices not autopilot profile assigned.
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
    * The count of intune devices not autopilot profile assigned.
    *
    * @param int $val The value of the devicesWithoutAutopilotProfileAssigned
    *
    * @return UserExperienceAnalyticsAutopilotDevicesSummary
    */
    public function setDevicesWithoutAutopilotProfileAssigned($val)
    {
        $this->_propDict["devicesWithoutAutopilotProfileAssigned"] = $val;
        return $this;
    }
    /**
    * Gets the totalWindows10DevicesWithoutTenantAttached
    * The count of windows 10 devices that are Intune and Comanaged.
    *
    * @return int|null The totalWindows10DevicesWithoutTenantAttached
    */
    public function getTotalWindows10DevicesWithoutTenantAttached()
    {
        if (array_key_exists("totalWindows10DevicesWithoutTenantAttached", $this->_propDict)) {
            return $this->_propDict["totalWindows10DevicesWithoutTenantAttached"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalWindows10DevicesWithoutTenantAttached
    * The count of windows 10 devices that are Intune and Comanaged.
    *
    * @param int $val The value of the totalWindows10DevicesWithoutTenantAttached
    *
    * @return UserExperienceAnalyticsAutopilotDevicesSummary
    */
    public function setTotalWindows10DevicesWithoutTenantAttached($val)
    {
        $this->_propDict["totalWindows10DevicesWithoutTenantAttached"] = $val;
        return $this;
    }
}
