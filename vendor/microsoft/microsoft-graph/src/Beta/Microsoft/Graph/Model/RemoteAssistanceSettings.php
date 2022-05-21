<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemoteAssistanceSettings File
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
* RemoteAssistanceSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemoteAssistanceSettings extends Entity
{
    /**
    * Gets the allowSessionsToUnenrolledDevices
    * Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false.
    *
    * @return bool|null The allowSessionsToUnenrolledDevices
    */
    public function getAllowSessionsToUnenrolledDevices()
    {
        if (array_key_exists("allowSessionsToUnenrolledDevices", $this->_propDict)) {
            return $this->_propDict["allowSessionsToUnenrolledDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowSessionsToUnenrolledDevices
    * Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false.
    *
    * @param bool $val The allowSessionsToUnenrolledDevices
    *
    * @return RemoteAssistanceSettings
    */
    public function setAllowSessionsToUnenrolledDevices($val)
    {
        $this->_propDict["allowSessionsToUnenrolledDevices"] = boolval($val);
        return $this;
    }

    /**
    * Gets the remoteAssistanceState
    * The current state of remote assistance for the account. Possible values are: disabled, enabled. This setting is configurable by the admin. Remote assistance settings that have not yet been configured by the admin have a disabled state. Returned by default. Possible values are: disabled, enabled.
    *
    * @return RemoteAssistanceState|null The remoteAssistanceState
    */
    public function getRemoteAssistanceState()
    {
        if (array_key_exists("remoteAssistanceState", $this->_propDict)) {
            if (is_a($this->_propDict["remoteAssistanceState"], "\Beta\Microsoft\Graph\Model\RemoteAssistanceState") || is_null($this->_propDict["remoteAssistanceState"])) {
                return $this->_propDict["remoteAssistanceState"];
            } else {
                $this->_propDict["remoteAssistanceState"] = new RemoteAssistanceState($this->_propDict["remoteAssistanceState"]);
                return $this->_propDict["remoteAssistanceState"];
            }
        }
        return null;
    }

    /**
    * Sets the remoteAssistanceState
    * The current state of remote assistance for the account. Possible values are: disabled, enabled. This setting is configurable by the admin. Remote assistance settings that have not yet been configured by the admin have a disabled state. Returned by default. Possible values are: disabled, enabled.
    *
    * @param RemoteAssistanceState $val The remoteAssistanceState
    *
    * @return RemoteAssistanceSettings
    */
    public function setRemoteAssistanceState($val)
    {
        $this->_propDict["remoteAssistanceState"] = $val;
        return $this;
    }

}
