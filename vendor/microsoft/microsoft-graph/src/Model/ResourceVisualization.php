<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResourceVisualization File
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
* ResourceVisualization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ResourceVisualization extends Entity
{
    /**
    * Gets the title
    *
    * @return string The title
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
    *
    * @param string $val The value of the title
    *
    * @return ResourceVisualization
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The value of the type
    *
    * @return ResourceVisualization
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the mediaType
    *
    * @return string The mediaType
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
    * @param string $val The value of the mediaType
    *
    * @return ResourceVisualization
    */
    public function setMediaType($val)
    {
        $this->_propDict["mediaType"] = $val;
        return $this;
    }
    /**
    * Gets the previewImageUrl
    *
    * @return string The previewImageUrl
    */
    public function getPreviewImageUrl()
    {
        if (array_key_exists("previewImageUrl", $this->_propDict)) {
            return $this->_propDict["previewImageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previewImageUrl
    *
    * @param string $val The value of the previewImageUrl
    *
    * @return ResourceVisualization
    */
    public function setPreviewImageUrl($val)
    {
        $this->_propDict["previewImageUrl"] = $val;
        return $this;
    }
    /**
    * Gets the previewText
    *
    * @return string The previewText
    */
    public function getPreviewText()
    {
        if (array_key_exists("previewText", $this->_propDict)) {
            return $this->_propDict["previewText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previewText
    *
    * @param string $val The value of the previewText
    *
    * @return ResourceVisualization
    */
    public function setPreviewText($val)
    {
        $this->_propDict["previewText"] = $val;
        return $this;
    }
    /**
    * Gets the containerWebUrl
    *
    * @return string The containerWebUrl
    */
    public function getContainerWebUrl()
    {
        if (array_key_exists("containerWebUrl", $this->_propDict)) {
            return $this->_propDict["containerWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containerWebUrl
    *
    * @param string $val The value of the containerWebUrl
    *
    * @return ResourceVisualization
    */
    public function setContainerWebUrl($val)
    {
        $this->_propDict["containerWebUrl"] = $val;
        return $this;
    }
    /**
    * Gets the containerDisplayName
    *
    * @return string The containerDisplayName
    */
    public function getContainerDisplayName()
    {
        if (array_key_exists("containerDisplayName", $this->_propDict)) {
            return $this->_propDict["containerDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containerDisplayName
    *
    * @param string $val The value of the containerDisplayName
    *
    * @return ResourceVisualization
    */
    public function setContainerDisplayName($val)
    {
        $this->_propDict["containerDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the containerType
    *
    * @return string The containerType
    */
    public function getContainerType()
    {
        if (array_key_exists("containerType", $this->_propDict)) {
            return $this->_propDict["containerType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containerType
    *
    * @param string $val The value of the containerType
    *
    * @return ResourceVisualization
    */
    public function setContainerType($val)
    {
        $this->_propDict["containerType"] = $val;
        return $this;
    }
}
