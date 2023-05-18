<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InboundFlow File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* InboundFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InboundFlow extends IndustryDataActivity
{
    /**
    * Gets the dataDomain
    * The broad category of data that this flow imports. The possible values are: educationRostering, unknownFutureValue.
    *
    * @return InboundDomain|null The dataDomain
    */
    public function getDataDomain()
    {
        if (array_key_exists("dataDomain", $this->_propDict)) {
            if (is_a($this->_propDict["dataDomain"], "\Beta\Microsoft\Graph\IndustryData\Model\InboundDomain") || is_null($this->_propDict["dataDomain"])) {
                return $this->_propDict["dataDomain"];
            } else {
                $this->_propDict["dataDomain"] = new InboundDomain($this->_propDict["dataDomain"]);
                return $this->_propDict["dataDomain"];
            }
        }
        return null;
    }

    /**
    * Sets the dataDomain
    * The broad category of data that this flow imports. The possible values are: educationRostering, unknownFutureValue.
    *
    * @param InboundDomain $val The dataDomain
    *
    * @return InboundFlow
    */
    public function setDataDomain($val)
    {
        $this->_propDict["dataDomain"] = $val;
        return $this;
    }

    /**
    * Gets the effectiveDateTime
    * The start of the time window when the flow is allowed to run. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The effectiveDateTime
    */
    public function getEffectiveDateTime()
    {
        if (array_key_exists("effectiveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["effectiveDateTime"], "\DateTime") || is_null($this->_propDict["effectiveDateTime"])) {
                return $this->_propDict["effectiveDateTime"];
            } else {
                $this->_propDict["effectiveDateTime"] = new \DateTime($this->_propDict["effectiveDateTime"]);
                return $this->_propDict["effectiveDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the effectiveDateTime
    * The start of the time window when the flow is allowed to run. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The effectiveDateTime
    *
    * @return InboundFlow
    */
    public function setEffectiveDateTime($val)
    {
        $this->_propDict["effectiveDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * The end of the time window when the flow is allowed to run. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * The end of the time window when the flow is allowed to run. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return InboundFlow
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the dataConnector
    * The data connector in the context of which this flow pulls in data from a source system.
    *
    * @return IndustryDataConnector|null The dataConnector
    */
    public function getDataConnector()
    {
        if (array_key_exists("dataConnector", $this->_propDict)) {
            if (is_a($this->_propDict["dataConnector"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataConnector") || is_null($this->_propDict["dataConnector"])) {
                return $this->_propDict["dataConnector"];
            } else {
                $this->_propDict["dataConnector"] = new IndustryDataConnector($this->_propDict["dataConnector"]);
                return $this->_propDict["dataConnector"];
            }
        }
        return null;
    }

    /**
    * Sets the dataConnector
    * The data connector in the context of which this flow pulls in data from a source system.
    *
    * @param IndustryDataConnector $val The dataConnector
    *
    * @return InboundFlow
    */
    public function setDataConnector($val)
    {
        $this->_propDict["dataConnector"] = $val;
        return $this;
    }

    /**
    * Gets the year
    * The year that the data brought in via this flow applies to.
    *
    * @return YearTimePeriodDefinition|null The year
    */
    public function getYear()
    {
        if (array_key_exists("year", $this->_propDict)) {
            if (is_a($this->_propDict["year"], "\Beta\Microsoft\Graph\IndustryData\Model\YearTimePeriodDefinition") || is_null($this->_propDict["year"])) {
                return $this->_propDict["year"];
            } else {
                $this->_propDict["year"] = new YearTimePeriodDefinition($this->_propDict["year"]);
                return $this->_propDict["year"];
            }
        }
        return null;
    }

    /**
    * Sets the year
    * The year that the data brought in via this flow applies to.
    *
    * @param YearTimePeriodDefinition $val The year
    *
    * @return InboundFlow
    */
    public function setYear($val)
    {
        $this->_propDict["year"] = $val;
        return $this;
    }

}
