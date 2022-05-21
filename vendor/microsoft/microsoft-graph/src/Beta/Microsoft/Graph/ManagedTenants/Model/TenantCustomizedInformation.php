<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantCustomizedInformation File
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
* TenantCustomizedInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantCustomizedInformation extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the contacts
    * The collection of contacts for the managed tenant. Optional.
     *
     * @return array|null The contacts
     */
    public function getContacts()
    {
        if (array_key_exists("contacts", $this->_propDict)) {
           return $this->_propDict["contacts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contacts
    * The collection of contacts for the managed tenant. Optional.
    *
    * @param TenantContactInformation[] $val The contacts
    *
    * @return TenantCustomizedInformation
    */
    public function setContacts($val)
    {
        $this->_propDict["contacts"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the managed tenant. Required. Read-only.
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
    * The display name for the managed tenant. Required. Read-only.
    *
    * @param string $val The displayName
    *
    * @return TenantCustomizedInformation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return TenantCustomizedInformation
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the website
    * The website for the managed tenant. Required.
    *
    * @return string|null The website
    */
    public function getWebsite()
    {
        if (array_key_exists("website", $this->_propDict)) {
            return $this->_propDict["website"];
        } else {
            return null;
        }
    }

    /**
    * Sets the website
    * The website for the managed tenant. Required.
    *
    * @param string $val The website
    *
    * @return TenantCustomizedInformation
    */
    public function setWebsite($val)
    {
        $this->_propDict["website"] = $val;
        return $this;
    }

}
