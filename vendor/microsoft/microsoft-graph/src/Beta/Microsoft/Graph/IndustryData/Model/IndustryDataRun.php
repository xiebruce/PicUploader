<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataRun File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* IndustryDataRun class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataRun extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the blockingError
    * An error object to diagnose critical failures in the run.
    *
    * @return \Beta\Microsoft\Graph\Model\PublicError|null The blockingError
    */
    public function getBlockingError()
    {
        if (array_key_exists("blockingError", $this->_propDict)) {
            if (is_a($this->_propDict["blockingError"], "\Beta\Microsoft\Graph\Model\PublicError") || is_null($this->_propDict["blockingError"])) {
                return $this->_propDict["blockingError"];
            } else {
                $this->_propDict["blockingError"] = new \Beta\Microsoft\Graph\Model\PublicError($this->_propDict["blockingError"]);
                return $this->_propDict["blockingError"];
            }
        }
        return null;
    }

    /**
    * Sets the blockingError
    * An error object to diagnose critical failures in the run.
    *
    * @param \Beta\Microsoft\Graph\Model\PublicError $val The blockingError
    *
    * @return IndustryDataRun
    */
    public function setBlockingError($val)
    {
        $this->_propDict["blockingError"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the run for rendering in a user interface.
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
    * The name of the run for rendering in a user interface.
    *
    * @param string $val The displayName
    *
    * @return IndustryDataRun
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * The date and time when the run finished or null if the run is still in-progress. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * The date and time when the run finished or null if the run is still in-progress. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return IndustryDataRun
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The date and time when the run started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The date and time when the run started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return IndustryDataRun
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The current status of the run. The possible values are: running, failed, completed, completedWithErrors, completedWithWarnings, unknownFutureValue.
    *
    * @return IndustryDataRunStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRunStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new IndustryDataRunStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The current status of the run. The possible values are: running, failed, completed, completedWithErrors, completedWithWarnings, unknownFutureValue.
    *
    * @param IndustryDataRunStatus $val The status
    *
    * @return IndustryDataRun
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the activities
    * The set of activities performed during the run.
     *
     * @return array|null The activities
     */
    public function getActivities()
    {
        if (array_key_exists("activities", $this->_propDict)) {
           return $this->_propDict["activities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activities
    * The set of activities performed during the run.
    *
    * @param IndustryDataRunActivity[] $val The activities
    *
    * @return IndustryDataRun
    */
    public function setActivities($val)
    {
        $this->_propDict["activities"] = $val;
        return $this;
    }

}
