<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskDetection File
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
* RiskDetection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskDetection extends Entity
{
    /**
    * Gets the activity
    * Indicates the activity type the detected risk is linked to. Possible values are: signin, user, unknownFutureValue.
    *
    * @return ActivityType|null The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "\Microsoft\Graph\Model\ActivityType") || is_null($this->_propDict["activity"])) {
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
    * Indicates the activity type the detected risk is linked to. Possible values are: signin, user, unknownFutureValue.
    *
    * @param ActivityType $val The activity
    *
    * @return RiskDetection
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }

    /**
    * Gets the activityDateTime
    * Date and time that the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z
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
    * Date and time that the risky activity occurred. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return RiskDetection
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the additionalInfo
    * Additional information associated with the risk detection in JSON format. For example, '[{/'Key/':/'userAgent/',/'Value/':/'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36/'}]'. Possible keys in the additionalInfo JSON string are: userAgent, alertUrl, relatedEventTimeInUtc, relatedUserAgent, deviceInformation, relatedLocation, requestId, correlationId, lastActivityTimeInUtc, malwareName, clientLocation, clientIp, riskReasons. For more information about riskReasons and possible values, see riskReasons values.
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
    * Additional information associated with the risk detection in JSON format. For example, '[{/'Key/':/'userAgent/',/'Value/':/'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36/'}]'. Possible keys in the additionalInfo JSON string are: userAgent, alertUrl, relatedEventTimeInUtc, relatedUserAgent, deviceInformation, relatedLocation, requestId, correlationId, lastActivityTimeInUtc, malwareName, clientLocation, clientIp, riskReasons. For more information about riskReasons and possible values, see riskReasons values.
    *
    * @param string $val The additionalInfo
    *
    * @return RiskDetection
    */
    public function setAdditionalInfo($val)
    {
        $this->_propDict["additionalInfo"] = $val;
        return $this;
    }

    /**
    * Gets the correlationId
    * Correlation ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in.
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
    * Correlation ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in.
    *
    * @param string $val The correlationId
    *
    * @return RiskDetection
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }

    /**
    * Gets the detectedDateTime
    * Date and time that the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: 2014-01-01T00:00:00Z
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
    * Date and time that the risk was detected. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The detectedDateTime
    *
    * @return RiskDetection
    */
    public function setDetectedDateTime($val)
    {
        $this->_propDict["detectedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the detectionTimingType
    * Timing of the detected risk (real-time/offline). Possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
    *
    * @return RiskDetectionTimingType|null The detectionTimingType
    */
    public function getDetectionTimingType()
    {
        if (array_key_exists("detectionTimingType", $this->_propDict)) {
            if (is_a($this->_propDict["detectionTimingType"], "\Microsoft\Graph\Model\RiskDetectionTimingType") || is_null($this->_propDict["detectionTimingType"])) {
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
    * Timing of the detected risk (real-time/offline). Possible values are: notDefined, realtime, nearRealtime, offline, unknownFutureValue.
    *
    * @param RiskDetectionTimingType $val The detectionTimingType
    *
    * @return RiskDetection
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
    * @return RiskDetection
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * Date and time that the risk detection was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z
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
    * Date and time that the risk detection was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is look like this: 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return RiskDetection
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the location
    * Location of the sign-in.
    *
    * @return SignInLocation|null The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Microsoft\Graph\Model\SignInLocation") || is_null($this->_propDict["location"])) {
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
    * Location of the sign-in.
    *
    * @param SignInLocation $val The location
    *
    * @return RiskDetection
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }

    /**
    * Gets the requestId
    * Request ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in.
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
    * Request ID of the sign-in associated with the risk detection. This property is null if the risk detection is not associated with a sign-in.
    *
    * @param string $val The requestId
    *
    * @return RiskDetection
    */
    public function setRequestId($val)
    {
        $this->_propDict["requestId"] = $val;
        return $this;
    }

    /**
    * Gets the riskDetail
    * Details of the detected risk. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, m365DAdminDismissedDetection. Note that you must use the Prefer: include - unknown -enum-members request header to get the following value(s) in this evolvable enum: m365DAdminDismissedDetection.
    *
    * @return RiskDetail|null The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            if (is_a($this->_propDict["riskDetail"], "\Microsoft\Graph\Model\RiskDetail") || is_null($this->_propDict["riskDetail"])) {
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
    * Details of the detected risk. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, m365DAdminDismissedDetection. Note that you must use the Prefer: include - unknown -enum-members request header to get the following value(s) in this evolvable enum: m365DAdminDismissedDetection.
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return RiskDetection
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }

    /**
    * Gets the riskEventType
    * The type of risk event detected. The possible values are unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence, generic,adminConfirmedUserCompromised, passwordSpray, impossibleTravel, newCountry, anomalousToken, tokenIssuerAnomaly,suspiciousBrowser, riskyIPAddress, mcasSuspiciousInboxManipulationRules, suspiciousInboxForwarding, and anomalousUserActivity. If the risk detection is a premium detection, will show generic. For more information about each value, see riskEventType values.
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
    * The type of risk event detected. The possible values are unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence, generic,adminConfirmedUserCompromised, passwordSpray, impossibleTravel, newCountry, anomalousToken, tokenIssuerAnomaly,suspiciousBrowser, riskyIPAddress, mcasSuspiciousInboxManipulationRules, suspiciousInboxForwarding, and anomalousUserActivity. If the risk detection is a premium detection, will show generic. For more information about each value, see riskEventType values.
    *
    * @param string $val The riskEventType
    *
    * @return RiskDetection
    */
    public function setRiskEventType($val)
    {
        $this->_propDict["riskEventType"] = $val;
        return $this;
    }

    /**
    * Gets the riskLevel
    * Level of the detected risk. Possible values are: low, medium, high, hidden, none, unknownFutureValue.
    *
    * @return RiskLevel|null The riskLevel
    */
    public function getRiskLevel()
    {
        if (array_key_exists("riskLevel", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevel"], "\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["riskLevel"])) {
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
    * Level of the detected risk. Possible values are: low, medium, high, hidden, none, unknownFutureValue.
    *
    * @param RiskLevel $val The riskLevel
    *
    * @return RiskDetection
    */
    public function setRiskLevel($val)
    {
        $this->_propDict["riskLevel"] = $val;
        return $this;
    }

    /**
    * Gets the riskState
    * The state of a detected risky user or sign-in. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    *
    * @return RiskState|null The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            if (is_a($this->_propDict["riskState"], "\Microsoft\Graph\Model\RiskState") || is_null($this->_propDict["riskState"])) {
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
    * The state of a detected risky user or sign-in. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    *
    * @param RiskState $val The riskState
    *
    * @return RiskDetection
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }

    /**
    * Gets the source
    * Source of the risk detection. For example, activeDirectory.
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
    * Source of the risk detection. For example, activeDirectory.
    *
    * @param string $val The source
    *
    * @return RiskDetection
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the tokenIssuerType
    * Indicates the type of token issuer for the detected sign-in risk. Possible values are: AzureAD, ADFederationServices, UnknownFutureValue.
    *
    * @return TokenIssuerType|null The tokenIssuerType
    */
    public function getTokenIssuerType()
    {
        if (array_key_exists("tokenIssuerType", $this->_propDict)) {
            if (is_a($this->_propDict["tokenIssuerType"], "\Microsoft\Graph\Model\TokenIssuerType") || is_null($this->_propDict["tokenIssuerType"])) {
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
    * Indicates the type of token issuer for the detected sign-in risk. Possible values are: AzureAD, ADFederationServices, UnknownFutureValue.
    *
    * @param TokenIssuerType $val The tokenIssuerType
    *
    * @return RiskDetection
    */
    public function setTokenIssuerType($val)
    {
        $this->_propDict["tokenIssuerType"] = $val;
        return $this;
    }

    /**
    * Gets the userDisplayName
    * The user principal name (UPN) of the user.
    *
    * @return string|null The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    * The user principal name (UPN) of the user.
    *
    * @param string $val The userDisplayName
    *
    * @return RiskDetection
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    * Unique ID of the user.
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * Unique ID of the user.
    *
    * @param string $val The userId
    *
    * @return RiskDetection
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) of the user.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * The user principal name (UPN) of the user.
    *
    * @param string $val The userPrincipalName
    *
    * @return RiskDetection
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

}
