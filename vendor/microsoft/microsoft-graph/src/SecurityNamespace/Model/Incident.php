<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Incident File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

/**
* Incident class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Incident extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the assignedTo
    * Owner of the incident, or null if no owner is assigned. Free editable text.
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
    * Owner of the incident, or null if no owner is assigned. Free editable text.
    *
    * @param string $val The assignedTo
    *
    * @return Incident
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }

    /**
    * Gets the classification
    * The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
    *
    * @return AlertClassification|null The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Microsoft\Graph\SecurityNamespace\Model\AlertClassification") || is_null($this->_propDict["classification"])) {
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
    * The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
    *
    * @param AlertClassification $val The classification
    *
    * @return Incident
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }


     /**
     * Gets the comments
    * Array of comments created by the Security Operations (SecOps) team when the incident is managed.
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
    * Array of comments created by the Security Operations (SecOps) team when the incident is managed.
    *
    * @param AlertComment[] $val The comments
    *
    * @return Incident
    */
    public function setComments($val)
    {
        $this->_propDict["comments"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Time when the incident was first created.
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
    * Time when the incident was first created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Incident
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the customTags
    * Array of custom tags associated with an incident.
    *
    * @return array|null The customTags
    */
    public function getCustomTags()
    {
        if (array_key_exists("customTags", $this->_propDict)) {
            return $this->_propDict["customTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customTags
    * Array of custom tags associated with an incident.
    *
    * @param string[] $val The customTags
    *
    * @return Incident
    */
    public function setCustomTags($val)
    {
        $this->_propDict["customTags"] = $val;
        return $this;
    }

    /**
    * Gets the determination
    * Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
    *
    * @return AlertDetermination|null The determination
    */
    public function getDetermination()
    {
        if (array_key_exists("determination", $this->_propDict)) {
            if (is_a($this->_propDict["determination"], "\Microsoft\Graph\SecurityNamespace\Model\AlertDetermination") || is_null($this->_propDict["determination"])) {
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
    * Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
    *
    * @param AlertDetermination $val The determination
    *
    * @return Incident
    */
    public function setDetermination($val)
    {
        $this->_propDict["determination"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The incident name.
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
    * The incident name.
    *
    * @param string $val The displayName
    *
    * @return Incident
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the incidentWebUrl
    * The URL for the incident page in the Microsoft 365 Defender portal.
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
    * The URL for the incident page in the Microsoft 365 Defender portal.
    *
    * @param string $val The incidentWebUrl
    *
    * @return Incident
    */
    public function setIncidentWebUrl($val)
    {
        $this->_propDict["incidentWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdateDateTime
    * Time when the incident was last updated.
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
    * Time when the incident was last updated.
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return Incident
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the redirectIncidentId
    * Only populated in case an incident is grouped together with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected.
    *
    * @return string|null The redirectIncidentId
    */
    public function getRedirectIncidentId()
    {
        if (array_key_exists("redirectIncidentId", $this->_propDict)) {
            return $this->_propDict["redirectIncidentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectIncidentId
    * Only populated in case an incident is grouped together with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected.
    *
    * @param string $val The redirectIncidentId
    *
    * @return Incident
    */
    public function setRedirectIncidentId($val)
    {
        $this->_propDict["redirectIncidentId"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    * Indicates the possible impact on assets. The higher the severity, the bigger the impact. Typically higher severity items require the most immediate attention. Possible values are: unknown, informational, low, medium, high, unknownFutureValue.
    *
    * @return AlertSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Microsoft\Graph\SecurityNamespace\Model\AlertSeverity") || is_null($this->_propDict["severity"])) {
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
    * Indicates the possible impact on assets. The higher the severity, the bigger the impact. Typically higher severity items require the most immediate attention. Possible values are: unknown, informational, low, medium, high, unknownFutureValue.
    *
    * @param AlertSeverity $val The severity
    *
    * @return Incident
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the incident. Possible values are: active, resolved, inProgress, redirected, unknownFutureValue.
    *
    * @return IncidentStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\SecurityNamespace\Model\IncidentStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new IncidentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the incident. Possible values are: active, resolved, inProgress, redirected, unknownFutureValue.
    *
    * @param IncidentStatus $val The status
    *
    * @return Incident
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The Azure Active Directory tenant in which the alert was created.
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
    * The Azure Active Directory tenant in which the alert was created.
    *
    * @param string $val The tenantId
    *
    * @return Incident
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }


     /**
     * Gets the alerts
    * The list of related alerts. Supports $expand.
     *
     * @return array|null The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists("alerts", $this->_propDict)) {
           return $this->_propDict["alerts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alerts
    * The list of related alerts. Supports $expand.
    *
    * @param Alert[] $val The alerts
    *
    * @return Incident
    */
    public function setAlerts($val)
    {
        $this->_propDict["alerts"] = $val;
        return $this;
    }

}
