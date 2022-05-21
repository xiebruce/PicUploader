<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementActionTenantDeploymentStatus File
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
* ManagementActionTenantDeploymentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementActionTenantDeploymentStatus extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the statuses
    * The collection of deployment status for each instance of a management action. Optional.
     *
     * @return array|null The statuses
     */
    public function getStatuses()
    {
        if (array_key_exists("statuses", $this->_propDict)) {
           return $this->_propDict["statuses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statuses
    * The collection of deployment status for each instance of a management action. Optional.
    *
    * @param ManagementActionDeploymentStatus[] $val The statuses
    *
    * @return ManagementActionTenantDeploymentStatus
    */
    public function setStatuses($val)
    {
        $this->_propDict["statuses"] = $val;
        return $this;
    }

    /**
    * Gets the tenantGroupId
    * The identifier for the tenant group that is associated with the management action. Required. Read-only.
    *
    * @return string|null The tenantGroupId
    */
    public function getTenantGroupId()
    {
        if (array_key_exists("tenantGroupId", $this->_propDict)) {
            return $this->_propDict["tenantGroupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantGroupId
    * The identifier for the tenant group that is associated with the management action. Required. Read-only.
    *
    * @param string $val The tenantGroupId
    *
    * @return ManagementActionTenantDeploymentStatus
    */
    public function setTenantGroupId($val)
    {
        $this->_propDict["tenantGroupId"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
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
    * The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return ManagementActionTenantDeploymentStatus
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

}
