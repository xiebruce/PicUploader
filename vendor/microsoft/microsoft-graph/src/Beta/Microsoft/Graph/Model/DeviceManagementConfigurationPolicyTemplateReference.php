<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationPolicyTemplateReference File
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
* DeviceManagementConfigurationPolicyTemplateReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationPolicyTemplateReference extends Entity
{
    /**
    * Gets the templateDisplayName
    * Template Display Name of the referenced template. This property is read-only.
    *
    * @return string|null The templateDisplayName
    */
    public function getTemplateDisplayName()
    {
        if (array_key_exists("templateDisplayName", $this->_propDict)) {
            return $this->_propDict["templateDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the templateDisplayName
    * Template Display Name of the referenced template. This property is read-only.
    *
    * @param string $val The value of the templateDisplayName
    *
    * @return DeviceManagementConfigurationPolicyTemplateReference
    */
    public function setTemplateDisplayName($val)
    {
        $this->_propDict["templateDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the templateDisplayVersion
    * Template Display Version of the referenced Template. This property is read-only.
    *
    * @return string|null The templateDisplayVersion
    */
    public function getTemplateDisplayVersion()
    {
        if (array_key_exists("templateDisplayVersion", $this->_propDict)) {
            return $this->_propDict["templateDisplayVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the templateDisplayVersion
    * Template Display Version of the referenced Template. This property is read-only.
    *
    * @param string $val The value of the templateDisplayVersion
    *
    * @return DeviceManagementConfigurationPolicyTemplateReference
    */
    public function setTemplateDisplayVersion($val)
    {
        $this->_propDict["templateDisplayVersion"] = $val;
        return $this;
    }

    /**
    * Gets the templateFamily
    * Template Family of the referenced Template. This property is read-only. Possible values are: none, endpointSecurityAntivirus, endpointSecurityDiskEncryption, endpointSecurityFirewall, endpointSecurityEndpointDetectionAndResponse, endpointSecurityAttackSurfaceReduction, endpointSecurityAccountProtection, endpointSecurityApplicationControl, endpointSecurityEndpointPrivilegeManagement, enrollmentConfiguration, appQuietTime, baseline, unknownFutureValue, deviceConfigurationScripts.
    *
    * @return DeviceManagementConfigurationTemplateFamily|null The templateFamily
    */
    public function getTemplateFamily()
    {
        if (array_key_exists("templateFamily", $this->_propDict)) {
            if (is_a($this->_propDict["templateFamily"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationTemplateFamily") || is_null($this->_propDict["templateFamily"])) {
                return $this->_propDict["templateFamily"];
            } else {
                $this->_propDict["templateFamily"] = new DeviceManagementConfigurationTemplateFamily($this->_propDict["templateFamily"]);
                return $this->_propDict["templateFamily"];
            }
        }
        return null;
    }

    /**
    * Sets the templateFamily
    * Template Family of the referenced Template. This property is read-only. Possible values are: none, endpointSecurityAntivirus, endpointSecurityDiskEncryption, endpointSecurityFirewall, endpointSecurityEndpointDetectionAndResponse, endpointSecurityAttackSurfaceReduction, endpointSecurityAccountProtection, endpointSecurityApplicationControl, endpointSecurityEndpointPrivilegeManagement, enrollmentConfiguration, appQuietTime, baseline, unknownFutureValue, deviceConfigurationScripts.
    *
    * @param DeviceManagementConfigurationTemplateFamily $val The value to assign to the templateFamily
    *
    * @return DeviceManagementConfigurationPolicyTemplateReference The DeviceManagementConfigurationPolicyTemplateReference
    */
    public function setTemplateFamily($val)
    {
        $this->_propDict["templateFamily"] = $val;
         return $this;
    }
    /**
    * Gets the templateId
    * Template id
    *
    * @return string|null The templateId
    */
    public function getTemplateId()
    {
        if (array_key_exists("templateId", $this->_propDict)) {
            return $this->_propDict["templateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the templateId
    * Template id
    *
    * @param string $val The value of the templateId
    *
    * @return DeviceManagementConfigurationPolicyTemplateReference
    */
    public function setTemplateId($val)
    {
        $this->_propDict["templateId"] = $val;
        return $this;
    }
}
