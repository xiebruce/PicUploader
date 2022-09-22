<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementCompliancePolicy File
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
* DeviceManagementCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementCompliancePolicy extends Entity
{
    /**
    * Gets the createdDateTime
    * Policy creation date and time. This property is read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Policy creation date and time. This property is read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the creationSource
    * Policy creation source
    *
    * @return string|null The creationSource
    */
    public function getCreationSource()
    {
        if (array_key_exists("creationSource", $this->_propDict)) {
            return $this->_propDict["creationSource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the creationSource
    * Policy creation source
    *
    * @param string $val The creationSource
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setCreationSource($val)
    {
        $this->_propDict["creationSource"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Policy description
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
    * Policy description
    *
    * @param string $val The description
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the isAssigned
    * Policy assignment status. This property is read-only.
    *
    * @return bool|null The isAssigned
    */
    public function getIsAssigned()
    {
        if (array_key_exists("isAssigned", $this->_propDict)) {
            return $this->_propDict["isAssigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAssigned
    * Policy assignment status. This property is read-only.
    *
    * @param bool $val The isAssigned
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Policy last modification date and time. This property is read-only.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Policy last modification date and time. This property is read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * Policy name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Policy name
    *
    * @param string $val The name
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the platforms
    * Platforms for this policy. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
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
    * Platforms for this policy. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationPlatforms $val The platforms
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return string|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }

    /**
    * Gets the settingCount
    * Number of settings. This property is read-only.
    *
    * @return int|null The settingCount
    */
    public function getSettingCount()
    {
        if (array_key_exists("settingCount", $this->_propDict)) {
            return $this->_propDict["settingCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingCount
    * Number of settings. This property is read-only.
    *
    * @param int $val The settingCount
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setSettingCount($val)
    {
        $this->_propDict["settingCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the technologies
    * Technologies for this policy. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, linuxMdm, enrollment, unknownFutureValue.
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
    * Technologies for this policy. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, linuxMdm, enrollment, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationTechnologies $val The technologies
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setTechnologies($val)
    {
        $this->_propDict["technologies"] = $val;
        return $this;
    }


     /**
     * Gets the assignments
    * Policy assignments
     *
     * @return array|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignments
    * Policy assignments
    *
    * @param DeviceManagementConfigurationPolicyAssignment[] $val The assignments
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }


     /**
     * Gets the scheduledActionsForRule
    * The list of scheduled action for this rule
     *
     * @return array|null The scheduledActionsForRule
     */
    public function getScheduledActionsForRule()
    {
        if (array_key_exists("scheduledActionsForRule", $this->_propDict)) {
           return $this->_propDict["scheduledActionsForRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scheduledActionsForRule
    * The list of scheduled action for this rule
    *
    * @param DeviceManagementComplianceScheduledActionForRule[] $val The scheduledActionsForRule
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setScheduledActionsForRule($val)
    {
        $this->_propDict["scheduledActionsForRule"] = $val;
        return $this;
    }


     /**
     * Gets the settings
    * Policy settings
     *
     * @return array|null The settings
     */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
           return $this->_propDict["settings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settings
    * Policy settings
    *
    * @param DeviceManagementConfigurationSetting[] $val The settings
    *
    * @return DeviceManagementCompliancePolicy
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }

}
