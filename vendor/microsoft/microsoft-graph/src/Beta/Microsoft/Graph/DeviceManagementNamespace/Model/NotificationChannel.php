<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationChannel File
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
* NotificationChannel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NotificationChannel extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the notificationChannelType
    * The type of the notification channel. The possible values are: portal, email, phoneCall, sms, unknownFutureValue.
    *
    * @return NotificationChannelType|null The notificationChannelType
    */
    public function getNotificationChannelType()
    {
        if (array_key_exists("notificationChannelType", $this->_propDict)) {
            if (is_a($this->_propDict["notificationChannelType"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\NotificationChannelType") || is_null($this->_propDict["notificationChannelType"])) {
                return $this->_propDict["notificationChannelType"];
            } else {
                $this->_propDict["notificationChannelType"] = new NotificationChannelType($this->_propDict["notificationChannelType"]);
                return $this->_propDict["notificationChannelType"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationChannelType
    * The type of the notification channel. The possible values are: portal, email, phoneCall, sms, unknownFutureValue.
    *
    * @param NotificationChannelType $val The value to assign to the notificationChannelType
    *
    * @return NotificationChannel The NotificationChannel
    */
    public function setNotificationChannelType($val)
    {
        $this->_propDict["notificationChannelType"] = $val;
         return $this;
    }

    /**
    * Gets the notificationReceivers
    * Information about the notification receivers, such as locale and contact information. For example, en-us for locale and serena.davis@contoso.com for contact information.
    *
    * @return NotificationReceiver|null The notificationReceivers
    */
    public function getNotificationReceivers()
    {
        if (array_key_exists("notificationReceivers", $this->_propDict)) {
            if (is_a($this->_propDict["notificationReceivers"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\NotificationReceiver") || is_null($this->_propDict["notificationReceivers"])) {
                return $this->_propDict["notificationReceivers"];
            } else {
                $this->_propDict["notificationReceivers"] = new NotificationReceiver($this->_propDict["notificationReceivers"]);
                return $this->_propDict["notificationReceivers"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationReceivers
    * Information about the notification receivers, such as locale and contact information. For example, en-us for locale and serena.davis@contoso.com for contact information.
    *
    * @param NotificationReceiver $val The value to assign to the notificationReceivers
    *
    * @return NotificationChannel The NotificationChannel
    */
    public function setNotificationReceivers($val)
    {
        $this->_propDict["notificationReceivers"] = $val;
         return $this;
    }
    /**
    * Gets the receivers
    * The contact information about the notification receivers, such as email addresses. For portal notifications, receivers can be left blank. For email notifications, receivers consists of email addresses such as serena.davis@contoso.com.
    *
    * @return string|null The receivers
    */
    public function getReceivers()
    {
        if (array_key_exists("receivers", $this->_propDict)) {
            return $this->_propDict["receivers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the receivers
    * The contact information about the notification receivers, such as email addresses. For portal notifications, receivers can be left blank. For email notifications, receivers consists of email addresses such as serena.davis@contoso.com.
    *
    * @param string $val The value of the receivers
    *
    * @return NotificationChannel
    */
    public function setReceivers($val)
    {
        $this->_propDict["receivers"] = $val;
        return $this;
    }
}
