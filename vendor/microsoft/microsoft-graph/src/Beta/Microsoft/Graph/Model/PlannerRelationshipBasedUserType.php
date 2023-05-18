<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerRelationshipBasedUserType File
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
* PlannerRelationshipBasedUserType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerRelationshipBasedUserType extends PlannerTaskConfigurationRoleBase
{

    /**
    * Gets the role
    * Identifies the relationship of the caller to the task. The possible values are: defaultRules, groupOwners, groupMembers, taskAssignees, applications, unknownFutureValue.
    *
    * @return PlannerRelationshipUserRoles|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "\Beta\Microsoft\Graph\Model\PlannerRelationshipUserRoles") || is_null($this->_propDict["role"])) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new PlannerRelationshipUserRoles($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }

    /**
    * Sets the role
    * Identifies the relationship of the caller to the task. The possible values are: defaultRules, groupOwners, groupMembers, taskAssignees, applications, unknownFutureValue.
    *
    * @param PlannerRelationshipUserRoles $val The value to assign to the role
    *
    * @return PlannerRelationshipBasedUserType The PlannerRelationshipBasedUserType
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
         return $this;
    }
}
