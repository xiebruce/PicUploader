<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingInstance File
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
* DeviceManagementConfigurationSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingInstance extends Entity
{
    /**
    * Gets the settingDefinitionId
    * Setting Definition Id
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
    * Setting Definition Id
    *
    * @param string $val The value of the settingDefinitionId
    *
    * @return DeviceManagementConfigurationSettingInstance
    */
    public function setSettingDefinitionId($val)
    {
        $this->_propDict["settingDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the settingInstanceTemplateReference
    * Setting Instance Template Reference
    *
    * @return DeviceManagementConfigurationSettingInstanceTemplateReference|null The settingInstanceTemplateReference
    */
    public function getSettingInstanceTemplateReference()
    {
        if (array_key_exists("settingInstanceTemplateReference", $this->_propDict)) {
            if (is_a($this->_propDict["settingInstanceTemplateReference"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingInstanceTemplateReference") || is_null($this->_propDict["settingInstanceTemplateReference"])) {
                return $this->_propDict["settingInstanceTemplateReference"];
            } else {
                $this->_propDict["settingInstanceTemplateReference"] = new DeviceManagementConfigurationSettingInstanceTemplateReference($this->_propDict["settingInstanceTemplateReference"]);
                return $this->_propDict["settingInstanceTemplateReference"];
            }
        }
        return null;
    }

    /**
    * Sets the settingInstanceTemplateReference
    * Setting Instance Template Reference
    *
    * @param DeviceManagementConfigurationSettingInstanceTemplateReference $val The value to assign to the settingInstanceTemplateReference
    *
    * @return DeviceManagementConfigurationSettingInstance The DeviceManagementConfigurationSettingInstance
    */
    public function setSettingInstanceTemplateReference($val)
    {
        $this->_propDict["settingInstanceTemplateReference"] = $val;
         return $this;
    }
}
