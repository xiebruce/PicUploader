<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FederatedIdentityCredential File
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
* FederatedIdentityCredential class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FederatedIdentityCredential extends Entity
{
    /**
    * Gets the audiences
    * The audience that can appear in the external token. This field is mandatory and should be set to api://AzureADTokenExchange for Azure AD. It says what Microsoft identity platform should accept in the aud claim in the incoming token. This value represents Azure AD in your external identity provider and has no fixed value across identity providers - you may need to create a new application registration in your identity provider to serve as the audience of this token. This field can only accept a single value and has a limit of 600 characters. Required.
    *
    * @return array|null The audiences
    */
    public function getAudiences()
    {
        if (array_key_exists("audiences", $this->_propDict)) {
            return $this->_propDict["audiences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the audiences
    * The audience that can appear in the external token. This field is mandatory and should be set to api://AzureADTokenExchange for Azure AD. It says what Microsoft identity platform should accept in the aud claim in the incoming token. This value represents Azure AD in your external identity provider and has no fixed value across identity providers - you may need to create a new application registration in your identity provider to serve as the audience of this token. This field can only accept a single value and has a limit of 600 characters. Required.
    *
    * @param string[] $val The audiences
    *
    * @return FederatedIdentityCredential
    */
    public function setAudiences($val)
    {
        $this->_propDict["audiences"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The un-validated, user-provided description of the federated identity credential. It has a limit of 600 characters. Optional.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The un-validated, user-provided description of the federated identity credential. It has a limit of 600 characters. Optional.
    *
    * @param string $val The description
    *
    * @return FederatedIdentityCredential
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the issuer
    * The URL of the external identity provider and must match the issuer claim of the external token being exchanged. The combination of the values of issuer and subject must be unique on the app. It has a limit of 600 characters. Required.
    *
    * @return string|null The issuer
    */
    public function getIssuer()
    {
        if (array_key_exists("issuer", $this->_propDict)) {
            return $this->_propDict["issuer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuer
    * The URL of the external identity provider and must match the issuer claim of the external token being exchanged. The combination of the values of issuer and subject must be unique on the app. It has a limit of 600 characters. Required.
    *
    * @param string $val The issuer
    *
    * @return FederatedIdentityCredential
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * is the unique identifier for the federated identity credential, which has a limit of 120 characters and must be URL friendly. It is immutable once created. Required. Not nullable. Supports $filter (eq).
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * is the unique identifier for the federated identity credential, which has a limit of 120 characters and must be URL friendly. It is immutable once created. Required. Not nullable. Supports $filter (eq).
    *
    * @param string $val The name
    *
    * @return FederatedIdentityCredential
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    * Required. The identifier of the external software workload within the external identity provider. Like the audience value, it has no fixed format, as each identity provider uses their own - sometimes a GUID, sometimes a colon delimited identifier, sometimes arbitrary strings. The value here must match the sub claim within the token presented to Azure AD. The combination of issuer and subject must be unique on the app. It has a limit of 600 characters. Supports $filter (eq).
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    * Required. The identifier of the external software workload within the external identity provider. Like the audience value, it has no fixed format, as each identity provider uses their own - sometimes a GUID, sometimes a colon delimited identifier, sometimes arbitrary strings. The value here must match the sub claim within the token presented to Azure AD. The combination of issuer and subject must be unique on the app. It has a limit of 600 characters. Supports $filter (eq).
    *
    * @param string $val The subject
    *
    * @return FederatedIdentityCredential
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }

}
