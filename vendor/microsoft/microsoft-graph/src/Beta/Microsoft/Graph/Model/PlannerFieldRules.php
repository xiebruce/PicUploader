<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerFieldRules File
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
* PlannerFieldRules class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerFieldRules extends Entity
{
    /**
    * Gets the defaultRules
    * The default rules that apply if no override matches to the current data.
    *
    * @return string|null The defaultRules
    */
    public function getDefaultRules()
    {
        if (array_key_exists("defaultRules", $this->_propDict)) {
            return $this->_propDict["defaultRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultRules
    * The default rules that apply if no override matches to the current data.
    *
    * @param string $val The value of the defaultRules
    *
    * @return PlannerFieldRules
    */
    public function setDefaultRules($val)
    {
        $this->_propDict["defaultRules"] = $val;
        return $this;
    }

    /**
    * Gets the overrides
    * Overrides that specify different rules for specific data associated with the field.
    *
    * @return PlannerRuleOverride|null The overrides
    */
    public function getOverrides()
    {
        if (array_key_exists("overrides", $this->_propDict)) {
            if (is_a($this->_propDict["overrides"], "\Beta\Microsoft\Graph\Model\PlannerRuleOverride") || is_null($this->_propDict["overrides"])) {
                return $this->_propDict["overrides"];
            } else {
                $this->_propDict["overrides"] = new PlannerRuleOverride($this->_propDict["overrides"]);
                return $this->_propDict["overrides"];
            }
        }
        return null;
    }

    /**
    * Sets the overrides
    * Overrides that specify different rules for specific data associated with the field.
    *
    * @param PlannerRuleOverride $val The value to assign to the overrides
    *
    * @return PlannerFieldRules The PlannerFieldRules
    */
    public function setOverrides($val)
    {
        $this->_propDict["overrides"] = $val;
         return $this;
    }
}
