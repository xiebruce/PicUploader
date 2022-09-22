<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PinnedChatMessageInfo File
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
* PinnedChatMessageInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PinnedChatMessageInfo extends Entity
{
    /**
    * Gets the message
    *
    * @return ChatMessage|null The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            if (is_a($this->_propDict["message"], "\Microsoft\Graph\Model\ChatMessage") || is_null($this->_propDict["message"])) {
                return $this->_propDict["message"];
            } else {
                $this->_propDict["message"] = new ChatMessage($this->_propDict["message"]);
                return $this->_propDict["message"];
            }
        }
        return null;
    }

    /**
    * Sets the message
    *
    * @param ChatMessage $val The message
    *
    * @return PinnedChatMessageInfo
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }

}
