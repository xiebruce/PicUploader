<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LearningAssignment File
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
* LearningAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LearningAssignment extends LearningCourseActivity
{
    /**
    * Gets the assignedDateTime
    * Assigned date for the course activity. Optional.
    *
    * @return \DateTime|null The assignedDateTime
    */
    public function getAssignedDateTime()
    {
        if (array_key_exists("assignedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignedDateTime"], "\DateTime") || is_null($this->_propDict["assignedDateTime"])) {
                return $this->_propDict["assignedDateTime"];
            } else {
                $this->_propDict["assignedDateTime"] = new \DateTime($this->_propDict["assignedDateTime"]);
                return $this->_propDict["assignedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedDateTime
    * Assigned date for the course activity. Optional.
    *
    * @param \DateTime $val The assignedDateTime
    *
    * @return LearningAssignment
    */
    public function setAssignedDateTime($val)
    {
        $this->_propDict["assignedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the assignerUserId
    * The user ID of the assigner. Optional.
    *
    * @return string|null The assignerUserId
    */
    public function getAssignerUserId()
    {
        if (array_key_exists("assignerUserId", $this->_propDict)) {
            return $this->_propDict["assignerUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignerUserId
    * The user ID of the assigner. Optional.
    *
    * @param string $val The assignerUserId
    *
    * @return LearningAssignment
    */
    public function setAssignerUserId($val)
    {
        $this->_propDict["assignerUserId"] = $val;
        return $this;
    }

    /**
    * Gets the assignmentType
    * The assignment type for the course activity. Possible values are: required, recommended, unknownFutureValue. Required.
    *
    * @return AssignmentType|null The assignmentType
    */
    public function getAssignmentType()
    {
        if (array_key_exists("assignmentType", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentType"], "\Beta\Microsoft\Graph\Model\AssignmentType") || is_null($this->_propDict["assignmentType"])) {
                return $this->_propDict["assignmentType"];
            } else {
                $this->_propDict["assignmentType"] = new AssignmentType($this->_propDict["assignmentType"]);
                return $this->_propDict["assignmentType"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentType
    * The assignment type for the course activity. Possible values are: required, recommended, unknownFutureValue. Required.
    *
    * @param AssignmentType $val The assignmentType
    *
    * @return LearningAssignment
    */
    public function setAssignmentType($val)
    {
        $this->_propDict["assignmentType"] = $val;
        return $this;
    }

    /**
    * Gets the dueDateTime
    * Due date for the course activity. Optional.
    *
    * @return DateTimeTimeZone|null The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueDateTime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["dueDateTime"])) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new DateTimeTimeZone($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dueDateTime
    * Due date for the course activity. Optional.
    *
    * @param DateTimeTimeZone $val The dueDateTime
    *
    * @return LearningAssignment
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the notes
    * Notes for the course activity. Optional.
    *
    * @return ItemBody|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            if (is_a($this->_propDict["notes"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["notes"])) {
                return $this->_propDict["notes"];
            } else {
                $this->_propDict["notes"] = new ItemBody($this->_propDict["notes"]);
                return $this->_propDict["notes"];
            }
        }
        return null;
    }

    /**
    * Sets the notes
    * Notes for the course activity. Optional.
    *
    * @param ItemBody $val The notes
    *
    * @return LearningAssignment
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

}
