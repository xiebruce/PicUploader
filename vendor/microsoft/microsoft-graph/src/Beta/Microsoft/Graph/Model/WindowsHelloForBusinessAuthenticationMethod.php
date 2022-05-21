<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsHelloForBusinessAuthenticationMethod File
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
* WindowsHelloForBusinessAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsHelloForBusinessAuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the createdDateTime
    * The date and time that this Windows Hello for Business key was registered.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time that this Windows Hello for Business key was registered.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return WindowsHelloForBusinessAuthenticationMethod
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the device on which Windows Hello for Business is registered
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The name of the device on which Windows Hello for Business is registered
    *
    * @param string $val The displayName
    *
    * @return WindowsHelloForBusinessAuthenticationMethod
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the keyStrength
    * Key strength of this Windows Hello for Business key. Possible values are: normal, weak, unknown.
    *
    * @return AuthenticationMethodKeyStrength|null The keyStrength
    */
    public function getKeyStrength()
    {
        if (array_key_exists("keyStrength", $this->_propDict)) {
            if (is_a($this->_propDict["keyStrength"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodKeyStrength") || is_null($this->_propDict["keyStrength"])) {
                return $this->_propDict["keyStrength"];
            } else {
                $this->_propDict["keyStrength"] = new AuthenticationMethodKeyStrength($this->_propDict["keyStrength"]);
                return $this->_propDict["keyStrength"];
            }
        }
        return null;
    }

    /**
    * Sets the keyStrength
    * Key strength of this Windows Hello for Business key. Possible values are: normal, weak, unknown.
    *
    * @param AuthenticationMethodKeyStrength $val The keyStrength
    *
    * @return WindowsHelloForBusinessAuthenticationMethod
    */
    public function setKeyStrength($val)
    {
        $this->_propDict["keyStrength"] = $val;
        return $this;
    }

    /**
    * Gets the device
    * The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
    *
    * @return Device|null The device
    */
    public function getDevice()
    {
        if (array_key_exists("device", $this->_propDict)) {
            if (is_a($this->_propDict["device"], "\Beta\Microsoft\Graph\Model\Device") || is_null($this->_propDict["device"])) {
                return $this->_propDict["device"];
            } else {
                $this->_propDict["device"] = new Device($this->_propDict["device"]);
                return $this->_propDict["device"];
            }
        }
        return null;
    }

    /**
    * Sets the device
    * The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
    *
    * @param Device $val The device
    *
    * @return WindowsHelloForBusinessAuthenticationMethod
    */
    public function setDevice($val)
    {
        $this->_propDict["device"] = $val;
        return $this;
    }

}
