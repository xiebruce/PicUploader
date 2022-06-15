<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Teamwork File
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
* Teamwork class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Teamwork extends Entity
{

     /**
     * Gets the workforceIntegrations
    * A workforce integration with shifts.
     *
     * @return array|null The workforceIntegrations
     */
    public function getWorkforceIntegrations()
    {
        if (array_key_exists("workforceIntegrations", $this->_propDict)) {
           return $this->_propDict["workforceIntegrations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workforceIntegrations
    * A workforce integration with shifts.
    *
    * @param WorkforceIntegration[] $val The workforceIntegrations
    *
    * @return Teamwork
    */
    public function setWorkforceIntegrations($val)
    {
        $this->_propDict["workforceIntegrations"] = $val;
        return $this;
    }


     /**
     * Gets the deletedTeams
     *
     * @return array|null The deletedTeams
     */
    public function getDeletedTeams()
    {
        if (array_key_exists("deletedTeams", $this->_propDict)) {
           return $this->_propDict["deletedTeams"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deletedTeams
    *
    * @param DeletedTeam[] $val The deletedTeams
    *
    * @return Teamwork
    */
    public function setDeletedTeams($val)
    {
        $this->_propDict["deletedTeams"] = $val;
        return $this;
    }


     /**
     * Gets the devices
    * The Teams devices provisioned for the tenant.
     *
     * @return array|null The devices
     */
    public function getDevices()
    {
        if (array_key_exists("devices", $this->_propDict)) {
           return $this->_propDict["devices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devices
    * The Teams devices provisioned for the tenant.
    *
    * @param TeamworkDevice[] $val The devices
    *
    * @return Teamwork
    */
    public function setDevices($val)
    {
        $this->_propDict["devices"] = $val;
        return $this;
    }

    /**
    * Gets the teamsAppSettings
    *
    * @return TeamsAppSettings|null The teamsAppSettings
    */
    public function getTeamsAppSettings()
    {
        if (array_key_exists("teamsAppSettings", $this->_propDict)) {
            if (is_a($this->_propDict["teamsAppSettings"], "\Beta\Microsoft\Graph\Model\TeamsAppSettings") || is_null($this->_propDict["teamsAppSettings"])) {
                return $this->_propDict["teamsAppSettings"];
            } else {
                $this->_propDict["teamsAppSettings"] = new TeamsAppSettings($this->_propDict["teamsAppSettings"]);
                return $this->_propDict["teamsAppSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsAppSettings
    *
    * @param TeamsAppSettings $val The teamsAppSettings
    *
    * @return Teamwork
    */
    public function setTeamsAppSettings($val)
    {
        $this->_propDict["teamsAppSettings"] = $val;
        return $this;
    }

}
