<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserProcessingResult File
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
* UserProcessingResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserProcessingResult extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the completedDateTime
    * The date time that the workflow execution for a user completed. Value is null if the workflow hasn't completed. Supports $filter(lt, gt) and $orderby.
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
    * The date time that the workflow execution for a user completed. Value is null if the workflow hasn't completed. Supports $filter(lt, gt) and $orderby.
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return UserProcessingResult
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the failedTasksCount
    * The number of tasks that failed in the workflow execution.
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
    * The number of tasks that failed in the workflow execution.
    *
    * @param int $val The failedTasksCount
    *
    * @return UserProcessingResult
    */
    public function setFailedTasksCount($val)
    {
        $this->_propDict["failedTasksCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the processingStatus
    * The workflow execution status. The possible values are: queued, inProgress, completed, completedWithErrors, canceled, failed, unknownFutureValue.
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
    * The workflow execution status. The possible values are: queued, inProgress, completed, completedWithErrors, canceled, failed, unknownFutureValue.
    *
    * @param LifecycleWorkflowProcessingStatus $val The processingStatus
    *
    * @return UserProcessingResult
    */
    public function setProcessingStatus($val)
    {
        $this->_propDict["processingStatus"] = $val;
        return $this;
    }

    /**
    * Gets the scheduledDateTime
    * The date time that the workflow is scheduled to be executed for a user.
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
    * The date time that the workflow is scheduled to be executed for a user.
    *
    * @param \DateTime $val The scheduledDateTime
    *
    * @return UserProcessingResult
    */
    public function setScheduledDateTime($val)
    {
        $this->_propDict["scheduledDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the startedDateTime
    * The date time that the workflow execution started. Value is null if the workflow execution has not started. Supports $filter(lt, gt) and $orderby.
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
    * The date time that the workflow execution started. Value is null if the workflow execution has not started. Supports $filter(lt, gt) and $orderby.
    *
    * @param \DateTime $val The startedDateTime
    *
    * @return UserProcessingResult
    */
    public function setStartedDateTime($val)
    {
        $this->_propDict["startedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the totalTasksCount
    * The total number of tasks that in the workflow execution.
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
    * The total number of tasks that in the workflow execution.
    *
    * @param int $val The totalTasksCount
    *
    * @return UserProcessingResult
    */
    public function setTotalTasksCount($val)
    {
        $this->_propDict["totalTasksCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalUnprocessedTasksCount
    * The total number of unprocessed tasks for the workflow.
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
    * The total number of unprocessed tasks for the workflow.
    *
    * @param int $val The totalUnprocessedTasksCount
    *
    * @return UserProcessingResult
    */
    public function setTotalUnprocessedTasksCount($val)
    {
        $this->_propDict["totalUnprocessedTasksCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the workflowExecutionType
    * Describes the execution type of the workflow. The possible values are: scheduled, onDemand, unknownFutureValue. Supports $filter(eq, ne).
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
    * Describes the execution type of the workflow. The possible values are: scheduled, onDemand, unknownFutureValue. Supports $filter(eq, ne).
    *
    * @param WorkflowExecutionType $val The workflowExecutionType
    *
    * @return UserProcessingResult
    */
    public function setWorkflowExecutionType($val)
    {
        $this->_propDict["workflowExecutionType"] = $val;
        return $this;
    }

    /**
    * Gets the workflowVersion
    * The version of the workflow that was executed.
    *
    * @return int|null The workflowVersion
    */
    public function getWorkflowVersion()
    {
        if (array_key_exists("workflowVersion", $this->_propDict)) {
            return $this->_propDict["workflowVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workflowVersion
    * The version of the workflow that was executed.
    *
    * @param int $val The workflowVersion
    *
    * @return UserProcessingResult
    */
    public function setWorkflowVersion($val)
    {
        $this->_propDict["workflowVersion"] = intval($val);
        return $this;
    }

    /**
    * Gets the subject
    * The unique identifier of the AAD user targeted for the taskProcessingResult.
    *
    * @return \Beta\Microsoft\Graph\Model\User|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            if (is_a($this->_propDict["subject"], "\Beta\Microsoft\Graph\Model\User") || is_null($this->_propDict["subject"])) {
                return $this->_propDict["subject"];
            } else {
                $this->_propDict["subject"] = new \Beta\Microsoft\Graph\Model\User($this->_propDict["subject"]);
                return $this->_propDict["subject"];
            }
        }
        return null;
    }

    /**
    * Sets the subject
    * The unique identifier of the AAD user targeted for the taskProcessingResult.
    *
    * @param \Beta\Microsoft\Graph\Model\User $val The subject
    *
    * @return UserProcessingResult
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }


     /**
     * Gets the taskProcessingResults
    * The associated individual task execution.
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
    * The associated individual task execution.
    *
    * @param TaskProcessingResult[] $val The taskProcessingResults
    *
    * @return UserProcessingResult
    */
    public function setTaskProcessingResults($val)
    {
        $this->_propDict["taskProcessingResults"] = $val;
        return $this;
    }

}
