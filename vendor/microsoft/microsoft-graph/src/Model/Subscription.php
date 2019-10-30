<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Subscription File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Subscription class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Subscription extends Entity
{
    /**
    * Gets the resource
    * Required. Specifies the resource that will be monitored for changes. Do not include the base URL (https://graph.microsoft.com/v1.0/).
    *
    * @return string The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            return $this->_propDict["resource"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resource
    * Required. Specifies the resource that will be monitored for changes. Do not include the base URL (https://graph.microsoft.com/v1.0/).
    *
    * @param string $val The resource
    *
    * @return Subscription
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the changeType
    * Required. Indicates the type of change in the subscribed resource that will raise a notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list.Note: Drive root item notifications support only the updated changeType. User and group notifications support updated and deleted changeType.
    *
    * @return string The changeType
    */
    public function getChangeType()
    {
        if (array_key_exists("changeType", $this->_propDict)) {
            return $this->_propDict["changeType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the changeType
    * Required. Indicates the type of change in the subscribed resource that will raise a notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list.Note: Drive root item notifications support only the updated changeType. User and group notifications support updated and deleted changeType.
    *
    * @param string $val The changeType
    *
    * @return Subscription
    */
    public function setChangeType($val)
    {
        $this->_propDict["changeType"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientState
    * Optional. Specifies the value of the clientState property sent by the service in each notification. The maximum length is 128 characters. The client can check that the notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each notification.
    *
    * @return string The clientState
    */
    public function getClientState()
    {
        if (array_key_exists("clientState", $this->_propDict)) {
            return $this->_propDict["clientState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientState
    * Optional. Specifies the value of the clientState property sent by the service in each notification. The maximum length is 128 characters. The client can check that the notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each notification.
    *
    * @param string $val The clientState
    *
    * @return Subscription
    */
    public function setClientState($val)
    {
        $this->_propDict["clientState"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationUrl
    * Required. The URL of the endpoint that will receive the notifications. This URL must make use of the HTTPS protocol.
    *
    * @return string The notificationUrl
    */
    public function getNotificationUrl()
    {
        if (array_key_exists("notificationUrl", $this->_propDict)) {
            return $this->_propDict["notificationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationUrl
    * Required. The URL of the endpoint that will receive the notifications. This URL must make use of the HTTPS protocol.
    *
    * @param string $val The notificationUrl
    *
    * @return Subscription
    */
    public function setNotificationUrl($val)
    {
        $this->_propDict["notificationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * Required. Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to.  See the table below for maximum supported subscription length of time.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
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
    * Required. Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to.  See the table below for maximum supported subscription length of time.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Subscription
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationId
    * Identifier of the application used to create the subscription. Read-only.
    *
    * @return string The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationId
    * Identifier of the application used to create the subscription. Read-only.
    *
    * @param string $val The applicationId
    *
    * @return Subscription
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the creatorId
    * Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the id of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the id of the service principal corresponding to the app. Read-only.
    *
    * @return string The creatorId
    */
    public function getCreatorId()
    {
        if (array_key_exists("creatorId", $this->_propDict)) {
            return $this->_propDict["creatorId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the creatorId
    * Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the id of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the id of the service principal corresponding to the app. Read-only.
    *
    * @param string $val The creatorId
    *
    * @return Subscription
    */
    public function setCreatorId($val)
    {
        $this->_propDict["creatorId"] = $val;
        return $this;
    }
    
}