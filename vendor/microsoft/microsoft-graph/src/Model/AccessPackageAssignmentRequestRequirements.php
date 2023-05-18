<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentRequestRequirements File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AccessPackageAssignmentRequestRequirements class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentRequestRequirements extends Entity
{
    /**
    * Gets the allowCustomAssignmentSchedule
    * Indicates whether the requestor is allowed to set a custom schedule.
    *
    * @return bool|null The allowCustomAssignmentSchedule
    */
    public function getAllowCustomAssignmentSchedule()
    {
        if (array_key_exists("allowCustomAssignmentSchedule", $this->_propDict)) {
            return $this->_propDict["allowCustomAssignmentSchedule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCustomAssignmentSchedule
    * Indicates whether the requestor is allowed to set a custom schedule.
    *
    * @param bool $val The value of the allowCustomAssignmentSchedule
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setAllowCustomAssignmentSchedule($val)
    {
        $this->_propDict["allowCustomAssignmentSchedule"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalRequiredForAdd
    * Indicates whether a request to add must be approved by an approver.
    *
    * @return bool|null The isApprovalRequiredForAdd
    */
    public function getIsApprovalRequiredForAdd()
    {
        if (array_key_exists("isApprovalRequiredForAdd", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForAdd"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForAdd
    * Indicates whether a request to add must be approved by an approver.
    *
    * @param bool $val The value of the isApprovalRequiredForAdd
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setIsApprovalRequiredForAdd($val)
    {
        $this->_propDict["isApprovalRequiredForAdd"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalRequiredForUpdate
    * Indicates whether a request to update must be approved by an approver.
    *
    * @return bool|null The isApprovalRequiredForUpdate
    */
    public function getIsApprovalRequiredForUpdate()
    {
        if (array_key_exists("isApprovalRequiredForUpdate", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForUpdate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForUpdate
    * Indicates whether a request to update must be approved by an approver.
    *
    * @param bool $val The value of the isApprovalRequiredForUpdate
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setIsApprovalRequiredForUpdate($val)
    {
        $this->_propDict["isApprovalRequiredForUpdate"] = $val;
        return $this;
    }
    /**
    * Gets the policyDescription
    * The description of the policy that the user is trying to request access using.
    *
    * @return string|null The policyDescription
    */
    public function getPolicyDescription()
    {
        if (array_key_exists("policyDescription", $this->_propDict)) {
            return $this->_propDict["policyDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyDescription
    * The description of the policy that the user is trying to request access using.
    *
    * @param string $val The value of the policyDescription
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setPolicyDescription($val)
    {
        $this->_propDict["policyDescription"] = $val;
        return $this;
    }
    /**
    * Gets the policyDisplayName
    * The display name of the policy that the user is trying to request access using.
    *
    * @return string|null The policyDisplayName
    */
    public function getPolicyDisplayName()
    {
        if (array_key_exists("policyDisplayName", $this->_propDict)) {
            return $this->_propDict["policyDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyDisplayName
    * The display name of the policy that the user is trying to request access using.
    *
    * @param string $val The value of the policyDisplayName
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setPolicyDisplayName($val)
    {
        $this->_propDict["policyDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the policyId
    * The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
    *
    * @return string|null The policyId
    */
    public function getPolicyId()
    {
        if (array_key_exists("policyId", $this->_propDict)) {
            return $this->_propDict["policyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyId
    * The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
    *
    * @param string $val The value of the policyId
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setPolicyId($val)
    {
        $this->_propDict["policyId"] = $val;
        return $this;
    }

    /**
    * Gets the schedule
    * Schedule restrictions enforced, if any.
    *
    * @return EntitlementManagementSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Microsoft\Graph\Model\EntitlementManagementSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new EntitlementManagementSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    * Schedule restrictions enforced, if any.
    *
    * @param EntitlementManagementSchedule $val The value to assign to the schedule
    *
    * @return AccessPackageAssignmentRequestRequirements The AccessPackageAssignmentRequestRequirements
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
         return $this;
    }

    /**
    * Gets the questions
    *
    * @return AccessPackageQuestion|null The questions
    */
    public function getQuestions()
    {
        if (array_key_exists("questions", $this->_propDict)) {
            if (is_a($this->_propDict["questions"], "\Microsoft\Graph\Model\AccessPackageQuestion") || is_null($this->_propDict["questions"])) {
                return $this->_propDict["questions"];
            } else {
                $this->_propDict["questions"] = new AccessPackageQuestion($this->_propDict["questions"]);
                return $this->_propDict["questions"];
            }
        }
        return null;
    }

    /**
    * Sets the questions
    *
    * @param AccessPackageQuestion $val The value to assign to the questions
    *
    * @return AccessPackageAssignmentRequestRequirements The AccessPackageAssignmentRequestRequirements
    */
    public function setQuestions($val)
    {
        $this->_propDict["questions"] = $val;
         return $this;
    }
}
