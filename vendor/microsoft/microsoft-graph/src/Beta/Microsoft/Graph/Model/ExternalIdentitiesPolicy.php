<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalIdentitiesPolicy File
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
* ExternalIdentitiesPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalIdentitiesPolicy extends PolicyBase
{
    /**
    * Gets the allowDeletedIdentitiesDataRemoval
    * Notifies Azure AD whether to clean up the user information about the external identity, from the guest tenant, when the user is deleted in their home tenant.
    *
    * @return bool|null The allowDeletedIdentitiesDataRemoval
    */
    public function getAllowDeletedIdentitiesDataRemoval()
    {
        if (array_key_exists("allowDeletedIdentitiesDataRemoval", $this->_propDict)) {
            return $this->_propDict["allowDeletedIdentitiesDataRemoval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeletedIdentitiesDataRemoval
    * Notifies Azure AD whether to clean up the user information about the external identity, from the guest tenant, when the user is deleted in their home tenant.
    *
    * @param bool $val The allowDeletedIdentitiesDataRemoval
    *
    * @return ExternalIdentitiesPolicy
    */
    public function setAllowDeletedIdentitiesDataRemoval($val)
    {
        $this->_propDict["allowDeletedIdentitiesDataRemoval"] = boolval($val);
        return $this;
    }

    /**
    * Gets the allowExternalIdentitiesToLeave
    * Defines whether external users can leave the guest tenant. If set to false, self-service controls are disabled, and the admin of the guest tenant must manually remove the external user from the guest tenant. When the external user leaves the tenant, their data in the guest tenant is first soft-deleted then permanently deleted in 30 days.
    *
    * @return bool|null The allowExternalIdentitiesToLeave
    */
    public function getAllowExternalIdentitiesToLeave()
    {
        if (array_key_exists("allowExternalIdentitiesToLeave", $this->_propDict)) {
            return $this->_propDict["allowExternalIdentitiesToLeave"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowExternalIdentitiesToLeave
    * Defines whether external users can leave the guest tenant. If set to false, self-service controls are disabled, and the admin of the guest tenant must manually remove the external user from the guest tenant. When the external user leaves the tenant, their data in the guest tenant is first soft-deleted then permanently deleted in 30 days.
    *
    * @param bool $val The allowExternalIdentitiesToLeave
    *
    * @return ExternalIdentitiesPolicy
    */
    public function setAllowExternalIdentitiesToLeave($val)
    {
        $this->_propDict["allowExternalIdentitiesToLeave"] = boolval($val);
        return $this;
    }

}
