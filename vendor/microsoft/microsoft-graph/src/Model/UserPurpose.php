<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPurpose File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* UserPurpose class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserPurpose extends Enum
{
    /**
    * The Enum UserPurpose
    */
    const USER = "user";
    const LINKED = "linked";
    const SHARED = "shared";
    const ROOM = "room";
    const EQUIPMENT = "equipment";
    const OTHERS = "others";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
