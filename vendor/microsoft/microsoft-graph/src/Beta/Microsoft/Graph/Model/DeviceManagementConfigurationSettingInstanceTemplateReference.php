<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingInstanceTemplateReference File
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
* DeviceManagementConfigurationSettingInstanceTemplateReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingInstanceTemplateReference extends Entity
{
    /**
    * Gets the settingInstanceTemplateId
    * Setting instance template id
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
    * Setting instance template id
    *
    * @param string $val The value of the settingInstanceTemplateId
    *
    * @return DeviceManagementConfigurationSettingInstanceTemplateReference
    */
    public function setSettingInstanceTemplateId($val)
    {
        $this->_propDict["settingInstanceTemplateId"] = $val;
        return $this;
    }
}
