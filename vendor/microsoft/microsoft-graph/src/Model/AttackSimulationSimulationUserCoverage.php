<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationSimulationUserCoverage File
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
* AttackSimulationSimulationUserCoverage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationSimulationUserCoverage extends Entity
{

    /**
    * Gets the attackSimulationUser
    * User in an attack simulation and training campaign.
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
    * User in an attack simulation and training campaign.
    *
    * @param AttackSimulationUser $val The value to assign to the attackSimulationUser
    *
    * @return AttackSimulationSimulationUserCoverage The AttackSimulationSimulationUserCoverage
    */
    public function setAttackSimulationUser($val)
    {
        $this->_propDict["attackSimulationUser"] = $val;
         return $this;
    }
    /**
    * Gets the clickCount
    * Number of link clicks in the received payloads by the user in attack simulation and training campaigns.
    *
    * @return int|null The clickCount
    */
    public function getClickCount()
    {
        if (array_key_exists("clickCount", $this->_propDict)) {
            return $this->_propDict["clickCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clickCount
    * Number of link clicks in the received payloads by the user in attack simulation and training campaigns.
    *
    * @param int $val The value of the clickCount
    *
    * @return AttackSimulationSimulationUserCoverage
    */
    public function setClickCount($val)
    {
        $this->_propDict["clickCount"] = $val;
        return $this;
    }
    /**
    * Gets the compromisedCount
    * Number of compromising actions by the user in attack simulation and training campaigns.
    *
    * @return int|null The compromisedCount
    */
    public function getCompromisedCount()
    {
        if (array_key_exists("compromisedCount", $this->_propDict)) {
            return $this->_propDict["compromisedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compromisedCount
    * Number of compromising actions by the user in attack simulation and training campaigns.
    *
    * @param int $val The value of the compromisedCount
    *
    * @return AttackSimulationSimulationUserCoverage
    */
    public function setCompromisedCount($val)
    {
        $this->_propDict["compromisedCount"] = $val;
        return $this;
    }

    /**
    * Gets the latestSimulationDateTime
    * Date and time of the latest attack simulation and training campaign that the user was included in.
    *
    * @return \DateTime|null The latestSimulationDateTime
    */
    public function getLatestSimulationDateTime()
    {
        if (array_key_exists("latestSimulationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["latestSimulationDateTime"], "\DateTime") || is_null($this->_propDict["latestSimulationDateTime"])) {
                return $this->_propDict["latestSimulationDateTime"];
            } else {
                $this->_propDict["latestSimulationDateTime"] = new \DateTime($this->_propDict["latestSimulationDateTime"]);
                return $this->_propDict["latestSimulationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the latestSimulationDateTime
    * Date and time of the latest attack simulation and training campaign that the user was included in.
    *
    * @param \DateTime $val The value to assign to the latestSimulationDateTime
    *
    * @return AttackSimulationSimulationUserCoverage The AttackSimulationSimulationUserCoverage
    */
    public function setLatestSimulationDateTime($val)
    {
        $this->_propDict["latestSimulationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the simulationCount
    * Number of attack simulation and training campaigns that the user was included in.
    *
    * @return int|null The simulationCount
    */
    public function getSimulationCount()
    {
        if (array_key_exists("simulationCount", $this->_propDict)) {
            return $this->_propDict["simulationCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the simulationCount
    * Number of attack simulation and training campaigns that the user was included in.
    *
    * @param int $val The value of the simulationCount
    *
    * @return AttackSimulationSimulationUserCoverage
    */
    public function setSimulationCount($val)
    {
        $this->_propDict["simulationCount"] = $val;
        return $this;
    }
}
