<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditUserIdentity File
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
* AuditUserIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditUserIdentity extends UserIdentity
{
    /**
    * Gets the homeTenantId
    * For user sign ins, the identifier of the tenant that the user is a member of.
    *
    * @return string|null The homeTenantId
    */
    public function getHomeTenantId()
    {
        if (array_key_exists("homeTenantId", $this->_propDict)) {
            return $this->_propDict["homeTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homeTenantId
    * For user sign ins, the identifier of the tenant that the user is a member of.
    *
    * @param string $val The value of the homeTenantId
    *
    * @return AuditUserIdentity
    */
    public function setHomeTenantId($val)
    {
        $this->_propDict["homeTenantId"] = $val;
        return $this;
    }
    /**
    * Gets the homeTenantName
    * For user sign ins, the name of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
    *
    * @return string|null The homeTenantName
    */
    public function getHomeTenantName()
    {
        if (array_key_exists("homeTenantName", $this->_propDict)) {
            return $this->_propDict["homeTenantName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homeTenantName
    * For user sign ins, the name of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
    *
    * @param string $val The value of the homeTenantName
    *
    * @return AuditUserIdentity
    */
    public function setHomeTenantName($val)
    {
        $this->_propDict["homeTenantName"] = $val;
        return $this;
    }
}
