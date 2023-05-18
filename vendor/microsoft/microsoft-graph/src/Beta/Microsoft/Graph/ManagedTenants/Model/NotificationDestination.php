<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationDestination File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

use Microsoft\Graph\Core\Enum;

/**
* NotificationDestination class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NotificationDestination extends Enum
{
    /**
    * The Enum NotificationDestination
    */
    const NONE = "none";
    const API = "api";
    const EMAIL = "email";
    const SMS = "sms";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
