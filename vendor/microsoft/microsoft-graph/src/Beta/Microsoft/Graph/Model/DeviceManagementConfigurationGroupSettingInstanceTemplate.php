<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationGroupSettingInstanceTemplate File
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
* DeviceManagementConfigurationGroupSettingInstanceTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationGroupSettingInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationGroupSettingInstanceTemplate");
    }


    /**
    * Gets the groupSettingValueTemplate
    * Group Setting Value Template
    *
    * @return DeviceManagementConfigurationGroupSettingValueTemplate|null The groupSettingValueTemplate
    */
    public function getGroupSettingValueTemplate()
    {
        if (array_key_exists("groupSettingValueTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["groupSettingValueTemplate"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationGroupSettingValueTemplate") || is_null($this->_propDict["groupSettingValueTemplate"])) {
                return $this->_propDict["groupSettingValueTemplate"];
            } else {
                $this->_propDict["groupSettingValueTemplate"] = new DeviceManagementConfigurationGroupSettingValueTemplate($this->_propDict["groupSettingValueTemplate"]);
                return $this->_propDict["groupSettingValueTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the groupSettingValueTemplate
    * Group Setting Value Template
    *
    * @param DeviceManagementConfigurationGroupSettingValueTemplate $val The value to assign to the groupSettingValueTemplate
    *
    * @return DeviceManagementConfigurationGroupSettingInstanceTemplate The DeviceManagementConfigurationGroupSettingInstanceTemplate
    */
    public function setGroupSettingValueTemplate($val)
    {
        $this->_propDict["groupSettingValueTemplate"] = $val;
         return $this;
    }
}
