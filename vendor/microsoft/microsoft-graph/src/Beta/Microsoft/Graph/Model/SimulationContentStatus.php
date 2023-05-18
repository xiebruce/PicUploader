<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationContentStatus File
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
* SimulationContentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationContentStatus extends Enum
{
    /**
    * The Enum SimulationContentStatus
    */
    const UNKNOWN = "unknown";
    const DRAFT = "draft";
    const READY = "ready";
    const ARCHIVE = "archive";
    const DELETE = "delete";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
