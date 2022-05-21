<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementActionInfo File
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
* ManagementActionInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementActionInfo extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the managementActionId
    * The identifier for the management action. Required. Read-only.
    *
    * @return string|null The managementActionId
    */
    public function getManagementActionId()
    {
        if (array_key_exists("managementActionId", $this->_propDict)) {
            return $this->_propDict["managementActionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementActionId
    * The identifier for the management action. Required. Read-only.
    *
    * @param string $val The value of the managementActionId
    *
    * @return ManagementActionInfo
    */
    public function setManagementActionId($val)
    {
        $this->_propDict["managementActionId"] = $val;
        return $this;
    }
    /**
    * Gets the managementTemplateId
    * The identifier for the management template. Required. Read-only.
    *
    * @return string|null The managementTemplateId
    */
    public function getManagementTemplateId()
    {
        if (array_key_exists("managementTemplateId", $this->_propDict)) {
            return $this->_propDict["managementTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateId
    * The identifier for the management template. Required. Read-only.
    *
    * @param string $val The value of the managementTemplateId
    *
    * @return ManagementActionInfo
    */
    public function setManagementTemplateId($val)
    {
        $this->_propDict["managementTemplateId"] = $val;
        return $this;
    }
    /**
    * Gets the managementTemplateVersion
    *
    * @return int|null The managementTemplateVersion
    */
    public function getManagementTemplateVersion()
    {
        if (array_key_exists("managementTemplateVersion", $this->_propDict)) {
            return $this->_propDict["managementTemplateVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateVersion
    *
    * @param int $val The value of the managementTemplateVersion
    *
    * @return ManagementActionInfo
    */
    public function setManagementTemplateVersion($val)
    {
        $this->_propDict["managementTemplateVersion"] = $val;
        return $this;
    }
}
