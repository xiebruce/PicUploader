<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentNotificationConfiguration File
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
* DeviceEnrollmentNotificationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentNotificationConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the brandingOptions
    * Branding Options for the Enrollment Notification. Possible values are: none, includeCompanyLogo, includeCompanyName, includeContactInformation, includeCompanyPortalLink, includeDeviceDetails, unknownFutureValue.
    *
    * @return EnrollmentNotificationBrandingOptions|null The brandingOptions
    */
    public function getBrandingOptions()
    {
        if (array_key_exists("brandingOptions", $this->_propDict)) {
            if (is_a($this->_propDict["brandingOptions"], "\Beta\Microsoft\Graph\Model\EnrollmentNotificationBrandingOptions") || is_null($this->_propDict["brandingOptions"])) {
                return $this->_propDict["brandingOptions"];
            } else {
                $this->_propDict["brandingOptions"] = new EnrollmentNotificationBrandingOptions($this->_propDict["brandingOptions"]);
                return $this->_propDict["brandingOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the brandingOptions
    * Branding Options for the Enrollment Notification. Possible values are: none, includeCompanyLogo, includeCompanyName, includeContactInformation, includeCompanyPortalLink, includeDeviceDetails, unknownFutureValue.
    *
    * @param EnrollmentNotificationBrandingOptions $val The brandingOptions
    *
    * @return DeviceEnrollmentNotificationConfiguration
    */
    public function setBrandingOptions($val)
    {
        $this->_propDict["brandingOptions"] = $val;
        return $this;
    }

    /**
    * Gets the defaultLocale
    * DefaultLocale for the Enrollment Notification
    *
    * @return string|null The defaultLocale
    */
    public function getDefaultLocale()
    {
        if (array_key_exists("defaultLocale", $this->_propDict)) {
            return $this->_propDict["defaultLocale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLocale
    * DefaultLocale for the Enrollment Notification
    *
    * @param string $val The defaultLocale
    *
    * @return DeviceEnrollmentNotificationConfiguration
    */
    public function setDefaultLocale($val)
    {
        $this->_propDict["defaultLocale"] = $val;
        return $this;
    }

    /**
    * Gets the notificationMessageTemplateId
    * Notification Message Template Id
    *
    * @return string|null The notificationMessageTemplateId
    */
    public function getNotificationMessageTemplateId()
    {
        if (array_key_exists("notificationMessageTemplateId", $this->_propDict)) {
            return $this->_propDict["notificationMessageTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationMessageTemplateId
    * Notification Message Template Id
    *
    * @param string $val The notificationMessageTemplateId
    *
    * @return DeviceEnrollmentNotificationConfiguration
    */
    public function setNotificationMessageTemplateId($val)
    {
        $this->_propDict["notificationMessageTemplateId"] = $val;
        return $this;
    }

    /**
    * Gets the notificationTemplates
    * The list of notification data -
    *
    * @return array|null The notificationTemplates
    */
    public function getNotificationTemplates()
    {
        if (array_key_exists("notificationTemplates", $this->_propDict)) {
            return $this->_propDict["notificationTemplates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationTemplates
    * The list of notification data -
    *
    * @param string[] $val The notificationTemplates
    *
    * @return DeviceEnrollmentNotificationConfiguration
    */
    public function setNotificationTemplates($val)
    {
        $this->_propDict["notificationTemplates"] = $val;
        return $this;
    }

    /**
    * Gets the platformType
    * Platform type of the Enrollment Notification. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac, linux, unknownFutureValue.
    *
    * @return EnrollmentRestrictionPlatformType|null The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "\Beta\Microsoft\Graph\Model\EnrollmentRestrictionPlatformType") || is_null($this->_propDict["platformType"])) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new EnrollmentRestrictionPlatformType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }

    /**
    * Sets the platformType
    * Platform type of the Enrollment Notification. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac, linux, unknownFutureValue.
    *
    * @param EnrollmentRestrictionPlatformType $val The platformType
    *
    * @return DeviceEnrollmentNotificationConfiguration
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }

    /**
    * Gets the templateType
    * Template type of the Enrollment Notification. Possible values are: email, push, unknownFutureValue.
    *
    * @return EnrollmentNotificationTemplateType|null The templateType
    */
    public function getTemplateType()
    {
        if (array_key_exists("templateType", $this->_propDict)) {
            if (is_a($this->_propDict["templateType"], "\Beta\Microsoft\Graph\Model\EnrollmentNotificationTemplateType") || is_null($this->_propDict["templateType"])) {
                return $this->_propDict["templateType"];
            } else {
                $this->_propDict["templateType"] = new EnrollmentNotificationTemplateType($this->_propDict["templateType"]);
                return $this->_propDict["templateType"];
            }
        }
        return null;
    }

    /**
    * Sets the templateType
    * Template type of the Enrollment Notification. Possible values are: email, push, unknownFutureValue.
    *
    * @param EnrollmentNotificationTemplateType $val The templateType
    *
    * @return DeviceEnrollmentNotificationConfiguration
    */
    public function setTemplateType($val)
    {
        $this->_propDict["templateType"] = $val;
        return $this;
    }

}
