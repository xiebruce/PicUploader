<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcConnectivityResult File
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
* CloudPcConnectivityResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcConnectivityResult extends Entity
{

    /**
    * Gets the failedHealthCheckItems
    * A list of failed health check items. If the status property is available, this property will be empty.
    *
    * @return CloudPcHealthCheckItem|null The failedHealthCheckItems
    */
    public function getFailedHealthCheckItems()
    {
        if (array_key_exists("failedHealthCheckItems", $this->_propDict)) {
            if (is_a($this->_propDict["failedHealthCheckItems"], "\Beta\Microsoft\Graph\Model\CloudPcHealthCheckItem") || is_null($this->_propDict["failedHealthCheckItems"])) {
                return $this->_propDict["failedHealthCheckItems"];
            } else {
                $this->_propDict["failedHealthCheckItems"] = new CloudPcHealthCheckItem($this->_propDict["failedHealthCheckItems"]);
                return $this->_propDict["failedHealthCheckItems"];
            }
        }
        return null;
    }

    /**
    * Sets the failedHealthCheckItems
    * A list of failed health check items. If the status property is available, this property will be empty.
    *
    * @param CloudPcHealthCheckItem $val The value to assign to the failedHealthCheckItems
    *
    * @return CloudPcConnectivityResult The CloudPcConnectivityResult
    */
    public function setFailedHealthCheckItems($val)
    {
        $this->_propDict["failedHealthCheckItems"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * Connectivity status of the Cloud PC. Possible values are: unknown, available, availableWithWarning, unavailable, and unknownFutureValue.
    *
    * @return CloudPcConnectivityStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcConnectivityStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcConnectivityStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Connectivity status of the Cloud PC. Possible values are: unknown, available, availableWithWarning, unavailable, and unknownFutureValue.
    *
    * @param CloudPcConnectivityStatus $val The value to assign to the status
    *
    * @return CloudPcConnectivityResult The CloudPcConnectivityResult
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }

    /**
    * Gets the updatedDateTime
    * Datetime when the status was updated. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The updatedDateTime
    */
    public function getUpdatedDateTime()
    {
        if (array_key_exists("updatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["updatedDateTime"], "\DateTime") || is_null($this->_propDict["updatedDateTime"])) {
                return $this->_propDict["updatedDateTime"];
            } else {
                $this->_propDict["updatedDateTime"] = new \DateTime($this->_propDict["updatedDateTime"]);
                return $this->_propDict["updatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the updatedDateTime
    * Datetime when the status was updated. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the updatedDateTime
    *
    * @return CloudPcConnectivityResult The CloudPcConnectivityResult
    */
    public function setUpdatedDateTime($val)
    {
        $this->_propDict["updatedDateTime"] = $val;
         return $this;
    }
}
