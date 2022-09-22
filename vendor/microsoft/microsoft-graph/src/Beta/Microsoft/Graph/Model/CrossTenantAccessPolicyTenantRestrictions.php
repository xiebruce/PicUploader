<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyTenantRestrictions File
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
* CrossTenantAccessPolicyTenantRestrictions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyTenantRestrictions extends CrossTenantAccessPolicyB2BSetting
{

    /**
    * Gets the devices
    *
    * @return DevicesFilter|null The devices
    */
    public function getDevices()
    {
        if (array_key_exists("devices", $this->_propDict)) {
            if (is_a($this->_propDict["devices"], "\Beta\Microsoft\Graph\Model\DevicesFilter") || is_null($this->_propDict["devices"])) {
                return $this->_propDict["devices"];
            } else {
                $this->_propDict["devices"] = new DevicesFilter($this->_propDict["devices"]);
                return $this->_propDict["devices"];
            }
        }
        return null;
    }

    /**
    * Sets the devices
    *
    * @param DevicesFilter $val The value to assign to the devices
    *
    * @return CrossTenantAccessPolicyTenantRestrictions The CrossTenantAccessPolicyTenantRestrictions
    */
    public function setDevices($val)
    {
        $this->_propDict["devices"] = $val;
         return $this;
    }
}
