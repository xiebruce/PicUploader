<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubmissionDetectedFile File
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
* SubmissionDetectedFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubmissionDetectedFile extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the fileHash
    * The file hash.
    *
    * @return string|null The fileHash
    */
    public function getFileHash()
    {
        if (array_key_exists("fileHash", $this->_propDict)) {
            return $this->_propDict["fileHash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileHash
    * The file hash.
    *
    * @param string $val The value of the fileHash
    *
    * @return SubmissionDetectedFile
    */
    public function setFileHash($val)
    {
        $this->_propDict["fileHash"] = $val;
        return $this;
    }
    /**
    * Gets the fileName
    * The file name.
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
    * The file name.
    *
    * @param string $val The value of the fileName
    *
    * @return SubmissionDetectedFile
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
}
