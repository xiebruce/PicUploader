<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RuleThreshold File
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
* RuleThreshold class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RuleThreshold extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the aggregation
    * Indicates the built-in aggregation methods. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
    *
    * @return AggregationType|null The aggregation
    */
    public function getAggregation()
    {
        if (array_key_exists("aggregation", $this->_propDict)) {
            if (is_a($this->_propDict["aggregation"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\AggregationType") || is_null($this->_propDict["aggregation"])) {
                return $this->_propDict["aggregation"];
            } else {
                $this->_propDict["aggregation"] = new AggregationType($this->_propDict["aggregation"]);
                return $this->_propDict["aggregation"];
            }
        }
        return null;
    }

    /**
    * Sets the aggregation
    * Indicates the built-in aggregation methods. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
    *
    * @param AggregationType $val The value to assign to the aggregation
    *
    * @return RuleThreshold The RuleThreshold
    */
    public function setAggregation($val)
    {
        $this->_propDict["aggregation"] = $val;
         return $this;
    }

    /**
    * Gets the operator
    * Indicates the built-in operator. The possible values are: greaterOrEqual, equal, greater, less, lessOrEqual, notEqual, unknownFutureValue.
    *
    * @return OperatorType|null The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\OperatorType") || is_null($this->_propDict["operator"])) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new OperatorType($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * Indicates the built-in operator. The possible values are: greaterOrEqual, equal, greater, less, lessOrEqual, notEqual, unknownFutureValue.
    *
    * @param OperatorType $val The value to assign to the operator
    *
    * @return RuleThreshold The RuleThreshold
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
    /**
    * Gets the target
    * The target threshold value.
    *
    * @return int|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    * The target threshold value.
    *
    * @param int $val The value of the target
    *
    * @return RuleThreshold
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
}
