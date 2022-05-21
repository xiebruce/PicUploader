<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDeviceOperationType File
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
* TeamworkDeviceOperationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDeviceOperationType extends Enum
{
    /**
    * The Enum TeamworkDeviceOperationType
    */
    const DEVICE_RESTART = "deviceRestart";
    const CONFIG_UPDATE = "configUpdate";
    const DEVICE_DIAGNOSTICS = "deviceDiagnostics";
    const SOFTWARE_UPDATE = "softwareUpdate";
    const DEVICE_MANAGEMENT_AGENT_CONFIG_UPDATE = "deviceManagementAgentConfigUpdate";
    const REMOTE_LOGIN = "remoteLogin";
    const REMOTE_LOGOUT = "remoteLogout";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
