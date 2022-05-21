<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingEventsContent File
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
* TrainingEventsContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingEventsContent extends Entity
{

    /**
    * Gets the assignedTrainingsInfos
    * List of assigned trainings and their information in an attack simulation and training campaign.
    *
    * @return AssignedTrainingInfo|null The assignedTrainingsInfos
    */
    public function getAssignedTrainingsInfos()
    {
        if (array_key_exists("assignedTrainingsInfos", $this->_propDict)) {
            if (is_a($this->_propDict["assignedTrainingsInfos"], "\Beta\Microsoft\Graph\Model\AssignedTrainingInfo") || is_null($this->_propDict["assignedTrainingsInfos"])) {
                return $this->_propDict["assignedTrainingsInfos"];
            } else {
                $this->_propDict["assignedTrainingsInfos"] = new AssignedTrainingInfo($this->_propDict["assignedTrainingsInfos"]);
                return $this->_propDict["assignedTrainingsInfos"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedTrainingsInfos
    * List of assigned trainings and their information in an attack simulation and training campaign.
    *
    * @param AssignedTrainingInfo $val The value to assign to the assignedTrainingsInfos
    *
    * @return TrainingEventsContent The TrainingEventsContent
    */
    public function setAssignedTrainingsInfos($val)
    {
        $this->_propDict["assignedTrainingsInfos"] = $val;
         return $this;
    }
    /**
    * Gets the trainingsAssignedUserCount
    * Number of users who were assigned trainings in an attack simulation and training campaign.
    *
    * @return int|null The trainingsAssignedUserCount
    */
    public function getTrainingsAssignedUserCount()
    {
        if (array_key_exists("trainingsAssignedUserCount", $this->_propDict)) {
            return $this->_propDict["trainingsAssignedUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trainingsAssignedUserCount
    * Number of users who were assigned trainings in an attack simulation and training campaign.
    *
    * @param int $val The value of the trainingsAssignedUserCount
    *
    * @return TrainingEventsContent
    */
    public function setTrainingsAssignedUserCount($val)
    {
        $this->_propDict["trainingsAssignedUserCount"] = $val;
        return $this;
    }
}
