<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicableContent File
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
* ApplicableContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicableContent extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the matchedDevices
    * Collection of devices and recommendations for applicable catalog content.
    *
    * @return ApplicableContentDeviceMatch|null The matchedDevices
    */
    public function getMatchedDevices()
    {
        if (array_key_exists("matchedDevices", $this->_propDict)) {
            if (is_a($this->_propDict["matchedDevices"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\ApplicableContentDeviceMatch") || is_null($this->_propDict["matchedDevices"])) {
                return $this->_propDict["matchedDevices"];
            } else {
                $this->_propDict["matchedDevices"] = new ApplicableContentDeviceMatch($this->_propDict["matchedDevices"]);
                return $this->_propDict["matchedDevices"];
            }
        }
        return null;
    }

    /**
    * Sets the matchedDevices
    * Collection of devices and recommendations for applicable catalog content.
    *
    * @param ApplicableContentDeviceMatch $val The value to assign to the matchedDevices
    *
    * @return ApplicableContent The ApplicableContent
    */
    public function setMatchedDevices($val)
    {
        $this->_propDict["matchedDevices"] = $val;
         return $this;
    }

    /**
    * Gets the catalogEntry
    *
    * @return CatalogEntry|null The catalogEntry
    */
    public function getCatalogEntry()
    {
        if (array_key_exists("catalogEntry", $this->_propDict)) {
            if (is_a($this->_propDict["catalogEntry"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\CatalogEntry") || is_null($this->_propDict["catalogEntry"])) {
                return $this->_propDict["catalogEntry"];
            } else {
                $this->_propDict["catalogEntry"] = new CatalogEntry($this->_propDict["catalogEntry"]);
                return $this->_propDict["catalogEntry"];
            }
        }
        return null;
    }

    /**
    * Sets the catalogEntry
    *
    * @param CatalogEntry $val The value to assign to the catalogEntry
    *
    * @return ApplicableContent The ApplicableContent
    */
    public function setCatalogEntry($val)
    {
        $this->_propDict["catalogEntry"] = $val;
         return $this;
    }
}
