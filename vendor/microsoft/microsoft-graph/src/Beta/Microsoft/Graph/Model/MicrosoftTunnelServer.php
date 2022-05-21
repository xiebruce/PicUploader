<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelServer File
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
* MicrosoftTunnelServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelServer extends Entity
{
    /**
    * Gets the agentImageDigest
    * The digest of the current agent image running on this server
    *
    * @return string|null The agentImageDigest
    */
    public function getAgentImageDigest()
    {
        if (array_key_exists("agentImageDigest", $this->_propDict)) {
            return $this->_propDict["agentImageDigest"];
        } else {
            return null;
        }
    }

    /**
    * Sets the agentImageDigest
    * The digest of the current agent image running on this server
    *
    * @param string $val The agentImageDigest
    *
    * @return MicrosoftTunnelServer
    */
    public function setAgentImageDigest($val)
    {
        $this->_propDict["agentImageDigest"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The MicrosoftTunnelServer's display name
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
    * The MicrosoftTunnelServer's display name
    *
    * @param string $val The displayName
    *
    * @return MicrosoftTunnelServer
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastCheckinDateTime
    * When the MicrosoftTunnelServer last checked in
    *
    * @return \DateTime|null The lastCheckinDateTime
    */
    public function getLastCheckinDateTime()
    {
        if (array_key_exists("lastCheckinDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCheckinDateTime"], "\DateTime") || is_null($this->_propDict["lastCheckinDateTime"])) {
                return $this->_propDict["lastCheckinDateTime"];
            } else {
                $this->_propDict["lastCheckinDateTime"] = new \DateTime($this->_propDict["lastCheckinDateTime"]);
                return $this->_propDict["lastCheckinDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCheckinDateTime
    * When the MicrosoftTunnelServer last checked in
    *
    * @param \DateTime $val The lastCheckinDateTime
    *
    * @return MicrosoftTunnelServer
    */
    public function setLastCheckinDateTime($val)
    {
        $this->_propDict["lastCheckinDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the serverImageDigest
    * The digest of the current server image running on this server
    *
    * @return string|null The serverImageDigest
    */
    public function getServerImageDigest()
    {
        if (array_key_exists("serverImageDigest", $this->_propDict)) {
            return $this->_propDict["serverImageDigest"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serverImageDigest
    * The digest of the current server image running on this server
    *
    * @param string $val The serverImageDigest
    *
    * @return MicrosoftTunnelServer
    */
    public function setServerImageDigest($val)
    {
        $this->_propDict["serverImageDigest"] = $val;
        return $this;
    }

    /**
    * Gets the tunnelServerHealthStatus
    * The MicrosoftTunnelServer's health status. Possible values are: unknown, healthy, unhealthy, warning, offline, upgradeInProgress, upgradeFailed.
    *
    * @return MicrosoftTunnelServerHealthStatus|null The tunnelServerHealthStatus
    */
    public function getTunnelServerHealthStatus()
    {
        if (array_key_exists("tunnelServerHealthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["tunnelServerHealthStatus"], "\Beta\Microsoft\Graph\Model\MicrosoftTunnelServerHealthStatus") || is_null($this->_propDict["tunnelServerHealthStatus"])) {
                return $this->_propDict["tunnelServerHealthStatus"];
            } else {
                $this->_propDict["tunnelServerHealthStatus"] = new MicrosoftTunnelServerHealthStatus($this->_propDict["tunnelServerHealthStatus"]);
                return $this->_propDict["tunnelServerHealthStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the tunnelServerHealthStatus
    * The MicrosoftTunnelServer's health status. Possible values are: unknown, healthy, unhealthy, warning, offline, upgradeInProgress, upgradeFailed.
    *
    * @param MicrosoftTunnelServerHealthStatus $val The tunnelServerHealthStatus
    *
    * @return MicrosoftTunnelServer
    */
    public function setTunnelServerHealthStatus($val)
    {
        $this->_propDict["tunnelServerHealthStatus"] = $val;
        return $this;
    }

}
