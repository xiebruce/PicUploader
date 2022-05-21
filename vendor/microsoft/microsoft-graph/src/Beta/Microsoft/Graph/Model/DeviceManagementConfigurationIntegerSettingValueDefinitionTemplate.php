<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate File
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
* DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate extends Entity
{
    /**
    * Gets the maxValue
    * Integer Setting Maximum Value. Valid values -2147483648 to 2147483647
    *
    * @return int|null The maxValue
    */
    public function getMaxValue()
    {
        if (array_key_exists("maxValue", $this->_propDict)) {
            return $this->_propDict["maxValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxValue
    * Integer Setting Maximum Value. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the maxValue
    *
    * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate
    */
    public function setMaxValue($val)
    {
        $this->_propDict["maxValue"] = $val;
        return $this;
    }
    /**
    * Gets the minValue
    * Integer Setting Minimum Value. Valid values -2147483648 to 2147483647
    *
    * @return int|null The minValue
    */
    public function getMinValue()
    {
        if (array_key_exists("minValue", $this->_propDict)) {
            return $this->_propDict["minValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minValue
    * Integer Setting Minimum Value. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the minValue
    *
    * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate
    */
    public function setMinValue($val)
    {
        $this->_propDict["minValue"] = $val;
        return $this;
    }
}
