<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InboundActivityResults File
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
* InboundActivityResults class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InboundActivityResults extends IndustryDataActivityStatistics
{
    /**
    * Gets the errors
    * Number of errors encountered while processing the inbound flow.
    *
    * @return int|null The errors
    */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
            return $this->_propDict["errors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errors
    * Number of errors encountered while processing the inbound flow.
    *
    * @param int $val The value of the errors
    *
    * @return InboundActivityResults
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
        return $this;
    }

    /**
    * Gets the groups
    * Counts of active and inactive groups processed by the inbound flow.
    *
    * @return IndustryDataRunEntityCountMetric|null The groups
    */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
            if (is_a($this->_propDict["groups"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRunEntityCountMetric") || is_null($this->_propDict["groups"])) {
                return $this->_propDict["groups"];
            } else {
                $this->_propDict["groups"] = new IndustryDataRunEntityCountMetric($this->_propDict["groups"]);
                return $this->_propDict["groups"];
            }
        }
        return null;
    }

    /**
    * Sets the groups
    * Counts of active and inactive groups processed by the inbound flow.
    *
    * @param IndustryDataRunEntityCountMetric $val The value to assign to the groups
    *
    * @return InboundActivityResults The InboundActivityResults
    */
    public function setGroups($val)
    {
        $this->_propDict["groups"] = $val;
         return $this;
    }

    /**
    * Gets the matchedPeopleByRole
    * Number of people matched to an Azure Active Directory user, by role.
    *
    * @return IndustryDataRunRoleCountMetric|null The matchedPeopleByRole
    */
    public function getMatchedPeopleByRole()
    {
        if (array_key_exists("matchedPeopleByRole", $this->_propDict)) {
            if (is_a($this->_propDict["matchedPeopleByRole"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRunRoleCountMetric") || is_null($this->_propDict["matchedPeopleByRole"])) {
                return $this->_propDict["matchedPeopleByRole"];
            } else {
                $this->_propDict["matchedPeopleByRole"] = new IndustryDataRunRoleCountMetric($this->_propDict["matchedPeopleByRole"]);
                return $this->_propDict["matchedPeopleByRole"];
            }
        }
        return null;
    }

    /**
    * Sets the matchedPeopleByRole
    * Number of people matched to an Azure Active Directory user, by role.
    *
    * @param IndustryDataRunRoleCountMetric $val The value to assign to the matchedPeopleByRole
    *
    * @return InboundActivityResults The InboundActivityResults
    */
    public function setMatchedPeopleByRole($val)
    {
        $this->_propDict["matchedPeopleByRole"] = $val;
         return $this;
    }

    /**
    * Gets the memberships
    * Counts of active and inactive memberships processed by the inbound flow.
    *
    * @return IndustryDataRunEntityCountMetric|null The memberships
    */
    public function getMemberships()
    {
        if (array_key_exists("memberships", $this->_propDict)) {
            if (is_a($this->_propDict["memberships"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRunEntityCountMetric") || is_null($this->_propDict["memberships"])) {
                return $this->_propDict["memberships"];
            } else {
                $this->_propDict["memberships"] = new IndustryDataRunEntityCountMetric($this->_propDict["memberships"]);
                return $this->_propDict["memberships"];
            }
        }
        return null;
    }

    /**
    * Sets the memberships
    * Counts of active and inactive memberships processed by the inbound flow.
    *
    * @param IndustryDataRunEntityCountMetric $val The value to assign to the memberships
    *
    * @return InboundActivityResults The InboundActivityResults
    */
    public function setMemberships($val)
    {
        $this->_propDict["memberships"] = $val;
         return $this;
    }

    /**
    * Gets the organizations
    * Counts of active and inactive organizations processed by the inbound flow.
    *
    * @return IndustryDataRunEntityCountMetric|null The organizations
    */
    public function getOrganizations()
    {
        if (array_key_exists("organizations", $this->_propDict)) {
            if (is_a($this->_propDict["organizations"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRunEntityCountMetric") || is_null($this->_propDict["organizations"])) {
                return $this->_propDict["organizations"];
            } else {
                $this->_propDict["organizations"] = new IndustryDataRunEntityCountMetric($this->_propDict["organizations"]);
                return $this->_propDict["organizations"];
            }
        }
        return null;
    }

    /**
    * Sets the organizations
    * Counts of active and inactive organizations processed by the inbound flow.
    *
    * @param IndustryDataRunEntityCountMetric $val The value to assign to the organizations
    *
    * @return InboundActivityResults The InboundActivityResults
    */
    public function setOrganizations($val)
    {
        $this->_propDict["organizations"] = $val;
         return $this;
    }

    /**
    * Gets the people
    * Counts of active and inactive people processed by the inbound flow.
    *
    * @return IndustryDataRunEntityCountMetric|null The people
    */
    public function getPeople()
    {
        if (array_key_exists("people", $this->_propDict)) {
            if (is_a($this->_propDict["people"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRunEntityCountMetric") || is_null($this->_propDict["people"])) {
                return $this->_propDict["people"];
            } else {
                $this->_propDict["people"] = new IndustryDataRunEntityCountMetric($this->_propDict["people"]);
                return $this->_propDict["people"];
            }
        }
        return null;
    }

    /**
    * Sets the people
    * Counts of active and inactive people processed by the inbound flow.
    *
    * @param IndustryDataRunEntityCountMetric $val The value to assign to the people
    *
    * @return InboundActivityResults The InboundActivityResults
    */
    public function setPeople($val)
    {
        $this->_propDict["people"] = $val;
         return $this;
    }

    /**
    * Gets the unmatchedPeopleByRole
    * Number of people not matched to an Azure Active Directory user, by role.
    *
    * @return IndustryDataRunRoleCountMetric|null The unmatchedPeopleByRole
    */
    public function getUnmatchedPeopleByRole()
    {
        if (array_key_exists("unmatchedPeopleByRole", $this->_propDict)) {
            if (is_a($this->_propDict["unmatchedPeopleByRole"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRunRoleCountMetric") || is_null($this->_propDict["unmatchedPeopleByRole"])) {
                return $this->_propDict["unmatchedPeopleByRole"];
            } else {
                $this->_propDict["unmatchedPeopleByRole"] = new IndustryDataRunRoleCountMetric($this->_propDict["unmatchedPeopleByRole"]);
                return $this->_propDict["unmatchedPeopleByRole"];
            }
        }
        return null;
    }

    /**
    * Sets the unmatchedPeopleByRole
    * Number of people not matched to an Azure Active Directory user, by role.
    *
    * @param IndustryDataRunRoleCountMetric $val The value to assign to the unmatchedPeopleByRole
    *
    * @return InboundActivityResults The InboundActivityResults
    */
    public function setUnmatchedPeopleByRole($val)
    {
        $this->_propDict["unmatchedPeopleByRole"] = $val;
         return $this;
    }
    /**
    * Gets the warnings
    * Number of warnings encountered while processing the inbound flow.
    *
    * @return int|null The warnings
    */
    public function getWarnings()
    {
        if (array_key_exists("warnings", $this->_propDict)) {
            return $this->_propDict["warnings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the warnings
    * Number of warnings encountered while processing the inbound flow.
    *
    * @param int $val The value of the warnings
    *
    * @return InboundActivityResults
    */
    public function setWarnings($val)
    {
        $this->_propDict["warnings"] = $val;
        return $this;
    }
}
