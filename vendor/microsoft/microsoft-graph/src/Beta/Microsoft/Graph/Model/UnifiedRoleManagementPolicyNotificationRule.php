<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyNotificationRule File
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
* UnifiedRoleManagementPolicyNotificationRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyNotificationRule extends UnifiedRoleManagementPolicyRule
{
    /**
    * Gets the isDefaultRecipientsEnabled
    * Indicates whether a default recipient will receive the notification email.
    *
    * @return bool|null The isDefaultRecipientsEnabled
    */
    public function getIsDefaultRecipientsEnabled()
    {
        if (array_key_exists("isDefaultRecipientsEnabled", $this->_propDict)) {
            return $this->_propDict["isDefaultRecipientsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefaultRecipientsEnabled
    * Indicates whether a default recipient will receive the notification email.
    *
    * @param bool $val The isDefaultRecipientsEnabled
    *
    * @return UnifiedRoleManagementPolicyNotificationRule
    */
    public function setIsDefaultRecipientsEnabled($val)
    {
        $this->_propDict["isDefaultRecipientsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the notificationLevel
    * The level of notification. The possible values are None, Critical, All.
    *
    * @return string|null The notificationLevel
    */
    public function getNotificationLevel()
    {
        if (array_key_exists("notificationLevel", $this->_propDict)) {
            return $this->_propDict["notificationLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationLevel
    * The level of notification. The possible values are None, Critical, All.
    *
    * @param string $val The notificationLevel
    *
    * @return UnifiedRoleManagementPolicyNotificationRule
    */
    public function setNotificationLevel($val)
    {
        $this->_propDict["notificationLevel"] = $val;
        return $this;
    }

    /**
    * Gets the notificationRecipients
    * The list of recipients of the email notifications.
    *
    * @return string|null The notificationRecipients
    */
    public function getNotificationRecipients()
    {
        if (array_key_exists("notificationRecipients", $this->_propDict)) {
            return $this->_propDict["notificationRecipients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationRecipients
    * The list of recipients of the email notifications.
    *
    * @param string $val The notificationRecipients
    *
    * @return UnifiedRoleManagementPolicyNotificationRule
    */
    public function setNotificationRecipients($val)
    {
        $this->_propDict["notificationRecipients"] = $val;
        return $this;
    }

    /**
    * Gets the notificationType
    * The type of notification. Only Email is supported.
    *
    * @return string|null The notificationType
    */
    public function getNotificationType()
    {
        if (array_key_exists("notificationType", $this->_propDict)) {
            return $this->_propDict["notificationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationType
    * The type of notification. Only Email is supported.
    *
    * @param string $val The notificationType
    *
    * @return UnifiedRoleManagementPolicyNotificationRule
    */
    public function setNotificationType($val)
    {
        $this->_propDict["notificationType"] = $val;
        return $this;
    }

    /**
    * Gets the recipientType
    * The type of recipient of the notification. The possible values are Requestor, Approver, Admin.
    *
    * @return string|null The recipientType
    */
    public function getRecipientType()
    {
        if (array_key_exists("recipientType", $this->_propDict)) {
            return $this->_propDict["recipientType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recipientType
    * The type of recipient of the notification. The possible values are Requestor, Approver, Admin.
    *
    * @param string $val The recipientType
    *
    * @return UnifiedRoleManagementPolicyNotificationRule
    */
    public function setRecipientType($val)
    {
        $this->_propDict["recipientType"] = $val;
        return $this;
    }

}
