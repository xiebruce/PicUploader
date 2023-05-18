<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPropertyRule File
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
* PlannerPropertyRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPropertyRule extends Entity
{

    /**
    * Gets the ruleKind
    * Identifies which type of property rules is represented by this instance. The possible values are: taskRule, bucketRule, planRule, unknownFutureValue.
    *
    * @return PlannerRuleKind|null The ruleKind
    */
    public function getRuleKind()
    {
        if (array_key_exists("ruleKind", $this->_propDict)) {
            if (is_a($this->_propDict["ruleKind"], "\Beta\Microsoft\Graph\Model\PlannerRuleKind") || is_null($this->_propDict["ruleKind"])) {
                return $this->_propDict["ruleKind"];
            } else {
                $this->_propDict["ruleKind"] = new PlannerRuleKind($this->_propDict["ruleKind"]);
                return $this->_propDict["ruleKind"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleKind
    * Identifies which type of property rules is represented by this instance. The possible values are: taskRule, bucketRule, planRule, unknownFutureValue.
    *
    * @param PlannerRuleKind $val The value to assign to the ruleKind
    *
    * @return PlannerPropertyRule The PlannerPropertyRule
    */
    public function setRuleKind($val)
    {
        $this->_propDict["ruleKind"] = $val;
         return $this;
    }
}
