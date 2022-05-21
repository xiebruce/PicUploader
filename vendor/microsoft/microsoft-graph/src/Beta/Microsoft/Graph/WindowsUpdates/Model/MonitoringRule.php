<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MonitoringRule File
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
* MonitoringRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MonitoringRule extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the action
    * The action triggered when the threshold for the given signal is met. Possible values are: alertError, pauseDeployment, unknownFutureValue.
    *
    * @return MonitoringAction|null The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\MonitoringAction") || is_null($this->_propDict["action"])) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new MonitoringAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * The action triggered when the threshold for the given signal is met. Possible values are: alertError, pauseDeployment, unknownFutureValue.
    *
    * @param MonitoringAction $val The value to assign to the action
    *
    * @return MonitoringRule The MonitoringRule
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }

    /**
    * Gets the signal
    * The signal to monitor. Possible values are: rollback, unknownFutureValue.
    *
    * @return MonitoringSignal|null The signal
    */
    public function getSignal()
    {
        if (array_key_exists("signal", $this->_propDict)) {
            if (is_a($this->_propDict["signal"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\MonitoringSignal") || is_null($this->_propDict["signal"])) {
                return $this->_propDict["signal"];
            } else {
                $this->_propDict["signal"] = new MonitoringSignal($this->_propDict["signal"]);
                return $this->_propDict["signal"];
            }
        }
        return null;
    }

    /**
    * Sets the signal
    * The signal to monitor. Possible values are: rollback, unknownFutureValue.
    *
    * @param MonitoringSignal $val The value to assign to the signal
    *
    * @return MonitoringRule The MonitoringRule
    */
    public function setSignal($val)
    {
        $this->_propDict["signal"] = $val;
         return $this;
    }
    /**
    * Gets the threshold
    * The threshold for a signal at which to trigger action. An integer from 1 to 100 (inclusive).
    *
    * @return int|null The threshold
    */
    public function getThreshold()
    {
        if (array_key_exists("threshold", $this->_propDict)) {
            return $this->_propDict["threshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threshold
    * The threshold for a signal at which to trigger action. An integer from 1 to 100 (inclusive).
    *
    * @param int $val The value of the threshold
    *
    * @return MonitoringRule
    */
    public function setThreshold($val)
    {
        $this->_propDict["threshold"] = $val;
        return $this;
    }
}
