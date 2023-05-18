<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BusinessScenarioPlanner File
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
* BusinessScenarioPlanner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BusinessScenarioPlanner extends Entity
{
    /**
    * Gets the planConfiguration
    * The configuration of Planner plans that will be created for the scenario.
    *
    * @return PlannerPlanConfiguration|null The planConfiguration
    */
    public function getPlanConfiguration()
    {
        if (array_key_exists("planConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["planConfiguration"], "\Beta\Microsoft\Graph\Model\PlannerPlanConfiguration") || is_null($this->_propDict["planConfiguration"])) {
                return $this->_propDict["planConfiguration"];
            } else {
                $this->_propDict["planConfiguration"] = new PlannerPlanConfiguration($this->_propDict["planConfiguration"]);
                return $this->_propDict["planConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the planConfiguration
    * The configuration of Planner plans that will be created for the scenario.
    *
    * @param PlannerPlanConfiguration $val The planConfiguration
    *
    * @return BusinessScenarioPlanner
    */
    public function setPlanConfiguration($val)
    {
        $this->_propDict["planConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the taskConfiguration
    * The configuration of Planner tasks that will be created for the scenario.
    *
    * @return PlannerTaskConfiguration|null The taskConfiguration
    */
    public function getTaskConfiguration()
    {
        if (array_key_exists("taskConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["taskConfiguration"], "\Beta\Microsoft\Graph\Model\PlannerTaskConfiguration") || is_null($this->_propDict["taskConfiguration"])) {
                return $this->_propDict["taskConfiguration"];
            } else {
                $this->_propDict["taskConfiguration"] = new PlannerTaskConfiguration($this->_propDict["taskConfiguration"]);
                return $this->_propDict["taskConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the taskConfiguration
    * The configuration of Planner tasks that will be created for the scenario.
    *
    * @param PlannerTaskConfiguration $val The taskConfiguration
    *
    * @return BusinessScenarioPlanner
    */
    public function setTaskConfiguration($val)
    {
        $this->_propDict["taskConfiguration"] = $val;
        return $this;
    }


     /**
     * Gets the tasks
    * The Planner tasks for the scenario.
     *
     * @return array|null The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tasks
    * The Planner tasks for the scenario.
    *
    * @param BusinessScenarioTask[] $val The tasks
    *
    * @return BusinessScenarioPlanner
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }

}
