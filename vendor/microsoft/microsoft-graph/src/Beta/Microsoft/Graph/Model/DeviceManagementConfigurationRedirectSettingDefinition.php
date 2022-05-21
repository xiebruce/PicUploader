<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationRedirectSettingDefinition File
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
* DeviceManagementConfigurationRedirectSettingDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationRedirectSettingDefinition extends DeviceManagementConfigurationSettingDefinition
{
    /**
    * Gets the deepLink
    * A deep link that points to the specific location in the Intune console where feature support must be managed from.
    *
    * @return string|null The deepLink
    */
    public function getDeepLink()
    {
        if (array_key_exists("deepLink", $this->_propDict)) {
            return $this->_propDict["deepLink"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deepLink
    * A deep link that points to the specific location in the Intune console where feature support must be managed from.
    *
    * @param string $val The deepLink
    *
    * @return DeviceManagementConfigurationRedirectSettingDefinition
    */
    public function setDeepLink($val)
    {
        $this->_propDict["deepLink"] = $val;
        return $this;
    }

    /**
    * Gets the redirectMessage
    * A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
    *
    * @return string|null The redirectMessage
    */
    public function getRedirectMessage()
    {
        if (array_key_exists("redirectMessage", $this->_propDict)) {
            return $this->_propDict["redirectMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectMessage
    * A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
    *
    * @param string $val The redirectMessage
    *
    * @return DeviceManagementConfigurationRedirectSettingDefinition
    */
    public function setRedirectMessage($val)
    {
        $this->_propDict["redirectMessage"] = $val;
        return $this;
    }

    /**
    * Gets the redirectReason
    * Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
    *
    * @return string|null The redirectReason
    */
    public function getRedirectReason()
    {
        if (array_key_exists("redirectReason", $this->_propDict)) {
            return $this->_propDict["redirectReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectReason
    * Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
    *
    * @param string $val The redirectReason
    *
    * @return DeviceManagementConfigurationRedirectSettingDefinition
    */
    public function setRedirectReason($val)
    {
        $this->_propDict["redirectReason"] = $val;
        return $this;
    }

}
