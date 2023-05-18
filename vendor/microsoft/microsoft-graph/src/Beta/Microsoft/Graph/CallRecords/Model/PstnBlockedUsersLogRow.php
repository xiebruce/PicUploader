<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PstnBlockedUsersLogRow File
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
* PstnBlockedUsersLogRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PstnBlockedUsersLogRow extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the blockDateTime
    * The date and time when the user was blocked/unblocked from making PSTN calls. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The blockDateTime
    */
    public function getBlockDateTime()
    {
        if (array_key_exists("blockDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["blockDateTime"], "\DateTime") || is_null($this->_propDict["blockDateTime"])) {
                return $this->_propDict["blockDateTime"];
            } else {
                $this->_propDict["blockDateTime"] = new \DateTime($this->_propDict["blockDateTime"]);
                return $this->_propDict["blockDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the blockDateTime
    * The date and time when the user was blocked/unblocked from making PSTN calls. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the blockDateTime
    *
    * @return PstnBlockedUsersLogRow The PstnBlockedUsersLogRow
    */
    public function setBlockDateTime($val)
    {
        $this->_propDict["blockDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the blockReason
    * The reason why the user is blocked/unblocked from making calls.
    *
    * @return string|null The blockReason
    */
    public function getBlockReason()
    {
        if (array_key_exists("blockReason", $this->_propDict)) {
            return $this->_propDict["blockReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockReason
    * The reason why the user is blocked/unblocked from making calls.
    *
    * @param string $val The value of the blockReason
    *
    * @return PstnBlockedUsersLogRow
    */
    public function setBlockReason($val)
    {
        $this->_propDict["blockReason"] = $val;
        return $this;
    }
    /**
    * Gets the remediationId
    * Unique identifier (GUID) for the blocking/unblocking action.
    *
    * @return string|null The remediationId
    */
    public function getRemediationId()
    {
        if (array_key_exists("remediationId", $this->_propDict)) {
            return $this->_propDict["remediationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remediationId
    * Unique identifier (GUID) for the blocking/unblocking action.
    *
    * @param string $val The value of the remediationId
    *
    * @return PstnBlockedUsersLogRow
    */
    public function setRemediationId($val)
    {
        $this->_propDict["remediationId"] = $val;
        return $this;
    }

    /**
    * Gets the userBlockMode
    * Indicates whether the user is blocked or unblocked from making PSTN calls in Microsoft Teams. The possible values are: blocked, unblocked, unknownFutureValue.
    *
    * @return PstnUserBlockMode|null The userBlockMode
    */
    public function getUserBlockMode()
    {
        if (array_key_exists("userBlockMode", $this->_propDict)) {
            if (is_a($this->_propDict["userBlockMode"], "\Beta\Microsoft\Graph\CallRecords\Model\PstnUserBlockMode") || is_null($this->_propDict["userBlockMode"])) {
                return $this->_propDict["userBlockMode"];
            } else {
                $this->_propDict["userBlockMode"] = new PstnUserBlockMode($this->_propDict["userBlockMode"]);
                return $this->_propDict["userBlockMode"];
            }
        }
        return null;
    }

    /**
    * Sets the userBlockMode
    * Indicates whether the user is blocked or unblocked from making PSTN calls in Microsoft Teams. The possible values are: blocked, unblocked, unknownFutureValue.
    *
    * @param PstnUserBlockMode $val The value to assign to the userBlockMode
    *
    * @return PstnBlockedUsersLogRow The PstnBlockedUsersLogRow
    */
    public function setUserBlockMode($val)
    {
        $this->_propDict["userBlockMode"] = $val;
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
    * @return PstnBlockedUsersLogRow
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * The unique identifier (GUID) of the user in Azure Active Directory.
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
    * The unique identifier (GUID) of the user in Azure Active Directory.
    *
    * @param string $val The value of the userId
    *
    * @return PstnBlockedUsersLogRow
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * The user principal name (sign-in name) in Azure Active Directory. This is usually the same as the user's SIP address, and can be same as the user's e-mail address.
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
    * The user principal name (sign-in name) in Azure Active Directory. This is usually the same as the user's SIP address, and can be same as the user's e-mail address.
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return PstnBlockedUsersLogRow
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the userTelephoneNumber
    * User's blocked number. For details, see E.164.
    *
    * @return string|null The userTelephoneNumber
    */
    public function getUserTelephoneNumber()
    {
        if (array_key_exists("userTelephoneNumber", $this->_propDict)) {
            return $this->_propDict["userTelephoneNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userTelephoneNumber
    * User's blocked number. For details, see E.164.
    *
    * @param string $val The value of the userTelephoneNumber
    *
    * @return PstnBlockedUsersLogRow
    */
    public function setUserTelephoneNumber($val)
    {
        $this->_propDict["userTelephoneNumber"] = $val;
        return $this;
    }
}
