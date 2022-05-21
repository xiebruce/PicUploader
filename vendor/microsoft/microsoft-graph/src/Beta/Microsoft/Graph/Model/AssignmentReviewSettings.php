<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentReviewSettings File
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
* AssignmentReviewSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentReviewSettings extends Entity
{

    /**
    * Gets the accessReviewTimeoutBehavior
    * The default decision to apply if the request is not reviewed within the period specified in durationInDays. The possible values are: acceptAccessRecommendation, keepAccess, removeAccess, and unknownFutureValue.
    *
    * @return AccessReviewTimeoutBehavior|null The accessReviewTimeoutBehavior
    */
    public function getAccessReviewTimeoutBehavior()
    {
        if (array_key_exists("accessReviewTimeoutBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["accessReviewTimeoutBehavior"], "\Beta\Microsoft\Graph\Model\AccessReviewTimeoutBehavior") || is_null($this->_propDict["accessReviewTimeoutBehavior"])) {
                return $this->_propDict["accessReviewTimeoutBehavior"];
            } else {
                $this->_propDict["accessReviewTimeoutBehavior"] = new AccessReviewTimeoutBehavior($this->_propDict["accessReviewTimeoutBehavior"]);
                return $this->_propDict["accessReviewTimeoutBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the accessReviewTimeoutBehavior
    * The default decision to apply if the request is not reviewed within the period specified in durationInDays. The possible values are: acceptAccessRecommendation, keepAccess, removeAccess, and unknownFutureValue.
    *
    * @param AccessReviewTimeoutBehavior $val The value to assign to the accessReviewTimeoutBehavior
    *
    * @return AssignmentReviewSettings The AssignmentReviewSettings
    */
    public function setAccessReviewTimeoutBehavior($val)
    {
        $this->_propDict["accessReviewTimeoutBehavior"] = $val;
         return $this;
    }
    /**
    * Gets the durationInDays
    * The number of days within which reviewers should provide input.
    *
    * @return int|null The durationInDays
    */
    public function getDurationInDays()
    {
        if (array_key_exists("durationInDays", $this->_propDict)) {
            return $this->_propDict["durationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInDays
    * The number of days within which reviewers should provide input.
    *
    * @param int $val The value of the durationInDays
    *
    * @return AssignmentReviewSettings
    */
    public function setDurationInDays($val)
    {
        $this->_propDict["durationInDays"] = $val;
        return $this;
    }
    /**
    * Gets the isAccessRecommendationEnabled
    * Specifies whether to display recommendations to the reviewer. The default value is true
    *
    * @return bool|null The isAccessRecommendationEnabled
    */
    public function getIsAccessRecommendationEnabled()
    {
        if (array_key_exists("isAccessRecommendationEnabled", $this->_propDict)) {
            return $this->_propDict["isAccessRecommendationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAccessRecommendationEnabled
    * Specifies whether to display recommendations to the reviewer. The default value is true
    *
    * @param bool $val The value of the isAccessRecommendationEnabled
    *
    * @return AssignmentReviewSettings
    */
    public function setIsAccessRecommendationEnabled($val)
    {
        $this->_propDict["isAccessRecommendationEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalJustificationRequired
    * Specifies whether the reviewer must provide justification for the approval. The default value is true.
    *
    * @return bool|null The isApprovalJustificationRequired
    */
    public function getIsApprovalJustificationRequired()
    {
        if (array_key_exists("isApprovalJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isApprovalJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalJustificationRequired
    * Specifies whether the reviewer must provide justification for the approval. The default value is true.
    *
    * @param bool $val The value of the isApprovalJustificationRequired
    *
    * @return AssignmentReviewSettings
    */
    public function setIsApprovalJustificationRequired($val)
    {
        $this->_propDict["isApprovalJustificationRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabled
    * If true, access reviews are required for assignments from this policy.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * If true, access reviews are required for assignments from this policy.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return AssignmentReviewSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the recurrenceType
    * The interval for recurrence, such as monthly or quarterly.
    *
    * @return string|null The recurrenceType
    */
    public function getRecurrenceType()
    {
        if (array_key_exists("recurrenceType", $this->_propDict)) {
            return $this->_propDict["recurrenceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceType
    * The interval for recurrence, such as monthly or quarterly.
    *
    * @param string $val The value of the recurrenceType
    *
    * @return AssignmentReviewSettings
    */
    public function setRecurrenceType($val)
    {
        $this->_propDict["recurrenceType"] = $val;
        return $this;
    }

    /**
    * Gets the reviewers
    * If the reviewerType is Reviewers, this collection specifies the users who will be reviewers, either by ID or as members of a group, using a collection of singleUser and groupMembers.
    *
    * @return UserSet|null The reviewers
    */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
            if (is_a($this->_propDict["reviewers"], "\Beta\Microsoft\Graph\Model\UserSet") || is_null($this->_propDict["reviewers"])) {
                return $this->_propDict["reviewers"];
            } else {
                $this->_propDict["reviewers"] = new UserSet($this->_propDict["reviewers"]);
                return $this->_propDict["reviewers"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewers
    * If the reviewerType is Reviewers, this collection specifies the users who will be reviewers, either by ID or as members of a group, using a collection of singleUser and groupMembers.
    *
    * @param UserSet $val The value to assign to the reviewers
    *
    * @return AssignmentReviewSettings The AssignmentReviewSettings
    */
    public function setReviewers($val)
    {
        $this->_propDict["reviewers"] = $val;
         return $this;
    }
    /**
    * Gets the reviewerType
    * Who should be asked to do the review, either Self or Reviewers.
    *
    * @return string|null The reviewerType
    */
    public function getReviewerType()
    {
        if (array_key_exists("reviewerType", $this->_propDict)) {
            return $this->_propDict["reviewerType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewerType
    * Who should be asked to do the review, either Self or Reviewers.
    *
    * @param string $val The value of the reviewerType
    *
    * @return AssignmentReviewSettings
    */
    public function setReviewerType($val)
    {
        $this->_propDict["reviewerType"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * When the first review should start.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * When the first review should start.
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return AssignmentReviewSettings The AssignmentReviewSettings
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
}
