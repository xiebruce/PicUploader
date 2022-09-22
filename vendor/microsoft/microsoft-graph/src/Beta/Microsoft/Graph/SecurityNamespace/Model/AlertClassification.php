<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertClassification File
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
* AlertClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertClassification extends Enum
{
    /**
    * The Enum AlertClassification
    */
    const UNKNOWN = "unknown";
    const FALSE_POSITIVE = "falsePositive";
    const TRUE_POSITIVE = "truePositive";
    const INFORMATIONAL_EXPECTED_ACTIVITY = "informationalExpectedActivity";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
