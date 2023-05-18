<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessSchedule File
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
* PrivilegedAccessSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessSchedule extends Entity
{
    /**
    * Gets the createdDateTime
    * When the schedule was created. Optional.
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
    * When the schedule was created. Optional.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PrivilegedAccessSchedule
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdUsing
    * The identifier of the access assignment or eligibility request that created this schedule. Optional.
    *
    * @return string|null The createdUsing
    */
    public function getCreatedUsing()
    {
        if (array_key_exists("createdUsing", $this->_propDict)) {
            return $this->_propDict["createdUsing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the createdUsing
    * The identifier of the access assignment or eligibility request that created this schedule. Optional.
    *
    * @param string $val The createdUsing
    *
    * @return PrivilegedAccessSchedule
    */
    public function setCreatedUsing($val)
    {
        $this->_propDict["createdUsing"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedDateTime
    * When the schedule was last modified. Optional.
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime") || is_null($this->_propDict["modifiedDateTime"])) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedDateTime
    * When the schedule was last modified. Optional.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return PrivilegedAccessSchedule
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the scheduleInfo
    * Represents the period of the access assignment or eligibility. The scheduleInfo can represent a single occurrence or multiple recurring instances. Required.
    *
    * @return RequestSchedule|null The scheduleInfo
    */
    public function getScheduleInfo()
    {
        if (array_key_exists("scheduleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleInfo"], "\Beta\Microsoft\Graph\Model\RequestSchedule") || is_null($this->_propDict["scheduleInfo"])) {
                return $this->_propDict["scheduleInfo"];
            } else {
                $this->_propDict["scheduleInfo"] = new RequestSchedule($this->_propDict["scheduleInfo"]);
                return $this->_propDict["scheduleInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduleInfo
    * Represents the period of the access assignment or eligibility. The scheduleInfo can represent a single occurrence or multiple recurring instances. Required.
    *
    * @param RequestSchedule $val The scheduleInfo
    *
    * @return PrivilegedAccessSchedule
    */
    public function setScheduleInfo($val)
    {
        $this->_propDict["scheduleInfo"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the access assignment or eligibility request. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. Optional.
    *
    * @return string|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    * The status of the access assignment or eligibility request. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. Optional.
    *
    * @param string $val The status
    *
    * @return PrivilegedAccessSchedule
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
