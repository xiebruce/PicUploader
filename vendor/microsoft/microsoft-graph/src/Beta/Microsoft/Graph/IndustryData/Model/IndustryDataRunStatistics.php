<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataRunStatistics File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;
/**
* IndustryDataRunStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataRunStatistics extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the activityStatistics
    * The collection of statistics for each activity included in this run.
    *
    * @return IndustryDataActivityStatistics|null The activityStatistics
    */
    public function getActivityStatistics()
    {
        if (array_key_exists("activityStatistics", $this->_propDict)) {
            if (is_a($this->_propDict["activityStatistics"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataActivityStatistics") || is_null($this->_propDict["activityStatistics"])) {
                return $this->_propDict["activityStatistics"];
            } else {
                $this->_propDict["activityStatistics"] = new IndustryDataActivityStatistics($this->_propDict["activityStatistics"]);
                return $this->_propDict["activityStatistics"];
            }
        }
        return null;
    }

    /**
    * Sets the activityStatistics
    * The collection of statistics for each activity included in this run.
    *
    * @param IndustryDataActivityStatistics $val The value to assign to the activityStatistics
    *
    * @return IndustryDataRunStatistics The IndustryDataRunStatistics
    */
    public function setActivityStatistics($val)
    {
        $this->_propDict["activityStatistics"] = $val;
         return $this;
    }

    /**
    * Gets the inboundTotals
    * The aggregate statistics for all inbound flows.
    *
    * @return AggregatedInboundStatistics|null The inboundTotals
    */
    public function getInboundTotals()
    {
        if (array_key_exists("inboundTotals", $this->_propDict)) {
            if (is_a($this->_propDict["inboundTotals"], "\Beta\Microsoft\Graph\IndustryData\Model\AggregatedInboundStatistics") || is_null($this->_propDict["inboundTotals"])) {
                return $this->_propDict["inboundTotals"];
            } else {
                $this->_propDict["inboundTotals"] = new AggregatedInboundStatistics($this->_propDict["inboundTotals"]);
                return $this->_propDict["inboundTotals"];
            }
        }
        return null;
    }

    /**
    * Sets the inboundTotals
    * The aggregate statistics for all inbound flows.
    *
    * @param AggregatedInboundStatistics $val The value to assign to the inboundTotals
    *
    * @return IndustryDataRunStatistics The IndustryDataRunStatistics
    */
    public function setInboundTotals($val)
    {
        $this->_propDict["inboundTotals"] = $val;
         return $this;
    }
    /**
    * Gets the runId
    * The ID of the underlying run for the statistics.
    *
    * @return string|null The runId
    */
    public function getRunId()
    {
        if (array_key_exists("runId", $this->_propDict)) {
            return $this->_propDict["runId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the runId
    * The ID of the underlying run for the statistics.
    *
    * @param string $val The value of the runId
    *
    * @return IndustryDataRunStatistics
    */
    public function setRunId($val)
    {
        $this->_propDict["runId"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The latest status of the run. The possible values are: running, failed, completed, completedWithErrors, completedWithWarnings, unknownFutureValue.
    *
    * @return IndustryDataRunStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRunStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new IndustryDataRunStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The latest status of the run. The possible values are: running, failed, completed, completedWithErrors, completedWithWarnings, unknownFutureValue.
    *
    * @param IndustryDataRunStatus $val The value to assign to the status
    *
    * @return IndustryDataRunStatistics The IndustryDataRunStatistics
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
