<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationAutomationStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* SimulationAutomationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationAutomationStatus extends Enum
{
    /**
    * The Enum SimulationAutomationStatus
    */
    const UNKNOWN = "unknown";
    const DRAFT = "draft";
    const NOT_RUNNING = "notRunning";
    const RUNNING = "running";
    const COMPLETED = "completed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
