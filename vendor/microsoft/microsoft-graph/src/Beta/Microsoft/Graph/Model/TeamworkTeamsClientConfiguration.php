<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkTeamsClientConfiguration File
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
* TeamworkTeamsClientConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkTeamsClientConfiguration extends Entity
{

    /**
    * Gets the accountConfiguration
    * The configuration of the Microsoft Teams client user account for a device.
    *
    * @return TeamworkAccountConfiguration|null The accountConfiguration
    */
    public function getAccountConfiguration()
    {
        if (array_key_exists("accountConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["accountConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkAccountConfiguration") || is_null($this->_propDict["accountConfiguration"])) {
                return $this->_propDict["accountConfiguration"];
            } else {
                $this->_propDict["accountConfiguration"] = new TeamworkAccountConfiguration($this->_propDict["accountConfiguration"]);
                return $this->_propDict["accountConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the accountConfiguration
    * The configuration of the Microsoft Teams client user account for a device.
    *
    * @param TeamworkAccountConfiguration $val The value to assign to the accountConfiguration
    *
    * @return TeamworkTeamsClientConfiguration The TeamworkTeamsClientConfiguration
    */
    public function setAccountConfiguration($val)
    {
        $this->_propDict["accountConfiguration"] = $val;
         return $this;
    }

    /**
    * Gets the featuresConfiguration
    * The configuration of Microsoft Teams client features for a device.
    *
    * @return TeamworkFeaturesConfiguration|null The featuresConfiguration
    */
    public function getFeaturesConfiguration()
    {
        if (array_key_exists("featuresConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["featuresConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkFeaturesConfiguration") || is_null($this->_propDict["featuresConfiguration"])) {
                return $this->_propDict["featuresConfiguration"];
            } else {
                $this->_propDict["featuresConfiguration"] = new TeamworkFeaturesConfiguration($this->_propDict["featuresConfiguration"]);
                return $this->_propDict["featuresConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the featuresConfiguration
    * The configuration of Microsoft Teams client features for a device.
    *
    * @param TeamworkFeaturesConfiguration $val The value to assign to the featuresConfiguration
    *
    * @return TeamworkTeamsClientConfiguration The TeamworkTeamsClientConfiguration
    */
    public function setFeaturesConfiguration($val)
    {
        $this->_propDict["featuresConfiguration"] = $val;
         return $this;
    }
}
