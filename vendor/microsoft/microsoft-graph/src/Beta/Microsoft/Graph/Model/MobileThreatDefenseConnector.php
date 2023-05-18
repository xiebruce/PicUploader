<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileThreatDefenseConnector File
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
* MobileThreatDefenseConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileThreatDefenseConnector extends Entity
{
    /**
    * Gets the allowPartnerToCollectIOSApplicationMetadata
    * When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE.
    *
    * @return bool|null The allowPartnerToCollectIOSApplicationMetadata
    */
    public function getAllowPartnerToCollectIOSApplicationMetadata()
    {
        if (array_key_exists("allowPartnerToCollectIOSApplicationMetadata", $this->_propDict)) {
            return $this->_propDict["allowPartnerToCollectIOSApplicationMetadata"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowPartnerToCollectIOSApplicationMetadata
    * When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE.
    *
    * @param bool $val The allowPartnerToCollectIOSApplicationMetadata
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAllowPartnerToCollectIOSApplicationMetadata($val)
    {
        $this->_propDict["allowPartnerToCollectIOSApplicationMetadata"] = boolval($val);
        return $this;
    }

    /**
    * Gets the allowPartnerToCollectIOSPersonalApplicationMetadata
    * When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE.
    *
    * @return bool|null The allowPartnerToCollectIOSPersonalApplicationMetadata
    */
    public function getAllowPartnerToCollectIOSPersonalApplicationMetadata()
    {
        if (array_key_exists("allowPartnerToCollectIOSPersonalApplicationMetadata", $this->_propDict)) {
            return $this->_propDict["allowPartnerToCollectIOSPersonalApplicationMetadata"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowPartnerToCollectIOSPersonalApplicationMetadata
    * When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE.
    *
    * @param bool $val The allowPartnerToCollectIOSPersonalApplicationMetadata
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAllowPartnerToCollectIOSPersonalApplicationMetadata($val)
    {
        $this->_propDict["allowPartnerToCollectIOSPersonalApplicationMetadata"] = boolval($val);
        return $this;
    }

    /**
    * Gets the androidDeviceBlockedOnMissingPartnerData
    * For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
    *
    * @return bool|null The androidDeviceBlockedOnMissingPartnerData
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("androidDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["androidDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidDeviceBlockedOnMissingPartnerData
    * For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
    *
    * @param bool $val The androidDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["androidDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }

    /**
    * Gets the androidEnabled
    * For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
    *
    * @return bool|null The androidEnabled
    */
    public function getAndroidEnabled()
    {
        if (array_key_exists("androidEnabled", $this->_propDict)) {
            return $this->_propDict["androidEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidEnabled
    * For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
    *
    * @param bool $val The androidEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAndroidEnabled($val)
    {
        $this->_propDict["androidEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the androidMobileApplicationManagementEnabled
    * When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
    *
    * @return bool|null The androidMobileApplicationManagementEnabled
    */
    public function getAndroidMobileApplicationManagementEnabled()
    {
        if (array_key_exists("androidMobileApplicationManagementEnabled", $this->_propDict)) {
            return $this->_propDict["androidMobileApplicationManagementEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidMobileApplicationManagementEnabled
    * When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
    *
    * @param bool $val The androidMobileApplicationManagementEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAndroidMobileApplicationManagementEnabled($val)
    {
        $this->_propDict["androidMobileApplicationManagementEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the iosDeviceBlockedOnMissingPartnerData
    * For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
    *
    * @return bool|null The iosDeviceBlockedOnMissingPartnerData
    */
    public function getIosDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("iosDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["iosDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iosDeviceBlockedOnMissingPartnerData
    * For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
    *
    * @param bool $val The iosDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setIosDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["iosDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }

    /**
    * Gets the iosEnabled
    * For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
    *
    * @return bool|null The iosEnabled
    */
    public function getIosEnabled()
    {
        if (array_key_exists("iosEnabled", $this->_propDict)) {
            return $this->_propDict["iosEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iosEnabled
    * For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
    *
    * @param bool $val The iosEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setIosEnabled($val)
    {
        $this->_propDict["iosEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the iosMobileApplicationManagementEnabled
    * When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
    *
    * @return bool|null The iosMobileApplicationManagementEnabled
    */
    public function getIosMobileApplicationManagementEnabled()
    {
        if (array_key_exists("iosMobileApplicationManagementEnabled", $this->_propDict)) {
            return $this->_propDict["iosMobileApplicationManagementEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iosMobileApplicationManagementEnabled
    * When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
    *
    * @param bool $val The iosMobileApplicationManagementEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setIosMobileApplicationManagementEnabled($val)
    {
        $this->_propDict["iosMobileApplicationManagementEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastHeartbeatDateTime
    * DateTime of last Heartbeat recieved from the Mobile Threat Defense partner
    *
    * @return \DateTime|null The lastHeartbeatDateTime
    */
    public function getLastHeartbeatDateTime()
    {
        if (array_key_exists("lastHeartbeatDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastHeartbeatDateTime"], "\DateTime") || is_null($this->_propDict["lastHeartbeatDateTime"])) {
                return $this->_propDict["lastHeartbeatDateTime"];
            } else {
                $this->_propDict["lastHeartbeatDateTime"] = new \DateTime($this->_propDict["lastHeartbeatDateTime"]);
                return $this->_propDict["lastHeartbeatDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastHeartbeatDateTime
    * DateTime of last Heartbeat recieved from the Mobile Threat Defense partner
    *
    * @param \DateTime $val The lastHeartbeatDateTime
    *
    * @return MobileThreatDefenseConnector
    */
    public function setLastHeartbeatDateTime($val)
    {
        $this->_propDict["lastHeartbeatDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the macDeviceBlockedOnMissingPartnerData
    * For Mac, get or set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
    *
    * @return bool|null The macDeviceBlockedOnMissingPartnerData
    */
    public function getMacDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("macDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["macDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the macDeviceBlockedOnMissingPartnerData
    * For Mac, get or set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
    *
    * @param bool $val The macDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setMacDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["macDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }

    /**
    * Gets the macEnabled
    * For Mac, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
    *
    * @return bool|null The macEnabled
    */
    public function getMacEnabled()
    {
        if (array_key_exists("macEnabled", $this->_propDict)) {
            return $this->_propDict["macEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the macEnabled
    * For Mac, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
    *
    * @param bool $val The macEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setMacEnabled($val)
    {
        $this->_propDict["macEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftDefenderForEndpointAttachEnabled
    * When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE.
    *
    * @return bool|null The microsoftDefenderForEndpointAttachEnabled
    */
    public function getMicrosoftDefenderForEndpointAttachEnabled()
    {
        if (array_key_exists("microsoftDefenderForEndpointAttachEnabled", $this->_propDict)) {
            return $this->_propDict["microsoftDefenderForEndpointAttachEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftDefenderForEndpointAttachEnabled
    * When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE.
    *
    * @param bool $val The microsoftDefenderForEndpointAttachEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setMicrosoftDefenderForEndpointAttachEnabled($val)
    {
        $this->_propDict["microsoftDefenderForEndpointAttachEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the partnerState
    * Mobile Threat Defense partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
    *
    * @return MobileThreatPartnerTenantState|null The partnerState
    */
    public function getPartnerState()
    {
        if (array_key_exists("partnerState", $this->_propDict)) {
            if (is_a($this->_propDict["partnerState"], "\Beta\Microsoft\Graph\Model\MobileThreatPartnerTenantState") || is_null($this->_propDict["partnerState"])) {
                return $this->_propDict["partnerState"];
            } else {
                $this->_propDict["partnerState"] = new MobileThreatPartnerTenantState($this->_propDict["partnerState"]);
                return $this->_propDict["partnerState"];
            }
        }
        return null;
    }

    /**
    * Sets the partnerState
    * Mobile Threat Defense partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
    *
    * @param MobileThreatPartnerTenantState $val The partnerState
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerState($val)
    {
        $this->_propDict["partnerState"] = $val;
        return $this;
    }

    /**
    * Gets the partnerUnresponsivenessThresholdInDays
    * Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
    *
    * @return int|null The partnerUnresponsivenessThresholdInDays
    */
    public function getPartnerUnresponsivenessThresholdInDays()
    {
        if (array_key_exists("partnerUnresponsivenessThresholdInDays", $this->_propDict)) {
            return $this->_propDict["partnerUnresponsivenessThresholdInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the partnerUnresponsivenessThresholdInDays
    * Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
    *
    * @param int $val The partnerUnresponsivenessThresholdInDays
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerUnresponsivenessThresholdInDays($val)
    {
        $this->_propDict["partnerUnresponsivenessThresholdInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the partnerUnsupportedOsVersionBlocked
    * Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner
    *
    * @return bool|null The partnerUnsupportedOsVersionBlocked
    */
    public function getPartnerUnsupportedOsVersionBlocked()
    {
        if (array_key_exists("partnerUnsupportedOsVersionBlocked", $this->_propDict)) {
            return $this->_propDict["partnerUnsupportedOsVersionBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the partnerUnsupportedOsVersionBlocked
    * Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner
    *
    * @param bool $val The partnerUnsupportedOsVersionBlocked
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerUnsupportedOsVersionBlocked($val)
    {
        $this->_propDict["partnerUnsupportedOsVersionBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the windowsDeviceBlockedOnMissingPartnerData
    * When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE.
    *
    * @return bool|null The windowsDeviceBlockedOnMissingPartnerData
    */
    public function getWindowsDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("windowsDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["windowsDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsDeviceBlockedOnMissingPartnerData
    * When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE.
    *
    * @param bool $val The windowsDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setWindowsDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["windowsDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }

    /**
    * Gets the windowsEnabled
    * When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during compliance evaluations for Windows. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during compliance evaluations for Windows. Default value is FALSE.
    *
    * @return bool|null The windowsEnabled
    */
    public function getWindowsEnabled()
    {
        if (array_key_exists("windowsEnabled", $this->_propDict)) {
            return $this->_propDict["windowsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsEnabled
    * When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during compliance evaluations for Windows. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during compliance evaluations for Windows. Default value is FALSE.
    *
    * @param bool $val The windowsEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setWindowsEnabled($val)
    {
        $this->_propDict["windowsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the windowsMobileApplicationManagementEnabled
    * When TRUE, app protection policies using the Device Threat Level rule will evaluate devices including data from this connector for Windows. When FALSE, Intune will not use device risk details sent over this connector during app protection policies calculation for policies with a Device Threat Level configured. Existing devices that are not compliant due to risk levels obtained from this connector will also become compliant.
    *
    * @return bool|null The windowsMobileApplicationManagementEnabled
    */
    public function getWindowsMobileApplicationManagementEnabled()
    {
        if (array_key_exists("windowsMobileApplicationManagementEnabled", $this->_propDict)) {
            return $this->_propDict["windowsMobileApplicationManagementEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsMobileApplicationManagementEnabled
    * When TRUE, app protection policies using the Device Threat Level rule will evaluate devices including data from this connector for Windows. When FALSE, Intune will not use device risk details sent over this connector during app protection policies calculation for policies with a Device Threat Level configured. Existing devices that are not compliant due to risk levels obtained from this connector will also become compliant.
    *
    * @param bool $val The windowsMobileApplicationManagementEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setWindowsMobileApplicationManagementEnabled($val)
    {
        $this->_propDict["windowsMobileApplicationManagementEnabled"] = boolval($val);
        return $this;
    }

}
