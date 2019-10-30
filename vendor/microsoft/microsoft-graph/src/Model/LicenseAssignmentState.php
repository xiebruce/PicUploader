<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LicenseAssignmentState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* LicenseAssignmentState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LicenseAssignmentState extends Entity
{
    /**
    * Gets the skuId
    *
    * @return string The skuId
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
    * Gets the disabledPlans
    *
    * @return string The disabledPlans
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
    * Gets the assignedByGroup
    *
    * @return string The assignedByGroup
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
    * Gets the state
    *
    * @return string The state
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
    /**
    * Gets the error
    *
    * @return string The error
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
}
