<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* File File
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
* File class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class File extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the content
    *
    * @return \GuzzleHttp\Psr7\Stream|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return File
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the dateTime
    *
    * @return \DateTime|null The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dateTime"], "\DateTime") || is_null($this->_propDict["dateTime"])) {
                return $this->_propDict["dateTime"];
            } else {
                $this->_propDict["dateTime"] = new \DateTime($this->_propDict["dateTime"]);
                return $this->_propDict["dateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dateTime
    *
    * @param \DateTime $val The dateTime
    *
    * @return File
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
        return $this;
    }

    /**
    * Gets the extension
    *
    * @return string|null The extension
    */
    public function getExtension()
    {
        if (array_key_exists("extension", $this->_propDict)) {
            return $this->_propDict["extension"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extension
    *
    * @param string $val The extension
    *
    * @return File
    */
    public function setExtension($val)
    {
        $this->_propDict["extension"] = $val;
        return $this;
    }

    /**
    * Gets the extractedTextContent
    *
    * @return \GuzzleHttp\Psr7\Stream|null The extractedTextContent
    */
    public function getExtractedTextContent()
    {
        if (array_key_exists("extractedTextContent", $this->_propDict)) {
            if (is_a($this->_propDict["extractedTextContent"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["extractedTextContent"])) {
                return $this->_propDict["extractedTextContent"];
            } else {
                $this->_propDict["extractedTextContent"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["extractedTextContent"]);
                return $this->_propDict["extractedTextContent"];
            }
        }
        return null;
    }

    /**
    * Sets the extractedTextContent
    *
    * @param \GuzzleHttp\Psr7\Stream $val The extractedTextContent
    *
    * @return File
    */
    public function setExtractedTextContent($val)
    {
        $this->_propDict["extractedTextContent"] = $val;
        return $this;
    }

    /**
    * Gets the mediaType
    *
    * @return string|null The mediaType
    */
    public function getMediaType()
    {
        if (array_key_exists("mediaType", $this->_propDict)) {
            return $this->_propDict["mediaType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaType
    *
    * @param string $val The mediaType
    *
    * @return File
    */
    public function setMediaType($val)
    {
        $this->_propDict["mediaType"] = $val;
        return $this;
    }

    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return File
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the otherProperties
    *
    * @return StringValueDictionary|null The otherProperties
    */
    public function getOtherProperties()
    {
        if (array_key_exists("otherProperties", $this->_propDict)) {
            if (is_a($this->_propDict["otherProperties"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\StringValueDictionary") || is_null($this->_propDict["otherProperties"])) {
                return $this->_propDict["otherProperties"];
            } else {
                $this->_propDict["otherProperties"] = new StringValueDictionary($this->_propDict["otherProperties"]);
                return $this->_propDict["otherProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the otherProperties
    *
    * @param StringValueDictionary $val The otherProperties
    *
    * @return File
    */
    public function setOtherProperties($val)
    {
        $this->_propDict["otherProperties"] = $val;
        return $this;
    }

    /**
    * Gets the processingStatus
    *
    * @return FileProcessingStatus|null The processingStatus
    */
    public function getProcessingStatus()
    {
        if (array_key_exists("processingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["processingStatus"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FileProcessingStatus") || is_null($this->_propDict["processingStatus"])) {
                return $this->_propDict["processingStatus"];
            } else {
                $this->_propDict["processingStatus"] = new FileProcessingStatus($this->_propDict["processingStatus"]);
                return $this->_propDict["processingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the processingStatus
    *
    * @param FileProcessingStatus $val The processingStatus
    *
    * @return File
    */
    public function setProcessingStatus($val)
    {
        $this->_propDict["processingStatus"] = $val;
        return $this;
    }

    /**
    * Gets the senderOrAuthors
    *
    * @return string|null The senderOrAuthors
    */
    public function getSenderOrAuthors()
    {
        if (array_key_exists("senderOrAuthors", $this->_propDict)) {
            return $this->_propDict["senderOrAuthors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderOrAuthors
    *
    * @param string $val The senderOrAuthors
    *
    * @return File
    */
    public function setSenderOrAuthors($val)
    {
        $this->_propDict["senderOrAuthors"] = $val;
        return $this;
    }

    /**
    * Gets the size
    *
    * @return int|null The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    *
    * @param int $val The size
    *
    * @return File
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }

    /**
    * Gets the sourceType
    *
    * @return SourceType|null The sourceType
    */
    public function getSourceType()
    {
        if (array_key_exists("sourceType", $this->_propDict)) {
            if (is_a($this->_propDict["sourceType"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SourceType") || is_null($this->_propDict["sourceType"])) {
                return $this->_propDict["sourceType"];
            } else {
                $this->_propDict["sourceType"] = new SourceType($this->_propDict["sourceType"]);
                return $this->_propDict["sourceType"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceType
    *
    * @param SourceType $val The sourceType
    *
    * @return File
    */
    public function setSourceType($val)
    {
        $this->_propDict["sourceType"] = $val;
        return $this;
    }

    /**
    * Gets the subjectTitle
    *
    * @return string|null The subjectTitle
    */
    public function getSubjectTitle()
    {
        if (array_key_exists("subjectTitle", $this->_propDict)) {
            return $this->_propDict["subjectTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectTitle
    *
    * @param string $val The subjectTitle
    *
    * @return File
    */
    public function setSubjectTitle($val)
    {
        $this->_propDict["subjectTitle"] = $val;
        return $this;
    }

}
