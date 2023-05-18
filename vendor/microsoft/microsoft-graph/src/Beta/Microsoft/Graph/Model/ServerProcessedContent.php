<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServerProcessedContent File
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
* ServerProcessedContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServerProcessedContent extends Entity
{

    /**
    * Gets the componentDependencies
    * A key-value map where keys are string identifiers and values are component ids. SharePoint servers might decide to use this hint to preload the script for corresponding components for performance boost.
    *
    * @return MetaDataKeyStringPair|null The componentDependencies
    */
    public function getComponentDependencies()
    {
        if (array_key_exists("componentDependencies", $this->_propDict)) {
            if (is_a($this->_propDict["componentDependencies"], "\Beta\Microsoft\Graph\Model\MetaDataKeyStringPair") || is_null($this->_propDict["componentDependencies"])) {
                return $this->_propDict["componentDependencies"];
            } else {
                $this->_propDict["componentDependencies"] = new MetaDataKeyStringPair($this->_propDict["componentDependencies"]);
                return $this->_propDict["componentDependencies"];
            }
        }
        return null;
    }

    /**
    * Sets the componentDependencies
    * A key-value map where keys are string identifiers and values are component ids. SharePoint servers might decide to use this hint to preload the script for corresponding components for performance boost.
    *
    * @param MetaDataKeyStringPair $val The value to assign to the componentDependencies
    *
    * @return ServerProcessedContent The ServerProcessedContent
    */
    public function setComponentDependencies($val)
    {
        $this->_propDict["componentDependencies"] = $val;
         return $this;
    }

    /**
    * Gets the customMetadata
    * A key-value map where keys are string identifier and values are object of custom key-value pair.
    *
    * @return MetaDataKeyValuePair|null The customMetadata
    */
    public function getCustomMetadata()
    {
        if (array_key_exists("customMetadata", $this->_propDict)) {
            if (is_a($this->_propDict["customMetadata"], "\Beta\Microsoft\Graph\Model\MetaDataKeyValuePair") || is_null($this->_propDict["customMetadata"])) {
                return $this->_propDict["customMetadata"];
            } else {
                $this->_propDict["customMetadata"] = new MetaDataKeyValuePair($this->_propDict["customMetadata"]);
                return $this->_propDict["customMetadata"];
            }
        }
        return null;
    }

    /**
    * Sets the customMetadata
    * A key-value map where keys are string identifier and values are object of custom key-value pair.
    *
    * @param MetaDataKeyValuePair $val The value to assign to the customMetadata
    *
    * @return ServerProcessedContent The ServerProcessedContent
    */
    public function setCustomMetadata($val)
    {
        $this->_propDict["customMetadata"] = $val;
         return $this;
    }

    /**
    * Gets the htmlStrings
    * A key-value map where keys are string identifiers and values are rich text with HTML format. SharePoint servers treat the values as HTML content and run services like safety checks, search index and link fixup on them.
    *
    * @return MetaDataKeyStringPair|null The htmlStrings
    */
    public function getHtmlStrings()
    {
        if (array_key_exists("htmlStrings", $this->_propDict)) {
            if (is_a($this->_propDict["htmlStrings"], "\Beta\Microsoft\Graph\Model\MetaDataKeyStringPair") || is_null($this->_propDict["htmlStrings"])) {
                return $this->_propDict["htmlStrings"];
            } else {
                $this->_propDict["htmlStrings"] = new MetaDataKeyStringPair($this->_propDict["htmlStrings"]);
                return $this->_propDict["htmlStrings"];
            }
        }
        return null;
    }

    /**
    * Sets the htmlStrings
    * A key-value map where keys are string identifiers and values are rich text with HTML format. SharePoint servers treat the values as HTML content and run services like safety checks, search index and link fixup on them.
    *
    * @param MetaDataKeyStringPair $val The value to assign to the htmlStrings
    *
    * @return ServerProcessedContent The ServerProcessedContent
    */
    public function setHtmlStrings($val)
    {
        $this->_propDict["htmlStrings"] = $val;
         return $this;
    }

    /**
    * Gets the imageSources
    * A key-value map where keys are string identifiers and values are image sources. SharePoint servers treat the values as image sources and run services like search index and link fixup on them.
    *
    * @return MetaDataKeyStringPair|null The imageSources
    */
    public function getImageSources()
    {
        if (array_key_exists("imageSources", $this->_propDict)) {
            if (is_a($this->_propDict["imageSources"], "\Beta\Microsoft\Graph\Model\MetaDataKeyStringPair") || is_null($this->_propDict["imageSources"])) {
                return $this->_propDict["imageSources"];
            } else {
                $this->_propDict["imageSources"] = new MetaDataKeyStringPair($this->_propDict["imageSources"]);
                return $this->_propDict["imageSources"];
            }
        }
        return null;
    }

    /**
    * Sets the imageSources
    * A key-value map where keys are string identifiers and values are image sources. SharePoint servers treat the values as image sources and run services like search index and link fixup on them.
    *
    * @param MetaDataKeyStringPair $val The value to assign to the imageSources
    *
    * @return ServerProcessedContent The ServerProcessedContent
    */
    public function setImageSources($val)
    {
        $this->_propDict["imageSources"] = $val;
         return $this;
    }

    /**
    * Gets the links
    * A key-value map where keys are string identifiers and values are links. SharePoint servers treat the values as links and run services like link fixup on them.
    *
    * @return MetaDataKeyStringPair|null The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "\Beta\Microsoft\Graph\Model\MetaDataKeyStringPair") || is_null($this->_propDict["links"])) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new MetaDataKeyStringPair($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }

    /**
    * Sets the links
    * A key-value map where keys are string identifiers and values are links. SharePoint servers treat the values as links and run services like link fixup on them.
    *
    * @param MetaDataKeyStringPair $val The value to assign to the links
    *
    * @return ServerProcessedContent The ServerProcessedContent
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
         return $this;
    }

    /**
    * Gets the searchablePlainTexts
    * A key-value map where keys are string identifiers and values are strings that should be search indexed.
    *
    * @return MetaDataKeyStringPair|null The searchablePlainTexts
    */
    public function getSearchablePlainTexts()
    {
        if (array_key_exists("searchablePlainTexts", $this->_propDict)) {
            if (is_a($this->_propDict["searchablePlainTexts"], "\Beta\Microsoft\Graph\Model\MetaDataKeyStringPair") || is_null($this->_propDict["searchablePlainTexts"])) {
                return $this->_propDict["searchablePlainTexts"];
            } else {
                $this->_propDict["searchablePlainTexts"] = new MetaDataKeyStringPair($this->_propDict["searchablePlainTexts"]);
                return $this->_propDict["searchablePlainTexts"];
            }
        }
        return null;
    }

    /**
    * Sets the searchablePlainTexts
    * A key-value map where keys are string identifiers and values are strings that should be search indexed.
    *
    * @param MetaDataKeyStringPair $val The value to assign to the searchablePlainTexts
    *
    * @return ServerProcessedContent The ServerProcessedContent
    */
    public function setSearchablePlainTexts($val)
    {
        $this->_propDict["searchablePlainTexts"] = $val;
         return $this;
    }
}
