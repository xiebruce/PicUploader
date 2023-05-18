<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationRepeatOffender File
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
* AttackSimulationRepeatOffender class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationRepeatOffender extends Entity
{

    /**
    * Gets the attackSimulationUser
    * The user in an attack simulation and training campaign.
    *
    * @return AttackSimulationUser|null The attackSimulationUser
    */
    public function getAttackSimulationUser()
    {
        if (array_key_exists("attackSimulationUser", $this->_propDict)) {
            if (is_a($this->_propDict["attackSimulationUser"], "\Microsoft\Graph\Model\AttackSimulationUser") || is_null($this->_propDict["attackSimulationUser"])) {
                return $this->_propDict["attackSimulationUser"];
            } else {
                $this->_propDict["attackSimulationUser"] = new AttackSimulationUser($this->_propDict["attackSimulationUser"]);
                return $this->_propDict["attackSimulationUser"];
            }
        }
        return null;
    }

    /**
    * Sets the attackSimulationUser
    * The user in an attack simulation and training campaign.
    *
    * @param AttackSimulationUser $val The value to assign to the attackSimulationUser
    *
    * @return AttackSimulationRepeatOffender The AttackSimulationRepeatOffender
    */
    public function setAttackSimulationUser($val)
    {
        $this->_propDict["attackSimulationUser"] = $val;
         return $this;
    }
    /**
    * Gets the repeatOffenceCount
    * Number of repeat offences of the user in attack simulation and training campaigns.
    *
    * @return int|null The repeatOffenceCount
    */
    public function getRepeatOffenceCount()
    {
        if (array_key_exists("repeatOffenceCount", $this->_propDict)) {
            return $this->_propDict["repeatOffenceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the repeatOffenceCount
    * Number of repeat offences of the user in attack simulation and training campaigns.
    *
    * @param int $val The value of the repeatOffenceCount
    *
    * @return AttackSimulationRepeatOffender
    */
    public function setRepeatOffenceCount($val)
    {
        $this->_propDict["repeatOffenceCount"] = $val;
        return $this;
    }
}
