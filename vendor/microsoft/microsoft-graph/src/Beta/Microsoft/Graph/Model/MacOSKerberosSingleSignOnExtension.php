<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSKerberosSingleSignOnExtension File
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
* MacOSKerberosSingleSignOnExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSKerberosSingleSignOnExtension extends MacOSSingleSignOnExtension
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.macOSKerberosSingleSignOnExtension");
    }

    /**
    * Gets the activeDirectorySiteCode
    * Gets or sets the Active Directory site.
    *
    * @return string|null The activeDirectorySiteCode
    */
    public function getActiveDirectorySiteCode()
    {
        if (array_key_exists("activeDirectorySiteCode", $this->_propDict)) {
            return $this->_propDict["activeDirectorySiteCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeDirectorySiteCode
    * Gets or sets the Active Directory site.
    *
    * @param string $val The value of the activeDirectorySiteCode
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setActiveDirectorySiteCode($val)
    {
        $this->_propDict["activeDirectorySiteCode"] = $val;
        return $this;
    }
    /**
    * Gets the blockActiveDirectorySiteAutoDiscovery
    * Enables or disables whether the Kerberos extension can automatically determine its site name.
    *
    * @return bool|null The blockActiveDirectorySiteAutoDiscovery
    */
    public function getBlockActiveDirectorySiteAutoDiscovery()
    {
        if (array_key_exists("blockActiveDirectorySiteAutoDiscovery", $this->_propDict)) {
            return $this->_propDict["blockActiveDirectorySiteAutoDiscovery"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockActiveDirectorySiteAutoDiscovery
    * Enables or disables whether the Kerberos extension can automatically determine its site name.
    *
    * @param bool $val The value of the blockActiveDirectorySiteAutoDiscovery
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setBlockActiveDirectorySiteAutoDiscovery($val)
    {
        $this->_propDict["blockActiveDirectorySiteAutoDiscovery"] = $val;
        return $this;
    }
    /**
    * Gets the blockAutomaticLogin
    * Enables or disables Keychain usage.
    *
    * @return bool|null The blockAutomaticLogin
    */
    public function getBlockAutomaticLogin()
    {
        if (array_key_exists("blockAutomaticLogin", $this->_propDict)) {
            return $this->_propDict["blockAutomaticLogin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockAutomaticLogin
    * Enables or disables Keychain usage.
    *
    * @param bool $val The value of the blockAutomaticLogin
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setBlockAutomaticLogin($val)
    {
        $this->_propDict["blockAutomaticLogin"] = $val;
        return $this;
    }
    /**
    * Gets the cacheName
    * Gets or sets the Generic Security Services name of the Kerberos cache to use for this profile.
    *
    * @return string|null The cacheName
    */
    public function getCacheName()
    {
        if (array_key_exists("cacheName", $this->_propDict)) {
            return $this->_propDict["cacheName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cacheName
    * Gets or sets the Generic Security Services name of the Kerberos cache to use for this profile.
    *
    * @param string $val The value of the cacheName
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setCacheName($val)
    {
        $this->_propDict["cacheName"] = $val;
        return $this;
    }
    /**
    * Gets the credentialBundleIdAccessControlList
    * Gets or sets a list of app Bundle IDs allowed to access the Kerberos Ticket Granting Ticket.
    *
    * @return string|null The credentialBundleIdAccessControlList
    */
    public function getCredentialBundleIdAccessControlList()
    {
        if (array_key_exists("credentialBundleIdAccessControlList", $this->_propDict)) {
            return $this->_propDict["credentialBundleIdAccessControlList"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialBundleIdAccessControlList
    * Gets or sets a list of app Bundle IDs allowed to access the Kerberos Ticket Granting Ticket.
    *
    * @param string $val The value of the credentialBundleIdAccessControlList
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setCredentialBundleIdAccessControlList($val)
    {
        $this->_propDict["credentialBundleIdAccessControlList"] = $val;
        return $this;
    }
    /**
    * Gets the credentialsCacheMonitored
    * When set to True, the credential is requested on the next matching Kerberos challenge or network state change. When the credential is expired or missing, a new credential is created. Available for devices running macOS versions 12 and later.
    *
    * @return bool|null The credentialsCacheMonitored
    */
    public function getCredentialsCacheMonitored()
    {
        if (array_key_exists("credentialsCacheMonitored", $this->_propDict)) {
            return $this->_propDict["credentialsCacheMonitored"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialsCacheMonitored
    * When set to True, the credential is requested on the next matching Kerberos challenge or network state change. When the credential is expired or missing, a new credential is created. Available for devices running macOS versions 12 and later.
    *
    * @param bool $val The value of the credentialsCacheMonitored
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setCredentialsCacheMonitored($val)
    {
        $this->_propDict["credentialsCacheMonitored"] = $val;
        return $this;
    }
    /**
    * Gets the domainRealms
    * Gets or sets a list of realms for custom domain-realm mapping. Realms are case sensitive.
    *
    * @return string|null The domainRealms
    */
    public function getDomainRealms()
    {
        if (array_key_exists("domainRealms", $this->_propDict)) {
            return $this->_propDict["domainRealms"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainRealms
    * Gets or sets a list of realms for custom domain-realm mapping. Realms are case sensitive.
    *
    * @param string $val The value of the domainRealms
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setDomainRealms($val)
    {
        $this->_propDict["domainRealms"] = $val;
        return $this;
    }
    /**
    * Gets the domains
    * Gets or sets a list of hosts or domain names for which the app extension performs SSO.
    *
    * @return string|null The domains
    */
    public function getDomains()
    {
        if (array_key_exists("domains", $this->_propDict)) {
            return $this->_propDict["domains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domains
    * Gets or sets a list of hosts or domain names for which the app extension performs SSO.
    *
    * @param string $val The value of the domains
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setDomains($val)
    {
        $this->_propDict["domains"] = $val;
        return $this;
    }
    /**
    * Gets the isDefaultRealm
    * When true, this profile's realm will be selected as the default. Necessary if multiple Kerberos-type profiles are configured.
    *
    * @return bool|null The isDefaultRealm
    */
    public function getIsDefaultRealm()
    {
        if (array_key_exists("isDefaultRealm", $this->_propDict)) {
            return $this->_propDict["isDefaultRealm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefaultRealm
    * When true, this profile's realm will be selected as the default. Necessary if multiple Kerberos-type profiles are configured.
    *
    * @param bool $val The value of the isDefaultRealm
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setIsDefaultRealm($val)
    {
        $this->_propDict["isDefaultRealm"] = $val;
        return $this;
    }
    /**
    * Gets the kerberosAppsInBundleIdACLIncluded
    * When set to True, the Kerberos extension allows any apps entered with the app bundle ID, managed apps, and standard Kerberos utilities, such as TicketViewer and klist, to access and use the credential. Available for devices running macOS versions 12 and later.
    *
    * @return bool|null The kerberosAppsInBundleIdACLIncluded
    */
    public function getKerberosAppsInBundleIdACLIncluded()
    {
        if (array_key_exists("kerberosAppsInBundleIdACLIncluded", $this->_propDict)) {
            return $this->_propDict["kerberosAppsInBundleIdACLIncluded"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kerberosAppsInBundleIdACLIncluded
    * When set to True, the Kerberos extension allows any apps entered with the app bundle ID, managed apps, and standard Kerberos utilities, such as TicketViewer and klist, to access and use the credential. Available for devices running macOS versions 12 and later.
    *
    * @param bool $val The value of the kerberosAppsInBundleIdACLIncluded
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setKerberosAppsInBundleIdACLIncluded($val)
    {
        $this->_propDict["kerberosAppsInBundleIdACLIncluded"] = $val;
        return $this;
    }
    /**
    * Gets the managedAppsInBundleIdACLIncluded
    * When set to True, the Kerberos extension allows managed apps, and any apps entered with the app bundle ID to access the credential. When set to False, the Kerberos extension allows all apps to access the credential. Available for devices running iOS and iPadOS versions 14 and later.
    *
    * @return bool|null The managedAppsInBundleIdACLIncluded
    */
    public function getManagedAppsInBundleIdACLIncluded()
    {
        if (array_key_exists("managedAppsInBundleIdACLIncluded", $this->_propDict)) {
            return $this->_propDict["managedAppsInBundleIdACLIncluded"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedAppsInBundleIdACLIncluded
    * When set to True, the Kerberos extension allows managed apps, and any apps entered with the app bundle ID to access the credential. When set to False, the Kerberos extension allows all apps to access the credential. Available for devices running iOS and iPadOS versions 14 and later.
    *
    * @param bool $val The value of the managedAppsInBundleIdACLIncluded
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setManagedAppsInBundleIdACLIncluded($val)
    {
        $this->_propDict["managedAppsInBundleIdACLIncluded"] = $val;
        return $this;
    }
    /**
    * Gets the modeCredentialUsed
    * Select how other processes use the Kerberos Extension credential.
    *
    * @return string|null The modeCredentialUsed
    */
    public function getModeCredentialUsed()
    {
        if (array_key_exists("modeCredentialUsed", $this->_propDict)) {
            return $this->_propDict["modeCredentialUsed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modeCredentialUsed
    * Select how other processes use the Kerberos Extension credential.
    *
    * @param string $val The value of the modeCredentialUsed
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setModeCredentialUsed($val)
    {
        $this->_propDict["modeCredentialUsed"] = $val;
        return $this;
    }
    /**
    * Gets the passwordBlockModification
    * Enables or disables password changes.
    *
    * @return bool|null The passwordBlockModification
    */
    public function getPasswordBlockModification()
    {
        if (array_key_exists("passwordBlockModification", $this->_propDict)) {
            return $this->_propDict["passwordBlockModification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordBlockModification
    * Enables or disables password changes.
    *
    * @param bool $val The value of the passwordBlockModification
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordBlockModification($val)
    {
        $this->_propDict["passwordBlockModification"] = $val;
        return $this;
    }
    /**
    * Gets the passwordChangeUrl
    * Gets or sets the URL that the user will be sent to when they initiate a password change.
    *
    * @return string|null The passwordChangeUrl
    */
    public function getPasswordChangeUrl()
    {
        if (array_key_exists("passwordChangeUrl", $this->_propDict)) {
            return $this->_propDict["passwordChangeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordChangeUrl
    * Gets or sets the URL that the user will be sent to when they initiate a password change.
    *
    * @param string $val The value of the passwordChangeUrl
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordChangeUrl($val)
    {
        $this->_propDict["passwordChangeUrl"] = $val;
        return $this;
    }
    /**
    * Gets the passwordEnableLocalSync
    * Enables or disables password syncing. This won't affect users logged in with a mobile account on macOS.
    *
    * @return bool|null The passwordEnableLocalSync
    */
    public function getPasswordEnableLocalSync()
    {
        if (array_key_exists("passwordEnableLocalSync", $this->_propDict)) {
            return $this->_propDict["passwordEnableLocalSync"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordEnableLocalSync
    * Enables or disables password syncing. This won't affect users logged in with a mobile account on macOS.
    *
    * @param bool $val The value of the passwordEnableLocalSync
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordEnableLocalSync($val)
    {
        $this->_propDict["passwordEnableLocalSync"] = $val;
        return $this;
    }
    /**
    * Gets the passwordExpirationDays
    * Overrides the default password expiration in days. For most domains, this value is calculated automatically.
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
    * Overrides the default password expiration in days. For most domains, this value is calculated automatically.
    *
    * @param int $val The value of the passwordExpirationDays
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = $val;
        return $this;
    }
    /**
    * Gets the passwordExpirationNotificationDays
    * Gets or sets the number of days until the user is notified that their password will expire (default is 15).
    *
    * @return int|null The passwordExpirationNotificationDays
    */
    public function getPasswordExpirationNotificationDays()
    {
        if (array_key_exists("passwordExpirationNotificationDays", $this->_propDict)) {
            return $this->_propDict["passwordExpirationNotificationDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordExpirationNotificationDays
    * Gets or sets the number of days until the user is notified that their password will expire (default is 15).
    *
    * @param int $val The value of the passwordExpirationNotificationDays
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordExpirationNotificationDays($val)
    {
        $this->_propDict["passwordExpirationNotificationDays"] = $val;
        return $this;
    }
    /**
    * Gets the passwordMinimumAgeDays
    * Gets or sets the minimum number of days until a user can change their password again.
    *
    * @return int|null The passwordMinimumAgeDays
    */
    public function getPasswordMinimumAgeDays()
    {
        if (array_key_exists("passwordMinimumAgeDays", $this->_propDict)) {
            return $this->_propDict["passwordMinimumAgeDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumAgeDays
    * Gets or sets the minimum number of days until a user can change their password again.
    *
    * @param int $val The value of the passwordMinimumAgeDays
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordMinimumAgeDays($val)
    {
        $this->_propDict["passwordMinimumAgeDays"] = $val;
        return $this;
    }
    /**
    * Gets the passwordMinimumLength
    * Gets or sets the minimum length of a password.
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
    * Gets or sets the minimum length of a password.
    *
    * @param int $val The value of the passwordMinimumLength
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = $val;
        return $this;
    }
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * Gets or sets the number of previous passwords to block.
    *
    * @return int|null The passwordPreviousPasswordBlockCount
    */
    public function getPasswordPreviousPasswordBlockCount()
    {
        if (array_key_exists("passwordPreviousPasswordBlockCount", $this->_propDict)) {
            return $this->_propDict["passwordPreviousPasswordBlockCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordPreviousPasswordBlockCount
    * Gets or sets the number of previous passwords to block.
    *
    * @param int $val The value of the passwordPreviousPasswordBlockCount
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = $val;
        return $this;
    }
    /**
    * Gets the passwordRequireActiveDirectoryComplexity
    * Enables or disables whether passwords must meet Active Directory's complexity requirements.
    *
    * @return bool|null The passwordRequireActiveDirectoryComplexity
    */
    public function getPasswordRequireActiveDirectoryComplexity()
    {
        if (array_key_exists("passwordRequireActiveDirectoryComplexity", $this->_propDict)) {
            return $this->_propDict["passwordRequireActiveDirectoryComplexity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordRequireActiveDirectoryComplexity
    * Enables or disables whether passwords must meet Active Directory's complexity requirements.
    *
    * @param bool $val The value of the passwordRequireActiveDirectoryComplexity
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordRequireActiveDirectoryComplexity($val)
    {
        $this->_propDict["passwordRequireActiveDirectoryComplexity"] = $val;
        return $this;
    }
    /**
    * Gets the passwordRequirementsDescription
    * Gets or sets a description of the password complexity requirements.
    *
    * @return string|null The passwordRequirementsDescription
    */
    public function getPasswordRequirementsDescription()
    {
        if (array_key_exists("passwordRequirementsDescription", $this->_propDict)) {
            return $this->_propDict["passwordRequirementsDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordRequirementsDescription
    * Gets or sets a description of the password complexity requirements.
    *
    * @param string $val The value of the passwordRequirementsDescription
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPasswordRequirementsDescription($val)
    {
        $this->_propDict["passwordRequirementsDescription"] = $val;
        return $this;
    }
    /**
    * Gets the preferredKDCs
    * Add creates an ordered list of preferred Key Distribution Centers (KDCs) to use for Kerberos traffic. This list is used when the servers are not discoverable using DNS. When the servers are discoverable, the list is used for both connectivity checks, and used first for Kerberos traffic. If the servers don’t respond, then the device uses DNS discovery. Delete removes an existing list, and devices use DNS discovery. Available for devices running macOS versions 12 and later.
    *
    * @return string|null The preferredKDCs
    */
    public function getPreferredKDCs()
    {
        if (array_key_exists("preferredKDCs", $this->_propDict)) {
            return $this->_propDict["preferredKDCs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preferredKDCs
    * Add creates an ordered list of preferred Key Distribution Centers (KDCs) to use for Kerberos traffic. This list is used when the servers are not discoverable using DNS. When the servers are discoverable, the list is used for both connectivity checks, and used first for Kerberos traffic. If the servers don’t respond, then the device uses DNS discovery. Delete removes an existing list, and devices use DNS discovery. Available for devices running macOS versions 12 and later.
    *
    * @param string $val The value of the preferredKDCs
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setPreferredKDCs($val)
    {
        $this->_propDict["preferredKDCs"] = $val;
        return $this;
    }
    /**
    * Gets the realm
    * Gets or sets the case-sensitive realm name for this profile.
    *
    * @return string|null The realm
    */
    public function getRealm()
    {
        if (array_key_exists("realm", $this->_propDict)) {
            return $this->_propDict["realm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the realm
    * Gets or sets the case-sensitive realm name for this profile.
    *
    * @param string $val The value of the realm
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setRealm($val)
    {
        $this->_propDict["realm"] = $val;
        return $this;
    }
    /**
    * Gets the requireUserPresence
    * Gets or sets whether to require authentication via Touch ID, Face ID, or a passcode to access the keychain entry.
    *
    * @return bool|null The requireUserPresence
    */
    public function getRequireUserPresence()
    {
        if (array_key_exists("requireUserPresence", $this->_propDict)) {
            return $this->_propDict["requireUserPresence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requireUserPresence
    * Gets or sets whether to require authentication via Touch ID, Face ID, or a passcode to access the keychain entry.
    *
    * @param bool $val The value of the requireUserPresence
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setRequireUserPresence($val)
    {
        $this->_propDict["requireUserPresence"] = $val;
        return $this;
    }
    /**
    * Gets the signInHelpText
    * Text displayed to the user at the Kerberos sign in window. Available for devices running iOS and iPadOS versions 14 and later.
    *
    * @return string|null The signInHelpText
    */
    public function getSignInHelpText()
    {
        if (array_key_exists("signInHelpText", $this->_propDict)) {
            return $this->_propDict["signInHelpText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInHelpText
    * Text displayed to the user at the Kerberos sign in window. Available for devices running iOS and iPadOS versions 14 and later.
    *
    * @param string $val The value of the signInHelpText
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setSignInHelpText($val)
    {
        $this->_propDict["signInHelpText"] = $val;
        return $this;
    }
    /**
    * Gets the tlsForLDAPRequired
    * When set to True, LDAP connections are required to use Transport Layer Security (TLS). Available for devices running macOS versions 11 and later.
    *
    * @return bool|null The tlsForLDAPRequired
    */
    public function getTlsForLDAPRequired()
    {
        if (array_key_exists("tlsForLDAPRequired", $this->_propDict)) {
            return $this->_propDict["tlsForLDAPRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tlsForLDAPRequired
    * When set to True, LDAP connections are required to use Transport Layer Security (TLS). Available for devices running macOS versions 11 and later.
    *
    * @param bool $val The value of the tlsForLDAPRequired
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setTlsForLDAPRequired($val)
    {
        $this->_propDict["tlsForLDAPRequired"] = $val;
        return $this;
    }
    /**
    * Gets the usernameLabelCustom
    * This label replaces the user name shown in the Kerberos extension. You can enter a name to match the name of your company or organization. Available for devices running macOS versions 11 and later.
    *
    * @return string|null The usernameLabelCustom
    */
    public function getUsernameLabelCustom()
    {
        if (array_key_exists("usernameLabelCustom", $this->_propDict)) {
            return $this->_propDict["usernameLabelCustom"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usernameLabelCustom
    * This label replaces the user name shown in the Kerberos extension. You can enter a name to match the name of your company or organization. Available for devices running macOS versions 11 and later.
    *
    * @param string $val The value of the usernameLabelCustom
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setUsernameLabelCustom($val)
    {
        $this->_propDict["usernameLabelCustom"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * Gets or sets the principle user name to use for this profile. The realm name does not need to be included.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * Gets or sets the principle user name to use for this profile. The realm name does not need to be included.
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the userSetupDelayed
    * When set to True, the user isn’t prompted to set up the Kerberos extension until the extension is enabled by the admin, or a Kerberos challenge is received. Available for devices running macOS versions 11 and later.
    *
    * @return bool|null The userSetupDelayed
    */
    public function getUserSetupDelayed()
    {
        if (array_key_exists("userSetupDelayed", $this->_propDict)) {
            return $this->_propDict["userSetupDelayed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userSetupDelayed
    * When set to True, the user isn’t prompted to set up the Kerberos extension until the extension is enabled by the admin, or a Kerberos challenge is received. Available for devices running macOS versions 11 and later.
    *
    * @param bool $val The value of the userSetupDelayed
    *
    * @return MacOSKerberosSingleSignOnExtension
    */
    public function setUserSetupDelayed($val)
    {
        $this->_propDict["userSetupDelayed"] = $val;
        return $this;
    }
}
