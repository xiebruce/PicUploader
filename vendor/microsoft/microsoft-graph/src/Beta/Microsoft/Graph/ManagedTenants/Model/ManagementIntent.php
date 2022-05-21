<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementIntent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* ManagementIntent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementIntent extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The display name for the management intent. Optional. Read-only.
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
    * The display name for the management intent. Optional. Read-only.
    *
    * @param string $val The displayName
    *
    * @return ManagementIntent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isGlobal
    * A flag indicating whether the management intent is global. Required. Read-only.
    *
    * @return bool|null The isGlobal
    */
    public function getIsGlobal()
    {
        if (array_key_exists("isGlobal", $this->_propDict)) {
            return $this->_propDict["isGlobal"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isGlobal
    * A flag indicating whether the management intent is global. Required. Read-only.
    *
    * @param bool $val The isGlobal
    *
    * @return ManagementIntent
    */
    public function setIsGlobal($val)
    {
        $this->_propDict["isGlobal"] = boolval($val);
        return $this;
    }


     /**
     * Gets the managementTemplates
    * The collection of management templates associated with the management intent. Optional. Read-only.
     *
     * @return array|null The managementTemplates
     */
    public function getManagementTemplates()
    {
        if (array_key_exists("managementTemplates", $this->_propDict)) {
           return $this->_propDict["managementTemplates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplates
    * The collection of management templates associated with the management intent. Optional. Read-only.
    *
    * @param ManagementTemplateDetailedInfo[] $val The managementTemplates
    *
    * @return ManagementIntent
    */
    public function setManagementTemplates($val)
    {
        $this->_propDict["managementTemplates"] = $val;
        return $this;
    }

}
