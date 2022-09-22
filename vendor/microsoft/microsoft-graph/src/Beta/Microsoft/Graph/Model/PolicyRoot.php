<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicyRoot File
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
* PolicyRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new PolicyRoot
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the PolicyRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the authenticationMethodsPolicy
    * The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
    *
    * @return AuthenticationMethodsPolicy|null The authenticationMethodsPolicy
    */
    public function getAuthenticationMethodsPolicy()
    {
        if (array_key_exists("authenticationMethodsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethodsPolicy"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodsPolicy") || is_null($this->_propDict["authenticationMethodsPolicy"])) {
                return $this->_propDict["authenticationMethodsPolicy"];
            } else {
                $this->_propDict["authenticationMethodsPolicy"] = new AuthenticationMethodsPolicy($this->_propDict["authenticationMethodsPolicy"]);
                return $this->_propDict["authenticationMethodsPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethodsPolicy
    * The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
    *
    * @param AuthenticationMethodsPolicy $val The authenticationMethodsPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthenticationMethodsPolicy($val)
    {
        $this->_propDict["authenticationMethodsPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationStrengthPolicies
     *
     * @return array|null The authenticationStrengthPolicies
     */
    public function getAuthenticationStrengthPolicies()
    {
        if (array_key_exists("authenticationStrengthPolicies", $this->_propDict)) {
           return $this->_propDict["authenticationStrengthPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationStrengthPolicies
    *
    * @param AuthenticationStrengthPolicy[] $val The authenticationStrengthPolicies
    *
    * @return PolicyRoot
    */
    public function setAuthenticationStrengthPolicies($val)
    {
        $this->_propDict["authenticationStrengthPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationFlowsPolicy
    * The policy configuration of the self-service sign-up experience of external users.
    *
    * @return AuthenticationFlowsPolicy|null The authenticationFlowsPolicy
    */
    public function getAuthenticationFlowsPolicy()
    {
        if (array_key_exists("authenticationFlowsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationFlowsPolicy"], "\Beta\Microsoft\Graph\Model\AuthenticationFlowsPolicy") || is_null($this->_propDict["authenticationFlowsPolicy"])) {
                return $this->_propDict["authenticationFlowsPolicy"];
            } else {
                $this->_propDict["authenticationFlowsPolicy"] = new AuthenticationFlowsPolicy($this->_propDict["authenticationFlowsPolicy"]);
                return $this->_propDict["authenticationFlowsPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationFlowsPolicy
    * The policy configuration of the self-service sign-up experience of external users.
    *
    * @param AuthenticationFlowsPolicy $val The authenticationFlowsPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthenticationFlowsPolicy($val)
    {
        $this->_propDict["authenticationFlowsPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the b2cAuthenticationMethodsPolicy
    * The Azure AD B2C policies that define how end users register via local accounts.
    *
    * @return B2cAuthenticationMethodsPolicy|null The b2cAuthenticationMethodsPolicy
    */
    public function getB2cAuthenticationMethodsPolicy()
    {
        if (array_key_exists("b2cAuthenticationMethodsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["b2cAuthenticationMethodsPolicy"], "\Beta\Microsoft\Graph\Model\B2cAuthenticationMethodsPolicy") || is_null($this->_propDict["b2cAuthenticationMethodsPolicy"])) {
                return $this->_propDict["b2cAuthenticationMethodsPolicy"];
            } else {
                $this->_propDict["b2cAuthenticationMethodsPolicy"] = new B2cAuthenticationMethodsPolicy($this->_propDict["b2cAuthenticationMethodsPolicy"]);
                return $this->_propDict["b2cAuthenticationMethodsPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the b2cAuthenticationMethodsPolicy
    * The Azure AD B2C policies that define how end users register via local accounts.
    *
    * @param B2cAuthenticationMethodsPolicy $val The b2cAuthenticationMethodsPolicy
    *
    * @return PolicyRoot
    */
    public function setB2cAuthenticationMethodsPolicy($val)
    {
        $this->_propDict["b2cAuthenticationMethodsPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the deviceRegistrationPolicy
    *
    * @return DeviceRegistrationPolicy|null The deviceRegistrationPolicy
    */
    public function getDeviceRegistrationPolicy()
    {
        if (array_key_exists("deviceRegistrationPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["deviceRegistrationPolicy"], "\Beta\Microsoft\Graph\Model\DeviceRegistrationPolicy") || is_null($this->_propDict["deviceRegistrationPolicy"])) {
                return $this->_propDict["deviceRegistrationPolicy"];
            } else {
                $this->_propDict["deviceRegistrationPolicy"] = new DeviceRegistrationPolicy($this->_propDict["deviceRegistrationPolicy"]);
                return $this->_propDict["deviceRegistrationPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceRegistrationPolicy
    *
    * @param DeviceRegistrationPolicy $val The deviceRegistrationPolicy
    *
    * @return PolicyRoot
    */
    public function setDeviceRegistrationPolicy($val)
    {
        $this->_propDict["deviceRegistrationPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the activityBasedTimeoutPolicies
    * The policy that controls the idle time out for web sessions for applications.
     *
     * @return array|null The activityBasedTimeoutPolicies
     */
    public function getActivityBasedTimeoutPolicies()
    {
        if (array_key_exists("activityBasedTimeoutPolicies", $this->_propDict)) {
           return $this->_propDict["activityBasedTimeoutPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityBasedTimeoutPolicies
    * The policy that controls the idle time out for web sessions for applications.
    *
    * @param ActivityBasedTimeoutPolicy[] $val The activityBasedTimeoutPolicies
    *
    * @return PolicyRoot
    */
    public function setActivityBasedTimeoutPolicies($val)
    {
        $this->_propDict["activityBasedTimeoutPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the appManagementPolicies
    * The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
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
    * The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
    *
    * @param AppManagementPolicy[] $val The appManagementPolicies
    *
    * @return PolicyRoot
    */
    public function setAppManagementPolicies($val)
    {
        $this->_propDict["appManagementPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the authorizationPolicy
    * The policy that controls Azure AD authorization settings.
     *
     * @return array|null The authorizationPolicy
     */
    public function getAuthorizationPolicy()
    {
        if (array_key_exists("authorizationPolicy", $this->_propDict)) {
           return $this->_propDict["authorizationPolicy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizationPolicy
    * The policy that controls Azure AD authorization settings.
    *
    * @param AuthorizationPolicy[] $val The authorizationPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthorizationPolicy($val)
    {
        $this->_propDict["authorizationPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the claimsMappingPolicies
    * The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     *
     * @return array|null The claimsMappingPolicies
     */
    public function getClaimsMappingPolicies()
    {
        if (array_key_exists("claimsMappingPolicies", $this->_propDict)) {
           return $this->_propDict["claimsMappingPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the claimsMappingPolicies
    * The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
    *
    * @param ClaimsMappingPolicy[] $val The claimsMappingPolicies
    *
    * @return PolicyRoot
    */
    public function setClaimsMappingPolicies($val)
    {
        $this->_propDict["claimsMappingPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the crossTenantAccessPolicy
    * The custom rules that define an access scenario when interacting with external Azure AD tenants.
    *
    * @return CrossTenantAccessPolicy|null The crossTenantAccessPolicy
    */
    public function getCrossTenantAccessPolicy()
    {
        if (array_key_exists("crossTenantAccessPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["crossTenantAccessPolicy"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicy") || is_null($this->_propDict["crossTenantAccessPolicy"])) {
                return $this->_propDict["crossTenantAccessPolicy"];
            } else {
                $this->_propDict["crossTenantAccessPolicy"] = new CrossTenantAccessPolicy($this->_propDict["crossTenantAccessPolicy"]);
                return $this->_propDict["crossTenantAccessPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the crossTenantAccessPolicy
    * The custom rules that define an access scenario when interacting with external Azure AD tenants.
    *
    * @param CrossTenantAccessPolicy $val The crossTenantAccessPolicy
    *
    * @return PolicyRoot
    */
    public function setCrossTenantAccessPolicy($val)
    {
        $this->_propDict["crossTenantAccessPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the defaultAppManagementPolicy
    * The tenant-wide policy that enforces app management restrictions for all applications and service principals.
    *
    * @return TenantAppManagementPolicy|null The defaultAppManagementPolicy
    */
    public function getDefaultAppManagementPolicy()
    {
        if (array_key_exists("defaultAppManagementPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["defaultAppManagementPolicy"], "\Beta\Microsoft\Graph\Model\TenantAppManagementPolicy") || is_null($this->_propDict["defaultAppManagementPolicy"])) {
                return $this->_propDict["defaultAppManagementPolicy"];
            } else {
                $this->_propDict["defaultAppManagementPolicy"] = new TenantAppManagementPolicy($this->_propDict["defaultAppManagementPolicy"]);
                return $this->_propDict["defaultAppManagementPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultAppManagementPolicy
    * The tenant-wide policy that enforces app management restrictions for all applications and service principals.
    *
    * @param TenantAppManagementPolicy $val The defaultAppManagementPolicy
    *
    * @return PolicyRoot
    */
    public function setDefaultAppManagementPolicy($val)
    {
        $this->_propDict["defaultAppManagementPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the externalIdentitiesPolicy
    * Represents the tenant-wide policy that controls whether external users can leave an Azure AD tenant via self-service controls.
    *
    * @return ExternalIdentitiesPolicy|null The externalIdentitiesPolicy
    */
    public function getExternalIdentitiesPolicy()
    {
        if (array_key_exists("externalIdentitiesPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["externalIdentitiesPolicy"], "\Beta\Microsoft\Graph\Model\ExternalIdentitiesPolicy") || is_null($this->_propDict["externalIdentitiesPolicy"])) {
                return $this->_propDict["externalIdentitiesPolicy"];
            } else {
                $this->_propDict["externalIdentitiesPolicy"] = new ExternalIdentitiesPolicy($this->_propDict["externalIdentitiesPolicy"]);
                return $this->_propDict["externalIdentitiesPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the externalIdentitiesPolicy
    * Represents the tenant-wide policy that controls whether external users can leave an Azure AD tenant via self-service controls.
    *
    * @param ExternalIdentitiesPolicy $val The externalIdentitiesPolicy
    *
    * @return PolicyRoot
    */
    public function setExternalIdentitiesPolicy($val)
    {
        $this->_propDict["externalIdentitiesPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the homeRealmDiscoveryPolicies
    * The policy to control Azure AD authentication behavior for federated users.
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
    * The policy to control Azure AD authentication behavior for federated users.
    *
    * @param HomeRealmDiscoveryPolicy[] $val The homeRealmDiscoveryPolicies
    *
    * @return PolicyRoot
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
        $this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the permissionGrantPolicies
    * The policy that specifies the conditions under which consent can be granted.
     *
     * @return array|null The permissionGrantPolicies
     */
    public function getPermissionGrantPolicies()
    {
        if (array_key_exists("permissionGrantPolicies", $this->_propDict)) {
           return $this->_propDict["permissionGrantPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionGrantPolicies
    * The policy that specifies the conditions under which consent can be granted.
    *
    * @param PermissionGrantPolicy[] $val The permissionGrantPolicies
    *
    * @return PolicyRoot
    */
    public function setPermissionGrantPolicies($val)
    {
        $this->_propDict["permissionGrantPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the servicePrincipalCreationPolicies
     *
     * @return array|null The servicePrincipalCreationPolicies
     */
    public function getServicePrincipalCreationPolicies()
    {
        if (array_key_exists("servicePrincipalCreationPolicies", $this->_propDict)) {
           return $this->_propDict["servicePrincipalCreationPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalCreationPolicies
    *
    * @param ServicePrincipalCreationPolicy[] $val The servicePrincipalCreationPolicies
    *
    * @return PolicyRoot
    */
    public function setServicePrincipalCreationPolicies($val)
    {
        $this->_propDict["servicePrincipalCreationPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the tokenIssuancePolicies
    * The policy that specifies the characteristics of SAML tokens issued by Azure AD.
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
    * The policy that specifies the characteristics of SAML tokens issued by Azure AD.
    *
    * @param TokenIssuancePolicy[] $val The tokenIssuancePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenIssuancePolicies($val)
    {
        $this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }


     /**
     * Gets the tokenLifetimePolicies
    * The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
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
    * The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
    *
    * @param TokenLifetimePolicy[] $val The tokenLifetimePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenLifetimePolicies($val)
    {
        $this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }


     /**
     * Gets the featureRolloutPolicies
    * The feature rollout policy associated with a directory object.
     *
     * @return array|null The featureRolloutPolicies
     */
    public function getFeatureRolloutPolicies()
    {
        if (array_key_exists("featureRolloutPolicies", $this->_propDict)) {
           return $this->_propDict["featureRolloutPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the featureRolloutPolicies
    * The feature rollout policy associated with a directory object.
    *
    * @param FeatureRolloutPolicy[] $val The featureRolloutPolicies
    *
    * @return PolicyRoot
    */
    public function setFeatureRolloutPolicies($val)
    {
        $this->_propDict["featureRolloutPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the accessReviewPolicy
    * The policy that contains directory-level access review settings.
    *
    * @return AccessReviewPolicy|null The accessReviewPolicy
    */
    public function getAccessReviewPolicy()
    {
        if (array_key_exists("accessReviewPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["accessReviewPolicy"], "\Beta\Microsoft\Graph\Model\AccessReviewPolicy") || is_null($this->_propDict["accessReviewPolicy"])) {
                return $this->_propDict["accessReviewPolicy"];
            } else {
                $this->_propDict["accessReviewPolicy"] = new AccessReviewPolicy($this->_propDict["accessReviewPolicy"]);
                return $this->_propDict["accessReviewPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the accessReviewPolicy
    * The policy that contains directory-level access review settings.
    *
    * @param AccessReviewPolicy $val The accessReviewPolicy
    *
    * @return PolicyRoot
    */
    public function setAccessReviewPolicy($val)
    {
        $this->_propDict["accessReviewPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the adminConsentRequestPolicy
    * The policy by which consent requests are created and managed for the entire tenant.
    *
    * @return AdminConsentRequestPolicy|null The adminConsentRequestPolicy
    */
    public function getAdminConsentRequestPolicy()
    {
        if (array_key_exists("adminConsentRequestPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["adminConsentRequestPolicy"], "\Beta\Microsoft\Graph\Model\AdminConsentRequestPolicy") || is_null($this->_propDict["adminConsentRequestPolicy"])) {
                return $this->_propDict["adminConsentRequestPolicy"];
            } else {
                $this->_propDict["adminConsentRequestPolicy"] = new AdminConsentRequestPolicy($this->_propDict["adminConsentRequestPolicy"]);
                return $this->_propDict["adminConsentRequestPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the adminConsentRequestPolicy
    * The policy by which consent requests are created and managed for the entire tenant.
    *
    * @param AdminConsentRequestPolicy $val The adminConsentRequestPolicy
    *
    * @return PolicyRoot
    */
    public function setAdminConsentRequestPolicy($val)
    {
        $this->_propDict["adminConsentRequestPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the directoryRoleAccessReviewPolicy
    *
    * @return DirectoryRoleAccessReviewPolicy|null The directoryRoleAccessReviewPolicy
    */
    public function getDirectoryRoleAccessReviewPolicy()
    {
        if (array_key_exists("directoryRoleAccessReviewPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["directoryRoleAccessReviewPolicy"], "\Beta\Microsoft\Graph\Model\DirectoryRoleAccessReviewPolicy") || is_null($this->_propDict["directoryRoleAccessReviewPolicy"])) {
                return $this->_propDict["directoryRoleAccessReviewPolicy"];
            } else {
                $this->_propDict["directoryRoleAccessReviewPolicy"] = new DirectoryRoleAccessReviewPolicy($this->_propDict["directoryRoleAccessReviewPolicy"]);
                return $this->_propDict["directoryRoleAccessReviewPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the directoryRoleAccessReviewPolicy
    *
    * @param DirectoryRoleAccessReviewPolicy $val The directoryRoleAccessReviewPolicy
    *
    * @return PolicyRoot
    */
    public function setDirectoryRoleAccessReviewPolicy($val)
    {
        $this->_propDict["directoryRoleAccessReviewPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the conditionalAccessPolicies
    * The custom rules that define an access scenario.
     *
     * @return array|null The conditionalAccessPolicies
     */
    public function getConditionalAccessPolicies()
    {
        if (array_key_exists("conditionalAccessPolicies", $this->_propDict)) {
           return $this->_propDict["conditionalAccessPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conditionalAccessPolicies
    * The custom rules that define an access scenario.
    *
    * @param ConditionalAccessPolicy[] $val The conditionalAccessPolicies
    *
    * @return PolicyRoot
    */
    public function setConditionalAccessPolicies($val)
    {
        $this->_propDict["conditionalAccessPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the identitySecurityDefaultsEnforcementPolicy
    * The policy that represents the security defaults that protect against common attacks.
    *
    * @return IdentitySecurityDefaultsEnforcementPolicy|null The identitySecurityDefaultsEnforcementPolicy
    */
    public function getIdentitySecurityDefaultsEnforcementPolicy()
    {
        if (array_key_exists("identitySecurityDefaultsEnforcementPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["identitySecurityDefaultsEnforcementPolicy"], "\Beta\Microsoft\Graph\Model\IdentitySecurityDefaultsEnforcementPolicy") || is_null($this->_propDict["identitySecurityDefaultsEnforcementPolicy"])) {
                return $this->_propDict["identitySecurityDefaultsEnforcementPolicy"];
            } else {
                $this->_propDict["identitySecurityDefaultsEnforcementPolicy"] = new IdentitySecurityDefaultsEnforcementPolicy($this->_propDict["identitySecurityDefaultsEnforcementPolicy"]);
                return $this->_propDict["identitySecurityDefaultsEnforcementPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the identitySecurityDefaultsEnforcementPolicy
    * The policy that represents the security defaults that protect against common attacks.
    *
    * @param IdentitySecurityDefaultsEnforcementPolicy $val The identitySecurityDefaultsEnforcementPolicy
    *
    * @return PolicyRoot
    */
    public function setIdentitySecurityDefaultsEnforcementPolicy($val)
    {
        $this->_propDict["identitySecurityDefaultsEnforcementPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the mobileAppManagementPolicies
    * The policy that defines auto-enrollment configuration for a mobility management (MDM or MAM) application.
     *
     * @return array|null The mobileAppManagementPolicies
     */
    public function getMobileAppManagementPolicies()
    {
        if (array_key_exists("mobileAppManagementPolicies", $this->_propDict)) {
           return $this->_propDict["mobileAppManagementPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mobileAppManagementPolicies
    * The policy that defines auto-enrollment configuration for a mobility management (MDM or MAM) application.
    *
    * @param MobilityManagementPolicy[] $val The mobileAppManagementPolicies
    *
    * @return PolicyRoot
    */
    public function setMobileAppManagementPolicies($val)
    {
        $this->_propDict["mobileAppManagementPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the mobileDeviceManagementPolicies
     *
     * @return array|null The mobileDeviceManagementPolicies
     */
    public function getMobileDeviceManagementPolicies()
    {
        if (array_key_exists("mobileDeviceManagementPolicies", $this->_propDict)) {
           return $this->_propDict["mobileDeviceManagementPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mobileDeviceManagementPolicies
    *
    * @param MobilityManagementPolicy[] $val The mobileDeviceManagementPolicies
    *
    * @return PolicyRoot
    */
    public function setMobileDeviceManagementPolicies($val)
    {
        $this->_propDict["mobileDeviceManagementPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the roleManagementPolicies
    * Represents the role management policies.
     *
     * @return array|null The roleManagementPolicies
     */
    public function getRoleManagementPolicies()
    {
        if (array_key_exists("roleManagementPolicies", $this->_propDict)) {
           return $this->_propDict["roleManagementPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleManagementPolicies
    * Represents the role management policies.
    *
    * @param UnifiedRoleManagementPolicy[] $val The roleManagementPolicies
    *
    * @return PolicyRoot
    */
    public function setRoleManagementPolicies($val)
    {
        $this->_propDict["roleManagementPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the roleManagementPolicyAssignments
    * Represents the role management policy assignments.
     *
     * @return array|null The roleManagementPolicyAssignments
     */
    public function getRoleManagementPolicyAssignments()
    {
        if (array_key_exists("roleManagementPolicyAssignments", $this->_propDict)) {
           return $this->_propDict["roleManagementPolicyAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleManagementPolicyAssignments
    * Represents the role management policy assignments.
    *
    * @param UnifiedRoleManagementPolicyAssignment[] $val The roleManagementPolicyAssignments
    *
    * @return PolicyRoot
    */
    public function setRoleManagementPolicyAssignments($val)
    {
        $this->_propDict["roleManagementPolicyAssignments"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return PolicyRoot
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            }
        }
        return $serializableProperties;
    }
}
