<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YearTimePeriodDefinition File
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
* YearTimePeriodDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YearTimePeriodDefinition extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The name of the year. Maximum supported length is 100 characters.
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
    * The name of the year. Maximum supported length is 100 characters.
    *
    * @param string $val The displayName
    *
    * @return YearTimePeriodDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the endDate
    * The last day of the year using ISO 8601 format for date.
    *
    * @return \DateTime|null The endDate
    */
    public function getEndDate()
    {
        if (array_key_exists("endDate", $this->_propDict)) {
            if (is_a($this->_propDict["endDate"], "\DateTime") || is_null($this->_propDict["endDate"])) {
                return $this->_propDict["endDate"];
            } else {
                $this->_propDict["endDate"] = new \DateTime($this->_propDict["endDate"]);
                return $this->_propDict["endDate"];
            }
        }
        return null;
    }

    /**
    * Sets the endDate
    * The last day of the year using ISO 8601 format for date.
    *
    * @param \DateTime $val The endDate
    *
    * @return YearTimePeriodDefinition
    */
    public function setEndDate($val)
    {
        $this->_propDict["endDate"] = $val;
        return $this;
    }

    /**
    * Gets the startDate
    * The first day of the year using ISO 8601 format for date.
    *
    * @return \DateTime|null The startDate
    */
    public function getStartDate()
    {
        if (array_key_exists("startDate", $this->_propDict)) {
            if (is_a($this->_propDict["startDate"], "\DateTime") || is_null($this->_propDict["startDate"])) {
                return $this->_propDict["startDate"];
            } else {
                $this->_propDict["startDate"] = new \DateTime($this->_propDict["startDate"]);
                return $this->_propDict["startDate"];
            }
        }
        return null;
    }

    /**
    * Sets the startDate
    * The first day of the year using ISO 8601 format for date.
    *
    * @param \DateTime $val The startDate
    *
    * @return YearTimePeriodDefinition
    */
    public function setStartDate($val)
    {
        $this->_propDict["startDate"] = $val;
        return $this;
    }

    /**
    * Gets the year
    * A pointer to a year entry in the referenceDefinition collection.
    *
    * @return YearReferenceValue|null The year
    */
    public function getYear()
    {
        if (array_key_exists("year", $this->_propDict)) {
            if (is_a($this->_propDict["year"], "\Beta\Microsoft\Graph\IndustryData\Model\YearReferenceValue") || is_null($this->_propDict["year"])) {
                return $this->_propDict["year"];
            } else {
                $this->_propDict["year"] = new YearReferenceValue($this->_propDict["year"]);
                return $this->_propDict["year"];
            }
        }
        return null;
    }

    /**
    * Sets the year
    * A pointer to a year entry in the referenceDefinition collection.
    *
    * @param YearReferenceValue $val The year
    *
    * @return YearTimePeriodDefinition
    */
    public function setYear($val)
    {
        $this->_propDict["year"] = $val;
        return $this;
    }

}
