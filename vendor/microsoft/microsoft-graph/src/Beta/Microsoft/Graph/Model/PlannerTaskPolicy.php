<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskPolicy File
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
* PlannerTaskPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskPolicy extends Entity
{

    /**
    * Gets the rules
    * The rules that should be enforced on the tasks when they are being changed outside of the scenario, based on the role of the caller.
    *
    * @return PlannerTaskRoleBasedRule|null The rules
    */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
            if (is_a($this->_propDict["rules"], "\Beta\Microsoft\Graph\Model\PlannerTaskRoleBasedRule") || is_null($this->_propDict["rules"])) {
                return $this->_propDict["rules"];
            } else {
                $this->_propDict["rules"] = new PlannerTaskRoleBasedRule($this->_propDict["rules"]);
                return $this->_propDict["rules"];
            }
        }
        return null;
    }

    /**
    * Sets the rules
    * The rules that should be enforced on the tasks when they are being changed outside of the scenario, based on the role of the caller.
    *
    * @param PlannerTaskRoleBasedRule $val The value to assign to the rules
    *
    * @return PlannerTaskPolicy The PlannerTaskPolicy
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
         return $this;
    }
}
