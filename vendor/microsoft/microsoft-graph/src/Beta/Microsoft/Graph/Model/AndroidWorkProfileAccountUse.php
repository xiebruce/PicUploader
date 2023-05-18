<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileAccountUse File
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
* AndroidWorkProfileAccountUse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileAccountUse extends Enum
{
    /**
    * The Enum AndroidWorkProfileAccountUse
    */
    const ALLOW_ALL_EXCEPT_GOOGLE_ACCOUNTS = "allowAllExceptGoogleAccounts";
    const BLOCK_ALL = "blockAll";
    const ALLOW_ALL = "allowAll";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
