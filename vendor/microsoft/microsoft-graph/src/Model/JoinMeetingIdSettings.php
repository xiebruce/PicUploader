<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* JoinMeetingIdSettings File
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
* JoinMeetingIdSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class JoinMeetingIdSettings extends Entity
{
    /**
    * Gets the isPasscodeRequired
    * Indicates whether a passcode is required to join a meeting when using joinMeetingId. Optional.
    *
    * @return bool|null The isPasscodeRequired
    */
    public function getIsPasscodeRequired()
    {
        if (array_key_exists("isPasscodeRequired", $this->_propDict)) {
            return $this->_propDict["isPasscodeRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPasscodeRequired
    * Indicates whether a passcode is required to join a meeting when using joinMeetingId. Optional.
    *
    * @param bool $val The value of the isPasscodeRequired
    *
    * @return JoinMeetingIdSettings
    */
    public function setIsPasscodeRequired($val)
    {
        $this->_propDict["isPasscodeRequired"] = $val;
        return $this;
    }
    /**
    * Gets the joinMeetingId
    * The meeting ID to be used to join a meeting. Optional. Read-only.
    *
    * @return string|null The joinMeetingId
    */
    public function getJoinMeetingId()
    {
        if (array_key_exists("joinMeetingId", $this->_propDict)) {
            return $this->_propDict["joinMeetingId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the joinMeetingId
    * The meeting ID to be used to join a meeting. Optional. Read-only.
    *
    * @param string $val The value of the joinMeetingId
    *
    * @return JoinMeetingIdSettings
    */
    public function setJoinMeetingId($val)
    {
        $this->_propDict["joinMeetingId"] = $val;
        return $this;
    }
    /**
    * Gets the passcode
    * The passcode to join a meeting.  Optional. Read-only.
    *
    * @return string|null The passcode
    */
    public function getPasscode()
    {
        if (array_key_exists("passcode", $this->_propDict)) {
            return $this->_propDict["passcode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passcode
    * The passcode to join a meeting.  Optional. Read-only.
    *
    * @param string $val The value of the passcode
    *
    * @return JoinMeetingIdSettings
    */
    public function setPasscode($val)
    {
        $this->_propDict["passcode"] = $val;
        return $this;
    }
}
