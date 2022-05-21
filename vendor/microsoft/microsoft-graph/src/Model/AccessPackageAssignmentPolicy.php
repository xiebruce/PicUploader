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
namespace Microsoft\Graph\Model;

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
    * Gets the allowedTargetScope
    * Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
    *
    * @return AllowedTargetScope|null The allowedTargetScope
    */
    public function getAllowedTargetScope()
    {
        if (array_key_exists("allowedTargetScope", $this->_propDict)) {
            if (is_a($this->_propDict["allowedTargetScope"], "\Microsoft\Graph\Model\AllowedTargetScope") || is_null($this->_propDict["allowedTargetScope"])) {
                return $this->_propDict["allowedTargetScope"];
            } else {
                $this->_propDict["allowedTargetScope"] = new AllowedTargetScope($this->_propDict["allowedTargetScope"]);
                return $this->_propDict["allowedTargetScope"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedTargetScope
    * Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
    *
    * @param AllowedTargetScope $val The allowedTargetScope
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setAllowedTargetScope($val)
    {
        $this->_propDict["allowedTargetScope"] = $val;
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
    * Gets the expiration
    * The expiration date for assignments created in this policy.
    *
    * @return ExpirationPattern|null The expiration
    */
    public function getExpiration()
    {
        if (array_key_exists("expiration", $this->_propDict)) {
            if (is_a($this->_propDict["expiration"], "\Microsoft\Graph\Model\ExpirationPattern") || is_null($this->_propDict["expiration"])) {
                return $this->_propDict["expiration"];
            } else {
                $this->_propDict["expiration"] = new ExpirationPattern($this->_propDict["expiration"]);
                return $this->_propDict["expiration"];
            }
        }
        return null;
    }

    /**
    * Sets the expiration
    * The expiration date for assignments created in this policy.
    *
    * @param ExpirationPattern $val The expiration
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setExpiration($val)
    {
        $this->_propDict["expiration"] = $val;
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
    * Gets the requestApprovalSettings
    * Who must approve requests for access package in this policy.
    *
    * @return AccessPackageAssignmentApprovalSettings|null The requestApprovalSettings
    */
    public function getRequestApprovalSettings()
    {
        if (array_key_exists("requestApprovalSettings", $this->_propDict)) {
            if (is_a($this->_propDict["requestApprovalSettings"], "\Microsoft\Graph\Model\AccessPackageAssignmentApprovalSettings") || is_null($this->_propDict["requestApprovalSettings"])) {
                return $this->_propDict["requestApprovalSettings"];
            } else {
                $this->_propDict["requestApprovalSettings"] = new AccessPackageAssignmentApprovalSettings($this->_propDict["requestApprovalSettings"]);
                return $this->_propDict["requestApprovalSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the requestApprovalSettings
    * Who must approve requests for access package in this policy.
    *
    * @param AccessPackageAssignmentApprovalSettings $val The requestApprovalSettings
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
    * @return AccessPackageAssignmentRequestorSettings|null The requestorSettings
    */
    public function getRequestorSettings()
    {
        if (array_key_exists("requestorSettings", $this->_propDict)) {
            if (is_a($this->_propDict["requestorSettings"], "\Microsoft\Graph\Model\AccessPackageAssignmentRequestorSettings") || is_null($this->_propDict["requestorSettings"])) {
                return $this->_propDict["requestorSettings"];
            } else {
                $this->_propDict["requestorSettings"] = new AccessPackageAssignmentRequestorSettings($this->_propDict["requestorSettings"]);
                return $this->_propDict["requestorSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the requestorSettings
    * Who can request this access package from this policy.
    *
    * @param AccessPackageAssignmentRequestorSettings $val The requestorSettings
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setRequestorSettings($val)
    {
        $this->_propDict["requestorSettings"] = $val;
        return $this;
    }

    /**
    * Gets the reviewSettings
    * Settings for access reviews of assignments through this policy.
    *
    * @return AccessPackageAssignmentReviewSettings|null The reviewSettings
    */
    public function getReviewSettings()
    {
        if (array_key_exists("reviewSettings", $this->_propDict)) {
            if (is_a($this->_propDict["reviewSettings"], "\Microsoft\Graph\Model\AccessPackageAssignmentReviewSettings") || is_null($this->_propDict["reviewSettings"])) {
                return $this->_propDict["reviewSettings"];
            } else {
                $this->_propDict["reviewSettings"] = new AccessPackageAssignmentReviewSettings($this->_propDict["reviewSettings"]);
                return $this->_propDict["reviewSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewSettings
    * Settings for access reviews of assignments through this policy.
    *
    * @param AccessPackageAssignmentReviewSettings $val The reviewSettings
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setReviewSettings($val)
    {
        $this->_propDict["reviewSettings"] = $val;
        return $this;
    }


     /**
     * Gets the specificAllowedTargets
    * The principals that can be assigned access from an access package through this policy.
     *
     * @return array|null The specificAllowedTargets
     */
    public function getSpecificAllowedTargets()
    {
        if (array_key_exists("specificAllowedTargets", $this->_propDict)) {
           return $this->_propDict["specificAllowedTargets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the specificAllowedTargets
    * The principals that can be assigned access from an access package through this policy.
    *
    * @param SubjectSet[] $val The specificAllowedTargets
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setSpecificAllowedTargets($val)
    {
        $this->_propDict["specificAllowedTargets"] = $val;
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
            if (is_a($this->_propDict["accessPackage"], "\Microsoft\Graph\Model\AccessPackage") || is_null($this->_propDict["accessPackage"])) {
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
    * Gets the catalog
    * Catalog of the access package containing this policy. Read-only.
    *
    * @return AccessPackageCatalog|null The catalog
    */
    public function getCatalog()
    {
        if (array_key_exists("catalog", $this->_propDict)) {
            if (is_a($this->_propDict["catalog"], "\Microsoft\Graph\Model\AccessPackageCatalog") || is_null($this->_propDict["catalog"])) {
                return $this->_propDict["catalog"];
            } else {
                $this->_propDict["catalog"] = new AccessPackageCatalog($this->_propDict["catalog"]);
                return $this->_propDict["catalog"];
            }
        }
        return null;
    }

    /**
    * Sets the catalog
    * Catalog of the access package containing this policy. Read-only.
    *
    * @param AccessPackageCatalog $val The catalog
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setCatalog($val)
    {
        $this->_propDict["catalog"] = $val;
        return $this;
    }

}
