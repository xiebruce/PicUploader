<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeSeriesParameter File
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
* TimeSeriesParameter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeSeriesParameter extends Entity
{

    /**
    * Gets the endDateTime
    * End time of the series being requested. Optional; if not specified, current time is used.
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * End time of the series being requested. Optional; if not specified, current time is used.
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return TimeSeriesParameter The TimeSeriesParameter
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the metricName
    * The name of the metric for which a time series is requested.
    *
    * @return string|null The metricName
    */
    public function getMetricName()
    {
        if (array_key_exists("metricName", $this->_propDict)) {
            return $this->_propDict["metricName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the metricName
    * The name of the metric for which a time series is requested.
    *
    * @param string $val The value of the metricName
    *
    * @return TimeSeriesParameter
    */
    public function setMetricName($val)
    {
        $this->_propDict["metricName"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * Start time of the series being requested.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * Start time of the series being requested.
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return TimeSeriesParameter The TimeSeriesParameter
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
}
