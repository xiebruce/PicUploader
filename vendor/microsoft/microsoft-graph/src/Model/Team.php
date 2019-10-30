<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Team File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Team class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Team extends Entity
{
    /**
    * Gets the webUrl
    * A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    * A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    *
    * @param string $val The webUrl
    *
    * @return Team
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the memberSettings
    * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    *
    * @return TeamMemberSettings The memberSettings
    */
    public function getMemberSettings()
    {
        if (array_key_exists("memberSettings", $this->_propDict)) {
            if (is_a($this->_propDict["memberSettings"], "Microsoft\Graph\Model\TeamMemberSettings")) {
                return $this->_propDict["memberSettings"];
            } else {
                $this->_propDict["memberSettings"] = new TeamMemberSettings($this->_propDict["memberSettings"]);
                return $this->_propDict["memberSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the memberSettings
    * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    *
    * @param TeamMemberSettings $val The memberSettings
    *
    * @return Team
    */
    public function setMemberSettings($val)
    {
        $this->_propDict["memberSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the guestSettings
    * Settings to configure whether guests can create, update, or delete channels in the team.
    *
    * @return TeamGuestSettings The guestSettings
    */
    public function getGuestSettings()
    {
        if (array_key_exists("guestSettings", $this->_propDict)) {
            if (is_a($this->_propDict["guestSettings"], "Microsoft\Graph\Model\TeamGuestSettings")) {
                return $this->_propDict["guestSettings"];
            } else {
                $this->_propDict["guestSettings"] = new TeamGuestSettings($this->_propDict["guestSettings"]);
                return $this->_propDict["guestSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the guestSettings
    * Settings to configure whether guests can create, update, or delete channels in the team.
    *
    * @param TeamGuestSettings $val The guestSettings
    *
    * @return Team
    */
    public function setGuestSettings($val)
    {
        $this->_propDict["guestSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the messagingSettings
    * Settings to configure messaging and mentions in the team.
    *
    * @return TeamMessagingSettings The messagingSettings
    */
    public function getMessagingSettings()
    {
        if (array_key_exists("messagingSettings", $this->_propDict)) {
            if (is_a($this->_propDict["messagingSettings"], "Microsoft\Graph\Model\TeamMessagingSettings")) {
                return $this->_propDict["messagingSettings"];
            } else {
                $this->_propDict["messagingSettings"] = new TeamMessagingSettings($this->_propDict["messagingSettings"]);
                return $this->_propDict["messagingSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the messagingSettings
    * Settings to configure messaging and mentions in the team.
    *
    * @param TeamMessagingSettings $val The messagingSettings
    *
    * @return Team
    */
    public function setMessagingSettings($val)
    {
        $this->_propDict["messagingSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the funSettings
    * Settings to configure use of Giphy, memes, and stickers in the team.
    *
    * @return TeamFunSettings The funSettings
    */
    public function getFunSettings()
    {
        if (array_key_exists("funSettings", $this->_propDict)) {
            if (is_a($this->_propDict["funSettings"], "Microsoft\Graph\Model\TeamFunSettings")) {
                return $this->_propDict["funSettings"];
            } else {
                $this->_propDict["funSettings"] = new TeamFunSettings($this->_propDict["funSettings"]);
                return $this->_propDict["funSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the funSettings
    * Settings to configure use of Giphy, memes, and stickers in the team.
    *
    * @param TeamFunSettings $val The funSettings
    *
    * @return Team
    */
    public function setFunSettings($val)
    {
        $this->_propDict["funSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the isArchived
    * Whether this team is in read-only mode.
    *
    * @return bool The isArchived
    */
    public function getIsArchived()
    {
        if (array_key_exists("isArchived", $this->_propDict)) {
            return $this->_propDict["isArchived"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isArchived
    * Whether this team is in read-only mode.
    *
    * @param bool $val The isArchived
    *
    * @return Team
    */
    public function setIsArchived($val)
    {
        $this->_propDict["isArchived"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the channels
    * The collection of channels &amp; messages associated with the team.
     *
     * @return array The channels
     */
    public function getChannels()
    {
        if (array_key_exists("channels", $this->_propDict)) {
           return $this->_propDict["channels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the channels
    * The collection of channels &amp; messages associated with the team.
    *
    * @param Channel $val The channels
    *
    * @return Team
    */
    public function setChannels($val)
    {
		$this->_propDict["channels"] = $val;
        return $this;
    }
    

     /** 
     * Gets the installedApps
    * The apps installed in this team.
     *
     * @return array The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists("installedApps", $this->_propDict)) {
           return $this->_propDict["installedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the installedApps
    * The apps installed in this team.
    *
    * @param TeamsAppInstallation $val The installedApps
    *
    * @return Team
    */
    public function setInstalledApps($val)
    {
		$this->_propDict["installedApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    *
    * @param TeamsAsyncOperation $val The operations
    *
    * @return Team
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    
}