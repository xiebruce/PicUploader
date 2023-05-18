<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMembersNotificationRecipient File
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
* ChatMembersNotificationRecipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMembersNotificationRecipient extends TeamworkNotificationRecipient
{
    /**
    * Gets the chatId
    * The unique identifier for the chat whose members should receive the notifications.
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
    * The unique identifier for the chat whose members should receive the notifications.
    *
    * @param string $val The value of the chatId
    *
    * @return ChatMembersNotificationRecipient
    */
    public function setChatId($val)
    {
        $this->_propDict["chatId"] = $val;
        return $this;
    }
}
