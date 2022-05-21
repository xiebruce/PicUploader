<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InternalDomainFederation File
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
* InternalDomainFederation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InternalDomainFederation extends SamlOrWsFedProvider
{
    /**
    * Gets the activeSignInUri
    * URL of the endpoint used by active clients when authenticating with federated domains set up for single sign-on in Azure Active Directory (Azure AD). Corresponds to the ActiveLogOnUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
    *
    * @return string|null The activeSignInUri
    */
    public function getActiveSignInUri()
    {
        if (array_key_exists("activeSignInUri", $this->_propDict)) {
            return $this->_propDict["activeSignInUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeSignInUri
    * URL of the endpoint used by active clients when authenticating with federated domains set up for single sign-on in Azure Active Directory (Azure AD). Corresponds to the ActiveLogOnUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
    *
    * @param string $val The activeSignInUri
    *
    * @return InternalDomainFederation
    */
    public function setActiveSignInUri($val)
    {
        $this->_propDict["activeSignInUri"] = $val;
        return $this;
    }

    /**
    * Gets the federatedIdpMfaBehavior
    * Determines whether Azure AD accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values.
    *
    * @return FederatedIdpMfaBehavior|null The federatedIdpMfaBehavior
    */
    public function getFederatedIdpMfaBehavior()
    {
        if (array_key_exists("federatedIdpMfaBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["federatedIdpMfaBehavior"], "\Microsoft\Graph\Model\FederatedIdpMfaBehavior") || is_null($this->_propDict["federatedIdpMfaBehavior"])) {
                return $this->_propDict["federatedIdpMfaBehavior"];
            } else {
                $this->_propDict["federatedIdpMfaBehavior"] = new FederatedIdpMfaBehavior($this->_propDict["federatedIdpMfaBehavior"]);
                return $this->_propDict["federatedIdpMfaBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the federatedIdpMfaBehavior
    * Determines whether Azure AD accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values.
    *
    * @param FederatedIdpMfaBehavior $val The federatedIdpMfaBehavior
    *
    * @return InternalDomainFederation
    */
    public function setFederatedIdpMfaBehavior($val)
    {
        $this->_propDict["federatedIdpMfaBehavior"] = $val;
        return $this;
    }

    /**
    * Gets the isSignedAuthenticationRequestRequired
    * If true, when SAML authentication requests are sent to the federated SAML IdP, Azure AD will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP are not signed.
    *
    * @return bool|null The isSignedAuthenticationRequestRequired
    */
    public function getIsSignedAuthenticationRequestRequired()
    {
        if (array_key_exists("isSignedAuthenticationRequestRequired", $this->_propDict)) {
            return $this->_propDict["isSignedAuthenticationRequestRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSignedAuthenticationRequestRequired
    * If true, when SAML authentication requests are sent to the federated SAML IdP, Azure AD will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP are not signed.
    *
    * @param bool $val The isSignedAuthenticationRequestRequired
    *
    * @return InternalDomainFederation
    */
    public function setIsSignedAuthenticationRequestRequired($val)
    {
        $this->_propDict["isSignedAuthenticationRequestRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the nextSigningCertificate
    * Fallback token signing certificate that is used to sign tokens when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP's token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate is not present in the federation properties after the federation service certificate has been updated.
    *
    * @return string|null The nextSigningCertificate
    */
    public function getNextSigningCertificate()
    {
        if (array_key_exists("nextSigningCertificate", $this->_propDict)) {
            return $this->_propDict["nextSigningCertificate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nextSigningCertificate
    * Fallback token signing certificate that is used to sign tokens when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP's token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate is not present in the federation properties after the federation service certificate has been updated.
    *
    * @param string $val The nextSigningCertificate
    *
    * @return InternalDomainFederation
    */
    public function setNextSigningCertificate($val)
    {
        $this->_propDict["nextSigningCertificate"] = $val;
        return $this;
    }

    /**
    * Gets the promptLoginBehavior
    * Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue.
    *
    * @return PromptLoginBehavior|null The promptLoginBehavior
    */
    public function getPromptLoginBehavior()
    {
        if (array_key_exists("promptLoginBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["promptLoginBehavior"], "\Microsoft\Graph\Model\PromptLoginBehavior") || is_null($this->_propDict["promptLoginBehavior"])) {
                return $this->_propDict["promptLoginBehavior"];
            } else {
                $this->_propDict["promptLoginBehavior"] = new PromptLoginBehavior($this->_propDict["promptLoginBehavior"]);
                return $this->_propDict["promptLoginBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the promptLoginBehavior
    * Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue.
    *
    * @param PromptLoginBehavior $val The promptLoginBehavior
    *
    * @return InternalDomainFederation
    */
    public function setPromptLoginBehavior($val)
    {
        $this->_propDict["promptLoginBehavior"] = $val;
        return $this;
    }

    /**
    * Gets the signingCertificateUpdateStatus
    * Provides status and timestamp of the last update of the signing certificate.
    *
    * @return SigningCertificateUpdateStatus|null The signingCertificateUpdateStatus
    */
    public function getSigningCertificateUpdateStatus()
    {
        if (array_key_exists("signingCertificateUpdateStatus", $this->_propDict)) {
            if (is_a($this->_propDict["signingCertificateUpdateStatus"], "\Microsoft\Graph\Model\SigningCertificateUpdateStatus") || is_null($this->_propDict["signingCertificateUpdateStatus"])) {
                return $this->_propDict["signingCertificateUpdateStatus"];
            } else {
                $this->_propDict["signingCertificateUpdateStatus"] = new SigningCertificateUpdateStatus($this->_propDict["signingCertificateUpdateStatus"]);
                return $this->_propDict["signingCertificateUpdateStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the signingCertificateUpdateStatus
    * Provides status and timestamp of the last update of the signing certificate.
    *
    * @param SigningCertificateUpdateStatus $val The signingCertificateUpdateStatus
    *
    * @return InternalDomainFederation
    */
    public function setSigningCertificateUpdateStatus($val)
    {
        $this->_propDict["signingCertificateUpdateStatus"] = $val;
        return $this;
    }

    /**
    * Gets the signOutUri
    * URI that clients are redirected to when they sign out of Azure AD services. Corresponds to the LogOffUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
    *
    * @return string|null The signOutUri
    */
    public function getSignOutUri()
    {
        if (array_key_exists("signOutUri", $this->_propDict)) {
            return $this->_propDict["signOutUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signOutUri
    * URI that clients are redirected to when they sign out of Azure AD services. Corresponds to the LogOffUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
    *
    * @param string $val The signOutUri
    *
    * @return InternalDomainFederation
    */
    public function setSignOutUri($val)
    {
        $this->_propDict["signOutUri"] = $val;
        return $this;
    }

}
