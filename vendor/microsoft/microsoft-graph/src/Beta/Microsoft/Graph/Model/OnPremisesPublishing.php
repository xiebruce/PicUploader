<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesPublishing File
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
* OnPremisesPublishing class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesPublishing extends Entity
{
    /**
    * Gets the alternateUrl
    * If you are configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that will point to the traffic manager.
    *
    * @return string|null The alternateUrl
    */
    public function getAlternateUrl()
    {
        if (array_key_exists("alternateUrl", $this->_propDict)) {
            return $this->_propDict["alternateUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternateUrl
    * If you are configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that will point to the traffic manager.
    *
    * @param string $val The value of the alternateUrl
    *
    * @return OnPremisesPublishing
    */
    public function setAlternateUrl($val)
    {
        $this->_propDict["alternateUrl"] = $val;
        return $this;
    }
    /**
    * Gets the applicationServerTimeout
    * The duration the connector will wait for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
    *
    * @return string|null The applicationServerTimeout
    */
    public function getApplicationServerTimeout()
    {
        if (array_key_exists("applicationServerTimeout", $this->_propDict)) {
            return $this->_propDict["applicationServerTimeout"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationServerTimeout
    * The duration the connector will wait for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
    *
    * @param string $val The value of the applicationServerTimeout
    *
    * @return OnPremisesPublishing
    */
    public function setApplicationServerTimeout($val)
    {
        $this->_propDict["applicationServerTimeout"] = $val;
        return $this;
    }
    /**
    * Gets the applicationType
    * Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
    *
    * @return string|null The applicationType
    */
    public function getApplicationType()
    {
        if (array_key_exists("applicationType", $this->_propDict)) {
            return $this->_propDict["applicationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationType
    * Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
    *
    * @param string $val The value of the applicationType
    *
    * @return OnPremisesPublishing
    */
    public function setApplicationType($val)
    {
        $this->_propDict["applicationType"] = $val;
        return $this;
    }

    /**
    * Gets the externalAuthenticationType
    * Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Passthru does not require authentication. Possible values are: passthru, aadPreAuthentication.
    *
    * @return ExternalAuthenticationType|null The externalAuthenticationType
    */
    public function getExternalAuthenticationType()
    {
        if (array_key_exists("externalAuthenticationType", $this->_propDict)) {
            if (is_a($this->_propDict["externalAuthenticationType"], "\Beta\Microsoft\Graph\Model\ExternalAuthenticationType") || is_null($this->_propDict["externalAuthenticationType"])) {
                return $this->_propDict["externalAuthenticationType"];
            } else {
                $this->_propDict["externalAuthenticationType"] = new ExternalAuthenticationType($this->_propDict["externalAuthenticationType"]);
                return $this->_propDict["externalAuthenticationType"];
            }
        }
        return null;
    }

    /**
    * Sets the externalAuthenticationType
    * Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Passthru does not require authentication. Possible values are: passthru, aadPreAuthentication.
    *
    * @param ExternalAuthenticationType $val The value to assign to the externalAuthenticationType
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setExternalAuthenticationType($val)
    {
        $this->_propDict["externalAuthenticationType"] = $val;
         return $this;
    }
    /**
    * Gets the externalUrl
    * The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
    *
    * @return string|null The externalUrl
    */
    public function getExternalUrl()
    {
        if (array_key_exists("externalUrl", $this->_propDict)) {
            return $this->_propDict["externalUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalUrl
    * The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
    *
    * @param string $val The value of the externalUrl
    *
    * @return OnPremisesPublishing
    */
    public function setExternalUrl($val)
    {
        $this->_propDict["externalUrl"] = $val;
        return $this;
    }
    /**
    * Gets the internalUrl
    * The internal url of the application. For example, https://intranet/.
    *
    * @return string|null The internalUrl
    */
    public function getInternalUrl()
    {
        if (array_key_exists("internalUrl", $this->_propDict)) {
            return $this->_propDict["internalUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalUrl
    * The internal url of the application. For example, https://intranet/.
    *
    * @param string $val The value of the internalUrl
    *
    * @return OnPremisesPublishing
    */
    public function setInternalUrl($val)
    {
        $this->_propDict["internalUrl"] = $val;
        return $this;
    }
    /**
    * Gets the isBackendCertificateValidationEnabled
    * Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property will be set to true by default. For all existing apps, the property will be set to false.
    *
    * @return bool|null The isBackendCertificateValidationEnabled
    */
    public function getIsBackendCertificateValidationEnabled()
    {
        if (array_key_exists("isBackendCertificateValidationEnabled", $this->_propDict)) {
            return $this->_propDict["isBackendCertificateValidationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBackendCertificateValidationEnabled
    * Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property will be set to true by default. For all existing apps, the property will be set to false.
    *
    * @param bool $val The value of the isBackendCertificateValidationEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsBackendCertificateValidationEnabled($val)
    {
        $this->_propDict["isBackendCertificateValidationEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isHttpOnlyCookieEnabled
    * Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
    *
    * @return bool|null The isHttpOnlyCookieEnabled
    */
    public function getIsHttpOnlyCookieEnabled()
    {
        if (array_key_exists("isHttpOnlyCookieEnabled", $this->_propDict)) {
            return $this->_propDict["isHttpOnlyCookieEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHttpOnlyCookieEnabled
    * Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
    *
    * @param bool $val The value of the isHttpOnlyCookieEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsHttpOnlyCookieEnabled($val)
    {
        $this->_propDict["isHttpOnlyCookieEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isOnPremPublishingEnabled
    * Indicates if the application is currently being published via Application Proxy or not. This is pre-set by the system. Read-only.
    *
    * @return bool|null The isOnPremPublishingEnabled
    */
    public function getIsOnPremPublishingEnabled()
    {
        if (array_key_exists("isOnPremPublishingEnabled", $this->_propDict)) {
            return $this->_propDict["isOnPremPublishingEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOnPremPublishingEnabled
    * Indicates if the application is currently being published via Application Proxy or not. This is pre-set by the system. Read-only.
    *
    * @param bool $val The value of the isOnPremPublishingEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsOnPremPublishingEnabled($val)
    {
        $this->_propDict["isOnPremPublishingEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isPersistentCookieEnabled
    * Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Azure Active Directory. Default value is false.
    *
    * @return bool|null The isPersistentCookieEnabled
    */
    public function getIsPersistentCookieEnabled()
    {
        if (array_key_exists("isPersistentCookieEnabled", $this->_propDict)) {
            return $this->_propDict["isPersistentCookieEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPersistentCookieEnabled
    * Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Azure Active Directory. Default value is false.
    *
    * @param bool $val The value of the isPersistentCookieEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsPersistentCookieEnabled($val)
    {
        $this->_propDict["isPersistentCookieEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isSecureCookieEnabled
    * Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
    *
    * @return bool|null The isSecureCookieEnabled
    */
    public function getIsSecureCookieEnabled()
    {
        if (array_key_exists("isSecureCookieEnabled", $this->_propDict)) {
            return $this->_propDict["isSecureCookieEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSecureCookieEnabled
    * Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
    *
    * @param bool $val The value of the isSecureCookieEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsSecureCookieEnabled($val)
    {
        $this->_propDict["isSecureCookieEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isStateSessionEnabled
    * Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
    *
    * @return bool|null The isStateSessionEnabled
    */
    public function getIsStateSessionEnabled()
    {
        if (array_key_exists("isStateSessionEnabled", $this->_propDict)) {
            return $this->_propDict["isStateSessionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isStateSessionEnabled
    * Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
    *
    * @param bool $val The value of the isStateSessionEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsStateSessionEnabled($val)
    {
        $this->_propDict["isStateSessionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isTranslateHostHeaderEnabled
    * Indicates if the application should translate urls in the reponse headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
    *
    * @return bool|null The isTranslateHostHeaderEnabled
    */
    public function getIsTranslateHostHeaderEnabled()
    {
        if (array_key_exists("isTranslateHostHeaderEnabled", $this->_propDict)) {
            return $this->_propDict["isTranslateHostHeaderEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTranslateHostHeaderEnabled
    * Indicates if the application should translate urls in the reponse headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
    *
    * @param bool $val The value of the isTranslateHostHeaderEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsTranslateHostHeaderEnabled($val)
    {
        $this->_propDict["isTranslateHostHeaderEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isTranslateLinksInBodyEnabled
    * Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
    *
    * @return bool|null The isTranslateLinksInBodyEnabled
    */
    public function getIsTranslateLinksInBodyEnabled()
    {
        if (array_key_exists("isTranslateLinksInBodyEnabled", $this->_propDict)) {
            return $this->_propDict["isTranslateLinksInBodyEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTranslateLinksInBodyEnabled
    * Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
    *
    * @param bool $val The value of the isTranslateLinksInBodyEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsTranslateLinksInBodyEnabled($val)
    {
        $this->_propDict["isTranslateLinksInBodyEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesApplicationSegments
    *
    * @return OnPremisesApplicationSegment|null The onPremisesApplicationSegments
    */
    public function getOnPremisesApplicationSegments()
    {
        if (array_key_exists("onPremisesApplicationSegments", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesApplicationSegments"], "\Beta\Microsoft\Graph\Model\OnPremisesApplicationSegment") || is_null($this->_propDict["onPremisesApplicationSegments"])) {
                return $this->_propDict["onPremisesApplicationSegments"];
            } else {
                $this->_propDict["onPremisesApplicationSegments"] = new OnPremisesApplicationSegment($this->_propDict["onPremisesApplicationSegments"]);
                return $this->_propDict["onPremisesApplicationSegments"];
            }
        }
        return null;
    }

    /**
    * Sets the onPremisesApplicationSegments
    *
    * @param OnPremisesApplicationSegment $val The value to assign to the onPremisesApplicationSegments
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setOnPremisesApplicationSegments($val)
    {
        $this->_propDict["onPremisesApplicationSegments"] = $val;
         return $this;
    }

    /**
    * Gets the singleSignOnSettings
    * Represents the single sign-on configuration for the on-premises application.
    *
    * @return OnPremisesPublishingSingleSignOn|null The singleSignOnSettings
    */
    public function getSingleSignOnSettings()
    {
        if (array_key_exists("singleSignOnSettings", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnSettings"], "\Beta\Microsoft\Graph\Model\OnPremisesPublishingSingleSignOn") || is_null($this->_propDict["singleSignOnSettings"])) {
                return $this->_propDict["singleSignOnSettings"];
            } else {
                $this->_propDict["singleSignOnSettings"] = new OnPremisesPublishingSingleSignOn($this->_propDict["singleSignOnSettings"]);
                return $this->_propDict["singleSignOnSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the singleSignOnSettings
    * Represents the single sign-on configuration for the on-premises application.
    *
    * @param OnPremisesPublishingSingleSignOn $val The value to assign to the singleSignOnSettings
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setSingleSignOnSettings($val)
    {
        $this->_propDict["singleSignOnSettings"] = $val;
         return $this;
    }
    /**
    * Gets the useAlternateUrlForTranslationAndRedirect
    *
    * @return bool|null The useAlternateUrlForTranslationAndRedirect
    */
    public function getUseAlternateUrlForTranslationAndRedirect()
    {
        if (array_key_exists("useAlternateUrlForTranslationAndRedirect", $this->_propDict)) {
            return $this->_propDict["useAlternateUrlForTranslationAndRedirect"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useAlternateUrlForTranslationAndRedirect
    *
    * @param bool $val The value of the useAlternateUrlForTranslationAndRedirect
    *
    * @return OnPremisesPublishing
    */
    public function setUseAlternateUrlForTranslationAndRedirect($val)
    {
        $this->_propDict["useAlternateUrlForTranslationAndRedirect"] = $val;
        return $this;
    }

    /**
    * Gets the verifiedCustomDomainCertificatesMetadata
    * Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
    *
    * @return VerifiedCustomDomainCertificatesMetadata|null The verifiedCustomDomainCertificatesMetadata
    */
    public function getVerifiedCustomDomainCertificatesMetadata()
    {
        if (array_key_exists("verifiedCustomDomainCertificatesMetadata", $this->_propDict)) {
            if (is_a($this->_propDict["verifiedCustomDomainCertificatesMetadata"], "\Beta\Microsoft\Graph\Model\VerifiedCustomDomainCertificatesMetadata") || is_null($this->_propDict["verifiedCustomDomainCertificatesMetadata"])) {
                return $this->_propDict["verifiedCustomDomainCertificatesMetadata"];
            } else {
                $this->_propDict["verifiedCustomDomainCertificatesMetadata"] = new VerifiedCustomDomainCertificatesMetadata($this->_propDict["verifiedCustomDomainCertificatesMetadata"]);
                return $this->_propDict["verifiedCustomDomainCertificatesMetadata"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiedCustomDomainCertificatesMetadata
    * Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
    *
    * @param VerifiedCustomDomainCertificatesMetadata $val The value to assign to the verifiedCustomDomainCertificatesMetadata
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setVerifiedCustomDomainCertificatesMetadata($val)
    {
        $this->_propDict["verifiedCustomDomainCertificatesMetadata"] = $val;
         return $this;
    }

    /**
    * Gets the verifiedCustomDomainKeyCredential
    * The associated key credential for the custom domain used.
    *
    * @return KeyCredential|null The verifiedCustomDomainKeyCredential
    */
    public function getVerifiedCustomDomainKeyCredential()
    {
        if (array_key_exists("verifiedCustomDomainKeyCredential", $this->_propDict)) {
            if (is_a($this->_propDict["verifiedCustomDomainKeyCredential"], "\Beta\Microsoft\Graph\Model\KeyCredential") || is_null($this->_propDict["verifiedCustomDomainKeyCredential"])) {
                return $this->_propDict["verifiedCustomDomainKeyCredential"];
            } else {
                $this->_propDict["verifiedCustomDomainKeyCredential"] = new KeyCredential($this->_propDict["verifiedCustomDomainKeyCredential"]);
                return $this->_propDict["verifiedCustomDomainKeyCredential"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiedCustomDomainKeyCredential
    * The associated key credential for the custom domain used.
    *
    * @param KeyCredential $val The value to assign to the verifiedCustomDomainKeyCredential
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setVerifiedCustomDomainKeyCredential($val)
    {
        $this->_propDict["verifiedCustomDomainKeyCredential"] = $val;
         return $this;
    }

    /**
    * Gets the verifiedCustomDomainPasswordCredential
    * The associated password credential for the custom domain used.
    *
    * @return PasswordCredential|null The verifiedCustomDomainPasswordCredential
    */
    public function getVerifiedCustomDomainPasswordCredential()
    {
        if (array_key_exists("verifiedCustomDomainPasswordCredential", $this->_propDict)) {
            if (is_a($this->_propDict["verifiedCustomDomainPasswordCredential"], "\Beta\Microsoft\Graph\Model\PasswordCredential") || is_null($this->_propDict["verifiedCustomDomainPasswordCredential"])) {
                return $this->_propDict["verifiedCustomDomainPasswordCredential"];
            } else {
                $this->_propDict["verifiedCustomDomainPasswordCredential"] = new PasswordCredential($this->_propDict["verifiedCustomDomainPasswordCredential"]);
                return $this->_propDict["verifiedCustomDomainPasswordCredential"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiedCustomDomainPasswordCredential
    * The associated password credential for the custom domain used.
    *
    * @param PasswordCredential $val The value to assign to the verifiedCustomDomainPasswordCredential
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setVerifiedCustomDomainPasswordCredential($val)
    {
        $this->_propDict["verifiedCustomDomainPasswordCredential"] = $val;
         return $this;
    }
}
