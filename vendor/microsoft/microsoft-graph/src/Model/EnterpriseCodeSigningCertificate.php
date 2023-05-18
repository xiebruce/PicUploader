<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnterpriseCodeSigningCertificate File
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
* EnterpriseCodeSigningCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnterpriseCodeSigningCertificate extends Entity
{
    /**
    * Gets the content
    * The Windows Enterprise Code-Signing Certificate in the raw data format. Set to null once certificate has been uploaded and other properties have been populated.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * The Windows Enterprise Code-Signing Certificate in the raw data format. Set to null once certificate has been uploaded and other properties have been populated.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return EnterpriseCodeSigningCertificate
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * The cert expiration date and time (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * The cert expiration date and time (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return EnterpriseCodeSigningCertificate
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the issuer
    * The issuer value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @return string|null The issuer
    */
    public function getIssuer()
    {
        if (array_key_exists("issuer", $this->_propDict)) {
            return $this->_propDict["issuer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuer
    * The issuer value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @param string $val The issuer
    *
    * @return EnterpriseCodeSigningCertificate
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }

    /**
    * Gets the issuerName
    * The issuer name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @return string|null The issuerName
    */
    public function getIssuerName()
    {
        if (array_key_exists("issuerName", $this->_propDict)) {
            return $this->_propDict["issuerName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuerName
    * The issuer name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @param string $val The issuerName
    *
    * @return EnterpriseCodeSigningCertificate
    */
    public function setIssuerName($val)
    {
        $this->_propDict["issuerName"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Whether the Certificate Status Provisioned or not Provisioned. Possible values are: notProvisioned, provisioned. Default is notProvisioned. Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported. Possible values are: notProvisioned, provisioned.
    *
    * @return CertificateStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\CertificateStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CertificateStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Whether the Certificate Status Provisioned or not Provisioned. Possible values are: notProvisioned, provisioned. Default is notProvisioned. Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported. Possible values are: notProvisioned, provisioned.
    *
    * @param CertificateStatus $val The status
    *
    * @return EnterpriseCodeSigningCertificate
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    * The subject value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    * The subject value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @param string $val The subject
    *
    * @return EnterpriseCodeSigningCertificate
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }

    /**
    * Gets the subjectName
    * The subject name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @return string|null The subjectName
    */
    public function getSubjectName()
    {
        if (array_key_exists("subjectName", $this->_propDict)) {
            return $this->_propDict["subjectName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectName
    * The subject name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @param string $val The subjectName
    *
    * @return EnterpriseCodeSigningCertificate
    */
    public function setSubjectName($val)
    {
        $this->_propDict["subjectName"] = $val;
        return $this;
    }

    /**
    * Gets the uploadDateTime
    * The date time of CodeSigning Cert when it is uploaded (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @return \DateTime|null The uploadDateTime
    */
    public function getUploadDateTime()
    {
        if (array_key_exists("uploadDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["uploadDateTime"], "\DateTime") || is_null($this->_propDict["uploadDateTime"])) {
                return $this->_propDict["uploadDateTime"];
            } else {
                $this->_propDict["uploadDateTime"] = new \DateTime($this->_propDict["uploadDateTime"]);
                return $this->_propDict["uploadDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the uploadDateTime
    * The date time of CodeSigning Cert when it is uploaded (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
    *
    * @param \DateTime $val The uploadDateTime
    *
    * @return EnterpriseCodeSigningCertificate
    */
    public function setUploadDateTime($val)
    {
        $this->_propDict["uploadDateTime"] = $val;
        return $this;
    }

}
