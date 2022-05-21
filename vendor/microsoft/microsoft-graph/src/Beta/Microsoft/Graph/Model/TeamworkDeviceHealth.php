<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDeviceHealth File
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
* TeamworkDeviceHealth class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDeviceHealth extends Entity
{
    /**
    * Gets the connection
    * Information about the connection status.
    *
    * @return TeamworkConnection|null The connection
    */
    public function getConnection()
    {
        if (array_key_exists("connection", $this->_propDict)) {
            if (is_a($this->_propDict["connection"], "\Beta\Microsoft\Graph\Model\TeamworkConnection") || is_null($this->_propDict["connection"])) {
                return $this->_propDict["connection"];
            } else {
                $this->_propDict["connection"] = new TeamworkConnection($this->_propDict["connection"]);
                return $this->_propDict["connection"];
            }
        }
        return null;
    }

    /**
    * Sets the connection
    * Information about the connection status.
    *
    * @param TeamworkConnection $val The connection
    *
    * @return TeamworkDeviceHealth
    */
    public function setConnection($val)
    {
        $this->_propDict["connection"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Identity of the user who created the device health document.
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user who created the device health document.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return TeamworkDeviceHealth
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The UTC date and time when the device health document was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The UTC date and time when the device health document was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TeamworkDeviceHealth
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the hardwareHealth
    * Health details about the device hardware.
    *
    * @return TeamworkHardwareHealth|null The hardwareHealth
    */
    public function getHardwareHealth()
    {
        if (array_key_exists("hardwareHealth", $this->_propDict)) {
            if (is_a($this->_propDict["hardwareHealth"], "\Beta\Microsoft\Graph\Model\TeamworkHardwareHealth") || is_null($this->_propDict["hardwareHealth"])) {
                return $this->_propDict["hardwareHealth"];
            } else {
                $this->_propDict["hardwareHealth"] = new TeamworkHardwareHealth($this->_propDict["hardwareHealth"]);
                return $this->_propDict["hardwareHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the hardwareHealth
    * Health details about the device hardware.
    *
    * @param TeamworkHardwareHealth $val The hardwareHealth
    *
    * @return TeamworkDeviceHealth
    */
    public function setHardwareHealth($val)
    {
        $this->_propDict["hardwareHealth"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity of the user who last modified the device health details.
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Identity of the user who last modified the device health details.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return TeamworkDeviceHealth
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The UTC date and time when the device health detail was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The UTC date and time when the device health detail was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TeamworkDeviceHealth
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the loginStatus
    * The login status of Microsoft Teams, Skype for Business, and Exchange.
    *
    * @return TeamworkLoginStatus|null The loginStatus
    */
    public function getLoginStatus()
    {
        if (array_key_exists("loginStatus", $this->_propDict)) {
            if (is_a($this->_propDict["loginStatus"], "\Beta\Microsoft\Graph\Model\TeamworkLoginStatus") || is_null($this->_propDict["loginStatus"])) {
                return $this->_propDict["loginStatus"];
            } else {
                $this->_propDict["loginStatus"] = new TeamworkLoginStatus($this->_propDict["loginStatus"]);
                return $this->_propDict["loginStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the loginStatus
    * The login status of Microsoft Teams, Skype for Business, and Exchange.
    *
    * @param TeamworkLoginStatus $val The loginStatus
    *
    * @return TeamworkDeviceHealth
    */
    public function setLoginStatus($val)
    {
        $this->_propDict["loginStatus"] = $val;
        return $this;
    }

    /**
    * Gets the peripheralsHealth
    * Health details about all peripherals (for example, speaker and microphone) attached to a device.
    *
    * @return TeamworkPeripheralsHealth|null The peripheralsHealth
    */
    public function getPeripheralsHealth()
    {
        if (array_key_exists("peripheralsHealth", $this->_propDict)) {
            if (is_a($this->_propDict["peripheralsHealth"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheralsHealth") || is_null($this->_propDict["peripheralsHealth"])) {
                return $this->_propDict["peripheralsHealth"];
            } else {
                $this->_propDict["peripheralsHealth"] = new TeamworkPeripheralsHealth($this->_propDict["peripheralsHealth"]);
                return $this->_propDict["peripheralsHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the peripheralsHealth
    * Health details about all peripherals (for example, speaker and microphone) attached to a device.
    *
    * @param TeamworkPeripheralsHealth $val The peripheralsHealth
    *
    * @return TeamworkDeviceHealth
    */
    public function setPeripheralsHealth($val)
    {
        $this->_propDict["peripheralsHealth"] = $val;
        return $this;
    }

    /**
    * Gets the softwareUpdateHealth
    * Software updates available for the device.
    *
    * @return TeamworkSoftwareUpdateHealth|null The softwareUpdateHealth
    */
    public function getSoftwareUpdateHealth()
    {
        if (array_key_exists("softwareUpdateHealth", $this->_propDict)) {
            if (is_a($this->_propDict["softwareUpdateHealth"], "\Beta\Microsoft\Graph\Model\TeamworkSoftwareUpdateHealth") || is_null($this->_propDict["softwareUpdateHealth"])) {
                return $this->_propDict["softwareUpdateHealth"];
            } else {
                $this->_propDict["softwareUpdateHealth"] = new TeamworkSoftwareUpdateHealth($this->_propDict["softwareUpdateHealth"]);
                return $this->_propDict["softwareUpdateHealth"];
            }
        }
        return null;
    }

    /**
    * Sets the softwareUpdateHealth
    * Software updates available for the device.
    *
    * @param TeamworkSoftwareUpdateHealth $val The softwareUpdateHealth
    *
    * @return TeamworkDeviceHealth
    */
    public function setSoftwareUpdateHealth($val)
    {
        $this->_propDict["softwareUpdateHealth"] = $val;
        return $this;
    }

}
