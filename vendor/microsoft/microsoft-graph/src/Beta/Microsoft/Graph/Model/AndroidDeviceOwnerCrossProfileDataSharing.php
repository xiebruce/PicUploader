<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerCrossProfileDataSharing File
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
* AndroidDeviceOwnerCrossProfileDataSharing class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerCrossProfileDataSharing extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerCrossProfileDataSharing
    */
    const NOT_CONFIGURED = "notConfigured";
    const CROSS_PROFILE_DATA_SHARING_BLOCKED = "crossProfileDataSharingBlocked";
    const DATA_SHARING_FROM_WORK_TO_PERSONAL_BLOCKED = "dataSharingFromWorkToPersonalBlocked";
    const CROSS_PROFILE_DATA_SHARING_ALLOWED = "crossProfileDataSharingAllowed";
    const UNKOWN_FUTURE_VALUE = "unkownFutureValue";
}
