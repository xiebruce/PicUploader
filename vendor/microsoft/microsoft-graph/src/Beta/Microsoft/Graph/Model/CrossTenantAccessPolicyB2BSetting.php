<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyB2BSetting File
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
* CrossTenantAccessPolicyB2BSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyB2BSetting extends Entity
{

    /**
    * Gets the applications
    * The list of applications targeted with your cross-tenant access policy.
    *
    * @return CrossTenantAccessPolicyTargetConfiguration|null The applications
    */
    public function getApplications()
    {
        if (array_key_exists("applications", $this->_propDict)) {
            if (is_a($this->_propDict["applications"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyTargetConfiguration") || is_null($this->_propDict["applications"])) {
                return $this->_propDict["applications"];
            } else {
                $this->_propDict["applications"] = new CrossTenantAccessPolicyTargetConfiguration($this->_propDict["applications"]);
                return $this->_propDict["applications"];
            }
        }
        return null;
    }

    /**
    * Sets the applications
    * The list of applications targeted with your cross-tenant access policy.
    *
    * @param CrossTenantAccessPolicyTargetConfiguration $val The value to assign to the applications
    *
    * @return CrossTenantAccessPolicyB2BSetting The CrossTenantAccessPolicyB2BSetting
    */
    public function setApplications($val)
    {
        $this->_propDict["applications"] = $val;
         return $this;
    }

    /**
    * Gets the usersAndGroups
    * The list of users and groups targeted with your cross-tenant access policy.
    *
    * @return CrossTenantAccessPolicyTargetConfiguration|null The usersAndGroups
    */
    public function getUsersAndGroups()
    {
        if (array_key_exists("usersAndGroups", $this->_propDict)) {
            if (is_a($this->_propDict["usersAndGroups"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyTargetConfiguration") || is_null($this->_propDict["usersAndGroups"])) {
                return $this->_propDict["usersAndGroups"];
            } else {
                $this->_propDict["usersAndGroups"] = new CrossTenantAccessPolicyTargetConfiguration($this->_propDict["usersAndGroups"]);
                return $this->_propDict["usersAndGroups"];
            }
        }
        return null;
    }

    /**
    * Sets the usersAndGroups
    * The list of users and groups targeted with your cross-tenant access policy.
    *
    * @param CrossTenantAccessPolicyTargetConfiguration $val The value to assign to the usersAndGroups
    *
    * @return CrossTenantAccessPolicyB2BSetting The CrossTenantAccessPolicyB2BSetting
    */
    public function setUsersAndGroups($val)
    {
        $this->_propDict["usersAndGroups"] = $val;
         return $this;
    }
}
