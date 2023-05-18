<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelHealthThreshold File
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
* MicrosoftTunnelHealthThreshold class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelHealthThreshold extends Entity
{
    /**
    * Gets the defaultHealthyThreshold
    * The threshold for being healthy based on default health status metrics: CPU usage healthy &amp;lt; 50%, Memory usage healthy &amp;lt; 50%, Disk space healthy &amp;gt; 5GB, Latency healthy &amp;lt; 10ms, health metrics can be customized. Read-only.
    *
    * @return int|null The defaultHealthyThreshold
    */
    public function getDefaultHealthyThreshold()
    {
        if (array_key_exists("defaultHealthyThreshold", $this->_propDict)) {
            return $this->_propDict["defaultHealthyThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultHealthyThreshold
    * The threshold for being healthy based on default health status metrics: CPU usage healthy &amp;lt; 50%, Memory usage healthy &amp;lt; 50%, Disk space healthy &amp;gt; 5GB, Latency healthy &amp;lt; 10ms, health metrics can be customized. Read-only.
    *
    * @param int $val The defaultHealthyThreshold
    *
    * @return MicrosoftTunnelHealthThreshold
    */
    public function setDefaultHealthyThreshold($val)
    {
        $this->_propDict["defaultHealthyThreshold"] = intval($val);
        return $this;
    }

    /**
    * Gets the defaultUnhealthyThreshold
    * The threshold for being unhealthy based on default health status metrics: CPU usage unhealthy &amp;gt; 75%, Memory usage unhealthy &amp;gt; 75%, Disk space &amp;lt; 3GB, Latency unhealthy &amp;gt; 20ms, health metrics can be customized. Read-only.
    *
    * @return int|null The defaultUnhealthyThreshold
    */
    public function getDefaultUnhealthyThreshold()
    {
        if (array_key_exists("defaultUnhealthyThreshold", $this->_propDict)) {
            return $this->_propDict["defaultUnhealthyThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultUnhealthyThreshold
    * The threshold for being unhealthy based on default health status metrics: CPU usage unhealthy &amp;gt; 75%, Memory usage unhealthy &amp;gt; 75%, Disk space &amp;lt; 3GB, Latency unhealthy &amp;gt; 20ms, health metrics can be customized. Read-only.
    *
    * @param int $val The defaultUnhealthyThreshold
    *
    * @return MicrosoftTunnelHealthThreshold
    */
    public function setDefaultUnhealthyThreshold($val)
    {
        $this->_propDict["defaultUnhealthyThreshold"] = intval($val);
        return $this;
    }

    /**
    * Gets the healthyThreshold
    * The threshold for being healthy based on default health status metrics: CPU usage healthy &amp;lt; 50%, Memory usage healthy &amp;lt; 50%, Disk space healthy &amp;gt; 5GB, Latency healthy &amp;lt; 10ms, health metrics can be customized.
    *
    * @return int|null The healthyThreshold
    */
    public function getHealthyThreshold()
    {
        if (array_key_exists("healthyThreshold", $this->_propDict)) {
            return $this->_propDict["healthyThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the healthyThreshold
    * The threshold for being healthy based on default health status metrics: CPU usage healthy &amp;lt; 50%, Memory usage healthy &amp;lt; 50%, Disk space healthy &amp;gt; 5GB, Latency healthy &amp;lt; 10ms, health metrics can be customized.
    *
    * @param int $val The healthyThreshold
    *
    * @return MicrosoftTunnelHealthThreshold
    */
    public function setHealthyThreshold($val)
    {
        $this->_propDict["healthyThreshold"] = intval($val);
        return $this;
    }

    /**
    * Gets the unhealthyThreshold
    * The threshold for being unhealthy based on default health status metrics: CPU usage unhealthy &amp;gt; 75%, Memory usage unhealthy &amp;gt; 75%, Disk space &amp;lt; 3GB, Latency Unhealthy &amp;gt; 20ms, health metrics can be customized.
    *
    * @return int|null The unhealthyThreshold
    */
    public function getUnhealthyThreshold()
    {
        if (array_key_exists("unhealthyThreshold", $this->_propDict)) {
            return $this->_propDict["unhealthyThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unhealthyThreshold
    * The threshold for being unhealthy based on default health status metrics: CPU usage unhealthy &amp;gt; 75%, Memory usage unhealthy &amp;gt; 75%, Disk space &amp;lt; 3GB, Latency Unhealthy &amp;gt; 20ms, health metrics can be customized.
    *
    * @param int $val The unhealthyThreshold
    *
    * @return MicrosoftTunnelHealthThreshold
    */
    public function setUnhealthyThreshold($val)
    {
        $this->_propDict["unhealthyThreshold"] = intval($val);
        return $this;
    }

}
