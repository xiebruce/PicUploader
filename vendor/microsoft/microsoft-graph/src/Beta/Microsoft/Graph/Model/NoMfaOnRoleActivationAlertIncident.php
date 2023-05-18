<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NoMfaOnRoleActivationAlertIncident File
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
* NoMfaOnRoleActivationAlertIncident class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NoMfaOnRoleActivationAlertIncident extends UnifiedRoleManagementAlertIncident
{
    /**
    * Gets the roleDisplayName
    *
    * @return string|null The roleDisplayName
    */
    public function getRoleDisplayName()
    {
        if (array_key_exists("roleDisplayName", $this->_propDict)) {
            return $this->_propDict["roleDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDisplayName
    *
    * @param string $val The roleDisplayName
    *
    * @return NoMfaOnRoleActivationAlertIncident
    */
    public function setRoleDisplayName($val)
    {
        $this->_propDict["roleDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the roleTemplateId
    *
    * @return string|null The roleTemplateId
    */
    public function getRoleTemplateId()
    {
        if (array_key_exists("roleTemplateId", $this->_propDict)) {
            return $this->_propDict["roleTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleTemplateId
    *
    * @param string $val The roleTemplateId
    *
    * @return NoMfaOnRoleActivationAlertIncident
    */
    public function setRoleTemplateId($val)
    {
        $this->_propDict["roleTemplateId"] = $val;
        return $this;
    }

}
