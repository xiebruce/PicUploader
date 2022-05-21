<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementActionDeploymentStatus File
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
* ManagementActionDeploymentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementActionDeploymentStatus extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the managementActionId
    * The identifier for the management action. Required. Read-only.
    *
    * @return string|null The managementActionId
    */
    public function getManagementActionId()
    {
        if (array_key_exists("managementActionId", $this->_propDict)) {
            return $this->_propDict["managementActionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementActionId
    * The identifier for the management action. Required. Read-only.
    *
    * @param string $val The value of the managementActionId
    *
    * @return ManagementActionDeploymentStatus
    */
    public function setManagementActionId($val)
    {
        $this->_propDict["managementActionId"] = $val;
        return $this;
    }
    /**
    * Gets the managementTemplateId
    * The management template identifier that was used to generate the management action. Required. Read-only.
    *
    * @return string|null The managementTemplateId
    */
    public function getManagementTemplateId()
    {
        if (array_key_exists("managementTemplateId", $this->_propDict)) {
            return $this->_propDict["managementTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateId
    * The management template identifier that was used to generate the management action. Required. Read-only.
    *
    * @param string $val The value of the managementTemplateId
    *
    * @return ManagementActionDeploymentStatus
    */
    public function setManagementTemplateId($val)
    {
        $this->_propDict["managementTemplateId"] = $val;
        return $this;
    }
    /**
    * Gets the managementTemplateVersion
    *
    * @return int|null The managementTemplateVersion
    */
    public function getManagementTemplateVersion()
    {
        if (array_key_exists("managementTemplateVersion", $this->_propDict)) {
            return $this->_propDict["managementTemplateVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateVersion
    *
    * @param int $val The value of the managementTemplateVersion
    *
    * @return ManagementActionDeploymentStatus
    */
    public function setManagementTemplateVersion($val)
    {
        $this->_propDict["managementTemplateVersion"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the management action. Possible values are: toAddress, completed, error, timeOut, inProgress, planned, resolvedBy3rdParty, resolvedThroughAlternateMitigation, riskAccepted, unknownFutureValue. Required.
    *
    * @return ManagementActionStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementActionStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ManagementActionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the management action. Possible values are: toAddress, completed, error, timeOut, inProgress, planned, resolvedBy3rdParty, resolvedThroughAlternateMitigation, riskAccepted, unknownFutureValue. Required.
    *
    * @param ManagementActionStatus $val The value to assign to the status
    *
    * @return ManagementActionDeploymentStatus The ManagementActionDeploymentStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }

    /**
    * Gets the workloadActionDeploymentStatuses
    * The collection of workload action deployment statues for the given management action. Optional.
    *
    * @return WorkloadActionDeploymentStatus|null The workloadActionDeploymentStatuses
    */
    public function getWorkloadActionDeploymentStatuses()
    {
        if (array_key_exists("workloadActionDeploymentStatuses", $this->_propDict)) {
            if (is_a($this->_propDict["workloadActionDeploymentStatuses"], "\Beta\Microsoft\Graph\ManagedTenants\Model\WorkloadActionDeploymentStatus") || is_null($this->_propDict["workloadActionDeploymentStatuses"])) {
                return $this->_propDict["workloadActionDeploymentStatuses"];
            } else {
                $this->_propDict["workloadActionDeploymentStatuses"] = new WorkloadActionDeploymentStatus($this->_propDict["workloadActionDeploymentStatuses"]);
                return $this->_propDict["workloadActionDeploymentStatuses"];
            }
        }
        return null;
    }

    /**
    * Sets the workloadActionDeploymentStatuses
    * The collection of workload action deployment statues for the given management action. Optional.
    *
    * @param WorkloadActionDeploymentStatus $val The value to assign to the workloadActionDeploymentStatuses
    *
    * @return ManagementActionDeploymentStatus The ManagementActionDeploymentStatus
    */
    public function setWorkloadActionDeploymentStatuses($val)
    {
        $this->_propDict["workloadActionDeploymentStatuses"] = $val;
         return $this;
    }
}
