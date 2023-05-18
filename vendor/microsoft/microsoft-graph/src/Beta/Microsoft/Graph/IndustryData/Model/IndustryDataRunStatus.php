<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataRunStatus File
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
* IndustryDataRunStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataRunStatus extends Enum
{
    /**
    * The Enum IndustryDataRunStatus
    */
    const RUNNING = "running";
    const FAILED = "failed";
    const COMPLETED = "completed";
    const COMPLETED_WITH_ERRORS = "completedWithErrors";
    const COMPLETED_WITH_WARNINGS = "completedWithWarnings";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
