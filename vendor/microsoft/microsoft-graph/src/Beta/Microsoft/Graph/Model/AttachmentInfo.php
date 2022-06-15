<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttachmentInfo File
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
* AttachmentInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttachmentInfo extends Entity
{

    /**
    * Gets the attachmentType
    *
    * @return AttachmentType|null The attachmentType
    */
    public function getAttachmentType()
    {
        if (array_key_exists("attachmentType", $this->_propDict)) {
            if (is_a($this->_propDict["attachmentType"], "\Beta\Microsoft\Graph\Model\AttachmentType") || is_null($this->_propDict["attachmentType"])) {
                return $this->_propDict["attachmentType"];
            } else {
                $this->_propDict["attachmentType"] = new AttachmentType($this->_propDict["attachmentType"]);
                return $this->_propDict["attachmentType"];
            }
        }
        return null;
    }

    /**
    * Sets the attachmentType
    *
    * @param AttachmentType $val The value to assign to the attachmentType
    *
    * @return AttachmentInfo The AttachmentInfo
    */
    public function setAttachmentType($val)
    {
        $this->_propDict["attachmentType"] = $val;
         return $this;
    }
    /**
    * Gets the contentType
    *
    * @return string|null The contentType
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
    *
    * @param string $val The value of the contentType
    *
    * @return AttachmentInfo
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
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
    * @param string $val The value of the name
    *
    * @return AttachmentInfo
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
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
    * @param int $val The value of the size
    *
    * @return AttachmentInfo
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
}
