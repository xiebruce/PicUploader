<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureADDeviceRegistrationErrorReason File
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
* AzureADDeviceRegistrationErrorReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureADDeviceRegistrationErrorReason extends Enum
{
    /**
    * The Enum AzureADDeviceRegistrationErrorReason
    */
    const INVALID_GLOBAL_DEVICE_ID = "invalidGlobalDeviceId";
    const INVALID_AZURE_AD_DEVICE_ID = "invalidAzureADDeviceId";
    const MISSING_TRUST_TYPE = "missingTrustType";
    const INVALID_AZURE_AD_JOIN = "invalidAzureADJoin";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
