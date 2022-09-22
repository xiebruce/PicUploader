<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TaskReportSummary File
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
* TaskReportSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TaskReportSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the failedTasks
    * The number of failed tasks in a report.
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
    * The number of failed tasks in a report.
    *
    * @param int $val The value of the failedTasks
    *
    * @return TaskReportSummary
    */
    public function setFailedTasks($val)
    {
        $this->_propDict["failedTasks"] = $val;
        return $this;
    }
    /**
    * Gets the successfulTasks
    * The total number of successful tasks in a report.
    *
    * @return int|null The successfulTasks
    */
    public function getSuccessfulTasks()
    {
        if (array_key_exists("successfulTasks", $this->_propDict)) {
            return $this->_propDict["successfulTasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulTasks
    * The total number of successful tasks in a report.
    *
    * @param int $val The value of the successfulTasks
    *
    * @return TaskReportSummary
    */
    public function setSuccessfulTasks($val)
    {
        $this->_propDict["successfulTasks"] = $val;
        return $this;
    }
    /**
    * Gets the totalTasks
    * The total number of tasks in a report.
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
    * The total number of tasks in a report.
    *
    * @param int $val The value of the totalTasks
    *
    * @return TaskReportSummary
    */
    public function setTotalTasks($val)
    {
        $this->_propDict["totalTasks"] = $val;
        return $this;
    }
    /**
    * Gets the unprocessedTasks
    * The number of unprocessed tasks in a report.
    *
    * @return int|null The unprocessedTasks
    */
    public function getUnprocessedTasks()
    {
        if (array_key_exists("unprocessedTasks", $this->_propDict)) {
            return $this->_propDict["unprocessedTasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unprocessedTasks
    * The number of unprocessed tasks in a report.
    *
    * @param int $val The value of the unprocessedTasks
    *
    * @return TaskReportSummary
    */
    public function setUnprocessedTasks($val)
    {
        $this->_propDict["unprocessedTasks"] = $val;
        return $this;
    }
}
