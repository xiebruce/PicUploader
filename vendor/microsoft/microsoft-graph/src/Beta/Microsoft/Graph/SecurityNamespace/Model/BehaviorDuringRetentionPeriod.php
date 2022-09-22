<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BehaviorDuringRetentionPeriod File
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
* BehaviorDuringRetentionPeriod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BehaviorDuringRetentionPeriod extends Enum
{
    /**
    * The Enum BehaviorDuringRetentionPeriod
    */
    const DO_NOT_RETAIN = "doNotRetain";
    const RETAIN = "retain";
    const RETAIN_AS_RECORD = "retainAsRecord";
    const RETAIN_AS_REGULATORY_RECORD = "retainAsRegulatoryRecord";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
