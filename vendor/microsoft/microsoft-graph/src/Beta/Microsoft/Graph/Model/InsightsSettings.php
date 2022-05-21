<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InsightsSettings File
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
* InsightsSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InsightsSettings extends Entity
{
    /**
    * Gets the disabledForGroup
    * The ID of an Azure Active Directory group, of which the specified type of insights are disabled for its members. Default is empty. Optional.
    *
    * @return string|null The disabledForGroup
    */
    public function getDisabledForGroup()
    {
        if (array_key_exists("disabledForGroup", $this->_propDict)) {
            return $this->_propDict["disabledForGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disabledForGroup
    * The ID of an Azure Active Directory group, of which the specified type of insights are disabled for its members. Default is empty. Optional.
    *
    * @param string $val The disabledForGroup
    *
    * @return InsightsSettings
    */
    public function setDisabledForGroup($val)
    {
        $this->_propDict["disabledForGroup"] = $val;
        return $this;
    }

    /**
    * Gets the isEnabledInOrganization
    * true if the specified type of insights are enabled for the organization; false if the specified type of insights are disabled for all users without exceptions. Default is true. Optional.
    *
    * @return bool|null The isEnabledInOrganization
    */
    public function getIsEnabledInOrganization()
    {
        if (array_key_exists("isEnabledInOrganization", $this->_propDict)) {
            return $this->_propDict["isEnabledInOrganization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabledInOrganization
    * true if the specified type of insights are enabled for the organization; false if the specified type of insights are disabled for all users without exceptions. Default is true. Optional.
    *
    * @param bool $val The isEnabledInOrganization
    *
    * @return InsightsSettings
    */
    public function setIsEnabledInOrganization($val)
    {
        $this->_propDict["isEnabledInOrganization"] = boolval($val);
        return $this;
    }

}
