<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleManagementAlert File
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
* RoleManagementAlert class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleManagementAlert extends Entity
{

     /**
     * Gets the alertConfigurations
     *
     * @return array|null The alertConfigurations
     */
    public function getAlertConfigurations()
    {
        if (array_key_exists("alertConfigurations", $this->_propDict)) {
           return $this->_propDict["alertConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertConfigurations
    *
    * @param UnifiedRoleManagementAlertConfiguration[] $val The alertConfigurations
    *
    * @return RoleManagementAlert
    */
    public function setAlertConfigurations($val)
    {
        $this->_propDict["alertConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the alertDefinitions
     *
     * @return array|null The alertDefinitions
     */
    public function getAlertDefinitions()
    {
        if (array_key_exists("alertDefinitions", $this->_propDict)) {
           return $this->_propDict["alertDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertDefinitions
    *
    * @param UnifiedRoleManagementAlertDefinition[] $val The alertDefinitions
    *
    * @return RoleManagementAlert
    */
    public function setAlertDefinitions($val)
    {
        $this->_propDict["alertDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the alerts
     *
     * @return array|null The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists("alerts", $this->_propDict)) {
           return $this->_propDict["alerts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alerts
    *
    * @param UnifiedRoleManagementAlert[] $val The alerts
    *
    * @return RoleManagementAlert
    */
    public function setAlerts($val)
    {
        $this->_propDict["alerts"] = $val;
        return $this;
    }


     /**
     * Gets the operations
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    *
    * @param LongRunningOperation[] $val The operations
    *
    * @return RoleManagementAlert
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }

}
