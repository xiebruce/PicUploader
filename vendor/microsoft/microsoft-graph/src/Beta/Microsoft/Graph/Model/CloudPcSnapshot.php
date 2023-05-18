<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcSnapshot File
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
* CloudPcSnapshot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcSnapshot extends Entity
{
    /**
    * Gets the cloudPcId
    * The unique identifier for the Cloud PC.
    *
    * @return string|null The cloudPcId
    */
    public function getCloudPcId()
    {
        if (array_key_exists("cloudPcId", $this->_propDict)) {
            return $this->_propDict["cloudPcId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcId
    * The unique identifier for the Cloud PC.
    *
    * @param string $val The cloudPcId
    *
    * @return CloudPcSnapshot
    */
    public function setCloudPcId($val)
    {
        $this->_propDict["cloudPcId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time at which the snapshot was taken. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time at which the snapshot was taken. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return CloudPcSnapshot
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * The date and time when the snapshot expires. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * The date and time when the snapshot expires. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return CloudPcSnapshot
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastRestoredDateTime
    * The date and time at which the snapshot was last used to restore the Cloud PC device. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastRestoredDateTime
    */
    public function getLastRestoredDateTime()
    {
        if (array_key_exists("lastRestoredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRestoredDateTime"], "\DateTime") || is_null($this->_propDict["lastRestoredDateTime"])) {
                return $this->_propDict["lastRestoredDateTime"];
            } else {
                $this->_propDict["lastRestoredDateTime"] = new \DateTime($this->_propDict["lastRestoredDateTime"]);
                return $this->_propDict["lastRestoredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRestoredDateTime
    * The date and time at which the snapshot was last used to restore the Cloud PC device. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastRestoredDateTime
    *
    * @return CloudPcSnapshot
    */
    public function setLastRestoredDateTime($val)
    {
        $this->_propDict["lastRestoredDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the snapshotType
    * The type of snapshot that indicates how to create the snapshot. Possible values are automatic, manual. Default value is automatic.
    *
    * @return CloudPcSnapshotType|null The snapshotType
    */
    public function getSnapshotType()
    {
        if (array_key_exists("snapshotType", $this->_propDict)) {
            if (is_a($this->_propDict["snapshotType"], "\Beta\Microsoft\Graph\Model\CloudPcSnapshotType") || is_null($this->_propDict["snapshotType"])) {
                return $this->_propDict["snapshotType"];
            } else {
                $this->_propDict["snapshotType"] = new CloudPcSnapshotType($this->_propDict["snapshotType"]);
                return $this->_propDict["snapshotType"];
            }
        }
        return null;
    }

    /**
    * Sets the snapshotType
    * The type of snapshot that indicates how to create the snapshot. Possible values are automatic, manual. Default value is automatic.
    *
    * @param CloudPcSnapshotType $val The snapshotType
    *
    * @return CloudPcSnapshot
    */
    public function setSnapshotType($val)
    {
        $this->_propDict["snapshotType"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the Cloud PC snapshot. The possible values are: ready, unknownFutureValue.
    *
    * @return CloudPcSnapshotStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcSnapshotStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcSnapshotStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the Cloud PC snapshot. The possible values are: ready, unknownFutureValue.
    *
    * @param CloudPcSnapshotStatus $val The status
    *
    * @return CloudPcSnapshot
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
