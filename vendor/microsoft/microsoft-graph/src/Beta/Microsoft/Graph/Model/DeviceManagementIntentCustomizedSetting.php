<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementIntentCustomizedSetting File
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
* DeviceManagementIntentCustomizedSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementIntentCustomizedSetting extends Entity
{
    /**
    * Gets the customizedJson
    * JSON representation of the customized value, if different from default
    *
    * @return string|null The customizedJson
    */
    public function getCustomizedJson()
    {
        if (array_key_exists("customizedJson", $this->_propDict)) {
            return $this->_propDict["customizedJson"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customizedJson
    * JSON representation of the customized value, if different from default
    *
    * @param string $val The value of the customizedJson
    *
    * @return DeviceManagementIntentCustomizedSetting
    */
    public function setCustomizedJson($val)
    {
        $this->_propDict["customizedJson"] = $val;
        return $this;
    }
    /**
    * Gets the defaultJson
    * JSON representation of the default value from the template
    *
    * @return string|null The defaultJson
    */
    public function getDefaultJson()
    {
        if (array_key_exists("defaultJson", $this->_propDict)) {
            return $this->_propDict["defaultJson"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultJson
    * JSON representation of the default value from the template
    *
    * @param string $val The value of the defaultJson
    *
    * @return DeviceManagementIntentCustomizedSetting
    */
    public function setDefaultJson($val)
    {
        $this->_propDict["defaultJson"] = $val;
        return $this;
    }
    /**
    * Gets the definitionId
    * The ID of the setting definition for this setting
    *
    * @return string|null The definitionId
    */
    public function getDefinitionId()
    {
        if (array_key_exists("definitionId", $this->_propDict)) {
            return $this->_propDict["definitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the definitionId
    * The ID of the setting definition for this setting
    *
    * @param string $val The value of the definitionId
    *
    * @return DeviceManagementIntentCustomizedSetting
    */
    public function setDefinitionId($val)
    {
        $this->_propDict["definitionId"] = $val;
        return $this;
    }
}
