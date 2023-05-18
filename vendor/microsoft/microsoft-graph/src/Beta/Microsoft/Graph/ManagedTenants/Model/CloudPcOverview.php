<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOverview File
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
* CloudPcOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOverview extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the lastRefreshedDateTime
    * Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    *
    * @return \DateTime|null The lastRefreshedDateTime
    */
    public function getLastRefreshedDateTime()
    {
        if (array_key_exists("lastRefreshedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRefreshedDateTime"], "\DateTime") || is_null($this->_propDict["lastRefreshedDateTime"])) {
                return $this->_propDict["lastRefreshedDateTime"];
            } else {
                $this->_propDict["lastRefreshedDateTime"] = new \DateTime($this->_propDict["lastRefreshedDateTime"]);
                return $this->_propDict["lastRefreshedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRefreshedDateTime
    * Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return CloudPcOverview
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the numberOfCloudPcConnectionStatusFailed
    * The number of cloud PC connections that have a status of failed. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcConnectionStatusFailed
    */
    public function getNumberOfCloudPcConnectionStatusFailed()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusFailed", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcConnectionStatusFailed
    * The number of cloud PC connections that have a status of failed. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcConnectionStatusFailed
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusFailed($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusFailed"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcConnectionStatusPassed
    * The number of cloud PC connections that have a status of passed. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcConnectionStatusPassed
    */
    public function getNumberOfCloudPcConnectionStatusPassed()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusPassed", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusPassed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcConnectionStatusPassed
    * The number of cloud PC connections that have a status of passed. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcConnectionStatusPassed
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusPassed($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusPassed"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcConnectionStatusPending
    * The number of cloud PC connections that have a status of pending. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcConnectionStatusPending
    */
    public function getNumberOfCloudPcConnectionStatusPending()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusPending", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusPending"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcConnectionStatusPending
    * The number of cloud PC connections that have a status of pending. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcConnectionStatusPending
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusPending($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusPending"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcConnectionStatusRunning
    * The number of cloud PC connections that have a status of running. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcConnectionStatusRunning
    */
    public function getNumberOfCloudPcConnectionStatusRunning()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusRunning", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusRunning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcConnectionStatusRunning
    * The number of cloud PC connections that have a status of running. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcConnectionStatusRunning
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusRunning($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusRunning"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcConnectionStatusUnkownFutureValue
    * The number of cloud PC connections that have a status of unknownFutureValue. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcConnectionStatusUnkownFutureValue
    */
    public function getNumberOfCloudPcConnectionStatusUnkownFutureValue()
    {
        if (array_key_exists("numberOfCloudPcConnectionStatusUnkownFutureValue", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcConnectionStatusUnkownFutureValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcConnectionStatusUnkownFutureValue
    * The number of cloud PC connections that have a status of unknownFutureValue. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcConnectionStatusUnkownFutureValue
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcConnectionStatusUnkownFutureValue($val)
    {
        $this->_propDict["numberOfCloudPcConnectionStatusUnkownFutureValue"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcStatusDeprovisioning
    * The number of cloud PCs that have a status of deprovisioning. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcStatusDeprovisioning
    */
    public function getNumberOfCloudPcStatusDeprovisioning()
    {
        if (array_key_exists("numberOfCloudPcStatusDeprovisioning", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusDeprovisioning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcStatusDeprovisioning
    * The number of cloud PCs that have a status of deprovisioning. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcStatusDeprovisioning
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusDeprovisioning($val)
    {
        $this->_propDict["numberOfCloudPcStatusDeprovisioning"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcStatusFailed
    * The number of cloud PCs that have a status of failed. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcStatusFailed
    */
    public function getNumberOfCloudPcStatusFailed()
    {
        if (array_key_exists("numberOfCloudPcStatusFailed", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusFailed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcStatusFailed
    * The number of cloud PCs that have a status of failed. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcStatusFailed
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusFailed($val)
    {
        $this->_propDict["numberOfCloudPcStatusFailed"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcStatusInGracePeriod
    * The number of cloud PCs that have a status of inGracePeriod. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcStatusInGracePeriod
    */
    public function getNumberOfCloudPcStatusInGracePeriod()
    {
        if (array_key_exists("numberOfCloudPcStatusInGracePeriod", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusInGracePeriod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcStatusInGracePeriod
    * The number of cloud PCs that have a status of inGracePeriod. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcStatusInGracePeriod
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusInGracePeriod($val)
    {
        $this->_propDict["numberOfCloudPcStatusInGracePeriod"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcStatusNotProvisioned
    * The number of cloud PCs that have a status of notProvisioned. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcStatusNotProvisioned
    */
    public function getNumberOfCloudPcStatusNotProvisioned()
    {
        if (array_key_exists("numberOfCloudPcStatusNotProvisioned", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusNotProvisioned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcStatusNotProvisioned
    * The number of cloud PCs that have a status of notProvisioned. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcStatusNotProvisioned
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusNotProvisioned($val)
    {
        $this->_propDict["numberOfCloudPcStatusNotProvisioned"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcStatusProvisioned
    * The number of cloud PCs that have a status of provisioned. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcStatusProvisioned
    */
    public function getNumberOfCloudPcStatusProvisioned()
    {
        if (array_key_exists("numberOfCloudPcStatusProvisioned", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusProvisioned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcStatusProvisioned
    * The number of cloud PCs that have a status of provisioned. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcStatusProvisioned
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusProvisioned($val)
    {
        $this->_propDict["numberOfCloudPcStatusProvisioned"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcStatusProvisioning
    * The number of cloud PCs that have a status of provisioning. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcStatusProvisioning
    */
    public function getNumberOfCloudPcStatusProvisioning()
    {
        if (array_key_exists("numberOfCloudPcStatusProvisioning", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusProvisioning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcStatusProvisioning
    * The number of cloud PCs that have a status of provisioning. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcStatusProvisioning
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusProvisioning($val)
    {
        $this->_propDict["numberOfCloudPcStatusProvisioning"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcStatusUnknown
    * The number of cloud PCs that have a status of unknown. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcStatusUnknown
    */
    public function getNumberOfCloudPcStatusUnknown()
    {
        if (array_key_exists("numberOfCloudPcStatusUnknown", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusUnknown"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcStatusUnknown
    * The number of cloud PCs that have a status of unknown. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcStatusUnknown
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusUnknown($val)
    {
        $this->_propDict["numberOfCloudPcStatusUnknown"] = intval($val);
        return $this;
    }

    /**
    * Gets the numberOfCloudPcStatusUpgrading
    * The number of cloud PCs that have a status of upgrading. Optional. Read-only.
    *
    * @return int|null The numberOfCloudPcStatusUpgrading
    */
    public function getNumberOfCloudPcStatusUpgrading()
    {
        if (array_key_exists("numberOfCloudPcStatusUpgrading", $this->_propDict)) {
            return $this->_propDict["numberOfCloudPcStatusUpgrading"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfCloudPcStatusUpgrading
    * The number of cloud PCs that have a status of upgrading. Optional. Read-only.
    *
    * @param int $val The numberOfCloudPcStatusUpgrading
    *
    * @return CloudPcOverview
    */
    public function setNumberOfCloudPcStatusUpgrading($val)
    {
        $this->_propDict["numberOfCloudPcStatusUpgrading"] = intval($val);
        return $this;
    }

    /**
    * Gets the tenantDisplayName
    * The display name for the managed tenant. Optional. Read-only.
    *
    * @return string|null The tenantDisplayName
    */
    public function getTenantDisplayName()
    {
        if (array_key_exists("tenantDisplayName", $this->_propDict)) {
            return $this->_propDict["tenantDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantDisplayName
    * The display name for the managed tenant. Optional. Read-only.
    *
    * @param string $val The tenantDisplayName
    *
    * @return CloudPcOverview
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return CloudPcOverview
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the totalBusinessLicenses
    * The total number of cloud PC devices that have the Business SKU. Optional. Read-only.
    *
    * @return int|null The totalBusinessLicenses
    */
    public function getTotalBusinessLicenses()
    {
        if (array_key_exists("totalBusinessLicenses", $this->_propDict)) {
            return $this->_propDict["totalBusinessLicenses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalBusinessLicenses
    * The total number of cloud PC devices that have the Business SKU. Optional. Read-only.
    *
    * @param int $val The totalBusinessLicenses
    *
    * @return CloudPcOverview
    */
    public function setTotalBusinessLicenses($val)
    {
        $this->_propDict["totalBusinessLicenses"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalCloudPcConnectionStatus
    * The total number of cloud PC connection statuses for the given managed tenant. Optional. Read-only.
    *
    * @return int|null The totalCloudPcConnectionStatus
    */
    public function getTotalCloudPcConnectionStatus()
    {
        if (array_key_exists("totalCloudPcConnectionStatus", $this->_propDict)) {
            return $this->_propDict["totalCloudPcConnectionStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalCloudPcConnectionStatus
    * The total number of cloud PC connection statuses for the given managed tenant. Optional. Read-only.
    *
    * @param int $val The totalCloudPcConnectionStatus
    *
    * @return CloudPcOverview
    */
    public function setTotalCloudPcConnectionStatus($val)
    {
        $this->_propDict["totalCloudPcConnectionStatus"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalCloudPcStatus
    * The total number of cloud PC statues for the given managed tenant. Optional. Read-only.
    *
    * @return int|null The totalCloudPcStatus
    */
    public function getTotalCloudPcStatus()
    {
        if (array_key_exists("totalCloudPcStatus", $this->_propDict)) {
            return $this->_propDict["totalCloudPcStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalCloudPcStatus
    * The total number of cloud PC statues for the given managed tenant. Optional. Read-only.
    *
    * @param int $val The totalCloudPcStatus
    *
    * @return CloudPcOverview
    */
    public function setTotalCloudPcStatus($val)
    {
        $this->_propDict["totalCloudPcStatus"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalEnterpriseLicenses
    * The total number of cloud PC devices that have the Enterprise SKU. Optional. Read-only.
    *
    * @return int|null The totalEnterpriseLicenses
    */
    public function getTotalEnterpriseLicenses()
    {
        if (array_key_exists("totalEnterpriseLicenses", $this->_propDict)) {
            return $this->_propDict["totalEnterpriseLicenses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalEnterpriseLicenses
    * The total number of cloud PC devices that have the Enterprise SKU. Optional. Read-only.
    *
    * @param int $val The totalEnterpriseLicenses
    *
    * @return CloudPcOverview
    */
    public function setTotalEnterpriseLicenses($val)
    {
        $this->_propDict["totalEnterpriseLicenses"] = intval($val);
        return $this;
    }

}
