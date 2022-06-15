<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsManagedAppProtection File
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
* WindowsManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsManagedAppProtection extends ManagedAppPolicy
{
    /**
    * Gets the allowedInboundDataTransferSources
    * Indicates the sources from which data is allowed to be transferred. Some possible values are allApps or none. Possible values are: allApps, none.
    *
    * @return WindowsManagedAppDataTransferLevel|null The allowedInboundDataTransferSources
    */
    public function getAllowedInboundDataTransferSources()
    {
        if (array_key_exists("allowedInboundDataTransferSources", $this->_propDict)) {
            if (is_a($this->_propDict["allowedInboundDataTransferSources"], "\Beta\Microsoft\Graph\Model\WindowsManagedAppDataTransferLevel") || is_null($this->_propDict["allowedInboundDataTransferSources"])) {
                return $this->_propDict["allowedInboundDataTransferSources"];
            } else {
                $this->_propDict["allowedInboundDataTransferSources"] = new WindowsManagedAppDataTransferLevel($this->_propDict["allowedInboundDataTransferSources"]);
                return $this->_propDict["allowedInboundDataTransferSources"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedInboundDataTransferSources
    * Indicates the sources from which data is allowed to be transferred. Some possible values are allApps or none. Possible values are: allApps, none.
    *
    * @param WindowsManagedAppDataTransferLevel $val The allowedInboundDataTransferSources
    *
    * @return WindowsManagedAppProtection
    */
    public function setAllowedInboundDataTransferSources($val)
    {
        $this->_propDict["allowedInboundDataTransferSources"] = $val;
        return $this;
    }

    /**
    * Gets the allowedOutboundClipboardSharingLevel
    * Indicates the level to which the clipboard may be shared across org &amp; non-org resources. Some possible values are anyDestinationAnySource or none. Possible values are: anyDestinationAnySource, none.
    *
    * @return WindowsManagedAppClipboardSharingLevel|null The allowedOutboundClipboardSharingLevel
    */
    public function getAllowedOutboundClipboardSharingLevel()
    {
        if (array_key_exists("allowedOutboundClipboardSharingLevel", $this->_propDict)) {
            if (is_a($this->_propDict["allowedOutboundClipboardSharingLevel"], "\Beta\Microsoft\Graph\Model\WindowsManagedAppClipboardSharingLevel") || is_null($this->_propDict["allowedOutboundClipboardSharingLevel"])) {
                return $this->_propDict["allowedOutboundClipboardSharingLevel"];
            } else {
                $this->_propDict["allowedOutboundClipboardSharingLevel"] = new WindowsManagedAppClipboardSharingLevel($this->_propDict["allowedOutboundClipboardSharingLevel"]);
                return $this->_propDict["allowedOutboundClipboardSharingLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedOutboundClipboardSharingLevel
    * Indicates the level to which the clipboard may be shared across org &amp; non-org resources. Some possible values are anyDestinationAnySource or none. Possible values are: anyDestinationAnySource, none.
    *
    * @param WindowsManagedAppClipboardSharingLevel $val The allowedOutboundClipboardSharingLevel
    *
    * @return WindowsManagedAppProtection
    */
    public function setAllowedOutboundClipboardSharingLevel($val)
    {
        $this->_propDict["allowedOutboundClipboardSharingLevel"] = $val;
        return $this;
    }

    /**
    * Gets the allowedOutboundDataTransferDestinations
    * Indicates the destinations to which data is allowed to be transferred. Some possible values are allApps or none. Possible values are: allApps, none.
    *
    * @return WindowsManagedAppDataTransferLevel|null The allowedOutboundDataTransferDestinations
    */
    public function getAllowedOutboundDataTransferDestinations()
    {
        if (array_key_exists("allowedOutboundDataTransferDestinations", $this->_propDict)) {
            if (is_a($this->_propDict["allowedOutboundDataTransferDestinations"], "\Beta\Microsoft\Graph\Model\WindowsManagedAppDataTransferLevel") || is_null($this->_propDict["allowedOutboundDataTransferDestinations"])) {
                return $this->_propDict["allowedOutboundDataTransferDestinations"];
            } else {
                $this->_propDict["allowedOutboundDataTransferDestinations"] = new WindowsManagedAppDataTransferLevel($this->_propDict["allowedOutboundDataTransferDestinations"]);
                return $this->_propDict["allowedOutboundDataTransferDestinations"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedOutboundDataTransferDestinations
    * Indicates the destinations to which data is allowed to be transferred. Some possible values are allApps or none. Possible values are: allApps, none.
    *
    * @param WindowsManagedAppDataTransferLevel $val The allowedOutboundDataTransferDestinations
    *
    * @return WindowsManagedAppProtection
    */
    public function setAllowedOutboundDataTransferDestinations($val)
    {
        $this->_propDict["allowedOutboundDataTransferDestinations"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfUnableToAuthenticateUser
    * If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Some possible values are block or wipe. If this property is not set, no action will be taken. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfUnableToAuthenticateUser
    */
    public function getAppActionIfUnableToAuthenticateUser()
    {
        if (array_key_exists("appActionIfUnableToAuthenticateUser", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfUnableToAuthenticateUser"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfUnableToAuthenticateUser"])) {
                return $this->_propDict["appActionIfUnableToAuthenticateUser"];
            } else {
                $this->_propDict["appActionIfUnableToAuthenticateUser"] = new ManagedAppRemediationAction($this->_propDict["appActionIfUnableToAuthenticateUser"]);
                return $this->_propDict["appActionIfUnableToAuthenticateUser"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfUnableToAuthenticateUser
    * If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Some possible values are block or wipe. If this property is not set, no action will be taken. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfUnableToAuthenticateUser
    *
    * @return WindowsManagedAppProtection
    */
    public function setAppActionIfUnableToAuthenticateUser($val)
    {
        $this->_propDict["appActionIfUnableToAuthenticateUser"] = $val;
        return $this;
    }

    /**
    * Gets the deployedAppCount
    * Indicates the total number of applications for which the current policy is deployed.
    *
    * @return int|null The deployedAppCount
    */
    public function getDeployedAppCount()
    {
        if (array_key_exists("deployedAppCount", $this->_propDict)) {
            return $this->_propDict["deployedAppCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deployedAppCount
    * Indicates the total number of applications for which the current policy is deployed.
    *
    * @param int $val The deployedAppCount
    *
    * @return WindowsManagedAppProtection
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the isAssigned
    * When TRUE, indicates that the policy is deployed to some inclusion groups. When FALSE, indicates that the policy is not deployed to any inclusion groups. Default value is FALSE.
    *
    * @return bool|null The isAssigned
    */
    public function getIsAssigned()
    {
        if (array_key_exists("isAssigned", $this->_propDict)) {
            return $this->_propDict["isAssigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAssigned
    * When TRUE, indicates that the policy is deployed to some inclusion groups. When FALSE, indicates that the policy is not deployed to any inclusion groups. Default value is FALSE.
    *
    * @param bool $val The isAssigned
    *
    * @return WindowsManagedAppProtection
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }

    /**
    * Gets the maximumAllowedDeviceThreatLevel
    * Maximum allowed device threat level, as reported by the Mobile Threat Defense app. Possible values are: notConfigured, secured, low, medium, high.
    *
    * @return ManagedAppDeviceThreatLevel|null The maximumAllowedDeviceThreatLevel
    */
    public function getMaximumAllowedDeviceThreatLevel()
    {
        if (array_key_exists("maximumAllowedDeviceThreatLevel", $this->_propDict)) {
            if (is_a($this->_propDict["maximumAllowedDeviceThreatLevel"], "\Beta\Microsoft\Graph\Model\ManagedAppDeviceThreatLevel") || is_null($this->_propDict["maximumAllowedDeviceThreatLevel"])) {
                return $this->_propDict["maximumAllowedDeviceThreatLevel"];
            } else {
                $this->_propDict["maximumAllowedDeviceThreatLevel"] = new ManagedAppDeviceThreatLevel($this->_propDict["maximumAllowedDeviceThreatLevel"]);
                return $this->_propDict["maximumAllowedDeviceThreatLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the maximumAllowedDeviceThreatLevel
    * Maximum allowed device threat level, as reported by the Mobile Threat Defense app. Possible values are: notConfigured, secured, low, medium, high.
    *
    * @param ManagedAppDeviceThreatLevel $val The maximumAllowedDeviceThreatLevel
    *
    * @return WindowsManagedAppProtection
    */
    public function setMaximumAllowedDeviceThreatLevel($val)
    {
        $this->_propDict["maximumAllowedDeviceThreatLevel"] = $val;
        return $this;
    }

    /**
    * Gets the maximumRequiredOsVersion
    * Versions bigger than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The maximumRequiredOsVersion
    */
    public function getMaximumRequiredOsVersion()
    {
        if (array_key_exists("maximumRequiredOsVersion", $this->_propDict)) {
            return $this->_propDict["maximumRequiredOsVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumRequiredOsVersion
    * Versions bigger than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The maximumRequiredOsVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMaximumRequiredOsVersion($val)
    {
        $this->_propDict["maximumRequiredOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the maximumWarningOsVersion
    * Versions bigger than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The maximumWarningOsVersion
    */
    public function getMaximumWarningOsVersion()
    {
        if (array_key_exists("maximumWarningOsVersion", $this->_propDict)) {
            return $this->_propDict["maximumWarningOsVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumWarningOsVersion
    * Versions bigger than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The maximumWarningOsVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMaximumWarningOsVersion($val)
    {
        $this->_propDict["maximumWarningOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the maximumWipeOsVersion
    * Versions bigger than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The maximumWipeOsVersion
    */
    public function getMaximumWipeOsVersion()
    {
        if (array_key_exists("maximumWipeOsVersion", $this->_propDict)) {
            return $this->_propDict["maximumWipeOsVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumWipeOsVersion
    * Versions bigger than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The maximumWipeOsVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMaximumWipeOsVersion($val)
    {
        $this->_propDict["maximumWipeOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumRequiredAppVersion
    * Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The minimumRequiredAppVersion
    */
    public function getMinimumRequiredAppVersion()
    {
        if (array_key_exists("minimumRequiredAppVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredAppVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumRequiredAppVersion
    * Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The minimumRequiredAppVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMinimumRequiredAppVersion($val)
    {
        $this->_propDict["minimumRequiredAppVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumRequiredOsVersion
    * Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The minimumRequiredOsVersion
    */
    public function getMinimumRequiredOsVersion()
    {
        if (array_key_exists("minimumRequiredOsVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredOsVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumRequiredOsVersion
    * Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The minimumRequiredOsVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMinimumRequiredOsVersion($val)
    {
        $this->_propDict["minimumRequiredOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumRequiredSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The minimumRequiredSdkVersion
    */
    public function getMinimumRequiredSdkVersion()
    {
        if (array_key_exists("minimumRequiredSdkVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredSdkVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumRequiredSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The minimumRequiredSdkVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMinimumRequiredSdkVersion($val)
    {
        $this->_propDict["minimumRequiredSdkVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWarningAppVersion
    * Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The minimumWarningAppVersion
    */
    public function getMinimumWarningAppVersion()
    {
        if (array_key_exists("minimumWarningAppVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningAppVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWarningAppVersion
    * Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The minimumWarningAppVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMinimumWarningAppVersion($val)
    {
        $this->_propDict["minimumWarningAppVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWarningOsVersion
    * Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The minimumWarningOsVersion
    */
    public function getMinimumWarningOsVersion()
    {
        if (array_key_exists("minimumWarningOsVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningOsVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWarningOsVersion
    * Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The minimumWarningOsVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMinimumWarningOsVersion($val)
    {
        $this->_propDict["minimumWarningOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWipeAppVersion
    * Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The minimumWipeAppVersion
    */
    public function getMinimumWipeAppVersion()
    {
        if (array_key_exists("minimumWipeAppVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeAppVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWipeAppVersion
    * Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The minimumWipeAppVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMinimumWipeAppVersion($val)
    {
        $this->_propDict["minimumWipeAppVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWipeOsVersion
    * Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The minimumWipeOsVersion
    */
    public function getMinimumWipeOsVersion()
    {
        if (array_key_exists("minimumWipeOsVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeOsVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWipeOsVersion
    * Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The minimumWipeOsVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMinimumWipeOsVersion($val)
    {
        $this->_propDict["minimumWipeOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWipeSdkVersion
    * Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    *
    * @return string|null The minimumWipeSdkVersion
    */
    public function getMinimumWipeSdkVersion()
    {
        if (array_key_exists("minimumWipeSdkVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeSdkVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWipeSdkVersion
    * Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    *
    * @param string $val The minimumWipeSdkVersion
    *
    * @return WindowsManagedAppProtection
    */
    public function setMinimumWipeSdkVersion($val)
    {
        $this->_propDict["minimumWipeSdkVersion"] = $val;
        return $this;
    }

    /**
    * Gets the mobileThreatDefenseRemediationAction
    * Determines what action to take if the mobile threat defense threat threshold isn't met. Some possible values are block or wipe. Warn isn't a supported value for this property. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The mobileThreatDefenseRemediationAction
    */
    public function getMobileThreatDefenseRemediationAction()
    {
        if (array_key_exists("mobileThreatDefenseRemediationAction", $this->_propDict)) {
            if (is_a($this->_propDict["mobileThreatDefenseRemediationAction"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["mobileThreatDefenseRemediationAction"])) {
                return $this->_propDict["mobileThreatDefenseRemediationAction"];
            } else {
                $this->_propDict["mobileThreatDefenseRemediationAction"] = new ManagedAppRemediationAction($this->_propDict["mobileThreatDefenseRemediationAction"]);
                return $this->_propDict["mobileThreatDefenseRemediationAction"];
            }
        }
        return null;
    }

    /**
    * Sets the mobileThreatDefenseRemediationAction
    * Determines what action to take if the mobile threat defense threat threshold isn't met. Some possible values are block or wipe. Warn isn't a supported value for this property. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The mobileThreatDefenseRemediationAction
    *
    * @return WindowsManagedAppProtection
    */
    public function setMobileThreatDefenseRemediationAction($val)
    {
        $this->_propDict["mobileThreatDefenseRemediationAction"] = $val;
        return $this;
    }

    /**
    * Gets the periodOfflineBeforeAccessCheck
    * The period after which access is checked when the device is not connected to the internet. For example, PT5M indicates that the interval is 5 minutes in duration. A timespan value of PT0S indicates that access will be blocked immediately when the device is not connected to the internet.
    *
    * @return \DateInterval|null The periodOfflineBeforeAccessCheck
    */
    public function getPeriodOfflineBeforeAccessCheck()
    {
        if (array_key_exists("periodOfflineBeforeAccessCheck", $this->_propDict)) {
            if (is_a($this->_propDict["periodOfflineBeforeAccessCheck"], "\DateInterval") || is_null($this->_propDict["periodOfflineBeforeAccessCheck"])) {
                return $this->_propDict["periodOfflineBeforeAccessCheck"];
            } else {
                $this->_propDict["periodOfflineBeforeAccessCheck"] = new \DateInterval($this->_propDict["periodOfflineBeforeAccessCheck"]);
                return $this->_propDict["periodOfflineBeforeAccessCheck"];
            }
        }
        return null;
    }

    /**
    * Sets the periodOfflineBeforeAccessCheck
    * The period after which access is checked when the device is not connected to the internet. For example, PT5M indicates that the interval is 5 minutes in duration. A timespan value of PT0S indicates that access will be blocked immediately when the device is not connected to the internet.
    *
    * @param \DateInterval $val The periodOfflineBeforeAccessCheck
    *
    * @return WindowsManagedAppProtection
    */
    public function setPeriodOfflineBeforeAccessCheck($val)
    {
        $this->_propDict["periodOfflineBeforeAccessCheck"] = $val;
        return $this;
    }

    /**
    * Gets the periodOfflineBeforeWipeIsEnforced
    * The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. For example, P5D indicates that the interval is 5 days in duration. A timespan value of PT0S indicates that managed data will never be wiped when the device is not connected to the internet.
    *
    * @return \DateInterval|null The periodOfflineBeforeWipeIsEnforced
    */
    public function getPeriodOfflineBeforeWipeIsEnforced()
    {
        if (array_key_exists("periodOfflineBeforeWipeIsEnforced", $this->_propDict)) {
            if (is_a($this->_propDict["periodOfflineBeforeWipeIsEnforced"], "\DateInterval") || is_null($this->_propDict["periodOfflineBeforeWipeIsEnforced"])) {
                return $this->_propDict["periodOfflineBeforeWipeIsEnforced"];
            } else {
                $this->_propDict["periodOfflineBeforeWipeIsEnforced"] = new \DateInterval($this->_propDict["periodOfflineBeforeWipeIsEnforced"]);
                return $this->_propDict["periodOfflineBeforeWipeIsEnforced"];
            }
        }
        return null;
    }

    /**
    * Sets the periodOfflineBeforeWipeIsEnforced
    * The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. For example, P5D indicates that the interval is 5 days in duration. A timespan value of PT0S indicates that managed data will never be wiped when the device is not connected to the internet.
    *
    * @param \DateInterval $val The periodOfflineBeforeWipeIsEnforced
    *
    * @return WindowsManagedAppProtection
    */
    public function setPeriodOfflineBeforeWipeIsEnforced($val)
    {
        $this->_propDict["periodOfflineBeforeWipeIsEnforced"] = $val;
        return $this;
    }

    /**
    * Gets the printBlocked
    * When TRUE, indicates that printing is blocked from managed apps. When FALSE, indicates that printing is allowed from managed apps. Default value is FALSE.
    *
    * @return bool|null The printBlocked
    */
    public function getPrintBlocked()
    {
        if (array_key_exists("printBlocked", $this->_propDict)) {
            return $this->_propDict["printBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printBlocked
    * When TRUE, indicates that printing is blocked from managed apps. When FALSE, indicates that printing is allowed from managed apps. Default value is FALSE.
    *
    * @param bool $val The printBlocked
    *
    * @return WindowsManagedAppProtection
    */
    public function setPrintBlocked($val)
    {
        $this->_propDict["printBlocked"] = boolval($val);
        return $this;
    }


     /**
     * Gets the apps
    * List of apps to which the policy is deployed.
     *
     * @return array|null The apps
     */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
           return $this->_propDict["apps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the apps
    * List of apps to which the policy is deployed.
    *
    * @param ManagedMobileApp[] $val The apps
    *
    * @return WindowsManagedAppProtection
    */
    public function setApps($val)
    {
        $this->_propDict["apps"] = $val;
        return $this;
    }


     /**
     * Gets the assignments
    * Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     *
     * @return array|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignments
    * Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
    *
    * @param TargetedManagedAppPolicyAssignment[] $val The assignments
    *
    * @return WindowsManagedAppProtection
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }

}
