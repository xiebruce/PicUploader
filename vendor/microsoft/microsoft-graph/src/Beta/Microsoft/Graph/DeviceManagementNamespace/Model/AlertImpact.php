<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertImpact File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;
/**
* AlertImpact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertImpact extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the aggregationType
    * The aggregation type of the impact. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
    *
    * @return AggregationType|null The aggregationType
    */
    public function getAggregationType()
    {
        if (array_key_exists("aggregationType", $this->_propDict)) {
            if (is_a($this->_propDict["aggregationType"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\AggregationType") || is_null($this->_propDict["aggregationType"])) {
                return $this->_propDict["aggregationType"];
            } else {
                $this->_propDict["aggregationType"] = new AggregationType($this->_propDict["aggregationType"]);
                return $this->_propDict["aggregationType"];
            }
        }
        return null;
    }

    /**
    * Sets the aggregationType
    * The aggregation type of the impact. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
    *
    * @param AggregationType $val The value to assign to the aggregationType
    *
    * @return AlertImpact The AlertImpact
    */
    public function setAggregationType($val)
    {
        $this->_propDict["aggregationType"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * The number value of the impact. For the aggregation types of count and affectedCloudPcCount, the value indicates the number of affected instances. For example, 6 affectedCloudPcCount means that 6 Cloud PCs are affected. For the aggregation types of percentage and affectedCloudPcPercentage, the value indicates the percent of affected instances. For example, 12 affectedCloudPcPercentage means that 12% of Cloud PCs are affected.
    *
    * @return int|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The number value of the impact. For the aggregation types of count and affectedCloudPcCount, the value indicates the number of affected instances. For example, 6 affectedCloudPcCount means that 6 Cloud PCs are affected. For the aggregation types of percentage and affectedCloudPcPercentage, the value indicates the percent of affected instances. For example, 12 affectedCloudPcPercentage means that 12% of Cloud PCs are affected.
    *
    * @param int $val The value of the value
    *
    * @return AlertImpact
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
