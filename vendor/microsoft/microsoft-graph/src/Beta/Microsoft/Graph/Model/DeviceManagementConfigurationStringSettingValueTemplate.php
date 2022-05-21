<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationStringSettingValueTemplate File
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
* DeviceManagementConfigurationStringSettingValueTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationStringSettingValueTemplate extends DeviceManagementConfigurationSimpleSettingValueTemplate
{

    /**
    * Gets the defaultValue
    * String Setting Value Default Template.
    *
    * @return DeviceManagementConfigurationStringSettingValueDefaultTemplate|null The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            if (is_a($this->_propDict["defaultValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationStringSettingValueDefaultTemplate") || is_null($this->_propDict["defaultValue"])) {
                return $this->_propDict["defaultValue"];
            } else {
                $this->_propDict["defaultValue"] = new DeviceManagementConfigurationStringSettingValueDefaultTemplate($this->_propDict["defaultValue"]);
                return $this->_propDict["defaultValue"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultValue
    * String Setting Value Default Template.
    *
    * @param DeviceManagementConfigurationStringSettingValueDefaultTemplate $val The value to assign to the defaultValue
    *
    * @return DeviceManagementConfigurationStringSettingValueTemplate The DeviceManagementConfigurationStringSettingValueTemplate
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
         return $this;
    }
}
