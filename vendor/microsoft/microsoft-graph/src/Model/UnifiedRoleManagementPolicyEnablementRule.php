<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyEnablementRule File
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
* UnifiedRoleManagementPolicyEnablementRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyEnablementRule extends UnifiedRoleManagementPolicyRule
{
    /**
    * Gets the enabledRules
    * The collection of rules that are enabled for this policy rule. For example, MultiFactorAuthentication, Ticketing, and Justification.
    *
    * @return string|null The enabledRules
    */
    public function getEnabledRules()
    {
        if (array_key_exists("enabledRules", $this->_propDict)) {
            return $this->_propDict["enabledRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabledRules
    * The collection of rules that are enabled for this policy rule. For example, MultiFactorAuthentication, Ticketing, and Justification.
    *
    * @param string $val The enabledRules
    *
    * @return UnifiedRoleManagementPolicyEnablementRule
    */
    public function setEnabledRules($val)
    {
        $this->_propDict["enabledRules"] = $val;
        return $this;
    }

}
