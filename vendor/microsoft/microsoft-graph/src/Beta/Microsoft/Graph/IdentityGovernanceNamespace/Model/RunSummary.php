<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RunSummary File
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
* RunSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RunSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the failedRuns
    * The number of failed workflow runs.
    *
    * @return int|null The failedRuns
    */
    public function getFailedRuns()
    {
        if (array_key_exists("failedRuns", $this->_propDict)) {
            return $this->_propDict["failedRuns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedRuns
    * The number of failed workflow runs.
    *
    * @param int $val The value of the failedRuns
    *
    * @return RunSummary
    */
    public function setFailedRuns($val)
    {
        $this->_propDict["failedRuns"] = $val;
        return $this;
    }
    /**
    * Gets the failedTasks
    * The number of failed tasks of a workflow.
    *
    * @return int|null The failedTasks
    */
    public function getFailedTasks()
    {
        if (array_key_exists("failedTasks", $this->_propDict)) {
            return $this->_propDict["failedTasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedTasks
    * The number of failed tasks of a workflow.
    *
    * @param int $val The value of the failedTasks
    *
    * @return RunSummary
    */
    public function setFailedTasks($val)
    {
        $this->_propDict["failedTasks"] = $val;
        return $this;
    }
    /**
    * Gets the successfulRuns
    * The number of successful workflow runs.
    *
    * @return int|null The successfulRuns
    */
    public function getSuccessfulRuns()
    {
        if (array_key_exists("successfulRuns", $this->_propDict)) {
            return $this->_propDict["successfulRuns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulRuns
    * The number of successful workflow runs.
    *
    * @param int $val The value of the successfulRuns
    *
    * @return RunSummary
    */
    public function setSuccessfulRuns($val)
    {
        $this->_propDict["successfulRuns"] = $val;
        return $this;
    }
    /**
    * Gets the totalRuns
    * The total number of runs for a workflow.
    *
    * @return int|null The totalRuns
    */
    public function getTotalRuns()
    {
        if (array_key_exists("totalRuns", $this->_propDict)) {
            return $this->_propDict["totalRuns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalRuns
    * The total number of runs for a workflow.
    *
    * @param int $val The value of the totalRuns
    *
    * @return RunSummary
    */
    public function setTotalRuns($val)
    {
        $this->_propDict["totalRuns"] = $val;
        return $this;
    }
    /**
    * Gets the totalTasks
    *
    * @return int|null The totalTasks
    */
    public function getTotalTasks()
    {
        if (array_key_exists("totalTasks", $this->_propDict)) {
            return $this->_propDict["totalTasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalTasks
    *
    * @param int $val The value of the totalTasks
    *
    * @return RunSummary
    */
    public function setTotalTasks($val)
    {
        $this->_propDict["totalTasks"] = $val;
        return $this;
    }
    /**
    * Gets the totalUsers
    *
    * @return int|null The totalUsers
    */
    public function getTotalUsers()
    {
        if (array_key_exists("totalUsers", $this->_propDict)) {
            return $this->_propDict["totalUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUsers
    *
    * @param int $val The value of the totalUsers
    *
    * @return RunSummary
    */
    public function setTotalUsers($val)
    {
        $this->_propDict["totalUsers"] = $val;
        return $this;
    }
}
