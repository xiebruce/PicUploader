<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcConnectivityEventType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* CloudPcConnectivityEventType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcConnectivityEventType extends Enum
{
    /**
    * The Enum CloudPcConnectivityEventType
    */
    const UNKNOWN = "unknown";
    const USER_CONNECTION = "userConnection";
    const USER_TROUBLESHOOTING = "userTroubleshooting";
    const DEVICE_HEALTH_CHECK = "deviceHealthCheck";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
