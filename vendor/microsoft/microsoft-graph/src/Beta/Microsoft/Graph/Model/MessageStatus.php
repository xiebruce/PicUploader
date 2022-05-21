<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageStatus File
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
* MessageStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageStatus extends Enum
{
    /**
    * The Enum MessageStatus
    */
    const GETTING_STATUS = "gettingStatus";
    const PENDING = "pending";
    const FAILED = "failed";
    const DELIVERED = "delivered";
    const EXPANDED = "expanded";
    const QUARANTINED = "quarantined";
    const FILTERED_AS_SPAM = "filteredAsSpam";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
