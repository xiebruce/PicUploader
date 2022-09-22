<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Authentication File
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
* Authentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Authentication extends Entity
{

     /**
     * Gets the emailMethods
    * The email address registered to a user for authentication.
     *
     * @return array|null The emailMethods
     */
    public function getEmailMethods()
    {
        if (array_key_exists("emailMethods", $this->_propDict)) {
           return $this->_propDict["emailMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailMethods
    * The email address registered to a user for authentication.
    *
    * @param EmailAuthenticationMethod[] $val The emailMethods
    *
    * @return Authentication
    */
    public function setEmailMethods($val)
    {
        $this->_propDict["emailMethods"] = $val;
        return $this;
    }


     /**
     * Gets the fido2Methods
    * Represents the FIDO2 security keys registered to a user for authentication.
     *
     * @return array|null The fido2Methods
     */
    public function getFido2Methods()
    {
        if (array_key_exists("fido2Methods", $this->_propDict)) {
           return $this->_propDict["fido2Methods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fido2Methods
    * Represents the FIDO2 security keys registered to a user for authentication.
    *
    * @param Fido2AuthenticationMethod[] $val The fido2Methods
    *
    * @return Authentication
    */
    public function setFido2Methods($val)
    {
        $this->_propDict["fido2Methods"] = $val;
        return $this;
    }


     /**
     * Gets the methods
    * Represents all authentication methods registered to a user.
     *
     * @return array|null The methods
     */
    public function getMethods()
    {
        if (array_key_exists("methods", $this->_propDict)) {
           return $this->_propDict["methods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the methods
    * Represents all authentication methods registered to a user.
    *
    * @param AuthenticationMethod[] $val The methods
    *
    * @return Authentication
    */
    public function setMethods($val)
    {
        $this->_propDict["methods"] = $val;
        return $this;
    }


     /**
     * Gets the microsoftAuthenticatorMethods
    * The details of the Microsoft Authenticator app registered to a user for authentication.
     *
     * @return array|null The microsoftAuthenticatorMethods
     */
    public function getMicrosoftAuthenticatorMethods()
    {
        if (array_key_exists("microsoftAuthenticatorMethods", $this->_propDict)) {
           return $this->_propDict["microsoftAuthenticatorMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftAuthenticatorMethods
    * The details of the Microsoft Authenticator app registered to a user for authentication.
    *
    * @param MicrosoftAuthenticatorAuthenticationMethod[] $val The microsoftAuthenticatorMethods
    *
    * @return Authentication
    */
    public function setMicrosoftAuthenticatorMethods($val)
    {
        $this->_propDict["microsoftAuthenticatorMethods"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * Represents the status of a long-running operation.
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    * Represents the status of a long-running operation.
    *
    * @param LongRunningOperation[] $val The operations
    *
    * @return Authentication
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the passwordMethods
    * Represents the password that's registered to a user for authentication. For security, the password itself will never be returned in the object, but action can be taken to reset a password.
     *
     * @return array|null The passwordMethods
     */
    public function getPasswordMethods()
    {
        if (array_key_exists("passwordMethods", $this->_propDict)) {
           return $this->_propDict["passwordMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMethods
    * Represents the password that's registered to a user for authentication. For security, the password itself will never be returned in the object, but action can be taken to reset a password.
    *
    * @param PasswordAuthenticationMethod[] $val The passwordMethods
    *
    * @return Authentication
    */
    public function setPasswordMethods($val)
    {
        $this->_propDict["passwordMethods"] = $val;
        return $this;
    }


     /**
     * Gets the phoneMethods
    * The phone numbers registered to a user for authentication.
     *
     * @return array|null The phoneMethods
     */
    public function getPhoneMethods()
    {
        if (array_key_exists("phoneMethods", $this->_propDict)) {
           return $this->_propDict["phoneMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phoneMethods
    * The phone numbers registered to a user for authentication.
    *
    * @param PhoneAuthenticationMethod[] $val The phoneMethods
    *
    * @return Authentication
    */
    public function setPhoneMethods($val)
    {
        $this->_propDict["phoneMethods"] = $val;
        return $this;
    }


     /**
     * Gets the softwareOathMethods
    * The software OATH TOTP applications registered to a user for authentication.
     *
     * @return array|null The softwareOathMethods
     */
    public function getSoftwareOathMethods()
    {
        if (array_key_exists("softwareOathMethods", $this->_propDict)) {
           return $this->_propDict["softwareOathMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the softwareOathMethods
    * The software OATH TOTP applications registered to a user for authentication.
    *
    * @param SoftwareOathAuthenticationMethod[] $val The softwareOathMethods
    *
    * @return Authentication
    */
    public function setSoftwareOathMethods($val)
    {
        $this->_propDict["softwareOathMethods"] = $val;
        return $this;
    }


     /**
     * Gets the temporaryAccessPassMethods
    * Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     *
     * @return array|null The temporaryAccessPassMethods
     */
    public function getTemporaryAccessPassMethods()
    {
        if (array_key_exists("temporaryAccessPassMethods", $this->_propDict)) {
           return $this->_propDict["temporaryAccessPassMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the temporaryAccessPassMethods
    * Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
    *
    * @param TemporaryAccessPassAuthenticationMethod[] $val The temporaryAccessPassMethods
    *
    * @return Authentication
    */
    public function setTemporaryAccessPassMethods($val)
    {
        $this->_propDict["temporaryAccessPassMethods"] = $val;
        return $this;
    }


     /**
     * Gets the windowsHelloForBusinessMethods
    * Represents the Windows Hello for Business authentication method registered to a user for authentication.
     *
     * @return array|null The windowsHelloForBusinessMethods
     */
    public function getWindowsHelloForBusinessMethods()
    {
        if (array_key_exists("windowsHelloForBusinessMethods", $this->_propDict)) {
           return $this->_propDict["windowsHelloForBusinessMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsHelloForBusinessMethods
    * Represents the Windows Hello for Business authentication method registered to a user for authentication.
    *
    * @param WindowsHelloForBusinessAuthenticationMethod[] $val The windowsHelloForBusinessMethods
    *
    * @return Authentication
    */
    public function setWindowsHelloForBusinessMethods($val)
    {
        $this->_propDict["windowsHelloForBusinessMethods"] = $val;
        return $this;
    }

}
