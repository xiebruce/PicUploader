<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SequentialActivationRenewalsAlertConfiguration File
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
* SequentialActivationRenewalsAlertConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SequentialActivationRenewalsAlertConfiguration extends UnifiedRoleManagementAlertConfiguration
{
    /**
    * Gets the sequentialActivationCounterThreshold
    *
    * @return int|null The sequentialActivationCounterThreshold
    */
    public function getSequentialActivationCounterThreshold()
    {
        if (array_key_exists("sequentialActivationCounterThreshold", $this->_propDict)) {
            return $this->_propDict["sequentialActivationCounterThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sequentialActivationCounterThreshold
    *
    * @param int $val The sequentialActivationCounterThreshold
    *
    * @return SequentialActivationRenewalsAlertConfiguration
    */
    public function setSequentialActivationCounterThreshold($val)
    {
        $this->_propDict["sequentialActivationCounterThreshold"] = intval($val);
        return $this;
    }

    /**
    * Gets the timeIntervalBetweenActivations
    *
    * @return \DateInterval|null The timeIntervalBetweenActivations
    */
    public function getTimeIntervalBetweenActivations()
    {
        if (array_key_exists("timeIntervalBetweenActivations", $this->_propDict)) {
            if (is_a($this->_propDict["timeIntervalBetweenActivations"], "\DateInterval") || is_null($this->_propDict["timeIntervalBetweenActivations"])) {
                return $this->_propDict["timeIntervalBetweenActivations"];
            } else {
                $this->_propDict["timeIntervalBetweenActivations"] = new \DateInterval($this->_propDict["timeIntervalBetweenActivations"]);
                return $this->_propDict["timeIntervalBetweenActivations"];
            }
        }
        return null;
    }

    /**
    * Sets the timeIntervalBetweenActivations
    *
    * @param \DateInterval $val The timeIntervalBetweenActivations
    *
    * @return SequentialActivationRenewalsAlertConfiguration
    */
    public function setTimeIntervalBetweenActivations($val)
    {
        $this->_propDict["timeIntervalBetweenActivations"] = $val;
        return $this;
    }

}
