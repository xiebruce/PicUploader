<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftAuthenticatorFeatureSettings File
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
* MicrosoftAuthenticatorFeatureSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftAuthenticatorFeatureSettings extends Entity
{

    /**
    * Gets the displayAppInformationRequiredState
    * Determines whether the user's Authenticator app will show them the client app they are signing into.
    *
    * @return AuthenticationMethodFeatureConfiguration|null The displayAppInformationRequiredState
    */
    public function getDisplayAppInformationRequiredState()
    {
        if (array_key_exists("displayAppInformationRequiredState", $this->_propDict)) {
            if (is_a($this->_propDict["displayAppInformationRequiredState"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodFeatureConfiguration") || is_null($this->_propDict["displayAppInformationRequiredState"])) {
                return $this->_propDict["displayAppInformationRequiredState"];
            } else {
                $this->_propDict["displayAppInformationRequiredState"] = new AuthenticationMethodFeatureConfiguration($this->_propDict["displayAppInformationRequiredState"]);
                return $this->_propDict["displayAppInformationRequiredState"];
            }
        }
        return null;
    }

    /**
    * Sets the displayAppInformationRequiredState
    * Determines whether the user's Authenticator app will show them the client app they are signing into.
    *
    * @param AuthenticationMethodFeatureConfiguration $val The value to assign to the displayAppInformationRequiredState
    *
    * @return MicrosoftAuthenticatorFeatureSettings The MicrosoftAuthenticatorFeatureSettings
    */
    public function setDisplayAppInformationRequiredState($val)
    {
        $this->_propDict["displayAppInformationRequiredState"] = $val;
         return $this;
    }

    /**
    * Gets the displayLocationInformationRequiredState
    * Determines whether the user's Authenticator app will show them the geographic location of where the authentication request originated from.
    *
    * @return AuthenticationMethodFeatureConfiguration|null The displayLocationInformationRequiredState
    */
    public function getDisplayLocationInformationRequiredState()
    {
        if (array_key_exists("displayLocationInformationRequiredState", $this->_propDict)) {
            if (is_a($this->_propDict["displayLocationInformationRequiredState"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodFeatureConfiguration") || is_null($this->_propDict["displayLocationInformationRequiredState"])) {
                return $this->_propDict["displayLocationInformationRequiredState"];
            } else {
                $this->_propDict["displayLocationInformationRequiredState"] = new AuthenticationMethodFeatureConfiguration($this->_propDict["displayLocationInformationRequiredState"]);
                return $this->_propDict["displayLocationInformationRequiredState"];
            }
        }
        return null;
    }

    /**
    * Sets the displayLocationInformationRequiredState
    * Determines whether the user's Authenticator app will show them the geographic location of where the authentication request originated from.
    *
    * @param AuthenticationMethodFeatureConfiguration $val The value to assign to the displayLocationInformationRequiredState
    *
    * @return MicrosoftAuthenticatorFeatureSettings The MicrosoftAuthenticatorFeatureSettings
    */
    public function setDisplayLocationInformationRequiredState($val)
    {
        $this->_propDict["displayLocationInformationRequiredState"] = $val;
         return $this;
    }

    /**
    * Gets the numberMatchingRequiredState
    * Specifies whether the user needs to enter a number in the Authenticator app from the login screen to complete their login. Value is ignored for phone sign-in notifications.
    *
    * @return AuthenticationMethodFeatureConfiguration|null The numberMatchingRequiredState
    */
    public function getNumberMatchingRequiredState()
    {
        if (array_key_exists("numberMatchingRequiredState", $this->_propDict)) {
            if (is_a($this->_propDict["numberMatchingRequiredState"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodFeatureConfiguration") || is_null($this->_propDict["numberMatchingRequiredState"])) {
                return $this->_propDict["numberMatchingRequiredState"];
            } else {
                $this->_propDict["numberMatchingRequiredState"] = new AuthenticationMethodFeatureConfiguration($this->_propDict["numberMatchingRequiredState"]);
                return $this->_propDict["numberMatchingRequiredState"];
            }
        }
        return null;
    }

    /**
    * Sets the numberMatchingRequiredState
    * Specifies whether the user needs to enter a number in the Authenticator app from the login screen to complete their login. Value is ignored for phone sign-in notifications.
    *
    * @param AuthenticationMethodFeatureConfiguration $val The value to assign to the numberMatchingRequiredState
    *
    * @return MicrosoftAuthenticatorFeatureSettings The MicrosoftAuthenticatorFeatureSettings
    */
    public function setNumberMatchingRequiredState($val)
    {
        $this->_propDict["numberMatchingRequiredState"] = $val;
         return $this;
    }
}
