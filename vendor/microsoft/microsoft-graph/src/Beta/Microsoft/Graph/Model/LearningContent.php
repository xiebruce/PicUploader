<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LearningContent File
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
* LearningContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LearningContent extends Entity
{
    /**
    * Gets the additionalTags
    * Keywords, topics, and other tags associated with the learning content. Optional.
    *
    * @return array|null The additionalTags
    */
    public function getAdditionalTags()
    {
        if (array_key_exists("additionalTags", $this->_propDict)) {
            return $this->_propDict["additionalTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalTags
    * Keywords, topics, and other tags associated with the learning content. Optional.
    *
    * @param string[] $val The additionalTags
    *
    * @return LearningContent
    */
    public function setAdditionalTags($val)
    {
        $this->_propDict["additionalTags"] = $val;
        return $this;
    }

    /**
    * Gets the contentWebUrl
    * The content web URL for the learning content. Required.
    *
    * @return string|null The contentWebUrl
    */
    public function getContentWebUrl()
    {
        if (array_key_exists("contentWebUrl", $this->_propDict)) {
            return $this->_propDict["contentWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentWebUrl
    * The content web URL for the learning content. Required.
    *
    * @param string $val The contentWebUrl
    *
    * @return LearningContent
    */
    public function setContentWebUrl($val)
    {
        $this->_propDict["contentWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the contributors
    * The authors, creators, or contributors of the learning content. Optional.
    *
    * @return array|null The contributors
    */
    public function getContributors()
    {
        if (array_key_exists("contributors", $this->_propDict)) {
            return $this->_propDict["contributors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contributors
    * The authors, creators, or contributors of the learning content. Optional.
    *
    * @param string[] $val The contributors
    *
    * @return LearningContent
    */
    public function setContributors($val)
    {
        $this->_propDict["contributors"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return LearningContent
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description or summary for the learning content. Optional.
    *
    * @return string|null The description
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
    * The description or summary for the learning content. Optional.
    *
    * @param string $val The description
    *
    * @return LearningContent
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the duration
    * The duration of the learning content in seconds. The value is represented in ISO 8601 format for durations. Optional.
    *
    * @return \DateInterval|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "\DateInterval") || is_null($this->_propDict["duration"])) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new \DateInterval($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }

    /**
    * Sets the duration
    * The duration of the learning content in seconds. The value is represented in ISO 8601 format for durations. Optional.
    *
    * @param \DateInterval $val The duration
    *
    * @return LearningContent
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    * Unique external content ID for the learning content. Required.
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    * Unique external content ID for the learning content. Required.
    *
    * @param string $val The externalId
    *
    * @return LearningContent
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the format
    * The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional.
    *
    * @return string|null The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            return $this->_propDict["format"];
        } else {
            return null;
        }
    }

    /**
    * Sets the format
    * The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional.
    *
    * @param string $val The format
    *
    * @return LearningContent
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }

    /**
    * Gets the isActive
    * Indicates whether the content is active or not. Inactive content doesn't show up in the UI. The default value is true. Optional.
    *
    * @return bool|null The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isActive
    * Indicates whether the content is active or not. Inactive content doesn't show up in the UI. The default value is true. Optional.
    *
    * @param bool $val The isActive
    *
    * @return LearningContent
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isPremium
    * Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional.
    *
    * @return bool|null The isPremium
    */
    public function getIsPremium()
    {
        if (array_key_exists("isPremium", $this->_propDict)) {
            return $this->_propDict["isPremium"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPremium
    * Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional.
    *
    * @param bool $val The isPremium
    *
    * @return LearningContent
    */
    public function setIsPremium($val)
    {
        $this->_propDict["isPremium"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSearchable
    * Indicates whether the learning content is searchable or not. The default value is true. Optional.
    *
    * @return bool|null The isSearchable
    */
    public function getIsSearchable()
    {
        if (array_key_exists("isSearchable", $this->_propDict)) {
            return $this->_propDict["isSearchable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSearchable
    * Indicates whether the learning content is searchable or not. The default value is true. Optional.
    *
    * @param bool $val The isSearchable
    *
    * @return LearningContent
    */
    public function setIsSearchable($val)
    {
        $this->_propDict["isSearchable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the languageTag
    * The language of the learning content, for example, en-us or fr-fr. Required.
    *
    * @return string|null The languageTag
    */
    public function getLanguageTag()
    {
        if (array_key_exists("languageTag", $this->_propDict)) {
            return $this->_propDict["languageTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageTag
    * The language of the learning content, for example, en-us or fr-fr. Required.
    *
    * @param string $val The languageTag
    *
    * @return LearningContent
    */
    public function setLanguageTag($val)
    {
        $this->_propDict["languageTag"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date and time when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return LearningContent
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the numberOfPages
    * The number of pages of the learning content, for example, 9. Optional.
    *
    * @return int|null The numberOfPages
    */
    public function getNumberOfPages()
    {
        if (array_key_exists("numberOfPages", $this->_propDict)) {
            return $this->_propDict["numberOfPages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfPages
    * The number of pages of the learning content, for example, 9. Optional.
    *
    * @param int $val The numberOfPages
    *
    * @return LearningContent
    */
    public function setNumberOfPages($val)
    {
        $this->_propDict["numberOfPages"] = intval($val);
        return $this;
    }

    /**
    * Gets the skillTags
    * The skills tags associated with the learning content. Optional.
    *
    * @return array|null The skillTags
    */
    public function getSkillTags()
    {
        if (array_key_exists("skillTags", $this->_propDict)) {
            return $this->_propDict["skillTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skillTags
    * The skills tags associated with the learning content. Optional.
    *
    * @param string[] $val The skillTags
    *
    * @return LearningContent
    */
    public function setSkillTags($val)
    {
        $this->_propDict["skillTags"] = $val;
        return $this;
    }

    /**
    * Gets the sourceName
    * The source name of the learning content, such as LinkedIn Learning or Coursera. Optional.
    *
    * @return string|null The sourceName
    */
    public function getSourceName()
    {
        if (array_key_exists("sourceName", $this->_propDict)) {
            return $this->_propDict["sourceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceName
    * The source name of the learning content, such as LinkedIn Learning or Coursera. Optional.
    *
    * @param string $val The sourceName
    *
    * @return LearningContent
    */
    public function setSourceName($val)
    {
        $this->_propDict["sourceName"] = $val;
        return $this;
    }

    /**
    * Gets the thumbnailWebUrl
    * The URL of learning content thumbnail image. Optional.
    *
    * @return string|null The thumbnailWebUrl
    */
    public function getThumbnailWebUrl()
    {
        if (array_key_exists("thumbnailWebUrl", $this->_propDict)) {
            return $this->_propDict["thumbnailWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the thumbnailWebUrl
    * The URL of learning content thumbnail image. Optional.
    *
    * @param string $val The thumbnailWebUrl
    *
    * @return LearningContent
    */
    public function setThumbnailWebUrl($val)
    {
        $this->_propDict["thumbnailWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the title
    * The title of the learning content. Required.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * The title of the learning content. Required.
    *
    * @param string $val The title
    *
    * @return LearningContent
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

}
