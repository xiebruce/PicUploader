<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostCookie File
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
* HostCookie class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostCookie extends Artifact
{
    /**
    * Gets the domain
    * The URI for which the cookie is valid.
    *
    * @return string|null The domain
    */
    public function getDomain()
    {
        if (array_key_exists("domain", $this->_propDict)) {
            return $this->_propDict["domain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domain
    * The URI for which the cookie is valid.
    *
    * @param string $val The domain
    *
    * @return HostCookie
    */
    public function setDomain($val)
    {
        $this->_propDict["domain"] = $val;
        return $this;
    }

    /**
    * Gets the firstSeenDateTime
    * The first date and time when this hostCookie was observed by Microsoft Defender Threat Intelligence. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The first date and time when this hostCookie was observed by Microsoft Defender Threat Intelligence. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return HostCookie
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The most recent date and time when this hostCookie was observed by Microsoft Defender Threat Intelligence. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The most recent date and time when this hostCookie was observed by Microsoft Defender Threat Intelligence. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return HostCookie
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * The name of the cookie, for example, JSESSIONID or SEARCH_NAMESITE.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The name of the cookie, for example, JSESSIONID or SEARCH_NAMESITE.
    *
    * @param string $val The name
    *
    * @return HostCookie
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the host
    * Indicates that a cookie of this name and domain was found related to this host.
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
    * Indicates that a cookie of this name and domain was found related to this host.
    *
    * @param Host $val The host
    *
    * @return HostCookie
    */
    public function setHost($val)
    {
        $this->_propDict["host"] = $val;
        return $this;
    }

}
