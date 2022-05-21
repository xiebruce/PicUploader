<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDeviceSoftwareVersions File
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
* TeamworkDeviceSoftwareVersions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDeviceSoftwareVersions extends Entity
{
    /**
    * Gets the adminAgentSoftwareVersion
    * The software version for the admin agent running on the device.
    *
    * @return string|null The adminAgentSoftwareVersion
    */
    public function getAdminAgentSoftwareVersion()
    {
        if (array_key_exists("adminAgentSoftwareVersion", $this->_propDict)) {
            return $this->_propDict["adminAgentSoftwareVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the adminAgentSoftwareVersion
    * The software version for the admin agent running on the device.
    *
    * @param string $val The value of the adminAgentSoftwareVersion
    *
    * @return TeamworkDeviceSoftwareVersions
    */
    public function setAdminAgentSoftwareVersion($val)
    {
        $this->_propDict["adminAgentSoftwareVersion"] = $val;
        return $this;
    }
    /**
    * Gets the firmwareSoftwareVersion
    * The software version for the firmware running on the device.
    *
    * @return string|null The firmwareSoftwareVersion
    */
    public function getFirmwareSoftwareVersion()
    {
        if (array_key_exists("firmwareSoftwareVersion", $this->_propDict)) {
            return $this->_propDict["firmwareSoftwareVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firmwareSoftwareVersion
    * The software version for the firmware running on the device.
    *
    * @param string $val The value of the firmwareSoftwareVersion
    *
    * @return TeamworkDeviceSoftwareVersions
    */
    public function setFirmwareSoftwareVersion($val)
    {
        $this->_propDict["firmwareSoftwareVersion"] = $val;
        return $this;
    }
    /**
    * Gets the operatingSystemSoftwareVersion
    * The software version for the operating system on the device.
    *
    * @return string|null The operatingSystemSoftwareVersion
    */
    public function getOperatingSystemSoftwareVersion()
    {
        if (array_key_exists("operatingSystemSoftwareVersion", $this->_propDict)) {
            return $this->_propDict["operatingSystemSoftwareVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystemSoftwareVersion
    * The software version for the operating system on the device.
    *
    * @param string $val The value of the operatingSystemSoftwareVersion
    *
    * @return TeamworkDeviceSoftwareVersions
    */
    public function setOperatingSystemSoftwareVersion($val)
    {
        $this->_propDict["operatingSystemSoftwareVersion"] = $val;
        return $this;
    }
    /**
    * Gets the partnerAgentSoftwareVersion
    * The software version for the partner agent running on the device.
    *
    * @return string|null The partnerAgentSoftwareVersion
    */
    public function getPartnerAgentSoftwareVersion()
    {
        if (array_key_exists("partnerAgentSoftwareVersion", $this->_propDict)) {
            return $this->_propDict["partnerAgentSoftwareVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the partnerAgentSoftwareVersion
    * The software version for the partner agent running on the device.
    *
    * @param string $val The value of the partnerAgentSoftwareVersion
    *
    * @return TeamworkDeviceSoftwareVersions
    */
    public function setPartnerAgentSoftwareVersion($val)
    {
        $this->_propDict["partnerAgentSoftwareVersion"] = $val;
        return $this;
    }
    /**
    * Gets the teamsClientSoftwareVersion
    * The software version for the Teams client running on the device.
    *
    * @return string|null The teamsClientSoftwareVersion
    */
    public function getTeamsClientSoftwareVersion()
    {
        if (array_key_exists("teamsClientSoftwareVersion", $this->_propDict)) {
            return $this->_propDict["teamsClientSoftwareVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamsClientSoftwareVersion
    * The software version for the Teams client running on the device.
    *
    * @param string $val The value of the teamsClientSoftwareVersion
    *
    * @return TeamworkDeviceSoftwareVersions
    */
    public function setTeamsClientSoftwareVersion($val)
    {
        $this->_propDict["teamsClientSoftwareVersion"] = $val;
        return $this;
    }
}
