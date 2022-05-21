<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingPolicyUpdatedEventMessageDetail File
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
* MeetingPolicyUpdatedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingPolicyUpdatedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.meetingPolicyUpdatedEventMessageDetail");
    }


    /**
    * Gets the initiator
    * Initiator of the event.
    *
    * @return IdentitySet|null The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict)) {
            if (is_a($this->_propDict["initiator"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["initiator"])) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            }
        }
        return null;
    }

    /**
    * Sets the initiator
    * Initiator of the event.
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return MeetingPolicyUpdatedEventMessageDetail The MeetingPolicyUpdatedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
    /**
    * Gets the meetingChatEnabled
    * Represents whether the meeting chat is enabled or not.
    *
    * @return bool|null The meetingChatEnabled
    */
    public function getMeetingChatEnabled()
    {
        if (array_key_exists("meetingChatEnabled", $this->_propDict)) {
            return $this->_propDict["meetingChatEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the meetingChatEnabled
    * Represents whether the meeting chat is enabled or not.
    *
    * @param bool $val The value of the meetingChatEnabled
    *
    * @return MeetingPolicyUpdatedEventMessageDetail
    */
    public function setMeetingChatEnabled($val)
    {
        $this->_propDict["meetingChatEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the meetingChatId
    * Unique identifier of the meeting chat.
    *
    * @return string|null The meetingChatId
    */
    public function getMeetingChatId()
    {
        if (array_key_exists("meetingChatId", $this->_propDict)) {
            return $this->_propDict["meetingChatId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the meetingChatId
    * Unique identifier of the meeting chat.
    *
    * @param string $val The value of the meetingChatId
    *
    * @return MeetingPolicyUpdatedEventMessageDetail
    */
    public function setMeetingChatId($val)
    {
        $this->_propDict["meetingChatId"] = $val;
        return $this;
    }
}
