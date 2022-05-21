<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingInstanceTemplate File
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
* DeviceManagementConfigurationSettingInstanceTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingInstanceTemplate extends Entity
{
    /**
    * Gets the isRequired
    * Indicates if a policy must specify this setting.
    *
    * @return bool|null The isRequired
    */
    public function getIsRequired()
    {
        if (array_key_exists("isRequired", $this->_propDict)) {
            return $this->_propDict["isRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequired
    * Indicates if a policy must specify this setting.
    *
    * @param bool $val The value of the isRequired
    *
    * @return DeviceManagementConfigurationSettingInstanceTemplate
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = $val;
        return $this;
    }
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
    * @return DeviceManagementConfigurationSettingInstanceTemplate
    */
    public function setSettingDefinitionId($val)
    {
        $this->_propDict["settingDefinitionId"] = $val;
        return $this;
    }
    /**
    * Gets the settingInstanceTemplateId
    * Setting Instance Template Id
    *
    * @return string|null The settingInstanceTemplateId
    */
    public function getSettingInstanceTemplateId()
    {
        if (array_key_exists("settingInstanceTemplateId", $this->_propDict)) {
            return $this->_propDict["settingInstanceTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingInstanceTemplateId
    * Setting Instance Template Id
    *
    * @param string $val The value of the settingInstanceTemplateId
    *
    * @return DeviceManagementConfigurationSettingInstanceTemplate
    */
    public function setSettingInstanceTemplateId($val)
    {
        $this->_propDict["settingInstanceTemplateId"] = $val;
        return $this;
    }
}
