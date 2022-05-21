<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDeviceType File
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
* TeamworkDeviceType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDeviceType extends Enum
{
    /**
    * The Enum TeamworkDeviceType
    */
    const UNKNOWN = "unknown";
    const IP_PHONE = "ipPhone";
    const TEAMS_ROOM = "teamsRoom";
    const SURFACE_HUB = "surfaceHub";
    const COLLABORATION_BAR = "collaborationBar";
    const TEAMS_DISPLAY = "teamsDisplay";
    const TOUCH_CONSOLE = "touchConsole";
    const LOW_COST_PHONE = "lowCostPhone";
    const TEAMS_PANEL = "teamsPanel";
    const SIP = "sip";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
