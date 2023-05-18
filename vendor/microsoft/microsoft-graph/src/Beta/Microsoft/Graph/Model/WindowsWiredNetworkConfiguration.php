<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsWiredNetworkConfiguration File
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
* WindowsWiredNetworkConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsWiredNetworkConfiguration extends DeviceConfiguration
{
    /**
    * Gets the authenticationBlockPeriodInMinutes
    * Specify the duration for which automatic authentication attempts will be blocked from occuring after a failed authentication attempt.
    *
    * @return int|null The authenticationBlockPeriodInMinutes
    */
    public function getAuthenticationBlockPeriodInMinutes()
    {
        if (array_key_exists("authenticationBlockPeriodInMinutes", $this->_propDict)) {
            return $this->_propDict["authenticationBlockPeriodInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationBlockPeriodInMinutes
    * Specify the duration for which automatic authentication attempts will be blocked from occuring after a failed authentication attempt.
    *
    * @param int $val The authenticationBlockPeriodInMinutes
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setAuthenticationBlockPeriodInMinutes($val)
    {
        $this->_propDict["authenticationBlockPeriodInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the authenticationMethod
    * Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
    *
    * @return WiredNetworkAuthenticationMethod|null The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\WiredNetworkAuthenticationMethod") || is_null($this->_propDict["authenticationMethod"])) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new WiredNetworkAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethod
    * Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
    *
    * @param WiredNetworkAuthenticationMethod $val The authenticationMethod
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationPeriodInSeconds
    * Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
    *
    * @return int|null The authenticationPeriodInSeconds
    */
    public function getAuthenticationPeriodInSeconds()
    {
        if (array_key_exists("authenticationPeriodInSeconds", $this->_propDict)) {
            return $this->_propDict["authenticationPeriodInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationPeriodInSeconds
    * Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
    *
    * @param int $val The authenticationPeriodInSeconds
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setAuthenticationPeriodInSeconds($val)
    {
        $this->_propDict["authenticationPeriodInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the authenticationRetryDelayPeriodInSeconds
    * Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
    *
    * @return int|null The authenticationRetryDelayPeriodInSeconds
    */
    public function getAuthenticationRetryDelayPeriodInSeconds()
    {
        if (array_key_exists("authenticationRetryDelayPeriodInSeconds", $this->_propDict)) {
            return $this->_propDict["authenticationRetryDelayPeriodInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationRetryDelayPeriodInSeconds
    * Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
    *
    * @param int $val The authenticationRetryDelayPeriodInSeconds
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setAuthenticationRetryDelayPeriodInSeconds($val)
    {
        $this->_propDict["authenticationRetryDelayPeriodInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the authenticationType
    * Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you're using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest. Possible values are: none, user, machine, machineOrUser, guest, unknownFutureValue.
    *
    * @return WiredNetworkAuthenticationType|null The authenticationType
    */
    public function getAuthenticationType()
    {
        if (array_key_exists("authenticationType", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationType"], "\Beta\Microsoft\Graph\Model\WiredNetworkAuthenticationType") || is_null($this->_propDict["authenticationType"])) {
                return $this->_propDict["authenticationType"];
            } else {
                $this->_propDict["authenticationType"] = new WiredNetworkAuthenticationType($this->_propDict["authenticationType"]);
                return $this->_propDict["authenticationType"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationType
    * Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you're using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest. Possible values are: none, user, machine, machineOrUser, guest, unknownFutureValue.
    *
    * @param WiredNetworkAuthenticationType $val The authenticationType
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setAuthenticationType($val)
    {
        $this->_propDict["authenticationType"] = $val;
        return $this;
    }

    /**
    * Gets the cacheCredentials
    * When TRUE, caches user credentials on the device so that users don't need to keep entering them each time they connect. When FALSE, do not cache credentials. Default value is FALSE.
    *
    * @return bool|null The cacheCredentials
    */
    public function getCacheCredentials()
    {
        if (array_key_exists("cacheCredentials", $this->_propDict)) {
            return $this->_propDict["cacheCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cacheCredentials
    * When TRUE, caches user credentials on the device so that users don't need to keep entering them each time they connect. When FALSE, do not cache credentials. Default value is FALSE.
    *
    * @param bool $val The cacheCredentials
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setCacheCredentials($val)
    {
        $this->_propDict["cacheCredentials"] = boolval($val);
        return $this;
    }

    /**
    * Gets the disableUserPromptForServerValidation
    * When TRUE, prevents the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP. When FALSE, does not prevent the user from being prompted. Default value is FALSE.
    *
    * @return bool|null The disableUserPromptForServerValidation
    */
    public function getDisableUserPromptForServerValidation()
    {
        if (array_key_exists("disableUserPromptForServerValidation", $this->_propDict)) {
            return $this->_propDict["disableUserPromptForServerValidation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disableUserPromptForServerValidation
    * When TRUE, prevents the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP. When FALSE, does not prevent the user from being prompted. Default value is FALSE.
    *
    * @param bool $val The disableUserPromptForServerValidation
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setDisableUserPromptForServerValidation($val)
    {
        $this->_propDict["disableUserPromptForServerValidation"] = boolval($val);
        return $this;
    }

    /**
    * Gets the eapolStartPeriodInSeconds
    * Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
    *
    * @return int|null The eapolStartPeriodInSeconds
    */
    public function getEapolStartPeriodInSeconds()
    {
        if (array_key_exists("eapolStartPeriodInSeconds", $this->_propDict)) {
            return $this->_propDict["eapolStartPeriodInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eapolStartPeriodInSeconds
    * Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
    *
    * @param int $val The eapolStartPeriodInSeconds
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setEapolStartPeriodInSeconds($val)
    {
        $this->_propDict["eapolStartPeriodInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the eapType
    * Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap. Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap.
    *
    * @return EapType|null The eapType
    */
    public function getEapType()
    {
        if (array_key_exists("eapType", $this->_propDict)) {
            if (is_a($this->_propDict["eapType"], "\Beta\Microsoft\Graph\Model\EapType") || is_null($this->_propDict["eapType"])) {
                return $this->_propDict["eapType"];
            } else {
                $this->_propDict["eapType"] = new EapType($this->_propDict["eapType"]);
                return $this->_propDict["eapType"];
            }
        }
        return null;
    }

    /**
    * Sets the eapType
    * Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap. Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap.
    *
    * @param EapType $val The eapType
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setEapType($val)
    {
        $this->_propDict["eapType"] = $val;
        return $this;
    }

    /**
    * Gets the enforce8021X
    * When TRUE, the automatic configuration service for wired networks requires the use of 802.1X for port authentication. When FALSE, 802.1X is not required. Default value is FALSE.
    *
    * @return bool|null The enforce8021X
    */
    public function getEnforce8021X()
    {
        if (array_key_exists("enforce8021X", $this->_propDict)) {
            return $this->_propDict["enforce8021X"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enforce8021X
    * When TRUE, the automatic configuration service for wired networks requires the use of 802.1X for port authentication. When FALSE, 802.1X is not required. Default value is FALSE.
    *
    * @param bool $val The enforce8021X
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setEnforce8021X($val)
    {
        $this->_propDict["enforce8021X"] = boolval($val);
        return $this;
    }

    /**
    * Gets the forceFIPSCompliance
    * When TRUE, forces FIPS compliance. When FALSE, does not enable FIPS compliance. Default value is FALSE.
    *
    * @return bool|null The forceFIPSCompliance
    */
    public function getForceFIPSCompliance()
    {
        if (array_key_exists("forceFIPSCompliance", $this->_propDict)) {
            return $this->_propDict["forceFIPSCompliance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forceFIPSCompliance
    * When TRUE, forces FIPS compliance. When FALSE, does not enable FIPS compliance. Default value is FALSE.
    *
    * @param bool $val The forceFIPSCompliance
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setForceFIPSCompliance($val)
    {
        $this->_propDict["forceFIPSCompliance"] = boolval($val);
        return $this;
    }

    /**
    * Gets the innerAuthenticationProtocolForEAPTTLS
    * Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    *
    * @return NonEapAuthenticationMethodForEapTtlsType|null The innerAuthenticationProtocolForEAPTTLS
    */
    public function getInnerAuthenticationProtocolForEAPTTLS()
    {
        if (array_key_exists("innerAuthenticationProtocolForEAPTTLS", $this->_propDict)) {
            if (is_a($this->_propDict["innerAuthenticationProtocolForEAPTTLS"], "\Beta\Microsoft\Graph\Model\NonEapAuthenticationMethodForEapTtlsType") || is_null($this->_propDict["innerAuthenticationProtocolForEAPTTLS"])) {
                return $this->_propDict["innerAuthenticationProtocolForEAPTTLS"];
            } else {
                $this->_propDict["innerAuthenticationProtocolForEAPTTLS"] = new NonEapAuthenticationMethodForEapTtlsType($this->_propDict["innerAuthenticationProtocolForEAPTTLS"]);
                return $this->_propDict["innerAuthenticationProtocolForEAPTTLS"];
            }
        }
        return null;
    }

    /**
    * Sets the innerAuthenticationProtocolForEAPTTLS
    * Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    *
    * @param NonEapAuthenticationMethodForEapTtlsType $val The innerAuthenticationProtocolForEAPTTLS
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setInnerAuthenticationProtocolForEAPTTLS($val)
    {
        $this->_propDict["innerAuthenticationProtocolForEAPTTLS"] = $val;
        return $this;
    }

    /**
    * Gets the maximumAuthenticationFailures
    * Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
    *
    * @return int|null The maximumAuthenticationFailures
    */
    public function getMaximumAuthenticationFailures()
    {
        if (array_key_exists("maximumAuthenticationFailures", $this->_propDict)) {
            return $this->_propDict["maximumAuthenticationFailures"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumAuthenticationFailures
    * Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
    *
    * @param int $val The maximumAuthenticationFailures
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setMaximumAuthenticationFailures($val)
    {
        $this->_propDict["maximumAuthenticationFailures"] = intval($val);
        return $this;
    }

    /**
    * Gets the maximumEAPOLStartMessages
    * Specify the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
    *
    * @return int|null The maximumEAPOLStartMessages
    */
    public function getMaximumEAPOLStartMessages()
    {
        if (array_key_exists("maximumEAPOLStartMessages", $this->_propDict)) {
            return $this->_propDict["maximumEAPOLStartMessages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumEAPOLStartMessages
    * Specify the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
    *
    * @param int $val The maximumEAPOLStartMessages
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setMaximumEAPOLStartMessages($val)
    {
        $this->_propDict["maximumEAPOLStartMessages"] = intval($val);
        return $this;
    }

    /**
    * Gets the outerIdentityPrivacyTemporaryValue
    * Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
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
    * Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
    *
    * @param string $val The outerIdentityPrivacyTemporaryValue
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setOuterIdentityPrivacyTemporaryValue($val)
    {
        $this->_propDict["outerIdentityPrivacyTemporaryValue"] = $val;
        return $this;
    }

    /**
    * Gets the performServerValidation
    * When TRUE, enables verification of server's identity by validating the certificate when EAP type is selected as PEAP. When FALSE, the certificate is not validated. Default value is TRUE.
    *
    * @return bool|null The performServerValidation
    */
    public function getPerformServerValidation()
    {
        if (array_key_exists("performServerValidation", $this->_propDict)) {
            return $this->_propDict["performServerValidation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the performServerValidation
    * When TRUE, enables verification of server's identity by validating the certificate when EAP type is selected as PEAP. When FALSE, the certificate is not validated. Default value is TRUE.
    *
    * @param bool $val The performServerValidation
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setPerformServerValidation($val)
    {
        $this->_propDict["performServerValidation"] = boolval($val);
        return $this;
    }

    /**
    * Gets the requireCryptographicBinding
    * When TRUE, enables cryptographic binding when EAP type is selected as PEAP. When FALSE, does not enable cryptogrpahic binding. Default value is TRUE.
    *
    * @return bool|null The requireCryptographicBinding
    */
    public function getRequireCryptographicBinding()
    {
        if (array_key_exists("requireCryptographicBinding", $this->_propDict)) {
            return $this->_propDict["requireCryptographicBinding"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requireCryptographicBinding
    * When TRUE, enables cryptographic binding when EAP type is selected as PEAP. When FALSE, does not enable cryptogrpahic binding. Default value is TRUE.
    *
    * @param bool $val The requireCryptographicBinding
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setRequireCryptographicBinding($val)
    {
        $this->_propDict["requireCryptographicBinding"] = boolval($val);
        return $this;
    }

    /**
    * Gets the secondaryAuthenticationMethod
    * Specify the secondary authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
    *
    * @return WiredNetworkAuthenticationMethod|null The secondaryAuthenticationMethod
    */
    public function getSecondaryAuthenticationMethod()
    {
        if (array_key_exists("secondaryAuthenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["secondaryAuthenticationMethod"], "\Beta\Microsoft\Graph\Model\WiredNetworkAuthenticationMethod") || is_null($this->_propDict["secondaryAuthenticationMethod"])) {
                return $this->_propDict["secondaryAuthenticationMethod"];
            } else {
                $this->_propDict["secondaryAuthenticationMethod"] = new WiredNetworkAuthenticationMethod($this->_propDict["secondaryAuthenticationMethod"]);
                return $this->_propDict["secondaryAuthenticationMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the secondaryAuthenticationMethod
    * Specify the secondary authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
    *
    * @param WiredNetworkAuthenticationMethod $val The secondaryAuthenticationMethod
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setSecondaryAuthenticationMethod($val)
    {
        $this->_propDict["secondaryAuthenticationMethod"] = $val;
        return $this;
    }

    /**
    * Gets the trustedServerCertificateNames
    * Specify trusted server certificate names.
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
    * Specify trusted server certificate names.
    *
    * @param string[] $val The trustedServerCertificateNames
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setTrustedServerCertificateNames($val)
    {
        $this->_propDict["trustedServerCertificateNames"] = $val;
        return $this;
    }

    /**
    * Gets the identityCertificateForClientAuthentication
    * Specify identity certificate for client authentication.
    *
    * @return WindowsCertificateProfileBase|null The identityCertificateForClientAuthentication
    */
    public function getIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("identityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificateForClientAuthentication"], "\Beta\Microsoft\Graph\Model\WindowsCertificateProfileBase") || is_null($this->_propDict["identityCertificateForClientAuthentication"])) {
                return $this->_propDict["identityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["identityCertificateForClientAuthentication"] = new WindowsCertificateProfileBase($this->_propDict["identityCertificateForClientAuthentication"]);
                return $this->_propDict["identityCertificateForClientAuthentication"];
            }
        }
        return null;
    }

    /**
    * Sets the identityCertificateForClientAuthentication
    * Specify identity certificate for client authentication.
    *
    * @param WindowsCertificateProfileBase $val The identityCertificateForClientAuthentication
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["identityCertificateForClientAuthentication"] = $val;
        return $this;
    }

    /**
    * Gets the rootCertificateForClientValidation
    * Specify root certificate for client validation.
    *
    * @return Windows81TrustedRootCertificate|null The rootCertificateForClientValidation
    */
    public function getRootCertificateForClientValidation()
    {
        if (array_key_exists("rootCertificateForClientValidation", $this->_propDict)) {
            if (is_a($this->_propDict["rootCertificateForClientValidation"], "\Beta\Microsoft\Graph\Model\Windows81TrustedRootCertificate") || is_null($this->_propDict["rootCertificateForClientValidation"])) {
                return $this->_propDict["rootCertificateForClientValidation"];
            } else {
                $this->_propDict["rootCertificateForClientValidation"] = new Windows81TrustedRootCertificate($this->_propDict["rootCertificateForClientValidation"]);
                return $this->_propDict["rootCertificateForClientValidation"];
            }
        }
        return null;
    }

    /**
    * Sets the rootCertificateForClientValidation
    * Specify root certificate for client validation.
    *
    * @param Windows81TrustedRootCertificate $val The rootCertificateForClientValidation
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setRootCertificateForClientValidation($val)
    {
        $this->_propDict["rootCertificateForClientValidation"] = $val;
        return $this;
    }


     /**
     * Gets the rootCertificatesForServerValidation
    * Specify root certificates for server validation. This collection can contain a maximum of 500 elements.
     *
     * @return array|null The rootCertificatesForServerValidation
     */
    public function getRootCertificatesForServerValidation()
    {
        if (array_key_exists("rootCertificatesForServerValidation", $this->_propDict)) {
           return $this->_propDict["rootCertificatesForServerValidation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rootCertificatesForServerValidation
    * Specify root certificates for server validation. This collection can contain a maximum of 500 elements.
    *
    * @param Windows81TrustedRootCertificate[] $val The rootCertificatesForServerValidation
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setRootCertificatesForServerValidation($val)
    {
        $this->_propDict["rootCertificatesForServerValidation"] = $val;
        return $this;
    }

    /**
    * Gets the secondaryIdentityCertificateForClientAuthentication
    * Specify secondary identity certificate for client authentication.
    *
    * @return WindowsCertificateProfileBase|null The secondaryIdentityCertificateForClientAuthentication
    */
    public function getSecondaryIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("secondaryIdentityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["secondaryIdentityCertificateForClientAuthentication"], "\Beta\Microsoft\Graph\Model\WindowsCertificateProfileBase") || is_null($this->_propDict["secondaryIdentityCertificateForClientAuthentication"])) {
                return $this->_propDict["secondaryIdentityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["secondaryIdentityCertificateForClientAuthentication"] = new WindowsCertificateProfileBase($this->_propDict["secondaryIdentityCertificateForClientAuthentication"]);
                return $this->_propDict["secondaryIdentityCertificateForClientAuthentication"];
            }
        }
        return null;
    }

    /**
    * Sets the secondaryIdentityCertificateForClientAuthentication
    * Specify secondary identity certificate for client authentication.
    *
    * @param WindowsCertificateProfileBase $val The secondaryIdentityCertificateForClientAuthentication
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setSecondaryIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["secondaryIdentityCertificateForClientAuthentication"] = $val;
        return $this;
    }

    /**
    * Gets the secondaryRootCertificateForClientValidation
    * Specify secondary root certificate for client validation.
    *
    * @return Windows81TrustedRootCertificate|null The secondaryRootCertificateForClientValidation
    */
    public function getSecondaryRootCertificateForClientValidation()
    {
        if (array_key_exists("secondaryRootCertificateForClientValidation", $this->_propDict)) {
            if (is_a($this->_propDict["secondaryRootCertificateForClientValidation"], "\Beta\Microsoft\Graph\Model\Windows81TrustedRootCertificate") || is_null($this->_propDict["secondaryRootCertificateForClientValidation"])) {
                return $this->_propDict["secondaryRootCertificateForClientValidation"];
            } else {
                $this->_propDict["secondaryRootCertificateForClientValidation"] = new Windows81TrustedRootCertificate($this->_propDict["secondaryRootCertificateForClientValidation"]);
                return $this->_propDict["secondaryRootCertificateForClientValidation"];
            }
        }
        return null;
    }

    /**
    * Sets the secondaryRootCertificateForClientValidation
    * Specify secondary root certificate for client validation.
    *
    * @param Windows81TrustedRootCertificate $val The secondaryRootCertificateForClientValidation
    *
    * @return WindowsWiredNetworkConfiguration
    */
    public function setSecondaryRootCertificateForClientValidation($val)
    {
        $this->_propDict["secondaryRootCertificateForClientValidation"] = $val;
        return $this;
    }

}
