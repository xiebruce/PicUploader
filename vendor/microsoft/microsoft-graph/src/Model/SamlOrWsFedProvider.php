<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SamlOrWsFedProvider File
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
* SamlOrWsFedProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SamlOrWsFedProvider extends IdentityProviderBase
{
    /**
    * Gets the issuerUri
    * Issuer URI of the federation server.
    *
    * @return string|null The issuerUri
    */
    public function getIssuerUri()
    {
        if (array_key_exists("issuerUri", $this->_propDict)) {
            return $this->_propDict["issuerUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuerUri
    * Issuer URI of the federation server.
    *
    * @param string $val The issuerUri
    *
    * @return SamlOrWsFedProvider
    */
    public function setIssuerUri($val)
    {
        $this->_propDict["issuerUri"] = $val;
        return $this;
    }

    /**
    * Gets the metadataExchangeUri
    * URI of the metadata exchange endpoint used for authentication from rich client applications.
    *
    * @return string|null The metadataExchangeUri
    */
    public function getMetadataExchangeUri()
    {
        if (array_key_exists("metadataExchangeUri", $this->_propDict)) {
            return $this->_propDict["metadataExchangeUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the metadataExchangeUri
    * URI of the metadata exchange endpoint used for authentication from rich client applications.
    *
    * @param string $val The metadataExchangeUri
    *
    * @return SamlOrWsFedProvider
    */
    public function setMetadataExchangeUri($val)
    {
        $this->_propDict["metadataExchangeUri"] = $val;
        return $this;
    }

    /**
    * Gets the passiveSignInUri
    * URI that web-based clients are directed to when signing in to Azure Active Directory (Azure AD) services.
    *
    * @return string|null The passiveSignInUri
    */
    public function getPassiveSignInUri()
    {
        if (array_key_exists("passiveSignInUri", $this->_propDict)) {
            return $this->_propDict["passiveSignInUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passiveSignInUri
    * URI that web-based clients are directed to when signing in to Azure Active Directory (Azure AD) services.
    *
    * @param string $val The passiveSignInUri
    *
    * @return SamlOrWsFedProvider
    */
    public function setPassiveSignInUri($val)
    {
        $this->_propDict["passiveSignInUri"] = $val;
        return $this;
    }

    /**
    * Gets the preferredAuthenticationProtocol
    * Preferred authentication protocol. The possible values are: wsFed, saml, unknownFutureValue.
    *
    * @return AuthenticationProtocol|null The preferredAuthenticationProtocol
    */
    public function getPreferredAuthenticationProtocol()
    {
        if (array_key_exists("preferredAuthenticationProtocol", $this->_propDict)) {
            if (is_a($this->_propDict["preferredAuthenticationProtocol"], "\Microsoft\Graph\Model\AuthenticationProtocol") || is_null($this->_propDict["preferredAuthenticationProtocol"])) {
                return $this->_propDict["preferredAuthenticationProtocol"];
            } else {
                $this->_propDict["preferredAuthenticationProtocol"] = new AuthenticationProtocol($this->_propDict["preferredAuthenticationProtocol"]);
                return $this->_propDict["preferredAuthenticationProtocol"];
            }
        }
        return null;
    }

    /**
    * Sets the preferredAuthenticationProtocol
    * Preferred authentication protocol. The possible values are: wsFed, saml, unknownFutureValue.
    *
    * @param AuthenticationProtocol $val The preferredAuthenticationProtocol
    *
    * @return SamlOrWsFedProvider
    */
    public function setPreferredAuthenticationProtocol($val)
    {
        $this->_propDict["preferredAuthenticationProtocol"] = $val;
        return $this;
    }

    /**
    * Gets the signingCertificate
    * Current certificate used to sign tokens passed to the Microsoft identity platform. The certificate is formatted as a Base64 encoded string of the public portion of the federated IdP's token signing certificate and must be compatible with the X509Certificate2 class.   This property is used in the following scenarios:  if a rollover is required outside of the autorollover update a new federation service is being set up  if the new token signing certificate isn't present in the federation properties after the federation service certificate has been updated.   Azure AD updates certificates via an autorollover process in which it attempts to retrieve a new certificate from the federation service metadata, 30 days before expiry of the current certificate. If a new certificate isn't available, Azure AD monitors the metadata daily and will update the federation settings for the domain when a new certificate is available.
    *
    * @return string|null The signingCertificate
    */
    public function getSigningCertificate()
    {
        if (array_key_exists("signingCertificate", $this->_propDict)) {
            return $this->_propDict["signingCertificate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signingCertificate
    * Current certificate used to sign tokens passed to the Microsoft identity platform. The certificate is formatted as a Base64 encoded string of the public portion of the federated IdP's token signing certificate and must be compatible with the X509Certificate2 class.   This property is used in the following scenarios:  if a rollover is required outside of the autorollover update a new federation service is being set up  if the new token signing certificate isn't present in the federation properties after the federation service certificate has been updated.   Azure AD updates certificates via an autorollover process in which it attempts to retrieve a new certificate from the federation service metadata, 30 days before expiry of the current certificate. If a new certificate isn't available, Azure AD monitors the metadata daily and will update the federation settings for the domain when a new certificate is available.
    *
    * @param string $val The signingCertificate
    *
    * @return SamlOrWsFedProvider
    */
    public function setSigningCertificate($val)
    {
        $this->_propDict["signingCertificate"] = $val;
        return $this;
    }

}
