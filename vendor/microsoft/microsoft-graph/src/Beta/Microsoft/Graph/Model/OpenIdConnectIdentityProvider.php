<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenIdConnectIdentityProvider File
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
* OpenIdConnectIdentityProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenIdConnectIdentityProvider extends IdentityProviderBase
{
    /**
    * Gets the claimsMapping
    * After the OIDC provider sends an ID token back to Azure AD, Azure AD needs to be able to map the claims from the received token to the claims that Azure AD recognizes and uses. This complex type captures that mapping. Required.
    *
    * @return ClaimsMapping|null The claimsMapping
    */
    public function getClaimsMapping()
    {
        if (array_key_exists("claimsMapping", $this->_propDict)) {
            if (is_a($this->_propDict["claimsMapping"], "\Beta\Microsoft\Graph\Model\ClaimsMapping") || is_null($this->_propDict["claimsMapping"])) {
                return $this->_propDict["claimsMapping"];
            } else {
                $this->_propDict["claimsMapping"] = new ClaimsMapping($this->_propDict["claimsMapping"]);
                return $this->_propDict["claimsMapping"];
            }
        }
        return null;
    }

    /**
    * Sets the claimsMapping
    * After the OIDC provider sends an ID token back to Azure AD, Azure AD needs to be able to map the claims from the received token to the claims that Azure AD recognizes and uses. This complex type captures that mapping. Required.
    *
    * @param ClaimsMapping $val The claimsMapping
    *
    * @return OpenIdConnectIdentityProvider
    */
    public function setClaimsMapping($val)
    {
        $this->_propDict["claimsMapping"] = $val;
        return $this;
    }

    /**
    * Gets the clientId
    * The client identifier for the application obtained when registering the application with the identity provider. Required.
    *
    * @return string|null The clientId
    */
    public function getClientId()
    {
        if (array_key_exists("clientId", $this->_propDict)) {
            return $this->_propDict["clientId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientId
    * The client identifier for the application obtained when registering the application with the identity provider. Required.
    *
    * @param string $val The clientId
    *
    * @return OpenIdConnectIdentityProvider
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }

    /**
    * Gets the clientSecret
    * The client secret for the application obtained when registering the application with the identity provider. The clientSecret has a dependency on responseType. When responseType is code, a secret is required for the auth code exchange.When responseType is id_token the secret is not required because there is no code exchange. The id_token is returned directly from the authorization response. This is write-only. A read operation returns ****.
    *
    * @return string|null The clientSecret
    */
    public function getClientSecret()
    {
        if (array_key_exists("clientSecret", $this->_propDict)) {
            return $this->_propDict["clientSecret"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientSecret
    * The client secret for the application obtained when registering the application with the identity provider. The clientSecret has a dependency on responseType. When responseType is code, a secret is required for the auth code exchange.When responseType is id_token the secret is not required because there is no code exchange. The id_token is returned directly from the authorization response. This is write-only. A read operation returns ****.
    *
    * @param string $val The clientSecret
    *
    * @return OpenIdConnectIdentityProvider
    */
    public function setClientSecret($val)
    {
        $this->_propDict["clientSecret"] = $val;
        return $this;
    }

    /**
    * Gets the domainHint
    * The domain hint can be used to skip directly to the sign-in page of the specified identity provider, instead of having the user make a selection among the list of available identity providers.
    *
    * @return string|null The domainHint
    */
    public function getDomainHint()
    {
        if (array_key_exists("domainHint", $this->_propDict)) {
            return $this->_propDict["domainHint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainHint
    * The domain hint can be used to skip directly to the sign-in page of the specified identity provider, instead of having the user make a selection among the list of available identity providers.
    *
    * @param string $val The domainHint
    *
    * @return OpenIdConnectIdentityProvider
    */
    public function setDomainHint($val)
    {
        $this->_propDict["domainHint"] = $val;
        return $this;
    }

    /**
    * Gets the metadataUrl
    * The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Provide the metadata URL for the OpenID Connect identity provider you add. Read-only. Required.
    *
    * @return string|null The metadataUrl
    */
    public function getMetadataUrl()
    {
        if (array_key_exists("metadataUrl", $this->_propDict)) {
            return $this->_propDict["metadataUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the metadataUrl
    * The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Provide the metadata URL for the OpenID Connect identity provider you add. Read-only. Required.
    *
    * @param string $val The metadataUrl
    *
    * @return OpenIdConnectIdentityProvider
    */
    public function setMetadataUrl($val)
    {
        $this->_propDict["metadataUrl"] = $val;
        return $this;
    }

    /**
    * Gets the responseMode
    * The response mode defines the method used to send data back from the custom identity provider to Azure AD B2C. Possible values: form_post, query. Required.
    *
    * @return OpenIdConnectResponseMode|null The responseMode
    */
    public function getResponseMode()
    {
        if (array_key_exists("responseMode", $this->_propDict)) {
            if (is_a($this->_propDict["responseMode"], "\Beta\Microsoft\Graph\Model\OpenIdConnectResponseMode") || is_null($this->_propDict["responseMode"])) {
                return $this->_propDict["responseMode"];
            } else {
                $this->_propDict["responseMode"] = new OpenIdConnectResponseMode($this->_propDict["responseMode"]);
                return $this->_propDict["responseMode"];
            }
        }
        return null;
    }

    /**
    * Sets the responseMode
    * The response mode defines the method used to send data back from the custom identity provider to Azure AD B2C. Possible values: form_post, query. Required.
    *
    * @param OpenIdConnectResponseMode $val The responseMode
    *
    * @return OpenIdConnectIdentityProvider
    */
    public function setResponseMode($val)
    {
        $this->_propDict["responseMode"] = $val;
        return $this;
    }

    /**
    * Gets the responseType
    * The response type describes the type of information sent back in the initial call to the authorization_endpoint of the custom identity provider. Possible values: code , id_token , token.  Required.
    *
    * @return OpenIdConnectResponseTypes|null The responseType
    */
    public function getResponseType()
    {
        if (array_key_exists("responseType", $this->_propDict)) {
            if (is_a($this->_propDict["responseType"], "\Beta\Microsoft\Graph\Model\OpenIdConnectResponseTypes") || is_null($this->_propDict["responseType"])) {
                return $this->_propDict["responseType"];
            } else {
                $this->_propDict["responseType"] = new OpenIdConnectResponseTypes($this->_propDict["responseType"]);
                return $this->_propDict["responseType"];
            }
        }
        return null;
    }

    /**
    * Sets the responseType
    * The response type describes the type of information sent back in the initial call to the authorization_endpoint of the custom identity provider. Possible values: code , id_token , token.  Required.
    *
    * @param OpenIdConnectResponseTypes $val The responseType
    *
    * @return OpenIdConnectIdentityProvider
    */
    public function setResponseType($val)
    {
        $this->_propDict["responseType"] = $val;
        return $this;
    }

    /**
    * Gets the scope
    * Scope defines the information and permissions you are looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users are not able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended, separated by a space. For more details about the scope limitations see RFC6749 Section 3.3. Required.
    *
    * @return string|null The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            return $this->_propDict["scope"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scope
    * Scope defines the information and permissions you are looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users are not able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended, separated by a space. For more details about the scope limitations see RFC6749 Section 3.3. Required.
    *
    * @param string $val The scope
    *
    * @return OpenIdConnectIdentityProvider
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }

}
