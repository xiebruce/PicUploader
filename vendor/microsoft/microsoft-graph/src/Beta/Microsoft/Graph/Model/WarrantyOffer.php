<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WarrantyOffer File
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
* WarrantyOffer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WarrantyOffer extends Entity
{
    /**
    * Gets the description
    * Warranty offer description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Warranty offer description
    *
    * @param string $val The value of the description
    *
    * @return WarrantyOffer
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * Warranty offer end date
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * Warranty offer end date
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return WarrantyOffer The WarrantyOffer
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the startDateTime
    * Warranty offer start date
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * Warranty offer start date
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return WarrantyOffer The WarrantyOffer
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the type
    * Warranty offer type
    *
    * @return WarrantyType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\WarrantyType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new WarrantyType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Warranty offer type
    *
    * @param WarrantyType $val The value to assign to the type
    *
    * @return WarrantyOffer The WarrantyOffer
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
