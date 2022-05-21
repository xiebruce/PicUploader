<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Bookmark File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Search\Model;

/**
* Bookmark class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Bookmark extends SearchAnswer
{
    /**
    * Gets the availabilityEndDateTime
    * Timestamp of when the bookmark will stop to appear as a search result. Set as null for always available.
    *
    * @return \DateTime|null The availabilityEndDateTime
    */
    public function getAvailabilityEndDateTime()
    {
        if (array_key_exists("availabilityEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["availabilityEndDateTime"], "\DateTime") || is_null($this->_propDict["availabilityEndDateTime"])) {
                return $this->_propDict["availabilityEndDateTime"];
            } else {
                $this->_propDict["availabilityEndDateTime"] = new \DateTime($this->_propDict["availabilityEndDateTime"]);
                return $this->_propDict["availabilityEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the availabilityEndDateTime
    * Timestamp of when the bookmark will stop to appear as a search result. Set as null for always available.
    *
    * @param \DateTime $val The availabilityEndDateTime
    *
    * @return Bookmark
    */
    public function setAvailabilityEndDateTime($val)
    {
        $this->_propDict["availabilityEndDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the availabilityStartDateTime
    * Timestamp of when the bookmark will start to appear as a search result. Set as null for always available.
    *
    * @return \DateTime|null The availabilityStartDateTime
    */
    public function getAvailabilityStartDateTime()
    {
        if (array_key_exists("availabilityStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["availabilityStartDateTime"], "\DateTime") || is_null($this->_propDict["availabilityStartDateTime"])) {
                return $this->_propDict["availabilityStartDateTime"];
            } else {
                $this->_propDict["availabilityStartDateTime"] = new \DateTime($this->_propDict["availabilityStartDateTime"]);
                return $this->_propDict["availabilityStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the availabilityStartDateTime
    * Timestamp of when the bookmark will start to appear as a search result. Set as null for always available.
    *
    * @param \DateTime $val The availabilityStartDateTime
    *
    * @return Bookmark
    */
    public function setAvailabilityStartDateTime($val)
    {
        $this->_propDict["availabilityStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the categories
    * Categories commonly used to describe this bookmark. For example, IT and HR.
    *
    * @return string|null The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categories
    * Categories commonly used to describe this bookmark. For example, IT and HR.
    *
    * @param string $val The categories
    *
    * @return Bookmark
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }

    /**
    * Gets the groupIds
    * List of security groups able to view this bookmark.
    *
    * @return string|null The groupIds
    */
    public function getGroupIds()
    {
        if (array_key_exists("groupIds", $this->_propDict)) {
            return $this->_propDict["groupIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupIds
    * List of security groups able to view this bookmark.
    *
    * @param string $val The groupIds
    *
    * @return Bookmark
    */
    public function setGroupIds($val)
    {
        $this->_propDict["groupIds"] = $val;
        return $this;
    }

    /**
    * Gets the isSuggested
    * True if this bookmark was suggested to the admin by a user or was mined and suggested by Microsoft. Read-only.
    *
    * @return bool|null The isSuggested
    */
    public function getIsSuggested()
    {
        if (array_key_exists("isSuggested", $this->_propDict)) {
            return $this->_propDict["isSuggested"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSuggested
    * True if this bookmark was suggested to the admin by a user or was mined and suggested by Microsoft. Read-only.
    *
    * @param bool $val The isSuggested
    *
    * @return Bookmark
    */
    public function setIsSuggested($val)
    {
        $this->_propDict["isSuggested"] = boolval($val);
        return $this;
    }

    /**
    * Gets the keywords
    * Keywords that trigger this bookmark to appear in search results.
    *
    * @return AnswerKeyword|null The keywords
    */
    public function getKeywords()
    {
        if (array_key_exists("keywords", $this->_propDict)) {
            if (is_a($this->_propDict["keywords"], "\Beta\Microsoft\Graph\Search\Model\AnswerKeyword") || is_null($this->_propDict["keywords"])) {
                return $this->_propDict["keywords"];
            } else {
                $this->_propDict["keywords"] = new AnswerKeyword($this->_propDict["keywords"]);
                return $this->_propDict["keywords"];
            }
        }
        return null;
    }

    /**
    * Sets the keywords
    * Keywords that trigger this bookmark to appear in search results.
    *
    * @param AnswerKeyword $val The keywords
    *
    * @return Bookmark
    */
    public function setKeywords($val)
    {
        $this->_propDict["keywords"] = $val;
        return $this;
    }

    /**
    * Gets the languageTags
    * A list of language names that are geographically specific and that this bookmark can be viewed in. Each language tag value follows the pattern {language}-{REGION}. As an example, en-US is English as used in the United States. See supported language tags for the list of possible values.
    *
    * @return string|null The languageTags
    */
    public function getLanguageTags()
    {
        if (array_key_exists("languageTags", $this->_propDict)) {
            return $this->_propDict["languageTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageTags
    * A list of language names that are geographically specific and that this bookmark can be viewed in. Each language tag value follows the pattern {language}-{REGION}. As an example, en-US is English as used in the United States. See supported language tags for the list of possible values.
    *
    * @param string $val The languageTags
    *
    * @return Bookmark
    */
    public function setLanguageTags($val)
    {
        $this->_propDict["languageTags"] = $val;
        return $this;
    }


     /**
     * Gets the platforms
    * List of devices and operating systems able to view this bookmark. Possible values are: unknown, android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, androidASOP.
     *
     * @return array|null The platforms
     */
    public function getPlatforms()
    {
        if (array_key_exists("platforms", $this->_propDict)) {
           return $this->_propDict["platforms"];
        } else {
            return null;
        }
    }

    /**
    * Sets the platforms
    * List of devices and operating systems able to view this bookmark. Possible values are: unknown, android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, androidASOP.
    *
    * @param \Beta\Microsoft\Graph\Model\DevicePlatformType[] $val The platforms
    *
    * @return Bookmark
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
        return $this;
    }

    /**
    * Gets the powerAppIds
    * List of Power Apps associated with this bookmark. If users add existing Power Apps to a bookmark, they can complete tasks, such as to enter vacation time or to report expenses on the search results page.
    *
    * @return string|null The powerAppIds
    */
    public function getPowerAppIds()
    {
        if (array_key_exists("powerAppIds", $this->_propDict)) {
            return $this->_propDict["powerAppIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the powerAppIds
    * List of Power Apps associated with this bookmark. If users add existing Power Apps to a bookmark, they can complete tasks, such as to enter vacation time or to report expenses on the search results page.
    *
    * @param string $val The powerAppIds
    *
    * @return Bookmark
    */
    public function setPowerAppIds($val)
    {
        $this->_propDict["powerAppIds"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * State of the bookmark. Possible values are: published, draft, excluded, or unknownFutureValue.
    *
    * @return AnswerState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Search\Model\AnswerState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AnswerState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * State of the bookmark. Possible values are: published, draft, excluded, or unknownFutureValue.
    *
    * @param AnswerState $val The state
    *
    * @return Bookmark
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }


     /**
     * Gets the targetedVariations
    * Variations of a bookmark for different countries or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings will apply to all variations.
     *
     * @return array|null The targetedVariations
     */
    public function getTargetedVariations()
    {
        if (array_key_exists("targetedVariations", $this->_propDict)) {
           return $this->_propDict["targetedVariations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetedVariations
    * Variations of a bookmark for different countries or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings will apply to all variations.
    *
    * @param AnswerVariant[] $val The targetedVariations
    *
    * @return Bookmark
    */
    public function setTargetedVariations($val)
    {
        $this->_propDict["targetedVariations"] = $val;
        return $this;
    }

}
