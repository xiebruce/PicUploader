<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* JoinMeetingIdMeetingInfo File
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
* JoinMeetingIdMeetingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class JoinMeetingIdMeetingInfo extends MeetingInfo
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.joinMeetingIdMeetingInfo");
    }

    /**
    * Gets the joinMeetingId
    * The ID used to join the meeting.
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
    * The ID used to join the meeting.
    *
    * @param string $val The value of the joinMeetingId
    *
    * @return JoinMeetingIdMeetingInfo
    */
    public function setJoinMeetingId($val)
    {
        $this->_propDict["joinMeetingId"] = $val;
        return $this;
    }
    /**
    * Gets the passcode
    * The passcode used to join the meeting. Optional.
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
    * The passcode used to join the meeting. Optional.
    *
    * @param string $val The value of the passcode
    *
    * @return JoinMeetingIdMeetingInfo
    */
    public function setPasscode($val)
    {
        $this->_propDict["passcode"] = $val;
        return $this;
    }
}
