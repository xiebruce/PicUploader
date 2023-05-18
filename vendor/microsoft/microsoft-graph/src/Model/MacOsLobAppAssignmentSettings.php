<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOsLobAppAssignmentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* MacOsLobAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOsLobAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.macOsLobAppAssignmentSettings");
    }

    /**
    * Gets the uninstallOnDeviceRemoval
    * When TRUE, indicates that the app should be uninstalled when the device is removed from Intune. When FALSE, indicates that the app will not be uninstalled when the device is removed from Intune.
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
    * When TRUE, indicates that the app should be uninstalled when the device is removed from Intune. When FALSE, indicates that the app will not be uninstalled when the device is removed from Intune.
    *
    * @param bool $val The value of the uninstallOnDeviceRemoval
    *
    * @return MacOsLobAppAssignmentSettings
    */
    public function setUninstallOnDeviceRemoval($val)
    {
        $this->_propDict["uninstallOnDeviceRemoval"] = $val;
        return $this;
    }
}
