<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupSetting File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* GroupSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupSetting extends Entity
{
    /**
    * Gets the displayName
    * Display name of this group of settings, which comes from the associated template.
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
    * Display name of this group of settings, which comes from the associated template.
    *
    * @param string $val The displayName
    *
    * @return GroupSetting
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the templateId
    * Unique identifier for the tenant-level groupSettingTemplates object that's been customized for this group-level settings object. Read-only.
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
    * Unique identifier for the tenant-level groupSettingTemplates object that's been customized for this group-level settings object. Read-only.
    *
    * @param string $val The templateId
    *
    * @return GroupSetting
    */
    public function setTemplateId($val)
    {
        $this->_propDict["templateId"] = $val;
        return $this;
    }


     /**
     * Gets the values
    * Collection of name-value pairs corresponding to the name and defaultValue properties in the referenced groupSettingTemplates object.
     *
     * @return array|null The values
     */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
           return $this->_propDict["values"];
        } else {
            return null;
        }
    }

    /**
    * Sets the values
    * Collection of name-value pairs corresponding to the name and defaultValue properties in the referenced groupSettingTemplates object.
    *
    * @param SettingValue[] $val The values
    *
    * @return GroupSetting
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }

}
