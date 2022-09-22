<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkflowTemplate File
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
* WorkflowTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkflowTemplate extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the category
    * The category of the workflow template. The possible values are: joiner, leaver.
    *
    * @return LifecycleWorkflowCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\LifecycleWorkflowCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new LifecycleWorkflowCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * The category of the workflow template. The possible values are: joiner, leaver.
    *
    * @param LifecycleWorkflowCategory $val The category
    *
    * @return WorkflowTemplate
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of the workflowTemplate.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the workflowTemplate.
    *
    * @param string $val The description
    *
    * @return WorkflowTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the workflowTemplate. Supports  orderby.
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
    * The display name of the workflowTemplate. Supports  orderby.
    *
    * @param string $val The displayName
    *
    * @return WorkflowTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the executionConditions
    * Conditions describing when to execute the workflow and the criteria to identify in-scope subject set.
    *
    * @return WorkflowExecutionConditions|null The executionConditions
    */
    public function getExecutionConditions()
    {
        if (array_key_exists("executionConditions", $this->_propDict)) {
            if (is_a($this->_propDict["executionConditions"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\WorkflowExecutionConditions") || is_null($this->_propDict["executionConditions"])) {
                return $this->_propDict["executionConditions"];
            } else {
                $this->_propDict["executionConditions"] = new WorkflowExecutionConditions($this->_propDict["executionConditions"]);
                return $this->_propDict["executionConditions"];
            }
        }
        return null;
    }

    /**
    * Sets the executionConditions
    * Conditions describing when to execute the workflow and the criteria to identify in-scope subject set.
    *
    * @param WorkflowExecutionConditions $val The executionConditions
    *
    * @return WorkflowTemplate
    */
    public function setExecutionConditions($val)
    {
        $this->_propDict["executionConditions"] = $val;
        return $this;
    }


     /**
     * Gets the tasks
    * Represents the configured tasks to execute and their execution sequence within a workflow. This relationship is expanded by default.
     *
     * @return array|null The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tasks
    * Represents the configured tasks to execute and their execution sequence within a workflow. This relationship is expanded by default.
    *
    * @param Task[] $val The tasks
    *
    * @return WorkflowTemplate
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }

}
