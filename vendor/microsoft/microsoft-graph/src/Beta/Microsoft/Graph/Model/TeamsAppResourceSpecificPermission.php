<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppResourceSpecificPermission File
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
* TeamsAppResourceSpecificPermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppResourceSpecificPermission extends Entity
{

    /**
    * Gets the permissionType
    * The type of resource-specific permission.
    *
    * @return TeamsAppResourceSpecificPermissionType|null The permissionType
    */
    public function getPermissionType()
    {
        if (array_key_exists("permissionType", $this->_propDict)) {
            if (is_a($this->_propDict["permissionType"], "\Beta\Microsoft\Graph\Model\TeamsAppResourceSpecificPermissionType") || is_null($this->_propDict["permissionType"])) {
                return $this->_propDict["permissionType"];
            } else {
                $this->_propDict["permissionType"] = new TeamsAppResourceSpecificPermissionType($this->_propDict["permissionType"]);
                return $this->_propDict["permissionType"];
            }
        }
        return null;
    }

    /**
    * Sets the permissionType
    * The type of resource-specific permission.
    *
    * @param TeamsAppResourceSpecificPermissionType $val The value to assign to the permissionType
    *
    * @return TeamsAppResourceSpecificPermission The TeamsAppResourceSpecificPermission
    */
    public function setPermissionType($val)
    {
        $this->_propDict["permissionType"] = $val;
         return $this;
    }
    /**
    * Gets the permissionValue
    * The name of the resource-specific permission.
    *
    * @return string|null The permissionValue
    */
    public function getPermissionValue()
    {
        if (array_key_exists("permissionValue", $this->_propDict)) {
            return $this->_propDict["permissionValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionValue
    * The name of the resource-specific permission.
    *
    * @param string $val The value of the permissionValue
    *
    * @return TeamsAppResourceSpecificPermission
    */
    public function setPermissionValue($val)
    {
        $this->_propDict["permissionValue"] = $val;
        return $this;
    }
}
