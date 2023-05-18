<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageHistoryItem File
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
* ChatMessageHistoryItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageHistoryItem extends Entity
{

    /**
    * Gets the actions
    *
    * @return ChatMessageActions|null The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            if (is_a($this->_propDict["actions"], "\Microsoft\Graph\Model\ChatMessageActions") || is_null($this->_propDict["actions"])) {
                return $this->_propDict["actions"];
            } else {
                $this->_propDict["actions"] = new ChatMessageActions($this->_propDict["actions"]);
                return $this->_propDict["actions"];
            }
        }
        return null;
    }

    /**
    * Sets the actions
    *
    * @param ChatMessageActions $val The value to assign to the actions
    *
    * @return ChatMessageHistoryItem The ChatMessageHistoryItem
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
         return $this;
    }

    /**
    * Gets the modifiedDateTime
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime") || is_null($this->_propDict["modifiedDateTime"])) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedDateTime
    *
    * @param \DateTime $val The value to assign to the modifiedDateTime
    *
    * @return ChatMessageHistoryItem The ChatMessageHistoryItem
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the reaction
    *
    * @return ChatMessageReaction|null The reaction
    */
    public function getReaction()
    {
        if (array_key_exists("reaction", $this->_propDict)) {
            if (is_a($this->_propDict["reaction"], "\Microsoft\Graph\Model\ChatMessageReaction") || is_null($this->_propDict["reaction"])) {
                return $this->_propDict["reaction"];
            } else {
                $this->_propDict["reaction"] = new ChatMessageReaction($this->_propDict["reaction"]);
                return $this->_propDict["reaction"];
            }
        }
        return null;
    }

    /**
    * Sets the reaction
    *
    * @param ChatMessageReaction $val The value to assign to the reaction
    *
    * @return ChatMessageHistoryItem The ChatMessageHistoryItem
    */
    public function setReaction($val)
    {
        $this->_propDict["reaction"] = $val;
         return $this;
    }
}
