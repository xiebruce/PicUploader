<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionCalloutInstanceStatus File
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
* CustomExtensionCalloutInstanceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionCalloutInstanceStatus extends Enum
{
    /**
    * The Enum CustomExtensionCalloutInstanceStatus
    */
    const CALLOUT_SENT = "calloutSent";
    const CALLBACK_RECEIVED = "callbackReceived";
    const CALLOUT_FAILED = "calloutFailed";
    const CALLBACK_TIMED_OUT = "callbackTimedOut";
    const WAITING_FOR_CALLBACK = "waitingForCallback";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
