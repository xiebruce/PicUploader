<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExportFileMetadata File
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
* ExportFileMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExportFileMetadata extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the downloadUrl
    *
    * @return string|null The downloadUrl
    */
    public function getDownloadUrl()
    {
        if (array_key_exists("downloadUrl", $this->_propDict)) {
            return $this->_propDict["downloadUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the downloadUrl
    *
    * @param string $val The value of the downloadUrl
    *
    * @return ExportFileMetadata
    */
    public function setDownloadUrl($val)
    {
        $this->_propDict["downloadUrl"] = $val;
        return $this;
    }
    /**
    * Gets the fileName
    *
    * @return string|null The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileName
    *
    * @param string $val The value of the fileName
    *
    * @return ExportFileMetadata
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
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
    * @return ExportFileMetadata
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
}
