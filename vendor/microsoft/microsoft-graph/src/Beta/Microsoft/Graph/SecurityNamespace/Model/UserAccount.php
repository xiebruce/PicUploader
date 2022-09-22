<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAccount File
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
* UserAccount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserAccount extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the accountName
    * The user account's displayed name.
    *
    * @return string|null The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountName
    * The user account's displayed name.
    *
    * @param string $val The value of the accountName
    *
    * @return UserAccount
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    /**
    * Gets the azureAdUserId
    * The user object identifier in Azure AD.
    *
    * @return string|null The azureAdUserId
    */
    public function getAzureAdUserId()
    {
        if (array_key_exists("azureAdUserId", $this->_propDict)) {
            return $this->_propDict["azureAdUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureAdUserId
    * The user object identifier in Azure AD.
    *
    * @param string $val The value of the azureAdUserId
    *
    * @return UserAccount
    */
    public function setAzureAdUserId($val)
    {
        $this->_propDict["azureAdUserId"] = $val;
        return $this;
    }
    /**
    * Gets the domainName
    * The name of the Active Directory domain of which the user is a member.
    *
    * @return string|null The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainName
    * The name of the Active Directory domain of which the user is a member.
    *
    * @param string $val The value of the domainName
    *
    * @return UserAccount
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * The user principal name of the account in Azure AD.
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
    * The user principal name of the account in Azure AD.
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return UserAccount
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the userSid
    * The local security identifier of the user account.
    *
    * @return string|null The userSid
    */
    public function getUserSid()
    {
        if (array_key_exists("userSid", $this->_propDict)) {
            return $this->_propDict["userSid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userSid
    * The local security identifier of the user account.
    *
    * @param string $val The value of the userSid
    *
    * @return UserAccount
    */
    public function setUserSid($val)
    {
        $this->_propDict["userSid"] = $val;
        return $this;
    }
}
