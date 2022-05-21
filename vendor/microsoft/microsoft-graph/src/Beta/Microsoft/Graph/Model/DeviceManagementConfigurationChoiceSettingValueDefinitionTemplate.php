<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate File
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
* DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate extends Entity
{

    /**
    * Gets the allowedOptions
    * Choice Setting Allowed Options
    *
    * @return DeviceManagementConfigurationOptionDefinitionTemplate|null The allowedOptions
    */
    public function getAllowedOptions()
    {
        if (array_key_exists("allowedOptions", $this->_propDict)) {
            if (is_a($this->_propDict["allowedOptions"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationOptionDefinitionTemplate") || is_null($this->_propDict["allowedOptions"])) {
                return $this->_propDict["allowedOptions"];
            } else {
                $this->_propDict["allowedOptions"] = new DeviceManagementConfigurationOptionDefinitionTemplate($this->_propDict["allowedOptions"]);
                return $this->_propDict["allowedOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedOptions
    * Choice Setting Allowed Options
    *
    * @param DeviceManagementConfigurationOptionDefinitionTemplate $val The value to assign to the allowedOptions
    *
    * @return DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate The DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate
    */
    public function setAllowedOptions($val)
    {
        $this->_propDict["allowedOptions"] = $val;
         return $this;
    }
}
