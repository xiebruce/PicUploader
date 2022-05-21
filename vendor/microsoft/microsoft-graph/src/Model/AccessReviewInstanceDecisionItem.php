<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInstanceDecisionItem File
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
* AccessReviewInstanceDecisionItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInstanceDecisionItem extends Entity
{
    /**
    * Gets the accessReviewId
    * The identifier of the accessReviewInstance parent. Supports $select. Read-only.
    *
    * @return string|null The accessReviewId
    */
    public function getAccessReviewId()
    {
        if (array_key_exists("accessReviewId", $this->_propDict)) {
            return $this->_propDict["accessReviewId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessReviewId
    * The identifier of the accessReviewInstance parent. Supports $select. Read-only.
    *
    * @param string $val The accessReviewId
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setAccessReviewId($val)
    {
        $this->_propDict["accessReviewId"] = $val;
        return $this;
    }

    /**
    * Gets the appliedBy
    * The identifier of the user who applied the decision. Read-only.
    *
    * @return UserIdentity|null The appliedBy
    */
    public function getAppliedBy()
    {
        if (array_key_exists("appliedBy", $this->_propDict)) {
            if (is_a($this->_propDict["appliedBy"], "\Microsoft\Graph\Model\UserIdentity") || is_null($this->_propDict["appliedBy"])) {
                return $this->_propDict["appliedBy"];
            } else {
                $this->_propDict["appliedBy"] = new UserIdentity($this->_propDict["appliedBy"]);
                return $this->_propDict["appliedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the appliedBy
    * The identifier of the user who applied the decision. Read-only.
    *
    * @param UserIdentity $val The appliedBy
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setAppliedBy($val)
    {
        $this->_propDict["appliedBy"] = $val;
        return $this;
    }

    /**
    * Gets the appliedDateTime
    * The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
    *
    * @return \DateTime|null The appliedDateTime
    */
    public function getAppliedDateTime()
    {
        if (array_key_exists("appliedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["appliedDateTime"], "\DateTime") || is_null($this->_propDict["appliedDateTime"])) {
                return $this->_propDict["appliedDateTime"];
            } else {
                $this->_propDict["appliedDateTime"] = new \DateTime($this->_propDict["appliedDateTime"]);
                return $this->_propDict["appliedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the appliedDateTime
    * The timestamp when the approval decision was applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
    *
    * @param \DateTime $val The appliedDateTime
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setAppliedDateTime($val)
    {
        $this->_propDict["appliedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the applyResult
    * The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
    *
    * @return string|null The applyResult
    */
    public function getApplyResult()
    {
        if (array_key_exists("applyResult", $this->_propDict)) {
            return $this->_propDict["applyResult"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applyResult
    * The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
    *
    * @param string $val The applyResult
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setApplyResult($val)
    {
        $this->_propDict["applyResult"] = $val;
        return $this;
    }

    /**
    * Gets the decision
    * Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
    *
    * @return string|null The decision
    */
    public function getDecision()
    {
        if (array_key_exists("decision", $this->_propDict)) {
            return $this->_propDict["decision"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decision
    * Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
    *
    * @param string $val The decision
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setDecision($val)
    {
        $this->_propDict["decision"] = $val;
        return $this;
    }

    /**
    * Gets the justification
    * Justification left by the reviewer when they made the decision.
    *
    * @return string|null The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justification
    * Justification left by the reviewer when they made the decision.
    *
    * @param string $val The justification
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }

    /**
    * Gets the principal
    * Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
    *
    * @return Identity|null The principal
    */
    public function getPrincipal()
    {
        if (array_key_exists("principal", $this->_propDict)) {
            if (is_a($this->_propDict["principal"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["principal"])) {
                return $this->_propDict["principal"];
            } else {
                $this->_propDict["principal"] = new Identity($this->_propDict["principal"]);
                return $this->_propDict["principal"];
            }
        }
        return null;
    }

    /**
    * Sets the principal
    * Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
    *
    * @param Identity $val The principal
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }

    /**
    * Gets the principalLink
    * Link to the principal object. For example: https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
    *
    * @return string|null The principalLink
    */
    public function getPrincipalLink()
    {
        if (array_key_exists("principalLink", $this->_propDict)) {
            return $this->_propDict["principalLink"];
        } else {
            return null;
        }
    }

    /**
    * Sets the principalLink
    * Link to the principal object. For example: https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
    *
    * @param string $val The principalLink
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setPrincipalLink($val)
    {
        $this->_propDict["principalLink"] = $val;
        return $this;
    }

    /**
    * Gets the recommendation
    * A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
    *
    * @return string|null The recommendation
    */
    public function getRecommendation()
    {
        if (array_key_exists("recommendation", $this->_propDict)) {
            return $this->_propDict["recommendation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendation
    * A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. Recommend approve if sign-in is within thirty days of start of review. Recommend deny if sign-in is greater than thirty days of start of review. Recommendation not available otherwise. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
    *
    * @param string $val The recommendation
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setRecommendation($val)
    {
        $this->_propDict["recommendation"] = $val;
        return $this;
    }

    /**
    * Gets the resource
    * Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
    *
    * @return AccessReviewInstanceDecisionItemResource|null The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Microsoft\Graph\Model\AccessReviewInstanceDecisionItemResource") || is_null($this->_propDict["resource"])) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new AccessReviewInstanceDecisionItemResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }

    /**
    * Sets the resource
    * Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
    *
    * @param AccessReviewInstanceDecisionItemResource $val The resource
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }

    /**
    * Gets the resourceLink
    * A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
    *
    * @return string|null The resourceLink
    */
    public function getResourceLink()
    {
        if (array_key_exists("resourceLink", $this->_propDict)) {
            return $this->_propDict["resourceLink"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceLink
    * A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
    *
    * @param string $val The resourceLink
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setResourceLink($val)
    {
        $this->_propDict["resourceLink"] = $val;
        return $this;
    }

    /**
    * Gets the reviewedBy
    * The identifier of the reviewer. Supports $select. Read-only.
    *
    * @return UserIdentity|null The reviewedBy
    */
    public function getReviewedBy()
    {
        if (array_key_exists("reviewedBy", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedBy"], "\Microsoft\Graph\Model\UserIdentity") || is_null($this->_propDict["reviewedBy"])) {
                return $this->_propDict["reviewedBy"];
            } else {
                $this->_propDict["reviewedBy"] = new UserIdentity($this->_propDict["reviewedBy"]);
                return $this->_propDict["reviewedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewedBy
    * The identifier of the reviewer. Supports $select. Read-only.
    *
    * @param UserIdentity $val The reviewedBy
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setReviewedBy($val)
    {
        $this->_propDict["reviewedBy"] = $val;
        return $this;
    }

    /**
    * Gets the reviewedDateTime
    * The timestamp when the review decision occurred. Supports $select. Read-only.
    *
    * @return \DateTime|null The reviewedDateTime
    */
    public function getReviewedDateTime()
    {
        if (array_key_exists("reviewedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedDateTime"], "\DateTime") || is_null($this->_propDict["reviewedDateTime"])) {
                return $this->_propDict["reviewedDateTime"];
            } else {
                $this->_propDict["reviewedDateTime"] = new \DateTime($this->_propDict["reviewedDateTime"]);
                return $this->_propDict["reviewedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewedDateTime
    * The timestamp when the review decision occurred. Supports $select. Read-only.
    *
    * @param \DateTime $val The reviewedDateTime
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setReviewedDateTime($val)
    {
        $this->_propDict["reviewedDateTime"] = $val;
        return $this;
    }

}
