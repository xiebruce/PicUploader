<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDeviceOperation File
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
* TeamworkDeviceOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDeviceOperation extends Entity
{
    /**
    * Gets the completedDateTime
    * Time at which the operation reached a final state (for example, Successful, Failed, and Cancelled).
    *
    * @return \DateTime|null The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime") || is_null($this->_propDict["completedDateTime"])) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completedDateTime
    * Time at which the operation reached a final state (for example, Successful, Failed, and Cancelled).
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return TeamworkDeviceOperation
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Identity of the user who created the device operation.
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user who created the device operation.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return TeamworkDeviceOperation
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The UTC date and time when the device operation was created.
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
    * The UTC date and time when the device operation was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TeamworkDeviceOperation
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the error
    * Error details are available only in case of a failed status.
    *
    * @return OperationError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Beta\Microsoft\Graph\Model\OperationError") || is_null($this->_propDict["error"])) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new OperationError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    * Error details are available only in case of a failed status.
    *
    * @param OperationError $val The error
    *
    * @return TeamworkDeviceOperation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }

    /**
    * Gets the lastActionBy
    * Identity of the user who last modified the device operation.
    *
    * @return IdentitySet|null The lastActionBy
    */
    public function getLastActionBy()
    {
        if (array_key_exists("lastActionBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastActionBy"])) {
                return $this->_propDict["lastActionBy"];
            } else {
                $this->_propDict["lastActionBy"] = new IdentitySet($this->_propDict["lastActionBy"]);
                return $this->_propDict["lastActionBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActionBy
    * Identity of the user who last modified the device operation.
    *
    * @param IdentitySet $val The lastActionBy
    *
    * @return TeamworkDeviceOperation
    */
    public function setLastActionBy($val)
    {
        $this->_propDict["lastActionBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastActionDateTime
    * The UTC date and time when the device operation was last modified.
    *
    * @return \DateTime|null The lastActionDateTime
    */
    public function getLastActionDateTime()
    {
        if (array_key_exists("lastActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionDateTime"], "\DateTime") || is_null($this->_propDict["lastActionDateTime"])) {
                return $this->_propDict["lastActionDateTime"];
            } else {
                $this->_propDict["lastActionDateTime"] = new \DateTime($this->_propDict["lastActionDateTime"]);
                return $this->_propDict["lastActionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActionDateTime
    * The UTC date and time when the device operation was last modified.
    *
    * @param \DateTime $val The lastActionDateTime
    *
    * @return TeamworkDeviceOperation
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the operationType
    * Type of async operation on a device. The possible values are: deviceRestart, configUpdate, deviceDiagnostics, softwareUpdate, deviceManagementAgentConfigUpdate, remoteLogin, remoteLogout, unknownFutureValue.
    *
    * @return TeamworkDeviceOperationType|null The operationType
    */
    public function getOperationType()
    {
        if (array_key_exists("operationType", $this->_propDict)) {
            if (is_a($this->_propDict["operationType"], "\Beta\Microsoft\Graph\Model\TeamworkDeviceOperationType") || is_null($this->_propDict["operationType"])) {
                return $this->_propDict["operationType"];
            } else {
                $this->_propDict["operationType"] = new TeamworkDeviceOperationType($this->_propDict["operationType"]);
                return $this->_propDict["operationType"];
            }
        }
        return null;
    }

    /**
    * Sets the operationType
    * Type of async operation on a device. The possible values are: deviceRestart, configUpdate, deviceDiagnostics, softwareUpdate, deviceManagementAgentConfigUpdate, remoteLogin, remoteLogout, unknownFutureValue.
    *
    * @param TeamworkDeviceOperationType $val The operationType
    *
    * @return TeamworkDeviceOperation
    */
    public function setOperationType($val)
    {
        $this->_propDict["operationType"] = $val;
        return $this;
    }

    /**
    * Gets the startedDateTime
    * Time at which the operation was started.
    *
    * @return \DateTime|null The startedDateTime
    */
    public function getStartedDateTime()
    {
        if (array_key_exists("startedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startedDateTime"], "\DateTime") || is_null($this->_propDict["startedDateTime"])) {
                return $this->_propDict["startedDateTime"];
            } else {
                $this->_propDict["startedDateTime"] = new \DateTime($this->_propDict["startedDateTime"]);
                return $this->_propDict["startedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startedDateTime
    * Time at which the operation was started.
    *
    * @param \DateTime $val The startedDateTime
    *
    * @return TeamworkDeviceOperation
    */
    public function setStartedDateTime($val)
    {
        $this->_propDict["startedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The current status of the async operation, for example, Queued, Scheduled, InProgress,  Successful, Cancelled, and Failed.
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
    * The current status of the async operation, for example, Queued, Scheduled, InProgress,  Successful, Cancelled, and Failed.
    *
    * @param string $val The status
    *
    * @return TeamworkDeviceOperation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
