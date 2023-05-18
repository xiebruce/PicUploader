<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertRuleDefinitionTemplate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* AlertRuleDefinitionTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertRuleDefinitionTemplate extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the defaultSeverity
    *
    * @return AlertSeverity|null The defaultSeverity
    */
    public function getDefaultSeverity()
    {
        if (array_key_exists("defaultSeverity", $this->_propDict)) {
            if (is_a($this->_propDict["defaultSeverity"], "\Beta\Microsoft\Graph\ManagedTenants\Model\AlertSeverity") || is_null($this->_propDict["defaultSeverity"])) {
                return $this->_propDict["defaultSeverity"];
            } else {
                $this->_propDict["defaultSeverity"] = new AlertSeverity($this->_propDict["defaultSeverity"]);
                return $this->_propDict["defaultSeverity"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultSeverity
    *
    * @param AlertSeverity $val The value to assign to the defaultSeverity
    *
    * @return AlertRuleDefinitionTemplate The AlertRuleDefinitionTemplate
    */
    public function setDefaultSeverity($val)
    {
        $this->_propDict["defaultSeverity"] = $val;
         return $this;
    }
}
