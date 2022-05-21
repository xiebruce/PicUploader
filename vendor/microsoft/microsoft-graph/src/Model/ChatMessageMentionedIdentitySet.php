<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageMentionedIdentitySet File
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
* ChatMessageMentionedIdentitySet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageMentionedIdentitySet extends IdentitySet
{

    /**
    * Gets the conversation
    * If present, represents a conversation (for example, team or channel) @mentioned in a message.
    *
    * @return TeamworkConversationIdentity|null The conversation
    */
    public function getConversation()
    {
        if (array_key_exists("conversation", $this->_propDict)) {
            if (is_a($this->_propDict["conversation"], "\Microsoft\Graph\Model\TeamworkConversationIdentity") || is_null($this->_propDict["conversation"])) {
                return $this->_propDict["conversation"];
            } else {
                $this->_propDict["conversation"] = new TeamworkConversationIdentity($this->_propDict["conversation"]);
                return $this->_propDict["conversation"];
            }
        }
        return null;
    }

    /**
    * Sets the conversation
    * If present, represents a conversation (for example, team or channel) @mentioned in a message.
    *
    * @param TeamworkConversationIdentity $val The value to assign to the conversation
    *
    * @return ChatMessageMentionedIdentitySet The ChatMessageMentionedIdentitySet
    */
    public function setConversation($val)
    {
        $this->_propDict["conversation"] = $val;
         return $this;
    }
}
