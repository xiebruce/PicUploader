<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BusinessScenarioTaskTargetBase File
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
* BusinessScenarioTaskTargetBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BusinessScenarioTaskTargetBase extends Entity
{

    /**
    * Gets the taskTargetKind
    * Represents the kind of the target. The possible values are: group, unknownFutureValue.
    *
    * @return PlannerTaskTargetKind|null The taskTargetKind
    */
    public function getTaskTargetKind()
    {
        if (array_key_exists("taskTargetKind", $this->_propDict)) {
            if (is_a($this->_propDict["taskTargetKind"], "\Beta\Microsoft\Graph\Model\PlannerTaskTargetKind") || is_null($this->_propDict["taskTargetKind"])) {
                return $this->_propDict["taskTargetKind"];
            } else {
                $this->_propDict["taskTargetKind"] = new PlannerTaskTargetKind($this->_propDict["taskTargetKind"]);
                return $this->_propDict["taskTargetKind"];
            }
        }
        return null;
    }

    /**
    * Sets the taskTargetKind
    * Represents the kind of the target. The possible values are: group, unknownFutureValue.
    *
    * @param PlannerTaskTargetKind $val The value to assign to the taskTargetKind
    *
    * @return BusinessScenarioTaskTargetBase The BusinessScenarioTaskTargetBase
    */
    public function setTaskTargetKind($val)
    {
        $this->_propDict["taskTargetKind"] = $val;
         return $this;
    }
}
