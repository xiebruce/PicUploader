<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintDocument File
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
* PrintDocument class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintDocument extends Entity
{
    /**
    * Gets the configuration
    *
    * @return PrinterDocumentConfiguration|null The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "\Beta\Microsoft\Graph\Model\PrinterDocumentConfiguration") || is_null($this->_propDict["configuration"])) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new PrinterDocumentConfiguration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }

    /**
    * Sets the configuration
    *
    * @param PrinterDocumentConfiguration $val The configuration
    *
    * @return PrintDocument
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }

    /**
    * Gets the contentType
    * The document's content (MIME) type. Read-only.
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
    * The document's content (MIME) type. Read-only.
    *
    * @param string $val The contentType
    *
    * @return PrintDocument
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The document's name. Read-only.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The document's name. Read-only.
    *
    * @param string $val The displayName
    *
    * @return PrintDocument
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the downloadedDateTime
    *
    * @return \DateTime|null The downloadedDateTime
    */
    public function getDownloadedDateTime()
    {
        if (array_key_exists("downloadedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["downloadedDateTime"], "\DateTime") || is_null($this->_propDict["downloadedDateTime"])) {
                return $this->_propDict["downloadedDateTime"];
            } else {
                $this->_propDict["downloadedDateTime"] = new \DateTime($this->_propDict["downloadedDateTime"]);
                return $this->_propDict["downloadedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the downloadedDateTime
    *
    * @param \DateTime $val The downloadedDateTime
    *
    * @return PrintDocument
    */
    public function setDownloadedDateTime($val)
    {
        $this->_propDict["downloadedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the size
    * The document's size in bytes. Read-only.
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
    * The document's size in bytes. Read-only.
    *
    * @param int $val The size
    *
    * @return PrintDocument
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }

    /**
    * Gets the uploadedDateTime
    *
    * @return \DateTime|null The uploadedDateTime
    */
    public function getUploadedDateTime()
    {
        if (array_key_exists("uploadedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["uploadedDateTime"], "\DateTime") || is_null($this->_propDict["uploadedDateTime"])) {
                return $this->_propDict["uploadedDateTime"];
            } else {
                $this->_propDict["uploadedDateTime"] = new \DateTime($this->_propDict["uploadedDateTime"]);
                return $this->_propDict["uploadedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the uploadedDateTime
    *
    * @param \DateTime $val The uploadedDateTime
    *
    * @return PrintDocument
    */
    public function setUploadedDateTime($val)
    {
        $this->_propDict["uploadedDateTime"] = $val;
        return $this;
    }

}
