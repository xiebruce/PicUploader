<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiedCredentialData File
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
* VerifiedCredentialData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiedCredentialData extends Entity
{
    /**
    * Gets the authority
    * The authority ID for the issuer.
    *
    * @return string|null The authority
    */
    public function getAuthority()
    {
        if (array_key_exists("authority", $this->_propDict)) {
            return $this->_propDict["authority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authority
    * The authority ID for the issuer.
    *
    * @param string $val The value of the authority
    *
    * @return VerifiedCredentialData
    */
    public function setAuthority($val)
    {
        $this->_propDict["authority"] = $val;
        return $this;
    }

    /**
    * Gets the claims
    * Key-value pair of claims retrieved from the credential that the user presented, and the service verified.
    *
    * @return VerifiedCredentialClaims|null The claims
    */
    public function getClaims()
    {
        if (array_key_exists("claims", $this->_propDict)) {
            if (is_a($this->_propDict["claims"], "\Beta\Microsoft\Graph\Model\VerifiedCredentialClaims") || is_null($this->_propDict["claims"])) {
                return $this->_propDict["claims"];
            } else {
                $this->_propDict["claims"] = new VerifiedCredentialClaims($this->_propDict["claims"]);
                return $this->_propDict["claims"];
            }
        }
        return null;
    }

    /**
    * Sets the claims
    * Key-value pair of claims retrieved from the credential that the user presented, and the service verified.
    *
    * @param VerifiedCredentialClaims $val The value to assign to the claims
    *
    * @return VerifiedCredentialData The VerifiedCredentialData
    */
    public function setClaims($val)
    {
        $this->_propDict["claims"] = $val;
         return $this;
    }
    /**
    * Gets the type
    * The list of credential types provided by the issuer.
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * The list of credential types provided by the issuer.
    *
    * @param string $val The value of the type
    *
    * @return VerifiedCredentialData
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
