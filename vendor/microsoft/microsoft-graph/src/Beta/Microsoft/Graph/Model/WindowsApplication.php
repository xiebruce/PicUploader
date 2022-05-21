<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsApplication File
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
* WindowsApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsApplication extends Entity
{
    /**
    * Gets the packageSid
    * The package security identifier that Microsoft has assigned the application. Optional. Read-only.
    *
    * @return string|null The packageSid
    */
    public function getPackageSid()
    {
        if (array_key_exists("packageSid", $this->_propDict)) {
            return $this->_propDict["packageSid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the packageSid
    * The package security identifier that Microsoft has assigned the application. Optional. Read-only.
    *
    * @param string $val The value of the packageSid
    *
    * @return WindowsApplication
    */
    public function setPackageSid($val)
    {
        $this->_propDict["packageSid"] = $val;
        return $this;
    }
    /**
    * Gets the redirectUris
    * Specifies the URLs where user tokens are sent for sign-in or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent. Only available for applications that support the PersonalMicrosoftAccount signInAudience.
    *
    * @return string|null The redirectUris
    */
    public function getRedirectUris()
    {
        if (array_key_exists("redirectUris", $this->_propDict)) {
            return $this->_propDict["redirectUris"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectUris
    * Specifies the URLs where user tokens are sent for sign-in or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent. Only available for applications that support the PersonalMicrosoftAccount signInAudience.
    *
    * @param string $val The value of the redirectUris
    *
    * @return WindowsApplication
    */
    public function setRedirectUris($val)
    {
        $this->_propDict["redirectUris"] = $val;
        return $this;
    }
}
