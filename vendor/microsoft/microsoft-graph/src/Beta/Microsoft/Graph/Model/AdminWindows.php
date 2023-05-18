<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdminWindows File
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
* AdminWindows class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdminWindows extends Entity
{
    /**
    * Gets the updates
    * Entity that acts as a container for all Windows Update for Business deployment service functionalities. Read-only.
    *
    * @return AdminWindowsUpdates|null The updates
    */
    public function getUpdates()
    {
        if (array_key_exists("updates", $this->_propDict)) {
            if (is_a($this->_propDict["updates"], "\Beta\Microsoft\Graph\Model\AdminWindowsUpdates") || is_null($this->_propDict["updates"])) {
                return $this->_propDict["updates"];
            } else {
                $this->_propDict["updates"] = new AdminWindowsUpdates($this->_propDict["updates"]);
                return $this->_propDict["updates"];
            }
        }
        return null;
    }

    /**
    * Sets the updates
    * Entity that acts as a container for all Windows Update for Business deployment service functionalities. Read-only.
    *
    * @param AdminWindowsUpdates $val The updates
    *
    * @return AdminWindows
    */
    public function setUpdates($val)
    {
        $this->_propDict["updates"] = $val;
        return $this;
    }

}
