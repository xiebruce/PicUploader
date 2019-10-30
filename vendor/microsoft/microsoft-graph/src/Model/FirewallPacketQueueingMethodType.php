<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FirewallPacketQueueingMethodType File
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
* FirewallPacketQueueingMethodType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FirewallPacketQueueingMethodType extends Enum
{
    /**
    * The Enum FirewallPacketQueueingMethodType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const DISABLED = "disabled";
    const QUEUE_INBOUND = "queueInbound";
    const QUEUE_OUTBOUND = "queueOutbound";
    const QUEUE_BOTH = "queueBoth";
}