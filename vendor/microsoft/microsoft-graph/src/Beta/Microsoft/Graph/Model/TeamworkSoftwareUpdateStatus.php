<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkSoftwareUpdateStatus File
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
* TeamworkSoftwareUpdateStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkSoftwareUpdateStatus extends Entity
{
    /**
    * Gets the availableVersion
    * The available software version to update.
    *
    * @return string|null The availableVersion
    */
    public function getAvailableVersion()
    {
        if (array_key_exists("availableVersion", $this->_propDict)) {
            return $this->_propDict["availableVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availableVersion
    * The available software version to update.
    *
    * @param string $val The value of the availableVersion
    *
    * @return TeamworkSoftwareUpdateStatus
    */
    public function setAvailableVersion($val)
    {
        $this->_propDict["availableVersion"] = $val;
        return $this;
    }
    /**
    * Gets the currentVersion
    * The current software version.
    *
    * @return string|null The currentVersion
    */
    public function getCurrentVersion()
    {
        if (array_key_exists("currentVersion", $this->_propDict)) {
            return $this->_propDict["currentVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currentVersion
    * The current software version.
    *
    * @param string $val The value of the currentVersion
    *
    * @return TeamworkSoftwareUpdateStatus
    */
    public function setCurrentVersion($val)
    {
        $this->_propDict["currentVersion"] = $val;
        return $this;
    }

    /**
    * Gets the softwareFreshness
    * The update status of the software. The possible values are: unknown, latest, updateAvailable, unknownFutureValue.
    *
    * @return TeamworkSoftwareFreshness|null The softwareFreshness
    */
    public function getSoftwareFreshness()
    {
        if (array_key_exists("softwareFreshness", $this->_propDict)) {
            if (is_a($this->_propDict["softwareFreshness"], "\Beta\Microsoft\Graph\Model\TeamworkSoftwareFreshness") || is_null($this->_propDict["softwareFreshness"])) {
                return $this->_propDict["softwareFreshness"];
            } else {
                $this->_propDict["softwareFreshness"] = new TeamworkSoftwareFreshness($this->_propDict["softwareFreshness"]);
                return $this->_propDict["softwareFreshness"];
            }
        }
        return null;
    }

    /**
    * Sets the softwareFreshness
    * The update status of the software. The possible values are: unknown, latest, updateAvailable, unknownFutureValue.
    *
    * @param TeamworkSoftwareFreshness $val The value to assign to the softwareFreshness
    *
    * @return TeamworkSoftwareUpdateStatus The TeamworkSoftwareUpdateStatus
    */
    public function setSoftwareFreshness($val)
    {
        $this->_propDict["softwareFreshness"] = $val;
         return $this;
    }
}
