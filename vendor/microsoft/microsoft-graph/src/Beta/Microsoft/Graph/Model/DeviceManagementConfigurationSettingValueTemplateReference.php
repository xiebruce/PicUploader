<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingValueTemplateReference File
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
* DeviceManagementConfigurationSettingValueTemplateReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingValueTemplateReference extends Entity
{
    /**
    * Gets the settingValueTemplateId
    * Setting value template id
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
    * Setting value template id
    *
    * @param string $val The value of the settingValueTemplateId
    *
    * @return DeviceManagementConfigurationSettingValueTemplateReference
    */
    public function setSettingValueTemplateId($val)
    {
        $this->_propDict["settingValueTemplateId"] = $val;
        return $this;
    }
    /**
    * Gets the useTemplateDefault
    * Indicates whether to update policy setting value to match template setting default value
    *
    * @return bool|null The useTemplateDefault
    */
    public function getUseTemplateDefault()
    {
        if (array_key_exists("useTemplateDefault", $this->_propDict)) {
            return $this->_propDict["useTemplateDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useTemplateDefault
    * Indicates whether to update policy setting value to match template setting default value
    *
    * @param bool $val The value of the useTemplateDefault
    *
    * @return DeviceManagementConfigurationSettingValueTemplateReference
    */
    public function setUseTemplateDefault($val)
    {
        $this->_propDict["useTemplateDefault"] = $val;
        return $this;
    }
}
