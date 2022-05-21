<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkloadStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* WorkloadStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkloadStatus extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The display name for the workload. Required. Read-only.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name for the workload. Required. Read-only.
    *
    * @param string $val The value of the displayName
    *
    * @return WorkloadStatus
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the offboardedDateTime
    * The date and time the workload was offboarded. Optional. Read-only.
    *
    * @return \DateTime|null The offboardedDateTime
    */
    public function getOffboardedDateTime()
    {
        if (array_key_exists("offboardedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["offboardedDateTime"], "\DateTime") || is_null($this->_propDict["offboardedDateTime"])) {
                return $this->_propDict["offboardedDateTime"];
            } else {
                $this->_propDict["offboardedDateTime"] = new \DateTime($this->_propDict["offboardedDateTime"]);
                return $this->_propDict["offboardedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the offboardedDateTime
    * The date and time the workload was offboarded. Optional. Read-only.
    *
    * @param \DateTime $val The value to assign to the offboardedDateTime
    *
    * @return WorkloadStatus The WorkloadStatus
    */
    public function setOffboardedDateTime($val)
    {
        $this->_propDict["offboardedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the onboardedDateTime
    * The date and time the workload was onboarded. Optional. Read-only.
    *
    * @return \DateTime|null The onboardedDateTime
    */
    public function getOnboardedDateTime()
    {
        if (array_key_exists("onboardedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onboardedDateTime"], "\DateTime") || is_null($this->_propDict["onboardedDateTime"])) {
                return $this->_propDict["onboardedDateTime"];
            } else {
                $this->_propDict["onboardedDateTime"] = new \DateTime($this->_propDict["onboardedDateTime"]);
                return $this->_propDict["onboardedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the onboardedDateTime
    * The date and time the workload was onboarded. Optional. Read-only.
    *
    * @param \DateTime $val The value to assign to the onboardedDateTime
    *
    * @return WorkloadStatus The WorkloadStatus
    */
    public function setOnboardedDateTime($val)
    {
        $this->_propDict["onboardedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the onboardingStatus
    * The onboarding status for the workload. Possible values are: notOnboarded, onboarded, unknownFutureValue. Optional. Read-only.
    *
    * @return WorkloadOnboardingStatus|null The onboardingStatus
    */
    public function getOnboardingStatus()
    {
        if (array_key_exists("onboardingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["onboardingStatus"], "\Beta\Microsoft\Graph\ManagedTenants\Model\WorkloadOnboardingStatus") || is_null($this->_propDict["onboardingStatus"])) {
                return $this->_propDict["onboardingStatus"];
            } else {
                $this->_propDict["onboardingStatus"] = new WorkloadOnboardingStatus($this->_propDict["onboardingStatus"]);
                return $this->_propDict["onboardingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the onboardingStatus
    * The onboarding status for the workload. Possible values are: notOnboarded, onboarded, unknownFutureValue. Optional. Read-only.
    *
    * @param WorkloadOnboardingStatus $val The value to assign to the onboardingStatus
    *
    * @return WorkloadStatus The WorkloadStatus
    */
    public function setOnboardingStatus($val)
    {
        $this->_propDict["onboardingStatus"] = $val;
         return $this;
    }
}
