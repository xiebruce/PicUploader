<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileUploadSession File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;
/**
* FileUploadSession class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileUploadSession extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the containerExpirationDateTime
    * The expiration date and time for the container. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The containerExpirationDateTime
    */
    public function getContainerExpirationDateTime()
    {
        if (array_key_exists("containerExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["containerExpirationDateTime"], "\DateTime") || is_null($this->_propDict["containerExpirationDateTime"])) {
                return $this->_propDict["containerExpirationDateTime"];
            } else {
                $this->_propDict["containerExpirationDateTime"] = new \DateTime($this->_propDict["containerExpirationDateTime"]);
                return $this->_propDict["containerExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the containerExpirationDateTime
    * The expiration date and time for the container. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the containerExpirationDateTime
    *
    * @return FileUploadSession The FileUploadSession
    */
    public function setContainerExpirationDateTime($val)
    {
        $this->_propDict["containerExpirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the containerId
    * The container ID where the files are uploaded.
    *
    * @return string|null The containerId
    */
    public function getContainerId()
    {
        if (array_key_exists("containerId", $this->_propDict)) {
            return $this->_propDict["containerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containerId
    * The container ID where the files are uploaded.
    *
    * @param string $val The value of the containerId
    *
    * @return FileUploadSession
    */
    public function setContainerId($val)
    {
        $this->_propDict["containerId"] = $val;
        return $this;
    }

    /**
    * Gets the sessionExpirationDateTime
    * The expiration date and time for the file upload session. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The sessionExpirationDateTime
    */
    public function getSessionExpirationDateTime()
    {
        if (array_key_exists("sessionExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sessionExpirationDateTime"], "\DateTime") || is_null($this->_propDict["sessionExpirationDateTime"])) {
                return $this->_propDict["sessionExpirationDateTime"];
            } else {
                $this->_propDict["sessionExpirationDateTime"] = new \DateTime($this->_propDict["sessionExpirationDateTime"]);
                return $this->_propDict["sessionExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sessionExpirationDateTime
    * The expiration date and time for the file upload session. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the sessionExpirationDateTime
    *
    * @return FileUploadSession The FileUploadSession
    */
    public function setSessionExpirationDateTime($val)
    {
        $this->_propDict["sessionExpirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the sessionUrl
    * The Azure Storage SAS URI to upload source files to.
    *
    * @return string|null The sessionUrl
    */
    public function getSessionUrl()
    {
        if (array_key_exists("sessionUrl", $this->_propDict)) {
            return $this->_propDict["sessionUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sessionUrl
    * The Azure Storage SAS URI to upload source files to.
    *
    * @param string $val The value of the sessionUrl
    *
    * @return FileUploadSession
    */
    public function setSessionUrl($val)
    {
        $this->_propDict["sessionUrl"] = $val;
        return $this;
    }
}
