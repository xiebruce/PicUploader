<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageCustomExtensionHandlerStatus File
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
* AccessPackageCustomExtensionHandlerStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageCustomExtensionHandlerStatus extends Enum
{
    /**
    * The Enum AccessPackageCustomExtensionHandlerStatus
    */
    const REQUEST_SENT = "requestSent";
    const REQUEST_RECEIVED = "requestReceived";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
