<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DocumentSetVersionItem File
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
* DocumentSetVersionItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DocumentSetVersionItem extends Entity
{
    /**
    * Gets the itemId
    * The unique identifier for the item.
    *
    * @return string|null The itemId
    */
    public function getItemId()
    {
        if (array_key_exists("itemId", $this->_propDict)) {
            return $this->_propDict["itemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemId
    * The unique identifier for the item.
    *
    * @param string $val The value of the itemId
    *
    * @return DocumentSetVersionItem
    */
    public function setItemId($val)
    {
        $this->_propDict["itemId"] = $val;
        return $this;
    }
    /**
    * Gets the title
    * The title of the item.
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
    * The title of the item.
    *
    * @param string $val The value of the title
    *
    * @return DocumentSetVersionItem
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    /**
    * Gets the versionId
    * The version ID of the item.
    *
    * @return string|null The versionId
    */
    public function getVersionId()
    {
        if (array_key_exists("versionId", $this->_propDict)) {
            return $this->_propDict["versionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versionId
    * The version ID of the item.
    *
    * @param string $val The value of the versionId
    *
    * @return DocumentSetVersionItem
    */
    public function setVersionId($val)
    {
        $this->_propDict["versionId"] = $val;
        return $this;
    }
}
