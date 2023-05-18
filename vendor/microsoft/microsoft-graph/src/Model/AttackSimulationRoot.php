<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationRoot File
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
* AttackSimulationRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationRoot extends Entity
{

     /**
     * Gets the simulationAutomations
    * Represents simulation automation created to run on a tenant.
     *
     * @return array|null The simulationAutomations
     */
    public function getSimulationAutomations()
    {
        if (array_key_exists("simulationAutomations", $this->_propDict)) {
           return $this->_propDict["simulationAutomations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the simulationAutomations
    * Represents simulation automation created to run on a tenant.
    *
    * @param SimulationAutomation[] $val The simulationAutomations
    *
    * @return AttackSimulationRoot
    */
    public function setSimulationAutomations($val)
    {
        $this->_propDict["simulationAutomations"] = $val;
        return $this;
    }


     /**
     * Gets the simulations
    * Represents an attack simulation training campaign in a tenant.
     *
     * @return array|null The simulations
     */
    public function getSimulations()
    {
        if (array_key_exists("simulations", $this->_propDict)) {
           return $this->_propDict["simulations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the simulations
    * Represents an attack simulation training campaign in a tenant.
    *
    * @param Simulation[] $val The simulations
    *
    * @return AttackSimulationRoot
    */
    public function setSimulations($val)
    {
        $this->_propDict["simulations"] = $val;
        return $this;
    }

}
