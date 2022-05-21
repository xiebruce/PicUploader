<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationIntegerSettingValueTemplate File
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
* DeviceManagementConfigurationIntegerSettingValueTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationIntegerSettingValueTemplate extends DeviceManagementConfigurationSimpleSettingValueTemplate
{

    /**
    * Gets the defaultValue
    * Integer Setting Value Default Template.
    *
    * @return DeviceManagementConfigurationIntegerSettingValueDefaultTemplate|null The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            if (is_a($this->_propDict["defaultValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationIntegerSettingValueDefaultTemplate") || is_null($this->_propDict["defaultValue"])) {
                return $this->_propDict["defaultValue"];
            } else {
                $this->_propDict["defaultValue"] = new DeviceManagementConfigurationIntegerSettingValueDefaultTemplate($this->_propDict["defaultValue"]);
                return $this->_propDict["defaultValue"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultValue
    * Integer Setting Value Default Template.
    *
    * @param DeviceManagementConfigurationIntegerSettingValueDefaultTemplate $val The value to assign to the defaultValue
    *
    * @return DeviceManagementConfigurationIntegerSettingValueTemplate The DeviceManagementConfigurationIntegerSettingValueTemplate
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
         return $this;
    }

    /**
    * Gets the recommendedValueDefinition
    * Recommended value definition.
    *
    * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null The recommendedValueDefinition
    */
    public function getRecommendedValueDefinition()
    {
        if (array_key_exists("recommendedValueDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["recommendedValueDefinition"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate") || is_null($this->_propDict["recommendedValueDefinition"])) {
                return $this->_propDict["recommendedValueDefinition"];
            } else {
                $this->_propDict["recommendedValueDefinition"] = new DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate($this->_propDict["recommendedValueDefinition"]);
                return $this->_propDict["recommendedValueDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the recommendedValueDefinition
    * Recommended value definition.
    *
    * @param DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate $val The value to assign to the recommendedValueDefinition
    *
    * @return DeviceManagementConfigurationIntegerSettingValueTemplate The DeviceManagementConfigurationIntegerSettingValueTemplate
    */
    public function setRecommendedValueDefinition($val)
    {
        $this->_propDict["recommendedValueDefinition"] = $val;
         return $this;
    }

    /**
    * Gets the requiredValueDefinition
    * Required value definition.
    *
    * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate|null The requiredValueDefinition
    */
    public function getRequiredValueDefinition()
    {
        if (array_key_exists("requiredValueDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["requiredValueDefinition"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate") || is_null($this->_propDict["requiredValueDefinition"])) {
                return $this->_propDict["requiredValueDefinition"];
            } else {
                $this->_propDict["requiredValueDefinition"] = new DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate($this->_propDict["requiredValueDefinition"]);
                return $this->_propDict["requiredValueDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the requiredValueDefinition
    * Required value definition.
    *
    * @param DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate $val The value to assign to the requiredValueDefinition
    *
    * @return DeviceManagementConfigurationIntegerSettingValueTemplate The DeviceManagementConfigurationIntegerSettingValueTemplate
    */
    public function setRequiredValueDefinition($val)
    {
        $this->_propDict["requiredValueDefinition"] = $val;
         return $this;
    }
}
