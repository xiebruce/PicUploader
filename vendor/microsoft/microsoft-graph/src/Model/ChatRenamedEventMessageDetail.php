<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatRenamedEventMessageDetail File
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
* ChatRenamedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatRenamedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.chatRenamedEventMessageDetail");
    }

    /**
    * Gets the chatDisplayName
    * The updated name of the chat.
    *
    * @return string|null The chatDisplayName
    */
    public function getChatDisplayName()
    {
        if (array_key_exists("chatDisplayName", $this->_propDict)) {
            return $this->_propDict["chatDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the chatDisplayName
    * The updated name of the chat.
    *
    * @param string $val The value of the chatDisplayName
    *
    * @return ChatRenamedEventMessageDetail
    */
    public function setChatDisplayName($val)
    {
        $this->_propDict["chatDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the chatId
    * Unique identifier of the chat.
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
    * Unique identifier of the chat.
    *
    * @param string $val The value of the chatId
    *
    * @return ChatRenamedEventMessageDetail
    */
    public function setChatId($val)
    {
        $this->_propDict["chatId"] = $val;
        return $this;
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
            if (is_a($this->_propDict["initiator"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["initiator"])) {
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
    * @return ChatRenamedEventMessageDetail The ChatRenamedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
}
