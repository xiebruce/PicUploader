<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Fido2CombinationConfiguration File
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
* Fido2CombinationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Fido2CombinationConfiguration extends AuthenticationCombinationConfiguration
{
    /**
    * Gets the allowedAAGUIDs
    *
    * @return string|null The allowedAAGUIDs
    */
    public function getAllowedAAGUIDs()
    {
        if (array_key_exists("allowedAAGUIDs", $this->_propDict)) {
            return $this->_propDict["allowedAAGUIDs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedAAGUIDs
    *
    * @param string $val The allowedAAGUIDs
    *
    * @return Fido2CombinationConfiguration
    */
    public function setAllowedAAGUIDs($val)
    {
        $this->_propDict["allowedAAGUIDs"] = $val;
        return $this;
    }

}
