<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsManagementApp File
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
* WindowsManagementApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsManagementApp extends Entity
{
    /**
    * Gets the availableVersion
    * Windows management app available version.
    *
    * @return string|null The availableVersion
    */
    public function getAvailableVersion()
    {
        if (array_key_exists("availableVersion", $this->_propDict)) {
            return $this->_propDict["availableVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availableVersion
    * Windows management app available version.
    *
    * @param string $val The availableVersion
    *
    * @return WindowsManagementApp
    */
    public function setAvailableVersion($val)
    {
        $this->_propDict["availableVersion"] = $val;
        return $this;
    }

    /**
    * Gets the managedInstaller
    * Managed Installer Status. Possible values are: disabled, enabled.
    *
    * @return ManagedInstallerStatus|null The managedInstaller
    */
    public function getManagedInstaller()
    {
        if (array_key_exists("managedInstaller", $this->_propDict)) {
            if (is_a($this->_propDict["managedInstaller"], "\Beta\Microsoft\Graph\Model\ManagedInstallerStatus") || is_null($this->_propDict["managedInstaller"])) {
                return $this->_propDict["managedInstaller"];
            } else {
                $this->_propDict["managedInstaller"] = new ManagedInstallerStatus($this->_propDict["managedInstaller"]);
                return $this->_propDict["managedInstaller"];
            }
        }
        return null;
    }

    /**
    * Sets the managedInstaller
    * Managed Installer Status. Possible values are: disabled, enabled.
    *
    * @param ManagedInstallerStatus $val The managedInstaller
    *
    * @return WindowsManagementApp
    */
    public function setManagedInstaller($val)
    {
        $this->_propDict["managedInstaller"] = $val;
        return $this;
    }

    /**
    * Gets the managedInstallerConfiguredDateTime
    * Managed Installer Configured Date Time
    *
    * @return string|null The managedInstallerConfiguredDateTime
    */
    public function getManagedInstallerConfiguredDateTime()
    {
        if (array_key_exists("managedInstallerConfiguredDateTime", $this->_propDict)) {
            return $this->_propDict["managedInstallerConfiguredDateTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedInstallerConfiguredDateTime
    * Managed Installer Configured Date Time
    *
    * @param string $val The managedInstallerConfiguredDateTime
    *
    * @return WindowsManagementApp
    */
    public function setManagedInstallerConfiguredDateTime($val)
    {
        $this->_propDict["managedInstallerConfiguredDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the healthStates
    * The list of health states for installed Windows management app.
     *
     * @return array|null The healthStates
     */
    public function getHealthStates()
    {
        if (array_key_exists("healthStates", $this->_propDict)) {
           return $this->_propDict["healthStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the healthStates
    * The list of health states for installed Windows management app.
    *
    * @param WindowsManagementAppHealthState[] $val The healthStates
    *
    * @return WindowsManagementApp
    */
    public function setHealthStates($val)
    {
        $this->_propDict["healthStates"] = $val;
        return $this;
    }

}
