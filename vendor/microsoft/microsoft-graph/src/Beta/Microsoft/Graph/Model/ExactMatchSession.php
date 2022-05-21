<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchSession File
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
* ExactMatchSession class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchSession extends ExactMatchSessionBase
{
    /**
    * Gets the checksum
    *
    * @return string|null The checksum
    */
    public function getChecksum()
    {
        if (array_key_exists("checksum", $this->_propDict)) {
            return $this->_propDict["checksum"];
        } else {
            return null;
        }
    }

    /**
    * Sets the checksum
    *
    * @param string $val The checksum
    *
    * @return ExactMatchSession
    */
    public function setChecksum($val)
    {
        $this->_propDict["checksum"] = $val;
        return $this;
    }

    /**
    * Gets the dataUploadURI
    *
    * @return string|null The dataUploadURI
    */
    public function getDataUploadURI()
    {
        if (array_key_exists("dataUploadURI", $this->_propDict)) {
            return $this->_propDict["dataUploadURI"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataUploadURI
    *
    * @param string $val The dataUploadURI
    *
    * @return ExactMatchSession
    */
    public function setDataUploadURI($val)
    {
        $this->_propDict["dataUploadURI"] = $val;
        return $this;
    }

    /**
    * Gets the fields
    *
    * @return string|null The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
            return $this->_propDict["fields"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fields
    *
    * @param string $val The fields
    *
    * @return ExactMatchSession
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
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
    * @param string $val The fileName
    *
    * @return ExactMatchSession
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }

    /**
    * Gets the rowsPerBlock
    *
    * @return int|null The rowsPerBlock
    */
    public function getRowsPerBlock()
    {
        if (array_key_exists("rowsPerBlock", $this->_propDict)) {
            return $this->_propDict["rowsPerBlock"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rowsPerBlock
    *
    * @param int $val The rowsPerBlock
    *
    * @return ExactMatchSession
    */
    public function setRowsPerBlock($val)
    {
        $this->_propDict["rowsPerBlock"] = intval($val);
        return $this;
    }

    /**
    * Gets the salt
    *
    * @return string|null The salt
    */
    public function getSalt()
    {
        if (array_key_exists("salt", $this->_propDict)) {
            return $this->_propDict["salt"];
        } else {
            return null;
        }
    }

    /**
    * Sets the salt
    *
    * @param string $val The salt
    *
    * @return ExactMatchSession
    */
    public function setSalt($val)
    {
        $this->_propDict["salt"] = $val;
        return $this;
    }

    /**
    * Gets the uploadAgentId
    *
    * @return string|null The uploadAgentId
    */
    public function getUploadAgentId()
    {
        if (array_key_exists("uploadAgentId", $this->_propDict)) {
            return $this->_propDict["uploadAgentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uploadAgentId
    *
    * @param string $val The uploadAgentId
    *
    * @return ExactMatchSession
    */
    public function setUploadAgentId($val)
    {
        $this->_propDict["uploadAgentId"] = $val;
        return $this;
    }

    /**
    * Gets the uploadAgent
    *
    * @return ExactMatchUploadAgent|null The uploadAgent
    */
    public function getUploadAgent()
    {
        if (array_key_exists("uploadAgent", $this->_propDict)) {
            if (is_a($this->_propDict["uploadAgent"], "\Beta\Microsoft\Graph\Model\ExactMatchUploadAgent") || is_null($this->_propDict["uploadAgent"])) {
                return $this->_propDict["uploadAgent"];
            } else {
                $this->_propDict["uploadAgent"] = new ExactMatchUploadAgent($this->_propDict["uploadAgent"]);
                return $this->_propDict["uploadAgent"];
            }
        }
        return null;
    }

    /**
    * Sets the uploadAgent
    *
    * @param ExactMatchUploadAgent $val The uploadAgent
    *
    * @return ExactMatchSession
    */
    public function setUploadAgent($val)
    {
        $this->_propDict["uploadAgent"] = $val;
        return $this;
    }

}
