<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Run File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;

/**
* Run class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Run extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the completedDateTime
    * The date time that the run completed. Value is null if the workflow hasn't completed. Optional.
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
    * The date time that the run completed. Value is null if the workflow hasn't completed. Optional.
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return Run
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the failedTasksCount
    * The number of tasks that failed in the run execution. Required.
    *
    * @return int|null The failedTasksCount
    */
    public function getFailedTasksCount()
    {
        if (array_key_exists("failedTasksCount", $this->_propDict)) {
            return $this->_propDict["failedTasksCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedTasksCount
    * The number of tasks that failed in the run execution. Required.
    *
    * @param int $val The failedTasksCount
    *
    * @return Run
    */
    public function setFailedTasksCount($val)
    {
        $this->_propDict["failedTasksCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the failedUsersCount
    * The number of users that failed in the run execution. Required.
    *
    * @return int|null The failedUsersCount
    */
    public function getFailedUsersCount()
    {
        if (array_key_exists("failedUsersCount", $this->_propDict)) {
            return $this->_propDict["failedUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedUsersCount
    * The number of users that failed in the run execution. Required.
    *
    * @param int $val The failedUsersCount
    *
    * @return Run
    */
    public function setFailedUsersCount($val)
    {
        $this->_propDict["failedUsersCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * The datetime that the run was last updated. Optional.
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    * The datetime that the run was last updated. Optional.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return Run
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the processingStatus
    * The run execution status. The possible values are: queued, inProgress, completed, completedWithErrors, canceled, failed, unknownFutureValue. Required.
    *
    * @return LifecycleWorkflowProcessingStatus|null The processingStatus
    */
    public function getProcessingStatus()
    {
        if (array_key_exists("processingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["processingStatus"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\LifecycleWorkflowProcessingStatus") || is_null($this->_propDict["processingStatus"])) {
                return $this->_propDict["processingStatus"];
            } else {
                $this->_propDict["processingStatus"] = new LifecycleWorkflowProcessingStatus($this->_propDict["processingStatus"]);
                return $this->_propDict["processingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the processingStatus
    * The run execution status. The possible values are: queued, inProgress, completed, completedWithErrors, canceled, failed, unknownFutureValue. Required.
    *
    * @param LifecycleWorkflowProcessingStatus $val The processingStatus
    *
    * @return Run
    */
    public function setProcessingStatus($val)
    {
        $this->_propDict["processingStatus"] = $val;
        return $this;
    }

    /**
    * Gets the scheduledDateTime
    * The date time that the run is scheduled to be executed for a workflow. Required.
    *
    * @return \DateTime|null The scheduledDateTime
    */
    public function getScheduledDateTime()
    {
        if (array_key_exists("scheduledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledDateTime"], "\DateTime") || is_null($this->_propDict["scheduledDateTime"])) {
                return $this->_propDict["scheduledDateTime"];
            } else {
                $this->_propDict["scheduledDateTime"] = new \DateTime($this->_propDict["scheduledDateTime"]);
                return $this->_propDict["scheduledDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledDateTime
    * The date time that the run is scheduled to be executed for a workflow. Required.
    *
    * @param \DateTime $val The scheduledDateTime
    *
    * @return Run
    */
    public function setScheduledDateTime($val)
    {
        $this->_propDict["scheduledDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the startedDateTime
    * The date time that the run execution started. Optional.
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
    * The date time that the run execution started. Optional.
    *
    * @param \DateTime $val The startedDateTime
    *
    * @return Run
    */
    public function setStartedDateTime($val)
    {
        $this->_propDict["startedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the successfulUsersCount
    * The number of successfully completed users in the run. Required.
    *
    * @return int|null The successfulUsersCount
    */
    public function getSuccessfulUsersCount()
    {
        if (array_key_exists("successfulUsersCount", $this->_propDict)) {
            return $this->_propDict["successfulUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulUsersCount
    * The number of successfully completed users in the run. Required.
    *
    * @param int $val The successfulUsersCount
    *
    * @return Run
    */
    public function setSuccessfulUsersCount($val)
    {
        $this->_propDict["successfulUsersCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalTasksCount
    *
    * @return int|null The totalTasksCount
    */
    public function getTotalTasksCount()
    {
        if (array_key_exists("totalTasksCount", $this->_propDict)) {
            return $this->_propDict["totalTasksCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalTasksCount
    *
    * @param int $val The totalTasksCount
    *
    * @return Run
    */
    public function setTotalTasksCount($val)
    {
        $this->_propDict["totalTasksCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalUnprocessedTasksCount
    * The total number of unprocessed tasks in the run execution. Required.
    *
    * @return int|null The totalUnprocessedTasksCount
    */
    public function getTotalUnprocessedTasksCount()
    {
        if (array_key_exists("totalUnprocessedTasksCount", $this->_propDict)) {
            return $this->_propDict["totalUnprocessedTasksCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUnprocessedTasksCount
    * The total number of unprocessed tasks in the run execution. Required.
    *
    * @param int $val The totalUnprocessedTasksCount
    *
    * @return Run
    */
    public function setTotalUnprocessedTasksCount($val)
    {
        $this->_propDict["totalUnprocessedTasksCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalUsersCount
    * The total number of users in the workflow execution. Required.
    *
    * @return int|null The totalUsersCount
    */
    public function getTotalUsersCount()
    {
        if (array_key_exists("totalUsersCount", $this->_propDict)) {
            return $this->_propDict["totalUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUsersCount
    * The total number of users in the workflow execution. Required.
    *
    * @param int $val The totalUsersCount
    *
    * @return Run
    */
    public function setTotalUsersCount($val)
    {
        $this->_propDict["totalUsersCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the workflowExecutionType
    * The execution type of the workflows associated with the run. The possible values are: scheduled, onDemand, unknownFutureValue. Required.
    *
    * @return WorkflowExecutionType|null The workflowExecutionType
    */
    public function getWorkflowExecutionType()
    {
        if (array_key_exists("workflowExecutionType", $this->_propDict)) {
            if (is_a($this->_propDict["workflowExecutionType"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\WorkflowExecutionType") || is_null($this->_propDict["workflowExecutionType"])) {
                return $this->_propDict["workflowExecutionType"];
            } else {
                $this->_propDict["workflowExecutionType"] = new WorkflowExecutionType($this->_propDict["workflowExecutionType"]);
                return $this->_propDict["workflowExecutionType"];
            }
        }
        return null;
    }

    /**
    * Sets the workflowExecutionType
    * The execution type of the workflows associated with the run. The possible values are: scheduled, onDemand, unknownFutureValue. Required.
    *
    * @param WorkflowExecutionType $val The workflowExecutionType
    *
    * @return Run
    */
    public function setWorkflowExecutionType($val)
    {
        $this->_propDict["workflowExecutionType"] = $val;
        return $this;
    }


     /**
     * Gets the taskProcessingResults
    * The related taskProcessingResults.
     *
     * @return array|null The taskProcessingResults
     */
    public function getTaskProcessingResults()
    {
        if (array_key_exists("taskProcessingResults", $this->_propDict)) {
           return $this->_propDict["taskProcessingResults"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taskProcessingResults
    * The related taskProcessingResults.
    *
    * @param TaskProcessingResult[] $val The taskProcessingResults
    *
    * @return Run
    */
    public function setTaskProcessingResults($val)
    {
        $this->_propDict["taskProcessingResults"] = $val;
        return $this;
    }


     /**
     * Gets the userProcessingResults
    * The associated individual user execution.
     *
     * @return array|null The userProcessingResults
     */
    public function getUserProcessingResults()
    {
        if (array_key_exists("userProcessingResults", $this->_propDict)) {
           return $this->_propDict["userProcessingResults"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userProcessingResults
    * The associated individual user execution.
    *
    * @param UserProcessingResult[] $val The userProcessingResults
    *
    * @return Run
    */
    public function setUserProcessingResults($val)
    {
        $this->_propDict["userProcessingResults"] = $val;
        return $this;
    }

}
