<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate File
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
* DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate extends DeviceManagementConfigurationChoiceSettingValueDefaultTemplate
{

    /**
    * Gets the children
    * Option Children
    *
    * @return DeviceManagementConfigurationSettingInstanceTemplate|null The children
    */
    public function getChildren()
    {
        if (array_key_exists("children", $this->_propDict)) {
            if (is_a($this->_propDict["children"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingInstanceTemplate") || is_null($this->_propDict["children"])) {
                return $this->_propDict["children"];
            } else {
                $this->_propDict["children"] = new DeviceManagementConfigurationSettingInstanceTemplate($this->_propDict["children"]);
                return $this->_propDict["children"];
            }
        }
        return null;
    }

    /**
    * Sets the children
    * Option Children
    *
    * @param DeviceManagementConfigurationSettingInstanceTemplate $val The value to assign to the children
    *
    * @return DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate The DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate
    */
    public function setChildren($val)
    {
        $this->_propDict["children"] = $val;
         return $this;
    }
    /**
    * Gets the settingDefinitionOptionId
    * Default Constant Value
    *
    * @return string|null The settingDefinitionOptionId
    */
    public function getSettingDefinitionOptionId()
    {
        if (array_key_exists("settingDefinitionOptionId", $this->_propDict)) {
            return $this->_propDict["settingDefinitionOptionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingDefinitionOptionId
    * Default Constant Value
    *
    * @param string $val The value of the settingDefinitionOptionId
    *
    * @return DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate
    */
    public function setSettingDefinitionOptionId($val)
    {
        $this->_propDict["settingDefinitionOptionId"] = $val;
        return $this;
    }
}
