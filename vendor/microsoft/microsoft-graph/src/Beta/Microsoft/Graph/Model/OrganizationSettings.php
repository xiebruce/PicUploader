<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationSettings File
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
* OrganizationSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationSettings extends Entity
{
    /**
    * Gets the microsoftApplicationDataAccess
    *
    * @return MicrosoftApplicationDataAccessSettings|null The microsoftApplicationDataAccess
    */
    public function getMicrosoftApplicationDataAccess()
    {
        if (array_key_exists("microsoftApplicationDataAccess", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftApplicationDataAccess"], "\Beta\Microsoft\Graph\Model\MicrosoftApplicationDataAccessSettings") || is_null($this->_propDict["microsoftApplicationDataAccess"])) {
                return $this->_propDict["microsoftApplicationDataAccess"];
            } else {
                $this->_propDict["microsoftApplicationDataAccess"] = new MicrosoftApplicationDataAccessSettings($this->_propDict["microsoftApplicationDataAccess"]);
                return $this->_propDict["microsoftApplicationDataAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the microsoftApplicationDataAccess
    *
    * @param MicrosoftApplicationDataAccessSettings $val The microsoftApplicationDataAccess
    *
    * @return OrganizationSettings
    */
    public function setMicrosoftApplicationDataAccess($val)
    {
        $this->_propDict["microsoftApplicationDataAccess"] = $val;
        return $this;
    }

    /**
    * Gets the itemInsights
    * Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization.
    *
    * @return InsightsSettings|null The itemInsights
    */
    public function getItemInsights()
    {
        if (array_key_exists("itemInsights", $this->_propDict)) {
            if (is_a($this->_propDict["itemInsights"], "\Beta\Microsoft\Graph\Model\InsightsSettings") || is_null($this->_propDict["itemInsights"])) {
                return $this->_propDict["itemInsights"];
            } else {
                $this->_propDict["itemInsights"] = new InsightsSettings($this->_propDict["itemInsights"]);
                return $this->_propDict["itemInsights"];
            }
        }
        return null;
    }

    /**
    * Sets the itemInsights
    * Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization.
    *
    * @param InsightsSettings $val The itemInsights
    *
    * @return OrganizationSettings
    */
    public function setItemInsights($val)
    {
        $this->_propDict["itemInsights"] = $val;
        return $this;
    }

    /**
    * Gets the peopleInsights
    * Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization.
    *
    * @return InsightsSettings|null The peopleInsights
    */
    public function getPeopleInsights()
    {
        if (array_key_exists("peopleInsights", $this->_propDict)) {
            if (is_a($this->_propDict["peopleInsights"], "\Beta\Microsoft\Graph\Model\InsightsSettings") || is_null($this->_propDict["peopleInsights"])) {
                return $this->_propDict["peopleInsights"];
            } else {
                $this->_propDict["peopleInsights"] = new InsightsSettings($this->_propDict["peopleInsights"]);
                return $this->_propDict["peopleInsights"];
            }
        }
        return null;
    }

    /**
    * Sets the peopleInsights
    * Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization.
    *
    * @param InsightsSettings $val The peopleInsights
    *
    * @return OrganizationSettings
    */
    public function setPeopleInsights($val)
    {
        $this->_propDict["peopleInsights"] = $val;
        return $this;
    }


     /**
     * Gets the profileCardProperties
    * Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization.
     *
     * @return array|null The profileCardProperties
     */
    public function getProfileCardProperties()
    {
        if (array_key_exists("profileCardProperties", $this->_propDict)) {
           return $this->_propDict["profileCardProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the profileCardProperties
    * Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization.
    *
    * @param ProfileCardProperty[] $val The profileCardProperties
    *
    * @return OrganizationSettings
    */
    public function setProfileCardProperties($val)
    {
        $this->_propDict["profileCardProperties"] = $val;
        return $this;
    }

}
