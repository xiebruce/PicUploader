<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate File
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
* DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionInstanceTemplate");
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
    * @return DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate
    */
    public function setAllowUnmanagedValues($val)
    {
        $this->_propDict["allowUnmanagedValues"] = $val;
        return $this;
    }

    /**
    * Gets the simpleSettingCollectionValueTemplate
    * Simple Setting Collection Value Template
    *
    * @return DeviceManagementConfigurationSimpleSettingValueTemplate|null The simpleSettingCollectionValueTemplate
    */
    public function getSimpleSettingCollectionValueTemplate()
    {
        if (array_key_exists("simpleSettingCollectionValueTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["simpleSettingCollectionValueTemplate"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSimpleSettingValueTemplate") || is_null($this->_propDict["simpleSettingCollectionValueTemplate"])) {
                return $this->_propDict["simpleSettingCollectionValueTemplate"];
            } else {
                $this->_propDict["simpleSettingCollectionValueTemplate"] = new DeviceManagementConfigurationSimpleSettingValueTemplate($this->_propDict["simpleSettingCollectionValueTemplate"]);
                return $this->_propDict["simpleSettingCollectionValueTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the simpleSettingCollectionValueTemplate
    * Simple Setting Collection Value Template
    *
    * @param DeviceManagementConfigurationSimpleSettingValueTemplate $val The value to assign to the simpleSettingCollectionValueTemplate
    *
    * @return DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate The DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate
    */
    public function setSimpleSettingCollectionValueTemplate($val)
    {
        $this->_propDict["simpleSettingCollectionValueTemplate"] = $val;
         return $this;
    }
}
