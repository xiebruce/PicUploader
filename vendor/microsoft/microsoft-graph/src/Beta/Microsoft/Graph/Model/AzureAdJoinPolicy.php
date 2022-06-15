<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureAdJoinPolicy File
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
* AzureAdJoinPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureAdJoinPolicy extends Entity
{
    /**
    * Gets the allowedGroups
    * The identifiers of the groups that are in the scope of the policy. Required when the appliesTo property is set to selected.
    *
    * @return string|null The allowedGroups
    */
    public function getAllowedGroups()
    {
        if (array_key_exists("allowedGroups", $this->_propDict)) {
            return $this->_propDict["allowedGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedGroups
    * The identifiers of the groups that are in the scope of the policy. Required when the appliesTo property is set to selected.
    *
    * @param string $val The value of the allowedGroups
    *
    * @return AzureAdJoinPolicy
    */
    public function setAllowedGroups($val)
    {
        $this->_propDict["allowedGroups"] = $val;
        return $this;
    }
    /**
    * Gets the allowedUsers
    * The identifiers of users that are in the scope of the policy. Required when the appliesTo property is set to selected.
    *
    * @return string|null The allowedUsers
    */
    public function getAllowedUsers()
    {
        if (array_key_exists("allowedUsers", $this->_propDict)) {
            return $this->_propDict["allowedUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedUsers
    * The identifiers of users that are in the scope of the policy. Required when the appliesTo property is set to selected.
    *
    * @param string $val The value of the allowedUsers
    *
    * @return AzureAdJoinPolicy
    */
    public function setAllowedUsers($val)
    {
        $this->_propDict["allowedUsers"] = $val;
        return $this;
    }

    /**
    * Gets the appliesTo
    * Specifies whether to block or allow fine-grained control of the policy scope. The possible values are: 0 (meaning none), 1 (meaning all), 2 (meaning selected), 3 (meaning unknownFutureValue). The default value is 1. When set to 2, at least one user or group identifier must be specified in either allowedUsers or allowedGroups.  Setting this property to 0 or 1 removes all identifiers in both allowedUsers and allowedGroups.
    *
    * @return PolicyScope|null The appliesTo
    */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
            if (is_a($this->_propDict["appliesTo"], "\Beta\Microsoft\Graph\Model\PolicyScope") || is_null($this->_propDict["appliesTo"])) {
                return $this->_propDict["appliesTo"];
            } else {
                $this->_propDict["appliesTo"] = new PolicyScope($this->_propDict["appliesTo"]);
                return $this->_propDict["appliesTo"];
            }
        }
        return null;
    }

    /**
    * Sets the appliesTo
    * Specifies whether to block or allow fine-grained control of the policy scope. The possible values are: 0 (meaning none), 1 (meaning all), 2 (meaning selected), 3 (meaning unknownFutureValue). The default value is 1. When set to 2, at least one user or group identifier must be specified in either allowedUsers or allowedGroups.  Setting this property to 0 or 1 removes all identifiers in both allowedUsers and allowedGroups.
    *
    * @param PolicyScope $val The value to assign to the appliesTo
    *
    * @return AzureAdJoinPolicy The AzureAdJoinPolicy
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["appliesTo"] = $val;
         return $this;
    }
    /**
    * Gets the isAdminConfigurable
    * Specifies whether this policy scope is configurable by the admin. The default value is false. When an admin has enabled Intune (MEM) to manage devices, this property is set to false and appliesTo defaults to 1 (meaning all).
    *
    * @return bool|null The isAdminConfigurable
    */
    public function getIsAdminConfigurable()
    {
        if (array_key_exists("isAdminConfigurable", $this->_propDict)) {
            return $this->_propDict["isAdminConfigurable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAdminConfigurable
    * Specifies whether this policy scope is configurable by the admin. The default value is false. When an admin has enabled Intune (MEM) to manage devices, this property is set to false and appliesTo defaults to 1 (meaning all).
    *
    * @param bool $val The value of the isAdminConfigurable
    *
    * @return AzureAdJoinPolicy
    */
    public function setIsAdminConfigurable($val)
    {
        $this->_propDict["isAdminConfigurable"] = $val;
        return $this;
    }
}
