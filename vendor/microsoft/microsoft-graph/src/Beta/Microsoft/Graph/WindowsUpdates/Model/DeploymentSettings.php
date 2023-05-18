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
    * Gets the contentApplicability
    * Settings for governing whether content is applicable to a device.
    *
    * @return ContentApplicabilitySettings|null The contentApplicability
    */
    public function getContentApplicability()
    {
        if (array_key_exists("contentApplicability", $this->_propDict)) {
            if (is_a($this->_propDict["contentApplicability"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\ContentApplicabilitySettings") || is_null($this->_propDict["contentApplicability"])) {
                return $this->_propDict["contentApplicability"];
            } else {
                $this->_propDict["contentApplicability"] = new ContentApplicabilitySettings($this->_propDict["contentApplicability"]);
                return $this->_propDict["contentApplicability"];
            }
        }
        return null;
    }

    /**
    * Sets the contentApplicability
    * Settings for governing whether content is applicable to a device.
    *
    * @param ContentApplicabilitySettings $val The value to assign to the contentApplicability
    *
    * @return DeploymentSettings The DeploymentSettings
    */
    public function setContentApplicability($val)
    {
        $this->_propDict["contentApplicability"] = $val;
         return $this;
    }

    /**
    * Gets the expedite
    * Settings for governing whether updates should be expedited.
    *
    * @return ExpediteSettings|null The expedite
    */
    public function getExpedite()
    {
        if (array_key_exists("expedite", $this->_propDict)) {
            if (is_a($this->_propDict["expedite"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\ExpediteSettings") || is_null($this->_propDict["expedite"])) {
                return $this->_propDict["expedite"];
            } else {
                $this->_propDict["expedite"] = new ExpediteSettings($this->_propDict["expedite"]);
                return $this->_propDict["expedite"];
            }
        }
        return null;
    }

    /**
    * Sets the expedite
    * Settings for governing whether updates should be expedited.
    *
    * @param ExpediteSettings $val The value to assign to the expedite
    *
    * @return DeploymentSettings The DeploymentSettings
    */
    public function setExpedite($val)
    {
        $this->_propDict["expedite"] = $val;
         return $this;
    }

    /**
    * Gets the monitoring
    * Settings for governing conditions to monitor and automated actions to take.
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
    * Settings for governing conditions to monitor and automated actions to take.
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
    * Gets the schedule
    * Settings for governing how and when the content is rolled out.
    *
    * @return ScheduleSettings|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\ScheduleSettings") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new ScheduleSettings($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    * Settings for governing how and when the content is rolled out.
    *
    * @param ScheduleSettings $val The value to assign to the schedule
    *
    * @return DeploymentSettings The DeploymentSettings
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
         return $this;
    }

    /**
    * Gets the userExperience
    * Settings for governing end user update experience.
    *
    * @return UserExperienceSettings|null The userExperience
    */
    public function getUserExperience()
    {
        if (array_key_exists("userExperience", $this->_propDict)) {
            if (is_a($this->_propDict["userExperience"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\UserExperienceSettings") || is_null($this->_propDict["userExperience"])) {
                return $this->_propDict["userExperience"];
            } else {
                $this->_propDict["userExperience"] = new UserExperienceSettings($this->_propDict["userExperience"]);
                return $this->_propDict["userExperience"];
            }
        }
        return null;
    }

    /**
    * Sets the userExperience
    * Settings for governing end user update experience.
    *
    * @param UserExperienceSettings $val The value to assign to the userExperience
    *
    * @return DeploymentSettings The DeploymentSettings
    */
    public function setUserExperience($val)
    {
        $this->_propDict["userExperience"] = $val;
         return $this;
    }
}
