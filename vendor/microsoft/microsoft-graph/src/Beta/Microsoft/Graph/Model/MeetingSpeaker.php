<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingSpeaker File
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
* MeetingSpeaker class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingSpeaker extends Entity
{
    /**
    * Gets the bio
    * Bio of the speaker.
    *
    * @return string|null The bio
    */
    public function getBio()
    {
        if (array_key_exists("bio", $this->_propDict)) {
            return $this->_propDict["bio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bio
    * Bio of the speaker.
    *
    * @param string $val The value of the bio
    *
    * @return MeetingSpeaker
    */
    public function setBio($val)
    {
        $this->_propDict["bio"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Display name of the speaker.
    *
    * @return string|null The displayName
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
    * Display name of the speaker.
    *
    * @param string $val The value of the displayName
    *
    * @return MeetingSpeaker
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
