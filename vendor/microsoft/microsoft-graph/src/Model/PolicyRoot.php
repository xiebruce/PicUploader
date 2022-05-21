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
namespace Microsoft\Graph\Model;

/**
* PolicyRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyRoot extends Entity
{
    /**
    * Gets the authenticationMethodsPolicy
    * The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
    *
    * @return AuthenticationMethodsPolicy|null The authenticationMethodsPolicy
    */
    public function getAuthenticationMethodsPolicy()
    {
        if (array_key_exists("authenticationMethodsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethodsPolicy"], "\Microsoft\Graph\Model\AuthenticationMethodsPolicy") || is_null($this->_propDict["authenticationMethodsPolicy"])) {
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
    * Gets the authenticationFlowsPolicy
    * The policy configuration of the self-service sign-up experience of external users.
    *
    * @return AuthenticationFlowsPolicy|null The authenticationFlowsPolicy
    */
    public function getAuthenticationFlowsPolicy()
    {
        if (array_key_exists("authenticationFlowsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationFlowsPolicy"], "\Microsoft\Graph\Model\AuthenticationFlowsPolicy") || is_null($this->_propDict["authenticationFlowsPolicy"])) {
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
    * Gets the authorizationPolicy
    * The policy that controls Azure AD authorization settings.
    *
    * @return AuthorizationPolicy|null The authorizationPolicy
    */
    public function getAuthorizationPolicy()
    {
        if (array_key_exists("authorizationPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authorizationPolicy"], "\Microsoft\Graph\Model\AuthorizationPolicy") || is_null($this->_propDict["authorizationPolicy"])) {
                return $this->_propDict["authorizationPolicy"];
            } else {
                $this->_propDict["authorizationPolicy"] = new AuthorizationPolicy($this->_propDict["authorizationPolicy"]);
                return $this->_propDict["authorizationPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the authorizationPolicy
    * The policy that controls Azure AD authorization settings.
    *
    * @param AuthorizationPolicy $val The authorizationPolicy
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
    * Gets the adminConsentRequestPolicy
    * The policy by which consent requests are created and managed for the entire tenant.
    *
    * @return AdminConsentRequestPolicy|null The adminConsentRequestPolicy
    */
    public function getAdminConsentRequestPolicy()
    {
        if (array_key_exists("adminConsentRequestPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["adminConsentRequestPolicy"], "\Microsoft\Graph\Model\AdminConsentRequestPolicy") || is_null($this->_propDict["adminConsentRequestPolicy"])) {
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
            if (is_a($this->_propDict["identitySecurityDefaultsEnforcementPolicy"], "\Microsoft\Graph\Model\IdentitySecurityDefaultsEnforcementPolicy") || is_null($this->_propDict["identitySecurityDefaultsEnforcementPolicy"])) {
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

}
