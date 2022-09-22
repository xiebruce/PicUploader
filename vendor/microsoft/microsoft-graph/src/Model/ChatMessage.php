<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessage File
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
* ChatMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessage extends Entity
{

     /**
     * Gets the attachments
    * References to attached objects like files, tabs, meetings etc.
     *
     * @return array|null The attachments
     */
    public function getAttachments()
    {
        if (array_key_exists("attachments", $this->_propDict)) {
           return $this->_propDict["attachments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attachments
    * References to attached objects like files, tabs, meetings etc.
    *
    * @param ChatMessageAttachment[] $val The attachments
    *
    * @return ChatMessage
    */
    public function setAttachments($val)
    {
        $this->_propDict["attachments"] = $val;
        return $this;
    }

    /**
    * Gets the body
    * Plaintext/HTML representation of the content of the chat message. Representation is specified by the contentType inside the body. The content is always in HTML if the chat message contains a chatMessageMention.
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
    * Plaintext/HTML representation of the content of the chat message. Representation is specified by the contentType inside the body. The content is always in HTML if the chat message contains a chatMessageMention.
    *
    * @param ItemBody $val The body
    *
    * @return ChatMessage
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }

    /**
    * Gets the channelIdentity
    * If the message was sent in a channel, represents identity of the channel.
    *
    * @return ChannelIdentity|null The channelIdentity
    */
    public function getChannelIdentity()
    {
        if (array_key_exists("channelIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["channelIdentity"], "\Microsoft\Graph\Model\ChannelIdentity") || is_null($this->_propDict["channelIdentity"])) {
                return $this->_propDict["channelIdentity"];
            } else {
                $this->_propDict["channelIdentity"] = new ChannelIdentity($this->_propDict["channelIdentity"]);
                return $this->_propDict["channelIdentity"];
            }
        }
        return null;
    }

    /**
    * Sets the channelIdentity
    * If the message was sent in a channel, represents identity of the channel.
    *
    * @param ChannelIdentity $val The channelIdentity
    *
    * @return ChatMessage
    */
    public function setChannelIdentity($val)
    {
        $this->_propDict["channelIdentity"] = $val;
        return $this;
    }

    /**
    * Gets the chatId
    * If the message was sent in a chat, represents the identity of the chat.
    *
    * @return string|null The chatId
    */
    public function getChatId()
    {
        if (array_key_exists("chatId", $this->_propDict)) {
            return $this->_propDict["chatId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the chatId
    * If the message was sent in a chat, represents the identity of the chat.
    *
    * @param string $val The chatId
    *
    * @return ChatMessage
    */
    public function setChatId($val)
    {
        $this->_propDict["chatId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Timestamp of when the chat message was created.
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
    * Timestamp of when the chat message was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ChatMessage
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deletedDateTime
    * Read only. Timestamp at which the chat message was deleted, or null if not deleted.
    *
    * @return \DateTime|null The deletedDateTime
    */
    public function getDeletedDateTime()
    {
        if (array_key_exists("deletedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDateTime"], "\DateTime") || is_null($this->_propDict["deletedDateTime"])) {
                return $this->_propDict["deletedDateTime"];
            } else {
                $this->_propDict["deletedDateTime"] = new \DateTime($this->_propDict["deletedDateTime"]);
                return $this->_propDict["deletedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deletedDateTime
    * Read only. Timestamp at which the chat message was deleted, or null if not deleted.
    *
    * @param \DateTime $val The deletedDateTime
    *
    * @return ChatMessage
    */
    public function setDeletedDateTime($val)
    {
        $this->_propDict["deletedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the etag
    * Read-only. Version number of the chat message.
    *
    * @return string|null The etag
    */
    public function getEtag()
    {
        if (array_key_exists("etag", $this->_propDict)) {
            return $this->_propDict["etag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the etag
    * Read-only. Version number of the chat message.
    *
    * @param string $val The etag
    *
    * @return ChatMessage
    */
    public function setEtag($val)
    {
        $this->_propDict["etag"] = $val;
        return $this;
    }

    /**
    * Gets the eventDetail
    * Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
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
    * Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
    *
    * @param EventMessageDetail $val The eventDetail
    *
    * @return ChatMessage
    */
    public function setEventDetail($val)
    {
        $this->_propDict["eventDetail"] = $val;
        return $this;
    }

    /**
    * Gets the from
    * Details of the sender of the chat message. Can only be set during migration.
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
    * Details of the sender of the chat message. Can only be set during migration.
    *
    * @param ChatMessageFromIdentitySet $val The from
    *
    * @return ChatMessage
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }

    /**
    * Gets the importance
    * The importance of the chat message. The possible values are: normal, high, urgent.
    *
    * @return ChatMessageImportance|null The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "\Microsoft\Graph\Model\ChatMessageImportance") || is_null($this->_propDict["importance"])) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new ChatMessageImportance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }

    /**
    * Sets the importance
    * The importance of the chat message. The possible values are: normal, high, urgent.
    *
    * @param ChatMessageImportance $val The importance
    *
    * @return ChatMessage
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }

    /**
    * Gets the lastEditedDateTime
    * Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
    *
    * @return \DateTime|null The lastEditedDateTime
    */
    public function getLastEditedDateTime()
    {
        if (array_key_exists("lastEditedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastEditedDateTime"], "\DateTime") || is_null($this->_propDict["lastEditedDateTime"])) {
                return $this->_propDict["lastEditedDateTime"];
            } else {
                $this->_propDict["lastEditedDateTime"] = new \DateTime($this->_propDict["lastEditedDateTime"]);
                return $this->_propDict["lastEditedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastEditedDateTime
    * Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
    *
    * @param \DateTime $val The lastEditedDateTime
    *
    * @return ChatMessage
    */
    public function setLastEditedDateTime($val)
    {
        $this->_propDict["lastEditedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ChatMessage
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the locale
    * Locale of the chat message set by the client. Always set to en-us.
    *
    * @return string|null The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locale
    * Locale of the chat message set by the client. Always set to en-us.
    *
    * @param string $val The locale
    *
    * @return ChatMessage
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }


     /**
     * Gets the mentions
    * List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
     *
     * @return array|null The mentions
     */
    public function getMentions()
    {
        if (array_key_exists("mentions", $this->_propDict)) {
           return $this->_propDict["mentions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mentions
    * List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
    *
    * @param ChatMessageMention[] $val The mentions
    *
    * @return ChatMessage
    */
    public function setMentions($val)
    {
        $this->_propDict["mentions"] = $val;
        return $this;
    }

    /**
    * Gets the messageType
    * The type of chat message. The possible values are: message, chatEvent, typing, unknownFutureValue, systemEventMessage. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: systemEventMessage.
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
    * The type of chat message. The possible values are: message, chatEvent, typing, unknownFutureValue, systemEventMessage. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: systemEventMessage.
    *
    * @param ChatMessageType $val The messageType
    *
    * @return ChatMessage
    */
    public function setMessageType($val)
    {
        $this->_propDict["messageType"] = $val;
        return $this;
    }

    /**
    * Gets the policyViolation
    * Defines the properties of a policy violation set by a data loss prevention (DLP) application.
    *
    * @return ChatMessagePolicyViolation|null The policyViolation
    */
    public function getPolicyViolation()
    {
        if (array_key_exists("policyViolation", $this->_propDict)) {
            if (is_a($this->_propDict["policyViolation"], "\Microsoft\Graph\Model\ChatMessagePolicyViolation") || is_null($this->_propDict["policyViolation"])) {
                return $this->_propDict["policyViolation"];
            } else {
                $this->_propDict["policyViolation"] = new ChatMessagePolicyViolation($this->_propDict["policyViolation"]);
                return $this->_propDict["policyViolation"];
            }
        }
        return null;
    }

    /**
    * Sets the policyViolation
    * Defines the properties of a policy violation set by a data loss prevention (DLP) application.
    *
    * @param ChatMessagePolicyViolation $val The policyViolation
    *
    * @return ChatMessage
    */
    public function setPolicyViolation($val)
    {
        $this->_propDict["policyViolation"] = $val;
        return $this;
    }


     /**
     * Gets the reactions
    * Reactions for this chat message (for example, Like).
     *
     * @return array|null The reactions
     */
    public function getReactions()
    {
        if (array_key_exists("reactions", $this->_propDict)) {
           return $this->_propDict["reactions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reactions
    * Reactions for this chat message (for example, Like).
    *
    * @param ChatMessageReaction[] $val The reactions
    *
    * @return ChatMessage
    */
    public function setReactions($val)
    {
        $this->_propDict["reactions"] = $val;
        return $this;
    }

    /**
    * Gets the replyToId
    * Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
    *
    * @return string|null The replyToId
    */
    public function getReplyToId()
    {
        if (array_key_exists("replyToId", $this->_propDict)) {
            return $this->_propDict["replyToId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replyToId
    * Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
    *
    * @param string $val The replyToId
    *
    * @return ChatMessage
    */
    public function setReplyToId($val)
    {
        $this->_propDict["replyToId"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    * The subject of the chat message, in plaintext.
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    * The subject of the chat message, in plaintext.
    *
    * @param string $val The subject
    *
    * @return ChatMessage
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }

    /**
    * Gets the summary
    * Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
    *
    * @return string|null The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            return $this->_propDict["summary"];
        } else {
            return null;
        }
    }

    /**
    * Sets the summary
    * Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
    *
    * @param string $val The summary
    *
    * @return ChatMessage
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * Read-only. Link to the message in Microsoft Teams.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * Read-only. Link to the message in Microsoft Teams.
    *
    * @param string $val The webUrl
    *
    * @return ChatMessage
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }


     /**
     * Gets the hostedContents
    * Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     *
     * @return array|null The hostedContents
     */
    public function getHostedContents()
    {
        if (array_key_exists("hostedContents", $this->_propDict)) {
           return $this->_propDict["hostedContents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostedContents
    * Content in a message hosted by Microsoft Teams - for example, images or code snippets.
    *
    * @param ChatMessageHostedContent[] $val The hostedContents
    *
    * @return ChatMessage
    */
    public function setHostedContents($val)
    {
        $this->_propDict["hostedContents"] = $val;
        return $this;
    }


     /**
     * Gets the replies
    * Replies for a specified message. Supports $expand for channel messages.
     *
     * @return array|null The replies
     */
    public function getReplies()
    {
        if (array_key_exists("replies", $this->_propDict)) {
           return $this->_propDict["replies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replies
    * Replies for a specified message. Supports $expand for channel messages.
    *
    * @param ChatMessage[] $val The replies
    *
    * @return ChatMessage
    */
    public function setReplies($val)
    {
        $this->_propDict["replies"] = $val;
        return $this;
    }

}
