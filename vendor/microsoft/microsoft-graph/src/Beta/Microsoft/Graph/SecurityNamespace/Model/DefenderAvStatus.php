<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderAvStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* DefenderAvStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderAvStatus extends Enum
{
    /**
    * The Enum DefenderAvStatus
    */
    const NOT_REPORTING = "notReporting";
    const DISABLED = "disabled";
    const NOT_UPDATED = "notUpdated";
    const UPDATED = "updated";
    const UNKNOWN = "unknown";
    const NOT_SUPPORTED = "notSupported";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
