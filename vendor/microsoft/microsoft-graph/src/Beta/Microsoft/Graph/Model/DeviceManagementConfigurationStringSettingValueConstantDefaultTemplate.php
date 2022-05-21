<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate File
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
* DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate extends DeviceManagementConfigurationStringSettingValueDefaultTemplate
{
    /**
    * Gets the constantValue
    * Default Constant Value
    *
    * @return string|null The constantValue
    */
    public function getConstantValue()
    {
        if (array_key_exists("constantValue", $this->_propDict)) {
            return $this->_propDict["constantValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the constantValue
    * Default Constant Value
    *
    * @param string $val The value of the constantValue
    *
    * @return DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate
    */
    public function setConstantValue($val)
    {
        $this->_propDict["constantValue"] = $val;
        return $this;
    }
}
