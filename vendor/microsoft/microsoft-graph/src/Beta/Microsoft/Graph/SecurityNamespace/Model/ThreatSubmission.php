<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThreatSubmission File
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
* ThreatSubmission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ThreatSubmission extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the adminReview
    * Specifies the admin review property which constitutes of who reviewed the user submission, when and what was it identified as.
    *
    * @return SubmissionAdminReview|null The adminReview
    */
    public function getAdminReview()
    {
        if (array_key_exists("adminReview", $this->_propDict)) {
            if (is_a($this->_propDict["adminReview"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionAdminReview") || is_null($this->_propDict["adminReview"])) {
                return $this->_propDict["adminReview"];
            } else {
                $this->_propDict["adminReview"] = new SubmissionAdminReview($this->_propDict["adminReview"]);
                return $this->_propDict["adminReview"];
            }
        }
        return null;
    }

    /**
    * Sets the adminReview
    * Specifies the admin review property which constitutes of who reviewed the user submission, when and what was it identified as.
    *
    * @param SubmissionAdminReview $val The adminReview
    *
    * @return ThreatSubmission
    */
    public function setAdminReview($val)
    {
        $this->_propDict["adminReview"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * Specifies the category of the submission. Supports $filter = category eq 'value'. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
    *
    * @return SubmissionCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new SubmissionCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * Specifies the category of the submission. Supports $filter = category eq 'value'. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
    *
    * @param SubmissionCategory $val The category
    *
    * @return ThreatSubmission
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the clientSource
    * Specifies the source of the submission. The possible values are: microsoft,  other and unkownFutureValue.
    *
    * @return SubmissionClientSource|null The clientSource
    */
    public function getClientSource()
    {
        if (array_key_exists("clientSource", $this->_propDict)) {
            if (is_a($this->_propDict["clientSource"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionClientSource") || is_null($this->_propDict["clientSource"])) {
                return $this->_propDict["clientSource"];
            } else {
                $this->_propDict["clientSource"] = new SubmissionClientSource($this->_propDict["clientSource"]);
                return $this->_propDict["clientSource"];
            }
        }
        return null;
    }

    /**
    * Sets the clientSource
    * Specifies the source of the submission. The possible values are: microsoft,  other and unkownFutureValue.
    *
    * @param SubmissionClientSource $val The clientSource
    *
    * @return ThreatSubmission
    */
    public function setClientSource($val)
    {
        $this->_propDict["clientSource"] = $val;
        return $this;
    }

    /**
    * Gets the contentType
    * Specifies the type of content being submitted. The possible values are: email, url, file, app and unkownFutureValue.
    *
    * @return SubmissionContentType|null The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionContentType") || is_null($this->_propDict["contentType"])) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new SubmissionContentType($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }

    /**
    * Sets the contentType
    * Specifies the type of content being submitted. The possible values are: email, url, file, app and unkownFutureValue.
    *
    * @param SubmissionContentType $val The contentType
    *
    * @return ThreatSubmission
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Specifies who submitted the email as a threat. Supports $filter = createdBy/email eq 'value'.
    *
    * @return SubmissionUserIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionUserIdentity") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new SubmissionUserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Specifies who submitted the email as a threat. Supports $filter = createdBy/email eq 'value'.
    *
    * @param SubmissionUserIdentity $val The createdBy
    *
    * @return ThreatSubmission
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Specifies when the threat submission was created. Supports $filter = createdDateTime ge 2022-01-01T00:00:00Z and createdDateTime lt 2022-01-02T00:00:00Z.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Specifies when the threat submission was created. Supports $filter = createdDateTime ge 2022-01-01T00:00:00Z and createdDateTime lt 2022-01-02T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ThreatSubmission
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the result
    * Specifies the result of the analysis performed by Microsoft.
    *
    * @return SubmissionResult|null The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionResult") || is_null($this->_propDict["result"])) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new SubmissionResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }

    /**
    * Sets the result
    * Specifies the result of the analysis performed by Microsoft.
    *
    * @param SubmissionResult $val The result
    *
    * @return ThreatSubmission
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
        return $this;
    }

    /**
    * Gets the source
    * Specifies the role of the submitter. Supports $filter = source eq 'value'. The possible values are: administrator,  user and unkownFutureValue.
    *
    * @return SubmissionSource|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionSource") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new SubmissionSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    * Specifies the role of the submitter. Supports $filter = source eq 'value'. The possible values are: administrator,  user and unkownFutureValue.
    *
    * @param SubmissionSource $val The source
    *
    * @return ThreatSubmission
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Indicates whether the threat submission has been analyzed by Microsoft. Supports $filter = status eq 'value'. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
    *
    * @return LongRunningOperationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\LongRunningOperationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new LongRunningOperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates whether the threat submission has been analyzed by Microsoft. Supports $filter = status eq 'value'. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
    *
    * @param LongRunningOperationStatus $val The status
    *
    * @return ThreatSubmission
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * Indicates the tenant id of the submitter. Not required when created using a POST operation. It is extracted from the token of the post API call.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * Indicates the tenant id of the submitter. Not required when created using a POST operation. It is extracted from the token of the post API call.
    *
    * @param string $val The tenantId
    *
    * @return ThreatSubmission
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

}
