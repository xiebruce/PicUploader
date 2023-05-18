<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignIn File
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
* SignIn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignIn extends Entity
{
    /**
    * Gets the appDisplayName
    * The application name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appDisplayName
    * The application name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The appDisplayName
    *
    * @return SignIn
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the appId
    * The application identifier in Azure Active Directory. Supports $filter (eq operator only).
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
    * The application identifier in Azure Active Directory. Supports $filter (eq operator only).
    *
    * @param string $val The appId
    *
    * @return SignIn
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }


     /**
     * Gets the appliedConditionalAccessPolicies
    * A list of conditional access policies that are triggered by the corresponding sign-in activity.
     *
     * @return array|null The appliedConditionalAccessPolicies
     */
    public function getAppliedConditionalAccessPolicies()
    {
        if (array_key_exists("appliedConditionalAccessPolicies", $this->_propDict)) {
           return $this->_propDict["appliedConditionalAccessPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appliedConditionalAccessPolicies
    * A list of conditional access policies that are triggered by the corresponding sign-in activity.
    *
    * @param AppliedConditionalAccessPolicy[] $val The appliedConditionalAccessPolicies
    *
    * @return SignIn
    */
    public function setAppliedConditionalAccessPolicies($val)
    {
        $this->_propDict["appliedConditionalAccessPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the appliedEventListeners
    * Detailed information about the listeners, such as Azure Logic Apps and Azure Functions, that were triggered by the corresponding events in the sign-in event.
     *
     * @return array|null The appliedEventListeners
     */
    public function getAppliedEventListeners()
    {
        if (array_key_exists("appliedEventListeners", $this->_propDict)) {
           return $this->_propDict["appliedEventListeners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appliedEventListeners
    * Detailed information about the listeners, such as Azure Logic Apps and Azure Functions, that were triggered by the corresponding events in the sign-in event.
    *
    * @param AppliedAuthenticationEventListener[] $val The appliedEventListeners
    *
    * @return SignIn
    */
    public function setAppliedEventListeners($val)
    {
        $this->_propDict["appliedEventListeners"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationAppDeviceDetails
    * Provides details about the app and device used during an Azure AD authentication step.
    *
    * @return AuthenticationAppDeviceDetails|null The authenticationAppDeviceDetails
    */
    public function getAuthenticationAppDeviceDetails()
    {
        if (array_key_exists("authenticationAppDeviceDetails", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationAppDeviceDetails"], "\Beta\Microsoft\Graph\Model\AuthenticationAppDeviceDetails") || is_null($this->_propDict["authenticationAppDeviceDetails"])) {
                return $this->_propDict["authenticationAppDeviceDetails"];
            } else {
                $this->_propDict["authenticationAppDeviceDetails"] = new AuthenticationAppDeviceDetails($this->_propDict["authenticationAppDeviceDetails"]);
                return $this->_propDict["authenticationAppDeviceDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationAppDeviceDetails
    * Provides details about the app and device used during an Azure AD authentication step.
    *
    * @param AuthenticationAppDeviceDetails $val The authenticationAppDeviceDetails
    *
    * @return SignIn
    */
    public function setAuthenticationAppDeviceDetails($val)
    {
        $this->_propDict["authenticationAppDeviceDetails"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationAppPolicyEvaluationDetails
    * Provides details of the Azure AD policies applied to a user and client authentication app during an authentication step.
     *
     * @return array|null The authenticationAppPolicyEvaluationDetails
     */
    public function getAuthenticationAppPolicyEvaluationDetails()
    {
        if (array_key_exists("authenticationAppPolicyEvaluationDetails", $this->_propDict)) {
           return $this->_propDict["authenticationAppPolicyEvaluationDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationAppPolicyEvaluationDetails
    * Provides details of the Azure AD policies applied to a user and client authentication app during an authentication step.
    *
    * @param AuthenticationAppPolicyDetails[] $val The authenticationAppPolicyEvaluationDetails
    *
    * @return SignIn
    */
    public function setAuthenticationAppPolicyEvaluationDetails($val)
    {
        $this->_propDict["authenticationAppPolicyEvaluationDetails"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationContextClassReferences
    * Contains a collection of values that represent the conditional access authentication contexts applied to the sign-in.
     *
     * @return array|null The authenticationContextClassReferences
     */
    public function getAuthenticationContextClassReferences()
    {
        if (array_key_exists("authenticationContextClassReferences", $this->_propDict)) {
           return $this->_propDict["authenticationContextClassReferences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationContextClassReferences
    * Contains a collection of values that represent the conditional access authentication contexts applied to the sign-in.
    *
    * @param AuthenticationContext[] $val The authenticationContextClassReferences
    *
    * @return SignIn
    */
    public function setAuthenticationContextClassReferences($val)
    {
        $this->_propDict["authenticationContextClassReferences"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationDetails
    * The result of the authentication attempt and additional details on the authentication method.
     *
     * @return array|null The authenticationDetails
     */
    public function getAuthenticationDetails()
    {
        if (array_key_exists("authenticationDetails", $this->_propDict)) {
           return $this->_propDict["authenticationDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationDetails
    * The result of the authentication attempt and additional details on the authentication method.
    *
    * @param AuthenticationDetail[] $val The authenticationDetails
    *
    * @return SignIn
    */
    public function setAuthenticationDetails($val)
    {
        $this->_propDict["authenticationDetails"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationMethodsUsed
    * The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
    *
    * @return array|null The authenticationMethodsUsed
    */
    public function getAuthenticationMethodsUsed()
    {
        if (array_key_exists("authenticationMethodsUsed", $this->_propDict)) {
            return $this->_propDict["authenticationMethodsUsed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationMethodsUsed
    * The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
    *
    * @param string[] $val The authenticationMethodsUsed
    *
    * @return SignIn
    */
    public function setAuthenticationMethodsUsed($val)
    {
        $this->_propDict["authenticationMethodsUsed"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationProcessingDetails
    * Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication.
     *
     * @return array|null The authenticationProcessingDetails
     */
    public function getAuthenticationProcessingDetails()
    {
        if (array_key_exists("authenticationProcessingDetails", $this->_propDict)) {
           return $this->_propDict["authenticationProcessingDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationProcessingDetails
    * Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication.
    *
    * @param KeyValue[] $val The authenticationProcessingDetails
    *
    * @return SignIn
    */
    public function setAuthenticationProcessingDetails($val)
    {
        $this->_propDict["authenticationProcessingDetails"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationProtocol
    * Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue. For authentications that use protocols other than the possible values listed, the protocol type is listed as none.
    *
    * @return ProtocolType|null The authenticationProtocol
    */
    public function getAuthenticationProtocol()
    {
        if (array_key_exists("authenticationProtocol", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationProtocol"], "\Beta\Microsoft\Graph\Model\ProtocolType") || is_null($this->_propDict["authenticationProtocol"])) {
                return $this->_propDict["authenticationProtocol"];
            } else {
                $this->_propDict["authenticationProtocol"] = new ProtocolType($this->_propDict["authenticationProtocol"]);
                return $this->_propDict["authenticationProtocol"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationProtocol
    * Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue. For authentications that use protocols other than the possible values listed, the protocol type is listed as none.
    *
    * @param ProtocolType $val The authenticationProtocol
    *
    * @return SignIn
    */
    public function setAuthenticationProtocol($val)
    {
        $this->_propDict["authenticationProtocol"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationRequirement
    * This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The authenticationRequirement
    */
    public function getAuthenticationRequirement()
    {
        if (array_key_exists("authenticationRequirement", $this->_propDict)) {
            return $this->_propDict["authenticationRequirement"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationRequirement
    * This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The authenticationRequirement
    *
    * @return SignIn
    */
    public function setAuthenticationRequirement($val)
    {
        $this->_propDict["authenticationRequirement"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationRequirementPolicies
    * Sources of authentication requirement, such as conditional access, per-user MFA, identity protection, and security defaults.
     *
     * @return array|null The authenticationRequirementPolicies
     */
    public function getAuthenticationRequirementPolicies()
    {
        if (array_key_exists("authenticationRequirementPolicies", $this->_propDict)) {
           return $this->_propDict["authenticationRequirementPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationRequirementPolicies
    * Sources of authentication requirement, such as conditional access, per-user MFA, identity protection, and security defaults.
    *
    * @param AuthenticationRequirementPolicy[] $val The authenticationRequirementPolicies
    *
    * @return SignIn
    */
    public function setAuthenticationRequirementPolicies($val)
    {
        $this->_propDict["authenticationRequirementPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the autonomousSystemNumber
    * The Autonomous System Number (ASN) of the network used by the actor.
    *
    * @return int|null The autonomousSystemNumber
    */
    public function getAutonomousSystemNumber()
    {
        if (array_key_exists("autonomousSystemNumber", $this->_propDict)) {
            return $this->_propDict["autonomousSystemNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autonomousSystemNumber
    * The Autonomous System Number (ASN) of the network used by the actor.
    *
    * @param int $val The autonomousSystemNumber
    *
    * @return SignIn
    */
    public function setAutonomousSystemNumber($val)
    {
        $this->_propDict["autonomousSystemNumber"] = intval($val);
        return $this;
    }

    /**
    * Gets the azureResourceId
    * Contains a fully qualified Azure Resource Manager ID of an Azure resource accessed during the sign-in.
    *
    * @return string|null The azureResourceId
    */
    public function getAzureResourceId()
    {
        if (array_key_exists("azureResourceId", $this->_propDict)) {
            return $this->_propDict["azureResourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureResourceId
    * Contains a fully qualified Azure Resource Manager ID of an Azure resource accessed during the sign-in.
    *
    * @param string $val The azureResourceId
    *
    * @return SignIn
    */
    public function setAzureResourceId($val)
    {
        $this->_propDict["azureResourceId"] = $val;
        return $this;
    }

    /**
    * Gets the clientAppUsed
    * The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP. Supports $filter (eq operator only).
    *
    * @return string|null The clientAppUsed
    */
    public function getClientAppUsed()
    {
        if (array_key_exists("clientAppUsed", $this->_propDict)) {
            return $this->_propDict["clientAppUsed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientAppUsed
    * The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP. Supports $filter (eq operator only).
    *
    * @param string $val The clientAppUsed
    *
    * @return SignIn
    */
    public function setClientAppUsed($val)
    {
        $this->_propDict["clientAppUsed"] = $val;
        return $this;
    }

    /**
    * Gets the clientCredentialType
    * Describes the credential type that a user client or service principal provided to Azure AD to authenticate itself. You may wish to review clientCredentialType to track and eliminate less secure credential types or to watch for clients and service principals using anomalous credential types. The possible values are: none, clientSecret, clientAssertion, federatedIdentityCredential, managedIdentity, certificate, unknownFutureValue.
    *
    * @return ClientCredentialType|null The clientCredentialType
    */
    public function getClientCredentialType()
    {
        if (array_key_exists("clientCredentialType", $this->_propDict)) {
            if (is_a($this->_propDict["clientCredentialType"], "\Beta\Microsoft\Graph\Model\ClientCredentialType") || is_null($this->_propDict["clientCredentialType"])) {
                return $this->_propDict["clientCredentialType"];
            } else {
                $this->_propDict["clientCredentialType"] = new ClientCredentialType($this->_propDict["clientCredentialType"]);
                return $this->_propDict["clientCredentialType"];
            }
        }
        return null;
    }

    /**
    * Sets the clientCredentialType
    * Describes the credential type that a user client or service principal provided to Azure AD to authenticate itself. You may wish to review clientCredentialType to track and eliminate less secure credential types or to watch for clients and service principals using anomalous credential types. The possible values are: none, clientSecret, clientAssertion, federatedIdentityCredential, managedIdentity, certificate, unknownFutureValue.
    *
    * @param ClientCredentialType $val The clientCredentialType
    *
    * @return SignIn
    */
    public function setClientCredentialType($val)
    {
        $this->_propDict["clientCredentialType"] = $val;
        return $this;
    }

    /**
    * Gets the conditionalAccessStatus
    * The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue. Supports $filter (eq operator only).
    *
    * @return ConditionalAccessStatus|null The conditionalAccessStatus
    */
    public function getConditionalAccessStatus()
    {
        if (array_key_exists("conditionalAccessStatus", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessStatus"], "\Beta\Microsoft\Graph\Model\ConditionalAccessStatus") || is_null($this->_propDict["conditionalAccessStatus"])) {
                return $this->_propDict["conditionalAccessStatus"];
            } else {
                $this->_propDict["conditionalAccessStatus"] = new ConditionalAccessStatus($this->_propDict["conditionalAccessStatus"]);
                return $this->_propDict["conditionalAccessStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionalAccessStatus
    * The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue. Supports $filter (eq operator only).
    *
    * @param ConditionalAccessStatus $val The conditionalAccessStatus
    *
    * @return SignIn
    */
    public function setConditionalAccessStatus($val)
    {
        $this->_propDict["conditionalAccessStatus"] = $val;
        return $this;
    }

    /**
    * Gets the correlationId
    * The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support. Supports $filter (eq operator only).
    *
    * @return string|null The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationId
    * The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support. Supports $filter (eq operator only).
    *
    * @param string $val The correlationId
    *
    * @return SignIn
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
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
    * The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return SignIn
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the crossTenantAccessType
    * Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue. If the sign in did not cross tenant boundaries, the value is none.
    *
    * @return SignInAccessType|null The crossTenantAccessType
    */
    public function getCrossTenantAccessType()
    {
        if (array_key_exists("crossTenantAccessType", $this->_propDict)) {
            if (is_a($this->_propDict["crossTenantAccessType"], "\Beta\Microsoft\Graph\Model\SignInAccessType") || is_null($this->_propDict["crossTenantAccessType"])) {
                return $this->_propDict["crossTenantAccessType"];
            } else {
                $this->_propDict["crossTenantAccessType"] = new SignInAccessType($this->_propDict["crossTenantAccessType"]);
                return $this->_propDict["crossTenantAccessType"];
            }
        }
        return null;
    }

    /**
    * Sets the crossTenantAccessType
    * Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue. If the sign in did not cross tenant boundaries, the value is none.
    *
    * @param SignInAccessType $val The crossTenantAccessType
    *
    * @return SignIn
    */
    public function setCrossTenantAccessType($val)
    {
        $this->_propDict["crossTenantAccessType"] = $val;
        return $this;
    }

    /**
    * Gets the deviceDetail
    * The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSystem properties.
    *
    * @return DeviceDetail|null The deviceDetail
    */
    public function getDeviceDetail()
    {
        if (array_key_exists("deviceDetail", $this->_propDict)) {
            if (is_a($this->_propDict["deviceDetail"], "\Beta\Microsoft\Graph\Model\DeviceDetail") || is_null($this->_propDict["deviceDetail"])) {
                return $this->_propDict["deviceDetail"];
            } else {
                $this->_propDict["deviceDetail"] = new DeviceDetail($this->_propDict["deviceDetail"]);
                return $this->_propDict["deviceDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceDetail
    * The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSystem properties.
    *
    * @param DeviceDetail $val The deviceDetail
    *
    * @return SignIn
    */
    public function setDeviceDetail($val)
    {
        $this->_propDict["deviceDetail"] = $val;
        return $this;
    }

    /**
    * Gets the federatedCredentialId
    * Contains the identifier of an application's federated identity credential, if a federated identity credential was used to sign in.
    *
    * @return string|null The federatedCredentialId
    */
    public function getFederatedCredentialId()
    {
        if (array_key_exists("federatedCredentialId", $this->_propDict)) {
            return $this->_propDict["federatedCredentialId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the federatedCredentialId
    * Contains the identifier of an application's federated identity credential, if a federated identity credential was used to sign in.
    *
    * @param string $val The federatedCredentialId
    *
    * @return SignIn
    */
    public function setFederatedCredentialId($val)
    {
        $this->_propDict["federatedCredentialId"] = $val;
        return $this;
    }

    /**
    * Gets the flaggedForReview
    * During a failed sign in, a user may click a button in the Azure portal to mark the failed event for tenant admins. If a user clicked the button to flag the failed sign in, this value is true.
    *
    * @return bool|null The flaggedForReview
    */
    public function getFlaggedForReview()
    {
        if (array_key_exists("flaggedForReview", $this->_propDict)) {
            return $this->_propDict["flaggedForReview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the flaggedForReview
    * During a failed sign in, a user may click a button in the Azure portal to mark the failed event for tenant admins. If a user clicked the button to flag the failed sign in, this value is true.
    *
    * @param bool $val The flaggedForReview
    *
    * @return SignIn
    */
    public function setFlaggedForReview($val)
    {
        $this->_propDict["flaggedForReview"] = boolval($val);
        return $this;
    }

    /**
    * Gets the homeTenantId
    * The tenant identifier of the user initiating the sign in. Not applicable in Managed Identity or service principal sign ins.
    *
    * @return string|null The homeTenantId
    */
    public function getHomeTenantId()
    {
        if (array_key_exists("homeTenantId", $this->_propDict)) {
            return $this->_propDict["homeTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homeTenantId
    * The tenant identifier of the user initiating the sign in. Not applicable in Managed Identity or service principal sign ins.
    *
    * @param string $val The homeTenantId
    *
    * @return SignIn
    */
    public function setHomeTenantId($val)
    {
        $this->_propDict["homeTenantId"] = $val;
        return $this;
    }

    /**
    * Gets the homeTenantName
    * For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
    *
    * @return string|null The homeTenantName
    */
    public function getHomeTenantName()
    {
        if (array_key_exists("homeTenantName", $this->_propDict)) {
            return $this->_propDict["homeTenantName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homeTenantName
    * For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
    *
    * @param string $val The homeTenantName
    *
    * @return SignIn
    */
    public function setHomeTenantName($val)
    {
        $this->_propDict["homeTenantName"] = $val;
        return $this;
    }

    /**
    * Gets the incomingTokenType
    * Indicates the token types that were presented to Azure AD to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue, remoteDesktopToken.  NOTE Azure AD may have also used token types not listed in this Enum type to authenticate the actor. Do not infer the lack of a token if it is not one of the types listed. Also, please note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: remoteDesktopToken.
    *
    * @return IncomingTokenType|null The incomingTokenType
    */
    public function getIncomingTokenType()
    {
        if (array_key_exists("incomingTokenType", $this->_propDict)) {
            if (is_a($this->_propDict["incomingTokenType"], "\Beta\Microsoft\Graph\Model\IncomingTokenType") || is_null($this->_propDict["incomingTokenType"])) {
                return $this->_propDict["incomingTokenType"];
            } else {
                $this->_propDict["incomingTokenType"] = new IncomingTokenType($this->_propDict["incomingTokenType"]);
                return $this->_propDict["incomingTokenType"];
            }
        }
        return null;
    }

    /**
    * Sets the incomingTokenType
    * Indicates the token types that were presented to Azure AD to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue, remoteDesktopToken.  NOTE Azure AD may have also used token types not listed in this Enum type to authenticate the actor. Do not infer the lack of a token if it is not one of the types listed. Also, please note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: remoteDesktopToken.
    *
    * @param IncomingTokenType $val The incomingTokenType
    *
    * @return SignIn
    */
    public function setIncomingTokenType($val)
    {
        $this->_propDict["incomingTokenType"] = $val;
        return $this;
    }

    /**
    * Gets the ipAddress
    * The IP address of the client from where the sign-in occurred. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * The IP address of the client from where the sign-in occurred. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The ipAddress
    *
    * @return SignIn
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }

    /**
    * Gets the ipAddressFromResourceProvider
    * The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address Exchange receives from the user may be recorded here. This value is often null.
    *
    * @return string|null The ipAddressFromResourceProvider
    */
    public function getIpAddressFromResourceProvider()
    {
        if (array_key_exists("ipAddressFromResourceProvider", $this->_propDict)) {
            return $this->_propDict["ipAddressFromResourceProvider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddressFromResourceProvider
    * The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address Exchange receives from the user may be recorded here. This value is often null.
    *
    * @param string $val The ipAddressFromResourceProvider
    *
    * @return SignIn
    */
    public function setIpAddressFromResourceProvider($val)
    {
        $this->_propDict["ipAddressFromResourceProvider"] = $val;
        return $this;
    }

    /**
    * Gets the isInteractive
    * Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Azure AD. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Azure AD or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
    *
    * @return bool|null The isInteractive
    */
    public function getIsInteractive()
    {
        if (array_key_exists("isInteractive", $this->_propDict)) {
            return $this->_propDict["isInteractive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInteractive
    * Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Azure AD. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Azure AD or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
    *
    * @param bool $val The isInteractive
    *
    * @return SignIn
    */
    public function setIsInteractive($val)
    {
        $this->_propDict["isInteractive"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isTenantRestricted
    * Shows whether the sign in event was subject to an Azure AD tenant restriction policy.
    *
    * @return bool|null The isTenantRestricted
    */
    public function getIsTenantRestricted()
    {
        if (array_key_exists("isTenantRestricted", $this->_propDict)) {
            return $this->_propDict["isTenantRestricted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTenantRestricted
    * Shows whether the sign in event was subject to an Azure AD tenant restriction policy.
    *
    * @param bool $val The isTenantRestricted
    *
    * @return SignIn
    */
    public function setIsTenantRestricted($val)
    {
        $this->_propDict["isTenantRestricted"] = boolval($val);
        return $this;
    }

    /**
    * Gets the location
    * The city, state, and 2 letter country code from where the sign-in occurred. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
    *
    * @return SignInLocation|null The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\SignInLocation") || is_null($this->_propDict["location"])) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new SignInLocation($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }

    /**
    * Sets the location
    * The city, state, and 2 letter country code from where the sign-in occurred. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
    *
    * @param SignInLocation $val The location
    *
    * @return SignIn
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }

    /**
    * Gets the managedServiceIdentity
    * Contains information about the managed identity used for the sign in, including its type and associated Azure Resource Manager (ARM) resource ID.
    *
    * @return ManagedIdentity|null The managedServiceIdentity
    */
    public function getManagedServiceIdentity()
    {
        if (array_key_exists("managedServiceIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["managedServiceIdentity"], "\Beta\Microsoft\Graph\Model\ManagedIdentity") || is_null($this->_propDict["managedServiceIdentity"])) {
                return $this->_propDict["managedServiceIdentity"];
            } else {
                $this->_propDict["managedServiceIdentity"] = new ManagedIdentity($this->_propDict["managedServiceIdentity"]);
                return $this->_propDict["managedServiceIdentity"];
            }
        }
        return null;
    }

    /**
    * Sets the managedServiceIdentity
    * Contains information about the managed identity used for the sign in, including its type and associated Azure Resource Manager (ARM) resource ID.
    *
    * @param ManagedIdentity $val The managedServiceIdentity
    *
    * @return SignIn
    */
    public function setManagedServiceIdentity($val)
    {
        $this->_propDict["managedServiceIdentity"] = $val;
        return $this;
    }

    /**
    * Gets the mfaDetail
    *
    * @return MfaDetail|null The mfaDetail
    */
    public function getMfaDetail()
    {
        if (array_key_exists("mfaDetail", $this->_propDict)) {
            if (is_a($this->_propDict["mfaDetail"], "\Beta\Microsoft\Graph\Model\MfaDetail") || is_null($this->_propDict["mfaDetail"])) {
                return $this->_propDict["mfaDetail"];
            } else {
                $this->_propDict["mfaDetail"] = new MfaDetail($this->_propDict["mfaDetail"]);
                return $this->_propDict["mfaDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the mfaDetail
    *
    * @param MfaDetail $val The mfaDetail
    *
    * @return SignIn
    */
    public function setMfaDetail($val)
    {
        $this->_propDict["mfaDetail"] = $val;
        return $this;
    }


     /**
     * Gets the networkLocationDetails
    * The network location details including the type of network used and its names.
     *
     * @return array|null The networkLocationDetails
     */
    public function getNetworkLocationDetails()
    {
        if (array_key_exists("networkLocationDetails", $this->_propDict)) {
           return $this->_propDict["networkLocationDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkLocationDetails
    * The network location details including the type of network used and its names.
    *
    * @param NetworkLocationDetail[] $val The networkLocationDetails
    *
    * @return SignIn
    */
    public function setNetworkLocationDetails($val)
    {
        $this->_propDict["networkLocationDetails"] = $val;
        return $this;
    }

    /**
    * Gets the originalRequestId
    * The request identifier of the first request in the authentication sequence. Supports $filter (eq operator only).
    *
    * @return string|null The originalRequestId
    */
    public function getOriginalRequestId()
    {
        if (array_key_exists("originalRequestId", $this->_propDict)) {
            return $this->_propDict["originalRequestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originalRequestId
    * The request identifier of the first request in the authentication sequence. Supports $filter (eq operator only).
    *
    * @param string $val The originalRequestId
    *
    * @return SignIn
    */
    public function setOriginalRequestId($val)
    {
        $this->_propDict["originalRequestId"] = $val;
        return $this;
    }

    /**
    * Gets the privateLinkDetails
    * Contains information about the Azure AD Private Link policy that is associated with the sign in event.
    *
    * @return PrivateLinkDetails|null The privateLinkDetails
    */
    public function getPrivateLinkDetails()
    {
        if (array_key_exists("privateLinkDetails", $this->_propDict)) {
            if (is_a($this->_propDict["privateLinkDetails"], "\Beta\Microsoft\Graph\Model\PrivateLinkDetails") || is_null($this->_propDict["privateLinkDetails"])) {
                return $this->_propDict["privateLinkDetails"];
            } else {
                $this->_propDict["privateLinkDetails"] = new PrivateLinkDetails($this->_propDict["privateLinkDetails"]);
                return $this->_propDict["privateLinkDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the privateLinkDetails
    * Contains information about the Azure AD Private Link policy that is associated with the sign in event.
    *
    * @param PrivateLinkDetails $val The privateLinkDetails
    *
    * @return SignIn
    */
    public function setPrivateLinkDetails($val)
    {
        $this->_propDict["privateLinkDetails"] = $val;
        return $this;
    }

    /**
    * Gets the processingTimeInMilliseconds
    * The request processing time in milliseconds in AD STS.
    *
    * @return int|null The processingTimeInMilliseconds
    */
    public function getProcessingTimeInMilliseconds()
    {
        if (array_key_exists("processingTimeInMilliseconds", $this->_propDict)) {
            return $this->_propDict["processingTimeInMilliseconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processingTimeInMilliseconds
    * The request processing time in milliseconds in AD STS.
    *
    * @param int $val The processingTimeInMilliseconds
    *
    * @return SignIn
    */
    public function setProcessingTimeInMilliseconds($val)
    {
        $this->_propDict["processingTimeInMilliseconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the resourceDisplayName
    * The name of the resource that the user signed in to. Supports $filter (eq operator only).
    *
    * @return string|null The resourceDisplayName
    */
    public function getResourceDisplayName()
    {
        if (array_key_exists("resourceDisplayName", $this->_propDict)) {
            return $this->_propDict["resourceDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceDisplayName
    * The name of the resource that the user signed in to. Supports $filter (eq operator only).
    *
    * @param string $val The resourceDisplayName
    *
    * @return SignIn
    */
    public function setResourceDisplayName($val)
    {
        $this->_propDict["resourceDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the resourceId
    * The identifier of the resource that the user signed in to. Supports $filter (eq operator only).
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    * The identifier of the resource that the user signed in to. Supports $filter (eq operator only).
    *
    * @param string $val The resourceId
    *
    * @return SignIn
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }

    /**
    * Gets the resourceServicePrincipalId
    * The identifier of the service principal representing the target resource in the sign-in event.
    *
    * @return string|null The resourceServicePrincipalId
    */
    public function getResourceServicePrincipalId()
    {
        if (array_key_exists("resourceServicePrincipalId", $this->_propDict)) {
            return $this->_propDict["resourceServicePrincipalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceServicePrincipalId
    * The identifier of the service principal representing the target resource in the sign-in event.
    *
    * @param string $val The resourceServicePrincipalId
    *
    * @return SignIn
    */
    public function setResourceServicePrincipalId($val)
    {
        $this->_propDict["resourceServicePrincipalId"] = $val;
        return $this;
    }

    /**
    * Gets the resourceTenantId
    * The tenant identifier of the resource referenced in the sign in.
    *
    * @return string|null The resourceTenantId
    */
    public function getResourceTenantId()
    {
        if (array_key_exists("resourceTenantId", $this->_propDict)) {
            return $this->_propDict["resourceTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceTenantId
    * The tenant identifier of the resource referenced in the sign in.
    *
    * @param string $val The resourceTenantId
    *
    * @return SignIn
    */
    public function setResourceTenantId($val)
    {
        $this->_propDict["resourceTenantId"] = $val;
        return $this;
    }

    /**
    * Gets the riskDetail
    * The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @return RiskDetail|null The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            if (is_a($this->_propDict["riskDetail"], "\Beta\Microsoft\Graph\Model\RiskDetail") || is_null($this->_propDict["riskDetail"])) {
                return $this->_propDict["riskDetail"];
            } else {
                $this->_propDict["riskDetail"] = new RiskDetail($this->_propDict["riskDetail"]);
                return $this->_propDict["riskDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the riskDetail
    * The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return SignIn
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }

    /**
    * Gets the riskEventTypesV2
    * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
    *
    * @return array|null The riskEventTypesV2
    */
    public function getRiskEventTypesV2()
    {
        if (array_key_exists("riskEventTypesV2", $this->_propDict)) {
            return $this->_propDict["riskEventTypesV2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskEventTypesV2
    * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
    *
    * @param string[] $val The riskEventTypesV2
    *
    * @return SignIn
    */
    public function setRiskEventTypesV2($val)
    {
        $this->_propDict["riskEventTypes_v2"] = $val;
        return $this;
    }

    /**
    * Gets the riskLevelAggregated
    * The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @return RiskLevel|null The riskLevelAggregated
    */
    public function getRiskLevelAggregated()
    {
        if (array_key_exists("riskLevelAggregated", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevelAggregated"], "\Beta\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["riskLevelAggregated"])) {
                return $this->_propDict["riskLevelAggregated"];
            } else {
                $this->_propDict["riskLevelAggregated"] = new RiskLevel($this->_propDict["riskLevelAggregated"]);
                return $this->_propDict["riskLevelAggregated"];
            }
        }
        return null;
    }

    /**
    * Sets the riskLevelAggregated
    * The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @param RiskLevel $val The riskLevelAggregated
    *
    * @return SignIn
    */
    public function setRiskLevelAggregated($val)
    {
        $this->_propDict["riskLevelAggregated"] = $val;
        return $this;
    }

    /**
    * Gets the riskLevelDuringSignIn
    * The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @return RiskLevel|null The riskLevelDuringSignIn
    */
    public function getRiskLevelDuringSignIn()
    {
        if (array_key_exists("riskLevelDuringSignIn", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevelDuringSignIn"], "\Beta\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["riskLevelDuringSignIn"])) {
                return $this->_propDict["riskLevelDuringSignIn"];
            } else {
                $this->_propDict["riskLevelDuringSignIn"] = new RiskLevel($this->_propDict["riskLevelDuringSignIn"]);
                return $this->_propDict["riskLevelDuringSignIn"];
            }
        }
        return null;
    }

    /**
    * Sets the riskLevelDuringSignIn
    * The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @param RiskLevel $val The riskLevelDuringSignIn
    *
    * @return SignIn
    */
    public function setRiskLevelDuringSignIn($val)
    {
        $this->_propDict["riskLevelDuringSignIn"] = $val;
        return $this;
    }

    /**
    * Gets the riskState
    * The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue. Supports $filter (eq operator only).
    *
    * @return RiskState|null The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            if (is_a($this->_propDict["riskState"], "\Beta\Microsoft\Graph\Model\RiskState") || is_null($this->_propDict["riskState"])) {
                return $this->_propDict["riskState"];
            } else {
                $this->_propDict["riskState"] = new RiskState($this->_propDict["riskState"]);
                return $this->_propDict["riskState"];
            }
        }
        return null;
    }

    /**
    * Sets the riskState
    * The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue. Supports $filter (eq operator only).
    *
    * @param RiskState $val The riskState
    *
    * @return SignIn
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalCredentialKeyId
    * The unique identifier of the key credential used by the service principal to authenticate.
    *
    * @return string|null The servicePrincipalCredentialKeyId
    */
    public function getServicePrincipalCredentialKeyId()
    {
        if (array_key_exists("servicePrincipalCredentialKeyId", $this->_propDict)) {
            return $this->_propDict["servicePrincipalCredentialKeyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalCredentialKeyId
    * The unique identifier of the key credential used by the service principal to authenticate.
    *
    * @param string $val The servicePrincipalCredentialKeyId
    *
    * @return SignIn
    */
    public function setServicePrincipalCredentialKeyId($val)
    {
        $this->_propDict["servicePrincipalCredentialKeyId"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalCredentialThumbprint
    * The certificate thumbprint of the certificate used by the service principal to authenticate.
    *
    * @return string|null The servicePrincipalCredentialThumbprint
    */
    public function getServicePrincipalCredentialThumbprint()
    {
        if (array_key_exists("servicePrincipalCredentialThumbprint", $this->_propDict)) {
            return $this->_propDict["servicePrincipalCredentialThumbprint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalCredentialThumbprint
    * The certificate thumbprint of the certificate used by the service principal to authenticate.
    *
    * @param string $val The servicePrincipalCredentialThumbprint
    *
    * @return SignIn
    */
    public function setServicePrincipalCredentialThumbprint($val)
    {
        $this->_propDict["servicePrincipalCredentialThumbprint"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalId
    * The application identifier used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The servicePrincipalId
    */
    public function getServicePrincipalId()
    {
        if (array_key_exists("servicePrincipalId", $this->_propDict)) {
            return $this->_propDict["servicePrincipalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalId
    * The application identifier used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The servicePrincipalId
    *
    * @return SignIn
    */
    public function setServicePrincipalId($val)
    {
        $this->_propDict["servicePrincipalId"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalName
    * The application name used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The servicePrincipalName
    */
    public function getServicePrincipalName()
    {
        if (array_key_exists("servicePrincipalName", $this->_propDict)) {
            return $this->_propDict["servicePrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalName
    * The application name used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The servicePrincipalName
    *
    * @return SignIn
    */
    public function setServicePrincipalName($val)
    {
        $this->_propDict["servicePrincipalName"] = $val;
        return $this;
    }


     /**
     * Gets the sessionLifetimePolicies
    * Any conditional access session management policies that were applied during the sign-in event.
     *
     * @return array|null The sessionLifetimePolicies
     */
    public function getSessionLifetimePolicies()
    {
        if (array_key_exists("sessionLifetimePolicies", $this->_propDict)) {
           return $this->_propDict["sessionLifetimePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sessionLifetimePolicies
    * Any conditional access session management policies that were applied during the sign-in event.
    *
    * @param SessionLifetimePolicy[] $val The sessionLifetimePolicies
    *
    * @return SignIn
    */
    public function setSessionLifetimePolicies($val)
    {
        $this->_propDict["sessionLifetimePolicies"] = $val;
        return $this;
    }

    /**
    * Gets the signInEventTypes
    * Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue. Supports $filter (eq, ne).
    *
    * @return array|null The signInEventTypes
    */
    public function getSignInEventTypes()
    {
        if (array_key_exists("signInEventTypes", $this->_propDict)) {
            return $this->_propDict["signInEventTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInEventTypes
    * Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue. Supports $filter (eq, ne).
    *
    * @param string[] $val The signInEventTypes
    *
    * @return SignIn
    */
    public function setSignInEventTypes($val)
    {
        $this->_propDict["signInEventTypes"] = $val;
        return $this;
    }

    /**
    * Gets the signInIdentifier
    * The identification that the user provided to sign in. It may be the userPrincipalName but it's also populated when a user signs in using other identifiers.
    *
    * @return string|null The signInIdentifier
    */
    public function getSignInIdentifier()
    {
        if (array_key_exists("signInIdentifier", $this->_propDict)) {
            return $this->_propDict["signInIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInIdentifier
    * The identification that the user provided to sign in. It may be the userPrincipalName but it's also populated when a user signs in using other identifiers.
    *
    * @param string $val The signInIdentifier
    *
    * @return SignIn
    */
    public function setSignInIdentifier($val)
    {
        $this->_propDict["signInIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the signInIdentifierType
    * The type of sign in identifier. Possible values are: userPrincipalName, phoneNumber, proxyAddress, qrCode, onPremisesUserPrincipalName, unknownFutureValue.
    *
    * @return SignInIdentifierType|null The signInIdentifierType
    */
    public function getSignInIdentifierType()
    {
        if (array_key_exists("signInIdentifierType", $this->_propDict)) {
            if (is_a($this->_propDict["signInIdentifierType"], "\Beta\Microsoft\Graph\Model\SignInIdentifierType") || is_null($this->_propDict["signInIdentifierType"])) {
                return $this->_propDict["signInIdentifierType"];
            } else {
                $this->_propDict["signInIdentifierType"] = new SignInIdentifierType($this->_propDict["signInIdentifierType"]);
                return $this->_propDict["signInIdentifierType"];
            }
        }
        return null;
    }

    /**
    * Sets the signInIdentifierType
    * The type of sign in identifier. Possible values are: userPrincipalName, phoneNumber, proxyAddress, qrCode, onPremisesUserPrincipalName, unknownFutureValue.
    *
    * @param SignInIdentifierType $val The signInIdentifierType
    *
    * @return SignIn
    */
    public function setSignInIdentifierType($val)
    {
        $this->_propDict["signInIdentifierType"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
    *
    * @return SignInStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\SignInStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SignInStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
    *
    * @param SignInStatus $val The status
    *
    * @return SignIn
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the tokenIssuerName
    * The name of the identity provider. For example, sts.microsoft.com. Supports $filter (eq operator only).
    *
    * @return string|null The tokenIssuerName
    */
    public function getTokenIssuerName()
    {
        if (array_key_exists("tokenIssuerName", $this->_propDict)) {
            return $this->_propDict["tokenIssuerName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenIssuerName
    * The name of the identity provider. For example, sts.microsoft.com. Supports $filter (eq operator only).
    *
    * @param string $val The tokenIssuerName
    *
    * @return SignIn
    */
    public function setTokenIssuerName($val)
    {
        $this->_propDict["tokenIssuerName"] = $val;
        return $this;
    }

    /**
    * Gets the tokenIssuerType
    * The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension.
    *
    * @return TokenIssuerType|null The tokenIssuerType
    */
    public function getTokenIssuerType()
    {
        if (array_key_exists("tokenIssuerType", $this->_propDict)) {
            if (is_a($this->_propDict["tokenIssuerType"], "\Beta\Microsoft\Graph\Model\TokenIssuerType") || is_null($this->_propDict["tokenIssuerType"])) {
                return $this->_propDict["tokenIssuerType"];
            } else {
                $this->_propDict["tokenIssuerType"] = new TokenIssuerType($this->_propDict["tokenIssuerType"]);
                return $this->_propDict["tokenIssuerType"];
            }
        }
        return null;
    }

    /**
    * Sets the tokenIssuerType
    * The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension.
    *
    * @param TokenIssuerType $val The tokenIssuerType
    *
    * @return SignIn
    */
    public function setTokenIssuerType($val)
    {
        $this->_propDict["tokenIssuerType"] = $val;
        return $this;
    }

    /**
    * Gets the uniqueTokenIdentifier
    * A unique base64 encoded request identifier used to track tokens issued by Azure AD as they are redeemed at resource providers.
    *
    * @return string|null The uniqueTokenIdentifier
    */
    public function getUniqueTokenIdentifier()
    {
        if (array_key_exists("uniqueTokenIdentifier", $this->_propDict)) {
            return $this->_propDict["uniqueTokenIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uniqueTokenIdentifier
    * A unique base64 encoded request identifier used to track tokens issued by Azure AD as they are redeemed at resource providers.
    *
    * @param string $val The uniqueTokenIdentifier
    *
    * @return SignIn
    */
    public function setUniqueTokenIdentifier($val)
    {
        $this->_propDict["uniqueTokenIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the userAgent
    * The user agent information related to sign-in. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The userAgent
    */
    public function getUserAgent()
    {
        if (array_key_exists("userAgent", $this->_propDict)) {
            return $this->_propDict["userAgent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userAgent
    * The user agent information related to sign-in. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The userAgent
    *
    * @return SignIn
    */
    public function setUserAgent($val)
    {
        $this->_propDict["userAgent"] = $val;
        return $this;
    }

    /**
    * Gets the userDisplayName
    * The display name of the user. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    * The display name of the user. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The userDisplayName
    *
    * @return SignIn
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    * The identifier of the user. Supports $filter (eq operator only).
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * The identifier of the user. Supports $filter (eq operator only).
    *
    * @param string $val The userId
    *
    * @return SignIn
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * The UPN of the user. Supports $filter (eq and startsWith operators only).
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
    * The UPN of the user. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The userPrincipalName
    *
    * @return SignIn
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the userType
    * Identifies whether the user is a member or guest in the tenant. Possible values are: member, guest, unknownFutureValue.
    *
    * @return SignInUserType|null The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            if (is_a($this->_propDict["userType"], "\Beta\Microsoft\Graph\Model\SignInUserType") || is_null($this->_propDict["userType"])) {
                return $this->_propDict["userType"];
            } else {
                $this->_propDict["userType"] = new SignInUserType($this->_propDict["userType"]);
                return $this->_propDict["userType"];
            }
        }
        return null;
    }

    /**
    * Sets the userType
    * Identifies whether the user is a member or guest in the tenant. Possible values are: member, guest, unknownFutureValue.
    *
    * @param SignInUserType $val The userType
    *
    * @return SignIn
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }

}
