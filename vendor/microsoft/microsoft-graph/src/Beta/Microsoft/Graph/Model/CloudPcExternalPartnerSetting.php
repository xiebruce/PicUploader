<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcExternalPartnerSetting File
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
* CloudPcExternalPartnerSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcExternalPartnerSetting extends Entity
{
    /**
    * Gets the enableConnection
    * Enable or disable the connection to an external partner. If true, an external partner API will accept incoming calls from external partners. Required. Supports $filter (eq).
    *
    * @return bool|null The enableConnection
    */
    public function getEnableConnection()
    {
        if (array_key_exists("enableConnection", $this->_propDict)) {
            return $this->_propDict["enableConnection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableConnection
    * Enable or disable the connection to an external partner. If true, an external partner API will accept incoming calls from external partners. Required. Supports $filter (eq).
    *
    * @param bool $val The enableConnection
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setEnableConnection($val)
    {
        $this->_propDict["enableConnection"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastSyncDateTime
    * Last data sync time for this external partner. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    *
    * @return \DateTime|null The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime") || is_null($this->_propDict["lastSyncDateTime"])) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSyncDateTime
    * Last data sync time for this external partner. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the partnerId
    * The external partner ID.
    *
    * @return string|null The partnerId
    */
    public function getPartnerId()
    {
        if (array_key_exists("partnerId", $this->_propDict)) {
            return $this->_propDict["partnerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the partnerId
    * The external partner ID.
    *
    * @param string $val The partnerId
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setPartnerId($val)
    {
        $this->_propDict["partnerId"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the connection to the external partner. The possible values are: notAvailable, available, healthy, unhealthy, unknownFutureValue.
    *
    * @return CloudPcExternalPartnerStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcExternalPartnerStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcExternalPartnerStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the connection to the external partner. The possible values are: notAvailable, available, healthy, unhealthy, unknownFutureValue.
    *
    * @param CloudPcExternalPartnerStatus $val The status
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the statusDetails
    * Status details message.
    *
    * @return string|null The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict)) {
            return $this->_propDict["statusDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statusDetails
    * Status details message.
    *
    * @param string $val The statusDetails
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
        return $this;
    }

}
