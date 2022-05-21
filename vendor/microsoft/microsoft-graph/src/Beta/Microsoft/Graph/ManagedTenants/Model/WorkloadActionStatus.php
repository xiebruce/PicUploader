<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkloadActionStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

use Microsoft\Graph\Core\Enum;

/**
* WorkloadActionStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkloadActionStatus extends Enum
{
    /**
    * The Enum WorkloadActionStatus
    */
    const TO_ADDRESS = "toAddress";
    const COMPLETED = "completed";
    const ERROR = "error";
    const TIME_OUT = "timeOut";
    const IN_PROGRESS = "inProgress";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
