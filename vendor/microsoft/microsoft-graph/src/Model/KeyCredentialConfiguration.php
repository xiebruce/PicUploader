<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KeyCredentialConfiguration File
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
* KeyCredentialConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KeyCredentialConfiguration extends Entity
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
    * @return KeyCredentialConfiguration The KeyCredentialConfiguration
    */
    public function setMaxLifetime($val)
    {
        $this->_propDict["maxLifetime"] = $val;
         return $this;
    }

    /**
    * Gets the restrictForAppsCreatedAfterDateTime
    * Timestamp when the policy is enforced for all apps created on or after the specified date. For existing applications, the enforcement date would be back dated. To apply to all applications regardless of their creation date, this property would be null. Nullable.
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
    * Timestamp when the policy is enforced for all apps created on or after the specified date. For existing applications, the enforcement date would be back dated. To apply to all applications regardless of their creation date, this property would be null. Nullable.
    *
    * @param \DateTime $val The value to assign to the restrictForAppsCreatedAfterDateTime
    *
    * @return KeyCredentialConfiguration The KeyCredentialConfiguration
    */
    public function setRestrictForAppsCreatedAfterDateTime($val)
    {
        $this->_propDict["restrictForAppsCreatedAfterDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the restrictionType
    * The type of restriction being applied. Possible values are asymmetricKeyLifetime, unknownFutureValue. Each value of restrictionType can be used only once per policy.
    *
    * @return AppKeyCredentialRestrictionType|null The restrictionType
    */
    public function getRestrictionType()
    {
        if (array_key_exists("restrictionType", $this->_propDict)) {
            if (is_a($this->_propDict["restrictionType"], "\Microsoft\Graph\Model\AppKeyCredentialRestrictionType") || is_null($this->_propDict["restrictionType"])) {
                return $this->_propDict["restrictionType"];
            } else {
                $this->_propDict["restrictionType"] = new AppKeyCredentialRestrictionType($this->_propDict["restrictionType"]);
                return $this->_propDict["restrictionType"];
            }
        }
        return null;
    }

    /**
    * Sets the restrictionType
    * The type of restriction being applied. Possible values are asymmetricKeyLifetime, unknownFutureValue. Each value of restrictionType can be used only once per policy.
    *
    * @param AppKeyCredentialRestrictionType $val The value to assign to the restrictionType
    *
    * @return KeyCredentialConfiguration The KeyCredentialConfiguration
    */
    public function setRestrictionType($val)
    {
        $this->_propDict["restrictionType"] = $val;
         return $this;
    }
}
