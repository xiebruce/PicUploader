<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantIdentitySyncPolicyPartner File
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
* CrossTenantIdentitySyncPolicyPartner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantIdentitySyncPolicyPartner implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new CrossTenantIdentitySyncPolicyPartner
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the CrossTenantIdentitySyncPolicyPartner
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the displayName
    * Display name for the cross-tenant user synchronization policy. Use the name of the partner Azure AD (Azure Active Directory) tenant to easily identify the policy. Optional.
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
    * Display name for the cross-tenant user synchronization policy. Use the name of the partner Azure AD (Azure Active Directory) tenant to easily identify the policy. Optional.
    *
    * @param string $val The displayName
    *
    * @return CrossTenantIdentitySyncPolicyPartner
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * Tenant identifier for the partner Azure AD organization. Read-only.
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
    * Tenant identifier for the partner Azure AD organization. Read-only.
    *
    * @param string $val The tenantId
    *
    * @return CrossTenantIdentitySyncPolicyPartner
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the userSyncInbound
    * Defines whether users can be synchronized from the partner tenant. Key.
    *
    * @return CrossTenantUserSyncInbound|null The userSyncInbound
    */
    public function getUserSyncInbound()
    {
        if (array_key_exists("userSyncInbound", $this->_propDict)) {
            if (is_a($this->_propDict["userSyncInbound"], "\Beta\Microsoft\Graph\Model\CrossTenantUserSyncInbound") || is_null($this->_propDict["userSyncInbound"])) {
                return $this->_propDict["userSyncInbound"];
            } else {
                $this->_propDict["userSyncInbound"] = new CrossTenantUserSyncInbound($this->_propDict["userSyncInbound"]);
                return $this->_propDict["userSyncInbound"];
            }
        }
        return null;
    }

    /**
    * Sets the userSyncInbound
    * Defines whether users can be synchronized from the partner tenant. Key.
    *
    * @param CrossTenantUserSyncInbound $val The userSyncInbound
    *
    * @return CrossTenantIdentitySyncPolicyPartner
    */
    public function setUserSyncInbound($val)
    {
        $this->_propDict["userSyncInbound"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return CrossTenantIdentitySyncPolicyPartner
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
