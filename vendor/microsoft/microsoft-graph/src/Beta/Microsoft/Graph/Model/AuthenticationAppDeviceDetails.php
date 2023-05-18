<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationAppDeviceDetails File
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
* AuthenticationAppDeviceDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationAppDeviceDetails extends Entity
{
    /**
    * Gets the appVersion
    * The version of the client authentication app used during the authentication step.
    *
    * @return string|null The appVersion
    */
    public function getAppVersion()
    {
        if (array_key_exists("appVersion", $this->_propDict)) {
            return $this->_propDict["appVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appVersion
    * The version of the client authentication app used during the authentication step.
    *
    * @param string $val The value of the appVersion
    *
    * @return AuthenticationAppDeviceDetails
    */
    public function setAppVersion($val)
    {
        $this->_propDict["appVersion"] = $val;
        return $this;
    }
    /**
    * Gets the clientApp
    * The name of the client authentication app used during the authentication step.
    *
    * @return string|null The clientApp
    */
    public function getClientApp()
    {
        if (array_key_exists("clientApp", $this->_propDict)) {
            return $this->_propDict["clientApp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientApp
    * The name of the client authentication app used during the authentication step.
    *
    * @param string $val The value of the clientApp
    *
    * @return AuthenticationAppDeviceDetails
    */
    public function setClientApp($val)
    {
        $this->_propDict["clientApp"] = $val;
        return $this;
    }
    /**
    * Gets the deviceId
    * ID of the device used during the authentication step.
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * ID of the device used during the authentication step.
    *
    * @param string $val The value of the deviceId
    *
    * @return AuthenticationAppDeviceDetails
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    /**
    * Gets the operatingSystem
    * The operating system running on the device used for the authentication step.
    *
    * @return string|null The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystem
    * The operating system running on the device used for the authentication step.
    *
    * @param string $val The value of the operatingSystem
    *
    * @return AuthenticationAppDeviceDetails
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
}
