<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AospDeviceOwnerEnterpriseWiFiConfiguration File
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
* AospDeviceOwnerEnterpriseWiFiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AospDeviceOwnerEnterpriseWiFiConfiguration extends AospDeviceOwnerWiFiConfiguration
{
    /**
    * Gets the authenticationMethod
    * Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
    *
    * @return WiFiAuthenticationMethod|null The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\WiFiAuthenticationMethod") || is_null($this->_propDict["authenticationMethod"])) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new WiFiAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethod
    * Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
    *
    * @param WiFiAuthenticationMethod $val The authenticationMethod
    *
    * @return AospDeviceOwnerEnterpriseWiFiConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }

    /**
    * Gets the eapType
    * Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, eapTtls, peap.
    *
    * @return AndroidEapType|null The eapType
    */
    public function getEapType()
    {
        if (array_key_exists("eapType", $this->_propDict)) {
            if (is_a($this->_propDict["eapType"], "\Beta\Microsoft\Graph\Model\AndroidEapType") || is_null($this->_propDict["eapType"])) {
                return $this->_propDict["eapType"];
            } else {
                $this->_propDict["eapType"] = new AndroidEapType($this->_propDict["eapType"]);
                return $this->_propDict["eapType"];
            }
        }
        return null;
    }

    /**
    * Sets the eapType
    * Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, eapTtls, peap.
    *
    * @param AndroidEapType $val The eapType
    *
    * @return AospDeviceOwnerEnterpriseWiFiConfiguration
    */
    public function setEapType($val)
    {
        $this->_propDict["eapType"] = $val;
        return $this;
    }

    /**
    * Gets the innerAuthenticationProtocolForEapTtls
    * Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    *
    * @return NonEapAuthenticationMethodForEapTtlsType|null The innerAuthenticationProtocolForEapTtls
    */
    public function getInnerAuthenticationProtocolForEapTtls()
    {
        if (array_key_exists("innerAuthenticationProtocolForEapTtls", $this->_propDict)) {
            if (is_a($this->_propDict["innerAuthenticationProtocolForEapTtls"], "\Beta\Microsoft\Graph\Model\NonEapAuthenticationMethodForEapTtlsType") || is_null($this->_propDict["innerAuthenticationProtocolForEapTtls"])) {
                return $this->_propDict["innerAuthenticationProtocolForEapTtls"];
            } else {
                $this->_propDict["innerAuthenticationProtocolForEapTtls"] = new NonEapAuthenticationMethodForEapTtlsType($this->_propDict["innerAuthenticationProtocolForEapTtls"]);
                return $this->_propDict["innerAuthenticationProtocolForEapTtls"];
            }
        }
        return null;
    }

    /**
    * Sets the innerAuthenticationProtocolForEapTtls
    * Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    *
    * @param NonEapAuthenticationMethodForEapTtlsType $val The innerAuthenticationProtocolForEapTtls
    *
    * @return AospDeviceOwnerEnterpriseWiFiConfiguration
    */
    public function setInnerAuthenticationProtocolForEapTtls($val)
    {
        $this->_propDict["innerAuthenticationProtocolForEapTtls"] = $val;
        return $this;
    }

    /**
    * Gets the innerAuthenticationProtocolForPeap
    * Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. This collection can contain a maximum of 500 elements. Possible values are: none, microsoftChapVersionTwo.
    *
    * @return NonEapAuthenticationMethodForPeap|null The innerAuthenticationProtocolForPeap
    */
    public function getInnerAuthenticationProtocolForPeap()
    {
        if (array_key_exists("innerAuthenticationProtocolForPeap", $this->_propDict)) {
            if (is_a($this->_propDict["innerAuthenticationProtocolForPeap"], "\Beta\Microsoft\Graph\Model\NonEapAuthenticationMethodForPeap") || is_null($this->_propDict["innerAuthenticationProtocolForPeap"])) {
                return $this->_propDict["innerAuthenticationProtocolForPeap"];
            } else {
                $this->_propDict["innerAuthenticationProtocolForPeap"] = new NonEapAuthenticationMethodForPeap($this->_propDict["innerAuthenticationProtocolForPeap"]);
                return $this->_propDict["innerAuthenticationProtocolForPeap"];
            }
        }
        return null;
    }

    /**
    * Sets the innerAuthenticationProtocolForPeap
    * Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. This collection can contain a maximum of 500 elements. Possible values are: none, microsoftChapVersionTwo.
    *
    * @param NonEapAuthenticationMethodForPeap $val The innerAuthenticationProtocolForPeap
    *
    * @return AospDeviceOwnerEnterpriseWiFiConfiguration
    */
    public function setInnerAuthenticationProtocolForPeap($val)
    {
        $this->_propDict["innerAuthenticationProtocolForPeap"] = $val;
        return $this;
    }

    /**
    * Gets the outerIdentityPrivacyTemporaryValue
    * Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
    *
    * @return string|null The outerIdentityPrivacyTemporaryValue
    */
    public function getOuterIdentityPrivacyTemporaryValue()
    {
        if (array_key_exists("outerIdentityPrivacyTemporaryValue", $this->_propDict)) {
            return $this->_propDict["outerIdentityPrivacyTemporaryValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outerIdentityPrivacyTemporaryValue
    * Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
    *
    * @param string $val The outerIdentityPrivacyTemporaryValue
    *
    * @return AospDeviceOwnerEnterpriseWiFiConfiguration
    */
    public function setOuterIdentityPrivacyTemporaryValue($val)
    {
        $this->_propDict["outerIdentityPrivacyTemporaryValue"] = $val;
        return $this;
    }

    /**
    * Gets the trustedServerCertificateNames
    * Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
    *
    * @return array|null The trustedServerCertificateNames
    */
    public function getTrustedServerCertificateNames()
    {
        if (array_key_exists("trustedServerCertificateNames", $this->_propDict)) {
            return $this->_propDict["trustedServerCertificateNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trustedServerCertificateNames
    * Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
    *
    * @param string[] $val The trustedServerCertificateNames
    *
    * @return AospDeviceOwnerEnterpriseWiFiConfiguration
    */
    public function setTrustedServerCertificateNames($val)
    {
        $this->_propDict["trustedServerCertificateNames"] = $val;
        return $this;
    }

    /**
    * Gets the identityCertificateForClientAuthentication
    * Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
    *
    * @return AospDeviceOwnerCertificateProfileBase|null The identityCertificateForClientAuthentication
    */
    public function getIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("identityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificateForClientAuthentication"], "\Beta\Microsoft\Graph\Model\AospDeviceOwnerCertificateProfileBase") || is_null($this->_propDict["identityCertificateForClientAuthentication"])) {
                return $this->_propDict["identityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["identityCertificateForClientAuthentication"] = new AospDeviceOwnerCertificateProfileBase($this->_propDict["identityCertificateForClientAuthentication"]);
                return $this->_propDict["identityCertificateForClientAuthentication"];
            }
        }
        return null;
    }

    /**
    * Sets the identityCertificateForClientAuthentication
    * Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
    *
    * @param AospDeviceOwnerCertificateProfileBase $val The identityCertificateForClientAuthentication
    *
    * @return AospDeviceOwnerEnterpriseWiFiConfiguration
    */
    public function setIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["identityCertificateForClientAuthentication"] = $val;
        return $this;
    }

    /**
    * Gets the rootCertificateForServerValidation
    * Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
    *
    * @return AospDeviceOwnerTrustedRootCertificate|null The rootCertificateForServerValidation
    */
    public function getRootCertificateForServerValidation()
    {
        if (array_key_exists("rootCertificateForServerValidation", $this->_propDict)) {
            if (is_a($this->_propDict["rootCertificateForServerValidation"], "\Beta\Microsoft\Graph\Model\AospDeviceOwnerTrustedRootCertificate") || is_null($this->_propDict["rootCertificateForServerValidation"])) {
                return $this->_propDict["rootCertificateForServerValidation"];
            } else {
                $this->_propDict["rootCertificateForServerValidation"] = new AospDeviceOwnerTrustedRootCertificate($this->_propDict["rootCertificateForServerValidation"]);
                return $this->_propDict["rootCertificateForServerValidation"];
            }
        }
        return null;
    }

    /**
    * Sets the rootCertificateForServerValidation
    * Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
    *
    * @param AospDeviceOwnerTrustedRootCertificate $val The rootCertificateForServerValidation
    *
    * @return AospDeviceOwnerEnterpriseWiFiConfiguration
    */
    public function setRootCertificateForServerValidation($val)
    {
        $this->_propDict["rootCertificateForServerValidation"] = $val;
        return $this;
    }

}
