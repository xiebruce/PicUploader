<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SmsLogRow File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* SmsLogRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SmsLogRow extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the callCharge
    * Amount of money or cost of the SMS that is charged.
    *
    * @return \Beta\Microsoft\Graph\Model\Decimal|null The callCharge
    */
    public function getCallCharge()
    {
        if (array_key_exists("callCharge", $this->_propDict)) {
            if (is_a($this->_propDict["callCharge"], "\Beta\Microsoft\Graph\Model\Decimal") || is_null($this->_propDict["callCharge"])) {
                return $this->_propDict["callCharge"];
            } else {
                $this->_propDict["callCharge"] = new \Beta\Microsoft\Graph\Model\Decimal($this->_propDict["callCharge"]);
                return $this->_propDict["callCharge"];
            }
        }
        return null;
    }

    /**
    * Sets the callCharge
    * Amount of money or cost of the SMS that is charged.
    *
    * @param \Beta\Microsoft\Graph\Model\Decimal $val The value to assign to the callCharge
    *
    * @return SmsLogRow The SmsLogRow
    */
    public function setCallCharge($val)
    {
        $this->_propDict["callCharge"] = $val;
         return $this;
    }
    /**
    * Gets the currency
    * Currency used to calculate the cost of the call. For details, see ISO 4217.
    *
    * @return string|null The currency
    */
    public function getCurrency()
    {
        if (array_key_exists("currency", $this->_propDict)) {
            return $this->_propDict["currency"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currency
    * Currency used to calculate the cost of the call. For details, see ISO 4217.
    *
    * @param string $val The value of the currency
    *
    * @return SmsLogRow
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    /**
    * Gets the destinationContext
    * Indicates whether the SMS was Domestic (within a country or region) or International (outside a country or region) based on the user's location.
    *
    * @return string|null The destinationContext
    */
    public function getDestinationContext()
    {
        if (array_key_exists("destinationContext", $this->_propDict)) {
            return $this->_propDict["destinationContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationContext
    * Indicates whether the SMS was Domestic (within a country or region) or International (outside a country or region) based on the user's location.
    *
    * @param string $val The value of the destinationContext
    *
    * @return SmsLogRow
    */
    public function setDestinationContext($val)
    {
        $this->_propDict["destinationContext"] = $val;
        return $this;
    }
    /**
    * Gets the destinationName
    * Country or region of a phone number that received the SMS.
    *
    * @return string|null The destinationName
    */
    public function getDestinationName()
    {
        if (array_key_exists("destinationName", $this->_propDict)) {
            return $this->_propDict["destinationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationName
    * Country or region of a phone number that received the SMS.
    *
    * @param string $val The value of the destinationName
    *
    * @return SmsLogRow
    */
    public function setDestinationName($val)
    {
        $this->_propDict["destinationName"] = $val;
        return $this;
    }
    /**
    * Gets the destinationNumber
    * Partially obfuscated phone number that received the SMS. For details, see E.164.
    *
    * @return string|null The destinationNumber
    */
    public function getDestinationNumber()
    {
        if (array_key_exists("destinationNumber", $this->_propDict)) {
            return $this->_propDict["destinationNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationNumber
    * Partially obfuscated phone number that received the SMS. For details, see E.164.
    *
    * @param string $val The value of the destinationNumber
    *
    * @return SmsLogRow
    */
    public function setDestinationNumber($val)
    {
        $this->_propDict["destinationNumber"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Unique identifier (GUID) for the SMS.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique identifier (GUID) for the SMS.
    *
    * @param string $val The value of the id
    *
    * @return SmsLogRow
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the licenseCapability
    * The license used for the SMS.
    *
    * @return string|null The licenseCapability
    */
    public function getLicenseCapability()
    {
        if (array_key_exists("licenseCapability", $this->_propDict)) {
            return $this->_propDict["licenseCapability"];
        } else {
            return null;
        }
    }

    /**
    * Sets the licenseCapability
    * The license used for the SMS.
    *
    * @param string $val The value of the licenseCapability
    *
    * @return SmsLogRow
    */
    public function setLicenseCapability($val)
    {
        $this->_propDict["licenseCapability"] = $val;
        return $this;
    }
    /**
    * Gets the otherPartyCountryCode
    * For an outbound SMS, the country code of the receiver; otherwise (inbound SMS) the country code of the sender. For details, see ISO 3166-1 alpha-2.
    *
    * @return string|null The otherPartyCountryCode
    */
    public function getOtherPartyCountryCode()
    {
        if (array_key_exists("otherPartyCountryCode", $this->_propDict)) {
            return $this->_propDict["otherPartyCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the otherPartyCountryCode
    * For an outbound SMS, the country code of the receiver; otherwise (inbound SMS) the country code of the sender. For details, see ISO 3166-1 alpha-2.
    *
    * @param string $val The value of the otherPartyCountryCode
    *
    * @return SmsLogRow
    */
    public function setOtherPartyCountryCode($val)
    {
        $this->_propDict["otherPartyCountryCode"] = $val;
        return $this;
    }

    /**
    * Gets the sentDateTime
    * The date and time when the SMS was sent.
    *
    * @return \DateTime|null The sentDateTime
    */
    public function getSentDateTime()
    {
        if (array_key_exists("sentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sentDateTime"], "\DateTime") || is_null($this->_propDict["sentDateTime"])) {
                return $this->_propDict["sentDateTime"];
            } else {
                $this->_propDict["sentDateTime"] = new \DateTime($this->_propDict["sentDateTime"]);
                return $this->_propDict["sentDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sentDateTime
    * The date and time when the SMS was sent.
    *
    * @param \DateTime $val The value to assign to the sentDateTime
    *
    * @return SmsLogRow The SmsLogRow
    */
    public function setSentDateTime($val)
    {
        $this->_propDict["sentDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the smsId
    * SMS identifier. Not guaranteed to be unique.
    *
    * @return string|null The smsId
    */
    public function getSmsId()
    {
        if (array_key_exists("smsId", $this->_propDict)) {
            return $this->_propDict["smsId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smsId
    * SMS identifier. Not guaranteed to be unique.
    *
    * @param string $val The value of the smsId
    *
    * @return SmsLogRow
    */
    public function setSmsId($val)
    {
        $this->_propDict["smsId"] = $val;
        return $this;
    }
    /**
    * Gets the smsType
    * Type of SMS such as outbound or inbound.
    *
    * @return string|null The smsType
    */
    public function getSmsType()
    {
        if (array_key_exists("smsType", $this->_propDict)) {
            return $this->_propDict["smsType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smsType
    * Type of SMS such as outbound or inbound.
    *
    * @param string $val The value of the smsType
    *
    * @return SmsLogRow
    */
    public function setSmsType($val)
    {
        $this->_propDict["smsType"] = $val;
        return $this;
    }
    /**
    * Gets the smsUnits
    * Number of SMS units sent/received.
    *
    * @return int|null The smsUnits
    */
    public function getSmsUnits()
    {
        if (array_key_exists("smsUnits", $this->_propDict)) {
            return $this->_propDict["smsUnits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smsUnits
    * Number of SMS units sent/received.
    *
    * @param int $val The value of the smsUnits
    *
    * @return SmsLogRow
    */
    public function setSmsUnits($val)
    {
        $this->_propDict["smsUnits"] = $val;
        return $this;
    }
    /**
    * Gets the sourceNumber
    * Partially obfuscated phone number that sent the SMS. For details, see E.164.
    *
    * @return string|null The sourceNumber
    */
    public function getSourceNumber()
    {
        if (array_key_exists("sourceNumber", $this->_propDict)) {
            return $this->_propDict["sourceNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceNumber
    * Partially obfuscated phone number that sent the SMS. For details, see E.164.
    *
    * @param string $val The value of the sourceNumber
    *
    * @return SmsLogRow
    */
    public function setSourceNumber($val)
    {
        $this->_propDict["sourceNumber"] = $val;
        return $this;
    }
    /**
    * Gets the tenantCountryCode
    * Country code of the tenant. For details, see ISO 3166-1 alpha-2.
    *
    * @return string|null The tenantCountryCode
    */
    public function getTenantCountryCode()
    {
        if (array_key_exists("tenantCountryCode", $this->_propDict)) {
            return $this->_propDict["tenantCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantCountryCode
    * Country code of the tenant. For details, see ISO 3166-1 alpha-2.
    *
    * @param string $val The value of the tenantCountryCode
    *
    * @return SmsLogRow
    */
    public function setTenantCountryCode($val)
    {
        $this->_propDict["tenantCountryCode"] = $val;
        return $this;
    }
    /**
    * Gets the userCountryCode
    * Country code of the user. For details, see ISO 3166-1 alpha-2.
    *
    * @return string|null The userCountryCode
    */
    public function getUserCountryCode()
    {
        if (array_key_exists("userCountryCode", $this->_propDict)) {
            return $this->_propDict["userCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userCountryCode
    * Country code of the user. For details, see ISO 3166-1 alpha-2.
    *
    * @param string $val The value of the userCountryCode
    *
    * @return SmsLogRow
    */
    public function setUserCountryCode($val)
    {
        $this->_propDict["userCountryCode"] = $val;
        return $this;
    }
    /**
    * Gets the userDisplayName
    * Display name of the user.
    *
    * @return string|null The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    * Display name of the user.
    *
    * @param string $val The value of the userDisplayName
    *
    * @return SmsLogRow
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * The unique identifier (GUID) of the user in Azure Active Directory.
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * The unique identifier (GUID) of the user in Azure Active Directory.
    *
    * @param string $val The value of the userId
    *
    * @return SmsLogRow
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * The user principal name (sign-in name) in Azure Active Directory. This is usually the same as the user's SIP address, and can be same as the user's e-mail address.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * The user principal name (sign-in name) in Azure Active Directory. This is usually the same as the user's SIP address, and can be same as the user's e-mail address.
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return SmsLogRow
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
