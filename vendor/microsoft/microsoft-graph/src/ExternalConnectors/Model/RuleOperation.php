<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RuleOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\ExternalConnectors\Model;

use Microsoft\Graph\Core\Enum;

/**
* RuleOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RuleOperation extends Enum
{
    /**
    * The Enum RuleOperation
    */
    const GRAPHNULL = "null";
    const EQUALS = "equals";
    const NOT_EQUALS = "notEquals";
    const CONTAINS = "contains";
    const NOT_CONTAINS = "notContains";
    const LESS_THAN = "lessThan";
    const GREATER_THAN = "greaterThan";
    const STARTS_WITH = "startsWith";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
