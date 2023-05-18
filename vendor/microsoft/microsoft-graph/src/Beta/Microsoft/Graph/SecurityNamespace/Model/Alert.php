<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Alert File
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
* Alert class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Alert extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the actorDisplayName
    * The adversary or activity group that is associated with this alert.
    *
    * @return string|null The actorDisplayName
    */
    public function getActorDisplayName()
    {
        if (array_key_exists("actorDisplayName", $this->_propDict)) {
            return $this->_propDict["actorDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actorDisplayName
    * The adversary or activity group that is associated with this alert.
    *
    * @param string $val The actorDisplayName
    *
    * @return Alert
    */
    public function setActorDisplayName($val)
    {
        $this->_propDict["actorDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the alertWebUrl
    * URL for the alert page in the Microsoft 365 Defender portal.
    *
    * @return string|null The alertWebUrl
    */
    public function getAlertWebUrl()
    {
        if (array_key_exists("alertWebUrl", $this->_propDict)) {
            return $this->_propDict["alertWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertWebUrl
    * URL for the alert page in the Microsoft 365 Defender portal.
    *
    * @param string $val The alertWebUrl
    *
    * @return Alert
    */
    public function setAlertWebUrl($val)
    {
        $this->_propDict["alertWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the assignedTo
    * Owner of the alert, or null if no owner is assigned.
    *
    * @return string|null The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            return $this->_propDict["assignedTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedTo
    * Owner of the alert, or null if no owner is assigned.
    *
    * @param string $val The assignedTo
    *
    * @return Alert
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * The attack kill-chain category that the alert belongs to. Aligned with the MITRE ATT&amp;CK framework.
    *
    * @return string|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category
    * The attack kill-chain category that the alert belongs to. Aligned with the MITRE ATT&amp;CK framework.
    *
    * @param string $val The category
    *
    * @return Alert
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the classification
    * Specifies whether the alert represents a true threat. Possible values are: unknown, falsePositive, truePositive, benignPositive, unknownFutureValue.
    *
    * @return AlertClassification|null The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AlertClassification") || is_null($this->_propDict["classification"])) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new AlertClassification($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }

    /**
    * Sets the classification
    * Specifies whether the alert represents a true threat. Possible values are: unknown, falsePositive, truePositive, benignPositive, unknownFutureValue.
    *
    * @param AlertClassification $val The classification
    *
    * @return Alert
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }


     /**
     * Gets the comments
    * Array of comments created by the Security Operations (SecOps) team during the alert management process.
     *
     * @return array|null The comments
     */
    public function getComments()
    {
        if (array_key_exists("comments", $this->_propDict)) {
           return $this->_propDict["comments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the comments
    * Array of comments created by the Security Operations (SecOps) team during the alert management process.
    *
    * @param AlertComment[] $val The comments
    *
    * @return Alert
    */
    public function setComments($val)
    {
        $this->_propDict["comments"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Time when Microsoft 365 Defender created the alert.
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
    * Time when Microsoft 365 Defender created the alert.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Alert
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * String value describing each alert.
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
    * String value describing each alert.
    *
    * @param string $val The description
    *
    * @return Alert
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the detectionSource
    * Detection technology or sensor that identified the notable component or activity.
    *
    * @return DetectionSource|null The detectionSource
    */
    public function getDetectionSource()
    {
        if (array_key_exists("detectionSource", $this->_propDict)) {
            if (is_a($this->_propDict["detectionSource"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DetectionSource") || is_null($this->_propDict["detectionSource"])) {
                return $this->_propDict["detectionSource"];
            } else {
                $this->_propDict["detectionSource"] = new DetectionSource($this->_propDict["detectionSource"]);
                return $this->_propDict["detectionSource"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionSource
    * Detection technology or sensor that identified the notable component or activity.
    *
    * @param DetectionSource $val The detectionSource
    *
    * @return Alert
    */
    public function setDetectionSource($val)
    {
        $this->_propDict["detectionSource"] = $val;
        return $this;
    }

    /**
    * Gets the detectorId
    * The ID of the detector that triggered the alert.
    *
    * @return string|null The detectorId
    */
    public function getDetectorId()
    {
        if (array_key_exists("detectorId", $this->_propDict)) {
            return $this->_propDict["detectorId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detectorId
    * The ID of the detector that triggered the alert.
    *
    * @param string $val The detectorId
    *
    * @return Alert
    */
    public function setDetectorId($val)
    {
        $this->_propDict["detectorId"] = $val;
        return $this;
    }

    /**
    * Gets the determination
    * Specifies the result of the investigation, whether the alert represents a true attack and if so, the nature of the attack. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
    *
    * @return AlertDetermination|null The determination
    */
    public function getDetermination()
    {
        if (array_key_exists("determination", $this->_propDict)) {
            if (is_a($this->_propDict["determination"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AlertDetermination") || is_null($this->_propDict["determination"])) {
                return $this->_propDict["determination"];
            } else {
                $this->_propDict["determination"] = new AlertDetermination($this->_propDict["determination"]);
                return $this->_propDict["determination"];
            }
        }
        return null;
    }

    /**
    * Sets the determination
    * Specifies the result of the investigation, whether the alert represents a true attack and if so, the nature of the attack. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
    *
    * @param AlertDetermination $val The determination
    *
    * @return Alert
    */
    public function setDetermination($val)
    {
        $this->_propDict["determination"] = $val;
        return $this;
    }


     /**
     * Gets the evidence
    * Collection of evidence related to the alert.
     *
     * @return array|null The evidence
     */
    public function getEvidence()
    {
        if (array_key_exists("evidence", $this->_propDict)) {
           return $this->_propDict["evidence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the evidence
    * Collection of evidence related to the alert.
    *
    * @param AlertEvidence[] $val The evidence
    *
    * @return Alert
    */
    public function setEvidence($val)
    {
        $this->_propDict["evidence"] = $val;
        return $this;
    }

    /**
    * Gets the firstActivityDateTime
    * The earliest activity associated with the alert.
    *
    * @return \DateTime|null The firstActivityDateTime
    */
    public function getFirstActivityDateTime()
    {
        if (array_key_exists("firstActivityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstActivityDateTime"], "\DateTime") || is_null($this->_propDict["firstActivityDateTime"])) {
                return $this->_propDict["firstActivityDateTime"];
            } else {
                $this->_propDict["firstActivityDateTime"] = new \DateTime($this->_propDict["firstActivityDateTime"]);
                return $this->_propDict["firstActivityDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstActivityDateTime
    * The earliest activity associated with the alert.
    *
    * @param \DateTime $val The firstActivityDateTime
    *
    * @return Alert
    */
    public function setFirstActivityDateTime($val)
    {
        $this->_propDict["firstActivityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the incidentId
    * Unique identifier to represent the incident this alert resource is associated with.
    *
    * @return string|null The incidentId
    */
    public function getIncidentId()
    {
        if (array_key_exists("incidentId", $this->_propDict)) {
            return $this->_propDict["incidentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incidentId
    * Unique identifier to represent the incident this alert resource is associated with.
    *
    * @param string $val The incidentId
    *
    * @return Alert
    */
    public function setIncidentId($val)
    {
        $this->_propDict["incidentId"] = $val;
        return $this;
    }

    /**
    * Gets the incidentWebUrl
    * URL for the incident page in the Microsoft 365 Defender portal.
    *
    * @return string|null The incidentWebUrl
    */
    public function getIncidentWebUrl()
    {
        if (array_key_exists("incidentWebUrl", $this->_propDict)) {
            return $this->_propDict["incidentWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incidentWebUrl
    * URL for the incident page in the Microsoft 365 Defender portal.
    *
    * @param string $val The incidentWebUrl
    *
    * @return Alert
    */
    public function setIncidentWebUrl($val)
    {
        $this->_propDict["incidentWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the lastActivityDateTime
    * The oldest activity associated with the alert.
    *
    * @return \DateTime|null The lastActivityDateTime
    */
    public function getLastActivityDateTime()
    {
        if (array_key_exists("lastActivityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDateTime"], "\DateTime") || is_null($this->_propDict["lastActivityDateTime"])) {
                return $this->_propDict["lastActivityDateTime"];
            } else {
                $this->_propDict["lastActivityDateTime"] = new \DateTime($this->_propDict["lastActivityDateTime"]);
                return $this->_propDict["lastActivityDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActivityDateTime
    * The oldest activity associated with the alert.
    *
    * @param \DateTime $val The lastActivityDateTime
    *
    * @return Alert
    */
    public function setLastActivityDateTime($val)
    {
        $this->_propDict["lastActivityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdateDateTime
    * Time when the alert was last updated at Microsoft 365 Defender.
    *
    * @return \DateTime|null The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdateDateTime"])) {
                return $this->_propDict["lastUpdateDateTime"];
            } else {
                $this->_propDict["lastUpdateDateTime"] = new \DateTime($this->_propDict["lastUpdateDateTime"]);
                return $this->_propDict["lastUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdateDateTime
    * Time when the alert was last updated at Microsoft 365 Defender.
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return Alert
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the mitreTechniques
    * The attack techniques, as aligned with the MITRE ATT&amp;CK framework.
    *
    * @return array|null The mitreTechniques
    */
    public function getMitreTechniques()
    {
        if (array_key_exists("mitreTechniques", $this->_propDict)) {
            return $this->_propDict["mitreTechniques"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mitreTechniques
    * The attack techniques, as aligned with the MITRE ATT&amp;CK framework.
    *
    * @param string[] $val The mitreTechniques
    *
    * @return Alert
    */
    public function setMitreTechniques($val)
    {
        $this->_propDict["mitreTechniques"] = $val;
        return $this;
    }

    /**
    * Gets the providerAlertId
    * The ID of the alert as it appears in the security provider product that generated the alert.
    *
    * @return string|null The providerAlertId
    */
    public function getProviderAlertId()
    {
        if (array_key_exists("providerAlertId", $this->_propDict)) {
            return $this->_propDict["providerAlertId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the providerAlertId
    * The ID of the alert as it appears in the security provider product that generated the alert.
    *
    * @param string $val The providerAlertId
    *
    * @return Alert
    */
    public function setProviderAlertId($val)
    {
        $this->_propDict["providerAlertId"] = $val;
        return $this;
    }

    /**
    * Gets the recommendedActions
    * Recommended response and remediation actions to take in the event this alert was generated.
    *
    * @return string|null The recommendedActions
    */
    public function getRecommendedActions()
    {
        if (array_key_exists("recommendedActions", $this->_propDict)) {
            return $this->_propDict["recommendedActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendedActions
    * Recommended response and remediation actions to take in the event this alert was generated.
    *
    * @param string $val The recommendedActions
    *
    * @return Alert
    */
    public function setRecommendedActions($val)
    {
        $this->_propDict["recommendedActions"] = $val;
        return $this;
    }

    /**
    * Gets the resolvedDateTime
    * Time when the alert was resolved.
    *
    * @return \DateTime|null The resolvedDateTime
    */
    public function getResolvedDateTime()
    {
        if (array_key_exists("resolvedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["resolvedDateTime"], "\DateTime") || is_null($this->_propDict["resolvedDateTime"])) {
                return $this->_propDict["resolvedDateTime"];
            } else {
                $this->_propDict["resolvedDateTime"] = new \DateTime($this->_propDict["resolvedDateTime"]);
                return $this->_propDict["resolvedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the resolvedDateTime
    * Time when the alert was resolved.
    *
    * @param \DateTime $val The resolvedDateTime
    *
    * @return Alert
    */
    public function setResolvedDateTime($val)
    {
        $this->_propDict["resolvedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the serviceSource
    * The service or product that created this alert. Possible values are: microsoftDefenderForEndpoint, microsoftDefenderForIdentity, microsoftCloudAppSecurity, microsoftDefenderForOffice365, microsoft365Defender, aadIdentityProtection, appGovernance, dataLossPrevention.
    *
    * @return ServiceSource|null The serviceSource
    */
    public function getServiceSource()
    {
        if (array_key_exists("serviceSource", $this->_propDict)) {
            if (is_a($this->_propDict["serviceSource"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ServiceSource") || is_null($this->_propDict["serviceSource"])) {
                return $this->_propDict["serviceSource"];
            } else {
                $this->_propDict["serviceSource"] = new ServiceSource($this->_propDict["serviceSource"]);
                return $this->_propDict["serviceSource"];
            }
        }
        return null;
    }

    /**
    * Sets the serviceSource
    * The service or product that created this alert. Possible values are: microsoftDefenderForEndpoint, microsoftDefenderForIdentity, microsoftCloudAppSecurity, microsoftDefenderForOffice365, microsoft365Defender, aadIdentityProtection, appGovernance, dataLossPrevention.
    *
    * @param ServiceSource $val The serviceSource
    *
    * @return Alert
    */
    public function setServiceSource($val)
    {
        $this->_propDict["serviceSource"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    * Indicates the possible impact on assets. The higher the severity the bigger the impact. Typically higher severity items require the most immediate attention. Possible values are: unknown, informational, low, medium, high, unknownFutureValue.
    *
    * @return AlertSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AlertSeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new AlertSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    * Indicates the possible impact on assets. The higher the severity the bigger the impact. Typically higher severity items require the most immediate attention. Possible values are: unknown, informational, low, medium, high, unknownFutureValue.
    *
    * @param AlertSeverity $val The severity
    *
    * @return Alert
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the alert. Possible values are: new, inProgress, resolved, unknownFutureValue.
    *
    * @return AlertStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AlertStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AlertStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the alert. Possible values are: new, inProgress, resolved, unknownFutureValue.
    *
    * @param AlertStatus $val The status
    *
    * @return Alert
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the systemTags
    *
    * @return array|null The systemTags
    */
    public function getSystemTags()
    {
        if (array_key_exists("systemTags", $this->_propDict)) {
            return $this->_propDict["systemTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemTags
    *
    * @param string[] $val The systemTags
    *
    * @return Alert
    */
    public function setSystemTags($val)
    {
        $this->_propDict["systemTags"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The Azure Active Directory tenant the alert was created in.
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
    * The Azure Active Directory tenant the alert was created in.
    *
    * @param string $val The tenantId
    *
    * @return Alert
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the threatDisplayName
    * The threat associated with this alert.
    *
    * @return string|null The threatDisplayName
    */
    public function getThreatDisplayName()
    {
        if (array_key_exists("threatDisplayName", $this->_propDict)) {
            return $this->_propDict["threatDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threatDisplayName
    * The threat associated with this alert.
    *
    * @param string $val The threatDisplayName
    *
    * @return Alert
    */
    public function setThreatDisplayName($val)
    {
        $this->_propDict["threatDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the threatFamilyName
    * Threat family associated with this alert.
    *
    * @return string|null The threatFamilyName
    */
    public function getThreatFamilyName()
    {
        if (array_key_exists("threatFamilyName", $this->_propDict)) {
            return $this->_propDict["threatFamilyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threatFamilyName
    * Threat family associated with this alert.
    *
    * @param string $val The threatFamilyName
    *
    * @return Alert
    */
    public function setThreatFamilyName($val)
    {
        $this->_propDict["threatFamilyName"] = $val;
        return $this;
    }

    /**
    * Gets the title
    * Brief identifying string value describing the alert.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * Brief identifying string value describing the alert.
    *
    * @param string $val The title
    *
    * @return Alert
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

}
