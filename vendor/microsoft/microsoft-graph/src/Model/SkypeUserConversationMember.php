<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkypeUserConversationMember File
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
* SkypeUserConversationMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkypeUserConversationMember extends ConversationMember
{
    /**
    * Gets the skypeId
    * Skype ID of the user.
    *
    * @return string|null The skypeId
    */
    public function getSkypeId()
    {
        if (array_key_exists("skypeId", $this->_propDict)) {
            return $this->_propDict["skypeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skypeId
    * Skype ID of the user.
    *
    * @param string $val The skypeId
    *
    * @return SkypeUserConversationMember
    */
    public function setSkypeId($val)
    {
        $this->_propDict["skypeId"] = $val;
        return $this;
    }

}
