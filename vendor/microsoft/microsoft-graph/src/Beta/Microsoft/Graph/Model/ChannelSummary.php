<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChannelSummary File
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
* ChannelSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChannelSummary extends Entity
{
    /**
    * Gets the guestsCount
    *
    * @return int|null The guestsCount
    */
    public function getGuestsCount()
    {
        if (array_key_exists("guestsCount", $this->_propDict)) {
            return $this->_propDict["guestsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the guestsCount
    *
    * @param int $val The value of the guestsCount
    *
    * @return ChannelSummary
    */
    public function setGuestsCount($val)
    {
        $this->_propDict["guestsCount"] = $val;
        return $this;
    }
    /**
    * Gets the hasMembersFromOtherTenants
    *
    * @return bool|null The hasMembersFromOtherTenants
    */
    public function getHasMembersFromOtherTenants()
    {
        if (array_key_exists("hasMembersFromOtherTenants", $this->_propDict)) {
            return $this->_propDict["hasMembersFromOtherTenants"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasMembersFromOtherTenants
    *
    * @param bool $val The value of the hasMembersFromOtherTenants
    *
    * @return ChannelSummary
    */
    public function setHasMembersFromOtherTenants($val)
    {
        $this->_propDict["hasMembersFromOtherTenants"] = $val;
        return $this;
    }
    /**
    * Gets the membersCount
    *
    * @return int|null The membersCount
    */
    public function getMembersCount()
    {
        if (array_key_exists("membersCount", $this->_propDict)) {
            return $this->_propDict["membersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the membersCount
    *
    * @param int $val The value of the membersCount
    *
    * @return ChannelSummary
    */
    public function setMembersCount($val)
    {
        $this->_propDict["membersCount"] = $val;
        return $this;
    }
    /**
    * Gets the ownersCount
    *
    * @return int|null The ownersCount
    */
    public function getOwnersCount()
    {
        if (array_key_exists("ownersCount", $this->_propDict)) {
            return $this->_propDict["ownersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownersCount
    *
    * @param int $val The value of the ownersCount
    *
    * @return ChannelSummary
    */
    public function setOwnersCount($val)
    {
        $this->_propDict["ownersCount"] = $val;
        return $this;
    }
}
