<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyConfigurationDefault File
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
* CrossTenantAccessPolicyConfigurationDefault class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyConfigurationDefault extends Entity
{
    /**
    * Gets the b2bCollaborationInbound
    * Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bCollaborationInbound
    */
    public function getB2bCollaborationInbound()
    {
        if (array_key_exists("b2bCollaborationInbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bCollaborationInbound"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bCollaborationInbound"])) {
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
    * Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B collaboration.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bCollaborationInbound
    *
    * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function setB2bCollaborationInbound($val)
    {
        $this->_propDict["b2bCollaborationInbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bCollaborationOutbound
    * Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bCollaborationOutbound
    */
    public function getB2bCollaborationOutbound()
    {
        if (array_key_exists("b2bCollaborationOutbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bCollaborationOutbound"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bCollaborationOutbound"])) {
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
    * Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B collaboration.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bCollaborationOutbound
    *
    * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function setB2bCollaborationOutbound($val)
    {
        $this->_propDict["b2bCollaborationOutbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bDirectConnectInbound
    * Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B direct connect.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bDirectConnectInbound
    */
    public function getB2bDirectConnectInbound()
    {
        if (array_key_exists("b2bDirectConnectInbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bDirectConnectInbound"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bDirectConnectInbound"])) {
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
    * Defines your default configuration for users from other organizations accessing your resources via Azure AD B2B direct connect.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bDirectConnectInbound
    *
    * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function setB2bDirectConnectInbound($val)
    {
        $this->_propDict["b2bDirectConnectInbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bDirectConnectOutbound
    * Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bDirectConnectOutbound
    */
    public function getB2bDirectConnectOutbound()
    {
        if (array_key_exists("b2bDirectConnectOutbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bDirectConnectOutbound"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bDirectConnectOutbound"])) {
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
    * Defines your default configuration for users in your organization going outbound to access resources in another organization via Azure AD B2B direct connect.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bDirectConnectOutbound
    *
    * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function setB2bDirectConnectOutbound($val)
    {
        $this->_propDict["b2bDirectConnectOutbound"] = $val;
        return $this;
    }

    /**
    * Gets the inboundTrust
    * Determines the default configuration for trusting other Conditional Access claims from external Azure AD organizations.
    *
    * @return CrossTenantAccessPolicyInboundTrust|null The inboundTrust
    */
    public function getInboundTrust()
    {
        if (array_key_exists("inboundTrust", $this->_propDict)) {
            if (is_a($this->_propDict["inboundTrust"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyInboundTrust") || is_null($this->_propDict["inboundTrust"])) {
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
    * Determines the default configuration for trusting other Conditional Access claims from external Azure AD organizations.
    *
    * @param CrossTenantAccessPolicyInboundTrust $val The inboundTrust
    *
    * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function setInboundTrust($val)
    {
        $this->_propDict["inboundTrust"] = $val;
        return $this;
    }

    /**
    * Gets the isServiceDefault
    * If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
    *
    * @return bool|null The isServiceDefault
    */
    public function getIsServiceDefault()
    {
        if (array_key_exists("isServiceDefault", $this->_propDict)) {
            return $this->_propDict["isServiceDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isServiceDefault
    * If true, the default configuration is set to the system default configuration. If false, the default settings have been customized.
    *
    * @param bool $val The isServiceDefault
    *
    * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function setIsServiceDefault($val)
    {
        $this->_propDict["isServiceDefault"] = boolval($val);
        return $this;
    }

    /**
    * Gets the tenantRestrictions
    *
    * @return CrossTenantAccessPolicyTenantRestrictions|null The tenantRestrictions
    */
    public function getTenantRestrictions()
    {
        if (array_key_exists("tenantRestrictions", $this->_propDict)) {
            if (is_a($this->_propDict["tenantRestrictions"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyTenantRestrictions") || is_null($this->_propDict["tenantRestrictions"])) {
                return $this->_propDict["tenantRestrictions"];
            } else {
                $this->_propDict["tenantRestrictions"] = new CrossTenantAccessPolicyTenantRestrictions($this->_propDict["tenantRestrictions"]);
                return $this->_propDict["tenantRestrictions"];
            }
        }
        return null;
    }

    /**
    * Sets the tenantRestrictions
    *
    * @param CrossTenantAccessPolicyTenantRestrictions $val The tenantRestrictions
    *
    * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function setTenantRestrictions($val)
    {
        $this->_propDict["tenantRestrictions"] = $val;
        return $this;
    }

}
