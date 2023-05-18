<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Task File
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
* Task class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Task extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the arguments
    * Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.
     *
     * @return array|null The arguments
     */
    public function getArguments()
    {
        if (array_key_exists("arguments", $this->_propDict)) {
           return $this->_propDict["arguments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the arguments
    * Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.
    *
    * @param \Beta\Microsoft\Graph\Model\KeyValuePair[] $val The arguments
    *
    * @return Task
    */
    public function setArguments($val)
    {
        $this->_propDict["arguments"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * The category of the task. The possible values are: joiner, leaver, unknownFutureValue. This property is multi-valued and the same task can apply to both joiner and leaver categories.Supports $filter(eq, ne).
    *
    * @return LifecycleTaskCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\LifecycleTaskCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new LifecycleTaskCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * The category of the task. The possible values are: joiner, leaver, unknownFutureValue. This property is multi-valued and the same task can apply to both joiner and leaver categories.Supports $filter(eq, ne).
    *
    * @param LifecycleTaskCategory $val The category
    *
    * @return Task
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the continueOnError
    * A boolean value that specifies whether, if this task fails, the workflow will stop, and subsequent tasks will not run. Optional.
    *
    * @return bool|null The continueOnError
    */
    public function getContinueOnError()
    {
        if (array_key_exists("continueOnError", $this->_propDict)) {
            return $this->_propDict["continueOnError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the continueOnError
    * A boolean value that specifies whether, if this task fails, the workflow will stop, and subsequent tasks will not run. Optional.
    *
    * @param bool $val The continueOnError
    *
    * @return Task
    */
    public function setContinueOnError($val)
    {
        $this->_propDict["continueOnError"] = boolval($val);
        return $this;
    }

    /**
    * Gets the description
    * A string that describes the purpose of the task for administrative use. Optional.
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
    * A string that describes the purpose of the task for administrative use. Optional.
    *
    * @param string $val The description
    *
    * @return Task
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * A unique string that identifies the task. Required.Supports $filter(eq, ne) and orderBy.
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
    * A unique string that identifies the task. Required.Supports $filter(eq, ne) and orderBy.
    *
    * @param string $val The displayName
    *
    * @return Task
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the executionSequence
    * An integer that states in what order the task will run in a workflow.Supports $orderby.
    *
    * @return int|null The executionSequence
    */
    public function getExecutionSequence()
    {
        if (array_key_exists("executionSequence", $this->_propDict)) {
            return $this->_propDict["executionSequence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the executionSequence
    * An integer that states in what order the task will run in a workflow.Supports $orderby.
    *
    * @param int $val The executionSequence
    *
    * @return Task
    */
    public function setExecutionSequence($val)
    {
        $this->_propDict["executionSequence"] = intval($val);
        return $this;
    }

    /**
    * Gets the isEnabled
    * A boolean value that denotes whether the task is set to run or not. Optional.Supports $filter(eq, ne) and orderBy.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * A boolean value that denotes whether the task is set to run or not. Optional.Supports $filter(eq, ne) and orderBy.
    *
    * @param bool $val The isEnabled
    *
    * @return Task
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the taskDefinitionId
    * A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see supported tasks. Required.Supports $filter(eq, ne).
    *
    * @return string|null The taskDefinitionId
    */
    public function getTaskDefinitionId()
    {
        if (array_key_exists("taskDefinitionId", $this->_propDict)) {
            return $this->_propDict["taskDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taskDefinitionId
    * A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see supported tasks. Required.Supports $filter(eq, ne).
    *
    * @param string $val The taskDefinitionId
    *
    * @return Task
    */
    public function setTaskDefinitionId($val)
    {
        $this->_propDict["taskDefinitionId"] = $val;
        return $this;
    }


     /**
     * Gets the taskProcessingResults
    * The result of processing the task.
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
    * The result of processing the task.
    *
    * @param TaskProcessingResult[] $val The taskProcessingResults
    *
    * @return Task
    */
    public function setTaskProcessingResults($val)
    {
        $this->_propDict["taskProcessingResults"] = $val;
        return $this;
    }

}
