<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PowerliftDownloadRequest File
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
* PowerliftDownloadRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PowerliftDownloadRequest extends Entity
{
    /**
    * Gets the files
    * The list of files to download
    *
    * @return string|null The files
    */
    public function getFiles()
    {
        if (array_key_exists("files", $this->_propDict)) {
            return $this->_propDict["files"];
        } else {
            return null;
        }
    }

    /**
    * Sets the files
    * The list of files to download
    *
    * @param string $val The value of the files
    *
    * @return PowerliftDownloadRequest
    */
    public function setFiles($val)
    {
        $this->_propDict["files"] = $val;
        return $this;
    }
    /**
    * Gets the powerliftId
    * The unique id for the request
    *
    * @return string|null The powerliftId
    */
    public function getPowerliftId()
    {
        if (array_key_exists("powerliftId", $this->_propDict)) {
            return $this->_propDict["powerliftId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the powerliftId
    * The unique id for the request
    *
    * @param string $val The value of the powerliftId
    *
    * @return PowerliftDownloadRequest
    */
    public function setPowerliftId($val)
    {
        $this->_propDict["powerliftId"] = $val;
        return $this;
    }
}
