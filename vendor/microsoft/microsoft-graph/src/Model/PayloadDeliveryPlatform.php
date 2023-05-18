<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PayloadDeliveryPlatform File
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
* PayloadDeliveryPlatform class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PayloadDeliveryPlatform extends Enum
{
    /**
    * The Enum PayloadDeliveryPlatform
    */
    const UNKNOWN = "unknown";
    const SMS = "sms";
    const EMAIL = "email";
    const TEAMS = "teams";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
