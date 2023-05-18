<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataActivityStatus File
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
* IndustryDataActivityStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataActivityStatus extends Enum
{
    /**
    * The Enum IndustryDataActivityStatus
    */
    const IN_PROGRESS = "inProgress";
    const SKIPPED = "skipped";
    const FAILED = "failed";
    const COMPLETED = "completed";
    const COMPLETED_WITH_ERRORS = "completedWithErrors";
    const COMPLETED_WITH_WARNINGS = "completedWithWarnings";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
