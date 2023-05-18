<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerRuleKind File
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
* PlannerRuleKind class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerRuleKind extends Enum
{
    /**
    * The Enum PlannerRuleKind
    */
    const TASK_RULE = "taskRule";
    const BUCKET_RULE = "bucketRule";
    const PLAN_RULE = "planRule";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
