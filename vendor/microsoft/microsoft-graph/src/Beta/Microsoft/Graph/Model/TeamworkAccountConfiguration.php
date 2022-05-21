<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkAccountConfiguration File
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
* TeamworkAccountConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkAccountConfiguration extends Entity
{

    /**
    * Gets the onPremisesCalendarSyncConfiguration
    * The account used to sync the calendar.
    *
    * @return TeamworkOnPremisesCalendarSyncConfiguration|null The onPremisesCalendarSyncConfiguration
    */
    public function getOnPremisesCalendarSyncConfiguration()
    {
        if (array_key_exists("onPremisesCalendarSyncConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesCalendarSyncConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkOnPremisesCalendarSyncConfiguration") || is_null($this->_propDict["onPremisesCalendarSyncConfiguration"])) {
                return $this->_propDict["onPremisesCalendarSyncConfiguration"];
            } else {
                $this->_propDict["onPremisesCalendarSyncConfiguration"] = new TeamworkOnPremisesCalendarSyncConfiguration($this->_propDict["onPremisesCalendarSyncConfiguration"]);
                return $this->_propDict["onPremisesCalendarSyncConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the onPremisesCalendarSyncConfiguration
    * The account used to sync the calendar.
    *
    * @param TeamworkOnPremisesCalendarSyncConfiguration $val The value to assign to the onPremisesCalendarSyncConfiguration
    *
    * @return TeamworkAccountConfiguration The TeamworkAccountConfiguration
    */
    public function setOnPremisesCalendarSyncConfiguration($val)
    {
        $this->_propDict["onPremisesCalendarSyncConfiguration"] = $val;
         return $this;
    }

    /**
    * Gets the supportedClient
    * The supported client for Teams Rooms devices. The possible values are: unknown, skypeDefaultAndTeams, teamsDefaultAndSkype, skypeOnly, teamsOnly, unknownFutureValue.
    *
    * @return TeamworkSupportedClient|null The supportedClient
    */
    public function getSupportedClient()
    {
        if (array_key_exists("supportedClient", $this->_propDict)) {
            if (is_a($this->_propDict["supportedClient"], "\Beta\Microsoft\Graph\Model\TeamworkSupportedClient") || is_null($this->_propDict["supportedClient"])) {
                return $this->_propDict["supportedClient"];
            } else {
                $this->_propDict["supportedClient"] = new TeamworkSupportedClient($this->_propDict["supportedClient"]);
                return $this->_propDict["supportedClient"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedClient
    * The supported client for Teams Rooms devices. The possible values are: unknown, skypeDefaultAndTeams, teamsDefaultAndSkype, skypeOnly, teamsOnly, unknownFutureValue.
    *
    * @param TeamworkSupportedClient $val The value to assign to the supportedClient
    *
    * @return TeamworkAccountConfiguration The TeamworkAccountConfiguration
    */
    public function setSupportedClient($val)
    {
        $this->_propDict["supportedClient"] = $val;
         return $this;
    }
}
