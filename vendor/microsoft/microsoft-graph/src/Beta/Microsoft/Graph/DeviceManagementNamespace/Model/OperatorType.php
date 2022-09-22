<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OperatorType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* OperatorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OperatorType extends Enum
{
    /**
    * The Enum OperatorType
    */
    const GREATER_OR_EQUAL = "greaterOrEqual";
    const EQUAL = "equal";
    const GREATER = "greater";
    const LESS = "less";
    const LESS_OR_EQUAL = "lessOrEqual";
    const NOT_EQUAL = "notEqual";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
