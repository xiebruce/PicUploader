<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementReusablePolicySetting File
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
* DeviceManagementReusablePolicySetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementReusablePolicySetting extends Entity
{
    /**
    * Gets the createdDateTime
    * reusable setting creation date and time. This property is read-only.
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
    * reusable setting creation date and time. This property is read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * reusable setting description supplied by user.
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
    * reusable setting description supplied by user.
    *
    * @param string $val The description
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * reusable setting display name supplied by user.
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
    * reusable setting display name supplied by user.
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * date and time when reusable setting was last modified. This property is read-only.
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
    * date and time when reusable setting was last modified. This property is read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the referencingConfigurationPolicyCount
    * count of configuration policies referencing the current reusable setting. Valid values 0 to 2147483647. This property is read-only.
    *
    * @return int|null The referencingConfigurationPolicyCount
    */
    public function getReferencingConfigurationPolicyCount()
    {
        if (array_key_exists("referencingConfigurationPolicyCount", $this->_propDict)) {
            return $this->_propDict["referencingConfigurationPolicyCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referencingConfigurationPolicyCount
    * count of configuration policies referencing the current reusable setting. Valid values 0 to 2147483647. This property is read-only.
    *
    * @param int $val The referencingConfigurationPolicyCount
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setReferencingConfigurationPolicyCount($val)
    {
        $this->_propDict["referencingConfigurationPolicyCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the settingDefinitionId
    * setting definition id associated with this reusable setting.
    *
    * @return string|null The settingDefinitionId
    */
    public function getSettingDefinitionId()
    {
        if (array_key_exists("settingDefinitionId", $this->_propDict)) {
            return $this->_propDict["settingDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingDefinitionId
    * setting definition id associated with this reusable setting.
    *
    * @param string $val The settingDefinitionId
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setSettingDefinitionId($val)
    {
        $this->_propDict["settingDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the settingInstance
    * reusable setting configuration instance
    *
    * @return DeviceManagementConfigurationSettingInstance|null The settingInstance
    */
    public function getSettingInstance()
    {
        if (array_key_exists("settingInstance", $this->_propDict)) {
            if (is_a($this->_propDict["settingInstance"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingInstance") || is_null($this->_propDict["settingInstance"])) {
                return $this->_propDict["settingInstance"];
            } else {
                $this->_propDict["settingInstance"] = new DeviceManagementConfigurationSettingInstance($this->_propDict["settingInstance"]);
                return $this->_propDict["settingInstance"];
            }
        }
        return null;
    }

    /**
    * Sets the settingInstance
    * reusable setting configuration instance
    *
    * @param DeviceManagementConfigurationSettingInstance $val The settingInstance
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setSettingInstance($val)
    {
        $this->_propDict["settingInstance"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * version number for reusable setting. Valid values 0 to 2147483647. This property is read-only.
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
    * version number for reusable setting. Valid values 0 to 2147483647. This property is read-only.
    *
    * @param int $val The version
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }


     /**
     * Gets the referencingConfigurationPolicies
    * configuration policies referencing the current reusable setting. This property is read-only.
     *
     * @return array|null The referencingConfigurationPolicies
     */
    public function getReferencingConfigurationPolicies()
    {
        if (array_key_exists("referencingConfigurationPolicies", $this->_propDict)) {
           return $this->_propDict["referencingConfigurationPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referencingConfigurationPolicies
    * configuration policies referencing the current reusable setting. This property is read-only.
    *
    * @param DeviceManagementConfigurationPolicy[] $val The referencingConfigurationPolicies
    *
    * @return DeviceManagementReusablePolicySetting
    */
    public function setReferencingConfigurationPolicies($val)
    {
        $this->_propDict["referencingConfigurationPolicies"] = $val;
        return $this;
    }

}
