<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationCategory File
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
* DeviceManagementConfigurationCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationCategory extends Entity
{
    /**
    * Gets the categoryDescription
    * Description of the category header
    *
    * @return string|null The categoryDescription
    */
    public function getCategoryDescription()
    {
        if (array_key_exists("categoryDescription", $this->_propDict)) {
            return $this->_propDict["categoryDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categoryDescription
    * Description of the category header
    *
    * @param string $val The categoryDescription
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setCategoryDescription($val)
    {
        $this->_propDict["categoryDescription"] = $val;
        return $this;
    }

    /**
    * Gets the childCategoryIds
    * List of child ids of the category.
    *
    * @return string|null The childCategoryIds
    */
    public function getChildCategoryIds()
    {
        if (array_key_exists("childCategoryIds", $this->_propDict)) {
            return $this->_propDict["childCategoryIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the childCategoryIds
    * List of child ids of the category.
    *
    * @param string $val The childCategoryIds
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setChildCategoryIds($val)
    {
        $this->_propDict["childCategoryIds"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the item
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
    * Description of the item
    *
    * @param string $val The description
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the item
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
    * Display name of the item
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the helpText
    * Help text of the item
    *
    * @return string|null The helpText
    */
    public function getHelpText()
    {
        if (array_key_exists("helpText", $this->_propDict)) {
            return $this->_propDict["helpText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the helpText
    * Help text of the item
    *
    * @param string $val The helpText
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setHelpText($val)
    {
        $this->_propDict["helpText"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * Name of the item
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
    * Name of the item
    *
    * @param string $val The name
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the parentCategoryId
    * Parent id of the category.
    *
    * @return string|null The parentCategoryId
    */
    public function getParentCategoryId()
    {
        if (array_key_exists("parentCategoryId", $this->_propDict)) {
            return $this->_propDict["parentCategoryId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentCategoryId
    * Parent id of the category.
    *
    * @param string $val The parentCategoryId
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setParentCategoryId($val)
    {
        $this->_propDict["parentCategoryId"] = $val;
        return $this;
    }

    /**
    * Gets the platforms
    * Platforms types, which settings in the category have. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
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
    * Platforms types, which settings in the category have. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationPlatforms $val The platforms
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
        return $this;
    }

    /**
    * Gets the rootCategoryId
    * Root id of the category.
    *
    * @return string|null The rootCategoryId
    */
    public function getRootCategoryId()
    {
        if (array_key_exists("rootCategoryId", $this->_propDict)) {
            return $this->_propDict["rootCategoryId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rootCategoryId
    * Root id of the category.
    *
    * @param string $val The rootCategoryId
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setRootCategoryId($val)
    {
        $this->_propDict["rootCategoryId"] = $val;
        return $this;
    }

    /**
    * Gets the settingUsage
    * Indicates that the category contains settings that are used for Compliance or Configuration. Possible values are: none, configuration, compliance.
    *
    * @return DeviceManagementConfigurationSettingUsage|null The settingUsage
    */
    public function getSettingUsage()
    {
        if (array_key_exists("settingUsage", $this->_propDict)) {
            if (is_a($this->_propDict["settingUsage"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingUsage") || is_null($this->_propDict["settingUsage"])) {
                return $this->_propDict["settingUsage"];
            } else {
                $this->_propDict["settingUsage"] = new DeviceManagementConfigurationSettingUsage($this->_propDict["settingUsage"]);
                return $this->_propDict["settingUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the settingUsage
    * Indicates that the category contains settings that are used for Compliance or Configuration. Possible values are: none, configuration, compliance.
    *
    * @param DeviceManagementConfigurationSettingUsage $val The settingUsage
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setSettingUsage($val)
    {
        $this->_propDict["settingUsage"] = $val;
        return $this;
    }

    /**
    * Gets the technologies
    * Technologies types, which settings in the category have. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, linuxMdm, enrollment, unknownFutureValue.
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
    * Technologies types, which settings in the category have. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, linuxMdm, enrollment, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationTechnologies $val The technologies
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setTechnologies($val)
    {
        $this->_propDict["technologies"] = $val;
        return $this;
    }

}
