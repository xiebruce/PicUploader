<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignIn File
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
* SignIn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignIn extends Entity
{
    /**
    * Gets the appDisplayName
    * App name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appDisplayName
    * App name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The appDisplayName
    *
    * @return SignIn
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the appId
    * Unique GUID representing the app ID in the Azure Active Directory. Supports $filter (eq operator only).
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
    * Unique GUID representing the app ID in the Azure Active Directory. Supports $filter (eq operator only).
    *
    * @param string $val The appId
    *
    * @return SignIn
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }


     /**
     * Gets the appliedConditionalAccessPolicies
     *
     * @return array|null The appliedConditionalAccessPolicies
     */
    public function getAppliedConditionalAccessPolicies()
    {
        if (array_key_exists("appliedConditionalAccessPolicies", $this->_propDict)) {
           return $this->_propDict["appliedConditionalAccessPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appliedConditionalAccessPolicies
    *
    * @param AppliedConditionalAccessPolicy[] $val The appliedConditionalAccessPolicies
    *
    * @return SignIn
    */
    public function setAppliedConditionalAccessPolicies($val)
    {
        $this->_propDict["appliedConditionalAccessPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the clientAppUsed
    * Identifies the client used for the sign-in activity. Modern authentication clients include Browser and modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients. Supports $filter (eq operator only).
    *
    * @return string|null The clientAppUsed
    */
    public function getClientAppUsed()
    {
        if (array_key_exists("clientAppUsed", $this->_propDict)) {
            return $this->_propDict["clientAppUsed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientAppUsed
    * Identifies the client used for the sign-in activity. Modern authentication clients include Browser and modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients. Supports $filter (eq operator only).
    *
    * @param string $val The clientAppUsed
    *
    * @return SignIn
    */
    public function setClientAppUsed($val)
    {
        $this->_propDict["clientAppUsed"] = $val;
        return $this;
    }

    /**
    * Gets the conditionalAccessStatus
    * Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue. Supports $filter (eq operator only).
    *
    * @return ConditionalAccessStatus|null The conditionalAccessStatus
    */
    public function getConditionalAccessStatus()
    {
        if (array_key_exists("conditionalAccessStatus", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessStatus"], "\Microsoft\Graph\Model\ConditionalAccessStatus") || is_null($this->_propDict["conditionalAccessStatus"])) {
                return $this->_propDict["conditionalAccessStatus"];
            } else {
                $this->_propDict["conditionalAccessStatus"] = new ConditionalAccessStatus($this->_propDict["conditionalAccessStatus"]);
                return $this->_propDict["conditionalAccessStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionalAccessStatus
    * Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue. Supports $filter (eq operator only).
    *
    * @param ConditionalAccessStatus $val The conditionalAccessStatus
    *
    * @return SignIn
    */
    public function setConditionalAccessStatus($val)
    {
        $this->_propDict["conditionalAccessStatus"] = $val;
        return $this;
    }

    /**
    * Gets the correlationId
    * The request ID sent from the client when the sign-in is initiated; used to troubleshoot sign-in activity. Supports $filter (eq operator only).
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
    * The request ID sent from the client when the sign-in is initiated; used to troubleshoot sign-in activity. Supports $filter (eq operator only).
    *
    * @param string $val The correlationId
    *
    * @return SignIn
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
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
    * Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return SignIn
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deviceDetail
    * Device information from where the sign-in occurred; includes device ID, operating system, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSytem properties.
    *
    * @return DeviceDetail|null The deviceDetail
    */
    public function getDeviceDetail()
    {
        if (array_key_exists("deviceDetail", $this->_propDict)) {
            if (is_a($this->_propDict["deviceDetail"], "\Microsoft\Graph\Model\DeviceDetail") || is_null($this->_propDict["deviceDetail"])) {
                return $this->_propDict["deviceDetail"];
            } else {
                $this->_propDict["deviceDetail"] = new DeviceDetail($this->_propDict["deviceDetail"]);
                return $this->_propDict["deviceDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceDetail
    * Device information from where the sign-in occurred; includes device ID, operating system, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSytem properties.
    *
    * @param DeviceDetail $val The deviceDetail
    *
    * @return SignIn
    */
    public function setDeviceDetail($val)
    {
        $this->_propDict["deviceDetail"] = $val;
        return $this;
    }

    /**
    * Gets the ipAddress
    * IP address of the client used to sign in. Supports $filter (eq and startsWith operators only).
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
    * IP address of the client used to sign in. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The ipAddress
    *
    * @return SignIn
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }

    /**
    * Gets the isInteractive
    * Indicates if a sign-in is interactive or not.
    *
    * @return bool|null The isInteractive
    */
    public function getIsInteractive()
    {
        if (array_key_exists("isInteractive", $this->_propDict)) {
            return $this->_propDict["isInteractive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInteractive
    * Indicates if a sign-in is interactive or not.
    *
    * @param bool $val The isInteractive
    *
    * @return SignIn
    */
    public function setIsInteractive($val)
    {
        $this->_propDict["isInteractive"] = boolval($val);
        return $this;
    }

    /**
    * Gets the location
    * Provides the city, state, and country code where the sign-in originated. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
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
    * Provides the city, state, and country code where the sign-in originated. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
    *
    * @param SignInLocation $val The location
    *
    * @return SignIn
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }

    /**
    * Gets the resourceDisplayName
    * Name of the resource the user signed into. Supports $filter (eq operator only).
    *
    * @return string|null The resourceDisplayName
    */
    public function getResourceDisplayName()
    {
        if (array_key_exists("resourceDisplayName", $this->_propDict)) {
            return $this->_propDict["resourceDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceDisplayName
    * Name of the resource the user signed into. Supports $filter (eq operator only).
    *
    * @param string $val The resourceDisplayName
    *
    * @return SignIn
    */
    public function setResourceDisplayName($val)
    {
        $this->_propDict["resourceDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the resourceId
    * ID of the resource that the user signed into. Supports $filter (eq operator only).
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    * ID of the resource that the user signed into. Supports $filter (eq operator only).
    *
    * @param string $val The resourceId
    *
    * @return SignIn
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }

    /**
    * Gets the riskDetail
    * Provides the 'reason' behind a specific state of a risky user, sign-in or a risk event. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far.  Supports $filter (eq operator only).Note: Details for this property require an Azure AD Premium P2 license. Other licenses return the value hidden.
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
    * Provides the 'reason' behind a specific state of a risky user, sign-in or a risk event. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far.  Supports $filter (eq operator only).Note: Details for this property require an Azure AD Premium P2 license. Other licenses return the value hidden.
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return SignIn
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }


     /**
     * Gets the riskEventTypes
    * Risk event types associated with the sign-in. The possible values are: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, and unknownFutureValue. Supports $filter (eq operator only).
     *
     * @return array|null The riskEventTypes
     */
    public function getRiskEventTypes()
    {
        if (array_key_exists("riskEventTypes", $this->_propDict)) {
           return $this->_propDict["riskEventTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskEventTypes
    * Risk event types associated with the sign-in. The possible values are: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, and unknownFutureValue. Supports $filter (eq operator only).
    *
    * @param RiskEventType[] $val The riskEventTypes
    *
    * @return SignIn
    */
    public function setRiskEventTypes($val)
    {
        $this->_propDict["riskEventTypes"] = $val;
        return $this;
    }

    /**
    * Gets the riskEventTypesV2
    * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
    *
    * @return string|null The riskEventTypesV2
    */
    public function getRiskEventTypesV2()
    {
        if (array_key_exists("riskEventTypesV2", $this->_propDict)) {
            return $this->_propDict["riskEventTypesV2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskEventTypesV2
    * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The riskEventTypesV2
    *
    * @return SignIn
    */
    public function setRiskEventTypesV2($val)
    {
        $this->_propDict["riskEventTypes_v2"] = $val;
        return $this;
    }

    /**
    * Gets the riskLevelAggregated
    * Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only).  Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
    *
    * @return RiskLevel|null The riskLevelAggregated
    */
    public function getRiskLevelAggregated()
    {
        if (array_key_exists("riskLevelAggregated", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevelAggregated"], "\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["riskLevelAggregated"])) {
                return $this->_propDict["riskLevelAggregated"];
            } else {
                $this->_propDict["riskLevelAggregated"] = new RiskLevel($this->_propDict["riskLevelAggregated"]);
                return $this->_propDict["riskLevelAggregated"];
            }
        }
        return null;
    }

    /**
    * Sets the riskLevelAggregated
    * Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only).  Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
    *
    * @param RiskLevel $val The riskLevelAggregated
    *
    * @return SignIn
    */
    public function setRiskLevelAggregated($val)
    {
        $this->_propDict["riskLevelAggregated"] = $val;
        return $this;
    }

    /**
    * Gets the riskLevelDuringSignIn
    * Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection.  Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
    *
    * @return RiskLevel|null The riskLevelDuringSignIn
    */
    public function getRiskLevelDuringSignIn()
    {
        if (array_key_exists("riskLevelDuringSignIn", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevelDuringSignIn"], "\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["riskLevelDuringSignIn"])) {
                return $this->_propDict["riskLevelDuringSignIn"];
            } else {
                $this->_propDict["riskLevelDuringSignIn"] = new RiskLevel($this->_propDict["riskLevelDuringSignIn"]);
                return $this->_propDict["riskLevelDuringSignIn"];
            }
        }
        return null;
    }

    /**
    * Sets the riskLevelDuringSignIn
    * Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection.  Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
    *
    * @param RiskLevel $val The riskLevelDuringSignIn
    *
    * @return SignIn
    */
    public function setRiskLevelDuringSignIn($val)
    {
        $this->_propDict["riskLevelDuringSignIn"] = $val;
        return $this;
    }

    /**
    * Gets the riskState
    * Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. Supports $filter (eq operator only).
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
    * Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. Supports $filter (eq operator only).
    *
    * @param RiskState $val The riskState
    *
    * @return SignIn
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
    *
    * @return SignInStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\SignInStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SignInStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
    *
    * @param SignInStatus $val The status
    *
    * @return SignIn
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the userDisplayName
    * Display name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
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
    * Display name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The userDisplayName
    *
    * @return SignIn
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    * ID of the user that initiated the sign-in. Supports $filter (eq operator only).
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
    * ID of the user that initiated the sign-in. Supports $filter (eq operator only).
    *
    * @param string $val The userId
    *
    * @return SignIn
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * User principal name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
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
    * User principal name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The userPrincipalName
    *
    * @return SignIn
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

}
