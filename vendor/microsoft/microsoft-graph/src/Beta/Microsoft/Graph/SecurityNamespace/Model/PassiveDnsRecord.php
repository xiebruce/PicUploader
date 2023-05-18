<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PassiveDnsRecord File
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
* PassiveDnsRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PassiveDnsRecord extends Artifact
{
    /**
    * Gets the collectedDateTime
    * The date and time that this passiveDnsRecord entry was collected by Microsoft. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The collectedDateTime
    */
    public function getCollectedDateTime()
    {
        if (array_key_exists("collectedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["collectedDateTime"], "\DateTime") || is_null($this->_propDict["collectedDateTime"])) {
                return $this->_propDict["collectedDateTime"];
            } else {
                $this->_propDict["collectedDateTime"] = new \DateTime($this->_propDict["collectedDateTime"]);
                return $this->_propDict["collectedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the collectedDateTime
    * The date and time that this passiveDnsRecord entry was collected by Microsoft. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The collectedDateTime
    *
    * @return PassiveDnsRecord
    */
    public function setCollectedDateTime($val)
    {
        $this->_propDict["collectedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the firstSeenDateTime
    * The date and time when this passiveDnsRecord entry was first seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when this passiveDnsRecord entry was first seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return PassiveDnsRecord
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * The date and time when this passiveDnsRecord entry was most recently seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when this passiveDnsRecord entry was most recently seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return PassiveDnsRecord
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the recordType
    * The DNS record type for this passiveDnsRecord entry.
    *
    * @return string|null The recordType
    */
    public function getRecordType()
    {
        if (array_key_exists("recordType", $this->_propDict)) {
            return $this->_propDict["recordType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recordType
    * The DNS record type for this passiveDnsRecord entry.
    *
    * @param string $val The recordType
    *
    * @return PassiveDnsRecord
    */
    public function setRecordType($val)
    {
        $this->_propDict["recordType"] = $val;
        return $this;
    }

    /**
    * Gets the artifact
    * The artifact related to this passiveDnsRecord entry.
    *
    * @return Artifact|null The artifact
    */
    public function getArtifact()
    {
        if (array_key_exists("artifact", $this->_propDict)) {
            if (is_a($this->_propDict["artifact"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Artifact") || is_null($this->_propDict["artifact"])) {
                return $this->_propDict["artifact"];
            } else {
                $this->_propDict["artifact"] = new Artifact($this->_propDict["artifact"]);
                return $this->_propDict["artifact"];
            }
        }
        return null;
    }

    /**
    * Sets the artifact
    * The artifact related to this passiveDnsRecord entry.
    *
    * @param Artifact $val The artifact
    *
    * @return PassiveDnsRecord
    */
    public function setArtifact($val)
    {
        $this->_propDict["artifact"] = $val;
        return $this;
    }

    /**
    * Gets the parentHost
    * The parent host related to this passiveDnsRecord entry. Generally, this is the value that you can search to discover this passiveDnsRecord value.
    *
    * @return Host|null The parentHost
    */
    public function getParentHost()
    {
        if (array_key_exists("parentHost", $this->_propDict)) {
            if (is_a($this->_propDict["parentHost"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Host") || is_null($this->_propDict["parentHost"])) {
                return $this->_propDict["parentHost"];
            } else {
                $this->_propDict["parentHost"] = new Host($this->_propDict["parentHost"]);
                return $this->_propDict["parentHost"];
            }
        }
        return null;
    }

    /**
    * Sets the parentHost
    * The parent host related to this passiveDnsRecord entry. Generally, this is the value that you can search to discover this passiveDnsRecord value.
    *
    * @param Host $val The parentHost
    *
    * @return PassiveDnsRecord
    */
    public function setParentHost($val)
    {
        $this->_propDict["parentHost"] = $val;
        return $this;
    }

}
