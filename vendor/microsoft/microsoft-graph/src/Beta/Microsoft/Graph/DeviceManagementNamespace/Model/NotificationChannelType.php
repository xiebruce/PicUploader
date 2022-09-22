<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationChannelType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* NotificationChannelType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NotificationChannelType extends Enum
{
    /**
    * The Enum NotificationChannelType
    */
    const PORTAL = "portal";
    const EMAIL = "email";
    const PHONE_CALL = "phoneCall";
    const SMS = "sms";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
