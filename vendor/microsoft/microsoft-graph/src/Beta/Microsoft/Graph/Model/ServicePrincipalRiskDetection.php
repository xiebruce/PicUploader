<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipalRiskDetection File
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
* ServicePrincipalRiskDetection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServicePrincipalRiskDetection extends Entity
{
    /**
    * Gets the activity
    * Indicates the activity type the detected risk is linked to.  The possible values are: signin, unknownFutureValue, servicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: servicePrincipal.
    *
    * @return ActivityType|null The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "\Beta\Microsoft\Graph\Model\ActivityType") || is_null($this->_propDict["activity"])) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new ActivityType($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }

    /**
    * Sets the activity
    * Indicates the activity type the detected risk is linked to.  The possible values are: signin, unknownFutureValue, servicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: servicePrincipal.
    *
    * @param ActivityType $val The activity
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }

    /**
    * Gets the activityDateTime
    * Date and time when the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime") || is_null($this->_propDict["activityDateTime"])) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the activityDateTime
    * Date and time when the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the additionalInfo
    * Additional information associated with the risk detection. This string value is represented as a JSON object with the quotations escaped.
    *
    * @return string|null The additionalInfo
    */
    public function getAdditionalInfo()
    {
        if (array_key_exists("additionalInfo", $this->_propDict)) {
            return $this->_propDict["additionalInfo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalInfo
    * Additional information associated with the risk detection. This string value is represented as a JSON object with the quotations escaped.
    *
    * @param string $val The additionalInfo
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setAdditionalInfo($val)
    {
        $this->_propDict["additionalInfo"] = $val;
        return $this;
    }

    /**
    * Gets the appId
    * The unique identifier for the associated application.
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The unique identifier for the associated application.
    *
    * @param string $val The appId
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the correlationId
    * Correlation ID of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity.
    *
    * @return string|null The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationId
    * Correlation ID of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity.
    *
    * @param string $val The correlationId
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }

    /**
    * Gets the detectedDateTime
    * Date and time when the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The detectedDateTime
    */
    public function getDetectedDateTime()
    {
        if (array_key_exists("detectedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["detectedDateTime"], "\DateTime") || is_null($this->_propDict["detectedDateTime"])) {
                return $this->_propDict["detectedDateTime"];
            } else {
                $this->_propDict["detectedDateTime"] = new \DateTime($this->_propDict["detectedDateTime"]);
                return $this->_propDict["detectedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the detectedDateTime
    * Date and time when the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The detectedDateTime
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setDetectedDateTime($val)
    {
        $this->_propDict["detectedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the detectionTimingType
    * Timing of the detected risk , whether real-time or offline). The possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
    *
    * @return RiskDetectionTimingType|null The detectionTimingType
    */
    public function getDetectionTimingType()
    {
        if (array_key_exists("detectionTimingType", $this->_propDict)) {
            if (is_a($this->_propDict["detectionTimingType"], "\Beta\Microsoft\Graph\Model\RiskDetectionTimingType") || is_null($this->_propDict["detectionTimingType"])) {
                return $this->_propDict["detectionTimingType"];
            } else {
                $this->_propDict["detectionTimingType"] = new RiskDetectionTimingType($this->_propDict["detectionTimingType"]);
                return $this->_propDict["detectionTimingType"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionTimingType
    * Timing of the detected risk , whether real-time or offline). The possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
    *
    * @param RiskDetectionTimingType $val The detectionTimingType
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setDetectionTimingType($val)
    {
        $this->_propDict["detectionTimingType"] = $val;
        return $this;
    }

    /**
    * Gets the ipAddress
    * Provides the IP address of the client from where the risk occurred.
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * Provides the IP address of the client from where the risk occurred.
    *
    * @param string $val The ipAddress
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }

    /**
    * Gets the keyIds
    * The unique identifier (GUID) for the key credential associated with the risk detection.
    *
    * @return string|null The keyIds
    */
    public function getKeyIds()
    {
        if (array_key_exists("keyIds", $this->_propDict)) {
            return $this->_propDict["keyIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyIds
    * The unique identifier (GUID) for the key credential associated with the risk detection.
    *
    * @param string $val The keyIds
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setKeyIds($val)
    {
        $this->_propDict["keyIds"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * Date and time when the risk detection was last updated.
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    * Date and time when the risk detection was last updated.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the location
    * Location from where the sign-in was initiated.
    *
    * @return SignInLocation|null The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\SignInLocation") || is_null($this->_propDict["location"])) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new SignInLocation($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }

    /**
    * Sets the location
    * Location from where the sign-in was initiated.
    *
    * @param SignInLocation $val The location
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }

    /**
    * Gets the requestId
    * Request identifier of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity. Supports $filter (eq).
    *
    * @return string|null The requestId
    */
    public function getRequestId()
    {
        if (array_key_exists("requestId", $this->_propDict)) {
            return $this->_propDict["requestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestId
    * Request identifier of the sign-in activity associated with the risk detection. This property is null if the risk detection is not associated with a sign-in activity. Supports $filter (eq).
    *
    * @param string $val The requestId
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setRequestId($val)
    {
        $this->_propDict["requestId"] = $val;
        return $this;
    }

    /**
    * Gets the riskDetail
    * Details of the detected risk. Note: Details for this property are only available for Azure AD Premium P2 customers. P1 customers will be returned hidden. The possible values are: none, hidden, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
    *
    * @return RiskDetail|null The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            if (is_a($this->_propDict["riskDetail"], "\Beta\Microsoft\Graph\Model\RiskDetail") || is_null($this->_propDict["riskDetail"])) {
                return $this->_propDict["riskDetail"];
            } else {
                $this->_propDict["riskDetail"] = new RiskDetail($this->_propDict["riskDetail"]);
                return $this->_propDict["riskDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the riskDetail
    * Details of the detected risk. Note: Details for this property are only available for Azure AD Premium P2 customers. P1 customers will be returned hidden. The possible values are: none, hidden, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }

    /**
    * Gets the riskEventType
    * The type of risk event detected. The possible values are:  investigationsThreatIntelligence, generic, adminConfirmedServicePrincipalCompromised, suspiciousSignins, leakedCredentials, unknownFutureValue. Supports $filter (eq).
    *
    * @return string|null The riskEventType
    */
    public function getRiskEventType()
    {
        if (array_key_exists("riskEventType", $this->_propDict)) {
            return $this->_propDict["riskEventType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskEventType
    * The type of risk event detected. The possible values are:  investigationsThreatIntelligence, generic, adminConfirmedServicePrincipalCompromised, suspiciousSignins, leakedCredentials, unknownFutureValue. Supports $filter (eq).
    *
    * @param string $val The riskEventType
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setRiskEventType($val)
    {
        $this->_propDict["riskEventType"] = $val;
        return $this;
    }

    /**
    * Gets the riskLevel
    * Level of the detected risk. Note: Details for this property are only available for Azure AD Premium P2 customers. P1 customers will be returned hidden. The possible values are: low, medium, high, hidden, none, unknownFutureValue.
    *
    * @return RiskLevel|null The riskLevel
    */
    public function getRiskLevel()
    {
        if (array_key_exists("riskLevel", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevel"], "\Beta\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["riskLevel"])) {
                return $this->_propDict["riskLevel"];
            } else {
                $this->_propDict["riskLevel"] = new RiskLevel($this->_propDict["riskLevel"]);
                return $this->_propDict["riskLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the riskLevel
    * Level of the detected risk. Note: Details for this property are only available for Azure AD Premium P2 customers. P1 customers will be returned hidden. The possible values are: low, medium, high, hidden, none, unknownFutureValue.
    *
    * @param RiskLevel $val The riskLevel
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setRiskLevel($val)
    {
        $this->_propDict["riskLevel"] = $val;
        return $this;
    }

    /**
    * Gets the riskState
    * The state of a detected risky service principal or sign-in activity. The possible values are: none, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    *
    * @return RiskState|null The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            if (is_a($this->_propDict["riskState"], "\Beta\Microsoft\Graph\Model\RiskState") || is_null($this->_propDict["riskState"])) {
                return $this->_propDict["riskState"];
            } else {
                $this->_propDict["riskState"] = new RiskState($this->_propDict["riskState"]);
                return $this->_propDict["riskState"];
            }
        }
        return null;
    }

    /**
    * Sets the riskState
    * The state of a detected risky service principal or sign-in activity. The possible values are: none, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    *
    * @param RiskState $val The riskState
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalDisplayName
    * The display name for the service principal.
    *
    * @return string|null The servicePrincipalDisplayName
    */
    public function getServicePrincipalDisplayName()
    {
        if (array_key_exists("servicePrincipalDisplayName", $this->_propDict)) {
            return $this->_propDict["servicePrincipalDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalDisplayName
    * The display name for the service principal.
    *
    * @param string $val The servicePrincipalDisplayName
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setServicePrincipalDisplayName($val)
    {
        $this->_propDict["servicePrincipalDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalId
    * The unique identifier for the service principal. Supports $filter (eq).
    *
    * @return string|null The servicePrincipalId
    */
    public function getServicePrincipalId()
    {
        if (array_key_exists("servicePrincipalId", $this->_propDict)) {
            return $this->_propDict["servicePrincipalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalId
    * The unique identifier for the service principal. Supports $filter (eq).
    *
    * @param string $val The servicePrincipalId
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setServicePrincipalId($val)
    {
        $this->_propDict["servicePrincipalId"] = $val;
        return $this;
    }

    /**
    * Gets the source
    * Source of the risk detection. For example, identityProtection.
    *
    * @return string|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            return $this->_propDict["source"];
        } else {
            return null;
        }
    }

    /**
    * Sets the source
    * Source of the risk detection. For example, identityProtection.
    *
    * @param string $val The source
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the tokenIssuerType
    * Indicates the type of token issuer for the detected sign-in risk. The possible values are: AzureAD, UnknownFutureValue.
    *
    * @return TokenIssuerType|null The tokenIssuerType
    */
    public function getTokenIssuerType()
    {
        if (array_key_exists("tokenIssuerType", $this->_propDict)) {
            if (is_a($this->_propDict["tokenIssuerType"], "\Beta\Microsoft\Graph\Model\TokenIssuerType") || is_null($this->_propDict["tokenIssuerType"])) {
                return $this->_propDict["tokenIssuerType"];
            } else {
                $this->_propDict["tokenIssuerType"] = new TokenIssuerType($this->_propDict["tokenIssuerType"]);
                return $this->_propDict["tokenIssuerType"];
            }
        }
        return null;
    }

    /**
    * Sets the tokenIssuerType
    * Indicates the type of token issuer for the detected sign-in risk. The possible values are: AzureAD, UnknownFutureValue.
    *
    * @param TokenIssuerType $val The tokenIssuerType
    *
    * @return ServicePrincipalRiskDetection
    */
    public function setTokenIssuerType($val)
    {
        $this->_propDict["tokenIssuerType"] = $val;
        return $this;
    }

}
