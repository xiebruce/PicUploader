<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppProtection File
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
* ManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppProtection extends ManagedAppPolicy
{

     /**
     * Gets the allowedDataIngestionLocations
    * Data storage locations where a user may store managed data.
     *
     * @return array|null The allowedDataIngestionLocations
     */
    public function getAllowedDataIngestionLocations()
    {
        if (array_key_exists("allowedDataIngestionLocations", $this->_propDict)) {
           return $this->_propDict["allowedDataIngestionLocations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedDataIngestionLocations
    * Data storage locations where a user may store managed data.
    *
    * @param ManagedAppDataIngestionLocation[] $val The allowedDataIngestionLocations
    *
    * @return ManagedAppProtection
    */
    public function setAllowedDataIngestionLocations($val)
    {
        $this->_propDict["allowedDataIngestionLocations"] = $val;
        return $this;
    }


     /**
     * Gets the allowedDataStorageLocations
    * Data storage locations where a user may store managed data.
     *
     * @return array|null The allowedDataStorageLocations
     */
    public function getAllowedDataStorageLocations()
    {
        if (array_key_exists("allowedDataStorageLocations", $this->_propDict)) {
           return $this->_propDict["allowedDataStorageLocations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedDataStorageLocations
    * Data storage locations where a user may store managed data.
    *
    * @param ManagedAppDataStorageLocation[] $val The allowedDataStorageLocations
    *
    * @return ManagedAppProtection
    */
    public function setAllowedDataStorageLocations($val)
    {
        $this->_propDict["allowedDataStorageLocations"] = $val;
        return $this;
    }

    /**
    * Gets the allowedInboundDataTransferSources
    * Sources from which data is allowed to be transferred. Possible values are: allApps, managedApps, none.
    *
    * @return ManagedAppDataTransferLevel|null The allowedInboundDataTransferSources
    */
    public function getAllowedInboundDataTransferSources()
    {
        if (array_key_exists("allowedInboundDataTransferSources", $this->_propDict)) {
            if (is_a($this->_propDict["allowedInboundDataTransferSources"], "\Beta\Microsoft\Graph\Model\ManagedAppDataTransferLevel") || is_null($this->_propDict["allowedInboundDataTransferSources"])) {
                return $this->_propDict["allowedInboundDataTransferSources"];
            } else {
                $this->_propDict["allowedInboundDataTransferSources"] = new ManagedAppDataTransferLevel($this->_propDict["allowedInboundDataTransferSources"]);
                return $this->_propDict["allowedInboundDataTransferSources"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedInboundDataTransferSources
    * Sources from which data is allowed to be transferred. Possible values are: allApps, managedApps, none.
    *
    * @param ManagedAppDataTransferLevel $val The allowedInboundDataTransferSources
    *
    * @return ManagedAppProtection
    */
    public function setAllowedInboundDataTransferSources($val)
    {
        $this->_propDict["allowedInboundDataTransferSources"] = $val;
        return $this;
    }

    /**
    * Gets the allowedOutboundClipboardSharingExceptionLength
    * Specify the number of characters that may be cut or copied from Org data and accounts to any application. This setting overrides the AllowedOutboundClipboardSharingLevel restriction. Default value of '0' means no exception is allowed.
    *
    * @return int|null The allowedOutboundClipboardSharingExceptionLength
    */
    public function getAllowedOutboundClipboardSharingExceptionLength()
    {
        if (array_key_exists("allowedOutboundClipboardSharingExceptionLength", $this->_propDict)) {
            return $this->_propDict["allowedOutboundClipboardSharingExceptionLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedOutboundClipboardSharingExceptionLength
    * Specify the number of characters that may be cut or copied from Org data and accounts to any application. This setting overrides the AllowedOutboundClipboardSharingLevel restriction. Default value of '0' means no exception is allowed.
    *
    * @param int $val The allowedOutboundClipboardSharingExceptionLength
    *
    * @return ManagedAppProtection
    */
    public function setAllowedOutboundClipboardSharingExceptionLength($val)
    {
        $this->_propDict["allowedOutboundClipboardSharingExceptionLength"] = intval($val);
        return $this;
    }

    /**
    * Gets the allowedOutboundClipboardSharingLevel
    * The level to which the clipboard may be shared between apps on the managed device. Possible values are: allApps, managedAppsWithPasteIn, managedApps, blocked.
    *
    * @return ManagedAppClipboardSharingLevel|null The allowedOutboundClipboardSharingLevel
    */
    public function getAllowedOutboundClipboardSharingLevel()
    {
        if (array_key_exists("allowedOutboundClipboardSharingLevel", $this->_propDict)) {
            if (is_a($this->_propDict["allowedOutboundClipboardSharingLevel"], "\Beta\Microsoft\Graph\Model\ManagedAppClipboardSharingLevel") || is_null($this->_propDict["allowedOutboundClipboardSharingLevel"])) {
                return $this->_propDict["allowedOutboundClipboardSharingLevel"];
            } else {
                $this->_propDict["allowedOutboundClipboardSharingLevel"] = new ManagedAppClipboardSharingLevel($this->_propDict["allowedOutboundClipboardSharingLevel"]);
                return $this->_propDict["allowedOutboundClipboardSharingLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedOutboundClipboardSharingLevel
    * The level to which the clipboard may be shared between apps on the managed device. Possible values are: allApps, managedAppsWithPasteIn, managedApps, blocked.
    *
    * @param ManagedAppClipboardSharingLevel $val The allowedOutboundClipboardSharingLevel
    *
    * @return ManagedAppProtection
    */
    public function setAllowedOutboundClipboardSharingLevel($val)
    {
        $this->_propDict["allowedOutboundClipboardSharingLevel"] = $val;
        return $this;
    }

    /**
    * Gets the allowedOutboundDataTransferDestinations
    * Destinations to which data is allowed to be transferred. Possible values are: allApps, managedApps, none.
    *
    * @return ManagedAppDataTransferLevel|null The allowedOutboundDataTransferDestinations
    */
    public function getAllowedOutboundDataTransferDestinations()
    {
        if (array_key_exists("allowedOutboundDataTransferDestinations", $this->_propDict)) {
            if (is_a($this->_propDict["allowedOutboundDataTransferDestinations"], "\Beta\Microsoft\Graph\Model\ManagedAppDataTransferLevel") || is_null($this->_propDict["allowedOutboundDataTransferDestinations"])) {
                return $this->_propDict["allowedOutboundDataTransferDestinations"];
            } else {
                $this->_propDict["allowedOutboundDataTransferDestinations"] = new ManagedAppDataTransferLevel($this->_propDict["allowedOutboundDataTransferDestinations"]);
                return $this->_propDict["allowedOutboundDataTransferDestinations"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedOutboundDataTransferDestinations
    * Destinations to which data is allowed to be transferred. Possible values are: allApps, managedApps, none.
    *
    * @param ManagedAppDataTransferLevel $val The allowedOutboundDataTransferDestinations
    *
    * @return ManagedAppProtection
    */
    public function setAllowedOutboundDataTransferDestinations($val)
    {
        $this->_propDict["allowedOutboundDataTransferDestinations"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfDeviceComplianceRequired
    * Defines a managed app behavior, either block or wipe, when the device is either rooted or jailbroken, if DeviceComplianceRequired is set to true. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfDeviceComplianceRequired
    */
    public function getAppActionIfDeviceComplianceRequired()
    {
        if (array_key_exists("appActionIfDeviceComplianceRequired", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfDeviceComplianceRequired"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfDeviceComplianceRequired"])) {
                return $this->_propDict["appActionIfDeviceComplianceRequired"];
            } else {
                $this->_propDict["appActionIfDeviceComplianceRequired"] = new ManagedAppRemediationAction($this->_propDict["appActionIfDeviceComplianceRequired"]);
                return $this->_propDict["appActionIfDeviceComplianceRequired"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfDeviceComplianceRequired
    * Defines a managed app behavior, either block or wipe, when the device is either rooted or jailbroken, if DeviceComplianceRequired is set to true. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfDeviceComplianceRequired
    *
    * @return ManagedAppProtection
    */
    public function setAppActionIfDeviceComplianceRequired($val)
    {
        $this->_propDict["appActionIfDeviceComplianceRequired"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfMaximumPinRetriesExceeded
    * Defines a managed app behavior, either block or wipe, based on maximum number of incorrect pin retry attempts. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction|null The appActionIfMaximumPinRetriesExceeded
    */
    public function getAppActionIfMaximumPinRetriesExceeded()
    {
        if (array_key_exists("appActionIfMaximumPinRetriesExceeded", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfMaximumPinRetriesExceeded"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction") || is_null($this->_propDict["appActionIfMaximumPinRetriesExceeded"])) {
                return $this->_propDict["appActionIfMaximumPinRetriesExceeded"];
            } else {
                $this->_propDict["appActionIfMaximumPinRetriesExceeded"] = new ManagedAppRemediationAction($this->_propDict["appActionIfMaximumPinRetriesExceeded"]);
                return $this->_propDict["appActionIfMaximumPinRetriesExceeded"];
            }
        }
        return null;
    }

    /**
    * Sets the appActionIfMaximumPinRetriesExceeded
    * Defines a managed app behavior, either block or wipe, based on maximum number of incorrect pin retry attempts. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfMaximumPinRetriesExceeded
    *
    * @return ManagedAppProtection
    */
    public function setAppActionIfMaximumPinRetriesExceeded($val)
    {
        $this->_propDict["appActionIfMaximumPinRetriesExceeded"] = $val;
        return $this;
    }

    /**
    * Gets the appActionIfUnableToAuthenticateUser
    * If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Possible values are: block, wipe, warn.
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
    * If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfUnableToAuthenticateUser
    *
    * @return ManagedAppProtection
    */
    public function setAppActionIfUnableToAuthenticateUser($val)
    {
        $this->_propDict["appActionIfUnableToAuthenticateUser"] = $val;
        return $this;
    }

    /**
    * Gets the blockDataIngestionIntoOrganizationDocuments
    * Indicates whether a user can bring data into org documents.
    *
    * @return bool|null The blockDataIngestionIntoOrganizationDocuments
    */
    public function getBlockDataIngestionIntoOrganizationDocuments()
    {
        if (array_key_exists("blockDataIngestionIntoOrganizationDocuments", $this->_propDict)) {
            return $this->_propDict["blockDataIngestionIntoOrganizationDocuments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockDataIngestionIntoOrganizationDocuments
    * Indicates whether a user can bring data into org documents.
    *
    * @param bool $val The blockDataIngestionIntoOrganizationDocuments
    *
    * @return ManagedAppProtection
    */
    public function setBlockDataIngestionIntoOrganizationDocuments($val)
    {
        $this->_propDict["blockDataIngestionIntoOrganizationDocuments"] = boolval($val);
        return $this;
    }

    /**
    * Gets the contactSyncBlocked
    * Indicates whether contacts can be synced to the user's device.
    *
    * @return bool|null The contactSyncBlocked
    */
    public function getContactSyncBlocked()
    {
        if (array_key_exists("contactSyncBlocked", $this->_propDict)) {
            return $this->_propDict["contactSyncBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactSyncBlocked
    * Indicates whether contacts can be synced to the user's device.
    *
    * @param bool $val The contactSyncBlocked
    *
    * @return ManagedAppProtection
    */
    public function setContactSyncBlocked($val)
    {
        $this->_propDict["contactSyncBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the dataBackupBlocked
    * Indicates whether the backup of a managed app's data is blocked.
    *
    * @return bool|null The dataBackupBlocked
    */
    public function getDataBackupBlocked()
    {
        if (array_key_exists("dataBackupBlocked", $this->_propDict)) {
            return $this->_propDict["dataBackupBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataBackupBlocked
    * Indicates whether the backup of a managed app's data is blocked.
    *
    * @param bool $val The dataBackupBlocked
    *
    * @return ManagedAppProtection
    */
    public function setDataBackupBlocked($val)
    {
        $this->_propDict["dataBackupBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the deviceComplianceRequired
    * Indicates whether device compliance is required.
    *
    * @return bool|null The deviceComplianceRequired
    */
    public function getDeviceComplianceRequired()
    {
        if (array_key_exists("deviceComplianceRequired", $this->_propDict)) {
            return $this->_propDict["deviceComplianceRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceComplianceRequired
    * Indicates whether device compliance is required.
    *
    * @param bool $val The deviceComplianceRequired
    *
    * @return ManagedAppProtection
    */
    public function setDeviceComplianceRequired($val)
    {
        $this->_propDict["deviceComplianceRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the dialerRestrictionLevel
    * The classes of dialer apps that are allowed to click-to-open a phone number. Possible values are: allApps, managedApps, customApp, blocked.
    *
    * @return ManagedAppPhoneNumberRedirectLevel|null The dialerRestrictionLevel
    */
    public function getDialerRestrictionLevel()
    {
        if (array_key_exists("dialerRestrictionLevel", $this->_propDict)) {
            if (is_a($this->_propDict["dialerRestrictionLevel"], "\Beta\Microsoft\Graph\Model\ManagedAppPhoneNumberRedirectLevel") || is_null($this->_propDict["dialerRestrictionLevel"])) {
                return $this->_propDict["dialerRestrictionLevel"];
            } else {
                $this->_propDict["dialerRestrictionLevel"] = new ManagedAppPhoneNumberRedirectLevel($this->_propDict["dialerRestrictionLevel"]);
                return $this->_propDict["dialerRestrictionLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the dialerRestrictionLevel
    * The classes of dialer apps that are allowed to click-to-open a phone number. Possible values are: allApps, managedApps, customApp, blocked.
    *
    * @param ManagedAppPhoneNumberRedirectLevel $val The dialerRestrictionLevel
    *
    * @return ManagedAppProtection
    */
    public function setDialerRestrictionLevel($val)
    {
        $this->_propDict["dialerRestrictionLevel"] = $val;
        return $this;
    }

    /**
    * Gets the disableAppPinIfDevicePinIsSet
    * Indicates whether use of the app pin is required if the device pin is set.
    *
    * @return bool|null The disableAppPinIfDevicePinIsSet
    */
    public function getDisableAppPinIfDevicePinIsSet()
    {
        if (array_key_exists("disableAppPinIfDevicePinIsSet", $this->_propDict)) {
            return $this->_propDict["disableAppPinIfDevicePinIsSet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disableAppPinIfDevicePinIsSet
    * Indicates whether use of the app pin is required if the device pin is set.
    *
    * @param bool $val The disableAppPinIfDevicePinIsSet
    *
    * @return ManagedAppProtection
    */
    public function setDisableAppPinIfDevicePinIsSet($val)
    {
        $this->_propDict["disableAppPinIfDevicePinIsSet"] = boolval($val);
        return $this;
    }

    /**
    * Gets the fingerprintBlocked
    * Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
    *
    * @return bool|null The fingerprintBlocked
    */
    public function getFingerprintBlocked()
    {
        if (array_key_exists("fingerprintBlocked", $this->_propDict)) {
            return $this->_propDict["fingerprintBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fingerprintBlocked
    * Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
    *
    * @param bool $val The fingerprintBlocked
    *
    * @return ManagedAppProtection
    */
    public function setFingerprintBlocked($val)
    {
        $this->_propDict["fingerprintBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the gracePeriodToBlockAppsDuringOffClockHours
    * A grace period before blocking app access during off clock hours.
    *
    * @return \DateInterval|null The gracePeriodToBlockAppsDuringOffClockHours
    */
    public function getGracePeriodToBlockAppsDuringOffClockHours()
    {
        if (array_key_exists("gracePeriodToBlockAppsDuringOffClockHours", $this->_propDict)) {
            if (is_a($this->_propDict["gracePeriodToBlockAppsDuringOffClockHours"], "\DateInterval") || is_null($this->_propDict["gracePeriodToBlockAppsDuringOffClockHours"])) {
                return $this->_propDict["gracePeriodToBlockAppsDuringOffClockHours"];
            } else {
                $this->_propDict["gracePeriodToBlockAppsDuringOffClockHours"] = new \DateInterval($this->_propDict["gracePeriodToBlockAppsDuringOffClockHours"]);
                return $this->_propDict["gracePeriodToBlockAppsDuringOffClockHours"];
            }
        }
        return null;
    }

    /**
    * Sets the gracePeriodToBlockAppsDuringOffClockHours
    * A grace period before blocking app access during off clock hours.
    *
    * @param \DateInterval $val The gracePeriodToBlockAppsDuringOffClockHours
    *
    * @return ManagedAppProtection
    */
    public function setGracePeriodToBlockAppsDuringOffClockHours($val)
    {
        $this->_propDict["gracePeriodToBlockAppsDuringOffClockHours"] = $val;
        return $this;
    }

    /**
    * Gets the managedBrowser
    * Indicates in which managed browser(s) that internet links should be opened. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. Possible values are: notConfigured, microsoftEdge.
    *
    * @return ManagedBrowserType|null The managedBrowser
    */
    public function getManagedBrowser()
    {
        if (array_key_exists("managedBrowser", $this->_propDict)) {
            if (is_a($this->_propDict["managedBrowser"], "\Beta\Microsoft\Graph\Model\ManagedBrowserType") || is_null($this->_propDict["managedBrowser"])) {
                return $this->_propDict["managedBrowser"];
            } else {
                $this->_propDict["managedBrowser"] = new ManagedBrowserType($this->_propDict["managedBrowser"]);
                return $this->_propDict["managedBrowser"];
            }
        }
        return null;
    }

    /**
    * Sets the managedBrowser
    * Indicates in which managed browser(s) that internet links should be opened. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. Possible values are: notConfigured, microsoftEdge.
    *
    * @param ManagedBrowserType $val The managedBrowser
    *
    * @return ManagedAppProtection
    */
    public function setManagedBrowser($val)
    {
        $this->_propDict["managedBrowser"] = $val;
        return $this;
    }

    /**
    * Gets the managedBrowserToOpenLinksRequired
    * Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
    *
    * @return bool|null The managedBrowserToOpenLinksRequired
    */
    public function getManagedBrowserToOpenLinksRequired()
    {
        if (array_key_exists("managedBrowserToOpenLinksRequired", $this->_propDict)) {
            return $this->_propDict["managedBrowserToOpenLinksRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedBrowserToOpenLinksRequired
    * Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
    *
    * @param bool $val The managedBrowserToOpenLinksRequired
    *
    * @return ManagedAppProtection
    */
    public function setManagedBrowserToOpenLinksRequired($val)
    {
        $this->_propDict["managedBrowserToOpenLinksRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the maximumAllowedDeviceThreatLevel
    * Maximum allowed device threat level, as reported by the MTD app. Possible values are: notConfigured, secured, low, medium, high.
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
    * Maximum allowed device threat level, as reported by the MTD app. Possible values are: notConfigured, secured, low, medium, high.
    *
    * @param ManagedAppDeviceThreatLevel $val The maximumAllowedDeviceThreatLevel
    *
    * @return ManagedAppProtection
    */
    public function setMaximumAllowedDeviceThreatLevel($val)
    {
        $this->_propDict["maximumAllowedDeviceThreatLevel"] = $val;
        return $this;
    }

    /**
    * Gets the maximumPinRetries
    * Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
    *
    * @return int|null The maximumPinRetries
    */
    public function getMaximumPinRetries()
    {
        if (array_key_exists("maximumPinRetries", $this->_propDict)) {
            return $this->_propDict["maximumPinRetries"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumPinRetries
    * Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
    *
    * @param int $val The maximumPinRetries
    *
    * @return ManagedAppProtection
    */
    public function setMaximumPinRetries($val)
    {
        $this->_propDict["maximumPinRetries"] = intval($val);
        return $this;
    }

    /**
    * Gets the maximumRequiredOsVersion
    * Versions bigger than the specified version will block the managed app from accessing company data.
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
    * Versions bigger than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The maximumRequiredOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMaximumRequiredOsVersion($val)
    {
        $this->_propDict["maximumRequiredOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the maximumWarningOsVersion
    * Versions bigger than the specified version will block the managed app from accessing company data.
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
    * Versions bigger than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The maximumWarningOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMaximumWarningOsVersion($val)
    {
        $this->_propDict["maximumWarningOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the maximumWipeOsVersion
    * Versions bigger than the specified version will block the managed app from accessing company data.
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
    * Versions bigger than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The maximumWipeOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMaximumWipeOsVersion($val)
    {
        $this->_propDict["maximumWipeOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumPinLength
    * Minimum pin length required for an app-level pin if PinRequired is set to True
    *
    * @return int|null The minimumPinLength
    */
    public function getMinimumPinLength()
    {
        if (array_key_exists("minimumPinLength", $this->_propDict)) {
            return $this->_propDict["minimumPinLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumPinLength
    * Minimum pin length required for an app-level pin if PinRequired is set to True
    *
    * @param int $val The minimumPinLength
    *
    * @return ManagedAppProtection
    */
    public function setMinimumPinLength($val)
    {
        $this->_propDict["minimumPinLength"] = intval($val);
        return $this;
    }

    /**
    * Gets the minimumRequiredAppVersion
    * Versions less than the specified version will block the managed app from accessing company data.
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
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The minimumRequiredAppVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumRequiredAppVersion($val)
    {
        $this->_propDict["minimumRequiredAppVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumRequiredOsVersion
    * Versions less than the specified version will block the managed app from accessing company data.
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
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The minimumRequiredOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumRequiredOsVersion($val)
    {
        $this->_propDict["minimumRequiredOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWarningAppVersion
    * Versions less than the specified version will result in warning message on the managed app.
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
    * Versions less than the specified version will result in warning message on the managed app.
    *
    * @param string $val The minimumWarningAppVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumWarningAppVersion($val)
    {
        $this->_propDict["minimumWarningAppVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWarningOsVersion
    * Versions less than the specified version will result in warning message on the managed app from accessing company data.
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
    * Versions less than the specified version will result in warning message on the managed app from accessing company data.
    *
    * @param string $val The minimumWarningOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumWarningOsVersion($val)
    {
        $this->_propDict["minimumWarningOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWipeAppVersion
    * Versions less than or equal to the specified version will wipe the managed app and the associated company data.
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
    * Versions less than or equal to the specified version will wipe the managed app and the associated company data.
    *
    * @param string $val The minimumWipeAppVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumWipeAppVersion($val)
    {
        $this->_propDict["minimumWipeAppVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumWipeOsVersion
    * Versions less than or equal to the specified version will wipe the managed app and the associated company data.
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
    * Versions less than or equal to the specified version will wipe the managed app and the associated company data.
    *
    * @param string $val The minimumWipeOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumWipeOsVersion($val)
    {
        $this->_propDict["minimumWipeOsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the mobileThreatDefensePartnerPriority
    * Indicates how to prioritize which Mobile Threat Defense (MTD) partner is enabled for a given platform, when more than one is enabled. An app can only be actively using a single Mobile Threat Defense partner. When NULL, Microsoft Defender will be given preference. Otherwise setting the value to defenderOverThirdPartyPartner or thirdPartyPartnerOverDefender will make explicit which partner to prioritize. Possible values are: null, defenderOverThirdPartyPartner, thirdPartyPartnerOverDefender and unknownFutureValue. Default value is null. Possible values are: defenderOverThirdPartyPartner, thirdPartyPartnerOverDefender, unknownFutureValue.
    *
    * @return MobileThreatDefensePartnerPriority|null The mobileThreatDefensePartnerPriority
    */
    public function getMobileThreatDefensePartnerPriority()
    {
        if (array_key_exists("mobileThreatDefensePartnerPriority", $this->_propDict)) {
            if (is_a($this->_propDict["mobileThreatDefensePartnerPriority"], "\Beta\Microsoft\Graph\Model\MobileThreatDefensePartnerPriority") || is_null($this->_propDict["mobileThreatDefensePartnerPriority"])) {
                return $this->_propDict["mobileThreatDefensePartnerPriority"];
            } else {
                $this->_propDict["mobileThreatDefensePartnerPriority"] = new MobileThreatDefensePartnerPriority($this->_propDict["mobileThreatDefensePartnerPriority"]);
                return $this->_propDict["mobileThreatDefensePartnerPriority"];
            }
        }
        return null;
    }

    /**
    * Sets the mobileThreatDefensePartnerPriority
    * Indicates how to prioritize which Mobile Threat Defense (MTD) partner is enabled for a given platform, when more than one is enabled. An app can only be actively using a single Mobile Threat Defense partner. When NULL, Microsoft Defender will be given preference. Otherwise setting the value to defenderOverThirdPartyPartner or thirdPartyPartnerOverDefender will make explicit which partner to prioritize. Possible values are: null, defenderOverThirdPartyPartner, thirdPartyPartnerOverDefender and unknownFutureValue. Default value is null. Possible values are: defenderOverThirdPartyPartner, thirdPartyPartnerOverDefender, unknownFutureValue.
    *
    * @param MobileThreatDefensePartnerPriority $val The mobileThreatDefensePartnerPriority
    *
    * @return ManagedAppProtection
    */
    public function setMobileThreatDefensePartnerPriority($val)
    {
        $this->_propDict["mobileThreatDefensePartnerPriority"] = $val;
        return $this;
    }

    /**
    * Gets the mobileThreatDefenseRemediationAction
    * Determines what action to take if the mobile threat defense threat threshold isn't met. Warn isn't a supported value for this property. Possible values are: block, wipe, warn.
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
    * Determines what action to take if the mobile threat defense threat threshold isn't met. Warn isn't a supported value for this property. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The mobileThreatDefenseRemediationAction
    *
    * @return ManagedAppProtection
    */
    public function setMobileThreatDefenseRemediationAction($val)
    {
        $this->_propDict["mobileThreatDefenseRemediationAction"] = $val;
        return $this;
    }

    /**
    * Gets the notificationRestriction
    * Specify app notification restriction. Possible values are: allow, blockOrganizationalData, block.
    *
    * @return ManagedAppNotificationRestriction|null The notificationRestriction
    */
    public function getNotificationRestriction()
    {
        if (array_key_exists("notificationRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["notificationRestriction"], "\Beta\Microsoft\Graph\Model\ManagedAppNotificationRestriction") || is_null($this->_propDict["notificationRestriction"])) {
                return $this->_propDict["notificationRestriction"];
            } else {
                $this->_propDict["notificationRestriction"] = new ManagedAppNotificationRestriction($this->_propDict["notificationRestriction"]);
                return $this->_propDict["notificationRestriction"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationRestriction
    * Specify app notification restriction. Possible values are: allow, blockOrganizationalData, block.
    *
    * @param ManagedAppNotificationRestriction $val The notificationRestriction
    *
    * @return ManagedAppProtection
    */
    public function setNotificationRestriction($val)
    {
        $this->_propDict["notificationRestriction"] = $val;
        return $this;
    }

    /**
    * Gets the organizationalCredentialsRequired
    * Indicates whether organizational credentials are required for app use.
    *
    * @return bool|null The organizationalCredentialsRequired
    */
    public function getOrganizationalCredentialsRequired()
    {
        if (array_key_exists("organizationalCredentialsRequired", $this->_propDict)) {
            return $this->_propDict["organizationalCredentialsRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organizationalCredentialsRequired
    * Indicates whether organizational credentials are required for app use.
    *
    * @param bool $val The organizationalCredentialsRequired
    *
    * @return ManagedAppProtection
    */
    public function setOrganizationalCredentialsRequired($val)
    {
        $this->_propDict["organizationalCredentialsRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the periodBeforePinReset
    * TimePeriod before the all-level pin must be reset if PinRequired is set to True.
    *
    * @return \DateInterval|null The periodBeforePinReset
    */
    public function getPeriodBeforePinReset()
    {
        if (array_key_exists("periodBeforePinReset", $this->_propDict)) {
            if (is_a($this->_propDict["periodBeforePinReset"], "\DateInterval") || is_null($this->_propDict["periodBeforePinReset"])) {
                return $this->_propDict["periodBeforePinReset"];
            } else {
                $this->_propDict["periodBeforePinReset"] = new \DateInterval($this->_propDict["periodBeforePinReset"]);
                return $this->_propDict["periodBeforePinReset"];
            }
        }
        return null;
    }

    /**
    * Sets the periodBeforePinReset
    * TimePeriod before the all-level pin must be reset if PinRequired is set to True.
    *
    * @param \DateInterval $val The periodBeforePinReset
    *
    * @return ManagedAppProtection
    */
    public function setPeriodBeforePinReset($val)
    {
        $this->_propDict["periodBeforePinReset"] = $val;
        return $this;
    }

    /**
    * Gets the periodOfflineBeforeAccessCheck
    * The period after which access is checked when the device is not connected to the internet.
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
    * The period after which access is checked when the device is not connected to the internet.
    *
    * @param \DateInterval $val The periodOfflineBeforeAccessCheck
    *
    * @return ManagedAppProtection
    */
    public function setPeriodOfflineBeforeAccessCheck($val)
    {
        $this->_propDict["periodOfflineBeforeAccessCheck"] = $val;
        return $this;
    }

    /**
    * Gets the periodOfflineBeforeWipeIsEnforced
    * The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
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
    * The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
    *
    * @param \DateInterval $val The periodOfflineBeforeWipeIsEnforced
    *
    * @return ManagedAppProtection
    */
    public function setPeriodOfflineBeforeWipeIsEnforced($val)
    {
        $this->_propDict["periodOfflineBeforeWipeIsEnforced"] = $val;
        return $this;
    }

    /**
    * Gets the periodOnlineBeforeAccessCheck
    * The period after which access is checked when the device is connected to the internet.
    *
    * @return \DateInterval|null The periodOnlineBeforeAccessCheck
    */
    public function getPeriodOnlineBeforeAccessCheck()
    {
        if (array_key_exists("periodOnlineBeforeAccessCheck", $this->_propDict)) {
            if (is_a($this->_propDict["periodOnlineBeforeAccessCheck"], "\DateInterval") || is_null($this->_propDict["periodOnlineBeforeAccessCheck"])) {
                return $this->_propDict["periodOnlineBeforeAccessCheck"];
            } else {
                $this->_propDict["periodOnlineBeforeAccessCheck"] = new \DateInterval($this->_propDict["periodOnlineBeforeAccessCheck"]);
                return $this->_propDict["periodOnlineBeforeAccessCheck"];
            }
        }
        return null;
    }

    /**
    * Sets the periodOnlineBeforeAccessCheck
    * The period after which access is checked when the device is connected to the internet.
    *
    * @param \DateInterval $val The periodOnlineBeforeAccessCheck
    *
    * @return ManagedAppProtection
    */
    public function setPeriodOnlineBeforeAccessCheck($val)
    {
        $this->_propDict["periodOnlineBeforeAccessCheck"] = $val;
        return $this;
    }

    /**
    * Gets the pinCharacterSet
    * Character set which may be used for an app-level pin if PinRequired is set to True. Possible values are: numeric, alphanumericAndSymbol.
    *
    * @return ManagedAppPinCharacterSet|null The pinCharacterSet
    */
    public function getPinCharacterSet()
    {
        if (array_key_exists("pinCharacterSet", $this->_propDict)) {
            if (is_a($this->_propDict["pinCharacterSet"], "\Beta\Microsoft\Graph\Model\ManagedAppPinCharacterSet") || is_null($this->_propDict["pinCharacterSet"])) {
                return $this->_propDict["pinCharacterSet"];
            } else {
                $this->_propDict["pinCharacterSet"] = new ManagedAppPinCharacterSet($this->_propDict["pinCharacterSet"]);
                return $this->_propDict["pinCharacterSet"];
            }
        }
        return null;
    }

    /**
    * Sets the pinCharacterSet
    * Character set which may be used for an app-level pin if PinRequired is set to True. Possible values are: numeric, alphanumericAndSymbol.
    *
    * @param ManagedAppPinCharacterSet $val The pinCharacterSet
    *
    * @return ManagedAppProtection
    */
    public function setPinCharacterSet($val)
    {
        $this->_propDict["pinCharacterSet"] = $val;
        return $this;
    }

    /**
    * Gets the pinRequired
    * Indicates whether an app-level pin is required.
    *
    * @return bool|null The pinRequired
    */
    public function getPinRequired()
    {
        if (array_key_exists("pinRequired", $this->_propDict)) {
            return $this->_propDict["pinRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pinRequired
    * Indicates whether an app-level pin is required.
    *
    * @param bool $val The pinRequired
    *
    * @return ManagedAppProtection
    */
    public function setPinRequired($val)
    {
        $this->_propDict["pinRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the pinRequiredInsteadOfBiometricTimeout
    * Timeout in minutes for an app pin instead of non biometrics passcode
    *
    * @return \DateInterval|null The pinRequiredInsteadOfBiometricTimeout
    */
    public function getPinRequiredInsteadOfBiometricTimeout()
    {
        if (array_key_exists("pinRequiredInsteadOfBiometricTimeout", $this->_propDict)) {
            if (is_a($this->_propDict["pinRequiredInsteadOfBiometricTimeout"], "\DateInterval") || is_null($this->_propDict["pinRequiredInsteadOfBiometricTimeout"])) {
                return $this->_propDict["pinRequiredInsteadOfBiometricTimeout"];
            } else {
                $this->_propDict["pinRequiredInsteadOfBiometricTimeout"] = new \DateInterval($this->_propDict["pinRequiredInsteadOfBiometricTimeout"]);
                return $this->_propDict["pinRequiredInsteadOfBiometricTimeout"];
            }
        }
        return null;
    }

    /**
    * Sets the pinRequiredInsteadOfBiometricTimeout
    * Timeout in minutes for an app pin instead of non biometrics passcode
    *
    * @param \DateInterval $val The pinRequiredInsteadOfBiometricTimeout
    *
    * @return ManagedAppProtection
    */
    public function setPinRequiredInsteadOfBiometricTimeout($val)
    {
        $this->_propDict["pinRequiredInsteadOfBiometricTimeout"] = $val;
        return $this;
    }

    /**
    * Gets the previousPinBlockCount
    * Requires a pin to be unique from the number specified in this property.
    *
    * @return int|null The previousPinBlockCount
    */
    public function getPreviousPinBlockCount()
    {
        if (array_key_exists("previousPinBlockCount", $this->_propDict)) {
            return $this->_propDict["previousPinBlockCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previousPinBlockCount
    * Requires a pin to be unique from the number specified in this property.
    *
    * @param int $val The previousPinBlockCount
    *
    * @return ManagedAppProtection
    */
    public function setPreviousPinBlockCount($val)
    {
        $this->_propDict["previousPinBlockCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the printBlocked
    * Indicates whether printing is allowed from managed apps.
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
    * Indicates whether printing is allowed from managed apps.
    *
    * @param bool $val The printBlocked
    *
    * @return ManagedAppProtection
    */
    public function setPrintBlocked($val)
    {
        $this->_propDict["printBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the saveAsBlocked
    * Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
    *
    * @return bool|null The saveAsBlocked
    */
    public function getSaveAsBlocked()
    {
        if (array_key_exists("saveAsBlocked", $this->_propDict)) {
            return $this->_propDict["saveAsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the saveAsBlocked
    * Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
    *
    * @param bool $val The saveAsBlocked
    *
    * @return ManagedAppProtection
    */
    public function setSaveAsBlocked($val)
    {
        $this->_propDict["saveAsBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the simplePinBlocked
    * Indicates whether simplePin is blocked.
    *
    * @return bool|null The simplePinBlocked
    */
    public function getSimplePinBlocked()
    {
        if (array_key_exists("simplePinBlocked", $this->_propDict)) {
            return $this->_propDict["simplePinBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the simplePinBlocked
    * Indicates whether simplePin is blocked.
    *
    * @param bool $val The simplePinBlocked
    *
    * @return ManagedAppProtection
    */
    public function setSimplePinBlocked($val)
    {
        $this->_propDict["simplePinBlocked"] = boolval($val);
        return $this;
    }

}
