<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceCompliance File
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
* ManagedDeviceCompliance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceCompliance extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the complianceStatus
    * Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager. Optional. Read-only.
    *
    * @return string|null The complianceStatus
    */
    public function getComplianceStatus()
    {
        if (array_key_exists("complianceStatus", $this->_propDict)) {
            return $this->_propDict["complianceStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the complianceStatus
    * Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager. Optional. Read-only.
    *
    * @param string $val The complianceStatus
    *
    * @return ManagedDeviceCompliance
    */
    public function setComplianceStatus($val)
    {
        $this->_propDict["complianceStatus"] = $val;
        return $this;
    }

    /**
    * Gets the deviceType
    * Platform of the device. This property is read-only. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, chromeOS, linux, blackberry, palm, unknown, cloudPC.  Optional. Read-only.
    *
    * @return string|null The deviceType
    */
    public function getDeviceType()
    {
        if (array_key_exists("deviceType", $this->_propDict)) {
            return $this->_propDict["deviceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceType
    * Platform of the device. This property is read-only. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, chromeOS, linux, blackberry, palm, unknown, cloudPC.  Optional. Read-only.
    *
    * @param string $val The deviceType
    *
    * @return ManagedDeviceCompliance
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
        return $this;
    }

    /**
    * Gets the inGracePeriodUntilDateTime
    * The date and time when the grace period will expire. Optional. Read-only.
    *
    * @return \DateTime|null The inGracePeriodUntilDateTime
    */
    public function getInGracePeriodUntilDateTime()
    {
        if (array_key_exists("inGracePeriodUntilDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["inGracePeriodUntilDateTime"], "\DateTime") || is_null($this->_propDict["inGracePeriodUntilDateTime"])) {
                return $this->_propDict["inGracePeriodUntilDateTime"];
            } else {
                $this->_propDict["inGracePeriodUntilDateTime"] = new \DateTime($this->_propDict["inGracePeriodUntilDateTime"]);
                return $this->_propDict["inGracePeriodUntilDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the inGracePeriodUntilDateTime
    * The date and time when the grace period will expire. Optional. Read-only.
    *
    * @param \DateTime $val The inGracePeriodUntilDateTime
    *
    * @return ManagedDeviceCompliance
    */
    public function setInGracePeriodUntilDateTime($val)
    {
        $this->_propDict["inGracePeriodUntilDateTime"] = $val;
        return $this;
    }

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
    * @return ManagedDeviceCompliance
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSyncDateTime
    * The date and time that the device last completed a successful sync with Microsoft Endpoint Manager. Optional. Read-only.
    *
    * @return \DateTime|null The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime") || is_null($this->_propDict["lastSyncDateTime"])) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSyncDateTime
    * The date and time that the device last completed a successful sync with Microsoft Endpoint Manager. Optional. Read-only.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return ManagedDeviceCompliance
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceId
    * The identifier for the managed device in Microsoft Endpoint Manager. Optional. Read-only.
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
    * The identifier for the managed device in Microsoft Endpoint Manager. Optional. Read-only.
    *
    * @param string $val The managedDeviceId
    *
    * @return ManagedDeviceCompliance
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceName
    * The display name for the managed device. Optional. Read-only.
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
    * The display name for the managed device. Optional. Read-only.
    *
    * @param string $val The managedDeviceName
    *
    * @return ManagedDeviceCompliance
    */
    public function setManagedDeviceName($val)
    {
        $this->_propDict["managedDeviceName"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The manufacture for the device. Optional. Read-only.
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
    * The manufacture for the device. Optional. Read-only.
    *
    * @param string $val The manufacturer
    *
    * @return ManagedDeviceCompliance
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * The model for the device. Optional. Read-only.
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
    * The model for the device. Optional. Read-only.
    *
    * @param string $val The model
    *
    * @return ManagedDeviceCompliance
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the osDescription
    * The description of the operating system for the managed device. Optional. Read-only.
    *
    * @return string|null The osDescription
    */
    public function getOsDescription()
    {
        if (array_key_exists("osDescription", $this->_propDict)) {
            return $this->_propDict["osDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osDescription
    * The description of the operating system for the managed device. Optional. Read-only.
    *
    * @param string $val The osDescription
    *
    * @return ManagedDeviceCompliance
    */
    public function setOsDescription($val)
    {
        $this->_propDict["osDescription"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * The version of the operating system for the managed device. Optional. Read-only.
    *
    * @return string|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osVersion
    * The version of the operating system for the managed device. Optional. Read-only.
    *
    * @param string $val The osVersion
    *
    * @return ManagedDeviceCompliance
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the ownerType
    * The type of owner for the managed device. Optional. Read-only.
    *
    * @return string|null The ownerType
    */
    public function getOwnerType()
    {
        if (array_key_exists("ownerType", $this->_propDict)) {
            return $this->_propDict["ownerType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownerType
    * The type of owner for the managed device. Optional. Read-only.
    *
    * @param string $val The ownerType
    *
    * @return ManagedDeviceCompliance
    */
    public function setOwnerType($val)
    {
        $this->_propDict["ownerType"] = $val;
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
    * @return ManagedDeviceCompliance
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
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
    * The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return ManagedDeviceCompliance
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

}
