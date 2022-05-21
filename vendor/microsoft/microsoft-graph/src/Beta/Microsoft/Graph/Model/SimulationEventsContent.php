<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationEventsContent File
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
* SimulationEventsContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationEventsContent extends Entity
{
    /**
    * Gets the compromisedRate
    * Actual percentage of users who fell for the simulated attack in an attack simulation and training campaign.
    *
    * @return float|null The compromisedRate
    */
    public function getCompromisedRate()
    {
        if (array_key_exists("compromisedRate", $this->_propDict)) {
            return $this->_propDict["compromisedRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compromisedRate
    * Actual percentage of users who fell for the simulated attack in an attack simulation and training campaign.
    *
    * @param float $val The value of the compromisedRate
    *
    * @return SimulationEventsContent
    */
    public function setCompromisedRate($val)
    {
        $this->_propDict["compromisedRate"] = $val;
        return $this;
    }

    /**
    * Gets the events
    * List of simulation events in an attack simulation and training campaign.
    *
    * @return SimulationEvent|null The events
    */
    public function getEvents()
    {
        if (array_key_exists("events", $this->_propDict)) {
            if (is_a($this->_propDict["events"], "\Beta\Microsoft\Graph\Model\SimulationEvent") || is_null($this->_propDict["events"])) {
                return $this->_propDict["events"];
            } else {
                $this->_propDict["events"] = new SimulationEvent($this->_propDict["events"]);
                return $this->_propDict["events"];
            }
        }
        return null;
    }

    /**
    * Sets the events
    * List of simulation events in an attack simulation and training campaign.
    *
    * @param SimulationEvent $val The value to assign to the events
    *
    * @return SimulationEventsContent The SimulationEventsContent
    */
    public function setEvents($val)
    {
        $this->_propDict["events"] = $val;
         return $this;
    }
}
