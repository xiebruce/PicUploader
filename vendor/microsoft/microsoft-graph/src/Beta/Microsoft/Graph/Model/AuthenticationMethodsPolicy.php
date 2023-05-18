<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodsPolicy File
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
* AuthenticationMethodsPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodsPolicy extends Entity
{
    /**
    * Gets the description
    * A description of the policy.
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
    * A description of the policy.
    *
    * @param string $val The description
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the policy.
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
    * The name of the policy.
    *
    * @param string $val The displayName
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time of the last update to the policy.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date and time of the last update to the policy.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the policyMigrationState
    * The state of migration of the authentication methods policy from the legacy multifactor authentication and self-service password reset (SSPR) policies. The possible values are: premigration - means the authentication methods policy is used for authentication only, legacy policies are respected. migrationInProgress - means the authentication methods policy is used for both authenication and SSPR, legacy policies are respected. migrationComplete - means the authentication methods policy is used for authentication and SSPR, legacy policies are ignored. unknownFutureValue - Evolvable enumeration sentinel value. Do not use.
    *
    * @return AuthenticationMethodsPolicyMigrationState|null The policyMigrationState
    */
    public function getPolicyMigrationState()
    {
        if (array_key_exists("policyMigrationState", $this->_propDict)) {
            if (is_a($this->_propDict["policyMigrationState"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodsPolicyMigrationState") || is_null($this->_propDict["policyMigrationState"])) {
                return $this->_propDict["policyMigrationState"];
            } else {
                $this->_propDict["policyMigrationState"] = new AuthenticationMethodsPolicyMigrationState($this->_propDict["policyMigrationState"]);
                return $this->_propDict["policyMigrationState"];
            }
        }
        return null;
    }

    /**
    * Sets the policyMigrationState
    * The state of migration of the authentication methods policy from the legacy multifactor authentication and self-service password reset (SSPR) policies. The possible values are: premigration - means the authentication methods policy is used for authentication only, legacy policies are respected. migrationInProgress - means the authentication methods policy is used for both authenication and SSPR, legacy policies are respected. migrationComplete - means the authentication methods policy is used for authentication and SSPR, legacy policies are ignored. unknownFutureValue - Evolvable enumeration sentinel value. Do not use.
    *
    * @param AuthenticationMethodsPolicyMigrationState $val The policyMigrationState
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setPolicyMigrationState($val)
    {
        $this->_propDict["policyMigrationState"] = $val;
        return $this;
    }

    /**
    * Gets the policyVersion
    * The version of the policy in use.
    *
    * @return string|null The policyVersion
    */
    public function getPolicyVersion()
    {
        if (array_key_exists("policyVersion", $this->_propDict)) {
            return $this->_propDict["policyVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyVersion
    * The version of the policy in use.
    *
    * @param string $val The policyVersion
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setPolicyVersion($val)
    {
        $this->_propDict["policyVersion"] = $val;
        return $this;
    }

    /**
    * Gets the reconfirmationInDays
    * Days before the user will be asked to reconfirm their method.
    *
    * @return int|null The reconfirmationInDays
    */
    public function getReconfirmationInDays()
    {
        if (array_key_exists("reconfirmationInDays", $this->_propDict)) {
            return $this->_propDict["reconfirmationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reconfirmationInDays
    * Days before the user will be asked to reconfirm their method.
    *
    * @param int $val The reconfirmationInDays
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setReconfirmationInDays($val)
    {
        $this->_propDict["reconfirmationInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the registrationEnforcement
    * Enforce registration at sign-in time. This property can be used to remind users to set up targeted authentication methods.
    *
    * @return RegistrationEnforcement|null The registrationEnforcement
    */
    public function getRegistrationEnforcement()
    {
        if (array_key_exists("registrationEnforcement", $this->_propDict)) {
            if (is_a($this->_propDict["registrationEnforcement"], "\Beta\Microsoft\Graph\Model\RegistrationEnforcement") || is_null($this->_propDict["registrationEnforcement"])) {
                return $this->_propDict["registrationEnforcement"];
            } else {
                $this->_propDict["registrationEnforcement"] = new RegistrationEnforcement($this->_propDict["registrationEnforcement"]);
                return $this->_propDict["registrationEnforcement"];
            }
        }
        return null;
    }

    /**
    * Sets the registrationEnforcement
    * Enforce registration at sign-in time. This property can be used to remind users to set up targeted authentication methods.
    *
    * @param RegistrationEnforcement $val The registrationEnforcement
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setRegistrationEnforcement($val)
    {
        $this->_propDict["registrationEnforcement"] = $val;
        return $this;
    }

    /**
    * Gets the systemCredentialPreferences
    * Prompt users with their most-preferred credential for multifactor authentication.
    *
    * @return SystemCredentialPreferences|null The systemCredentialPreferences
    */
    public function getSystemCredentialPreferences()
    {
        if (array_key_exists("systemCredentialPreferences", $this->_propDict)) {
            if (is_a($this->_propDict["systemCredentialPreferences"], "\Beta\Microsoft\Graph\Model\SystemCredentialPreferences") || is_null($this->_propDict["systemCredentialPreferences"])) {
                return $this->_propDict["systemCredentialPreferences"];
            } else {
                $this->_propDict["systemCredentialPreferences"] = new SystemCredentialPreferences($this->_propDict["systemCredentialPreferences"]);
                return $this->_propDict["systemCredentialPreferences"];
            }
        }
        return null;
    }

    /**
    * Sets the systemCredentialPreferences
    * Prompt users with their most-preferred credential for multifactor authentication.
    *
    * @param SystemCredentialPreferences $val The systemCredentialPreferences
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setSystemCredentialPreferences($val)
    {
        $this->_propDict["systemCredentialPreferences"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationMethodConfigurations
    * Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
     *
     * @return array|null The authenticationMethodConfigurations
     */
    public function getAuthenticationMethodConfigurations()
    {
        if (array_key_exists("authenticationMethodConfigurations", $this->_propDict)) {
           return $this->_propDict["authenticationMethodConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationMethodConfigurations
    * Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
    *
    * @param AuthenticationMethodConfiguration[] $val The authenticationMethodConfigurations
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setAuthenticationMethodConfigurations($val)
    {
        $this->_propDict["authenticationMethodConfigurations"] = $val;
        return $this;
    }

}
