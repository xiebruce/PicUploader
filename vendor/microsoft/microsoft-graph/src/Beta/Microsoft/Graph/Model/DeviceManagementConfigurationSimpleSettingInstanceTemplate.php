<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSimpleSettingInstanceTemplate File
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
* DeviceManagementConfigurationSimpleSettingInstanceTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSimpleSettingInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationSimpleSettingInstanceTemplate");
    }


    /**
    * Gets the simpleSettingValueTemplate
    * Simple Setting Value Template
    *
    * @return DeviceManagementConfigurationSimpleSettingValueTemplate|null The simpleSettingValueTemplate
    */
    public function getSimpleSettingValueTemplate()
    {
        if (array_key_exists("simpleSettingValueTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["simpleSettingValueTemplate"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSimpleSettingValueTemplate") || is_null($this->_propDict["simpleSettingValueTemplate"])) {
                return $this->_propDict["simpleSettingValueTemplate"];
            } else {
                $this->_propDict["simpleSettingValueTemplate"] = new DeviceManagementConfigurationSimpleSettingValueTemplate($this->_propDict["simpleSettingValueTemplate"]);
                return $this->_propDict["simpleSettingValueTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the simpleSettingValueTemplate
    * Simple Setting Value Template
    *
    * @param DeviceManagementConfigurationSimpleSettingValueTemplate $val The value to assign to the simpleSettingValueTemplate
    *
    * @return DeviceManagementConfigurationSimpleSettingInstanceTemplate The DeviceManagementConfigurationSimpleSettingInstanceTemplate
    */
    public function setSimpleSettingValueTemplate($val)
    {
        $this->_propDict["simpleSettingValueTemplate"] = $val;
         return $this;
    }
}
