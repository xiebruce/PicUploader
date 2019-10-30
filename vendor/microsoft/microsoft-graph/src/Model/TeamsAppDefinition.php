<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppDefinition File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* TeamsAppDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TeamsAppDefinition extends Entity
{
    /**
    * Gets the teamsAppId
    * The id from the Teams App manifest.
    *
    * @return string The teamsAppId
    */
    public function getTeamsAppId()
    {
        if (array_key_exists("teamsAppId", $this->_propDict)) {
            return $this->_propDict["teamsAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teamsAppId
    * The id from the Teams App manifest.
    *
    * @param string $val The teamsAppId
    *
    * @return TeamsAppDefinition
    */
    public function setTeamsAppId($val)
    {
        $this->_propDict["teamsAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the app provided by the app developer.
    *
    * @return string The displayName
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
    * The name of the app provided by the app developer.
    *
    * @param string $val The displayName
    *
    * @return TeamsAppDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The version number of the application.
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * The version number of the application.
    *
    * @param string $val The version
    *
    * @return TeamsAppDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}