<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AospDeviceOwnerDeviceConfiguration File
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
* AospDeviceOwnerDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AospDeviceOwnerDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the appsBlockInstallFromUnknownSources
    * Indicates whether or not the user is allowed to enable unknown sources setting. When set to true, user is not allowed to enable unknown sources settings.
    *
    * @return bool|null The appsBlockInstallFromUnknownSources
    */
    public function getAppsBlockInstallFromUnknownSources()
    {
        if (array_key_exists("appsBlockInstallFromUnknownSources", $this->_propDict)) {
            return $this->_propDict["appsBlockInstallFromUnknownSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appsBlockInstallFromUnknownSources
    * Indicates whether or not the user is allowed to enable unknown sources setting. When set to true, user is not allowed to enable unknown sources settings.
    *
    * @param bool $val The appsBlockInstallFromUnknownSources
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setAppsBlockInstallFromUnknownSources($val)
    {
        $this->_propDict["appsBlockInstallFromUnknownSources"] = boolval($val);
        return $this;
    }

    /**
    * Gets the bluetoothBlockConfiguration
    * Indicates whether or not to block a user from configuring bluetooth.
    *
    * @return bool|null The bluetoothBlockConfiguration
    */
    public function getBluetoothBlockConfiguration()
    {
        if (array_key_exists("bluetoothBlockConfiguration", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockConfiguration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bluetoothBlockConfiguration
    * Indicates whether or not to block a user from configuring bluetooth.
    *
    * @param bool $val The bluetoothBlockConfiguration
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setBluetoothBlockConfiguration($val)
    {
        $this->_propDict["bluetoothBlockConfiguration"] = boolval($val);
        return $this;
    }

    /**
    * Gets the bluetoothBlocked
    * Indicates whether or not to disable the use of bluetooth. When set to true, bluetooth cannot be enabled on the device.
    *
    * @return bool|null The bluetoothBlocked
    */
    public function getBluetoothBlocked()
    {
        if (array_key_exists("bluetoothBlocked", $this->_propDict)) {
            return $this->_propDict["bluetoothBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bluetoothBlocked
    * Indicates whether or not to disable the use of bluetooth. When set to true, bluetooth cannot be enabled on the device.
    *
    * @param bool $val The bluetoothBlocked
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setBluetoothBlocked($val)
    {
        $this->_propDict["bluetoothBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the cameraBlocked
    * Indicates whether or not to disable the use of the camera.
    *
    * @return bool|null The cameraBlocked
    */
    public function getCameraBlocked()
    {
        if (array_key_exists("cameraBlocked", $this->_propDict)) {
            return $this->_propDict["cameraBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cameraBlocked
    * Indicates whether or not to disable the use of the camera.
    *
    * @param bool $val The cameraBlocked
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the factoryResetBlocked
    * Indicates whether or not the factory reset option in settings is disabled.
    *
    * @return bool|null The factoryResetBlocked
    */
    public function getFactoryResetBlocked()
    {
        if (array_key_exists("factoryResetBlocked", $this->_propDict)) {
            return $this->_propDict["factoryResetBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the factoryResetBlocked
    * Indicates whether or not the factory reset option in settings is disabled.
    *
    * @param bool $val The factoryResetBlocked
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setFactoryResetBlocked($val)
    {
        $this->_propDict["factoryResetBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumLength
    * Indicates the minimum length of the password required on the device. Valid values 4 to 16
    *
    * @return int|null The passwordMinimumLength
    */
    public function getPasswordMinimumLength()
    {
        if (array_key_exists("passwordMinimumLength", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumLength
    * Indicates the minimum length of the password required on the device. Valid values 4 to 16
    *
    * @param int $val The passwordMinimumLength
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @return int|null The passwordMinutesOfInactivityBeforeScreenTimeout
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordRequiredType
    * Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    *
    * @return AndroidDeviceOwnerRequiredPasswordType|null The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerRequiredPasswordType") || is_null($this->_propDict["passwordRequiredType"])) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new AndroidDeviceOwnerRequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }

    /**
    * Sets the passwordRequiredType
    * Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    *
    * @param AndroidDeviceOwnerRequiredPasswordType $val The passwordRequiredType
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }

    /**
    * Gets the passwordSignInFailureCountBeforeFactoryReset
    * Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
    *
    * @return int|null The passwordSignInFailureCountBeforeFactoryReset
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset()
    {
        if (array_key_exists("passwordSignInFailureCountBeforeFactoryReset", $this->_propDict)) {
            return $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordSignInFailureCountBeforeFactoryReset
    * Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
    *
    * @param int $val The passwordSignInFailureCountBeforeFactoryReset
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }

    /**
    * Gets the screenCaptureBlocked
    * Indicates whether or not to disable the capability to take screenshots.
    *
    * @return bool|null The screenCaptureBlocked
    */
    public function getScreenCaptureBlocked()
    {
        if (array_key_exists("screenCaptureBlocked", $this->_propDict)) {
            return $this->_propDict["screenCaptureBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the screenCaptureBlocked
    * Indicates whether or not to disable the capability to take screenshots.
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the securityAllowDebuggingFeatures
    * Indicates whether or not to block the user from enabling debugging features on the device.
    *
    * @return bool|null The securityAllowDebuggingFeatures
    */
    public function getSecurityAllowDebuggingFeatures()
    {
        if (array_key_exists("securityAllowDebuggingFeatures", $this->_propDict)) {
            return $this->_propDict["securityAllowDebuggingFeatures"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityAllowDebuggingFeatures
    * Indicates whether or not to block the user from enabling debugging features on the device.
    *
    * @param bool $val The securityAllowDebuggingFeatures
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setSecurityAllowDebuggingFeatures($val)
    {
        $this->_propDict["securityAllowDebuggingFeatures"] = boolval($val);
        return $this;
    }

    /**
    * Gets the storageBlockExternalMedia
    * Indicates whether or not to block external media.
    *
    * @return bool|null The storageBlockExternalMedia
    */
    public function getStorageBlockExternalMedia()
    {
        if (array_key_exists("storageBlockExternalMedia", $this->_propDict)) {
            return $this->_propDict["storageBlockExternalMedia"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageBlockExternalMedia
    * Indicates whether or not to block external media.
    *
    * @param bool $val The storageBlockExternalMedia
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setStorageBlockExternalMedia($val)
    {
        $this->_propDict["storageBlockExternalMedia"] = boolval($val);
        return $this;
    }

    /**
    * Gets the storageBlockUsbFileTransfer
    * Indicates whether or not to block USB file transfer.
    *
    * @return bool|null The storageBlockUsbFileTransfer
    */
    public function getStorageBlockUsbFileTransfer()
    {
        if (array_key_exists("storageBlockUsbFileTransfer", $this->_propDict)) {
            return $this->_propDict["storageBlockUsbFileTransfer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageBlockUsbFileTransfer
    * Indicates whether or not to block USB file transfer.
    *
    * @param bool $val The storageBlockUsbFileTransfer
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setStorageBlockUsbFileTransfer($val)
    {
        $this->_propDict["storageBlockUsbFileTransfer"] = boolval($val);
        return $this;
    }

    /**
    * Gets the wifiBlockEditConfigurations
    * Indicates whether or not to block the user from editing the wifi connection settings.
    *
    * @return bool|null The wifiBlockEditConfigurations
    */
    public function getWifiBlockEditConfigurations()
    {
        if (array_key_exists("wifiBlockEditConfigurations", $this->_propDict)) {
            return $this->_propDict["wifiBlockEditConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiBlockEditConfigurations
    * Indicates whether or not to block the user from editing the wifi connection settings.
    *
    * @param bool $val The wifiBlockEditConfigurations
    *
    * @return AospDeviceOwnerDeviceConfiguration
    */
    public function setWifiBlockEditConfigurations($val)
    {
        $this->_propDict["wifiBlockEditConfigurations"] = boolval($val);
        return $this;
    }

}
