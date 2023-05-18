<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiableCredentialType File
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
* VerifiableCredentialType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiableCredentialType extends Entity
{
    /**
    * Gets the credentialType
    * The type of credential issued, for example, BusinessCardCredential.
    *
    * @return string|null The credentialType
    */
    public function getCredentialType()
    {
        if (array_key_exists("credentialType", $this->_propDict)) {
            return $this->_propDict["credentialType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialType
    * The type of credential issued, for example, BusinessCardCredential.
    *
    * @param string $val The value of the credentialType
    *
    * @return VerifiableCredentialType
    */
    public function setCredentialType($val)
    {
        $this->_propDict["credentialType"] = $val;
        return $this;
    }
    /**
    * Gets the issuers
    * List of the accepted issuers authority as identified by the Microsoft Entra Verified ID service, for example, did:ion:EiAlrenrtD3Lsw0GlbzS1O2YFdy3Xtu8yo35W/&amp;lt;SNIP/&amp;gt;....
    *
    * @return string|null The issuers
    */
    public function getIssuers()
    {
        if (array_key_exists("issuers", $this->_propDict)) {
            return $this->_propDict["issuers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuers
    * List of the accepted issuers authority as identified by the Microsoft Entra Verified ID service, for example, did:ion:EiAlrenrtD3Lsw0GlbzS1O2YFdy3Xtu8yo35W/&amp;lt;SNIP/&amp;gt;....
    *
    * @param string $val The value of the issuers
    *
    * @return VerifiableCredentialType
    */
    public function setIssuers($val)
    {
        $this->_propDict["issuers"] = $val;
        return $this;
    }
}
