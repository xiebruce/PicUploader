<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcUserRoleScopeTagInfo File
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
* CloudPcUserRoleScopeTagInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcUserRoleScopeTagInfo extends Entity
{
    /**
    * Gets the displayName
    * Scope tag display name.
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
    * Scope tag display name.
    *
    * @param string $val The value of the displayName
    *
    * @return CloudPcUserRoleScopeTagInfo
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the roleScopeTagId
    * Scope tag ID.
    *
    * @return string|null The roleScopeTagId
    */
    public function getRoleScopeTagId()
    {
        if (array_key_exists("roleScopeTagId", $this->_propDict)) {
            return $this->_propDict["roleScopeTagId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagId
    * Scope tag ID.
    *
    * @param string $val The value of the roleScopeTagId
    *
    * @return CloudPcUserRoleScopeTagInfo
    */
    public function setRoleScopeTagId($val)
    {
        $this->_propDict["roleScopeTagId"] = $val;
        return $this;
    }
}
