<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationAutomationRun File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* SimulationAutomationRun class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationAutomationRun extends Entity
{
    /**
    * Gets the endDateTime
    * Date and time when the run ends in an attack simulation automation.
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
    * Date and time when the run ends in an attack simulation automation.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return SimulationAutomationRun
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the simulationId
    * Unique identifier for the attack simulation campaign initiated in the attack simulation automation run.
    *
    * @return string|null The simulationId
    */
    public function getSimulationId()
    {
        if (array_key_exists("simulationId", $this->_propDict)) {
            return $this->_propDict["simulationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the simulationId
    * Unique identifier for the attack simulation campaign initiated in the attack simulation automation run.
    *
    * @param string $val The simulationId
    *
    * @return SimulationAutomationRun
    */
    public function setSimulationId($val)
    {
        $this->_propDict["simulationId"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * Date and time when the run starts in an attack simulation automation.
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
    * Date and time when the run starts in an attack simulation automation.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return SimulationAutomationRun
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Status of the attack simulation automation run. The possible values are: unknown, running, succeeded, failed, skipped, unknownFutureValue.
    *
    * @return SimulationAutomationRunStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\SimulationAutomationRunStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SimulationAutomationRunStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Status of the attack simulation automation run. The possible values are: unknown, running, succeeded, failed, skipped, unknownFutureValue.
    *
    * @param SimulationAutomationRunStatus $val The status
    *
    * @return SimulationAutomationRun
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
