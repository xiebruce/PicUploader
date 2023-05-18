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
namespace Microsoft\Graph\Model;

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
    * Recently deleted items. Read-only. Nullable.
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
    * Recently deleted items. Read-only. Nullable.
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
     * Gets the onPremisesSynchronization
    * A container for on-premises directory synchronization functionalities that are available for the organization.
     *
     * @return array|null The onPremisesSynchronization
     */
    public function getOnPremisesSynchronization()
    {
        if (array_key_exists("onPremisesSynchronization", $this->_propDict)) {
           return $this->_propDict["onPremisesSynchronization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSynchronization
    * A container for on-premises directory synchronization functionalities that are available for the organization.
    *
    * @param OnPremisesDirectorySynchronization[] $val The onPremisesSynchronization
    *
    * @return Directory
    */
    public function setOnPremisesSynchronization($val)
    {
        $this->_propDict["onPremisesSynchronization"] = $val;
        return $this;
    }

}
