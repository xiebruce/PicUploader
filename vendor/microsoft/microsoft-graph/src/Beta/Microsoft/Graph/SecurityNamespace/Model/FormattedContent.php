<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FormattedContent File
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
* FormattedContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FormattedContent extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the content
    * The content of this formattedContent.
    *
    * @return string|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * The content of this formattedContent.
    *
    * @param string $val The value of the content
    *
    * @return FormattedContent
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the format
    * The format of the content. The possible values are: text, html, markdown, unknownFutureValue.
    *
    * @return ContentFormat|null The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ContentFormat") || is_null($this->_propDict["format"])) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new ContentFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }

    /**
    * Sets the format
    * The format of the content. The possible values are: text, html, markdown, unknownFutureValue.
    *
    * @param ContentFormat $val The value to assign to the format
    *
    * @return FormattedContent The FormattedContent
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
         return $this;
    }
}
