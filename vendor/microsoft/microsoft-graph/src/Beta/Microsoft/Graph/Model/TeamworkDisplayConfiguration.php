<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDisplayConfiguration File
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
* TeamworkDisplayConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDisplayConfiguration extends Entity
{

    /**
    * Gets the configuredDisplays
    * The list of configured displays. Applicable only for Microsoft Teams Rooms devices.
    *
    * @return TeamworkConfiguredPeripheral|null The configuredDisplays
    */
    public function getConfiguredDisplays()
    {
        if (array_key_exists("configuredDisplays", $this->_propDict)) {
            if (is_a($this->_propDict["configuredDisplays"], "\Beta\Microsoft\Graph\Model\TeamworkConfiguredPeripheral") || is_null($this->_propDict["configuredDisplays"])) {
                return $this->_propDict["configuredDisplays"];
            } else {
                $this->_propDict["configuredDisplays"] = new TeamworkConfiguredPeripheral($this->_propDict["configuredDisplays"]);
                return $this->_propDict["configuredDisplays"];
            }
        }
        return null;
    }

    /**
    * Sets the configuredDisplays
    * The list of configured displays. Applicable only for Microsoft Teams Rooms devices.
    *
    * @param TeamworkConfiguredPeripheral $val The value to assign to the configuredDisplays
    *
    * @return TeamworkDisplayConfiguration The TeamworkDisplayConfiguration
    */
    public function setConfiguredDisplays($val)
    {
        $this->_propDict["configuredDisplays"] = $val;
         return $this;
    }
    /**
    * Gets the displayCount
    * Total number of connected displays, including the inbuilt display. Applicable only for Teams Rooms devices.
    *
    * @return int|null The displayCount
    */
    public function getDisplayCount()
    {
        if (array_key_exists("displayCount", $this->_propDict)) {
            return $this->_propDict["displayCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayCount
    * Total number of connected displays, including the inbuilt display. Applicable only for Teams Rooms devices.
    *
    * @param int $val The value of the displayCount
    *
    * @return TeamworkDisplayConfiguration
    */
    public function setDisplayCount($val)
    {
        $this->_propDict["displayCount"] = $val;
        return $this;
    }

    /**
    * Gets the inBuiltDisplayScreenConfiguration
    * Configuration for the inbuilt display. Not applicable for Teams Rooms devices.
    *
    * @return TeamworkDisplayScreenConfiguration|null The inBuiltDisplayScreenConfiguration
    */
    public function getInBuiltDisplayScreenConfiguration()
    {
        if (array_key_exists("inBuiltDisplayScreenConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["inBuiltDisplayScreenConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkDisplayScreenConfiguration") || is_null($this->_propDict["inBuiltDisplayScreenConfiguration"])) {
                return $this->_propDict["inBuiltDisplayScreenConfiguration"];
            } else {
                $this->_propDict["inBuiltDisplayScreenConfiguration"] = new TeamworkDisplayScreenConfiguration($this->_propDict["inBuiltDisplayScreenConfiguration"]);
                return $this->_propDict["inBuiltDisplayScreenConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the inBuiltDisplayScreenConfiguration
    * Configuration for the inbuilt display. Not applicable for Teams Rooms devices.
    *
    * @param TeamworkDisplayScreenConfiguration $val The value to assign to the inBuiltDisplayScreenConfiguration
    *
    * @return TeamworkDisplayConfiguration The TeamworkDisplayConfiguration
    */
    public function setInBuiltDisplayScreenConfiguration($val)
    {
        $this->_propDict["inBuiltDisplayScreenConfiguration"] = $val;
         return $this;
    }
    /**
    * Gets the isContentDuplicationAllowed
    * True if content duplication is allowed. Applicable only for Teams Rooms devices.
    *
    * @return bool|null The isContentDuplicationAllowed
    */
    public function getIsContentDuplicationAllowed()
    {
        if (array_key_exists("isContentDuplicationAllowed", $this->_propDict)) {
            return $this->_propDict["isContentDuplicationAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isContentDuplicationAllowed
    * True if content duplication is allowed. Applicable only for Teams Rooms devices.
    *
    * @param bool $val The value of the isContentDuplicationAllowed
    *
    * @return TeamworkDisplayConfiguration
    */
    public function setIsContentDuplicationAllowed($val)
    {
        $this->_propDict["isContentDuplicationAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the isDualDisplayModeEnabled
    * True if dual display mode is enabled. If isDualDisplayModeEnabled is true, then the content will be displayed on both front of room screens instead of just the one screen, when it is shared via the HDMI ingest module on the Microsoft Teams Rooms device. Applicable only for Teams Rooms devices.
    *
    * @return bool|null The isDualDisplayModeEnabled
    */
    public function getIsDualDisplayModeEnabled()
    {
        if (array_key_exists("isDualDisplayModeEnabled", $this->_propDict)) {
            return $this->_propDict["isDualDisplayModeEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDualDisplayModeEnabled
    * True if dual display mode is enabled. If isDualDisplayModeEnabled is true, then the content will be displayed on both front of room screens instead of just the one screen, when it is shared via the HDMI ingest module on the Microsoft Teams Rooms device. Applicable only for Teams Rooms devices.
    *
    * @param bool $val The value of the isDualDisplayModeEnabled
    *
    * @return TeamworkDisplayConfiguration
    */
    public function setIsDualDisplayModeEnabled($val)
    {
        $this->_propDict["isDualDisplayModeEnabled"] = $val;
        return $this;
    }
}
