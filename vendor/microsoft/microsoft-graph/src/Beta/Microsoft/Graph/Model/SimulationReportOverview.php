<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationReportOverview File
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
* SimulationReportOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationReportOverview extends Entity
{

    /**
    * Gets the recommendedActions
    * List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.
    *
    * @return RecommendedAction|null The recommendedActions
    */
    public function getRecommendedActions()
    {
        if (array_key_exists("recommendedActions", $this->_propDict)) {
            if (is_a($this->_propDict["recommendedActions"], "\Beta\Microsoft\Graph\Model\RecommendedAction") || is_null($this->_propDict["recommendedActions"])) {
                return $this->_propDict["recommendedActions"];
            } else {
                $this->_propDict["recommendedActions"] = new RecommendedAction($this->_propDict["recommendedActions"]);
                return $this->_propDict["recommendedActions"];
            }
        }
        return null;
    }

    /**
    * Sets the recommendedActions
    * List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.
    *
    * @param RecommendedAction $val The value to assign to the recommendedActions
    *
    * @return SimulationReportOverview The SimulationReportOverview
    */
    public function setRecommendedActions($val)
    {
        $this->_propDict["recommendedActions"] = $val;
         return $this;
    }
    /**
    * Gets the resolvedTargetsCount
    * Number of valid users in the attack simulation and training campaign.
    *
    * @return int|null The resolvedTargetsCount
    */
    public function getResolvedTargetsCount()
    {
        if (array_key_exists("resolvedTargetsCount", $this->_propDict)) {
            return $this->_propDict["resolvedTargetsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resolvedTargetsCount
    * Number of valid users in the attack simulation and training campaign.
    *
    * @param int $val The value of the resolvedTargetsCount
    *
    * @return SimulationReportOverview
    */
    public function setResolvedTargetsCount($val)
    {
        $this->_propDict["resolvedTargetsCount"] = $val;
        return $this;
    }

    /**
    * Gets the simulationEventsContent
    * Summary of simulation events in the attack simulation and training campaign.
    *
    * @return SimulationEventsContent|null The simulationEventsContent
    */
    public function getSimulationEventsContent()
    {
        if (array_key_exists("simulationEventsContent", $this->_propDict)) {
            if (is_a($this->_propDict["simulationEventsContent"], "\Beta\Microsoft\Graph\Model\SimulationEventsContent") || is_null($this->_propDict["simulationEventsContent"])) {
                return $this->_propDict["simulationEventsContent"];
            } else {
                $this->_propDict["simulationEventsContent"] = new SimulationEventsContent($this->_propDict["simulationEventsContent"]);
                return $this->_propDict["simulationEventsContent"];
            }
        }
        return null;
    }

    /**
    * Sets the simulationEventsContent
    * Summary of simulation events in the attack simulation and training campaign.
    *
    * @param SimulationEventsContent $val The value to assign to the simulationEventsContent
    *
    * @return SimulationReportOverview The SimulationReportOverview
    */
    public function setSimulationEventsContent($val)
    {
        $this->_propDict["simulationEventsContent"] = $val;
         return $this;
    }

    /**
    * Gets the trainingEventsContent
    * Summary of assigned trainings in the attack simulation and training campaign.
    *
    * @return TrainingEventsContent|null The trainingEventsContent
    */
    public function getTrainingEventsContent()
    {
        if (array_key_exists("trainingEventsContent", $this->_propDict)) {
            if (is_a($this->_propDict["trainingEventsContent"], "\Beta\Microsoft\Graph\Model\TrainingEventsContent") || is_null($this->_propDict["trainingEventsContent"])) {
                return $this->_propDict["trainingEventsContent"];
            } else {
                $this->_propDict["trainingEventsContent"] = new TrainingEventsContent($this->_propDict["trainingEventsContent"]);
                return $this->_propDict["trainingEventsContent"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingEventsContent
    * Summary of assigned trainings in the attack simulation and training campaign.
    *
    * @param TrainingEventsContent $val The value to assign to the trainingEventsContent
    *
    * @return SimulationReportOverview The SimulationReportOverview
    */
    public function setTrainingEventsContent($val)
    {
        $this->_propDict["trainingEventsContent"] = $val;
         return $this;
    }
}
