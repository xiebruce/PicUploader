<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CourseStatus File
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
* CourseStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CourseStatus extends Enum
{
    /**
    * The Enum CourseStatus
    */
    const NOT_STARTED = "notStarted";
    const IN_PROGRESS = "inProgress";
    const COMPLETED = "completed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
