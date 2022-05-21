<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationChoiceSettingValueTemplate File
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
* DeviceManagementConfigurationChoiceSettingValueTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationChoiceSettingValueTemplate extends Entity
{

    /**
    * Gets the defaultValue
    * Choice Setting Value Default Template.
    *
    * @return DeviceManagementConfigurationChoiceSettingValueDefaultTemplate|null The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            if (is_a($this->_propDict["defaultValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationChoiceSettingValueDefaultTemplate") || is_null($this->_propDict["defaultValue"])) {
                return $this->_propDict["defaultValue"];
            } else {
                $this->_propDict["defaultValue"] = new DeviceManagementConfigurationChoiceSettingValueDefaultTemplate($this->_propDict["defaultValue"]);
                return $this->_propDict["defaultValue"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultValue
    * Choice Setting Value Default Template.
    *
    * @param DeviceManagementConfigurationChoiceSettingValueDefaultTemplate $val The value to assign to the defaultValue
    *
    * @return DeviceManagementConfigurationChoiceSettingValueTemplate The DeviceManagementConfigurationChoiceSettingValueTemplate
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
         return $this;
    }

    /**
    * Gets the recommendedValueDefinition
    * Recommended definition override.
    *
    * @return DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null The recommendedValueDefinition
    */
    public function getRecommendedValueDefinition()
    {
        if (array_key_exists("recommendedValueDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["recommendedValueDefinition"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate") || is_null($this->_propDict["recommendedValueDefinition"])) {
                return $this->_propDict["recommendedValueDefinition"];
            } else {
                $this->_propDict["recommendedValueDefinition"] = new DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate($this->_propDict["recommendedValueDefinition"]);
                return $this->_propDict["recommendedValueDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the recommendedValueDefinition
    * Recommended definition override.
    *
    * @param DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate $val The value to assign to the recommendedValueDefinition
    *
    * @return DeviceManagementConfigurationChoiceSettingValueTemplate The DeviceManagementConfigurationChoiceSettingValueTemplate
    */
    public function setRecommendedValueDefinition($val)
    {
        $this->_propDict["recommendedValueDefinition"] = $val;
         return $this;
    }

    /**
    * Gets the requiredValueDefinition
    * Required definition override.
    *
    * @return DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null The requiredValueDefinition
    */
    public function getRequiredValueDefinition()
    {
        if (array_key_exists("requiredValueDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["requiredValueDefinition"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate") || is_null($this->_propDict["requiredValueDefinition"])) {
                return $this->_propDict["requiredValueDefinition"];
            } else {
                $this->_propDict["requiredValueDefinition"] = new DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate($this->_propDict["requiredValueDefinition"]);
                return $this->_propDict["requiredValueDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the requiredValueDefinition
    * Required definition override.
    *
    * @param DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate $val The value to assign to the requiredValueDefinition
    *
    * @return DeviceManagementConfigurationChoiceSettingValueTemplate The DeviceManagementConfigurationChoiceSettingValueTemplate
    */
    public function setRequiredValueDefinition($val)
    {
        $this->_propDict["requiredValueDefinition"] = $val;
         return $this;
    }
    /**
    * Gets the settingValueTemplateId
    * Setting Value Template Id
    *
    * @return string|null The settingValueTemplateId
    */
    public function getSettingValueTemplateId()
    {
        if (array_key_exists("settingValueTemplateId", $this->_propDict)) {
            return $this->_propDict["settingValueTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingValueTemplateId
    * Setting Value Template Id
    *
    * @param string $val The value of the settingValueTemplateId
    *
    * @return DeviceManagementConfigurationChoiceSettingValueTemplate
    */
    public function setSettingValueTemplateId($val)
    {
        $this->_propDict["settingValueTemplateId"] = $val;
        return $this;
    }
}
