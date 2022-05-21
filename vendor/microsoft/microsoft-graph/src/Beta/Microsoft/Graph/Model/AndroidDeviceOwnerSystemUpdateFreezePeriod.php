<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerSystemUpdateFreezePeriod File
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
* AndroidDeviceOwnerSystemUpdateFreezePeriod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerSystemUpdateFreezePeriod extends Entity
{
    /**
    * Gets the endDay
    * The day of the end date of the freeze period. Valid values 1 to 31
    *
    * @return int|null The endDay
    */
    public function getEndDay()
    {
        if (array_key_exists("endDay", $this->_propDict)) {
            return $this->_propDict["endDay"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endDay
    * The day of the end date of the freeze period. Valid values 1 to 31
    *
    * @param int $val The value of the endDay
    *
    * @return AndroidDeviceOwnerSystemUpdateFreezePeriod
    */
    public function setEndDay($val)
    {
        $this->_propDict["endDay"] = $val;
        return $this;
    }
    /**
    * Gets the endMonth
    * The month of the end date of the freeze period. Valid values 1 to 12
    *
    * @return int|null The endMonth
    */
    public function getEndMonth()
    {
        if (array_key_exists("endMonth", $this->_propDict)) {
            return $this->_propDict["endMonth"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endMonth
    * The month of the end date of the freeze period. Valid values 1 to 12
    *
    * @param int $val The value of the endMonth
    *
    * @return AndroidDeviceOwnerSystemUpdateFreezePeriod
    */
    public function setEndMonth($val)
    {
        $this->_propDict["endMonth"] = $val;
        return $this;
    }
    /**
    * Gets the startDay
    * The day of the start date of the freeze period. Valid values 1 to 31
    *
    * @return int|null The startDay
    */
    public function getStartDay()
    {
        if (array_key_exists("startDay", $this->_propDict)) {
            return $this->_propDict["startDay"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startDay
    * The day of the start date of the freeze period. Valid values 1 to 31
    *
    * @param int $val The value of the startDay
    *
    * @return AndroidDeviceOwnerSystemUpdateFreezePeriod
    */
    public function setStartDay($val)
    {
        $this->_propDict["startDay"] = $val;
        return $this;
    }
    /**
    * Gets the startMonth
    * The month of the start date of the freeze period. Valid values 1 to 12
    *
    * @return int|null The startMonth
    */
    public function getStartMonth()
    {
        if (array_key_exists("startMonth", $this->_propDict)) {
            return $this->_propDict["startMonth"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startMonth
    * The month of the start date of the freeze period. Valid values 1 to 12
    *
    * @param int $val The value of the startMonth
    *
    * @return AndroidDeviceOwnerSystemUpdateFreezePeriod
    */
    public function setStartMonth($val)
    {
        $this->_propDict["startMonth"] = $val;
        return $this;
    }
}
