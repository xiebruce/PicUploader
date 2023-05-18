<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PayloadByFilter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* PayloadByFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PayloadByFilter extends Entity
{

    /**
    * Gets the assignmentFilterType
    * An enum to indicate whether the filter is applied. Possible values are include,exclude,none.'include' means devices that match the filter conditions receive the app or policy. Devices that don't match the filter conditions don't receive the app or policy. 'exclude' means devices that match the filter conditions don't receive the app or policy. Devices that don't match the filter conditions receive the app or policy.'none' means no filter is assigned. Possible values are: none, include, exclude.
    *
    * @return DeviceAndAppManagementAssignmentFilterType|null The assignmentFilterType
    */
    public function getAssignmentFilterType()
    {
        if (array_key_exists("assignmentFilterType", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentFilterType"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentFilterType") || is_null($this->_propDict["assignmentFilterType"])) {
                return $this->_propDict["assignmentFilterType"];
            } else {
                $this->_propDict["assignmentFilterType"] = new DeviceAndAppManagementAssignmentFilterType($this->_propDict["assignmentFilterType"]);
                return $this->_propDict["assignmentFilterType"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentFilterType
    * An enum to indicate whether the filter is applied. Possible values are include,exclude,none.'include' means devices that match the filter conditions receive the app or policy. Devices that don't match the filter conditions don't receive the app or policy. 'exclude' means devices that match the filter conditions don't receive the app or policy. Devices that don't match the filter conditions receive the app or policy.'none' means no filter is assigned. Possible values are: none, include, exclude.
    *
    * @param DeviceAndAppManagementAssignmentFilterType $val The value to assign to the assignmentFilterType
    *
    * @return PayloadByFilter The PayloadByFilter
    */
    public function setAssignmentFilterType($val)
    {
        $this->_propDict["assignmentFilterType"] = $val;
         return $this;
    }
    /**
    * Gets the groupId
    * The Azure AD security group ID
    *
    * @return string|null The groupId
    */
    public function getGroupId()
    {
        if (array_key_exists("groupId", $this->_propDict)) {
            return $this->_propDict["groupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupId
    * The Azure AD security group ID
    *
    * @param string $val The value of the groupId
    *
    * @return PayloadByFilter
    */
    public function setGroupId($val)
    {
        $this->_propDict["groupId"] = $val;
        return $this;
    }
    /**
    * Gets the payloadId
    * The policy identifier
    *
    * @return string|null The payloadId
    */
    public function getPayloadId()
    {
        if (array_key_exists("payloadId", $this->_propDict)) {
            return $this->_propDict["payloadId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloadId
    * The policy identifier
    *
    * @param string $val The value of the payloadId
    *
    * @return PayloadByFilter
    */
    public function setPayloadId($val)
    {
        $this->_propDict["payloadId"] = $val;
        return $this;
    }

    /**
    * Gets the payloadType
    * The policy type identifier. Possible values are unknown,settingsPolicy,application,microsoftApplicationManagementPolicy,androidForWorkApplication,enrollmentConfiguration,microsoftIntuneManagementExtension,groupPolicy,zeroTouchDeploymentDeviceConfigProfile,androidEnterprisePolicy,deviceFirmwareConfigurationInterfacePolicy,windowsUpdateProfile,resourceAccessPolicy,sidecarPolicy,deviceConfigurationPolicy,microsoftManagementPlatformCloud. Possible values are: unknown, deviceConfigurationAndCompliance, application, androidEnterpriseApp, enrollmentConfiguration, groupPolicyConfiguration, zeroTouchDeploymentDeviceConfigProfile, androidEnterpriseConfiguration, deviceFirmwareConfigurationInterfacePolicy, resourceAccessPolicy, win32app, deviceManagmentConfigurationAndCompliancePolicy.
    *
    * @return AssociatedAssignmentPayloadType|null The payloadType
    */
    public function getPayloadType()
    {
        if (array_key_exists("payloadType", $this->_propDict)) {
            if (is_a($this->_propDict["payloadType"], "\Beta\Microsoft\Graph\Model\AssociatedAssignmentPayloadType") || is_null($this->_propDict["payloadType"])) {
                return $this->_propDict["payloadType"];
            } else {
                $this->_propDict["payloadType"] = new AssociatedAssignmentPayloadType($this->_propDict["payloadType"]);
                return $this->_propDict["payloadType"];
            }
        }
        return null;
    }

    /**
    * Sets the payloadType
    * The policy type identifier. Possible values are unknown,settingsPolicy,application,microsoftApplicationManagementPolicy,androidForWorkApplication,enrollmentConfiguration,microsoftIntuneManagementExtension,groupPolicy,zeroTouchDeploymentDeviceConfigProfile,androidEnterprisePolicy,deviceFirmwareConfigurationInterfacePolicy,windowsUpdateProfile,resourceAccessPolicy,sidecarPolicy,deviceConfigurationPolicy,microsoftManagementPlatformCloud. Possible values are: unknown, deviceConfigurationAndCompliance, application, androidEnterpriseApp, enrollmentConfiguration, groupPolicyConfiguration, zeroTouchDeploymentDeviceConfigProfile, androidEnterpriseConfiguration, deviceFirmwareConfigurationInterfacePolicy, resourceAccessPolicy, win32app, deviceManagmentConfigurationAndCompliancePolicy.
    *
    * @param AssociatedAssignmentPayloadType $val The value to assign to the payloadType
    *
    * @return PayloadByFilter The PayloadByFilter
    */
    public function setPayloadType($val)
    {
        $this->_propDict["payloadType"] = $val;
         return $this;
    }
}
