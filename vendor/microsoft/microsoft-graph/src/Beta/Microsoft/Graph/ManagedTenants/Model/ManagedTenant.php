<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenant File
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
* ManagedTenant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenant extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the aggregatedPolicyCompliances
    * Aggregate view of device compliance policies across managed tenants.
     *
     * @return array|null The aggregatedPolicyCompliances
     */
    public function getAggregatedPolicyCompliances()
    {
        if (array_key_exists("aggregatedPolicyCompliances", $this->_propDict)) {
           return $this->_propDict["aggregatedPolicyCompliances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aggregatedPolicyCompliances
    * Aggregate view of device compliance policies across managed tenants.
    *
    * @param AggregatedPolicyCompliance[] $val The aggregatedPolicyCompliances
    *
    * @return ManagedTenant
    */
    public function setAggregatedPolicyCompliances($val)
    {
        $this->_propDict["aggregatedPolicyCompliances"] = $val;
        return $this;
    }


     /**
     * Gets the auditEvents
    * The collection of audit events across managed tenants.
     *
     * @return array|null The auditEvents
     */
    public function getAuditEvents()
    {
        if (array_key_exists("auditEvents", $this->_propDict)) {
           return $this->_propDict["auditEvents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the auditEvents
    * The collection of audit events across managed tenants.
    *
    * @param AuditEvent[] $val The auditEvents
    *
    * @return ManagedTenant
    */
    public function setAuditEvents($val)
    {
        $this->_propDict["auditEvents"] = $val;
        return $this;
    }


     /**
     * Gets the cloudPcConnections
    * The collection of cloud PC connections across managed tenants.
     *
     * @return array|null The cloudPcConnections
     */
    public function getCloudPcConnections()
    {
        if (array_key_exists("cloudPcConnections", $this->_propDict)) {
           return $this->_propDict["cloudPcConnections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcConnections
    * The collection of cloud PC connections across managed tenants.
    *
    * @param CloudPcConnection[] $val The cloudPcConnections
    *
    * @return ManagedTenant
    */
    public function setCloudPcConnections($val)
    {
        $this->_propDict["cloudPcConnections"] = $val;
        return $this;
    }


     /**
     * Gets the cloudPcDevices
    * The collection of cloud PC devices across managed tenants.
     *
     * @return array|null The cloudPcDevices
     */
    public function getCloudPcDevices()
    {
        if (array_key_exists("cloudPcDevices", $this->_propDict)) {
           return $this->_propDict["cloudPcDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcDevices
    * The collection of cloud PC devices across managed tenants.
    *
    * @param CloudPcDevice[] $val The cloudPcDevices
    *
    * @return ManagedTenant
    */
    public function setCloudPcDevices($val)
    {
        $this->_propDict["cloudPcDevices"] = $val;
        return $this;
    }


     /**
     * Gets the cloudPcsOverview
    * Overview of cloud PC information across managed tenants.
     *
     * @return array|null The cloudPcsOverview
     */
    public function getCloudPcsOverview()
    {
        if (array_key_exists("cloudPcsOverview", $this->_propDict)) {
           return $this->_propDict["cloudPcsOverview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcsOverview
    * Overview of cloud PC information across managed tenants.
    *
    * @param CloudPcOverview[] $val The cloudPcsOverview
    *
    * @return ManagedTenant
    */
    public function setCloudPcsOverview($val)
    {
        $this->_propDict["cloudPcsOverview"] = $val;
        return $this;
    }


     /**
     * Gets the conditionalAccessPolicyCoverages
    * Aggregate view of conditional access policy coverage across managed tenants.
     *
     * @return array|null The conditionalAccessPolicyCoverages
     */
    public function getConditionalAccessPolicyCoverages()
    {
        if (array_key_exists("conditionalAccessPolicyCoverages", $this->_propDict)) {
           return $this->_propDict["conditionalAccessPolicyCoverages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conditionalAccessPolicyCoverages
    * Aggregate view of conditional access policy coverage across managed tenants.
    *
    * @param ConditionalAccessPolicyCoverage[] $val The conditionalAccessPolicyCoverages
    *
    * @return ManagedTenant
    */
    public function setConditionalAccessPolicyCoverages($val)
    {
        $this->_propDict["conditionalAccessPolicyCoverages"] = $val;
        return $this;
    }


     /**
     * Gets the credentialUserRegistrationsSummaries
    * Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
     *
     * @return array|null The credentialUserRegistrationsSummaries
     */
    public function getCredentialUserRegistrationsSummaries()
    {
        if (array_key_exists("credentialUserRegistrationsSummaries", $this->_propDict)) {
           return $this->_propDict["credentialUserRegistrationsSummaries"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialUserRegistrationsSummaries
    * Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
    *
    * @param CredentialUserRegistrationsSummary[] $val The credentialUserRegistrationsSummaries
    *
    * @return ManagedTenant
    */
    public function setCredentialUserRegistrationsSummaries($val)
    {
        $this->_propDict["credentialUserRegistrationsSummaries"] = $val;
        return $this;
    }


     /**
     * Gets the deviceCompliancePolicySettingStateSummaries
    * Summary information for device compliance policy setting states across managed tenants.
     *
     * @return array|null The deviceCompliancePolicySettingStateSummaries
     */
    public function getDeviceCompliancePolicySettingStateSummaries()
    {
        if (array_key_exists("deviceCompliancePolicySettingStateSummaries", $this->_propDict)) {
           return $this->_propDict["deviceCompliancePolicySettingStateSummaries"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCompliancePolicySettingStateSummaries
    * Summary information for device compliance policy setting states across managed tenants.
    *
    * @param DeviceCompliancePolicySettingStateSummary[] $val The deviceCompliancePolicySettingStateSummaries
    *
    * @return ManagedTenant
    */
    public function setDeviceCompliancePolicySettingStateSummaries($val)
    {
        $this->_propDict["deviceCompliancePolicySettingStateSummaries"] = $val;
        return $this;
    }


     /**
     * Gets the managedDeviceCompliances
    * The collection of compliance for managed devices across managed tenants.
     *
     * @return array|null The managedDeviceCompliances
     */
    public function getManagedDeviceCompliances()
    {
        if (array_key_exists("managedDeviceCompliances", $this->_propDict)) {
           return $this->_propDict["managedDeviceCompliances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceCompliances
    * The collection of compliance for managed devices across managed tenants.
    *
    * @param ManagedDeviceCompliance[] $val The managedDeviceCompliances
    *
    * @return ManagedTenant
    */
    public function setManagedDeviceCompliances($val)
    {
        $this->_propDict["managedDeviceCompliances"] = $val;
        return $this;
    }


     /**
     * Gets the managedDeviceComplianceTrends
    * Trend insights for device compliance across managed tenants.
     *
     * @return array|null The managedDeviceComplianceTrends
     */
    public function getManagedDeviceComplianceTrends()
    {
        if (array_key_exists("managedDeviceComplianceTrends", $this->_propDict)) {
           return $this->_propDict["managedDeviceComplianceTrends"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceComplianceTrends
    * Trend insights for device compliance across managed tenants.
    *
    * @param ManagedDeviceComplianceTrend[] $val The managedDeviceComplianceTrends
    *
    * @return ManagedTenant
    */
    public function setManagedDeviceComplianceTrends($val)
    {
        $this->_propDict["managedDeviceComplianceTrends"] = $val;
        return $this;
    }


     /**
     * Gets the managementActions
    * The collection of baseline management actions across managed tenants.
     *
     * @return array|null The managementActions
     */
    public function getManagementActions()
    {
        if (array_key_exists("managementActions", $this->_propDict)) {
           return $this->_propDict["managementActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementActions
    * The collection of baseline management actions across managed tenants.
    *
    * @param ManagementAction[] $val The managementActions
    *
    * @return ManagedTenant
    */
    public function setManagementActions($val)
    {
        $this->_propDict["managementActions"] = $val;
        return $this;
    }


     /**
     * Gets the managementActionTenantDeploymentStatuses
    * The tenant level status of management actions across managed tenants.
     *
     * @return array|null The managementActionTenantDeploymentStatuses
     */
    public function getManagementActionTenantDeploymentStatuses()
    {
        if (array_key_exists("managementActionTenantDeploymentStatuses", $this->_propDict)) {
           return $this->_propDict["managementActionTenantDeploymentStatuses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementActionTenantDeploymentStatuses
    * The tenant level status of management actions across managed tenants.
    *
    * @param ManagementActionTenantDeploymentStatus[] $val The managementActionTenantDeploymentStatuses
    *
    * @return ManagedTenant
    */
    public function setManagementActionTenantDeploymentStatuses($val)
    {
        $this->_propDict["managementActionTenantDeploymentStatuses"] = $val;
        return $this;
    }


     /**
     * Gets the managementIntents
    * The collection of baseline management intents across managed tenants.
     *
     * @return array|null The managementIntents
     */
    public function getManagementIntents()
    {
        if (array_key_exists("managementIntents", $this->_propDict)) {
           return $this->_propDict["managementIntents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementIntents
    * The collection of baseline management intents across managed tenants.
    *
    * @param ManagementIntent[] $val The managementIntents
    *
    * @return ManagedTenant
    */
    public function setManagementIntents($val)
    {
        $this->_propDict["managementIntents"] = $val;
        return $this;
    }


     /**
     * Gets the managementTemplateCollections
     *
     * @return array|null The managementTemplateCollections
     */
    public function getManagementTemplateCollections()
    {
        if (array_key_exists("managementTemplateCollections", $this->_propDict)) {
           return $this->_propDict["managementTemplateCollections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateCollections
    *
    * @param ManagementTemplateCollection[] $val The managementTemplateCollections
    *
    * @return ManagedTenant
    */
    public function setManagementTemplateCollections($val)
    {
        $this->_propDict["managementTemplateCollections"] = $val;
        return $this;
    }


     /**
     * Gets the managementTemplates
    * The collection of baseline management templates across managed tenants.
     *
     * @return array|null The managementTemplates
     */
    public function getManagementTemplates()
    {
        if (array_key_exists("managementTemplates", $this->_propDict)) {
           return $this->_propDict["managementTemplates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplates
    * The collection of baseline management templates across managed tenants.
    *
    * @param ManagementTemplate[] $val The managementTemplates
    *
    * @return ManagedTenant
    */
    public function setManagementTemplates($val)
    {
        $this->_propDict["managementTemplates"] = $val;
        return $this;
    }


     /**
     * Gets the managementTemplateSteps
     *
     * @return array|null The managementTemplateSteps
     */
    public function getManagementTemplateSteps()
    {
        if (array_key_exists("managementTemplateSteps", $this->_propDict)) {
           return $this->_propDict["managementTemplateSteps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateSteps
    *
    * @param ManagementTemplateStep[] $val The managementTemplateSteps
    *
    * @return ManagedTenant
    */
    public function setManagementTemplateSteps($val)
    {
        $this->_propDict["managementTemplateSteps"] = $val;
        return $this;
    }


     /**
     * Gets the managementTemplateStepVersions
     *
     * @return array|null The managementTemplateStepVersions
     */
    public function getManagementTemplateStepVersions()
    {
        if (array_key_exists("managementTemplateStepVersions", $this->_propDict)) {
           return $this->_propDict["managementTemplateStepVersions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateStepVersions
    *
    * @param ManagementTemplateStepVersion[] $val The managementTemplateStepVersions
    *
    * @return ManagedTenant
    */
    public function setManagementTemplateStepVersions($val)
    {
        $this->_propDict["managementTemplateStepVersions"] = $val;
        return $this;
    }


     /**
     * Gets the myRoles
    * The collection of role assignments to a signed-in user for a managed tenant.
     *
     * @return array|null The myRoles
     */
    public function getMyRoles()
    {
        if (array_key_exists("myRoles", $this->_propDict)) {
           return $this->_propDict["myRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the myRoles
    * The collection of role assignments to a signed-in user for a managed tenant.
    *
    * @param MyRole[] $val The myRoles
    *
    * @return ManagedTenant
    */
    public function setMyRoles($val)
    {
        $this->_propDict["myRoles"] = $val;
        return $this;
    }


     /**
     * Gets the tenantGroups
    * The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
     *
     * @return array|null The tenantGroups
     */
    public function getTenantGroups()
    {
        if (array_key_exists("tenantGroups", $this->_propDict)) {
           return $this->_propDict["tenantGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantGroups
    * The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
    *
    * @param TenantGroup[] $val The tenantGroups
    *
    * @return ManagedTenant
    */
    public function setTenantGroups($val)
    {
        $this->_propDict["tenantGroups"] = $val;
        return $this;
    }


     /**
     * Gets the tenants
    * The collection of tenants associated with the managing entity.
     *
     * @return array|null The tenants
     */
    public function getTenants()
    {
        if (array_key_exists("tenants", $this->_propDict)) {
           return $this->_propDict["tenants"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenants
    * The collection of tenants associated with the managing entity.
    *
    * @param Tenant[] $val The tenants
    *
    * @return ManagedTenant
    */
    public function setTenants($val)
    {
        $this->_propDict["tenants"] = $val;
        return $this;
    }


     /**
     * Gets the tenantsCustomizedInformation
    * The collection of tenant level customized information across managed tenants.
     *
     * @return array|null The tenantsCustomizedInformation
     */
    public function getTenantsCustomizedInformation()
    {
        if (array_key_exists("tenantsCustomizedInformation", $this->_propDict)) {
           return $this->_propDict["tenantsCustomizedInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantsCustomizedInformation
    * The collection of tenant level customized information across managed tenants.
    *
    * @param TenantCustomizedInformation[] $val The tenantsCustomizedInformation
    *
    * @return ManagedTenant
    */
    public function setTenantsCustomizedInformation($val)
    {
        $this->_propDict["tenantsCustomizedInformation"] = $val;
        return $this;
    }


     /**
     * Gets the tenantsDetailedInformation
    * The collection tenant level detailed information across managed tenants.
     *
     * @return array|null The tenantsDetailedInformation
     */
    public function getTenantsDetailedInformation()
    {
        if (array_key_exists("tenantsDetailedInformation", $this->_propDict)) {
           return $this->_propDict["tenantsDetailedInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantsDetailedInformation
    * The collection tenant level detailed information across managed tenants.
    *
    * @param TenantDetailedInformation[] $val The tenantsDetailedInformation
    *
    * @return ManagedTenant
    */
    public function setTenantsDetailedInformation($val)
    {
        $this->_propDict["tenantsDetailedInformation"] = $val;
        return $this;
    }


     /**
     * Gets the tenantTags
    * The collection of tenant tags across managed tenants.
     *
     * @return array|null The tenantTags
     */
    public function getTenantTags()
    {
        if (array_key_exists("tenantTags", $this->_propDict)) {
           return $this->_propDict["tenantTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantTags
    * The collection of tenant tags across managed tenants.
    *
    * @param TenantTag[] $val The tenantTags
    *
    * @return ManagedTenant
    */
    public function setTenantTags($val)
    {
        $this->_propDict["tenantTags"] = $val;
        return $this;
    }


     /**
     * Gets the windowsDeviceMalwareStates
    * The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     *
     * @return array|null The windowsDeviceMalwareStates
     */
    public function getWindowsDeviceMalwareStates()
    {
        if (array_key_exists("windowsDeviceMalwareStates", $this->_propDict)) {
           return $this->_propDict["windowsDeviceMalwareStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsDeviceMalwareStates
    * The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
    *
    * @param WindowsDeviceMalwareState[] $val The windowsDeviceMalwareStates
    *
    * @return ManagedTenant
    */
    public function setWindowsDeviceMalwareStates($val)
    {
        $this->_propDict["windowsDeviceMalwareStates"] = $val;
        return $this;
    }


     /**
     * Gets the windowsProtectionStates
    * The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     *
     * @return array|null The windowsProtectionStates
     */
    public function getWindowsProtectionStates()
    {
        if (array_key_exists("windowsProtectionStates", $this->_propDict)) {
           return $this->_propDict["windowsProtectionStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsProtectionStates
    * The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
    *
    * @param WindowsProtectionState[] $val The windowsProtectionStates
    *
    * @return ManagedTenant
    */
    public function setWindowsProtectionStates($val)
    {
        $this->_propDict["windowsProtectionStates"] = $val;
        return $this;
    }

}
