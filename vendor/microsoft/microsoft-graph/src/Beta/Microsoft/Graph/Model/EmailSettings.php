<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailSettings File
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
* EmailSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailSettings extends Entity
{
    /**
    * Gets the senderDomain
    * Specifies the domain that should be used when sending email notifications. This domain must be verified in order to be used. We recommend that you use a domain that has the appropriate DNS records to facilitate email validation, like SPF, DKIM, DMARC, and MX, because this then complies with the RFC compliance for sending and receiving email. For details, see Learn more about Exchange Online Email Routing.
    *
    * @return string|null The senderDomain
    */
    public function getSenderDomain()
    {
        if (array_key_exists("senderDomain", $this->_propDict)) {
            return $this->_propDict["senderDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderDomain
    * Specifies the domain that should be used when sending email notifications. This domain must be verified in order to be used. We recommend that you use a domain that has the appropriate DNS records to facilitate email validation, like SPF, DKIM, DMARC, and MX, because this then complies with the RFC compliance for sending and receiving email. For details, see Learn more about Exchange Online Email Routing.
    *
    * @param string $val The value of the senderDomain
    *
    * @return EmailSettings
    */
    public function setSenderDomain($val)
    {
        $this->_propDict["senderDomain"] = $val;
        return $this;
    }
    /**
    * Gets the useCompanyBranding
    * Specifies if the organization’s banner logo should be included in email notifications. The banner logo will replace the Microsoft logo at the top of the email notification. If true the banner logo will be taken from the tenant’s branding settings. This value can only be set to true if the organizationalBranding bannerLogo property is set.
    *
    * @return bool|null The useCompanyBranding
    */
    public function getUseCompanyBranding()
    {
        if (array_key_exists("useCompanyBranding", $this->_propDict)) {
            return $this->_propDict["useCompanyBranding"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useCompanyBranding
    * Specifies if the organization’s banner logo should be included in email notifications. The banner logo will replace the Microsoft logo at the top of the email notification. If true the banner logo will be taken from the tenant’s branding settings. This value can only be set to true if the organizationalBranding bannerLogo property is set.
    *
    * @param bool $val The value of the useCompanyBranding
    *
    * @return EmailSettings
    */
    public function setUseCompanyBranding($val)
    {
        $this->_propDict["useCompanyBranding"] = $val;
        return $this;
    }
}
