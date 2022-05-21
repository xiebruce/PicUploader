<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkSystemConfiguration File
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
* TeamworkSystemConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkSystemConfiguration extends Entity
{

    /**
    * Gets the dateTimeConfiguration
    * The date and time configurations for a device.
    *
    * @return TeamworkDateTimeConfiguration|null The dateTimeConfiguration
    */
    public function getDateTimeConfiguration()
    {
        if (array_key_exists("dateTimeConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["dateTimeConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkDateTimeConfiguration") || is_null($this->_propDict["dateTimeConfiguration"])) {
                return $this->_propDict["dateTimeConfiguration"];
            } else {
                $this->_propDict["dateTimeConfiguration"] = new TeamworkDateTimeConfiguration($this->_propDict["dateTimeConfiguration"]);
                return $this->_propDict["dateTimeConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the dateTimeConfiguration
    * The date and time configurations for a device.
    *
    * @param TeamworkDateTimeConfiguration $val The value to assign to the dateTimeConfiguration
    *
    * @return TeamworkSystemConfiguration The TeamworkSystemConfiguration
    */
    public function setDateTimeConfiguration($val)
    {
        $this->_propDict["dateTimeConfiguration"] = $val;
         return $this;
    }
    /**
    * Gets the defaultPassword
    * The default password for the device. Write-Only.
    *
    * @return string|null The defaultPassword
    */
    public function getDefaultPassword()
    {
        if (array_key_exists("defaultPassword", $this->_propDict)) {
            return $this->_propDict["defaultPassword"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultPassword
    * The default password for the device. Write-Only.
    *
    * @param string $val The value of the defaultPassword
    *
    * @return TeamworkSystemConfiguration
    */
    public function setDefaultPassword($val)
    {
        $this->_propDict["defaultPassword"] = $val;
        return $this;
    }

    /**
    * Gets the deviceLockTimeout
    * The device lock timeout in seconds.
    *
    * @return \DateInterval|null The deviceLockTimeout
    */
    public function getDeviceLockTimeout()
    {
        if (array_key_exists("deviceLockTimeout", $this->_propDict)) {
            if (is_a($this->_propDict["deviceLockTimeout"], "\DateInterval") || is_null($this->_propDict["deviceLockTimeout"])) {
                return $this->_propDict["deviceLockTimeout"];
            } else {
                $this->_propDict["deviceLockTimeout"] = new \DateInterval($this->_propDict["deviceLockTimeout"]);
                return $this->_propDict["deviceLockTimeout"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceLockTimeout
    * The device lock timeout in seconds.
    *
    * @param \DateInterval $val The value to assign to the deviceLockTimeout
    *
    * @return TeamworkSystemConfiguration The TeamworkSystemConfiguration
    */
    public function setDeviceLockTimeout($val)
    {
        $this->_propDict["deviceLockTimeout"] = $val;
         return $this;
    }
    /**
    * Gets the isDeviceLockEnabled
    * True if the device lock is enabled.
    *
    * @return bool|null The isDeviceLockEnabled
    */
    public function getIsDeviceLockEnabled()
    {
        if (array_key_exists("isDeviceLockEnabled", $this->_propDict)) {
            return $this->_propDict["isDeviceLockEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDeviceLockEnabled
    * True if the device lock is enabled.
    *
    * @param bool $val The value of the isDeviceLockEnabled
    *
    * @return TeamworkSystemConfiguration
    */
    public function setIsDeviceLockEnabled($val)
    {
        $this->_propDict["isDeviceLockEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isLoggingEnabled
    * True if logging is enabled.
    *
    * @return bool|null The isLoggingEnabled
    */
    public function getIsLoggingEnabled()
    {
        if (array_key_exists("isLoggingEnabled", $this->_propDict)) {
            return $this->_propDict["isLoggingEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLoggingEnabled
    * True if logging is enabled.
    *
    * @param bool $val The value of the isLoggingEnabled
    *
    * @return TeamworkSystemConfiguration
    */
    public function setIsLoggingEnabled($val)
    {
        $this->_propDict["isLoggingEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isPowerSavingEnabled
    * True if power saving is enabled.
    *
    * @return bool|null The isPowerSavingEnabled
    */
    public function getIsPowerSavingEnabled()
    {
        if (array_key_exists("isPowerSavingEnabled", $this->_propDict)) {
            return $this->_propDict["isPowerSavingEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPowerSavingEnabled
    * True if power saving is enabled.
    *
    * @param bool $val The value of the isPowerSavingEnabled
    *
    * @return TeamworkSystemConfiguration
    */
    public function setIsPowerSavingEnabled($val)
    {
        $this->_propDict["isPowerSavingEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isScreenCaptureEnabled
    * True if screen capture is enabled.
    *
    * @return bool|null The isScreenCaptureEnabled
    */
    public function getIsScreenCaptureEnabled()
    {
        if (array_key_exists("isScreenCaptureEnabled", $this->_propDict)) {
            return $this->_propDict["isScreenCaptureEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isScreenCaptureEnabled
    * True if screen capture is enabled.
    *
    * @param bool $val The value of the isScreenCaptureEnabled
    *
    * @return TeamworkSystemConfiguration
    */
    public function setIsScreenCaptureEnabled($val)
    {
        $this->_propDict["isScreenCaptureEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isSilentModeEnabled
    * True if silent mode is enabled.
    *
    * @return bool|null The isSilentModeEnabled
    */
    public function getIsSilentModeEnabled()
    {
        if (array_key_exists("isSilentModeEnabled", $this->_propDict)) {
            return $this->_propDict["isSilentModeEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSilentModeEnabled
    * True if silent mode is enabled.
    *
    * @param bool $val The value of the isSilentModeEnabled
    *
    * @return TeamworkSystemConfiguration
    */
    public function setIsSilentModeEnabled($val)
    {
        $this->_propDict["isSilentModeEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the language
    * The language option for the device.
    *
    * @return string|null The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    * The language option for the device.
    *
    * @param string $val The value of the language
    *
    * @return TeamworkSystemConfiguration
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    /**
    * Gets the lockPin
    * The pin that unlocks the device. Write-Only.
    *
    * @return string|null The lockPin
    */
    public function getLockPin()
    {
        if (array_key_exists("lockPin", $this->_propDict)) {
            return $this->_propDict["lockPin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lockPin
    * The pin that unlocks the device. Write-Only.
    *
    * @param string $val The value of the lockPin
    *
    * @return TeamworkSystemConfiguration
    */
    public function setLockPin($val)
    {
        $this->_propDict["lockPin"] = $val;
        return $this;
    }
    /**
    * Gets the loggingLevel
    * The logging level for the device.
    *
    * @return string|null The loggingLevel
    */
    public function getLoggingLevel()
    {
        if (array_key_exists("loggingLevel", $this->_propDict)) {
            return $this->_propDict["loggingLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the loggingLevel
    * The logging level for the device.
    *
    * @param string $val The value of the loggingLevel
    *
    * @return TeamworkSystemConfiguration
    */
    public function setLoggingLevel($val)
    {
        $this->_propDict["loggingLevel"] = $val;
        return $this;
    }

    /**
    * Gets the networkConfiguration
    * The network configuration for the device.
    *
    * @return TeamworkNetworkConfiguration|null The networkConfiguration
    */
    public function getNetworkConfiguration()
    {
        if (array_key_exists("networkConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["networkConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkNetworkConfiguration") || is_null($this->_propDict["networkConfiguration"])) {
                return $this->_propDict["networkConfiguration"];
            } else {
                $this->_propDict["networkConfiguration"] = new TeamworkNetworkConfiguration($this->_propDict["networkConfiguration"]);
                return $this->_propDict["networkConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the networkConfiguration
    * The network configuration for the device.
    *
    * @param TeamworkNetworkConfiguration $val The value to assign to the networkConfiguration
    *
    * @return TeamworkSystemConfiguration The TeamworkSystemConfiguration
    */
    public function setNetworkConfiguration($val)
    {
        $this->_propDict["networkConfiguration"] = $val;
         return $this;
    }
}
