<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationGroupSettingValueTemplate File
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
* DeviceManagementConfigurationGroupSettingValueTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationGroupSettingValueTemplate extends Entity
{

    /**
    * Gets the children
    * Group setting value children
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
    * Group setting value children
    *
    * @param DeviceManagementConfigurationSettingInstanceTemplate $val The value to assign to the children
    *
    * @return DeviceManagementConfigurationGroupSettingValueTemplate The DeviceManagementConfigurationGroupSettingValueTemplate
    */
    public function setChildren($val)
    {
        $this->_propDict["children"] = $val;
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
    * @return DeviceManagementConfigurationGroupSettingValueTemplate
    */
    public function setSettingValueTemplateId($val)
    {
        $this->_propDict["settingValueTemplateId"] = $val;
        return $this;
    }
}
