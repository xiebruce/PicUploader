<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationPolicyTemplate File
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
* DeviceManagementConfigurationPolicyTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationPolicyTemplate extends Entity
{
    /**
    * Gets the allowUnmanagedSettings
    * Allow unmanaged setting templates
    *
    * @return bool|null The allowUnmanagedSettings
    */
    public function getAllowUnmanagedSettings()
    {
        if (array_key_exists("allowUnmanagedSettings", $this->_propDict)) {
            return $this->_propDict["allowUnmanagedSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUnmanagedSettings
    * Allow unmanaged setting templates
    *
    * @param bool $val The allowUnmanagedSettings
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setAllowUnmanagedSettings($val)
    {
        $this->_propDict["allowUnmanagedSettings"] = boolval($val);
        return $this;
    }

    /**
    * Gets the baseId
    * Template base identifier
    *
    * @return string|null The baseId
    */
    public function getBaseId()
    {
        if (array_key_exists("baseId", $this->_propDict)) {
            return $this->_propDict["baseId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the baseId
    * Template base identifier
    *
    * @param string $val The baseId
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setBaseId($val)
    {
        $this->_propDict["baseId"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Template description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Template description
    *
    * @param string $val The description
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Template display name
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Template display name
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the displayVersion
    * Description of template version
    *
    * @return string|null The displayVersion
    */
    public function getDisplayVersion()
    {
        if (array_key_exists("displayVersion", $this->_propDict)) {
            return $this->_propDict["displayVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayVersion
    * Description of template version
    *
    * @param string $val The displayVersion
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setDisplayVersion($val)
    {
        $this->_propDict["displayVersion"] = $val;
        return $this;
    }

    /**
    * Gets the lifecycleState
    * Indicate current lifecycle state of template. Possible values are: invalid, draft, active, superseded, deprecated, retired.
    *
    * @return DeviceManagementTemplateLifecycleState|null The lifecycleState
    */
    public function getLifecycleState()
    {
        if (array_key_exists("lifecycleState", $this->_propDict)) {
            if (is_a($this->_propDict["lifecycleState"], "\Beta\Microsoft\Graph\Model\DeviceManagementTemplateLifecycleState") || is_null($this->_propDict["lifecycleState"])) {
                return $this->_propDict["lifecycleState"];
            } else {
                $this->_propDict["lifecycleState"] = new DeviceManagementTemplateLifecycleState($this->_propDict["lifecycleState"]);
                return $this->_propDict["lifecycleState"];
            }
        }
        return null;
    }

    /**
    * Sets the lifecycleState
    * Indicate current lifecycle state of template. Possible values are: invalid, draft, active, superseded, deprecated, retired.
    *
    * @param DeviceManagementTemplateLifecycleState $val The lifecycleState
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setLifecycleState($val)
    {
        $this->_propDict["lifecycleState"] = $val;
        return $this;
    }

    /**
    * Gets the platforms
    * Platforms for this template. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
    *
    * @return DeviceManagementConfigurationPlatforms|null The platforms
    */
    public function getPlatforms()
    {
        if (array_key_exists("platforms", $this->_propDict)) {
            if (is_a($this->_propDict["platforms"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationPlatforms") || is_null($this->_propDict["platforms"])) {
                return $this->_propDict["platforms"];
            } else {
                $this->_propDict["platforms"] = new DeviceManagementConfigurationPlatforms($this->_propDict["platforms"]);
                return $this->_propDict["platforms"];
            }
        }
        return null;
    }

    /**
    * Sets the platforms
    * Platforms for this template. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationPlatforms $val The platforms
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
        return $this;
    }

    /**
    * Gets the settingTemplateCount
    * Number of setting templates. Valid values 0 to 2147483647. This property is read-only.
    *
    * @return int|null The settingTemplateCount
    */
    public function getSettingTemplateCount()
    {
        if (array_key_exists("settingTemplateCount", $this->_propDict)) {
            return $this->_propDict["settingTemplateCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingTemplateCount
    * Number of setting templates. Valid values 0 to 2147483647. This property is read-only.
    *
    * @param int $val The settingTemplateCount
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setSettingTemplateCount($val)
    {
        $this->_propDict["settingTemplateCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the technologies
    * Technologies for this template. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, mobileApplicationManagement, linuxMdm, enrollment, endpointPrivilegeManagement, unknownFutureValue.
    *
    * @return DeviceManagementConfigurationTechnologies|null The technologies
    */
    public function getTechnologies()
    {
        if (array_key_exists("technologies", $this->_propDict)) {
            if (is_a($this->_propDict["technologies"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationTechnologies") || is_null($this->_propDict["technologies"])) {
                return $this->_propDict["technologies"];
            } else {
                $this->_propDict["technologies"] = new DeviceManagementConfigurationTechnologies($this->_propDict["technologies"]);
                return $this->_propDict["technologies"];
            }
        }
        return null;
    }

    /**
    * Sets the technologies
    * Technologies for this template. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, mobileApplicationManagement, linuxMdm, enrollment, endpointPrivilegeManagement, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationTechnologies $val The technologies
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setTechnologies($val)
    {
        $this->_propDict["technologies"] = $val;
        return $this;
    }

    /**
    * Gets the templateFamily
    * TemplateFamily for this template. Possible values are: none, endpointSecurityAntivirus, endpointSecurityDiskEncryption, endpointSecurityFirewall, endpointSecurityEndpointDetectionAndResponse, endpointSecurityAttackSurfaceReduction, endpointSecurityAccountProtection, endpointSecurityApplicationControl, endpointSecurityEndpointPrivilegeManagement, enrollmentConfiguration, appQuietTime, baseline, unknownFutureValue, deviceConfigurationScripts.
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
    * TemplateFamily for this template. Possible values are: none, endpointSecurityAntivirus, endpointSecurityDiskEncryption, endpointSecurityFirewall, endpointSecurityEndpointDetectionAndResponse, endpointSecurityAttackSurfaceReduction, endpointSecurityAccountProtection, endpointSecurityApplicationControl, endpointSecurityEndpointPrivilegeManagement, enrollmentConfiguration, appQuietTime, baseline, unknownFutureValue, deviceConfigurationScripts.
    *
    * @param DeviceManagementConfigurationTemplateFamily $val The templateFamily
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setTemplateFamily($val)
    {
        $this->_propDict["templateFamily"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * Template version. Valid values 1 to 2147483647. This property is read-only.
    *
    * @return int|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * Template version. Valid values 1 to 2147483647. This property is read-only.
    *
    * @param int $val The version
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }


     /**
     * Gets the settingTemplates
    * Setting templates
     *
     * @return array|null The settingTemplates
     */
    public function getSettingTemplates()
    {
        if (array_key_exists("settingTemplates", $this->_propDict)) {
           return $this->_propDict["settingTemplates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingTemplates
    * Setting templates
    *
    * @param DeviceManagementConfigurationSettingTemplate[] $val The settingTemplates
    *
    * @return DeviceManagementConfigurationPolicyTemplate
    */
    public function setSettingTemplates($val)
    {
        $this->_propDict["settingTemplates"] = $val;
        return $this;
    }

}
