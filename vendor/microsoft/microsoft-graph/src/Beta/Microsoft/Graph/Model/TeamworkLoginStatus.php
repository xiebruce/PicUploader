<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkLoginStatus File
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
* TeamworkLoginStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkLoginStatus extends Entity
{

    /**
    * Gets the exchangeConnection
    * Information about the Exchange connection.
    *
    * @return TeamworkConnection|null The exchangeConnection
    */
    public function getExchangeConnection()
    {
        if (array_key_exists("exchangeConnection", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeConnection"], "\Beta\Microsoft\Graph\Model\TeamworkConnection") || is_null($this->_propDict["exchangeConnection"])) {
                return $this->_propDict["exchangeConnection"];
            } else {
                $this->_propDict["exchangeConnection"] = new TeamworkConnection($this->_propDict["exchangeConnection"]);
                return $this->_propDict["exchangeConnection"];
            }
        }
        return null;
    }

    /**
    * Sets the exchangeConnection
    * Information about the Exchange connection.
    *
    * @param TeamworkConnection $val The value to assign to the exchangeConnection
    *
    * @return TeamworkLoginStatus The TeamworkLoginStatus
    */
    public function setExchangeConnection($val)
    {
        $this->_propDict["exchangeConnection"] = $val;
         return $this;
    }

    /**
    * Gets the skypeConnection
    * Information about the Skype for Business connection.
    *
    * @return TeamworkConnection|null The skypeConnection
    */
    public function getSkypeConnection()
    {
        if (array_key_exists("skypeConnection", $this->_propDict)) {
            if (is_a($this->_propDict["skypeConnection"], "\Beta\Microsoft\Graph\Model\TeamworkConnection") || is_null($this->_propDict["skypeConnection"])) {
                return $this->_propDict["skypeConnection"];
            } else {
                $this->_propDict["skypeConnection"] = new TeamworkConnection($this->_propDict["skypeConnection"]);
                return $this->_propDict["skypeConnection"];
            }
        }
        return null;
    }

    /**
    * Sets the skypeConnection
    * Information about the Skype for Business connection.
    *
    * @param TeamworkConnection $val The value to assign to the skypeConnection
    *
    * @return TeamworkLoginStatus The TeamworkLoginStatus
    */
    public function setSkypeConnection($val)
    {
        $this->_propDict["skypeConnection"] = $val;
         return $this;
    }

    /**
    * Gets the teamsConnection
    * Information about the Teams connection.
    *
    * @return TeamworkConnection|null The teamsConnection
    */
    public function getTeamsConnection()
    {
        if (array_key_exists("teamsConnection", $this->_propDict)) {
            if (is_a($this->_propDict["teamsConnection"], "\Beta\Microsoft\Graph\Model\TeamworkConnection") || is_null($this->_propDict["teamsConnection"])) {
                return $this->_propDict["teamsConnection"];
            } else {
                $this->_propDict["teamsConnection"] = new TeamworkConnection($this->_propDict["teamsConnection"]);
                return $this->_propDict["teamsConnection"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsConnection
    * Information about the Teams connection.
    *
    * @param TeamworkConnection $val The value to assign to the teamsConnection
    *
    * @return TeamworkLoginStatus The TeamworkLoginStatus
    */
    public function setTeamsConnection($val)
    {
        $this->_propDict["teamsConnection"] = $val;
         return $this;
    }
}
