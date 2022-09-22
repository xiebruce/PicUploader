<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ValueType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* ValueType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ValueType extends Enum
{
    /**
    * The Enum ValueType
    */
    const ENUM = "enum";
    const GRAPHSTRING = "string";
    const GRAPHINT = "int";
    const GRAPHBOOL = "bool";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
