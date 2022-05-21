<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPC File
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
* CloudPC class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPC extends Entity
{
    /**
    * Gets the aadDeviceId
    * The Azure Active Directory (Azure AD) device ID of the Cloud PC.
    *
    * @return string|null The aadDeviceId
    */
    public function getAadDeviceId()
    {
        if (array_key_exists("aadDeviceId", $this->_propDict)) {
            return $this->_propDict["aadDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aadDeviceId
    * The Azure Active Directory (Azure AD) device ID of the Cloud PC.
    *
    * @param string $val The aadDeviceId
    *
    * @return CloudPC
    */
    public function setAadDeviceId($val)
    {
        $this->_propDict["aadDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the Cloud PC.
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
    * The display name of the Cloud PC.
    *
    * @param string $val The displayName
    *
    * @return CloudPC
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the gracePeriodEndDateTime
    * The date and time when the grace period ends and reprovisioning/deprovisioning happens. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The gracePeriodEndDateTime
    */
    public function getGracePeriodEndDateTime()
    {
        if (array_key_exists("gracePeriodEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["gracePeriodEndDateTime"], "\DateTime") || is_null($this->_propDict["gracePeriodEndDateTime"])) {
                return $this->_propDict["gracePeriodEndDateTime"];
            } else {
                $this->_propDict["gracePeriodEndDateTime"] = new \DateTime($this->_propDict["gracePeriodEndDateTime"]);
                return $this->_propDict["gracePeriodEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the gracePeriodEndDateTime
    * The date and time when the grace period ends and reprovisioning/deprovisioning happens. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The gracePeriodEndDateTime
    *
    * @return CloudPC
    */
    public function setGracePeriodEndDateTime($val)
    {
        $this->_propDict["gracePeriodEndDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the imageDisplayName
    * Name of the OS image that's on the Cloud PC.
    *
    * @return string|null The imageDisplayName
    */
    public function getImageDisplayName()
    {
        if (array_key_exists("imageDisplayName", $this->_propDict)) {
            return $this->_propDict["imageDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the imageDisplayName
    * Name of the OS image that's on the Cloud PC.
    *
    * @param string $val The imageDisplayName
    *
    * @return CloudPC
    */
    public function setImageDisplayName($val)
    {
        $this->_propDict["imageDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastLoginResult
    * The last login result of the Cloud PC. For example, { 'time': '2014-01-01T00:00:00Z'}.
    *
    * @return CloudPcLoginResult|null The lastLoginResult
    */
    public function getLastLoginResult()
    {
        if (array_key_exists("lastLoginResult", $this->_propDict)) {
            if (is_a($this->_propDict["lastLoginResult"], "\Beta\Microsoft\Graph\Model\CloudPcLoginResult") || is_null($this->_propDict["lastLoginResult"])) {
                return $this->_propDict["lastLoginResult"];
            } else {
                $this->_propDict["lastLoginResult"] = new CloudPcLoginResult($this->_propDict["lastLoginResult"]);
                return $this->_propDict["lastLoginResult"];
            }
        }
        return null;
    }

    /**
    * Sets the lastLoginResult
    * The last login result of the Cloud PC. For example, { 'time': '2014-01-01T00:00:00Z'}.
    *
    * @param CloudPcLoginResult $val The lastLoginResult
    *
    * @return CloudPC
    */
    public function setLastLoginResult($val)
    {
        $this->_propDict["lastLoginResult"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The last modified date and time of the Cloud PC. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The last modified date and time of the Cloud PC. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return CloudPC
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastRemoteActionResult
    * The last remote action result of the enterprise Cloud PCs. The supported remote actions are: Reboot, Rename, Reprovision, Restore, and Troubleshoot.
    *
    * @return CloudPcRemoteActionResult|null The lastRemoteActionResult
    */
    public function getLastRemoteActionResult()
    {
        if (array_key_exists("lastRemoteActionResult", $this->_propDict)) {
            if (is_a($this->_propDict["lastRemoteActionResult"], "\Beta\Microsoft\Graph\Model\CloudPcRemoteActionResult") || is_null($this->_propDict["lastRemoteActionResult"])) {
                return $this->_propDict["lastRemoteActionResult"];
            } else {
                $this->_propDict["lastRemoteActionResult"] = new CloudPcRemoteActionResult($this->_propDict["lastRemoteActionResult"]);
                return $this->_propDict["lastRemoteActionResult"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRemoteActionResult
    * The last remote action result of the enterprise Cloud PCs. The supported remote actions are: Reboot, Rename, Reprovision, Restore, and Troubleshoot.
    *
    * @param CloudPcRemoteActionResult $val The lastRemoteActionResult
    *
    * @return CloudPC
    */
    public function setLastRemoteActionResult($val)
    {
        $this->_propDict["lastRemoteActionResult"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceId
    * The Intune device ID of the Cloud PC.
    *
    * @return string|null The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceId
    * The Intune device ID of the Cloud PC.
    *
    * @param string $val The managedDeviceId
    *
    * @return CloudPC
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceName
    * The Intune device name of the Cloud PC.
    *
    * @return string|null The managedDeviceName
    */
    public function getManagedDeviceName()
    {
        if (array_key_exists("managedDeviceName", $this->_propDict)) {
            return $this->_propDict["managedDeviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceName
    * The Intune device name of the Cloud PC.
    *
    * @param string $val The managedDeviceName
    *
    * @return CloudPC
    */
    public function setManagedDeviceName($val)
    {
        $this->_propDict["managedDeviceName"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesConnectionName
    * The Azure network connection that is applied during the provisioning of Cloud PCs.
    *
    * @return string|null The onPremisesConnectionName
    */
    public function getOnPremisesConnectionName()
    {
        if (array_key_exists("onPremisesConnectionName", $this->_propDict)) {
            return $this->_propDict["onPremisesConnectionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesConnectionName
    * The Azure network connection that is applied during the provisioning of Cloud PCs.
    *
    * @param string $val The onPremisesConnectionName
    *
    * @return CloudPC
    */
    public function setOnPremisesConnectionName($val)
    {
        $this->_propDict["onPremisesConnectionName"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * The version of the operating system (OS) to provision on Cloud PCs. Possible values are: windows10, windows11, and unknownFutureValue.
    *
    * @return CloudPcOperatingSystem|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            if (is_a($this->_propDict["osVersion"], "\Beta\Microsoft\Graph\Model\CloudPcOperatingSystem") || is_null($this->_propDict["osVersion"])) {
                return $this->_propDict["osVersion"];
            } else {
                $this->_propDict["osVersion"] = new CloudPcOperatingSystem($this->_propDict["osVersion"]);
                return $this->_propDict["osVersion"];
            }
        }
        return null;
    }

    /**
    * Sets the osVersion
    * The version of the operating system (OS) to provision on Cloud PCs. Possible values are: windows10, windows11, and unknownFutureValue.
    *
    * @param CloudPcOperatingSystem $val The osVersion
    *
    * @return CloudPC
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the provisioningPolicyId
    * The provisioning policy ID of the Cloud PC.
    *
    * @return string|null The provisioningPolicyId
    */
    public function getProvisioningPolicyId()
    {
        if (array_key_exists("provisioningPolicyId", $this->_propDict)) {
            return $this->_propDict["provisioningPolicyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provisioningPolicyId
    * The provisioning policy ID of the Cloud PC.
    *
    * @param string $val The provisioningPolicyId
    *
    * @return CloudPC
    */
    public function setProvisioningPolicyId($val)
    {
        $this->_propDict["provisioningPolicyId"] = $val;
        return $this;
    }

    /**
    * Gets the provisioningPolicyName
    * The provisioning policy that is applied during the provisioning of Cloud PCs.
    *
    * @return string|null The provisioningPolicyName
    */
    public function getProvisioningPolicyName()
    {
        if (array_key_exists("provisioningPolicyName", $this->_propDict)) {
            return $this->_propDict["provisioningPolicyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provisioningPolicyName
    * The provisioning policy that is applied during the provisioning of Cloud PCs.
    *
    * @param string $val The provisioningPolicyName
    *
    * @return CloudPC
    */
    public function setProvisioningPolicyName($val)
    {
        $this->_propDict["provisioningPolicyName"] = $val;
        return $this;
    }

    /**
    * Gets the servicePlanId
    * The service plan ID of the Cloud PC.
    *
    * @return string|null The servicePlanId
    */
    public function getServicePlanId()
    {
        if (array_key_exists("servicePlanId", $this->_propDict)) {
            return $this->_propDict["servicePlanId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePlanId
    * The service plan ID of the Cloud PC.
    *
    * @param string $val The servicePlanId
    *
    * @return CloudPC
    */
    public function setServicePlanId($val)
    {
        $this->_propDict["servicePlanId"] = $val;
        return $this;
    }

    /**
    * Gets the servicePlanName
    * The service plan name of the Cloud PC.
    *
    * @return string|null The servicePlanName
    */
    public function getServicePlanName()
    {
        if (array_key_exists("servicePlanName", $this->_propDict)) {
            return $this->_propDict["servicePlanName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePlanName
    * The service plan name of the Cloud PC.
    *
    * @param string $val The servicePlanName
    *
    * @return CloudPC
    */
    public function setServicePlanName($val)
    {
        $this->_propDict["servicePlanName"] = $val;
        return $this;
    }

    /**
    * Gets the servicePlanType
    * The service plan type of the Cloud PC.
    *
    * @return CloudPcServicePlanType|null The servicePlanType
    */
    public function getServicePlanType()
    {
        if (array_key_exists("servicePlanType", $this->_propDict)) {
            if (is_a($this->_propDict["servicePlanType"], "\Beta\Microsoft\Graph\Model\CloudPcServicePlanType") || is_null($this->_propDict["servicePlanType"])) {
                return $this->_propDict["servicePlanType"];
            } else {
                $this->_propDict["servicePlanType"] = new CloudPcServicePlanType($this->_propDict["servicePlanType"]);
                return $this->_propDict["servicePlanType"];
            }
        }
        return null;
    }

    /**
    * Sets the servicePlanType
    * The service plan type of the Cloud PC.
    *
    * @param CloudPcServicePlanType $val The servicePlanType
    *
    * @return CloudPC
    */
    public function setServicePlanType($val)
    {
        $this->_propDict["servicePlanType"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the Cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed, restoring.
    *
    * @return CloudPcStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the Cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed, restoring.
    *
    * @param CloudPcStatus $val The status
    *
    * @return CloudPC
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the statusDetails
    * The details of the Cloud PC status.
    *
    * @return CloudPcStatusDetails|null The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict)) {
            if (is_a($this->_propDict["statusDetails"], "\Beta\Microsoft\Graph\Model\CloudPcStatusDetails") || is_null($this->_propDict["statusDetails"])) {
                return $this->_propDict["statusDetails"];
            } else {
                $this->_propDict["statusDetails"] = new CloudPcStatusDetails($this->_propDict["statusDetails"]);
                return $this->_propDict["statusDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the statusDetails
    * The details of the Cloud PC status.
    *
    * @param CloudPcStatusDetails $val The statusDetails
    *
    * @return CloudPC
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
        return $this;
    }

    /**
    * Gets the userAccountType
    * The account type of the user on provisioned Cloud PCs. Possible values are: standardUser, administrator, and unknownFutureValue.
    *
    * @return CloudPcUserAccountType|null The userAccountType
    */
    public function getUserAccountType()
    {
        if (array_key_exists("userAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["userAccountType"], "\Beta\Microsoft\Graph\Model\CloudPcUserAccountType") || is_null($this->_propDict["userAccountType"])) {
                return $this->_propDict["userAccountType"];
            } else {
                $this->_propDict["userAccountType"] = new CloudPcUserAccountType($this->_propDict["userAccountType"]);
                return $this->_propDict["userAccountType"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccountType
    * The account type of the user on provisioned Cloud PCs. Possible values are: standardUser, administrator, and unknownFutureValue.
    *
    * @param CloudPcUserAccountType $val The userAccountType
    *
    * @return CloudPC
    */
    public function setUserAccountType($val)
    {
        $this->_propDict["userAccountType"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) of the user assigned to the Cloud PC.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * The user principal name (UPN) of the user assigned to the Cloud PC.
    *
    * @param string $val The userPrincipalName
    *
    * @return CloudPC
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

}
