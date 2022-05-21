<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementIntentInfo File
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
* ManagementIntentInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementIntentInfo extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the managementIntentDisplayName
    * The display name for the management intent. Optional. Read-only.
    *
    * @return string|null The managementIntentDisplayName
    */
    public function getManagementIntentDisplayName()
    {
        if (array_key_exists("managementIntentDisplayName", $this->_propDict)) {
            return $this->_propDict["managementIntentDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementIntentDisplayName
    * The display name for the management intent. Optional. Read-only.
    *
    * @param string $val The value of the managementIntentDisplayName
    *
    * @return ManagementIntentInfo
    */
    public function setManagementIntentDisplayName($val)
    {
        $this->_propDict["managementIntentDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the managementIntentId
    * The identifier for the management intent. Required. Read-only.
    *
    * @return string|null The managementIntentId
    */
    public function getManagementIntentId()
    {
        if (array_key_exists("managementIntentId", $this->_propDict)) {
            return $this->_propDict["managementIntentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementIntentId
    * The identifier for the management intent. Required. Read-only.
    *
    * @param string $val The value of the managementIntentId
    *
    * @return ManagementIntentInfo
    */
    public function setManagementIntentId($val)
    {
        $this->_propDict["managementIntentId"] = $val;
        return $this;
    }

    /**
    * Gets the managementTemplates
    * The collection of management template information associated with the management intent. Optional. Read-only.
    *
    * @return ManagementTemplateDetailedInfo|null The managementTemplates
    */
    public function getManagementTemplates()
    {
        if (array_key_exists("managementTemplates", $this->_propDict)) {
            if (is_a($this->_propDict["managementTemplates"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplateDetailedInfo") || is_null($this->_propDict["managementTemplates"])) {
                return $this->_propDict["managementTemplates"];
            } else {
                $this->_propDict["managementTemplates"] = new ManagementTemplateDetailedInfo($this->_propDict["managementTemplates"]);
                return $this->_propDict["managementTemplates"];
            }
        }
        return null;
    }

    /**
    * Sets the managementTemplates
    * The collection of management template information associated with the management intent. Optional. Read-only.
    *
    * @param ManagementTemplateDetailedInfo $val The value to assign to the managementTemplates
    *
    * @return ManagementIntentInfo The ManagementIntentInfo
    */
    public function setManagementTemplates($val)
    {
        $this->_propDict["managementTemplates"] = $val;
         return $this;
    }
}
