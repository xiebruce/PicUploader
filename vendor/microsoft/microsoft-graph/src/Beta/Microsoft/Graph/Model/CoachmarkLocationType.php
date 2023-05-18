<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CoachmarkLocationType File
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
* CoachmarkLocationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CoachmarkLocationType extends Enum
{
    /**
    * The Enum CoachmarkLocationType
    */
    const UNKNOWN = "unknown";
    const FROM_EMAIL = "fromEmail";
    const SUBJECT = "subject";
    const EXTERNAL_TAG = "externalTag";
    const DISPLAY_NAME = "displayName";
    const MESSAGE_BODY = "messageBody";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
