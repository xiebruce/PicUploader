<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedWithChannelTeamInfo File
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
* SharedWithChannelTeamInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedWithChannelTeamInfo extends TeamInfo
{
    /**
    * Gets the isHostTeam
    * Indicates whether the team is the host of the channel.
    *
    * @return bool|null The isHostTeam
    */
    public function getIsHostTeam()
    {
        if (array_key_exists("isHostTeam", $this->_propDict)) {
            return $this->_propDict["isHostTeam"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHostTeam
    * Indicates whether the team is the host of the channel.
    *
    * @param bool $val The isHostTeam
    *
    * @return SharedWithChannelTeamInfo
    */
    public function setIsHostTeam($val)
    {
        $this->_propDict["isHostTeam"] = boolval($val);
        return $this;
    }


     /**
     * Gets the allowedMembers
    * A collection of team members who have access to the shared channel.
     *
     * @return array|null The allowedMembers
     */
    public function getAllowedMembers()
    {
        if (array_key_exists("allowedMembers", $this->_propDict)) {
           return $this->_propDict["allowedMembers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedMembers
    * A collection of team members who have access to the shared channel.
    *
    * @param ConversationMember[] $val The allowedMembers
    *
    * @return SharedWithChannelTeamInfo
    */
    public function setAllowedMembers($val)
    {
        $this->_propDict["allowedMembers"] = $val;
        return $this;
    }

}
