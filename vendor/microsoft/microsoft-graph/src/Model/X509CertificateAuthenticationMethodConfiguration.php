<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* X509CertificateAuthenticationMethodConfiguration File
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
* X509CertificateAuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class X509CertificateAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration
{
    /**
    * Gets the authenticationModeConfiguration
    *
    * @return X509CertificateAuthenticationModeConfiguration|null The authenticationModeConfiguration
    */
    public function getAuthenticationModeConfiguration()
    {
        if (array_key_exists("authenticationModeConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationModeConfiguration"], "\Microsoft\Graph\Model\X509CertificateAuthenticationModeConfiguration") || is_null($this->_propDict["authenticationModeConfiguration"])) {
                return $this->_propDict["authenticationModeConfiguration"];
            } else {
                $this->_propDict["authenticationModeConfiguration"] = new X509CertificateAuthenticationModeConfiguration($this->_propDict["authenticationModeConfiguration"]);
                return $this->_propDict["authenticationModeConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationModeConfiguration
    *
    * @param X509CertificateAuthenticationModeConfiguration $val The authenticationModeConfiguration
    *
    * @return X509CertificateAuthenticationMethodConfiguration
    */
    public function setAuthenticationModeConfiguration($val)
    {
        $this->_propDict["authenticationModeConfiguration"] = $val;
        return $this;
    }


     /**
     * Gets the certificateUserBindings
     *
     * @return array|null The certificateUserBindings
     */
    public function getCertificateUserBindings()
    {
        if (array_key_exists("certificateUserBindings", $this->_propDict)) {
           return $this->_propDict["certificateUserBindings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateUserBindings
    *
    * @param X509CertificateUserBinding[] $val The certificateUserBindings
    *
    * @return X509CertificateAuthenticationMethodConfiguration
    */
    public function setCertificateUserBindings($val)
    {
        $this->_propDict["certificateUserBindings"] = $val;
        return $this;
    }


     /**
     * Gets the includeTargets
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
    *
    * @param AuthenticationMethodTarget[] $val The includeTargets
    *
    * @return X509CertificateAuthenticationMethodConfiguration
    */
    public function setIncludeTargets($val)
    {
        $this->_propDict["includeTargets"] = $val;
        return $this;
    }

}
