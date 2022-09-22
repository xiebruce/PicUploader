<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkConversationIdentity File
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
* TeamworkConversationIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkConversationIdentity extends Identity
{

    /**
    * Gets the conversationIdentityType
    * Type of conversation. Possible values are: team, channel, chat, and unknownFutureValue.
    *
    * @return TeamworkConversationIdentityType|null The conversationIdentityType
    */
    public function getConversationIdentityType()
    {
        if (array_key_exists("conversationIdentityType", $this->_propDict)) {
            if (is_a($this->_propDict["conversationIdentityType"], "\Microsoft\Graph\Model\TeamworkConversationIdentityType") || is_null($this->_propDict["conversationIdentityType"])) {
                return $this->_propDict["conversationIdentityType"];
            } else {
                $this->_propDict["conversationIdentityType"] = new TeamworkConversationIdentityType($this->_propDict["conversationIdentityType"]);
                return $this->_propDict["conversationIdentityType"];
            }
        }
        return null;
    }

    /**
    * Sets the conversationIdentityType
    * Type of conversation. Possible values are: team, channel, chat, and unknownFutureValue.
    *
    * @param TeamworkConversationIdentityType $val The value to assign to the conversationIdentityType
    *
    * @return TeamworkConversationIdentity The TeamworkConversationIdentity
    */
    public function setConversationIdentityType($val)
    {
        $this->_propDict["conversationIdentityType"] = $val;
         return $this;
    }
}
