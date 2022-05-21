<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedApprovalStage File
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
* UnifiedApprovalStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedApprovalStage extends Entity
{
    /**
    * Gets the approvalStageTimeOutInDays
    * The number of days that a request can be pending a response before it is automatically denied.
    *
    * @return int|null The approvalStageTimeOutInDays
    */
    public function getApprovalStageTimeOutInDays()
    {
        if (array_key_exists("approvalStageTimeOutInDays", $this->_propDict)) {
            return $this->_propDict["approvalStageTimeOutInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the approvalStageTimeOutInDays
    * The number of days that a request can be pending a response before it is automatically denied.
    *
    * @param int $val The value of the approvalStageTimeOutInDays
    *
    * @return UnifiedApprovalStage
    */
    public function setApprovalStageTimeOutInDays($val)
    {
        $this->_propDict["approvalStageTimeOutInDays"] = $val;
        return $this;
    }

    /**
    * Gets the escalationApprovers
    * The escalation approvers for this stage when the primary approvers don't respond.
    *
    * @return SubjectSet|null The escalationApprovers
    */
    public function getEscalationApprovers()
    {
        if (array_key_exists("escalationApprovers", $this->_propDict)) {
            if (is_a($this->_propDict["escalationApprovers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["escalationApprovers"])) {
                return $this->_propDict["escalationApprovers"];
            } else {
                $this->_propDict["escalationApprovers"] = new SubjectSet($this->_propDict["escalationApprovers"]);
                return $this->_propDict["escalationApprovers"];
            }
        }
        return null;
    }

    /**
    * Sets the escalationApprovers
    * The escalation approvers for this stage when the primary approvers don't respond.
    *
    * @param SubjectSet $val The value to assign to the escalationApprovers
    *
    * @return UnifiedApprovalStage The UnifiedApprovalStage
    */
    public function setEscalationApprovers($val)
    {
        $this->_propDict["escalationApprovers"] = $val;
         return $this;
    }
    /**
    * Gets the escalationTimeInMinutes
    * The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers.
    *
    * @return int|null The escalationTimeInMinutes
    */
    public function getEscalationTimeInMinutes()
    {
        if (array_key_exists("escalationTimeInMinutes", $this->_propDict)) {
            return $this->_propDict["escalationTimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the escalationTimeInMinutes
    * The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers.
    *
    * @param int $val The value of the escalationTimeInMinutes
    *
    * @return UnifiedApprovalStage
    */
    public function setEscalationTimeInMinutes($val)
    {
        $this->_propDict["escalationTimeInMinutes"] = $val;
        return $this;
    }
    /**
    * Gets the isApproverJustificationRequired
    * Indicates whether the approver must provide justification for their reponse.
    *
    * @return bool|null The isApproverJustificationRequired
    */
    public function getIsApproverJustificationRequired()
    {
        if (array_key_exists("isApproverJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isApproverJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApproverJustificationRequired
    * Indicates whether the approver must provide justification for their reponse.
    *
    * @param bool $val The value of the isApproverJustificationRequired
    *
    * @return UnifiedApprovalStage
    */
    public function setIsApproverJustificationRequired($val)
    {
        $this->_propDict["isApproverJustificationRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isEscalationEnabled
    * Indicates whether escalation if enabled.
    *
    * @return bool|null The isEscalationEnabled
    */
    public function getIsEscalationEnabled()
    {
        if (array_key_exists("isEscalationEnabled", $this->_propDict)) {
            return $this->_propDict["isEscalationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEscalationEnabled
    * Indicates whether escalation if enabled.
    *
    * @param bool $val The value of the isEscalationEnabled
    *
    * @return UnifiedApprovalStage
    */
    public function setIsEscalationEnabled($val)
    {
        $this->_propDict["isEscalationEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the primaryApprovers
    * The primary approvers of this stage.
    *
    * @return SubjectSet|null The primaryApprovers
    */
    public function getPrimaryApprovers()
    {
        if (array_key_exists("primaryApprovers", $this->_propDict)) {
            if (is_a($this->_propDict["primaryApprovers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["primaryApprovers"])) {
                return $this->_propDict["primaryApprovers"];
            } else {
                $this->_propDict["primaryApprovers"] = new SubjectSet($this->_propDict["primaryApprovers"]);
                return $this->_propDict["primaryApprovers"];
            }
        }
        return null;
    }

    /**
    * Sets the primaryApprovers
    * The primary approvers of this stage.
    *
    * @param SubjectSet $val The value to assign to the primaryApprovers
    *
    * @return UnifiedApprovalStage The UnifiedApprovalStage
    */
    public function setPrimaryApprovers($val)
    {
        $this->_propDict["primaryApprovers"] = $val;
         return $this;
    }
}
