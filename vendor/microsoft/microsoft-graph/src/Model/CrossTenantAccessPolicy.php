<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicy File
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
* CrossTenantAccessPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicy extends PolicyBase
{
    /**
    * Gets the default
    * Defines the default configuration for how your organization interacts with external Azure Active Directory organizations.
    *
    * @return CrossTenantAccessPolicyConfigurationDefault|null The default
    */
    public function getDefault()
    {
        if (array_key_exists("default", $this->_propDict)) {
            if (is_a($this->_propDict["default"], "\Microsoft\Graph\Model\CrossTenantAccessPolicyConfigurationDefault") || is_null($this->_propDict["default"])) {
                return $this->_propDict["default"];
            } else {
                $this->_propDict["default"] = new CrossTenantAccessPolicyConfigurationDefault($this->_propDict["default"]);
                return $this->_propDict["default"];
            }
        }
        return null;
    }

    /**
    * Sets the default
    * Defines the default configuration for how your organization interacts with external Azure Active Directory organizations.
    *
    * @param CrossTenantAccessPolicyConfigurationDefault $val The default
    *
    * @return CrossTenantAccessPolicy
    */
    public function setDefault($val)
    {
        $this->_propDict["default"] = $val;
        return $this;
    }


     /**
     * Gets the partners
    * Defines partner-specific configurations for external Azure Active Directory organizations.
     *
     * @return array|null The partners
     */
    public function getPartners()
    {
        if (array_key_exists("partners", $this->_propDict)) {
           return $this->_propDict["partners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the partners
    * Defines partner-specific configurations for external Azure Active Directory organizations.
    *
    * @param CrossTenantAccessPolicyConfigurationPartner[] $val The partners
    *
    * @return CrossTenantAccessPolicy
    */
    public function setPartners($val)
    {
        $this->_propDict["partners"] = $val;
        return $this;
    }

}
