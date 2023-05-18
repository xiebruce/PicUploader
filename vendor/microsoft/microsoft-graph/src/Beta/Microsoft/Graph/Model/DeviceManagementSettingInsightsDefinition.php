<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingInsightsDefinition File
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
* DeviceManagementSettingInsightsDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingInsightsDefinition extends Entity
{
    /**
    * Gets the settingDefinitionId
    * Setting definition id that is being referred to a setting.
    *
    * @return string|null The settingDefinitionId
    */
    public function getSettingDefinitionId()
    {
        if (array_key_exists("settingDefinitionId", $this->_propDict)) {
            return $this->_propDict["settingDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingDefinitionId
    * Setting definition id that is being referred to a setting.
    *
    * @param string $val The value of the settingDefinitionId
    *
    * @return DeviceManagementSettingInsightsDefinition
    */
    public function setSettingDefinitionId($val)
    {
        $this->_propDict["settingDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the settingInsight
    * Data Insights Target Value
    *
    * @return DeviceManagementConfigurationSettingValue|null The settingInsight
    */
    public function getSettingInsight()
    {
        if (array_key_exists("settingInsight", $this->_propDict)) {
            if (is_a($this->_propDict["settingInsight"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingValue") || is_null($this->_propDict["settingInsight"])) {
                return $this->_propDict["settingInsight"];
            } else {
                $this->_propDict["settingInsight"] = new DeviceManagementConfigurationSettingValue($this->_propDict["settingInsight"]);
                return $this->_propDict["settingInsight"];
            }
        }
        return null;
    }

    /**
    * Sets the settingInsight
    * Data Insights Target Value
    *
    * @param DeviceManagementConfigurationSettingValue $val The value to assign to the settingInsight
    *
    * @return DeviceManagementSettingInsightsDefinition The DeviceManagementSettingInsightsDefinition
    */
    public function setSettingInsight($val)
    {
        $this->_propDict["settingInsight"] = $val;
         return $this;
    }
}
