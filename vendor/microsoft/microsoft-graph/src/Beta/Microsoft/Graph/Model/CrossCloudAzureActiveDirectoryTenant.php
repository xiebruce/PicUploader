<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossCloudAzureActiveDirectoryTenant File
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
* CrossCloudAzureActiveDirectoryTenant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossCloudAzureActiveDirectoryTenant extends IdentitySource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.crossCloudAzureActiveDirectoryTenant");
    }

    /**
    * Gets the cloudInstance
    * The ID of the cloud where the tenant is located, one of microsoftonline.com, microsoftonline.us or partner.microsoftonline.cn. Read only.
    *
    * @return string|null The cloudInstance
    */
    public function getCloudInstance()
    {
        if (array_key_exists("cloudInstance", $this->_propDict)) {
            return $this->_propDict["cloudInstance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudInstance
    * The ID of the cloud where the tenant is located, one of microsoftonline.com, microsoftonline.us or partner.microsoftonline.cn. Read only.
    *
    * @param string $val The value of the cloudInstance
    *
    * @return CrossCloudAzureActiveDirectoryTenant
    */
    public function setCloudInstance($val)
    {
        $this->_propDict["cloudInstance"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The name of the Azure Active Directory tenant. Read only.
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
    * The name of the Azure Active Directory tenant. Read only.
    *
    * @param string $val The value of the displayName
    *
    * @return CrossCloudAzureActiveDirectoryTenant
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the tenantId
    * The ID of the Azure Active Directory tenant. Read only.
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
    * The ID of the Azure Active Directory tenant. Read only.
    *
    * @param string $val The value of the tenantId
    *
    * @return CrossCloudAzureActiveDirectoryTenant
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
}
