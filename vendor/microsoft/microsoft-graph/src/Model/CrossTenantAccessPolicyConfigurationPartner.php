<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyConfigurationPartner File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* CrossTenantAccessPolicyConfigurationPartner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyConfigurationPartner implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new CrossTenantAccessPolicyConfigurationPartner
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
    * Gets the property dictionary of the CrossTenantAccessPolicyConfigurationPartner
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the automaticUserConsentSettings
    * Determines the partner-specific configuration for automatic user consent settings. Unless specifically configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
    *
    * @return InboundOutboundPolicyConfiguration|null The automaticUserConsentSettings
    */
    public function getAutomaticUserConsentSettings()
    {
        if (array_key_exists("automaticUserConsentSettings", $this->_propDict)) {
            if (is_a($this->_propDict["automaticUserConsentSettings"], "\Microsoft\Graph\Model\InboundOutboundPolicyConfiguration") || is_null($this->_propDict["automaticUserConsentSettings"])) {
                return $this->_propDict["automaticUserConsentSettings"];
            } else {
                $this->_propDict["automaticUserConsentSettings"] = new InboundOutboundPolicyConfiguration($this->_propDict["automaticUserConsentSettings"]);
                return $this->_propDict["automaticUserConsentSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the automaticUserConsentSettings
    * Determines the partner-specific configuration for automatic user consent settings. Unless specifically configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
    *
    * @param InboundOutboundPolicyConfiguration $val The automaticUserConsentSettings
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setAutomaticUserConsentSettings($val)
    {
        $this->_propDict["automaticUserConsentSettings"] = $val;
        return $this;
    }

    /**
    * Gets the b2bCollaborationInbound
    * Defines your partner-specific configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bCollaborationInbound
    */
    public function getB2bCollaborationInbound()
    {
        if (array_key_exists("b2bCollaborationInbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bCollaborationInbound"], "\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bCollaborationInbound"])) {
                return $this->_propDict["b2bCollaborationInbound"];
            } else {
                $this->_propDict["b2bCollaborationInbound"] = new CrossTenantAccessPolicyB2BSetting($this->_propDict["b2bCollaborationInbound"]);
                return $this->_propDict["b2bCollaborationInbound"];
            }
        }
        return null;
    }

    /**
    * Sets the b2bCollaborationInbound
    * Defines your partner-specific configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bCollaborationInbound
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setB2bCollaborationInbound($val)
    {
        $this->_propDict["b2bCollaborationInbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bCollaborationOutbound
    * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bCollaborationOutbound
    */
    public function getB2bCollaborationOutbound()
    {
        if (array_key_exists("b2bCollaborationOutbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bCollaborationOutbound"], "\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bCollaborationOutbound"])) {
                return $this->_propDict["b2bCollaborationOutbound"];
            } else {
                $this->_propDict["b2bCollaborationOutbound"] = new CrossTenantAccessPolicyB2BSetting($this->_propDict["b2bCollaborationOutbound"]);
                return $this->_propDict["b2bCollaborationOutbound"];
            }
        }
        return null;
    }

    /**
    * Sets the b2bCollaborationOutbound
    * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bCollaborationOutbound
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setB2bCollaborationOutbound($val)
    {
        $this->_propDict["b2bCollaborationOutbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bDirectConnectInbound
    * Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bDirectConnectInbound
    */
    public function getB2bDirectConnectInbound()
    {
        if (array_key_exists("b2bDirectConnectInbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bDirectConnectInbound"], "\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bDirectConnectInbound"])) {
                return $this->_propDict["b2bDirectConnectInbound"];
            } else {
                $this->_propDict["b2bDirectConnectInbound"] = new CrossTenantAccessPolicyB2BSetting($this->_propDict["b2bDirectConnectInbound"]);
                return $this->_propDict["b2bDirectConnectInbound"];
            }
        }
        return null;
    }

    /**
    * Sets the b2bDirectConnectInbound
    * Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bDirectConnectInbound
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setB2bDirectConnectInbound($val)
    {
        $this->_propDict["b2bDirectConnectInbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bDirectConnectOutbound
    * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bDirectConnectOutbound
    */
    public function getB2bDirectConnectOutbound()
    {
        if (array_key_exists("b2bDirectConnectOutbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bDirectConnectOutbound"], "\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bDirectConnectOutbound"])) {
                return $this->_propDict["b2bDirectConnectOutbound"];
            } else {
                $this->_propDict["b2bDirectConnectOutbound"] = new CrossTenantAccessPolicyB2BSetting($this->_propDict["b2bDirectConnectOutbound"]);
                return $this->_propDict["b2bDirectConnectOutbound"];
            }
        }
        return null;
    }

    /**
    * Sets the b2bDirectConnectOutbound
    * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bDirectConnectOutbound
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setB2bDirectConnectOutbound($val)
    {
        $this->_propDict["b2bDirectConnectOutbound"] = $val;
        return $this;
    }

    /**
    * Gets the inboundTrust
    * Determines the partner-specific configuration for trusting other Conditional Access claims from external Azure AD organizations.
    *
    * @return CrossTenantAccessPolicyInboundTrust|null The inboundTrust
    */
    public function getInboundTrust()
    {
        if (array_key_exists("inboundTrust", $this->_propDict)) {
            if (is_a($this->_propDict["inboundTrust"], "\Microsoft\Graph\Model\CrossTenantAccessPolicyInboundTrust") || is_null($this->_propDict["inboundTrust"])) {
                return $this->_propDict["inboundTrust"];
            } else {
                $this->_propDict["inboundTrust"] = new CrossTenantAccessPolicyInboundTrust($this->_propDict["inboundTrust"]);
                return $this->_propDict["inboundTrust"];
            }
        }
        return null;
    }

    /**
    * Sets the inboundTrust
    * Determines the partner-specific configuration for trusting other Conditional Access claims from external Azure AD organizations.
    *
    * @param CrossTenantAccessPolicyInboundTrust $val The inboundTrust
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setInboundTrust($val)
    {
        $this->_propDict["inboundTrust"] = $val;
        return $this;
    }

    /**
    * Gets the isServiceProvider
    * Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
    *
    * @return bool|null The isServiceProvider
    */
    public function getIsServiceProvider()
    {
        if (array_key_exists("isServiceProvider", $this->_propDict)) {
            return $this->_propDict["isServiceProvider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isServiceProvider
    * Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
    *
    * @param bool $val The isServiceProvider
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setIsServiceProvider($val)
    {
        $this->_propDict["isServiceProvider"] = boolval($val);
        return $this;
    }

    /**
    * Gets the tenantId
    * The tenant identifier for the partner Azure AD organization. Read-only. Key.
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
    * The tenant identifier for the partner Azure AD organization. Read-only. Key.
    *
    * @param string $val The tenantId
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the identitySynchronization
    * Defines the cross-tenant policy for the synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multi-tenant organization by automating the creation, update, and deletion of users from one tenant to another.
    *
    * @return CrossTenantIdentitySyncPolicyPartner|null The identitySynchronization
    */
    public function getIdentitySynchronization()
    {
        if (array_key_exists("identitySynchronization", $this->_propDict)) {
            if (is_a($this->_propDict["identitySynchronization"], "\Microsoft\Graph\Model\CrossTenantIdentitySyncPolicyPartner") || is_null($this->_propDict["identitySynchronization"])) {
                return $this->_propDict["identitySynchronization"];
            } else {
                $this->_propDict["identitySynchronization"] = new CrossTenantIdentitySyncPolicyPartner($this->_propDict["identitySynchronization"]);
                return $this->_propDict["identitySynchronization"];
            }
        }
        return null;
    }

    /**
    * Sets the identitySynchronization
    * Defines the cross-tenant policy for the synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multi-tenant organization by automating the creation, update, and deletion of users from one tenant to another.
    *
    * @param CrossTenantIdentitySyncPolicyPartner $val The identitySynchronization
    *
    * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function setIdentitySynchronization($val)
    {
        $this->_propDict["identitySynchronization"] = $val;
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
    * @return CrossTenantAccessPolicyConfigurationPartner
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
