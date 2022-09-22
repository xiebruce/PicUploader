<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistrationEnforcement File
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
* RegistrationEnforcement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistrationEnforcement extends Entity
{

    /**
    * Gets the authenticationMethodsRegistrationCampaign
    * Run campaigns to remind users to set up targeted authentication methods.
    *
    * @return AuthenticationMethodsRegistrationCampaign|null The authenticationMethodsRegistrationCampaign
    */
    public function getAuthenticationMethodsRegistrationCampaign()
    {
        if (array_key_exists("authenticationMethodsRegistrationCampaign", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethodsRegistrationCampaign"], "\Microsoft\Graph\Model\AuthenticationMethodsRegistrationCampaign") || is_null($this->_propDict["authenticationMethodsRegistrationCampaign"])) {
                return $this->_propDict["authenticationMethodsRegistrationCampaign"];
            } else {
                $this->_propDict["authenticationMethodsRegistrationCampaign"] = new AuthenticationMethodsRegistrationCampaign($this->_propDict["authenticationMethodsRegistrationCampaign"]);
                return $this->_propDict["authenticationMethodsRegistrationCampaign"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethodsRegistrationCampaign
    * Run campaigns to remind users to set up targeted authentication methods.
    *
    * @param AuthenticationMethodsRegistrationCampaign $val The value to assign to the authenticationMethodsRegistrationCampaign
    *
    * @return RegistrationEnforcement The RegistrationEnforcement
    */
    public function setAuthenticationMethodsRegistrationCampaign($val)
    {
        $this->_propDict["authenticationMethodsRegistrationCampaign"] = $val;
         return $this;
    }
}
