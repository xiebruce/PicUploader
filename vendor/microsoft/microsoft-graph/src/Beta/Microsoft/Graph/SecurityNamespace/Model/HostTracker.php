<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostTracker File
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
* HostTracker class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostTracker extends Artifact
{
    /**
    * Gets the firstSeenDateTime
    * The first date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The first date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return HostTracker
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the kind
    * The kind of hostTracker that was detected. For example, GoogleAnalyticsID or JarmHash.
    *
    * @return string|null The kind
    */
    public function getKind()
    {
        if (array_key_exists("kind", $this->_propDict)) {
            return $this->_propDict["kind"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kind
    * The kind of hostTracker that was detected. For example, GoogleAnalyticsID or JarmHash.
    *
    * @param string $val The kind
    *
    * @return HostTracker
    */
    public function setKind($val)
    {
        $this->_propDict["kind"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The most recent date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The most recent date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return HostTracker
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the value
    * The identification value for the hostTracker.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The identification value for the hostTracker.
    *
    * @param string $val The value
    *
    * @return HostTracker
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }

    /**
    * Gets the host
    * The host related to this hostTracker. When navigating to a hostTracker from a host, this should be assumed to be a return reference.
    *
    * @return Host|null The host
    */
    public function getHost()
    {
        if (array_key_exists("host", $this->_propDict)) {
            if (is_a($this->_propDict["host"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Host") || is_null($this->_propDict["host"])) {
                return $this->_propDict["host"];
            } else {
                $this->_propDict["host"] = new Host($this->_propDict["host"]);
                return $this->_propDict["host"];
            }
        }
        return null;
    }

    /**
    * Sets the host
    * The host related to this hostTracker. When navigating to a hostTracker from a host, this should be assumed to be a return reference.
    *
    * @param Host $val The host
    *
    * @return HostTracker
    */
    public function setHost($val)
    {
        $this->_propDict["host"] = $val;
        return $this;
    }

}
