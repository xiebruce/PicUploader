<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Directory File
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
* Directory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Directory extends Entity
{

     /**
     * Gets the impactedResources
     *
     * @return array|null The impactedResources
     */
    public function getImpactedResources()
    {
        if (array_key_exists("impactedResources", $this->_propDict)) {
           return $this->_propDict["impactedResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the impactedResources
    *
    * @param RecommendationResource[] $val The impactedResources
    *
    * @return Directory
    */
    public function setImpactedResources($val)
    {
        $this->_propDict["impactedResources"] = $val;
        return $this;
    }


     /**
     * Gets the recommendations
     *
     * @return array|null The recommendations
     */
    public function getRecommendations()
    {
        if (array_key_exists("recommendations", $this->_propDict)) {
           return $this->_propDict["recommendations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendations
    *
    * @param Recommendation[] $val The recommendations
    *
    * @return Directory
    */
    public function setRecommendations($val)
    {
        $this->_propDict["recommendations"] = $val;
        return $this;
    }


     /**
     * Gets the administrativeUnits
    * Conceptual container for user and group directory objects.
     *
     * @return array|null The administrativeUnits
     */
    public function getAdministrativeUnits()
    {
        if (array_key_exists("administrativeUnits", $this->_propDict)) {
           return $this->_propDict["administrativeUnits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the administrativeUnits
    * Conceptual container for user and group directory objects.
    *
    * @param AdministrativeUnit[] $val The administrativeUnits
    *
    * @return Directory
    */
    public function setAdministrativeUnits($val)
    {
        $this->_propDict["administrativeUnits"] = $val;
        return $this;
    }


     /**
     * Gets the attributeSets
    * Group of related custom security attribute definitions.
     *
     * @return array|null The attributeSets
     */
    public function getAttributeSets()
    {
        if (array_key_exists("attributeSets", $this->_propDict)) {
           return $this->_propDict["attributeSets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attributeSets
    * Group of related custom security attribute definitions.
    *
    * @param AttributeSet[] $val The attributeSets
    *
    * @return Directory
    */
    public function setAttributeSets($val)
    {
        $this->_propDict["attributeSets"] = $val;
        return $this;
    }


     /**
     * Gets the customSecurityAttributeDefinitions
    * Schema of a custom security attributes (key-value pairs).
     *
     * @return array|null The customSecurityAttributeDefinitions
     */
    public function getCustomSecurityAttributeDefinitions()
    {
        if (array_key_exists("customSecurityAttributeDefinitions", $this->_propDict)) {
           return $this->_propDict["customSecurityAttributeDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customSecurityAttributeDefinitions
    * Schema of a custom security attributes (key-value pairs).
    *
    * @param CustomSecurityAttributeDefinition[] $val The customSecurityAttributeDefinitions
    *
    * @return Directory
    */
    public function setCustomSecurityAttributeDefinitions($val)
    {
        $this->_propDict["customSecurityAttributeDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the deletedItems
     *
     * @return array|null The deletedItems
     */
    public function getDeletedItems()
    {
        if (array_key_exists("deletedItems", $this->_propDict)) {
           return $this->_propDict["deletedItems"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deletedItems
    *
    * @param DirectoryObject[] $val The deletedItems
    *
    * @return Directory
    */
    public function setDeletedItems($val)
    {
        $this->_propDict["deletedItems"] = $val;
        return $this;
    }


     /**
     * Gets the federationConfigurations
    * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     *
     * @return array|null The federationConfigurations
     */
    public function getFederationConfigurations()
    {
        if (array_key_exists("federationConfigurations", $this->_propDict)) {
           return $this->_propDict["federationConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the federationConfigurations
    * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
    *
    * @param IdentityProviderBase[] $val The federationConfigurations
    *
    * @return Directory
    */
    public function setFederationConfigurations($val)
    {
        $this->_propDict["federationConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the inboundSharedUserProfiles
     *
     * @return array|null The inboundSharedUserProfiles
     */
    public function getInboundSharedUserProfiles()
    {
        if (array_key_exists("inboundSharedUserProfiles", $this->_propDict)) {
           return $this->_propDict["inboundSharedUserProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundSharedUserProfiles
    *
    * @param InboundSharedUserProfile[] $val The inboundSharedUserProfiles
    *
    * @return Directory
    */
    public function setInboundSharedUserProfiles($val)
    {
        $this->_propDict["inboundSharedUserProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the outboundSharedUserProfiles
     *
     * @return array|null The outboundSharedUserProfiles
     */
    public function getOutboundSharedUserProfiles()
    {
        if (array_key_exists("outboundSharedUserProfiles", $this->_propDict)) {
           return $this->_propDict["outboundSharedUserProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outboundSharedUserProfiles
    *
    * @param OutboundSharedUserProfile[] $val The outboundSharedUserProfiles
    *
    * @return Directory
    */
    public function setOutboundSharedUserProfiles($val)
    {
        $this->_propDict["outboundSharedUserProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the sharedEmailDomains
     *
     * @return array|null The sharedEmailDomains
     */
    public function getSharedEmailDomains()
    {
        if (array_key_exists("sharedEmailDomains", $this->_propDict)) {
           return $this->_propDict["sharedEmailDomains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharedEmailDomains
    *
    * @param SharedEmailDomain[] $val The sharedEmailDomains
    *
    * @return Directory
    */
    public function setSharedEmailDomains($val)
    {
        $this->_propDict["sharedEmailDomains"] = $val;
        return $this;
    }


     /**
     * Gets the featureRolloutPolicies
     *
     * @return array|null The featureRolloutPolicies
     */
    public function getFeatureRolloutPolicies()
    {
        if (array_key_exists("featureRolloutPolicies", $this->_propDict)) {
           return $this->_propDict["featureRolloutPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the featureRolloutPolicies
    *
    * @param FeatureRolloutPolicy[] $val The featureRolloutPolicies
    *
    * @return Directory
    */
    public function setFeatureRolloutPolicies($val)
    {
        $this->_propDict["featureRolloutPolicies"] = $val;
        return $this;
    }

}
