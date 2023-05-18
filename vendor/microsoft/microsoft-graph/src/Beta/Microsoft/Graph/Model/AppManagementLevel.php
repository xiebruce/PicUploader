<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppManagementLevel File
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
* AppManagementLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppManagementLevel extends Enum
{
    /**
    * The Enum AppManagementLevel
    */
    const UNSPECIFIED = "unspecified";
    const UNMANAGED = "unmanaged";
    const MDM = "mdm";
    const ANDROID_ENTERPRISE = "androidEnterprise";
    const ANDROID_ENTERPRISE_DEDICATED_DEVICES_WITH_AZURE_AD_SHARED_MODE = "androidEnterpriseDedicatedDevicesWithAzureAdSharedMode";
    const ANDROID_OPEN_SOURCE_PROJECT_USER_ASSOCIATED = "androidOpenSourceProjectUserAssociated";
    const ANDROID_OPEN_SOURCE_PROJECT_USERLESS = "androidOpenSourceProjectUserless";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
