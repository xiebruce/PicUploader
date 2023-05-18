<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BusinessScenarioTask File
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
* BusinessScenarioTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BusinessScenarioTask extends PlannerTask
{
    /**
    * Gets the businessScenarioProperties
    * Scenario-specific properties of the task. externalObjectId and externalBucketId properties must be specified when creating a task.
    *
    * @return BusinessScenarioProperties|null The businessScenarioProperties
    */
    public function getBusinessScenarioProperties()
    {
        if (array_key_exists("businessScenarioProperties", $this->_propDict)) {
            if (is_a($this->_propDict["businessScenarioProperties"], "\Beta\Microsoft\Graph\Model\BusinessScenarioProperties") || is_null($this->_propDict["businessScenarioProperties"])) {
                return $this->_propDict["businessScenarioProperties"];
            } else {
                $this->_propDict["businessScenarioProperties"] = new BusinessScenarioProperties($this->_propDict["businessScenarioProperties"]);
                return $this->_propDict["businessScenarioProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the businessScenarioProperties
    * Scenario-specific properties of the task. externalObjectId and externalBucketId properties must be specified when creating a task.
    *
    * @param BusinessScenarioProperties $val The businessScenarioProperties
    *
    * @return BusinessScenarioTask
    */
    public function setBusinessScenarioProperties($val)
    {
        $this->_propDict["businessScenarioProperties"] = $val;
        return $this;
    }

    /**
    * Gets the target
    * Target of the task that specifies where the task should be placed. Must be specified when creating a task.
    *
    * @return BusinessScenarioTaskTargetBase|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Beta\Microsoft\Graph\Model\BusinessScenarioTaskTargetBase") || is_null($this->_propDict["target"])) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new BusinessScenarioTaskTargetBase($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }

    /**
    * Sets the target
    * Target of the task that specifies where the task should be placed. Must be specified when creating a task.
    *
    * @param BusinessScenarioTaskTargetBase $val The target
    *
    * @return BusinessScenarioTask
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

}
