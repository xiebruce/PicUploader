<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceScores File
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
* UserExperienceAnalyticsDeviceScores class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceScores extends Entity
{
    /**
    * Gets the appReliabilityScore
    * The user experience analytics device app reliability score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The appReliabilityScore
    */
    public function getAppReliabilityScore()
    {
        if (array_key_exists("appReliabilityScore", $this->_propDict)) {
            return $this->_propDict["appReliabilityScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appReliabilityScore
    * The user experience analytics device app reliability score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The appReliabilityScore
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setAppReliabilityScore($val)
    {
        $this->_propDict["appReliabilityScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the batteryHealthScore
    * The user experience analytics device battery health score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The batteryHealthScore
    */
    public function getBatteryHealthScore()
    {
        if (array_key_exists("batteryHealthScore", $this->_propDict)) {
            return $this->_propDict["batteryHealthScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryHealthScore
    * The user experience analytics device battery health score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The batteryHealthScore
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setBatteryHealthScore($val)
    {
        $this->_propDict["batteryHealthScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the deviceName
    * The user experience analytics device name.
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * The user experience analytics device name.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the endpointAnalyticsScore
    * The user experience analytics device score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The endpointAnalyticsScore
    */
    public function getEndpointAnalyticsScore()
    {
        if (array_key_exists("endpointAnalyticsScore", $this->_propDict)) {
            return $this->_propDict["endpointAnalyticsScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endpointAnalyticsScore
    * The user experience analytics device score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The endpointAnalyticsScore
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setEndpointAnalyticsScore($val)
    {
        $this->_propDict["endpointAnalyticsScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the healthStatus
    * The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals, unknownFutureValue.
    *
    * @return UserExperienceAnalyticsHealthState|null The healthStatus
    */
    public function getHealthStatus()
    {
        if (array_key_exists("healthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthStatus"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsHealthState") || is_null($this->_propDict["healthStatus"])) {
                return $this->_propDict["healthStatus"];
            } else {
                $this->_propDict["healthStatus"] = new UserExperienceAnalyticsHealthState($this->_propDict["healthStatus"]);
                return $this->_propDict["healthStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the healthStatus
    * The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals, unknownFutureValue.
    *
    * @param UserExperienceAnalyticsHealthState $val The healthStatus
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The user experience analytics device manufacturer.
    *
    * @return string|null The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * The user experience analytics device manufacturer.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * The user experience analytics device model.
    *
    * @return string|null The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }

    /**
    * Sets the model
    * The user experience analytics device model.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the startupPerformanceScore
    * The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The startupPerformanceScore
    */
    public function getStartupPerformanceScore()
    {
        if (array_key_exists("startupPerformanceScore", $this->_propDict)) {
            return $this->_propDict["startupPerformanceScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startupPerformanceScore
    * The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The startupPerformanceScore
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setStartupPerformanceScore($val)
    {
        $this->_propDict["startupPerformanceScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the workFromAnywhereScore
    * The user experience analytics device work From anywhere score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The workFromAnywhereScore
    */
    public function getWorkFromAnywhereScore()
    {
        if (array_key_exists("workFromAnywhereScore", $this->_propDict)) {
            return $this->_propDict["workFromAnywhereScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workFromAnywhereScore
    * The user experience analytics device work From anywhere score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The workFromAnywhereScore
    *
    * @return UserExperienceAnalyticsDeviceScores
    */
    public function setWorkFromAnywhereScore($val)
    {
        $this->_propDict["workFromAnywhereScore"] = floatval($val);
        return $this;
    }

}
