<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordCredentialConfiguration File
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
* PasswordCredentialConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordCredentialConfiguration extends Entity
{

    /**
    * Gets the maxLifetime
    *
    * @return \DateInterval|null The maxLifetime
    */
    public function getMaxLifetime()
    {
        if (array_key_exists("maxLifetime", $this->_propDict)) {
            if (is_a($this->_propDict["maxLifetime"], "\DateInterval") || is_null($this->_propDict["maxLifetime"])) {
                return $this->_propDict["maxLifetime"];
            } else {
                $this->_propDict["maxLifetime"] = new \DateInterval($this->_propDict["maxLifetime"]);
                return $this->_propDict["maxLifetime"];
            }
        }
        return null;
    }

    /**
    * Sets the maxLifetime
    *
    * @param \DateInterval $val The value to assign to the maxLifetime
    *
    * @return PasswordCredentialConfiguration The PasswordCredentialConfiguration
    */
    public function setMaxLifetime($val)
    {
        $this->_propDict["maxLifetime"] = $val;
         return $this;
    }

    /**
    * Gets the restrictForAppsCreatedAfterDateTime
    * Enforces the policy for an app created on or after the enforcement date. For existing applications, the enforcement date would be backdated. To apply to all applications, this date would be null.
    *
    * @return \DateTime|null The restrictForAppsCreatedAfterDateTime
    */
    public function getRestrictForAppsCreatedAfterDateTime()
    {
        if (array_key_exists("restrictForAppsCreatedAfterDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["restrictForAppsCreatedAfterDateTime"], "\DateTime") || is_null($this->_propDict["restrictForAppsCreatedAfterDateTime"])) {
                return $this->_propDict["restrictForAppsCreatedAfterDateTime"];
            } else {
                $this->_propDict["restrictForAppsCreatedAfterDateTime"] = new \DateTime($this->_propDict["restrictForAppsCreatedAfterDateTime"]);
                return $this->_propDict["restrictForAppsCreatedAfterDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the restrictForAppsCreatedAfterDateTime
    * Enforces the policy for an app created on or after the enforcement date. For existing applications, the enforcement date would be backdated. To apply to all applications, this date would be null.
    *
    * @param \DateTime $val The value to assign to the restrictForAppsCreatedAfterDateTime
    *
    * @return PasswordCredentialConfiguration The PasswordCredentialConfiguration
    */
    public function setRestrictForAppsCreatedAfterDateTime($val)
    {
        $this->_propDict["restrictForAppsCreatedAfterDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the restrictionType
    * The type of restriction being applied. The possible values are: passwordAddition, passwordLifetime, symmetricKeyAddition, symmetricKeyLifetime,customPasswordAddition, unknownFutureValue. Each value of restrictionType can be used only once per policy.
    *
    * @return AppCredentialRestrictionType|null The restrictionType
    */
    public function getRestrictionType()
    {
        if (array_key_exists("restrictionType", $this->_propDict)) {
            if (is_a($this->_propDict["restrictionType"], "\Beta\Microsoft\Graph\Model\AppCredentialRestrictionType") || is_null($this->_propDict["restrictionType"])) {
                return $this->_propDict["restrictionType"];
            } else {
                $this->_propDict["restrictionType"] = new AppCredentialRestrictionType($this->_propDict["restrictionType"]);
                return $this->_propDict["restrictionType"];
            }
        }
        return null;
    }

    /**
    * Sets the restrictionType
    * The type of restriction being applied. The possible values are: passwordAddition, passwordLifetime, symmetricKeyAddition, symmetricKeyLifetime,customPasswordAddition, unknownFutureValue. Each value of restrictionType can be used only once per policy.
    *
    * @param AppCredentialRestrictionType $val The value to assign to the restrictionType
    *
    * @return PasswordCredentialConfiguration The PasswordCredentialConfiguration
    */
    public function setRestrictionType($val)
    {
        $this->_propDict["restrictionType"] = $val;
         return $this;
    }
}
