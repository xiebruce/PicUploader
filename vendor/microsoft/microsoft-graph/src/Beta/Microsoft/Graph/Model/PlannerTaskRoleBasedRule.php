<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskRoleBasedRule File
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
* PlannerTaskRoleBasedRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskRoleBasedRule extends Entity
{
    /**
    * Gets the defaultRule
    * Default rule that applies when a property or action-specific rule is not provided. Possible values are: Allow, Block
    *
    * @return string|null The defaultRule
    */
    public function getDefaultRule()
    {
        if (array_key_exists("defaultRule", $this->_propDict)) {
            return $this->_propDict["defaultRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultRule
    * Default rule that applies when a property or action-specific rule is not provided. Possible values are: Allow, Block
    *
    * @param string $val The value of the defaultRule
    *
    * @return PlannerTaskRoleBasedRule
    */
    public function setDefaultRule($val)
    {
        $this->_propDict["defaultRule"] = $val;
        return $this;
    }

    /**
    * Gets the propertyRule
    * Rules for specific properties and actions.
    *
    * @return PlannerTaskPropertyRule|null The propertyRule
    */
    public function getPropertyRule()
    {
        if (array_key_exists("propertyRule", $this->_propDict)) {
            if (is_a($this->_propDict["propertyRule"], "\Beta\Microsoft\Graph\Model\PlannerTaskPropertyRule") || is_null($this->_propDict["propertyRule"])) {
                return $this->_propDict["propertyRule"];
            } else {
                $this->_propDict["propertyRule"] = new PlannerTaskPropertyRule($this->_propDict["propertyRule"]);
                return $this->_propDict["propertyRule"];
            }
        }
        return null;
    }

    /**
    * Sets the propertyRule
    * Rules for specific properties and actions.
    *
    * @param PlannerTaskPropertyRule $val The value to assign to the propertyRule
    *
    * @return PlannerTaskRoleBasedRule The PlannerTaskRoleBasedRule
    */
    public function setPropertyRule($val)
    {
        $this->_propDict["propertyRule"] = $val;
         return $this;
    }

    /**
    * Gets the role
    * The role these rules apply to.
    *
    * @return PlannerTaskConfigurationRoleBase|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "\Beta\Microsoft\Graph\Model\PlannerTaskConfigurationRoleBase") || is_null($this->_propDict["role"])) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new PlannerTaskConfigurationRoleBase($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }

    /**
    * Sets the role
    * The role these rules apply to.
    *
    * @param PlannerTaskConfigurationRoleBase $val The value to assign to the role
    *
    * @return PlannerTaskRoleBasedRule The PlannerTaskRoleBasedRule
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
         return $this;
    }
}
