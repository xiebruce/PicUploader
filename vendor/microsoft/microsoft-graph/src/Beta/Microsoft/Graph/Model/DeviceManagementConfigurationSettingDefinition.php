<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingDefinition File
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
* DeviceManagementConfigurationSettingDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingDefinition extends Entity
{
    /**
    * Gets the accessTypes
    * Read/write access mode of the setting. Possible values are: none, add, copy, delete, get, replace, execute.
    *
    * @return DeviceManagementConfigurationSettingAccessTypes|null The accessTypes
    */
    public function getAccessTypes()
    {
        if (array_key_exists("accessTypes", $this->_propDict)) {
            if (is_a($this->_propDict["accessTypes"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingAccessTypes") || is_null($this->_propDict["accessTypes"])) {
                return $this->_propDict["accessTypes"];
            } else {
                $this->_propDict["accessTypes"] = new DeviceManagementConfigurationSettingAccessTypes($this->_propDict["accessTypes"]);
                return $this->_propDict["accessTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the accessTypes
    * Read/write access mode of the setting. Possible values are: none, add, copy, delete, get, replace, execute.
    *
    * @param DeviceManagementConfigurationSettingAccessTypes $val The accessTypes
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setAccessTypes($val)
    {
        $this->_propDict["accessTypes"] = $val;
        return $this;
    }

    /**
    * Gets the applicability
    * Details which device setting is applicable on. Supports: $filters.
    *
    * @return DeviceManagementConfigurationSettingApplicability|null The applicability
    */
    public function getApplicability()
    {
        if (array_key_exists("applicability", $this->_propDict)) {
            if (is_a($this->_propDict["applicability"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingApplicability") || is_null($this->_propDict["applicability"])) {
                return $this->_propDict["applicability"];
            } else {
                $this->_propDict["applicability"] = new DeviceManagementConfigurationSettingApplicability($this->_propDict["applicability"]);
                return $this->_propDict["applicability"];
            }
        }
        return null;
    }

    /**
    * Sets the applicability
    * Details which device setting is applicable on. Supports: $filters.
    *
    * @param DeviceManagementConfigurationSettingApplicability $val The applicability
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setApplicability($val)
    {
        $this->_propDict["applicability"] = $val;
        return $this;
    }

    /**
    * Gets the baseUri
    * Base CSP Path
    *
    * @return string|null The baseUri
    */
    public function getBaseUri()
    {
        if (array_key_exists("baseUri", $this->_propDict)) {
            return $this->_propDict["baseUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the baseUri
    * Base CSP Path
    *
    * @param string $val The baseUri
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setBaseUri($val)
    {
        $this->_propDict["baseUri"] = $val;
        return $this;
    }

    /**
    * Gets the categoryId
    * Specify category in which the setting is under. Support $filters.
    *
    * @return string|null The categoryId
    */
    public function getCategoryId()
    {
        if (array_key_exists("categoryId", $this->_propDict)) {
            return $this->_propDict["categoryId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categoryId
    * Specify category in which the setting is under. Support $filters.
    *
    * @param string $val The categoryId
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setCategoryId($val)
    {
        $this->_propDict["categoryId"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the setting.
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
    * Description of the setting.
    *
    * @param string $val The description
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Name of the setting. For example: Allow Toast.
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
    * Name of the setting. For example: Allow Toast.
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the helpText
    * Help text of the setting. Give more details of the setting.
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
    * Help text of the setting. Give more details of the setting.
    *
    * @param string $val The helpText
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setHelpText($val)
    {
        $this->_propDict["helpText"] = $val;
        return $this;
    }

    /**
    * Gets the infoUrls
    * List of links more info for the setting can be found at.
    *
    * @return array|null The infoUrls
    */
    public function getInfoUrls()
    {
        if (array_key_exists("infoUrls", $this->_propDict)) {
            return $this->_propDict["infoUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the infoUrls
    * List of links more info for the setting can be found at.
    *
    * @param string[] $val The infoUrls
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setInfoUrls($val)
    {
        $this->_propDict["infoUrls"] = $val;
        return $this;
    }

    /**
    * Gets the keywords
    * Tokens which to search settings on
    *
    * @return array|null The keywords
    */
    public function getKeywords()
    {
        if (array_key_exists("keywords", $this->_propDict)) {
            return $this->_propDict["keywords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keywords
    * Tokens which to search settings on
    *
    * @param string[] $val The keywords
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setKeywords($val)
    {
        $this->_propDict["keywords"] = $val;
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
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the occurrence
    * Indicates whether the setting is required or not
    *
    * @return DeviceManagementConfigurationSettingOccurrence|null The occurrence
    */
    public function getOccurrence()
    {
        if (array_key_exists("occurrence", $this->_propDict)) {
            if (is_a($this->_propDict["occurrence"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingOccurrence") || is_null($this->_propDict["occurrence"])) {
                return $this->_propDict["occurrence"];
            } else {
                $this->_propDict["occurrence"] = new DeviceManagementConfigurationSettingOccurrence($this->_propDict["occurrence"]);
                return $this->_propDict["occurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the occurrence
    * Indicates whether the setting is required or not
    *
    * @param DeviceManagementConfigurationSettingOccurrence $val The occurrence
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setOccurrence($val)
    {
        $this->_propDict["occurrence"] = $val;
        return $this;
    }

    /**
    * Gets the offsetUri
    * Offset CSP Path from Base
    *
    * @return string|null The offsetUri
    */
    public function getOffsetUri()
    {
        if (array_key_exists("offsetUri", $this->_propDict)) {
            return $this->_propDict["offsetUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offsetUri
    * Offset CSP Path from Base
    *
    * @param string $val The offsetUri
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setOffsetUri($val)
    {
        $this->_propDict["offsetUri"] = $val;
        return $this;
    }


     /**
     * Gets the referredSettingInformationList
    * List of referred setting information.
     *
     * @return array|null The referredSettingInformationList
     */
    public function getReferredSettingInformationList()
    {
        if (array_key_exists("referredSettingInformationList", $this->_propDict)) {
           return $this->_propDict["referredSettingInformationList"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referredSettingInformationList
    * List of referred setting information.
    *
    * @param DeviceManagementConfigurationReferredSettingInformation[] $val The referredSettingInformationList
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setReferredSettingInformationList($val)
    {
        $this->_propDict["referredSettingInformationList"] = $val;
        return $this;
    }

    /**
    * Gets the rootDefinitionId
    * Root setting definition id if the setting is a child setting.
    *
    * @return string|null The rootDefinitionId
    */
    public function getRootDefinitionId()
    {
        if (array_key_exists("rootDefinitionId", $this->_propDict)) {
            return $this->_propDict["rootDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rootDefinitionId
    * Root setting definition id if the setting is a child setting.
    *
    * @param string $val The rootDefinitionId
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setRootDefinitionId($val)
    {
        $this->_propDict["rootDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the settingUsage
    * Indicate setting type for the setting. Possible values are: configuration, compliance, reusableSetting. Each setting usage has separate API end-point to call. Possible values are: none, configuration, compliance, unknownFutureValue.
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
    * Indicate setting type for the setting. Possible values are: configuration, compliance, reusableSetting. Each setting usage has separate API end-point to call. Possible values are: none, configuration, compliance, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationSettingUsage $val The settingUsage
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setSettingUsage($val)
    {
        $this->_propDict["settingUsage"] = $val;
        return $this;
    }

    /**
    * Gets the uxBehavior
    * Setting control type representation in the UX. Possible values are: default, dropdown, smallTextBox, largeTextBox, toggle, multiheaderGrid, contextPane. Possible values are: default, dropdown, smallTextBox, largeTextBox, toggle, multiheaderGrid, contextPane, unknownFutureValue.
    *
    * @return DeviceManagementConfigurationControlType|null The uxBehavior
    */
    public function getUxBehavior()
    {
        if (array_key_exists("uxBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["uxBehavior"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationControlType") || is_null($this->_propDict["uxBehavior"])) {
                return $this->_propDict["uxBehavior"];
            } else {
                $this->_propDict["uxBehavior"] = new DeviceManagementConfigurationControlType($this->_propDict["uxBehavior"]);
                return $this->_propDict["uxBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the uxBehavior
    * Setting control type representation in the UX. Possible values are: default, dropdown, smallTextBox, largeTextBox, toggle, multiheaderGrid, contextPane. Possible values are: default, dropdown, smallTextBox, largeTextBox, toggle, multiheaderGrid, contextPane, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationControlType $val The uxBehavior
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setUxBehavior($val)
    {
        $this->_propDict["uxBehavior"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * Item Version
    *
    * @return string|null The version
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
    * Item Version
    *
    * @param string $val The version
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

    /**
    * Gets the visibility
    * Setting visibility scope to UX. Possible values are: none, settingsCatalog, template. Possible values are: none, settingsCatalog, template, unknownFutureValue.
    *
    * @return DeviceManagementConfigurationSettingVisibility|null The visibility
    */
    public function getVisibility()
    {
        if (array_key_exists("visibility", $this->_propDict)) {
            if (is_a($this->_propDict["visibility"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingVisibility") || is_null($this->_propDict["visibility"])) {
                return $this->_propDict["visibility"];
            } else {
                $this->_propDict["visibility"] = new DeviceManagementConfigurationSettingVisibility($this->_propDict["visibility"]);
                return $this->_propDict["visibility"];
            }
        }
        return null;
    }

    /**
    * Sets the visibility
    * Setting visibility scope to UX. Possible values are: none, settingsCatalog, template. Possible values are: none, settingsCatalog, template, unknownFutureValue.
    *
    * @param DeviceManagementConfigurationSettingVisibility $val The visibility
    *
    * @return DeviceManagementConfigurationSettingDefinition
    */
    public function setVisibility($val)
    {
        $this->_propDict["visibility"] = $val;
        return $this;
    }

}
