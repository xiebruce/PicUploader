<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkSupportedClient File
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
* TeamworkSupportedClient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkSupportedClient extends Enum
{
    /**
    * The Enum TeamworkSupportedClient
    */
    const UNKNOWN = "unknown";
    const SKYPE_DEFAULT_AND_TEAMS = "skypeDefaultAndTeams";
    const TEAMS_DEFAULT_AND_SKYPE = "teamsDefaultAndSkype";
    const SKYPE_ONLY = "skypeOnly";
    const TEAMS_ONLY = "teamsOnly";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
