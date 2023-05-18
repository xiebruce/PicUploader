<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScheduleSettings File
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
* ScheduleSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ScheduleSettings extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the gradualRollout
    * Settings for governing how to rollout content to devices. One of: microsoft.graph.windowsUpdates.dateDrivenRolloutSettings, microsoft.graph.windowsUpdates.durationDrivenRolloutSettings, or microsoft.graph.windowsUpdates.rateDrivenRolloutSettings.
    *
    * @return GradualRolloutSettings|null The gradualRollout
    */
    public function getGradualRollout()
    {
        if (array_key_exists("gradualRollout", $this->_propDict)) {
            if (is_a($this->_propDict["gradualRollout"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\GradualRolloutSettings") || is_null($this->_propDict["gradualRollout"])) {
                return $this->_propDict["gradualRollout"];
            } else {
                $this->_propDict["gradualRollout"] = new GradualRolloutSettings($this->_propDict["gradualRollout"]);
                return $this->_propDict["gradualRollout"];
            }
        }
        return null;
    }

    /**
    * Sets the gradualRollout
    * Settings for governing how to rollout content to devices. One of: microsoft.graph.windowsUpdates.dateDrivenRolloutSettings, microsoft.graph.windowsUpdates.durationDrivenRolloutSettings, or microsoft.graph.windowsUpdates.rateDrivenRolloutSettings.
    *
    * @param GradualRolloutSettings $val The value to assign to the gradualRollout
    *
    * @return ScheduleSettings The ScheduleSettings
    */
    public function setGradualRollout($val)
    {
        $this->_propDict["gradualRollout"] = $val;
         return $this;
    }

    /**
    * Gets the startDateTime
    * The date on which devices in the deployment start receiving the update. When not set, the deployment starts as soon as devices are assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The date on which devices in the deployment start receiving the update. When not set, the deployment starts as soon as devices are assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return ScheduleSettings The ScheduleSettings
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
}
