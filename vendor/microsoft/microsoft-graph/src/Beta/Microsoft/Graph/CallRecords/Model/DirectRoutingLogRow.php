<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectRoutingLogRow File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* DirectRoutingLogRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DirectRoutingLogRow extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the calleeNumber
    * Number of the user or bot who received the call. E.164 format, but may include additional data.
    *
    * @return string|null The calleeNumber
    */
    public function getCalleeNumber()
    {
        if (array_key_exists("calleeNumber", $this->_propDict)) {
            return $this->_propDict["calleeNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calleeNumber
    * Number of the user or bot who received the call. E.164 format, but may include additional data.
    *
    * @param string $val The value of the calleeNumber
    *
    * @return DirectRoutingLogRow
    */
    public function setCalleeNumber($val)
    {
        $this->_propDict["calleeNumber"] = $val;
        return $this;
    }
    /**
    * Gets the callEndSubReason
    * In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
    *
    * @return int|null The callEndSubReason
    */
    public function getCallEndSubReason()
    {
        if (array_key_exists("callEndSubReason", $this->_propDict)) {
            return $this->_propDict["callEndSubReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callEndSubReason
    * In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
    *
    * @param int $val The value of the callEndSubReason
    *
    * @return DirectRoutingLogRow
    */
    public function setCallEndSubReason($val)
    {
        $this->_propDict["callEndSubReason"] = $val;
        return $this;
    }
    /**
    * Gets the callerNumber
    * Number of the user or bot who made the call. E.164 format, but may include additional data.
    *
    * @return string|null The callerNumber
    */
    public function getCallerNumber()
    {
        if (array_key_exists("callerNumber", $this->_propDict)) {
            return $this->_propDict["callerNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callerNumber
    * Number of the user or bot who made the call. E.164 format, but may include additional data.
    *
    * @param string $val The value of the callerNumber
    *
    * @return DirectRoutingLogRow
    */
    public function setCallerNumber($val)
    {
        $this->_propDict["callerNumber"] = $val;
        return $this;
    }
    /**
    * Gets the callType
    * Call type and direction.
    *
    * @return string|null The callType
    */
    public function getCallType()
    {
        if (array_key_exists("callType", $this->_propDict)) {
            return $this->_propDict["callType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callType
    * Call type and direction.
    *
    * @param string $val The value of the callType
    *
    * @return DirectRoutingLogRow
    */
    public function setCallType($val)
    {
        $this->_propDict["callType"] = $val;
        return $this;
    }
    /**
    * Gets the correlationId
    * Identifier for the call that you can use when calling Microsoft Support. GUID.
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
    * Identifier for the call that you can use when calling Microsoft Support. GUID.
    *
    * @param string $val The value of the correlationId
    *
    * @return DirectRoutingLogRow
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    /**
    * Gets the duration
    * Duration of the call in seconds.
    *
    * @return int|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            return $this->_propDict["duration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duration
    * Duration of the call in seconds.
    *
    * @param int $val The value of the duration
    *
    * @return DirectRoutingLogRow
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * Only exists for successful (fully established) calls. Time when call ended.
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * Only exists for successful (fully established) calls. Time when call ended.
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return DirectRoutingLogRow The DirectRoutingLogRow
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the failureDateTime
    * Only exists for failed (not fully established) calls.
    *
    * @return \DateTime|null The failureDateTime
    */
    public function getFailureDateTime()
    {
        if (array_key_exists("failureDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["failureDateTime"], "\DateTime") || is_null($this->_propDict["failureDateTime"])) {
                return $this->_propDict["failureDateTime"];
            } else {
                $this->_propDict["failureDateTime"] = new \DateTime($this->_propDict["failureDateTime"]);
                return $this->_propDict["failureDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the failureDateTime
    * Only exists for failed (not fully established) calls.
    *
    * @param \DateTime $val The value to assign to the failureDateTime
    *
    * @return DirectRoutingLogRow The DirectRoutingLogRow
    */
    public function setFailureDateTime($val)
    {
        $this->_propDict["failureDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the finalSipCode
    * The code with which the call ended, RFC 3261.
    *
    * @return int|null The finalSipCode
    */
    public function getFinalSipCode()
    {
        if (array_key_exists("finalSipCode", $this->_propDict)) {
            return $this->_propDict["finalSipCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the finalSipCode
    * The code with which the call ended, RFC 3261.
    *
    * @param int $val The value of the finalSipCode
    *
    * @return DirectRoutingLogRow
    */
    public function setFinalSipCode($val)
    {
        $this->_propDict["finalSipCode"] = $val;
        return $this;
    }
    /**
    * Gets the finalSipCodePhrase
    * Description of the SIP code and Microsoft subcode.
    *
    * @return string|null The finalSipCodePhrase
    */
    public function getFinalSipCodePhrase()
    {
        if (array_key_exists("finalSipCodePhrase", $this->_propDict)) {
            return $this->_propDict["finalSipCodePhrase"];
        } else {
            return null;
        }
    }

    /**
    * Sets the finalSipCodePhrase
    * Description of the SIP code and Microsoft subcode.
    *
    * @param string $val The value of the finalSipCodePhrase
    *
    * @return DirectRoutingLogRow
    */
    public function setFinalSipCodePhrase($val)
    {
        $this->_propDict["finalSipCodePhrase"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Unique call identifier. GUID.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique call identifier. GUID.
    *
    * @param string $val The value of the id
    *
    * @return DirectRoutingLogRow
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the inviteDateTime
    * When the initial invite was sent.
    *
    * @return \DateTime|null The inviteDateTime
    */
    public function getInviteDateTime()
    {
        if (array_key_exists("inviteDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["inviteDateTime"], "\DateTime") || is_null($this->_propDict["inviteDateTime"])) {
                return $this->_propDict["inviteDateTime"];
            } else {
                $this->_propDict["inviteDateTime"] = new \DateTime($this->_propDict["inviteDateTime"]);
                return $this->_propDict["inviteDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the inviteDateTime
    * When the initial invite was sent.
    *
    * @param \DateTime $val The value to assign to the inviteDateTime
    *
    * @return DirectRoutingLogRow The DirectRoutingLogRow
    */
    public function setInviteDateTime($val)
    {
        $this->_propDict["inviteDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the mediaBypassEnabled
    * Indicates if the trunk was enabled for media bypass or not.
    *
    * @return bool|null The mediaBypassEnabled
    */
    public function getMediaBypassEnabled()
    {
        if (array_key_exists("mediaBypassEnabled", $this->_propDict)) {
            return $this->_propDict["mediaBypassEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaBypassEnabled
    * Indicates if the trunk was enabled for media bypass or not.
    *
    * @param bool $val The value of the mediaBypassEnabled
    *
    * @return DirectRoutingLogRow
    */
    public function setMediaBypassEnabled($val)
    {
        $this->_propDict["mediaBypassEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the mediaPathLocation
    * The datacenter used for media path in non-bypass call.
    *
    * @return string|null The mediaPathLocation
    */
    public function getMediaPathLocation()
    {
        if (array_key_exists("mediaPathLocation", $this->_propDict)) {
            return $this->_propDict["mediaPathLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaPathLocation
    * The datacenter used for media path in non-bypass call.
    *
    * @param string $val The value of the mediaPathLocation
    *
    * @return DirectRoutingLogRow
    */
    public function setMediaPathLocation($val)
    {
        $this->_propDict["mediaPathLocation"] = $val;
        return $this;
    }
    /**
    * Gets the signalingLocation
    * The datacenter used for signaling for both bypass and non-bypass calls.
    *
    * @return string|null The signalingLocation
    */
    public function getSignalingLocation()
    {
        if (array_key_exists("signalingLocation", $this->_propDict)) {
            return $this->_propDict["signalingLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signalingLocation
    * The datacenter used for signaling for both bypass and non-bypass calls.
    *
    * @param string $val The value of the signalingLocation
    *
    * @return DirectRoutingLogRow
    */
    public function setSignalingLocation($val)
    {
        $this->_propDict["signalingLocation"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * Call start time.For failed and unanswered calls, this can be equal to invite or failure time.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * Call start time.For failed and unanswered calls, this can be equal to invite or failure time.
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return DirectRoutingLogRow The DirectRoutingLogRow
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the successfulCall
    * Success or attempt.
    *
    * @return bool|null The successfulCall
    */
    public function getSuccessfulCall()
    {
        if (array_key_exists("successfulCall", $this->_propDict)) {
            return $this->_propDict["successfulCall"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulCall
    * Success or attempt.
    *
    * @param bool $val The value of the successfulCall
    *
    * @return DirectRoutingLogRow
    */
    public function setSuccessfulCall($val)
    {
        $this->_propDict["successfulCall"] = $val;
        return $this;
    }
    /**
    * Gets the trunkFullyQualifiedDomainName
    * Fully qualified domain name of the session border controller.
    *
    * @return string|null The trunkFullyQualifiedDomainName
    */
    public function getTrunkFullyQualifiedDomainName()
    {
        if (array_key_exists("trunkFullyQualifiedDomainName", $this->_propDict)) {
            return $this->_propDict["trunkFullyQualifiedDomainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trunkFullyQualifiedDomainName
    * Fully qualified domain name of the session border controller.
    *
    * @param string $val The value of the trunkFullyQualifiedDomainName
    *
    * @return DirectRoutingLogRow
    */
    public function setTrunkFullyQualifiedDomainName($val)
    {
        $this->_propDict["trunkFullyQualifiedDomainName"] = $val;
        return $this;
    }
    /**
    * Gets the userDisplayName
    * Display name of the user.
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
    * Display name of the user.
    *
    * @param string $val The value of the userDisplayName
    *
    * @return DirectRoutingLogRow
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * Calling user's ID in Graph. This and other user info will be null/empty for bot call types. GUID.
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
    * Calling user's ID in Graph. This and other user info will be null/empty for bot call types. GUID.
    *
    * @param string $val The value of the userId
    *
    * @return DirectRoutingLogRow
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
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
    * UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return DirectRoutingLogRow
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
