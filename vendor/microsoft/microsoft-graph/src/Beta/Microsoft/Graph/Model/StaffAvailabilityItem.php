<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StaffAvailabilityItem File
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
* StaffAvailabilityItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StaffAvailabilityItem extends Entity
{

    /**
    * Gets the availabilityItems
    * Each item in this collection indicates a slot and the status of the staff member.
    *
    * @return AvailabilityItem|null The availabilityItems
    */
    public function getAvailabilityItems()
    {
        if (array_key_exists("availabilityItems", $this->_propDict)) {
            if (is_a($this->_propDict["availabilityItems"], "\Beta\Microsoft\Graph\Model\AvailabilityItem") || is_null($this->_propDict["availabilityItems"])) {
                return $this->_propDict["availabilityItems"];
            } else {
                $this->_propDict["availabilityItems"] = new AvailabilityItem($this->_propDict["availabilityItems"]);
                return $this->_propDict["availabilityItems"];
            }
        }
        return null;
    }

    /**
    * Sets the availabilityItems
    * Each item in this collection indicates a slot and the status of the staff member.
    *
    * @param AvailabilityItem $val The value to assign to the availabilityItems
    *
    * @return StaffAvailabilityItem The StaffAvailabilityItem
    */
    public function setAvailabilityItems($val)
    {
        $this->_propDict["availabilityItems"] = $val;
         return $this;
    }
    /**
    * Gets the staffId
    * The ID of the staff member.
    *
    * @return string|null The staffId
    */
    public function getStaffId()
    {
        if (array_key_exists("staffId", $this->_propDict)) {
            return $this->_propDict["staffId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the staffId
    * The ID of the staff member.
    *
    * @param string $val The value of the staffId
    *
    * @return StaffAvailabilityItem
    */
    public function setStaffId($val)
    {
        $this->_propDict["staffId"] = $val;
        return $this;
    }
}
