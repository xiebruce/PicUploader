<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkSoftwareUpdateHealth File
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
* TeamworkSoftwareUpdateHealth class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkSoftwareUpdateHealth extends Entity
{

    /**
    * Gets the adminAgentSoftwareUpdateStatus
    * The software update available for the admin agent.
    *
    * @return TeamworkSoftwareUpdateStatus|null The adminAgentSoftwareUpdateStatus
    */
    public function getAdminAgentSoftwareUpdateStatus()
    {
        if (array_key_exists("adminAgentSoftwareUpdateStatus", $this->_propDict)) {
            if (is_a($this->_propDict["adminAgentSoftwareUpdateStatus"], "\Beta\Microsoft\Graph\Model\TeamworkSoftwareUpdateStatus") || is_null($this->_propDict["adminAgentSoftwareUpdateStatus"])) {
                return $this->_propDict["adminAgentSoftwareUpdateStatus"];
            } else {
                $this->_propDict["adminAgentSoftwareUpdateStatus"] = new TeamworkSoftwareUpdateStatus($this->_propDict["adminAgentSoftwareUpdateStatus"]);
                return $this->_propDict["adminAgentSoftwareUpdateStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the adminAgentSoftwareUpdateStatus
    * The software update available for the admin agent.
    *
    * @param TeamworkSoftwareUpdateStatus $val The value to assign to the adminAgentSoftwareUpdateStatus
    *
    * @return TeamworkSoftwareUpdateHealth The TeamworkSoftwareUpdateHealth
    */
    public function setAdminAgentSoftwareUpdateStatus($val)
    {
        $this->_propDict["adminAgentSoftwareUpdateStatus"] = $val;
         return $this;
    }

    /**
    * Gets the companyPortalSoftwareUpdateStatus
    * The software update available for the company portal.
    *
    * @return TeamworkSoftwareUpdateStatus|null The companyPortalSoftwareUpdateStatus
    */
    public function getCompanyPortalSoftwareUpdateStatus()
    {
        if (array_key_exists("companyPortalSoftwareUpdateStatus", $this->_propDict)) {
            if (is_a($this->_propDict["companyPortalSoftwareUpdateStatus"], "\Beta\Microsoft\Graph\Model\TeamworkSoftwareUpdateStatus") || is_null($this->_propDict["companyPortalSoftwareUpdateStatus"])) {
                return $this->_propDict["companyPortalSoftwareUpdateStatus"];
            } else {
                $this->_propDict["companyPortalSoftwareUpdateStatus"] = new TeamworkSoftwareUpdateStatus($this->_propDict["companyPortalSoftwareUpdateStatus"]);
                return $this->_propDict["companyPortalSoftwareUpdateStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the companyPortalSoftwareUpdateStatus
    * The software update available for the company portal.
    *
    * @param TeamworkSoftwareUpdateStatus $val The value to assign to the companyPortalSoftwareUpdateStatus
    *
    * @return TeamworkSoftwareUpdateHealth The TeamworkSoftwareUpdateHealth
    */
    public function setCompanyPortalSoftwareUpdateStatus($val)
    {
        $this->_propDict["companyPortalSoftwareUpdateStatus"] = $val;
         return $this;
    }

    /**
    * Gets the firmwareSoftwareUpdateStatus
    * The software update available for the firmware.
    *
    * @return TeamworkSoftwareUpdateStatus|null The firmwareSoftwareUpdateStatus
    */
    public function getFirmwareSoftwareUpdateStatus()
    {
        if (array_key_exists("firmwareSoftwareUpdateStatus", $this->_propDict)) {
            if (is_a($this->_propDict["firmwareSoftwareUpdateStatus"], "\Beta\Microsoft\Graph\Model\TeamworkSoftwareUpdateStatus") || is_null($this->_propDict["firmwareSoftwareUpdateStatus"])) {
                return $this->_propDict["firmwareSoftwareUpdateStatus"];
            } else {
                $this->_propDict["firmwareSoftwareUpdateStatus"] = new TeamworkSoftwareUpdateStatus($this->_propDict["firmwareSoftwareUpdateStatus"]);
                return $this->_propDict["firmwareSoftwareUpdateStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the firmwareSoftwareUpdateStatus
    * The software update available for the firmware.
    *
    * @param TeamworkSoftwareUpdateStatus $val The value to assign to the firmwareSoftwareUpdateStatus
    *
    * @return TeamworkSoftwareUpdateHealth The TeamworkSoftwareUpdateHealth
    */
    public function setFirmwareSoftwareUpdateStatus($val)
    {
        $this->_propDict["firmwareSoftwareUpdateStatus"] = $val;
         return $this;
    }

    /**
    * Gets the operatingSystemSoftwareUpdateStatus
    * The software update available for the operating system.
    *
    * @return TeamworkSoftwareUpdateStatus|null The operatingSystemSoftwareUpdateStatus
    */
    public function getOperatingSystemSoftwareUpdateStatus()
    {
        if (array_key_exists("operatingSystemSoftwareUpdateStatus", $this->_propDict)) {
            if (is_a($this->_propDict["operatingSystemSoftwareUpdateStatus"], "\Beta\Microsoft\Graph\Model\TeamworkSoftwareUpdateStatus") || is_null($this->_propDict["operatingSystemSoftwareUpdateStatus"])) {
                return $this->_propDict["operatingSystemSoftwareUpdateStatus"];
            } else {
                $this->_propDict["operatingSystemSoftwareUpdateStatus"] = new TeamworkSoftwareUpdateStatus($this->_propDict["operatingSystemSoftwareUpdateStatus"]);
                return $this->_propDict["operatingSystemSoftwareUpdateStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the operatingSystemSoftwareUpdateStatus
    * The software update available for the operating system.
    *
    * @param TeamworkSoftwareUpdateStatus $val The value to assign to the operatingSystemSoftwareUpdateStatus
    *
    * @return TeamworkSoftwareUpdateHealth The TeamworkSoftwareUpdateHealth
    */
    public function setOperatingSystemSoftwareUpdateStatus($val)
    {
        $this->_propDict["operatingSystemSoftwareUpdateStatus"] = $val;
         return $this;
    }

    /**
    * Gets the partnerAgentSoftwareUpdateStatus
    * The software update available for the partner agent.
    *
    * @return TeamworkSoftwareUpdateStatus|null The partnerAgentSoftwareUpdateStatus
    */
    public function getPartnerAgentSoftwareUpdateStatus()
    {
        if (array_key_exists("partnerAgentSoftwareUpdateStatus", $this->_propDict)) {
            if (is_a($this->_propDict["partnerAgentSoftwareUpdateStatus"], "\Beta\Microsoft\Graph\Model\TeamworkSoftwareUpdateStatus") || is_null($this->_propDict["partnerAgentSoftwareUpdateStatus"])) {
                return $this->_propDict["partnerAgentSoftwareUpdateStatus"];
            } else {
                $this->_propDict["partnerAgentSoftwareUpdateStatus"] = new TeamworkSoftwareUpdateStatus($this->_propDict["partnerAgentSoftwareUpdateStatus"]);
                return $this->_propDict["partnerAgentSoftwareUpdateStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the partnerAgentSoftwareUpdateStatus
    * The software update available for the partner agent.
    *
    * @param TeamworkSoftwareUpdateStatus $val The value to assign to the partnerAgentSoftwareUpdateStatus
    *
    * @return TeamworkSoftwareUpdateHealth The TeamworkSoftwareUpdateHealth
    */
    public function setPartnerAgentSoftwareUpdateStatus($val)
    {
        $this->_propDict["partnerAgentSoftwareUpdateStatus"] = $val;
         return $this;
    }

    /**
    * Gets the teamsClientSoftwareUpdateStatus
    * The software update available for the Teams client.
    *
    * @return TeamworkSoftwareUpdateStatus|null The teamsClientSoftwareUpdateStatus
    */
    public function getTeamsClientSoftwareUpdateStatus()
    {
        if (array_key_exists("teamsClientSoftwareUpdateStatus", $this->_propDict)) {
            if (is_a($this->_propDict["teamsClientSoftwareUpdateStatus"], "\Beta\Microsoft\Graph\Model\TeamworkSoftwareUpdateStatus") || is_null($this->_propDict["teamsClientSoftwareUpdateStatus"])) {
                return $this->_propDict["teamsClientSoftwareUpdateStatus"];
            } else {
                $this->_propDict["teamsClientSoftwareUpdateStatus"] = new TeamworkSoftwareUpdateStatus($this->_propDict["teamsClientSoftwareUpdateStatus"]);
                return $this->_propDict["teamsClientSoftwareUpdateStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsClientSoftwareUpdateStatus
    * The software update available for the Teams client.
    *
    * @param TeamworkSoftwareUpdateStatus $val The value to assign to the teamsClientSoftwareUpdateStatus
    *
    * @return TeamworkSoftwareUpdateHealth The TeamworkSoftwareUpdateHealth
    */
    public function setTeamsClientSoftwareUpdateStatus($val)
    {
        $this->_propDict["teamsClientSoftwareUpdateStatus"] = $val;
         return $this;
    }
}
