<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AnonymousGuestConversationMember File
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
* AnonymousGuestConversationMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AnonymousGuestConversationMember extends ConversationMember
{
    /**
    * Gets the anonymousGuestId
    * Unique ID that represents the user. Note: This ID can change if the user leaves and rejoins the meeting, or joins from a different device.
    *
    * @return string|null The anonymousGuestId
    */
    public function getAnonymousGuestId()
    {
        if (array_key_exists("anonymousGuestId", $this->_propDict)) {
            return $this->_propDict["anonymousGuestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anonymousGuestId
    * Unique ID that represents the user. Note: This ID can change if the user leaves and rejoins the meeting, or joins from a different device.
    *
    * @param string $val The anonymousGuestId
    *
    * @return AnonymousGuestConversationMember
    */
    public function setAnonymousGuestId($val)
    {
        $this->_propDict["anonymousGuestId"] = $val;
        return $this;
    }

}
