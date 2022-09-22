<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Chat File
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
* Chat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Chat extends Entity
{
    /**
    * Gets the chatType
    * Specifies the type of chat. Possible values are: group, oneOnOne, meeting, unknownFutureValue.
    *
    * @return ChatType|null The chatType
    */
    public function getChatType()
    {
        if (array_key_exists("chatType", $this->_propDict)) {
            if (is_a($this->_propDict["chatType"], "\Microsoft\Graph\Model\ChatType") || is_null($this->_propDict["chatType"])) {
                return $this->_propDict["chatType"];
            } else {
                $this->_propDict["chatType"] = new ChatType($this->_propDict["chatType"]);
                return $this->_propDict["chatType"];
            }
        }
        return null;
    }

    /**
    * Sets the chatType
    * Specifies the type of chat. Possible values are: group, oneOnOne, meeting, unknownFutureValue.
    *
    * @param ChatType $val The chatType
    *
    * @return Chat
    */
    public function setChatType($val)
    {
        $this->_propDict["chatType"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time at which the chat was created. Read-only.
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
    * Date and time at which the chat was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Chat
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * Date and time at which the chat was renamed or list of members were last changed. Read-only.
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    * Date and time at which the chat was renamed or list of members were last changed. Read-only.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return Chat
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the onlineMeetingInfo
    * Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
    *
    * @return TeamworkOnlineMeetingInfo|null The onlineMeetingInfo
    */
    public function getOnlineMeetingInfo()
    {
        if (array_key_exists("onlineMeetingInfo", $this->_propDict)) {
            if (is_a($this->_propDict["onlineMeetingInfo"], "\Microsoft\Graph\Model\TeamworkOnlineMeetingInfo") || is_null($this->_propDict["onlineMeetingInfo"])) {
                return $this->_propDict["onlineMeetingInfo"];
            } else {
                $this->_propDict["onlineMeetingInfo"] = new TeamworkOnlineMeetingInfo($this->_propDict["onlineMeetingInfo"]);
                return $this->_propDict["onlineMeetingInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the onlineMeetingInfo
    * Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
    *
    * @param TeamworkOnlineMeetingInfo $val The onlineMeetingInfo
    *
    * @return Chat
    */
    public function setOnlineMeetingInfo($val)
    {
        $this->_propDict["onlineMeetingInfo"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The identifier of the tenant in which the chat was created. Read-only.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The identifier of the tenant in which the chat was created. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return Chat
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the topic
    * (Optional) Subject or topic for the chat. Only available for group chats.
    *
    * @return string|null The topic
    */
    public function getTopic()
    {
        if (array_key_exists("topic", $this->_propDict)) {
            return $this->_propDict["topic"];
        } else {
            return null;
        }
    }

    /**
    * Sets the topic
    * (Optional) Subject or topic for the chat. Only available for group chats.
    *
    * @param string $val The topic
    *
    * @return Chat
    */
    public function setTopic($val)
    {
        $this->_propDict["topic"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
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
    * The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
    *
    * @param string $val The webUrl
    *
    * @return Chat
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }


     /**
     * Gets the installedApps
    * A collection of all the apps in the chat. Nullable.
     *
     * @return array|null The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists("installedApps", $this->_propDict)) {
           return $this->_propDict["installedApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the installedApps
    * A collection of all the apps in the chat. Nullable.
    *
    * @param TeamsAppInstallation[] $val The installedApps
    *
    * @return Chat
    */
    public function setInstalledApps($val)
    {
        $this->_propDict["installedApps"] = $val;
        return $this;
    }


     /**
     * Gets the members
    * A collection of all the members in the chat. Nullable.
     *
     * @return array|null The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }

    /**
    * Sets the members
    * A collection of all the members in the chat. Nullable.
    *
    * @param ConversationMember[] $val The members
    *
    * @return Chat
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }


     /**
     * Gets the messages
    * A collection of all the messages in the chat. Nullable.
     *
     * @return array|null The messages
     */
    public function getMessages()
    {
        if (array_key_exists("messages", $this->_propDict)) {
           return $this->_propDict["messages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messages
    * A collection of all the messages in the chat. Nullable.
    *
    * @param ChatMessage[] $val The messages
    *
    * @return Chat
    */
    public function setMessages($val)
    {
        $this->_propDict["messages"] = $val;
        return $this;
    }


     /**
     * Gets the pinnedMessages
     *
     * @return array|null The pinnedMessages
     */
    public function getPinnedMessages()
    {
        if (array_key_exists("pinnedMessages", $this->_propDict)) {
           return $this->_propDict["pinnedMessages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pinnedMessages
    *
    * @param PinnedChatMessageInfo[] $val The pinnedMessages
    *
    * @return Chat
    */
    public function setPinnedMessages($val)
    {
        $this->_propDict["pinnedMessages"] = $val;
        return $this;
    }


     /**
     * Gets the tabs
    * A collection of all the tabs in the chat. Nullable.
     *
     * @return array|null The tabs
     */
    public function getTabs()
    {
        if (array_key_exists("tabs", $this->_propDict)) {
           return $this->_propDict["tabs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tabs
    * A collection of all the tabs in the chat. Nullable.
    *
    * @param TeamsTab[] $val The tabs
    *
    * @return Chat
    */
    public function setTabs($val)
    {
        $this->_propDict["tabs"] = $val;
        return $this;
    }

}
