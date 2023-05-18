<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssociatedAssignmentPayloadType File
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
* AssociatedAssignmentPayloadType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssociatedAssignmentPayloadType extends Enum
{
    /**
    * The Enum AssociatedAssignmentPayloadType
    */
    const UNKNOWN = "unknown";
    const DEVICE_CONFIGURATION_AND_COMPLIANCE = "deviceConfigurationAndCompliance";
    const APPLICATION = "application";
    const ANDROID_ENTERPRISE_APP = "androidEnterpriseApp";
    const ENROLLMENT_CONFIGURATION = "enrollmentConfiguration";
    const GROUP_POLICY_CONFIGURATION = "groupPolicyConfiguration";
    const ZERO_TOUCH_DEPLOYMENT_DEVICE_CONFIG_PROFILE = "zeroTouchDeploymentDeviceConfigProfile";
    const ANDROID_ENTERPRISE_CONFIGURATION = "androidEnterpriseConfiguration";
    const DEVICE_FIRMWARE_CONFIGURATION_INTERFACE_POLICY = "deviceFirmwareConfigurationInterfacePolicy";
    const RESOURCE_ACCESS_POLICY = "resourceAccessPolicy";
    const WIN32APP = "win32app";
    const DEVICE_MANAGMENT_CONFIGURATION_AND_COMPLIANCE_POLICY = "deviceManagmentConfigurationAndCompliancePolicy";
}
