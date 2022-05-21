<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate File
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
* DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationChoiceSettingCollectionInstanceTemplate");
    }

    /**
    * Gets the allowUnmanagedValues
    * Linked policy may append values which are not present in the template.
    *
    * @return bool|null The allowUnmanagedValues
    */
    public function getAllowUnmanagedValues()
    {
        if (array_key_exists("allowUnmanagedValues", $this->_propDict)) {
            return $this->_propDict["allowUnmanagedValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUnmanagedValues
    * Linked policy may append values which are not present in the template.
    *
    * @param bool $val The value of the allowUnmanagedValues
    *
    * @return DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate
    */
    public function setAllowUnmanagedValues($val)
    {
        $this->_propDict["allowUnmanagedValues"] = $val;
        return $this;
    }

    /**
    * Gets the choiceSettingCollectionValueTemplate
    * Choice Setting Collection Value Template
    *
    * @return DeviceManagementConfigurationChoiceSettingValueTemplate|null The choiceSettingCollectionValueTemplate
    */
    public function getChoiceSettingCollectionValueTemplate()
    {
        if (array_key_exists("choiceSettingCollectionValueTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["choiceSettingCollectionValueTemplate"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationChoiceSettingValueTemplate") || is_null($this->_propDict["choiceSettingCollectionValueTemplate"])) {
                return $this->_propDict["choiceSettingCollectionValueTemplate"];
            } else {
                $this->_propDict["choiceSettingCollectionValueTemplate"] = new DeviceManagementConfigurationChoiceSettingValueTemplate($this->_propDict["choiceSettingCollectionValueTemplate"]);
                return $this->_propDict["choiceSettingCollectionValueTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the choiceSettingCollectionValueTemplate
    * Choice Setting Collection Value Template
    *
    * @param DeviceManagementConfigurationChoiceSettingValueTemplate $val The value to assign to the choiceSettingCollectionValueTemplate
    *
    * @return DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate The DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate
    */
    public function setChoiceSettingCollectionValueTemplate($val)
    {
        $this->_propDict["choiceSettingCollectionValueTemplate"] = $val;
         return $this;
    }
}
