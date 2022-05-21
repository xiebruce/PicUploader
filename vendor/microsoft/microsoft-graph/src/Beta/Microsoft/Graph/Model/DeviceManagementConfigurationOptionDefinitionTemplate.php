<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationOptionDefinitionTemplate File
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
* DeviceManagementConfigurationOptionDefinitionTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationOptionDefinitionTemplate extends Entity
{

    /**
    * Gets the children
    * Option Children
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
    * Option Children
    *
    * @param DeviceManagementConfigurationSettingInstanceTemplate $val The value to assign to the children
    *
    * @return DeviceManagementConfigurationOptionDefinitionTemplate The DeviceManagementConfigurationOptionDefinitionTemplate
    */
    public function setChildren($val)
    {
        $this->_propDict["children"] = $val;
         return $this;
    }
    /**
    * Gets the itemId
    * Option ItemId
    *
    * @return string|null The itemId
    */
    public function getItemId()
    {
        if (array_key_exists("itemId", $this->_propDict)) {
            return $this->_propDict["itemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemId
    * Option ItemId
    *
    * @param string $val The value of the itemId
    *
    * @return DeviceManagementConfigurationOptionDefinitionTemplate
    */
    public function setItemId($val)
    {
        $this->_propDict["itemId"] = $val;
        return $this;
    }
}
