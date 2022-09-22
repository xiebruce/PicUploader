<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubmissionAdminReview File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* SubmissionAdminReview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubmissionAdminReview extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the reviewBy
    * Specifies who reviewed the email. The identification is an email ID or other identity strings.
    *
    * @return string|null The reviewBy
    */
    public function getReviewBy()
    {
        if (array_key_exists("reviewBy", $this->_propDict)) {
            return $this->_propDict["reviewBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewBy
    * Specifies who reviewed the email. The identification is an email ID or other identity strings.
    *
    * @param string $val The value of the reviewBy
    *
    * @return SubmissionAdminReview
    */
    public function setReviewBy($val)
    {
        $this->_propDict["reviewBy"] = $val;
        return $this;
    }

    /**
    * Gets the reviewDateTime
    * Specifies the date time when the review occurred.
    *
    * @return \DateTime|null The reviewDateTime
    */
    public function getReviewDateTime()
    {
        if (array_key_exists("reviewDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewDateTime"], "\DateTime") || is_null($this->_propDict["reviewDateTime"])) {
                return $this->_propDict["reviewDateTime"];
            } else {
                $this->_propDict["reviewDateTime"] = new \DateTime($this->_propDict["reviewDateTime"]);
                return $this->_propDict["reviewDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewDateTime
    * Specifies the date time when the review occurred.
    *
    * @param \DateTime $val The value to assign to the reviewDateTime
    *
    * @return SubmissionAdminReview The SubmissionAdminReview
    */
    public function setReviewDateTime($val)
    {
        $this->_propDict["reviewDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the reviewResult
    * Specifies what the review result was. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable, and unknownFutureValue.
    *
    * @return SubmissionResultCategory|null The reviewResult
    */
    public function getReviewResult()
    {
        if (array_key_exists("reviewResult", $this->_propDict)) {
            if (is_a($this->_propDict["reviewResult"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionResultCategory") || is_null($this->_propDict["reviewResult"])) {
                return $this->_propDict["reviewResult"];
            } else {
                $this->_propDict["reviewResult"] = new SubmissionResultCategory($this->_propDict["reviewResult"]);
                return $this->_propDict["reviewResult"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewResult
    * Specifies what the review result was. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable, and unknownFutureValue.
    *
    * @param SubmissionResultCategory $val The value to assign to the reviewResult
    *
    * @return SubmissionAdminReview The SubmissionAdminReview
    */
    public function setReviewResult($val)
    {
        $this->_propDict["reviewResult"] = $val;
         return $this;
    }
}
