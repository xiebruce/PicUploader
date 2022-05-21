<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementParameterValueType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

use Microsoft\Graph\Core\Enum;

/**
* ManagementParameterValueType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementParameterValueType extends Enum
{
    /**
    * The Enum ManagementParameterValueType
    */
    const GRAPHSTRING = "string";
    const INTEGER = "integer";
    const BOOLEAN = "boolean";
    const GUID = "guid";
    const STRING_COLLECTION = "stringCollection";
    const INTEGER_COLLECTION = "integerCollection";
    const BOOLEAN_COLLECTION = "booleanCollection";
    const GUID_COLLECTION = "guidCollection";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
