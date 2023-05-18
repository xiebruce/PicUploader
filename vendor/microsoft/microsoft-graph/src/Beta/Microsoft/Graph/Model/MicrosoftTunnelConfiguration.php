<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelConfiguration File
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
* MicrosoftTunnelConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelConfiguration extends Entity
{

     /**
     * Gets the advancedSettings
    * Additional settings that may be applied to the server
     *
     * @return array|null The advancedSettings
     */
    public function getAdvancedSettings()
    {
        if (array_key_exists("advancedSettings", $this->_propDict)) {
           return $this->_propDict["advancedSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the advancedSettings
    * Additional settings that may be applied to the server
    *
    * @param KeyValuePair[] $val The advancedSettings
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setAdvancedSettings($val)
    {
        $this->_propDict["advancedSettings"] = $val;
        return $this;
    }

    /**
    * Gets the defaultDomainSuffix
    * The Default Domain appendix that will be used by the clients
    *
    * @return string|null The defaultDomainSuffix
    */
    public function getDefaultDomainSuffix()
    {
        if (array_key_exists("defaultDomainSuffix", $this->_propDict)) {
            return $this->_propDict["defaultDomainSuffix"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultDomainSuffix
    * The Default Domain appendix that will be used by the clients
    *
    * @param string $val The defaultDomainSuffix
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDefaultDomainSuffix($val)
    {
        $this->_propDict["defaultDomainSuffix"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The configuration's description (optional)
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
    * The configuration's description (optional)
    *
    * @param string $val The description
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the disableUdpConnections
    * When DisableUdpConnections is set, the clients and VPN server will not use DTLS connections to transfer data.
    *
    * @return bool|null The disableUdpConnections
    */
    public function getDisableUdpConnections()
    {
        if (array_key_exists("disableUdpConnections", $this->_propDict)) {
            return $this->_propDict["disableUdpConnections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disableUdpConnections
    * When DisableUdpConnections is set, the clients and VPN server will not use DTLS connections to transfer data.
    *
    * @param bool $val The disableUdpConnections
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDisableUdpConnections($val)
    {
        $this->_propDict["disableUdpConnections"] = boolval($val);
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the server configuration. This property is required when a server is created.
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
    * The display name for the server configuration. This property is required when a server is created.
    *
    * @param string $val The displayName
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the dnsServers
    * The DNS servers that will be used by the clients
    *
    * @return array|null The dnsServers
    */
    public function getDnsServers()
    {
        if (array_key_exists("dnsServers", $this->_propDict)) {
            return $this->_propDict["dnsServers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsServers
    * The DNS servers that will be used by the clients
    *
    * @param string[] $val The dnsServers
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDnsServers($val)
    {
        $this->_propDict["dnsServers"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdateDateTime
    * When the configuration was last updated
    *
    * @return \DateTime|null The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdateDateTime"])) {
                return $this->_propDict["lastUpdateDateTime"];
            } else {
                $this->_propDict["lastUpdateDateTime"] = new \DateTime($this->_propDict["lastUpdateDateTime"]);
                return $this->_propDict["lastUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdateDateTime
    * When the configuration was last updated
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the listenPort
    * The port that both TCP and UPD will listen over on the server
    *
    * @return int|null The listenPort
    */
    public function getListenPort()
    {
        if (array_key_exists("listenPort", $this->_propDict)) {
            return $this->_propDict["listenPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listenPort
    * The port that both TCP and UPD will listen over on the server
    *
    * @param int $val The listenPort
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setListenPort($val)
    {
        $this->_propDict["listenPort"] = intval($val);
        return $this;
    }

    /**
    * Gets the network
    * The subnet that will be used to allocate virtual address for the clients
    *
    * @return string|null The network
    */
    public function getNetwork()
    {
        if (array_key_exists("network", $this->_propDict)) {
            return $this->_propDict["network"];
        } else {
            return null;
        }
    }

    /**
    * Sets the network
    * The subnet that will be used to allocate virtual address for the clients
    *
    * @param string $val The network
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setNetwork($val)
    {
        $this->_propDict["network"] = $val;
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance
    *
    * @return array|null The roleScopeTagIds
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
    * List of Scope Tags for this Entity instance
    *
    * @param string[] $val The roleScopeTagIds
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }

    /**
    * Gets the routeExcludes
    * Subsets of the routes that will not be routed by the server
    *
    * @return array|null The routeExcludes
    */
    public function getRouteExcludes()
    {
        if (array_key_exists("routeExcludes", $this->_propDict)) {
            return $this->_propDict["routeExcludes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the routeExcludes
    * Subsets of the routes that will not be routed by the server
    *
    * @param string[] $val The routeExcludes
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setRouteExcludes($val)
    {
        $this->_propDict["routeExcludes"] = $val;
        return $this;
    }

    /**
    * Gets the routeIncludes
    * The routes that will be routed by the server
    *
    * @return array|null The routeIncludes
    */
    public function getRouteIncludes()
    {
        if (array_key_exists("routeIncludes", $this->_propDict)) {
            return $this->_propDict["routeIncludes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the routeIncludes
    * The routes that will be routed by the server
    *
    * @param string[] $val The routeIncludes
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setRouteIncludes($val)
    {
        $this->_propDict["routeIncludes"] = $val;
        return $this;
    }

    /**
    * Gets the routesExclude
    * Subsets of the routes that will not be routed by the server. This property is going to be deprecated with the option of using the new property, 'RouteExcludes'.
    *
    * @return array|null The routesExclude
    */
    public function getRoutesExclude()
    {
        if (array_key_exists("routesExclude", $this->_propDict)) {
            return $this->_propDict["routesExclude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the routesExclude
    * Subsets of the routes that will not be routed by the server. This property is going to be deprecated with the option of using the new property, 'RouteExcludes'.
    *
    * @param string[] $val The routesExclude
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setRoutesExclude($val)
    {
        $this->_propDict["routesExclude"] = $val;
        return $this;
    }

    /**
    * Gets the routesInclude
    * The routes that will be routed by the server. This property is going to be deprecated with the option of using the new property, 'RouteIncludes'.
    *
    * @return array|null The routesInclude
    */
    public function getRoutesInclude()
    {
        if (array_key_exists("routesInclude", $this->_propDict)) {
            return $this->_propDict["routesInclude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the routesInclude
    * The routes that will be routed by the server. This property is going to be deprecated with the option of using the new property, 'RouteIncludes'.
    *
    * @param string[] $val The routesInclude
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setRoutesInclude($val)
    {
        $this->_propDict["routesInclude"] = $val;
        return $this;
    }

    /**
    * Gets the splitDNS
    * The domains that will be resolved using the provided dns servers
    *
    * @return array|null The splitDNS
    */
    public function getSplitDNS()
    {
        if (array_key_exists("splitDNS", $this->_propDict)) {
            return $this->_propDict["splitDNS"];
        } else {
            return null;
        }
    }

    /**
    * Sets the splitDNS
    * The domains that will be resolved using the provided dns servers
    *
    * @param string[] $val The splitDNS
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setSplitDNS($val)
    {
        $this->_propDict["splitDNS"] = $val;
        return $this;
    }

}
