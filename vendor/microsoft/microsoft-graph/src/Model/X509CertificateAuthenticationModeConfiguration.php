<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* X509CertificateAuthenticationModeConfiguration File
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
* X509CertificateAuthenticationModeConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class X509CertificateAuthenticationModeConfiguration extends Entity
{

    /**
    * Gets the rules
    *
    * @return X509CertificateRule|null The rules
    */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
            if (is_a($this->_propDict["rules"], "\Microsoft\Graph\Model\X509CertificateRule") || is_null($this->_propDict["rules"])) {
                return $this->_propDict["rules"];
            } else {
                $this->_propDict["rules"] = new X509CertificateRule($this->_propDict["rules"]);
                return $this->_propDict["rules"];
            }
        }
        return null;
    }

    /**
    * Sets the rules
    *
    * @param X509CertificateRule $val The value to assign to the rules
    *
    * @return X509CertificateAuthenticationModeConfiguration The X509CertificateAuthenticationModeConfiguration
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
         return $this;
    }

    /**
    * Gets the x509CertificateAuthenticationDefaultMode
    *
    * @return X509CertificateAuthenticationMode|null The x509CertificateAuthenticationDefaultMode
    */
    public function getX509CertificateAuthenticationDefaultMode()
    {
        if (array_key_exists("x509CertificateAuthenticationDefaultMode", $this->_propDict)) {
            if (is_a($this->_propDict["x509CertificateAuthenticationDefaultMode"], "\Microsoft\Graph\Model\X509CertificateAuthenticationMode") || is_null($this->_propDict["x509CertificateAuthenticationDefaultMode"])) {
                return $this->_propDict["x509CertificateAuthenticationDefaultMode"];
            } else {
                $this->_propDict["x509CertificateAuthenticationDefaultMode"] = new X509CertificateAuthenticationMode($this->_propDict["x509CertificateAuthenticationDefaultMode"]);
                return $this->_propDict["x509CertificateAuthenticationDefaultMode"];
            }
        }
        return null;
    }

    /**
    * Sets the x509CertificateAuthenticationDefaultMode
    *
    * @param X509CertificateAuthenticationMode $val The value to assign to the x509CertificateAuthenticationDefaultMode
    *
    * @return X509CertificateAuthenticationModeConfiguration The X509CertificateAuthenticationModeConfiguration
    */
    public function setX509CertificateAuthenticationDefaultMode($val)
    {
        $this->_propDict["x509CertificateAuthenticationDefaultMode"] = $val;
         return $this;
    }
}
