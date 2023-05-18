<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaErrorCode File
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
* ZebraFotaErrorCode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaErrorCode extends Enum
{
    /**
    * The Enum ZebraFotaErrorCode
    */
    const SUCCESS = "success";
    const NO_DEVICES_FOUND_IN_SELECTED_AAD_GROUPS = "noDevicesFoundInSelectedAadGroups";
    const NO_INTUNE_DEVICES_FOUND_IN_SELECTED_AAD_GROUPS = "noIntuneDevicesFoundInSelectedAadGroups";
    const NO_ZEBRA_FOTA_ENROLLED_DEVICES_FOUND_FOR_CURRENT_TENANT = "noZebraFotaEnrolledDevicesFoundForCurrentTenant";
    const NO_ZEBRA_FOTA_ENROLLED_DEVICES_FOUND_IN_SELECTED_AAD_GROUPS = "noZebraFotaEnrolledDevicesFoundInSelectedAadGroups";
    const NO_ZEBRA_FOTA_DEVICES_FOUND_FOR_SELECTED_DEVICE_MODEL = "noZebraFotaDevicesFoundForSelectedDeviceModel";
    const ZEBRA_FOTA_CREATE_DEPLOYMENT_REQUEST_FAILURE = "zebraFotaCreateDeploymentRequestFailure";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
