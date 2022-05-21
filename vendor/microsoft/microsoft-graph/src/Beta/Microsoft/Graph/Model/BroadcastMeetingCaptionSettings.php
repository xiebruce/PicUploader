<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BroadcastMeetingCaptionSettings File
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
* BroadcastMeetingCaptionSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BroadcastMeetingCaptionSettings extends Entity
{
    /**
    * Gets the isCaptionEnabled
    * Indicates whether caption is enabled for this Teams live event.
    *
    * @return bool|null The isCaptionEnabled
    */
    public function getIsCaptionEnabled()
    {
        if (array_key_exists("isCaptionEnabled", $this->_propDict)) {
            return $this->_propDict["isCaptionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCaptionEnabled
    * Indicates whether caption is enabled for this Teams live event.
    *
    * @param bool $val The value of the isCaptionEnabled
    *
    * @return BroadcastMeetingCaptionSettings
    */
    public function setIsCaptionEnabled($val)
    {
        $this->_propDict["isCaptionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the spokenLanguage
    * The spoken language.
    *
    * @return string|null The spokenLanguage
    */
    public function getSpokenLanguage()
    {
        if (array_key_exists("spokenLanguage", $this->_propDict)) {
            return $this->_propDict["spokenLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the spokenLanguage
    * The spoken language.
    *
    * @param string $val The value of the spokenLanguage
    *
    * @return BroadcastMeetingCaptionSettings
    */
    public function setSpokenLanguage($val)
    {
        $this->_propDict["spokenLanguage"] = $val;
        return $this;
    }
    /**
    * Gets the translationLanguages
    * The translation languages (choose up to 6).
    *
    * @return string|null The translationLanguages
    */
    public function getTranslationLanguages()
    {
        if (array_key_exists("translationLanguages", $this->_propDict)) {
            return $this->_propDict["translationLanguages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the translationLanguages
    * The translation languages (choose up to 6).
    *
    * @param string $val The value of the translationLanguages
    *
    * @return BroadcastMeetingCaptionSettings
    */
    public function setTranslationLanguages($val)
    {
        $this->_propDict["translationLanguages"] = $val;
        return $this;
    }
}
