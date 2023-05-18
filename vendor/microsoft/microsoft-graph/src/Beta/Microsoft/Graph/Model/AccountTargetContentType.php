<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccountTargetContentType File
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
* AccountTargetContentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccountTargetContentType extends Enum
{
    /**
    * The Enum AccountTargetContentType
    */
    const UNKNOWN = "unknown";
    const INCLUDE_ALL = "includeAll";
    const ADDRESS_BOOK = "addressBook";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
