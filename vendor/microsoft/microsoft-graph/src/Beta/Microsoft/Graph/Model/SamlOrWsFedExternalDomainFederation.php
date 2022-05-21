<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SamlOrWsFedExternalDomainFederation File
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
* SamlOrWsFedExternalDomainFederation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SamlOrWsFedExternalDomainFederation extends SamlOrWsFedProvider
{

     /**
     * Gets the domains
    * Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq).
     *
     * @return array|null The domains
     */
    public function getDomains()
    {
        if (array_key_exists("domains", $this->_propDict)) {
           return $this->_propDict["domains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domains
    * Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq).
    *
    * @param ExternalDomainName[] $val The domains
    *
    * @return SamlOrWsFedExternalDomainFederation
    */
    public function setDomains($val)
    {
        $this->_propDict["domains"] = $val;
        return $this;
    }

}
