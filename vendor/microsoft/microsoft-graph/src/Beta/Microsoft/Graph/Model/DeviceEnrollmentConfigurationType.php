<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentConfigurationType File
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
* DeviceEnrollmentConfigurationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentConfigurationType extends Enum
{
    /**
    * The Enum DeviceEnrollmentConfigurationType
    */
    const UNKNOWN = "unknown";
    const LIMIT = "limit";
    const PLATFORM_RESTRICTIONS = "platformRestrictions";
    const WINDOWS_HELLO_FOR_BUSINESS = "windowsHelloForBusiness";
    const DEFAULT_LIMIT = "defaultLimit";
    const DEFAULT_PLATFORM_RESTRICTIONS = "defaultPlatformRestrictions";
    const DEFAULT_WINDOWS_HELLO_FOR_BUSINESS = "defaultWindowsHelloForBusiness";
    const DEFAULT_WINDOWS10_ENROLLMENT_COMPLETION_PAGE_CONFIGURATION = "defaultWindows10EnrollmentCompletionPageConfiguration";
    const WINDOWS10_ENROLLMENT_COMPLETION_PAGE_CONFIGURATION = "windows10EnrollmentCompletionPageConfiguration";
    const DEVICE_COMANAGEMENT_AUTHORITY_CONFIGURATION = "deviceComanagementAuthorityConfiguration";
    const SINGLE_PLATFORM_RESTRICTION = "singlePlatformRestriction";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const ENROLLMENT_NOTIFICATIONS_CONFIGURATION = "enrollmentNotificationsConfiguration";
}
