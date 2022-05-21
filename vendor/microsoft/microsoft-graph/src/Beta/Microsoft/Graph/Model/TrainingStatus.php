<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingStatus File
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
* TrainingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingStatus extends Enum
{
    /**
    * The Enum TrainingStatus
    */
    const UNKNOWN = "unknown";
    const ASSIGNED = "assigned";
    const IN_PROGRESS = "inProgress";
    const COMPLETED = "completed";
    const OVERDUE = "overdue";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
