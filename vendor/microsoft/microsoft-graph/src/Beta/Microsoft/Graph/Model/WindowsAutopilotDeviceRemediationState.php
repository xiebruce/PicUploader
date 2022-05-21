<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotDeviceRemediationState File
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
* WindowsAutopilotDeviceRemediationState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAutopilotDeviceRemediationState extends Enum
{
    /**
    * The Enum WindowsAutopilotDeviceRemediationState
    */
    const UNKNOWN = "unknown";
    const NO_REMEDIATION_REQUIRED = "noRemediationRequired";
    const AUTOMATIC_REMEDIATION_REQUIRED = "automaticRemediationRequired";
    const MANUAL_REMEDIATION_REQUIRED = "manualRemediationRequired";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
