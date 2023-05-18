<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Article File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* Article class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Article extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the body
    * Formatted article contents.
    *
    * @return FormattedContent|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FormattedContent") || is_null($this->_propDict["body"])) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new FormattedContent($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }

    /**
    * Sets the body
    * Formatted article contents.
    *
    * @param FormattedContent $val The body
    *
    * @return Article
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when this article was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when this article was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Article
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the imageUrl
    * URL of the header image for this article, used for display purposes.
    *
    * @return string|null The imageUrl
    */
    public function getImageUrl()
    {
        if (array_key_exists("imageUrl", $this->_propDict)) {
            return $this->_propDict["imageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the imageUrl
    * URL of the header image for this article, used for display purposes.
    *
    * @param string $val The imageUrl
    *
    * @return Article
    */
    public function setImageUrl($val)
    {
        $this->_propDict["imageUrl"] = $val;
        return $this;
    }

    /**
    * Gets the isFeatured
    * Indicates whether this article is currently featured by Microsoft.
    *
    * @return bool|null The isFeatured
    */
    public function getIsFeatured()
    {
        if (array_key_exists("isFeatured", $this->_propDict)) {
            return $this->_propDict["isFeatured"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFeatured
    * Indicates whether this article is currently featured by Microsoft.
    *
    * @param bool $val The isFeatured
    *
    * @return Article
    */
    public function setIsFeatured($val)
    {
        $this->_propDict["isFeatured"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * The most recent date and time when this article was updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    * The most recent date and time when this article was updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return Article
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the summary
    * A quick summary of this article.
    *
    * @return FormattedContent|null The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            if (is_a($this->_propDict["summary"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FormattedContent") || is_null($this->_propDict["summary"])) {
                return $this->_propDict["summary"];
            } else {
                $this->_propDict["summary"] = new FormattedContent($this->_propDict["summary"]);
                return $this->_propDict["summary"];
            }
        }
        return null;
    }

    /**
    * Sets the summary
    * A quick summary of this article.
    *
    * @param FormattedContent $val The summary
    *
    * @return Article
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }

    /**
    * Gets the tags
    * Tags for this article, communicating keywords, or key concepts.
    *
    * @return array|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    * Tags for this article, communicating keywords, or key concepts.
    *
    * @param string[] $val The tags
    *
    * @return Article
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

    /**
    * Gets the title
    * The title of this article.
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
    * The title of this article.
    *
    * @param string $val The title
    *
    * @return Article
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }


     /**
     * Gets the indicators
    * Indicators related to this article.
     *
     * @return array|null The indicators
     */
    public function getIndicators()
    {
        if (array_key_exists("indicators", $this->_propDict)) {
           return $this->_propDict["indicators"];
        } else {
            return null;
        }
    }

    /**
    * Sets the indicators
    * Indicators related to this article.
    *
    * @param ArticleIndicator[] $val The indicators
    *
    * @return Article
    */
    public function setIndicators($val)
    {
        $this->_propDict["indicators"] = $val;
        return $this;
    }

}
