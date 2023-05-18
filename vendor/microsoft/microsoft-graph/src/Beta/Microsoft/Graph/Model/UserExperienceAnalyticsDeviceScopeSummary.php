<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceScopeSummary File
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
* UserExperienceAnalyticsDeviceScopeSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceScopeSummary extends Entity
{
    /**
    * Gets the completedDeviceScopeIds
    * A collection of the user experience analytics device scope Unique Identifiers that are enabled and finished recalculating the report metric.
    *
    * @return string|null The completedDeviceScopeIds
    */
    public function getCompletedDeviceScopeIds()
    {
        if (array_key_exists("completedDeviceScopeIds", $this->_propDict)) {
            return $this->_propDict["completedDeviceScopeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedDeviceScopeIds
    * A collection of the user experience analytics device scope Unique Identifiers that are enabled and finished recalculating the report metric.
    *
    * @param string $val The value of the completedDeviceScopeIds
    *
    * @return UserExperienceAnalyticsDeviceScopeSummary
    */
    public function setCompletedDeviceScopeIds($val)
    {
        $this->_propDict["completedDeviceScopeIds"] = $val;
        return $this;
    }
    /**
    * Gets the insufficientDataDeviceScopeIds
    * A collection of user experience analytics device scope Unique Identitfiers that are enabled but there is insufficient data to calculate results.
    *
    * @return string|null The insufficientDataDeviceScopeIds
    */
    public function getInsufficientDataDeviceScopeIds()
    {
        if (array_key_exists("insufficientDataDeviceScopeIds", $this->_propDict)) {
            return $this->_propDict["insufficientDataDeviceScopeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the insufficientDataDeviceScopeIds
    * A collection of user experience analytics device scope Unique Identitfiers that are enabled but there is insufficient data to calculate results.
    *
    * @param string $val The value of the insufficientDataDeviceScopeIds
    *
    * @return UserExperienceAnalyticsDeviceScopeSummary
    */
    public function setInsufficientDataDeviceScopeIds($val)
    {
        $this->_propDict["insufficientDataDeviceScopeIds"] = $val;
        return $this;
    }
    /**
    * Gets the totalDeviceScopes
    * The total number of user experience analytics device scopes. Valid values -2147483648 to 2147483647
    *
    * @return int|null The totalDeviceScopes
    */
    public function getTotalDeviceScopes()
    {
        if (array_key_exists("totalDeviceScopes", $this->_propDict)) {
            return $this->_propDict["totalDeviceScopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalDeviceScopes
    * The total number of user experience analytics device scopes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the totalDeviceScopes
    *
    * @return UserExperienceAnalyticsDeviceScopeSummary
    */
    public function setTotalDeviceScopes($val)
    {
        $this->_propDict["totalDeviceScopes"] = $val;
        return $this;
    }
    /**
    * Gets the totalDeviceScopesEnabled
    * The total number of user experience analytics device scopes that are enabled. Valid values -2147483648 to 2147483647
    *
    * @return int|null The totalDeviceScopesEnabled
    */
    public function getTotalDeviceScopesEnabled()
    {
        if (array_key_exists("totalDeviceScopesEnabled", $this->_propDict)) {
            return $this->_propDict["totalDeviceScopesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalDeviceScopesEnabled
    * The total number of user experience analytics device scopes that are enabled. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the totalDeviceScopesEnabled
    *
    * @return UserExperienceAnalyticsDeviceScopeSummary
    */
    public function setTotalDeviceScopesEnabled($val)
    {
        $this->_propDict["totalDeviceScopesEnabled"] = $val;
        return $this;
    }
}
