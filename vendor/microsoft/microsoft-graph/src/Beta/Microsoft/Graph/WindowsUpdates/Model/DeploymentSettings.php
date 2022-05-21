<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeploymentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* DeploymentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeploymentSettings extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the monitoring
    * Settings governing conditions to monitor and automated actions to take.
    *
    * @return MonitoringSettings|null The monitoring
    */
    public function getMonitoring()
    {
        if (array_key_exists("monitoring", $this->_propDict)) {
            if (is_a($this->_propDict["monitoring"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\MonitoringSettings") || is_null($this->_propDict["monitoring"])) {
                return $this->_propDict["monitoring"];
            } else {
                $this->_propDict["monitoring"] = new MonitoringSettings($this->_propDict["monitoring"]);
                return $this->_propDict["monitoring"];
            }
        }
        return null;
    }

    /**
    * Sets the monitoring
    * Settings governing conditions to monitor and automated actions to take.
    *
    * @param MonitoringSettings $val The value to assign to the monitoring
    *
    * @return DeploymentSettings The DeploymentSettings
    */
    public function setMonitoring($val)
    {
        $this->_propDict["monitoring"] = $val;
         return $this;
    }

    /**
    * Gets the rollout
    * Settings governing how the content is rolled out.
    *
    * @return RolloutSettings|null The rollout
    */
    public function getRollout()
    {
        if (array_key_exists("rollout", $this->_propDict)) {
            if (is_a($this->_propDict["rollout"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\RolloutSettings") || is_null($this->_propDict["rollout"])) {
                return $this->_propDict["rollout"];
            } else {
                $this->_propDict["rollout"] = new RolloutSettings($this->_propDict["rollout"]);
                return $this->_propDict["rollout"];
            }
        }
        return null;
    }

    /**
    * Sets the rollout
    * Settings governing how the content is rolled out.
    *
    * @param RolloutSettings $val The value to assign to the rollout
    *
    * @return DeploymentSettings The DeploymentSettings
    */
    public function setRollout($val)
    {
        $this->_propDict["rollout"] = $val;
         return $this;
    }

    /**
    * Gets the safeguard
    * Settings governing safeguard holds on offering content.
    *
    * @return SafeguardSettings|null The safeguard
    */
    public function getSafeguard()
    {
        if (array_key_exists("safeguard", $this->_propDict)) {
            if (is_a($this->_propDict["safeguard"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\SafeguardSettings") || is_null($this->_propDict["safeguard"])) {
                return $this->_propDict["safeguard"];
            } else {
                $this->_propDict["safeguard"] = new SafeguardSettings($this->_propDict["safeguard"]);
                return $this->_propDict["safeguard"];
            }
        }
        return null;
    }

    /**
    * Sets the safeguard
    * Settings governing safeguard holds on offering content.
    *
    * @param SafeguardSettings $val The value to assign to the safeguard
    *
    * @return DeploymentSettings The DeploymentSettings
    */
    public function setSafeguard($val)
    {
        $this->_propDict["safeguard"] = $val;
         return $this;
    }
}
