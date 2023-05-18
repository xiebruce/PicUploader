<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupFilter File
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
* GroupFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupFilter extends Entity
{
    /**
    * Gets the includedGroups
    *
    * @return string|null The includedGroups
    */
    public function getIncludedGroups()
    {
        if (array_key_exists("includedGroups", $this->_propDict)) {
            return $this->_propDict["includedGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includedGroups
    *
    * @param string $val The value of the includedGroups
    *
    * @return GroupFilter
    */
    public function setIncludedGroups($val)
    {
        $this->_propDict["includedGroups"] = $val;
        return $this;
    }
}
