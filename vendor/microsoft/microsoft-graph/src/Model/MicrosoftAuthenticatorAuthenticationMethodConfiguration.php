<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftAuthenticatorAuthenticationMethodConfiguration File
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
* MicrosoftAuthenticatorAuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftAuthenticatorAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration
{
    /**
    * Gets the featureSettings
    * A collection of Microsoft Authenticator settings such as application context and location context, and whether they are enabled for all users or specific users only.
    *
    * @return MicrosoftAuthenticatorFeatureSettings|null The featureSettings
    */
    public function getFeatureSettings()
    {
        if (array_key_exists("featureSettings", $this->_propDict)) {
            if (is_a($this->_propDict["featureSettings"], "\Microsoft\Graph\Model\MicrosoftAuthenticatorFeatureSettings") || is_null($this->_propDict["featureSettings"])) {
                return $this->_propDict["featureSettings"];
            } else {
                $this->_propDict["featureSettings"] = new MicrosoftAuthenticatorFeatureSettings($this->_propDict["featureSettings"]);
                return $this->_propDict["featureSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the featureSettings
    * A collection of Microsoft Authenticator settings such as application context and location context, and whether they are enabled for all users or specific users only.
    *
    * @param MicrosoftAuthenticatorFeatureSettings $val The featureSettings
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodConfiguration
    */
    public function setFeatureSettings($val)
    {
        $this->_propDict["featureSettings"] = $val;
        return $this;
    }

    /**
    * Gets the isSoftwareOathEnabled
    *
    * @return bool|null The isSoftwareOathEnabled
    */
    public function getIsSoftwareOathEnabled()
    {
        if (array_key_exists("isSoftwareOathEnabled", $this->_propDict)) {
            return $this->_propDict["isSoftwareOathEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSoftwareOathEnabled
    *
    * @param bool $val The isSoftwareOathEnabled
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodConfiguration
    */
    public function setIsSoftwareOathEnabled($val)
    {
        $this->_propDict["isSoftwareOathEnabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the includeTargets
    * A collection of groups that are enabled to use the authentication method. Expanded by default.
     *
     * @return array|null The includeTargets
     */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict)) {
           return $this->_propDict["includeTargets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeTargets
    * A collection of groups that are enabled to use the authentication method. Expanded by default.
    *
    * @param MicrosoftAuthenticatorAuthenticationMethodTarget[] $val The includeTargets
    *
    * @return MicrosoftAuthenticatorAuthenticationMethodConfiguration
    */
    public function setIncludeTargets($val)
    {
        $this->_propDict["includeTargets"] = $val;
        return $this;
    }

}
