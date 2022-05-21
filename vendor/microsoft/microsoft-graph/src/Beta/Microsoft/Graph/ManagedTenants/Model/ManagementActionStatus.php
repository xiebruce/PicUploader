<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementActionStatus File
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
* ManagementActionStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementActionStatus extends Enum
{
    /**
    * The Enum ManagementActionStatus
    */
    const TO_ADDRESS = "toAddress";
    const COMPLETED = "completed";
    const ERROR = "error";
    const TIME_OUT = "timeOut";
    const IN_PROGRESS = "inProgress";
    const PLANNED = "planned";
    const RESOLVED_BY3RD_PARTY = "resolvedBy3rdParty";
    const RESOLVED_THROUGH_ALTERNATE_MITIGATION = "resolvedThroughAlternateMitigation";
    const RISK_ACCEPTED = "riskAccepted";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
