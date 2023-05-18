<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentPolicy File
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
* AccessPackageAssignmentPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentPolicy extends Entity
{
    /**
    * Gets the accessPackageId
    * Identifier of the access package.
    *
    * @return string|null The accessPackageId
    */
    public function getAccessPackageId()
    {
        if (array_key_exists("accessPackageId", $this->_propDict)) {
            return $this->_propDict["accessPackageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageId
    * Identifier of the access package.
    *
    * @param string $val The accessPackageId
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setAccessPackageId($val)
    {
        $this->_propDict["accessPackageId"] = $val;
        return $this;
    }

    /**
    * Gets the accessReviewSettings
    * Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews are not required.
    *
    * @return AssignmentReviewSettings|null The accessReviewSettings
    */
    public function getAccessReviewSettings()
    {
        if (array_key_exists("accessReviewSettings", $this->_propDict)) {
            if (is_a($this->_propDict["accessReviewSettings"], "\Beta\Microsoft\Graph\Model\AssignmentReviewSettings") || is_null($this->_propDict["accessReviewSettings"])) {
                return $this->_propDict["accessReviewSettings"];
            } else {
                $this->_propDict["accessReviewSettings"] = new AssignmentReviewSettings($this->_propDict["accessReviewSettings"]);
                return $this->_propDict["accessReviewSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the accessReviewSettings
    * Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews are not required.
    *
    * @param AssignmentReviewSettings $val The accessReviewSettings
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setAccessReviewSettings($val)
    {
        $this->_propDict["accessReviewSettings"] = $val;
        return $this;
    }

    /**
    * Gets the canExtend
    * Indicates whether a user can extend the access package assignment duration after approval.
    *
    * @return bool|null The canExtend
    */
    public function getCanExtend()
    {
        if (array_key_exists("canExtend", $this->_propDict)) {
            return $this->_propDict["canExtend"];
        } else {
            return null;
        }
    }

    /**
    * Sets the canExtend
    * Indicates whether a user can extend the access package assignment duration after approval.
    *
    * @param bool $val The canExtend
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setCanExtend($val)
    {
        $this->_propDict["canExtend"] = boolval($val);
        return $this;
    }

    /**
    * Gets the createdBy
    *
    * @return string|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            return $this->_propDict["createdBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the createdBy
    *
    * @param string $val The createdBy
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of the policy.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the policy.
    *
    * @param string $val The description
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the policy. Supports $filter (eq).
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the policy. Supports $filter (eq).
    *
    * @param string $val The displayName
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the durationInDays
    * The number of days in which assignments from this policy last until they are expired.
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
    * The number of days in which assignments from this policy last until they are expired.
    *
    * @param int $val The durationInDays
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setDurationInDays($val)
    {
        $this->_propDict["durationInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedBy
    *
    * @return string|null The modifiedBy
    */
    public function getModifiedBy()
    {
        if (array_key_exists("modifiedBy", $this->_propDict)) {
            return $this->_propDict["modifiedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modifiedBy
    *
    * @param string $val The modifiedBy
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setModifiedBy($val)
    {
        $this->_propDict["modifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime") || is_null($this->_propDict["modifiedDateTime"])) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the questions
    * Questions that are posed to the  requestor.
     *
     * @return array|null The questions
     */
    public function getQuestions()
    {
        if (array_key_exists("questions", $this->_propDict)) {
           return $this->_propDict["questions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the questions
    * Questions that are posed to the  requestor.
    *
    * @param AccessPackageQuestion[] $val The questions
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setQuestions($val)
    {
        $this->_propDict["questions"] = $val;
        return $this;
    }

    /**
    * Gets the requestApprovalSettings
    * Who must approve requests for access package in this policy.
    *
    * @return ApprovalSettings|null The requestApprovalSettings
    */
    public function getRequestApprovalSettings()
    {
        if (array_key_exists("requestApprovalSettings", $this->_propDict)) {
            if (is_a($this->_propDict["requestApprovalSettings"], "\Beta\Microsoft\Graph\Model\ApprovalSettings") || is_null($this->_propDict["requestApprovalSettings"])) {
                return $this->_propDict["requestApprovalSettings"];
            } else {
                $this->_propDict["requestApprovalSettings"] = new ApprovalSettings($this->_propDict["requestApprovalSettings"]);
                return $this->_propDict["requestApprovalSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the requestApprovalSettings
    * Who must approve requests for access package in this policy.
    *
    * @param ApprovalSettings $val The requestApprovalSettings
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setRequestApprovalSettings($val)
    {
        $this->_propDict["requestApprovalSettings"] = $val;
        return $this;
    }

    /**
    * Gets the requestorSettings
    * Who can request this access package from this policy.
    *
    * @return RequestorSettings|null The requestorSettings
    */
    public function getRequestorSettings()
    {
        if (array_key_exists("requestorSettings", $this->_propDict)) {
            if (is_a($this->_propDict["requestorSettings"], "\Beta\Microsoft\Graph\Model\RequestorSettings") || is_null($this->_propDict["requestorSettings"])) {
                return $this->_propDict["requestorSettings"];
            } else {
                $this->_propDict["requestorSettings"] = new RequestorSettings($this->_propDict["requestorSettings"]);
                return $this->_propDict["requestorSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the requestorSettings
    * Who can request this access package from this policy.
    *
    * @param RequestorSettings $val The requestorSettings
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setRequestorSettings($val)
    {
        $this->_propDict["requestorSettings"] = $val;
        return $this;
    }

    /**
    * Gets the verifiableCredentialSettings
    * Settings for verifiable credentials set up through the Azure AD Verified ID service. These settings represent the verifiable credentials that a requestor of an access package in this policy can present to be assigned the access package.
    *
    * @return VerifiableCredentialSettings|null The verifiableCredentialSettings
    */
    public function getVerifiableCredentialSettings()
    {
        if (array_key_exists("verifiableCredentialSettings", $this->_propDict)) {
            if (is_a($this->_propDict["verifiableCredentialSettings"], "\Beta\Microsoft\Graph\Model\VerifiableCredentialSettings") || is_null($this->_propDict["verifiableCredentialSettings"])) {
                return $this->_propDict["verifiableCredentialSettings"];
            } else {
                $this->_propDict["verifiableCredentialSettings"] = new VerifiableCredentialSettings($this->_propDict["verifiableCredentialSettings"]);
                return $this->_propDict["verifiableCredentialSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiableCredentialSettings
    * Settings for verifiable credentials set up through the Azure AD Verified ID service. These settings represent the verifiable credentials that a requestor of an access package in this policy can present to be assigned the access package.
    *
    * @param VerifiableCredentialSettings $val The verifiableCredentialSettings
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setVerifiableCredentialSettings($val)
    {
        $this->_propDict["verifiableCredentialSettings"] = $val;
        return $this;
    }

    /**
    * Gets the accessPackage
    * The access package with this policy. Read-only. Nullable. Supports $expand.
    *
    * @return AccessPackage|null The accessPackage
    */
    public function getAccessPackage()
    {
        if (array_key_exists("accessPackage", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackage"], "\Beta\Microsoft\Graph\Model\AccessPackage") || is_null($this->_propDict["accessPackage"])) {
                return $this->_propDict["accessPackage"];
            } else {
                $this->_propDict["accessPackage"] = new AccessPackage($this->_propDict["accessPackage"]);
                return $this->_propDict["accessPackage"];
            }
        }
        return null;
    }

    /**
    * Sets the accessPackage
    * The access package with this policy. Read-only. Nullable. Supports $expand.
    *
    * @param AccessPackage $val The accessPackage
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setAccessPackage($val)
    {
        $this->_propDict["accessPackage"] = $val;
        return $this;
    }

    /**
    * Gets the accessPackageCatalog
    *
    * @return AccessPackageCatalog|null The accessPackageCatalog
    */
    public function getAccessPackageCatalog()
    {
        if (array_key_exists("accessPackageCatalog", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageCatalog"], "\Beta\Microsoft\Graph\Model\AccessPackageCatalog") || is_null($this->_propDict["accessPackageCatalog"])) {
                return $this->_propDict["accessPackageCatalog"];
            } else {
                $this->_propDict["accessPackageCatalog"] = new AccessPackageCatalog($this->_propDict["accessPackageCatalog"]);
                return $this->_propDict["accessPackageCatalog"];
            }
        }
        return null;
    }

    /**
    * Sets the accessPackageCatalog
    *
    * @param AccessPackageCatalog $val The accessPackageCatalog
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setAccessPackageCatalog($val)
    {
        $this->_propDict["accessPackageCatalog"] = $val;
        return $this;
    }


     /**
     * Gets the customExtensionHandlers
    * The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     *
     * @return array|null The customExtensionHandlers
     */
    public function getCustomExtensionHandlers()
    {
        if (array_key_exists("customExtensionHandlers", $this->_propDict)) {
           return $this->_propDict["customExtensionHandlers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionHandlers
    * The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
    *
    * @param CustomExtensionHandler[] $val The customExtensionHandlers
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setCustomExtensionHandlers($val)
    {
        $this->_propDict["customExtensionHandlers"] = $val;
        return $this;
    }


     /**
     * Gets the customExtensionStageSettings
    * The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     *
     * @return array|null The customExtensionStageSettings
     */
    public function getCustomExtensionStageSettings()
    {
        if (array_key_exists("customExtensionStageSettings", $this->_propDict)) {
           return $this->_propDict["customExtensionStageSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionStageSettings
    * The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
    *
    * @param CustomExtensionStageSetting[] $val The customExtensionStageSettings
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setCustomExtensionStageSettings($val)
    {
        $this->_propDict["customExtensionStageSettings"] = $val;
        return $this;
    }

}
