<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationReferenceSettingValue File
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
* DeviceManagementConfigurationReferenceSettingValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationReferenceSettingValue extends DeviceManagementConfigurationStringSettingValue
{
    /**
    * Gets the note
    * A note that admin can use to put some contextual information
    *
    * @return string|null The note
    */
    public function getNote()
    {
        if (array_key_exists("note", $this->_propDict)) {
            return $this->_propDict["note"];
        } else {
            return null;
        }
    }

    /**
    * Sets the note
    * A note that admin can use to put some contextual information
    *
    * @param string $val The value of the note
    *
    * @return DeviceManagementConfigurationReferenceSettingValue
    */
    public function setNote($val)
    {
        $this->_propDict["note"] = $val;
        return $this;
    }
}
