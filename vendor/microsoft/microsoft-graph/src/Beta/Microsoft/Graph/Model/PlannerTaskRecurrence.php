<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskRecurrence File
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
* PlannerTaskRecurrence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskRecurrence extends Entity
{
    /**
    * Gets the nextInSeriesTaskId
    * The taskId of the next task in this series. This value is assigned at the time the next task in the series is created, and is null prior to that time.
    *
    * @return string|null The nextInSeriesTaskId
    */
    public function getNextInSeriesTaskId()
    {
        if (array_key_exists("nextInSeriesTaskId", $this->_propDict)) {
            return $this->_propDict["nextInSeriesTaskId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nextInSeriesTaskId
    * The taskId of the next task in this series. This value is assigned at the time the next task in the series is created, and is null prior to that time.
    *
    * @param string $val The value of the nextInSeriesTaskId
    *
    * @return PlannerTaskRecurrence
    */
    public function setNextInSeriesTaskId($val)
    {
        $this->_propDict["nextInSeriesTaskId"] = $val;
        return $this;
    }
    /**
    * Gets the occurrenceId
    * The 1-based index of this task within the recurrence series. The first task in a series has the value 1, the next task in the series has the value 2, and so on.
    *
    * @return int|null The occurrenceId
    */
    public function getOccurrenceId()
    {
        if (array_key_exists("occurrenceId", $this->_propDict)) {
            return $this->_propDict["occurrenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the occurrenceId
    * The 1-based index of this task within the recurrence series. The first task in a series has the value 1, the next task in the series has the value 2, and so on.
    *
    * @param int $val The value of the occurrenceId
    *
    * @return PlannerTaskRecurrence
    */
    public function setOccurrenceId($val)
    {
        $this->_propDict["occurrenceId"] = $val;
        return $this;
    }
    /**
    * Gets the previousInSeriesTaskId
    * The taskId of the previous task in this series. null for the first task in a series since it has no predecessor. All subsequent tasks in the series have a value that corresponds to their predecessors.
    *
    * @return string|null The previousInSeriesTaskId
    */
    public function getPreviousInSeriesTaskId()
    {
        if (array_key_exists("previousInSeriesTaskId", $this->_propDict)) {
            return $this->_propDict["previousInSeriesTaskId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previousInSeriesTaskId
    * The taskId of the previous task in this series. null for the first task in a series since it has no predecessor. All subsequent tasks in the series have a value that corresponds to their predecessors.
    *
    * @param string $val The value of the previousInSeriesTaskId
    *
    * @return PlannerTaskRecurrence
    */
    public function setPreviousInSeriesTaskId($val)
    {
        $this->_propDict["previousInSeriesTaskId"] = $val;
        return $this;
    }

    /**
    * Gets the recurrenceStartDateTime
    * The date and time when this recurrence series begin. For the first task in a series (occurrenceId = 1) this value is copied from schedule.patternStartDateTime. For subsequent tasks in the series (occurrenceId &amp;gt;= 2) this value is copied from the previous task and never changes; it preserves the start date of the recurring series. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The recurrenceStartDateTime
    */
    public function getRecurrenceStartDateTime()
    {
        if (array_key_exists("recurrenceStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recurrenceStartDateTime"], "\DateTime") || is_null($this->_propDict["recurrenceStartDateTime"])) {
                return $this->_propDict["recurrenceStartDateTime"];
            } else {
                $this->_propDict["recurrenceStartDateTime"] = new \DateTime($this->_propDict["recurrenceStartDateTime"]);
                return $this->_propDict["recurrenceStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrenceStartDateTime
    * The date and time when this recurrence series begin. For the first task in a series (occurrenceId = 1) this value is copied from schedule.patternStartDateTime. For subsequent tasks in the series (occurrenceId &amp;gt;= 2) this value is copied from the previous task and never changes; it preserves the start date of the recurring series. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the recurrenceStartDateTime
    *
    * @return PlannerTaskRecurrence The PlannerTaskRecurrence
    */
    public function setRecurrenceStartDateTime($val)
    {
        $this->_propDict["recurrenceStartDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the schedule
    * The schedule for recurrence. Clients define and edit recurrence by specifying the schedule. If nextInSeriesTaskId isn't assigned, clients may terminate the series by assigning null to this property.
    *
    * @return PlannerRecurrenceSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\Model\PlannerRecurrenceSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new PlannerRecurrenceSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    * The schedule for recurrence. Clients define and edit recurrence by specifying the schedule. If nextInSeriesTaskId isn't assigned, clients may terminate the series by assigning null to this property.
    *
    * @param PlannerRecurrenceSchedule $val The value to assign to the schedule
    *
    * @return PlannerTaskRecurrence The PlannerTaskRecurrence
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
         return $this;
    }
    /**
    * Gets the seriesId
    * The recurrence series this task belongs to. A GUID-based value that serves as the unique identifier for a series.
    *
    * @return string|null The seriesId
    */
    public function getSeriesId()
    {
        if (array_key_exists("seriesId", $this->_propDict)) {
            return $this->_propDict["seriesId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the seriesId
    * The recurrence series this task belongs to. A GUID-based value that serves as the unique identifier for a series.
    *
    * @param string $val The value of the seriesId
    *
    * @return PlannerTaskRecurrence
    */
    public function setSeriesId($val)
    {
        $this->_propDict["seriesId"] = $val;
        return $this;
    }
}
