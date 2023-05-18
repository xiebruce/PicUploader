<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* DeviceEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEvidence extends AlertEvidence
{
    /**
    * Gets the azureAdDeviceId
    * A unique identifier assigned to a device by Azure Active Directory (Azure AD) when device is Azure AD-joined.
    *
    * @return string|null The azureAdDeviceId
    */
    public function getAzureAdDeviceId()
    {
        if (array_key_exists("azureAdDeviceId", $this->_propDict)) {
            return $this->_propDict["azureAdDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureAdDeviceId
    * A unique identifier assigned to a device by Azure Active Directory (Azure AD) when device is Azure AD-joined.
    *
    * @param string $val The value of the azureAdDeviceId
    *
    * @return DeviceEvidence
    */
    public function setAzureAdDeviceId($val)
    {
        $this->_propDict["azureAdDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the defenderAvStatus
    * State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
    *
    * @return DefenderAvStatus|null The defenderAvStatus
    */
    public function getDefenderAvStatus()
    {
        if (array_key_exists("defenderAvStatus", $this->_propDict)) {
            if (is_a($this->_propDict["defenderAvStatus"], "\Microsoft\Graph\SecurityNamespace\Model\DefenderAvStatus") || is_null($this->_propDict["defenderAvStatus"])) {
                return $this->_propDict["defenderAvStatus"];
            } else {
                $this->_propDict["defenderAvStatus"] = new DefenderAvStatus($this->_propDict["defenderAvStatus"]);
                return $this->_propDict["defenderAvStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the defenderAvStatus
    * State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
    *
    * @param DefenderAvStatus $val The value to assign to the defenderAvStatus
    *
    * @return DeviceEvidence The DeviceEvidence
    */
    public function setDefenderAvStatus($val)
    {
        $this->_propDict["defenderAvStatus"] = $val;
         return $this;
    }
    /**
    * Gets the deviceDnsName
    * The fully qualified domain name (FQDN) for the device.
    *
    * @return string|null The deviceDnsName
    */
    public function getDeviceDnsName()
    {
        if (array_key_exists("deviceDnsName", $this->_propDict)) {
            return $this->_propDict["deviceDnsName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceDnsName
    * The fully qualified domain name (FQDN) for the device.
    *
    * @param string $val The value of the deviceDnsName
    *
    * @return DeviceEvidence
    */
    public function setDeviceDnsName($val)
    {
        $this->_propDict["deviceDnsName"] = $val;
        return $this;
    }

    /**
    * Gets the firstSeenDateTime
    * The date and time when the device was first seen.
    *
    * @return \DateTime|null The firstSeenDateTime
    */
    public function getFirstSeenDateTime()
    {
        if (array_key_exists("firstSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstSeenDateTime"], "\DateTime") || is_null($this->_propDict["firstSeenDateTime"])) {
                return $this->_propDict["firstSeenDateTime"];
            } else {
                $this->_propDict["firstSeenDateTime"] = new \DateTime($this->_propDict["firstSeenDateTime"]);
                return $this->_propDict["firstSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstSeenDateTime
    * The date and time when the device was first seen.
    *
    * @param \DateTime $val The value to assign to the firstSeenDateTime
    *
    * @return DeviceEvidence The DeviceEvidence
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the healthStatus
    * The health state of the device.The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
    *
    * @return DeviceHealthStatus|null The healthStatus
    */
    public function getHealthStatus()
    {
        if (array_key_exists("healthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthStatus"], "\Microsoft\Graph\SecurityNamespace\Model\DeviceHealthStatus") || is_null($this->_propDict["healthStatus"])) {
                return $this->_propDict["healthStatus"];
            } else {
                $this->_propDict["healthStatus"] = new DeviceHealthStatus($this->_propDict["healthStatus"]);
                return $this->_propDict["healthStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the healthStatus
    * The health state of the device.The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
    *
    * @param DeviceHealthStatus $val The value to assign to the healthStatus
    *
    * @return DeviceEvidence The DeviceEvidence
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
         return $this;
    }

    /**
    * Gets the loggedOnUsers
    * Users that were logged on the machine during the time of the alert.
    *
    * @return LoggedOnUser|null The loggedOnUsers
    */
    public function getLoggedOnUsers()
    {
        if (array_key_exists("loggedOnUsers", $this->_propDict)) {
            if (is_a($this->_propDict["loggedOnUsers"], "\Microsoft\Graph\SecurityNamespace\Model\LoggedOnUser") || is_null($this->_propDict["loggedOnUsers"])) {
                return $this->_propDict["loggedOnUsers"];
            } else {
                $this->_propDict["loggedOnUsers"] = new LoggedOnUser($this->_propDict["loggedOnUsers"]);
                return $this->_propDict["loggedOnUsers"];
            }
        }
        return null;
    }

    /**
    * Sets the loggedOnUsers
    * Users that were logged on the machine during the time of the alert.
    *
    * @param LoggedOnUser $val The value to assign to the loggedOnUsers
    *
    * @return DeviceEvidence The DeviceEvidence
    */
    public function setLoggedOnUsers($val)
    {
        $this->_propDict["loggedOnUsers"] = $val;
         return $this;
    }
    /**
    * Gets the mdeDeviceId
    * A unique identifier assigned to a device by Microsoft Defender for Endpoint.
    *
    * @return string|null The mdeDeviceId
    */
    public function getMdeDeviceId()
    {
        if (array_key_exists("mdeDeviceId", $this->_propDict)) {
            return $this->_propDict["mdeDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mdeDeviceId
    * A unique identifier assigned to a device by Microsoft Defender for Endpoint.
    *
    * @param string $val The value of the mdeDeviceId
    *
    * @return DeviceEvidence
    */
    public function setMdeDeviceId($val)
    {
        $this->_propDict["mdeDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the onboardingStatus
    * The status of the machine onboarding to Microsoft Defender for Endpoint.The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
    *
    * @return OnboardingStatus|null The onboardingStatus
    */
    public function getOnboardingStatus()
    {
        if (array_key_exists("onboardingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["onboardingStatus"], "\Microsoft\Graph\SecurityNamespace\Model\OnboardingStatus") || is_null($this->_propDict["onboardingStatus"])) {
                return $this->_propDict["onboardingStatus"];
            } else {
                $this->_propDict["onboardingStatus"] = new OnboardingStatus($this->_propDict["onboardingStatus"]);
                return $this->_propDict["onboardingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the onboardingStatus
    * The status of the machine onboarding to Microsoft Defender for Endpoint.The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
    *
    * @param OnboardingStatus $val The value to assign to the onboardingStatus
    *
    * @return DeviceEvidence The DeviceEvidence
    */
    public function setOnboardingStatus($val)
    {
        $this->_propDict["onboardingStatus"] = $val;
         return $this;
    }
    /**
    * Gets the osBuild
    * The build version for the operating system the device is running.
    *
    * @return int|null The osBuild
    */
    public function getOsBuild()
    {
        if (array_key_exists("osBuild", $this->_propDict)) {
            return $this->_propDict["osBuild"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osBuild
    * The build version for the operating system the device is running.
    *
    * @param int $val The value of the osBuild
    *
    * @return DeviceEvidence
    */
    public function setOsBuild($val)
    {
        $this->_propDict["osBuild"] = $val;
        return $this;
    }
    /**
    * Gets the osPlatform
    * The operating system platform the device is running.
    *
    * @return string|null The osPlatform
    */
    public function getOsPlatform()
    {
        if (array_key_exists("osPlatform", $this->_propDict)) {
            return $this->_propDict["osPlatform"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osPlatform
    * The operating system platform the device is running.
    *
    * @param string $val The value of the osPlatform
    *
    * @return DeviceEvidence
    */
    public function setOsPlatform($val)
    {
        $this->_propDict["osPlatform"] = $val;
        return $this;
    }
    /**
    * Gets the rbacGroupId
    * The ID of the role-based access control (RBAC) device group.
    *
    * @return int|null The rbacGroupId
    */
    public function getRbacGroupId()
    {
        if (array_key_exists("rbacGroupId", $this->_propDict)) {
            return $this->_propDict["rbacGroupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rbacGroupId
    * The ID of the role-based access control (RBAC) device group.
    *
    * @param int $val The value of the rbacGroupId
    *
    * @return DeviceEvidence
    */
    public function setRbacGroupId($val)
    {
        $this->_propDict["rbacGroupId"] = $val;
        return $this;
    }
    /**
    * Gets the rbacGroupName
    * The name of the RBAC device group.
    *
    * @return string|null The rbacGroupName
    */
    public function getRbacGroupName()
    {
        if (array_key_exists("rbacGroupName", $this->_propDict)) {
            return $this->_propDict["rbacGroupName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rbacGroupName
    * The name of the RBAC device group.
    *
    * @param string $val The value of the rbacGroupName
    *
    * @return DeviceEvidence
    */
    public function setRbacGroupName($val)
    {
        $this->_propDict["rbacGroupName"] = $val;
        return $this;
    }

    /**
    * Gets the riskScore
    * Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
    *
    * @return DeviceRiskScore|null The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            if (is_a($this->_propDict["riskScore"], "\Microsoft\Graph\SecurityNamespace\Model\DeviceRiskScore") || is_null($this->_propDict["riskScore"])) {
                return $this->_propDict["riskScore"];
            } else {
                $this->_propDict["riskScore"] = new DeviceRiskScore($this->_propDict["riskScore"]);
                return $this->_propDict["riskScore"];
            }
        }
        return null;
    }

    /**
    * Sets the riskScore
    * Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
    *
    * @param DeviceRiskScore $val The value to assign to the riskScore
    *
    * @return DeviceEvidence The DeviceEvidence
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
         return $this;
    }
    /**
    * Gets the version
    * The version of the operating system platform.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The version of the operating system platform.
    *
    * @param string $val The value of the version
    *
    * @return DeviceEvidence
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

    /**
    * Gets the vmMetadata
    * Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
    *
    * @return VmMetadata|null The vmMetadata
    */
    public function getVmMetadata()
    {
        if (array_key_exists("vmMetadata", $this->_propDict)) {
            if (is_a($this->_propDict["vmMetadata"], "\Microsoft\Graph\SecurityNamespace\Model\VmMetadata") || is_null($this->_propDict["vmMetadata"])) {
                return $this->_propDict["vmMetadata"];
            } else {
                $this->_propDict["vmMetadata"] = new VmMetadata($this->_propDict["vmMetadata"]);
                return $this->_propDict["vmMetadata"];
            }
        }
        return null;
    }

    /**
    * Sets the vmMetadata
    * Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
    *
    * @param VmMetadata $val The value to assign to the vmMetadata
    *
    * @return DeviceEvidence The DeviceEvidence
    */
    public function setVmMetadata($val)
    {
        $this->_propDict["vmMetadata"] = $val;
         return $this;
    }
}
