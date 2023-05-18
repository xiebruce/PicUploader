<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InvalidLicenseAlertIncident File
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
* InvalidLicenseAlertIncident class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InvalidLicenseAlertIncident extends UnifiedRoleManagementAlertIncident
{
    /**
    * Gets the tenantLicenseStatus
    *
    * @return string|null The tenantLicenseStatus
    */
    public function getTenantLicenseStatus()
    {
        if (array_key_exists("tenantLicenseStatus", $this->_propDict)) {
            return $this->_propDict["tenantLicenseStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantLicenseStatus
    *
    * @param string $val The tenantLicenseStatus
    *
    * @return InvalidLicenseAlertIncident
    */
    public function setTenantLicenseStatus($val)
    {
        $this->_propDict["tenantLicenseStatus"] = $val;
        return $this;
    }

}
