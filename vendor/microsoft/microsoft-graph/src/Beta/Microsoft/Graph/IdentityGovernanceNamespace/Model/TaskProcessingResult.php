<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TaskProcessingResult File
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
* TaskProcessingResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TaskProcessingResult extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the completedDateTime
    * The date time when taskProcessingResult execution ended. Value is null if task execution is still in progress.
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
    * The date time when taskProcessingResult execution ended. Value is null if task execution is still in progress.
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return TaskProcessingResult
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date time when the taskProcessingResult was created. Supports $filter(lt, gt) and orderBy.
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
    * The date time when the taskProcessingResult was created. Supports $filter(lt, gt) and orderBy.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TaskProcessingResult
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the failureReason
    * Describes why the taskProcessingResult has failed.
    *
    * @return string|null The failureReason
    */
    public function getFailureReason()
    {
        if (array_key_exists("failureReason", $this->_propDict)) {
            return $this->_propDict["failureReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failureReason
    * Describes why the taskProcessingResult has failed.
    *
    * @param string $val The failureReason
    *
    * @return TaskProcessingResult
    */
    public function setFailureReason($val)
    {
        $this->_propDict["failureReason"] = $val;
        return $this;
    }

    /**
    * Gets the processingStatus
    * Describes the execution status of the taskProcessingResult. The possible values are: queued, inProgress, completed, completedWithErrors, canceled, failed, unknownFutureValue. Supports $filter(eq).
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
    * Describes the execution status of the taskProcessingResult. The possible values are: queued, inProgress, completed, completedWithErrors, canceled, failed, unknownFutureValue. Supports $filter(eq).
    *
    * @param LifecycleWorkflowProcessingStatus $val The processingStatus
    *
    * @return TaskProcessingResult
    */
    public function setProcessingStatus($val)
    {
        $this->_propDict["processingStatus"] = $val;
        return $this;
    }

    /**
    * Gets the startedDateTime
    * The date time when taskProcessingResult execution started. Value is null if task execution has not yet started. Supports $filter(lt, gt) and orderBy.
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
    * The date time when taskProcessingResult execution started. Value is null if task execution has not yet started. Supports $filter(lt, gt) and orderBy.
    *
    * @param \DateTime $val The startedDateTime
    *
    * @return TaskProcessingResult
    */
    public function setStartedDateTime($val)
    {
        $this->_propDict["startedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    * The unique identifier of the Azure AD user targeted for the task execution.
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
    * The unique identifier of the Azure AD user targeted for the task execution.
    *
    * @param \Beta\Microsoft\Graph\Model\User $val The subject
    *
    * @return TaskProcessingResult
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }

    /**
    * Gets the task
    * The related workflow task
    *
    * @return Task|null The task
    */
    public function getTask()
    {
        if (array_key_exists("task", $this->_propDict)) {
            if (is_a($this->_propDict["task"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\Task") || is_null($this->_propDict["task"])) {
                return $this->_propDict["task"];
            } else {
                $this->_propDict["task"] = new Task($this->_propDict["task"]);
                return $this->_propDict["task"];
            }
        }
        return null;
    }

    /**
    * Sets the task
    * The related workflow task
    *
    * @param Task $val The task
    *
    * @return TaskProcessingResult
    */
    public function setTask($val)
    {
        $this->_propDict["task"] = $val;
        return $this;
    }

}
