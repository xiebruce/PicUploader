<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CredentialUserRegistrationsSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* CredentialUserRegistrationsSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CredentialUserRegistrationsSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the lastRefreshedDateTime
    * Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    *
    * @return \DateTime|null The lastRefreshedDateTime
    */
    public function getLastRefreshedDateTime()
    {
        if (array_key_exists("lastRefreshedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRefreshedDateTime"], "\DateTime") || is_null($this->_propDict["lastRefreshedDateTime"])) {
                return $this->_propDict["lastRefreshedDateTime"];
            } else {
                $this->_propDict["lastRefreshedDateTime"] = new \DateTime($this->_propDict["lastRefreshedDateTime"]);
                return $this->_propDict["lastRefreshedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRefreshedDateTime
    * Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the mfaAndSsprCapableUserCount
    * The number of users that are capable of performing multi-factor authentication or self service password reset. Optional. Read-only.
    *
    * @return int|null The mfaAndSsprCapableUserCount
    */
    public function getMfaAndSsprCapableUserCount()
    {
        if (array_key_exists("mfaAndSsprCapableUserCount", $this->_propDict)) {
            return $this->_propDict["mfaAndSsprCapableUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mfaAndSsprCapableUserCount
    * The number of users that are capable of performing multi-factor authentication or self service password reset. Optional. Read-only.
    *
    * @param int $val The mfaAndSsprCapableUserCount
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setMfaAndSsprCapableUserCount($val)
    {
        $this->_propDict["mfaAndSsprCapableUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the mfaConditionalAccessPolicyState
    * The state of a conditional access policy that enforces multi-factor authentication. Optional. Read-only.
    *
    * @return string|null The mfaConditionalAccessPolicyState
    */
    public function getMfaConditionalAccessPolicyState()
    {
        if (array_key_exists("mfaConditionalAccessPolicyState", $this->_propDict)) {
            return $this->_propDict["mfaConditionalAccessPolicyState"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mfaConditionalAccessPolicyState
    * The state of a conditional access policy that enforces multi-factor authentication. Optional. Read-only.
    *
    * @param string $val The mfaConditionalAccessPolicyState
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setMfaConditionalAccessPolicyState($val)
    {
        $this->_propDict["mfaConditionalAccessPolicyState"] = $val;
        return $this;
    }

    /**
    * Gets the mfaExcludedUserCount
    * The number of users in the multi-factor authentication exclusion security group (Microsoft 365 Lighthouse - MFA exclusions). Optional. Read-only.
    *
    * @return int|null The mfaExcludedUserCount
    */
    public function getMfaExcludedUserCount()
    {
        if (array_key_exists("mfaExcludedUserCount", $this->_propDict)) {
            return $this->_propDict["mfaExcludedUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mfaExcludedUserCount
    * The number of users in the multi-factor authentication exclusion security group (Microsoft 365 Lighthouse - MFA exclusions). Optional. Read-only.
    *
    * @param int $val The mfaExcludedUserCount
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setMfaExcludedUserCount($val)
    {
        $this->_propDict["mfaExcludedUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the mfaRegisteredUserCount
    * The number of users registered for multi-factor authentication. Optional. Read-only.
    *
    * @return int|null The mfaRegisteredUserCount
    */
    public function getMfaRegisteredUserCount()
    {
        if (array_key_exists("mfaRegisteredUserCount", $this->_propDict)) {
            return $this->_propDict["mfaRegisteredUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mfaRegisteredUserCount
    * The number of users registered for multi-factor authentication. Optional. Read-only.
    *
    * @param int $val The mfaRegisteredUserCount
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setMfaRegisteredUserCount($val)
    {
        $this->_propDict["mfaRegisteredUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the securityDefaultsEnabled
    * A flag indicating whether Identity Security Defaults is enabled. Optional. Read-only.
    *
    * @return bool|null The securityDefaultsEnabled
    */
    public function getSecurityDefaultsEnabled()
    {
        if (array_key_exists("securityDefaultsEnabled", $this->_propDict)) {
            return $this->_propDict["securityDefaultsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityDefaultsEnabled
    * A flag indicating whether Identity Security Defaults is enabled. Optional. Read-only.
    *
    * @param bool $val The securityDefaultsEnabled
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setSecurityDefaultsEnabled($val)
    {
        $this->_propDict["securityDefaultsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the ssprEnabledUserCount
    * The number of users enabled for self service password reset. Optional. Read-only.
    *
    * @return int|null The ssprEnabledUserCount
    */
    public function getSsprEnabledUserCount()
    {
        if (array_key_exists("ssprEnabledUserCount", $this->_propDict)) {
            return $this->_propDict["ssprEnabledUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ssprEnabledUserCount
    * The number of users enabled for self service password reset. Optional. Read-only.
    *
    * @param int $val The ssprEnabledUserCount
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setSsprEnabledUserCount($val)
    {
        $this->_propDict["ssprEnabledUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the ssprRegisteredUserCount
    * The number of users registered for self service password reset. Optional. Read-only.
    *
    * @return int|null The ssprRegisteredUserCount
    */
    public function getSsprRegisteredUserCount()
    {
        if (array_key_exists("ssprRegisteredUserCount", $this->_propDict)) {
            return $this->_propDict["ssprRegisteredUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ssprRegisteredUserCount
    * The number of users registered for self service password reset. Optional. Read-only.
    *
    * @param int $val The ssprRegisteredUserCount
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setSsprRegisteredUserCount($val)
    {
        $this->_propDict["ssprRegisteredUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the tenantDisplayName
    * The display name for the managed tenant. Required. Read-only.
    *
    * @return string|null The tenantDisplayName
    */
    public function getTenantDisplayName()
    {
        if (array_key_exists("tenantDisplayName", $this->_propDict)) {
            return $this->_propDict["tenantDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantDisplayName
    * The display name for the managed tenant. Required. Read-only.
    *
    * @param string $val The tenantDisplayName
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the totalUserCount
    * The total number of users in the given managed tenant. Optional. Read-only.
    *
    * @return int|null The totalUserCount
    */
    public function getTotalUserCount()
    {
        if (array_key_exists("totalUserCount", $this->_propDict)) {
            return $this->_propDict["totalUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUserCount
    * The total number of users in the given managed tenant. Optional. Read-only.
    *
    * @param int $val The totalUserCount
    *
    * @return CredentialUserRegistrationsSummary
    */
    public function setTotalUserCount($val)
    {
        $this->_propDict["totalUserCount"] = intval($val);
        return $this;
    }

}
