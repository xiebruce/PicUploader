<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalAdminPasswordSettings File
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
* LocalAdminPasswordSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocalAdminPasswordSettings extends Entity
{
    /**
    * Gets the isEnabled
    * Specifies whether this policy scope is configurable by the admin. The default value is false. An admin can set it to true to enable Local Admin Password Solution (LAPS) within their organzation.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Specifies whether this policy scope is configurable by the admin. The default value is false. An admin can set it to true to enable Local Admin Password Solution (LAPS) within their organzation.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return LocalAdminPasswordSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
}
