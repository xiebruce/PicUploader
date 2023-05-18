<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DurationDrivenRolloutSettings File
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
* DurationDrivenRolloutSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DurationDrivenRolloutSettings extends GradualRolloutSettings
{

    /**
    * Gets the durationUntilDeploymentEnd
    * The target duration of the rollout. Given durationBetweenOffers and durationUntilDeploymentEnd, the system will automatically calculate how many devices are in each offering.
    *
    * @return \DateInterval|null The durationUntilDeploymentEnd
    */
    public function getDurationUntilDeploymentEnd()
    {
        if (array_key_exists("durationUntilDeploymentEnd", $this->_propDict)) {
            if (is_a($this->_propDict["durationUntilDeploymentEnd"], "\DateInterval") || is_null($this->_propDict["durationUntilDeploymentEnd"])) {
                return $this->_propDict["durationUntilDeploymentEnd"];
            } else {
                $this->_propDict["durationUntilDeploymentEnd"] = new \DateInterval($this->_propDict["durationUntilDeploymentEnd"]);
                return $this->_propDict["durationUntilDeploymentEnd"];
            }
        }
        return null;
    }

    /**
    * Sets the durationUntilDeploymentEnd
    * The target duration of the rollout. Given durationBetweenOffers and durationUntilDeploymentEnd, the system will automatically calculate how many devices are in each offering.
    *
    * @param \DateInterval $val The value to assign to the durationUntilDeploymentEnd
    *
    * @return DurationDrivenRolloutSettings The DurationDrivenRolloutSettings
    */
    public function setDurationUntilDeploymentEnd($val)
    {
        $this->_propDict["durationUntilDeploymentEnd"] = $val;
         return $this;
    }
}
