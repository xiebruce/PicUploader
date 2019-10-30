<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSubscriptionState File
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

use Microsoft\Graph\Core\Enum;

/**
* DeviceManagementSubscriptionState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementSubscriptionState extends Enum
{
    /**
    * The Enum DeviceManagementSubscriptionState
    */
    const PENDING = "pending";
    const ACTIVE = "active";
    const WARNING = "warning";
    const DISABLED = "disabled";
    const DELETED = "deleted";
    const BLOCKED = "blocked";
    const LOCKED_OUT = "lockedOut";
}