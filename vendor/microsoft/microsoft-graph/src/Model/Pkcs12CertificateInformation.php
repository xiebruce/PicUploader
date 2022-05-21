<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Pkcs12CertificateInformation File
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
* Pkcs12CertificateInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Pkcs12CertificateInformation extends Entity
{
    /**
    * Gets the isActive
    * Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate which is not yet expired but whose notBefore time is in the past.
    *
    * @return bool|null The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isActive
    * Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate which is not yet expired but whose notBefore time is in the past.
    *
    * @param bool $val The value of the isActive
    *
    * @return Pkcs12CertificateInformation
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = $val;
        return $this;
    }
    /**
    * Gets the notAfter
    * The certificate's expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    *
    * @return int|null The notAfter
    */
    public function getNotAfter()
    {
        if (array_key_exists("notAfter", $this->_propDict)) {
            return $this->_propDict["notAfter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notAfter
    * The certificate's expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    *
    * @param int $val The value of the notAfter
    *
    * @return Pkcs12CertificateInformation
    */
    public function setNotAfter($val)
    {
        $this->_propDict["notAfter"] = $val;
        return $this;
    }
    /**
    * Gets the notBefore
    * The certificate's issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    *
    * @return int|null The notBefore
    */
    public function getNotBefore()
    {
        if (array_key_exists("notBefore", $this->_propDict)) {
            return $this->_propDict["notBefore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notBefore
    * The certificate's issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    *
    * @param int $val The value of the notBefore
    *
    * @return Pkcs12CertificateInformation
    */
    public function setNotBefore($val)
    {
        $this->_propDict["notBefore"] = $val;
        return $this;
    }
    /**
    * Gets the thumbprint
    * The certificate thumbprint.
    *
    * @return string|null The thumbprint
    */
    public function getThumbprint()
    {
        if (array_key_exists("thumbprint", $this->_propDict)) {
            return $this->_propDict["thumbprint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the thumbprint
    * The certificate thumbprint.
    *
    * @param string $val The value of the thumbprint
    *
    * @return Pkcs12CertificateInformation
    */
    public function setThumbprint($val)
    {
        $this->_propDict["thumbprint"] = $val;
        return $this;
    }
}
