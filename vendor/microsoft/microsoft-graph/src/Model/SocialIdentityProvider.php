<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SocialIdentityProvider File
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
* SocialIdentityProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SocialIdentityProvider extends IdentityProviderBase
{
    /**
    * Gets the clientId
    * The identifier for the client application obtained when registering the application with the identity provider. Required.
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
    * The identifier for the client application obtained when registering the application with the identity provider. Required.
    *
    * @param string $val The clientId
    *
    * @return SocialIdentityProvider
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }

    /**
    * Gets the clientSecret
    * The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns ****. Required.
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
    * The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns ****. Required.
    *
    * @param string $val The clientSecret
    *
    * @return SocialIdentityProvider
    */
    public function setClientSecret($val)
    {
        $this->_propDict["clientSecret"] = $val;
        return $this;
    }

    /**
    * Gets the identityProviderType
    * For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required.
    *
    * @return string|null The identityProviderType
    */
    public function getIdentityProviderType()
    {
        if (array_key_exists("identityProviderType", $this->_propDict)) {
            return $this->_propDict["identityProviderType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityProviderType
    * For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required.
    *
    * @param string $val The identityProviderType
    *
    * @return SocialIdentityProvider
    */
    public function setIdentityProviderType($val)
    {
        $this->_propDict["identityProviderType"] = $val;
        return $this;
    }

}
