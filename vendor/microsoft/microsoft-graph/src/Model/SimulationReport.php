<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationReport File
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
* SimulationReport class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationReport extends Entity
{

    /**
    * Gets the overview
    * Overview of an attack simulation and training campaign.
    *
    * @return SimulationReportOverview|null The overview
    */
    public function getOverview()
    {
        if (array_key_exists("overview", $this->_propDict)) {
            if (is_a($this->_propDict["overview"], "\Microsoft\Graph\Model\SimulationReportOverview") || is_null($this->_propDict["overview"])) {
                return $this->_propDict["overview"];
            } else {
                $this->_propDict["overview"] = new SimulationReportOverview($this->_propDict["overview"]);
                return $this->_propDict["overview"];
            }
        }
        return null;
    }

    /**
    * Sets the overview
    * Overview of an attack simulation and training campaign.
    *
    * @param SimulationReportOverview $val The value to assign to the overview
    *
    * @return SimulationReport The SimulationReport
    */
    public function setOverview($val)
    {
        $this->_propDict["overview"] = $val;
         return $this;
    }

    /**
    * Gets the simulationUsers
    * The tenant users and their online actions in an attack simulation and training campaign.
    *
    * @return UserSimulationDetails|null The simulationUsers
    */
    public function getSimulationUsers()
    {
        if (array_key_exists("simulationUsers", $this->_propDict)) {
            if (is_a($this->_propDict["simulationUsers"], "\Microsoft\Graph\Model\UserSimulationDetails") || is_null($this->_propDict["simulationUsers"])) {
                return $this->_propDict["simulationUsers"];
            } else {
                $this->_propDict["simulationUsers"] = new UserSimulationDetails($this->_propDict["simulationUsers"]);
                return $this->_propDict["simulationUsers"];
            }
        }
        return null;
    }

    /**
    * Sets the simulationUsers
    * The tenant users and their online actions in an attack simulation and training campaign.
    *
    * @param UserSimulationDetails $val The value to assign to the simulationUsers
    *
    * @return SimulationReport The SimulationReport
    */
    public function setSimulationUsers($val)
    {
        $this->_propDict["simulationUsers"] = $val;
         return $this;
    }
}
