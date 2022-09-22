<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailboxEvidence File
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
* MailboxEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailboxEvidence extends AlertEvidence
{
    /**
    * Gets the displayName
    * The name associated with the mailbox.
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
    * The name associated with the mailbox.
    *
    * @param string $val The value of the displayName
    *
    * @return MailboxEvidence
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the primaryAddress
    * The primary email address of the mailbox.
    *
    * @return string|null The primaryAddress
    */
    public function getPrimaryAddress()
    {
        if (array_key_exists("primaryAddress", $this->_propDict)) {
            return $this->_propDict["primaryAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryAddress
    * The primary email address of the mailbox.
    *
    * @param string $val The value of the primaryAddress
    *
    * @return MailboxEvidence
    */
    public function setPrimaryAddress($val)
    {
        $this->_propDict["primaryAddress"] = $val;
        return $this;
    }

    /**
    * Gets the userAccount
    * The user account of the mailbox.
    *
    * @return UserAccount|null The userAccount
    */
    public function getUserAccount()
    {
        if (array_key_exists("userAccount", $this->_propDict)) {
            if (is_a($this->_propDict["userAccount"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\UserAccount") || is_null($this->_propDict["userAccount"])) {
                return $this->_propDict["userAccount"];
            } else {
                $this->_propDict["userAccount"] = new UserAccount($this->_propDict["userAccount"]);
                return $this->_propDict["userAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccount
    * The user account of the mailbox.
    *
    * @param UserAccount $val The value to assign to the userAccount
    *
    * @return MailboxEvidence The MailboxEvidence
    */
    public function setUserAccount($val)
    {
        $this->_propDict["userAccount"] = $val;
         return $this;
    }
}
