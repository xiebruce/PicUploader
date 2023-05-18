<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PronounsSettings File
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
* PronounsSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PronounsSettings extends Entity
{
    /**
    * Gets the isEnabledInOrganization
    * true to enable pronouns in the organization, false otherwise. The default is false, and pronouns are disabled.
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
    * true to enable pronouns in the organization, false otherwise. The default is false, and pronouns are disabled.
    *
    * @param bool $val The isEnabledInOrganization
    *
    * @return PronounsSettings
    */
    public function setIsEnabledInOrganization($val)
    {
        $this->_propDict["isEnabledInOrganization"] = boolval($val);
        return $this;
    }

}
