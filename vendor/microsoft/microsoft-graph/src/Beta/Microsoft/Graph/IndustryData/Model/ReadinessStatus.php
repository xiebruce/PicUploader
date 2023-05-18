<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReadinessStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

use Microsoft\Graph\Core\Enum;

/**
* ReadinessStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReadinessStatus extends Enum
{
    /**
    * The Enum ReadinessStatus
    */
    const NOT_READY = "notReady";
    const READY = "ready";
    const FAILED = "failed";
    const DISABLED = "disabled";
    const EXPIRED = "expired";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
