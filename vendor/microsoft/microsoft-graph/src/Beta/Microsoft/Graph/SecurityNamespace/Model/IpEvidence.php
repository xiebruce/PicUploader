<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* IpEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpEvidence extends AlertEvidence
{
    /**
    * Gets the countryLetterCode
    * The two-letter country code according to ISO 3166 format, for example: US, UK, CA, etc..).
    *
    * @return string|null The countryLetterCode
    */
    public function getCountryLetterCode()
    {
        if (array_key_exists("countryLetterCode", $this->_propDict)) {
            return $this->_propDict["countryLetterCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryLetterCode
    * The two-letter country code according to ISO 3166 format, for example: US, UK, CA, etc..).
    *
    * @param string $val The value of the countryLetterCode
    *
    * @return IpEvidence
    */
    public function setCountryLetterCode($val)
    {
        $this->_propDict["countryLetterCode"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    * The value of the IP Address, can be either in V4 address or V6 address format.
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * The value of the IP Address, can be either in V4 address or V6 address format.
    *
    * @param string $val The value of the ipAddress
    *
    * @return IpEvidence
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
}
