<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcHealthCheckItem File
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
* CloudPcHealthCheckItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcHealthCheckItem extends Entity
{
    /**
    * Gets the additionalDetails
    * Additional message for this health check.
    *
    * @return string|null The additionalDetails
    */
    public function getAdditionalDetails()
    {
        if (array_key_exists("additionalDetails", $this->_propDict)) {
            return $this->_propDict["additionalDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalDetails
    * Additional message for this health check.
    *
    * @param string $val The value of the additionalDetails
    *
    * @return CloudPcHealthCheckItem
    */
    public function setAdditionalDetails($val)
    {
        $this->_propDict["additionalDetails"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The connectivity health check item name.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The connectivity health check item name.
    *
    * @param string $val The value of the displayName
    *
    * @return CloudPcHealthCheckItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastHealthCheckDateTime
    * Timestamp when the last check occurs. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastHealthCheckDateTime
    */
    public function getLastHealthCheckDateTime()
    {
        if (array_key_exists("lastHealthCheckDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastHealthCheckDateTime"], "\DateTime") || is_null($this->_propDict["lastHealthCheckDateTime"])) {
                return $this->_propDict["lastHealthCheckDateTime"];
            } else {
                $this->_propDict["lastHealthCheckDateTime"] = new \DateTime($this->_propDict["lastHealthCheckDateTime"]);
                return $this->_propDict["lastHealthCheckDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastHealthCheckDateTime
    * Timestamp when the last check occurs. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the lastHealthCheckDateTime
    *
    * @return CloudPcHealthCheckItem The CloudPcHealthCheckItem
    */
    public function setLastHealthCheckDateTime($val)
    {
        $this->_propDict["lastHealthCheckDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the result
    * The result of this health check item. Possible values are: unknown, success, failure.
    *
    * @return CloudPcConnectivityEventResult|null The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "\Beta\Microsoft\Graph\Model\CloudPcConnectivityEventResult") || is_null($this->_propDict["result"])) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new CloudPcConnectivityEventResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }

    /**
    * Sets the result
    * The result of this health check item. Possible values are: unknown, success, failure.
    *
    * @param CloudPcConnectivityEventResult $val The value to assign to the result
    *
    * @return CloudPcHealthCheckItem The CloudPcHealthCheckItem
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
         return $this;
    }
}
