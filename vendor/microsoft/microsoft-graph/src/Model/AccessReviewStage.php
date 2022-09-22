<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewStage File
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
* AccessReviewStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewStage extends Entity
{
    /**
    * Gets the endDateTime
    * The date and time in ISO 8601 format and UTC time when the review stage is scheduled to end. This property is the cumulative total of the durationInDays for all stages. Read-only.
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * The date and time in ISO 8601 format and UTC time when the review stage is scheduled to end. This property is the cumulative total of the durationInDays for all stages. Read-only.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return AccessReviewStage
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the fallbackReviewers
    * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist.
     *
     * @return array|null The fallbackReviewers
     */
    public function getFallbackReviewers()
    {
        if (array_key_exists("fallbackReviewers", $this->_propDict)) {
           return $this->_propDict["fallbackReviewers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fallbackReviewers
    * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist.
    *
    * @param AccessReviewReviewerScope[] $val The fallbackReviewers
    *
    * @return AccessReviewStage
    */
    public function setFallbackReviewers($val)
    {
        $this->_propDict["fallbackReviewers"] = $val;
        return $this;
    }


     /**
     * Gets the reviewers
    * This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     *
     * @return array|null The reviewers
     */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
           return $this->_propDict["reviewers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewers
    * This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
    *
    * @param AccessReviewReviewerScope[] $val The reviewers
    *
    * @return AccessReviewStage
    */
    public function setReviewers($val)
    {
        $this->_propDict["reviewers"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The date and time in ISO 8601 format and UTC time when the review stage is scheduled to start. Read-only.
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
    * The date and time in ISO 8601 format and UTC time when the review stage is scheduled to start. Read-only.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return AccessReviewStage
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only.
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
    * Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only.
    *
    * @param string $val The status
    *
    * @return AccessReviewStage
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the decisions
    * Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
     *
     * @return array|null The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists("decisions", $this->_propDict)) {
           return $this->_propDict["decisions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decisions
    * Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
    *
    * @param AccessReviewInstanceDecisionItem[] $val The decisions
    *
    * @return AccessReviewStage
    */
    public function setDecisions($val)
    {
        $this->_propDict["decisions"] = $val;
        return $this;
    }

}
