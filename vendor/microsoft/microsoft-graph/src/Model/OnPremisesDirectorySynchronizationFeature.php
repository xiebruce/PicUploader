<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesDirectorySynchronizationFeature File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* OnPremisesDirectorySynchronizationFeature class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesDirectorySynchronizationFeature extends Entity
{
    /**
    * Gets the blockCloudObjectTakeoverThroughHardMatchEnabled
    * Used to block cloud object takeover via source anchor hard match if enabled.
    *
    * @return bool|null The blockCloudObjectTakeoverThroughHardMatchEnabled
    */
    public function getBlockCloudObjectTakeoverThroughHardMatchEnabled()
    {
        if (array_key_exists("blockCloudObjectTakeoverThroughHardMatchEnabled", $this->_propDict)) {
            return $this->_propDict["blockCloudObjectTakeoverThroughHardMatchEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockCloudObjectTakeoverThroughHardMatchEnabled
    * Used to block cloud object takeover via source anchor hard match if enabled.
    *
    * @param bool $val The value of the blockCloudObjectTakeoverThroughHardMatchEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setBlockCloudObjectTakeoverThroughHardMatchEnabled($val)
    {
        $this->_propDict["blockCloudObjectTakeoverThroughHardMatchEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the blockSoftMatchEnabled
    * Use to block soft match for all objects if enabled for the  tenant. Customers are encouraged to enable this feature and keep it enabled until soft matching is required again for their tenancy. This flag should be enabled again after any soft matching has been completed and is no longer needed.
    *
    * @return bool|null The blockSoftMatchEnabled
    */
    public function getBlockSoftMatchEnabled()
    {
        if (array_key_exists("blockSoftMatchEnabled", $this->_propDict)) {
            return $this->_propDict["blockSoftMatchEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockSoftMatchEnabled
    * Use to block soft match for all objects if enabled for the  tenant. Customers are encouraged to enable this feature and keep it enabled until soft matching is required again for their tenancy. This flag should be enabled again after any soft matching has been completed and is no longer needed.
    *
    * @param bool $val The value of the blockSoftMatchEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setBlockSoftMatchEnabled($val)
    {
        $this->_propDict["blockSoftMatchEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the bypassDirSyncOverridesEnabled
    * When true, persists the values of Mobile and OtherMobile in on-premises AD during sync cycles instead of values of MobilePhone or AlternateMobilePhones in Azure AD.
    *
    * @return bool|null The bypassDirSyncOverridesEnabled
    */
    public function getBypassDirSyncOverridesEnabled()
    {
        if (array_key_exists("bypassDirSyncOverridesEnabled", $this->_propDict)) {
            return $this->_propDict["bypassDirSyncOverridesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bypassDirSyncOverridesEnabled
    * When true, persists the values of Mobile and OtherMobile in on-premises AD during sync cycles instead of values of MobilePhone or AlternateMobilePhones in Azure AD.
    *
    * @param bool $val The value of the bypassDirSyncOverridesEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setBypassDirSyncOverridesEnabled($val)
    {
        $this->_propDict["bypassDirSyncOverridesEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the cloudPasswordPolicyForPasswordSyncedUsersEnabled
    * Used to indicate that cloud password policy applies to users whose passwords are synchronized from on-premises.
    *
    * @return bool|null The cloudPasswordPolicyForPasswordSyncedUsersEnabled
    */
    public function getCloudPasswordPolicyForPasswordSyncedUsersEnabled()
    {
        if (array_key_exists("cloudPasswordPolicyForPasswordSyncedUsersEnabled", $this->_propDict)) {
            return $this->_propDict["cloudPasswordPolicyForPasswordSyncedUsersEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPasswordPolicyForPasswordSyncedUsersEnabled
    * Used to indicate that cloud password policy applies to users whose passwords are synchronized from on-premises.
    *
    * @param bool $val The value of the cloudPasswordPolicyForPasswordSyncedUsersEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setCloudPasswordPolicyForPasswordSyncedUsersEnabled($val)
    {
        $this->_propDict["cloudPasswordPolicyForPasswordSyncedUsersEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the concurrentCredentialUpdateEnabled
    * Used to enable concurrent user credentials update in OrgId.
    *
    * @return bool|null The concurrentCredentialUpdateEnabled
    */
    public function getConcurrentCredentialUpdateEnabled()
    {
        if (array_key_exists("concurrentCredentialUpdateEnabled", $this->_propDict)) {
            return $this->_propDict["concurrentCredentialUpdateEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the concurrentCredentialUpdateEnabled
    * Used to enable concurrent user credentials update in OrgId.
    *
    * @param bool $val The value of the concurrentCredentialUpdateEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setConcurrentCredentialUpdateEnabled($val)
    {
        $this->_propDict["concurrentCredentialUpdateEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the concurrentOrgIdProvisioningEnabled
    * Used to enable concurrent user creation in OrgId.
    *
    * @return bool|null The concurrentOrgIdProvisioningEnabled
    */
    public function getConcurrentOrgIdProvisioningEnabled()
    {
        if (array_key_exists("concurrentOrgIdProvisioningEnabled", $this->_propDict)) {
            return $this->_propDict["concurrentOrgIdProvisioningEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the concurrentOrgIdProvisioningEnabled
    * Used to enable concurrent user creation in OrgId.
    *
    * @param bool $val The value of the concurrentOrgIdProvisioningEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setConcurrentOrgIdProvisioningEnabled($val)
    {
        $this->_propDict["concurrentOrgIdProvisioningEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the deviceWritebackEnabled
    * Used to indicate that device write-back is enabled.
    *
    * @return bool|null The deviceWritebackEnabled
    */
    public function getDeviceWritebackEnabled()
    {
        if (array_key_exists("deviceWritebackEnabled", $this->_propDict)) {
            return $this->_propDict["deviceWritebackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceWritebackEnabled
    * Used to indicate that device write-back is enabled.
    *
    * @param bool $val The value of the deviceWritebackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setDeviceWritebackEnabled($val)
    {
        $this->_propDict["deviceWritebackEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the directoryExtensionsEnabled
    * Used to indicate that directory extensions are being synced from on-premises AD to Azure AD.
    *
    * @return bool|null The directoryExtensionsEnabled
    */
    public function getDirectoryExtensionsEnabled()
    {
        if (array_key_exists("directoryExtensionsEnabled", $this->_propDict)) {
            return $this->_propDict["directoryExtensionsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the directoryExtensionsEnabled
    * Used to indicate that directory extensions are being synced from on-premises AD to Azure AD.
    *
    * @param bool $val The value of the directoryExtensionsEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setDirectoryExtensionsEnabled($val)
    {
        $this->_propDict["directoryExtensionsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the fopeConflictResolutionEnabled
    * Used to indicate that for a Microsoft Forefront Online Protection for Exchange (FOPE) migrated tenant, the conflicting proxy address should be migrated over.
    *
    * @return bool|null The fopeConflictResolutionEnabled
    */
    public function getFopeConflictResolutionEnabled()
    {
        if (array_key_exists("fopeConflictResolutionEnabled", $this->_propDict)) {
            return $this->_propDict["fopeConflictResolutionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fopeConflictResolutionEnabled
    * Used to indicate that for a Microsoft Forefront Online Protection for Exchange (FOPE) migrated tenant, the conflicting proxy address should be migrated over.
    *
    * @param bool $val The value of the fopeConflictResolutionEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setFopeConflictResolutionEnabled($val)
    {
        $this->_propDict["fopeConflictResolutionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the groupWriteBackEnabled
    * Used to enable object-level group writeback feature for additional group types.
    *
    * @return bool|null The groupWriteBackEnabled
    */
    public function getGroupWriteBackEnabled()
    {
        if (array_key_exists("groupWriteBackEnabled", $this->_propDict)) {
            return $this->_propDict["groupWriteBackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupWriteBackEnabled
    * Used to enable object-level group writeback feature for additional group types.
    *
    * @param bool $val The value of the groupWriteBackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setGroupWriteBackEnabled($val)
    {
        $this->_propDict["groupWriteBackEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the passwordSyncEnabled
    * Used to indicate on-premise password synchronization is enabled.
    *
    * @return bool|null The passwordSyncEnabled
    */
    public function getPasswordSyncEnabled()
    {
        if (array_key_exists("passwordSyncEnabled", $this->_propDict)) {
            return $this->_propDict["passwordSyncEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordSyncEnabled
    * Used to indicate on-premise password synchronization is enabled.
    *
    * @param bool $val The value of the passwordSyncEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setPasswordSyncEnabled($val)
    {
        $this->_propDict["passwordSyncEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the passwordWritebackEnabled
    * Used to indicate that writeback of password resets from Azure AD to on-premises AD is enabled.
    *
    * @return bool|null The passwordWritebackEnabled
    */
    public function getPasswordWritebackEnabled()
    {
        if (array_key_exists("passwordWritebackEnabled", $this->_propDict)) {
            return $this->_propDict["passwordWritebackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordWritebackEnabled
    * Used to indicate that writeback of password resets from Azure AD to on-premises AD is enabled.
    *
    * @param bool $val The value of the passwordWritebackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setPasswordWritebackEnabled($val)
    {
        $this->_propDict["passwordWritebackEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the quarantineUponProxyAddressesConflictEnabled
    * Used to indicate that we should quarantine objects with conflicting proxy address.
    *
    * @return bool|null The quarantineUponProxyAddressesConflictEnabled
    */
    public function getQuarantineUponProxyAddressesConflictEnabled()
    {
        if (array_key_exists("quarantineUponProxyAddressesConflictEnabled", $this->_propDict)) {
            return $this->_propDict["quarantineUponProxyAddressesConflictEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quarantineUponProxyAddressesConflictEnabled
    * Used to indicate that we should quarantine objects with conflicting proxy address.
    *
    * @param bool $val The value of the quarantineUponProxyAddressesConflictEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setQuarantineUponProxyAddressesConflictEnabled($val)
    {
        $this->_propDict["quarantineUponProxyAddressesConflictEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the quarantineUponUpnConflictEnabled
    * Used to indicate that we should quarantine objects conflicting with duplicate userPrincipalName.
    *
    * @return bool|null The quarantineUponUpnConflictEnabled
    */
    public function getQuarantineUponUpnConflictEnabled()
    {
        if (array_key_exists("quarantineUponUpnConflictEnabled", $this->_propDict)) {
            return $this->_propDict["quarantineUponUpnConflictEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quarantineUponUpnConflictEnabled
    * Used to indicate that we should quarantine objects conflicting with duplicate userPrincipalName.
    *
    * @param bool $val The value of the quarantineUponUpnConflictEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setQuarantineUponUpnConflictEnabled($val)
    {
        $this->_propDict["quarantineUponUpnConflictEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the softMatchOnUpnEnabled
    * Used to indicate that we should soft match objects based on userPrincipalName.
    *
    * @return bool|null The softMatchOnUpnEnabled
    */
    public function getSoftMatchOnUpnEnabled()
    {
        if (array_key_exists("softMatchOnUpnEnabled", $this->_propDict)) {
            return $this->_propDict["softMatchOnUpnEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the softMatchOnUpnEnabled
    * Used to indicate that we should soft match objects based on userPrincipalName.
    *
    * @param bool $val The value of the softMatchOnUpnEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setSoftMatchOnUpnEnabled($val)
    {
        $this->_propDict["softMatchOnUpnEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the synchronizeUpnForManagedUsersEnabled
    * Used to indicate that we should synchronize userPrincipalName objects for managed users with licenses.
    *
    * @return bool|null The synchronizeUpnForManagedUsersEnabled
    */
    public function getSynchronizeUpnForManagedUsersEnabled()
    {
        if (array_key_exists("synchronizeUpnForManagedUsersEnabled", $this->_propDict)) {
            return $this->_propDict["synchronizeUpnForManagedUsersEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the synchronizeUpnForManagedUsersEnabled
    * Used to indicate that we should synchronize userPrincipalName objects for managed users with licenses.
    *
    * @param bool $val The value of the synchronizeUpnForManagedUsersEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setSynchronizeUpnForManagedUsersEnabled($val)
    {
        $this->_propDict["synchronizeUpnForManagedUsersEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the unifiedGroupWritebackEnabled
    * Used to indicate that Microsoft 365 Group write-back is enabled.
    *
    * @return bool|null The unifiedGroupWritebackEnabled
    */
    public function getUnifiedGroupWritebackEnabled()
    {
        if (array_key_exists("unifiedGroupWritebackEnabled", $this->_propDict)) {
            return $this->_propDict["unifiedGroupWritebackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unifiedGroupWritebackEnabled
    * Used to indicate that Microsoft 365 Group write-back is enabled.
    *
    * @param bool $val The value of the unifiedGroupWritebackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setUnifiedGroupWritebackEnabled($val)
    {
        $this->_propDict["unifiedGroupWritebackEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the userForcePasswordChangeOnLogonEnabled
    * Used to indicate that feature to force password change for a user on logon is enabled while synchronizing on-premise credentials.
    *
    * @return bool|null The userForcePasswordChangeOnLogonEnabled
    */
    public function getUserForcePasswordChangeOnLogonEnabled()
    {
        if (array_key_exists("userForcePasswordChangeOnLogonEnabled", $this->_propDict)) {
            return $this->_propDict["userForcePasswordChangeOnLogonEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userForcePasswordChangeOnLogonEnabled
    * Used to indicate that feature to force password change for a user on logon is enabled while synchronizing on-premise credentials.
    *
    * @param bool $val The value of the userForcePasswordChangeOnLogonEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setUserForcePasswordChangeOnLogonEnabled($val)
    {
        $this->_propDict["userForcePasswordChangeOnLogonEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the userWritebackEnabled
    * Used to indicate that user writeback is enabled.
    *
    * @return bool|null The userWritebackEnabled
    */
    public function getUserWritebackEnabled()
    {
        if (array_key_exists("userWritebackEnabled", $this->_propDict)) {
            return $this->_propDict["userWritebackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userWritebackEnabled
    * Used to indicate that user writeback is enabled.
    *
    * @param bool $val The value of the userWritebackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setUserWritebackEnabled($val)
    {
        $this->_propDict["userWritebackEnabled"] = $val;
        return $this;
    }
}
