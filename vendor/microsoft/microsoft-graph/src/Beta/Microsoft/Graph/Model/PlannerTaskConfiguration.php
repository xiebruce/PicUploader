<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskConfiguration File
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
* PlannerTaskConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskConfiguration extends Entity
{
    /**
    * Gets the editPolicy
    * Policy configuration for tasks created for the businessScenario when they are being changed outside of the scenario.
    *
    * @return PlannerTaskPolicy|null The editPolicy
    */
    public function getEditPolicy()
    {
        if (array_key_exists("editPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["editPolicy"], "\Beta\Microsoft\Graph\Model\PlannerTaskPolicy") || is_null($this->_propDict["editPolicy"])) {
                return $this->_propDict["editPolicy"];
            } else {
                $this->_propDict["editPolicy"] = new PlannerTaskPolicy($this->_propDict["editPolicy"]);
                return $this->_propDict["editPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the editPolicy
    * Policy configuration for tasks created for the businessScenario when they are being changed outside of the scenario.
    *
    * @param PlannerTaskPolicy $val The editPolicy
    *
    * @return PlannerTaskConfiguration
    */
    public function setEditPolicy($val)
    {
        $this->_propDict["editPolicy"] = $val;
        return $this;
    }

}
