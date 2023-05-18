<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceRemoteAction File
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
* ManagedDeviceRemoteAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceRemoteAction extends Enum
{
    /**
    * The Enum ManagedDeviceRemoteAction
    */
    const RETIRE = "retire";
    const DELETE = "delete";
    const FULL_SCAN = "fullScan";
    const QUICK_SCAN = "quickScan";
    const SIGNATURE_UPDATE = "signatureUpdate";
    const WIPE = "wipe";
    const CUSTOM_TEXT_NOTIFICATION = "customTextNotification";
    const REBOOT_NOW = "rebootNow";
    const SET_DEVICE_NAME = "setDeviceName";
    const SYNC_DEVICE = "syncDevice";
    const DEPROVISION = "deprovision";
    const DISABLE = "disable";
    const REENABLE = "reenable";
    const MOVE_DEVICE_TO_ORGANIZATIONAL_UNIT = "moveDeviceToOrganizationalUnit";
    const ACTIVATE_DEVICE_ESIM = "activateDeviceEsim";
    const COLLECT_DIAGNOSTICS = "collectDiagnostics";
    const INITIATE_MOBILE_DEVICE_MANAGEMENT_KEY_RECOVERY = "initiateMobileDeviceManagementKeyRecovery";
    const INITIATE_ON_DEMAND_PROACTIVE_REMEDIATION = "initiateOnDemandProactiveRemediation";
}
