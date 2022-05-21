<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSimpleSettingValueTemplate File
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
* DeviceManagementConfigurationSimpleSettingValueTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSimpleSettingValueTemplate extends Entity
{
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
    * @return DeviceManagementConfigurationSimpleSettingValueTemplate
    */
    public function setSettingValueTemplateId($val)
    {
        $this->_propDict["settingValueTemplateId"] = $val;
        return $this;
    }
}
