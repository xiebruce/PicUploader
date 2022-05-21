<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeploymentState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* DeploymentState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeploymentState extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the reasons
    * Specifies the reasons the deployment has its state value. Read-only.
    *
    * @return DeploymentStateReason|null The reasons
    */
    public function getReasons()
    {
        if (array_key_exists("reasons", $this->_propDict)) {
            if (is_a($this->_propDict["reasons"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentStateReason") || is_null($this->_propDict["reasons"])) {
                return $this->_propDict["reasons"];
            } else {
                $this->_propDict["reasons"] = new DeploymentStateReason($this->_propDict["reasons"]);
                return $this->_propDict["reasons"];
            }
        }
        return null;
    }

    /**
    * Sets the reasons
    * Specifies the reasons the deployment has its state value. Read-only.
    *
    * @param DeploymentStateReason $val The value to assign to the reasons
    *
    * @return DeploymentState The DeploymentState
    */
    public function setReasons($val)
    {
        $this->_propDict["reasons"] = $val;
         return $this;
    }

    /**
    * Gets the requestedValue
    * Specifies the requested state of the deployment. Supports a subset of the values for requestedDeploymentStateValue. Possible values are: none, paused, unknownFutureValue.
    *
    * @return RequestedDeploymentStateValue|null The requestedValue
    */
    public function getRequestedValue()
    {
        if (array_key_exists("requestedValue", $this->_propDict)) {
            if (is_a($this->_propDict["requestedValue"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\RequestedDeploymentStateValue") || is_null($this->_propDict["requestedValue"])) {
                return $this->_propDict["requestedValue"];
            } else {
                $this->_propDict["requestedValue"] = new RequestedDeploymentStateValue($this->_propDict["requestedValue"]);
                return $this->_propDict["requestedValue"];
            }
        }
        return null;
    }

    /**
    * Sets the requestedValue
    * Specifies the requested state of the deployment. Supports a subset of the values for requestedDeploymentStateValue. Possible values are: none, paused, unknownFutureValue.
    *
    * @param RequestedDeploymentStateValue $val The value to assign to the requestedValue
    *
    * @return DeploymentState The DeploymentState
    */
    public function setRequestedValue($val)
    {
        $this->_propDict["requestedValue"] = $val;
         return $this;
    }

    /**
    * Gets the value
    * Specifies the state of the deployment. Supports a subset of the values for deploymentStateValue. Possible values are: scheduled, offering, paused, unknownFutureValue. Read-only.
    *
    * @return DeploymentStateValue|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentStateValue") || is_null($this->_propDict["value"])) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new DeploymentStateValue($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    * Specifies the state of the deployment. Supports a subset of the values for deploymentStateValue. Possible values are: scheduled, offering, paused, unknownFutureValue. Read-only.
    *
    * @param DeploymentStateValue $val The value to assign to the value
    *
    * @return DeploymentState The DeploymentState
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
