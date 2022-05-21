<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantContract File
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
* TenantContract class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantContract extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the contractType
    * The type of relationship that exists between the managing entity and tenant. Optional. Read-only.
    *
    * @return int|null The contractType
    */
    public function getContractType()
    {
        if (array_key_exists("contractType", $this->_propDict)) {
            return $this->_propDict["contractType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contractType
    * The type of relationship that exists between the managing entity and tenant. Optional. Read-only.
    *
    * @param int $val The value of the contractType
    *
    * @return TenantContract
    */
    public function setContractType($val)
    {
        $this->_propDict["contractType"] = $val;
        return $this;
    }
    /**
    * Gets the defaultDomainName
    * The default domain name for the tenant. Required. Read-only.
    *
    * @return string|null The defaultDomainName
    */
    public function getDefaultDomainName()
    {
        if (array_key_exists("defaultDomainName", $this->_propDict)) {
            return $this->_propDict["defaultDomainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultDomainName
    * The default domain name for the tenant. Required. Read-only.
    *
    * @param string $val The value of the defaultDomainName
    *
    * @return TenantContract
    */
    public function setDefaultDomainName($val)
    {
        $this->_propDict["defaultDomainName"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name for the tenant. Optional. Read-only.
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
    * The display name for the tenant. Optional. Read-only.
    *
    * @param string $val The value of the displayName
    *
    * @return TenantContract
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
