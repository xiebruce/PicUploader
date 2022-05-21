<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceComplianceTrend File
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
* ManagedDeviceComplianceTrend class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceComplianceTrend extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the compliantDeviceCount
    * The number of devices with a compliant status. Required. Read-only.
    *
    * @return int|null The compliantDeviceCount
    */
    public function getCompliantDeviceCount()
    {
        if (array_key_exists("compliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["compliantDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliantDeviceCount
    * The number of devices with a compliant status. Required. Read-only.
    *
    * @param int $val The compliantDeviceCount
    *
    * @return ManagedDeviceComplianceTrend
    */
    public function setCompliantDeviceCount($val)
    {
        $this->_propDict["compliantDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the configManagerDeviceCount
    * The number of devices manged by Configuration Manager. Required. Read-only.
    *
    * @return int|null The configManagerDeviceCount
    */
    public function getConfigManagerDeviceCount()
    {
        if (array_key_exists("configManagerDeviceCount", $this->_propDict)) {
            return $this->_propDict["configManagerDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configManagerDeviceCount
    * The number of devices manged by Configuration Manager. Required. Read-only.
    *
    * @param int $val The configManagerDeviceCount
    *
    * @return ManagedDeviceComplianceTrend
    */
    public function setConfigManagerDeviceCount($val)
    {
        $this->_propDict["configManagerDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the countDateTime
    * The date and time compliance snapshot was performed. Required. Read-only.
    *
    * @return string|null The countDateTime
    */
    public function getCountDateTime()
    {
        if (array_key_exists("countDateTime", $this->_propDict)) {
            return $this->_propDict["countDateTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countDateTime
    * The date and time compliance snapshot was performed. Required. Read-only.
    *
    * @param string $val The countDateTime
    *
    * @return ManagedDeviceComplianceTrend
    */
    public function setCountDateTime($val)
    {
        $this->_propDict["countDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the errorDeviceCount
    * The number of devices with an error status. Required. Read-only.
    *
    * @return int|null The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorDeviceCount
    * The number of devices with an error status. Required. Read-only.
    *
    * @param int $val The errorDeviceCount
    *
    * @return ManagedDeviceComplianceTrend
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the inGracePeriodDeviceCount
    * The number of devices that are in a grace period status. Required. Read-only.
    *
    * @return int|null The inGracePeriodDeviceCount
    */
    public function getInGracePeriodDeviceCount()
    {
        if (array_key_exists("inGracePeriodDeviceCount", $this->_propDict)) {
            return $this->_propDict["inGracePeriodDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inGracePeriodDeviceCount
    * The number of devices that are in a grace period status. Required. Read-only.
    *
    * @param int $val The inGracePeriodDeviceCount
    *
    * @return ManagedDeviceComplianceTrend
    */
    public function setInGracePeriodDeviceCount($val)
    {
        $this->_propDict["inGracePeriodDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the noncompliantDeviceCount
    * The number of devices that are in a non-compliant status. Required. Read-only.
    *
    * @return int|null The noncompliantDeviceCount
    */
    public function getNoncompliantDeviceCount()
    {
        if (array_key_exists("noncompliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["noncompliantDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the noncompliantDeviceCount
    * The number of devices that are in a non-compliant status. Required. Read-only.
    *
    * @param int $val The noncompliantDeviceCount
    *
    * @return ManagedDeviceComplianceTrend
    */
    public function setNoncompliantDeviceCount($val)
    {
        $this->_propDict["noncompliantDeviceCount"] = intval($val);
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
    * @return ManagedDeviceComplianceTrend
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
    * @return ManagedDeviceComplianceTrend
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the unknownDeviceCount
    * The number of devices in an unknown status. Required. Read-only.
    *
    * @return int|null The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownDeviceCount
    * The number of devices in an unknown status. Required. Read-only.
    *
    * @param int $val The unknownDeviceCount
    *
    * @return ManagedDeviceComplianceTrend
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }

}
