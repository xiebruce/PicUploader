<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationProfileStatus File
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
* EducationSynchronizationProfileStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationProfileStatus extends Entity
{
    /**
    * Gets the errorCount
    * Number of errors during synchronization.
    *
    * @return int|null The errorCount
    */
    public function getErrorCount()
    {
        if (array_key_exists("errorCount", $this->_propDict)) {
            return $this->_propDict["errorCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCount
    * Number of errors during synchronization.
    *
    * @param int $val The errorCount
    *
    * @return EducationSynchronizationProfileStatus
    */
    public function setErrorCount($val)
    {
        $this->_propDict["errorCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastActivityDateTime
    * Represents the time when most recent changes were observed in profile.
    *
    * @return \DateTime|null The lastActivityDateTime
    */
    public function getLastActivityDateTime()
    {
        if (array_key_exists("lastActivityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDateTime"], "\DateTime") || is_null($this->_propDict["lastActivityDateTime"])) {
                return $this->_propDict["lastActivityDateTime"];
            } else {
                $this->_propDict["lastActivityDateTime"] = new \DateTime($this->_propDict["lastActivityDateTime"]);
                return $this->_propDict["lastActivityDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActivityDateTime
    * Represents the time when most recent changes were observed in profile.
    *
    * @param \DateTime $val The lastActivityDateTime
    *
    * @return EducationSynchronizationProfileStatus
    */
    public function setLastActivityDateTime($val)
    {
        $this->_propDict["lastActivityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSynchronizationDateTime
    * Represents the time of the most recent successful  synchronization.
    *
    * @return \DateTime|null The lastSynchronizationDateTime
    */
    public function getLastSynchronizationDateTime()
    {
        if (array_key_exists("lastSynchronizationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSynchronizationDateTime"], "\DateTime") || is_null($this->_propDict["lastSynchronizationDateTime"])) {
                return $this->_propDict["lastSynchronizationDateTime"];
            } else {
                $this->_propDict["lastSynchronizationDateTime"] = new \DateTime($this->_propDict["lastSynchronizationDateTime"]);
                return $this->_propDict["lastSynchronizationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSynchronizationDateTime
    * Represents the time of the most recent successful  synchronization.
    *
    * @param \DateTime $val The lastSynchronizationDateTime
    *
    * @return EducationSynchronizationProfileStatus
    */
    public function setLastSynchronizationDateTime($val)
    {
        $this->_propDict["lastSynchronizationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of a sync. The possible values are: paused, inProgress, success, error, validationError, quarantined, unknownFutureValue, extracting, validating. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: extracting, validating.
    *
    * @return EducationSynchronizationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new EducationSynchronizationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of a sync. The possible values are: paused, inProgress, success, error, validationError, quarantined, unknownFutureValue, extracting, validating. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: extracting, validating.
    *
    * @param EducationSynchronizationStatus $val The status
    *
    * @return EducationSynchronizationProfileStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the statusMessage
    * Status message for the current profile's synchronization stage.
    *
    * @return string|null The statusMessage
    */
    public function getStatusMessage()
    {
        if (array_key_exists("statusMessage", $this->_propDict)) {
            return $this->_propDict["statusMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statusMessage
    * Status message for the current profile's synchronization stage.
    *
    * @param string $val The statusMessage
    *
    * @return EducationSynchronizationProfileStatus
    */
    public function setStatusMessage($val)
    {
        $this->_propDict["statusMessage"] = $val;
        return $this;
    }

}
