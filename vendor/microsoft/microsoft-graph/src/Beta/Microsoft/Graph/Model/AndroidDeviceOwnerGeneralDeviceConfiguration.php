<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerGeneralDeviceConfiguration File
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
* AndroidDeviceOwnerGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountsBlockModification
    * Indicates whether or not adding or removing accounts is disabled.
    *
    * @return bool|null The accountsBlockModification
    */
    public function getAccountsBlockModification()
    {
        if (array_key_exists("accountsBlockModification", $this->_propDict)) {
            return $this->_propDict["accountsBlockModification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountsBlockModification
    * Indicates whether or not adding or removing accounts is disabled.
    *
    * @param bool $val The accountsBlockModification
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAccountsBlockModification($val)
    {
        $this->_propDict["accountsBlockModification"] = boolval($val);
        return $this;
    }

    /**
    * Gets the appsAllowInstallFromUnknownSources
    * Indicates whether or not the user is allowed to enable to unknown sources setting.
    *
    * @return bool|null The appsAllowInstallFromUnknownSources
    */
    public function getAppsAllowInstallFromUnknownSources()
    {
        if (array_key_exists("appsAllowInstallFromUnknownSources", $this->_propDict)) {
            return $this->_propDict["appsAllowInstallFromUnknownSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appsAllowInstallFromUnknownSources
    * Indicates whether or not the user is allowed to enable to unknown sources setting.
    *
    * @param bool $val The appsAllowInstallFromUnknownSources
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAppsAllowInstallFromUnknownSources($val)
    {
        $this->_propDict["appsAllowInstallFromUnknownSources"] = boolval($val);
        return $this;
    }

    /**
    * Gets the appsAutoUpdatePolicy
    * Indicates the value of the app auto update policy. Possible values are: notConfigured, userChoice, never, wiFiOnly, always.
    *
    * @return AndroidDeviceOwnerAppAutoUpdatePolicyType|null The appsAutoUpdatePolicy
    */
    public function getAppsAutoUpdatePolicy()
    {
        if (array_key_exists("appsAutoUpdatePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["appsAutoUpdatePolicy"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerAppAutoUpdatePolicyType") || is_null($this->_propDict["appsAutoUpdatePolicy"])) {
                return $this->_propDict["appsAutoUpdatePolicy"];
            } else {
                $this->_propDict["appsAutoUpdatePolicy"] = new AndroidDeviceOwnerAppAutoUpdatePolicyType($this->_propDict["appsAutoUpdatePolicy"]);
                return $this->_propDict["appsAutoUpdatePolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the appsAutoUpdatePolicy
    * Indicates the value of the app auto update policy. Possible values are: notConfigured, userChoice, never, wiFiOnly, always.
    *
    * @param AndroidDeviceOwnerAppAutoUpdatePolicyType $val The appsAutoUpdatePolicy
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAppsAutoUpdatePolicy($val)
    {
        $this->_propDict["appsAutoUpdatePolicy"] = $val;
        return $this;
    }

    /**
    * Gets the appsDefaultPermissionPolicy
    * Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
    *
    * @return AndroidDeviceOwnerDefaultAppPermissionPolicyType|null The appsDefaultPermissionPolicy
    */
    public function getAppsDefaultPermissionPolicy()
    {
        if (array_key_exists("appsDefaultPermissionPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["appsDefaultPermissionPolicy"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerDefaultAppPermissionPolicyType") || is_null($this->_propDict["appsDefaultPermissionPolicy"])) {
                return $this->_propDict["appsDefaultPermissionPolicy"];
            } else {
                $this->_propDict["appsDefaultPermissionPolicy"] = new AndroidDeviceOwnerDefaultAppPermissionPolicyType($this->_propDict["appsDefaultPermissionPolicy"]);
                return $this->_propDict["appsDefaultPermissionPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the appsDefaultPermissionPolicy
    * Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
    *
    * @param AndroidDeviceOwnerDefaultAppPermissionPolicyType $val The appsDefaultPermissionPolicy
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAppsDefaultPermissionPolicy($val)
    {
        $this->_propDict["appsDefaultPermissionPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the appsRecommendSkippingFirstUseHints
    * Whether or not to recommend all apps skip any first-time-use hints they may have added.
    *
    * @return bool|null The appsRecommendSkippingFirstUseHints
    */
    public function getAppsRecommendSkippingFirstUseHints()
    {
        if (array_key_exists("appsRecommendSkippingFirstUseHints", $this->_propDict)) {
            return $this->_propDict["appsRecommendSkippingFirstUseHints"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appsRecommendSkippingFirstUseHints
    * Whether or not to recommend all apps skip any first-time-use hints they may have added.
    *
    * @param bool $val The appsRecommendSkippingFirstUseHints
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAppsRecommendSkippingFirstUseHints($val)
    {
        $this->_propDict["appsRecommendSkippingFirstUseHints"] = boolval($val);
        return $this;
    }


     /**
     * Gets the azureAdSharedDeviceDataClearApps
    * A list of managed apps that will have their data cleared during a global sign-out in AAD shared device mode. This collection can contain a maximum of 500 elements.
     *
     * @return array|null The azureAdSharedDeviceDataClearApps
     */
    public function getAzureAdSharedDeviceDataClearApps()
    {
        if (array_key_exists("azureAdSharedDeviceDataClearApps", $this->_propDict)) {
           return $this->_propDict["azureAdSharedDeviceDataClearApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureAdSharedDeviceDataClearApps
    * A list of managed apps that will have their data cleared during a global sign-out in AAD shared device mode. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem[] $val The azureAdSharedDeviceDataClearApps
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAzureAdSharedDeviceDataClearApps($val)
    {
        $this->_propDict["azureAdSharedDeviceDataClearApps"] = $val;
        return $this;
    }

    /**
    * Gets the bluetoothBlockConfiguration
    * Indicates whether or not to block a user from configuring bluetooth.
    *
    * @return bool|null The bluetoothBlockConfiguration
    */
    public function getBluetoothBlockConfiguration()
    {
        if (array_key_exists("bluetoothBlockConfiguration", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockConfiguration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bluetoothBlockConfiguration
    * Indicates whether or not to block a user from configuring bluetooth.
    *
    * @param bool $val The bluetoothBlockConfiguration
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setBluetoothBlockConfiguration($val)
    {
        $this->_propDict["bluetoothBlockConfiguration"] = boolval($val);
        return $this;
    }

    /**
    * Gets the bluetoothBlockContactSharing
    * Indicates whether or not to block a user from sharing contacts via bluetooth.
    *
    * @return bool|null The bluetoothBlockContactSharing
    */
    public function getBluetoothBlockContactSharing()
    {
        if (array_key_exists("bluetoothBlockContactSharing", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockContactSharing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bluetoothBlockContactSharing
    * Indicates whether or not to block a user from sharing contacts via bluetooth.
    *
    * @param bool $val The bluetoothBlockContactSharing
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setBluetoothBlockContactSharing($val)
    {
        $this->_propDict["bluetoothBlockContactSharing"] = boolval($val);
        return $this;
    }

    /**
    * Gets the cameraBlocked
    * Indicates whether or not to disable the use of the camera.
    *
    * @return bool|null The cameraBlocked
    */
    public function getCameraBlocked()
    {
        if (array_key_exists("cameraBlocked", $this->_propDict)) {
            return $this->_propDict["cameraBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cameraBlocked
    * Indicates whether or not to disable the use of the camera.
    *
    * @param bool $val The cameraBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the cellularBlockWiFiTethering
    * Indicates whether or not to block Wi-Fi tethering.
    *
    * @return bool|null The cellularBlockWiFiTethering
    */
    public function getCellularBlockWiFiTethering()
    {
        if (array_key_exists("cellularBlockWiFiTethering", $this->_propDict)) {
            return $this->_propDict["cellularBlockWiFiTethering"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cellularBlockWiFiTethering
    * Indicates whether or not to block Wi-Fi tethering.
    *
    * @param bool $val The cellularBlockWiFiTethering
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setCellularBlockWiFiTethering($val)
    {
        $this->_propDict["cellularBlockWiFiTethering"] = boolval($val);
        return $this;
    }

    /**
    * Gets the certificateCredentialConfigurationDisabled
    * Indicates whether or not to block users from any certificate credential configuration.
    *
    * @return bool|null The certificateCredentialConfigurationDisabled
    */
    public function getCertificateCredentialConfigurationDisabled()
    {
        if (array_key_exists("certificateCredentialConfigurationDisabled", $this->_propDict)) {
            return $this->_propDict["certificateCredentialConfigurationDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateCredentialConfigurationDisabled
    * Indicates whether or not to block users from any certificate credential configuration.
    *
    * @param bool $val The certificateCredentialConfigurationDisabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setCertificateCredentialConfigurationDisabled($val)
    {
        $this->_propDict["certificateCredentialConfigurationDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the crossProfilePoliciesAllowCopyPaste
    * Indicates whether or not text copied from one profile (personal or work) can be pasted in the other.
    *
    * @return bool|null The crossProfilePoliciesAllowCopyPaste
    */
    public function getCrossProfilePoliciesAllowCopyPaste()
    {
        if (array_key_exists("crossProfilePoliciesAllowCopyPaste", $this->_propDict)) {
            return $this->_propDict["crossProfilePoliciesAllowCopyPaste"];
        } else {
            return null;
        }
    }

    /**
    * Sets the crossProfilePoliciesAllowCopyPaste
    * Indicates whether or not text copied from one profile (personal or work) can be pasted in the other.
    *
    * @param bool $val The crossProfilePoliciesAllowCopyPaste
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setCrossProfilePoliciesAllowCopyPaste($val)
    {
        $this->_propDict["crossProfilePoliciesAllowCopyPaste"] = boolval($val);
        return $this;
    }

    /**
    * Gets the crossProfilePoliciesAllowDataSharing
    * Indicates whether data from one profile (personal or work) can be shared with apps in the other profile. Possible values are: notConfigured, crossProfileDataSharingBlocked, dataSharingFromWorkToPersonalBlocked, crossProfileDataSharingAllowed, unkownFutureValue.
    *
    * @return AndroidDeviceOwnerCrossProfileDataSharing|null The crossProfilePoliciesAllowDataSharing
    */
    public function getCrossProfilePoliciesAllowDataSharing()
    {
        if (array_key_exists("crossProfilePoliciesAllowDataSharing", $this->_propDict)) {
            if (is_a($this->_propDict["crossProfilePoliciesAllowDataSharing"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerCrossProfileDataSharing") || is_null($this->_propDict["crossProfilePoliciesAllowDataSharing"])) {
                return $this->_propDict["crossProfilePoliciesAllowDataSharing"];
            } else {
                $this->_propDict["crossProfilePoliciesAllowDataSharing"] = new AndroidDeviceOwnerCrossProfileDataSharing($this->_propDict["crossProfilePoliciesAllowDataSharing"]);
                return $this->_propDict["crossProfilePoliciesAllowDataSharing"];
            }
        }
        return null;
    }

    /**
    * Sets the crossProfilePoliciesAllowDataSharing
    * Indicates whether data from one profile (personal or work) can be shared with apps in the other profile. Possible values are: notConfigured, crossProfileDataSharingBlocked, dataSharingFromWorkToPersonalBlocked, crossProfileDataSharingAllowed, unkownFutureValue.
    *
    * @param AndroidDeviceOwnerCrossProfileDataSharing $val The crossProfilePoliciesAllowDataSharing
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setCrossProfilePoliciesAllowDataSharing($val)
    {
        $this->_propDict["crossProfilePoliciesAllowDataSharing"] = $val;
        return $this;
    }

    /**
    * Gets the crossProfilePoliciesShowWorkContactsInPersonalProfile
    * Indicates whether or not contacts stored in work profile are shown in personal profile contact searches/incoming calls.
    *
    * @return bool|null The crossProfilePoliciesShowWorkContactsInPersonalProfile
    */
    public function getCrossProfilePoliciesShowWorkContactsInPersonalProfile()
    {
        if (array_key_exists("crossProfilePoliciesShowWorkContactsInPersonalProfile", $this->_propDict)) {
            return $this->_propDict["crossProfilePoliciesShowWorkContactsInPersonalProfile"];
        } else {
            return null;
        }
    }

    /**
    * Sets the crossProfilePoliciesShowWorkContactsInPersonalProfile
    * Indicates whether or not contacts stored in work profile are shown in personal profile contact searches/incoming calls.
    *
    * @param bool $val The crossProfilePoliciesShowWorkContactsInPersonalProfile
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setCrossProfilePoliciesShowWorkContactsInPersonalProfile($val)
    {
        $this->_propDict["crossProfilePoliciesShowWorkContactsInPersonalProfile"] = boolval($val);
        return $this;
    }

    /**
    * Gets the dataRoamingBlocked
    * Indicates whether or not to block a user from data roaming.
    *
    * @return bool|null The dataRoamingBlocked
    */
    public function getDataRoamingBlocked()
    {
        if (array_key_exists("dataRoamingBlocked", $this->_propDict)) {
            return $this->_propDict["dataRoamingBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataRoamingBlocked
    * Indicates whether or not to block a user from data roaming.
    *
    * @param bool $val The dataRoamingBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setDataRoamingBlocked($val)
    {
        $this->_propDict["dataRoamingBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the dateTimeConfigurationBlocked
    * Indicates whether or not to block the user from manually changing the date or time on the device
    *
    * @return bool|null The dateTimeConfigurationBlocked
    */
    public function getDateTimeConfigurationBlocked()
    {
        if (array_key_exists("dateTimeConfigurationBlocked", $this->_propDict)) {
            return $this->_propDict["dateTimeConfigurationBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dateTimeConfigurationBlocked
    * Indicates whether or not to block the user from manually changing the date or time on the device
    *
    * @param bool $val The dateTimeConfigurationBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setDateTimeConfigurationBlocked($val)
    {
        $this->_propDict["dateTimeConfigurationBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the detailedHelpText
    * Represents the customized detailed help text provided to users when they attempt to modify managed settings on their device.
    *
    * @return AndroidDeviceOwnerUserFacingMessage|null The detailedHelpText
    */
    public function getDetailedHelpText()
    {
        if (array_key_exists("detailedHelpText", $this->_propDict)) {
            if (is_a($this->_propDict["detailedHelpText"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerUserFacingMessage") || is_null($this->_propDict["detailedHelpText"])) {
                return $this->_propDict["detailedHelpText"];
            } else {
                $this->_propDict["detailedHelpText"] = new AndroidDeviceOwnerUserFacingMessage($this->_propDict["detailedHelpText"]);
                return $this->_propDict["detailedHelpText"];
            }
        }
        return null;
    }

    /**
    * Sets the detailedHelpText
    * Represents the customized detailed help text provided to users when they attempt to modify managed settings on their device.
    *
    * @param AndroidDeviceOwnerUserFacingMessage $val The detailedHelpText
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setDetailedHelpText($val)
    {
        $this->_propDict["detailedHelpText"] = $val;
        return $this;
    }

    /**
    * Gets the deviceOwnerLockScreenMessage
    * Represents the customized lock screen message provided to users when they attempt to modify managed settings on their device.
    *
    * @return AndroidDeviceOwnerUserFacingMessage|null The deviceOwnerLockScreenMessage
    */
    public function getDeviceOwnerLockScreenMessage()
    {
        if (array_key_exists("deviceOwnerLockScreenMessage", $this->_propDict)) {
            if (is_a($this->_propDict["deviceOwnerLockScreenMessage"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerUserFacingMessage") || is_null($this->_propDict["deviceOwnerLockScreenMessage"])) {
                return $this->_propDict["deviceOwnerLockScreenMessage"];
            } else {
                $this->_propDict["deviceOwnerLockScreenMessage"] = new AndroidDeviceOwnerUserFacingMessage($this->_propDict["deviceOwnerLockScreenMessage"]);
                return $this->_propDict["deviceOwnerLockScreenMessage"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceOwnerLockScreenMessage
    * Represents the customized lock screen message provided to users when they attempt to modify managed settings on their device.
    *
    * @param AndroidDeviceOwnerUserFacingMessage $val The deviceOwnerLockScreenMessage
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setDeviceOwnerLockScreenMessage($val)
    {
        $this->_propDict["deviceOwnerLockScreenMessage"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentProfile
    * Indicates which enrollment profile you want to configure. Possible values are: notConfigured, dedicatedDevice, fullyManaged.
    *
    * @return AndroidDeviceOwnerEnrollmentProfileType|null The enrollmentProfile
    */
    public function getEnrollmentProfile()
    {
        if (array_key_exists("enrollmentProfile", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentProfile"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerEnrollmentProfileType") || is_null($this->_propDict["enrollmentProfile"])) {
                return $this->_propDict["enrollmentProfile"];
            } else {
                $this->_propDict["enrollmentProfile"] = new AndroidDeviceOwnerEnrollmentProfileType($this->_propDict["enrollmentProfile"]);
                return $this->_propDict["enrollmentProfile"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentProfile
    * Indicates which enrollment profile you want to configure. Possible values are: notConfigured, dedicatedDevice, fullyManaged.
    *
    * @param AndroidDeviceOwnerEnrollmentProfileType $val The enrollmentProfile
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setEnrollmentProfile($val)
    {
        $this->_propDict["enrollmentProfile"] = $val;
        return $this;
    }

    /**
    * Gets the factoryResetBlocked
    * Indicates whether or not the factory reset option in settings is disabled.
    *
    * @return bool|null The factoryResetBlocked
    */
    public function getFactoryResetBlocked()
    {
        if (array_key_exists("factoryResetBlocked", $this->_propDict)) {
            return $this->_propDict["factoryResetBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the factoryResetBlocked
    * Indicates whether or not the factory reset option in settings is disabled.
    *
    * @param bool $val The factoryResetBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setFactoryResetBlocked($val)
    {
        $this->_propDict["factoryResetBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the factoryResetDeviceAdministratorEmails
    * List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
    *
    * @return array|null The factoryResetDeviceAdministratorEmails
    */
    public function getFactoryResetDeviceAdministratorEmails()
    {
        if (array_key_exists("factoryResetDeviceAdministratorEmails", $this->_propDict)) {
            return $this->_propDict["factoryResetDeviceAdministratorEmails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the factoryResetDeviceAdministratorEmails
    * List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
    *
    * @param string[] $val The factoryResetDeviceAdministratorEmails
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setFactoryResetDeviceAdministratorEmails($val)
    {
        $this->_propDict["factoryResetDeviceAdministratorEmails"] = $val;
        return $this;
    }

    /**
    * Gets the globalProxy
    * Proxy is set up directly with host, port and excluded hosts.
    *
    * @return AndroidDeviceOwnerGlobalProxy|null The globalProxy
    */
    public function getGlobalProxy()
    {
        if (array_key_exists("globalProxy", $this->_propDict)) {
            if (is_a($this->_propDict["globalProxy"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerGlobalProxy") || is_null($this->_propDict["globalProxy"])) {
                return $this->_propDict["globalProxy"];
            } else {
                $this->_propDict["globalProxy"] = new AndroidDeviceOwnerGlobalProxy($this->_propDict["globalProxy"]);
                return $this->_propDict["globalProxy"];
            }
        }
        return null;
    }

    /**
    * Sets the globalProxy
    * Proxy is set up directly with host, port and excluded hosts.
    *
    * @param AndroidDeviceOwnerGlobalProxy $val The globalProxy
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setGlobalProxy($val)
    {
        $this->_propDict["globalProxy"] = $val;
        return $this;
    }

    /**
    * Gets the googleAccountsBlocked
    * Indicates whether or not google accounts will be blocked.
    *
    * @return bool|null The googleAccountsBlocked
    */
    public function getGoogleAccountsBlocked()
    {
        if (array_key_exists("googleAccountsBlocked", $this->_propDict)) {
            return $this->_propDict["googleAccountsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the googleAccountsBlocked
    * Indicates whether or not google accounts will be blocked.
    *
    * @param bool $val The googleAccountsBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setGoogleAccountsBlocked($val)
    {
        $this->_propDict["googleAccountsBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskCustomizationDeviceSettingsBlocked
    * Indicates whether a user can access the device's Settings app while in Kiosk Mode.
    *
    * @return bool|null The kioskCustomizationDeviceSettingsBlocked
    */
    public function getKioskCustomizationDeviceSettingsBlocked()
    {
        if (array_key_exists("kioskCustomizationDeviceSettingsBlocked", $this->_propDict)) {
            return $this->_propDict["kioskCustomizationDeviceSettingsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskCustomizationDeviceSettingsBlocked
    * Indicates whether a user can access the device's Settings app while in Kiosk Mode.
    *
    * @param bool $val The kioskCustomizationDeviceSettingsBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskCustomizationDeviceSettingsBlocked($val)
    {
        $this->_propDict["kioskCustomizationDeviceSettingsBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskCustomizationPowerButtonActionsBlocked
    * Whether the power menu is shown when a user long presses the Power button of a device in Kiosk Mode.
    *
    * @return bool|null The kioskCustomizationPowerButtonActionsBlocked
    */
    public function getKioskCustomizationPowerButtonActionsBlocked()
    {
        if (array_key_exists("kioskCustomizationPowerButtonActionsBlocked", $this->_propDict)) {
            return $this->_propDict["kioskCustomizationPowerButtonActionsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskCustomizationPowerButtonActionsBlocked
    * Whether the power menu is shown when a user long presses the Power button of a device in Kiosk Mode.
    *
    * @param bool $val The kioskCustomizationPowerButtonActionsBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskCustomizationPowerButtonActionsBlocked($val)
    {
        $this->_propDict["kioskCustomizationPowerButtonActionsBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskCustomizationStatusBar
    * Indicates whether system info and notifications are disabled in Kiosk Mode. Possible values are: notConfigured, notificationsAndSystemInfoEnabled, systemInfoOnly.
    *
    * @return AndroidDeviceOwnerKioskCustomizationStatusBar|null The kioskCustomizationStatusBar
    */
    public function getKioskCustomizationStatusBar()
    {
        if (array_key_exists("kioskCustomizationStatusBar", $this->_propDict)) {
            if (is_a($this->_propDict["kioskCustomizationStatusBar"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerKioskCustomizationStatusBar") || is_null($this->_propDict["kioskCustomizationStatusBar"])) {
                return $this->_propDict["kioskCustomizationStatusBar"];
            } else {
                $this->_propDict["kioskCustomizationStatusBar"] = new AndroidDeviceOwnerKioskCustomizationStatusBar($this->_propDict["kioskCustomizationStatusBar"]);
                return $this->_propDict["kioskCustomizationStatusBar"];
            }
        }
        return null;
    }

    /**
    * Sets the kioskCustomizationStatusBar
    * Indicates whether system info and notifications are disabled in Kiosk Mode. Possible values are: notConfigured, notificationsAndSystemInfoEnabled, systemInfoOnly.
    *
    * @param AndroidDeviceOwnerKioskCustomizationStatusBar $val The kioskCustomizationStatusBar
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskCustomizationStatusBar($val)
    {
        $this->_propDict["kioskCustomizationStatusBar"] = $val;
        return $this;
    }

    /**
    * Gets the kioskCustomizationSystemErrorWarnings
    * Indicates whether system error dialogs for crashed or unresponsive apps are shown in Kiosk Mode.
    *
    * @return bool|null The kioskCustomizationSystemErrorWarnings
    */
    public function getKioskCustomizationSystemErrorWarnings()
    {
        if (array_key_exists("kioskCustomizationSystemErrorWarnings", $this->_propDict)) {
            return $this->_propDict["kioskCustomizationSystemErrorWarnings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskCustomizationSystemErrorWarnings
    * Indicates whether system error dialogs for crashed or unresponsive apps are shown in Kiosk Mode.
    *
    * @param bool $val The kioskCustomizationSystemErrorWarnings
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskCustomizationSystemErrorWarnings($val)
    {
        $this->_propDict["kioskCustomizationSystemErrorWarnings"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskCustomizationSystemNavigation
    * Indicates which navigation features are enabled in Kiosk Mode. Possible values are: notConfigured, navigationEnabled, homeButtonOnly.
    *
    * @return AndroidDeviceOwnerKioskCustomizationSystemNavigation|null The kioskCustomizationSystemNavigation
    */
    public function getKioskCustomizationSystemNavigation()
    {
        if (array_key_exists("kioskCustomizationSystemNavigation", $this->_propDict)) {
            if (is_a($this->_propDict["kioskCustomizationSystemNavigation"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerKioskCustomizationSystemNavigation") || is_null($this->_propDict["kioskCustomizationSystemNavigation"])) {
                return $this->_propDict["kioskCustomizationSystemNavigation"];
            } else {
                $this->_propDict["kioskCustomizationSystemNavigation"] = new AndroidDeviceOwnerKioskCustomizationSystemNavigation($this->_propDict["kioskCustomizationSystemNavigation"]);
                return $this->_propDict["kioskCustomizationSystemNavigation"];
            }
        }
        return null;
    }

    /**
    * Sets the kioskCustomizationSystemNavigation
    * Indicates which navigation features are enabled in Kiosk Mode. Possible values are: notConfigured, navigationEnabled, homeButtonOnly.
    *
    * @param AndroidDeviceOwnerKioskCustomizationSystemNavigation $val The kioskCustomizationSystemNavigation
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskCustomizationSystemNavigation($val)
    {
        $this->_propDict["kioskCustomizationSystemNavigation"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeAppOrderEnabled
    * Whether or not to enable app ordering in Kiosk Mode.
    *
    * @return bool|null The kioskModeAppOrderEnabled
    */
    public function getKioskModeAppOrderEnabled()
    {
        if (array_key_exists("kioskModeAppOrderEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeAppOrderEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeAppOrderEnabled
    * Whether or not to enable app ordering in Kiosk Mode.
    *
    * @param bool $val The kioskModeAppOrderEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeAppOrderEnabled($val)
    {
        $this->_propDict["kioskModeAppOrderEnabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the kioskModeAppPositions
    * The ordering of items on Kiosk Mode Managed Home Screen. This collection can contain a maximum of 500 elements.
     *
     * @return array|null The kioskModeAppPositions
     */
    public function getKioskModeAppPositions()
    {
        if (array_key_exists("kioskModeAppPositions", $this->_propDict)) {
           return $this->_propDict["kioskModeAppPositions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeAppPositions
    * The ordering of items on Kiosk Mode Managed Home Screen. This collection can contain a maximum of 500 elements.
    *
    * @param AndroidDeviceOwnerKioskModeAppPositionItem[] $val The kioskModeAppPositions
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeAppPositions($val)
    {
        $this->_propDict["kioskModeAppPositions"] = $val;
        return $this;
    }


     /**
     * Gets the kioskModeApps
    * A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *
     * @return array|null The kioskModeApps
     */
    public function getKioskModeApps()
    {
        if (array_key_exists("kioskModeApps", $this->_propDict)) {
           return $this->_propDict["kioskModeApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeApps
    * A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem[] $val The kioskModeApps
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeApps($val)
    {
        $this->_propDict["kioskModeApps"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeAppsInFolderOrderedByName
    * Whether or not to alphabetize applications within a folder in Kiosk Mode.
    *
    * @return bool|null The kioskModeAppsInFolderOrderedByName
    */
    public function getKioskModeAppsInFolderOrderedByName()
    {
        if (array_key_exists("kioskModeAppsInFolderOrderedByName", $this->_propDict)) {
            return $this->_propDict["kioskModeAppsInFolderOrderedByName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeAppsInFolderOrderedByName
    * Whether or not to alphabetize applications within a folder in Kiosk Mode.
    *
    * @param bool $val The kioskModeAppsInFolderOrderedByName
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeAppsInFolderOrderedByName($val)
    {
        $this->_propDict["kioskModeAppsInFolderOrderedByName"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeBluetoothConfigurationEnabled
    * Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
    *
    * @return bool|null The kioskModeBluetoothConfigurationEnabled
    */
    public function getKioskModeBluetoothConfigurationEnabled()
    {
        if (array_key_exists("kioskModeBluetoothConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeBluetoothConfigurationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeBluetoothConfigurationEnabled
    * Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
    *
    * @param bool $val The kioskModeBluetoothConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeBluetoothConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeBluetoothConfigurationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeDebugMenuEasyAccessEnabled
    * Whether or not to allow a user to easy access to the debug menu in Kiosk Mode.
    *
    * @return bool|null The kioskModeDebugMenuEasyAccessEnabled
    */
    public function getKioskModeDebugMenuEasyAccessEnabled()
    {
        if (array_key_exists("kioskModeDebugMenuEasyAccessEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeDebugMenuEasyAccessEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeDebugMenuEasyAccessEnabled
    * Whether or not to allow a user to easy access to the debug menu in Kiosk Mode.
    *
    * @param bool $val The kioskModeDebugMenuEasyAccessEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeDebugMenuEasyAccessEnabled($val)
    {
        $this->_propDict["kioskModeDebugMenuEasyAccessEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeExitCode
    * Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
    *
    * @return string|null The kioskModeExitCode
    */
    public function getKioskModeExitCode()
    {
        if (array_key_exists("kioskModeExitCode", $this->_propDict)) {
            return $this->_propDict["kioskModeExitCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeExitCode
    * Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
    *
    * @param string $val The kioskModeExitCode
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeExitCode($val)
    {
        $this->_propDict["kioskModeExitCode"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeFlashlightConfigurationEnabled
    * Whether or not to allow a user to use the flashlight in Kiosk Mode.
    *
    * @return bool|null The kioskModeFlashlightConfigurationEnabled
    */
    public function getKioskModeFlashlightConfigurationEnabled()
    {
        if (array_key_exists("kioskModeFlashlightConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeFlashlightConfigurationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeFlashlightConfigurationEnabled
    * Whether or not to allow a user to use the flashlight in Kiosk Mode.
    *
    * @param bool $val The kioskModeFlashlightConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeFlashlightConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeFlashlightConfigurationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeFolderIcon
    * Folder icon configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, darkSquare, darkCircle, lightSquare, lightCircle.
    *
    * @return AndroidDeviceOwnerKioskModeFolderIcon|null The kioskModeFolderIcon
    */
    public function getKioskModeFolderIcon()
    {
        if (array_key_exists("kioskModeFolderIcon", $this->_propDict)) {
            if (is_a($this->_propDict["kioskModeFolderIcon"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerKioskModeFolderIcon") || is_null($this->_propDict["kioskModeFolderIcon"])) {
                return $this->_propDict["kioskModeFolderIcon"];
            } else {
                $this->_propDict["kioskModeFolderIcon"] = new AndroidDeviceOwnerKioskModeFolderIcon($this->_propDict["kioskModeFolderIcon"]);
                return $this->_propDict["kioskModeFolderIcon"];
            }
        }
        return null;
    }

    /**
    * Sets the kioskModeFolderIcon
    * Folder icon configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, darkSquare, darkCircle, lightSquare, lightCircle.
    *
    * @param AndroidDeviceOwnerKioskModeFolderIcon $val The kioskModeFolderIcon
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeFolderIcon($val)
    {
        $this->_propDict["kioskModeFolderIcon"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeGridHeight
    * Number of rows for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
    *
    * @return int|null The kioskModeGridHeight
    */
    public function getKioskModeGridHeight()
    {
        if (array_key_exists("kioskModeGridHeight", $this->_propDict)) {
            return $this->_propDict["kioskModeGridHeight"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeGridHeight
    * Number of rows for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
    *
    * @param int $val The kioskModeGridHeight
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeGridHeight($val)
    {
        $this->_propDict["kioskModeGridHeight"] = intval($val);
        return $this;
    }

    /**
    * Gets the kioskModeGridWidth
    * Number of columns for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
    *
    * @return int|null The kioskModeGridWidth
    */
    public function getKioskModeGridWidth()
    {
        if (array_key_exists("kioskModeGridWidth", $this->_propDict)) {
            return $this->_propDict["kioskModeGridWidth"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeGridWidth
    * Number of columns for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
    *
    * @param int $val The kioskModeGridWidth
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeGridWidth($val)
    {
        $this->_propDict["kioskModeGridWidth"] = intval($val);
        return $this;
    }

    /**
    * Gets the kioskModeIconSize
    * Icon size configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, smallest, small, regular, large, largest.
    *
    * @return AndroidDeviceOwnerKioskModeIconSize|null The kioskModeIconSize
    */
    public function getKioskModeIconSize()
    {
        if (array_key_exists("kioskModeIconSize", $this->_propDict)) {
            if (is_a($this->_propDict["kioskModeIconSize"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerKioskModeIconSize") || is_null($this->_propDict["kioskModeIconSize"])) {
                return $this->_propDict["kioskModeIconSize"];
            } else {
                $this->_propDict["kioskModeIconSize"] = new AndroidDeviceOwnerKioskModeIconSize($this->_propDict["kioskModeIconSize"]);
                return $this->_propDict["kioskModeIconSize"];
            }
        }
        return null;
    }

    /**
    * Sets the kioskModeIconSize
    * Icon size configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, smallest, small, regular, large, largest.
    *
    * @param AndroidDeviceOwnerKioskModeIconSize $val The kioskModeIconSize
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeIconSize($val)
    {
        $this->_propDict["kioskModeIconSize"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeLockHomeScreen
    * Whether or not to lock home screen to the end user in Kiosk Mode.
    *
    * @return bool|null The kioskModeLockHomeScreen
    */
    public function getKioskModeLockHomeScreen()
    {
        if (array_key_exists("kioskModeLockHomeScreen", $this->_propDict)) {
            return $this->_propDict["kioskModeLockHomeScreen"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeLockHomeScreen
    * Whether or not to lock home screen to the end user in Kiosk Mode.
    *
    * @param bool $val The kioskModeLockHomeScreen
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeLockHomeScreen($val)
    {
        $this->_propDict["kioskModeLockHomeScreen"] = boolval($val);
        return $this;
    }


     /**
     * Gets the kioskModeManagedFolders
    * A list of managed folders for a device in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *
     * @return array|null The kioskModeManagedFolders
     */
    public function getKioskModeManagedFolders()
    {
        if (array_key_exists("kioskModeManagedFolders", $this->_propDict)) {
           return $this->_propDict["kioskModeManagedFolders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedFolders
    * A list of managed folders for a device in Kiosk Mode. This collection can contain a maximum of 500 elements.
    *
    * @param AndroidDeviceOwnerKioskModeManagedFolder[] $val The kioskModeManagedFolders
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedFolders($val)
    {
        $this->_propDict["kioskModeManagedFolders"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenAutoSignout
    * Whether or not to automatically sign-out of MHS and Shared device mode applications after inactive for Managed Home Screen.
    *
    * @return bool|null The kioskModeManagedHomeScreenAutoSignout
    */
    public function getKioskModeManagedHomeScreenAutoSignout()
    {
        if (array_key_exists("kioskModeManagedHomeScreenAutoSignout", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedHomeScreenAutoSignout"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedHomeScreenAutoSignout
    * Whether or not to automatically sign-out of MHS and Shared device mode applications after inactive for Managed Home Screen.
    *
    * @param bool $val The kioskModeManagedHomeScreenAutoSignout
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenAutoSignout($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenAutoSignout"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds
    * Number of seconds to give user notice before automatically signing them out for Managed Home Screen. Valid values 0 to 9999999
    *
    * @return int|null The kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds
    */
    public function getKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds()
    {
        if (array_key_exists("kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds
    * Number of seconds to give user notice before automatically signing them out for Managed Home Screen. Valid values 0 to 9999999
    *
    * @param int $val The kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds
    * Number of seconds device is inactive before automatically signing user out for Managed Home Screen. Valid values 0 to 9999999
    *
    * @return int|null The kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds
    */
    public function getKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds()
    {
        if (array_key_exists("kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds
    * Number of seconds device is inactive before automatically signing user out for Managed Home Screen. Valid values 0 to 9999999
    *
    * @param int $val The kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenPinComplexity
    * Complexity of PIN for sign-in session for Managed Home Screen. Possible values are: notConfigured, simple, complex.
    *
    * @return KioskModeManagedHomeScreenPinComplexity|null The kioskModeManagedHomeScreenPinComplexity
    */
    public function getKioskModeManagedHomeScreenPinComplexity()
    {
        if (array_key_exists("kioskModeManagedHomeScreenPinComplexity", $this->_propDict)) {
            if (is_a($this->_propDict["kioskModeManagedHomeScreenPinComplexity"], "\Beta\Microsoft\Graph\Model\KioskModeManagedHomeScreenPinComplexity") || is_null($this->_propDict["kioskModeManagedHomeScreenPinComplexity"])) {
                return $this->_propDict["kioskModeManagedHomeScreenPinComplexity"];
            } else {
                $this->_propDict["kioskModeManagedHomeScreenPinComplexity"] = new KioskModeManagedHomeScreenPinComplexity($this->_propDict["kioskModeManagedHomeScreenPinComplexity"]);
                return $this->_propDict["kioskModeManagedHomeScreenPinComplexity"];
            }
        }
        return null;
    }

    /**
    * Sets the kioskModeManagedHomeScreenPinComplexity
    * Complexity of PIN for sign-in session for Managed Home Screen. Possible values are: notConfigured, simple, complex.
    *
    * @param KioskModeManagedHomeScreenPinComplexity $val The kioskModeManagedHomeScreenPinComplexity
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenPinComplexity($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenPinComplexity"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenPinRequired
    * Whether or not require user to set a PIN for sign-in session for Managed Home Screen.
    *
    * @return bool|null The kioskModeManagedHomeScreenPinRequired
    */
    public function getKioskModeManagedHomeScreenPinRequired()
    {
        if (array_key_exists("kioskModeManagedHomeScreenPinRequired", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedHomeScreenPinRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedHomeScreenPinRequired
    * Whether or not require user to set a PIN for sign-in session for Managed Home Screen.
    *
    * @param bool $val The kioskModeManagedHomeScreenPinRequired
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenPinRequired($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenPinRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenPinRequiredToResume
    * Whether or not required user to enter session PIN if screensaver has appeared for Managed Home Screen.
    *
    * @return bool|null The kioskModeManagedHomeScreenPinRequiredToResume
    */
    public function getKioskModeManagedHomeScreenPinRequiredToResume()
    {
        if (array_key_exists("kioskModeManagedHomeScreenPinRequiredToResume", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedHomeScreenPinRequiredToResume"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedHomeScreenPinRequiredToResume
    * Whether or not required user to enter session PIN if screensaver has appeared for Managed Home Screen.
    *
    * @param bool $val The kioskModeManagedHomeScreenPinRequiredToResume
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenPinRequiredToResume($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenPinRequiredToResume"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenSignInBackground
    * Custom URL background for sign-in screen for Managed Home Screen.
    *
    * @return string|null The kioskModeManagedHomeScreenSignInBackground
    */
    public function getKioskModeManagedHomeScreenSignInBackground()
    {
        if (array_key_exists("kioskModeManagedHomeScreenSignInBackground", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedHomeScreenSignInBackground"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedHomeScreenSignInBackground
    * Custom URL background for sign-in screen for Managed Home Screen.
    *
    * @param string $val The kioskModeManagedHomeScreenSignInBackground
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenSignInBackground($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenSignInBackground"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenSignInBrandingLogo
    * Custom URL branding logo for sign-in screen and session pin page for Managed Home Screen.
    *
    * @return string|null The kioskModeManagedHomeScreenSignInBrandingLogo
    */
    public function getKioskModeManagedHomeScreenSignInBrandingLogo()
    {
        if (array_key_exists("kioskModeManagedHomeScreenSignInBrandingLogo", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedHomeScreenSignInBrandingLogo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedHomeScreenSignInBrandingLogo
    * Custom URL branding logo for sign-in screen and session pin page for Managed Home Screen.
    *
    * @param string $val The kioskModeManagedHomeScreenSignInBrandingLogo
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenSignInBrandingLogo($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenSignInBrandingLogo"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeManagedHomeScreenSignInEnabled
    * Whether or not show sign-in screen for Managed Home Screen.
    *
    * @return bool|null The kioskModeManagedHomeScreenSignInEnabled
    */
    public function getKioskModeManagedHomeScreenSignInEnabled()
    {
        if (array_key_exists("kioskModeManagedHomeScreenSignInEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedHomeScreenSignInEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedHomeScreenSignInEnabled
    * Whether or not show sign-in screen for Managed Home Screen.
    *
    * @param bool $val The kioskModeManagedHomeScreenSignInEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedHomeScreenSignInEnabled($val)
    {
        $this->_propDict["kioskModeManagedHomeScreenSignInEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeManagedSettingsEntryDisabled
    * Whether or not to display the Managed Settings entry point on the managed home screen in Kiosk Mode.
    *
    * @return bool|null The kioskModeManagedSettingsEntryDisabled
    */
    public function getKioskModeManagedSettingsEntryDisabled()
    {
        if (array_key_exists("kioskModeManagedSettingsEntryDisabled", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedSettingsEntryDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeManagedSettingsEntryDisabled
    * Whether or not to display the Managed Settings entry point on the managed home screen in Kiosk Mode.
    *
    * @param bool $val The kioskModeManagedSettingsEntryDisabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeManagedSettingsEntryDisabled($val)
    {
        $this->_propDict["kioskModeManagedSettingsEntryDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeMediaVolumeConfigurationEnabled
    * Whether or not to allow a user to change the media volume in Kiosk Mode.
    *
    * @return bool|null The kioskModeMediaVolumeConfigurationEnabled
    */
    public function getKioskModeMediaVolumeConfigurationEnabled()
    {
        if (array_key_exists("kioskModeMediaVolumeConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeMediaVolumeConfigurationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeMediaVolumeConfigurationEnabled
    * Whether or not to allow a user to change the media volume in Kiosk Mode.
    *
    * @param bool $val The kioskModeMediaVolumeConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeMediaVolumeConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeMediaVolumeConfigurationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeScreenOrientation
    * Screen orientation configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, portrait, landscape, autoRotate.
    *
    * @return AndroidDeviceOwnerKioskModeScreenOrientation|null The kioskModeScreenOrientation
    */
    public function getKioskModeScreenOrientation()
    {
        if (array_key_exists("kioskModeScreenOrientation", $this->_propDict)) {
            if (is_a($this->_propDict["kioskModeScreenOrientation"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerKioskModeScreenOrientation") || is_null($this->_propDict["kioskModeScreenOrientation"])) {
                return $this->_propDict["kioskModeScreenOrientation"];
            } else {
                $this->_propDict["kioskModeScreenOrientation"] = new AndroidDeviceOwnerKioskModeScreenOrientation($this->_propDict["kioskModeScreenOrientation"]);
                return $this->_propDict["kioskModeScreenOrientation"];
            }
        }
        return null;
    }

    /**
    * Sets the kioskModeScreenOrientation
    * Screen orientation configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, portrait, landscape, autoRotate.
    *
    * @param AndroidDeviceOwnerKioskModeScreenOrientation $val The kioskModeScreenOrientation
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenOrientation($val)
    {
        $this->_propDict["kioskModeScreenOrientation"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeScreenSaverConfigurationEnabled
    * Whether or not to enable screen saver mode or not in Kiosk Mode.
    *
    * @return bool|null The kioskModeScreenSaverConfigurationEnabled
    */
    public function getKioskModeScreenSaverConfigurationEnabled()
    {
        if (array_key_exists("kioskModeScreenSaverConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverConfigurationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeScreenSaverConfigurationEnabled
    * Whether or not to enable screen saver mode or not in Kiosk Mode.
    *
    * @param bool $val The kioskModeScreenSaverConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeScreenSaverConfigurationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeScreenSaverDetectMediaDisabled
    * Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
    *
    * @return bool|null The kioskModeScreenSaverDetectMediaDisabled
    */
    public function getKioskModeScreenSaverDetectMediaDisabled()
    {
        if (array_key_exists("kioskModeScreenSaverDetectMediaDisabled", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverDetectMediaDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeScreenSaverDetectMediaDisabled
    * Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
    *
    * @param bool $val The kioskModeScreenSaverDetectMediaDisabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverDetectMediaDisabled($val)
    {
        $this->_propDict["kioskModeScreenSaverDetectMediaDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeScreenSaverDisplayTimeInSeconds
    * The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
    *
    * @return int|null The kioskModeScreenSaverDisplayTimeInSeconds
    */
    public function getKioskModeScreenSaverDisplayTimeInSeconds()
    {
        if (array_key_exists("kioskModeScreenSaverDisplayTimeInSeconds", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverDisplayTimeInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeScreenSaverDisplayTimeInSeconds
    * The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
    *
    * @param int $val The kioskModeScreenSaverDisplayTimeInSeconds
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverDisplayTimeInSeconds($val)
    {
        $this->_propDict["kioskModeScreenSaverDisplayTimeInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the kioskModeScreenSaverImageUrl
    * URL for an image that will be the device's screen saver in Kiosk Mode.
    *
    * @return string|null The kioskModeScreenSaverImageUrl
    */
    public function getKioskModeScreenSaverImageUrl()
    {
        if (array_key_exists("kioskModeScreenSaverImageUrl", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverImageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeScreenSaverImageUrl
    * URL for an image that will be the device's screen saver in Kiosk Mode.
    *
    * @param string $val The kioskModeScreenSaverImageUrl
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverImageUrl($val)
    {
        $this->_propDict["kioskModeScreenSaverImageUrl"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeScreenSaverStartDelayInSeconds
    * The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
    *
    * @return int|null The kioskModeScreenSaverStartDelayInSeconds
    */
    public function getKioskModeScreenSaverStartDelayInSeconds()
    {
        if (array_key_exists("kioskModeScreenSaverStartDelayInSeconds", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverStartDelayInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeScreenSaverStartDelayInSeconds
    * The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
    *
    * @param int $val The kioskModeScreenSaverStartDelayInSeconds
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverStartDelayInSeconds($val)
    {
        $this->_propDict["kioskModeScreenSaverStartDelayInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the kioskModeShowAppNotificationBadge
    * Whether or not to display application notification badges in Kiosk Mode.
    *
    * @return bool|null The kioskModeShowAppNotificationBadge
    */
    public function getKioskModeShowAppNotificationBadge()
    {
        if (array_key_exists("kioskModeShowAppNotificationBadge", $this->_propDict)) {
            return $this->_propDict["kioskModeShowAppNotificationBadge"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeShowAppNotificationBadge
    * Whether or not to display application notification badges in Kiosk Mode.
    *
    * @param bool $val The kioskModeShowAppNotificationBadge
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeShowAppNotificationBadge($val)
    {
        $this->_propDict["kioskModeShowAppNotificationBadge"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeShowDeviceInfo
    * Whether or not to allow a user to access basic device information.
    *
    * @return bool|null The kioskModeShowDeviceInfo
    */
    public function getKioskModeShowDeviceInfo()
    {
        if (array_key_exists("kioskModeShowDeviceInfo", $this->_propDict)) {
            return $this->_propDict["kioskModeShowDeviceInfo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeShowDeviceInfo
    * Whether or not to allow a user to access basic device information.
    *
    * @param bool $val The kioskModeShowDeviceInfo
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeShowDeviceInfo($val)
    {
        $this->_propDict["kioskModeShowDeviceInfo"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeUseManagedHomeScreenApp
    * Whether or not to use single app kiosk mode or multi-app kiosk mode. Possible values are: notConfigured, singleAppMode, multiAppMode.
    *
    * @return KioskModeType|null The kioskModeUseManagedHomeScreenApp
    */
    public function getKioskModeUseManagedHomeScreenApp()
    {
        if (array_key_exists("kioskModeUseManagedHomeScreenApp", $this->_propDict)) {
            if (is_a($this->_propDict["kioskModeUseManagedHomeScreenApp"], "\Beta\Microsoft\Graph\Model\KioskModeType") || is_null($this->_propDict["kioskModeUseManagedHomeScreenApp"])) {
                return $this->_propDict["kioskModeUseManagedHomeScreenApp"];
            } else {
                $this->_propDict["kioskModeUseManagedHomeScreenApp"] = new KioskModeType($this->_propDict["kioskModeUseManagedHomeScreenApp"]);
                return $this->_propDict["kioskModeUseManagedHomeScreenApp"];
            }
        }
        return null;
    }

    /**
    * Sets the kioskModeUseManagedHomeScreenApp
    * Whether or not to use single app kiosk mode or multi-app kiosk mode. Possible values are: notConfigured, singleAppMode, multiAppMode.
    *
    * @param KioskModeType $val The kioskModeUseManagedHomeScreenApp
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeUseManagedHomeScreenApp($val)
    {
        $this->_propDict["kioskModeUseManagedHomeScreenApp"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeVirtualHomeButtonEnabled
    * Whether or not to display a virtual home button when the device is in Kiosk Mode.
    *
    * @return bool|null The kioskModeVirtualHomeButtonEnabled
    */
    public function getKioskModeVirtualHomeButtonEnabled()
    {
        if (array_key_exists("kioskModeVirtualHomeButtonEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeVirtualHomeButtonEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeVirtualHomeButtonEnabled
    * Whether or not to display a virtual home button when the device is in Kiosk Mode.
    *
    * @param bool $val The kioskModeVirtualHomeButtonEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeVirtualHomeButtonEnabled($val)
    {
        $this->_propDict["kioskModeVirtualHomeButtonEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the kioskModeVirtualHomeButtonType
    * Indicates whether the virtual home button is a swipe up home button or a floating home button. Possible values are: notConfigured, swipeUp, floating.
    *
    * @return AndroidDeviceOwnerVirtualHomeButtonType|null The kioskModeVirtualHomeButtonType
    */
    public function getKioskModeVirtualHomeButtonType()
    {
        if (array_key_exists("kioskModeVirtualHomeButtonType", $this->_propDict)) {
            if (is_a($this->_propDict["kioskModeVirtualHomeButtonType"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerVirtualHomeButtonType") || is_null($this->_propDict["kioskModeVirtualHomeButtonType"])) {
                return $this->_propDict["kioskModeVirtualHomeButtonType"];
            } else {
                $this->_propDict["kioskModeVirtualHomeButtonType"] = new AndroidDeviceOwnerVirtualHomeButtonType($this->_propDict["kioskModeVirtualHomeButtonType"]);
                return $this->_propDict["kioskModeVirtualHomeButtonType"];
            }
        }
        return null;
    }

    /**
    * Sets the kioskModeVirtualHomeButtonType
    * Indicates whether the virtual home button is a swipe up home button or a floating home button. Possible values are: notConfigured, swipeUp, floating.
    *
    * @param AndroidDeviceOwnerVirtualHomeButtonType $val The kioskModeVirtualHomeButtonType
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeVirtualHomeButtonType($val)
    {
        $this->_propDict["kioskModeVirtualHomeButtonType"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeWallpaperUrl
    * URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
    *
    * @return string|null The kioskModeWallpaperUrl
    */
    public function getKioskModeWallpaperUrl()
    {
        if (array_key_exists("kioskModeWallpaperUrl", $this->_propDict)) {
            return $this->_propDict["kioskModeWallpaperUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeWallpaperUrl
    * URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
    *
    * @param string $val The kioskModeWallpaperUrl
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeWallpaperUrl($val)
    {
        $this->_propDict["kioskModeWallpaperUrl"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeWifiAllowedSsids
    * The restricted set of WIFI SSIDs available for the user to configure in Kiosk Mode. This collection can contain a maximum of 500 elements.
    *
    * @return array|null The kioskModeWifiAllowedSsids
    */
    public function getKioskModeWifiAllowedSsids()
    {
        if (array_key_exists("kioskModeWifiAllowedSsids", $this->_propDict)) {
            return $this->_propDict["kioskModeWifiAllowedSsids"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeWifiAllowedSsids
    * The restricted set of WIFI SSIDs available for the user to configure in Kiosk Mode. This collection can contain a maximum of 500 elements.
    *
    * @param string[] $val The kioskModeWifiAllowedSsids
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeWifiAllowedSsids($val)
    {
        $this->_propDict["kioskModeWifiAllowedSsids"] = $val;
        return $this;
    }

    /**
    * Gets the kioskModeWiFiConfigurationEnabled
    * Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
    *
    * @return bool|null The kioskModeWiFiConfigurationEnabled
    */
    public function getKioskModeWiFiConfigurationEnabled()
    {
        if (array_key_exists("kioskModeWiFiConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeWiFiConfigurationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kioskModeWiFiConfigurationEnabled
    * Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
    *
    * @param bool $val The kioskModeWiFiConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeWiFiConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeWiFiConfigurationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the locateDeviceLostModeEnabled
    * Indicates whether or not LocateDevice for devices with lost mode (COBO, COPE) is enabled.
    *
    * @return bool|null The locateDeviceLostModeEnabled
    */
    public function getLocateDeviceLostModeEnabled()
    {
        if (array_key_exists("locateDeviceLostModeEnabled", $this->_propDict)) {
            return $this->_propDict["locateDeviceLostModeEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locateDeviceLostModeEnabled
    * Indicates whether or not LocateDevice for devices with lost mode (COBO, COPE) is enabled.
    *
    * @param bool $val The locateDeviceLostModeEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setLocateDeviceLostModeEnabled($val)
    {
        $this->_propDict["locateDeviceLostModeEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the locateDeviceUserlessDisabled
    * Indicates whether or not LocateDevice for userless (COSU) devices is disabled.
    *
    * @return bool|null The locateDeviceUserlessDisabled
    */
    public function getLocateDeviceUserlessDisabled()
    {
        if (array_key_exists("locateDeviceUserlessDisabled", $this->_propDict)) {
            return $this->_propDict["locateDeviceUserlessDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locateDeviceUserlessDisabled
    * Indicates whether or not LocateDevice for userless (COSU) devices is disabled.
    *
    * @param bool $val The locateDeviceUserlessDisabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setLocateDeviceUserlessDisabled($val)
    {
        $this->_propDict["locateDeviceUserlessDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microphoneForceMute
    * Indicates whether or not to block unmuting the microphone on the device.
    *
    * @return bool|null The microphoneForceMute
    */
    public function getMicrophoneForceMute()
    {
        if (array_key_exists("microphoneForceMute", $this->_propDict)) {
            return $this->_propDict["microphoneForceMute"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microphoneForceMute
    * Indicates whether or not to block unmuting the microphone on the device.
    *
    * @param bool $val The microphoneForceMute
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrophoneForceMute($val)
    {
        $this->_propDict["microphoneForceMute"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftLauncherConfigurationEnabled
    * Indicates whether or not to you want configure Microsoft Launcher.
    *
    * @return bool|null The microsoftLauncherConfigurationEnabled
    */
    public function getMicrosoftLauncherConfigurationEnabled()
    {
        if (array_key_exists("microsoftLauncherConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["microsoftLauncherConfigurationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftLauncherConfigurationEnabled
    * Indicates whether or not to you want configure Microsoft Launcher.
    *
    * @param bool $val The microsoftLauncherConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherConfigurationEnabled($val)
    {
        $this->_propDict["microsoftLauncherConfigurationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftLauncherCustomWallpaperAllowUserModification
    * Indicates whether or not the user can modify the wallpaper to personalize their device.
    *
    * @return bool|null The microsoftLauncherCustomWallpaperAllowUserModification
    */
    public function getMicrosoftLauncherCustomWallpaperAllowUserModification()
    {
        if (array_key_exists("microsoftLauncherCustomWallpaperAllowUserModification", $this->_propDict)) {
            return $this->_propDict["microsoftLauncherCustomWallpaperAllowUserModification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftLauncherCustomWallpaperAllowUserModification
    * Indicates whether or not the user can modify the wallpaper to personalize their device.
    *
    * @param bool $val The microsoftLauncherCustomWallpaperAllowUserModification
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherCustomWallpaperAllowUserModification($val)
    {
        $this->_propDict["microsoftLauncherCustomWallpaperAllowUserModification"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftLauncherCustomWallpaperEnabled
    * Indicates whether or not to configure the wallpaper on the targeted devices.
    *
    * @return bool|null The microsoftLauncherCustomWallpaperEnabled
    */
    public function getMicrosoftLauncherCustomWallpaperEnabled()
    {
        if (array_key_exists("microsoftLauncherCustomWallpaperEnabled", $this->_propDict)) {
            return $this->_propDict["microsoftLauncherCustomWallpaperEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftLauncherCustomWallpaperEnabled
    * Indicates whether or not to configure the wallpaper on the targeted devices.
    *
    * @param bool $val The microsoftLauncherCustomWallpaperEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherCustomWallpaperEnabled($val)
    {
        $this->_propDict["microsoftLauncherCustomWallpaperEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftLauncherCustomWallpaperImageUrl
    * Indicates the URL for the image file to use as the wallpaper on the targeted devices.
    *
    * @return string|null The microsoftLauncherCustomWallpaperImageUrl
    */
    public function getMicrosoftLauncherCustomWallpaperImageUrl()
    {
        if (array_key_exists("microsoftLauncherCustomWallpaperImageUrl", $this->_propDict)) {
            return $this->_propDict["microsoftLauncherCustomWallpaperImageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftLauncherCustomWallpaperImageUrl
    * Indicates the URL for the image file to use as the wallpaper on the targeted devices.
    *
    * @param string $val The microsoftLauncherCustomWallpaperImageUrl
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherCustomWallpaperImageUrl($val)
    {
        $this->_propDict["microsoftLauncherCustomWallpaperImageUrl"] = $val;
        return $this;
    }

    /**
    * Gets the microsoftLauncherDockPresenceAllowUserModification
    * Indicates whether or not the user can modify the device dock configuration on the device.
    *
    * @return bool|null The microsoftLauncherDockPresenceAllowUserModification
    */
    public function getMicrosoftLauncherDockPresenceAllowUserModification()
    {
        if (array_key_exists("microsoftLauncherDockPresenceAllowUserModification", $this->_propDict)) {
            return $this->_propDict["microsoftLauncherDockPresenceAllowUserModification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftLauncherDockPresenceAllowUserModification
    * Indicates whether or not the user can modify the device dock configuration on the device.
    *
    * @param bool $val The microsoftLauncherDockPresenceAllowUserModification
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherDockPresenceAllowUserModification($val)
    {
        $this->_propDict["microsoftLauncherDockPresenceAllowUserModification"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftLauncherDockPresenceConfiguration
    * Indicates whether or not you want to configure the device dock. Possible values are: notConfigured, show, hide, disabled.
    *
    * @return MicrosoftLauncherDockPresence|null The microsoftLauncherDockPresenceConfiguration
    */
    public function getMicrosoftLauncherDockPresenceConfiguration()
    {
        if (array_key_exists("microsoftLauncherDockPresenceConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftLauncherDockPresenceConfiguration"], "\Beta\Microsoft\Graph\Model\MicrosoftLauncherDockPresence") || is_null($this->_propDict["microsoftLauncherDockPresenceConfiguration"])) {
                return $this->_propDict["microsoftLauncherDockPresenceConfiguration"];
            } else {
                $this->_propDict["microsoftLauncherDockPresenceConfiguration"] = new MicrosoftLauncherDockPresence($this->_propDict["microsoftLauncherDockPresenceConfiguration"]);
                return $this->_propDict["microsoftLauncherDockPresenceConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the microsoftLauncherDockPresenceConfiguration
    * Indicates whether or not you want to configure the device dock. Possible values are: notConfigured, show, hide, disabled.
    *
    * @param MicrosoftLauncherDockPresence $val The microsoftLauncherDockPresenceConfiguration
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherDockPresenceConfiguration($val)
    {
        $this->_propDict["microsoftLauncherDockPresenceConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the microsoftLauncherFeedAllowUserModification
    * Indicates whether or not the user can modify the launcher feed on the device.
    *
    * @return bool|null The microsoftLauncherFeedAllowUserModification
    */
    public function getMicrosoftLauncherFeedAllowUserModification()
    {
        if (array_key_exists("microsoftLauncherFeedAllowUserModification", $this->_propDict)) {
            return $this->_propDict["microsoftLauncherFeedAllowUserModification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftLauncherFeedAllowUserModification
    * Indicates whether or not the user can modify the launcher feed on the device.
    *
    * @param bool $val The microsoftLauncherFeedAllowUserModification
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherFeedAllowUserModification($val)
    {
        $this->_propDict["microsoftLauncherFeedAllowUserModification"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftLauncherFeedEnabled
    * Indicates whether or not you want to enable the launcher feed on the device.
    *
    * @return bool|null The microsoftLauncherFeedEnabled
    */
    public function getMicrosoftLauncherFeedEnabled()
    {
        if (array_key_exists("microsoftLauncherFeedEnabled", $this->_propDict)) {
            return $this->_propDict["microsoftLauncherFeedEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftLauncherFeedEnabled
    * Indicates whether or not you want to enable the launcher feed on the device.
    *
    * @param bool $val The microsoftLauncherFeedEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherFeedEnabled($val)
    {
        $this->_propDict["microsoftLauncherFeedEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftLauncherSearchBarPlacementConfiguration
    * Indicates the search bar placement configuration on the device. Possible values are: notConfigured, top, bottom, hide.
    *
    * @return MicrosoftLauncherSearchBarPlacement|null The microsoftLauncherSearchBarPlacementConfiguration
    */
    public function getMicrosoftLauncherSearchBarPlacementConfiguration()
    {
        if (array_key_exists("microsoftLauncherSearchBarPlacementConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftLauncherSearchBarPlacementConfiguration"], "\Beta\Microsoft\Graph\Model\MicrosoftLauncherSearchBarPlacement") || is_null($this->_propDict["microsoftLauncherSearchBarPlacementConfiguration"])) {
                return $this->_propDict["microsoftLauncherSearchBarPlacementConfiguration"];
            } else {
                $this->_propDict["microsoftLauncherSearchBarPlacementConfiguration"] = new MicrosoftLauncherSearchBarPlacement($this->_propDict["microsoftLauncherSearchBarPlacementConfiguration"]);
                return $this->_propDict["microsoftLauncherSearchBarPlacementConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the microsoftLauncherSearchBarPlacementConfiguration
    * Indicates the search bar placement configuration on the device. Possible values are: notConfigured, top, bottom, hide.
    *
    * @param MicrosoftLauncherSearchBarPlacement $val The microsoftLauncherSearchBarPlacementConfiguration
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrosoftLauncherSearchBarPlacementConfiguration($val)
    {
        $this->_propDict["microsoftLauncherSearchBarPlacementConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the networkEscapeHatchAllowed
    * Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
    *
    * @return bool|null The networkEscapeHatchAllowed
    */
    public function getNetworkEscapeHatchAllowed()
    {
        if (array_key_exists("networkEscapeHatchAllowed", $this->_propDict)) {
            return $this->_propDict["networkEscapeHatchAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkEscapeHatchAllowed
    * Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
    *
    * @param bool $val The networkEscapeHatchAllowed
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setNetworkEscapeHatchAllowed($val)
    {
        $this->_propDict["networkEscapeHatchAllowed"] = boolval($val);
        return $this;
    }

    /**
    * Gets the nfcBlockOutgoingBeam
    * Indicates whether or not to block NFC outgoing beam.
    *
    * @return bool|null The nfcBlockOutgoingBeam
    */
    public function getNfcBlockOutgoingBeam()
    {
        if (array_key_exists("nfcBlockOutgoingBeam", $this->_propDict)) {
            return $this->_propDict["nfcBlockOutgoingBeam"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nfcBlockOutgoingBeam
    * Indicates whether or not to block NFC outgoing beam.
    *
    * @param bool $val The nfcBlockOutgoingBeam
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setNfcBlockOutgoingBeam($val)
    {
        $this->_propDict["nfcBlockOutgoingBeam"] = boolval($val);
        return $this;
    }

    /**
    * Gets the passwordBlockKeyguard
    * Indicates whether or not the keyguard is disabled.
    *
    * @return bool|null The passwordBlockKeyguard
    */
    public function getPasswordBlockKeyguard()
    {
        if (array_key_exists("passwordBlockKeyguard", $this->_propDict)) {
            return $this->_propDict["passwordBlockKeyguard"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordBlockKeyguard
    * Indicates whether or not the keyguard is disabled.
    *
    * @param bool $val The passwordBlockKeyguard
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordBlockKeyguard($val)
    {
        $this->_propDict["passwordBlockKeyguard"] = boolval($val);
        return $this;
    }


     /**
     * Gets the passwordBlockKeyguardFeatures
    * List of device keyguard features to block. This collection can contain a maximum of 11 elements.
     *
     * @return array|null The passwordBlockKeyguardFeatures
     */
    public function getPasswordBlockKeyguardFeatures()
    {
        if (array_key_exists("passwordBlockKeyguardFeatures", $this->_propDict)) {
           return $this->_propDict["passwordBlockKeyguardFeatures"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordBlockKeyguardFeatures
    * List of device keyguard features to block. This collection can contain a maximum of 11 elements.
    *
    * @param AndroidKeyguardFeature[] $val The passwordBlockKeyguardFeatures
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordBlockKeyguardFeatures($val)
    {
        $this->_propDict["passwordBlockKeyguardFeatures"] = $val;
        return $this;
    }

    /**
    * Gets the passwordExpirationDays
    * Indicates the amount of time that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
    *
    * @return int|null The passwordExpirationDays
    */
    public function getPasswordExpirationDays()
    {
        if (array_key_exists("passwordExpirationDays", $this->_propDict)) {
            return $this->_propDict["passwordExpirationDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordExpirationDays
    * Indicates the amount of time that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
    *
    * @param int $val The passwordExpirationDays
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumLength
    * Indicates the minimum length of the password required on the device. Valid values 4 to 16
    *
    * @return int|null The passwordMinimumLength
    */
    public function getPasswordMinimumLength()
    {
        if (array_key_exists("passwordMinimumLength", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumLength
    * Indicates the minimum length of the password required on the device. Valid values 4 to 16
    *
    * @param int $val The passwordMinimumLength
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumLetterCharacters
    * Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
    *
    * @return int|null The passwordMinimumLetterCharacters
    */
    public function getPasswordMinimumLetterCharacters()
    {
        if (array_key_exists("passwordMinimumLetterCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLetterCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumLetterCharacters
    * Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumLetterCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumLetterCharacters($val)
    {
        $this->_propDict["passwordMinimumLetterCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumLowerCaseCharacters
    * Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
    *
    * @return int|null The passwordMinimumLowerCaseCharacters
    */
    public function getPasswordMinimumLowerCaseCharacters()
    {
        if (array_key_exists("passwordMinimumLowerCaseCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLowerCaseCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumLowerCaseCharacters
    * Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumLowerCaseCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumLowerCaseCharacters($val)
    {
        $this->_propDict["passwordMinimumLowerCaseCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumNonLetterCharacters
    * Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
    *
    * @return int|null The passwordMinimumNonLetterCharacters
    */
    public function getPasswordMinimumNonLetterCharacters()
    {
        if (array_key_exists("passwordMinimumNonLetterCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumNonLetterCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumNonLetterCharacters
    * Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumNonLetterCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumNonLetterCharacters($val)
    {
        $this->_propDict["passwordMinimumNonLetterCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumNumericCharacters
    * Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
    *
    * @return int|null The passwordMinimumNumericCharacters
    */
    public function getPasswordMinimumNumericCharacters()
    {
        if (array_key_exists("passwordMinimumNumericCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumNumericCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumNumericCharacters
    * Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumNumericCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumNumericCharacters($val)
    {
        $this->_propDict["passwordMinimumNumericCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumSymbolCharacters
    * Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
    *
    * @return int|null The passwordMinimumSymbolCharacters
    */
    public function getPasswordMinimumSymbolCharacters()
    {
        if (array_key_exists("passwordMinimumSymbolCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumSymbolCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumSymbolCharacters
    * Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumSymbolCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumSymbolCharacters($val)
    {
        $this->_propDict["passwordMinimumSymbolCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
    *
    * @return int|null The passwordMinimumUpperCaseCharacters
    */
    public function getPasswordMinimumUpperCaseCharacters()
    {
        if (array_key_exists("passwordMinimumUpperCaseCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumUpperCaseCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumUpperCaseCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumUpperCaseCharacters($val)
    {
        $this->_propDict["passwordMinimumUpperCaseCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @return int|null The passwordMinutesOfInactivityBeforeScreenTimeout
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordPreviousPasswordCountToBlock
    * Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
    *
    * @return int|null The passwordPreviousPasswordCountToBlock
    */
    public function getPasswordPreviousPasswordCountToBlock()
    {
        if (array_key_exists("passwordPreviousPasswordCountToBlock", $this->_propDict)) {
            return $this->_propDict["passwordPreviousPasswordCountToBlock"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordPreviousPasswordCountToBlock
    * Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
    *
    * @param int $val The passwordPreviousPasswordCountToBlock
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordPreviousPasswordCountToBlock($val)
    {
        $this->_propDict["passwordPreviousPasswordCountToBlock"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordRequiredType
    * Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    *
    * @return AndroidDeviceOwnerRequiredPasswordType|null The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerRequiredPasswordType") || is_null($this->_propDict["passwordRequiredType"])) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new AndroidDeviceOwnerRequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }

    /**
    * Sets the passwordRequiredType
    * Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    *
    * @param AndroidDeviceOwnerRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }

    /**
    * Gets the passwordRequireUnlock
    * Indicates the timeout period after which a device must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
    *
    * @return AndroidDeviceOwnerRequiredPasswordUnlock|null The passwordRequireUnlock
    */
    public function getPasswordRequireUnlock()
    {
        if (array_key_exists("passwordRequireUnlock", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequireUnlock"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerRequiredPasswordUnlock") || is_null($this->_propDict["passwordRequireUnlock"])) {
                return $this->_propDict["passwordRequireUnlock"];
            } else {
                $this->_propDict["passwordRequireUnlock"] = new AndroidDeviceOwnerRequiredPasswordUnlock($this->_propDict["passwordRequireUnlock"]);
                return $this->_propDict["passwordRequireUnlock"];
            }
        }
        return null;
    }

    /**
    * Sets the passwordRequireUnlock
    * Indicates the timeout period after which a device must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
    *
    * @param AndroidDeviceOwnerRequiredPasswordUnlock $val The passwordRequireUnlock
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordRequireUnlock($val)
    {
        $this->_propDict["passwordRequireUnlock"] = $val;
        return $this;
    }

    /**
    * Gets the passwordSignInFailureCountBeforeFactoryReset
    * Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
    *
    * @return int|null The passwordSignInFailureCountBeforeFactoryReset
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset()
    {
        if (array_key_exists("passwordSignInFailureCountBeforeFactoryReset", $this->_propDict)) {
            return $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordSignInFailureCountBeforeFactoryReset
    * Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
    *
    * @param int $val The passwordSignInFailureCountBeforeFactoryReset
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }

    /**
    * Gets the personalProfileAppsAllowInstallFromUnknownSources
    * Indicates whether the user can install apps from unknown sources on the personal profile.
    *
    * @return bool|null The personalProfileAppsAllowInstallFromUnknownSources
    */
    public function getPersonalProfileAppsAllowInstallFromUnknownSources()
    {
        if (array_key_exists("personalProfileAppsAllowInstallFromUnknownSources", $this->_propDict)) {
            return $this->_propDict["personalProfileAppsAllowInstallFromUnknownSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the personalProfileAppsAllowInstallFromUnknownSources
    * Indicates whether the user can install apps from unknown sources on the personal profile.
    *
    * @param bool $val The personalProfileAppsAllowInstallFromUnknownSources
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPersonalProfileAppsAllowInstallFromUnknownSources($val)
    {
        $this->_propDict["personalProfileAppsAllowInstallFromUnknownSources"] = boolval($val);
        return $this;
    }

    /**
    * Gets the personalProfileCameraBlocked
    * Indicates whether to disable the use of the camera on the personal profile.
    *
    * @return bool|null The personalProfileCameraBlocked
    */
    public function getPersonalProfileCameraBlocked()
    {
        if (array_key_exists("personalProfileCameraBlocked", $this->_propDict)) {
            return $this->_propDict["personalProfileCameraBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the personalProfileCameraBlocked
    * Indicates whether to disable the use of the camera on the personal profile.
    *
    * @param bool $val The personalProfileCameraBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPersonalProfileCameraBlocked($val)
    {
        $this->_propDict["personalProfileCameraBlocked"] = boolval($val);
        return $this;
    }


     /**
     * Gets the personalProfilePersonalApplications
    * Policy applied to applications in the personal profile. This collection can contain a maximum of 500 elements.
     *
     * @return array|null The personalProfilePersonalApplications
     */
    public function getPersonalProfilePersonalApplications()
    {
        if (array_key_exists("personalProfilePersonalApplications", $this->_propDict)) {
           return $this->_propDict["personalProfilePersonalApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the personalProfilePersonalApplications
    * Policy applied to applications in the personal profile. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem[] $val The personalProfilePersonalApplications
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPersonalProfilePersonalApplications($val)
    {
        $this->_propDict["personalProfilePersonalApplications"] = $val;
        return $this;
    }

    /**
    * Gets the personalProfilePlayStoreMode
    * Used together with PersonalProfilePersonalApplications to control how apps in the personal profile are allowed or blocked. Possible values are: notConfigured, blockedApps, allowedApps.
    *
    * @return PersonalProfilePersonalPlayStoreMode|null The personalProfilePlayStoreMode
    */
    public function getPersonalProfilePlayStoreMode()
    {
        if (array_key_exists("personalProfilePlayStoreMode", $this->_propDict)) {
            if (is_a($this->_propDict["personalProfilePlayStoreMode"], "\Beta\Microsoft\Graph\Model\PersonalProfilePersonalPlayStoreMode") || is_null($this->_propDict["personalProfilePlayStoreMode"])) {
                return $this->_propDict["personalProfilePlayStoreMode"];
            } else {
                $this->_propDict["personalProfilePlayStoreMode"] = new PersonalProfilePersonalPlayStoreMode($this->_propDict["personalProfilePlayStoreMode"]);
                return $this->_propDict["personalProfilePlayStoreMode"];
            }
        }
        return null;
    }

    /**
    * Sets the personalProfilePlayStoreMode
    * Used together with PersonalProfilePersonalApplications to control how apps in the personal profile are allowed or blocked. Possible values are: notConfigured, blockedApps, allowedApps.
    *
    * @param PersonalProfilePersonalPlayStoreMode $val The personalProfilePlayStoreMode
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPersonalProfilePlayStoreMode($val)
    {
        $this->_propDict["personalProfilePlayStoreMode"] = $val;
        return $this;
    }

    /**
    * Gets the personalProfileScreenCaptureBlocked
    * Indicates whether to disable the capability to take screenshots on the personal profile.
    *
    * @return bool|null The personalProfileScreenCaptureBlocked
    */
    public function getPersonalProfileScreenCaptureBlocked()
    {
        if (array_key_exists("personalProfileScreenCaptureBlocked", $this->_propDict)) {
            return $this->_propDict["personalProfileScreenCaptureBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the personalProfileScreenCaptureBlocked
    * Indicates whether to disable the capability to take screenshots on the personal profile.
    *
    * @param bool $val The personalProfileScreenCaptureBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPersonalProfileScreenCaptureBlocked($val)
    {
        $this->_propDict["personalProfileScreenCaptureBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the playStoreMode
    * Indicates the Play Store mode of the device. Possible values are: notConfigured, allowList, blockList.
    *
    * @return AndroidDeviceOwnerPlayStoreMode|null The playStoreMode
    */
    public function getPlayStoreMode()
    {
        if (array_key_exists("playStoreMode", $this->_propDict)) {
            if (is_a($this->_propDict["playStoreMode"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerPlayStoreMode") || is_null($this->_propDict["playStoreMode"])) {
                return $this->_propDict["playStoreMode"];
            } else {
                $this->_propDict["playStoreMode"] = new AndroidDeviceOwnerPlayStoreMode($this->_propDict["playStoreMode"]);
                return $this->_propDict["playStoreMode"];
            }
        }
        return null;
    }

    /**
    * Sets the playStoreMode
    * Indicates the Play Store mode of the device. Possible values are: notConfigured, allowList, blockList.
    *
    * @param AndroidDeviceOwnerPlayStoreMode $val The playStoreMode
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPlayStoreMode($val)
    {
        $this->_propDict["playStoreMode"] = $val;
        return $this;
    }

    /**
    * Gets the screenCaptureBlocked
    * Indicates whether or not to disable the capability to take screenshots.
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
    * Indicates whether or not to disable the capability to take screenshots.
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the securityCommonCriteriaModeEnabled
    * Represents the security common criteria mode enabled provided to users when they attempt to modify managed settings on their device.
    *
    * @return bool|null The securityCommonCriteriaModeEnabled
    */
    public function getSecurityCommonCriteriaModeEnabled()
    {
        if (array_key_exists("securityCommonCriteriaModeEnabled", $this->_propDict)) {
            return $this->_propDict["securityCommonCriteriaModeEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityCommonCriteriaModeEnabled
    * Represents the security common criteria mode enabled provided to users when they attempt to modify managed settings on their device.
    *
    * @param bool $val The securityCommonCriteriaModeEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSecurityCommonCriteriaModeEnabled($val)
    {
        $this->_propDict["securityCommonCriteriaModeEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the securityDeveloperSettingsEnabled
    * Indicates whether or not the user is allowed to access developer settings like developer options and safe boot on the device.
    *
    * @return bool|null The securityDeveloperSettingsEnabled
    */
    public function getSecurityDeveloperSettingsEnabled()
    {
        if (array_key_exists("securityDeveloperSettingsEnabled", $this->_propDict)) {
            return $this->_propDict["securityDeveloperSettingsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityDeveloperSettingsEnabled
    * Indicates whether or not the user is allowed to access developer settings like developer options and safe boot on the device.
    *
    * @param bool $val The securityDeveloperSettingsEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSecurityDeveloperSettingsEnabled($val)
    {
        $this->_propDict["securityDeveloperSettingsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the securityRequireVerifyApps
    * Indicates whether or not verify apps is required.
    *
    * @return bool|null The securityRequireVerifyApps
    */
    public function getSecurityRequireVerifyApps()
    {
        if (array_key_exists("securityRequireVerifyApps", $this->_propDict)) {
            return $this->_propDict["securityRequireVerifyApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityRequireVerifyApps
    * Indicates whether or not verify apps is required.
    *
    * @param bool $val The securityRequireVerifyApps
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSecurityRequireVerifyApps($val)
    {
        $this->_propDict["securityRequireVerifyApps"] = boolval($val);
        return $this;
    }

    /**
    * Gets the shortHelpText
    * Represents the customized short help text provided to users when they attempt to modify managed settings on their device.
    *
    * @return AndroidDeviceOwnerUserFacingMessage|null The shortHelpText
    */
    public function getShortHelpText()
    {
        if (array_key_exists("shortHelpText", $this->_propDict)) {
            if (is_a($this->_propDict["shortHelpText"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerUserFacingMessage") || is_null($this->_propDict["shortHelpText"])) {
                return $this->_propDict["shortHelpText"];
            } else {
                $this->_propDict["shortHelpText"] = new AndroidDeviceOwnerUserFacingMessage($this->_propDict["shortHelpText"]);
                return $this->_propDict["shortHelpText"];
            }
        }
        return null;
    }

    /**
    * Sets the shortHelpText
    * Represents the customized short help text provided to users when they attempt to modify managed settings on their device.
    *
    * @param AndroidDeviceOwnerUserFacingMessage $val The shortHelpText
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setShortHelpText($val)
    {
        $this->_propDict["shortHelpText"] = $val;
        return $this;
    }

    /**
    * Gets the statusBarBlocked
    * Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
    *
    * @return bool|null The statusBarBlocked
    */
    public function getStatusBarBlocked()
    {
        if (array_key_exists("statusBarBlocked", $this->_propDict)) {
            return $this->_propDict["statusBarBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statusBarBlocked
    * Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
    *
    * @param bool $val The statusBarBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStatusBarBlocked($val)
    {
        $this->_propDict["statusBarBlocked"] = boolval($val);
        return $this;
    }


     /**
     * Gets the stayOnModes
    * List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
     *
     * @return array|null The stayOnModes
     */
    public function getStayOnModes()
    {
        if (array_key_exists("stayOnModes", $this->_propDict)) {
           return $this->_propDict["stayOnModes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stayOnModes
    * List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
    *
    * @param AndroidDeviceOwnerBatteryPluggedMode[] $val The stayOnModes
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStayOnModes($val)
    {
        $this->_propDict["stayOnModes"] = $val;
        return $this;
    }

    /**
    * Gets the storageAllowUsb
    * Indicates whether or not to allow USB mass storage.
    *
    * @return bool|null The storageAllowUsb
    */
    public function getStorageAllowUsb()
    {
        if (array_key_exists("storageAllowUsb", $this->_propDict)) {
            return $this->_propDict["storageAllowUsb"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageAllowUsb
    * Indicates whether or not to allow USB mass storage.
    *
    * @param bool $val The storageAllowUsb
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStorageAllowUsb($val)
    {
        $this->_propDict["storageAllowUsb"] = boolval($val);
        return $this;
    }

    /**
    * Gets the storageBlockExternalMedia
    * Indicates whether or not to block external media.
    *
    * @return bool|null The storageBlockExternalMedia
    */
    public function getStorageBlockExternalMedia()
    {
        if (array_key_exists("storageBlockExternalMedia", $this->_propDict)) {
            return $this->_propDict["storageBlockExternalMedia"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageBlockExternalMedia
    * Indicates whether or not to block external media.
    *
    * @param bool $val The storageBlockExternalMedia
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStorageBlockExternalMedia($val)
    {
        $this->_propDict["storageBlockExternalMedia"] = boolval($val);
        return $this;
    }

    /**
    * Gets the storageBlockUsbFileTransfer
    * Indicates whether or not to block USB file transfer.
    *
    * @return bool|null The storageBlockUsbFileTransfer
    */
    public function getStorageBlockUsbFileTransfer()
    {
        if (array_key_exists("storageBlockUsbFileTransfer", $this->_propDict)) {
            return $this->_propDict["storageBlockUsbFileTransfer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageBlockUsbFileTransfer
    * Indicates whether or not to block USB file transfer.
    *
    * @param bool $val The storageBlockUsbFileTransfer
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStorageBlockUsbFileTransfer($val)
    {
        $this->_propDict["storageBlockUsbFileTransfer"] = boolval($val);
        return $this;
    }


     /**
     * Gets the systemUpdateFreezePeriods
    * Indicates the annually repeating time periods during which system updates are postponed. This collection can contain a maximum of 500 elements.
     *
     * @return array|null The systemUpdateFreezePeriods
     */
    public function getSystemUpdateFreezePeriods()
    {
        if (array_key_exists("systemUpdateFreezePeriods", $this->_propDict)) {
           return $this->_propDict["systemUpdateFreezePeriods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemUpdateFreezePeriods
    * Indicates the annually repeating time periods during which system updates are postponed. This collection can contain a maximum of 500 elements.
    *
    * @param AndroidDeviceOwnerSystemUpdateFreezePeriod[] $val The systemUpdateFreezePeriods
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemUpdateFreezePeriods($val)
    {
        $this->_propDict["systemUpdateFreezePeriods"] = $val;
        return $this;
    }

    /**
    * Gets the systemUpdateInstallType
    * The type of system update configuration. Possible values are: deviceDefault, postpone, windowed, automatic.
    *
    * @return AndroidDeviceOwnerSystemUpdateInstallType|null The systemUpdateInstallType
    */
    public function getSystemUpdateInstallType()
    {
        if (array_key_exists("systemUpdateInstallType", $this->_propDict)) {
            if (is_a($this->_propDict["systemUpdateInstallType"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerSystemUpdateInstallType") || is_null($this->_propDict["systemUpdateInstallType"])) {
                return $this->_propDict["systemUpdateInstallType"];
            } else {
                $this->_propDict["systemUpdateInstallType"] = new AndroidDeviceOwnerSystemUpdateInstallType($this->_propDict["systemUpdateInstallType"]);
                return $this->_propDict["systemUpdateInstallType"];
            }
        }
        return null;
    }

    /**
    * Sets the systemUpdateInstallType
    * The type of system update configuration. Possible values are: deviceDefault, postpone, windowed, automatic.
    *
    * @param AndroidDeviceOwnerSystemUpdateInstallType $val The systemUpdateInstallType
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemUpdateInstallType($val)
    {
        $this->_propDict["systemUpdateInstallType"] = $val;
        return $this;
    }

    /**
    * Gets the systemUpdateWindowEndMinutesAfterMidnight
    * Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
    *
    * @return int|null The systemUpdateWindowEndMinutesAfterMidnight
    */
    public function getSystemUpdateWindowEndMinutesAfterMidnight()
    {
        if (array_key_exists("systemUpdateWindowEndMinutesAfterMidnight", $this->_propDict)) {
            return $this->_propDict["systemUpdateWindowEndMinutesAfterMidnight"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemUpdateWindowEndMinutesAfterMidnight
    * Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
    *
    * @param int $val The systemUpdateWindowEndMinutesAfterMidnight
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemUpdateWindowEndMinutesAfterMidnight($val)
    {
        $this->_propDict["systemUpdateWindowEndMinutesAfterMidnight"] = intval($val);
        return $this;
    }

    /**
    * Gets the systemUpdateWindowStartMinutesAfterMidnight
    * Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
    *
    * @return int|null The systemUpdateWindowStartMinutesAfterMidnight
    */
    public function getSystemUpdateWindowStartMinutesAfterMidnight()
    {
        if (array_key_exists("systemUpdateWindowStartMinutesAfterMidnight", $this->_propDict)) {
            return $this->_propDict["systemUpdateWindowStartMinutesAfterMidnight"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemUpdateWindowStartMinutesAfterMidnight
    * Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
    *
    * @param int $val The systemUpdateWindowStartMinutesAfterMidnight
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemUpdateWindowStartMinutesAfterMidnight($val)
    {
        $this->_propDict["systemUpdateWindowStartMinutesAfterMidnight"] = intval($val);
        return $this;
    }

    /**
    * Gets the systemWindowsBlocked
    * Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
    *
    * @return bool|null The systemWindowsBlocked
    */
    public function getSystemWindowsBlocked()
    {
        if (array_key_exists("systemWindowsBlocked", $this->_propDict)) {
            return $this->_propDict["systemWindowsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemWindowsBlocked
    * Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
    *
    * @param bool $val The systemWindowsBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemWindowsBlocked($val)
    {
        $this->_propDict["systemWindowsBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the usersBlockAdd
    * Indicates whether or not adding users and profiles is disabled.
    *
    * @return bool|null The usersBlockAdd
    */
    public function getUsersBlockAdd()
    {
        if (array_key_exists("usersBlockAdd", $this->_propDict)) {
            return $this->_propDict["usersBlockAdd"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usersBlockAdd
    * Indicates whether or not adding users and profiles is disabled.
    *
    * @param bool $val The usersBlockAdd
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setUsersBlockAdd($val)
    {
        $this->_propDict["usersBlockAdd"] = boolval($val);
        return $this;
    }

    /**
    * Gets the usersBlockRemove
    * Indicates whether or not to disable removing other users from the device.
    *
    * @return bool|null The usersBlockRemove
    */
    public function getUsersBlockRemove()
    {
        if (array_key_exists("usersBlockRemove", $this->_propDict)) {
            return $this->_propDict["usersBlockRemove"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usersBlockRemove
    * Indicates whether or not to disable removing other users from the device.
    *
    * @param bool $val The usersBlockRemove
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setUsersBlockRemove($val)
    {
        $this->_propDict["usersBlockRemove"] = boolval($val);
        return $this;
    }

    /**
    * Gets the volumeBlockAdjustment
    * Indicates whether or not adjusting the master volume is disabled.
    *
    * @return bool|null The volumeBlockAdjustment
    */
    public function getVolumeBlockAdjustment()
    {
        if (array_key_exists("volumeBlockAdjustment", $this->_propDict)) {
            return $this->_propDict["volumeBlockAdjustment"];
        } else {
            return null;
        }
    }

    /**
    * Sets the volumeBlockAdjustment
    * Indicates whether or not adjusting the master volume is disabled.
    *
    * @param bool $val The volumeBlockAdjustment
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setVolumeBlockAdjustment($val)
    {
        $this->_propDict["volumeBlockAdjustment"] = boolval($val);
        return $this;
    }

    /**
    * Gets the vpnAlwaysOnLockdownMode
    * If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
    *
    * @return bool|null The vpnAlwaysOnLockdownMode
    */
    public function getVpnAlwaysOnLockdownMode()
    {
        if (array_key_exists("vpnAlwaysOnLockdownMode", $this->_propDict)) {
            return $this->_propDict["vpnAlwaysOnLockdownMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vpnAlwaysOnLockdownMode
    * If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
    *
    * @param bool $val The vpnAlwaysOnLockdownMode
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setVpnAlwaysOnLockdownMode($val)
    {
        $this->_propDict["vpnAlwaysOnLockdownMode"] = boolval($val);
        return $this;
    }

    /**
    * Gets the vpnAlwaysOnPackageIdentifier
    * Android app package name for app that will handle an always-on VPN connection.
    *
    * @return string|null The vpnAlwaysOnPackageIdentifier
    */
    public function getVpnAlwaysOnPackageIdentifier()
    {
        if (array_key_exists("vpnAlwaysOnPackageIdentifier", $this->_propDict)) {
            return $this->_propDict["vpnAlwaysOnPackageIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vpnAlwaysOnPackageIdentifier
    * Android app package name for app that will handle an always-on VPN connection.
    *
    * @param string $val The vpnAlwaysOnPackageIdentifier
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setVpnAlwaysOnPackageIdentifier($val)
    {
        $this->_propDict["vpnAlwaysOnPackageIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the wifiBlockEditConfigurations
    * Indicates whether or not to block the user from editing the wifi connection settings.
    *
    * @return bool|null The wifiBlockEditConfigurations
    */
    public function getWifiBlockEditConfigurations()
    {
        if (array_key_exists("wifiBlockEditConfigurations", $this->_propDict)) {
            return $this->_propDict["wifiBlockEditConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiBlockEditConfigurations
    * Indicates whether or not to block the user from editing the wifi connection settings.
    *
    * @param bool $val The wifiBlockEditConfigurations
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWifiBlockEditConfigurations($val)
    {
        $this->_propDict["wifiBlockEditConfigurations"] = boolval($val);
        return $this;
    }

    /**
    * Gets the wifiBlockEditPolicyDefinedConfigurations
    * Indicates whether or not to block the user from editing just the networks defined by the policy.
    *
    * @return bool|null The wifiBlockEditPolicyDefinedConfigurations
    */
    public function getWifiBlockEditPolicyDefinedConfigurations()
    {
        if (array_key_exists("wifiBlockEditPolicyDefinedConfigurations", $this->_propDict)) {
            return $this->_propDict["wifiBlockEditPolicyDefinedConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiBlockEditPolicyDefinedConfigurations
    * Indicates whether or not to block the user from editing just the networks defined by the policy.
    *
    * @param bool $val The wifiBlockEditPolicyDefinedConfigurations
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWifiBlockEditPolicyDefinedConfigurations($val)
    {
        $this->_propDict["wifiBlockEditPolicyDefinedConfigurations"] = boolval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordExpirationDays
    * Indicates the number of days that a work profile password can be set before it expires and a new password will be required. Valid values 1 to 365
    *
    * @return int|null The workProfilePasswordExpirationDays
    */
    public function getWorkProfilePasswordExpirationDays()
    {
        if (array_key_exists("workProfilePasswordExpirationDays", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordExpirationDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordExpirationDays
    * Indicates the number of days that a work profile password can be set before it expires and a new password will be required. Valid values 1 to 365
    *
    * @param int $val The workProfilePasswordExpirationDays
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordExpirationDays($val)
    {
        $this->_propDict["workProfilePasswordExpirationDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordMinimumLength
    * Indicates the minimum length of the work profile password. Valid values 4 to 16
    *
    * @return int|null The workProfilePasswordMinimumLength
    */
    public function getWorkProfilePasswordMinimumLength()
    {
        if (array_key_exists("workProfilePasswordMinimumLength", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordMinimumLength
    * Indicates the minimum length of the work profile password. Valid values 4 to 16
    *
    * @param int $val The workProfilePasswordMinimumLength
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumLength($val)
    {
        $this->_propDict["workProfilePasswordMinimumLength"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordMinimumLetterCharacters
    * Indicates the minimum number of letter characters required for the work profile password. Valid values 1 to 16
    *
    * @return int|null The workProfilePasswordMinimumLetterCharacters
    */
    public function getWorkProfilePasswordMinimumLetterCharacters()
    {
        if (array_key_exists("workProfilePasswordMinimumLetterCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumLetterCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordMinimumLetterCharacters
    * Indicates the minimum number of letter characters required for the work profile password. Valid values 1 to 16
    *
    * @param int $val The workProfilePasswordMinimumLetterCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumLetterCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinimumLetterCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordMinimumLowerCaseCharacters
    * Indicates the minimum number of lower-case characters required for the work profile password. Valid values 1 to 16
    *
    * @return int|null The workProfilePasswordMinimumLowerCaseCharacters
    */
    public function getWorkProfilePasswordMinimumLowerCaseCharacters()
    {
        if (array_key_exists("workProfilePasswordMinimumLowerCaseCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumLowerCaseCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordMinimumLowerCaseCharacters
    * Indicates the minimum number of lower-case characters required for the work profile password. Valid values 1 to 16
    *
    * @param int $val The workProfilePasswordMinimumLowerCaseCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumLowerCaseCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinimumLowerCaseCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordMinimumNonLetterCharacters
    * Indicates the minimum number of non-letter characters required for the work profile password. Valid values 1 to 16
    *
    * @return int|null The workProfilePasswordMinimumNonLetterCharacters
    */
    public function getWorkProfilePasswordMinimumNonLetterCharacters()
    {
        if (array_key_exists("workProfilePasswordMinimumNonLetterCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumNonLetterCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordMinimumNonLetterCharacters
    * Indicates the minimum number of non-letter characters required for the work profile password. Valid values 1 to 16
    *
    * @param int $val The workProfilePasswordMinimumNonLetterCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumNonLetterCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinimumNonLetterCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordMinimumNumericCharacters
    * Indicates the minimum number of numeric characters required for the work profile password. Valid values 1 to 16
    *
    * @return int|null The workProfilePasswordMinimumNumericCharacters
    */
    public function getWorkProfilePasswordMinimumNumericCharacters()
    {
        if (array_key_exists("workProfilePasswordMinimumNumericCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumNumericCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordMinimumNumericCharacters
    * Indicates the minimum number of numeric characters required for the work profile password. Valid values 1 to 16
    *
    * @param int $val The workProfilePasswordMinimumNumericCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumNumericCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinimumNumericCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordMinimumSymbolCharacters
    * Indicates the minimum number of symbol characters required for the work profile password. Valid values 1 to 16
    *
    * @return int|null The workProfilePasswordMinimumSymbolCharacters
    */
    public function getWorkProfilePasswordMinimumSymbolCharacters()
    {
        if (array_key_exists("workProfilePasswordMinimumSymbolCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumSymbolCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordMinimumSymbolCharacters
    * Indicates the minimum number of symbol characters required for the work profile password. Valid values 1 to 16
    *
    * @param int $val The workProfilePasswordMinimumSymbolCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumSymbolCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinimumSymbolCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper-case letter characters required for the work profile password. Valid values 1 to 16
    *
    * @return int|null The workProfilePasswordMinimumUpperCaseCharacters
    */
    public function getWorkProfilePasswordMinimumUpperCaseCharacters()
    {
        if (array_key_exists("workProfilePasswordMinimumUpperCaseCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumUpperCaseCharacters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper-case letter characters required for the work profile password. Valid values 1 to 16
    *
    * @param int $val The workProfilePasswordMinimumUpperCaseCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumUpperCaseCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinimumUpperCaseCharacters"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordPreviousPasswordCountToBlock
    * Indicates the length of the work profile password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
    *
    * @return int|null The workProfilePasswordPreviousPasswordCountToBlock
    */
    public function getWorkProfilePasswordPreviousPasswordCountToBlock()
    {
        if (array_key_exists("workProfilePasswordPreviousPasswordCountToBlock", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordPreviousPasswordCountToBlock"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordPreviousPasswordCountToBlock
    * Indicates the length of the work profile password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
    *
    * @param int $val The workProfilePasswordPreviousPasswordCountToBlock
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordPreviousPasswordCountToBlock($val)
    {
        $this->_propDict["workProfilePasswordPreviousPasswordCountToBlock"] = intval($val);
        return $this;
    }

    /**
    * Gets the workProfilePasswordRequiredType
    * Indicates the minimum password quality required on the work profile password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    *
    * @return AndroidDeviceOwnerRequiredPasswordType|null The workProfilePasswordRequiredType
    */
    public function getWorkProfilePasswordRequiredType()
    {
        if (array_key_exists("workProfilePasswordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["workProfilePasswordRequiredType"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerRequiredPasswordType") || is_null($this->_propDict["workProfilePasswordRequiredType"])) {
                return $this->_propDict["workProfilePasswordRequiredType"];
            } else {
                $this->_propDict["workProfilePasswordRequiredType"] = new AndroidDeviceOwnerRequiredPasswordType($this->_propDict["workProfilePasswordRequiredType"]);
                return $this->_propDict["workProfilePasswordRequiredType"];
            }
        }
        return null;
    }

    /**
    * Sets the workProfilePasswordRequiredType
    * Indicates the minimum password quality required on the work profile password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    *
    * @param AndroidDeviceOwnerRequiredPasswordType $val The workProfilePasswordRequiredType
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordRequiredType($val)
    {
        $this->_propDict["workProfilePasswordRequiredType"] = $val;
        return $this;
    }

    /**
    * Gets the workProfilePasswordRequireUnlock
    * Indicates the timeout period after which a work profile must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
    *
    * @return AndroidDeviceOwnerRequiredPasswordUnlock|null The workProfilePasswordRequireUnlock
    */
    public function getWorkProfilePasswordRequireUnlock()
    {
        if (array_key_exists("workProfilePasswordRequireUnlock", $this->_propDict)) {
            if (is_a($this->_propDict["workProfilePasswordRequireUnlock"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerRequiredPasswordUnlock") || is_null($this->_propDict["workProfilePasswordRequireUnlock"])) {
                return $this->_propDict["workProfilePasswordRequireUnlock"];
            } else {
                $this->_propDict["workProfilePasswordRequireUnlock"] = new AndroidDeviceOwnerRequiredPasswordUnlock($this->_propDict["workProfilePasswordRequireUnlock"]);
                return $this->_propDict["workProfilePasswordRequireUnlock"];
            }
        }
        return null;
    }

    /**
    * Sets the workProfilePasswordRequireUnlock
    * Indicates the timeout period after which a work profile must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
    *
    * @param AndroidDeviceOwnerRequiredPasswordUnlock $val The workProfilePasswordRequireUnlock
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordRequireUnlock($val)
    {
        $this->_propDict["workProfilePasswordRequireUnlock"] = $val;
        return $this;
    }

    /**
    * Gets the workProfilePasswordSignInFailureCountBeforeFactoryReset
    * Indicates the number of times a user can enter an incorrect work profile password before the device is wiped. Valid values 4 to 11
    *
    * @return int|null The workProfilePasswordSignInFailureCountBeforeFactoryReset
    */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset()
    {
        if (array_key_exists("workProfilePasswordSignInFailureCountBeforeFactoryReset", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordSignInFailureCountBeforeFactoryReset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workProfilePasswordSignInFailureCountBeforeFactoryReset
    * Indicates the number of times a user can enter an incorrect work profile password before the device is wiped. Valid values 4 to 11
    *
    * @param int $val The workProfilePasswordSignInFailureCountBeforeFactoryReset
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["workProfilePasswordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }

}
