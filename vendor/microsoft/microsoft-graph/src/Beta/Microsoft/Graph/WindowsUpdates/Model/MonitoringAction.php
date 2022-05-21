<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MonitoringAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

use Microsoft\Graph\Core\Enum;

/**
* MonitoringAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MonitoringAction extends Enum
{
    /**
    * The Enum MonitoringAction
    */
    const ALERT_ERROR = "alertError";
    const PAUSE_DEPLOYMENT = "pauseDeployment";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
