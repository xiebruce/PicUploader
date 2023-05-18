<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Security File
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
* Security class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Security extends Entity
{
    /**
    * Gets the cases
    *
    * @return \Microsoft\Graph\SecurityNamespace\Model\CasesRoot|null The cases
    */
    public function getCases()
    {
        if (array_key_exists("cases", $this->_propDict)) {
            if (is_a($this->_propDict["cases"], "\Microsoft\Graph\SecurityNamespace\Model\CasesRoot") || is_null($this->_propDict["cases"])) {
                return $this->_propDict["cases"];
            } else {
                $this->_propDict["cases"] = new \Microsoft\Graph\SecurityNamespace\Model\CasesRoot($this->_propDict["cases"]);
                return $this->_propDict["cases"];
            }
        }
        return null;
    }

    /**
    * Sets the cases
    *
    * @param \Microsoft\Graph\SecurityNamespace\Model\CasesRoot $val The cases
    *
    * @return Security
    */
    public function setCases($val)
    {
        $this->_propDict["cases"] = $val;
        return $this;
    }


     /**
     * Gets the alertsV2
    * A collection of alerts in Microsoft 365 Defender.
     *
     * @return array|null The alertsV2
     */
    public function getAlertsV2()
    {
        if (array_key_exists("alertsV2", $this->_propDict)) {
           return $this->_propDict["alertsV2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertsV2
    * A collection of alerts in Microsoft 365 Defender.
    *
    * @param \Microsoft\Graph\SecurityNamespace\Model\Alert[] $val The alertsV2
    *
    * @return Security
    */
    public function setAlertsV2($val)
    {
        $this->_propDict["alertsV2"] = $val;
        return $this;
    }


     /**
     * Gets the incidents
    * A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack.
     *
     * @return array|null The incidents
     */
    public function getIncidents()
    {
        if (array_key_exists("incidents", $this->_propDict)) {
           return $this->_propDict["incidents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incidents
    * A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack.
    *
    * @param \Microsoft\Graph\SecurityNamespace\Model\Incident[] $val The incidents
    *
    * @return Security
    */
    public function setIncidents($val)
    {
        $this->_propDict["incidents"] = $val;
        return $this;
    }

    /**
    * Gets the attackSimulation
    *
    * @return AttackSimulationRoot|null The attackSimulation
    */
    public function getAttackSimulation()
    {
        if (array_key_exists("attackSimulation", $this->_propDict)) {
            if (is_a($this->_propDict["attackSimulation"], "\Microsoft\Graph\Model\AttackSimulationRoot") || is_null($this->_propDict["attackSimulation"])) {
                return $this->_propDict["attackSimulation"];
            } else {
                $this->_propDict["attackSimulation"] = new AttackSimulationRoot($this->_propDict["attackSimulation"]);
                return $this->_propDict["attackSimulation"];
            }
        }
        return null;
    }

    /**
    * Sets the attackSimulation
    *
    * @param AttackSimulationRoot $val The attackSimulation
    *
    * @return Security
    */
    public function setAttackSimulation($val)
    {
        $this->_propDict["attackSimulation"] = $val;
        return $this;
    }

    /**
    * Gets the triggers
    *
    * @return \Microsoft\Graph\SecurityNamespace\Model\TriggersRoot|null The triggers
    */
    public function getTriggers()
    {
        if (array_key_exists("triggers", $this->_propDict)) {
            if (is_a($this->_propDict["triggers"], "\Microsoft\Graph\SecurityNamespace\Model\TriggersRoot") || is_null($this->_propDict["triggers"])) {
                return $this->_propDict["triggers"];
            } else {
                $this->_propDict["triggers"] = new \Microsoft\Graph\SecurityNamespace\Model\TriggersRoot($this->_propDict["triggers"]);
                return $this->_propDict["triggers"];
            }
        }
        return null;
    }

    /**
    * Sets the triggers
    *
    * @param \Microsoft\Graph\SecurityNamespace\Model\TriggersRoot $val The triggers
    *
    * @return Security
    */
    public function setTriggers($val)
    {
        $this->_propDict["triggers"] = $val;
        return $this;
    }

    /**
    * Gets the triggerTypes
    *
    * @return \Microsoft\Graph\SecurityNamespace\Model\TriggerTypesRoot|null The triggerTypes
    */
    public function getTriggerTypes()
    {
        if (array_key_exists("triggerTypes", $this->_propDict)) {
            if (is_a($this->_propDict["triggerTypes"], "\Microsoft\Graph\SecurityNamespace\Model\TriggerTypesRoot") || is_null($this->_propDict["triggerTypes"])) {
                return $this->_propDict["triggerTypes"];
            } else {
                $this->_propDict["triggerTypes"] = new \Microsoft\Graph\SecurityNamespace\Model\TriggerTypesRoot($this->_propDict["triggerTypes"]);
                return $this->_propDict["triggerTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the triggerTypes
    *
    * @param \Microsoft\Graph\SecurityNamespace\Model\TriggerTypesRoot $val The triggerTypes
    *
    * @return Security
    */
    public function setTriggerTypes($val)
    {
        $this->_propDict["triggerTypes"] = $val;
        return $this;
    }


     /**
     * Gets the alerts
     *
     * @return array|null The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists("alerts", $this->_propDict)) {
           return $this->_propDict["alerts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alerts
    *
    * @param Alert[] $val The alerts
    *
    * @return Security
    */
    public function setAlerts($val)
    {
        $this->_propDict["alerts"] = $val;
        return $this;
    }


     /**
     * Gets the secureScoreControlProfiles
     *
     * @return array|null The secureScoreControlProfiles
     */
    public function getSecureScoreControlProfiles()
    {
        if (array_key_exists("secureScoreControlProfiles", $this->_propDict)) {
           return $this->_propDict["secureScoreControlProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureScoreControlProfiles
    *
    * @param SecureScoreControlProfile[] $val The secureScoreControlProfiles
    *
    * @return Security
    */
    public function setSecureScoreControlProfiles($val)
    {
        $this->_propDict["secureScoreControlProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the secureScores
     *
     * @return array|null The secureScores
     */
    public function getSecureScores()
    {
        if (array_key_exists("secureScores", $this->_propDict)) {
           return $this->_propDict["secureScores"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureScores
    *
    * @param SecureScore[] $val The secureScores
    *
    * @return Security
    */
    public function setSecureScores($val)
    {
        $this->_propDict["secureScores"] = $val;
        return $this;
    }

}
