<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LoginPageTextVisibilitySettings File
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
* LoginPageTextVisibilitySettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LoginPageTextVisibilitySettings extends Entity
{
    /**
    * Gets the hideAccountResetCredentials
    *
    * @return bool|null The hideAccountResetCredentials
    */
    public function getHideAccountResetCredentials()
    {
        if (array_key_exists("hideAccountResetCredentials", $this->_propDict)) {
            return $this->_propDict["hideAccountResetCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideAccountResetCredentials
    *
    * @param bool $val The value of the hideAccountResetCredentials
    *
    * @return LoginPageTextVisibilitySettings
    */
    public function setHideAccountResetCredentials($val)
    {
        $this->_propDict["hideAccountResetCredentials"] = $val;
        return $this;
    }
    /**
    * Gets the hideCannotAccessYourAccount
    * Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form.
    *
    * @return bool|null The hideCannotAccessYourAccount
    */
    public function getHideCannotAccessYourAccount()
    {
        if (array_key_exists("hideCannotAccessYourAccount", $this->_propDict)) {
            return $this->_propDict["hideCannotAccessYourAccount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideCannotAccessYourAccount
    * Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form.
    *
    * @param bool $val The value of the hideCannotAccessYourAccount
    *
    * @return LoginPageTextVisibilitySettings
    */
    public function setHideCannotAccessYourAccount($val)
    {
        $this->_propDict["hideCannotAccessYourAccount"] = $val;
        return $this;
    }
    /**
    * Gets the hideForgotMyPassword
    * Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form.
    *
    * @return bool|null The hideForgotMyPassword
    */
    public function getHideForgotMyPassword()
    {
        if (array_key_exists("hideForgotMyPassword", $this->_propDict)) {
            return $this->_propDict["hideForgotMyPassword"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideForgotMyPassword
    * Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form.
    *
    * @param bool $val The value of the hideForgotMyPassword
    *
    * @return LoginPageTextVisibilitySettings
    */
    public function setHideForgotMyPassword($val)
    {
        $this->_propDict["hideForgotMyPassword"] = $val;
        return $this;
    }
    /**
    * Gets the hidePrivacyAndCookies
    * Option to hide the 'Privacy &amp; Cookies' hyperlink in the footer.
    *
    * @return bool|null The hidePrivacyAndCookies
    */
    public function getHidePrivacyAndCookies()
    {
        if (array_key_exists("hidePrivacyAndCookies", $this->_propDict)) {
            return $this->_propDict["hidePrivacyAndCookies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidePrivacyAndCookies
    * Option to hide the 'Privacy &amp; Cookies' hyperlink in the footer.
    *
    * @param bool $val The value of the hidePrivacyAndCookies
    *
    * @return LoginPageTextVisibilitySettings
    */
    public function setHidePrivacyAndCookies($val)
    {
        $this->_propDict["hidePrivacyAndCookies"] = $val;
        return $this;
    }
    /**
    * Gets the hideResetItNow
    * Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form.
    *
    * @return bool|null The hideResetItNow
    */
    public function getHideResetItNow()
    {
        if (array_key_exists("hideResetItNow", $this->_propDict)) {
            return $this->_propDict["hideResetItNow"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideResetItNow
    * Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form.
    *
    * @param bool $val The value of the hideResetItNow
    *
    * @return LoginPageTextVisibilitySettings
    */
    public function setHideResetItNow($val)
    {
        $this->_propDict["hideResetItNow"] = $val;
        return $this;
    }
    /**
    * Gets the hideTermsOfUse
    * Option to hide the 'Terms of Use' hyperlink in the footer.
    *
    * @return bool|null The hideTermsOfUse
    */
    public function getHideTermsOfUse()
    {
        if (array_key_exists("hideTermsOfUse", $this->_propDict)) {
            return $this->_propDict["hideTermsOfUse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideTermsOfUse
    * Option to hide the 'Terms of Use' hyperlink in the footer.
    *
    * @param bool $val The value of the hideTermsOfUse
    *
    * @return LoginPageTextVisibilitySettings
    */
    public function setHideTermsOfUse($val)
    {
        $this->_propDict["hideTermsOfUse"] = $val;
        return $this;
    }
}
