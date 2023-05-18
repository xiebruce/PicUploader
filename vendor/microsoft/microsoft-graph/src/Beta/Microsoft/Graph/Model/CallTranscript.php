<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallTranscript File
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
* CallTranscript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallTranscript extends Entity
{
    /**
    * Gets the content
    * A field that represents the content of the transcript. Read-only.
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
    * A field that represents the content of the transcript. Read-only.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return CallTranscript
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time at which the transcript was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * Date and time at which the transcript was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return CallTranscript
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the metadataContent
    * A field that represents the time-aligned metadata of the utterances in the transcript. Read-only.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The metadataContent
    */
    public function getMetadataContent()
    {
        if (array_key_exists("metadataContent", $this->_propDict)) {
            if (is_a($this->_propDict["metadataContent"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["metadataContent"])) {
                return $this->_propDict["metadataContent"];
            } else {
                $this->_propDict["metadataContent"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["metadataContent"]);
                return $this->_propDict["metadataContent"];
            }
        }
        return null;
    }

    /**
    * Sets the metadataContent
    * A field that represents the time-aligned metadata of the utterances in the transcript. Read-only.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The metadataContent
    *
    * @return CallTranscript
    */
    public function setMetadataContent($val)
    {
        $this->_propDict["metadataContent"] = $val;
        return $this;
    }

}
