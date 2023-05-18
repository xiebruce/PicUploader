<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Subscription File
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
* Subscription class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Subscription extends Entity
{
    /**
    * Gets the applicationId
    * Optional. Identifier of the application used to create the subscription. Read-only.
    *
    * @return string|null The applicationId
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
    * Optional. Identifier of the application used to create the subscription. Read-only.
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
    * Gets the changeType
    * Required. Indicates the type of change in the subscribed resource that will raise a change notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list. Note:  Drive root item and list change notifications support only the updated changeType. User and group change notifications support updated and deleted changeType. Use updated to receive notifications when user or group is created, updated or soft deleted.  Use deleted to receive notifications when user or group is permanently deleted.
    *
    * @return string|null The changeType
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
    * Required. Indicates the type of change in the subscribed resource that will raise a change notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list. Note:  Drive root item and list change notifications support only the updated changeType. User and group change notifications support updated and deleted changeType. Use updated to receive notifications when user or group is created, updated or soft deleted.  Use deleted to receive notifications when user or group is permanently deleted.
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
    * Required. Specifies the value of the clientState property sent by the service in each change notification. The maximum length is 255 characters. The client can check that the change notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each change notification.
    *
    * @return string|null The clientState
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
    * Required. Specifies the value of the clientState property sent by the service in each change notification. The maximum length is 255 characters. The client can check that the change notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each change notification.
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
    * Gets the creatorId
    * Optional. Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the ID of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the ID of the service principal corresponding to the app. Read-only.
    *
    * @return string|null The creatorId
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
    * Optional. Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the ID of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the ID of the service principal corresponding to the app. Read-only.
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

    /**
    * Gets the encryptionCertificate
    * Optional. A base64-encoded representation of a certificate with a public key used to encrypt resource data in change notifications. Optional but required when includeResourceData is true.
    *
    * @return string|null The encryptionCertificate
    */
    public function getEncryptionCertificate()
    {
        if (array_key_exists("encryptionCertificate", $this->_propDict)) {
            return $this->_propDict["encryptionCertificate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the encryptionCertificate
    * Optional. A base64-encoded representation of a certificate with a public key used to encrypt resource data in change notifications. Optional but required when includeResourceData is true.
    *
    * @param string $val The encryptionCertificate
    *
    * @return Subscription
    */
    public function setEncryptionCertificate($val)
    {
        $this->_propDict["encryptionCertificate"] = $val;
        return $this;
    }

    /**
    * Gets the encryptionCertificateId
    * Optional. A custom app-provided identifier to help identify the certificate needed to decrypt resource data. Required when includeResourceData is true.
    *
    * @return string|null The encryptionCertificateId
    */
    public function getEncryptionCertificateId()
    {
        if (array_key_exists("encryptionCertificateId", $this->_propDict)) {
            return $this->_propDict["encryptionCertificateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the encryptionCertificateId
    * Optional. A custom app-provided identifier to help identify the certificate needed to decrypt resource data. Required when includeResourceData is true.
    *
    * @param string $val The encryptionCertificateId
    *
    * @return Subscription
    */
    public function setEncryptionCertificateId($val)
    {
        $this->_propDict["encryptionCertificateId"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * Required. Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to. For the maximum supported subscription length of time, see the table below.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
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
    * Required. Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to. For the maximum supported subscription length of time, see the table below.
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
    * Gets the includeResourceData
    * Optional. When set to true, change notifications include resource data (such as content of a chat message).
    *
    * @return bool|null The includeResourceData
    */
    public function getIncludeResourceData()
    {
        if (array_key_exists("includeResourceData", $this->_propDict)) {
            return $this->_propDict["includeResourceData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeResourceData
    * Optional. When set to true, change notifications include resource data (such as content of a chat message).
    *
    * @param bool $val The includeResourceData
    *
    * @return Subscription
    */
    public function setIncludeResourceData($val)
    {
        $this->_propDict["includeResourceData"] = boolval($val);
        return $this;
    }

    /**
    * Gets the latestSupportedTlsVersion
    * Optional. Specifies the latest version of Transport Layer Security (TLS) that the notification endpoint, specified by notificationUrl, supports. The possible values are: v1_0, v1_1, v1_2, v1_3. For subscribers whose notification endpoint supports a version lower than the currently recommended version (TLS 1.2), specifying this property by a set timeline allows them to temporarily use their deprecated version of TLS before completing their upgrade to TLS 1.2. For these subscribers, not setting this property per the timeline would result in subscription operations failing. For subscribers whose notification endpoint already supports TLS 1.2, setting this property is optional. In such cases, Microsoft Graph defaults the property to v1_2.
    *
    * @return string|null The latestSupportedTlsVersion
    */
    public function getLatestSupportedTlsVersion()
    {
        if (array_key_exists("latestSupportedTlsVersion", $this->_propDict)) {
            return $this->_propDict["latestSupportedTlsVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the latestSupportedTlsVersion
    * Optional. Specifies the latest version of Transport Layer Security (TLS) that the notification endpoint, specified by notificationUrl, supports. The possible values are: v1_0, v1_1, v1_2, v1_3. For subscribers whose notification endpoint supports a version lower than the currently recommended version (TLS 1.2), specifying this property by a set timeline allows them to temporarily use their deprecated version of TLS before completing their upgrade to TLS 1.2. For these subscribers, not setting this property per the timeline would result in subscription operations failing. For subscribers whose notification endpoint already supports TLS 1.2, setting this property is optional. In such cases, Microsoft Graph defaults the property to v1_2.
    *
    * @param string $val The latestSupportedTlsVersion
    *
    * @return Subscription
    */
    public function setLatestSupportedTlsVersion($val)
    {
        $this->_propDict["latestSupportedTlsVersion"] = $val;
        return $this;
    }

    /**
    * Gets the lifecycleNotificationUrl
    * Optional. The URL of the endpoint that receives lifecycle notifications, including subscriptionRemoved, reauthorizationRequired, and missed notifications. This URL must make use of the HTTPS protocol.
    *
    * @return string|null The lifecycleNotificationUrl
    */
    public function getLifecycleNotificationUrl()
    {
        if (array_key_exists("lifecycleNotificationUrl", $this->_propDict)) {
            return $this->_propDict["lifecycleNotificationUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lifecycleNotificationUrl
    * Optional. The URL of the endpoint that receives lifecycle notifications, including subscriptionRemoved, reauthorizationRequired, and missed notifications. This URL must make use of the HTTPS protocol.
    *
    * @param string $val The lifecycleNotificationUrl
    *
    * @return Subscription
    */
    public function setLifecycleNotificationUrl($val)
    {
        $this->_propDict["lifecycleNotificationUrl"] = $val;
        return $this;
    }

    /**
    * Gets the notificationContentType
    * Optional. Desired content-type for Microsoft Graph change notifications for supported resource types. The default content-type is application/json.
    *
    * @return string|null The notificationContentType
    */
    public function getNotificationContentType()
    {
        if (array_key_exists("notificationContentType", $this->_propDict)) {
            return $this->_propDict["notificationContentType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationContentType
    * Optional. Desired content-type for Microsoft Graph change notifications for supported resource types. The default content-type is application/json.
    *
    * @param string $val The notificationContentType
    *
    * @return Subscription
    */
    public function setNotificationContentType($val)
    {
        $this->_propDict["notificationContentType"] = $val;
        return $this;
    }

    /**
    * Gets the notificationQueryOptions
    * Optional.  OData query options for specifying the value for the targeting resource. Clients receive notifications when the resource reaches the state matching the query options provided here. With this new property in the subscription creation payload along with all existing properties, Webhooks will deliver notifications whenever a resource reaches the desired state mentioned in the notificationQueryOptions property. For example, when the print job is completed or when a print job resource isFetchable property value becomes true etc.  Supported only for Universal Print Service. For more information, see Subscribe to change notifications from cloud printing APIs using Microsoft Graph.
    *
    * @return string|null The notificationQueryOptions
    */
    public function getNotificationQueryOptions()
    {
        if (array_key_exists("notificationQueryOptions", $this->_propDict)) {
            return $this->_propDict["notificationQueryOptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationQueryOptions
    * Optional.  OData query options for specifying the value for the targeting resource. Clients receive notifications when the resource reaches the state matching the query options provided here. With this new property in the subscription creation payload along with all existing properties, Webhooks will deliver notifications whenever a resource reaches the desired state mentioned in the notificationQueryOptions property. For example, when the print job is completed or when a print job resource isFetchable property value becomes true etc.  Supported only for Universal Print Service. For more information, see Subscribe to change notifications from cloud printing APIs using Microsoft Graph.
    *
    * @param string $val The notificationQueryOptions
    *
    * @return Subscription
    */
    public function setNotificationQueryOptions($val)
    {
        $this->_propDict["notificationQueryOptions"] = $val;
        return $this;
    }

    /**
    * Gets the notificationUrl
    * Required. The URL of the endpoint that receives the change notifications. This URL must make use of the HTTPS protocol. Any query string parameter included in the notificationUrl property will be included in the HTTP POST request when Microsoft Graph sends the change notifications.
    *
    * @return string|null The notificationUrl
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
    * Required. The URL of the endpoint that receives the change notifications. This URL must make use of the HTTPS protocol. Any query string parameter included in the notificationUrl property will be included in the HTTP POST request when Microsoft Graph sends the change notifications.
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
    * Gets the notificationUrlAppId
    * Optional. The app ID that the subscription service can use to generate the validation token. This allows the client to validate the authenticity of the notification received.
    *
    * @return string|null The notificationUrlAppId
    */
    public function getNotificationUrlAppId()
    {
        if (array_key_exists("notificationUrlAppId", $this->_propDict)) {
            return $this->_propDict["notificationUrlAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationUrlAppId
    * Optional. The app ID that the subscription service can use to generate the validation token. This allows the client to validate the authenticity of the notification received.
    *
    * @param string $val The notificationUrlAppId
    *
    * @return Subscription
    */
    public function setNotificationUrlAppId($val)
    {
        $this->_propDict["notificationUrlAppId"] = $val;
        return $this;
    }

    /**
    * Gets the resource
    * Required. Specifies the resource that will be monitored for changes. Do not include the base URL (https://graph.microsoft.com/beta/). See the possible resource path values for each supported resource.
    *
    * @return string|null The resource
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
    * Required. Specifies the resource that will be monitored for changes. Do not include the base URL (https://graph.microsoft.com/beta/). See the possible resource path values for each supported resource.
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

}
