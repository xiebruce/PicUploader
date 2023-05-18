<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskPropertyRule File
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
* PlannerTaskPropertyRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskPropertyRule extends PlannerPropertyRule
{

    /**
    * Gets the appliedCategories
    * Rules and restrictions for applied categories. This value does not currently support overrides. Accepted values for the default rule and individual overrides are allow, block.
    *
    * @return PlannerFieldRules|null The appliedCategories
    */
    public function getAppliedCategories()
    {
        if (array_key_exists("appliedCategories", $this->_propDict)) {
            if (is_a($this->_propDict["appliedCategories"], "\Beta\Microsoft\Graph\Model\PlannerFieldRules") || is_null($this->_propDict["appliedCategories"])) {
                return $this->_propDict["appliedCategories"];
            } else {
                $this->_propDict["appliedCategories"] = new PlannerFieldRules($this->_propDict["appliedCategories"]);
                return $this->_propDict["appliedCategories"];
            }
        }
        return null;
    }

    /**
    * Sets the appliedCategories
    * Rules and restrictions for applied categories. This value does not currently support overrides. Accepted values for the default rule and individual overrides are allow, block.
    *
    * @param PlannerFieldRules $val The value to assign to the appliedCategories
    *
    * @return PlannerTaskPropertyRule The PlannerTaskPropertyRule
    */
    public function setAppliedCategories($val)
    {
        $this->_propDict["appliedCategories"] = $val;
         return $this;
    }

    /**
    * Gets the assignments
    * Rules and restrictions for assignments. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, addSelf, addOther, remove, removeSelf, removeOther, block.
    *
    * @return PlannerFieldRules|null The assignments
    */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
            if (is_a($this->_propDict["assignments"], "\Beta\Microsoft\Graph\Model\PlannerFieldRules") || is_null($this->_propDict["assignments"])) {
                return $this->_propDict["assignments"];
            } else {
                $this->_propDict["assignments"] = new PlannerFieldRules($this->_propDict["assignments"]);
                return $this->_propDict["assignments"];
            }
        }
        return null;
    }

    /**
    * Sets the assignments
    * Rules and restrictions for assignments. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, addSelf, addOther, remove, removeSelf, removeOther, block.
    *
    * @param PlannerFieldRules $val The value to assign to the assignments
    *
    * @return PlannerTaskPropertyRule The PlannerTaskPropertyRule
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
         return $this;
    }

    /**
    * Gets the checkLists
    * Rules and restrictions for checklist. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, update, check, reorder, block.
    *
    * @return PlannerFieldRules|null The checkLists
    */
    public function getCheckLists()
    {
        if (array_key_exists("checkLists", $this->_propDict)) {
            if (is_a($this->_propDict["checkLists"], "\Beta\Microsoft\Graph\Model\PlannerFieldRules") || is_null($this->_propDict["checkLists"])) {
                return $this->_propDict["checkLists"];
            } else {
                $this->_propDict["checkLists"] = new PlannerFieldRules($this->_propDict["checkLists"]);
                return $this->_propDict["checkLists"];
            }
        }
        return null;
    }

    /**
    * Sets the checkLists
    * Rules and restrictions for checklist. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, update, check, reorder, block.
    *
    * @param PlannerFieldRules $val The value to assign to the checkLists
    *
    * @return PlannerTaskPropertyRule The PlannerTaskPropertyRule
    */
    public function setCheckLists($val)
    {
        $this->_propDict["checkLists"] = $val;
         return $this;
    }
    /**
    * Gets the delete
    * Rules and restrictions for deleting the task. Accepted values are allow and block.
    *
    * @return string|null The delete
    */
    public function getDelete()
    {
        if (array_key_exists("delete", $this->_propDict)) {
            return $this->_propDict["delete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the delete
    * Rules and restrictions for deleting the task. Accepted values are allow and block.
    *
    * @param string $val The value of the delete
    *
    * @return PlannerTaskPropertyRule
    */
    public function setDelete($val)
    {
        $this->_propDict["delete"] = $val;
        return $this;
    }
    /**
    * Gets the dueDate
    * Rules and restrictions for changing the due date of the task. Accepted values are allow and block.
    *
    * @return string|null The dueDate
    */
    public function getDueDate()
    {
        if (array_key_exists("dueDate", $this->_propDict)) {
            return $this->_propDict["dueDate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dueDate
    * Rules and restrictions for changing the due date of the task. Accepted values are allow and block.
    *
    * @param string $val The value of the dueDate
    *
    * @return PlannerTaskPropertyRule
    */
    public function setDueDate($val)
    {
        $this->_propDict["dueDate"] = $val;
        return $this;
    }
    /**
    * Gets the move
    * Rules and restrictions for moving the task between buckets or plans. Accepted values are allow, moveBetweenPlans, moveBetweenBuckets, and block.
    *
    * @return string|null The move
    */
    public function getMove()
    {
        if (array_key_exists("move", $this->_propDict)) {
            return $this->_propDict["move"];
        } else {
            return null;
        }
    }

    /**
    * Sets the move
    * Rules and restrictions for moving the task between buckets or plans. Accepted values are allow, moveBetweenPlans, moveBetweenBuckets, and block.
    *
    * @param string $val The value of the move
    *
    * @return PlannerTaskPropertyRule
    */
    public function setMove($val)
    {
        $this->_propDict["move"] = $val;
        return $this;
    }
    /**
    * Gets the notes
    * Rules and restrictions for changing the notes of the task. Accepted values are allow and block.
    *
    * @return string|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    * Rules and restrictions for changing the notes of the task. Accepted values are allow and block.
    *
    * @param string $val The value of the notes
    *
    * @return PlannerTaskPropertyRule
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    /**
    * Gets the order
    * Rules and restrictions for changing the order of the task. Accepted values are allow and block.
    *
    * @return string|null The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            return $this->_propDict["order"];
        } else {
            return null;
        }
    }

    /**
    * Sets the order
    * Rules and restrictions for changing the order of the task. Accepted values are allow and block.
    *
    * @param string $val The value of the order
    *
    * @return PlannerTaskPropertyRule
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = $val;
        return $this;
    }
    /**
    * Gets the percentComplete
    * Rules and restrictions for changing the completion percentage of the task. Accepted values are allow, setToComplete, setToNotStarted, setToInProgress, and block.
    *
    * @return string|null The percentComplete
    */
    public function getPercentComplete()
    {
        if (array_key_exists("percentComplete", $this->_propDict)) {
            return $this->_propDict["percentComplete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the percentComplete
    * Rules and restrictions for changing the completion percentage of the task. Accepted values are allow, setToComplete, setToNotStarted, setToInProgress, and block.
    *
    * @param string $val The value of the percentComplete
    *
    * @return PlannerTaskPropertyRule
    */
    public function setPercentComplete($val)
    {
        $this->_propDict["percentComplete"] = $val;
        return $this;
    }
    /**
    * Gets the previewType
    * Rules and restrictions for changing the preview type of the task. Accepted values are allow and block.
    *
    * @return string|null The previewType
    */
    public function getPreviewType()
    {
        if (array_key_exists("previewType", $this->_propDict)) {
            return $this->_propDict["previewType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previewType
    * Rules and restrictions for changing the preview type of the task. Accepted values are allow and block.
    *
    * @param string $val The value of the previewType
    *
    * @return PlannerTaskPropertyRule
    */
    public function setPreviewType($val)
    {
        $this->_propDict["previewType"] = $val;
        return $this;
    }
    /**
    * Gets the priority
    * Rules and restrictions for changing the priority of the task. Accepted values are allow and block.
    *
    * @return string|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * Rules and restrictions for changing the priority of the task. Accepted values are allow and block.
    *
    * @param string $val The value of the priority
    *
    * @return PlannerTaskPropertyRule
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }

    /**
    * Gets the references
    * Rules and restrictions for references. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, block.
    *
    * @return PlannerFieldRules|null The references
    */
    public function getReferences()
    {
        if (array_key_exists("references", $this->_propDict)) {
            if (is_a($this->_propDict["references"], "\Beta\Microsoft\Graph\Model\PlannerFieldRules") || is_null($this->_propDict["references"])) {
                return $this->_propDict["references"];
            } else {
                $this->_propDict["references"] = new PlannerFieldRules($this->_propDict["references"]);
                return $this->_propDict["references"];
            }
        }
        return null;
    }

    /**
    * Sets the references
    * Rules and restrictions for references. Allowed overrides are userCreated and applicationCreated. Accepted values for the default rule and individual overrides are allow, add, remove, block.
    *
    * @param PlannerFieldRules $val The value to assign to the references
    *
    * @return PlannerTaskPropertyRule The PlannerTaskPropertyRule
    */
    public function setReferences($val)
    {
        $this->_propDict["references"] = $val;
         return $this;
    }
    /**
    * Gets the startDate
    * Rules and restrictions for changing the start date of the task. Accepted values are allow and block.
    *
    * @return string|null The startDate
    */
    public function getStartDate()
    {
        if (array_key_exists("startDate", $this->_propDict)) {
            return $this->_propDict["startDate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startDate
    * Rules and restrictions for changing the start date of the task. Accepted values are allow and block.
    *
    * @param string $val The value of the startDate
    *
    * @return PlannerTaskPropertyRule
    */
    public function setStartDate($val)
    {
        $this->_propDict["startDate"] = $val;
        return $this;
    }
    /**
    * Gets the title
    * Rules and restrictions for changing the title of the task. Accepted values are allow and block.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * Rules and restrictions for changing the title of the task. Accepted values are allow and block.
    *
    * @param string $val The value of the title
    *
    * @return PlannerTaskPropertyRule
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
}
