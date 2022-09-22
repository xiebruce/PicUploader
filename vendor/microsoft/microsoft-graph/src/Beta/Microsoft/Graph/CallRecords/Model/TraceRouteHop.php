<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TraceRouteHop File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* TraceRouteHop class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TraceRouteHop extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the hopCount
    * The network path count of this hop that was used to compute the round-trip time.
    *
    * @return int|null The hopCount
    */
    public function getHopCount()
    {
        if (array_key_exists("hopCount", $this->_propDict)) {
            return $this->_propDict["hopCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hopCount
    * The network path count of this hop that was used to compute the round-trip time.
    *
    * @param int $val The value of the hopCount
    *
    * @return TraceRouteHop
    */
    public function setHopCount($val)
    {
        $this->_propDict["hopCount"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    * IP address used for this hop in the network trace.
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * IP address used for this hop in the network trace.
    *
    * @param string $val The value of the ipAddress
    *
    * @return TraceRouteHop
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }

    /**
    * Gets the roundTripTime
    * The time from when the trace route packet was sent from the client to this hop and back to the client, denoted in [ISO 8601][] format. For example, 1 second is denoted as PT1S, where P is the duration designator, T is the time designator, and S is the second designator.
    *
    * @return \DateInterval|null The roundTripTime
    */
    public function getRoundTripTime()
    {
        if (array_key_exists("roundTripTime", $this->_propDict)) {
            if (is_a($this->_propDict["roundTripTime"], "\DateInterval") || is_null($this->_propDict["roundTripTime"])) {
                return $this->_propDict["roundTripTime"];
            } else {
                $this->_propDict["roundTripTime"] = new \DateInterval($this->_propDict["roundTripTime"]);
                return $this->_propDict["roundTripTime"];
            }
        }
        return null;
    }

    /**
    * Sets the roundTripTime
    * The time from when the trace route packet was sent from the client to this hop and back to the client, denoted in [ISO 8601][] format. For example, 1 second is denoted as PT1S, where P is the duration designator, T is the time designator, and S is the second designator.
    *
    * @param \DateInterval $val The value to assign to the roundTripTime
    *
    * @return TraceRouteHop The TraceRouteHop
    */
    public function setRoundTripTime($val)
    {
        $this->_propDict["roundTripTime"] = $val;
         return $this;
    }
}
