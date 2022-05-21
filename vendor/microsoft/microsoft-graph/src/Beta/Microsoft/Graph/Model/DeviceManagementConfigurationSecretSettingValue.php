<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSecretSettingValue File
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
* DeviceManagementConfigurationSecretSettingValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSecretSettingValue extends DeviceManagementConfigurationSimpleSettingValue
{
    /**
    * Gets the value
    * Value of the secret setting.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Value of the secret setting.
    *
    * @param string $val The value of the value
    *
    * @return DeviceManagementConfigurationSecretSettingValue
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }

    /**
    * Gets the valueState
    * Gets or sets a value indicating the encryption state of the Value property. Possible values are: invalid, notEncrypted, encryptedValueToken.
    *
    * @return DeviceManagementConfigurationSecretSettingValueState|null The valueState
    */
    public function getValueState()
    {
        if (array_key_exists("valueState", $this->_propDict)) {
            if (is_a($this->_propDict["valueState"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSecretSettingValueState") || is_null($this->_propDict["valueState"])) {
                return $this->_propDict["valueState"];
            } else {
                $this->_propDict["valueState"] = new DeviceManagementConfigurationSecretSettingValueState($this->_propDict["valueState"]);
                return $this->_propDict["valueState"];
            }
        }
        return null;
    }

    /**
    * Sets the valueState
    * Gets or sets a value indicating the encryption state of the Value property. Possible values are: invalid, notEncrypted, encryptedValueToken.
    *
    * @param DeviceManagementConfigurationSecretSettingValueState $val The value to assign to the valueState
    *
    * @return DeviceManagementConfigurationSecretSettingValue The DeviceManagementConfigurationSecretSettingValue
    */
    public function setValueState($val)
    {
        $this->_propDict["valueState"] = $val;
         return $this;
    }
}
