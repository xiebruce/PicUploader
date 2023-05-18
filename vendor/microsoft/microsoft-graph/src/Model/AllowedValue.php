<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AllowedValue File
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
* AllowedValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AllowedValue extends Entity
{
    /**
    * Gets the isActive
    *
    * @return bool|null The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isActive
    *
    * @param bool $val The isActive
    *
    * @return AllowedValue
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }

}
