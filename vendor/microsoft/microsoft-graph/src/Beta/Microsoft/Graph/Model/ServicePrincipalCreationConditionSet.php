<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipalCreationConditionSet File
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
* ServicePrincipalCreationConditionSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServicePrincipalCreationConditionSet extends Entity
{
    /**
    * Gets the applicationIds
    *
    * @return string|null The applicationIds
    */
    public function getApplicationIds()
    {
        if (array_key_exists("applicationIds", $this->_propDict)) {
            return $this->_propDict["applicationIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationIds
    *
    * @param string $val The applicationIds
    *
    * @return ServicePrincipalCreationConditionSet
    */
    public function setApplicationIds($val)
    {
        $this->_propDict["applicationIds"] = $val;
        return $this;
    }

    /**
    * Gets the applicationPublisherIds
    *
    * @return string|null The applicationPublisherIds
    */
    public function getApplicationPublisherIds()
    {
        if (array_key_exists("applicationPublisherIds", $this->_propDict)) {
            return $this->_propDict["applicationPublisherIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationPublisherIds
    *
    * @param string $val The applicationPublisherIds
    *
    * @return ServicePrincipalCreationConditionSet
    */
    public function setApplicationPublisherIds($val)
    {
        $this->_propDict["applicationPublisherIds"] = $val;
        return $this;
    }

    /**
    * Gets the applicationsFromVerifiedPublisherOnly
    *
    * @return bool|null The applicationsFromVerifiedPublisherOnly
    */
    public function getApplicationsFromVerifiedPublisherOnly()
    {
        if (array_key_exists("applicationsFromVerifiedPublisherOnly", $this->_propDict)) {
            return $this->_propDict["applicationsFromVerifiedPublisherOnly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationsFromVerifiedPublisherOnly
    *
    * @param bool $val The applicationsFromVerifiedPublisherOnly
    *
    * @return ServicePrincipalCreationConditionSet
    */
    public function setApplicationsFromVerifiedPublisherOnly($val)
    {
        $this->_propDict["applicationsFromVerifiedPublisherOnly"] = boolval($val);
        return $this;
    }

    /**
    * Gets the applicationTenantIds
    *
    * @return string|null The applicationTenantIds
    */
    public function getApplicationTenantIds()
    {
        if (array_key_exists("applicationTenantIds", $this->_propDict)) {
            return $this->_propDict["applicationTenantIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationTenantIds
    *
    * @param string $val The applicationTenantIds
    *
    * @return ServicePrincipalCreationConditionSet
    */
    public function setApplicationTenantIds($val)
    {
        $this->_propDict["applicationTenantIds"] = $val;
        return $this;
    }

    /**
    * Gets the certifiedApplicationsOnly
    *
    * @return bool|null The certifiedApplicationsOnly
    */
    public function getCertifiedApplicationsOnly()
    {
        if (array_key_exists("certifiedApplicationsOnly", $this->_propDict)) {
            return $this->_propDict["certifiedApplicationsOnly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certifiedApplicationsOnly
    *
    * @param bool $val The certifiedApplicationsOnly
    *
    * @return ServicePrincipalCreationConditionSet
    */
    public function setCertifiedApplicationsOnly($val)
    {
        $this->_propDict["certifiedApplicationsOnly"] = boolval($val);
        return $this;
    }

}
