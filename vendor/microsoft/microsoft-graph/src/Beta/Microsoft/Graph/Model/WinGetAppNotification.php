<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WinGetAppNotification File
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
* WinGetAppNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WinGetAppNotification extends Enum
{
    /**
    * The Enum WinGetAppNotification
    */
    const SHOW_ALL = "showAll";
    const SHOW_REBOOT = "showReboot";
    const HIDE_ALL = "hideAll";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
