<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerRuleOverride File
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
* PlannerRuleOverride class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerRuleOverride extends Entity
{
    /**
    * Gets the name
    * Name of the override. Allowed override values will be dependent on the property affected by the rule.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the override. Allowed override values will be dependent on the property affected by the rule.
    *
    * @param string $val The value of the name
    *
    * @return PlannerRuleOverride
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the rules
    * Overridden rules. These are used as rules for the override instead of the default rules.
    *
    * @return string|null The rules
    */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
            return $this->_propDict["rules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rules
    * Overridden rules. These are used as rules for the override instead of the default rules.
    *
    * @param string $val The value of the rules
    *
    * @return PlannerRuleOverride
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
        return $this;
    }
}
