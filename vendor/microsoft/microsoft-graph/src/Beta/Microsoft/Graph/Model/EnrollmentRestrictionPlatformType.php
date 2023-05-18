<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentRestrictionPlatformType File
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
* EnrollmentRestrictionPlatformType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnrollmentRestrictionPlatformType extends Enum
{
    /**
    * The Enum EnrollmentRestrictionPlatformType
    */
    const ALL_PLATFORMS = "allPlatforms";
    const IOS = "ios";
    const WINDOWS = "windows";
    const WINDOWS_PHONE = "windowsPhone";
    const ANDROID = "android";
    const ANDROID_FOR_WORK = "androidForWork";
    const MAC = "mac";
    const LINUX = "linux";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
