<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LicenseAssignmentState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* LicenseAssignmentState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LicenseAssignmentState extends Entity
{
    /**
    * Gets the assignedByGroup
    *
    * @return string|null The assignedByGroup
    */
    public function getAssignedByGroup()
    {
        if (array_key_exists("assignedByGroup", $this->_propDict)) {
            return $this->_propDict["assignedByGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedByGroup
    *
    * @param string $val The value of the assignedByGroup
    *
    * @return LicenseAssignmentState
    */
    public function setAssignedByGroup($val)
    {
        $this->_propDict["assignedByGroup"] = $val;
        return $this;
    }
    /**
    * Gets the disabledPlans
    *
    * @return string|null The disabledPlans
    */
    public function getDisabledPlans()
    {
        if (array_key_exists("disabledPlans", $this->_propDict)) {
            return $this->_propDict["disabledPlans"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disabledPlans
    *
    * @param string $val The value of the disabledPlans
    *
    * @return LicenseAssignmentState
    */
    public function setDisabledPlans($val)
    {
        $this->_propDict["disabledPlans"] = $val;
        return $this;
    }
    /**
    * Gets the error
    *
    * @return string|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            return $this->_propDict["error"];
        } else {
            return null;
        }
    }

    /**
    * Sets the error
    *
    * @param string $val The value of the error
    *
    * @return LicenseAssignmentState
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    *
    * @param \DateTime $val The value to assign to the lastUpdatedDateTime
    *
    * @return LicenseAssignmentState The LicenseAssignmentState
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the skuId
    *
    * @return string|null The skuId
    */
    public function getSkuId()
    {
        if (array_key_exists("skuId", $this->_propDict)) {
            return $this->_propDict["skuId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skuId
    *
    * @param string $val The value of the skuId
    *
    * @return LicenseAssignmentState
    */
    public function setSkuId($val)
    {
        $this->_propDict["skuId"] = $val;
        return $this;
    }
    /**
    * Gets the state
    *
    * @return string|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    *
    * @param string $val The value of the state
    *
    * @return LicenseAssignmentState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
}
