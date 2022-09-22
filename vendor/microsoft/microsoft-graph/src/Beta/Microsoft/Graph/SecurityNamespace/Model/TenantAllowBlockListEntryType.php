<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantAllowBlockListEntryType File
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
* TenantAllowBlockListEntryType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantAllowBlockListEntryType extends Enum
{
    /**
    * The Enum TenantAllowBlockListEntryType
    */
    const URL = "url";
    const FILE_HASH = "fileHash";
    const SENDER = "sender";
    const RECIPIENT = "recipient";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
