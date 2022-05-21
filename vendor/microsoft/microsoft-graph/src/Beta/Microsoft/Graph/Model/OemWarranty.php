<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OemWarranty File
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
* OemWarranty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OemWarranty extends Entity
{

    /**
    * Gets the additionalWarranties
    * List of additional warranty offers. This collection can contain a maximum of 100 elements.
    *
    * @return WarrantyOffer|null The additionalWarranties
    */
    public function getAdditionalWarranties()
    {
        if (array_key_exists("additionalWarranties", $this->_propDict)) {
            if (is_a($this->_propDict["additionalWarranties"], "\Beta\Microsoft\Graph\Model\WarrantyOffer") || is_null($this->_propDict["additionalWarranties"])) {
                return $this->_propDict["additionalWarranties"];
            } else {
                $this->_propDict["additionalWarranties"] = new WarrantyOffer($this->_propDict["additionalWarranties"]);
                return $this->_propDict["additionalWarranties"];
            }
        }
        return null;
    }

    /**
    * Sets the additionalWarranties
    * List of additional warranty offers. This collection can contain a maximum of 100 elements.
    *
    * @param WarrantyOffer $val The value to assign to the additionalWarranties
    *
    * @return OemWarranty The OemWarranty
    */
    public function setAdditionalWarranties($val)
    {
        $this->_propDict["additionalWarranties"] = $val;
         return $this;
    }

    /**
    * Gets the baseWarranties
    * List of base warranty offers. This collection can contain a maximum of 100 elements.
    *
    * @return WarrantyOffer|null The baseWarranties
    */
    public function getBaseWarranties()
    {
        if (array_key_exists("baseWarranties", $this->_propDict)) {
            if (is_a($this->_propDict["baseWarranties"], "\Beta\Microsoft\Graph\Model\WarrantyOffer") || is_null($this->_propDict["baseWarranties"])) {
                return $this->_propDict["baseWarranties"];
            } else {
                $this->_propDict["baseWarranties"] = new WarrantyOffer($this->_propDict["baseWarranties"]);
                return $this->_propDict["baseWarranties"];
            }
        }
        return null;
    }

    /**
    * Sets the baseWarranties
    * List of base warranty offers. This collection can contain a maximum of 100 elements.
    *
    * @param WarrantyOffer $val The value to assign to the baseWarranties
    *
    * @return OemWarranty The OemWarranty
    */
    public function setBaseWarranties($val)
    {
        $this->_propDict["baseWarranties"] = $val;
         return $this;
    }
    /**
    * Gets the deviceConfigurationUrl
    * Device configuration page URL
    *
    * @return string|null The deviceConfigurationUrl
    */
    public function getDeviceConfigurationUrl()
    {
        if (array_key_exists("deviceConfigurationUrl", $this->_propDict)) {
            return $this->_propDict["deviceConfigurationUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceConfigurationUrl
    * Device configuration page URL
    *
    * @param string $val The value of the deviceConfigurationUrl
    *
    * @return OemWarranty
    */
    public function setDeviceConfigurationUrl($val)
    {
        $this->_propDict["deviceConfigurationUrl"] = $val;
        return $this;
    }
    /**
    * Gets the deviceWarrantyUrl
    * Device warranty page URL
    *
    * @return string|null The deviceWarrantyUrl
    */
    public function getDeviceWarrantyUrl()
    {
        if (array_key_exists("deviceWarrantyUrl", $this->_propDict)) {
            return $this->_propDict["deviceWarrantyUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceWarrantyUrl
    * Device warranty page URL
    *
    * @param string $val The value of the deviceWarrantyUrl
    *
    * @return OemWarranty
    */
    public function setDeviceWarrantyUrl($val)
    {
        $this->_propDict["deviceWarrantyUrl"] = $val;
        return $this;
    }
}
