<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterOperator File
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
* AssignmentFilterOperator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterOperator extends Enum
{
    /**
    * The Enum AssignmentFilterOperator
    */
    const NOT_SET = "notSet";
    const EQUALS = "equals";
    const NOT_EQUALS = "notEquals";
    const STARTS_WITH = "startsWith";
    const NOT_STARTS_WITH = "notStartsWith";
    const CONTAINS = "contains";
    const NOT_CONTAINS = "notContains";
    const IN = "in";
    const NOT_IN = "notIn";
    const ENDS_WITH = "endsWith";
    const NOT_ENDS_WITH = "notEndsWith";
}
