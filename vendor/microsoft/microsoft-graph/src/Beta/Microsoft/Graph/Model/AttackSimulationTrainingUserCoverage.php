<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationTrainingUserCoverage File
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
* AttackSimulationTrainingUserCoverage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationTrainingUserCoverage extends Entity
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
            if (is_a($this->_propDict["attackSimulationUser"], "\Beta\Microsoft\Graph\Model\AttackSimulationUser") || is_null($this->_propDict["attackSimulationUser"])) {
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
    * @return AttackSimulationTrainingUserCoverage The AttackSimulationTrainingUserCoverage
    */
    public function setAttackSimulationUser($val)
    {
        $this->_propDict["attackSimulationUser"] = $val;
         return $this;
    }

    /**
    * Gets the userTrainings
    * List of assigned trainings and their statuses for the user.
    *
    * @return UserTrainingStatusInfo|null The userTrainings
    */
    public function getUserTrainings()
    {
        if (array_key_exists("userTrainings", $this->_propDict)) {
            if (is_a($this->_propDict["userTrainings"], "\Beta\Microsoft\Graph\Model\UserTrainingStatusInfo") || is_null($this->_propDict["userTrainings"])) {
                return $this->_propDict["userTrainings"];
            } else {
                $this->_propDict["userTrainings"] = new UserTrainingStatusInfo($this->_propDict["userTrainings"]);
                return $this->_propDict["userTrainings"];
            }
        }
        return null;
    }

    /**
    * Sets the userTrainings
    * List of assigned trainings and their statuses for the user.
    *
    * @param UserTrainingStatusInfo $val The value to assign to the userTrainings
    *
    * @return AttackSimulationTrainingUserCoverage The AttackSimulationTrainingUserCoverage
    */
    public function setUserTrainings($val)
    {
        $this->_propDict["userTrainings"] = $val;
         return $this;
    }
}
