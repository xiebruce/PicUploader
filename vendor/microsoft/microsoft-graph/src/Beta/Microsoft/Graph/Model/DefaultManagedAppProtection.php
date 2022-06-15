<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefaultManagedAppProtection File
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
* DefaultManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefaultManagedAppProtection extends ManagedAppProtection
{
    /**
    * Gets the allowedAndroidDeviceManufacturers
    * Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work. (Android only)
    *
    * @return string|null The allowedAndroidDeviceManufacturers
    */
    public function getAllowedAndroidDeviceManufacturers()
    {
        if (array_key_exists("allowedAndroidDeviceManufacturers", $this->_propDict)) {
            return $this->_propDict["allowedAndroidDeviceManufacturers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedAndroidDeviceManufacturers
    * Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work. (Android only)
    *
    * @param string $val The allowedAndroidDeviceManufacturers
    *
    * @return DefaultManagedAppProtection
    */
    public function setAllowedAndroidDeviceManufacturers($val)
    {
        $this->_propDict["allowedAndroidDeviceManufacturers"] = $val;
        return $this;
    }

    /**
    * Gets the allowedAndroidDeviceModels
    * List of device models allowed, as a string, for the managed app to work. (Android Only)
    *
    * @return string|null The allowedAndroidDeviceModels
    */
    public function getAllowedAndroidDeviceModels()
    {
        if (array_key_exists("allowedAndroidDeviceModels", $this->_propDict)) {
            return $this->_propDict["allowedAndroidDeviceModels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedAndroidDeviceModels
    * List of device models allowed, as a string, for the managed app to work. (Android Only)
    *
    * @param string $val The allowedAndroidDeviceModels
    *
    * @return DefaultManagedAppProtection
    */
    public function setAllowedAndroidDeviceModels($val)
    {
        $this->_propDict["allowedAndroidDeviceModels"] = $val;
        return $this;
    }

    /**
    * Gets the allowedIosDeviceModels
    * Semicolon seperated list of device models allowed, as a string, for the managed app to work. (iOS Only)
    *
    * @return string|null The allowedIosDeviceModels
    */
    public function getAllowedIosDeviceModels()
    {
        if (array_key_exists("allowedIosDeviceModels", $this->_propDict)) {
            return $this->_propDict["allowedIosDeviceModels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedIosDeviceModels
    * Semicolon seperated list of device models allowed, as a string, for the managed app to work. (iOS Only)
    *
    * @param string $val The allowedIosDeviceModels
    *
    * @return DefaultManagedAppProtection
    */
    public function setAllowedIosDeviceModels($val)
    {
        $this->_propDict["allowedIosDeviceModels"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfAndroidDeviceManufacturerNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. (Android only). Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfAndroidDeviceManufacturerNotAllowed
    */
    public function getAppActionIfAndroidDeviceManufacturerNotAllowed()
    {
        if (array_key_exists("appActionIfAndroidDeviceManufacturerNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"])) {
                return $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"];
            } else {
                $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"]);
                return $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfAndroidDeviceManufacturerNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. (Android only). Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidDeviceManufacturerNotAllowed
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfAndroidDeviceManufacturerNotAllowed($val)
    {
        $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfAndroidDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. (Android Only). Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfAndroidDeviceModelNotAllowed
    */
    public function getAppActionIfAndroidDeviceModelNotAllowed()
    {
        if (array_key_exists("appActionIfAndroidDeviceModelNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidDeviceModelNotAllowed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfAndroidDeviceModelNotAllowed"])) {
                return $this->_propDict["appActionIfAndroidDeviceModelNotAllowed"];
            } else {
                $this->_propDict["appActionIfAndroidDeviceModelNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidDeviceModelNotAllowed"]);
                return $this->_propDict["appActionIfAndroidDeviceModelNotAllowed"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfAndroidDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. (Android Only). Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidDeviceModelNotAllowed
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfAndroidDeviceModelNotAllowed($val)
    {
        $this->_propDict["appActionIfAndroidDeviceModelNotAllowed"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfAndroidSafetyNetAppsVerificationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android App Verification requirement fails. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfAndroidSafetyNetAppsVerificationFailed
    */
    public function getAppActionIfAndroidSafetyNetAppsVerificationFailed()
    {
        if (array_key_exists("appActionIfAndroidSafetyNetAppsVerificationFailed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"])) {
                return $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"];
            } else {
                $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"]);
                return $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfAndroidSafetyNetAppsVerificationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android App Verification requirement fails. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidSafetyNetAppsVerificationFailed
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfAndroidSafetyNetAppsVerificationFailed($val)
    {
        $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfAndroidSafetyNetDeviceAttestationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirement fails. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfAndroidSafetyNetDeviceAttestationFailed
    */
    public function getAppActionIfAndroidSafetyNetDeviceAttestationFailed()
    {
        if (array_key_exists("appActionIfAndroidSafetyNetDeviceAttestationFailed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"])) {
                return $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"];
            } else {
                $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"]);
                return $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfAndroidSafetyNetDeviceAttestationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirement fails. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidSafetyNetDeviceAttestationFailed
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfAndroidSafetyNetDeviceAttestationFailed($val)
    {
        $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfDeviceLockNotSet
    * Defines a managed app behavior, either warn, block or wipe, if the screen lock is required on device but is not set. (android only). Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfDeviceLockNotSet
    */
    public function getAppActionIfDeviceLockNotSet()
    {
        if (array_key_exists("appActionIfDeviceLockNotSet", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfDeviceLockNotSet"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfDeviceLockNotSet"])) {
                return $this->_propDict["appActionIfDeviceLockNotSet"];
            } else {
                $this->_propDict["appActionIfDeviceLockNotSet"] = new ManagedAppRemediationAction($this->_propDict["appActionIfDeviceLockNotSet"]);
                return $this->_propDict["appActionIfDeviceLockNotSet"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfDeviceLockNotSet
    * Defines a managed app behavior, either warn, block or wipe, if the screen lock is required on device but is not set. (android only). Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfDeviceLockNotSet
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfDeviceLockNotSet($val)
    {
        $this->_propDict["appActionIfDeviceLockNotSet"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfDevicePasscodeComplexityLessThanHigh
    * If the device does not have a passcode of high complexity or higher, trigger the stored action. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfDevicePasscodeComplexityLessThanHigh
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanHigh()
    {
        if (array_key_exists("appActionIfDevicePasscodeComplexityLessThanHigh", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfDevicePasscodeComplexityLessThanHigh"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfDevicePasscodeComplexityLessThanHigh"])) {
                return $this->_propDict["appActionIfDevicePasscodeComplexityLessThanHigh"];
            } else {
                $this->_propDict["appActionIfDevicePasscodeComplexityLessThanHigh"] = new ManagedAppRemediationAction($this->_propDict["appActionIfDevicePasscodeComplexityLessThanHigh"]);
                return $this->_propDict["appActionIfDevicePasscodeComplexityLessThanHigh"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfDevicePasscodeComplexityLessThanHigh
    * If the device does not have a passcode of high complexity or higher, trigger the stored action. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfDevicePasscodeComplexityLessThanHigh
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanHigh($val)
    {
        $this->_propDict["appActionIfDevicePasscodeComplexityLessThanHigh"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfDevicePasscodeComplexityLessThanLow
    * If the device does not have a passcode of low complexity or higher, trigger the stored action. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfDevicePasscodeComplexityLessThanLow
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanLow()
    {
        if (array_key_exists("appActionIfDevicePasscodeComplexityLessThanLow", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfDevicePasscodeComplexityLessThanLow"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfDevicePasscodeComplexityLessThanLow"])) {
                return $this->_propDict["appActionIfDevicePasscodeComplexityLessThanLow"];
            } else {
                $this->_propDict["appActionIfDevicePasscodeComplexityLessThanLow"] = new ManagedAppRemediationAction($this->_propDict["appActionIfDevicePasscodeComplexityLessThanLow"]);
                return $this->_propDict["appActionIfDevicePasscodeComplexityLessThanLow"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfDevicePasscodeComplexityLessThanLow
    * If the device does not have a passcode of low complexity or higher, trigger the stored action. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfDevicePasscodeComplexityLessThanLow
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanLow($val)
    {
        $this->_propDict["appActionIfDevicePasscodeComplexityLessThanLow"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfDevicePasscodeComplexityLessThanMedium
    * If the device does not have a passcode of medium complexity or higher, trigger the stored action. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfDevicePasscodeComplexityLessThanMedium
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanMedium()
    {
        if (array_key_exists("appActionIfDevicePasscodeComplexityLessThanMedium", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfDevicePasscodeComplexityLessThanMedium"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfDevicePasscodeComplexityLessThanMedium"])) {
                return $this->_propDict["appActionIfDevicePasscodeComplexityLessThanMedium"];
            } else {
                $this->_propDict["appActionIfDevicePasscodeComplexityLessThanMedium"] = new ManagedAppRemediationAction($this->_propDict["appActionIfDevicePasscodeComplexityLessThanMedium"]);
                return $this->_propDict["appActionIfDevicePasscodeComplexityLessThanMedium"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfDevicePasscodeComplexityLessThanMedium
    * If the device does not have a passcode of medium complexity or higher, trigger the stored action. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfDevicePasscodeComplexityLessThanMedium
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanMedium($val)
    {
        $this->_propDict["appActionIfDevicePasscodeComplexityLessThanMedium"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfIosDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. (iOS Only). Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfIosDeviceModelNotAllowed
    */
    public function getAppActionIfIosDeviceModelNotAllowed()
    {
        if (array_key_exists("appActionIfIosDeviceModelNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfIosDeviceModelNotAllowed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfIosDeviceModelNotAllowed"])) {
                return $this->_propDict["appActionIfIosDeviceModelNotAllowed"];
            } else {
                $this->_propDict["appActionIfIosDeviceModelNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfIosDeviceModelNotAllowed"]);
                return $this->_propDict["appActionIfIosDeviceModelNotAllowed"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfIosDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. (iOS Only). Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfIosDeviceModelNotAllowed
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfIosDeviceModelNotAllowed($val)
    {
        $this->_propDict["appActionIfIosDeviceModelNotAllowed"] = $val;
        return $this;
    }

    /**
    * Gets the appDataEncryptionType
    * Type of encryption which should be used for data in a managed app. (iOS Only). Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
    *
    * @return ManagedAppDataEncryptionType|null The appDataEncryptionType
    */
    public function getAppDataEncryptionType()
    {
        if (array_key_exists("appDataEncryptionType", $this->_propDict)) {
            if (is_a($this->_propDict["appDataEncryptionType"], "\Beta\Microsoft\Graph\Model\ManagedAppDataEncryptionType") || is_null($this->_propDict["appDataEncryptionType"])) {
                return $this->_propDict["appDataEncryptionType"];
            } else {
                $this->_propDict["appDataEncryptionType"] = new ManagedAppDataEncryptionType($this->_propDict["appDataEncryptionType"]);
                return $this->_propDict["appDataEncryptionType"];
            }
        }
        return null;
    }

    /**
    * Sets the appDataEncryptionType
    * Type of encryption which should be used for data in a managed app. (iOS Only). Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
    *
    * @param ManagedAppDataEncryptionType $val The appDataEncryptionType
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppDataEncryptionType($val)
    {
        $this->_propDict["appDataEncryptionType"] = $val;
        return $this;
    }

    /**
    * Gets the biometricAuthenticationBlocked
    * Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True. (Android Only)
    *
    * @return bool|null The biometricAuthenticationBlocked
    */
    public function getBiometricAuthenticationBlocked()
    {
        if (array_key_exists("biometricAuthenticationBlocked", $this->_propDict)) {
            return $this->_propDict["biometricAuthenticationBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the biometricAuthenticationBlocked
    * Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True. (Android Only)
    *
    * @param bool $val The biometricAuthenticationBlocked
    *
    * @return DefaultManagedAppProtection
    */
    public function setBiometricAuthenticationBlocked($val)
    {
        $this->_propDict["biometricAuthenticationBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the blockAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
    *
    * @return int|null The blockAfterCompanyPortalUpdateDeferralInDays
    */
    public function getBlockAfterCompanyPortalUpdateDeferralInDays()
    {
        if (array_key_exists("blockAfterCompanyPortalUpdateDeferralInDays", $this->_propDict)) {
            return $this->_propDict["blockAfterCompanyPortalUpdateDeferralInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
    *
    * @param int $val The blockAfterCompanyPortalUpdateDeferralInDays
    *
    * @return DefaultManagedAppProtection
    */
    public function setBlockAfterCompanyPortalUpdateDeferralInDays($val)
    {
        $this->_propDict["blockAfterCompanyPortalUpdateDeferralInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the connectToVpnOnLaunch
    * Whether the app should connect to the configured VPN on launch (Android only).
    *
    * @return bool|null The connectToVpnOnLaunch
    */
    public function getConnectToVpnOnLaunch()
    {
        if (array_key_exists("connectToVpnOnLaunch", $this->_propDict)) {
            return $this->_propDict["connectToVpnOnLaunch"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectToVpnOnLaunch
    * Whether the app should connect to the configured VPN on launch (Android only).
    *
    * @param bool $val The connectToVpnOnLaunch
    *
    * @return DefaultManagedAppProtection
    */
    public function setConnectToVpnOnLaunch($val)
    {
        $this->_propDict["connectToVpnOnLaunch"] = boolval($val);
        return $this;
    }

    /**
    * Gets the customBrowserDisplayName
    * Friendly name of the preferred custom browser to open weblink on Android. (Android only)
    *
    * @return string|null The customBrowserDisplayName
    */
    public function getCustomBrowserDisplayName()
    {
        if (array_key_exists("customBrowserDisplayName", $this->_propDict)) {
            return $this->_propDict["customBrowserDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customBrowserDisplayName
    * Friendly name of the preferred custom browser to open weblink on Android. (Android only)
    *
    * @param string $val The customBrowserDisplayName
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomBrowserDisplayName($val)
    {
        $this->_propDict["customBrowserDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the customBrowserPackageId
    * Unique identifier of a custom browser to open weblink on Android. (Android only)
    *
    * @return string|null The customBrowserPackageId
    */
    public function getCustomBrowserPackageId()
    {
        if (array_key_exists("customBrowserPackageId", $this->_propDict)) {
            return $this->_propDict["customBrowserPackageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customBrowserPackageId
    * Unique identifier of a custom browser to open weblink on Android. (Android only)
    *
    * @param string $val The customBrowserPackageId
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomBrowserPackageId($val)
    {
        $this->_propDict["customBrowserPackageId"] = $val;
        return $this;
    }

    /**
    * Gets the customBrowserProtocol
    * A custom browser protocol to open weblink on iOS. (iOS only)
    *
    * @return string|null The customBrowserProtocol
    */
    public function getCustomBrowserProtocol()
    {
        if (array_key_exists("customBrowserProtocol", $this->_propDict)) {
            return $this->_propDict["customBrowserProtocol"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customBrowserProtocol
    * A custom browser protocol to open weblink on iOS. (iOS only)
    *
    * @param string $val The customBrowserProtocol
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomBrowserProtocol($val)
    {
        $this->_propDict["customBrowserProtocol"] = $val;
        return $this;
    }

    /**
    * Gets the customDialerAppDisplayName
    * Friendly name of a custom dialer app to click-to-open a phone number on Android.
    *
    * @return string|null The customDialerAppDisplayName
    */
    public function getCustomDialerAppDisplayName()
    {
        if (array_key_exists("customDialerAppDisplayName", $this->_propDict)) {
            return $this->_propDict["customDialerAppDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customDialerAppDisplayName
    * Friendly name of a custom dialer app to click-to-open a phone number on Android.
    *
    * @param string $val The customDialerAppDisplayName
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomDialerAppDisplayName($val)
    {
        $this->_propDict["customDialerAppDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the customDialerAppPackageId
    * PackageId of a custom dialer app to click-to-open a phone number on Android.
    *
    * @return string|null The customDialerAppPackageId
    */
    public function getCustomDialerAppPackageId()
    {
        if (array_key_exists("customDialerAppPackageId", $this->_propDict)) {
            return $this->_propDict["customDialerAppPackageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customDialerAppPackageId
    * PackageId of a custom dialer app to click-to-open a phone number on Android.
    *
    * @param string $val The customDialerAppPackageId
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomDialerAppPackageId($val)
    {
        $this->_propDict["customDialerAppPackageId"] = $val;
        return $this;
    }

    /**
    * Gets the customDialerAppProtocol
    * Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
    *
    * @return string|null The customDialerAppProtocol
    */
    public function getCustomDialerAppProtocol()
    {
        if (array_key_exists("customDialerAppProtocol", $this->_propDict)) {
            return $this->_propDict["customDialerAppProtocol"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customDialerAppProtocol
    * Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
    *
    * @param string $val The customDialerAppProtocol
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomDialerAppProtocol($val)
    {
        $this->_propDict["customDialerAppProtocol"] = $val;
        return $this;
    }


     /**
     * Gets the customSettings
    * A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     *
     * @return array|null The customSettings
     */
    public function getCustomSettings()
    {
        if (array_key_exists("customSettings", $this->_propDict)) {
           return $this->_propDict["customSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customSettings
    * A set of string key and string value pairs to be sent to the affected users, unalterned by this service
    *
    * @param KeyValuePair[] $val The customSettings
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomSettings($val)
    {
        $this->_propDict["customSettings"] = $val;
        return $this;
    }

    /**
    * Gets the deployedAppCount
    * Count of apps to which the current policy is deployed.
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
    * Count of apps to which the current policy is deployed.
    *
    * @param int $val The deployedAppCount
    *
    * @return DefaultManagedAppProtection
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the deviceLockRequired
    * Defines if any kind of lock must be required on device. (android only)
    *
    * @return bool|null The deviceLockRequired
    */
    public function getDeviceLockRequired()
    {
        if (array_key_exists("deviceLockRequired", $this->_propDict)) {
            return $this->_propDict["deviceLockRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceLockRequired
    * Defines if any kind of lock must be required on device. (android only)
    *
    * @param bool $val The deviceLockRequired
    *
    * @return DefaultManagedAppProtection
    */
    public function setDeviceLockRequired($val)
    {
        $this->_propDict["deviceLockRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    * When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
    *
    * @return bool|null The disableAppEncryptionIfDeviceEncryptionIsEnabled
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled()
    {
        if (array_key_exists("disableAppEncryptionIfDeviceEncryptionIsEnabled", $this->_propDict)) {
            return $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    * When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
    *
    * @param bool $val The disableAppEncryptionIfDeviceEncryptionIsEnabled
    *
    * @return DefaultManagedAppProtection
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled($val)
    {
        $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the disableProtectionOfManagedOutboundOpenInData
    * Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps. (iOS Only)
    *
    * @return bool|null The disableProtectionOfManagedOutboundOpenInData
    */
    public function getDisableProtectionOfManagedOutboundOpenInData()
    {
        if (array_key_exists("disableProtectionOfManagedOutboundOpenInData", $this->_propDict)) {
            return $this->_propDict["disableProtectionOfManagedOutboundOpenInData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disableProtectionOfManagedOutboundOpenInData
    * Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps. (iOS Only)
    *
    * @param bool $val The disableProtectionOfManagedOutboundOpenInData
    *
    * @return DefaultManagedAppProtection
    */
    public function setDisableProtectionOfManagedOutboundOpenInData($val)
    {
        $this->_propDict["disableProtectionOfManagedOutboundOpenInData"] = boolval($val);
        return $this;
    }

    /**
    * Gets the encryptAppData
    * Indicates whether managed-app data should be encrypted. (Android only)
    *
    * @return bool|null The encryptAppData
    */
    public function getEncryptAppData()
    {
        if (array_key_exists("encryptAppData", $this->_propDict)) {
            return $this->_propDict["encryptAppData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the encryptAppData
    * Indicates whether managed-app data should be encrypted. (Android only)
    *
    * @param bool $val The encryptAppData
    *
    * @return DefaultManagedAppProtection
    */
    public function setEncryptAppData($val)
    {
        $this->_propDict["encryptAppData"] = boolval($val);
        return $this;
    }


     /**
     * Gets the exemptedAppPackages
    * Android App packages in this list will be exempt from the policy and will be able to receive data from managed apps. (Android only)
     *
     * @return array|null The exemptedAppPackages
     */
    public function getExemptedAppPackages()
    {
        if (array_key_exists("exemptedAppPackages", $this->_propDict)) {
           return $this->_propDict["exemptedAppPackages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exemptedAppPackages
    * Android App packages in this list will be exempt from the policy and will be able to receive data from managed apps. (Android only)
    *
    * @param KeyValuePair[] $val The exemptedAppPackages
    *
    * @return DefaultManagedAppProtection
    */
    public function setExemptedAppPackages($val)
    {
        $this->_propDict["exemptedAppPackages"] = $val;
        return $this;
    }


     /**
     * Gets the exemptedAppProtocols
    * iOS Apps in this list will be exempt from the policy and will be able to receive data from managed apps. (iOS Only)
     *
     * @return array|null The exemptedAppProtocols
     */
    public function getExemptedAppProtocols()
    {
        if (array_key_exists("exemptedAppProtocols", $this->_propDict)) {
           return $this->_propDict["exemptedAppProtocols"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exemptedAppProtocols
    * iOS Apps in this list will be exempt from the policy and will be able to receive data from managed apps. (iOS Only)
    *
    * @param KeyValuePair[] $val The exemptedAppProtocols
    *
    * @return DefaultManagedAppProtection
    */
    public function setExemptedAppProtocols($val)
    {
        $this->_propDict["exemptedAppProtocols"] = $val;
        return $this;
    }

    /**
    * Gets the faceIdBlocked
    * Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
    *
    * @return bool|null The faceIdBlocked
    */
    public function getFaceIdBlocked()
    {
        if (array_key_exists("faceIdBlocked", $this->_propDict)) {
            return $this->_propDict["faceIdBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the faceIdBlocked
    * Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
    *
    * @param bool $val The faceIdBlocked
    *
    * @return DefaultManagedAppProtection
    */
    public function setFaceIdBlocked($val)
    {
        $this->_propDict["faceIdBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the filterOpenInToOnlyManagedApps
    * Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False. (iOS Only)
    *
    * @return bool|null The filterOpenInToOnlyManagedApps
    */
    public function getFilterOpenInToOnlyManagedApps()
    {
        if (array_key_exists("filterOpenInToOnlyManagedApps", $this->_propDict)) {
            return $this->_propDict["filterOpenInToOnlyManagedApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filterOpenInToOnlyManagedApps
    * Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False. (iOS Only)
    *
    * @param bool $val The filterOpenInToOnlyManagedApps
    *
    * @return DefaultManagedAppProtection
    */
    public function setFilterOpenInToOnlyManagedApps($val)
    {
        $this->_propDict["filterOpenInToOnlyManagedApps"] = boolval($val);
        return $this;
    }

    /**
    * Gets the fingerprintAndBiometricEnabled
    * Indicate to the client to enable both biometrics and fingerprints for the app.
    *
    * @return bool|null The fingerprintAndBiometricEnabled
    */
    public function getFingerprintAndBiometricEnabled()
    {
        if (array_key_exists("fingerprintAndBiometricEnabled", $this->_propDict)) {
            return $this->_propDict["fingerprintAndBiometricEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fingerprintAndBiometricEnabled
    * Indicate to the client to enable both biometrics and fingerprints for the app.
    *
    * @param bool $val The fingerprintAndBiometricEnabled
    *
    * @return DefaultManagedAppProtection
    */
    public function setFingerprintAndBiometricEnabled($val)
    {
        $this->_propDict["fingerprintAndBiometricEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the minimumRequiredCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or app access will be blocked
    *
    * @return string|null The minimumRequiredCompanyPortalVersion
    */
    public function getMinimumRequiredCompanyPortalVersion()
    {
        if (array_key_exists("minimumRequiredCompanyPortalVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredCompanyPortalVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumRequiredCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or app access will be blocked
    *
    * @param string $val The minimumRequiredCompanyPortalVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumRequiredCompanyPortalVersion($val)
    {
        $this->_propDict["minimumRequiredCompanyPortalVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumRequiredPatchVersion
    * Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
    *
    * @return string|null The minimumRequiredPatchVersion
    */
    public function getMinimumRequiredPatchVersion()
    {
        if (array_key_exists("minimumRequiredPatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredPatchVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumRequiredPatchVersion
    * Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
    *
    * @param string $val The minimumRequiredPatchVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumRequiredPatchVersion($val)
    {
        $this->_propDict["minimumRequiredPatchVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumRequiredSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
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
    * Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
    *
    * @param string $val The minimumRequiredSdkVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumRequiredSdkVersion($val)
    {
        $this->_propDict["minimumRequiredSdkVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWarningCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or the user will receive a warning
    *
    * @return string|null The minimumWarningCompanyPortalVersion
    */
    public function getMinimumWarningCompanyPortalVersion()
    {
        if (array_key_exists("minimumWarningCompanyPortalVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningCompanyPortalVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWarningCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or the user will receive a warning
    *
    * @param string $val The minimumWarningCompanyPortalVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWarningCompanyPortalVersion($val)
    {
        $this->_propDict["minimumWarningCompanyPortalVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWarningPatchVersion
    * Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
    *
    * @return string|null The minimumWarningPatchVersion
    */
    public function getMinimumWarningPatchVersion()
    {
        if (array_key_exists("minimumWarningPatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningPatchVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWarningPatchVersion
    * Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
    *
    * @param string $val The minimumWarningPatchVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWarningPatchVersion($val)
    {
        $this->_propDict["minimumWarningPatchVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWipeCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
    *
    * @return string|null The minimumWipeCompanyPortalVersion
    */
    public function getMinimumWipeCompanyPortalVersion()
    {
        if (array_key_exists("minimumWipeCompanyPortalVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeCompanyPortalVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWipeCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
    *
    * @param string $val The minimumWipeCompanyPortalVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWipeCompanyPortalVersion($val)
    {
        $this->_propDict["minimumWipeCompanyPortalVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWipePatchVersion
    * Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data. (Android only)
    *
    * @return string|null The minimumWipePatchVersion
    */
    public function getMinimumWipePatchVersion()
    {
        if (array_key_exists("minimumWipePatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipePatchVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumWipePatchVersion
    * Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data. (Android only)
    *
    * @param string $val The minimumWipePatchVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWipePatchVersion($val)
    {
        $this->_propDict["minimumWipePatchVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWipeSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data.
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
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The minimumWipeSdkVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWipeSdkVersion($val)
    {
        $this->_propDict["minimumWipeSdkVersion"] = $val;
        return $this;
    }

    /**
    * Gets the protectInboundDataFromUnknownSources
    * Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps. (iOS Only)
    *
    * @return bool|null The protectInboundDataFromUnknownSources
    */
    public function getProtectInboundDataFromUnknownSources()
    {
        if (array_key_exists("protectInboundDataFromUnknownSources", $this->_propDict)) {
            return $this->_propDict["protectInboundDataFromUnknownSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the protectInboundDataFromUnknownSources
    * Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps. (iOS Only)
    *
    * @param bool $val The protectInboundDataFromUnknownSources
    *
    * @return DefaultManagedAppProtection
    */
    public function setProtectInboundDataFromUnknownSources($val)
    {
        $this->_propDict["protectInboundDataFromUnknownSources"] = boolval($val);
        return $this;
    }

    /**
    * Gets the requireClass3Biometrics
    * Require user to apply Class 3 Biometrics on their Android device.
    *
    * @return bool|null The requireClass3Biometrics
    */
    public function getRequireClass3Biometrics()
    {
        if (array_key_exists("requireClass3Biometrics", $this->_propDict)) {
            return $this->_propDict["requireClass3Biometrics"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requireClass3Biometrics
    * Require user to apply Class 3 Biometrics on their Android device.
    *
    * @param bool $val The requireClass3Biometrics
    *
    * @return DefaultManagedAppProtection
    */
    public function setRequireClass3Biometrics($val)
    {
        $this->_propDict["requireClass3Biometrics"] = boolval($val);
        return $this;
    }

    /**
    * Gets the requiredAndroidSafetyNetAppsVerificationType
    * Defines the Android SafetyNet Apps Verification requirement for a managed app to work. Possible values are: none, enabled.
    *
    * @return AndroidManagedAppSafetyNetAppsVerificationType|null The requiredAndroidSafetyNetAppsVerificationType
    */
    public function getRequiredAndroidSafetyNetAppsVerificationType()
    {
        if (array_key_exists("requiredAndroidSafetyNetAppsVerificationType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAndroidSafetyNetAppsVerificationType"], "\Beta\Microsoft\Graph\Model\AndroidManagedAppSafetyNetAppsVerificationType") || is_null($this->_propDict["requiredAndroidSafetyNetAppsVerificationType"])) {
                return $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"];
            } else {
                $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"] = new AndroidManagedAppSafetyNetAppsVerificationType($this->_propDict["requiredAndroidSafetyNetAppsVerificationType"]);
                return $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"];
            }
        }
        return null;
    }

    /**
    * Sets the requiredAndroidSafetyNetAppsVerificationType
    * Defines the Android SafetyNet Apps Verification requirement for a managed app to work. Possible values are: none, enabled.
    *
    * @param AndroidManagedAppSafetyNetAppsVerificationType $val The requiredAndroidSafetyNetAppsVerificationType
    *
    * @return DefaultManagedAppProtection
    */
    public function setRequiredAndroidSafetyNetAppsVerificationType($val)
    {
        $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"] = $val;
        return $this;
    }

    /**
    * Gets the requiredAndroidSafetyNetDeviceAttestationType
    * Defines the Android SafetyNet Device Attestation requirement for a managed app to work. Possible values are: none, basicIntegrity, basicIntegrityAndDeviceCertification.
    *
    * @return AndroidManagedAppSafetyNetDeviceAttestationType|null The requiredAndroidSafetyNetDeviceAttestationType
    */
    public function getRequiredAndroidSafetyNetDeviceAttestationType()
    {
        if (array_key_exists("requiredAndroidSafetyNetDeviceAttestationType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"], "\Beta\Microsoft\Graph\Model\AndroidManagedAppSafetyNetDeviceAttestationType") || is_null($this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"])) {
                return $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"];
            } else {
                $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"] = new AndroidManagedAppSafetyNetDeviceAttestationType($this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"]);
                return $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"];
            }
        }
        return null;
    }

    /**
    * Sets the requiredAndroidSafetyNetDeviceAttestationType
    * Defines the Android SafetyNet Device Attestation requirement for a managed app to work. Possible values are: none, basicIntegrity, basicIntegrityAndDeviceCertification.
    *
    * @param AndroidManagedAppSafetyNetDeviceAttestationType $val The requiredAndroidSafetyNetDeviceAttestationType
    *
    * @return DefaultManagedAppProtection
    */
    public function setRequiredAndroidSafetyNetDeviceAttestationType($val)
    {
        $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"] = $val;
        return $this;
    }

    /**
    * Gets the requiredAndroidSafetyNetEvaluationType
    * Defines the Android SafetyNet evaluation type requirement for a managed app to work. (Android Only). Possible values are: basic, hardwareBacked.
    *
    * @return AndroidManagedAppSafetyNetEvaluationType|null The requiredAndroidSafetyNetEvaluationType
    */
    public function getRequiredAndroidSafetyNetEvaluationType()
    {
        if (array_key_exists("requiredAndroidSafetyNetEvaluationType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAndroidSafetyNetEvaluationType"], "\Beta\Microsoft\Graph\Model\AndroidManagedAppSafetyNetEvaluationType") || is_null($this->_propDict["requiredAndroidSafetyNetEvaluationType"])) {
                return $this->_propDict["requiredAndroidSafetyNetEvaluationType"];
            } else {
                $this->_propDict["requiredAndroidSafetyNetEvaluationType"] = new AndroidManagedAppSafetyNetEvaluationType($this->_propDict["requiredAndroidSafetyNetEvaluationType"]);
                return $this->_propDict["requiredAndroidSafetyNetEvaluationType"];
            }
        }
        return null;
    }

    /**
    * Sets the requiredAndroidSafetyNetEvaluationType
    * Defines the Android SafetyNet evaluation type requirement for a managed app to work. (Android Only). Possible values are: basic, hardwareBacked.
    *
    * @param AndroidManagedAppSafetyNetEvaluationType $val The requiredAndroidSafetyNetEvaluationType
    *
    * @return DefaultManagedAppProtection
    */
    public function setRequiredAndroidSafetyNetEvaluationType($val)
    {
        $this->_propDict["requiredAndroidSafetyNetEvaluationType"] = $val;
        return $this;
    }

    /**
    * Gets the requirePinAfterBiometricChange
    * A PIN prompt will override biometric prompts if class 3 biometrics are updated on the device.
    *
    * @return bool|null The requirePinAfterBiometricChange
    */
    public function getRequirePinAfterBiometricChange()
    {
        if (array_key_exists("requirePinAfterBiometricChange", $this->_propDict)) {
            return $this->_propDict["requirePinAfterBiometricChange"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requirePinAfterBiometricChange
    * A PIN prompt will override biometric prompts if class 3 biometrics are updated on the device.
    *
    * @param bool $val The requirePinAfterBiometricChange
    *
    * @return DefaultManagedAppProtection
    */
    public function setRequirePinAfterBiometricChange($val)
    {
        $this->_propDict["requirePinAfterBiometricChange"] = boolval($val);
        return $this;
    }

    /**
    * Gets the screenCaptureBlocked
    * Indicates whether screen capture is blocked. (Android only)
    *
    * @return bool|null The screenCaptureBlocked
    */
    public function getScreenCaptureBlocked()
    {
        if (array_key_exists("screenCaptureBlocked", $this->_propDict)) {
            return $this->_propDict["screenCaptureBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the screenCaptureBlocked
    * Indicates whether screen capture is blocked. (Android only)
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return DefaultManagedAppProtection
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the thirdPartyKeyboardsBlocked
    * Defines if third party keyboards are allowed while accessing a managed app. (iOS Only)
    *
    * @return bool|null The thirdPartyKeyboardsBlocked
    */
    public function getThirdPartyKeyboardsBlocked()
    {
        if (array_key_exists("thirdPartyKeyboardsBlocked", $this->_propDict)) {
            return $this->_propDict["thirdPartyKeyboardsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the thirdPartyKeyboardsBlocked
    * Defines if third party keyboards are allowed while accessing a managed app. (iOS Only)
    *
    * @param bool $val The thirdPartyKeyboardsBlocked
    *
    * @return DefaultManagedAppProtection
    */
    public function setThirdPartyKeyboardsBlocked($val)
    {
        $this->_propDict["thirdPartyKeyboardsBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the warnAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
    *
    * @return int|null The warnAfterCompanyPortalUpdateDeferralInDays
    */
    public function getWarnAfterCompanyPortalUpdateDeferralInDays()
    {
        if (array_key_exists("warnAfterCompanyPortalUpdateDeferralInDays", $this->_propDict)) {
            return $this->_propDict["warnAfterCompanyPortalUpdateDeferralInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the warnAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
    *
    * @param int $val The warnAfterCompanyPortalUpdateDeferralInDays
    *
    * @return DefaultManagedAppProtection
    */
    public function setWarnAfterCompanyPortalUpdateDeferralInDays($val)
    {
        $this->_propDict["warnAfterCompanyPortalUpdateDeferralInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the wipeAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
    *
    * @return int|null The wipeAfterCompanyPortalUpdateDeferralInDays
    */
    public function getWipeAfterCompanyPortalUpdateDeferralInDays()
    {
        if (array_key_exists("wipeAfterCompanyPortalUpdateDeferralInDays", $this->_propDict)) {
            return $this->_propDict["wipeAfterCompanyPortalUpdateDeferralInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wipeAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
    *
    * @param int $val The wipeAfterCompanyPortalUpdateDeferralInDays
    *
    * @return DefaultManagedAppProtection
    */
    public function setWipeAfterCompanyPortalUpdateDeferralInDays($val)
    {
        $this->_propDict["wipeAfterCompanyPortalUpdateDeferralInDays"] = intval($val);
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
    * @return DefaultManagedAppProtection
    */
    public function setApps($val)
    {
        $this->_propDict["apps"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @return ManagedAppPolicyDeploymentSummary|null The deploymentSummary
    */
    public function getDeploymentSummary()
    {
        if (array_key_exists("deploymentSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentSummary"], "\Beta\Microsoft\Graph\Model\ManagedAppPolicyDeploymentSummary") || is_null($this->_propDict["deploymentSummary"])) {
                return $this->_propDict["deploymentSummary"];
            } else {
                $this->_propDict["deploymentSummary"] = new ManagedAppPolicyDeploymentSummary($this->_propDict["deploymentSummary"]);
                return $this->_propDict["deploymentSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @param ManagedAppPolicyDeploymentSummary $val The deploymentSummary
    *
    * @return DefaultManagedAppProtection
    */
    public function setDeploymentSummary($val)
    {
        $this->_propDict["deploymentSummary"] = $val;
        return $this;
    }

}
