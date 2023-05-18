<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTemplateInsightsDefinition File
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
* DeviceManagementTemplateInsightsDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTemplateInsightsDefinition extends Entity
{

     /**
     * Gets the settingInsights
    * Setting insights in a template
     *
     * @return array|null The settingInsights
     */
    public function getSettingInsights()
    {
        if (array_key_exists("settingInsights", $this->_propDict)) {
           return $this->_propDict["settingInsights"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingInsights
    * Setting insights in a template
    *
    * @param DeviceManagementSettingInsightsDefinition[] $val The settingInsights
    *
    * @return DeviceManagementTemplateInsightsDefinition
    */
    public function setSettingInsights($val)
    {
        $this->_propDict["settingInsights"] = $val;
        return $this;
    }

}
