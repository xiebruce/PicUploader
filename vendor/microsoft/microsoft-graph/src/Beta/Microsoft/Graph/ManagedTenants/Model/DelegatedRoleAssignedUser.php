<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedRoleAssignedUser File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* DelegatedRoleAssignedUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedRoleAssignedUser extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
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
    *
    * @param string $val The value of the displayName
    *
    * @return DelegatedRoleAssignedUser
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the userEntityId
    *
    * @return string|null The userEntityId
    */
    public function getUserEntityId()
    {
        if (array_key_exists("userEntityId", $this->_propDict)) {
            return $this->_propDict["userEntityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userEntityId
    *
    * @param string $val The value of the userEntityId
    *
    * @return DelegatedRoleAssignedUser
    */
    public function setUserEntityId($val)
    {
        $this->_propDict["userEntityId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
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
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return DelegatedRoleAssignedUser
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
