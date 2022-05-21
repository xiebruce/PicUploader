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
namespace Microsoft\Graph\Model;
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
}
