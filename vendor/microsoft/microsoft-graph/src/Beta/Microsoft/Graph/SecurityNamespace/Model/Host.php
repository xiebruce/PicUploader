<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Host File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* Host class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Host extends Artifact
{
    /**
    * Gets the firstSeenDateTime
    * The first date and time when this host was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The firstSeenDateTime
    */
    public function getFirstSeenDateTime()
    {
        if (array_key_exists("firstSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstSeenDateTime"], "\DateTime") || is_null($this->_propDict["firstSeenDateTime"])) {
                return $this->_propDict["firstSeenDateTime"];
            } else {
                $this->_propDict["firstSeenDateTime"] = new \DateTime($this->_propDict["firstSeenDateTime"]);
                return $this->_propDict["firstSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstSeenDateTime
    * The first date and time when this host was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return Host
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The most recent date and time when this host was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime") || is_null($this->_propDict["lastSeenDateTime"])) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSeenDateTime
    * The most recent date and time when this host was observed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return Host
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the components
    * The hostComponents that are associated with this host.
     *
     * @return array|null The components
     */
    public function getComponents()
    {
        if (array_key_exists("components", $this->_propDict)) {
           return $this->_propDict["components"];
        } else {
            return null;
        }
    }

    /**
    * Sets the components
    * The hostComponents that are associated with this host.
    *
    * @param HostComponent[] $val The components
    *
    * @return Host
    */
    public function setComponents($val)
    {
        $this->_propDict["components"] = $val;
        return $this;
    }


     /**
     * Gets the cookies
    * The hostCookies that are associated with this host.
     *
     * @return array|null The cookies
     */
    public function getCookies()
    {
        if (array_key_exists("cookies", $this->_propDict)) {
           return $this->_propDict["cookies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cookies
    * The hostCookies that are associated with this host.
    *
    * @param HostCookie[] $val The cookies
    *
    * @return Host
    */
    public function setCookies($val)
    {
        $this->_propDict["cookies"] = $val;
        return $this;
    }


     /**
     * Gets the passiveDns
    * Passive DNS retrieval about this host.
     *
     * @return array|null The passiveDns
     */
    public function getPassiveDns()
    {
        if (array_key_exists("passiveDns", $this->_propDict)) {
           return $this->_propDict["passiveDns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passiveDns
    * Passive DNS retrieval about this host.
    *
    * @param PassiveDnsRecord[] $val The passiveDns
    *
    * @return Host
    */
    public function setPassiveDns($val)
    {
        $this->_propDict["passiveDns"] = $val;
        return $this;
    }


     /**
     * Gets the passiveDnsReverse
    * Reverse passive DNS retrieval about this host.
     *
     * @return array|null The passiveDnsReverse
     */
    public function getPassiveDnsReverse()
    {
        if (array_key_exists("passiveDnsReverse", $this->_propDict)) {
           return $this->_propDict["passiveDnsReverse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passiveDnsReverse
    * Reverse passive DNS retrieval about this host.
    *
    * @param PassiveDnsRecord[] $val The passiveDnsReverse
    *
    * @return Host
    */
    public function setPassiveDnsReverse($val)
    {
        $this->_propDict["passiveDnsReverse"] = $val;
        return $this;
    }

    /**
    * Gets the reputation
    * Represents a calculated reputation of this host.
    *
    * @return HostReputation|null The reputation
    */
    public function getReputation()
    {
        if (array_key_exists("reputation", $this->_propDict)) {
            if (is_a($this->_propDict["reputation"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\HostReputation") || is_null($this->_propDict["reputation"])) {
                return $this->_propDict["reputation"];
            } else {
                $this->_propDict["reputation"] = new HostReputation($this->_propDict["reputation"]);
                return $this->_propDict["reputation"];
            }
        }
        return null;
    }

    /**
    * Sets the reputation
    * Represents a calculated reputation of this host.
    *
    * @param HostReputation $val The reputation
    *
    * @return Host
    */
    public function setReputation($val)
    {
        $this->_propDict["reputation"] = $val;
        return $this;
    }


     /**
     * Gets the trackers
    * The hostTrackers that are associated with this host.
     *
     * @return array|null The trackers
     */
    public function getTrackers()
    {
        if (array_key_exists("trackers", $this->_propDict)) {
           return $this->_propDict["trackers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trackers
    * The hostTrackers that are associated with this host.
    *
    * @param HostTracker[] $val The trackers
    *
    * @return Host
    */
    public function setTrackers($val)
    {
        $this->_propDict["trackers"] = $val;
        return $this;
    }

}
