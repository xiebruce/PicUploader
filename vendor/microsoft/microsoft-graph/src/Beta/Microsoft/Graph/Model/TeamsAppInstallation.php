<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppInstallation File
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
* TeamsAppInstallation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppInstallation extends Entity
{
    /**
    * Gets the consentedPermissionSet
    * The set of resource-specific permissions consented to while installing or upgrading the teamsApp.
    *
    * @return TeamsAppPermissionSet|null The consentedPermissionSet
    */
    public function getConsentedPermissionSet()
    {
        if (array_key_exists("consentedPermissionSet", $this->_propDict)) {
            if (is_a($this->_propDict["consentedPermissionSet"], "\Beta\Microsoft\Graph\Model\TeamsAppPermissionSet") || is_null($this->_propDict["consentedPermissionSet"])) {
                return $this->_propDict["consentedPermissionSet"];
            } else {
                $this->_propDict["consentedPermissionSet"] = new TeamsAppPermissionSet($this->_propDict["consentedPermissionSet"]);
                return $this->_propDict["consentedPermissionSet"];
            }
        }
        return null;
    }

    /**
    * Sets the consentedPermissionSet
    * The set of resource-specific permissions consented to while installing or upgrading the teamsApp.
    *
    * @param TeamsAppPermissionSet $val The consentedPermissionSet
    *
    * @return TeamsAppInstallation
    */
    public function setConsentedPermissionSet($val)
    {
        $this->_propDict["consentedPermissionSet"] = $val;
        return $this;
    }

    /**
    * Gets the teamsApp
    * The app that is installed.
    *
    * @return TeamsApp|null The teamsApp
    */
    public function getTeamsApp()
    {
        if (array_key_exists("teamsApp", $this->_propDict)) {
            if (is_a($this->_propDict["teamsApp"], "\Beta\Microsoft\Graph\Model\TeamsApp") || is_null($this->_propDict["teamsApp"])) {
                return $this->_propDict["teamsApp"];
            } else {
                $this->_propDict["teamsApp"] = new TeamsApp($this->_propDict["teamsApp"]);
                return $this->_propDict["teamsApp"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsApp
    * The app that is installed.
    *
    * @param TeamsApp $val The teamsApp
    *
    * @return TeamsAppInstallation
    */
    public function setTeamsApp($val)
    {
        $this->_propDict["teamsApp"] = $val;
        return $this;
    }

    /**
    * Gets the teamsAppDefinition
    * The details of this version of the app.
    *
    * @return TeamsAppDefinition|null The teamsAppDefinition
    */
    public function getTeamsAppDefinition()
    {
        if (array_key_exists("teamsAppDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["teamsAppDefinition"], "\Beta\Microsoft\Graph\Model\TeamsAppDefinition") || is_null($this->_propDict["teamsAppDefinition"])) {
                return $this->_propDict["teamsAppDefinition"];
            } else {
                $this->_propDict["teamsAppDefinition"] = new TeamsAppDefinition($this->_propDict["teamsAppDefinition"]);
                return $this->_propDict["teamsAppDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsAppDefinition
    * The details of this version of the app.
    *
    * @param TeamsAppDefinition $val The teamsAppDefinition
    *
    * @return TeamsAppInstallation
    */
    public function setTeamsAppDefinition($val)
    {
        $this->_propDict["teamsAppDefinition"] = $val;
        return $this;
    }

}
