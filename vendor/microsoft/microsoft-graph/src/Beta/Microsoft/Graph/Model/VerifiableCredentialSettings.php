<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiableCredentialSettings File
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
* VerifiableCredentialSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiableCredentialSettings extends Entity
{

    /**
    * Gets the credentialTypes
    * The types of verifiable credentials that a requestor must present when requesting an access package that has the policy.
    *
    * @return VerifiableCredentialType|null The credentialTypes
    */
    public function getCredentialTypes()
    {
        if (array_key_exists("credentialTypes", $this->_propDict)) {
            if (is_a($this->_propDict["credentialTypes"], "\Beta\Microsoft\Graph\Model\VerifiableCredentialType") || is_null($this->_propDict["credentialTypes"])) {
                return $this->_propDict["credentialTypes"];
            } else {
                $this->_propDict["credentialTypes"] = new VerifiableCredentialType($this->_propDict["credentialTypes"]);
                return $this->_propDict["credentialTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the credentialTypes
    * The types of verifiable credentials that a requestor must present when requesting an access package that has the policy.
    *
    * @param VerifiableCredentialType $val The value to assign to the credentialTypes
    *
    * @return VerifiableCredentialSettings The VerifiableCredentialSettings
    */
    public function setCredentialTypes($val)
    {
        $this->_propDict["credentialTypes"] = $val;
         return $this;
    }
}
