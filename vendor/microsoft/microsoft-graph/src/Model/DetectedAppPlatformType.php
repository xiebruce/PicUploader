<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectedAppPlatformType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* DetectedAppPlatformType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectedAppPlatformType extends Enum
{
    /**
    * The Enum DetectedAppPlatformType
    */
    const UNKNOWN = "unknown";
    const WINDOWS = "windows";
    const WINDOWS_MOBILE = "windowsMobile";
    const WINDOWS_HOLOGRAPHIC = "windowsHolographic";
    const IOS = "ios";
    const MAC_OS = "macOS";
    const CHROME_OS = "chromeOS";
    const ANDROID_OSP = "androidOSP";
    const ANDROID_DEVICE_ADMINISTRATOR = "androidDeviceAdministrator";
    const ANDROID_WORK_PROFILE = "androidWorkProfile";
    const ANDROID_DEDICATED_AND_FULLY_MANAGED = "androidDedicatedAndFullyManaged";
}
