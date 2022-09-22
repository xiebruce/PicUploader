<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WinGetAppAssignmentSettings File
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
* WinGetAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WinGetAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.winGetAppAssignmentSettings");
    }


    /**
    * Gets the installTimeSettings
    * The install time settings to apply for this app assignment.
    *
    * @return WinGetAppInstallTimeSettings|null The installTimeSettings
    */
    public function getInstallTimeSettings()
    {
        if (array_key_exists("installTimeSettings", $this->_propDict)) {
            if (is_a($this->_propDict["installTimeSettings"], "\Beta\Microsoft\Graph\Model\WinGetAppInstallTimeSettings") || is_null($this->_propDict["installTimeSettings"])) {
                return $this->_propDict["installTimeSettings"];
            } else {
                $this->_propDict["installTimeSettings"] = new WinGetAppInstallTimeSettings($this->_propDict["installTimeSettings"]);
                return $this->_propDict["installTimeSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the installTimeSettings
    * The install time settings to apply for this app assignment.
    *
    * @param WinGetAppInstallTimeSettings $val The value to assign to the installTimeSettings
    *
    * @return WinGetAppAssignmentSettings The WinGetAppAssignmentSettings
    */
    public function setInstallTimeSettings($val)
    {
        $this->_propDict["installTimeSettings"] = $val;
         return $this;
    }

    /**
    * Gets the notifications
    * The notification status for this app assignment. Possible values are: showAll, showReboot, hideAll, unknownFutureValue.
    *
    * @return WinGetAppNotification|null The notifications
    */
    public function getNotifications()
    {
        if (array_key_exists("notifications", $this->_propDict)) {
            if (is_a($this->_propDict["notifications"], "\Beta\Microsoft\Graph\Model\WinGetAppNotification") || is_null($this->_propDict["notifications"])) {
                return $this->_propDict["notifications"];
            } else {
                $this->_propDict["notifications"] = new WinGetAppNotification($this->_propDict["notifications"]);
                return $this->_propDict["notifications"];
            }
        }
        return null;
    }

    /**
    * Sets the notifications
    * The notification status for this app assignment. Possible values are: showAll, showReboot, hideAll, unknownFutureValue.
    *
    * @param WinGetAppNotification $val The value to assign to the notifications
    *
    * @return WinGetAppAssignmentSettings The WinGetAppAssignmentSettings
    */
    public function setNotifications($val)
    {
        $this->_propDict["notifications"] = $val;
         return $this;
    }

    /**
    * Gets the restartSettings
    * The reboot settings to apply for this app assignment.
    *
    * @return WinGetAppRestartSettings|null The restartSettings
    */
    public function getRestartSettings()
    {
        if (array_key_exists("restartSettings", $this->_propDict)) {
            if (is_a($this->_propDict["restartSettings"], "\Beta\Microsoft\Graph\Model\WinGetAppRestartSettings") || is_null($this->_propDict["restartSettings"])) {
                return $this->_propDict["restartSettings"];
            } else {
                $this->_propDict["restartSettings"] = new WinGetAppRestartSettings($this->_propDict["restartSettings"]);
                return $this->_propDict["restartSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the restartSettings
    * The reboot settings to apply for this app assignment.
    *
    * @param WinGetAppRestartSettings $val The value to assign to the restartSettings
    *
    * @return WinGetAppAssignmentSettings The WinGetAppAssignmentSettings
    */
    public function setRestartSettings($val)
    {
        $this->_propDict["restartSettings"] = $val;
         return $this;
    }
}
