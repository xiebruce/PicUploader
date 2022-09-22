<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* AttackSimulationInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationInfo extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the attackSimDateTime
    * Specifies the date time of the attack simulation.
    *
    * @return \DateTime|null The attackSimDateTime
    */
    public function getAttackSimDateTime()
    {
        if (array_key_exists("attackSimDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["attackSimDateTime"], "\DateTime") || is_null($this->_propDict["attackSimDateTime"])) {
                return $this->_propDict["attackSimDateTime"];
            } else {
                $this->_propDict["attackSimDateTime"] = new \DateTime($this->_propDict["attackSimDateTime"]);
                return $this->_propDict["attackSimDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the attackSimDateTime
    * Specifies the date time of the attack simulation.
    *
    * @param \DateTime $val The value to assign to the attackSimDateTime
    *
    * @return AttackSimulationInfo The AttackSimulationInfo
    */
    public function setAttackSimDateTime($val)
    {
        $this->_propDict["attackSimDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the attackSimDurationTime
    * Specifies the duration (in time) for the attack simulation
    *
    * @return \DateInterval|null The attackSimDurationTime
    */
    public function getAttackSimDurationTime()
    {
        if (array_key_exists("attackSimDurationTime", $this->_propDict)) {
            if (is_a($this->_propDict["attackSimDurationTime"], "\DateInterval") || is_null($this->_propDict["attackSimDurationTime"])) {
                return $this->_propDict["attackSimDurationTime"];
            } else {
                $this->_propDict["attackSimDurationTime"] = new \DateInterval($this->_propDict["attackSimDurationTime"]);
                return $this->_propDict["attackSimDurationTime"];
            }
        }
        return null;
    }

    /**
    * Sets the attackSimDurationTime
    * Specifies the duration (in time) for the attack simulation
    *
    * @param \DateInterval $val The value to assign to the attackSimDurationTime
    *
    * @return AttackSimulationInfo The AttackSimulationInfo
    */
    public function setAttackSimDurationTime($val)
    {
        $this->_propDict["attackSimDurationTime"] = $val;
         return $this;
    }
    /**
    * Gets the attackSimId
    * Specifies the activity id for the attack simulation.
    *
    * @return string|null The attackSimId
    */
    public function getAttackSimId()
    {
        if (array_key_exists("attackSimId", $this->_propDict)) {
            return $this->_propDict["attackSimId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attackSimId
    * Specifies the activity id for the attack simulation.
    *
    * @param string $val The value of the attackSimId
    *
    * @return AttackSimulationInfo
    */
    public function setAttackSimId($val)
    {
        $this->_propDict["attackSimId"] = $val;
        return $this;
    }
    /**
    * Gets the attackSimUserId
    * Specifies the user id of the user who got the attack simulation email
    *
    * @return string|null The attackSimUserId
    */
    public function getAttackSimUserId()
    {
        if (array_key_exists("attackSimUserId", $this->_propDict)) {
            return $this->_propDict["attackSimUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attackSimUserId
    * Specifies the user id of the user who got the attack simulation email
    *
    * @param string $val The value of the attackSimUserId
    *
    * @return AttackSimulationInfo
    */
    public function setAttackSimUserId($val)
    {
        $this->_propDict["attackSimUserId"] = $val;
        return $this;
    }
}
