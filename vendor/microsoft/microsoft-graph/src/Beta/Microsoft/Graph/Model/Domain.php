<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Domain File
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
* Domain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Domain extends Entity
{
    /**
    * Gets the authenticationType
    * Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. This property is read-only and is not nullable.
    *
    * @return string|null The authenticationType
    */
    public function getAuthenticationType()
    {
        if (array_key_exists("authenticationType", $this->_propDict)) {
            return $this->_propDict["authenticationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationType
    * Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. This property is read-only and is not nullable.
    *
    * @param string $val The authenticationType
    *
    * @return Domain
    */
    public function setAuthenticationType($val)
    {
        $this->_propDict["authenticationType"] = $val;
        return $this;
    }

    /**
    * Gets the availabilityStatus
    * This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
    *
    * @return string|null The availabilityStatus
    */
    public function getAvailabilityStatus()
    {
        if (array_key_exists("availabilityStatus", $this->_propDict)) {
            return $this->_propDict["availabilityStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availabilityStatus
    * This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
    *
    * @param string $val The availabilityStatus
    *
    * @return Domain
    */
    public function setAvailabilityStatus($val)
    {
        $this->_propDict["availabilityStatus"] = $val;
        return $this;
    }

    /**
    * Gets the isAdminManaged
    * The value of the property is false if the DNS record management of the domain has been delegated to Microsoft 365. Otherwise, the value is true. Not nullable
    *
    * @return bool|null The isAdminManaged
    */
    public function getIsAdminManaged()
    {
        if (array_key_exists("isAdminManaged", $this->_propDict)) {
            return $this->_propDict["isAdminManaged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAdminManaged
    * The value of the property is false if the DNS record management of the domain has been delegated to Microsoft 365. Otherwise, the value is true. Not nullable
    *
    * @param bool $val The isAdminManaged
    *
    * @return Domain
    */
    public function setIsAdminManaged($val)
    {
        $this->_propDict["isAdminManaged"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isDefault
    * true if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable
    *
    * @return bool|null The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefault
    * true if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable
    *
    * @param bool $val The isDefault
    *
    * @return Domain
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isInitial
    * true if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable
    *
    * @return bool|null The isInitial
    */
    public function getIsInitial()
    {
        if (array_key_exists("isInitial", $this->_propDict)) {
            return $this->_propDict["isInitial"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInitial
    * true if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable
    *
    * @param bool $val The isInitial
    *
    * @return Domain
    */
    public function setIsInitial($val)
    {
        $this->_propDict["isInitial"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isRoot
    * true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable
    *
    * @return bool|null The isRoot
    */
    public function getIsRoot()
    {
        if (array_key_exists("isRoot", $this->_propDict)) {
            return $this->_propDict["isRoot"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRoot
    * true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable
    *
    * @param bool $val The isRoot
    *
    * @return Domain
    */
    public function setIsRoot($val)
    {
        $this->_propDict["isRoot"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isVerified
    * true if the domain has completed domain ownership verification. Not nullable
    *
    * @return bool|null The isVerified
    */
    public function getIsVerified()
    {
        if (array_key_exists("isVerified", $this->_propDict)) {
            return $this->_propDict["isVerified"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isVerified
    * true if the domain has completed domain ownership verification. Not nullable
    *
    * @param bool $val The isVerified
    *
    * @return Domain
    */
    public function setIsVerified($val)
    {
        $this->_propDict["isVerified"] = boolval($val);
        return $this;
    }

    /**
    * Gets the passwordNotificationWindowInDays
    * Specifies the number of days before a user receives notification that their password will expire. If the property is not set, a default value of 14 days will be used.
    *
    * @return int|null The passwordNotificationWindowInDays
    */
    public function getPasswordNotificationWindowInDays()
    {
        if (array_key_exists("passwordNotificationWindowInDays", $this->_propDict)) {
            return $this->_propDict["passwordNotificationWindowInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordNotificationWindowInDays
    * Specifies the number of days before a user receives notification that their password will expire. If the property is not set, a default value of 14 days will be used.
    *
    * @param int $val The passwordNotificationWindowInDays
    *
    * @return Domain
    */
    public function setPasswordNotificationWindowInDays($val)
    {
        $this->_propDict["passwordNotificationWindowInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordValidityPeriodInDays
    * Specifies the length of time that a password is valid before it must be changed. If the property is not set, a default value of 90 days will be used.
    *
    * @return int|null The passwordValidityPeriodInDays
    */
    public function getPasswordValidityPeriodInDays()
    {
        if (array_key_exists("passwordValidityPeriodInDays", $this->_propDict)) {
            return $this->_propDict["passwordValidityPeriodInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordValidityPeriodInDays
    * Specifies the length of time that a password is valid before it must be changed. If the property is not set, a default value of 90 days will be used.
    *
    * @param int $val The passwordValidityPeriodInDays
    *
    * @return Domain
    */
    public function setPasswordValidityPeriodInDays($val)
    {
        $this->_propDict["passwordValidityPeriodInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the state
    * Status of asynchronous operations scheduled for the domain.
    *
    * @return DomainState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\DomainState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new DomainState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Status of asynchronous operations scheduled for the domain.
    *
    * @param DomainState $val The state
    *
    * @return Domain
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the supportedServices
    * The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline,SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable.
    *
    * @return string|null The supportedServices
    */
    public function getSupportedServices()
    {
        if (array_key_exists("supportedServices", $this->_propDict)) {
            return $this->_propDict["supportedServices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedServices
    * The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline,SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable.
    *
    * @param string $val The supportedServices
    *
    * @return Domain
    */
    public function setSupportedServices($val)
    {
        $this->_propDict["supportedServices"] = $val;
        return $this;
    }


     /**
     * Gets the domainNameReferences
    * The objects such as users and groups that reference the domain ID. Read-only, Nullable. Supports $expand and $filter by the OData type of objects returned. For example /domains/{domainId}/domainNameReferences/microsoft.graph.user and /domains/{domainId}/domainNameReferences/microsoft.graph.group.
     *
     * @return array|null The domainNameReferences
     */
    public function getDomainNameReferences()
    {
        if (array_key_exists("domainNameReferences", $this->_propDict)) {
           return $this->_propDict["domainNameReferences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainNameReferences
    * The objects such as users and groups that reference the domain ID. Read-only, Nullable. Supports $expand and $filter by the OData type of objects returned. For example /domains/{domainId}/domainNameReferences/microsoft.graph.user and /domains/{domainId}/domainNameReferences/microsoft.graph.group.
    *
    * @param DirectoryObject[] $val The domainNameReferences
    *
    * @return Domain
    */
    public function setDomainNameReferences($val)
    {
        $this->_propDict["domainNameReferences"] = $val;
        return $this;
    }


     /**
     * Gets the federationConfiguration
    * Domain settings configured by customer when federated with Azure AD. Supports $expand.
     *
     * @return array|null The federationConfiguration
     */
    public function getFederationConfiguration()
    {
        if (array_key_exists("federationConfiguration", $this->_propDict)) {
           return $this->_propDict["federationConfiguration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the federationConfiguration
    * Domain settings configured by customer when federated with Azure AD. Supports $expand.
    *
    * @param InternalDomainFederation[] $val The federationConfiguration
    *
    * @return Domain
    */
    public function setFederationConfiguration($val)
    {
        $this->_propDict["federationConfiguration"] = $val;
        return $this;
    }


     /**
     * Gets the serviceConfigurationRecords
    * DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable. Supports $expand.
     *
     * @return array|null The serviceConfigurationRecords
     */
    public function getServiceConfigurationRecords()
    {
        if (array_key_exists("serviceConfigurationRecords", $this->_propDict)) {
           return $this->_propDict["serviceConfigurationRecords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceConfigurationRecords
    * DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable. Supports $expand.
    *
    * @param DomainDnsRecord[] $val The serviceConfigurationRecords
    *
    * @return Domain
    */
    public function setServiceConfigurationRecords($val)
    {
        $this->_propDict["serviceConfigurationRecords"] = $val;
        return $this;
    }


     /**
     * Gets the sharedEmailDomainInvitations
     *
     * @return array|null The sharedEmailDomainInvitations
     */
    public function getSharedEmailDomainInvitations()
    {
        if (array_key_exists("sharedEmailDomainInvitations", $this->_propDict)) {
           return $this->_propDict["sharedEmailDomainInvitations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharedEmailDomainInvitations
    *
    * @param SharedEmailDomainInvitation[] $val The sharedEmailDomainInvitations
    *
    * @return Domain
    */
    public function setSharedEmailDomainInvitations($val)
    {
        $this->_propDict["sharedEmailDomainInvitations"] = $val;
        return $this;
    }


     /**
     * Gets the verificationDnsRecords
    * DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD. Read-only, Nullable. Supports $expand.
     *
     * @return array|null The verificationDnsRecords
     */
    public function getVerificationDnsRecords()
    {
        if (array_key_exists("verificationDnsRecords", $this->_propDict)) {
           return $this->_propDict["verificationDnsRecords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the verificationDnsRecords
    * DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD. Read-only, Nullable. Supports $expand.
    *
    * @param DomainDnsRecord[] $val The verificationDnsRecords
    *
    * @return Domain
    */
    public function setVerificationDnsRecords($val)
    {
        $this->_propDict["verificationDnsRecords"] = $val;
        return $this;
    }

}
