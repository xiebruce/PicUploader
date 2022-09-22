<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomTaskExtensionCalloutData File
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
* CustomTaskExtensionCalloutData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomTaskExtensionCalloutData extends \Beta\Microsoft\Graph\Model\CustomExtensionData
{

    /**
    * Gets the subject
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
    *
    * @param \Beta\Microsoft\Graph\Model\User $val The value to assign to the subject
    *
    * @return CustomTaskExtensionCalloutData The CustomTaskExtensionCalloutData
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
         return $this;
    }

    /**
    * Gets the task
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
    *
    * @param Task $val The value to assign to the task
    *
    * @return CustomTaskExtensionCalloutData The CustomTaskExtensionCalloutData
    */
    public function setTask($val)
    {
        $this->_propDict["task"] = $val;
         return $this;
    }

    /**
    * Gets the taskProcessingresult
    *
    * @return TaskProcessingResult|null The taskProcessingresult
    */
    public function getTaskProcessingresult()
    {
        if (array_key_exists("taskProcessingresult", $this->_propDict)) {
            if (is_a($this->_propDict["taskProcessingresult"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\TaskProcessingResult") || is_null($this->_propDict["taskProcessingresult"])) {
                return $this->_propDict["taskProcessingresult"];
            } else {
                $this->_propDict["taskProcessingresult"] = new TaskProcessingResult($this->_propDict["taskProcessingresult"]);
                return $this->_propDict["taskProcessingresult"];
            }
        }
        return null;
    }

    /**
    * Sets the taskProcessingresult
    *
    * @param TaskProcessingResult $val The value to assign to the taskProcessingresult
    *
    * @return CustomTaskExtensionCalloutData The CustomTaskExtensionCalloutData
    */
    public function setTaskProcessingresult($val)
    {
        $this->_propDict["taskProcessingresult"] = $val;
         return $this;
    }

    /**
    * Gets the workflow
    *
    * @return Workflow|null The workflow
    */
    public function getWorkflow()
    {
        if (array_key_exists("workflow", $this->_propDict)) {
            if (is_a($this->_propDict["workflow"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\Workflow") || is_null($this->_propDict["workflow"])) {
                return $this->_propDict["workflow"];
            } else {
                $this->_propDict["workflow"] = new Workflow($this->_propDict["workflow"]);
                return $this->_propDict["workflow"];
            }
        }
        return null;
    }

    /**
    * Sets the workflow
    *
    * @param Workflow $val The value to assign to the workflow
    *
    * @return CustomTaskExtensionCalloutData The CustomTaskExtensionCalloutData
    */
    public function setWorkflow($val)
    {
        $this->_propDict["workflow"] = $val;
         return $this;
    }
}
