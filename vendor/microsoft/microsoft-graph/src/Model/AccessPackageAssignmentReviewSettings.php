<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentReviewSettings File
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
* AccessPackageAssignmentReviewSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentReviewSettings extends Entity
{

    /**
    * Gets the expirationBehavior
    * The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
    *
    * @return AccessReviewExpirationBehavior|null The expirationBehavior
    */
    public function getExpirationBehavior()
    {
        if (array_key_exists("expirationBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["expirationBehavior"], "\Microsoft\Graph\Model\AccessReviewExpirationBehavior") || is_null($this->_propDict["expirationBehavior"])) {
                return $this->_propDict["expirationBehavior"];
            } else {
                $this->_propDict["expirationBehavior"] = new AccessReviewExpirationBehavior($this->_propDict["expirationBehavior"]);
                return $this->_propDict["expirationBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationBehavior
    * The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
    *
    * @param AccessReviewExpirationBehavior $val The value to assign to the expirationBehavior
    *
    * @return AccessPackageAssignmentReviewSettings The AccessPackageAssignmentReviewSettings
    */
    public function setExpirationBehavior($val)
    {
        $this->_propDict["expirationBehavior"] = $val;
         return $this;
    }

    /**
    * Gets the fallbackReviewers
    * This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
    *
    * @return SubjectSet|null The fallbackReviewers
    */
    public function getFallbackReviewers()
    {
        if (array_key_exists("fallbackReviewers", $this->_propDict)) {
            if (is_a($this->_propDict["fallbackReviewers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["fallbackReviewers"])) {
                return $this->_propDict["fallbackReviewers"];
            } else {
                $this->_propDict["fallbackReviewers"] = new SubjectSet($this->_propDict["fallbackReviewers"]);
                return $this->_propDict["fallbackReviewers"];
            }
        }
        return null;
    }

    /**
    * Sets the fallbackReviewers
    * This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
    *
    * @param SubjectSet $val The value to assign to the fallbackReviewers
    *
    * @return AccessPackageAssignmentReviewSettings The AccessPackageAssignmentReviewSettings
    */
    public function setFallbackReviewers($val)
    {
        $this->_propDict["fallbackReviewers"] = $val;
         return $this;
    }
    /**
    * Gets the isEnabled
    * If true, access reviews are required for assignments through this policy.
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
    * If true, access reviews are required for assignments through this policy.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return AccessPackageAssignmentReviewSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isRecommendationEnabled
    * Specifies whether to display recommendations to the reviewer. The default value is true.
    *
    * @return bool|null The isRecommendationEnabled
    */
    public function getIsRecommendationEnabled()
    {
        if (array_key_exists("isRecommendationEnabled", $this->_propDict)) {
            return $this->_propDict["isRecommendationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRecommendationEnabled
    * Specifies whether to display recommendations to the reviewer. The default value is true.
    *
    * @param bool $val The value of the isRecommendationEnabled
    *
    * @return AccessPackageAssignmentReviewSettings
    */
    public function setIsRecommendationEnabled($val)
    {
        $this->_propDict["isRecommendationEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isReviewerJustificationRequired
    * Specifies whether the reviewer must provide justification for the approval. The default value is true.
    *
    * @return bool|null The isReviewerJustificationRequired
    */
    public function getIsReviewerJustificationRequired()
    {
        if (array_key_exists("isReviewerJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isReviewerJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReviewerJustificationRequired
    * Specifies whether the reviewer must provide justification for the approval. The default value is true.
    *
    * @param bool $val The value of the isReviewerJustificationRequired
    *
    * @return AccessPackageAssignmentReviewSettings
    */
    public function setIsReviewerJustificationRequired($val)
    {
        $this->_propDict["isReviewerJustificationRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isSelfReview
    * Specifies whether the principals can review their own assignments.
    *
    * @return bool|null The isSelfReview
    */
    public function getIsSelfReview()
    {
        if (array_key_exists("isSelfReview", $this->_propDict)) {
            return $this->_propDict["isSelfReview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSelfReview
    * Specifies whether the principals can review their own assignments.
    *
    * @param bool $val The value of the isSelfReview
    *
    * @return AccessPackageAssignmentReviewSettings
    */
    public function setIsSelfReview($val)
    {
        $this->_propDict["isSelfReview"] = $val;
        return $this;
    }

    /**
    * Gets the primaryReviewers
    * This collection specifies the users or group of users who will review the access package assignments.
    *
    * @return SubjectSet|null The primaryReviewers
    */
    public function getPrimaryReviewers()
    {
        if (array_key_exists("primaryReviewers", $this->_propDict)) {
            if (is_a($this->_propDict["primaryReviewers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["primaryReviewers"])) {
                return $this->_propDict["primaryReviewers"];
            } else {
                $this->_propDict["primaryReviewers"] = new SubjectSet($this->_propDict["primaryReviewers"]);
                return $this->_propDict["primaryReviewers"];
            }
        }
        return null;
    }

    /**
    * Sets the primaryReviewers
    * This collection specifies the users or group of users who will review the access package assignments.
    *
    * @param SubjectSet $val The value to assign to the primaryReviewers
    *
    * @return AccessPackageAssignmentReviewSettings The AccessPackageAssignmentReviewSettings
    */
    public function setPrimaryReviewers($val)
    {
        $this->_propDict["primaryReviewers"] = $val;
         return $this;
    }

    /**
    * Gets the schedule
    * When the first review should start and how often it should recur.
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
    * When the first review should start and how often it should recur.
    *
    * @param EntitlementManagementSchedule $val The value to assign to the schedule
    *
    * @return AccessPackageAssignmentReviewSettings The AccessPackageAssignmentReviewSettings
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
         return $this;
    }
}
