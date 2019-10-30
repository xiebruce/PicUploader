<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Channel File
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
* Channel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Channel extends Entity
{
    /**
    * Gets the displayName
    * Channel name as it will appear to the user in Microsoft Teams.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Channel name as it will appear to the user in Microsoft Teams.
    *
    * @param string $val The displayName
    *
    * @return Channel
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Optional textual description for the channel.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Optional textual description for the channel.
    *
    * @param string $val The description
    *
    * @return Channel
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the email
    * The email address for sending messages to the channel. Read-only.
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    * The email address for sending messages to the channel. Read-only.
    *
    * @param string $val The email
    *
    * @return Channel
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    * A hyperlink that will navigate to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
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
    * A hyperlink that will navigate to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
    *
    * @param string $val The webUrl
    *
    * @return Channel
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tabs
    * A collection of all the tabs in the channel. A navigation property.
     *
     * @return array The tabs
     */
    public function getTabs()
    {
        if (array_key_exists("tabs", $this->_propDict)) {
           return $this->_propDict["tabs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tabs
    * A collection of all the tabs in the channel. A navigation property.
    *
    * @param TeamsTab $val The tabs
    *
    * @return Channel
    */
    public function setTabs($val)
    {
		$this->_propDict["tabs"] = $val;
        return $this;
    }
    
}