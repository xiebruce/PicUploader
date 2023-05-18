<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationReceiver File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;
/**
* NotificationReceiver class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NotificationReceiver extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the contactInformation
    * The contact information about the notification receivers, such as an email address. Currently, only email and portal notifications are supported. For portal notifications, contactInformation can be left blank. For email notifications, contactInformation consists of an email address such as serena.davis@contoso.com.
    *
    * @return string|null The contactInformation
    */
    public function getContactInformation()
    {
        if (array_key_exists("contactInformation", $this->_propDict)) {
            return $this->_propDict["contactInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactInformation
    * The contact information about the notification receivers, such as an email address. Currently, only email and portal notifications are supported. For portal notifications, contactInformation can be left blank. For email notifications, contactInformation consists of an email address such as serena.davis@contoso.com.
    *
    * @param string $val The value of the contactInformation
    *
    * @return NotificationReceiver
    */
    public function setContactInformation($val)
    {
        $this->_propDict["contactInformation"] = $val;
        return $this;
    }
    /**
    * Gets the locale
    * Defines the language and format in which the notification will be sent. Supported locale values are: en-us, cs-cz, de-de, es-es, fr-fr, hu-hu, it-it, ja-jp, ko-kr, nl-nl, pl-pl, pt-br, pt-pt, ru-ru, sv-se, tr-tr, zh-cn, zh-tw.
    *
    * @return string|null The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locale
    * Defines the language and format in which the notification will be sent. Supported locale values are: en-us, cs-cz, de-de, es-es, fr-fr, hu-hu, it-it, ja-jp, ko-kr, nl-nl, pl-pl, pt-br, pt-pt, ru-ru, sv-se, tr-tr, zh-cn, zh-tw.
    *
    * @param string $val The value of the locale
    *
    * @return NotificationReceiver
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }
}
