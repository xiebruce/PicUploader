<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TaskDefinition File
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
* TaskDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TaskDefinition extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the category
    * The category of the HR function that the tasks created using this definition can be used with. The possible values are: joiner, leaver.
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
    * The category of the HR function that the tasks created using this definition can be used with. The possible values are: joiner, leaver.
    *
    * @param LifecycleTaskCategory $val The category
    *
    * @return TaskDefinition
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the continueOnError
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
    *
    * @param bool $val The continueOnError
    *
    * @return TaskDefinition
    */
    public function setContinueOnError($val)
    {
        $this->_propDict["continueOnError"] = boolval($val);
        return $this;
    }

    /**
    * Gets the description
    * The description of the taskDefinition.
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
    * The description of the taskDefinition.
    *
    * @param string $val The description
    *
    * @return TaskDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the taskDefinition.
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
    * The display name of the taskDefinition.
    *
    * @param string $val The displayName
    *
    * @return TaskDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the parameters
    * The parameters that must be supplied when creating a task.
     *
     * @return array|null The parameters
     */
    public function getParameters()
    {
        if (array_key_exists("parameters", $this->_propDict)) {
           return $this->_propDict["parameters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parameters
    * The parameters that must be supplied when creating a task.
    *
    * @param Parameter[] $val The parameters
    *
    * @return TaskDefinition
    */
    public function setParameters($val)
    {
        $this->_propDict["parameters"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * The version number of the taskDefinition. New records are pushed when we add support for new parameters.
    *
    * @return int|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The version number of the taskDefinition. New records are pushed when we add support for new parameters.
    *
    * @param int $val The version
    *
    * @return TaskDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }

}
