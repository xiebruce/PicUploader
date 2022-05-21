<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDriverUpdateInventory File
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
* WindowsDriverUpdateInventory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDriverUpdateInventory extends Entity
{
    /**
    * Gets the applicableDeviceCount
    * The number of devices for which this driver is applicable.
    *
    * @return int|null The applicableDeviceCount
    */
    public function getApplicableDeviceCount()
    {
        if (array_key_exists("applicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["applicableDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicableDeviceCount
    * The number of devices for which this driver is applicable.
    *
    * @param int $val The applicableDeviceCount
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setApplicableDeviceCount($val)
    {
        $this->_propDict["applicableDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the approvalStatus
    * The approval status for this driver. Possible values are: needsReview, declined, approved, suspended.
    *
    * @return DriverApprovalStatus|null The approvalStatus
    */
    public function getApprovalStatus()
    {
        if (array_key_exists("approvalStatus", $this->_propDict)) {
            if (is_a($this->_propDict["approvalStatus"], "\Beta\Microsoft\Graph\Model\DriverApprovalStatus") || is_null($this->_propDict["approvalStatus"])) {
                return $this->_propDict["approvalStatus"];
            } else {
                $this->_propDict["approvalStatus"] = new DriverApprovalStatus($this->_propDict["approvalStatus"]);
                return $this->_propDict["approvalStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the approvalStatus
    * The approval status for this driver. Possible values are: needsReview, declined, approved, suspended.
    *
    * @param DriverApprovalStatus $val The approvalStatus
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setApprovalStatus($val)
    {
        $this->_propDict["approvalStatus"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * The category for this driver. Possible values are: recommended, previouslyApproved, other.
    *
    * @return DriverCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\Model\DriverCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new DriverCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * The category for this driver. Possible values are: recommended, previouslyApproved, other.
    *
    * @param DriverCategory $val The category
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the deployDateTime
    * The date time when a driver should be deployed if approvalStatus is approved.
    *
    * @return \DateTime|null The deployDateTime
    */
    public function getDeployDateTime()
    {
        if (array_key_exists("deployDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deployDateTime"], "\DateTime") || is_null($this->_propDict["deployDateTime"])) {
                return $this->_propDict["deployDateTime"];
            } else {
                $this->_propDict["deployDateTime"] = new \DateTime($this->_propDict["deployDateTime"]);
                return $this->_propDict["deployDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deployDateTime
    * The date time when a driver should be deployed if approvalStatus is approved.
    *
    * @param \DateTime $val The deployDateTime
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setDeployDateTime($val)
    {
        $this->_propDict["deployDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the driverClass
    * The class of the driver.
    *
    * @return string|null The driverClass
    */
    public function getDriverClass()
    {
        if (array_key_exists("driverClass", $this->_propDict)) {
            return $this->_propDict["driverClass"];
        } else {
            return null;
        }
    }

    /**
    * Sets the driverClass
    * The class of the driver.
    *
    * @param string $val The driverClass
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setDriverClass($val)
    {
        $this->_propDict["driverClass"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The manufacturer of the driver.
    *
    * @return string|null The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * The manufacturer of the driver.
    *
    * @param string $val The manufacturer
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * The name of the driver.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The name of the driver.
    *
    * @param string $val The name
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the releaseDateTime
    * The release date time of the driver.
    *
    * @return \DateTime|null The releaseDateTime
    */
    public function getReleaseDateTime()
    {
        if (array_key_exists("releaseDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releaseDateTime"], "\DateTime") || is_null($this->_propDict["releaseDateTime"])) {
                return $this->_propDict["releaseDateTime"];
            } else {
                $this->_propDict["releaseDateTime"] = new \DateTime($this->_propDict["releaseDateTime"]);
                return $this->_propDict["releaseDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the releaseDateTime
    * The release date time of the driver.
    *
    * @param \DateTime $val The releaseDateTime
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setReleaseDateTime($val)
    {
        $this->_propDict["releaseDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * The version of the driver.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The version of the driver.
    *
    * @param string $val The version
    *
    * @return WindowsDriverUpdateInventory
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

}
