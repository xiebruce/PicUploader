<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcServicePlan File
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
* CloudPcServicePlan class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcServicePlan extends Entity
{
    /**
    * Gets the displayName
    * The name for the service plan. Read-only.
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
    * The name for the service plan. Read-only.
    *
    * @param string $val The displayName
    *
    * @return CloudPcServicePlan
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the provisioningType
    * Specifies the type of license used when provisioning Cloud PCs. By default, the license type is dedicated. Possible values are: dedicated, shared, unknownFutureValue.
    *
    * @return CloudPcProvisioningType|null The provisioningType
    */
    public function getProvisioningType()
    {
        if (array_key_exists("provisioningType", $this->_propDict)) {
            if (is_a($this->_propDict["provisioningType"], "\Beta\Microsoft\Graph\Model\CloudPcProvisioningType") || is_null($this->_propDict["provisioningType"])) {
                return $this->_propDict["provisioningType"];
            } else {
                $this->_propDict["provisioningType"] = new CloudPcProvisioningType($this->_propDict["provisioningType"]);
                return $this->_propDict["provisioningType"];
            }
        }
        return null;
    }

    /**
    * Sets the provisioningType
    * Specifies the type of license used when provisioning Cloud PCs. By default, the license type is dedicated. Possible values are: dedicated, shared, unknownFutureValue.
    *
    * @param CloudPcProvisioningType $val The provisioningType
    *
    * @return CloudPcServicePlan
    */
    public function setProvisioningType($val)
    {
        $this->_propDict["provisioningType"] = $val;
        return $this;
    }

    /**
    * Gets the ramInGB
    * The size of the RAM in GB. Read-only.
    *
    * @return int|null The ramInGB
    */
    public function getRamInGB()
    {
        if (array_key_exists("ramInGB", $this->_propDict)) {
            return $this->_propDict["ramInGB"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ramInGB
    * The size of the RAM in GB. Read-only.
    *
    * @param int $val The ramInGB
    *
    * @return CloudPcServicePlan
    */
    public function setRamInGB($val)
    {
        $this->_propDict["ramInGB"] = intval($val);
        return $this;
    }

    /**
    * Gets the storageInGB
    * The size of the OS Disk in GB. Read-only.
    *
    * @return int|null The storageInGB
    */
    public function getStorageInGB()
    {
        if (array_key_exists("storageInGB", $this->_propDict)) {
            return $this->_propDict["storageInGB"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageInGB
    * The size of the OS Disk in GB. Read-only.
    *
    * @param int $val The storageInGB
    *
    * @return CloudPcServicePlan
    */
    public function setStorageInGB($val)
    {
        $this->_propDict["storageInGB"] = intval($val);
        return $this;
    }

    /**
    * Gets the supportedSolution
    * The supported service or solution for the region. The possible values are: windows365, devBox, rpaBox, unknownFutureValue. Read-only.
    *
    * @return CloudPcManagementService|null The supportedSolution
    */
    public function getSupportedSolution()
    {
        if (array_key_exists("supportedSolution", $this->_propDict)) {
            if (is_a($this->_propDict["supportedSolution"], "\Beta\Microsoft\Graph\Model\CloudPcManagementService") || is_null($this->_propDict["supportedSolution"])) {
                return $this->_propDict["supportedSolution"];
            } else {
                $this->_propDict["supportedSolution"] = new CloudPcManagementService($this->_propDict["supportedSolution"]);
                return $this->_propDict["supportedSolution"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedSolution
    * The supported service or solution for the region. The possible values are: windows365, devBox, rpaBox, unknownFutureValue. Read-only.
    *
    * @param CloudPcManagementService $val The supportedSolution
    *
    * @return CloudPcServicePlan
    */
    public function setSupportedSolution($val)
    {
        $this->_propDict["supportedSolution"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of the service plan. Possible values are: enterprise, business, unknownFutureValue. Read-only.
    *
    * @return CloudPcServicePlanType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\CloudPcServicePlanType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new CloudPcServicePlanType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of the service plan. Possible values are: enterprise, business, unknownFutureValue. Read-only.
    *
    * @param CloudPcServicePlanType $val The type
    *
    * @return CloudPcServicePlan
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the userProfileInGB
    * The size of the user profile disk in GB. Read-only.
    *
    * @return int|null The userProfileInGB
    */
    public function getUserProfileInGB()
    {
        if (array_key_exists("userProfileInGB", $this->_propDict)) {
            return $this->_propDict["userProfileInGB"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userProfileInGB
    * The size of the user profile disk in GB. Read-only.
    *
    * @param int $val The userProfileInGB
    *
    * @return CloudPcServicePlan
    */
    public function setUserProfileInGB($val)
    {
        $this->_propDict["userProfileInGB"] = intval($val);
        return $this;
    }

    /**
    * Gets the vCpuCount
    * The number of vCPUs. Read-only.
    *
    * @return int|null The vCpuCount
    */
    public function getVCpuCount()
    {
        if (array_key_exists("vCpuCount", $this->_propDict)) {
            return $this->_propDict["vCpuCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vCpuCount
    * The number of vCPUs. Read-only.
    *
    * @param int $val The vCpuCount
    *
    * @return CloudPcServicePlan
    */
    public function setVCpuCount($val)
    {
        $this->_propDict["vCpuCount"] = intval($val);
        return $this;
    }

}
