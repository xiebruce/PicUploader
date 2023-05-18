<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanPropertyRule File
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
* PlannerPlanPropertyRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanPropertyRule extends PlannerPropertyRule
{
    /**
    * Gets the buckets
    *
    * @return string|null The buckets
    */
    public function getBuckets()
    {
        if (array_key_exists("buckets", $this->_propDict)) {
            return $this->_propDict["buckets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the buckets
    *
    * @param string $val The value of the buckets
    *
    * @return PlannerPlanPropertyRule
    */
    public function setBuckets($val)
    {
        $this->_propDict["buckets"] = $val;
        return $this;
    }

    /**
    * Gets the categoryDescriptions
    *
    * @return PlannerFieldRules|null The categoryDescriptions
    */
    public function getCategoryDescriptions()
    {
        if (array_key_exists("categoryDescriptions", $this->_propDict)) {
            if (is_a($this->_propDict["categoryDescriptions"], "\Beta\Microsoft\Graph\Model\PlannerFieldRules") || is_null($this->_propDict["categoryDescriptions"])) {
                return $this->_propDict["categoryDescriptions"];
            } else {
                $this->_propDict["categoryDescriptions"] = new PlannerFieldRules($this->_propDict["categoryDescriptions"]);
                return $this->_propDict["categoryDescriptions"];
            }
        }
        return null;
    }

    /**
    * Sets the categoryDescriptions
    *
    * @param PlannerFieldRules $val The value to assign to the categoryDescriptions
    *
    * @return PlannerPlanPropertyRule The PlannerPlanPropertyRule
    */
    public function setCategoryDescriptions($val)
    {
        $this->_propDict["categoryDescriptions"] = $val;
         return $this;
    }
    /**
    * Gets the tasks
    *
    * @return string|null The tasks
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
    *
    * @param string $val The value of the tasks
    *
    * @return PlannerPlanPropertyRule
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }

    /**
    * Gets the title
    *
    * @return PlannerFieldRules|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            if (is_a($this->_propDict["title"], "\Beta\Microsoft\Graph\Model\PlannerFieldRules") || is_null($this->_propDict["title"])) {
                return $this->_propDict["title"];
            } else {
                $this->_propDict["title"] = new PlannerFieldRules($this->_propDict["title"]);
                return $this->_propDict["title"];
            }
        }
        return null;
    }

    /**
    * Sets the title
    *
    * @param PlannerFieldRules $val The value to assign to the title
    *
    * @return PlannerPlanPropertyRule The PlannerPlanPropertyRule
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
         return $this;
    }
}
