<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationAppPolicyStatus File
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
* AuthenticationAppPolicyStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationAppPolicyStatus extends Enum
{
    /**
    * The Enum AuthenticationAppPolicyStatus
    */
    const UNKNOWN = "unknown";
    const APP_LOCK_OUT_OF_DATE = "appLockOutOfDate";
    const APP_LOCK_ENABLED = "appLockEnabled";
    const APP_LOCK_DISABLED = "appLockDisabled";
    const APP_CONTEXT_OUT_OF_DATE = "appContextOutOfDate";
    const APP_CONTEXT_SHOWN = "appContextShown";
    const APP_CONTEXT_NOT_SHOWN = "appContextNotShown";
    const LOCATION_CONTEXT_OUT_OF_DATE = "locationContextOutOfDate";
    const LOCATION_CONTEXT_SHOWN = "locationContextShown";
    const LOCATION_CONTEXT_NOT_SHOWN = "locationContextNotShown";
    const NUMBER_MATCH_OUT_OF_DATE = "numberMatchOutOfDate";
    const NUMBER_MATCH_CORRECT_NUMBER_ENTERED = "numberMatchCorrectNumberEntered";
    const NUMBER_MATCH_INCORRECT_NUMBER_ENTERED = "numberMatchIncorrectNumberEntered";
    const NUMBER_MATCH_DENY = "numberMatchDeny";
    const TAMPER_RESISTANT_HARDWARE_OUT_OF_DATE = "tamperResistantHardwareOutOfDate";
    const TAMPER_RESISTANT_HARDWARE_USED = "tamperResistantHardwareUsed";
    const TAMPER_RESISTANT_HARDWARE_NOT_USED = "tamperResistantHardwareNotUsed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
