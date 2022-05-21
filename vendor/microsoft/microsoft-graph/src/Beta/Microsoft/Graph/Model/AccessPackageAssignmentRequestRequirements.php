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
namespace Beta\Microsoft\Graph\Model;
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
    * Gets the existingAnswers
    * Answers that have already been provided.
    *
    * @return AccessPackageAnswer|null The existingAnswers
    */
    public function getExistingAnswers()
    {
        if (array_key_exists("existingAnswers", $this->_propDict)) {
            if (is_a($this->_propDict["existingAnswers"], "\Beta\Microsoft\Graph\Model\AccessPackageAnswer") || is_null($this->_propDict["existingAnswers"])) {
                return $this->_propDict["existingAnswers"];
            } else {
                $this->_propDict["existingAnswers"] = new AccessPackageAnswer($this->_propDict["existingAnswers"]);
                return $this->_propDict["existingAnswers"];
            }
        }
        return null;
    }

    /**
    * Sets the existingAnswers
    * Answers that have already been provided.
    *
    * @param AccessPackageAnswer $val The value to assign to the existingAnswers
    *
    * @return AccessPackageAssignmentRequestRequirements The AccessPackageAssignmentRequestRequirements
    */
    public function setExistingAnswers($val)
    {
        $this->_propDict["existingAnswers"] = $val;
         return $this;
    }
    /**
    * Gets the isApprovalRequired
    * Indicates whether a request must be approved by an approver.
    *
    * @return bool|null The isApprovalRequired
    */
    public function getIsApprovalRequired()
    {
        if (array_key_exists("isApprovalRequired", $this->_propDict)) {
            return $this->_propDict["isApprovalRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequired
    * Indicates whether a request must be approved by an approver.
    *
    * @param bool $val The value of the isApprovalRequired
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setIsApprovalRequired($val)
    {
        $this->_propDict["isApprovalRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalRequiredForExtension
    * Indicates whether approval is required when a user tries to extend their access.
    *
    * @return bool|null The isApprovalRequiredForExtension
    */
    public function getIsApprovalRequiredForExtension()
    {
        if (array_key_exists("isApprovalRequiredForExtension", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForExtension"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForExtension
    * Indicates whether approval is required when a user tries to extend their access.
    *
    * @param bool $val The value of the isApprovalRequiredForExtension
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setIsApprovalRequiredForExtension($val)
    {
        $this->_propDict["isApprovalRequiredForExtension"] = $val;
        return $this;
    }
    /**
    * Gets the isCustomAssignmentScheduleAllowed
    * Indicates whether the requestor is allowed to set a custom schedule.
    *
    * @return bool|null The isCustomAssignmentScheduleAllowed
    */
    public function getIsCustomAssignmentScheduleAllowed()
    {
        if (array_key_exists("isCustomAssignmentScheduleAllowed", $this->_propDict)) {
            return $this->_propDict["isCustomAssignmentScheduleAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCustomAssignmentScheduleAllowed
    * Indicates whether the requestor is allowed to set a custom schedule.
    *
    * @param bool $val The value of the isCustomAssignmentScheduleAllowed
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setIsCustomAssignmentScheduleAllowed($val)
    {
        $this->_propDict["isCustomAssignmentScheduleAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the isRequestorJustificationRequired
    * Indicates whether a requestor must supply justification when submitting an assignment request.
    *
    * @return bool|null The isRequestorJustificationRequired
    */
    public function getIsRequestorJustificationRequired()
    {
        if (array_key_exists("isRequestorJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isRequestorJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequestorJustificationRequired
    * Indicates whether a requestor must supply justification when submitting an assignment request.
    *
    * @param bool $val The value of the isRequestorJustificationRequired
    *
    * @return AccessPackageAssignmentRequestRequirements
    */
    public function setIsRequestorJustificationRequired($val)
    {
        $this->_propDict["isRequestorJustificationRequired"] = $val;
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
    * Gets the questions
    * Questions that are configured on the policy. The questions can be required or optional; callers can determine whether a question is required or optional based on the isRequired property on accessPackageQuestion.
    *
    * @return AccessPackageQuestion|null The questions
    */
    public function getQuestions()
    {
        if (array_key_exists("questions", $this->_propDict)) {
            if (is_a($this->_propDict["questions"], "\Beta\Microsoft\Graph\Model\AccessPackageQuestion") || is_null($this->_propDict["questions"])) {
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
    * Questions that are configured on the policy. The questions can be required or optional; callers can determine whether a question is required or optional based on the isRequired property on accessPackageQuestion.
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

    /**
    * Gets the schedule
    * Schedule restrictions enforced, if any.
    *
    * @return RequestSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\Model\RequestSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new RequestSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    * Schedule restrictions enforced, if any.
    *
    * @param RequestSchedule $val The value to assign to the schedule
    *
    * @return AccessPackageAssignmentRequestRequirements The AccessPackageAssignmentRequestRequirements
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
         return $this;
    }
}
