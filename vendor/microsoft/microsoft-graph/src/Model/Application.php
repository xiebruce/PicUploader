<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Application File
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
* Application class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Application extends DirectoryObject
{

     /**
     * Gets the addIns
    * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Office 365 call the application in the context of a document the user is working on.
     *
     * @return array|null The addIns
     */
    public function getAddIns()
    {
        if (array_key_exists("addIns", $this->_propDict)) {
           return $this->_propDict["addIns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addIns
    * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Office 365 call the application in the context of a document the user is working on.
    *
    * @param AddIn[] $val The addIns
    *
    * @return Application
    */
    public function setAddIns($val)
    {
        $this->_propDict["addIns"] = $val;
        return $this;
    }

    /**
    * Gets the api
    * Specifies settings for an application that implements a web API.
    *
    * @return ApiApplication|null The api
    */
    public function getApi()
    {
        if (array_key_exists("api", $this->_propDict)) {
            if (is_a($this->_propDict["api"], "\Microsoft\Graph\Model\ApiApplication") || is_null($this->_propDict["api"])) {
                return $this->_propDict["api"];
            } else {
                $this->_propDict["api"] = new ApiApplication($this->_propDict["api"]);
                return $this->_propDict["api"];
            }
        }
        return null;
    }

    /**
    * Sets the api
    * Specifies settings for an application that implements a web API.
    *
    * @param ApiApplication $val The api
    *
    * @return Application
    */
    public function setApi($val)
    {
        $this->_propDict["api"] = $val;
        return $this;
    }

    /**
    * Gets the appId
    * The unique identifier for the application that is assigned to an application by Azure AD. Not nullable. Read-only. Supports $filter (eq).
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The unique identifier for the application that is assigned to an application by Azure AD. Not nullable. Read-only. Supports $filter (eq).
    *
    * @param string $val The appId
    *
    * @return Application
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the applicationTemplateId
    * Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne).
    *
    * @return string|null The applicationTemplateId
    */
    public function getApplicationTemplateId()
    {
        if (array_key_exists("applicationTemplateId", $this->_propDict)) {
            return $this->_propDict["applicationTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationTemplateId
    * Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne).
    *
    * @param string $val The applicationTemplateId
    *
    * @return Application
    */
    public function setApplicationTemplateId($val)
    {
        $this->_propDict["applicationTemplateId"] = $val;
        return $this;
    }


     /**
     * Gets the appRoles
    * The collection of roles defined for the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     *
     * @return array|null The appRoles
     */
    public function getAppRoles()
    {
        if (array_key_exists("appRoles", $this->_propDict)) {
           return $this->_propDict["appRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appRoles
    * The collection of roles defined for the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
    *
    * @param AppRole[] $val The appRoles
    *
    * @return Application
    */
    public function setAppRoles($val)
    {
        $this->_propDict["appRoles"] = $val;
        return $this;
    }

    /**
    * Gets the certification
    * Specifies the certification status of the application.
    *
    * @return Certification|null The certification
    */
    public function getCertification()
    {
        if (array_key_exists("certification", $this->_propDict)) {
            if (is_a($this->_propDict["certification"], "\Microsoft\Graph\Model\Certification") || is_null($this->_propDict["certification"])) {
                return $this->_propDict["certification"];
            } else {
                $this->_propDict["certification"] = new Certification($this->_propDict["certification"]);
                return $this->_propDict["certification"];
            }
        }
        return null;
    }

    /**
    * Sets the certification
    * Specifies the certification status of the application.
    *
    * @param Certification $val The certification
    *
    * @return Application
    */
    public function setCertification($val)
    {
        $this->_propDict["certification"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderBy.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderBy.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Application
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the defaultRedirectUri
    *
    * @return string|null The defaultRedirectUri
    */
    public function getDefaultRedirectUri()
    {
        if (array_key_exists("defaultRedirectUri", $this->_propDict)) {
            return $this->_propDict["defaultRedirectUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultRedirectUri
    *
    * @param string $val The defaultRedirectUri
    *
    * @return Application
    */
    public function setDefaultRedirectUri($val)
    {
        $this->_propDict["defaultRedirectUri"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Free text field to provide a description of the application object to end users. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Free text field to provide a description of the application object to end users. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
    *
    * @param string $val The description
    *
    * @return Application
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the disabledByMicrosoftStatus
    * Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
    *
    * @return string|null The disabledByMicrosoftStatus
    */
    public function getDisabledByMicrosoftStatus()
    {
        if (array_key_exists("disabledByMicrosoftStatus", $this->_propDict)) {
            return $this->_propDict["disabledByMicrosoftStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disabledByMicrosoftStatus
    * Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
    *
    * @param string $val The disabledByMicrosoftStatus
    *
    * @return Application
    */
    public function setDisabledByMicrosoftStatus($val)
    {
        $this->_propDict["disabledByMicrosoftStatus"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    *
    * @param string $val The displayName
    *
    * @return Application
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the groupMembershipClaims
    * Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all of the security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of).
    *
    * @return string|null The groupMembershipClaims
    */
    public function getGroupMembershipClaims()
    {
        if (array_key_exists("groupMembershipClaims", $this->_propDict)) {
            return $this->_propDict["groupMembershipClaims"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupMembershipClaims
    * Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all of the security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of).
    *
    * @param string $val The groupMembershipClaims
    *
    * @return Application
    */
    public function setGroupMembershipClaims($val)
    {
        $this->_propDict["groupMembershipClaims"] = $val;
        return $this;
    }

    /**
    * Gets the identifierUris
    * Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you'll reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://&amp;lt;application-client-id&amp;gt;, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Azure AD application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
    *
    * @return array|null The identifierUris
    */
    public function getIdentifierUris()
    {
        if (array_key_exists("identifierUris", $this->_propDict)) {
            return $this->_propDict["identifierUris"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identifierUris
    * Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you'll reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://&amp;lt;application-client-id&amp;gt;, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Azure AD application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
    *
    * @param string[] $val The identifierUris
    *
    * @return Application
    */
    public function setIdentifierUris($val)
    {
        $this->_propDict["identifierUris"] = $val;
        return $this;
    }

    /**
    * Gets the info
    * Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
    *
    * @return InformationalUrl|null The info
    */
    public function getInfo()
    {
        if (array_key_exists("info", $this->_propDict)) {
            if (is_a($this->_propDict["info"], "\Microsoft\Graph\Model\InformationalUrl") || is_null($this->_propDict["info"])) {
                return $this->_propDict["info"];
            } else {
                $this->_propDict["info"] = new InformationalUrl($this->_propDict["info"]);
                return $this->_propDict["info"];
            }
        }
        return null;
    }

    /**
    * Sets the info
    * Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
    *
    * @param InformationalUrl $val The info
    *
    * @return Application
    */
    public function setInfo($val)
    {
        $this->_propDict["info"] = $val;
        return $this;
    }

    /**
    * Gets the isDeviceOnlyAuthSupported
    * Specifies whether this application supports device authentication without a user. The default is false.
    *
    * @return bool|null The isDeviceOnlyAuthSupported
    */
    public function getIsDeviceOnlyAuthSupported()
    {
        if (array_key_exists("isDeviceOnlyAuthSupported", $this->_propDict)) {
            return $this->_propDict["isDeviceOnlyAuthSupported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDeviceOnlyAuthSupported
    * Specifies whether this application supports device authentication without a user. The default is false.
    *
    * @param bool $val The isDeviceOnlyAuthSupported
    *
    * @return Application
    */
    public function setIsDeviceOnlyAuthSupported($val)
    {
        $this->_propDict["isDeviceOnlyAuthSupported"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isFallbackPublicClient
    * Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where it is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property.
    *
    * @return bool|null The isFallbackPublicClient
    */
    public function getIsFallbackPublicClient()
    {
        if (array_key_exists("isFallbackPublicClient", $this->_propDict)) {
            return $this->_propDict["isFallbackPublicClient"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFallbackPublicClient
    * Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where it is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property.
    *
    * @param bool $val The isFallbackPublicClient
    *
    * @return Application
    */
    public function setIsFallbackPublicClient($val)
    {
        $this->_propDict["isFallbackPublicClient"] = boolval($val);
        return $this;
    }


     /**
     * Gets the keyCredentials
    * The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
     *
     * @return array|null The keyCredentials
     */
    public function getKeyCredentials()
    {
        if (array_key_exists("keyCredentials", $this->_propDict)) {
           return $this->_propDict["keyCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyCredentials
    * The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
    *
    * @param KeyCredential[] $val The keyCredentials
    *
    * @return Application
    */
    public function setKeyCredentials($val)
    {
        $this->_propDict["keyCredentials"] = $val;
        return $this;
    }

    /**
    * Gets the logo
    * The main logo for the application. Not nullable.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The logo
    */
    public function getLogo()
    {
        if (array_key_exists("logo", $this->_propDict)) {
            if (is_a($this->_propDict["logo"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["logo"])) {
                return $this->_propDict["logo"];
            } else {
                $this->_propDict["logo"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["logo"]);
                return $this->_propDict["logo"];
            }
        }
        return null;
    }

    /**
    * Sets the logo
    * The main logo for the application. Not nullable.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The logo
    *
    * @return Application
    */
    public function setLogo($val)
    {
        $this->_propDict["logo"] = $val;
        return $this;
    }

    /**
    * Gets the notes
    * Notes relevant for the management of the application.
    *
    * @return string|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    * Notes relevant for the management of the application.
    *
    * @param string $val The notes
    *
    * @return Application
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the oauth2RequirePostResponse
    *
    * @return bool|null The oauth2RequirePostResponse
    */
    public function getOauth2RequirePostResponse()
    {
        if (array_key_exists("oauth2RequirePostResponse", $this->_propDict)) {
            return $this->_propDict["oauth2RequirePostResponse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oauth2RequirePostResponse
    *
    * @param bool $val The oauth2RequirePostResponse
    *
    * @return Application
    */
    public function setOauth2RequirePostResponse($val)
    {
        $this->_propDict["oauth2RequirePostResponse"] = boolval($val);
        return $this;
    }

    /**
    * Gets the optionalClaims
    * Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
    *
    * @return OptionalClaims|null The optionalClaims
    */
    public function getOptionalClaims()
    {
        if (array_key_exists("optionalClaims", $this->_propDict)) {
            if (is_a($this->_propDict["optionalClaims"], "\Microsoft\Graph\Model\OptionalClaims") || is_null($this->_propDict["optionalClaims"])) {
                return $this->_propDict["optionalClaims"];
            } else {
                $this->_propDict["optionalClaims"] = new OptionalClaims($this->_propDict["optionalClaims"]);
                return $this->_propDict["optionalClaims"];
            }
        }
        return null;
    }

    /**
    * Sets the optionalClaims
    * Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
    *
    * @param OptionalClaims $val The optionalClaims
    *
    * @return Application
    */
    public function setOptionalClaims($val)
    {
        $this->_propDict["optionalClaims"] = $val;
        return $this;
    }

    /**
    * Gets the parentalControlSettings
    * Specifies parental control settings for an application.
    *
    * @return ParentalControlSettings|null The parentalControlSettings
    */
    public function getParentalControlSettings()
    {
        if (array_key_exists("parentalControlSettings", $this->_propDict)) {
            if (is_a($this->_propDict["parentalControlSettings"], "\Microsoft\Graph\Model\ParentalControlSettings") || is_null($this->_propDict["parentalControlSettings"])) {
                return $this->_propDict["parentalControlSettings"];
            } else {
                $this->_propDict["parentalControlSettings"] = new ParentalControlSettings($this->_propDict["parentalControlSettings"]);
                return $this->_propDict["parentalControlSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the parentalControlSettings
    * Specifies parental control settings for an application.
    *
    * @param ParentalControlSettings $val The parentalControlSettings
    *
    * @return Application
    */
    public function setParentalControlSettings($val)
    {
        $this->_propDict["parentalControlSettings"] = $val;
        return $this;
    }


     /**
     * Gets the passwordCredentials
    * The collection of password credentials associated with the application. Not nullable.
     *
     * @return array|null The passwordCredentials
     */
    public function getPasswordCredentials()
    {
        if (array_key_exists("passwordCredentials", $this->_propDict)) {
           return $this->_propDict["passwordCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordCredentials
    * The collection of password credentials associated with the application. Not nullable.
    *
    * @param PasswordCredential[] $val The passwordCredentials
    *
    * @return Application
    */
    public function setPasswordCredentials($val)
    {
        $this->_propDict["passwordCredentials"] = $val;
        return $this;
    }

    /**
    * Gets the publicClient
    * Specifies settings for installed clients such as desktop or mobile devices.
    *
    * @return PublicClientApplication|null The publicClient
    */
    public function getPublicClient()
    {
        if (array_key_exists("publicClient", $this->_propDict)) {
            if (is_a($this->_propDict["publicClient"], "\Microsoft\Graph\Model\PublicClientApplication") || is_null($this->_propDict["publicClient"])) {
                return $this->_propDict["publicClient"];
            } else {
                $this->_propDict["publicClient"] = new PublicClientApplication($this->_propDict["publicClient"]);
                return $this->_propDict["publicClient"];
            }
        }
        return null;
    }

    /**
    * Sets the publicClient
    * Specifies settings for installed clients such as desktop or mobile devices.
    *
    * @param PublicClientApplication $val The publicClient
    *
    * @return Application
    */
    public function setPublicClient($val)
    {
        $this->_propDict["publicClient"] = $val;
        return $this;
    }

    /**
    * Gets the publisherDomain
    * The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith).
    *
    * @return string|null The publisherDomain
    */
    public function getPublisherDomain()
    {
        if (array_key_exists("publisherDomain", $this->_propDict)) {
            return $this->_propDict["publisherDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisherDomain
    * The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith).
    *
    * @param string $val The publisherDomain
    *
    * @return Application
    */
    public function setPublisherDomain($val)
    {
        $this->_propDict["publisherDomain"] = $val;
        return $this;
    }

    /**
    * Gets the requestSignatureVerification
    * Specifies whether this application requires Azure AD to verify the signed authentication requests.
    *
    * @return RequestSignatureVerification|null The requestSignatureVerification
    */
    public function getRequestSignatureVerification()
    {
        if (array_key_exists("requestSignatureVerification", $this->_propDict)) {
            if (is_a($this->_propDict["requestSignatureVerification"], "\Microsoft\Graph\Model\RequestSignatureVerification") || is_null($this->_propDict["requestSignatureVerification"])) {
                return $this->_propDict["requestSignatureVerification"];
            } else {
                $this->_propDict["requestSignatureVerification"] = new RequestSignatureVerification($this->_propDict["requestSignatureVerification"]);
                return $this->_propDict["requestSignatureVerification"];
            }
        }
        return null;
    }

    /**
    * Sets the requestSignatureVerification
    * Specifies whether this application requires Azure AD to verify the signed authentication requests.
    *
    * @param RequestSignatureVerification $val The requestSignatureVerification
    *
    * @return Application
    */
    public function setRequestSignatureVerification($val)
    {
        $this->_propDict["requestSignatureVerification"] = $val;
        return $this;
    }


     /**
     * Gets the requiredResourceAccess
    * Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. For more information, see Limits on requested permissions per app. Not nullable. Supports $filter (eq, not, ge, le).
     *
     * @return array|null The requiredResourceAccess
     */
    public function getRequiredResourceAccess()
    {
        if (array_key_exists("requiredResourceAccess", $this->_propDict)) {
           return $this->_propDict["requiredResourceAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requiredResourceAccess
    * Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. For more information, see Limits on requested permissions per app. Not nullable. Supports $filter (eq, not, ge, le).
    *
    * @param RequiredResourceAccess[] $val The requiredResourceAccess
    *
    * @return Application
    */
    public function setRequiredResourceAccess($val)
    {
        $this->_propDict["requiredResourceAccess"] = $val;
        return $this;
    }

    /**
    * Gets the samlMetadataUrl
    * The URL where the service exposes SAML metadata for federation. This property is valid only for single-tenant applications. Nullable.
    *
    * @return string|null The samlMetadataUrl
    */
    public function getSamlMetadataUrl()
    {
        if (array_key_exists("samlMetadataUrl", $this->_propDict)) {
            return $this->_propDict["samlMetadataUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the samlMetadataUrl
    * The URL where the service exposes SAML metadata for federation. This property is valid only for single-tenant applications. Nullable.
    *
    * @param string $val The samlMetadataUrl
    *
    * @return Application
    */
    public function setSamlMetadataUrl($val)
    {
        $this->_propDict["samlMetadataUrl"] = $val;
        return $this;
    }

    /**
    * Gets the serviceManagementReference
    * References application or service contact information from a Service or Asset Management database. Nullable.
    *
    * @return string|null The serviceManagementReference
    */
    public function getServiceManagementReference()
    {
        if (array_key_exists("serviceManagementReference", $this->_propDict)) {
            return $this->_propDict["serviceManagementReference"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceManagementReference
    * References application or service contact information from a Service or Asset Management database. Nullable.
    *
    * @param string $val The serviceManagementReference
    *
    * @return Application
    */
    public function setServiceManagementReference($val)
    {
        $this->_propDict["serviceManagementReference"] = $val;
        return $this;
    }

    /**
    * Gets the signInAudience
    * Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount (default), and PersonalMicrosoftAccount. See more in the table. The value of this object also limits the number of permissions an app can request. For more information, see Limits on requested permissions per app. The value for this property has implications on other app object properties. As a result, if you change this property, you may need to change other properties first. For more information, see Validation differences for signInAudience.Supports $filter (eq, ne, not).
    *
    * @return string|null The signInAudience
    */
    public function getSignInAudience()
    {
        if (array_key_exists("signInAudience", $this->_propDict)) {
            return $this->_propDict["signInAudience"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInAudience
    * Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount (default), and PersonalMicrosoftAccount. See more in the table. The value of this object also limits the number of permissions an app can request. For more information, see Limits on requested permissions per app. The value for this property has implications on other app object properties. As a result, if you change this property, you may need to change other properties first. For more information, see Validation differences for signInAudience.Supports $filter (eq, ne, not).
    *
    * @param string $val The signInAudience
    *
    * @return Application
    */
    public function setSignInAudience($val)
    {
        $this->_propDict["signInAudience"] = $val;
        return $this;
    }

    /**
    * Gets the spa
    * Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
    *
    * @return SpaApplication|null The spa
    */
    public function getSpa()
    {
        if (array_key_exists("spa", $this->_propDict)) {
            if (is_a($this->_propDict["spa"], "\Microsoft\Graph\Model\SpaApplication") || is_null($this->_propDict["spa"])) {
                return $this->_propDict["spa"];
            } else {
                $this->_propDict["spa"] = new SpaApplication($this->_propDict["spa"]);
                return $this->_propDict["spa"];
            }
        }
        return null;
    }

    /**
    * Sets the spa
    * Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
    *
    * @param SpaApplication $val The spa
    *
    * @return Application
    */
    public function setSpa($val)
    {
        $this->_propDict["spa"] = $val;
        return $this;
    }

    /**
    * Gets the tags
    * Custom strings that can be used to categorize and identify the application. Not nullable. Strings added here will also appear in the tags property of any associated service principals.Supports $filter (eq, not, ge, le, startsWith) and $search.
    *
    * @return array|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    * Custom strings that can be used to categorize and identify the application. Not nullable. Strings added here will also appear in the tags property of any associated service principals.Supports $filter (eq, not, ge, le, startsWith) and $search.
    *
    * @param string[] $val The tags
    *
    * @return Application
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

    /**
    * Gets the tokenEncryptionKeyId
    * Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    *
    * @return string|null The tokenEncryptionKeyId
    */
    public function getTokenEncryptionKeyId()
    {
        if (array_key_exists("tokenEncryptionKeyId", $this->_propDict)) {
            return $this->_propDict["tokenEncryptionKeyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenEncryptionKeyId
    * Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    *
    * @param string $val The tokenEncryptionKeyId
    *
    * @return Application
    */
    public function setTokenEncryptionKeyId($val)
    {
        $this->_propDict["tokenEncryptionKeyId"] = $val;
        return $this;
    }

    /**
    * Gets the verifiedPublisher
    * Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
    *
    * @return VerifiedPublisher|null The verifiedPublisher
    */
    public function getVerifiedPublisher()
    {
        if (array_key_exists("verifiedPublisher", $this->_propDict)) {
            if (is_a($this->_propDict["verifiedPublisher"], "\Microsoft\Graph\Model\VerifiedPublisher") || is_null($this->_propDict["verifiedPublisher"])) {
                return $this->_propDict["verifiedPublisher"];
            } else {
                $this->_propDict["verifiedPublisher"] = new VerifiedPublisher($this->_propDict["verifiedPublisher"]);
                return $this->_propDict["verifiedPublisher"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiedPublisher
    * Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
    *
    * @param VerifiedPublisher $val The verifiedPublisher
    *
    * @return Application
    */
    public function setVerifiedPublisher($val)
    {
        $this->_propDict["verifiedPublisher"] = $val;
        return $this;
    }

    /**
    * Gets the web
    * Specifies settings for a web application.
    *
    * @return WebApplication|null The web
    */
    public function getWeb()
    {
        if (array_key_exists("web", $this->_propDict)) {
            if (is_a($this->_propDict["web"], "\Microsoft\Graph\Model\WebApplication") || is_null($this->_propDict["web"])) {
                return $this->_propDict["web"];
            } else {
                $this->_propDict["web"] = new WebApplication($this->_propDict["web"]);
                return $this->_propDict["web"];
            }
        }
        return null;
    }

    /**
    * Sets the web
    * Specifies settings for a web application.
    *
    * @param WebApplication $val The web
    *
    * @return Application
    */
    public function setWeb($val)
    {
        $this->_propDict["web"] = $val;
        return $this;
    }


     /**
     * Gets the appManagementPolicies
    * The appManagementPolicy applied to this application.
     *
     * @return array|null The appManagementPolicies
     */
    public function getAppManagementPolicies()
    {
        if (array_key_exists("appManagementPolicies", $this->_propDict)) {
           return $this->_propDict["appManagementPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appManagementPolicies
    * The appManagementPolicy applied to this application.
    *
    * @param AppManagementPolicy[] $val The appManagementPolicies
    *
    * @return Application
    */
    public function setAppManagementPolicies($val)
    {
        $this->_propDict["appManagementPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the createdOnBehalfOf
    * Supports $filter (/$count eq 0, /$count ne 0). Read-only.
    *
    * @return DirectoryObject|null The createdOnBehalfOf
    */
    public function getCreatedOnBehalfOf()
    {
        if (array_key_exists("createdOnBehalfOf", $this->_propDict)) {
            if (is_a($this->_propDict["createdOnBehalfOf"], "\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["createdOnBehalfOf"])) {
                return $this->_propDict["createdOnBehalfOf"];
            } else {
                $this->_propDict["createdOnBehalfOf"] = new DirectoryObject($this->_propDict["createdOnBehalfOf"]);
                return $this->_propDict["createdOnBehalfOf"];
            }
        }
        return null;
    }

    /**
    * Sets the createdOnBehalfOf
    * Supports $filter (/$count eq 0, /$count ne 0). Read-only.
    *
    * @param DirectoryObject $val The createdOnBehalfOf
    *
    * @return Application
    */
    public function setCreatedOnBehalfOf($val)
    {
        $this->_propDict["createdOnBehalfOf"] = $val;
        return $this;
    }


     /**
     * Gets the extensionProperties
    * Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     *
     * @return array|null The extensionProperties
     */
    public function getExtensionProperties()
    {
        if (array_key_exists("extensionProperties", $this->_propDict)) {
           return $this->_propDict["extensionProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extensionProperties
    * Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0).
    *
    * @param ExtensionProperty[] $val The extensionProperties
    *
    * @return Application
    */
    public function setExtensionProperties($val)
    {
        $this->_propDict["extensionProperties"] = $val;
        return $this;
    }


     /**
     * Gets the federatedIdentityCredentials
    * Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
     *
     * @return array|null The federatedIdentityCredentials
     */
    public function getFederatedIdentityCredentials()
    {
        if (array_key_exists("federatedIdentityCredentials", $this->_propDict)) {
           return $this->_propDict["federatedIdentityCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the federatedIdentityCredentials
    * Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
    *
    * @param FederatedIdentityCredential[] $val The federatedIdentityCredentials
    *
    * @return Application
    */
    public function setFederatedIdentityCredentials($val)
    {
        $this->_propDict["federatedIdentityCredentials"] = $val;
        return $this;
    }


     /**
     * Gets the homeRealmDiscoveryPolicies
     *
     * @return array|null The homeRealmDiscoveryPolicies
     */
    public function getHomeRealmDiscoveryPolicies()
    {
        if (array_key_exists("homeRealmDiscoveryPolicies", $this->_propDict)) {
           return $this->_propDict["homeRealmDiscoveryPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homeRealmDiscoveryPolicies
    *
    * @param HomeRealmDiscoveryPolicy[] $val The homeRealmDiscoveryPolicies
    *
    * @return Application
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
        $this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the owners
    * Directory objects that are owners of the application. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     *
     * @return array|null The owners
     */
    public function getOwners()
    {
        if (array_key_exists("owners", $this->_propDict)) {
           return $this->_propDict["owners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the owners
    * Directory objects that are owners of the application. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
    *
    * @param DirectoryObject[] $val The owners
    *
    * @return Application
    */
    public function setOwners($val)
    {
        $this->_propDict["owners"] = $val;
        return $this;
    }


     /**
     * Gets the tokenIssuancePolicies
     *
     * @return array|null The tokenIssuancePolicies
     */
    public function getTokenIssuancePolicies()
    {
        if (array_key_exists("tokenIssuancePolicies", $this->_propDict)) {
           return $this->_propDict["tokenIssuancePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenIssuancePolicies
    *
    * @param TokenIssuancePolicy[] $val The tokenIssuancePolicies
    *
    * @return Application
    */
    public function setTokenIssuancePolicies($val)
    {
        $this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }


     /**
     * Gets the tokenLifetimePolicies
     *
     * @return array|null The tokenLifetimePolicies
     */
    public function getTokenLifetimePolicies()
    {
        if (array_key_exists("tokenLifetimePolicies", $this->_propDict)) {
           return $this->_propDict["tokenLifetimePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenLifetimePolicies
    *
    * @param TokenLifetimePolicy[] $val The tokenLifetimePolicies
    *
    * @return Application
    */
    public function setTokenLifetimePolicies($val)
    {
        $this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }

}
