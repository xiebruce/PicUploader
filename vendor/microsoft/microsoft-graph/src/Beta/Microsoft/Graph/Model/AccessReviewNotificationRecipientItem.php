<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewNotificationRecipientItem File
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
* AccessReviewNotificationRecipientItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewNotificationRecipientItem extends Entity
{

    /**
    * Gets the notificationRecipientScope
    * Determines the recipient of the notification email.
    *
    * @return AccessReviewNotificationRecipientScope|null The notificationRecipientScope
    */
    public function getNotificationRecipientScope()
    {
        if (array_key_exists("notificationRecipientScope", $this->_propDict)) {
            if (is_a($this->_propDict["notificationRecipientScope"], "\Beta\Microsoft\Graph\Model\AccessReviewNotificationRecipientScope") || is_null($this->_propDict["notificationRecipientScope"])) {
                return $this->_propDict["notificationRecipientScope"];
            } else {
                $this->_propDict["notificationRecipientScope"] = new AccessReviewNotificationRecipientScope($this->_propDict["notificationRecipientScope"]);
                return $this->_propDict["notificationRecipientScope"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationRecipientScope
    * Determines the recipient of the notification email.
    *
    * @param AccessReviewNotificationRecipientScope $val The value to assign to the notificationRecipientScope
    *
    * @return AccessReviewNotificationRecipientItem The AccessReviewNotificationRecipientItem
    */
    public function setNotificationRecipientScope($val)
    {
        $this->_propDict["notificationRecipientScope"] = $val;
         return $this;
    }
    /**
    * Gets the notificationTemplateType
    * Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients which sends review completion notifications to the recipients.
    *
    * @return string|null The notificationTemplateType
    */
    public function getNotificationTemplateType()
    {
        if (array_key_exists("notificationTemplateType", $this->_propDict)) {
            return $this->_propDict["notificationTemplateType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationTemplateType
    * Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients which sends review completion notifications to the recipients.
    *
    * @param string $val The value of the notificationTemplateType
    *
    * @return AccessReviewNotificationRecipientItem
    */
    public function setNotificationTemplateType($val)
    {
        $this->_propDict["notificationTemplateType"] = $val;
        return $this;
    }
}
