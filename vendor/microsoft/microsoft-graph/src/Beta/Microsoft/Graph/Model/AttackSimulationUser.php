<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationUser File
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
* AttackSimulationUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationUser extends Entity
{
    /**
    * Gets the displayName
    * Display name of the user.
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
    * Display name of the user.
    *
    * @param string $val The value of the displayName
    *
    * @return AttackSimulationUser
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the email
    * Email address of the user.
    *
    * @return string|null The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    * Email address of the user.
    *
    * @param string $val The value of the email
    *
    * @return AttackSimulationUser
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    /**
    * Gets the outOfOfficeDays
    *
    * @return int|null The outOfOfficeDays
    */
    public function getOutOfOfficeDays()
    {
        if (array_key_exists("outOfOfficeDays", $this->_propDict)) {
            return $this->_propDict["outOfOfficeDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outOfOfficeDays
    *
    * @param int $val The value of the outOfOfficeDays
    *
    * @return AttackSimulationUser
    */
    public function setOutOfOfficeDays($val)
    {
        $this->_propDict["outOfOfficeDays"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * id property value of the user resource that represents the user in the Azure Active Directory tenant.
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
    * id property value of the user resource that represents the user in the Azure Active Directory tenant.
    *
    * @param string $val The value of the userId
    *
    * @return AttackSimulationUser
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
}
