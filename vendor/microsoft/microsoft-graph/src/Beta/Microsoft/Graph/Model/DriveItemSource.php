<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DriveItemSource File
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
* DriveItemSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DriveItemSource extends Entity
{

    /**
    * Gets the application
    * Enumeration value that indicates the source application where the file was created.
    *
    * @return DriveItemSourceApplication|null The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            if (is_a($this->_propDict["application"], "\Beta\Microsoft\Graph\Model\DriveItemSourceApplication") || is_null($this->_propDict["application"])) {
                return $this->_propDict["application"];
            } else {
                $this->_propDict["application"] = new DriveItemSourceApplication($this->_propDict["application"]);
                return $this->_propDict["application"];
            }
        }
        return null;
    }

    /**
    * Sets the application
    * Enumeration value that indicates the source application where the file was created.
    *
    * @param DriveItemSourceApplication $val The value to assign to the application
    *
    * @return DriveItemSource The DriveItemSource
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
         return $this;
    }
    /**
    * Gets the externalId
    * The external identifier for the drive item from the source.
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    * The external identifier for the drive item from the source.
    *
    * @param string $val The value of the externalId
    *
    * @return DriveItemSource
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
}
