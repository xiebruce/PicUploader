<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantRelationship File
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
* TenantRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantRelationship implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new TenantRelationship
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
    * Gets the property dictionary of the TenantRelationship
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the managedTenants
    * The operations available to interact with the multi-tenant management platform.
    *
    * @return \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant|null The managedTenants
    */
    public function getManagedTenants()
    {
        if (array_key_exists("managedTenants", $this->_propDict)) {
            if (is_a($this->_propDict["managedTenants"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant") || is_null($this->_propDict["managedTenants"])) {
                return $this->_propDict["managedTenants"];
            } else {
                $this->_propDict["managedTenants"] = new \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant($this->_propDict["managedTenants"]);
                return $this->_propDict["managedTenants"];
            }
        }
        return null;
    }

    /**
    * Sets the managedTenants
    * The operations available to interact with the multi-tenant management platform.
    *
    * @param \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant $val The managedTenants
    *
    * @return TenantRelationship
    */
    public function setManagedTenants($val)
    {
        $this->_propDict["managedTenants"] = $val;
        return $this;
    }


     /**
     * Gets the delegatedAdminCustomers
    * The customer who has a delegated admin relationship with a Microsoft partner.
     *
     * @return array|null The delegatedAdminCustomers
     */
    public function getDelegatedAdminCustomers()
    {
        if (array_key_exists("delegatedAdminCustomers", $this->_propDict)) {
           return $this->_propDict["delegatedAdminCustomers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the delegatedAdminCustomers
    * The customer who has a delegated admin relationship with a Microsoft partner.
    *
    * @param DelegatedAdminCustomer[] $val The delegatedAdminCustomers
    *
    * @return TenantRelationship
    */
    public function setDelegatedAdminCustomers($val)
    {
        $this->_propDict["delegatedAdminCustomers"] = $val;
        return $this;
    }


     /**
     * Gets the delegatedAdminRelationships
    * The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
     *
     * @return array|null The delegatedAdminRelationships
     */
    public function getDelegatedAdminRelationships()
    {
        if (array_key_exists("delegatedAdminRelationships", $this->_propDict)) {
           return $this->_propDict["delegatedAdminRelationships"];
        } else {
            return null;
        }
    }

    /**
    * Sets the delegatedAdminRelationships
    * The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
    *
    * @param DelegatedAdminRelationship[] $val The delegatedAdminRelationships
    *
    * @return TenantRelationship
    */
    public function setDelegatedAdminRelationships($val)
    {
        $this->_propDict["delegatedAdminRelationships"] = $val;
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
    * @return TenantRelationship
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
