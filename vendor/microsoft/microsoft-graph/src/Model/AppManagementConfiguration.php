<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppManagementConfiguration File
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
* AppManagementConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppManagementConfiguration extends Entity
{

    /**
    * Gets the keyCredentials
    * Collection of keyCredential restrictions settings to be applied to an application or service principal.
    *
    * @return KeyCredentialConfiguration|null The keyCredentials
    */
    public function getKeyCredentials()
    {
        if (array_key_exists("keyCredentials", $this->_propDict)) {
            if (is_a($this->_propDict["keyCredentials"], "\Microsoft\Graph\Model\KeyCredentialConfiguration") || is_null($this->_propDict["keyCredentials"])) {
                return $this->_propDict["keyCredentials"];
            } else {
                $this->_propDict["keyCredentials"] = new KeyCredentialConfiguration($this->_propDict["keyCredentials"]);
                return $this->_propDict["keyCredentials"];
            }
        }
        return null;
    }

    /**
    * Sets the keyCredentials
    * Collection of keyCredential restrictions settings to be applied to an application or service principal.
    *
    * @param KeyCredentialConfiguration $val The value to assign to the keyCredentials
    *
    * @return AppManagementConfiguration The AppManagementConfiguration
    */
    public function setKeyCredentials($val)
    {
        $this->_propDict["keyCredentials"] = $val;
         return $this;
    }

    /**
    * Gets the passwordCredentials
    * Collection of password restrictions settings to be applied to an application or service principal.
    *
    * @return PasswordCredentialConfiguration|null The passwordCredentials
    */
    public function getPasswordCredentials()
    {
        if (array_key_exists("passwordCredentials", $this->_propDict)) {
            if (is_a($this->_propDict["passwordCredentials"], "\Microsoft\Graph\Model\PasswordCredentialConfiguration") || is_null($this->_propDict["passwordCredentials"])) {
                return $this->_propDict["passwordCredentials"];
            } else {
                $this->_propDict["passwordCredentials"] = new PasswordCredentialConfiguration($this->_propDict["passwordCredentials"]);
                return $this->_propDict["passwordCredentials"];
            }
        }
        return null;
    }

    /**
    * Sets the passwordCredentials
    * Collection of password restrictions settings to be applied to an application or service principal.
    *
    * @param PasswordCredentialConfiguration $val The value to assign to the passwordCredentials
    *
    * @return AppManagementConfiguration The AppManagementConfiguration
    */
    public function setPasswordCredentials($val)
    {
        $this->_propDict["passwordCredentials"] = $val;
         return $this;
    }
}
