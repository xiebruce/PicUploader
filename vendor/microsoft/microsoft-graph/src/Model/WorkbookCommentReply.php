<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookCommentReply File
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
* WorkbookCommentReply class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkbookCommentReply extends Entity
{
    /**
    * Gets the content
    * The content of a comment reply.
    *
    * @return string The content
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
    * The content of a comment reply.
    *
    * @param string $val The content
    *
    * @return WorkbookCommentReply
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentType
    * Indicates the type for the comment reply.
    *
    * @return string The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentType
    * Indicates the type for the comment reply.
    *
    * @param string $val The contentType
    *
    * @return WorkbookCommentReply
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    
}