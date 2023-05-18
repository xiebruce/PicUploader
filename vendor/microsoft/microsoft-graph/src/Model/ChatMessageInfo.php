<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageInfo File
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
* ChatMessageInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageInfo extends Entity
{
    /**
    * Gets the body
    * Body of the chatMessage. This will still contain markers for @mentions and attachments even though the object does not return @mentions and attachments.
    *
    * @return ItemBody|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["body"])) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new ItemBody($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }

    /**
    * Sets the body
    * Body of the chatMessage. This will still contain markers for @mentions and attachments even though the object does not return @mentions and attachments.
    *
    * @param ItemBody $val The body
    *
    * @return ChatMessageInfo
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date time object representing the time at which message was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date time object representing the time at which message was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ChatMessageInfo
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the eventDetail
    * Read-only.  If present, represents details of an event that happened in a chat, a channel, or a team, for example, members were added, and so on. For event messages, the messageType property will be set to systemEventMessage.
    *
    * @return EventMessageDetail|null The eventDetail
    */
    public function getEventDetail()
    {
        if (array_key_exists("eventDetail", $this->_propDict)) {
            if (is_a($this->_propDict["eventDetail"], "\Microsoft\Graph\Model\EventMessageDetail") || is_null($this->_propDict["eventDetail"])) {
                return $this->_propDict["eventDetail"];
            } else {
                $this->_propDict["eventDetail"] = new EventMessageDetail($this->_propDict["eventDetail"]);
                return $this->_propDict["eventDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the eventDetail
    * Read-only.  If present, represents details of an event that happened in a chat, a channel, or a team, for example, members were added, and so on. For event messages, the messageType property will be set to systemEventMessage.
    *
    * @param EventMessageDetail $val The eventDetail
    *
    * @return ChatMessageInfo
    */
    public function setEventDetail($val)
    {
        $this->_propDict["eventDetail"] = $val;
        return $this;
    }

    /**
    * Gets the from
    * Information about the sender of the message.
    *
    * @return ChatMessageFromIdentitySet|null The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            if (is_a($this->_propDict["from"], "\Microsoft\Graph\Model\ChatMessageFromIdentitySet") || is_null($this->_propDict["from"])) {
                return $this->_propDict["from"];
            } else {
                $this->_propDict["from"] = new ChatMessageFromIdentitySet($this->_propDict["from"]);
                return $this->_propDict["from"];
            }
        }
        return null;
    }

    /**
    * Sets the from
    * Information about the sender of the message.
    *
    * @param ChatMessageFromIdentitySet $val The from
    *
    * @return ChatMessageInfo
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }

    /**
    * Gets the isDeleted
    * If set to true, the original message has been deleted.
    *
    * @return bool|null The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDeleted
    * If set to true, the original message has been deleted.
    *
    * @param bool $val The isDeleted
    *
    * @return ChatMessageInfo
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }

    /**
    * Gets the messageType
    * The type of chat message. The possible values are: message, unknownFutureValue, systemEventMessage.
    *
    * @return ChatMessageType|null The messageType
    */
    public function getMessageType()
    {
        if (array_key_exists("messageType", $this->_propDict)) {
            if (is_a($this->_propDict["messageType"], "\Microsoft\Graph\Model\ChatMessageType") || is_null($this->_propDict["messageType"])) {
                return $this->_propDict["messageType"];
            } else {
                $this->_propDict["messageType"] = new ChatMessageType($this->_propDict["messageType"]);
                return $this->_propDict["messageType"];
            }
        }
        return null;
    }

    /**
    * Sets the messageType
    * The type of chat message. The possible values are: message, unknownFutureValue, systemEventMessage.
    *
    * @param ChatMessageType $val The messageType
    *
    * @return ChatMessageInfo
    */
    public function setMessageType($val)
    {
        $this->_propDict["messageType"] = $val;
        return $this;
    }

}
