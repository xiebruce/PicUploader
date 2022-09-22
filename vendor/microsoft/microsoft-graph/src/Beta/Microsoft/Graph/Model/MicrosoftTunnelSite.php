<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelSite File
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
* MicrosoftTunnelSite class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelSite extends Entity
{
    /**
    * Gets the description
    * The MicrosoftTunnelSite's description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The MicrosoftTunnelSite's description
    *
    * @param string $val The description
    *
    * @return MicrosoftTunnelSite
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The MicrosoftTunnelSite's display name
    *
    * @return string|null The displayName
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
    * The MicrosoftTunnelSite's display name
    *
    * @param string $val The displayName
    *
    * @return MicrosoftTunnelSite
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the enableCertificatePinning
    * When set to true, certificate pinning will be enforced on connections between the Microsoft Tunnel server and Microsoft Tunnel clients. When set to false, certificate pinning will be disabled.
    *
    * @return bool|null The enableCertificatePinning
    */
    public function getEnableCertificatePinning()
    {
        if (array_key_exists("enableCertificatePinning", $this->_propDict)) {
            return $this->_propDict["enableCertificatePinning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableCertificatePinning
    * When set to true, certificate pinning will be enforced on connections between the Microsoft Tunnel server and Microsoft Tunnel clients. When set to false, certificate pinning will be disabled.
    *
    * @param bool $val The enableCertificatePinning
    *
    * @return MicrosoftTunnelSite
    */
    public function setEnableCertificatePinning($val)
    {
        $this->_propDict["enableCertificatePinning"] = boolval($val);
        return $this;
    }

    /**
    * Gets the internalNetworkProbeUrl
    * The MicrosoftTunnelSite's Internal Network Access Probe URL
    *
    * @return string|null The internalNetworkProbeUrl
    */
    public function getInternalNetworkProbeUrl()
    {
        if (array_key_exists("internalNetworkProbeUrl", $this->_propDict)) {
            return $this->_propDict["internalNetworkProbeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalNetworkProbeUrl
    * The MicrosoftTunnelSite's Internal Network Access Probe URL
    *
    * @param string $val The internalNetworkProbeUrl
    *
    * @return MicrosoftTunnelSite
    */
    public function setInternalNetworkProbeUrl($val)
    {
        $this->_propDict["internalNetworkProbeUrl"] = $val;
        return $this;
    }

    /**
    * Gets the publicAddress
    * The MicrosoftTunnelSite's public domain name or IP address
    *
    * @return string|null The publicAddress
    */
    public function getPublicAddress()
    {
        if (array_key_exists("publicAddress", $this->_propDict)) {
            return $this->_propDict["publicAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publicAddress
    * The MicrosoftTunnelSite's public domain name or IP address
    *
    * @param string $val The publicAddress
    *
    * @return MicrosoftTunnelSite
    */
    public function setPublicAddress($val)
    {
        $this->_propDict["publicAddress"] = $val;
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return string|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return MicrosoftTunnelSite
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }

    /**
    * Gets the upgradeAutomatically
    * The site's automatic upgrade setting. True for automatic upgrades, false for manual control
    *
    * @return bool|null The upgradeAutomatically
    */
    public function getUpgradeAutomatically()
    {
        if (array_key_exists("upgradeAutomatically", $this->_propDict)) {
            return $this->_propDict["upgradeAutomatically"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upgradeAutomatically
    * The site's automatic upgrade setting. True for automatic upgrades, false for manual control
    *
    * @param bool $val The upgradeAutomatically
    *
    * @return MicrosoftTunnelSite
    */
    public function setUpgradeAutomatically($val)
    {
        $this->_propDict["upgradeAutomatically"] = boolval($val);
        return $this;
    }

    /**
    * Gets the upgradeAvailable
    * True if an upgrade is available
    *
    * @return bool|null The upgradeAvailable
    */
    public function getUpgradeAvailable()
    {
        if (array_key_exists("upgradeAvailable", $this->_propDict)) {
            return $this->_propDict["upgradeAvailable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upgradeAvailable
    * True if an upgrade is available
    *
    * @param bool $val The upgradeAvailable
    *
    * @return MicrosoftTunnelSite
    */
    public function setUpgradeAvailable($val)
    {
        $this->_propDict["upgradeAvailable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the upgradeWindowEndTime
    * The site's upgrade window end time of day
    *
    * @return TimeOfDay|null The upgradeWindowEndTime
    */
    public function getUpgradeWindowEndTime()
    {
        if (array_key_exists("upgradeWindowEndTime", $this->_propDict)) {
            if (is_a($this->_propDict["upgradeWindowEndTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["upgradeWindowEndTime"])) {
                return $this->_propDict["upgradeWindowEndTime"];
            } else {
                $this->_propDict["upgradeWindowEndTime"] = new TimeOfDay($this->_propDict["upgradeWindowEndTime"]);
                return $this->_propDict["upgradeWindowEndTime"];
            }
        }
        return null;
    }

    /**
    * Sets the upgradeWindowEndTime
    * The site's upgrade window end time of day
    *
    * @param TimeOfDay $val The upgradeWindowEndTime
    *
    * @return MicrosoftTunnelSite
    */
    public function setUpgradeWindowEndTime($val)
    {
        $this->_propDict["upgradeWindowEndTime"] = $val;
        return $this;
    }

    /**
    * Gets the upgradeWindowStartTime
    * The site's upgrade window start time of day
    *
    * @return TimeOfDay|null The upgradeWindowStartTime
    */
    public function getUpgradeWindowStartTime()
    {
        if (array_key_exists("upgradeWindowStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["upgradeWindowStartTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["upgradeWindowStartTime"])) {
                return $this->_propDict["upgradeWindowStartTime"];
            } else {
                $this->_propDict["upgradeWindowStartTime"] = new TimeOfDay($this->_propDict["upgradeWindowStartTime"]);
                return $this->_propDict["upgradeWindowStartTime"];
            }
        }
        return null;
    }

    /**
    * Sets the upgradeWindowStartTime
    * The site's upgrade window start time of day
    *
    * @param TimeOfDay $val The upgradeWindowStartTime
    *
    * @return MicrosoftTunnelSite
    */
    public function setUpgradeWindowStartTime($val)
    {
        $this->_propDict["upgradeWindowStartTime"] = $val;
        return $this;
    }

    /**
    * Gets the upgradeWindowUtcOffsetInMinutes
    * The site's timezone represented as a minute offset from UTC
    *
    * @return int|null The upgradeWindowUtcOffsetInMinutes
    */
    public function getUpgradeWindowUtcOffsetInMinutes()
    {
        if (array_key_exists("upgradeWindowUtcOffsetInMinutes", $this->_propDict)) {
            return $this->_propDict["upgradeWindowUtcOffsetInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upgradeWindowUtcOffsetInMinutes
    * The site's timezone represented as a minute offset from UTC
    *
    * @param int $val The upgradeWindowUtcOffsetInMinutes
    *
    * @return MicrosoftTunnelSite
    */
    public function setUpgradeWindowUtcOffsetInMinutes($val)
    {
        $this->_propDict["upgradeWindowUtcOffsetInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the microsoftTunnelConfiguration
    * The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
    *
    * @return MicrosoftTunnelConfiguration|null The microsoftTunnelConfiguration
    */
    public function getMicrosoftTunnelConfiguration()
    {
        if (array_key_exists("microsoftTunnelConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftTunnelConfiguration"], "\Beta\Microsoft\Graph\Model\MicrosoftTunnelConfiguration") || is_null($this->_propDict["microsoftTunnelConfiguration"])) {
                return $this->_propDict["microsoftTunnelConfiguration"];
            } else {
                $this->_propDict["microsoftTunnelConfiguration"] = new MicrosoftTunnelConfiguration($this->_propDict["microsoftTunnelConfiguration"]);
                return $this->_propDict["microsoftTunnelConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the microsoftTunnelConfiguration
    * The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
    *
    * @param MicrosoftTunnelConfiguration $val The microsoftTunnelConfiguration
    *
    * @return MicrosoftTunnelSite
    */
    public function setMicrosoftTunnelConfiguration($val)
    {
        $this->_propDict["microsoftTunnelConfiguration"] = $val;
        return $this;
    }


     /**
     * Gets the microsoftTunnelServers
    * A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
     *
     * @return array|null The microsoftTunnelServers
     */
    public function getMicrosoftTunnelServers()
    {
        if (array_key_exists("microsoftTunnelServers", $this->_propDict)) {
           return $this->_propDict["microsoftTunnelServers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftTunnelServers
    * A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
    *
    * @param MicrosoftTunnelServer[] $val The microsoftTunnelServers
    *
    * @return MicrosoftTunnelSite
    */
    public function setMicrosoftTunnelServers($val)
    {
        $this->_propDict["microsoftTunnelServers"] = $val;
        return $this;
    }

}
