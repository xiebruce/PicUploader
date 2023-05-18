<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftAuthenticatorAuthenticationMethod File
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
* MicrosoftAuthenticatorAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftAuthenticatorAuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the clientAppName
    * The app that the user has registered to use to approve push notifications. The possible values are: microsoftAuthenticator, outlookMobile, unknownFutureValue.
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodClientAppName|null The clientAppName
    */
    public function getClientAppName()
    {
        if (array_key_exists("clientAppName", $this->_propDict)) {
            if (is_a($this->_propDict["clientAppName"], "\Beta\Microsoft\Graph\Model\MicrosoftAuthenticatorAuthenticationMethodClientAppName") || is_null($this->_propDict["clientAppName"])) {
                return $this->_propDict["clientAppName"];
            } else {
                $this->_propDict["clientAppName"] = new MicrosoftAuthenticatorAuthenticationMethodClientAppName($this->_propDict["clientAppName"]);
                return $this->_propDict["clientAppName"];
            }
        }
        return null;
    }

    /**
    * Sets the clientAppName
    * The app that the user has registered to use to approve push notifications. The possible values are: microsoftAuthenticator, outlookMobile, unknownFutureValue.
    *
    * @param MicrosoftAuthenticatorAuthenticationMethodClientAppName $val The clientAppName
    *
    * @return MicrosoftAuthenticatorAuthenticationMethod
    */
    public function setClientAppName($val)
    {
        $this->_propDict["clientAppName"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time that this app was registered. This property is null if the device is not registered for passwordless Phone Sign-In.
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
    * The date and time that this app was registered. This property is null if the device is not registered for passwordless Phone Sign-In.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return MicrosoftAuthenticatorAuthenticationMethod
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deviceTag
    * Tags containing app metadata.
    *
    * @return string|null The deviceTag
    */
    public function getDeviceTag()
    {
        if (array_key_exists("deviceTag", $this->_propDict)) {
            return $this->_propDict["deviceTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceTag
    * Tags containing app metadata.
    *
    * @param string $val The deviceTag
    *
    * @return MicrosoftAuthenticatorAuthenticationMethod
    */
    public function setDeviceTag($val)
    {
        $this->_propDict["deviceTag"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the device on which this app is registered.
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
    * The name of the device on which this app is registered.
    *
    * @param string $val The displayName
    *
    * @return MicrosoftAuthenticatorAuthenticationMethod
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the phoneAppVersion
    * Numerical version of this instance of the Authenticator app.
    *
    * @return string|null The phoneAppVersion
    */
    public function getPhoneAppVersion()
    {
        if (array_key_exists("phoneAppVersion", $this->_propDict)) {
            return $this->_propDict["phoneAppVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phoneAppVersion
    * Numerical version of this instance of the Authenticator app.
    *
    * @param string $val The phoneAppVersion
    *
    * @return MicrosoftAuthenticatorAuthenticationMethod
    */
    public function setPhoneAppVersion($val)
    {
        $this->_propDict["phoneAppVersion"] = $val;
        return $this;
    }

    /**
    * Gets the device
    * The registered device on which Microsoft Authenticator resides. This property is null if the device is not registered for passwordless Phone Sign-In.
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
    * The registered device on which Microsoft Authenticator resides. This property is null if the device is not registered for passwordless Phone Sign-In.
    *
    * @param Device $val The device
    *
    * @return MicrosoftAuthenticatorAuthenticationMethod
    */
    public function setDevice($val)
    {
        $this->_propDict["device"] = $val;
        return $this;
    }

}
