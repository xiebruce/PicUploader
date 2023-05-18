<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AggregatedInboundStatistics File
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
* AggregatedInboundStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AggregatedInboundStatistics extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the errors
    * The aggregate count of errors encountered by activities during this run.
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
    * The aggregate count of errors encountered by activities during this run.
    *
    * @param int $val The value of the errors
    *
    * @return AggregatedInboundStatistics
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
        return $this;
    }
    /**
    * Gets the groups
    * The aggregate count of active inbound groups processed during the run.
    *
    * @return int|null The groups
    */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
            return $this->_propDict["groups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groups
    * The aggregate count of active inbound groups processed during the run.
    *
    * @param int $val The value of the groups
    *
    * @return AggregatedInboundStatistics
    */
    public function setGroups($val)
    {
        $this->_propDict["groups"] = $val;
        return $this;
    }

    /**
    * Gets the matchedPeopleByRole
    * The aggregate count of active people matched to an Azure Active Directory user, by role.
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
    * The aggregate count of active people matched to an Azure Active Directory user, by role.
    *
    * @param IndustryDataRunRoleCountMetric $val The value to assign to the matchedPeopleByRole
    *
    * @return AggregatedInboundStatistics The AggregatedInboundStatistics
    */
    public function setMatchedPeopleByRole($val)
    {
        $this->_propDict["matchedPeopleByRole"] = $val;
         return $this;
    }
    /**
    * Gets the memberships
    * The aggregate count of active inbound memberships processed during the run.
    *
    * @return int|null The memberships
    */
    public function getMemberships()
    {
        if (array_key_exists("memberships", $this->_propDict)) {
            return $this->_propDict["memberships"];
        } else {
            return null;
        }
    }

    /**
    * Sets the memberships
    * The aggregate count of active inbound memberships processed during the run.
    *
    * @param int $val The value of the memberships
    *
    * @return AggregatedInboundStatistics
    */
    public function setMemberships($val)
    {
        $this->_propDict["memberships"] = $val;
        return $this;
    }
    /**
    * Gets the organizations
    * The aggregate count of active inbound organizations processed during the run.
    *
    * @return int|null The organizations
    */
    public function getOrganizations()
    {
        if (array_key_exists("organizations", $this->_propDict)) {
            return $this->_propDict["organizations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organizations
    * The aggregate count of active inbound organizations processed during the run.
    *
    * @param int $val The value of the organizations
    *
    * @return AggregatedInboundStatistics
    */
    public function setOrganizations($val)
    {
        $this->_propDict["organizations"] = $val;
        return $this;
    }
    /**
    * Gets the people
    * The aggregate count of active inbound people processed during the run.
    *
    * @return int|null The people
    */
    public function getPeople()
    {
        if (array_key_exists("people", $this->_propDict)) {
            return $this->_propDict["people"];
        } else {
            return null;
        }
    }

    /**
    * Sets the people
    * The aggregate count of active inbound people processed during the run.
    *
    * @param int $val The value of the people
    *
    * @return AggregatedInboundStatistics
    */
    public function setPeople($val)
    {
        $this->_propDict["people"] = $val;
        return $this;
    }

    /**
    * Gets the unmatchedPeopleByRole
    * The aggregate count of active people not matched to an Azure Active Directory user, by role.
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
    * The aggregate count of active people not matched to an Azure Active Directory user, by role.
    *
    * @param IndustryDataRunRoleCountMetric $val The value to assign to the unmatchedPeopleByRole
    *
    * @return AggregatedInboundStatistics The AggregatedInboundStatistics
    */
    public function setUnmatchedPeopleByRole($val)
    {
        $this->_propDict["unmatchedPeopleByRole"] = $val;
         return $this;
    }
    /**
    * Gets the warnings
    * The aggregate count of warnings generated by activities during this run.
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
    * The aggregate count of warnings generated by activities during this run.
    *
    * @param int $val The value of the warnings
    *
    * @return AggregatedInboundStatistics
    */
    public function setWarnings($val)
    {
        $this->_propDict["warnings"] = $val;
        return $this;
    }
}
