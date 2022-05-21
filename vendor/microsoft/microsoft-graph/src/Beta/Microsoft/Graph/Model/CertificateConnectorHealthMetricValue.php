<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateConnectorHealthMetricValue File
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
* CertificateConnectorHealthMetricValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CertificateConnectorHealthMetricValue extends Entity
{

    /**
    * Gets the dateTime
    * Timestamp for this metric data-point.
    *
    * @return \DateTime|null The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dateTime"], "\DateTime") || is_null($this->_propDict["dateTime"])) {
                return $this->_propDict["dateTime"];
            } else {
                $this->_propDict["dateTime"] = new \DateTime($this->_propDict["dateTime"]);
                return $this->_propDict["dateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dateTime
    * Timestamp for this metric data-point.
    *
    * @param \DateTime $val The value to assign to the dateTime
    *
    * @return CertificateConnectorHealthMetricValue The CertificateConnectorHealthMetricValue
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
         return $this;
    }
    /**
    * Gets the failureCount
    * Count of failed requests/operations.
    *
    * @return int|null The failureCount
    */
    public function getFailureCount()
    {
        if (array_key_exists("failureCount", $this->_propDict)) {
            return $this->_propDict["failureCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failureCount
    * Count of failed requests/operations.
    *
    * @param int $val The value of the failureCount
    *
    * @return CertificateConnectorHealthMetricValue
    */
    public function setFailureCount($val)
    {
        $this->_propDict["failureCount"] = $val;
        return $this;
    }
    /**
    * Gets the successCount
    * Count of successful requests/operations.
    *
    * @return int|null The successCount
    */
    public function getSuccessCount()
    {
        if (array_key_exists("successCount", $this->_propDict)) {
            return $this->_propDict["successCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successCount
    * Count of successful requests/operations.
    *
    * @param int $val The value of the successCount
    *
    * @return CertificateConnectorHealthMetricValue
    */
    public function setSuccessCount($val)
    {
        $this->_propDict["successCount"] = $val;
        return $this;
    }
}
