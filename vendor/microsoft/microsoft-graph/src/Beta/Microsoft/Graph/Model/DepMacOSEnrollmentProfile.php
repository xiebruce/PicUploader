<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepMacOSEnrollmentProfile File
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
* DepMacOSEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DepMacOSEnrollmentProfile extends DepEnrollmentBaseProfile
{
    /**
    * Gets the accessibilityScreenDisabled
    * Indicates if Accessibility screen is disabled
    *
    * @return bool|null The accessibilityScreenDisabled
    */
    public function getAccessibilityScreenDisabled()
    {
        if (array_key_exists("accessibilityScreenDisabled", $this->_propDict)) {
            return $this->_propDict["accessibilityScreenDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessibilityScreenDisabled
    * Indicates if Accessibility screen is disabled
    *
    * @param bool $val The accessibilityScreenDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setAccessibilityScreenDisabled($val)
    {
        $this->_propDict["accessibilityScreenDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the autoUnlockWithWatchDisabled
    * Indicates if UnlockWithWatch screen is disabled
    *
    * @return bool|null The autoUnlockWithWatchDisabled
    */
    public function getAutoUnlockWithWatchDisabled()
    {
        if (array_key_exists("autoUnlockWithWatchDisabled", $this->_propDict)) {
            return $this->_propDict["autoUnlockWithWatchDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoUnlockWithWatchDisabled
    * Indicates if UnlockWithWatch screen is disabled
    *
    * @param bool $val The autoUnlockWithWatchDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setAutoUnlockWithWatchDisabled($val)
    {
        $this->_propDict["autoUnlockWithWatchDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the chooseYourLockScreenDisabled
    * Indicates if iCloud Documents and Desktop screen is disabled
    *
    * @return bool|null The chooseYourLockScreenDisabled
    */
    public function getChooseYourLockScreenDisabled()
    {
        if (array_key_exists("chooseYourLockScreenDisabled", $this->_propDict)) {
            return $this->_propDict["chooseYourLockScreenDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the chooseYourLockScreenDisabled
    * Indicates if iCloud Documents and Desktop screen is disabled
    *
    * @param bool $val The chooseYourLockScreenDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setChooseYourLockScreenDisabled($val)
    {
        $this->_propDict["chooseYourLockScreenDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the dontAutoPopulatePrimaryAccountInfo
    * Indicates whether Setup Assistant will auto populate the primary account information
    *
    * @return bool|null The dontAutoPopulatePrimaryAccountInfo
    */
    public function getDontAutoPopulatePrimaryAccountInfo()
    {
        if (array_key_exists("dontAutoPopulatePrimaryAccountInfo", $this->_propDict)) {
            return $this->_propDict["dontAutoPopulatePrimaryAccountInfo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dontAutoPopulatePrimaryAccountInfo
    * Indicates whether Setup Assistant will auto populate the primary account information
    *
    * @param bool $val The dontAutoPopulatePrimaryAccountInfo
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setDontAutoPopulatePrimaryAccountInfo($val)
    {
        $this->_propDict["dontAutoPopulatePrimaryAccountInfo"] = boolval($val);
        return $this;
    }

    /**
    * Gets the enableRestrictEditing
    * Indicates whether the user will enable blockediting
    *
    * @return bool|null The enableRestrictEditing
    */
    public function getEnableRestrictEditing()
    {
        if (array_key_exists("enableRestrictEditing", $this->_propDict)) {
            return $this->_propDict["enableRestrictEditing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableRestrictEditing
    * Indicates whether the user will enable blockediting
    *
    * @param bool $val The enableRestrictEditing
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setEnableRestrictEditing($val)
    {
        $this->_propDict["enableRestrictEditing"] = boolval($val);
        return $this;
    }

    /**
    * Gets the fileVaultDisabled
    * Indicates if file vault is disabled
    *
    * @return bool|null The fileVaultDisabled
    */
    public function getFileVaultDisabled()
    {
        if (array_key_exists("fileVaultDisabled", $this->_propDict)) {
            return $this->_propDict["fileVaultDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileVaultDisabled
    * Indicates if file vault is disabled
    *
    * @param bool $val The fileVaultDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setFileVaultDisabled($val)
    {
        $this->_propDict["fileVaultDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the iCloudDiagnosticsDisabled
    * Indicates if iCloud Analytics screen is disabled
    *
    * @return bool|null The iCloudDiagnosticsDisabled
    */
    public function getICloudDiagnosticsDisabled()
    {
        if (array_key_exists("iCloudDiagnosticsDisabled", $this->_propDict)) {
            return $this->_propDict["iCloudDiagnosticsDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iCloudDiagnosticsDisabled
    * Indicates if iCloud Analytics screen is disabled
    *
    * @param bool $val The iCloudDiagnosticsDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setICloudDiagnosticsDisabled($val)
    {
        $this->_propDict["iCloudDiagnosticsDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the iCloudStorageDisabled
    * Indicates if iCloud Documents and Desktop screen is disabled
    *
    * @return bool|null The iCloudStorageDisabled
    */
    public function getICloudStorageDisabled()
    {
        if (array_key_exists("iCloudStorageDisabled", $this->_propDict)) {
            return $this->_propDict["iCloudStorageDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iCloudStorageDisabled
    * Indicates if iCloud Documents and Desktop screen is disabled
    *
    * @param bool $val The iCloudStorageDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setICloudStorageDisabled($val)
    {
        $this->_propDict["iCloudStorageDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isLocalPrimaryAccount
    * Indicates whether the profile is a local account
    *
    * @return bool|null The isLocalPrimaryAccount
    */
    public function getIsLocalPrimaryAccount()
    {
        if (array_key_exists("isLocalPrimaryAccount", $this->_propDict)) {
            return $this->_propDict["isLocalPrimaryAccount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLocalPrimaryAccount
    * Indicates whether the profile is a local account
    *
    * @param bool $val The isLocalPrimaryAccount
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setIsLocalPrimaryAccount($val)
    {
        $this->_propDict["isLocalPrimaryAccount"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isPrimaryUser
    * Indicates whether the profile is a primary user
    *
    * @return bool|null The isPrimaryUser
    */
    public function getIsPrimaryUser()
    {
        if (array_key_exists("isPrimaryUser", $this->_propDict)) {
            return $this->_propDict["isPrimaryUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPrimaryUser
    * Indicates whether the profile is a primary user
    *
    * @param bool $val The isPrimaryUser
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setIsPrimaryUser($val)
    {
        $this->_propDict["isPrimaryUser"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lockPrimaryAccountInfo
    * Indicates whether the primary account information will be locked
    *
    * @return bool|null The lockPrimaryAccountInfo
    */
    public function getLockPrimaryAccountInfo()
    {
        if (array_key_exists("lockPrimaryAccountInfo", $this->_propDict)) {
            return $this->_propDict["lockPrimaryAccountInfo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lockPrimaryAccountInfo
    * Indicates whether the primary account information will be locked
    *
    * @param bool $val The lockPrimaryAccountInfo
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setLockPrimaryAccountInfo($val)
    {
        $this->_propDict["lockPrimaryAccountInfo"] = boolval($val);
        return $this;
    }

    /**
    * Gets the managedLocalUserShortName
    * Indicates whether or not this is the short name of the local account to manage
    *
    * @return bool|null The managedLocalUserShortName
    */
    public function getManagedLocalUserShortName()
    {
        if (array_key_exists("managedLocalUserShortName", $this->_propDict)) {
            return $this->_propDict["managedLocalUserShortName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedLocalUserShortName
    * Indicates whether or not this is the short name of the local account to manage
    *
    * @param bool $val The managedLocalUserShortName
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setManagedLocalUserShortName($val)
    {
        $this->_propDict["managedLocalUserShortName"] = boolval($val);
        return $this;
    }

    /**
    * Gets the passCodeDisabled
    * Indicates if Passcode setup pane is disabled
    *
    * @return bool|null The passCodeDisabled
    */
    public function getPassCodeDisabled()
    {
        if (array_key_exists("passCodeDisabled", $this->_propDict)) {
            return $this->_propDict["passCodeDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passCodeDisabled
    * Indicates if Passcode setup pane is disabled
    *
    * @param bool $val The passCodeDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setPassCodeDisabled($val)
    {
        $this->_propDict["passCodeDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the prefillAccountInfo
    * Indicates whether the user will prefill their account info
    *
    * @return bool|null The prefillAccountInfo
    */
    public function getPrefillAccountInfo()
    {
        if (array_key_exists("prefillAccountInfo", $this->_propDict)) {
            return $this->_propDict["prefillAccountInfo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prefillAccountInfo
    * Indicates whether the user will prefill their account info
    *
    * @param bool $val The prefillAccountInfo
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setPrefillAccountInfo($val)
    {
        $this->_propDict["prefillAccountInfo"] = boolval($val);
        return $this;
    }

    /**
    * Gets the primaryAccountFullName
    * Indicates what the full name for the primary account is
    *
    * @return string|null The primaryAccountFullName
    */
    public function getPrimaryAccountFullName()
    {
        if (array_key_exists("primaryAccountFullName", $this->_propDict)) {
            return $this->_propDict["primaryAccountFullName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryAccountFullName
    * Indicates what the full name for the primary account is
    *
    * @param string $val The primaryAccountFullName
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setPrimaryAccountFullName($val)
    {
        $this->_propDict["primaryAccountFullName"] = $val;
        return $this;
    }

    /**
    * Gets the primaryAccountUserName
    * Indicates what the account name for the primary account is
    *
    * @return string|null The primaryAccountUserName
    */
    public function getPrimaryAccountUserName()
    {
        if (array_key_exists("primaryAccountUserName", $this->_propDict)) {
            return $this->_propDict["primaryAccountUserName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryAccountUserName
    * Indicates what the account name for the primary account is
    *
    * @param string $val The primaryAccountUserName
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setPrimaryAccountUserName($val)
    {
        $this->_propDict["primaryAccountUserName"] = $val;
        return $this;
    }

    /**
    * Gets the primaryUser
    * Indicates who the primary user of the profile is
    *
    * @return string|null The primaryUser
    */
    public function getPrimaryUser()
    {
        if (array_key_exists("primaryUser", $this->_propDict)) {
            return $this->_propDict["primaryUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryUser
    * Indicates who the primary user of the profile is
    *
    * @param string $val The primaryUser
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setPrimaryUser($val)
    {
        $this->_propDict["primaryUser"] = $val;
        return $this;
    }

    /**
    * Gets the primaryUserFullName
    * Indicates who the primary user of the profile is
    *
    * @return string|null The primaryUserFullName
    */
    public function getPrimaryUserFullName()
    {
        if (array_key_exists("primaryUserFullName", $this->_propDict)) {
            return $this->_propDict["primaryUserFullName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryUserFullName
    * Indicates who the primary user of the profile is
    *
    * @param string $val The primaryUserFullName
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setPrimaryUserFullName($val)
    {
        $this->_propDict["primaryUserFullName"] = $val;
        return $this;
    }

    /**
    * Gets the registrationDisabled
    * Indicates if registration is disabled
    *
    * @return bool|null The registrationDisabled
    */
    public function getRegistrationDisabled()
    {
        if (array_key_exists("registrationDisabled", $this->_propDict)) {
            return $this->_propDict["registrationDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrationDisabled
    * Indicates if registration is disabled
    *
    * @param bool $val The registrationDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setRegistrationDisabled($val)
    {
        $this->_propDict["registrationDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the requestRequiresNetworkTether
    * Indicates if the device is network-tethered to run the command
    *
    * @return bool|null The requestRequiresNetworkTether
    */
    public function getRequestRequiresNetworkTether()
    {
        if (array_key_exists("requestRequiresNetworkTether", $this->_propDict)) {
            return $this->_propDict["requestRequiresNetworkTether"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestRequiresNetworkTether
    * Indicates if the device is network-tethered to run the command
    *
    * @param bool $val The requestRequiresNetworkTether
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setRequestRequiresNetworkTether($val)
    {
        $this->_propDict["requestRequiresNetworkTether"] = boolval($val);
        return $this;
    }

    /**
    * Gets the setPrimarySetupAccountAsRegularUser
    * Indicates whether Setup Assistant will set the account as a regular user
    *
    * @return bool|null The setPrimarySetupAccountAsRegularUser
    */
    public function getSetPrimarySetupAccountAsRegularUser()
    {
        if (array_key_exists("setPrimarySetupAccountAsRegularUser", $this->_propDict)) {
            return $this->_propDict["setPrimarySetupAccountAsRegularUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the setPrimarySetupAccountAsRegularUser
    * Indicates whether Setup Assistant will set the account as a regular user
    *
    * @param bool $val The setPrimarySetupAccountAsRegularUser
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setSetPrimarySetupAccountAsRegularUser($val)
    {
        $this->_propDict["setPrimarySetupAccountAsRegularUser"] = boolval($val);
        return $this;
    }

    /**
    * Gets the skipPrimarySetupAccountCreation
    * Indicates whether Setup Assistant will skip the user interface for primary account setup
    *
    * @return bool|null The skipPrimarySetupAccountCreation
    */
    public function getSkipPrimarySetupAccountCreation()
    {
        if (array_key_exists("skipPrimarySetupAccountCreation", $this->_propDict)) {
            return $this->_propDict["skipPrimarySetupAccountCreation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skipPrimarySetupAccountCreation
    * Indicates whether Setup Assistant will skip the user interface for primary account setup
    *
    * @param bool $val The skipPrimarySetupAccountCreation
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setSkipPrimarySetupAccountCreation($val)
    {
        $this->_propDict["skipPrimarySetupAccountCreation"] = boolval($val);
        return $this;
    }

    /**
    * Gets the zoomDisabled
    * Indicates if zoom setup pane is disabled
    *
    * @return bool|null The zoomDisabled
    */
    public function getZoomDisabled()
    {
        if (array_key_exists("zoomDisabled", $this->_propDict)) {
            return $this->_propDict["zoomDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the zoomDisabled
    * Indicates if zoom setup pane is disabled
    *
    * @param bool $val The zoomDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setZoomDisabled($val)
    {
        $this->_propDict["zoomDisabled"] = boolval($val);
        return $this;
    }

}
