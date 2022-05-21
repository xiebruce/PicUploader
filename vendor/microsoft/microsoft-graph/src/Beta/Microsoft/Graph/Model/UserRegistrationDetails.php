<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserRegistrationDetails File
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
* UserRegistrationDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserRegistrationDetails extends Entity
{
    /**
    * Gets the isMfaCapable
    * Whether the user has registered a strong authentication method for multi-factor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @return bool|null The isMfaCapable
    */
    public function getIsMfaCapable()
    {
        if (array_key_exists("isMfaCapable", $this->_propDict)) {
            return $this->_propDict["isMfaCapable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMfaCapable
    * Whether the user has registered a strong authentication method for multi-factor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @param bool $val The isMfaCapable
    *
    * @return UserRegistrationDetails
    */
    public function setIsMfaCapable($val)
    {
        $this->_propDict["isMfaCapable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMfaRegistered
    * Whether the user has registered a strong authentication method for multi-factor authentication. The method may not necessarily be allowed by the authentication methods policy.  Supports $filter (eq).
    *
    * @return bool|null The isMfaRegistered
    */
    public function getIsMfaRegistered()
    {
        if (array_key_exists("isMfaRegistered", $this->_propDict)) {
            return $this->_propDict["isMfaRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMfaRegistered
    * Whether the user has registered a strong authentication method for multi-factor authentication. The method may not necessarily be allowed by the authentication methods policy.  Supports $filter (eq).
    *
    * @param bool $val The isMfaRegistered
    *
    * @return UserRegistrationDetails
    */
    public function setIsMfaRegistered($val)
    {
        $this->_propDict["isMfaRegistered"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isPasswordlessCapable
    * Whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @return bool|null The isPasswordlessCapable
    */
    public function getIsPasswordlessCapable()
    {
        if (array_key_exists("isPasswordlessCapable", $this->_propDict)) {
            return $this->_propDict["isPasswordlessCapable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPasswordlessCapable
    * Whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @param bool $val The isPasswordlessCapable
    *
    * @return UserRegistrationDetails
    */
    public function setIsPasswordlessCapable($val)
    {
        $this->_propDict["isPasswordlessCapable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSsprCapable
    * Whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
    *
    * @return bool|null The isSsprCapable
    */
    public function getIsSsprCapable()
    {
        if (array_key_exists("isSsprCapable", $this->_propDict)) {
            return $this->_propDict["isSsprCapable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSsprCapable
    * Whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
    *
    * @param bool $val The isSsprCapable
    *
    * @return UserRegistrationDetails
    */
    public function setIsSsprCapable($val)
    {
        $this->_propDict["isSsprCapable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSsprEnabled
    * Whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
    *
    * @return bool|null The isSsprEnabled
    */
    public function getIsSsprEnabled()
    {
        if (array_key_exists("isSsprEnabled", $this->_propDict)) {
            return $this->_propDict["isSsprEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSsprEnabled
    * Whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
    *
    * @param bool $val The isSsprEnabled
    *
    * @return UserRegistrationDetails
    */
    public function setIsSsprEnabled($val)
    {
        $this->_propDict["isSsprEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSsprRegistered
    * Whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
    *
    * @return bool|null The isSsprRegistered
    */
    public function getIsSsprRegistered()
    {
        if (array_key_exists("isSsprRegistered", $this->_propDict)) {
            return $this->_propDict["isSsprRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSsprRegistered
    * Whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
    *
    * @param bool $val The isSsprRegistered
    *
    * @return UserRegistrationDetails
    */
    public function setIsSsprRegistered($val)
    {
        $this->_propDict["isSsprRegistered"] = boolval($val);
        return $this;
    }

    /**
    * Gets the methodsRegistered
    * Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
    *
    * @return string|null The methodsRegistered
    */
    public function getMethodsRegistered()
    {
        if (array_key_exists("methodsRegistered", $this->_propDict)) {
            return $this->_propDict["methodsRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the methodsRegistered
    * Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
    *
    * @param string $val The methodsRegistered
    *
    * @return UserRegistrationDetails
    */
    public function setMethodsRegistered($val)
    {
        $this->_propDict["methodsRegistered"] = $val;
        return $this;
    }

    /**
    * Gets the userDisplayName
    * The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderBy.
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
    * The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderBy.
    *
    * @param string $val The userDisplayName
    *
    * @return UserRegistrationDetails
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderBy.
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
    * The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderBy.
    *
    * @param string $val The userPrincipalName
    *
    * @return UserRegistrationDetails
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

}
