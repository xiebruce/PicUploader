<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamMembersNotificationRecipient File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TeamMembersNotificationRecipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamMembersNotificationRecipient extends TeamworkNotificationRecipient
{
    /**
    * Gets the teamId
    * The unique identifier for the team whose members should receive the notification.
    *
    * @return string|null The teamId
    */
    public function getTeamId()
    {
        if (array_key_exists("teamId", $this->_propDict)) {
            return $this->_propDict["teamId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamId
    * The unique identifier for the team whose members should receive the notification.
    *
    * @param string $val The value of the teamId
    *
    * @return TeamMembersNotificationRecipient
    */
    public function setTeamId($val)
    {
        $this->_propDict["teamId"] = $val;
        return $this;
    }
}
