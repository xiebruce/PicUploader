<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DevicesFilter File
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
* DevicesFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DevicesFilter extends Entity
{

    /**
    * Gets the mode
    *
    * @return CrossTenantAccessPolicyTargetConfigurationAccessType|null The mode
    */
    public function getMode()
    {
        if (array_key_exists("mode", $this->_propDict)) {
            if (is_a($this->_propDict["mode"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyTargetConfigurationAccessType") || is_null($this->_propDict["mode"])) {
                return $this->_propDict["mode"];
            } else {
                $this->_propDict["mode"] = new CrossTenantAccessPolicyTargetConfigurationAccessType($this->_propDict["mode"]);
                return $this->_propDict["mode"];
            }
        }
        return null;
    }

    /**
    * Sets the mode
    *
    * @param CrossTenantAccessPolicyTargetConfigurationAccessType $val The value to assign to the mode
    *
    * @return DevicesFilter The DevicesFilter
    */
    public function setMode($val)
    {
        $this->_propDict["mode"] = $val;
         return $this;
    }
    /**
    * Gets the rule
    *
    * @return string|null The rule
    */
    public function getRule()
    {
        if (array_key_exists("rule", $this->_propDict)) {
            return $this->_propDict["rule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rule
    *
    * @param string $val The value of the rule
    *
    * @return DevicesFilter
    */
    public function setRule($val)
    {
        $this->_propDict["rule"] = $val;
        return $this;
    }
}
