<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* Windows class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the updates
    * Entity that acts as a container for the functionality of the Windows Update for Business deployment service. Read-only.
    *
    * @return Updates|null The updates
    */
    public function getUpdates()
    {
        if (array_key_exists("updates", $this->_propDict)) {
            if (is_a($this->_propDict["updates"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\Updates") || is_null($this->_propDict["updates"])) {
                return $this->_propDict["updates"];
            } else {
                $this->_propDict["updates"] = new Updates($this->_propDict["updates"]);
                return $this->_propDict["updates"];
            }
        }
        return null;
    }

    /**
    * Sets the updates
    * Entity that acts as a container for the functionality of the Windows Update for Business deployment service. Read-only.
    *
    * @param Updates $val The updates
    *
    * @return Windows
    */
    public function setUpdates($val)
    {
        $this->_propDict["updates"] = $val;
        return $this;
    }

}
