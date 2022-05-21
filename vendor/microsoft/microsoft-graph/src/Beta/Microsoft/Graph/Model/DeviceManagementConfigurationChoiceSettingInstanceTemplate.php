<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationChoiceSettingInstanceTemplate File
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
* DeviceManagementConfigurationChoiceSettingInstanceTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationChoiceSettingInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationChoiceSettingInstanceTemplate");
    }


    /**
    * Gets the choiceSettingValueTemplate
    * Choice Setting Value Template
    *
    * @return DeviceManagementConfigurationChoiceSettingValueTemplate|null The choiceSettingValueTemplate
    */
    public function getChoiceSettingValueTemplate()
    {
        if (array_key_exists("choiceSettingValueTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["choiceSettingValueTemplate"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationChoiceSettingValueTemplate") || is_null($this->_propDict["choiceSettingValueTemplate"])) {
                return $this->_propDict["choiceSettingValueTemplate"];
            } else {
                $this->_propDict["choiceSettingValueTemplate"] = new DeviceManagementConfigurationChoiceSettingValueTemplate($this->_propDict["choiceSettingValueTemplate"]);
                return $this->_propDict["choiceSettingValueTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the choiceSettingValueTemplate
    * Choice Setting Value Template
    *
    * @param DeviceManagementConfigurationChoiceSettingValueTemplate $val The value to assign to the choiceSettingValueTemplate
    *
    * @return DeviceManagementConfigurationChoiceSettingInstanceTemplate The DeviceManagementConfigurationChoiceSettingInstanceTemplate
    */
    public function setChoiceSettingValueTemplate($val)
    {
        $this->_propDict["choiceSettingValueTemplate"] = $val;
         return $this;
    }
}
