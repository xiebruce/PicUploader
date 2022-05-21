<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingValue File
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
* DeviceManagementConfigurationSettingValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingValue extends Entity
{

    /**
    * Gets the settingValueTemplateReference
    * Setting value template reference
    *
    * @return DeviceManagementConfigurationSettingValueTemplateReference|null The settingValueTemplateReference
    */
    public function getSettingValueTemplateReference()
    {
        if (array_key_exists("settingValueTemplateReference", $this->_propDict)) {
            if (is_a($this->_propDict["settingValueTemplateReference"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingValueTemplateReference") || is_null($this->_propDict["settingValueTemplateReference"])) {
                return $this->_propDict["settingValueTemplateReference"];
            } else {
                $this->_propDict["settingValueTemplateReference"] = new DeviceManagementConfigurationSettingValueTemplateReference($this->_propDict["settingValueTemplateReference"]);
                return $this->_propDict["settingValueTemplateReference"];
            }
        }
        return null;
    }

    /**
    * Sets the settingValueTemplateReference
    * Setting value template reference
    *
    * @param DeviceManagementConfigurationSettingValueTemplateReference $val The value to assign to the settingValueTemplateReference
    *
    * @return DeviceManagementConfigurationSettingValue The DeviceManagementConfigurationSettingValue
    */
    public function setSettingValueTemplateReference($val)
    {
        $this->_propDict["settingValueTemplateReference"] = $val;
         return $this;
    }
}
