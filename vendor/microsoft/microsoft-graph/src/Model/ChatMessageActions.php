<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageActions File
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
* ChatMessageActions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageActions extends Enum
{
    /**
    * The Enum ChatMessageActions
    */
    const REACTION_ADDED = "reactionAdded";
    const REACTION_REMOVED = "reactionRemoved";
    const ACTION_UNDEFINED = "actionUndefined";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
