<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationStatus File
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
* SimulationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationStatus extends Enum
{
    /**
    * The Enum SimulationStatus
    */
    const UNKNOWN = "unknown";
    const DRAFT = "draft";
    const RUNNING = "running";
    const SCHEDULED = "scheduled";
    const SUCCEEDED = "succeeded";
    const FAILED = "failed";
    const CANCELLED = "cancelled";
    const EXCLUDED = "excluded";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
