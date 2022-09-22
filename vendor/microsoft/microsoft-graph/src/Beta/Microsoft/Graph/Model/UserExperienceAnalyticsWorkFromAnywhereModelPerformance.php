<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWorkFromAnywhereModelPerformance File
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
* UserExperienceAnalyticsWorkFromAnywhereModelPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWorkFromAnywhereModelPerformance extends Entity
{
    /**
    * Gets the cloudIdentityScore
    * The user experience work from anywhere's cloud identity score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The cloudIdentityScore
    */
    public function getCloudIdentityScore()
    {
        if (array_key_exists("cloudIdentityScore", $this->_propDict)) {
            return $this->_propDict["cloudIdentityScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudIdentityScore
    * The user experience work from anywhere's cloud identity score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The cloudIdentityScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setCloudIdentityScore($val)
    {
        $this->_propDict["cloudIdentityScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the cloudManagementScore
    * The user experience work from anywhere's cloud management score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The cloudManagementScore
    */
    public function getCloudManagementScore()
    {
        if (array_key_exists("cloudManagementScore", $this->_propDict)) {
            return $this->_propDict["cloudManagementScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudManagementScore
    * The user experience work from anywhere's cloud management score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The cloudManagementScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setCloudManagementScore($val)
    {
        $this->_propDict["cloudManagementScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the cloudProvisioningScore
    * The user experience work from anywhere's cloud provisioning score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The cloudProvisioningScore
    */
    public function getCloudProvisioningScore()
    {
        if (array_key_exists("cloudProvisioningScore", $this->_propDict)) {
            return $this->_propDict["cloudProvisioningScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudProvisioningScore
    * The user experience work from anywhere's cloud provisioning score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The cloudProvisioningScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setCloudProvisioningScore($val)
    {
        $this->_propDict["cloudProvisioningScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the healthStatus
    * The health state of the user experience analytics work from anywhere model. Possible values are: unknown, insufficientData, needsAttention, meetingGoals, unknownFutureValue.
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
    * The health state of the user experience analytics work from anywhere model. Possible values are: unknown, insufficientData, needsAttention, meetingGoals, unknownFutureValue.
    *
    * @param UserExperienceAnalyticsHealthState $val The healthStatus
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The user experience work from anywhere's manufacturer name of the devices.
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
    * The user experience work from anywhere's manufacturer name of the devices.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * The user experience work from anywhere's model name of the devices.
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
    * The user experience work from anywhere's model name of the devices.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the modelDeviceCount
    * The user experience work from anywhere's devices count for the model. Valid values -2147483648 to 2147483647
    *
    * @return int|null The modelDeviceCount
    */
    public function getModelDeviceCount()
    {
        if (array_key_exists("modelDeviceCount", $this->_propDict)) {
            return $this->_propDict["modelDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modelDeviceCount
    * The user experience work from anywhere's devices count for the model. Valid values -2147483648 to 2147483647
    *
    * @param int $val The modelDeviceCount
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setModelDeviceCount($val)
    {
        $this->_propDict["modelDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the windowsScore
    * The user experience work from anywhere windows score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The windowsScore
    */
    public function getWindowsScore()
    {
        if (array_key_exists("windowsScore", $this->_propDict)) {
            return $this->_propDict["windowsScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsScore
    * The user experience work from anywhere windows score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The windowsScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setWindowsScore($val)
    {
        $this->_propDict["windowsScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the workFromAnywhereScore
    * The user experience work from anywhere overall score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
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
    * The user experience work from anywhere overall score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The workFromAnywhereScore
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public function setWorkFromAnywhereScore($val)
    {
        $this->_propDict["workFromAnywhereScore"] = floatval($val);
        return $this;
    }

}
