<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendationBase File
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
* RecommendationBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendationBase extends Entity
{

     /**
     * Gets the actionSteps
    * List of actions to take to complete a recommendation.
     *
     * @return array|null The actionSteps
     */
    public function getActionSteps()
    {
        if (array_key_exists("actionSteps", $this->_propDict)) {
           return $this->_propDict["actionSteps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionSteps
    * List of actions to take to complete a recommendation.
    *
    * @param ActionStep[] $val The actionSteps
    *
    * @return RecommendationBase
    */
    public function setActionSteps($val)
    {
        $this->_propDict["actionSteps"] = $val;
        return $this;
    }

    /**
    * Gets the benefits
    * An explanation of why completing the recommendation will benefit you. Corresponds to the Value section of a recommendation shown in the Azure AD portal.
    *
    * @return string|null The benefits
    */
    public function getBenefits()
    {
        if (array_key_exists("benefits", $this->_propDict)) {
            return $this->_propDict["benefits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the benefits
    * An explanation of why completing the recommendation will benefit you. Corresponds to the Value section of a recommendation shown in the Azure AD portal.
    *
    * @param string $val The benefits
    *
    * @return RecommendationBase
    */
    public function setBenefits($val)
    {
        $this->_propDict["benefits"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * Indicates the category of intelligent guidance that the recommendation falls under. The possible values are: identityBestPractice, identitySecureScore, unknownFutureValue.
    *
    * @return RecommendationCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\Model\RecommendationCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new RecommendationCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * Indicates the category of intelligent guidance that the recommendation falls under. The possible values are: identityBestPractice, identitySecureScore, unknownFutureValue.
    *
    * @param RecommendationCategory $val The category
    *
    * @return RecommendationBase
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the recommendation was detected as applicable to your directory.
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
    * The date and time when the recommendation was detected as applicable to your directory.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return RecommendationBase
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the currentScore
    * The number of points the tenant has attained. Only applies to recommendations with category set to identitySecureScore.
    *
    * @return float|null The currentScore
    */
    public function getCurrentScore()
    {
        if (array_key_exists("currentScore", $this->_propDict)) {
            return $this->_propDict["currentScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currentScore
    * The number of points the tenant has attained. Only applies to recommendations with category set to identitySecureScore.
    *
    * @param float $val The currentScore
    *
    * @return RecommendationBase
    */
    public function setCurrentScore($val)
    {
        $this->_propDict["currentScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the displayName
    * The title of the recommendation.
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
    * The title of the recommendation.
    *
    * @param string $val The displayName
    *
    * @return RecommendationBase
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the featureAreas
    * The directory feature that the recommendation is related to.
     *
     * @return array|null The featureAreas
     */
    public function getFeatureAreas()
    {
        if (array_key_exists("featureAreas", $this->_propDict)) {
           return $this->_propDict["featureAreas"];
        } else {
            return null;
        }
    }

    /**
    * Sets the featureAreas
    * The directory feature that the recommendation is related to.
    *
    * @param RecommendationFeatureAreas[] $val The featureAreas
    *
    * @return RecommendationBase
    */
    public function setFeatureAreas($val)
    {
        $this->_propDict["featureAreas"] = $val;
        return $this;
    }

    /**
    * Gets the impactStartDateTime
    * The future date and time when a recommendation should be completed.
    *
    * @return \DateTime|null The impactStartDateTime
    */
    public function getImpactStartDateTime()
    {
        if (array_key_exists("impactStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["impactStartDateTime"], "\DateTime") || is_null($this->_propDict["impactStartDateTime"])) {
                return $this->_propDict["impactStartDateTime"];
            } else {
                $this->_propDict["impactStartDateTime"] = new \DateTime($this->_propDict["impactStartDateTime"]);
                return $this->_propDict["impactStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the impactStartDateTime
    * The future date and time when a recommendation should be completed.
    *
    * @param \DateTime $val The impactStartDateTime
    *
    * @return RecommendationBase
    */
    public function setImpactStartDateTime($val)
    {
        $this->_propDict["impactStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the impactType
    * Indicates the scope of impact of a recommendation. Tenant level indicates that the recommendation impacts the whole tenant. Other possible values include users, applications.
    *
    * @return string|null The impactType
    */
    public function getImpactType()
    {
        if (array_key_exists("impactType", $this->_propDict)) {
            return $this->_propDict["impactType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the impactType
    * Indicates the scope of impact of a recommendation. Tenant level indicates that the recommendation impacts the whole tenant. Other possible values include users, applications.
    *
    * @param string $val The impactType
    *
    * @return RecommendationBase
    */
    public function setImpactType($val)
    {
        $this->_propDict["impactType"] = $val;
        return $this;
    }

    /**
    * Gets the insights
    * Describes why a recommendation uniquely applies to your directory. Corresponds to the Description section of a recommendation shown in the Azure AD portal.
    *
    * @return string|null The insights
    */
    public function getInsights()
    {
        if (array_key_exists("insights", $this->_propDict)) {
            return $this->_propDict["insights"];
        } else {
            return null;
        }
    }

    /**
    * Sets the insights
    * Describes why a recommendation uniquely applies to your directory. Corresponds to the Description section of a recommendation shown in the Azure AD portal.
    *
    * @param string $val The insights
    *
    * @return RecommendationBase
    */
    public function setInsights($val)
    {
        $this->_propDict["insights"] = $val;
        return $this;
    }

    /**
    * Gets the lastCheckedDateTime
    * The most recent date and time a recommendation was deemed applicable to your directory.
    *
    * @return \DateTime|null The lastCheckedDateTime
    */
    public function getLastCheckedDateTime()
    {
        if (array_key_exists("lastCheckedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCheckedDateTime"], "\DateTime") || is_null($this->_propDict["lastCheckedDateTime"])) {
                return $this->_propDict["lastCheckedDateTime"];
            } else {
                $this->_propDict["lastCheckedDateTime"] = new \DateTime($this->_propDict["lastCheckedDateTime"]);
                return $this->_propDict["lastCheckedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCheckedDateTime
    * The most recent date and time a recommendation was deemed applicable to your directory.
    *
    * @param \DateTime $val The lastCheckedDateTime
    *
    * @return RecommendationBase
    */
    public function setLastCheckedDateTime($val)
    {
        $this->_propDict["lastCheckedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Name of the user who last updated the status of the recommendation.
    *
    * @return string|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            return $this->_propDict["lastModifiedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastModifiedBy
    * Name of the user who last updated the status of the recommendation.
    *
    * @param string $val The lastModifiedBy
    *
    * @return RecommendationBase
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time the status of a recommendation was last updated.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date and time the status of a recommendation was last updated.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return RecommendationBase
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the maxScore
    * The maximum number of points attainable. Only applies to recommendations with category set to identitySecureScore.
    *
    * @return float|null The maxScore
    */
    public function getMaxScore()
    {
        if (array_key_exists("maxScore", $this->_propDict)) {
            return $this->_propDict["maxScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxScore
    * The maximum number of points attainable. Only applies to recommendations with category set to identitySecureScore.
    *
    * @param float $val The maxScore
    *
    * @return RecommendationBase
    */
    public function setMaxScore($val)
    {
        $this->_propDict["maxScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the postponeUntilDateTime
    * The future date and time when the status of a postponed recommendation will be active again.
    *
    * @return \DateTime|null The postponeUntilDateTime
    */
    public function getPostponeUntilDateTime()
    {
        if (array_key_exists("postponeUntilDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["postponeUntilDateTime"], "\DateTime") || is_null($this->_propDict["postponeUntilDateTime"])) {
                return $this->_propDict["postponeUntilDateTime"];
            } else {
                $this->_propDict["postponeUntilDateTime"] = new \DateTime($this->_propDict["postponeUntilDateTime"]);
                return $this->_propDict["postponeUntilDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the postponeUntilDateTime
    * The future date and time when the status of a postponed recommendation will be active again.
    *
    * @param \DateTime $val The postponeUntilDateTime
    *
    * @return RecommendationBase
    */
    public function setPostponeUntilDateTime($val)
    {
        $this->_propDict["postponeUntilDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the priority
    * Indicates the time sensitivity for a recommendation to be completed. Microsoft auto assigns this value. The possible values are: low, medium, high.
    *
    * @return RecommendationPriority|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            if (is_a($this->_propDict["priority"], "\Beta\Microsoft\Graph\Model\RecommendationPriority") || is_null($this->_propDict["priority"])) {
                return $this->_propDict["priority"];
            } else {
                $this->_propDict["priority"] = new RecommendationPriority($this->_propDict["priority"]);
                return $this->_propDict["priority"];
            }
        }
        return null;
    }

    /**
    * Sets the priority
    * Indicates the time sensitivity for a recommendation to be completed. Microsoft auto assigns this value. The possible values are: low, medium, high.
    *
    * @param RecommendationPriority $val The priority
    *
    * @return RecommendationBase
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }

    /**
    * Gets the recommendationType
    * Friendly shortname to identify the recommendation. The possible values are: adfsAppsMigration, enableDesktopSSO, enablePHS, enableProvisioning, switchFromPerUserMFA, tenantMFA, thirdPartyApps, turnOffPerUserMFA, useAuthenticatorApp, useMyApps, staleApps, staleAppCreds, applicationCredentialExpiry, servicePrincipalKeyExpiry, adminMFAV2, blockLegacyAuthentication, integratedApps, mfaRegistrationV2, pwagePolicyNew, passwordHashSync, oneAdmin, roleOverlap, selfServicePasswordReset, signinRiskPolicy, userRiskPolicy, verifyAppPublisher, privateLinkForAAD, appRoleAssignmentsGroups, appRoleAssignmentsUsers, managedIdentity, overprivilegedApps, unknownFutureValue.
    *
    * @return RecommendationType|null The recommendationType
    */
    public function getRecommendationType()
    {
        if (array_key_exists("recommendationType", $this->_propDict)) {
            if (is_a($this->_propDict["recommendationType"], "\Beta\Microsoft\Graph\Model\RecommendationType") || is_null($this->_propDict["recommendationType"])) {
                return $this->_propDict["recommendationType"];
            } else {
                $this->_propDict["recommendationType"] = new RecommendationType($this->_propDict["recommendationType"]);
                return $this->_propDict["recommendationType"];
            }
        }
        return null;
    }

    /**
    * Sets the recommendationType
    * Friendly shortname to identify the recommendation. The possible values are: adfsAppsMigration, enableDesktopSSO, enablePHS, enableProvisioning, switchFromPerUserMFA, tenantMFA, thirdPartyApps, turnOffPerUserMFA, useAuthenticatorApp, useMyApps, staleApps, staleAppCreds, applicationCredentialExpiry, servicePrincipalKeyExpiry, adminMFAV2, blockLegacyAuthentication, integratedApps, mfaRegistrationV2, pwagePolicyNew, passwordHashSync, oneAdmin, roleOverlap, selfServicePasswordReset, signinRiskPolicy, userRiskPolicy, verifyAppPublisher, privateLinkForAAD, appRoleAssignmentsGroups, appRoleAssignmentsUsers, managedIdentity, overprivilegedApps, unknownFutureValue.
    *
    * @param RecommendationType $val The recommendationType
    *
    * @return RecommendationBase
    */
    public function setRecommendationType($val)
    {
        $this->_propDict["recommendationType"] = $val;
        return $this;
    }

    /**
    * Gets the remediationImpact
    * Description of the impact on users of the remediation. Only applies to recommendations with category set to identitySecureScore.
    *
    * @return string|null The remediationImpact
    */
    public function getRemediationImpact()
    {
        if (array_key_exists("remediationImpact", $this->_propDict)) {
            return $this->_propDict["remediationImpact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remediationImpact
    * Description of the impact on users of the remediation. Only applies to recommendations with category set to identitySecureScore.
    *
    * @param string $val The remediationImpact
    *
    * @return RecommendationBase
    */
    public function setRemediationImpact($val)
    {
        $this->_propDict["remediationImpact"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Indicates the status of the recommendation based on user or system action. The possible values are: active, completedBySystem, completedByUser, dismissed, postponed, unknownFutureValue. By default, a recommendation's status is set to active when the recommendation is first generated. Status is set to completedBySystem when our service detects that a recommendation which was previously active no longer applies.
    *
    * @return RecommendationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\RecommendationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new RecommendationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates the status of the recommendation based on user or system action. The possible values are: active, completedBySystem, completedByUser, dismissed, postponed, unknownFutureValue. By default, a recommendation's status is set to active when the recommendation is first generated. Status is set to completedBySystem when our service detects that a recommendation which was previously active no longer applies.
    *
    * @param RecommendationStatus $val The status
    *
    * @return RecommendationBase
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the impactedResources
    * The list of directory objects associated with the recommendation.
     *
     * @return array|null The impactedResources
     */
    public function getImpactedResources()
    {
        if (array_key_exists("impactedResources", $this->_propDict)) {
           return $this->_propDict["impactedResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the impactedResources
    * The list of directory objects associated with the recommendation.
    *
    * @param ImpactedResource[] $val The impactedResources
    *
    * @return RecommendationBase
    */
    public function setImpactedResources($val)
    {
        $this->_propDict["impactedResources"] = $val;
        return $this;
    }

}
