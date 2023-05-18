<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessRoot File
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
* PrivilegedAccessRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessRoot extends Entity
{
    /**
    * Gets the group
    * A group that's governed through Privileged Identity Management (PIM).
    *
    * @return PrivilegedAccessGroup|null The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "\Beta\Microsoft\Graph\Model\PrivilegedAccessGroup") || is_null($this->_propDict["group"])) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new PrivilegedAccessGroup($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    * A group that's governed through Privileged Identity Management (PIM).
    *
    * @param PrivilegedAccessGroup $val The group
    *
    * @return PrivilegedAccessRoot
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }

}
