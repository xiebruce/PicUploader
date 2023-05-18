<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdleSessionSignOut File
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
* IdleSessionSignOut class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdleSessionSignOut extends Entity
{
    /**
    * Gets the isEnabled
    * Indicates whether the idle session sign-out policy is enabled.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Indicates whether the idle session sign-out policy is enabled.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return IdleSessionSignOut
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the signOutAfterInSeconds
    * Number of seconds of inactivity after which a user is signed out.
    *
    * @return int|null The signOutAfterInSeconds
    */
    public function getSignOutAfterInSeconds()
    {
        if (array_key_exists("signOutAfterInSeconds", $this->_propDict)) {
            return $this->_propDict["signOutAfterInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signOutAfterInSeconds
    * Number of seconds of inactivity after which a user is signed out.
    *
    * @param int $val The value of the signOutAfterInSeconds
    *
    * @return IdleSessionSignOut
    */
    public function setSignOutAfterInSeconds($val)
    {
        $this->_propDict["signOutAfterInSeconds"] = $val;
        return $this;
    }
    /**
    * Gets the warnAfterInSeconds
    * Number of seconds of inactivity after which a user is notified that they'll be signed out.
    *
    * @return int|null The warnAfterInSeconds
    */
    public function getWarnAfterInSeconds()
    {
        if (array_key_exists("warnAfterInSeconds", $this->_propDict)) {
            return $this->_propDict["warnAfterInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the warnAfterInSeconds
    * Number of seconds of inactivity after which a user is notified that they'll be signed out.
    *
    * @param int $val The value of the warnAfterInSeconds
    *
    * @return IdleSessionSignOut
    */
    public function setWarnAfterInSeconds($val)
    {
        $this->_propDict["warnAfterInSeconds"] = $val;
        return $this;
    }
}
