<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppPermissionSet File
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
* TeamsAppPermissionSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppPermissionSet extends Entity
{

    /**
    * Gets the resourceSpecificPermissions
    * A collection of resource-specific permissions.
    *
    * @return TeamsAppResourceSpecificPermission|null The resourceSpecificPermissions
    */
    public function getResourceSpecificPermissions()
    {
        if (array_key_exists("resourceSpecificPermissions", $this->_propDict)) {
            if (is_a($this->_propDict["resourceSpecificPermissions"], "\Beta\Microsoft\Graph\Model\TeamsAppResourceSpecificPermission") || is_null($this->_propDict["resourceSpecificPermissions"])) {
                return $this->_propDict["resourceSpecificPermissions"];
            } else {
                $this->_propDict["resourceSpecificPermissions"] = new TeamsAppResourceSpecificPermission($this->_propDict["resourceSpecificPermissions"]);
                return $this->_propDict["resourceSpecificPermissions"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceSpecificPermissions
    * A collection of resource-specific permissions.
    *
    * @param TeamsAppResourceSpecificPermission $val The value to assign to the resourceSpecificPermissions
    *
    * @return TeamsAppPermissionSet The TeamsAppPermissionSet
    */
    public function setResourceSpecificPermissions($val)
    {
        $this->_propDict["resourceSpecificPermissions"] = $val;
         return $this;
    }
}
