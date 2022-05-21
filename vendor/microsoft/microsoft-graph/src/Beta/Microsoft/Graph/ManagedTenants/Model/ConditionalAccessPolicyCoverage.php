<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessPolicyCoverage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* ConditionalAccessPolicyCoverage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessPolicyCoverage extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the conditionalAccessPolicyState
    * The state for the conditional access policy. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required. Read-only.
    *
    * @return string|null The conditionalAccessPolicyState
    */
    public function getConditionalAccessPolicyState()
    {
        if (array_key_exists("conditionalAccessPolicyState", $this->_propDict)) {
            return $this->_propDict["conditionalAccessPolicyState"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conditionalAccessPolicyState
    * The state for the conditional access policy. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required. Read-only.
    *
    * @param string $val The conditionalAccessPolicyState
    *
    * @return ConditionalAccessPolicyCoverage
    */
    public function setConditionalAccessPolicyState($val)
    {
        $this->_propDict["conditionalAccessPolicyState"] = $val;
        return $this;
    }

    /**
    * Gets the latestPolicyModifiedDateTime
    * The date and time the conditional access policy was last modified. Required. Read-only.
    *
    * @return \DateTime|null The latestPolicyModifiedDateTime
    */
    public function getLatestPolicyModifiedDateTime()
    {
        if (array_key_exists("latestPolicyModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["latestPolicyModifiedDateTime"], "\DateTime") || is_null($this->_propDict["latestPolicyModifiedDateTime"])) {
                return $this->_propDict["latestPolicyModifiedDateTime"];
            } else {
                $this->_propDict["latestPolicyModifiedDateTime"] = new \DateTime($this->_propDict["latestPolicyModifiedDateTime"]);
                return $this->_propDict["latestPolicyModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the latestPolicyModifiedDateTime
    * The date and time the conditional access policy was last modified. Required. Read-only.
    *
    * @param \DateTime $val The latestPolicyModifiedDateTime
    *
    * @return ConditionalAccessPolicyCoverage
    */
    public function setLatestPolicyModifiedDateTime($val)
    {
        $this->_propDict["latestPolicyModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the requiresDeviceCompliance
    * A flag indicating whether the conditional access policy requires device compliance. Required. Read-only.
    *
    * @return bool|null The requiresDeviceCompliance
    */
    public function getRequiresDeviceCompliance()
    {
        if (array_key_exists("requiresDeviceCompliance", $this->_propDict)) {
            return $this->_propDict["requiresDeviceCompliance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requiresDeviceCompliance
    * A flag indicating whether the conditional access policy requires device compliance. Required. Read-only.
    *
    * @param bool $val The requiresDeviceCompliance
    *
    * @return ConditionalAccessPolicyCoverage
    */
    public function setRequiresDeviceCompliance($val)
    {
        $this->_propDict["requiresDeviceCompliance"] = boolval($val);
        return $this;
    }

    /**
    * Gets the tenantDisplayName
    * The display name for the managed tenant. Required. Read-only.
    *
    * @return string|null The tenantDisplayName
    */
    public function getTenantDisplayName()
    {
        if (array_key_exists("tenantDisplayName", $this->_propDict)) {
            return $this->_propDict["tenantDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantDisplayName
    * The display name for the managed tenant. Required. Read-only.
    *
    * @param string $val The tenantDisplayName
    *
    * @return ConditionalAccessPolicyCoverage
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }

}
