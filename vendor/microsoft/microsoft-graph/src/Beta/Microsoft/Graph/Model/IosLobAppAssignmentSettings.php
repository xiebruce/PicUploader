<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosLobAppAssignmentSettings File
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
* IosLobAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosLobAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.iosLobAppAssignmentSettings");
    }

    /**
    * Gets the isRemovable
    * When TRUE, indicates that the app can be uninstalled by the user. When FALSE, indicates that the app cannot be uninstalled by the user. By default, this property is set to null which internally is treated as TRUE.
    *
    * @return bool|null The isRemovable
    */
    public function getIsRemovable()
    {
        if (array_key_exists("isRemovable", $this->_propDict)) {
            return $this->_propDict["isRemovable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRemovable
    * When TRUE, indicates that the app can be uninstalled by the user. When FALSE, indicates that the app cannot be uninstalled by the user. By default, this property is set to null which internally is treated as TRUE.
    *
    * @param bool $val The value of the isRemovable
    *
    * @return IosLobAppAssignmentSettings
    */
    public function setIsRemovable($val)
    {
        $this->_propDict["isRemovable"] = $val;
        return $this;
    }
    /**
    * Gets the preventManagedAppBackup
    * When TRUE, indicates that the app should not be backed up to iCloud. When FALSE, indicates that the app may be backed up to iCloud. By default, this property is set to null which internally is treated as FALSE.
    *
    * @return bool|null The preventManagedAppBackup
    */
    public function getPreventManagedAppBackup()
    {
        if (array_key_exists("preventManagedAppBackup", $this->_propDict)) {
            return $this->_propDict["preventManagedAppBackup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preventManagedAppBackup
    * When TRUE, indicates that the app should not be backed up to iCloud. When FALSE, indicates that the app may be backed up to iCloud. By default, this property is set to null which internally is treated as FALSE.
    *
    * @param bool $val The value of the preventManagedAppBackup
    *
    * @return IosLobAppAssignmentSettings
    */
    public function setPreventManagedAppBackup($val)
    {
        $this->_propDict["preventManagedAppBackup"] = $val;
        return $this;
    }
    /**
    * Gets the uninstallOnDeviceRemoval
    * Whether or not to uninstall the app when device is removed from Intune.
    *
    * @return bool|null The uninstallOnDeviceRemoval
    */
    public function getUninstallOnDeviceRemoval()
    {
        if (array_key_exists("uninstallOnDeviceRemoval", $this->_propDict)) {
            return $this->_propDict["uninstallOnDeviceRemoval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uninstallOnDeviceRemoval
    * Whether or not to uninstall the app when device is removed from Intune.
    *
    * @param bool $val The value of the uninstallOnDeviceRemoval
    *
    * @return IosLobAppAssignmentSettings
    */
    public function setUninstallOnDeviceRemoval($val)
    {
        $this->_propDict["uninstallOnDeviceRemoval"] = $val;
        return $this;
    }
    /**
    * Gets the vpnConfigurationId
    * The VPN Configuration Id to apply for this app.
    *
    * @return string|null The vpnConfigurationId
    */
    public function getVpnConfigurationId()
    {
        if (array_key_exists("vpnConfigurationId", $this->_propDict)) {
            return $this->_propDict["vpnConfigurationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vpnConfigurationId
    * The VPN Configuration Id to apply for this app.
    *
    * @param string $val The value of the vpnConfigurationId
    *
    * @return IosLobAppAssignmentSettings
    */
    public function setVpnConfigurationId($val)
    {
        $this->_propDict["vpnConfigurationId"] = $val;
        return $this;
    }
}
