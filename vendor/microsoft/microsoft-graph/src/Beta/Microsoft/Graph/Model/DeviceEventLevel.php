<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEventLevel File
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
* DeviceEventLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEventLevel extends Enum
{
    /**
    * The Enum DeviceEventLevel
    */
    const NONE = "none";
    const VERBOSE = "verbose";
    const INFORMATION = "information";
    const WARNING = "warning";
    const ERROR = "error";
    const CRITICAL = "critical";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
