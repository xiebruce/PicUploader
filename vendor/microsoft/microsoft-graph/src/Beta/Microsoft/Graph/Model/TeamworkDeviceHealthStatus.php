<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDeviceHealthStatus File
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
* TeamworkDeviceHealthStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDeviceHealthStatus extends Enum
{
    /**
    * The Enum TeamworkDeviceHealthStatus
    */
    const UNKNOWN = "unknown";
    const OFFLINE = "offline";
    const CRITICAL = "critical";
    const NON_URGENT = "nonUrgent";
    const HEALTHY = "healthy";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
