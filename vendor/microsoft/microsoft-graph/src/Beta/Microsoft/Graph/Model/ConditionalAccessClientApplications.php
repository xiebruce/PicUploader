<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessClientApplications File
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
* ConditionalAccessClientApplications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessClientApplications extends Entity
{
    /**
    * Gets the excludeServicePrincipals
    * Service principal IDs excluded from the policy scope.
    *
    * @return string|null The excludeServicePrincipals
    */
    public function getExcludeServicePrincipals()
    {
        if (array_key_exists("excludeServicePrincipals", $this->_propDict)) {
            return $this->_propDict["excludeServicePrincipals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeServicePrincipals
    * Service principal IDs excluded from the policy scope.
    *
    * @param string $val The value of the excludeServicePrincipals
    *
    * @return ConditionalAccessClientApplications
    */
    public function setExcludeServicePrincipals($val)
    {
        $this->_propDict["excludeServicePrincipals"] = $val;
        return $this;
    }
    /**
    * Gets the includeServicePrincipals
    * Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
    *
    * @return string|null The includeServicePrincipals
    */
    public function getIncludeServicePrincipals()
    {
        if (array_key_exists("includeServicePrincipals", $this->_propDict)) {
            return $this->_propDict["includeServicePrincipals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeServicePrincipals
    * Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
    *
    * @param string $val The value of the includeServicePrincipals
    *
    * @return ConditionalAccessClientApplications
    */
    public function setIncludeServicePrincipals($val)
    {
        $this->_propDict["includeServicePrincipals"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalFilter
    * Filter that defines the dynamic-servicePrincipal-syntax rule to include/exclude service principals. A filter can use custom security attributes to include/exclude service principals.
    *
    * @return ConditionalAccessFilter|null The servicePrincipalFilter
    */
    public function getServicePrincipalFilter()
    {
        if (array_key_exists("servicePrincipalFilter", $this->_propDict)) {
            if (is_a($this->_propDict["servicePrincipalFilter"], "\Beta\Microsoft\Graph\Model\ConditionalAccessFilter") || is_null($this->_propDict["servicePrincipalFilter"])) {
                return $this->_propDict["servicePrincipalFilter"];
            } else {
                $this->_propDict["servicePrincipalFilter"] = new ConditionalAccessFilter($this->_propDict["servicePrincipalFilter"]);
                return $this->_propDict["servicePrincipalFilter"];
            }
        }
        return null;
    }

    /**
    * Sets the servicePrincipalFilter
    * Filter that defines the dynamic-servicePrincipal-syntax rule to include/exclude service principals. A filter can use custom security attributes to include/exclude service principals.
    *
    * @param ConditionalAccessFilter $val The value to assign to the servicePrincipalFilter
    *
    * @return ConditionalAccessClientApplications The ConditionalAccessClientApplications
    */
    public function setServicePrincipalFilter($val)
    {
        $this->_propDict["servicePrincipalFilter"] = $val;
         return $this;
    }
}
