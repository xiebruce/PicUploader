<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnlineMeetingContentSharingDisabledReason File
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
* OnlineMeetingContentSharingDisabledReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnlineMeetingContentSharingDisabledReason extends Enum
{
    /**
    * The Enum OnlineMeetingContentSharingDisabledReason
    */
    const WATERMARK_PROTECTION = "watermarkProtection";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
