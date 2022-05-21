<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Certification File
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
* Certification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Certification extends Entity
{
    /**
    * Gets the certificationDetailsUrl
    * URL that shows certification details for the application.
    *
    * @return string|null The certificationDetailsUrl
    */
    public function getCertificationDetailsUrl()
    {
        if (array_key_exists("certificationDetailsUrl", $this->_propDict)) {
            return $this->_propDict["certificationDetailsUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificationDetailsUrl
    * URL that shows certification details for the application.
    *
    * @param string $val The value of the certificationDetailsUrl
    *
    * @return Certification
    */
    public function setCertificationDetailsUrl($val)
    {
        $this->_propDict["certificationDetailsUrl"] = $val;
        return $this;
    }

    /**
    * Gets the certificationExpirationDateTime
    * The timestamp when the current certification for the application will expire.
    *
    * @return \DateTime|null The certificationExpirationDateTime
    */
    public function getCertificationExpirationDateTime()
    {
        if (array_key_exists("certificationExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["certificationExpirationDateTime"], "\DateTime") || is_null($this->_propDict["certificationExpirationDateTime"])) {
                return $this->_propDict["certificationExpirationDateTime"];
            } else {
                $this->_propDict["certificationExpirationDateTime"] = new \DateTime($this->_propDict["certificationExpirationDateTime"]);
                return $this->_propDict["certificationExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the certificationExpirationDateTime
    * The timestamp when the current certification for the application will expire.
    *
    * @param \DateTime $val The value to assign to the certificationExpirationDateTime
    *
    * @return Certification The Certification
    */
    public function setCertificationExpirationDateTime($val)
    {
        $this->_propDict["certificationExpirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the isCertifiedByMicrosoft
    * Indicates whether the application is certified by Microsoft.
    *
    * @return bool|null The isCertifiedByMicrosoft
    */
    public function getIsCertifiedByMicrosoft()
    {
        if (array_key_exists("isCertifiedByMicrosoft", $this->_propDict)) {
            return $this->_propDict["isCertifiedByMicrosoft"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCertifiedByMicrosoft
    * Indicates whether the application is certified by Microsoft.
    *
    * @param bool $val The value of the isCertifiedByMicrosoft
    *
    * @return Certification
    */
    public function setIsCertifiedByMicrosoft($val)
    {
        $this->_propDict["isCertifiedByMicrosoft"] = $val;
        return $this;
    }
    /**
    * Gets the isPublisherAttested
    * Indicates whether the application has been self-attested by the application developer or the publisher.
    *
    * @return bool|null The isPublisherAttested
    */
    public function getIsPublisherAttested()
    {
        if (array_key_exists("isPublisherAttested", $this->_propDict)) {
            return $this->_propDict["isPublisherAttested"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPublisherAttested
    * Indicates whether the application has been self-attested by the application developer or the publisher.
    *
    * @param bool $val The value of the isPublisherAttested
    *
    * @return Certification
    */
    public function setIsPublisherAttested($val)
    {
        $this->_propDict["isPublisherAttested"] = $val;
        return $this;
    }

    /**
    * Gets the lastCertificationDateTime
    * The timestamp when the certification for the application was most recently added or updated.
    *
    * @return \DateTime|null The lastCertificationDateTime
    */
    public function getLastCertificationDateTime()
    {
        if (array_key_exists("lastCertificationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCertificationDateTime"], "\DateTime") || is_null($this->_propDict["lastCertificationDateTime"])) {
                return $this->_propDict["lastCertificationDateTime"];
            } else {
                $this->_propDict["lastCertificationDateTime"] = new \DateTime($this->_propDict["lastCertificationDateTime"]);
                return $this->_propDict["lastCertificationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCertificationDateTime
    * The timestamp when the certification for the application was most recently added or updated.
    *
    * @param \DateTime $val The value to assign to the lastCertificationDateTime
    *
    * @return Certification The Certification
    */
    public function setLastCertificationDateTime($val)
    {
        $this->_propDict["lastCertificationDateTime"] = $val;
         return $this;
    }
}
