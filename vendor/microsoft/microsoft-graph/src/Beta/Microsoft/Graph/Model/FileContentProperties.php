<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileContentProperties File
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
* FileContentProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileContentProperties extends ContentProperties
{
    /**
    * Gets the isVisibleOnlyToOneDriveOwner
    *
    * @return bool|null The isVisibleOnlyToOneDriveOwner
    */
    public function getIsVisibleOnlyToOneDriveOwner()
    {
        if (array_key_exists("isVisibleOnlyToOneDriveOwner", $this->_propDict)) {
            return $this->_propDict["isVisibleOnlyToOneDriveOwner"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isVisibleOnlyToOneDriveOwner
    *
    * @param bool $val The value of the isVisibleOnlyToOneDriveOwner
    *
    * @return FileContentProperties
    */
    public function setIsVisibleOnlyToOneDriveOwner($val)
    {
        $this->_propDict["isVisibleOnlyToOneDriveOwner"] = $val;
        return $this;
    }
}
