<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRoleAssignmentRequestStatus File
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
* GovernanceRoleAssignmentRequestStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRoleAssignmentRequestStatus extends Entity
{
    /**
    * Gets the status
    * The status of the role assignment request. The value can be InProgress or Closed.
    *
    * @return string|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    * The status of the role assignment request. The value can be InProgress or Closed.
    *
    * @param string $val The value of the status
    *
    * @return GovernanceRoleAssignmentRequestStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the statusDetails
    * The details of the status of the role assignment request. It represents the evaluation results of different rules.
    *
    * @return KeyValue|null The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict)) {
            if (is_a($this->_propDict["statusDetails"], "\Beta\Microsoft\Graph\Model\KeyValue") || is_null($this->_propDict["statusDetails"])) {
                return $this->_propDict["statusDetails"];
            } else {
                $this->_propDict["statusDetails"] = new KeyValue($this->_propDict["statusDetails"]);
                return $this->_propDict["statusDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the statusDetails
    * The details of the status of the role assignment request. It represents the evaluation results of different rules.
    *
    * @param KeyValue $val The value to assign to the statusDetails
    *
    * @return GovernanceRoleAssignmentRequestStatus The GovernanceRoleAssignmentRequestStatus
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
         return $this;
    }
    /**
    * Gets the subStatus
    * The sub status of the role assignment request. The values can be Accepted, PendingEvaluation, Granted, Denied, PendingProvisioning, Provisioned, PendingRevocation, Revoked, Canceled, Failed, PendingApprovalProvisioning, PendingApproval, FailedAsResourceIsLocked, PendingAdminDecision, AdminApproved, AdminDenied, TimedOut, and ProvisioningStarted.
    *
    * @return string|null The subStatus
    */
    public function getSubStatus()
    {
        if (array_key_exists("subStatus", $this->_propDict)) {
            return $this->_propDict["subStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subStatus
    * The sub status of the role assignment request. The values can be Accepted, PendingEvaluation, Granted, Denied, PendingProvisioning, Provisioned, PendingRevocation, Revoked, Canceled, Failed, PendingApprovalProvisioning, PendingApproval, FailedAsResourceIsLocked, PendingAdminDecision, AdminApproved, AdminDenied, TimedOut, and ProvisioningStarted.
    *
    * @param string $val The value of the subStatus
    *
    * @return GovernanceRoleAssignmentRequestStatus
    */
    public function setSubStatus($val)
    {
        $this->_propDict["subStatus"] = $val;
        return $this;
    }
}
